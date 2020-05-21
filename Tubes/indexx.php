<?php
require 'php/functions.php';

$pakaian = query("SELECT * FROM pakaian");

if(isset($_POST['cari'])){
    $pakaian = cari($_POST['keyword']);
  }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apparel</title>
</head>
<body class="grey darken-3">
 <!-- NavBar -->
<div class="navbar-fixed">
    <nav class="grey darken-4">
      <div class="row ">
        <div class="col s10 offset-s1">
            <div class="nav-wrapper">
              <a href="#!" class="brand-logo">Apparel</a>
              <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
              <ul class="right hide-on-med-and-down">
                <li><a href="php/index.php" class="btn">Go to Admin Page</a></li>
              </ul>
          </div>
        </div>
      </div>
    </nav>
</div>
<!-- End Navbar -->

<!-- SideNav -->
 <ul class="sidenav" id="mobile-nav">
    <li><a href="php/index.php">Go to Admin Page</a></li>
  </ul>
  <!-- End Sidenav -->



<!-- Slider -->
<div class="slider">
    <ul class="slides">
      <li>
        <img src="img/car4.jpg">
        <div class="caption center-align">
          <h5 style="text-shadow: 2px 2px 3px #000000;">Choose Your Clothes</h5>
          <h3 class="light grey-text text-lighten-3" style="text-shadow: 2px 2px 3px #000000;">to Choose Your Style</h3>
        </div>
      </li>
      <li>
        <img src="img/car2.jpg">
        <div class="caption left-align">
          <h5 style="text-shadow: 2px 2px 3px #000000;">Invite Your Friends</h5>
          <h3 class="light grey-text text-lighten-3" style="text-shadow: 2px 2px 3px #000000;">to Find Your Choice</h3>
        </div>
      </li>
      <li>
        <img src="img/car3.jpg">
        <div class="caption right-align">
          <h5 style="text-shadow: 2px 2px 3px #000000;">Find Us</h5>
          <h3 class="light grey-text text-lighten-3" style="text-shadow: 2px 2px 3px #000000;">in Every City</h3>
        </div>
      </li>
    </ul>
  </div>


<!-- Finder -->

 <form action="" method="POST">
  <input type="text" name="keyword" size="40" placeholder="Masukan keyword Pencarian.." autocomplete="off" autofocus class="keyword">
  <button type="submit" name="cari" class="tombol-cari">Cari!</button>
  </form><br>



  <!-- Card -->
  <div class="container">
  <div class="row">
  <?php if(empty($pakaian)) : ?>
    <div class="col s6 m4 l3">
  <div class="card" style="height:300px; width:200px;">
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Data Tidak Ditemukan!!!</span>
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
  </div>
      
      <!-- Footer -->
<footer class="grey darken-4 white-text center" style="padding: 0px 0px 1px 0px;">
      <p class="">This site made for complete Web Programming Final Project <br>
      @RizkyAngga | 193040160 | Pasundan University</p>
</footer>



  <script src="js/scripta.js"></script>
<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="js/materialize.min.js"></script>
<script>
// Sidenav
const sideNav = document.querySelectorAll('.sidenav');
  M.Sidenav.init(sideNav);

const sliDer = document.querySelectorAll('.slider');
    M.Slider.init(sliDer, {
        indicators: false,
        height: 300,
        duration: 800,
        interval: 2500
    });


  </script>
</body>
</html>