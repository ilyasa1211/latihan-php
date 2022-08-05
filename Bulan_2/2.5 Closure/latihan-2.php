<?php

//ukuran segitiga
$alas = 4;
$tinggi_segitiga = 7;
$calcTriangleArea = function ($alas, $tinggi){
    echo "Luas segitiga = ".$alas*$tinggi/2;
};
$calcTriangleArea($alas, $tinggi_segitiga);
echo "\n";
//ukuran trapesium
$atas = 5;
$bawah = 9;
$tinggi_trapesium = 6;
$calcTrapezoidArea = function ($atas, $bawah, $tinggi){
    echo "Luas Trapesium = ".($atas+$bawah)*$tinggi/2;
};
$calcTrapezoidArea($atas, $bawah, $tinggi_trapesium);
echo "\n";
//diameter lingkaran
$diameter = 14;
$calcCircleArea = function ($diameter){
    echo "Luas Lingkaran = ".(3.14*($diameter/2)*($diameter/2));
};
$calcCircleArea($diameter);
echo "\n";