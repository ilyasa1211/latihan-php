<?php

class lingkaran {
    function __construct(){
        echo "Menghitung luas lingkaran\n\n";
    }
    function luas($diameter){
        return pi()*pow($this->diameterKeJariJari($diameter), 2);
    }
    function keliling($diameter){
        return pi()*$diameter;
    }
    function diameterKeJariJari($diameter){
        return $diameter/2;
    }
}
class trapesium {
    function __construct()
    {
        echo "Menghitung luas trapesium\n\n";
    }
    function luas($atas, $bawah, $tinggi){
        return ($atas+$bawah)*$tinggi/2;
    }
    function keliling($atas, $bawah, $tinggi){
        return 2*sqrt(pow(abs($bawah-$atas)/2, 2)+pow($tinggi, 2))+$atas+$bawah;
    }
}
$lingkaran = new lingkaran;
echo "Masukkan Diameter : ";
$diameter = trim(fgets(STDIN));
echo "Luas lingkaran = ".$lingkaran->luas($diameter);
echo "\n";
echo "Keliling lingkaran = ".$lingkaran->keliling($diameter);
echo "\n\n";

$trapesium = new trapesium;
echo "Masukkan panjang atas : ";
$atas = trim(fgets(STDIN));
echo "Masukkan panjang bawah : ";
$bawah = trim(fgets(STDIN));
echo "Masukkan tinggi : ";
$tinggi = trim(fgets(STDIN));
echo "Luas trapesium  = ".$trapesium->luas($atas, $bawah, $tinggi);
echo "\n";
echo "Keliling trapesium  = ".$trapesium->keliling($atas, $bawah, $tinggi);
echo "\n\n";