<?php

class persegiPanjang {

    function __construct(){
        echo "Menghitung luas persegi panjang\n";
    }
    function luas($panjang, $lebar){
        return $panjang*$lebar;
    }
    function keliling($panjang, $lebar){
        return 2*($panjang+$lebar);
    }
}
$persegiPanjang = new persegiPanjang;
echo "Masukkan panjang : ";
$panjang = trim(fgets(STDIN));
echo "Masukkan lebar : ";
$lebar = trim(fgets(STDIN));
echo "Luas persegi panjang = ".$persegiPanjang->luas($panjang, $lebar);
echo "\n";
echo "Keliling persegi panjang = ".$persegiPanjang->keliling($panjang, $lebar);
echo "\n\n";