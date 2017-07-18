<?php

	require("connect.php");

	

 
	
	if(!empty($_POST['firstname']) && !empty($_POST['lastname'])&&  !empty($_POST['phone']) )	
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
	$editid=mysqli_real_escape_string($conn, $_POST['editid']);

	


	$sql="UPDATE user SET type='$gender',firstname='$firstname',lastname='$lastname',email='$email',mobile='$phone',peraddress='$address',city='$city',mbill='$monthlybill',cload='$contractload',rarea='$roofarea',phase='$phase' WHERE id=$editid ";
	
	if($conn->query($sql))
	{
		echo "Customer Data Edited Succesfully";
	}
	else 
	{
		echo "Connection error: " . mysqli_connect_error() ;
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