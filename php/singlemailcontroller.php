<?php
require("../phpmailer/class.phpmailer.php");
require("../php/connect.php");


	$from=$_POST['mfrom'];
	$to=$_POST['mto'];
	$subject=$_POST['subject'];
	$body=$_POST['body'];

	echo ""from ".$from."\nto ".$to."\nsubject ". $subject."\nbody ". $body";

?>
