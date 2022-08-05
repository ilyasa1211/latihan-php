<?php

$students = [
    'IT-001' => 'Ridwan',
    'IT-010' => 'Achmad',
    'IT-005' => 'Yusuf',
    'IT-002' => 'Arief',
    'IT-004' => 'Dayat',
    'IT-017' => 'Lutfi',
   ];

ksort($students);
echo "1. Urutkan berdasarkan nomor induk\n";
foreach ($students as $nomor_induk => $nama)echo "   ".$nomor_induk." ".$nama."\n";
echo "\n\n";
arsort($students);
echo "2. Urutkan terbalik berdasarkan nama\n";
foreach ($students as $nomor_induk => $nama)echo "   ".$nomor_induk." ".$nama."\n";
echo "\n\n";
echo "3. Nama siswa terakhir berdasarkan urutan nama = ";
rsort($students);
echo $students[0];
echo "\n\n";
