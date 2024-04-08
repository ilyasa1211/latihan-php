<?php
namespace lingkaran;

class lingkaran
{
    function __construct($jari)
    {
        echo "Lingkaran\n";
        echo "Jari-jari = $jari\n";
        echo "Luas = " . (pi() * $jari ** 2) . "\n";
        echo "Keliling = " . (2 * pi() * $jari) . "\n";
    }
}