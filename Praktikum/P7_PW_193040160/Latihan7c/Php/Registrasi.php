<?php
    require 'Function.php';

    if(isset($_POST['register'])){

        if(registrasi($_POST) > 0){
        echo "<script>
                alert('Registrasi Berhasil!!!');
                document.location.href = 'login.php';
                </script>";
    } else {
        echo "<script>
                alert('Registrasi Gagal!!!');
                </script>";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body align="center">
    <h2>Register</h2>
        <form action="" method="POST">
            <table align="center">
                <tr>
                <td><label for="username">Username</label></td>
                <td>:</td>
                <td><input type="text" name="username" autofocus autocomplete="off" required></td>
                </tr>
                <tr>
                <td><label for="password">Password</label></td>
                <td>:</td>
                <td><input type="password" name="password" required></td>
                </tr>
            </table>
            <br><br>
            <button type="submit" name="register" >Registrasi</button>
            </table>
        </form>
</body>
</html>