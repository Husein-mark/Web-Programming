<?php

$data = null;
$totalbelanja = null;
$total = null;
$harga = null;

function kasir($data)
{
    if($data >= 200000){    
        return $data * 0.2;
    } elseif($data >= 100000){
        return $data * 0.1; 
    } else{

    }

}

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $harga = $_POST['BLNJ'];//500.000
                                //500.000
    $totalbelanja = $harga - kasir($harga);

}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Belanja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card shadow">
                    <div class="card-header bg-success text-white">
                        <h5 class="mb-2">Belanja Diskon</h5>
                    </div>
                    <div class="card-body">
                        <div class="menu"> < Rp 100.000 | Tidak ada diskon <br>≥ Rp  100.000 | Diskon 10%<br>≥ Rp  200.000 | Diskon 20% </div>

                        <form method="POST">
                            <div class="mb-3 mt-3">
                                <label for="">Total Belanja</label>
                                <input type="number" class="form-control" name="BLNJ">
                            </div>
                            <button class="btn btn-primary w-100">
                                Hitung Total
                            </button>
                        </form>
                    </div>
                    
                    <?php if($harga !== null): ?>
                    <div class="card-footer mt-2">
                        <strong>Total</strong> : <?= $totalbelanja ?> <br>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>