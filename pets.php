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
          <li><a class="navbutton" href="profile.php">Profile</a></li>
        
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>
  <div class="sidenav">
  <a href="gallery.php">Gallery</a>
  <a class="selected" href="pets.php">My Pets</a>
   <a style="font-size: 15px" href="addPet.php">Add new pet</a>
   <a href="reminders.php">Reminders</a>
   <a style="font-size: 15px" href="setReminder.php">Set reminder</a>
  <a href="Index.php">Logout</a>
</div>
	  <div align="center">
 	  <table width="613" height="50" border="0">
 	  	<tbody>
 	  		<tr>
				<td width="100"abbr="">Name</td>
	  			<td width="100">Breed</td>
	  			<td width="100">DoB</td>
	  			<td width="100">Gender</td>
	  			<td width="100">Color</td>
 	  		</tr>
  	  <?php

	  	  	$ownerId = $_SESSION["ownerId"];
	  
	  		$conn =  mysqli_connect("localhost","root","","healthforpets_db") or die(mysql_error());
			$query = "SELECT * FROM pets WHERE owner_id = '$ownerId'";
		  
		  	$result = mysqli_query($conn,$query);
		  
		  	while($row = mysqli_fetch_array($result)) {
				echo '<tr>';
				echo  '<td><input type="text" value="'.$row['name'].'" name="txtName" id="txtName"></td>';
				echo  '<td><input type="text" value="'.$row['breed'].'" name="txtBreed" id="txtBreed"></td>';
				echo  '<td><input type="text" value="'.$row['dob'].'" name="txtDoB" id="txtDoB"></td>';
				echo  '<td><input type="text" value="'.$row['gender'].'" name="txtGender" id="txtGender"></td>';
				echo  '<td><input type="text" value="'.$row['color'].'" name="txtColor" id="txtColor"></td>';
//				echo  '<td><input type="button" name="btnUpdate" id="btnUpdate" value="Update"><input type="button" name="btnDelete" id="btnDelete" value="Delete"></td>';
				echo '</tr>';

			} 
			mysqli_close($conn);
	  ?>
  	  </tbody>
	  </table>
	  </div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
  <script src="js/jquery-1.11.3.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
  <script src="js/bootstrap.js"></script>
</body>
</html>