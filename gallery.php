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
          <li ><a class="navbutton" href="newsfeed.php">Home</a></li>
          <li><a class="navbutton" href="#">Profile</a></li>
        
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>
  <div class="sidenav">
  <a class="selected" href="gallery.php">Gallery</a>
  <a href="pets.php">My Pets</a>
   <a style="font-size: 15px" href="addPet.php">Add new pet</a>
   <a href="reminders.php">Reminders</a>
   <a style="font-size: 15px" href="setReminder.php">Set reminder</a>
  <a href="Index.php">Logout</a>
</div>

  <div id="content">

	<form class="Filechooser"  action="gallery.php" method="post" enctype="multipart/form-data">
	<?php
  		echo "<h4>Greetings " . $_SESSION["ownerName"] . "!</h4>";
	?>
		<h4>Select image to upload:</h4>
		  	<textarea name="desc" cols="50" rows="4" placeholder="Say something about this image" ></textarea>
			<input type="file" name="image" id="image"><input type="submit" value="Upload " name="upload">
	</form>
</div>
   
	  	
	<?php 
		 if(isset($_POST['upload'])){
		 $conn =  mysqli_connect("localhost","root","","healthforpets_db") or die(mysql_error());
		  $file =$_FILES['image']['tmp_name'];

			 if(!$_FILES['image']['tmp_name']) {
			 echo"Please select an image";
		 	}


			else 
			{
				$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
				$image_name = addslashes($_FILES['image']['name']);
				$image_size = getimagesize($_FILES['image']['tmp_name']);
				$description=$_POST['desc'];
				if($image_size ==FALSE)
				echo "that is not an image";

				else
				{
					$ownerId = $_SESSION["ownerId"];
					if(!$insert = mysqli_query($conn,"INSERT INTO images VALUES('','".$ownerId."','$image_name','$image','$description')"))
					echo"Problem uploading image";
				    header('location:gallery.php');		
			}       					
		}
	 }
	
		   function DispalyMyImages(){
		
				$conn =  mysqli_connect("localhost","root","","healthforpets_db") or die(mysql_error());

			   	$ownerId = $_SESSION["ownerId"];
				$sql = "SELECT * FROM images WHERE owner_id='$ownerId' ORDER BY id DESC";
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
			DispalyMyImages();
		?>	 
  
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
  <script src="js/jquery-1.11.3.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
  <script src="js/bootstrap.js"></script>
</body>
</html>