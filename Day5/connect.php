<?php

$connect = mysqli_connect("localhost","root","");
mysqli_select_db($connect, 'data1');

echo "Connected";

?>