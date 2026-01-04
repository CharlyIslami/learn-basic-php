<?php
//perulangan for 
for ($i = 0; $i <= 5; $i++) {
    echo "<p><b>Ini adalah perulangan yang memakai for $i</h1>";
}
echo "<br><br>";

//perulangan for hitung mundur
for ($i = 10; $i >= 5; $i--) {
    echo "<p><b>Ini adalah perulangan yang memakai for tapi dalam hitungan mundur $i</p>";
}
echo "<br><br>";

//perulangan while
$ulangi = 0;
while ($ulangi <= 5) {
    echo "<p><b>Ini adalah perulangan yang memakai while $ulangi</p><b>";
    $ulangi++;
}
echo "<br><br>";
//perulangan do while 
$ngulang = 0;
do {
    echo "<p><b>Ini adalah perulangan yang memakai do while $ngulang</p></b>";
    $ngulang++;
}
while ($ngulang <= 5);
echo "<br><br>";

for ($w = 1, $a = 10; $w <= 5; $w++, $a--) {
    echo "i: $w, j: $a<br>";
}


?>