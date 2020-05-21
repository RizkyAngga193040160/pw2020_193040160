<?php
require 'functions.php';

if(isset($_POST['registrasi'])){
    if(registrasi($_POST) > 0 ){
        echo "<script>
          alert('User berhasil ditambahkan!!');
          document.location.href = 'login.php';
          </script>";
    } else{
        echo 'user gagal ditambahkan!';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
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
          <span class="card-title">Register</span>
        </div>

    <form action="" method="POST">
        
    <div class="input-field col s12">
          <input type="text" id="autocomplete-input" class="autocomplete white-text" name="username" autofocus required autocomplete="off">
          <label for="autocomplete-input">Username</label>
        </div>

        <div class="input-field col s12">
          <input type="password" id="autocomplete-input" class="autocomplete white-text" name="password1" required>
          <label for="autocomplete-input">Password</label>
        </div>

        <div class="input-field col s12">
          <input type="password" id="autocomplete-input" class="autocomplete white-text" name="password2" required>
          <label for="autocomplete-input">Confirm Password</label>
        </div>

        <button type="submit" name="registrasi" class="btn">Register</button><br><br>
 
        <a href="login.php"><u>Back to Login Form...</u></a><br>
    </form>
    </div>
    </div>
    </div>
    </div>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="../js/materialize.min.js"></script>
</body>
</html>