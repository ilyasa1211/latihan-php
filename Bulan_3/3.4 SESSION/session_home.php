<?php
session_start();
if (empty($_GET) && empty($_SESSION)) header("location:session_loginpage.php");

if (empty($_SESSION)) {
    $_SESSION['nama'] = $_GET['nama'];
    $_SESSION['email'] = $_GET['email'];
    $_SESSION['password'] = $_GET['password'];
}
$nama = $_SESSION['nama'];
?>

<!DOCTYPE html>
<html>

<head>
    <title>Document</title>
</head>

<body>
    <h3>SESSION</h3>
    <h1><?php echo "Selamat Datang, " . $_SESSION['nama']."!";?></h1>
    <form>
        <input type="submit" name="logout" value="log out" />
    </form>
    <?php
    if (isset($_GET['logout'])) {
        session_destroy();
        header("location:session_loginpage.php");
    }
    ?>
</body>

</html>