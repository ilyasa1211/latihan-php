<?php
if (empty($_GET) && empty($_COOKIE)) header("location:cookie_loginpage.php");

if (isset($_COOKIE)) {
    setcookie('nama', $_GET['nama'], time() + 3600, "/");
    $_COOKIE['nama'] = $_GET['nama'];
    setcookie('email', $_GET['email'], time() + 3600, "/");
    setcookie('password', $_GET['password'], time() + 3600, "/");
}

$nama = $_COOKIE['nama'];

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
    <form>
        <input type="submit" name="logout" value="log out" />
    </form>
    <?php
    echo "halo " . $_COOKIE['nama'];
    if (isset($_GET['logout'])) {
        setcookie('nama', $_GET['nama'], time() + 0, "/");
        setcookie('email', $_GET['email'], time() + 0, "/");
        setcookie('password', $_GET['password'], time() + 0, "/");
        header("location:cookie_loginpage.php");
    }
    ?>
</body>

</html>