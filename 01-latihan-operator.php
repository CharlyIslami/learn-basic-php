<?php
echo "<h1>Latihan operator PHP</h1>";
echo "<hr>";

//Soal ke 1
echo "<h3>Menghitung Luas Persegi Panjang</h3>";
$panjang = 10;
$lebar = 5;
$luas = $panjang * $lebar;
echo "panjang: $panjang cm<br>";
echo "Lebar: $lebar cm<br>";
echo "Luas: $luas cm<br>";
echo "<hr>";

//soal ke 2
echo "<h3>Menghitung Keliling lingkaran</h3>";
$jari_jari = 7;
$phi = 3.14;
$keliling = 2 * $phi * $jari_jari;
echo "Jari-jari:  $jari_jari cm<br>";
echo "Keliling: $keliling cm<br>";
echo "<hr>";

//soal ke 3
echo "<h3>Konversi Suhu Celcius ke Fahrenheit</h3>";
$celcius = 40;
$fahrenheit = ($celcius * 9/5) + 32;
echo "Suhu Celcius: $celcius °C<br>";
echo "Suhu Fahrenheit: $fahrenheit °F<br>";
echo "<hr>";

//soal ke 4
echo "<h3>Menghitung Diskon</h3>";
$harga_asli = 100000;
$diskon_persen = 20;
$diskon_rupiah = $harga_asli * ($diskon_persen / 100);
$harga_setelah_diskon = $harga_asli - $diskon_rupiah;
echo "Harga asli: Rp $harga_asli<br>";
echo "Diskon: $diskon_persen % (Rp $diskon_rupiah)<br>";
echo "Harga Setelah Diskon: Rp $harga_setelah_diskon<br>";
echo "<hr>";

//soal ke 5
echo "<h3>Hitung Sisa Uang Kembalian</h3>";
$total_belanja = 75000;
$uang_dibayar = 100000;
$kembalian = $uang_dibayar - $total_belanja;
echo "Total Belanja: Rp $total_belanja<br>";
echo "Uang Dibayar: Rp $uang_dibayar<br>";
echo "kembalian: Rp $kembalian<br>";
echo "<hr>";

//soal ke 6
echo "<h3>Counter Sederhana (Increment & Decrement)</h3>";
$counter = 5;
echo "Counter Awal: $counter<br>";
$counter++;
echo "Counter Setelah ++: $counter<br>";
$counter--;
echo "Counter setelah --: $counter<br>";
echo "<hr>";

//soal ke 7
echo "<h3>Post-Increment vs Pre-increment</h3>";
echo "<b>Post Increment:</b><br>";
$a = 5;
echo "Nilai a awal: $a<br>";
$b = $a++;
echo "Nilai b (hasil \$a++): $b<br>";
echo "Nilai a setelah increment: $a<br>";
echo "<br>";

echo "<b>Pre Increment</b><br>";
$c = 5;
echo "Nilai c awal: $c<br>";
$d = ++$c;
echo "Nilai d (hasil ++\$c): $d<br>";
echo "Nilai c setelah increment: $c<br>";
echo "<hr>";

//soal ke 8 
echo "<h3>Gabung Nama Depan dan Nama Belakang</h3>";
$nama_depan = "Charly";
$nama_belakang = "Islami";
$nama_lengkap = $nama_depan . " " . $nama_belakang;
echo "Nama Depan: $nama_depan<br>";
echo "Nama Belakang: $nama_belakang<br>";
echo "Nama Lengkap: $nama_lengkap<br>";
echo "<hr>";

//soal ke 9
echo "<h3>Buat Kalimat dari Beberapa Variabel</h3>";
$nama = "Charly Islami";
$umur = 16;
$asal = "Pekanbaru";
echo "Halo nama saya " . $nama . ", umur saya " . $umur . " tahun, dan saya berasal dari " . $asal . ".<br>";
echo "<hr>"; 

///soal ke 10 
echo "<h3>Gabung String dengan Angka</h3>";
$nama_barang = "Laptop";
$harga = 950000;
$jumlah = 2;
$total = $harga * $jumlah;
echo "Nama Barang: " . $nama_barang . "<br>";
echo "Harga Satuan: Rp " . $harga . "<br>";
echo "Jumlah Unit: " . $jumlah . " unit<br>";
echo "Total Harga: Rp " . $total . "<br>";
?>