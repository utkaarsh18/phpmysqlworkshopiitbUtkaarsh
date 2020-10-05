<html>

<form action="q2_string_functions.php" method="GET">
<h2>Enter any String:</h2><br/>
<input type="text" name="name"><br>
<input type="submit" value="SUBMIT">
</form>
</html>

<?php
$a = $_GET['name'];

$len=strlen($a);
$rev=strrev($a);
$lower=strtolower($a);
$upper=strtoupper($a);
$subs = "Clair";
$newstr = substr_replace($a, $subs,0,5);

echo "Original String = ".$a."<br>";
echo "Number of Characters -->  ".$len."<br>";
echo "Reverse the string -->".$rev."<br>";
echo "Convert into lower case form -->".$lower."<br>";
echo "Convert into upper case form --> ".$upper."<br>";
echo "replace the content of substring into original string -->".$newstr."<br/>";
?>