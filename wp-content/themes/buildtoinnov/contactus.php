<?php

if($_POST)
{
	$to_email   	= "info@Buildtoinnov8.com"; //Recipient email, Replace with own email here
	
	
	//Sanitize input data using PHP filter_var().
	$name		= filter_var($_POST["name"], FILTER_SANITIZE_STRING);
	$email		= filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
	$phone		= filter_var($_POST["phone"], FILTER_SANITIZE_EMAIL);
	$msg	= filter_var($_POST["msg"], FILTER_SANITIZE_EMAIL);
	
	
	$name = $_POST["name"];
	$subject		= filter_var("Contact Us", FILTER_SANITIZE_STRING);
	$message		= filter_var($_POST["msg"], FILTER_SANITIZE_STRING);
	
	
	//email body
	$message_body .="Dear Admin,\r\n\r\n";
	$message_body .="An Inquiry has been received from Buildtoinnov8 website that needs your attention.
Below are contact details.\r\n\r\n";
	$message_body .= "\r\n\r\nName: ".$name."\r\nEmail : ".$email
	."\r\nPhone : ".$phone."\r\nMessage : ".$message;
	
	$message_body .="\r\n\r\n\r\n\r\n-Admin Support Team";
	//proceed with PHP email.
	$headers = 'From: '.$name.'' . "\r\n" .
	'Reply-To: '.$email.'' . "\r\n" .
	'Cc: salman@Buildtoinnov8.com,fahad@Buildtoinnov8.com.sheeraz@Buildtoinnov8.com' . "\r\n".
	'X-Mailer: PHP/' . phpversion();
	
	$send_mail = @mail($to_email, $subject, $message_body, $headers);
	
	$client_body .="Dear $name,\r\n\r\n";
	$client_body .="<p>This is Shawna Frost from Buildtoinnov8. I wanted to follow-up regarding your recent inquiry on our website.</p>
<p>We are based out of Austin, Texas and follow the EST time zone. Can you please identify a couple of times that work for you for a quick call to discuss your needs in details? One of our Technology Experts will also be part of that initial meeting to give you advice on your project and how we can best help you. </p>
<p>In order for you to talk freely, I've attached a copy of an NDA that we use. Please download and revert back with a signed copy so that your idea is protected.</p>
<p>You can also download the NDA by clicking here. (Put NDA file in Dropbox and add the of the file in it)</p>
<p>Let me know, if there are any questions. We're excited and very much looking forward to work with you.</p>";
	$client_body .="<p>Warm Regards,<br>
Shawna Frost<br>
Business Development Manager<br>
Phone: +1 770 261 0099<br>
Email: Shawna.frost@Buildtoinnov8.com<br>
Buildtoinnov8 Address: 4406 Cisco Valley Drive, Round Rock, Austin Texas.</p>";
$subject = "Thank you for contacting us";
$headers = 'From: '."Shwana Frost".'' . "\r\n" .
	'Reply-To: '."services@Buildtoinnov8.com".'' . "\r\n" .
	
	'X-Mailer: PHP/' . phpversion();
	
	$send_mail = @mail($email, $subject, $client_body, $headers);

	if(!$send_mail)
	{
		//If mail couldn't be sent output error. Check your PHP email configuration (if it ever happens)
		echo 'error';
	}else{
		
		echo 'success';
	}

}
?>