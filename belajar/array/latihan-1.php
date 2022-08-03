<?php

$data = [9, 10, 8, 7, 8, 6];
$mean;
$jumlah_semua_data = 0;
$banyaknya_data = 0;
foreach ($data as $dat){
    $jumlah_semua_data+=$dat;
    $banyaknya_data++;
}
$mean = $jumlah_semua_data/$banyaknya_data;
echo "Mean = ".$mean."\n";

sort($data);
$median;
if ($banyaknya_data%2==0)
$median = ($data[($banyaknya_data-1)/2]+$data[$banyaknya_data/2])/2;
else $median = $data[($banyaknya_data-1)/2];

echo "Median = ".$median."\n";

$modus = [];
$jumlah_terbanyak = 0;
$jumlah_terbanyak_sementara;
foreach ($data as $dat){
    $jumlah_terbanyak_sementara = 0;
    foreach ($data as $da)if ($dat==$da)$jumlah_terbanyak_sementara++;
    if ($jumlah_terbanyak<$jumlah_terbanyak_sementara)$jumlah_terbanyak=$jumlah_terbanyak_sementara;
}
$data_yang_sudah_ada = null;
foreach ($data as $dat){
    $jumlah_terbanyak_sementara = 0;
    foreach ($data as $da)if ($dat==$da)$jumlah_terbanyak_sementara++;
    if ($jumlah_terbanyak==$jumlah_terbanyak_sementara)if ($data_yang_sudah_ada != $dat)$modus[] = $data_yang_sudah_ada = $dat;
}
echo "Modus = ";
foreach ($modus as $modu){
    echo $modu.", ";
}

$simpangan_baku;
$Xi_mean = 0;
foreach ($data as $dat)$Xi_mean += pow(($dat-$mean),2);
$simpangan_baku = pow($Xi_mean/$banyaknya_data, .5);
echo "\nSimpangan baku = ".$simpangan_baku."\n";
