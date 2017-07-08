<?php
require("../phpmailer/class.phpmailer.php");
require("../php/connect.php");


	$from=$_POST['mfrom'];
	$to=$_POST['mto'];
	$subject=$_POST['subject'];
	$body=$_POST['body'];
	$fromname=$_POST['fromname'];


		
		
$mail = new PHPMailer();

$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->Host = "mail.smartsolar.co.in";  // specify main and backup server
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "jrm@smartsolar.co.in";  // SMTP username
$mail->Password = "sikujyoti"; // SMTP password

$mail->From = $from;
$mail->FromName =$fromname ;
$mail->AddAddress($to);
$mail->AddAddress($to);                  // name is optional
$mail->AddReplyTo("info@smartsolar.co.in", "Information");

$mail->WordWrap = 50;                                 // set word wrap to 50 characters
   // optional name
$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = "Here is the subject";
$mail->Body    = "This is the HTML message body <b>in bold!</b>";
$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

if(!$mail->Send())
{
   echo "Message could not be sent. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo "Message has been sent";
?>
