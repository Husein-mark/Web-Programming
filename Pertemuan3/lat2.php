<?php

$hasil = null;
$kategori = null;


function statuskelulusan($hasil)
{
    if($hasil >= 75){
        return  "Lulus";
    } elseif($hasil < 75){
        return "Tidak Lulus";
    }

}

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $hasil = $_POST['nilai']; //5

    $kategori = statuskelulusan($hasil);

}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Status Kelulusan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card shadow">
                    <div class="card-header bg-success text-white">
                        <h5 class="mb-2">Penentuan Status Kelulusan Siswa</h5>
                    </div>
                    <div class="card-body">
                        <div class="menu"> Nilai ≥ 75 | Lulus <br> Nilai < 75 | Tidak Lulus </div>

                        <form method="POST">
                            <div class="mb-3 mt-3">
                                <label for="">Nilai</label>
                                <input type="number" class="form-control" name="nilai">
                            </div>
                            <button class="btn btn-primary w-100">
                                Hitung Total
                            </button>
                        </form>
                    </div>
                    
                    <?php if($hasil !== null): ?>
                    <div class="card-footer mt-2">
                        <strong>Hasil</strong> : <?= $hasil ?> = <?= $kategori ?> <br>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>