<?php

$angka = array(1,2,3,4,5);

function check_duplicate($array){
	if (count($array) !== count(array_unique($array))) {
		return true;
	}
	return false;
}

echo "Number = ";
foreach ($angka as $value) {
	echo $value . ", ";
}

echo "<br>Duplicate : ";
echo check_duplicate($angka) ? "true" : "false";

?>