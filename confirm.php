<?php

if (isset($_POST['send'])) {
     $to = 'mferguson@jplcreative.com'; // Use your own email address
     $subject = 'Inquiry from Site';
}

$message = 'Name: ' . $_POST['name'] . "\r\n\r\n";
$message .= 'Message: ' . $_POST['message'];
$headers = "From: webmaster@example.com\r\n";
$headers .= 'Content-Type: text/plain; charset=utf-8';
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
if ($email) {
   $headers .= "\r\nReply-To: $email";
}
$success = mail($to, $subject, $message, $headers, '-fmccleaf324@gmail.com');


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