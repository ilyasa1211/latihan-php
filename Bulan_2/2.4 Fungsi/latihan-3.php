<?php

$larik = [2, 3, 4, 5, 6, 7, 8, 9];
function ubah($array)
{
    $i = 0;
    foreach ($array as $a) {
        $i++;
        $array[$i - 1] = $a * 3;
    }
    return $array;
}
$larik = ubah($larik);
print_r($larik);
echo "\n";