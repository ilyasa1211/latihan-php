<?php

class persegi
{
    function __construct($panjangSisi)
    {
        echo "Persegi\n";
        echo "Panjang Sisi = $panjangSisi\n";
        echo "Luas = " . ($panjangSisi ** 2) . "\n";
        echo "Keliling = " . (4 * $panjangSisi) . "\n";
    }
}