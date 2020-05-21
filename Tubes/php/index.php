<?php
  session_start();

  if(!isset($_SESSION['login'])){
    header("Location: login.php");
    exit;
  }

require 'functions.php';

$pakaian = query("SELECT * FROM pakaian");


if(isset($_POST['cari'])){
  $pakaian = cari($_POST['keyword']);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Daftar Pakaian</title>

  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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
                <li><a href="../indexx.php" class="btn">Guest Page</a></li>
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


  <form action="" method="POST">
  <input type="text" name="keyword" size="40" placeholder="Masukan keyword Pencarian.." autocomplete="off" autofocus class="keyword">
  <button type="submit" name="cari" class="tombol-cari">Cari!</button>
  </form><br>

<div class="container">
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
  </div>

<!-- Footer -->
<footer class="grey darken-4 white-text center" style="padding: 0px 0px 1px 0px;">
      <p class="">This site made for complete Web Programming Final Project</p>
      <p>@RizkyAngga | 193040160 | Pasundan University</p>
</footer>



<script src="../js/script.js"></script>
<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="../js/materialize.min.js"></script>
<script>
// Sidenav
const sideNav = document.querySelectorAll('.sidenav');
  M.Sidenav.init(sideNav);
  </script>
   
</body>

</html>