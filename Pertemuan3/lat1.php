<?php

$total_seluruh = 0;
$hitungTotal = 0;
$jumlah_umum = null;
$jumlah_pelajar = null;

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
  
    $total_pelajar = hitungTotal(ambilInput('pelajar'),5000);
    $total_umum = hitungTotal(ambilInput('umum'),8000);

    $total_seluruh = $total_pelajar + $total_umum ;
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perhitungan Tarif Tiket Bus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card shadow">
                    <div class="card-header bg-success text-white">
                        <h5 class="mb-2">Perhitungan Tarif Tiket Bus</h5>
                    </div>
                    <div class="card-body">
                        <div class="menu"> Pelajar | Rp. 5.000 <br> Umum | Rp. 8.000 </div>

                        <form method="POST">
                            <div class="mb-3 mt-3">
                                <label for="">Pelajar</label>
                                <input type="text" class="form-control" name="pelajar">
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="">Umum</label>
                                <input type="text" class="form-control" name="umum">
                            </div>
                            <button class="btn btn-primary w-100">
                                Hitung Total
                            </button>
                        </form>
                    </div>
                    
                    <?php if($total_seluruh !== 0): ?>
                    <div class="card-footer mt-5">
                        <strong>Total Tarif Pelajar</strong> : <?= number_format ( $total_pelajar, 0,  ",",'.') ?> <br>
                        <strong>Total Tarif Umum</strong> : <?= number_format ($total_umum,0, ",", '.') ?>
                        <hr>
                        <strong class="f-5">Total Bayar</strong> : Rp <?= number_format ($total_pelajar,0,",",'.') ?> +  Rp <?= number_format ( $total_umum,0,",",'.') ?> = Rp <?= number_format ($total_seluruh,0,",",'.') ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>