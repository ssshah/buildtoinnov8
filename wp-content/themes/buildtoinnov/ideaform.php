<?php

if($_POST)
{
	$to_email   	= "techinestinc@gmail.com"; //Recipient email, Replace with own email here
	
	
	//Sanitize input data using PHP filter_var().
	$name		= filter_var($_POST["hname"], FILTER_SANITIZE_STRING);
	$email		= filter_var($_POST["hemail"], FILTER_SANITIZE_EMAIL);
	$phone		= filter_var($_POST["hphone"], FILTER_SANITIZE_EMAIL);
	$company	= filter_var($_POST["hcompany"], FILTER_SANITIZE_EMAIL);
	$budget		= filter_var($_POST["budget"], FILTER_SANITIZE_EMAIL);
	$project	= filter_var($_POST["project"], FILTER_SANITIZE_EMAIL);
	$location		= filter_var($_POST["hlocation"], FILTER_SANITIZE_EMAIL);
	$website	= filter_var($_POST["hwebsite"], FILTER_SANITIZE_EMAIL);
	$msg	= filter_var($_POST["hmsg"], FILTER_SANITIZE_EMAIL);
	
	$name = $_POST["hname"];
	$subject		= filter_var("Contact Us Inquiry", FILTER_SANITIZE_STRING);
	$message		= filter_var($_POST["hmsg"], FILTER_SANITIZE_STRING);
	
	
	//email body
	$message_body .="<p>Dear Admin,</p>\r\n\r\n";
	$message_body .="<p>An Inquiry has been received from Jouple website that needs your attention.
Below are contact details.</p>";
	$message_body .= "<p>Name: ".$name."</p><p>Email : ".$email
	."</p><p>Phone : ".$phone."</p><p>Company : ".$company."</p><p>Project : ".$project
	."</p><p>Budget : ".$budget."</p><p>Location : ".$location."</p><p>Website : ".$website."</p><p>Project Synopsis : ".$message;
	
	$message_body .="</p><p>Admin Support Team</p>";
	//proceed with PHP email.
	$headers = 'From: '.$name.'' . "\r\n" .
	'Reply-To: '.$email.'' . "\r\n" .
	'Cc: m4mobilityinc@gmail.com' . "\r\n".
	'X-Mailer: PHP/' . phpversion();
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
	$send_mail = @mail($to_email, $subject, $message_body, $headers);
	
	$client_body .="<p>Dear $name,</p>\r\n\r\n";
	$client_body .="<p>This is Shawna Frost from Jouple. I wanted to follow-up regarding your recent inquiry on our website.</p>
<p>We are based out of Austin, Texas and follow the EST time zone. Can you please identify a couple of times that work for you for a quick call to discuss your needs in details? One of our Technology Experts will also be part of that initial meeting to give you advice on your project and how we can best help you. </p>
<p>Let me know, if there are any questions. We're excited and very much looking forward to work with you.</p>";
	$client_body .="<p>Warm Regards,<br>
Shawna Frost<br>
<span style='font-size:11px;'>Business Development Manager<br>
Phone: +1 770 261 0099<br>
Email: Shawna.frost@jouple.com<br>
Jouple Address: 4406 Cisco Valley Drive, Round Rock, Austin Texas.</span></p>";
$subject = "Thank you for contacting us";
$headers = 'From: '."Shwana Frost".'' . "\r\n" .
	'Reply-To: '."services@jouple.com".'' . "\r\n" .
	
	'X-Mailer: PHP/' . phpversion();
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
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