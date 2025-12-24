<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sistem Kuesioner PDP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero { height: 100vh; display: flex; align-items: center; justify-content: center; background: #f0f2f5; }
        .card-menu { width: 300px; text-align: center; transition: 0.3s; cursor: pointer; }
        .card-menu:hover { transform: translateY(-5px); box-shadow: 0 10px 20px rgba(0,0,0,0.1); }
    </style>
</head>
<body>

<div class="hero">
    <div class="container text-center">
        <h1 class="mb-5 fw-bold text-primary">Sistem Kuesioner Pelindungan Data Pribadi</h1>
        
        <div class="row justify-content-center gap-4">
            <div class="col-md-4">
                <a href="{{ route('survey.index') }}" class="text-decoration-none">
                    <div class="card card-menu p-5 border-0 shadow-sm">
                        <div class="card-body">
                            <h1 class="display-4">📝</h1>
                            <h4 class="mt-3 text-dark">Isi Kuesioner</h4>
                            <p class="text-muted">Untuk Responden</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="{{ route('survey.results') }}" class="text-decoration-none">
                    <div class="card card-menu p-5 border-0 shadow-sm">
                        <div class="card-body">
                            <h1 class="display-4">📊</h1>
                            <h4 class="mt-3 text-dark">Lihat Data</h4>
                            <p class="text-muted">Untuk Peneliti / Admin</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

</body>
</html>