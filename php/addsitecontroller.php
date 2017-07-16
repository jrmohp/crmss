<?php

require("connect.php");

	$siteid=mysqli_real_escape_string($conn, $_POST['siteid']);
	$property=mysqli_real_escape_string($conn, $_POST['prop']);

	$sql="INSERT INTO siteprop(siteid,property) VALUES ('$siteid','$property')";


	if($conn->query($sql))
	{
		echo "1";

	}
	else
	{
	 
 	 echo "0";

	}




	



?>