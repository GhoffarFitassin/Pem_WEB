<?php
// langkah 1
// function tampilkanHaloDunia(){
//     echo "Halo dunia! <br>";

//     tampilkanHaloDunia();
// }

// tampilkanHaloDunia();

// langkah 3
// for ($i=1; $i <= 25; $i++) { 
//     echo "Perulangan ke-{$i} <br>";
// }

// langkah 4
function tampilkanAngka (int $jumlah, int $indeks = 1) {
    echo "Perulangan ke-{$indeks} <br>";
    
    //panggil diri sendiri selama $indeks <= $jumlah
    if ($indeks < $jumlah) {
    tampilkanAngka($jumlah, $indeks + 1);
    }
}
tampilkanAngka(20);
?>