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
$role = "teknisi";
$punya_kartu = true;
$sidik_jari = true;
$emergency_mode = true;
$password_khusus = "1234";
$approval_manager = true;
$jam_sekarang = 10;
echo "SISTEM KEAMANAN<br>";
echo "Role: $role<br>";

if ($role == "admin") {
    echo "Kartu Akses: " . ($punya_kartu ? "Ada" : "Tidak Ada") . "<br>";
    echo "Sidik Jari: " . ($sidik_jari ? "Terverifikasi" : "Tidak Terverfikasi") . "<br>";
}elseif ($role == "teknisi") {
    echo "Emergency Mode: " . ($emergency_mode ? "Aktif" : "Tidak Aktif") . "<br>";
    echo "Password Khusus: " . ($password_khusus == "1234" ? "Benar" : "salah") . "<br>";
}elseif ($role == "security") {
    echo "Approval Manager: " . ($approval_manager ? "Ada" : "Tidak Ada") . "<br>";
    echo "Jam Sekarang: $jam_sekarang:00<br>";
}
echo "<br>";

if ($role == "admin" && $punya_kartu && $sidik_jari) {
    echo "<b>Akses DITERIMA!</b><br>";
    echo "Level: Admin Penuh (Level 1)<br>";
}elseif ($role == "teknisi" && $emergency_mode && $password_khusus == "1234") {
    echo "<b>Akses DITERIMA!</b><br>";
    echo "Level: Teknisi Darurat (Level 2)<br>";
}elseif ($role == "security" && $approval_manager && $jam_sekarang >= 8 && $jam_sekarang <= 17) {
    echo "<b>Akses DITERIMA!</b><br>";
    echo "Level: Security dengan Approval (Level 3)<br>";
}else {
    echo "<b>Akses DITOLAK</b><br>";
    echo "Alasan: <br>";
    
    if ($role != "admin" && $role != "teknisi" && $role != "security") {
        echo "- ROLE $role TIDAK TERSEDIA<br>";
        echo "- Role yang Tersedia hanya Admin, Teknisi, dan Security<br>";
    }

    if ($role == "admin") {
        if (!$punya_kartu) {
            echo "- Admin harus punya kartu akses<br>";
        }
        if (!$sidik_jari) {
            echo "- Admin harus verifikasi sidik jari<br>";
        }
    }

    if ($role == "teknisi") {
        if (!$emergency_mode) {
            echo "- Emergency mode tidak aktif<br>";
        }
        if ($password_khusus != "1234") {
            echo "- Password khusus salah<br>";
        }
    }

    if ($role == "security") {
        if (!$approval_manager) {
            echo "- Tidak ada approval dari manager<br>";
        }
        if ($jam_sekarang < 8 || $jam_sekarang > 17) {
            echo "- Bukan jam kerja (08:00-17:00)<br";
        }
    }

}
echo "<br>";

?>