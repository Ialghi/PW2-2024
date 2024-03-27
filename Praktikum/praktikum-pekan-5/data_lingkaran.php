<?php
require_once("class_lingkaran.php");
echo"Nilai PHI: " . Lingkaran::PHI;

// instansiasi object lingkaran
$lingkaran1 = new Lingkaran(20);
$lingkaran2 = new Lingkaran(8);

// memanggil method dari object
echo "<br> Luas Lingkaran 1: " . $lingkaran1->getLuas();
echo "<br> Luas Lingkaran 2: " . $lingkaran2->getLuas();


echo "<br> Keliling Lingkaran 1: " . $lingkaran1->getKeliling();
echo "<br> Keliling Lingkaran 2: " . $lingkaran2->getKeliling();