<?php
echo "<h1>Operator Logika PHP</h1>";
echo "<hr>";

//operator AND
echo "<h2>Operator AND (&&)</h2>";
echo "<p>Kedua kondisi harus benar agar hasilnya TRUE</p>";

//contoh ke 1
echo "Contoh 1: Logika SIM<br>";
echo "Umur harus di atas 17 dan memiliki SIM<br>";
$umur = 20;
$punya_sim = true;
echo "Umur: $umur<br>";
if ($umur >= 17 && $punya_sim == true) {
    echo "Boleh nyetir (umur $umur, punya SIM)<br>";
}else{
    echo "Tidak boleh nyetir, (umur masih $umur, belum punya SIM<br>";
}
echo "<br>";

//contoh ke 2
echo "Contoh 2: Login<br>";
echo "Login berhasil jika login sebagai admin dan menggunakan password yang benar<br>";
$username = "admin";
$password = "12345";
if ($username == "admin" && $password == "12345") {
    echo "Login Berhasil<br>";
}else{
    echo "Username atau password salah!<br>";
}
echo "<hr>";

//operator OR 
echo "<h2>Operator OR (||)</h2>";
echo "<p>Salah satu kondisi benar sudah cukup untuk true</p>";

//contoh ke 1
echo "Contoh 1: Diskon<br>";
echo "Mendapatkan diskon jika mempunyai member atau belanja di atas 100rb<br>";
$is_member = false;
$total_belanja = 150000;
if ($is_member == true || $total_belanja >= 100000) {
    echo "Dapat diskon! (Member: " . ($is_member ? "Ya" : "tidak") . ", Belanja: $total_belanja)<br>";
} else{
    echo "Tidak dapat diskon";
}
echo "<br>";

//contoh ke 2 
echo "Contoh 2: Hari Libur<br>";
$hari = "Minggu";
if ($hari == "Sabtu" || $hari == "Minggu") {
    echo "Hari ini libur: $hari<br>";
}else{
    echo "Hari ini kerja: $hari<br>";
}
echo "<hr>";

//operator NOT
echo "<h2>Operator NOT (!)</h2>";
echo "<p>Membalik nilai boolean (TRUE jadi FALSE, FALSE jadi TRUE)</p>";

//contoh ke 1
echo "Contoh 1: Sudah login atau belum login<br>";
$is_login = false;
if (!$is_login) {
    echo "Anda belum login, silahkan login terlebih dahulu<br>";
}else{
    echo "Anda suda login<br>";
}
echo "<br>";

//contoh ke 2
echo "Contoh 2: Cek bukan member<br>";
$is_member = false;
if (!$is_member) {
    echo "Anda bukan member. Daftar untuk mendapatkan diskon!<br>";
}else{
    echo "Anda adala member";
}
echo "<hr>";

//kombinasi operator logika
echo "<h2>Kombinasi Operator Logika</h2>";
echo "<p>Bisa gabung AND, OR, NOT sekaligus!</p>";

//contoh ke 1
echo "Contoh ke 1: Diskon Pelajar<br>";
$umur = 16;
$punya_kartu_pelajar = true;
$is_weekend = true;
if ($umur < 18 && $punya_kartu_pelajar && $is_weekend) {
    echo "Dapat diskon pelajar di weekend<br>";
}else{
    echo "Tidak dapat diskon pelajar<br>";
}
echo "<br>";

//contoh ke 2
echo "Contoh ke 2: Akses VIP<br>";
$is_status = false;
$is_donatur = true;
$is_staff = false;

if ($is_status || $is_donatur || $is_staff) {
    echo "Akses VIP Diberikan!<br>";
}else{
    echo "Tidak punya akses VIP<br>";
}
echo "<hr>";

//tabel operator logika
echo "<h2>Tabel Kebenaran</h2>";

echo "<h3>AND (&&)</h3>";
echo "<pre>";
echo "TRUE  && TRUE  = " . var_export(true && true, true) . "\n";
echo "TRUE  && FALSE = " . var_export(true && false, true) . "\n";
echo "FALSE && TRUE  = " . var_export(false && true, true) . "\n";
echo "FALSE && FALSE = " . var_export(false && false, true) . "\n";
echo "</pre>";

echo "<h3>OR (||)</h3>";
echo "<pre>";
echo "TRUE  || TRUE  = " . var_export(true || true, true) . "\n";
echo "TRUE  || FALSE = " . var_export(true || false, true) . "\n";
echo "FALSE || TRUE  = " . var_export(false || true, true) . "\n";
echo "FALSE || FALSE = " . var_export(false || false, true) . "\n";
echo "</pre>";

echo "<h3>NOT (!)</h3>";
echo "<pre>";
echo "!TRUE  = " . var_export(!true, true) . "\n";
echo "!FALSE = " . var_export(!false, true) . "\n";
echo "</pre>";
?>