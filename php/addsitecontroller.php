<?php

require("connect.php");

	$siteid=$_POST['siteid'];
	$property=$_POST['prop'];

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