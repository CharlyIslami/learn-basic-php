<?php

// 1. Membuat variabel
$nama = "Charly Islami";
$umur = 16;
$kelas = 11;
$jurusan = "Rekayasa Perangkat Lunak";
$hobi = "Coding";
$tinggi = 170;
$siswaAktif = true;
$sekolah = "SMK Negeri 7 Pekanbaru";
$Cita_cita = "Full Stack Dev";
$moto = "Never Stop Learning";

// 2. Menampilkan variabel
echo "<h1>Profil Siswa</h1>";
echo "<hr>";

echo "Nama: $nama<br>";
echo "Umur: $umur<br>";
echo "Kelas: $kelas<br>";
echo "Jurusan: $jurusan<br>";
echo "Hobi: $hobi<br>";
echo "Tinggi: $tinggi<br>";

// 3. Gabung string dengan titik
echo "<br>";
echo "Perkenalkan, nama saya " . $nama . ", siswa kelas " . $kelas . " jurusan " . $jurusan . ", saya bersekolah di " . $sekolah .  "<br>" . "Hobi saya adalah " . $hobi . "<br><br>";

// 4. Gabung string tanpa menggunakan titik
echo "Perkenalkan, nama saya $nama, siswa kelas $kelas jurusan $jurusan, saya bersekolah di $sekolah <br> Hobi saya adalah $hobi"
?>