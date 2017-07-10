<?php
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$address=$_POST['address'];
	$city=$_POST['city'];
	$gender=$_POST['gender'];
	$units=$_POST['units'];
	$monthlybill=$_POST['monthlybill'];
	$contractload=$_POST['contractload'];
	$roofarea=$_POST['roofarea'];

	require("connect.php");

	$dbselect=mysqli_select_db($conn,"");
	if(!$dbselect)
	{
		die("Database Not Found");
	}
	$sql="insert into table values('$firstname','$lastname','$email','$phone','$address','$city','$gender','$units','$monthlybill','$contractload','$roofarea')";

	$status=mysqli_query($conn,$sql);
?>