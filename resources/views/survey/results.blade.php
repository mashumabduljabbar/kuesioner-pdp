<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Responden</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Data Masuk Responden</h2>
        <a href="{{ route('home') }}" class="btn btn-secondary">Kembali ke Menu</a>
    </div>

    <div class="card shadow border-0">
        <div class="card-body">
            <div class="table-responsive">
                <table id="respondentTable" class="table table-hover table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Tanggal</th>
                        <th>Pekerjaan</th>
                        <th>Total Skor</th>
                        <th>Tingkat Kesadaran</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($respondents as $res)
                    <tr>
                        <td>{{ $res->id }}</td>
                        <td>{{ $res->created_at->format('d/m/y') }}</td>
                        <td>{{ $res->occupation }}</td>
                        <td><strong>{{ $res->total_score }}</strong> <small class="text-muted">/ 128 max</small></td>
                        <td>
                            @if($res->total_score >= 100)
                                <span class="badge bg-success">Sangat Tinggi</span>
                            @elseif($res->total_score >= 75)
                                <span class="badge bg-primary">Tinggi</span>
                            @elseif($res->total_score >= 50)
                                <span class="badge bg-warning text-dark">Sedang</span>
                            @else
                                <span class="badge bg-danger">Rendah</span>
                            @endif
                        </td>
                        <td class="text-center">
                            <a href="{{ route('survey.show', $res->id) }}" class="btn btn-primary btn-sm">Detail</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function () {
        $('#respondentTable').DataTable({
            "order": [[ 0, "desc" ]], // Urutkan berdasarkan ID desc (terbaru diatas)
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.13.4/i18n/id.json" // Bahasa Indonesia
            }
        });
    });
</script>

</body>
</html>