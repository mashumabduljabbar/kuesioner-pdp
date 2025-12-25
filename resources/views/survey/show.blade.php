<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Laporan Responden #{{ $respondent->id }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; font-family: 'Segoe UI', sans-serif; }
        .card { border: none; border-radius: 12px; }
        .shadow-sm { box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important; }
        .answer-box { 
            background: #ffffff; 
            padding: 20px; 
            border-left: 5px solid #dee2e6; 
            margin-bottom: 20px; 
            border-radius: 8px; 
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }
        .border-success { border-left-color: #198754 !important; }
        .border-danger { border-left-color: #dc3545 !important; }
        .border-primary { border-left-color: #0d6efd !important; }
        .sticky-summary { position: sticky; top: 20px; }
        .q-text { font-size: 1.05rem; font-weight: 500; color: #2c3e50; margin-bottom: 10px; display: block;}
    </style>
</head>
<body>

<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold">Detail Hasil Kuesioner</h2>
            <p class="text-muted">Responden ID: #{{ $respondent->id }} | Waktu: {{ $respondent->created_at->format('d M Y, H:i') }}</p>
        </div>
        <a href="{{ route('survey.results') }}" class="btn btn-secondary px-4 shadow-sm">
            &larr; Kembali ke Daftar
        </a>
    </div>

    @php
        // --- 1. CONFIG & CALCULATIONS ---
        $maxA = 80; $maxK = 16; $maxS = 16; $maxP = 16; $maxTotal = 128;
        
        $percA = ($respondent->score_attitude / $maxA) * 100;
        $percK = ($respondent->score_knowledge / $maxK) * 100;
        $percS = ($respondent->score_sjt / $maxS) * 100;
        $percP = ($respondent->score_skills / $maxP) * 100;
        $percTotal = ($respondent->total_score / $maxTotal) * 100;

        // Kamus Mapping Likert
        $likertMap = [
            '1' => 'Sangat Tidak Setuju',
            '2' => 'Tidak Setuju',
            '3' => 'Ragu-ragu / Netral',
            '4' => 'Setuju',
            '5' => 'Sangat Setuju'
        ];
    @endphp

    <div class="row">
        <div class="col-lg-4">
            <div class="sticky-summary">
                <div class="card bg-primary text-white shadow-sm mb-4">
                    <div class="card-body text-center p-4">
                        <h6 class="text-uppercase opacity-75">Total Skor Kesadaran</h6>
                        <h1 class="display-4 fw-bold mb-0">{{ $respondent->total_score }}<span class="fs-4">/{{ $maxTotal }}</span></h1>
                        <h4 class="mt-2">{{ number_format($percTotal, 1) }}%</h4>
                        <div class="progress bg-white bg-opacity-25 mt-3" style="height: 6px;">
                            <div class="progress-bar bg-white" style="width: {{ $percTotal }}%"></div>
                        </div>
                    </div>
                </div>

                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h6 class="fw-bold mb-3 border-bottom pb-2">Rincian Skor</h6>
                        
                        <div class="mb-3">
                            <div class="d-flex justify-content-between small"><span>Sikap (Attitude)</span><strong>{{ $respondent->score_attitude }}</strong></div>
                            <div class="progress" style="height:6px"><div class="progress-bar bg-info" style="width: {{ $percA }}%"></div></div>
                        </div>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between small"><span>Pengetahuan (Knowledge)</span><strong>{{ $respondent->score_knowledge }}</strong></div>
                            <div class="progress" style="height:6px"><div class="progress-bar bg-success" style="width: {{ $percK }}%"></div></div>
                        </div>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between small"><span>Studi Kasus (SJT)</span><strong>{{ $respondent->score_sjt }}</strong></div>
                            <div class="progress" style="height:6px"><div class="progress-bar bg-warning" style="width: {{ $percS }}%"></div></div>
                        </div>
                        <div>
                            <div class="d-flex justify-content-between small"><span>Keterampilan (Skills)</span><strong>{{ $respondent->score_skills }}</strong></div>
                            <div class="progress" style="height:6px"><div class="progress-bar bg-danger" style="width: {{ $percP }}%"></div></div>
                        </div>
                    </div>
                </div>

                <div class="card shadow-sm">
                    <div class="card-body">
                        <h6 class="fw-bold mb-3 border-bottom pb-2">Profil Responden</h6>
                        <table class="table table-sm table-borderless mb-2 small">
                            <tr><td class="text-muted">Gender:</td><td class="fw-bold text-end">{{ $respondent->gender }}</td></tr>
                            <tr><td class="text-muted">Usia:</td><td class="fw-bold text-end">{{ $respondent->age_range }}</td></tr>
                            <tr><td class="text-muted">Pekerjaan:</td><td class="fw-bold text-end">{{ $respondent->occupation }}</td></tr>
                            <tr><td class="text-muted">Pendidikan:</td><td class="fw-bold text-end">{{ $respondent->education }}</td></tr>
                            <tr><td class="text-muted">Provinsi:</td><td class="fw-bold text-end">{{ $respondent->province }}</td></tr>
                        </table>

                        <h6 class="fw-bold mb-2 pt-2 border-top small">Riwayat Pelatihan</h6>
                        @if($respondent->has_training)
                            <div class="p-2 bg-light rounded border small">
                                <div><span class="fw-bold text-primary">Topik:</span> {{ $respondent->training_title }}</div>
                                <div><span class="fw-bold text-primary">Oleh:</span> {{ $respondent->training_organizer }}</div>
                                <div><span class="fw-bold text-primary">Waktu:</span> {{ $respondent->training_date }}</div>
                            </div>
                        @else
                            <div class="alert alert-secondary py-2 small mb-0">Belum pernah mengikuti pelatihan.</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="card shadow-sm">
                <div class="card-header bg-white py-3">
                    <h5 class="mb-0 fw-bold text-primary">Analisis Jawaban Per Soal</h5>
                </div>
                <div class="card-body bg-light">
                    @foreach($respondent->answers as $ans)
                        @php
                            $code = $ans->question_code;
                            $userVal = $ans->answer_value;
                            
                            $questionText = "Pertanyaan tidak ditemukan";
                            $isCorrect = false;
                            $correctKey = null;
                            $displayAnswer = $userVal;
                            $boxClass = "border-secondary";
                            $categoryLabel = "";

                            // --- LOGIKA MAPPING DATA ---
                            if (str_starts_with($code, 'A')) {
                                // 1. BAGIAN SIKAP (A)
                                $categoryLabel = "SIKAP";
                                $questionText = config("questions.attitude.$code", "Teks soal tidak ditemukan");
                                $displayAnswer = $likertMap[$userVal] ?? "Skor: $userVal"; // Ubah 5 jadi Sangat Setuju
                                $boxClass = "border-primary"; // Warna Biru
                            
                            } elseif (str_starts_with($code, 'K')) {
                                // 2. BAGIAN PENGETAHUAN (K/B)
                                $categoryLabel = "PENGETAHUAN";
                                $questionText = config("questions.knowledge.$code.question");
                                $correctKey = config("questions.knowledge.$code.correct_answer");
                                $isCorrect = ($userVal == $correctKey);
                                $boxClass = $isCorrect ? "border-success" : "border-danger";

                            } elseif (str_starts_with($code, 'SJT')) {
                                // 3. BAGIAN SJT
                                $categoryLabel = "STUDI KASUS";
                                $questionText = config("questions.sjt.$code.question");
                                $correctKey = config("questions.sjt.$code.correct_answer");
                                $isCorrect = ($userVal == $correctKey);
                                $boxClass = $isCorrect ? "border-success" : "border-danger";

                            } elseif (str_starts_with($code, 'P')) {
                                // 4. BAGIAN SKILLS (P/C)
                                $categoryLabel = "KETERAMPILAN";
                                $questionText = config("questions.skills.$code.question");
                                $correctKey = config("questions.skills.$code.correct_answer");
                                $isCorrect = ($userVal == $correctKey);
                                $boxClass = $isCorrect ? "border-success" : "border-danger";
                            }
                        @endphp

                        <div class="answer-box {{ $boxClass }}">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="badge bg-secondary">{{ $code }} - {{ $categoryLabel }}</span>
                                
                                {{-- Badge Status Jawaban --}}
                                @if(str_starts_with($code, 'A'))
                                    <span class="badge bg-info text-dark">Poin: {{ $userVal }}</span>
                                @else
                                    @if($isCorrect)
                                        <span class="badge bg-success">✔ Benar (+1)</span>
                                    @else
                                        <span class="badge bg-danger">✘ Salah (Kunci: {{ $correctKey }})</span>
                                    @endif
                                @endif
                            </div>

                            {{-- Teks Pertanyaan --}}
                            <span class="q-text">{{ $questionText }}</span>

                            <hr style="opacity: 0.1">

                            {{-- Jawaban User --}}
                            <div class="d-flex align-items-center">
                                <small class="text-muted me-2">Jawaban Responden:</small>
                                <strong class="fs-6 {{ $isCorrect ? 'text-success' : (str_starts_with($code, 'A') ? 'text-primary' : 'text-danger') }}">
                                    {{ $displayAnswer }}
                                </strong>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>