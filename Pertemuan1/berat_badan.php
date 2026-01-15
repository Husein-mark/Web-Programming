<!-- PHP -->
<?php
$hasil = null;
$kategori = "";

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $berat = $_POST['berat'];
    $tinggi = $_POST['tinggi'] / 100;
    
 
        $hasil = $berat / ($tinggi * $tinggi);

        if($hasil < 18.49) {
            $kategori = "Kurus (Underweight)";
        } elseif ($hasil >= 18.5 && $hasil <= 24.9) {
            $kategori = "ideal / Normal";
        } elseif ($hasil >= 25 && $hasil <= 27){
            $kategori = "Berlebih (Overweight)";
        } else {
            $kategori = "Obesitas";
        }
   
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body class="bg-light d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow" style="width: 30%;">
        <div class="card-body">
            <div class="card-title text-center">Kalkulator</div>
            <form method="POST">
                <div class="mb-3">
                    <input class="form-control" type="number" name="berat" id="berat" placeholder="Berat Badan" value="<?php echo $berat ?>">
                </div>
                <div class="mb-3">
                    <input class="form-control" type="number" name="tinggi" id="tinggi" placeholder="Tinggi Badan" value="<?php echo $tinggi ?>">
                </div>

                <button class="btn btn-primary w-100">Hitung IMT</button>
            </form>
                <?php if($hasil !== null):?>
                    <div class="alert alert-success text-center mt-2">
                        <strong>IMT:</strong> : <?=  number_format($hasil, 2); ?><br>
                        <strong>Kategori:</strong> : <?=  $kategori ?>
                    </div>
                <?php endif; ?>
                
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>