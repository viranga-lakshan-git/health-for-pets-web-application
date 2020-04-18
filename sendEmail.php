<?php
		$conn =  mysqli_connect("localhost","root","","healthforpets_db") or die(mysql_error());

		$query = "select * from reminders";

		$result = mysqli_query($conn,$query);
	
		$retval = false;

		if ($result) {
		  while($row = mysqli_fetch_array($result)) {
				$ownerID=$row['owner_id'];
			  	$petName=$row['pet_name'];
			  	$reminderDate=$row['reminder_date'];
			  	$des=$row['description'];
			  	$time=$row['reminder_time'];
			  
			  	//get owner email
				$sqlGetOwnerEmail = mysqli_query($conn,"SELECT `email` FROM `owners` WHERE `owner_id` = '$ownerID'");
				$rowEmail = mysqli_fetch_array($sqlGetOwnerEmail);
				$ownerEmail = $rowEmail['email'];
			  	
				//check date code
				$current = strtotime(date("Y-m-d"));
				$date    = strtotime($reminderDate);

				$datediff = $date - $current;
				$difference = floor($datediff/(60*60*24));
			  
			  	if($difference==10)//10 days;
				{
					//email code
					$to = $ownerEmail;
					$subject = "Health For Pets Reminder";
					
					$message = "<b>Reminder to your pet ".$petName.".<b>";	
					$message .= "<h1>You have a reminder (".$des.") for your pet in 10 days.</h1>";
					
					//$header = "From:".$ownerEmail." \r\n";
					$header = "From: healthforpets.sliit.itpdm@gmail.com\r\n";
					$header .= "MIME-Version: 1.0\r\n";
					$header .= "Content-type: text/html\r\n";
					ini_set('SMTP','tls://smtp.gmail.com'); ini_set('smtp_port',587);
					$retval = mail($to,$subject,$message,$header);
				}
				if($difference==0)//today
				{				
					//email code
					$to = $ownerEmail;
					$subject = "Health For Pets Reminder";
					
					$message = "<b>Reminder to your pet ".$petName.".<b>";	
					$message .= "<h1>You have a reminder (".$des.") today for your pet.</h1>";
					$message .= "<h2>Time : ".$time."</h2>";
					
					//$header = "From:".$ownerEmail." \r\n";
					$header = "From: healthforpets.sliit.itpdm@gmail.com\r\n";
					$header .= "MIME-Version: 1.0\r\n";
					$header .= "Content-type: text/html\r\n";
					ini_set('SMTP','tls://smtp.gmail.com'); ini_set('smtp_port',587);
					$retval = mail($to,$subject,$message,$header);
				}
			  	else if($difference == 1)//tommorrow
				{
					//email code
					$to = $ownerEmail;
					$subject = "Health For Pets Reminder";
					
					$message = "<b>Reminder to your pet ".$petName.".<b>";	
					$message .= "<h1>You have a reminder (".$des.") for your pet tommorrow.</h1>";
					$message .= "<h2>Time : ".$time."</h2>";
					
					//$header = "From:".$ownerEmail." \r\n";
					$header = "From: healthforpets.sliit.itpdm@gmail.com\r\n";
					$header .= "MIME-Version: 1.0\r\n";
					$header .= "Content-type: text/html\r\n";
					ini_set('SMTP','tls://smtp.gmail.com'); ini_set('smtp_port',587);
					$retval = mail($to,$subject,$message,$header);
				}
				else if($difference > 1)//future date
				{
					
				}
				
				else if($difference < -1)//long back
				{
					
				}
				else// yesterday
				{
					//email code
					$to = $ownerEmail;
					$subject = "Health For Pets Reminder";
					
					$message = "<b>Reminder to your pet ".$petName.".<b>";	
					$message .= "<h1>You had a reminder (".$des.") for your pet yesterday. Did you check?</h1>";
					$message .= "<h2>Time : ".$time."</h2>";
					
					//$header = "From:".$ownerEmail." \r\n";
					$header = "From: healthforpets.sliit.itpdm@gmail.com\r\n";
					$header .= "MIME-Version: 1.0\r\n";
					$header .= "Content-type: text/html\r\n";
					ini_set('SMTP','tls://smtp.gmail.com'); ini_set('smtp_port',587);
					$retval = mail($to,$subject,$message,$header);
				}

		  }

		}
		else {
		  echo mysql_error();
		}
		
//		//email code
//		$to = $ownerEmail;
//        $subject = "Health For Pets Reminder";
//         
//        $message = "<b>You have a reminder to a vaccine for your pet.</b>";
//        $message .= "<h1>Reminder to your pet ".$petName.".</h1>";
//        
//		//$header = "From:".$ownerEmail." \r\n";
//        $header = "From: healthforpets.sliit.itpdm@gmail.com\r\n";
//        $header .= "MIME-Version: 1.0\r\n";
//        $header .= "Content-type: text/html\r\n";
//        ini_set('SMTP','tls://smtp.gmail.com'); ini_set('smtp_port',587);
//        $retval = mail($to,$subject,$message,$header);
         
     
 		if( $retval == true ) {
			echo $to;
			echo '<br>';
			echo $subject;
			echo '<br>';
			echo $message;
			echo '<br>';
			echo $header;
			echo '<br>';
           echo "Message sent successfully...";
        }else {
           echo "Message could not be sent...";
        }
?>