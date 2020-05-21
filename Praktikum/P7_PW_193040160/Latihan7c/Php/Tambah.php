<?php
    session_start();

    if(!isset($_SESSION["username"])){
        header("Location: login.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Form Tambah Data Pakaian</h3>
    <form action="" method="post">
        <ul>
            <li>
                <label for="Foto">Foto(Nama file foto) : </label><br>
                <input type="text" name="Foto" id="Foto" required><br><br>
            </li>
            <li>
                <label for="Kategori">Kategori : </label><br>
                <input type="text" name="Kategori" id="Kategori" required><br><br>
            </li>
            <li>
                <label for="Merk">Merk : </label><br>
                <input type="text" name="Merk" id="Merk" required><br><br>
            </li>
            <li>
                <label for="Bahan">Bahan : </label><br>
                <input type="text" name="Bahan" id="Bahan" required><br><br>
            </li>
            <li>
                <label for="Harga">Harga : </label><br>
                <input type="numeric" name="Harga" id="Harga" required><br><br>
            </li>

            <br>
            <button type="Submit" name="Tambah">Tambah Data</button>
            <button type="Submit">
                <a href="../index.php" styles="text-decoration: none; color:black;">Kembali</a>
                </button>
        </ul>
    </form>
</body>
</html>

<?php
    require 'Function.php';

    if(isset($_POST['Tambah']))
    {
        if(tambah($_POST)>0)
        {
            echo "<script>
                        alert('Data Berhasil ditambahkan!');
                        document.location.href = 'admin.php';
                   </script>";
        } else {
            echo "<script>
                        aler('Data Gagal Ditambahkan!');
                        document.location.href = 'admin.php';
                  </script>";
        }
    }
?>