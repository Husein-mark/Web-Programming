<?php
$rata = null;

/* Function untuk menghitung rata-rata */
function hitungRataRata($mtk, $indo, $produktif) {
    return ($mtk + $indo + $produktif) / 3;
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $mtk = $_POST['mtk'];
    $indo = $_POST['indo'];
    $produktif = $_POST['produktif'];

    $rata = hitungRataRata($mtk, $indo, $produktif);
}
?>

<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Rata-Rata Nilai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h5>Hitung Rata-Rata Nilai</h5>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="mb-3">
                            <label>Nilai Matematika</label>
                            <input type="number" class="form-control" name="mtk" required>
                        </div>
                        <div class="mb-3">
                            <label>Nilai Bahasa Indonesia</label>
                            <input type="number" class="form-control" name="indo" required>
                        </div>
                        <div class="mb-3">
                            <label>Nilai Produktif RPL</label>
                            <input type="number" class="form-control" name="produktif" required>
                        </div>
                        <button class="btn btn-success w-100">Hitung</button>
                    </form>
                </div>

                <?php if ($rata !== null): ?>
                <div class="card-footer">
                    <strong>Rata-rata Nilai:</strong> <?= number_format($rata, 2) ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>
