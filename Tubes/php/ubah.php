<?php
 session_start();

 if(!isset($_SESSION['login'])){
   header("Location: login.php");
   exit;
 }

require 'functions.php';

if(!isset($_GET['id'])){
    header("Location: index.php");
    exit;
}

$id = $_GET['id'];

$p = query("SELECT * FROM pakaian WHERE Id = $id");

if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
    alert('data berhasil diubah');
    document.location.href = 'index.php';
    </script>";
  } else {
    echo "data gagal diubah! Mohon isi kolom yang tersedia, atau pilih kembali Gambar!";
  }
}
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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Pakaian</title>
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
              <li><i class="material-icons">arrow_back</i></li>
                <li><a href="index.php">Kembali</a></li>
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
    <li><a href="index.php">Kembali</a></li>
    <li><a href="logout.php">Logout</a></li>
  </ul>
  <!-- End Sidenav -->


  <div class="container">
  <div class="row"> 
    <div class="col s8 offset-s2">
      <div class="row" align="center">
  <h3>Form Ubah Data Pakaian</h3>
  <form action="" method="POST" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?= $p['Id']; ?>">
  <input type="hidden" name="foto_lama" value="<?= $p['Foto']; ?>">

      <div class="input-field col s12">
          <input type="text" id="autocomplete-input" class="autocomplete" name="kategori" autofocus required value="<?= $p['Kategori'];?>">
          <label for="autocomplete-input">Kategori</label>
        </div>

        <div class="input-field col s12">
          <input type="text" id="autocomplete-input" class="autocomplete" name="merk" autofocus required value="<?= $p['Merk'];?>">
          <label for="autocomplete-input">Merk</label>
        </div>

        <div class="input-field col s12">
          <input type="text" id="autocomplete-input" class="autocomplete" name="bahan" autofocus required value="<?= $p['Bahan'];?>">
          <label for="autocomplete-input">Bahan</label>
        </div>

        <div class="input-field col s12">
          <input type="text" id="autocomplete-input" class="autocomplete" name="harga" autofocus required value="<?= $p['Harga'];?>">
          <label for="autocomplete-input">Harga</label>
        </div>

        <div class="input-field col s12">
          <input type="file" id="autocomplete-input" class="autocomplete foto" name="foto" onchange="previewImage()">
          <label for="autocomplete-input">Foto</label><p></p>
          <img src="../img/<?= $p['Foto']; ?>" alt="" width="150" style="display: block;" class="img-preview">
        </div>
        <button type="submit" name="ubah">Ubah Data</button>
  </form>
  </div>
  </div>
  </div>
  </div>



  <!-- Footer -->
<footer class="grey darken-4 white-text center" style="padding: 0px 0px 0.5px 0px;">
      <p class="">This site made for complete Web Programming Final Project</p>
      <p>@RizkyAngga | 193040160 | Pasundan University</p>
</footer>

  <script src="../js/script.js"></script>
  <script type="text/javascript" src="../js/materialize.min.js"></script>
<script>
// Sidenav
  const sideNav = document.querySelectorAll('.sidenav');
  M.Sidenav.init(sideNav);
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
  });

  // Autocomplete Input
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.autocomplete');
    var instances = M.Autocomplete.init(elems, options);
  });
</script>
</body>

</html>