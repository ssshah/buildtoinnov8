<?php 
if(isset($_POST)){
    $name = $_POST['jobapp_name'];
    $phone = $_POST['jobapp_phone'];
    $email = $_POST['jobapp_email'];
    $recipient_email = 'salman@jouple.com,sheraz@jouple.com,zaid@jouple.com,faisalali@jouple.com';

    $subject = "Job Application Notification";

    $message = '<html>
<body>
<div style="font-family: Helvetica Neue, Helvetica, Helvetica, Arial, sans-serif;">
    <table style="width: 100%;">
      <tr>
        <td></td>
        <td bgcolor="#FFFFFF ">
          <div style="padding: 15px; max-width: 600px;margin: 0 auto;display: block; border-radius: 0px;padding: 0px; border: 1px solid lightseagreen;">
            <table style="width: 100%;background: #f0a402 ;">
              <tr>
                <td></td>
                <td>
                  <div>
                    <table width="100%">
                      <tr>
                        <td rowspan="2" style="text-align:center;padding:10px;">
							<img style="float:left; "  src="https://www.jouple.com/wp-content/themes/jouple/assets/images/logo.png" /> 
							
							<span style="color:white;float:right;font-size: 13px;font-style: italic;margin-top: 20px; padding:10px; font-size: 14px; font-weight:normal;">
							<span></span></span></td>
                      </tr>
                    </table>
                  </div>
                </td>
                <td></td>
              </tr>
            </table>
            <table style="padding: 10px;font-size:14px; width:100%;">
              <tr>
                <td style="padding:10px;font-size:14px; width:100%;">
                    <p>Dear Admin,</p>
                    <p><br />An inquiry has been recieved from Jouple</p>
                    <p>Below are the details</p>                    
                    <p> </p>
                    <p><strong>Applicant Name:</strong>&nbsp; '.$name.'</p>
                    <p><strong>Applicant Email:</strong>&nbsp; '.$email.'</p>
                    <p><strong>Applicant Phone:</strong>&nbsp; '.$phone.'</p>                
                    <p><br></p>
                    <p><strong>Message:</strong>&nbsp; Attach with this email is applicant resume, please find attachment.</p>                                       
                  <!-- /Callout Panel -->
                  <!-- FOOTER -->
                 </td>
              </tr>
			  <tr>
			      <td>
				 <div align="center" style="font-size:12px; margin-top:20px; padding:5px; width:100%; background:#eee;">
                    © 2017 <a href="http://jouple.com" target="_blank" style="color:#333; text-decoration: none;">jouple.com</a>
                  		 </div>
                		</td>
			  </tr>
            </table>
          </div>
          </body>
          </html>';
    
    $file_tmp_name    = $_FILES['applicant_resume']['tmp_name'];
    $file_name        = $_FILES['applicant_resume']['name'];
    $file_size        = $_FILES['applicant_resume']['size'];
    $file_type        = $_FILES['applicant_resume']['type'];
    $file_error       = $_FILES['applicant_resume']['error'];

    if($file_error > 0)
    {
        die('Upload error or No files uploaded');
    }
    $handle = fopen($file_tmp_name, "r");
    $content = fread($handle, $file_size);
    fclose($handle);
    $encoded_content = chunk_split(base64_encode($content));

    $boundary = md5("jouple");
        //header
        $headers = "MIME-Version: 1.0\r\n"; 
        $headers .= "From:".$from_email."\r\n"; 
        $headers .= "Reply-To: ".$reply_to_email."" . "\r\n";
        $headers .= "Content-Type: multipart/mixed; boundary = $boundary\r\n\r\n"; 
        
        //plain text 
        $body = "--$boundary\r\n";
        $body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
        $body .= "Content-Transfer-Encoding: base64\r\n\r\n"; 
        $body .= chunk_split(base64_encode($message)); 

        $body .= "--$boundary\r\n";
        $body .="Content-Type: $file_type; name=".$file_name."\r\n";
        $body .="Content-Disposition: attachment; filename=".$file_name."\r\n";
        $body .="Content-Transfer-Encoding: base64\r\n";
        $body .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n"; 
        $body .= $encoded_content; 
        $sentMail = @mail($recipient_email, $subject, $body, $headers);
        if($sentMail) //output success or failure messages
            {       
                die('Thank you for your email');
            }else{
                die('Could not send mail! Please check your PHP mail configuration.');  
            }

}
?>