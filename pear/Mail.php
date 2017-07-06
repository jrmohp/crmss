<?php
 require_once "Mail.php";
 
 $from = "Sandra Sender <jrm@smartsolar.co.in>";
 $to = "Ramona Recipient <jrmkvk@gmail.com>";
 $subject = "Hi!";
 $body = "Hi,\n\nHow are you?";
 
 $host = "mail.smartsolar.co.in";
 $username = "jrm@smartsolar.co.in";
 $password = "sikujyoti";
 
 $headers = array ('From' => $from,
   'To' => $to,
   'Subject' => $subject);
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
