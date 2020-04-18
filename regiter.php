<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <!-- Bootstrap -->
	<link href="css/registerpage.css" rel="stylesheet">
	  <script src="js/regValidate.js" type="text/javascript"></script>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topFixedNavbar2" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
        <a href="Index.php"><img src="Images/Icon.png" width="65px" height="50px "></a><!-- Collect the nav links, forms, and other content for toggling -->
      </div>
      
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
 				 <form action="/action_page.php" class="form-container">
    				

				   <label for="username"> <span class="glyphicon">&#xe008;</span> <b>Username</b></label>
    					<input type="text" placeholder="Enter Username" name="username" required>

   						 <label for="psw"><span class="glyphicon">&#xe033;</span> <b>Password</b></label>
   						 <input type="password" placeholder="Enter Password" name="psw" required>

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
    
    <div class="beforeform">
 
<form class="containers" action="dbAddOwner.php" method="post">
  <div class="formdiv">

   	

    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
	<label for="username"><span class="glyphicon">&#xe008;</span> <b> Username</b></label>
    <input type="text" placeholder="Enter Username" id="txtuserName" name="username" required>
    
    <label for="name"><span class="glyphicon">&#xe008;</span> <b> Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" id="txtName" required>
    
    <label for="email"> <span class="glyphicon">&#x2709;</span>  <b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="txtEmail" required>

    <label for="psw">  <span class="glyphicon">&#xe033;</span> <b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pw" id="txtPw" required>

    <label for="confirmpsw">  <span class="glyphicon">&#xe033;</span> <b>Confirm Password</b></label>
    <input type="password" placeholder="Confirm password " name="cpw" id="txtCpw" required>
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button type="submit" class="registerbtn" onClick="validate()">Register</button>
     <a href="index.php"><button type="button" class="cancelbtn">Cancel</button></a>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a onClick="openForm()">Sign in</a>.</p>
  </div>
</form>

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
	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="js/bootstrap.js"></script>
  </body>
</html>