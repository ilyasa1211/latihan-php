<?php for ($a = 0; $a < 9; $a++) {
    for ($b = 0; $b <= $a; $b++)
        if ($b <= $a)
            echo "* ";
        else
            echo "  ";
    echo "\n";
}