<?php	
	if(empty($_POST['input_first_name']))
	{
		return false;
	}
	
	$input_first_name = $_POST['input_first_name'];
	
	$to = 'undefined'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from Release1.1.";
	$email_body = "You have received a new message. \n\n".
				  "Input_First_Name: $input_first_name \n";
	$headers = "From: undefined\n";
	$headers .= "Reply-To: DoNotReply@yoursite.com";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>