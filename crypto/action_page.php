<?php
require("class.phpmailer.php");

$mail = new PHPMailer();

$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->Host = "mail.smartsolar.co.in";  // specify main and backup server
$mail->port= 465;

$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "jrm@smartsolar.co.in";  // SMTP username
$mail->Password = "sikujyoti"; // SMTP password

$mail->From = "from@smartsolar.co.in";
$mail->FromName = "Mailer";

$mail->to = strip_tags($_POST['to']);
//$mail->AddAddress("jrmkvk@gmail.com");                  // name is optional

$mail->AddReplyTo("info@smartsolar.co.in", "Information");

$mail->WordWrap = 50;                                 // set word wrap to 50 characters
   // optional name
$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = strip_tags($_POST['subject']);
$mail->Body = strip_tags($_POST['message']);

if(!$mail->Send())
{
   echo "Message could not be sent. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo "Message has been sent";
?>
