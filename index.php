<?php
	session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

	$host = 'localhost';
	$username = 'kakadidh_kakadidh';
	$password = 'its+@+secret';
	$db_name = 'kakadidh_mydb';
	$conn = mysqli_connect($host, $username, $password, $db_name);
	if (empty($conn))
	{
		die("Connection failed: " . mysqli_connect_error());
	}

	if( isset($_GET['submit']) )
	{
		$movieName = htmlentities($_GET['movieName']);
		$releaseYear = htmlentities($_GET['releaseYear']);
		$director = htmlentities($_GET['director']);

		$query = "INSERT INTO movieTable (movieName, releaseYear, director)
			  	VALUES ('$movieName', '$releaseYear', '$director');";
		$result = mysqli_query($conn, $query);
		if($result){
			echo "Success";
		}
		else{
			"Failed";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Library Home</title>
	<link rel="stylesheet" href="dark.css">
</head>
<body>

	<div class="logout"><a href="logout.php">Logout</a></div>
	<h1>MOVIE LIBRARY</h1>
	<div class="welcome">Hello, <?php echo $user_data['user_name'] . "<br> Welcome to Movie Library, You can add your favourite movies here."; ?></div>
	<br>
	<form method="get" action="">
        <label>Enter Movie name:<br> <input type="text" name="movieName"></label>
        <label>Enter Release Year:<br> <input type="number" name="releaseYear" min="0" oninput="validity.valid||(value='');"></label>
        <label>Enter director name:<br> <input type="text" name="director"></label><br>
        <label><input type="submit" name="submit" value="Add Movie"></label>
    </form><br><br>

	<a href="tabledata.php">Show Movie Library</a>
</body>
</html>