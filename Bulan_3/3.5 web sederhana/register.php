<?php
session_start();
if (!empty ($_SESSION['nama']))
    header("location:home.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet">
    <style>

    </style>
</head>

<body>
    <div class="konten">
        <span style="color:white">DAFTAR</span>
        <div class="kotak">
            <form action="central.php" method="POST">
                <label for="nama">Nama</label>
                <input type="text" required id="nama" name="nama" placeholder="Masukkan nama" />
                <label for="email">Email</label>
                <input type="text" required id="email" name="email" placeholder="admin@example.com" />
                <label for="password">Kata Sandi</label>
                <input type="text" required type="password" id="password" name="password" />
                <input class="kirim" type="submit" name="kirim" value="Daftar" />
            </form>
            <a href="./login.php">Sudah memiliki akun?</a>
        </div>
    </div>
</body>

</html>