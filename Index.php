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
    <title>Health for Pets</title>
    <!-- Bootstrap -->
	<link href="css/indexpage.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
  </head>
  <body style="padding-top: 100px">
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topFixedNavbar2" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
        <a href="Indexl.html"><img src="Images/Icon.png" width="65px" height="50px "> Health for Pets: Online Pet care & Gallery</a></div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="topFixedNavbar2">
        <ul class="nav navbar-nav">
          
          <li class="ropdown">

          </li>
        </ul>
       

        <ul class="nav navbar-nav navbar-right">
          
         
          <li ><a class="navbutton" href="guestGallery.php">Gallery</a></li>
           <li ><a class="navbutton" href="#">About</a></li>
          <li><button class="navbuttonlogin" href="#" onClick="openForm()" onMouseOver="closeForm()">Login</button></li>
          <div class="form-popup" id="myForm">
 				 <form class="form-container" method="post">
    				
    					<label for="username"> <span class="glyphicon">&#xe008;</span> <b>Username</b></label>
    					<input type="text" placeholder="Enter Username" name="username" required>

   						 <label for="password"><span class="glyphicon">&#xe033;</span> <b>Password</b></label>
   						 <input type="password" placeholder="Enter Password" name="pw" required>
						<?php include("login.php"); ?>
   						<button type="submit" class="btn">Login</button>
    					<button type="button" class="btn cancel" onclick="closeForm()">Close</button>
 				 </form>
		</div>
          
           
       
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>
<div id="carousel1" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
      <li data-target="#carousel1" data-slide-to="0" class="active"></li>
      <li data-target="#carousel1" data-slide-to="1"></li>
      <li data-target="#carousel1" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
      <div class="item active"><img src="Images/1.jpg" alt="First slide image" class="center-block">
        <div class="carousel-caption">
          <h2></h2>
          <p></p>
        </div>
      </div>
      <div class="item"><img src="Images/2.jpg" alt="Second slide image" class="center-block">
        <div class="carousel-caption">
          <h2></h2>
          <p></p>
        </div>
      </div>
      <div class="item"><img src="Images/3.jpg" alt="Third slide image" class="center-block">
        <div class="carousel-caption">
         <h4>Get Started Here</h4>
          <p></p>
        </div>
      </div>
    </div>
  <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel1" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a>
 
</div>
 <div class="jumbotron">
    <h1 style="color: #0C417F">Welcome to Pet Care</h1>
    <p>Manage all of your pets’ details from one simple website.You can create profiles for multiple pets detailing their vet appointments, medications and allergies, weight history, and more. The variety of customizable features make this a convenient and easy-to-use.</p>
    <p><a href="regiter.php"><img height="60" src="Images/CTA-Register-Now-Blue-Button-PNG-Graphic-Cave.png" class="Reg" ></a></p>
  </div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-1.11.3.min.js"></script>
     <script>
		 function openForm() {
  			document.getElementById("myForm").style.display = "block";
		 	}

		 	function closeForm() {
				document.getElementById("myForm").style.display = "none";
				}
</script>
	<!-- Include all co
	mpiled plugins (below), or include individual files as needed --> 
	<script src="js/bootstrap.js"></script>
</body>
</html>