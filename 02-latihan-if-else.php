<?php
echo "<h1>Latihan ifelse PHP</h1>";
echo "<hr>";

//soal ke 1 
echo "<h3>Cek Nilai Kelulusan</h3>";
$nilai = 80;
if ($nilai >= 75) {
    echo "Nilai: $nilai<br>";
    echo "Status: Lulus<br>";
}else {
    echo "Nilai: $nilai<br>";
    echo "Status Tidak Lulus<br>";
} 
echo "<hr>";

//soal ke 2
echo "<h3>Cek umur (Anak/Remaja/Dewasa)</h3>";
$umur = 16;
if ($umur < 13) {
    echo "Umur: $umur tahun<br>";
    echo "Kategori: Anak-anak";
}elseif ($umur >= 13 && $umur <= 17) {
    echo "Umur: $umur tahun<br>";
    echo "Kategori: Remaja<br>";
}else {
    echo "Umur: $umur tahun<br>";
    echo "Kategori: Dewasa<br>";
}
echo "<hr>";

//soal ke 3
echo "<h3>Cek Ganjil atau Genap</h3>";
$angka = 3;
if ($angka % 2 != 0) {
    echo "Angka: $angka<br>";
    echo "Jenis: Ganjil<br>";
}else {
    echo "Angka: $angka<br>";
    echo "Jenis: Genap<br>";
}
echo "<hr>";

//soal ke 4
echo "<h3>Cek Diskon Member</h3>";
$total_belanja = 150000;
$status_member = true;

if ($status_member == true && $total_belanja >= 100000) {
    $diskon_persen = 20;
} elseif ($status_member == true && $total_belanja < 100000) {
    $diskon_persen = 10;
}else {
    $diskon_persen = 0;
}
$diskon_rupiah = $total_belanja * ($diskon_persen / 100);
$total_bayar = $total_belanja - $diskon_rupiah;
echo "Total Belanja: Rp " . number_format($total_belanja) . "<br>";
echo "Status: " . ($status_member ? "Member" : "Bukan Member") . "<br>";
echo "Total Bayar: Rp " . number_format($total_bayar) . "<br>";
echo "<hr>";

//soal ke 5
echo "<h3>Grade Nilai (A/B/C/D/E)</h3>";
$nilai = 90;
if ($nilai > 100) {
    echo "Nilai: $nilai<br>";
    echo "Nilai Tidak Valid<br>";
}
elseif ($nilai < 0) {
    echo "Nilai: $nilai<br>";
    echo "Nilai Tidak Valid<br>";
}
 elseif ($nilai >= 90 && $nilai <= 100) {
    echo "Nilai: $nilai<br>";
    echo "Grade <b>A</b> (Sangat Baik)<br>";
}elseif ($nilai >= 80 && $nilai <= 89) {
    echo "Nilai: $nilai<br>";
    echo "Grade <b>B</b> (Baik)<br>";
}elseif ($nilai >=70 && $nilai <= 79) {
    echo "Nilai: $nilai<br>";
    echo "Grade <b>C</b> (Cukup)<br>";
}elseif ($nilai >= 60 && $nilai <= 69) {
    echo "Nilai: $nilai<br>";
    echo "Grade <b>D</b> (Kurang)<br>";
}else {
    echo "Nilai: $nilai<br>";
    echo "Grade <b>E</b> (Sangat Kurang)<br>";
}
?>
