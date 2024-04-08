<?php

for ($i = 1; $i <= 9; $i++) {
    for ($j = 1; $j <= 9; $j++) {
        if ($j == $i || $j == 5)
            echo ($j * 2 - 1) . " ";
        elseif ($j + $i == 10 || $i == 5)
            echo ($j * 2 - 2) . " ";
        else
            echo "  ";
    }
    echo "\n";
}