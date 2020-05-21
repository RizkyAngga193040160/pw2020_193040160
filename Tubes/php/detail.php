<?php
 session_start();

 if(!isset($_SESSION['login'])){
   header("Location: login.php");
   exit;
 }


require 'functions.php';

$id = $_GET['id'];

$p = query("SELECT * FROM pakaian WHERE Id = $id");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Pakaian</title>
</head>
<body>

<!-- NavBar -->
<div class="navbar-fixed">
    <nav class="grey darken-4">
      <div class="row ">
        <div class="col s10 offset-s1">
            <div class="nav-wrapper">
              <a href="#!" class="brand-logo">Administrator</a>
              <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
              <ul class="right hide-on-med-and-down">
              <li><i class="material-icons">add</i></li>
                <li><a href="tambah.php">Tambah Data Pakaian</a></li>
                <li> | | </li>
                <li><a href="logout.php">Logout</a></li>
                <li><i class="material-icons">logout</i></li>
              </ul>
          </div>
        </div>
      </div>
    </nav>
</div>
<!-- End Navbar -->

<!-- SideNav -->
 <ul class="sidenav" id="mobile-nav">
    <li><a href="tambah.php">Tambah Data Pakaian</a></li>
    <li><a href="logout.php">Logout</a></li>
  </ul>
  <!-- End Sidenav -->



  <h3>Detail Pakaian</h3>
  <ul>
    <li><img src="../img/<?= $p['Foto']; ?>" width="250"></li> 
    <li>Kategori : <?= $p['Kategori']; ?></li>
    <li>Merk : <?= $p['Merk']; ?></li>
    <li>Bahan : <?= $p['Bahan']; ?></li>
    <li>Harga : <?= $p['Harga']; ?></li>
    <li><a href="ubah.php?id=<?= $p['Id']; ?>">Ubah</a> | <a href="hapus.php?id=<?=$p['Id'] ; ?>" onclick="return confirm('Apakah anda yakin??');">Hapus</a></li>
    <li><a href="index.php">Kembali ke daftar Pakaian</a></li>
  </ul>
</body>
</html>