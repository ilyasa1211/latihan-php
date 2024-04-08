<?php for ($a = 0; $a < 9; $a++) {
    for ($b = 0; $b < 9; $b++)
        if (($a + $b > 9 - 2 || $a <= $b) && ($a + $b < 9 || $a >= $b))
            echo "* ";
        else
            echo "  ";
    echo "\n";
}