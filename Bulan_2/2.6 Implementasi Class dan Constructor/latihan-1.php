<?php

class perpustakaan
{
    private $buku = [
        [
            "judul" => "MATEMATIKA",
            "isbn" => "2022-00"
        ],
        [
            "judul" => "BAHASA INDONESIA",
            "isbn" => "2022-01"
        ],
    ];
    function tampilkan_judul_buku()
    {
        $i = 0;
        echo "Buku yang tersedia : \n";

        echo "NO  ISBN   JUDUL BUKU\n";
        echo "================================\n";
        foreach ($this->buku as $kunci => $nilai) {
            echo ++$i . ". " . $nilai["isbn"] . " " . $nilai["judul"] . "\n";
        }
        echo "================================\n";
    }
    function __construct($judul, $isbn)
    {
        $this->buku[count($this->buku)]["judul"] = $judul;
        $this->buku[count($this->buku) - 1]["isbn"] = $isbn;
    }
    function tambah($judul, $isbn)
    {
        echo "\nKAMU MENAMBAHKAN BUKU " . $judul . "\n";
        $this->buku[count($this->buku)]["judul"] = $judul;
        $this->buku[count($this->buku) - 1]["isbn"] = $isbn;
    }
    function minjam($no)
    {
        echo "\nKAMU MEMINJAM BUKU " . $this->buku[$no - 1]["judul"] . "\n";
        unset($this->buku[$no - 1]);
    }
    function banyak_buku()
    {
        return count($this->buku);
    }
}
$perpustakaan = new perpustakaan("BAHASA INGGRIS", "2022-02");
echo "1. Minjam buku\n";
echo "2. Tambah buku\n";
echo "Pilih : ";
$input = boolval(trim(fgets(STDIN)) - 1);
echo "\n";
if (!$input) {
    $perpustakaan->tampilkan_judul_buku();
    echo "Pilih buku (1-{$perpustakaan->banyak_buku()}) : ";
    $minjam = trim(fgets(STDIN));
    $perpustakaan->minjam($minjam);
    $perpustakaan->tampilkan_judul_buku();
} else {
    echo "Judul buku yang akan ditambahkan : ";
    $tambah_judul = trim(fgets(STDIN));
    echo "ISBN buku :";
    $tambah_isbn = trim(fgets(STDIN));
    $perpustakaan->tambah($tambah_judul, $tambah_isbn);
    $perpustakaan->tampilkan_judul_buku();
}
