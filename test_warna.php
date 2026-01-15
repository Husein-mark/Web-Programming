<?php
$nama = null;
$kategori="";
$kategori1="";
$kategori2="";
$kategori3="";
$kategori4="";
$kategori5="";

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nama = $_POST['nama'];
    $inputan1 = $_POST['inputan1'];
    $inputan2 = $_POST['inputan2'];
    $inputan3 = $_POST['inputan3'];
    $inputan4 = $_POST['inputan4'];
    $inputan5 = $_POST['inputan5'];
    $inputan6 = $_POST['inputan6'];


    if($inputan1 == 5){
        $kategori = "Normal";

    } else {
        $kategori = "Terindikasi";
    } 

    if($inputan2 == 6){
        $kategori1 = "Normal";
    } else {
        $kategori2 = "Terindikasi";
    }

    if($inputan3 == 16){
        $kategori2 = "Normal";
    } else {
        $kategori2 = "Terindikasi";
    }

    if($inputan4 == 12){
        $kategori3 = "Normal";
    } else {
        $kategori3 = "Terindikasi";
    }

    if($inputan5 == 45){
        $kategori4 = "Normal";
    } else {
        $kategori4 = "Terindikasi";
    }

    if($inputan6 == 74){
        $kategori5 = "Normal";
    } else {
        $kategori5 = "Terindikasi";
    }

    if($inputan1 == 5) {
        $hasil1 = 1;
    } else {
        $hasil1 = 0;
    }
    if($inputan2 == 6) {
        $hasil2 = 1;
    } else {
        $hasil2 = 0;
    }
    if($inputan3 == 16) {
        $hasil3 = 1;
    } else {
        $hasil3 = 0;
    }
    if($inputan4 == 12) {
        $hasil4 = 1;
    } else {
        $hasil4 = 0;
    }
    if($inputan5 == 45) {
        $hasil5 = 1;
    } else {
        $hasil5 = 0;
    }
    if($inputan6 == 74) {
        $hasil6 = 1;
    } else {
        $hasil6 = 0;
    }

    if ($hasil1 == 1 && $hasil2 == 1 && $hasil3 == 1 && $hasil4 == 1 && $hasil5 == 1 && $hasil6 == 1) {
        $hasil = $hasil1 + $hasil2 + $hasil3 + $hasil4 + $hasil5 + $hasil6; 
    } else {
        $hasil = $hasil1 + $hasil2 + $hasil3 + $hasil4 + $hasil5 + $hasil6; 
    }
}
?>

<!DOCTYPE html>
<html lang="id">


<head>
    <meta charset="UTF-8">
    <title>Color Blind Test</title>


    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow" style="width: 80%">
        <div class="card-body">
            <H5 class="card-title bg-success text-light p-2 rounded">Tes Buta Warna (Simulasi)</h5>
            <form method="POST">
                <div class="mb-3">
                    <h2 class="text-secondary fs-5">Nama Peserta</h2>
                    <input class="form-control" type="text" name="nama" id="nama">
                </div>

                <div class="container d-flex">
                    <div class="gambar1 mt-5 border border-secondary-subtle w-50 p-2 me-2">
                        <h5 class="text-center text-secondary">Gambar 1</h5>
                        <img src="https://www.ceenta.com/imagecache/mobile/compThird/colorblind5web.webp" style="margin-left:92px" height="150px">
                        <input type="number" name="inputan1" id="inputan1" placeholder="Masukkan angka" style="width: 100%; margin-top: 10px;" >
                    </div>
                    <div class="gambar1 mt-5 border border-secondary-subtle w-50 p-2">
                        <h5 class="text-center text-secondary">Gambar 2</h5>
                        <img class="text-center" src="https://cdn-beaai.nitrocdn.com/DsHNrqyidSdrnEUwxpnDFmLjguAlTfrt/assets/images/optimized/rev-a335666/colormax.org/wp-content/uploads/2015/06/ishihara-color-plate-test.jpg" style="margin-left:92px;" height="150px">
                        <input type="number" name="inputan2" id="inputan2" placeholder="Masukkan angka" style="width: 100%; margin-top: 10px;" >
                    </div>
                </div>
                <div class="container d-flex">
                    <div class="gambar1 mt-5 border border-secondary-subtle w-50 p-2 me-2">
                        <h5 class="text-center text-secondary">Gambar 3</h5>
                        <img src="https://www.colorlitelens.com/images/Ishihara/Ishihara_03.jpg" style="margin-left:92px" height="150px">
                        <input type="number" name="inputan3" id="inputan3" placeholder="Masukkan angka" style="width: 100%; margin-top: 10px;" >
                    </div>
                    <div class="gambar1 mt-5 border border-secondary-subtle w-50 p-2">
                        <h5 class="text-center text-secondary">Gambar 4</h5>
                        <img class="text-center" src="https://www.color-blindness.com/wp-content/images/Ishihara-Plate-01-38.jpg" style="margin-left:92px;" height="150px">
                        <input type="number" name="inputan4" id="inputan4" placeholder="Masukkan angka" style="width: 100%; margin-top: 10px;" >
                    </div>
                </div>
                <div class="container d-flex">
                    <div class="gambar1 mt-5 border border-secondary-subtle w-50 p-2 me-2">
                        <h5 class="text-center text-secondary">Gambar 5</h5>
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSfG6oOyxPIu6jlMmEfWtiSD_1bY8MrrxUxjg&s" style="margin-left:92px" height="150px">
                        <input type="number" name="inputan5" id="inputan5" placeholder="Masukkan angka" style="width: 100%; margin-top: 10px;" >
                    </div>
                    <div class="gambar1 mt-5 border border-secondary-subtle w-50 p-2">
                        <h5 class="text-center text-secondary">Gambar 6</h5>
                        <img class="text-center" src="https://www.color-blind-test.com/images/Ishihara-more/74.jpg" style="margin-left:92px;" height="150px">
                        <input type="number" name="inputan6" id="inputan6" placeholder="Masukkan angka" style="width: 100%; margin-top: 10px;" >
                    </div>
                </div>
                <button class="text-light bg-success w-100 mt-5 border border-0 p-2 rounded">Cek Hasil Tes</button>
                <!-- <button class=" btn btn-primary w-100"> Hitung </button> -->
            </form>
            <?php if($nama !== null):?>
                    <div class="alert text-start mt-2">
                        <strong>Nama</strong> : <?=  $nama ?><br>
                        <strong>Tes 1</strong> : <?=  $kategori ?><br>
                        <strong>Tes 2</strong> : <?=  $kategori1 ?><br>
                        <strong>Tes 3</strong> : <?=  $kategori2 ?><br>
                        <strong>Tes 4</strong> : <?=  $kategori3 ?><br>
                        <strong>Tes 5</strong> : <?=  $kategori4 ?><br>
                        <strong>Tes 6</strong> : <?=  $kategori5 ?><br>
                        <strong>Total Poin</strong> : <?= $hasil ?>
                    </div>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>