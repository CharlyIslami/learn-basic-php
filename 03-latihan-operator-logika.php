<?php
echo "<h1>Latihan Operator Logika PHP</h1>";
echo "<hr>";

//soal ke 1
echo "<h3>Validasi Registrasi Akun</h3>";
$username = "charly";
$password = "pass123456";
$umur = 20;
$setuju_term = true;

echo "Daftar Pendaftaran<br>";
echo "Username: $username<br>";
echo "Password: **********<br>";
echo "Umur: $umur<br>";
echo "Terms: " . ($setuju_term ? "Disetujui" : "Belum disetujui") . "<br><br>";
if (strlen($username) >= 5 && strlen($password) >= 8 && $umur >= 17 && $setuju_term) {
    echo "REGISTRASI BERHASIL<br>";
}else{
    echo "REGISTRASI GAGAL<br>";
    echo "Alasan:<br>";
    if (strlen($username) < 5) {
        echo "- Username minimal 5 karekter (sekarang: " . strlen($username) . " karakter)<br>";
    }
    if (strlen($password) < 8) {
        echo "- Password minimal 8 karakter (sekarang: " . strlen($password) . " karakter)<br>";
    }
    if ($umur < 17) {
        echo "- Umur minimal harus 17 tahun (sekarang: $umur tahun)<br>";
    }
    if (!$setuju_term) {
        echo "- Anda harus menyetujui Terms & Conditions<br>";
    }
}
echo "<hr>";

//soal ke 2
echo "<h3>Cek Diskon Weekend Member</h3>";
$is_member = true;
$hari = "sabtu";
$total_belanja = 200000;
echo "CEK DISKON<br>";
echo "Status: " . ($is_member ? "Member" : "Tidak Member") . "<br>";
echo "Total Belanja: $total_belanja<br><br>";
if ($is_member && ($hari == "sabtu" || $hari == "minggu")) {
    echo "Dapat Diskon Weekend Member: 25%<br>";
    $diskon = 25;
}elseif ($is_member) {
    echo "Dapat Diskon Member: 10 %<br>";
    $diskon = 10;
}else {
    echo "Gadapat Diskon: 0 %";
    $diskon = 0;
}
$diskon_rupiah = $total_belanja * ($diskon / 100);
$total_bayar = $total_belanja - $diskon_rupiah;
echo "Diskon: $diskon %<br>";
echo "Total Bayar: $total_bayar<br>";
echo "<hr>";

//soal ke 3
echo "<h3>Sistem Akses Ruangan Aman</h3>";


?>