<?php
$profil = [
    "nama" => "Charly Islami",
    "umur" => 16,
    "jurusan" => "Rekayasa Perangkat Lunak (RPL)",
    "hobi" => "Coding" 
];

foreach ($profil as $key => $value) {
    echo "$key: $value<br>";
}

echo "<br><br>";

$teman = [
    ["nama" => "Charly Islami", "kelas" => "11", "jurusan" => "RPL"],
    ["nama" => "Fajar Abdilah", "kelas" => "11", "jurusan" => "Kelistrikan"],
    ["nama" => "Alfinza", "kelas" => "11", "jurusan" => "Otomotif"]
];

foreach ($teman as $siswa) {
    echo "Nama: " . $siswa["nama"] . "<br>";
    echo "Kelas: " . $siswa["kelas"] . "<br>";
    echo "Jurusan: " . $siswa["jurusan"] . "<br>";
    echo "---<br>";
}

$task = ["Belajar Coding"];

$task[] = "Belajar PHP";
$task[] = "Commit Github";
$task[] = "Berenang";

echo "Total task " . count($task) . "<br><br>";

foreach ($task as $index => $task) {
    echo ($index + 1) . ". $task<br>";
}
?>