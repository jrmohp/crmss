<?php

require("connect.php");

	$siteid=mysqli_real_escape_string($conn, $_POST['siteid']);
	$sitename=mysqli_real_escape_string($conn, $_POST['sitename']);
	$supervisor=mysqli_real_escape_string($conn, $_POST['supervisor']);

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