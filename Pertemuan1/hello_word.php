<!-- PHP -->
<?php
$hasil = null;

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $bilangan1 = $_POST['angka1'];
    $bilangan2 = $_POST['angka2'];
    $operator = $_POST['operator'];
    
    if ($operator == "+") {
        $hasil = $bilangan1 + $bilangan2;
    } elseif ($operator == "-") {
        $hasil = $bilangan1 - $bilangan2;
    } elseif ($operator == "*") {
        $hasil = $bilangan1 * $bilangan2;
    } elseif ($operator == "/") {
        $hasil = $bilangan1 / $bilangan2;
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
                    <input class="form-control" type="number" name="angka1" id="angka1" placeholder="Angka Pertama" value="<?php echo $bilangan1 ?>">
                </div>
                <div class="mb-3">
                    <input class="form-control" type="number" name="angka2" id="angka2" placeholder="Angka Kedua" value="<?php echo $bilangan2 ?>">
                </div>

                <select class="form-select mb-3" name="operator">
                <option selected="">Menu</option>
                <option value="+">Tambah</option>
                <option value="-">Kurang</option>
                <option value="*">Kali</option>
                <option value="/">Bagi</option>
                </select>

                <button class="btn btn-primary w-100">Hitung</button>
            </form>
                <?php if($hasil !== null):?>
                    <div class="alert alert-success text-center mt-2">
                        Hasil : <?php echo $hasil?>
                    </div>
                <?php endif; ?>
                
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>