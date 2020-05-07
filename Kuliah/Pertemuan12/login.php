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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h3>Form Login</h3>

    <?php if(isset($login['error'])) : ?>
    <p style="color:red; font-style: italic;"><?= $login['pesan']; ?></p>
<?php endif; ?>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="">
                    Username : 
                    <input type="text" name="username" autofocus autocomplete="off" required>
                </label>
            </li>
            <li>
                Password : 
                <input type="password" name="password" required>
            </li>
            <li>
                <button type="submit" name="login">Log in</button>
            </li>
            <li>
                <a href="registrasi.php">Tambah User</a>
            </li>
        </ul>
    </form>
</body>
</html>