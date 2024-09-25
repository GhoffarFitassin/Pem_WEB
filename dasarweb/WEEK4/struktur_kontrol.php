<?php
// langkah 2
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
echo "Nilai huruf: D";
}
echo "<br>";
echo "<br>";
// langkah 6
$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;
while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
    // echo "$hari = $jarakSaatIni <br>";
}
echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";

echo "<br>";
echo "<br>";
// langkah 14
$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
    
}

echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";

echo "<br>";
echo "<br>";
// langkah 18
$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
$totalSkor += $skor;

}

echo "Total skor ujian adalah: $totalSkor";

echo "<br>";
echo "<br>";
// langkah 21
$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}

echo "<br>";
echo "<br>";
// langkah 21
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
// Inisialisasi dua nilai tertinggi dan dua nilai terendah dengan nilai awal dari array
$max1 = $max2 = $nilaiSiswa[0];
$min1 = $min2 = $nilaiSiswa[0];

// Mencari dua nilai tertinggi
foreach ($nilaiSiswa as $nilai) {
    if ($nilai > $max1) {
        $max2 = $max1;
        $max1 = $nilai;
    } elseif ($nilai > $max2) {
        $max2 = $nilai;
    }
}

// Mencari dua nilai terendah
foreach ($nilaiSiswa as $nilai) {
    if ($nilai < $min1) {
        $min2 = $min1;
        $min1 = $nilai;
    } elseif ($nilai < $min2) {
        $min2 = $nilai;
    }
}

// Menghitung total nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah
$totalNilai = 0;
$terhitung = 0; // variabel untuk memastikan hanya 6 nilai yang dihitung
foreach ($nilaiSiswa as $nilai) {
    if ($nilai != $max1 && $nilai != $max2 && $nilai != $min1 && $nilai != $min2) {
        $totalNilai += $nilai;
        $terhitung++;
    } elseif ($nilai == $max1 || $nilai == $max2 || $nilai == $min1 || $nilai == $min2) {
        // Menghilangkan duplikat jika ada dua nilai yang sama pada tertinggi atau terendah
        if (($nilai == $max1 && $terhitung < 6) || ($nilai == $min1 && $terhitung < 6)) {
            continue;
        } else {
            $totalNilai += $nilai;
            $terhitung++;
        }
    }
}

// Menghitung rata-rata dari nilai yang tersisa
$rataRata = $totalNilai / 6; // Karena kita hanya menghitung 6 nilai

// Tampilkan hasil
echo "Total nilai setelah mengabaikan dua nilai tertinggi dan terendah: $totalNilai\n";
echo "Nilai rata-rata: $rataRata\n";

echo "<br>";
echo "<br>";
// langkah 23
$hargaProduk = 120000;

// diskon 20% jika pembelian diatas Rp 100.000
if ($hargaProduk>100000) {
    $diskon = 0.20;
    $jumlahDiskon = $hargaProduk * $diskon;
    $hargaSetelahDiskon = $hargaProduk - $jumlahDiskon;
} else {
    $hargaSetelahDiskon = $hargaProduk;
}
echo "Harga yang harus dibayar setelah mendapat diskon adalah: Rp $hargaSetelahDiskon";

echo "<br>";
echo "<br>";
// langkah 26
$poinPemain = 500;

// total skor
echo "Total skor pemain adalah: $poinPemain <br>";

if ($poinPemain > 500) {
    echo "Apakah pemain mendapatkan hadiah tambahan? YA <br>";
} else {
    echo "Apakah pemain mendapatkan hadiah tambahan? TIDAK <br>";
}

?>