<?php

  if (isset($_POST['to']) && isset($_POST['message']))  
  {	
	require_once "Mail.php";
 	require_once "Mail/mime.php";
 	$from = "Smart Solar<admin@smartsolar.co.in>";
  	$to = $_POST['to'];
  	$subject = $_POST['subject'];
  	$message = $_POST['message'];
  	$mime = new Mail_mime();
	$mime->setHTMLBody($message);
	$body = $mime->get();
  	$headers="From:$from"."\r\n"."CC:iterjrm@gmail.com"."BCC:codingjrm@gmail.com"."Subject:$subject";
  	$headers = $mime->headers($headers);
  	$host="ssl://mail.smartsolar.co.in";
  	$port="8465";
  	$username="jrm@smartsolar.co.in";
  	$password="sikujyoti";
  	$smtp = Mail::factory('smtp',array ('host" => $host,'port' => $port,'auth' => true,'username' => $username,'password' => $password));
  	$mail = $smtp->send($to,$headers,$body);
 	
  	if(PEAR::isError($mail))
  	{
		    echo "Not done";
 	}
  	else  
  	{
	  	echo "Email Sent Successfully";
  	}
  }
?>

 