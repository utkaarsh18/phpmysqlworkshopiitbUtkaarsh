<?php

$connect = mysqli_connect("localhost","root","");
mysqli_select_db($connect, 'result');

echo "Connected";

?>