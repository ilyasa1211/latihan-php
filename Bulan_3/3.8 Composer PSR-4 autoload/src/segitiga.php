<?php
namespace segitiga;
class segitiga {
    function __construct($alas, $tinggi)
    {
        echo "Segitiga\n";
        echo "Panjang Alas = $alas\n";
        echo "Tinggi = $tinggi\n";
        echo "Luas = ".($alas*$tinggi/2)."\n";
        $sisiMiring = sqrt($tinggi**2 + ($alas/2)**2);
        $keliling = $alas + $sisiMiring * 2;
        echo "Keliling = ".$keliling."\n";
    }
}