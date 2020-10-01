<?php

$matrix1 = array(array(8, 5), array(3, 6));
$matrix2 = array(array(5, 9), array(4, 7));

for ($i = 0; $i < 2; $i++){
	for ($j = 0; $j < 2; $j++){
		echo $matrix1[$i][$j] + $matrix2[$i][$j]." ";
	}
	echo "<br>";
}

?>