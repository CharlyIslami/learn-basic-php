<?php
//perulangan for 
for ($i = 0; $i <= 5; $i++) {
    echo "<p><b>Ini adalah perulangan yang memakai for $i</h1>";
}

//perulangan for hitung mundur
for ($i = 10; $i >= 5; $i--) {
    echo "<p><b>Ini adalah perulangan yang memakai for tapi dalam hitungan mundur $i</p>";
}

//perulangan while
$ulangi = 0;
while ($ulangi <= 5) {
    echo "<p><b>Ini adalah perulangan yang memakai while $ulangi</p><b>";
    $ulangi++;
}

//perulangan do while 
$ngulang = 0;
do {
    echo "<p><b>Ini adalah perulangan yang memakai do while $ngulang</p></b>";
    $ngulang++;
}
while ($ngulang <= 5);
?>