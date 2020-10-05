<?php
$name = $_FILES['myfile'] ['name']; 
$type= $_FILES ['myfile'] ['type'];
$size = $_FILES ['myfile'] ['size'];
$tempfile = $_FILES ['myfile'] ['tmp_name'];
$error = $_FILES ['myfile'] ['error'];

if ($error > 0)
{
die("error uploading file.");
}

else {
move_uploaded_file($tempfile,"uploaded/".$name);
echo "Upload complete <br>";
echo "File name = ".$name."<br>";
echo "File size = ".$size;
}
?>