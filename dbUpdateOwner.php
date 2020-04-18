<?php
	session_start();
	
	$ownerId = $_SESSION["ownerId"];
	
	$name = $_POST["name"];
	$email = $_POST["email"];
	$pw = $_POST["pw"];

	$con = mysqli_connect("localhost","root","","healthforpets_db");
	if(!$con){	
		die("Cannot connect to DB server");		
	}

	$sql = "UPDATE owners SET email ='".$email."' , pw ='".$pw."', name = '".$name."' WHERE owner_id ='".$ownerId."'";
	
	$_SESSION["ownerName"]=$name;

	mysqli_query($con,$sql);
	mysqli_close($con);
	header("Location: newsfeed.php");
?>