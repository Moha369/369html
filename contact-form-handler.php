<?php 

	$name = $_Post['name'];
	$visitor_email = $_Post['email']
	$message = $_Post['message']

	
	//add here the sender (the email you want to send to you the submission) email	
	$email_from = 'receiveremail@domain.com'

	$email_subject = 'New form submission';

	$email_body = "User Name : $name.\n".
						"User Email : $visitor_email.\n".
							"User Message : $message.\n ";
	//add here your email to receive the submission
	$to = "youremail@domain.com"

	$headers = "From: $email_from \r\n";
	$headers .= "Reply-to: $visitor_email \r\n";
	mail($to,$email_subject,$email_body,$headers)
	header("location: contact.html");
?>
