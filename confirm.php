<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

if (isset($_POST['send'])) {
	$error = false;

	if (!$_POST["name"]) {
		$error = true;
	}
	if (!$_POST["email"]) {
		$error = true;
	}
	if (!$_POST["message"]) {
		$error = true;
	}

	if (!$error) {
		$to = 'mccleaf324@gmail.com'; // Use your own email address
		$subject = 'Inquiry from Site';

		$message = 'Name: ' . $_POST['name'] . "\r\n\r\n";
		$message .= 'Message: ' . $_POST['message'];

		$headers = "From: webmaster@example.com\r\n";
		$headers .= 'Content-Type: text/plain; charset=utf-8';
		$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
		
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