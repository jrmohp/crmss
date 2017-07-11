<?php

require("connect.php");

	$siteid=$_POST['siteid'];
	$sitename=$_POST['sitename'];
	$supervisor=$_POST['supervisor'];

	$sql="INSERT INTO siteinfo(siteid,sitename,supervisor) VALUES ('$siteid','$sitename','$supervisor')";


	if($conn->query($sql))
	{
		echo 1;

	}
	else
	{
	 
 	 echo 0;

	}




	



?>