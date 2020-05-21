<?php
   require 'Function.php';

   $id = $_GET['Id'];
   $payan = query("SELECT * FROM pakaian WHERE Id = $id")[0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Form Ubah Data Pakaian</h3>
    <form action="" method="post">
    <input type="hidden" name="Id" id="Id" value="<?= $payan['Id'];?>">
        <ul>
            <li>
                <label for="Foto">Foto(Nama file foto) : </label><br>
                <input type="text" name="Foto" id="Foto" required value="<?= $payan['Foto']; ?>"><br><br>
            </li>
            <li>
                <label for="Kategori">Kategori : </label><br>
                <input type="text" name="Kategori" id="Kategori" required value="<?= $payan['Kategori'];?>"><br><br>
            </li>
            <li>
                <label for="Merk">Merk : </label><br>
                <input type="text" name="Merk" id="Merk" required value="<?= $payan['Merk'];?>"><br><br>
            </li>
            <li>
                <label for="Bahan">Bahan : </label><br>
                <input type="text" name="Bahan" id="Bahan" required value="<?= $payan['Bahan'];?>"><br><br>
            </li>
            <li>
                <label for="Harga">Harga : </label><br>
                <input type="numeric" name="Harga" id="Harga" required value="<?= $payan['Harga'];?>"><br><br>
            </li>

            <br>
            <button type="Submit" name="Ubah">Ubah Data</button>
            <button type="Submit">
                <a href="../index.php" styles="text-decoration: none; color:black;">Kembali ke index</a>
                </button>
        </ul>
    </form>
</body>
</html>

<?php
 

    if(isset($_POST['Ubah']))
    {
        if(Ubah($_POST)>0)
        {
            echo "<script>
                        alert('Data Berhasil diubah!');
                        document.location.href = 'admin.php';
                   </script>";
        } else {
            echo "<script>
                        aler('Data Gagal Diubah!');
                        document.location.href = 'admin.php';
                  </script>";
        }
    }
?>