<?php
echo "<h1>Belajar OPERATOR LOGIKA</h1>";
echo "<p>Operator logika digunakan untuk menggabungkan beberapa kondisi sekaligus</p>";
echo "<hr>";

echo "<h2>1. OPERATOR && (AND) - Study Tour</h2>";
echo "<hr>";

//variabel
$nilai = 80;
$tunggakan_spp = false;

//case
echo "Syarat ikut study tour:<br>";
echo "1. Nilai >= 75<br>";
echo "2. Tidak ada tunggakan spp<br><br>";

echo "Data siswa:<br>";
echo "- Nilai: $nilai<br>";
echo "Tunggakan SPP " . ($tunggakan_spp ? "Ada" : "Tidak ada") . "<br><br>";

//eksekusi
if ($nilai >= 75 && $tunggakan_spp == false) {
    echo "<b>BOLEH ikut study tour</b>";
} else {
    echo "<b>TIDAK BOLEH ikut study tour</b>";

    //kasih tahu alasannya kenapa
    if ($nilai < 75) {
        echo "Alasan: Nilai kurang dari 75<br>";
    }
    if ($tunggakan_spp == true) {
        echo "Alasan: Masih ada tunggakan SPP<br>";
    }
}

echo "<hr><br>";


?>