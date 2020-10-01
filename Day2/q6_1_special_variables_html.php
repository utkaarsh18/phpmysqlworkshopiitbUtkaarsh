<html>
	<form action="Triangle.php" method="GET">
		SIDE1: <input type="text" name="side1"><br/>
		SIDE2: <input type="text" name="side2"><br/>
		SIDE3: <input type="text" name="side3"><br/>
		<input type="submit">
	</form>
</html>

<?php
if (isset($_GET['side1'], $_GET['side2'], $_GET['side3'])){
	$a = $_GET['side1'];
	$b = $_GET['side2'];
	$c = $_GET['side3'];

	if ($a && $b && $c){
		if ($a == $b && $a == $c && $b == $c){
			echo "Equilateral Triangle";
		}

		elseif ($a == $b || $a == $c || $b == $c){
			echo "Isoceles Triangle";
		}

		else{
			echo "Scalene Triangle";
		}
	}
}
?>