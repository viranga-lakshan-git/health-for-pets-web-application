<?php
   include("config.php");
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['pw']); 
      
      $sql = "SELECT owner_id,name FROM owners WHERE username = '$myusername' and pw = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      		
      if($count == 1) {   
		  // Set session variables
    	  $_SESSION["ownerId"] = $row['owner_id']."";
		  $_SESSION["ownerName"] = $row['name']."";
		  
		  header('location:newsfeed.php');
      }else {
         echo "Your Login Name or Password is invalid.";
      }
   }
?>