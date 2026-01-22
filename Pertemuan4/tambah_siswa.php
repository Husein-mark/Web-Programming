<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="id">


<head>
    <meta charset="UTF-8">
    <title>SISWA</title>


    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow" style="width: 30%">
        <div class="card-body">
            <H5 class="card-title text-center">Menambahkan Siswa</h5>
            <form method="POST">
                <div class="mb-3">
                    <label >Nama</label>
                    <input class="form-control" type="text" name="nama">
                </div>
                <div class="mb-3">
                    <label >Kelas</label>
                    <input class="form-control" type="text" name="kelas">
                </div>
                <div class="mb-3">
                    <label >Jurusan</label>
                    <input class="form-control" type="text" name="jurusan">
                </div>
                <div class="mb-3">
                    <label >Alamat</label>
                    <input class="form-control" type="text" name="alamat">
                </div>
                <button class=" btn btn-primary w-100"> Tambahkan </button>
            </form>
        </div>
    </div>
</body>
</html>