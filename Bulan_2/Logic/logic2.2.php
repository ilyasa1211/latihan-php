<?php

for ($i = 9; $i >= 1; $i--) {
    for ($j = 1; $j <= 9; $j++) {
        if ($j == $i)
            echo $j * 2 - 2;
        else
            echo " ";
    }
    echo "\n";
}