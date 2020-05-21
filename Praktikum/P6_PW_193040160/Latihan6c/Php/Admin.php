<?php
    require 'Function.php';

    $pakaian = query("SELECT * FROM pakaian");
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
        <a href="Tambah.php"><button>Tambah Data</button></a>
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

            <?php $no = 1; ?>
            <?php foreach($pakaian as $payan) : ?>

            <tr>
                <td><?= $no; ?></td>
                <td>
                    <a href=""><button>Ubah</button></a>
                    <a href="Hapus.php?id=<?= $payan['Id'] ?>" onclick="return confirm('Hapus Data??')"><button>Hapus</button></a>
                </td>
                <td><img src="../Assets/Img/<?= $payan['Foto']; ?>" alt=""></td>
                <td><?= $payan['Kategori']; ?></td>
                <td><?= $payan['Bahan']; ?></td>
                <td><?= $payan['Merk']; ?></td>
                <td>Rp. <?= $payan['Harga']; ?></td>
            </tr>
            <?php $no++; ?>
            <?php endforeach; ?>
        </table>
</body>
</html>