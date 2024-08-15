<?php
// Tipe Data Number (integer dan float)
$umur = 17; // integer
$tinggi_badan = 150,5; // float

// Tipe Data String
$nama = "Lina Karlina";
$alamat = "Jl. Tanjung Kerta, Rt/Rw 02/01, Dsn. Naluk 1, Ds. Naluk, Kec. Cimalaka, Kab, Sumedang";
$pekerjaan = "Programmer";

// Tipe Data Boolean
$is_married = false; // Menyatakan apakah sudah menikah atau belum
$punya_sim = false; // Menyatakan apakah memiliki SIM atau tidak

// Output Data Diri
echo "Nama: " . $nama . "<br>";
echo "Umur: " . $umur . " tahun<br>";
echo "Tinggi Badan: " . $tinggi_badan . " cm<br>";
echo "Alamat: " . $alamat . "<br>";
echo "Pekerjaan: " . $pekerjaan . "<br>";
echo "Status Menikah: " . ($is_married ? "Sudah Menikah" : "Belum Menikah") . "<br>";
echo "Memiliki SIM: " . ($punya_sim ? "Ya" : "Tidak") . "<br>";
