<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuesioner Kesadaran Pelindungan Data Pribadi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .form-section { background: white; padding: 30px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); margin-bottom: 25px; }
        .section-header { border-bottom: 2px solid #0d6efd; padding-bottom: 10px; margin-bottom: 20px; color: #0d6efd; }
        .question-text { font-weight: 500; margin-bottom: 10px; }
        .likert-scale { display: flex; justify-content: space-between; max-width: 400px; }
        .likert-option { text-align: center; }
    </style>
</head>
<body>

<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="fw-bold">Kuesioner Pelindungan Data Pribadi</h1>
        <p class="text-muted">Studi Kasus: Magister Keamanan Siber dan Forensik Digital</p>
    </div>

    @if(session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <form action="{{ route('survey.store') }}" method="POST">
        @csrf
        @if ($errors->any())
            <div class="alert alert-danger">
                <h4 class="alert-heading">Terdapat Kesalahan!</h4>
                <p>Mohon periksa kembali form Anda, pastikan semua pertanyaan bertanda wajib (*) sudah terisi.</p>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="form-section">
            <h3 class="section-header">I. Informasi Demografis</h3>
            
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Jenis Kelamin</label>
                    <select name="gender" class="form-select" required>
                        <option value="">Pilih...</option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                
                <div class="col-md-6 mb-3">
                    <label class="form-label">Rentang Usia</label>
                    <select name="age_range" class="form-select" required>
                        <option value="">Pilih...</option>
                        <option value="18-24 tahun">18-24 tahun</option>
                        <option value="25-34 tahun">25-34 tahun</option>
                        <option value="35-44 tahun">35-44 tahun</option>
                        <option value="45-54 tahun">45-54 tahun</option>
                        <option value="> 55 tahun">> 55 tahun</option>
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Pendidikan Terakhir</label>
                    <select name="education" class="form-select" required>
                        <option value="">Pilih...</option>
                        <option value="SMA/SMK">SMA/SMK atau sederajat</option>
                        <option value="Diploma">Diploma (D1-D4)</option>
                        <option value="Sarjana">Sarjana (S1)</option>
                        <option value="Pasca Sarjana">Pasca Sarjana (S2/S3)</option>
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Aktivitas Utama</label>
                    <select name="occupation" class="form-select" required>
                        <option value="">Pilih...</option>
                        <option value="Mahasiswa">Mahasiswa</option>
                        <option value="Pemerintahan">Pemerintahan (PNS/ASN/BUMN)</option>
                        <option value="Swasta">Swasta</option>
                        <option value="Wirausaha">Wirausaha</option>
                        <option value="Tidak Bekerja">Tidak bekerja saat ini</option>
                    </select>
                </div>

                <div class="col-md-12 mb-3">
                    <label class="form-label">Provinsi Domisili</label>
                    <input type="text" name="province" class="form-control" placeholder="Contoh: Jawa Barat, DKI Jakarta" required>
                </div>
            </div>

            <hr>

            <div class="mb-3">
                <label class="form-label fw-bold">Apakah Anda pernah mengikuti pelatihan terkait PDP/Keamanan Siber?</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="has_training" id="checkTraining" value="1">
                    <label class="form-check-label" for="checkTraining">Ya, Pernah</label>
                </div>
            </div>

            <div id="trainingDetails" class="bg-light p-3 border rounded d-none">
                <div class="mb-2">
                    <label class="form-label">Judul Pelatihan</label>
                    <input type="text" name="training_title" class="form-control">
                </div>
                <div class="mb-2">
                    <label class="form-label">Penyelenggara</label>
                    <input type="text" name="training_organizer" class="form-control">
                </div>
                <div class="mb-2">
                    <label class="form-label">Waktu (Bulan & Tahun)</label>
                    <input type="text" name="training_date" class="form-control" placeholder="Contoh: Januari 2024">
                </div>
            </div>
        </div>

        <div class="form-section">
            <h3 class="section-header">Bagian A - Sikap (Attitude)</h3>
            <div class="alert alert-info">
                <strong>Petunjuk:</strong> Pilih angka 1 (Sangat Tidak Setuju) sampai 5 (Sangat Setuju).
            </div>

            @foreach($attitude_questions as $code => $text)
            <div class="mb-4 border-bottom pb-3">
                <p class="question-text">{{ $code }}. {{ $text }}</p>
                <div class="d-flex flex-wrap gap-3">
                    @for($i = 1; $i <= 5; $i++)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answers[{{ $code }}]" id="{{ $code }}_{{ $i }}" value="{{ $i }}" required>
                        <label class="form-check-label" for="{{ $code }}_{{ $i }}">
                            {{ $i }} 
                            @if($i==1) <span class="text-muted small">(STS)</span> @endif
                            @if($i==5) <span class="text-muted small">(SS)</span> @endif
                        </label>
                    </div>
                    @endfor
                </div>
            </div>
            @endforeach
        </div>

        <div class="form-section">
            <h3 class="section-header">Bagian B - Pengetahuan (Knowledge)</h3>
            
            @foreach($knowledge_questions as $code => $item)
            <div class="card mb-3 border-0">
                <div class="card-body px-0">
                    <p class="question-text">{{ $code }}. {{ $item['question'] }}</p>
                    @foreach($item['options'] as $optKey => $optText)
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="answers[{{ $code }}]" id="{{ $code }}_{{ $optKey }}" value="{{ $optKey }}" required>
                        <label class="form-check-label" for="{{ $code }}_{{ $optKey }}">
                            <strong>{{ $optKey }}.</strong> {{ $optText }}
                        </label>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>

        <div class="form-section">
            <h3 class="section-header">Bagian SJT - Studi Kasus</h3>
            <p class="text-muted">Pilihlah tindakan yang paling tepat berdasarkan skenario yang diberikan.</p>

            @foreach($sjt_questions as $code => $item)
            <div class="card mb-4 bg-light border-0 rounded-3">
                <div class="card-body">
                    <p class="question-text text-dark">{{ $code }}. {{ $item['question'] }}</p>
                    <hr>
                    <div class="bg-white p-3 rounded">
                        @foreach($item['options'] as $optKey => $optText)
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="answers[{{ $code }}]" id="{{ $code }}_{{ $optKey }}" value="{{ $optKey }}" required>
                            <label class="form-check-label" for="{{ $code }}_{{ $optKey }}">
                                <strong>{{ $optKey }}.</strong> {{ $optText }}
                            </label>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="form-section">
            <h3 class="section-header">Bagian C - Keterampilan (Skills)</h3>
            <p class="text-muted">Pilihlah urutan langkah yang paling benar.</p>
            
            @foreach($skills_questions as $code => $item)
            <div class="mb-4 border-bottom pb-3">
                <p class="question-text">{{ $code }}. {{ $item['question'] }}</p>
                @foreach($item['options'] as $optKey => $optText)
                <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="answers[{{ $code }}]" id="{{ $code }}_{{ $optKey }}" value="{{ $optKey }}" required>
                    <label class="form-check-label" for="{{ $code }}_{{ $optKey }}">
                        <strong>{{ $optKey }}.</strong> {{ $optText }}
                    </label>
                </div>
                @endforeach
            </div>
            @endforeach
        </div>

        <div class="d-grid gap-2 mb-5">
            <button type="submit" class="btn btn-primary btn-lg p-3 fw-bold">KIRIM JAWABAN</button>
        </div>

    </form>
</div>

<script>
    const checkbox = document.getElementById('checkTraining');
    const details = document.getElementById('trainingDetails');

    checkbox.addEventListener('change', function() {
        if(this.checked) {
            details.classList.remove('d-none');
        } else {
            details.classList.add('d-none');
        }
    });
</script>

</body>
</html>