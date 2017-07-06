<?php
	echo "working";
  if (isset($_POST['to']) && isset($_POST['message']))  
  {	
	
 	$from = "Smart Solar<admin@smartsolar.co.in>";
  	$to = $_POST['to'];
  	$subject = $_POST['subject'];
  	$message = $_POST['message'];
  	
  	$headers="From:$from"."\r\n"."CC:iterjrm@gmail.com"."BCC:codingjrm@gmail.com"."Subject:$subject";
  

    if(mail($to, $subject, $message,$headers))
    {
      echo "successfull";
    }
?>

 
