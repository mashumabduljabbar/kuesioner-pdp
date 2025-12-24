<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Laporan Responden #{{ $respondent->id }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        .card { border: none; border-radius: 12px; }
        .shadow-sm { box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important; }
        .answer-box { background: #ffffff; padding: 15px; border-left: 5px solid #dee2e6; margin-bottom: 15px; border-radius: 8px; }
        .border-success { border-left-color: #198754 !important; }
        .border-danger { border-left-color: #dc3545 !important; }
        .border-primary { border-left-color: #0d6efd !important; }
        .progress { height: 8px; margin-top: 5px; margin-bottom: 5px; }
        .sticky-summary { position: sticky; top: 20px; }
    </style>
</head>
<body>

<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold">Detail Hasil Kuesioner</h2>
            <p class="text-muted">Responden ID: #{{ $respondent->id }} | Selesai pada: {{ $respondent->created_at->format('d M Y, H:i') }}</p>
        </div>
        <a href="{{ route('survey.results') }}" class="btn btn-secondary px-4 shadow-sm">
            &larr; Kembali ke Daftar
        </a>
    </div>

    @php
        $maxA = 80; $maxK = 16; $maxS = 16; $maxP = 16; $maxTotal = 128;
        $percA = ($respondent->score_attitude / $maxA) * 100;
        $percK = ($respondent->score_knowledge / $maxK) * 100;
        $percS = ($respondent->score_sjt / $maxS) * 100;
        $percP = ($respondent->score_skills / $maxP) * 100;
        $percTotal = ($respondent->total_score / $maxTotal) * 100;

        $likertMap = [
            '1' => 'Sangat Tidak Setuju', '2' => 'Tidak Setuju', '3' => 'Ragu-ragu / Netral',
            '4' => 'Setuju', '5' => 'Sangat Setuju'
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
                        <div class="progress bg-white bg-opacity-25 mt-3">
                            <div class="progress-bar bg-white" style="width: {{ $percTotal }}%"></div>
                        </div>
                    </div>
                </div>

                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h6 class="fw-bold mb-3 border-bottom pb-2">Skor per Kategori</h6>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between small"><span>Sikap</span><strong>{{ $respondent->score_attitude }}/{{ $maxA }}</strong></div>
                            <div class="progress"><div class="progress-bar bg-info" style="width: {{ $percA }}%"></div></div>
                        </div>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between small"><span>Pengetahuan</span><strong>{{ $respondent->score_knowledge }}/{{ $maxK }}</strong></div>
                            <div class="progress"><div class="progress-bar bg-success" style="width: {{ $percK }}%"></div></div>
                        </div>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between small"><span>Keputusan (SJT)</span><strong>{{ $respondent->score_sjt }}/{{ $maxS }}</strong></div>
                            <div class="progress"><div class="progress-bar bg-warning" style="width: {{ $percS }}%"></div></div>
                        </div>
                        <div class="mb-0">
                            <div class="d-flex justify-content-between small"><span>Keterampilan</span><strong>{{ $respondent->score_skills }}/{{ $maxP }}</strong></div>
                            <div class="progress"><div class="progress-bar bg-danger" style="width: {{ $percP }}%"></div></div>
                        </div>
                    </div>
                </div>

                <div class="card shadow-sm">
                    <div class="card-body">
                        <h6 class="fw-bold mb-3 border-bottom pb-2">Profil Responden</h6>
                        <table class="table table-sm table-borderless mb-3 small">
                            <tr><td class="text-muted">Gender:</td><td class="fw-bold text-end">{{ $respondent->gender }}</td></tr>
                            <tr><td class="text-muted">Usia:</td><td class="fw-bold text-end">{{ $respondent->age_range }}</td></tr>
                            <tr><td class="text-muted">Pekerjaan:</td><td class="fw-bold text-end">{{ $respondent->occupation }}</td></tr>
                            <tr><td class="text-muted">Provinsi:</td><td class="fw-bold text-end">{{ $respondent->province }}</td></tr>
                        </table>

                        <h6 class="fw-bold mb-2 border-bottom pb-2 small">Riwayat Pelatihan PDP</h6>
                        @if($respondent->has_training)
                            <div class="p-2 bg-light rounded border small">
                                <div><strong class="text-primary">Judul:</strong> {{ $respondent->training_title }}</div>
                                <div><strong class="text-primary">Penyelenggara:</strong> {{ $respondent->training_organizer }}</div>
                                <div><strong class="text-primary">Waktu:</strong> {{ $respondent->training_date }}</div>
                            </div>
                        @else
                            <div class="alert alert-light border small py-2 mb-0">Belum pernah mengikuti pelatihan.</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="card shadow-sm">
                <div class="card-header bg-white py-3">
                    <h5 class="mb-0 fw-bold text-primary">Analisis Butir Jawaban</h5>
                </div>
                <div class="card-body bg-light">
                    @foreach($respondent->answers as $ans)
                        @php
                            $code = $ans->question_code;
                            $userVal = $ans->answer_value;
                            $isCorrect = false; $key = null; $displayText = $userVal;

                            if(str_starts_with($code, 'A')) {
                                $displayText = $likertMap[$userVal] ?? $userVal;
                                $boxClass = 'border-primary';
                            } else {
                                if(str_starts_with($code, 'K')) $key = config("questions.knowledge.$code.correct_answer");
                                elseif(str_starts_with($code, 'SJT')) $key = config("questions.sjt.$code.correct_answer");
                                elseif(str_starts_with($code, 'P')) $key = config("questions.skills.$code.correct_answer");
                                
                                $isCorrect = ($userVal == $key);
                                $boxClass = $isCorrect ? 'border-success' : 'border-danger';
                            }
                        @endphp

                        <div class="answer-box {{ $boxClass }}">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <span class="badge bg-secondary opacity-75">{{ $code }}</span>
                                @if(!str_starts_with($code, 'A'))
                                    @if($isCorrect)
                                        <span class="badge bg-success">Benar (+1)</span>
                                    @else
                                        <span class="badge bg-danger">Salah (Kunci: {{ $key }})</span>
                                    @endif
                                @else
                                    <span class="text-primary small fw-bold">Skor: {{ $userVal }}</span>
                                @endif
                            </div>
                            <div class="ps-1">
                                <p class="text-muted small mb-1">Jawaban:</p>
                                <h6 class="fw-bold {{ !str_starts_with($code, 'A') && !$isCorrect ? 'text-danger' : '' }}">
                                    {{ $displayText }}
                                </h6>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>