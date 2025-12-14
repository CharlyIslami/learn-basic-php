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
$role = "security";
$punya_kartu = true; //admin
$sidik_jari = true; //admin
$emergency_mode = true; //teknisi
$password_khusus = "1234"; //teknisi
$approval_manager = true; //security
$jam_sekarang = 10; //security
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
echo "<hr>";

//soal ke 4
echo "<h3>Sistem Boarding Pesawat</h3>";
$nama = "budi";
$umur = 11;
$waktu_sekarang = 14;
$waktu_boarding = 15;
$punya_boarding_pass = true;
$sudah_checkin = true;
$punya_ktp_paspor = true; //untuk dewasa
$ada_barang_berbahaya = false; //untuk dewasa/anak
$didampingi_dewasa = true; //untuk anak/bayi
$punya_surat_izin = true; //untuk anak tanpa pendamping
echo "Nama: $nama<br>";
echo "Umur: $umur<br>";

if ($umur >= 18) {
    $kategori = "Dewasa (18+ tahun)";
}elseif ($umur >=2) {
    $kategori = "Anak (2-17)";
}else {
    $kategori = "Bayi (< 2 tahun)";
}
echo "Kategori: $kategori<br>";
echo "Boarding Pass: " . ($punya_boarding_pass ? "Valid" : "Tidak Valid") . "<br>";
echo "Check-in: " . ($sudah_checkin ? "Sudah" : "Belum") . "<br>";
echo "Waktu: $waktu_sekarang:00 (Boarding: $waktu_boarding:00)<br><br>";

if ($waktu_sekarang > $waktu_boarding) {
    echo "Ditolak Karena Terlambat<br>";
} elseif (!$punya_boarding_pass || !$sudah_checkin) {
    echo "<b>Penerbangan ditolak</b><br>";
    echo "Alasan:<br>";
    if (!$punya_boarding_pass) {
        echo "Kamu tidak memiliki boarding pass<br>";
    }
    if (!$sudah_checkin) {
        echo "Kamu belum checkin tiket pesawat<br>";
    }
} else {
    if ($umur >= 18) {
        if ($punya_ktp_paspor && !$ada_barang_berbahaya) {
            echo "Syarat: Memiliki Paspor, ktp, dan Tidak Memiliki Barang Berbahaya<br>";
            echo "<b>Boarding Diterima</b><br>";
        }else {
            echo "<b>Boarding ditolak</b><br>";
            echo "Alasan: <br>";
            if (!$punya_ktp_paspor) {
                echo "$nama Tidak Memiliki KTP ataupun PASPOR<br>";
            }
            if ($ada_barang_berbahaya) {
                echo "$nama Memiliki Barang Berbahaya";
            }
        }
    }
    elseif ($umur >= 2 && $umur < 18) {
        if (($didampingi_dewasa || $punya_surat_izin) && !$ada_barang_berbahaya) {
            echo "Syarat: Didampingi Orang Dewasa, Tidak Memiliki Barang Berbahaya, dan Memiliki Surat Izin<br>";
            echo "<b>Boarding Diterima</b>";
        }
        else {
            echo "<b>Boarding Ditolak</b><br>";
            echo "Alasan: <br>";
            if (!$didampingi_dewasa && !$punya_surat_izin) {
                echo "$nama harus didampingi orang dewasa ATAU punya surat izin<br>";
            }
            if ($ada_barang_berbahaya) {
                echo "$nama Memiliki Barang Berbahaya<br>";
            }
        }

    }
    else {
        if ($didampingi_dewasa) {
            echo "Syarat: Didampingi Orang Dewasa<br>";
            echo "<b>Boarding Diterima<br>";
        }else {
            echo "<b>Boarding Ditolak</b><br>";
            echo "Alasan: <br>";
            echo "Tidak Didampingi Oleh Orang Dewasa<br>";
        }
    }
}
?>