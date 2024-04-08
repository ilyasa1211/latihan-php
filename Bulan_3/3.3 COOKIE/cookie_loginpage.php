<?php
if (!empty ($_COOKIE))
    header("location:cookie_home.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="get" action="cookie_home.php">
        <table>
            <tr>
                <td><label for="nama">Nama</label></td>
                <td><input required id="nama" name="nama" /></td>
            </tr>
            <tr>
                <td><label for="email">Email</label></td>
                <td><input required type="email" id="email" name="email" /></td>
            </tr>
            <tr>
                <td><label for="password">Password</label></td>
                <td><input required type="password" id="password" name="password" /></td>
            </tr>
            <tr>
                <td><input required type="submit" name="kirim" value="Kirim" /></td>
            </tr>
        </table>
    </form>
</body>

</html>