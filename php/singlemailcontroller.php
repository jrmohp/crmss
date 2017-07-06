<?php
require("../phpmailer/class.phpmailer.php");


	$from=$_POST['from'];
	$to=$_POST['to'];
	$subject=$_POST['subject'];
	$body=$_POST['body'];


if(isset(var))

$mail = new PHPMailer();

$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->Host = "mail.smartsolar.co.in";  // specify main and backup server
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "jrm@smartsolar.co.in";  // SMTP username
$mail->Password = "sikujyoti"; // SMTP password

$mail->From =$from;
$mail->FromName = "Smart Solar";
$mail->AddAddress("$to");
                 								// name is optional
$mail->AddReplyTo("$from", "$fromname");

$mail->WordWrap = 50;                                 // set word wrap to 50 characters
   // optional name
$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = "$subject";
$mail->Body    = "$body";

if(!$mail->Send())
{
   echo "Message could not be sent. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo "Message has been sent";
?>
