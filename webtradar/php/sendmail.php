<?php
/**
 * This example shows settings to use when sending via Google's Gmail servers.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that


try {
	echo 'Gracias por contactarnos. Nos comunicaremos en breve.';
/*	date_default_timezone_set('Etc/UTC');
	require 'PHPMailerAutoload.php';

	$nombre = $_POST['name'];
	$para = $_POST['email'];
	$asunto = $_POST['asunto'];
	$mensaje = $_POST['message'];

	$todo = var_dump($_POST);
	//Create a new PHPMailer instance
	$mail = new PHPMailer;

	//Tell PHPMailer to use SMTP
	$mail->isSMTP();

	//Enable SMTP debugging
	// 0 = off (for production use)
	// 1 = client messages
	// 2 = client and server messages
	$mail->SMTPDebug = 2;

	//Ask for HTML-friendly debug output
	$mail->Debugoutput = 'html';

	//Set the hostname of the mail server
	$mail->Host = 'mx1.hostinger.es';
	// use
	// $mail->Host = gethostbyname('smtp.gmail.com');
	// if your network does not support SMTP over IPv6

	//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
	//$mail->Port = 587;

	//Set the encryption system to use - ssl (deprecated) or tls
	//$mail->SMTPSecure = 'tls';

	//Whether to use SMTP authentication
	$mail->SMTPAuth = true;

	//Username to use for SMTP authentication - use full email address for gmail
	$mail->Username = "user@gmail.com";

	//Password to use for SMTP authentication
	$mail->Password = "W3bmaster";

	//Set who the message is to be sent from
	$mail->setFrom('webmaster@webtradar.esy.es', 'First Last');

	//Set an alternative reply-to address
	//$mail->addReplyTo('replyto@example.com', 'First Last');

	//Set who the message is to be sent to
	$mail->addAddress('user@gmail.com', 'John Doe');

	//Set the subject line
	$mail->Subject = $asunto;

	//Read an HTML message body from an external file, convert referenced images to embedded,
	//convert HTML into a basic plain-text alternative body
	$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));

	$mail->Subject = 'Here is the subject';
	$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	//Replace the plain text body with one created manually
	$mail->AltBody = 'This is a plain-text message body';

	//Attach an image file
	$mail->addAttachment('images/phpmailer_mini.png');

	//send the message, check for errors
	if (!$mail->send()) {
		echo  " x Mailer Error: " . $mail->ErrorInfo;
	} else {
		echo "Message sent!";
	}
*/
}
catch (Exception $e) {
    echo "Excepcion" . $e;
}
