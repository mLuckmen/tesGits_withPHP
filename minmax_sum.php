<?php

$angka = array(1,2,3,4,9);
$jumlah = 0;
$hasil = array();

for ($i=0; $i < count($angka); $i++) { 
	for ($j=0; $j < count($angka); $j++) { 
		if ($angka[$i] != $angka[$j]) {
			$jumlah += $angka[$j];
		}
	}
	array_push($hasil, $jumlah);
	$jumlah = 0;
}

echo "Number = ";
foreach ($angka as $value) {
	echo $value . ", ";
}

echo "<br>";
echo "Minimum = " . min($hasil);
echo "<br>";
echo "Maximum = " . max($hasil);

?>