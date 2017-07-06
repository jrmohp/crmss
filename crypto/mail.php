<?php

  	$from = "Smart Solar<admin@smartsolar.co.in>";
  	$to = "jrmkvk@gmail.com";
  	$subject = "haire";
  	$message ="Hello";
  	
  	$headers="From:$from"."\r\n"."CC:iterjrm@gmail.com"."BCC:codingjrm@gmail.com"."Subject:$subject";
  

    if(mail($to, $subject, $message,$headers))
    {
      echo "successfull";
    }
  else
  {
    echo "hauni";    
  }


?>
