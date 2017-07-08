<?php
require("../phpmailer/class.phpmailer.php");
require("../php/connect.php");
include_once("../tablestructures/sentemails");

	$from=$_POST['mfrom'];
	$to=$_POST['mto'];
	$subject=$_POST['subject'];
	$body=$_POST['body'];
	$fromname=$_POST['fromname'];

mysqli_query($conn"INSERT INTO sentemails(mfrom,mto,subject,body)
				VALUES('$from','$to','$subject','$body')");
		
		
$mail = new PHPMailer();

$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->Host = "mail.smartsolar.co.in";  // specify main and backup server
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "jrm@smartsolar.co.in";  // SMTP username
$mail->Password = "sikujyoti"; // SMTP password

$mail->From = $from;
$mail->FromName =$fromname." | Smart Solar" ;
$mail->AddAddress($to);
$mail->AddAddress($to);                  // name is optional
$mail->AddReplyTo($from, $fromname);

$mail->WordWrap = 50;                                 // set word wrap to 50 characters
   // optional name
$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = $subject;
$mail->Body    = $body;


if(mysqli_affected_rows($conn) > 0)
{
 	echo "Success";
} 
else 
{
	echo "Error: <br />";
	echo mysqli_error ($connect);
}
?>
