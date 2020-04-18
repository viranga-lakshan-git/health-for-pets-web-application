<?php
	$username = $_POST["username"];
	$name = $_POST["name"];
	$email = $_POST["email"];
	$pw = $_POST["pw"];

	$con = mysqli_connect("localhost","root","","healthforpets_db");
	if(!$con){	
		die("Cannot connect to DB server");		
	}

	$sql = "INSERT INTO `owners` (`owner_id`, `username`, `email`, `pw`, `name`, `status`) VALUES (NULL, '".$username."', '".$email."', '".$pw."', '".$name."', '1')";

	mysqli_query($con,$sql);
	mysqli_close($con);
	header("Location: index.php");
?>