<?php
require("../phpmailer/class.phpmailer.php");
require("connect.php");


	$from=mysqli_real_escape_string($conn, $_POST['mfrom']);
	$to=mysqli_real_escape_string($conn, $_POST['mto']);
	$subject=mysqli_real_escape_string($conn, $_POST['subject']);
	$body=mysqli_real_escape_string($conn, $_POST['body']);
	$fromname=mysqli_real_escape_string($conn, $_POST['fromname']);

$sql="INSERT INTO sentmails (mfrom,mto,subject,body) VALUES ('$from','$to','$subject','$body')";


		
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


if(!$mail->Send()  )
{
  
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

if($conn->query($sql))
{
		echo 1;

}
else
{
	 echo "Contact 7978555567";

}


	


?>
