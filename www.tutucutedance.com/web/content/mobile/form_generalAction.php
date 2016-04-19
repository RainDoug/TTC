<link rel="stylesheet" type="text/css" href="scripts/jqtouch.css" />
<link rel="stylesheet" type="text/css" href="scripts/theme2.css" />
<script src="scripts/jquery-1.4.2.min.js" type="text/javascript" charset="utf-8"></script>
<script src="scripts/jqtouch.js" type="application/x-javascript" charset="utf-8"></script>
<script src="scripts/jqt.autotitles.js" type="application/x-javascript" charset="utf-8"></script>

					<div class="toolbar">
                    	<a href="#page5" class="back">back</a>
                        <h1>Form Submitted</h1>
                    </div>
                    <div class="info">
                            Thank you for your request.<br />
                            We will process your information and contact you shortly.<br />
                            If you have any questions, please <a href="http://www.rainman.com/contact.php" target="_blank">contact us</a>.
                   	</div>
<?php

//generic post form data emailer


							$time = time ();
							$timestamp = date("g:i A, m/d/y",$time) . "<br>"; 					
							$strMessage = "";
														
							$strMessage = $strMessage . "<font face=verdana style='font-size:11px;'>";
							$strMessage = $strMessage . "<b>Submitted:</b> ";
							$strMessage = $strMessage . $timestamp;
							$strMessage = $strMessage . "<br><br>";
							$strMessage = $strMessage . "<b>Website:</b> ";
							$strMessage = $strMessage . $businessName;
							$strMessage = $strMessage . "<br><br>";
							
							$strMessage = $strMessage . "<TABLE style='font-size:11px;font-family:verdana'>";

							foreach( $_POST as $key => $value){
								switch ($key) {
									case "submit":
									case "toEmail":
									case "requestType":
										break;
									default:
										switch ($value) {
											case "spacer":
												$strMessage = $strMessage . "<TR><TD colspan='2' align='center'><strong>" . $key . "</strong></TD></TR>";
												break;
											default:
												$strMessage = $strMessage . "<TR><TD ALIGN='RIGHT'><strong>" . $key . "</strong>  :</TD><TD>". $value ."</TD></TR>";
										}
								}
							}
							
							$strMessage = $strMessage . "</TABLE>";																							

							$toEmail="andrew.shepherd@rainman.com";
							//$toEmail=$_POST["toEmail"];
							
				    	
							if ($_POST["fullname"]=="") $Name="Online Customer";
							else $Name=$_POST["fullname"];
							
							
							if ($_POST["email"]=="") $Email=$toEmail;
							else $Email=$_POST["email"];
							
							
							$headers  = "From: $Name<$Email>\r\n"; 
    						$headers .= "Content-type: text/html\r\n"; 
							
							if ($_POST["mailSubject"]=="") $mailSubject="Online Request";
								else $mailSubject=$_POST["mailSubject"];							
							
							mail($toEmail, $mailSubject, $strMessage, $headers)
?>
