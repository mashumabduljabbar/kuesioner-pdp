<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuesioner Kesadaran Pelindungan Data Pribadi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; font-family: 'Segoe UI', sans-serif; }
        .form-section { background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); margin-bottom: 25px; }
        .section-header { border-bottom: 3px solid #0d6efd; padding-bottom: 10px; margin-bottom: 25px; color: #0d6efd; font-weight: bold; }
        .question-text { font-weight: 500; margin-bottom: 12px; display: block; }
        #surveyContent { transition: opacity 0.5s ease; opacity: 0.1; pointer-events: none; }
        .sticky-header { position: sticky; top: 0; z-index: 1000; background: #f8f9fa; padding: 10px 0; }
    </style>
</head>
<body>

<div class="modal fade" id="consentModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg">
            <div class="modal-header bg-primary text-white text-center">
                <h5 class="modal-title w-100">LEMBAR PERSETUJUAN PARTISIPASI</h5>
            </div>
            <div class="modal-body p-4 text-dark">
                <div class="text-center mb-4">
                    <h5 class="fw-bold">Penelitian Magister Keamanan Siber dan Forensik Digital</h5>
                    <p class="text-muted small">Universitas Telkom</p>
                </div>
                <div class="bg-light p-3 rounded border mb-3" style="max-height: 250px; overflow-y: auto; text-align: justify;">
                    <p>Halo, saya <strong>Stefanus Indra Karisoh</strong>.</p>
                    <p>Saya mengundang Anda untuk berpartisipasi dalam penelitian mengenai analisis kesadaran pelindungan data pribadi. Partisipasi Anda bersifat sukarela tanpa paksaan.</p>
                    <p><strong>Kerahasiaan:</strong> Seluruh identitas Anda tidak akan dipublikasikan. Data jawaban akan diolah secara anonim untuk kepentingan akademis saja.</p>
                    <p>Dengan menekan tombol setuju di bawah, Anda menyatakan setuju untuk memberikan informasi secara jujur dan memberikan izin kepada peneliti untuk mengolah data tersebut.</p>
                </div>
                <div class="form-check p-2">
                    <input class="form-check-input ms-0" type="checkbox" id="checkAgreeModal">
                    <label class="form-check-label ms-2 fw-bold" for="checkAgreeModal">
                        Saya bersedia berpartisipasi dalam penelitian ini secara sukarela. *
                    </label>
                </div>
            </div>
            <div class="modal-footer border-0">
                <a href="/" class="btn btn-outline-secondary px-4">Batal & Keluar</a>
                <button type="button" class="btn btn-primary px-5 fw-bold" id="btnStartSurvey" disabled>Lanjutkan ke Kuesioner</button>
            </div>
        </div>
    </div>
</div>

<div id="surveyContent" class="container py-5">
    <div class="text-center mb-5">
        <h1 class="fw-bold text-primary">Kuesioner Pelindungan Data Pribadi</h1>
        <p class="text-muted">Pastikan semua pertanyaan diisi dengan benar sesuai pemahaman Anda.</p>
    </div>

    <form action="{{ route('survey.store') }}" method="POST">
        @csrf
        <input type="hidden" name="is_agreed" value="1">

        <div class="form-section shadow-sm">
            <h3 class="section-header">I. Informasi Demografis</h3>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Jenis Kelamin *</label>
                    <select name="gender" class="form-select" required>
                        <option value="">Pilih...</option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Rentang Usia *</label>
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
                    <label class="form-label fw-bold">Pendidikan Terakhir *</label>
                    <select name="education" class="form-select" required>
                        <option value="">Pilih...</option>
                        <option value="SMA/SMK">SMA/SMK atau sederajat</option>
                        <option value="Diploma">Diploma (D1-D4)</option>
                        <option value="Sarjana">Sarjana (S1)</option>
                        <option value="Pasca Sarjana">Pasca Sarjana (S2/S3)</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Aktivitas Utama *</label>
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
                    <label class="form-label fw-bold">Provinsi Domisili *</label>
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
                <div class="mb-2"><label class="form-label">Judul Pelatihan</label><input type="text" name="training_title" class="form-control"></div>
                <div class="mb-2"><label class="form-label">Penyelenggara</label><input type="text" name="training_organizer" class="form-control"></div>
                <div class="mb-2"><label class="form-label">Waktu</label><input type="text" name="training_date" class="form-control" placeholder="Bulan/Tahun"></div>
            </div>
        </div>

        <div class="form-section">
            <h3 class="section-header">II. Sikap (Attitude)</h3>
            <div class="alert alert-info py-2 small">Pilih angka 1 (Sangat Tidak Setuju) sampai 5 (Sangat Setuju)</div>
            @foreach($attitude_questions as $code => $text)
            <div class="mb-4 border-bottom pb-3">
                <label class="question-text">{{ $code }}. {{ $text }}</label>
                <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
                    <span class="text-danger small">STS</span>
                    @for($i = 1; $i <= 5; $i++)
                    <div class="form-check form-check-inline text-center mx-0">
                        <input class="form-check-input float-none mx-auto" type="radio" name="answers[{{ $code }}]" value="{{ $i }}" required>
                        <div class="small">{{ $i }}</div>
                    </div>
                    @endfor
                    <span class="text-success small">SS</span>
                </div>
            </div>
            @endforeach
        </div>

        <div class="form-section">
            <h3 class="section-header">III. Pengetahuan (Knowledge)</h3>
            @foreach($knowledge_questions as $code => $item)
            <div class="mb-4 border-bottom pb-3">
                <label class="question-text">{{ $code }}. {{ $item['question'] }}</label>
                @foreach($item['options'] as $optKey => $optText)
                <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="answers[{{ $code }}]" value="{{ $optKey }}" required>
                    <label class="form-check-label"><strong>{{ $optKey }}.</strong> {{ $optText }}</label>
                </div>
                @endforeach
            </div>
            @endforeach
        </div>

        <div class="form-section">
            <h3 class="section-header">IV. Keputusan (SJT)</h3>
            @foreach($sjt_questions as $code => $item)
            <div class="mb-4 border-bottom pb-3">
                <label class="question-text fw-bold">{{ $code }}. {{ $item['question'] }}</label>
                @foreach($item['options'] as $optKey => $optText)
                <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="answers[{{ $code }}]" value="{{ $optKey }}" required>
                    <label class="form-check-label"><strong>{{ $optKey }}.</strong> {{ $optText }}</label>
                </div>
                @endforeach
            </div>
            @endforeach
        </div>

        <div class="form-section">
            <h3 class="section-header">V. Keterampilan (Skills)</h3>
            @foreach($skills_questions as $code => $item)
            <div class="mb-4 border-bottom pb-3">
                <label class="question-text">{{ $code }}. {{ $item['question'] }}</label>
                @foreach($item['options'] as $optKey => $optText)
                <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="answers[{{ $code }}]" value="{{ $optKey }}" required>
                    <label class="form-check-label"><strong>{{ $optKey }}.</strong> {{ $optText }}</label>
                </div>
                @endforeach
            </div>
            @endforeach
        </div>

        <div class="d-grid gap-2 mb-5">
            <button type="submit" class="btn btn-primary btn-lg p-3 fw-bold shadow">KIRIM SEMUA JAWABAN</button>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Otomatis munculkan Pop-up
        const consentModal = new bootstrap.Modal(document.getElementById('consentModal'));
        consentModal.show();

        const checkModal = document.getElementById('checkAgreeModal');
        const btnStart = document.getElementById('btnStartSurvey');
        const content = document.getElementById('surveyContent');

        // Tombol Start aktif jika dicentang
        checkModal.addEventListener('change', function() {
            btnStart.disabled = !this.checked;
        });

        // Buka survey saat klik mulai
        btnStart.addEventListener('click', function() {
            consentModal.hide();
            content.style.opacity = "1";
            content.style.pointerEvents = "auto";
            window.scrollTo(0, 0);
        });

        // Toggle Pelatihan
        const checkTraining = document.getElementById('checkTraining');
        const trainingDetails = document.getElementById('trainingDetails');
        checkTraining.addEventListener('change', function() {
            trainingDetails.classList.toggle('d-none', !this.checked);
        });
    });
</script>

</body>
</html>