<?php
echo "<h1>Belajar IF-ELSE (percabangan)</h1>";


//Soal pertama if-else
echo "<h2>Contoh Kasus: kantin SMK</h2>";
echo "<hr>";
//Variabel
$uang = 17000;
$harga = 15000;

//case
echo "Seorang anak memiliki uang sebanyak Rp " . number_format($uang) . " dan dia ingin membeli sebuah nasi goreng seharga Rp " . number_format($harga);

//Eksekusi Kode
if ($uang >= $harga) {
    $akhir = $uang - $harga;
    echo "<br><br>Transaksi berhasil! kamu bisa membeli nasi goreng.";
    echo "<br><br> Uang kamu sekarang tersisa Rp " . number_format($akhir) . ".";
}else {
    $kurang = $harga - $uang;
    echo "<br><br>Maaf, uang kamu kurang Rp " . number_format($kurang) . " untuk membeli nasi goreng.";
}

//Soal kedua else-if
echo "<h2><br>Sistem Penilaian SMK</h2>";
echo "<hr>";

//Variabel 
$nilai = 87;

//Case
echo "Seorang anak SMK baru saja menyelesaikan ujian matematikanya<br>";
echo "Nilai matematika yang didapat: <b>$nilai</b>.<br><br>";

//Eksekusi kode 
if ($nilai >= 90) {
    echo " Sang anak mendapatkan predikat A (Sangat Baik)";
}elseif ($nilai >= 80) {
    echo " Sang anak mendapatkan predikat B (Baik)";
}elseif ($nilai >= 70) {
    echo " Sang anak mendapatkan predikat C (Cukup)";
}elseif ($nilai >= 60) {
    echo " Sang anak mendapatkan predikat D (Kurang)";
}else {
    echo " Sang anak mendapatkan predikat E (Tidak Lulus)";
}

//soal ketiga if didalam if (percabangan bersarang)
echo "<h2>Sistem Diskon di Toko Laptop</h2>";


?>