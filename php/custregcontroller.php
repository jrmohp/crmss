<?php

	require("connect.php");
	
	if(!empty($_POST['firstname']) && !empty($_POST['lastname'])&& !empty($_POST['email']) && !empty($_POST['phone'])&& !empty($_POST['city'])&& !empty($_POST['type']))	
	{
	$firstname=mysqli_real_escape_string($conn, $_POST['firstname']);
	$lastname=mysqli_real_escape_string($conn, $_POST['lastname']);
	$email=mysqli_real_escape_string($conn, $_POST['email']);
	$phone=mysqli_real_escape_string($conn, $_POST['phone']);
	$address=mysqli_real_escape_string($conn, $_POST['address']);
	$city=mysqli_real_escape_string($conn, $_POST['city']);
	$type=mysqli_real_escape_string($conn, $_POST['type']);
	$units=mysqli_real_escape_string($conn, $_POST['units']);
	$monthlybill=mysqli_real_escape_string($conn, $_POST['monthlybill']);
	$contractload=mysqli_real_escape_string($conn, $_POST['contractload']);
	$roofarea=mysqli_real_escape_string($conn, $_POST['roofarea']);
	$phase=mysqli_real_escape_string($conn, $_POST['phase']);

	$query = $conn->query("SELECT MAX(id) FROM user"); // execute
	$max_id = $query->fetch_array(); // fetch
		$tid=$max_id[0];
		$new_id=$tid+1;
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


	}

	else
	{
		if(empty($_POST['firstname']))
			{
				echo "First Name Cannot Be Empty<br>";
			}

		if(empty($_POST['lastname']))
			{
				echo "Last Name Cannot Be Empty<br>";
			}
		if(empty($_POST['email']))
			{
				echo "Email Cannot Be Empty<br>";
			}
		if(empty($_POST['phone']))
			{
				echo "Phone No. Cannot Be Empty<br>";
			}
		if(empty($_POST['city']))
			{
				echo "Choose Any City Name or Others If City Not Found In The List.<br>";
			}
		if(empty($_POST['type']))
			{
				echo "Usage Type Cannot Be Empty<br>";
			}
			exit;
	}
	
	?>