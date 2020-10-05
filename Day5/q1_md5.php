<!DOCTYPE html>
<html>
<head>
	<title>MD5</title>
</head>
<body>
	<form method="POST" action="q1_md5.php">
		<label>Enter Username</label>
		<input type="text" name="username">
		<br>
		<br>
		<label>Enter Password</label>
		<input type="password" name="password">
		<br>
		<input type="submit" value="submit">
	</form>
</body>
</html>
<?php
require("connect.php");

@$name=$_POST["username"];
@$password= $_POST["password"];
@$encpass=md5($password);
$query="INSERT INTO user_password VALUES ('$name','$encpass')";
$up=mysqli_query($connect, $query);
		if ($up){
			echo "<br/>";
			echo "Table updated sucessfully";  }
		else{
			echo "<br/>";
		echo "Error:".mysqli_error($connect);
		}



?>