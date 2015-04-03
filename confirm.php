<?php

if (isset($_POST['send'])) {  //if they submit form
	$error = false;

	if (!$_POST["name"]) {    //if there is a name
		$error = true;
	}
	if (!$_POST["email"]) {    //if there is an email
		$error = true;
	}
	if (!$_POST["message"]) {    //if there is a message
		$error = true;
	}

	if (!$error) {
		$to = 'mccleaf324@gmail.com';   //sends to my email
		$subject = 'Inquiry from Site';   //subject of email

		$message = 'Name: ' . $_POST['name'] . "\r\n\r\n";    //this is body of email - first line is name
		$message .= 'Email: ' . $_POST['email'] . "\r\n\r\n";    //this is body of email - second line is users email
		$message .= 'Message: ' . $_POST['message'];    //this is body of email - third line is message

		$headers = "From: sayhi@zachmccleaf.com\r\n";    //adds domail email address to header
		$headers .= 'Content-Type: text/plain; charset=utf-8';    //reassigns all content in header to utf-8 plain/text
		$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);    //validates user email 
		
		if ($email) {
			$headers .= "\r\nReply-To: $email";
		}

		$success = mail($to, $subject, $message, $headers);	
		
	}
}


?>

<body>
<?php if (isset($success) && $success) { ?>
<h1>Thank You</h1>
Your message has been sent.
<?php } else { ?>
<h1>Oops!</h1>
Sorry, there was a problem sending your message.
<?php } ?>
</body>