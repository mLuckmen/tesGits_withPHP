<?php

$angka = array(2,7,11,15);
$jumlah = 9;
$hasil = array();

for ($i=0; $i < count($angka); $i++) { 
	for ($j=0; $j < count($angka); $j++) { 
		if ($angka[$i] + $angka[$j] == $jumlah) {
			if (!in_array($angka[$i], $hasil) || !in_array($angka[$j], $hasil)) {
				array_push($hasil, $angka[$i]);
				array_push($hasil, $angka[$j]);
				break;
			}
		}
	}
}

echo "Number = ";
foreach ($angka as $value) {
	echo $value . ", ";
}
echo "<br>";
echo "Jumlah = " . $jumlah;

echo "<br>";
echo "Output : ";
for ($i=0; $i < count($hasil); $i++) { 
	echo $hasil[$i];
	if ($i != count($hasil)-1) {
		if ($i == count($hasil)-2) {
			echo " dan ";
		} else {
			echo ", ";
		}
	}
}

?>