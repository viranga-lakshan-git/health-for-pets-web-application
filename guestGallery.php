<!DOCTYPE html>
<?php
// Start the session
	session_start();
	
?>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <!-- Bootstrap -->
	<link href="css/newsfeed.css" rel="stylesheet">
 	

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
  </head>
  <body style="background-image: url(Images/Trees_1920x1234.png)">
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topFixedNavbar2" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
		  <img class="icon" src="Images/Icon.png" width="65px" height="50px "></div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="topFixedNavbar2">
        <ul class="nav navbar-nav">
          <li class="ropdown">
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li ><a class="navbutton" href="Index.php">Home</a></li>
          <li><a class="navbutton" href="regiter.php">Register</a></li>
        
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>
</div>

 
	  	
	<?php 	
		function DispalyAllImages(){
		
				$conn =  mysqli_connect("localhost","root","","healthforpets_db") or die(mysql_error());

			   	$ownerId = $_SESSION["ownerId"];
				$sql = "SELECT * FROM images ORDER BY id DESC";
				$sth = $conn->query($sql);
				while($result = mysqli_fetch_array($sth)){
				 echo "<div id ='img_div'>";
				echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['image'] ).'"/>';
				echo ("<a>".$result['description']."</a>");		   
				echo  "</div>";
				echo  "</br>";	
				} 
				mysqli_close($conn);
			  }			  
			DispalyAllImages();
		?>	 
  
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
  <script src="js/jquery-1.11.3.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
  <script src="js/bootstrap.js"></script>
</body>
</html>