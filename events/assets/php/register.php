<?php
	//Including database connection
	require_once 'scripts/Connection.php';

	//executing database connection
	$connect = new Connection("nvml");

	$form_data = [];
	

	//To- Validate Data
	function test_input($data) 
	{
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

	//$fullname        	= $_POST['fullname'];
	$firstname			= test_input($_POST['firstname']);
	$lastname 			= test_input($_POST['lastname']);
	$email        		= test_input($_POST['email']);
	$cell        		= test_input($_POST['cell']);
	$event 				= test_input($_POST['event']);
	$package 			= test_input($_POST['package']);
	

	
	//$fullname = $firstname . " " . $lastname;
	//
	// Add new user to the database and registered event
	//
	function register($connect,$event,$firstname,$lastname,$email,$cell,$package)
	{
		$fullname = $firstname . " " . $lastname;
		$test_val = isRegistered($connect,$event,$email);
		if($test_val == true)
		{
			echo "<br>Registration Denied!!<br/>";
			$form_data['success'] = false;
		}
		else
		{

			echo "<br>Registration Access<br/>";
			$user_id;

			//TEST IF USER ALREADY REGISTERED FOR AN EVENT
			$checkSql = $connect->conn->query("SELECT user_id FROM user WHERE email='$email';"); 
			while ($row = $checkSql->fetch_assoc())
			{
				$user_id = $row['user_id'];
			}

			if(isset($user_id))
			{
				//REGISTER EVENT
				$sql2 = "INSERT INTO registered_event (registered_package,event_id,user_id) VALUES ('$package','$event',$user_id);";
				if($connect->conn->query($sql2) === TRUE)
				{
					echo "<br/>New user record created successfully <br/>";

					//***********************************
					//TO DO: SEND USER VERIFICATION EMAIL
					//***********************************

					/*___________________________________________
					//SEND USER REGISTRATION NOTIFICATION EMAIL
					____________________________________________*/
					//Thank user for registering
					$to 			= $email;
					$subject 		= "MyNVML | Event Registration";

					$respMessage 	= "<h4>Hello, $fullname</h4>";
					$respMessage 	.= "<p>Thank you for registering for $event</p>";
					$respMessage	.= "<p>You will be notified <strong>24 hours</strong> and <strong> 1 hours </strong> before the event</p>";
					
					//HEADER
					$respheader 	= "From:notifications@somedomain.com \r\n";
					$respheader 	.= "Cc:webonthingany@hotmail.com \r\n";
					$respheader 	.= "MIME-Version: 1.0\r\n";
					$respheader 	.= "Content-type: text/html\r\n";

					//
					//Sends Email to newly registered user.
					$sendResp = mail($to,$subject,$respMessage,$respheader);



					/*_____________________________________________
					//SEND ADMIN USER REGISTERED NOTIFICATION EMAIL
					_______________________________________________*/
					$message     = "Full Name: $fullname, \nEmail: $email, \nCell: $cell,\nEvent: $event, \nPackage: $package.";
					
					//Company Email goes here
					$adminResp = mail('howardgrantjnr@gmail.com',"$fullname just registered for an event!",$message,$respheader);

					if($sendResp == true && $adminResp == true)
					{
						$form_data['success'] = true;
					}
					else
					{
						$form_data['success'] = false;
					}
				}
				else 
				{
				    echo "Error: " . $sql . "<br>" . $connect->conn->error;
				}
			}
			else
			{
				//ADD NewUSER
				//REGISTER EVENT
			

				$sql = "INSERT INTO user (first_name,last_name,email,cell) VALUES ('$firstname','$lastname','$email','$cell');";
				if($connect->conn->query($sql) === TRUE)
				{
					$result = $connect->conn->query("SELECT user_id FROM user WHERE email='$email';");
				
					while ($row = $result->fetch_assoc())
					{
						$user_id = $row['user_id'];
					}
					echo " $user_id <---- <br/>";
					$sql2 = "INSERT INTO registered_event (registered_package,event_id,user_id) VALUES ('$package','$event',$user_id);";
					if($connect->conn->query($sql2) === TRUE)
					{
						echo "<br/>New user record created successfully <br/>";

						//***********************************
						//TO DO: SEND USER VERIFICATION EMAIL
						//***********************************

						/*___________________________________________
						//SEND USER REGISTRATION NOTIFICATION EMAIL
						____________________________________________*/
						//Thank user for registering
						$to 			= $email;
						$subject 		= "MyNVML | Event Registration";

						$respMessage 	= "<h4>Hello, $fullname</h4>";
						$respMessage 	.= "<p>Thank you for registering for $event</p>";
						$respMessage	.= "<p>You will be notified <strong>24 hours</strong> and <strong> 1 hours </strong> before the event</p>";
						
						//HEADER
						$respheader 	= "From:notifications@somedomain.com \r\n";
						$respheader 	.= "Cc:webonthingany@hotmail.com \r\n";
						$respheader 	.= "MIME-Version: 1.0\r\n";
						$respheader 	.= "Content-type: text/html\r\n";

						//
						//Sends Email to newly registered user.
						$sendResp = mail($to,$subject,$respMessage,$respheader);



						/*_____________________________________________
						//SEND ADMIN USER REGISTERED NOTIFICATION EMAIL
						_______________________________________________*/
						$message     = "Full Name: $fullname, \nEmail: $email, \nCell: $cell,\nEvent: $event, \nPackage: $package.";
						
						//Company Email goes here
						$adminResp = mail('howardgrantjnr@gmail.com',"$fullname just registered for an event!",$message,$respheader);

						if($sendResp == true && $adminResp == true)
						{
							$form_data['success'] = true;
						}
						else
						{
							$form_data['success'] = false;
						}
						/*
						if(mail('howardgrantjnr@gmail.com', "$fullname just registered for an event!", $message,"From: Bot"))
						 	$form_data['success'] = true;
						else
							$form_data['success'] = false;

						echo json_encode($form_data);
						
						return; //$form_data;
						*/

					}
					else
					{
						echo "Error: " . $sql2 . "<br>" . $connect->conn->error;
					}
				}
				else 
				{
				    echo "Error: " . $sql . "<br>" . $connect->conn->error;
				}
			}
			//echo json_encode($form_data);
			//return; 
			//else 
			//{
			//    echo "Error: " . $sql . "<br>" . $connect->conn->error;
			//}
		}
		//echo json_encode($form_data);
		//return;
		echo json_encode($form_data);
		return $form_data; 
	}

	//
	// Check if a user already registered for an event
	//
	function isRegistered($connect,$event,$email)
	{

		/*
		** SELECT user.user_id, registered_event.event_id,user.email FROM registered_event INNER JOIN user ON registered_event.user_id=user.user_id	
		*/
		$sql = "SELECT user.user_id, registered_event.event_id,user.email FROM registered_event INNER JOIN user ON registered_event.user_id=user.user_id WHERE user.email='$email' AND registered_event.event_id='$event';";


		$result = $connect->conn->query($sql);
		if(mysqli_num_rows($result) >= 1)
		{
			echo "<br>User Already registerd for event<br/>";
			return true;
		}
		else
		{
			echo "<br>User can register for event<br/>";
			return false;
		}
	}



	register($connect,$event,$firstname,$lastname,$email,$cell,$package);

	
	//Add registerd user to db if varified

	//Company Email goes here
	//if(mail('howardgrantjnr@gmail.com', "$fullname just registered for an event!", $message,"From: Bot"))
	// 	$form_data['success'] = true;
	//else
	//	$form_data['success'] = false;

	//echo json_encode($form_data);
	
	//return; //$form_data;

	//redirect user
?>