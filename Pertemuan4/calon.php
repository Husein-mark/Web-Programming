<?php
include 'config.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <title>Calon Ketua Osis</title>
    <style>
        button{
            margin-bottom: 10px;
            background-color: lightblue;
            border: none;
            border-radius: 5px;
            padding: 10px;
            cursor: pointer;
        }
        a{
            text-decoration: none;
            color: black;
        }
    </style>
</head>
<body>
    
    <h2>Calon Ketua OSIS</h2>
    <a href="tambah_siswa.php"><button>Tambah Siswa</button></a>

    <table border="1" cellpadding="10">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Visi</th>
            <th>Misi</th>
            <th>Foto</th>
        </tr>
        
        <?php 
        $no = 1;
        $data = mysqli_query($koneksi, 'SELECT * FROM tbl_calon_ketua_osis');
        foreach($data as $d):?>
            <tr>
                <td> <?= $no++; ?></td>
                <td> <?= $d['nama_calon'] ?> </td>
                <td> <?= $d['visi'] ?> </td>
                <td> <?= $d['misi'] ?> </td>
                <td> <?= $d['foto'] ?> </td>
            </tr>
        
        <?php endforeach?>

    </table>
</body>
</html>