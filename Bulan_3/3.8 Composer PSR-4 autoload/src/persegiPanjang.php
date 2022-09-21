<?php
namespace persegiPanjang;
class persegiPanjang {
    function __construct($panjang, $lebar)
    {
        echo "Persegi panjang\n";
        echo "Panjang = $panjang\n";
        echo "Lebar = $lebar\n";
        echo "Luas = ".$panjang*$lebar."\n";
        echo "Keliling = ".(2*($panjang+$lebar))."\n";
    }
}