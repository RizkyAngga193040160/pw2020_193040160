<?php
    $conn = mysqli_connect("localhost","root","") or die("koneksi ke DB gagal");

    mysqli_select_db($conn, "pw_193040160") or die("Database salah!");

    $result = mysqli_query($conn, "SELECT * FROM pakaian");
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2 193040160</title>
    <style>
        h1{
            font-family : Algerian;
            text-shadow : 2px 2px 10px;
        }

        td{
            padding : 10px 30px 10px 30px;
        }

    </style>
</head>
<body align="center">
    <h1>Data Pakaian</h1>

    <table border="1" cellspacing="1" cellpadding="5" align="center"> 
        <tr>
            <th>Nomor</th>
            <th>Foto</th>
            <th>Kategori</th>
            <th>Merek</th>
            <th>Bahan</th>
            <th>Harga</th>
        </tr>
        <?php $nomor = 1; ?>
        <?php while($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
        <td><?php echo $nomor++;?></td>
        <td><img src="Assets/Img/<?= $row["Foto"]; ?>"></td>
        <td><?php echo $row['Kategori'] ;?></td>
        <td><?php echo $row['Merk'] ;?></td>
        <td><?php echo $row['Bahan'] ;?></td>
        <td>Rp. <?php echo $row['Harga'] ;?></td>
        </tr>
        <?php endwhile; ?>
    </table>
    
</body>
</html>