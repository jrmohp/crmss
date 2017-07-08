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




	$query = $conn->query("SELECT MAX(id) FROM user"); // execute
	$max_id = $query->fetch_array(); // fetch
		$newid=$max_id[0]+1;
		$ssid = 'SS' . sprintf ( "%04d" , $new_id ) ;


	$sql= "INSERT INTO user(username,type,firstname,lastname,email,mobile,peraddress,city,mbill,cload,rarea,phase) VALUES ('$ssid','$gender','$firstname','$lastname','$email','$phone','$address','$city','$monthlybill','$contractload','$roofarea','$phase')";



	if($conn->query($sql))
	{
		echo $ssid;
	}
	else 
	{
		echo 0;
	}

	?>