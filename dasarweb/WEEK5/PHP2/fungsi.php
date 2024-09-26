<?php
// fungsi
// function perkenalan(){
//     echo "Assalamualaikum, ";
//     echo "Perkenalkan, nama saya Elok<br/>"; //Tulis sesuai nama kalian
//     echo "Senang berkenalan dengan Anda<br/>";
// }
//     //memanggil fungsi yang sudah dibuat
// perkenalan();
// perkenalan();

// fungsi dengan parameter
// function perkenalan($nama, $salam){
//     echo $salam.", ";
//     echo "Perkenalkan, nama saya ".$nama."<br/>";
//     echo "Senang berkenalan dengan Anda<br/>";
// }
// //memanggil fungsi yang sudah dibuat
// perkenalan("Hamdana","Hallo");

// echo "<hr>";

// $saya = "Elok";
// $ucapanSalam = "Selamat pagi";

// //memanggil lagi
// perkenalan($saya, $ucapanSalam);

// fungsi dengan Nilai Default
// function perkenalan($nama, $salam="Assalamualaikum"){
//     echo $salam.", ";
//     echo "Perkenalkan, nama saya ".$nama."<br/>";
//     echo "Senang berkenalan dengan Anda<br/>";
// }
// //memanggil fungsi yang sudah dibuat
// perkenalan("Hamdana","Hallo");

// echo "<hr>";

// $saya = "Elok";
// $ucapanSalam = "Selamat pagi";

// //memanggil lagi tanpa mengisi parameter salam
// perkenalan ($saya);

// fungsi yang mengembalikan nilai
// function hitungUmur($thn_lahir, $thn_sekarang) {
//     $umur = $thn_sekarang - $thn_lahir;
//     return $umur;
// }

// echo "Umur saya adalah ". hitungUmur(2004, 2023) ."tahun" //isi sesuai dengan tahun lahir kalian

// Memangil Funsi di dalam fungsi
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
function perkenalan ($nama, $salam="Assalamualaikum") {
echo $salam.",";
echo "Perkenalkan, nama saya ".$nama. "<br/>";

//memanggil fungsi lain
echo "Saya berusia ". hitungUmur(1988, 2023) ." tahun<br/>";
echo "Senang berkenalan dengan anda<br/>";
}

//memanggil fungsi perkenalan
perkenalan ("Elok");
?>