<?php
    if(!isset($_GET['Id'])){
        header("location: ../Index.php");
        exit;
    }

    require'Function.php';

    $id = $_GET['Id'];

    $pakaian = query("SELECT * FROM pakaian WHERE Id = $id")[0];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <div class="gambar">
        <img src="../Assets/Img/<?= $pakaian["Foto"]; ?>" alt="">
        </div>
        <div class="keterengan">
            <p><?= $pakaian["Kategori"]; ?></p>
            <p><?= $pakaian["Merk"]; ?></p>
            <p><?= $pakaian["Bahan"]; ?></p>
            <p>Rp. <?= $pakaian["Harga"]; ?></p>
        </div>      
            <button class="tombol-kembali"><a href="../Index.php">Kembali</a></button>    
        </div>
        
        
</body>
</html>