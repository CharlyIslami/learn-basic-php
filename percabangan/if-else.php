<?php
echo "<h1>Belajar IF-ELSE (percabangan)</h1>";


//Soal pertama if-else
echo "<h2>Contoh Kasus: kantin SMK (IF ELSE)</h2>";
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
echo "<h2><br>Sistem Penilaian SMK (ELSE IF)</h2>";
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
echo "<h2>SOAL 1: Sistem Diskon di Toko Laptop (IF NESTED)</h2>";
echo "<hr>";

//Variabel
$harga_laptop = 12000000;
$punya_member = true;

//case
echo "Seorang pria ingin membeli laptop dengan harga Rp " . number_format($harga_laptop) . " dan pria itu mempunyai kartu member, jadi:<br><br>";

//Variabel tambahan 
$diskon = 0;
$status_member = $punya_member ? "Ya" : "Tidak";

//eksekusi kode
if ($punya_member) {   
    if ($harga_laptop >= 10000000) {
        $diskon = 0.15;
    }else {
        $diskon = 0.10;
    }
}
    else {
       $diskon = 0;
    }

//Hitung total harga setelah diskon
$total = $harga_laptop - ($harga_laptop * $diskon);

//Hasil akhir
echo "Harga Laptop: " . number_format($harga_laptop) . "<br>";
echo "Status member: $status_member<br>";
echo "Diskon yang didapat: " . ($diskon * 100) . " %<br>";
echo "Total harga setelah diskon: Rp " . number_format($total);

//Soal 2 if-nested
echo "<h2>SOAL 2: Kelulusan Ujian Siswa (IF-NESTED)</h2>";
echo "<hr>";

//Variabel
$teori = 91;
$praktik = 92;
$sikap = 98;
$nilai_total = ($teori + $praktik + $sikap) / 3;

//Variabel tambahan
$lulus_count = 0;

if ($teori >= 70) $lulus_count++;
if ($praktik >= 70) $lulus_count++;
if ($sikap >= 70) $lulus_count++;


//case
echo "Menentukan nilai ujian seorang siswa, untuk nilai yang ia dapat adalah:<br>";
echo "Nilai Teori: $teori<br>";
echo "Nilai Praktik: $praktik<br>";
echo "Nilai Sikap: $sikap<br>";
echo "Untuk nilai rata-rata yang didapat sang anak: " . round($nilai_total, 2) . "<br>";

//Eksekusi kode
if ($lulus_count == 3) {
    if ($nilai_total >= 90) {
        echo "LULUS dengan predikat <b>ISTIMEWA</b>";
    }else {
        "LULUS";
    }
}else {
    if ($lulus_count == 2) {
        echo "LULUS BERSYARAT";
    }elseif ($lulus_count == 1) {
        echo "PERLU UJIAN ULANG";
    }else {
        echo "TIDAK LULUS<br> Perlu bimbingan khusus";
    }
}








?>