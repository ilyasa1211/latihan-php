<?php

class Student
{
    protected static $student = [
        [
            'name' => "Arief",
            'nik'  => "TOO1"
        ],
        [
            'name' => "Dimas",
            'nik'  => "TOO2"
        ],
        [
            'name' => "Wahyu",
            'nik'  => "TOO3"
        ]
    ];
}
class Update extends Student
{
    function __construct()
    {
        echo "\nDaftar Santri yang Telah Terdaftar :\n";
        echo "----------------\n";
        echo "NO NIK   NAME\n";
        echo "----------------\n";
        $i = 0;
        foreach (self::$student as $key => $value) {
            echo ++$i . ". " . $value["nik"] . " " . $value["name"] . "\n";
        };
        echo "----------------\n";
    }
}
class Register extends Student
{

    public static function insertStudent(array $santri): void
    {
        self::$student[] = $santri;
    }
}
class Delete extends Student
{

    public static function deleteStudent(): void
    {
        echo "Hapus siswa nomor : ";
        $hapus_siswa_nomor = trim(fgets(STDIN));
        echo "\nBerhasil Menghapus Siswa dari Daftar dengan\nNama : ".self::$student[$hapus_siswa_nomor - 1]["name"]." \nNIK : ".self::$student[$hapus_siswa_nomor - 1]["nik"];
        unset(self::$student[$hapus_siswa_nomor - 1]);
        sort(self::$student);
    }
}
do {
    echo "\n\n============Pilihan==============\n";
    echo "1. Lihat santri yang telah terdaftar\n";
    echo "2. Daftar santri baru\n";
    echo "3. Hapus santri dari daftar\n";
    echo "Pilihan Anda : ";
    $pilihan = trim(fgets(STDIN));
    if ($pilihan == 1) new Update;
    else if ($pilihan == 2) {
        echo "\nMasukkan nama yang akan didaftarkan : ";
        $name = trim(fgets(STDIN));
        echo "Masukkan NIK : ";
        $nik = trim(fgets(STDIN));
        Register::insertStudent(['name' => $name, 'nik' => $nik]);
        echo "Selamat anda telah berhasil mendaftar santri dengan :\nNama : ".$name." \nNIK : ".$nik;
        echo "\nPilih 1 untuk melihat daftar";

    } else {
        new Update;
        Delete::deleteStudent();
    };
} while (true);
