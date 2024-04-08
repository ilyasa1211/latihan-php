<?php
session_start();
if (!empty ($_SESSION))
    header("location:session_home.php");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Document</title>
</head>

<body>
    <form method="get" action="session_home.php">
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