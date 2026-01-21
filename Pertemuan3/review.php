<?php

$total_NG = 0;
$total_MA = 0;
$total_seluruh = 0;
$jumlah_NG = 0;
$jumlah_MA = 0;

// Mengecek
if($_SERVER['REQUEST_METHOD'] == "POST"){
    
    // Mengambil Inputan
    $jumlah_NG = $_POST['NG'];
    $jumlah_MA = $_POST['MA'];

    // Olah Data Untuk Menghitung
    $total_NG = $jumlah_NG * 10000;
    $total_MA = $jumlah_MA * 12000;

    $total_seluruh = $total_NG + $total_MA; 
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kasir</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card shadow">
                    <div class="card-header bg-success text-white">
                        <h5 class="mb-2">Kasir Kantin Sekolah (Tanpa Function)</h5>
                    </div>
                    <div class="card-body">
                        <div class="menu"> Nasi Goreng | Rp. 10.000 <br> Mie Ayam | Rp. 12.000</div>

                        <form method="POST">
                            <div class="mb-3 mt-3">
                                <label for="">Nasi Goreng</label>
                                <input type="number" class="form-control" name="NG">
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="">Mie Ayam</label>
                                <input type="number" class="form-control" name="MA">
                            </div>
                            <button class="btn btn-primary w-100">
                                Hitung Total
                            </button>
                        </form>
                    </div>
                    
                    <?php if($total_seluruh !== 0): ?>
                    <div class="card-footer mt-5">
                        <strong>Total Nasi Goreng</strong> : <?= $jumlah_NG ?> X Rp. 10.000 = Rp <?= number_format (num: $total_NG, decimals: 0, decimal_separator: ",", thousands_separator: '.') ?> <br>
                        <strong>Total Mie Ayam</strong> : <?= $jumlah_MA ?> X Rp. 12.000 = Rp <?= number_format (num: $total_MA, decimals: 0, decimal_separator: ",", thousands_separator: '.') ?>
                        <hr>
                        <strong class="f-5">Total Bayar</strong> : Rp <?= number_format (num: $total_NG, decimals: 0, decimal_separator: ",", thousands_separator: '.') ?> +  Rp <?= number_format (num: $total_MA, decimals: 0, decimal_separator: ",", thousands_separator: '.') ?> = Rp <?= number_format (num: $total_seluruh, decimals: 0, decimal_separator: ",", thousands_separator: '.') ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>