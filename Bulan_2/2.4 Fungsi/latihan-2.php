<?php

//ukuran segitiga
$alas = 4;
$tinggi_segitiga = 7;
function calcTriangleArea($alas, $tinggi){
    return $alas*$tinggi/2;
}
echo "Luas segitiga = ".calcTriangleArea($alas, $tinggi_segitiga);
echo "\n";
//ukuran trapesium
$atas = 5;
$bawah = 9;
$tinggi_trapesium = 6;
function calcTrapezoidArea($atas, $bawah, $tinggi){
    return ($atas+$bawah)*$tinggi/2;
}
echo "Luas Trapesium = ".calcTrapezoidArea($atas, $bawah, $tinggi_trapesium);
echo "\n";
//diameter lingkaran
$diameter = 14;
function calcCircleArea($diameter){
    return 3.14*($diameter/2)*($diameter/2);
}
echo "Luas Lingkaran = ".calcCircleArea($diameter);
echo "\n";