<?php

for($i=1;$i<=9;$i++){
    for($j=1;$j<=9;$j++){
        if($j==$i)echo $j*2-1;
        else echo " ";
    }
    echo "\n";
}