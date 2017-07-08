<?php
	require("connect.php");
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$address=$_POST['address'];
	$city=$_POST['city'];
	$type=$_POST['type'];
	$units=$_POST['units'];
	$monthlybill=$_POST['monthlybill'];
	$contractload=$_POST['contractload'];
	$roofarea=$_POST['roofarea'];
	$phase=$_POST['phase'];


	$sql= "INSERT INTO user(username,type,firstname,lastname,email,mobile,peraddress,city,mbill,load,rarea,phase) VALUES ('0','$gender','$firstname','$lastname','$email','$phone','$address','$city','$monthlybill','$contractload','$roofarea','$phase')";


	echo $sql;

	if($conn->query($sql))
	{
		echo 1;
	}

	?>