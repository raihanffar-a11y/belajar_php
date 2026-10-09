<?php

// 1. Fungsi Menghitung Luas Segitiga (Parameter Tetap)
function luas_segitiga($alas, $tinggi) {
    $luas = 0.5 * $alas * $tinggi;
    return $luas;
}

// Memanggil fungsi luas_segitiga
echo luas_segitiga(5, 3);

echo "\n"; // Pemisah output (opsional)

// 2. Fungsi Penjumlahan dengan Variadic Parameter (Jumlah Parameter Dinamis)
function sum(...$input) {
    $result = 0;
    foreach ($input as $value) {
        $result = $result + $value;
    }
    return $result;
}

// Memanggil fungsi sum dengan banyak argumen
echo sum(1, 2, 3, 4, 5,);