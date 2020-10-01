<?php

$week = array(
	1 => "Monday",
	2 => "Tuesday",
	3 => "Wednesday",
	4 => "Thursday",
	5 => "Friday",
	6 => "Saturday",
	7 => "Sunday" 
);

echo "Days of week:- ";
echo "<br>";

foreach ($week as $key => $value){
	echo $key.". ".$value;
	echo "<br>";
}

?>