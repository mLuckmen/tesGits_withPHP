<?php

$angka = array(10,17,13,17,13,16,16,11,1);
$counter = array_count_values($angka);
$hasil = array();

foreach ($counter as $number => $value) {
	if ($value == 1) {
		array_push($hasil, $number);
	}
}
echo "Number = ";
foreach ($angka as $value) {
	echo $value . ", ";
}
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