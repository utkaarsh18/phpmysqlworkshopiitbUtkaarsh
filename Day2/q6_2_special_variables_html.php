<html>
	<form action="q6_2_special_variables_html.php" method="POST">
		Name: <input type="text" name="name"><br/><br/>
		Please enter your marks below<br/><br/>
		Subject1: <input type="text" name="mk1"><br/><br/>
		Subject2: <input type="text" name="mk2"><br/><br/>
		Subject3: <input type="text" name="mk3"><br/><br/>
		Subject4: <input type="text" name="mk4"><br/><br/>
		Subject5: <input type="text" name="mk5"><br/><br/>
		<input type="submit">
	</form>
</html>

<?php
if (isset($_POST['name'], $_POST['mk1'], $_POST['mk3'], $_POST['mk4'], $_POST['mk5'])){
	$a = $_POST['name'];
	$sub1 = $_POST['mk1'];
	$sub2 = $_POST['mk2'];
	$sub3 = $_POST['mk3'];
	$sub4 = $_POST['mk4'];
	$sub5 = $_POST['mk5'];

	$total = $sub1 + $sub2 + $sub3 + $sub4 + $sub5;
	$p = ($total/500) * 100; 

	if ($a && $sub1 && $sub2 && $sub3 && $sub4 && $sub5){
		echo "<br/><br/>";
		echo "Name of Student: ".$a."<br/>";
		echo "Marks in Each Subject: <br/><br/>";
		echo "Subject 1: ".$sub1."<br/>";
		echo "Subject 2: ".$sub2."<br/>";
		echo "Subject 3: ".$sub3."<br/>";
		echo "Subject 4: ".$sub4."<br/>";
		echo "Subject 5: ".$sub5."<br/><br/>";
		echo "Total Marks Obtained: ".$total."<br/>";
		echo "Total Marks: 500 <br/>";
		echo "Percentage: ".$p;
	}
}
?>