<?php
$a = 10;
$b = 5;

// soal no 3.1
$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "$hasilTambah <br>";
echo "$hasilKurang <br>";
echo "$hasilKali <br>";
echo "$hasilBagi <br>";
echo "$sisaBagi <br>";
echo "$pangkat <br>";

// soal no 3.2
$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "$hasilSama <br>";
echo "$hasilTidakSama <br>";
echo "$hasilLebihKecil <br>";
echo "$hasilLebihBesar <br>";
echo "$hasilLebihKecilSama <br>";
echo "$hasilLebihBesarSama <br><br>";

// soal no 3.3
$hasilAnd = $a && $b;
$hasilor = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "$hasilAnd <br>";
echo "$hasilor <br>";
echo "$hasilNotA <br>";
echo "$hasilNotB <br><br>";

// soal no 3.4
$a += $b;
echo "a += b: $a <br>";
$a -= $b;
echo "a += b: $a <br>";
$a *= $b;
echo "a += b: $a <br>";
$a /= $b;
echo "a += b: $a <br>";
$a %= $b;
echo "a += b: $a <br>";

$hasilldentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "$hasilldentik <br>";
echo "$hasilTidakIdentik <br><br>";

$totalKursi = 45;
$kursiTerisi = 28;
$sisaKursiKosong = $totalKursi - $kursiTerisi;
$persentaseKursiKosong = ($sisaKursiKosong/$totalKursi)*100;
echo "Total Kursi: $totalKursi <br>";
echo "Jumlah Kursi yang Terisi: $kursiTerisi <br>";
echo "Sisa Kursi Kosong: $sisaKursiKosong <br>";
echo "Persentase Kursi Kosong: $persentaseKursiKosong%";
?>