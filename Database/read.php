<?php

$hostname = "localhost";
$user = "root";
$pass = "";
$databaseName = "belajar_php";

$connection = new mysqli($hostname,$user, $pass,$databaseName);

$sql = "SELECT `id`, `nama_hero`, `tipe_hero`, `damage` FROM `tabel_hero_mage`";

$query = $connection->query($sql);

if ($query->num_rows != 0) {
    //Iterasi Data
    while ($row =$query->fetch_assoc()) {
        echo "ID: " . $row['id'] . "<br>";
        echo "Nama Hero: " . $row['nama_hero'] . "<br>";
        echo "Tipe Hero: " . $row['tipe_hero'] . "<br>";
        echo "Damage: " . $row['damage'] . "<br><br>";
    }
}