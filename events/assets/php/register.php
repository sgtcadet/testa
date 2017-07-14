<?php

	$form_data = [];
	

	//To- Validate Data

	$fullname        	= $_POST['fullname'];
	$email        		= $_POST['email'];
	$cell        		= $_POST['cell'];
	$event 				= $_POST['event'];
	$package 			= $_POST['package'];
	
	//Get course ID
	
	$message     		= "Full Name: $fullname, \nEmail: $email, \nCell: $cell,\nEvent: $event, \nPackage: $package.";
	
	echo $message;

	//Thank user for registering
	$to 			= $email;
	$subject 		= "MyNVML | Event Registration";

	$respMessage 	= "<h4>Hello, $fullname</h4>";
	$respMessage 	.= "<p>Thank you for registering for $event</p>";

	$respheader 	= "From:notifications@somedomain.com \r\n";
	$respheader 	.= "Cc:webonthingany@hotmail.com \r\n";
	$respheader 	.= "MIME-Version: 1.0\r\n";
	$respheader 	.= "Content-type: text/html\r\n";

	$sendResp = mail($to,$subject,$respMessage,$respheader);

	if($sendResp == true)
	{
		echo "Response sent successfully...";
	}
	else
	{
		echo "Respinse could not be sent...";
	}
	
	
	//Add registerd user to db


	//Tell admin user registered

	//Company Email goes here
	if(mail('howardgrantjnr@gmail.com', "$fullname just registered for an event!", $message,"From: Bot"))
		$form_data['success'] = true;
	else
		$form_data['success'] = false;

	echo json_encode($form_data);
	
	return;

	//redirect user
?>