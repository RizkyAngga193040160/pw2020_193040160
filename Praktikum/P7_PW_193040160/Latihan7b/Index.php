<?php
    require'Php/Function.php';

    $pakaian = query("SELECT * FROM pakaian");

    if(isset($_GET['cari'])){
        $keyword = $_GET['keyword'];
        $pakaian = query("SELECT * FROM pakaian WHERE
                    Kategori LIKE '%$keyword%' OR
                    Merk LIKE '%$keyword%' OR
                    Bahan LIKE '%$keyword%' ");
    } else {
        $pakaian = query("SELECT * FROM pakaian");
    }
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2 193040160</title>
    <style>
        h1{
            font-family : Algerian;
            text-shadow : 2px 2px 10px;
        }

        td{
            padding : 10px 30px 10px 30px;
        }

    </style>
</head>
<body>
        <div class="container">
        <form action="" method="get">
            <input type="text" name="keyword" autofocus>
            <button type="Submit" name="cari">Cari!</button>
        </form>
        <?php if(empty($pakaian)) : ?>
                <tr>
                    <td colspan="7">
                        <h1>Data tidak ditemukan</h1>
                    </td>
                </tr>
            <?php else : ?>

        <?php foreach($pakaian as $payan) : ?>
            <p class="nama">
                <a href="Php/Detail.php?Id=<?= $payan['Id'] ?>">
                    <?= $payan["Kategori"]  ?>
                </a>
            </p>
        <?php endforeach; ?>
        <?php endif; ?>
        
        </div><br>
        <button class="tombol-kembali"><a href="php/Login.php">Pergi ke Halaman Admin!</a></button>
</body>
</html>