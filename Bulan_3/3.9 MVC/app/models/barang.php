<?php

class A extends Database
{
    public function __construct()
    {
        $this->db = new Database;
    }
    public function getSemuaBarang()
    {
        $this->db->query('SELECT * from barang');
        return $this->db->selectAll();
    }
    public function getBarang()
    {
        $this->db->query('SELECT * from barang where id=:id');
        $this->db->bind('id', $_POST['id']);
        return $this->db->select();
    }
    public function tambahBarang($data)
    {
        $this->db->query('INSERT into barang values (null, :namaBarang, :hargaBarang, :stok)');
        $this->db->bind('namaBarang', $data['namaBarang']);
        $this->db->bind('hargaBarang', $data['hargaBarang']);
        $this->db->bind('stok', $data['stok']);
        $this->db->execute();
    }
    public function hapusBarang($id)
    {
        $this->db->query('DELETE from barang where id=:id');
        $this->db->bind('id', $id);
        $this->db->execute();
    }
    public function editBarang($data)
    {
        $this->db->query('UPDATE barang SET nama_barang=:namaBarang, harga_barang=:hargaBarang, stok=:stok where id=:id');
        $this->db->bind('namaBarang', $data['namaBarang']);
        $this->db->bind('hargaBarang', $data['hargaBarang']);
        $this->db->bind('stok', $data['stok']);
        $this->db->bind('id', $data['id']);
        $this->db->execute();
        // exit;
    }
}