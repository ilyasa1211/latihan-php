<?php

$data = [5, 9, 6, 7, 9, 8, 10, 7, 8];
$lowest = [];
$highest = [];
$ambil_data = 3;
sort($data);
$banyaknya_data = count($data);

for ($i=0;$i<=$ambil_data-1;$i++)$lowest[] = $data[$i];
// rsort($data);
// for ($i=0;$i<=$ambil_data-1;$i++)$highest[] = $data[$i];
for ($i=$banyaknya_data-1;$i>=$banyaknya_data-$ambil_data;$i--)$highest[] = $data[$i];
echo "lowest = ";
foreach ($lowest as $low)echo $low.", ";
echo "\n";
// sort($highest);
echo "highest = ";
foreach ($highest as $high)echo $high.", ";
echo "\n";
