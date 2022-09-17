<?php
// session_start();
require "central.php";
if (empty($_SESSION['nama'])) header("location:login.php");
$data = $pdo->connect->query("SELECT * from userContent where id='{$_GET['id']}'");
$dat = $data->fetch(PDO::FETCH_ASSOC);
$judul = $dat['judul'];
$kategori = $dat['kategori'];
$isi = $dat['isi'];

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
            background-color: #ddd;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin: 20px 0 5px 0;
        }

        .tempat {
            width: 600px;
            margin: auto;
        }

        input[type=text],
        select,
        option,
        textarea,
        button,
        a {
            text-decoration: none;
            border-style: none;
            /* border-bottom: 5px solid grey; */
            padding: 10px;
            border-radius: 15px;
        }

        input[type=text],
        select,
        textarea {
            color: black;
            box-shadow: 5px 5px 20px #bebebe, -5px -5px 20px #ffffff;
            background-color: #e0e0e0;
        }

        button {
            background-color: azure;
            box-shadow: 0 0 20px #999;
            margin-top: 40px;
            width: 40%;
            padding: 10px;
        }
    </style>
</head>

<body>
    <div class="tempat">
        <form action="central.php" method="POST">
            <label for="judul">Judul</label>
            <input required type="text" id="judul" name="judul" placeholder="Masukkan Judul" value="<?= $judul ?>" />
            <label for="kategori">Kategori</label>
            <div>
                <select id="kategori" name="kategori">
                    <option>Wisata</option>
                    <option>Makanan</option>
                    <option>Hewan</option>
                    <option>Fotografi</option>
                    <option>Olahraga</option>
                    <option>Kendaraan</option>
                    <option>Bangunan</option>
                    <option>Gaya Hidup</option>
                    <option>Hiburan</option>
                    <option>Tumbuhan</option>
                    <option>Game</option>
                    <option selected>Lainnya</option>
                </select>
            </div>
            <label for="isi">Isi</label>
            <textarea required style="resize:none" name="isi" id="isi" cols="30" rows="10" placeholder="Tuliskan sesuatu.."><?= $isi ?></textarea>
            <button type="submit" name="update" value="<?= $_GET['id'] ?>">Update</button>
        </form>
        <form><button type="submit" name="kirim" value="kembali">Kembali</button></form>
    </div>
    <?php if ($_GET['kirim'] == "kembali") header("location:home.php") ?>
</body>