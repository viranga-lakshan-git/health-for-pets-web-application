<?php
 	session_start();
	
	$ownerId = $_SESSION["ownerId"];

	echo "Greetings " . $_SESSION["ownerId"] . "!<br>";

	$petName = $_POST["petName"];
	//$image = $_POST["petImage"];
	$breed = $_POST["breed"];
	$dob = $_POST["dob"];
	$gender = $_POST["rdoGender"];
	$color = $_POST["colour"];

	$con = mysqli_connect("localhost","root","","healthforpets_db");
		
	if(!$con){	
		die("Cannot connect to DB server");		
	}

	$sql = "INSERT INTO `pets` (`pet_id`, `owner_id`, `name`, `image`, `breed`, `dob`, `gender`, `color`, `status`) VALUES (NULL, '".$ownerId."', '".$petName."', NULL, '".$breed."', '".$dob."', '".$gender."', '".$color."', '1');";

	mysqli_query($con,$sql);
	mysqli_close($con);
	header("Location: newsfeed.php");

?>