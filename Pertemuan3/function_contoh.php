<?php

$total_seluruh = 0;
$hitungTotal = 0;
$jumlah_MA = null;
$jumlah_NG = null;
$jumlah_SS = null;
$jumlah_EJ = null;

function ambilInput($name)
{
    $ambil_all = $_POST[$name];
    return $ambil_all;
}

function hitungTotal($jumlah, $harga)
{
    $total = $jumlah * $harga;
    return $total;
}

if ($_SERVER['REQUEST_METHOD'] == "POST"){
  
    $total_NG = hitungTotal(ambilInput('NG'),10000);
    $total_MA = hitungTotal(ambilInput('MA'),12000);
    $total_SS = hitungTotal(ambilInput('SS'),50000);
    $total_EJ = hitungTotal(ambilInput('EJ'),5000);

    $total_seluruh = $total_NG + $total_MA + $total_SS + $total_EJ;
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
                            <div class="mb-3 mt-3">
                                <label for="">Sushi</label>
                                <input type="number" class="form-control" name="SS">
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="">Es Jeruk</label>
                                <input type="number" class="form-control" name="EJ">
                            </div>
                            <button class="btn btn-primary w-100">
                                Hitung Total
                            </button>
                        </form>
                    </div>
                    
                    <?php if($total_seluruh !== 0): ?>
                    <div class="card-footer mt-5">
                        <strong>Total Nasi Goreng</strong> : <?= number_format ( $total_NG, 0,  ",",'.') ?> <br>
                        <strong>Total Mie Ayam</strong> : <?= number_format ($total_MA,0, ",", '.') ?><br>
                        <strong>Total Sushi</strong> : <?= number_format ($total_SS,0, ",", '.') ?><br>
                        <strong>Total Es Jeruk</strong> : <?= number_format ($total_EJ,0, ",", '.') ?>
                        <hr>
                        <strong class="f-5">Total Bayar</strong> : Rp <?= number_format ($total_NG,0,",",'.') ?> +  Rp <?= number_format ( $total_MA,0,",",'.') ?> + Rp <?= number_format ($total_SS,0,",",'.') ?> + Rp <?= number_format ($total_EJ,0,",",'.') ?> = Rp <?= number_format ($total_seluruh,0,",",'.') ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>