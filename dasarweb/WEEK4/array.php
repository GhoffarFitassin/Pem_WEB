<?php
// langkah 2
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];

$nilaiLulus = [];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 70) {
    $nilaiLulus [] = $nilai;
    }
}
echo "Daftar nilai siswa yang lulus: " . implode(', ', $nilaiLulus);

echo "<br>";
echo "<br>";
// langkah 6
$daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
];
$karyawanPengalamanLimaTahun = [];

foreach ($daftarKaryawan as $karyawan) {
    if ($karyawan[1] > 5) {
    $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}
echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: " . implode(', ',
$karyawanPengalamanLimaTahun);

echo "<br>";
echo "<br>";
// langkah 10
$daftarNilai = [
    'Matematika' => [
    [ 'Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ],

    'Fisika' => [
    ['Alice', 90],
    ['Bob', 88],
    ['Charlie', 75],
    ],
    
    'Kimia' => [
    ['Alice', 92],
    ['Bob', 80],
    ['Charlie', 85],
    ],
];
$mataKuliah = 'Fisika';

echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";

foreach ($daftarNilai[$mataKuliah] as $nilai) {
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
}

echo "<br>";
echo "<br>";
// langkah 6
$daftarNilai = [
    "Alice" => 85,
    "Bob" => 92,
    "Charlie" => 78,
    "David" => 64,
    "Eva" => 90,
];

// menghitung total nilai dan jumlah siswa
$totalNilai = 0;
$jumlahSiswa = 0;

foreach ($daftarNilai as $nilai) {
    $totalNilai += $nilai;
    $jumlahSiswa++;
    // echo "$nilai <br>";
}
// echo "$totalNilai <br>";

// menghitung rata-rata nilai
$rata = $totalNilai / $jumlahSiswa;

// menampilkan nilai siswa diatas rata-rata
echo "Daftar Siswa dengan Nilai diatas Rata-rata $rata: <br>";
foreach ($daftarNilai as $nama => $nilai) {
    if ($nilai > $rata) {
        echo "$nama: $nilai <br>";
    }
}
?>