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

<<<<<<< HEAD
	require("connect.php");

	$dbselect=mysqli_select_db($conn,"");
	if(!$dbselect)
	{
		die("Database Not Found");
	}
	$sql="insert into table values('$firstname','$lastname','$email','$phone','$address','$city','$gender','$units','$monthlybill','$contractload','$roofarea')";

	$status=mysqli_query($conn,$sql);
?>
=======



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

	?>
>>>>>>> 889b50bdb9768f517e88918ca217c6773a07480b
