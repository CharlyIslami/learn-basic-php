<?php
//function 1
function sapaan($nama) {
    echo "Halo, $nama! Selamat belajar PHP!<br>";
}

sapaan("Charly");
sapaan("Ali");
sapaan("Lintang");
sapaan("Iron");
sapaan("Finza");
sapaan("Haikal");
echo "<br><br>";

//function 2
function tambah($a, $b) {
    return $a + $b;
}
function kurang($a, $b) {
    return $a - $b;
}
function kali($a, $b) {
    return $a * $b;
}
function bagi($a, $b) {
    return $a / $b;
}

echo "15 + 3 = " . tambah(15, 3) . "<br>";
echo "15 - 3 = " . kurang(15, 3) . "<br>";
echo "15 * 3 = " . kali(15, 3) . "<br>";
echo "15 / 3 = " . bagi(15, 3) . "<br>";
echo"<br><br>";

//function 3
function getGrade($nilai) {
    if ($nilai >= 90) {
        return "A";
    }elseif ($nilai >= 80) {
        return "B";
    }elseif ($nilai >= 70) {
        return "C";
    }elseif ($nilai >= 60) {
        return "D";
    }else {
        return "E";
    }

}

$siswa = [
    ["nama" => "Charly", "nilai" => 85],
    ["nama" => "Alex", "nilai" => 92],
    ["nama" => "Budi", "nilai" => 78],
    ["nama" => "Frontal", "nilai" => 65]
];

foreach ($siswa as $s){
    echo $s["nama"] . ": Nilai " . $s["nilai"] . " = Grade " . getGrade($s["nilai"]) . "<br>"; 
}
echo "<br><br>";

//function 4
function validateusername($username) {
    if (empty($username)) {
        return "Silahkan isi username";
    }
    if (strlen($username) < 5) {
        return "Username minimal 5 karakter";
    }
    if (strlen($username) > 15) {
        return "Username maksimal 15 karakter";
    }
    return "Valid";
}

$test1 = validateusername("");
$test2 = validateusername("abc");
$test3 = validateusername("Charly");
$test4 = validateusername("usernameterlalupanjangbanget");

echo "Test 1: $test1<br>";
echo "Test 2: $test2<br>";
echo "Test 3: $test3<br>";
echo "Test 4: $test4<br>";

?>