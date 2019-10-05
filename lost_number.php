<?php

$angka = array(9,2,3,4,5,7,1);
$max = max($angka);
$min = min($angka);
$hasil = array();

$temp = array();
for ($i=$min; $i < $max; $i++) { 
	array_push($temp, $i);
}

foreach ($temp as $key) {
	if (!in_array($key, $angka)) {
		array_push($hasil, $key);
	}
}
echo "Number = ";
foreach ($angka as $value) {
	echo $value . ", ";
}

echo "<br>Lost Number : ";
for ($i=0; $i < count($hasil); $i++) { 
	echo $hasil[$i];
	if ($i != count($hasil)-1) {
		if ($i == count($hasil)-2) {
			echo " dan ";
		}else{
			echo ", ";
		}
	}
}

?>