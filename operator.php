<?php
//Belajar operator matematika - Charly

echo "<h1>Belajar Operator Aritmatika</h1>";
echo "<hr>";


$angka1 = 10;
$angka2 = 5;
//PENJUMLAHAN
$hasil_tambah = $angka1 + $angka2;
//PENGURANGAN
$hasil_kurang = $angka1 - $angka2;
//PERKALIAN
$hasil_kali = $angka1 * $angka2;
//PEMBAGIAN
$hasil_bagi = $angka1 / $angka2;
//MODULUS (SISA BAGI)
$hasil_modulus = $angka1 % $angka2;

echo "Penjumlahan: $angka1 + $angka2 = $hasil_tambah<br>";
echo "Pengurangan: $angka1 - $angka2 = $hasil_kurang<br>";
echo "Perkalian: $angka1 x $angka2 = $hasil_kali<br>";
echo "Pembagian: $angka1 / $angka2 = $hasil_bagi<br>";
echo "Modulus: $angka1 % $angka2 = $hasil_modulus<br>";
echo "<hr>";

//CONTOH KASUS
$hargabuku = 15000;
$jumlah_beli = 3;
$total = $hargabuku * $jumlah_beli;

echo "<h1>Contoh Kasus: Beli Buku</h1>";
echo "Harga per buku: Rp " . number_format($hargabuku) . "<br>";
echo "Jumlah beli: $jumlah_beli buku<br>";
echo "Total bayar: Rp " . number_format($total) . "<br>"; 
echo "<hr>";

//OPERATOR GABUNGAN
echo "<h1>Operator Gabungan (Assignment)</h1>";

//CONTOH 1: TAMBAH SALDO
$saldo = 100000;
echo "Saldo awal: Rp " . number_format($saldo) . "<br>";

$saldo += 50000; //TAMBAH 50000
echo "Setelah nabung 50rb: Rp " . number_format($saldo) . "<br>";

$saldo -= 30000; //BERKURANG 30000
echo "Setelah belanja 30rb: Rp ". number_format($saldo) . "<br><br>";


//CONTOH 2: GABUNG STRING
$nama = "Charly";
$nama .= " Islami"; //SAMA DENGAN: $NAMA = $NAMA . " ISLAMI"
echo "Nama lengkap: $nama<br>";

$pesan = "Halo ";
$pesan .= $nama;
$pesan .= ", selamat datang!";
echo "$pesan";

?>