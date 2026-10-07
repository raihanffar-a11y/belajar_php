<?php

$level = 0;
$levelMaksimal = 15;

// 1. FOR
for ($i = 1; $i <= 5; $i++) {
    echo "Angka $i <br>";
}

// 2. WHILE
$i = 1;
while ($i <= 5) {
    echo "Angka $i <br>";
    $i++;
}

// 3. DO-WHILE
$i = 1;
do {
    echo "Angka $i <br>";
    $i++;
} while ($i <= 5);

echo "<hr>";

//----------------------------------------
// 1. Array Sederhana (Indexed Array)
//----------------------------------------

$heroMage = ["Zhask", "Kadita", "Valir", "Vexana"];

// Gunakan <pre> agar var_dump rapi ke bawah
echo "<pre>";
var_dump($heroMage);
echo "</pre>";

echo $heroMage[0] . "<br>";
echo $heroMage[1] . "<br>";

echo "<hr>";

//----------------------------------------
// 2. Array Asosiatif & Multidimensi
//----------------------------------------

$heroMage = [
    "name" => ["Zhask", "Kadita"],
    "tipe" => ["offlaner", "burst mage"],
    "damage" => 89.2
];

echo "<pre>";
var_dump($heroMage);
echo "</pre>";

echo $heroMage["name"][0] . "<br>";
echo $heroMage["tipe"][1] . "<br>";
echo $heroMage["damage"] . "<br>";

echo "<hr>";

//----------------------------------------
// 3. Iterasi Array dengan for dan count()
//----------------------------------------

$heroMage = ["Zhask", "Kadita", "Valir", "Vexana"];

for ($i = 0; $i < count($heroMage); $i++) {
    echo $heroMage[$i] . "<br>";
}

echo "<hr>";

//----------------------------------------
// 4. Iterasi Array dengan foreach (Indexed Array)
//----------------------------------------

$heroMage = ["Zhask", "Kadita", "Valir", "Vexana"];

foreach ($heroMage as $hero) {
    echo $hero . "<br>";
}

echo "<hr>";

//----------------------------------------
// 5. Iterasi Array Asosiatif dengan foreach (Key => Value)
//----------------------------------------

$heroMage = [
    "Zhask" => "Offlaner",
    "Kadita" => "Burst Mage",
    "Valir" => "Poke Damage"
];

foreach ($heroMage as $nama => $role) {
    echo "Hero: $nama | Role: $role <br>";
}

?>
json_encode