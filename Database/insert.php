<?php

$hostname = "localhost";
$user = "root";
$pass = "";
$databaseName = "belajar_php";

$connection = new mysqli($hostname,$user, $pass,$databaseName);

if ($connection->connect_error) {
    die("Koneksi gagal: " . $connection->connect_error);
}

// Data yang akan dimasukkan
$nama_hero = "Eudora";
$tipe_hero = "Burst";
$damage = 90;

$sql = "INSERT INTO `tabel_hero_mage` (`id`, `nama_hero`, `tipe_hero`, `damage`) 
        VALUES (NULL, '$nama_hero', '$tipe_hero', '$damage')";

$query = $connection->query($sql);

if ($query === TRUE) {
    echo "Data berhasil ditambahkan!";
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}

$connection->close();

?>