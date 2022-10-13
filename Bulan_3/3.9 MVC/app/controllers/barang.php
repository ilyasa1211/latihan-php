<?php

class Barang extends Controller
{
    public function index()
    {
        $data['barang'] = $this->model('a')->getSemuaBarang();

        $this->view('templates/header', 'templates/footer', 'barang/index', $data);
    }
    public function tambah()
    {
        $data = [
            'namaBarang' => $_POST['namaBarang'],
            'hargaBarang' => $_POST['hargaBarang'],
            'stok' => $_POST['stok'],
        ];
        $this->model('a')->tambahBarang($data);
        header('location:http://localhost/MVC/public/barang');

    }
    public function hapus()
    {
        $id = $_GET['id'];
        $this->model('a')->hapusBarang($id);
        header('location:http://localhost/MVC/public/barang');

    }
    public function get()
    {
        $id = $_POST['id'];
        echo json_encode($this->model('a')->getBarang($id));
    }
    public function edit(){
        echo '',print_r($_POST);
        $this->model('a')->editBarang($_POST);
        header('location:http://localhost/MVC/public/barang');

    }
}
