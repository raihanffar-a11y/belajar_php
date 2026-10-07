<?php
// 1. Dasar-Dasar PHP
echo "Hello Raihan Fadhil Fathin Arrayan!<br><br>";

// 2. Variabel PHP
$nama = "Raihan"; // Tipe data String variabel di php harus di awali dengan taag $ untuk menandakan bahwa itu adalah variabel
$umur = 15;       // Tipe data Integer

// Menampilkan isi variabel
echo "Nama: " . $nama . ", Umur: " . $umur . " tahun<br><br>";

// 3. Logika Percabangan PHP

// A. IF - ELSEIF - ELSE
$nilai = 80;

if ($nilai >= 80) {
    echo "Lulus";
} elseif ($nilai >= 70) {
    echo "Remedial";
} else {
    echo "Tidak Lulus";
}

echo "<br><br>";

// B. SWITCH - CASE
$hari = "Senin";

switch ($hari) {
    case "Senin":
        echo "Hari Kerja";
        break;
    case "Sabtu":
    case "Minggu":
        echo "Hari Libur";
        break;
    default:
        echo "Hari Kerja";
        break;
}
?>