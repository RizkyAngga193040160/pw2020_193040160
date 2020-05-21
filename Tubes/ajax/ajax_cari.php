<?php
require '../php/functions.php';
$pakaian = cari($_GET['keyword']);
?>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Foto</th>
      <th>Kategori</th>
      <th>Merk</th>
      <th>Bahan</th>
      <th>Harga</th>
      <th>Option</th>
    </tr>

    <?php if(empty($pakaian)) : ?>
    <tr>
      <td colspan="4">
      <p style="color : red; font-style : italic;">Data Pakaian tidak ditemukan!!!</p>
      </td>
    </tr>
    <?php endif;?>

    <?php $i = 1;
    foreach ($pakaian as $p) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="../img/<?= $p['Foto']; ?>" width="70"></td>
        <td><?= $p['Kategori']; ?></td>
        <td><?= $p['Merk']; ?></td>
        <td><?= $p['Bahan']; ?></td>
        <td>Rp. <?= $p['Harga']; ?></td>
        <td>
        <a href="ubah.php?id=<?= $p['Id']; ?>" class="btn grey darken-4">Ubah</a> || <a href="hapus.php?id=<?=$p['Id'] ; ?>" class="btn grey darken-4" onclick="return confirm('Apakah anda yakin??');">Hapus</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>