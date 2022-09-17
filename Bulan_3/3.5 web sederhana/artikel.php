<?php
require "central.php";
$data = $pdo->connect->query("SELECT * from userContent where id='{$_GET['show']}'");
$dat = $data->fetch(PDO::FETCH_ASSOC);
$nama = $dat['nama'];
$judul = $dat['judul'];
$kategori = $dat['kategori'];
$isi = $dat['isi'];
$tanggal = $dat['tanggal'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            /* color: wheat; */
            margin: 0;
            background-color: #704F4F;
        }

        .judul {
            font-size: 50px;
            font-weight: bold;
            color: wheat;
            text-align: center;
            padding: 20px;
            background-color: #483838;
        }

        .author {
            display: flex;
            justify-content: space-around;
            padding: 15px;
            font-size: 20px;
            background-color: #A77979;
            margin-bottom: 20px;
        }

        .isi {
            margin: 50px;
            color: #FFD8A9;
            font-size: 25px;
        }
    </style>
</head>

<body>
    <div class="judul"><?= $judul ?></div>
    <div class="author">
        <span>Penulis : <?= $nama ?></span>
        <span>Kategori : <?= $kategori ?></span>
        <span> Tanggal : <?= $tanggal ?></span>
    </div>
    <span class="isi" style="text-indent:2cm;"><?= $isi ?></span>
</body>

</html>