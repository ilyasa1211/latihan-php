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

</head>

<body>
    <div class="konten">
        <span style="color:white">LOGIN</span>
        <div class="kotak">
            <form action="central.php" method="POST">
                <label for="nama">Nama</label>
                <input type="text" required id="nama" name="nama" placeholder="Masukkan nama" />
                <label for="password">Kata Sandi</label>
                <input type="text" required type="password" id="password" name="password" />
                <input type="checkbox" id="cb" name="cb" />
                <label for="cb">Ingat Saya</label><br />
                <input class="kirim" type="submit" name="kirim" value="Login" />
            </form>
            <a href="./register.php">Belum memiliki akun?</a>
        </div>
    </div>
</body>

</html>