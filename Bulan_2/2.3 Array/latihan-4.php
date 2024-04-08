<?php

$students = [
    [
        'id' => 'IT-001',
        'name' => 'Ridwan',
        'division' => 'PHP Backend',
        'age' => 25,
    ],
    [
        'id' => 'IT-010',
        'name' => 'Achmad',
        'division' => 'Java for Android',
        'age' => 23,
    ],
    [
        'id' => 'IT-005',
        'name' => 'Yusuf',
        'division' => 'ReactJS',
        'age' => 22,
    ],
    [
        'id' => 'IT-002',
        'name' => 'Arief',
        'division' => 'PHP Backend',
        'age' => 21,
    ],
    [
        'id' => 'IT-004',
        'name' => 'Dayat',
        'division' => 'React Native',
        'age' => 21,
    ],
    [
        'id' => 'IT-017',
        'name' => 'Lutfi',
        'division' => 'ReactJS',
        'age' => 18,
    ]
];
$array_id = [];
$array_name = [];
$array_division = [];
$array_age = [];
$garis = "==================================================";
foreach ($students as $key => $value) {
    $array_id[$key] = $value["id"];
    $array_name[$key] = $value["name"];
    $array_division[$key] = $value["division"];
    $array_age[$key] = $value["age"];
}
asort($array_id);
echo "\nDaftar satri berdasar nomor induk kecil ke besar = \n$garis\n";
foreach ($array_id as $key => $value) {
    foreach ($students[$key] as $key1 => $value1)
        echo $key1 . " = " . $value1 . "\n";
    echo "\n";
}
echo "\n\n\n";
asort($array_name);
echo "Daftar santri berdasar nama kecil ke besar = \n$garis\n";
foreach ($array_name as $key => $value) {
    foreach ($students[$key] as $key1 => $value1)
        echo $key1 . " = " . $value1 . "\n";
    echo "\n";
}
echo "\n\n\n";
echo "Daftar santri dengan minat 'PHP Backend' = \n$garis\n";
foreach ($array_division as $key => $value) {
    if ($value == "PHP Backend")
        foreach ($students[$key] as $key1 => $value1)
            echo $key1 . " = " . $value1 . "\n";
    echo "\n";
}
$jumlah_santri_dibawah25 = 0;
$jumlah_usia = 0;
$jumlah_santri = 0;
$usia_terendah = 0;
sort($array_age);
foreach ($students as $key)
    $jumlah_santri++;
foreach ($array_age as $key => $value) {
    $jumlah_usia += $value;
    if ($value < "25") {
        $jumlah_santri_dibawah25++;
    }
}
echo "Jumlah santri dibawah 25 tahun = " . $jumlah_santri_dibawah25 . "\n$garis\n";
$rata_rata_usia_santri = $jumlah_usia / $jumlah_santri;
echo "rata-rata usia santri = " . $rata_rata_usia_santri . "\n$garis\n";
echo "Usia santri paling muda = " . $array_age[0] . "\n$garis\n";
echo "\n\n";
