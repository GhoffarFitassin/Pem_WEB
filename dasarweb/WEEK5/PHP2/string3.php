<?php
// langkah 5
// $pesan = "Saya arek malang";
// echo strrev($pesan) . "<br>";

// langkah 8
$pesan = "Saya arek malang";
$pesanPerKata = explode(" ", $pesan);
$pesanPerKata = array_map(fn($pesan) => strrev($pesan), $pesanPerKata);
$pesan = implode(" ", $pesanPerKata);

echo "$pesan" . "<br>"
?>