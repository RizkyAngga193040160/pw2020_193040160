<?php
require '../php/functions.php';
$pakaian = cari($_GET['keyword']);
?>


<div class="row">
<?php if(empty($pakaian)) : ?>
  <div class="col s12 m4 l3">
  <div class="card" style="height:200px; width:900px;">
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4"><h3>Data Tidak Ditemukan!!!</h3></span>
    </div>
    </div>
    </div>
    <?php endif;?>
    

    <?php 
    foreach ($pakaian as $p) : ?>

  <div class="col s6 m4 l3">
  <div class="card" style="height:350px; width:200px;">

    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="img/<?= $p['Foto']; ?>" style="height: 200px;">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4"><?= $p['Kategori']; ?><i class="material-icons right">more_vert</i></span>
      <p>Rp. <?= $p['Harga']; ?></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4"><?= $p['Kategori']; ?><i class="material-icons right">close</i></span>
      <p>Merk : <?= $p['Merk']; ?></p>
      <p>Bahan : <?= $p['Bahan']; ?></p>
      <p>Harga : Rp. <?= $p['Harga']; ?></p>
    </div>
  </div>
  </div>
  
  <?php endforeach; ?>

  </div>