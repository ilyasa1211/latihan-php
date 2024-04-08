<?php

// 1. luas persegi panjang (panjang.lebar)
//
// panjang = 5
// lebar = 8
$panjang_persegi = 5;
$lebar_persegi = 8;
$hasil_perhitungan = $panjang_persegi * $lebar_persegi;
echo "1.\n";
echo "Panjang persegi:" . $panjang_persegi . "\n";
echo "Lebar persegi:" . $lebar_persegi . "\n";
echo "Luas persegi tersebut adalah:" . $hasil_perhitungan . "\n\n\n";

// 2. luas dan keliling lingkaran
//
// diameter = 8
// luas = pi.r.r
// keliling = pi.d
$diameter = 9;
$jari_jari = $diameter / 2;
$pi = 3.14;
$luas_lingkaran = $pi * $jari_jari * $jari_jari;
$keliling_lingkaran = $pi * $diameter;
echo "2.\n";
echo "Diameter : " . $diameter . "\n";
echo "Luas Lingkaran : " . $luas_lingkaran . "\n";
echo "Keliling Lingkaran : " . $keliling_lingkaran . "\n\n\n";

// 3. konversi suhu
//
// suhu celcius = 34
// celcius : kelvin : fahrenheit : reamur
// 5 : C+273 : 9/5xC+32 : 4/5xC
$celcius = 34;
$celcius_kelvin = $celcius + 273;
$celcius_fahrenheit = 9 / 5 * $celcius + 32;
$celcius_reamur = 4 / 5 * $celcius;
echo "3.\n";
echo "Suhu Celcius = " . $celcius . "\n";
echo "Suhu Kelvin = " . $celcius_kelvin . "\n";
echo "Suhu Fahrenheit = " . $celcius_fahrenheit . "\n";
echo "Suhu Reamur = " . $celcius_reamur . "\n\n\n";

// 4. pola bilangan
// 
// 2, 4, 6, 8, 10
$awal_echo = $awal = 2;
$beda = 2;
$n5 = 5;
$n9 = 9;
$n19 = 19;
echo "4.\n";
echo "Deret bilangan = " . ($awal_echo) . ", " . ($awal_echo += 2) . ", " . ($awal_echo += 2) . ", " . ($awal_echo += 2) . ", " . ($awal_echo += 2) . "\n";
echo "Suku ke-5 = " . ($awal + $n5 * $beda) . "\n";
echo "Suku ke-9 = " . ($awal + $n9 * $beda) . "\n";
echo "Suku ke-19 = " . ($awal + $n19 * $beda) . "\n\n\n";
