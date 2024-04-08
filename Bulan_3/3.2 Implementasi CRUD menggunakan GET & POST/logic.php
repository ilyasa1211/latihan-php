<?php

class ConnectPDO
{
    private $username = "yasa";
    private $password = "bebekgoreng";
    function __construct()
    {
        $this->db = new PDO("mysql:host=localhost;dbname=z", $this->username, $this->password);
    }
    function CreateData()
    {
        $nama = $_POST['namaOrang'];
        $query = "INSERT INTO namaOrang(nama) values ('$nama')";
        $data = $this->db->prepare($query);
        $data->execute();
        header("Location:klikdisini.php");
    }
    function getData()
    {
        $query = "SELECT * from namaOrang";
        $data = $this->db->prepare($query);
        $data->execute();
        $result = $data->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    function showData()
    {
        $nama = $this->getData();
        $no = 1;
        foreach ($nama as $n) {
            echo "
                <tr>
                    <td>$no</td>
                    <form method='get'>
                    <td><input disabled id='n{$n['id']}' placeholder='{$n['nama']}' name='editnama'/></td>
                    <td class='hidden'><button type='submit' value='{$n['id']}' name='editID'></button</td>
                    <td><button type='submit' id='hapus{$n['id']}'value='{$n['id']}' name='delete'>hapus</button</td>
                    </form>
                    <td><button type='button' value='{$n['id']}' onclick='edit({$n['id']})'>edit</button></td>
                </tr>
                ";
            $no++;
        }
    }
    function deleteData($no)
    {
        $a = $this->db->prepare("DELETE from namaOrang where id=$no");
        $a->execute();
    }
    function editData()
    {
        $nama = $_GET['editnama'];
        $id = $_GET['editID'];
        $data = $this->db->prepare("UPDATE namaOrang set `nama`='$nama' where id =$id");
        $data->execute();
    }
}

$pdo = new ConnectPDO;
if (isset ($_POST['submit'])) {
    $pdo->CreateData();
}
if (isset ($_GET['delete'])) {
    $pdo->deleteData($_GET['delete']);
}
if (!empty ($_GET['editnama'])) {
    $pdo->editData();
}


