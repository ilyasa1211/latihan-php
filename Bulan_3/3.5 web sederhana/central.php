<?php
session_start();
class artikel
{
    function __construct()
    {
        $this->connect = new PDO("mysql:host=localhost;dbname=artikel", "yasa", "bebekgoreng");
    }
    function daftar($nama, $email, $password)
    {
        $this->connect->query("INSERT into userData(nama,email,password) values ('$nama','$email','$password')");
    }
    function create($nama, $judul, $kategori, $isi, $tanggal)
    {
        $this->connect->query("INSERT into userContent(nama,judul,kategori,isi,tanggal) values ('$nama','$judul','$kategori','$isi','$tanggal')");
    }
    function check($nama)
    {
        $data = $this->connect->query("SELECT nama from userData");
        foreach ($data->fetchAll(PDO::FETCH_ASSOC) as $dat) if ($dat['nama'] == $nama) return true;
        return false;
    }
    function verify($nama, $password)
    {
        $data = $this->connect->query("SELECT nama,password from userData");
        foreach ($data->fetchAll(PDO::FETCH_ASSOC) as $dat) if ($dat['nama'] == $nama && $dat['password'] == $password) return true;
        return false;
    }
    function delete($id)
    {
        $this->connect->query("DELETE from userContent where id=$id");
    }
    function verifyChange($id, $nama)
    {
        $data = $this->connect->query("SELECT id,nama from userContent");
        foreach ($data->fetchAll(PDO::FETCH_ASSOC) as $dat) if ($dat['id'] == $id && $dat['nama'] == $nama) return true;
        return false;
    }
    function edit($id, $judul, $kategori, $isi)
    {
        $this->connect->query("UPDATE userContent set judul='$judul', kategori='$kategori', isi='$isi' where id=$id");
    }
    function show()
    {
        $data = $this->connect->query("SELECT id,nama,judul,kategori,isi,tanggal from userContent");
        foreach ($data->fetchAll(PDO::FETCH_ASSOC) as $dat) {
            if ($dat['nama'] == $_SESSION['nama'] && !is_null($_SESSION['nama'])) {
                echo "
                <div class='kartu'>
                <a href='artikel.php?show={$dat['id']}'>
                    <div>
                    <form>
                        <div class='judul'>{$dat['judul']}</div>
                        <div class='kategori'>{$dat['kategori']}</div>
                    <form>
                    </div>
                    </a>
                    <div>
                        <div class='nama'>
                            <span class='penulis'>Penulis : {$dat['nama']}</span>
                            <div class='edithapus'>
                            <form action='central.php'>
                                <button type='submit' name='edit' value='{$dat['id']}'>Edit</button>
                                <button type='submit' name='hapus' value='{$dat['id']}'>Hapus</button>
                            </form>
                            </div>
                            <span class='tanggal'>{$dat['tanggal']}</span>
                        </div>
                    </div>
                </div>
                ";
                continue;
            }
            echo "
            
            <div class='kartu'>
            <a href='artikel.php?show={$dat['id']}'>
                    <div>
                        <div class='judul'>{$dat['judul']}</div>
                        <div class='kategori'>{$dat['kategori']}</div>
                    </div>
                    </a>
                    <div>
                        <div class='nama'>
                            <span class='penulis'>Penulis : {$dat['nama']}</span>
                            <span class='tanggal'>{$dat['tanggal']}</span>
                        </div>
                    </div>
                </div>
                
                ";
        }
    }
    function showMine()
    {
        $data = $this->connect->query("SELECT id,nama,judul,kategori,isi,tanggal from userContent where nama='{$_SESSION['nama']}'");
        foreach ($data->fetchAll(PDO::FETCH_ASSOC) as $dat) {
            echo "
                <div class='kartu'>
                <a href='artikel.php?show={$dat['id']}'>
                    <div>
                    <form method='POST'>
                        <div class='judul'>{$dat['judul']}</div>
                        <div class='kategori'>{$dat['kategori']}</div>
                    <form>
                    </div>
                    </a>
                    <div>
                        <div class='nama'>
                            <span class='penulis'>Penulis : {$dat['nama']}</span>
                            <div class='edithapus'>
                            <form action='central.php'>
                                <button type='submit' name='edit' value='{$dat['id']}'>Edit</button>
                                <button type='submit' name='hapus' value='{$dat['id']}'>Hapus</button>
                            </form>
                            </div>
                            <span class='tanggal'>{$dat['tanggal']}</span>
                        </div>
                    </div>
                </div>
                ";
        }
    }
}
$pdo = new artikel;
try {
    $nama = "";
    if (!empty($_COOKIE['nama'])) $nama = $_COOKIE['nama'];
    if ($_POST['kirim'] == "Daftar") {
        if ($pdo->check($_POST['nama'])) throw new PDOException("Nama {$_POST['nama']} telah terdaftar!");
        $pdo->daftar($_POST['nama'], $_POST['email'], $_POST['password']);
        header("location:login.php");
    }
    if ($_POST['kirim'] == "Login") {
        if (!$pdo->check($_POST['nama'])) throw new PDOException("Nama {$_POST['nama']} belum terdaftar!");
        if (!$pdo->verify($_POST['nama'], $_POST['password'])) throw new PDOException("Kata sandi salah!");
        // session_start();
        if (empty($_SESSION)) {
            $_SESSION['nama'] = $_POST['nama'];
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['password'] = $_POST['password'];
            $nama = $_SESSION['nama'];
        }
        if (!is_null($_POST['cb'])) {
            setcookie('nama', $_SESSION['nama'], time() + 3600, "../");
            setcookie('email', $_SESSION['email'], time() + 3600, "../");
            setcookie('password', $_SESSION['nama'], time() + 3600, "../");
            $_COOKIE['nama'] = $_SESSION['nama'];
            $_COOKIE['email'] = $_SESSION['email'];
            $_COOKIE['password'] = $_SESSION['password'];
        }
        header("location:home.php");
    }
    if ($_GET['kirim'] == "Keluar") {
        // session_start();
        session_unset();
        setcookie('nama', "", time() - 0, "../");
        setcookie('email', "", time() - 0, "../");
        setcookie('password', "", time() - 0, "../");
        header("location:home.php");
    }
    if ($_GET['kirim'] == "Masuk") header("location:login.php");
    if ($_GET['kirim'] == "Buat") header("location:create.php");
    if ($_POST['kirim'] == "create") {
        $pdo->create($_SESSION['nama'], $_POST['judul'], $_POST['kategori'], $_POST['isi'], date("d-m-Y"));
        header("location:home.php");
    }
    if (isset($_GET['hapus'])) {
        if (!$pdo->verifyChange($_GET['hapus'], $_SESSION['nama'])) throw new PDOException("KESALAHAN!");
        $pdo->delete($_GET['hapus']);
        header("location:home.php");
    }
    if (isset($_GET['edit'])) {
        header("location:edit.php?id={$_GET['edit']}");
    }
    if (isset($_POST['update'])) {
        if (!$pdo->verifyChange($_POST['update'], $_SESSION['nama'])) throw new PDOException("KESALAHAN!");
        $pdo->edit($_POST['update'], $_POST['judul'], $_POST['kategori'], $_POST['isi']);
        header("location:home.php");
    }
    if ($_GET['kirim'] == "Saya") {
        header("location:myarticle.php");
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
