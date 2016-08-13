<?php

    function died($error) {
 
        echo "Something went horribly wrong... errors below";
        echo $error;
 
        die();

    }
 
    $email_to = "bostwiek@gmail.com";

	if(!isset($_POST['mail_body'])) {
		died('We are sorry, but there appears to be a problem with the form you submitted.');       
	} else {
		$mail_body = $_POST['mail_body'];
		$mail_body = str_replace("\n.", "\n..", $mail_body);
	}
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    
    if(!isset($_POST['their_email'])) {
    	$mail_from = 'anonymous visitor';
    } else {
    	$mail_from = $_POST['their_email'];
    }

    if(!isset($_POST['mail_subject'])) {
    	$mail_subject = 'Message from bostwiek.com';
    } else {
    	$mail_subject = $_POST['mail_subject'];
    }
     
 
// create email headers
 
	$headers = 'From: '.$email_from."\r\n".
 
	'Reply-To: '.$email_from."\r\n" .
 
	'X-Mailer: PHP/' . phpversion();
 
	mail('bostwiek@gmail.com', $mail_subject, $mail_body, $mail_from);  
 

	echo 'Thx for the message, bb.';

}
 
?>