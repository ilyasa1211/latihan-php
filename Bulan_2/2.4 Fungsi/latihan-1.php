<?php

echo "Masukkan panjang persegi panjang = ";
$panjang = trim(fgets(STDIN));
echo "Masukkan lebar persegi panjang = ";
$lebar = trim(fgets(STDIN));
function calcRectangleArea(int $width, int $length)
{
    return $width * $length;
}
echo "Luas persegi panjang = " . calcRectangleArea($panjang, $lebar);
echo "\n";

