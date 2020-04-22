<?php
    require'Php/Function.php';

    $pakaian = query("SELECT * FROM pakaian");
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
<body>
        <div class="container">
        <?php foreach($pakaian as $payan) : ?>
            <p class="nama">
                <a href="Php/Detail.php?Id=<?= $payan['Id'] ?>">
                    <?= $payan["Kategori"]  ?>
                </a>
            </p>
        <?php endforeach; ?>
        </div>
</body>
</html>