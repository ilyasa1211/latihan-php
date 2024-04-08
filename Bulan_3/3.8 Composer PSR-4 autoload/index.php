<?php

require_once 'vendor/autoload.php';
use lingkaran\lingkaran;
use persegi\persegi;
use persegiPanjang\persegiPanjang;
use segitiga\segitiga;

$panjangSisi = 9;

$panjang = 5;
$lebar = 6;

$jari = 7;

$alas = 6;
$tinggi = 4;

$persegi = new persegi($panjangSisi);
echo "\n";

$persegiPanjang = new persegiPanjang($panjang, $lebar);
echo "\n";

$lingkaran = new lingkaran($jari);
echo "\n";

$segitiga = new segitiga($alas, $tinggi);
echo "\n";
