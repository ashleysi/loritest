<?php
$name = $_POST['name']
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['method'];

$email_from = 'aes841@nyu.edu'

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
				"User Email: $visitor_email.\n".
					"Subject: $subject.\n".
						"User Message: $message.\n";

$to = 'simons.ashley17@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to, $email_subjct, $email_body, $headers);

header("location: contact.html");



?>