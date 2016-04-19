<?php
 require_once('recaptchalib.php');
  $privatekey = "6Le1acYSAAAAAMdXIrKLOVIZdlmhVtMJEQkra52n";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    die ("The reCAPTCHA wasn't entered correctly. Go back and try it again.");
  } else {
    // Your code here to handle a successful verification
  }
require_once "Mail.php";
 
$from = "Rainman Forms <noreply@rainman.com>";
$to = $_POST["toEmail"];
//$subject = "Rainman Form Request\r\n\r\n";
	if ($_POST["mailSubject"]=="") $subject="Rainman Form Request\r\n\r\n";
	else $subject=$_POST["mailSubject"];
							$time = time ();
							$timestamp = date("g:i A, m/d/y",$time) . "<br>"; 					
							$body = "";														
							$body = $body . "<font face=verdana style='font-size:11px;'>";
							$body = $body . "<b>Submitted:</b> ";
							$body = $body . $timestamp;
							$body = $body . "<br><br>";
							$body = $body . "<b>Website:</b> ";
							$body = $body . $businessName;
							$body = $body . "<br><br>";
							
							$body = $body . "<TABLE style='font-size:11px;font-family:verdana'>";

							foreach( $_POST as $key => $value){
								switch ($key) {
									case "submit":
									case "mailSubject":
									case "toEmail":
									case "requestType":
										break;
									default:
										switch ($value) {
											case "spacer":
												$body = $body . "<TR><TD colspan='2' align='center'><strong>" . $key . "</strong></TD></TR>";
												break;
											default:
												$body = $body . "<TR><TD ALIGN='RIGHT' style='padding:5px;'><strong>" . $key . "</strong>  :</TD><TD>". $value ."</TD></TR>";
										}
								}
							}
							
							$body = $body . "</TABLE>"; 
 
$host = "mail.emailsrvr.com";
$username = "noreply@rainman.com";
$password = "bevo1990";


// To send HTML mail, the Content-type header must be set
//http://stackoverflow.com/questions/7814910/how-to-send-an-html-email-using-smtp-in-php?rq=1
$headers = array ('MIME-Version' => '1.0',
        'Content-Type' => "text/html; charset=ISO-8859-1",
        'From' => $from,
        'To' => $to,
        'Subject' => $subject
     );

  
  
$smtp = Mail::factory('smtp',
  array ('host' => $host,
    'auth' => true,
    'username' => $username,
    'password' => $password));
 
$mail = $smtp->send($to, $headers, $body);
 
if (PEAR::isError($mail)) {
  echo("<p>" . $mail->getMessage() . "</p>");
} else {
  echo("<p>Message successfully sent!</p>");
}
?>