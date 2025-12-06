<?php
//Belajar operator matematika - Charly

echo "<h1>1. Belajar Operator Aritmatika</h1>";
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

//CONTOH KASUS
$hargabuku = 15000;
$jumlah_beli = 3;
$total = $hargabuku * $jumlah_beli;

echo "<h2>Contoh Kasus: Beli Buku</h2>";
echo "Harga per buku: Rp " . number_format($hargabuku) . "<br>";
echo "Jumlah beli: $jumlah_beli buku<br>";
echo "Total bayar: Rp " . number_format($total) . "<br>"; 

//BELAJAR OPERATOR GABUNGAN - CHARLY
echo "<h1>2. Operator Gabungan (Assignment)</h1>";
echo "<hr>";

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

echo "<h1>3. Increment & Decrement</h1>";
echo "<hr>";

//POST INCREMENT (PAKAI DULU BARU TAMBAH)
$angka = 5;
echo $angka++;
echo $angka;

echo "<br>";

//PRE INCREMENT (TAMBAH DULU BARU PAKAI)
$angka = 5;
echo ++$angka;
echo $angka;

//CONTOH KASUS
echo "<h2>Contoh Kasus: Counter Pengunjung</h2>";
$pengunjung = 0;
echo "Pengunjung awal: $pengunjung<br>";

$pengunjung++; //TAMBAH 1
echo "Pengunjung masuk: $pengunjung<br>"; 

$pengunjung++;
echo "Pengunjung masuk lagi: $pengunjung<br>";

$pengunjung--; //KURANG 1
echo "Pengunjung keluar: $pengunjung<br>";

echo "<h2>Contoh kasus2 : Stok barang</h2>";

$stok = 10;
echo "Stok buku: $stok<br>";

$stok -= 3; //terjual 3
echo "Setelah terjual 3: $stok<br>";

$stok++; //RESTOK 1
echo "Setelah restok 1: $stok<br><br>";

echo "<h1>=== STRUK BELANJA ===</h2>";

// Data belanja
$harga_pulpen = 3000;
$jumlah_pulpen = 2;

$harga_buku = 5000;
$jumlah_buku = 3;

$harga_penggaris = 2000;
$jumlah_penggaris = 1;

// Hitung total per item
$total_pulpen = $harga_pulpen * $jumlah_pulpen;
$total_buku = $harga_buku * $jumlah_buku;
$total_penggaris = $harga_penggaris * $jumlah_penggaris;

// Grand total
$grand_total = $total_pulpen + $total_buku + $total_penggaris;

// Tampilkan struk
echo "Pulpen ($jumlah_pulpen x): Rp " . number_format($total_pulpen) . "<br>";
echo "Buku ($jumlah_buku x): Rp " . number_format($total_buku) . "<br>";
echo "Penggaris ($jumlah_penggaris x): Rp " . number_format($total_penggaris) . "<br>";
echo "─────────────────────<br>";
echo "<strong>TOTAL: Rp " . number_format($grand_total) . "</strong>";




?>