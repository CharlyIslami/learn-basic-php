<?php
/*
LATIHAN LOOP (FOR, WHILE, FOREACH)
Total: 5 Latihan
- Latihan 1: Tabel Perkalian
- Latihan 2: Ganjil/Genap
- Latihan 3: Total & Rata-rata
- Latihan 4: FizzBuzz Challenge
- Latihan 5: Pattern Bintang (Nested Loop)
*/

//Latihan 1
echo "<h3>Latihan 1: Tabel Perkalian</h3>";
echo "Tabel Perkalian 7<br>";
$angka = 7;
for ($i = 1; $i <= 10; $i++) {
    echo "$angka x $i = " . $angka * $i . "<br>";
}

//Latihan 2
echo "<h3>Latihan 2: Menentukan Ganjil/Genap (1-20)</h3>";
for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 == 0) {
        echo "$i adalah bilangan genap<br>";
    }
    else {
        echo "$i adalah bilangan ganjil<br>";
    }
}

//Latihan 3
echo "<h3>Latihan 3: Total & Rata-rata</h3>";
$total = 0;  
for ($i = 1; $i <= 100; $i++) {
    $total += $i;  
}

$rata_rata = $total / 100;
echo "Total angka 1-100: $total<br>";
echo "Rata-rata: $rata_rata<br><br>";

//Latihan 4
echo "<h3>Latihan 4: FizzBuzz Challenge</h3>";
echo "Kalau kelipatan 3 print Fizz, kalau kelipatan 5 print Buzz, kalau kelipatan 3 dan 5 print FizzBuzz, selain itu print angka.<br>";
for ($i = 1; $i <= 30; $i++) {
    if ($i % 15 == 0) {
        echo "FizzBuzz<br>";
    }elseif ($i % 3 == 0) {
        echo "Fizz<br>";
    }elseif ($i % 5 == 0) {
        echo "Buzz<br>";
    }else {
        echo "$i<br>";
    }
}

//Latihan 5
echo "<h3>Latihan 5: Pattern Bintang (Nested Loop)</h3>";
$lines = 5;
for ($row = 1; $row <= $lines; $row++) {
    for ($col = 1; $col <= $row; $col++) {
        echo "*";
    }
    echo "<br>";
}
?>