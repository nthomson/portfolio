<?php

$to = 'nthomsondev@gmail.com';
$from = $_POST['replyTo'];
$name = $_POST['name'];
$subject = "Hello from $name!";
$body = $_POST['message'];




$headers = "From: $from\r\n"."X-Mailer: php";

	if(mail($to, $subject, $body, $headers)){
		echo("Message sent successfully - I'll get back to you as soon as I can!");
	}
	else {
		echo("Error: Message failed to send, please try an alternative method of contact");
	}

?>
