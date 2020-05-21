<?php
    session_start();

    if(!isset($_SESSION["username"])){
        header("Location: login.php");
        exit;
    }
    
    require 'Function.php';

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
    <title>Document</title>
</head>
<body>
    <div class="add">
        <div class="logout"><a href="Logout.php">Logout</a></div>
        <a href="Tambah.php"><button>Tambah Data</button></a>
        <form action="" method="get">
            <input type="text" name="keyword" autofocus>
            <button type="Submit" name="cari">Cari!</button>
        </form>
        </div>
        <table border="1" cellpadding="13" cellspacing="0">
            <tr>
                <th>#</th>
                <th>Opsi</th>
                <th>Gambar</th>
                <th>Kategori</th>
                <th>Merk</th>
                <th>Bahan</th>
                <th>Harga</th>
            </tr>
            <?php if(empty($pakaian)) : ?>
                <tr>
                    <td colspan="7">
                        <h1>Data tidak ditemukan</h1>
                    </td>
                </tr>
            <?php else : ?>

            <?php $no = 1; ?>
            <?php foreach($pakaian as $payan) : ?>

            <tr>
                <td><?= $no; ?></td>
                <td>
                    <a href="Ubah.php?Id=<?= $payan['Id'] ?>"><button>Ubah</button></a>
                    <a href="Hapus.php?Id=<?= $payan['Id'] ?>" onclick="return confirm('Hapus Data??')"><button>Hapus</button></a>
                </td>
                <td><img src="../Assets/Img/<?= $payan['Foto']; ?>" alt=""></td>
                <td><?= $payan['Kategori']; ?></td>
                <td><?= $payan['Bahan']; ?></td>
                <td><?= $payan['Merk']; ?></td>
                <td>Rp. <?= $payan['Harga']; ?></td>
            </tr>
            <?php $no++; ?>
            <?php endforeach; ?>
            <?php endif; ?>

        </table>
</body>
</html>