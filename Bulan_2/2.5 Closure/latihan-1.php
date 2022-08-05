<?php

// echo "Masukkan panjang persegi panjang = ";
$panjang = 4;
// echo "Masukkan lebar persegi panjang = ";
$lebar = 2;
$calcRectangleArea = function (int $width, int $length){
    echo "Luas persegi panjang = ".$width*$length;
};
$calcRectangleArea($panjang, $lebar);
echo "\n";
