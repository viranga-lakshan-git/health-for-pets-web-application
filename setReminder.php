<!DOCTYPE html>
<?php
// Start the session
	session_start();
	$ownerId = $_SESSION["ownerId"];
?>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reminders</title>
    <!-- Bootstrap -->
	<link href="css/reminders.css" rel="stylesheet">
	


	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
  </head>
  <body >
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
  <a href="gallery.php">Gallery</a>
  <a href="pets.php">My Pets</a>
   <a style="font-size: 15px" href="addPet.php">Add new pet</a>
   <a  href="reminders.php">Reminders</a>
   <a class="selected" style="font-size: 15px" href="setReminder.php">Set Reminders</a>
  <a href="Index.php">Logout</a>
</div>
 <div>
  <?php 
		 
	      $conn =  mysqli_connect("localhost","root","","healthforpets_db") or die(mysql_error());
	  	  $sql = "SELECT name FROM pets WHERE owner_id='$ownerId'";
		  $sth = $conn->query($sql);		 
  ?>
		 
  <form action= "setReminder.php"  method="post" enctype="multipart/form-data">
	
		
		<table class="table1" width="75%" border="0" cellspacing="0" cellpadding="0">
		 	<h4 >Set Reminder</h4>
		   <tr>
		      <td class="td1"><label class="value">Pet Name</label></td>
		      <td class="td2">
		      	
				<select class="dropd" name ="pets">
				 <?php 
					while($rows = $sth->fetch_assoc())
					{
						$pet_name = $rows['name'];
						
						echo"<option value  = '$pet_name' >$pet_name</option>";
					}
					mysqli_close($conn);
					?>	
		      </td>
	       </tr>
	        
	       <tr>
		      <td class="td1"><label >Reminder Date</label></td>
		      <td class="td2">
		          <input name="redate" type="date" class="reminderDate">
		      </td>
	       </tr>
	        
	       <tr>
		      <td class="td1"><label >Reminder Time</label></td>
		      <td class="td2">
		          <input name="retime" type="time" class="reminderTime">
		      </td>
	       </tr>
	       
	       
	         <tr>
		      <td class="td1"><label >Description</label></td>
		      <td class="td2">
		         <input type="text" class="description" name="description" id="description" >

		      </td>
	       </tr>
	     
    </table>
      
	   	<div class="buttons">
		    	<button type="submit" value="setreminder" name="setreminder" >Set Reminder</button>
			  <button  type="clear" >Clear</button>
   			<button type="cancel" >Cancel</button>
	     
	    </div>  
	    
 		</form>
		  
 		  <?php  
		 if(isset($_POST['setreminder'])){
		 $conn =  mysqli_connect("localhost","root","","healthforpets_db"); 
		 if(!$conn){	
			die("Cannot connect to DB server");		
			}
				  
			$petName =$_POST['pets'];
			$redate =$_POST['redate'];
			$retime = $_POST['retime'];
			$des = $_POST['description'];
			 
	   	if(!$insert = mysqli_query($conn,"INSERT INTO reminders VALUES('','".$ownerId."','$petName','$redate','$retime','$des','1')"))
			 echo"Problem uploading ";
			  mysqli_close($conn);
			  header('location:setReminder.php');
			 }
		
 		 ?> 
 	</div>  
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
  <script src="file:///C|/xampp/htdocs/System2/js/jquery-1.11.3.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
  <script src="file:///C|/xampp/htdocs/System2/js/bootstrap.js"></script>
</body>
</html>