<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into Users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<link rel="stylesheet" href="dark.css">
</head>
<body>

	<div id="box">
		
		<form method="post">
			<h1>MOVIE LIBRARY</h1>
			<div><h5>Signup</h5></div>
			<br>

			<label>Username:<br><input id="text" type="text" name="user_name"></label>
			<label>Password:<br><input id="text" type="password" name="password"></label><br>

			<input id="button" type="submit" value="Sign up"><br><br><br>

			<a href="login.php">Click to Login</a><br><br>
		</form>
	</div>
</body>
</html>