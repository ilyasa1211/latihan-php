<?php for ($a = 0; $a < 9; $a++) {
    for ($b = 0; $b < 9; $b++)
        if ($a + $b >= 9 - 1)
            echo "* ";
        else
            echo "  ";
    echo "\n";
}