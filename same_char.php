<?php

$stringFirst = "Hello";
$stringSecond = "World";

$first = str_split($stringFirst);
$second = str_split($stringSecond);

$hasil = array();

for ($i=0; $i < count($first); $i++) {
	for ($j=0; $j < count($second); $j++) { 
		if ($first[$i] == $second[$j]) {
			if (!in_array($first[$i], $hasil)) {
				array_push($hasil, $first[$i]);
			}
			break;
		}
	}
}

echo "String 1 = " . $stringFirst;
echo "<br>";
echo "String 2 = " . $stringSecond;
echo "<br><br>";

if (!empty($hasil)) {
	echo "YES : ";
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
} else {
	echo "NO";
}

?>