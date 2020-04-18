<?php
// Start the session
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Pet</title>
    <!-- Bootstrap -->
	<link href="css/addPet.css" rel="stylesheet">
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		
<script type="text/javascript">
	
function validatePetName()
{
	var name = document.getElementById("petName").value;

	if(!name.match(/^[A-Za-z]+$/))
		{
			
	   alert("Please enter your pet name");
		return false;
		}
	return true;
	
}

function validateBreed()
{
	var breed = document.getElementById("breed").value;
	if(!breed.match(/^[A-Za-z]+$/))
		{
			
	   alert("Please enter your pet breed");
		return false;
		}
	return true;		
}

function validateDOB()
{
	var selectedText = document.getElementById('dob').value;
	var selectedDate = new Date(selectedText);
	var now = new Date();
	
	if(selectedDate >= now)
	{
		alert("Please enter a valid Birth Date");
		return false;
	}
	if((dateString == "")||(dateString == null))
		{
			alert("Please enter the date");
			return false;
		}
	 return true;
}
	
function validateColour()
{
	var colour = document.getElementById("colour").value;
	if(!colour.match(/^[A-Za-z]+$/))
		{
			
	   alert("Please enter your pet colour");
		return false;
		}
	return true;
}

 function clearText() {
  document.getElementById("btnClear").reset();
}
	
function validate()
	{
		if(validatePetName()  && validateBreed() && validateDOB() && validateColour())
			{
				alert("Pet registration is completed");
			}
		else
			{
				even.preventDefault();
			}
	}
  </script>
		
  </head>
	  <body >
		
		<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
		  <!-- Brand and toggle get grouped for better mobile display -->
		  <div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topFixedNavbar2" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
			<a><img src="Images/Icon.png" width="65px" height="50px "></a></div>
		  <!-- Collect the nav links, forms, and other content for toggling -->
		  <div class="collapse navbar-collapse" id="topFixedNavbar2">
			<ul class="nav navbar-nav">

			  <li class="ropdown">

			  </li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
			  <li ><a class="navbutton" href="newsfeed.php">Home</a></li>
			  <li ><a class="navbutton" href="#">Gallery</a></li>
			  <li><a class="navbutton" href="Index.php">Logout</a></li>
			</ul>
		  </div>
		  <!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	  </nav>
	<form class="containers" action="dbAddPet.php" method="post">	
	<div class="container">
<!--    <img id="petImage" name="petImage" src="Images/addPetIcon.png" alt="your image" height="80" width="80" /><input type="file" onchange="readURL(this);" />-->
    <hr>
    <label for="Usename"> <strong>Pet Name</strong></label>
    <input type="text" class="name" placeholder="Enter Pet Name" name="petName" id="petName" required>
    <hr>
    <label for="Breed"> <strong>Breed</strong></label>
    <input type="text" class="breed" placeholder="Enter Pet's Breed" name="breed" id="breed" required>
    <hr>
     <label for ="DOB"><b>Date of Birth</b></label>
    <input type="date" class="dob" placeholder="Enter Pet's Date of Birth" name="dob" id="dob" required>
	<hr>
    <label for="Gender"> <b>Gender</b> <br> </label>
    <input type="radio" class="rdoMale" name="rdoGender" id ="rdoMale" value="Male" checked>Male
    <input type="radio" class="rdoFemale" name="rdoGender" id="rdoFemale" value="Female" >Female
    <hr>
    <label for="Colour"><b>Colour</b></label>
    <input type="text" class="colour" placeholder="Enter pet's colour" name="colour" id="colour" required>
      
      <br>
      <button type="submit" class="registerbtn" name="btnSubmit" id = "btnSubmit" value = "submit" onclick = "validate()">Submit</button>
      <button type="clear" class="clearbtn" id="btnClear" onClick="clearText()">Clear</button>
      <button type="cancel" class="cancelbtn">Cancel</button>
	</div>
</form>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
		<script src="js/jquery-1.11.3.min.js"></script>
	  <!-- Include all compiled plugins (below), or include individual files as needed --> 
		<script src="js/bootstrap.js"></script>
</body>
</html>