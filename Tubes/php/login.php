<?php
    session_start();

    if(isset($_SESSION['login'])){
      header("Location: index.php");
      exit;
    }
  

    require 'functions.php';

    if(isset($_POST['login'])){
        $login = login($_POST);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body class="grey darken-2">
<div class="container" align="center" style="padding-top: 50px; border:5px;">
<div class="row">
    <div class="col s8 offset-s2 m6 offset-m3">
      <div class="card grey darken-4" style="box-shadow: 10px 8px 3px #000000;">
        <div class="card-content white-text">
          <span class="card-title">Login</span>
        </div>

    <?php if(isset($login['error'])) : ?>
    <p style="color:red; font-style: italic;"><?= $login['pesan']; ?></p>
    <?php endif; ?>
    <form action="" method="POST">
        
    <div class="input-field col s12">
          <i class="material-icons"></i>
          <input type="text" id="autocomplete-input" class="autocomplete white-text" name="username" autofocus required autocomplete="off">
          <label for="autocomplete-input">Username</label>
        </div>

        <div class="input-field col s12">
          <input type="password" id="autocomplete-input" class="autocomplete white-text" name="password" required>
          <label for="autocomplete-input">Password</label>
        </div>
        <button type="submit" name="login" class="btn">Log in</button>
        <i class="material-icons white-text">code</i>
        <a href="../indexx.php" class="btn">Back</a><br><br>
        <label for="">Don't have an account yet? Click --></label>
        <a href="registrasi.php"><u>Here!!</u></a><br>
    </form>
    </div>
    </div>
    </div>
    </div>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="../js/materialize.min.js"></script>
</body>
</html>