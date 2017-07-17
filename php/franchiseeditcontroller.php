<?php 

$editid=$_GET['id'];
require("connect.php");

	if( !empty($_POST['lfname']) && !empty($_POST['lmname']) && !empty($_POST['llname']) && !empty($_POST['ofname']) && !empty($_POST['omname']) && !empty($_POST['olname']) && !empty($_POST['ownerid']) && !empty($_POST['panno']) && !empty($_POST['email']) && !empty($_POST['contact']) && !empty($_POST['gst']) && !empty($_POST['address']) && !empty($_POST['username']) && !empty($_POST['accountid']) && !empty($_POST['password']))
	{
		$lfname = mysqli_real_escape_string($conn, $_POST['lfname']);
		$lmname = mysqli_real_escape_string($conn, $_POST['lmname']);
		$llname = mysqli_real_escape_string($conn, $_POST['llname']);
		$ofname = mysqli_real_escape_string($conn, $_POST['ofname']);
		$omname = mysqli_real_escape_string($conn, $_POST['omname']);
		$olname = mysqli_real_escape_string($conn, $_POST['olname']);
		$ownerid= mysqli_real_escape_string($conn, $_POST['ownerid']);
		$panno 	= mysqli_real_escape_string($conn, $_POST['panno']);
		$email 	= mysqli_real_escape_string($conn, $_POST['email']);
		$contact= mysqli_real_escape_string($conn, $_POST['contact']);
		$GST 	= mysqli_real_escape_string($conn, $_POST['gst']);
		$address= mysqli_real_escape_string($conn, $_POST['address']);
		$username= mysqli_real_escape_string($conn, $_POST['username']);
		$accountid= mysqli_real_escape_string($conn, $_POST['accountid']);
		$password= mysqli_real_escape_string($conn, $_POST['password']);

		$query = "UPDATE franchise SET lfirstname='$lfname',lmiddlename='$lmname',llastname='$llname',ofirstname='$ofname',omiddlename='$omname',olastname='$olname',ownerid='$ownerid',panno='$panno',email='$email',contact='$contact',gst='$GST',address='$address',username='$username',accountid='$accountid',password='$password' WHERE ID='$editid' ";
		if($conn->query($sql))
		{
			echo "Customer Data Edited Succesfully";
		}
		else 
		{
			echo "Sorry,Something went wrong!";;
		}

                        	
	}
	else
	{
		if(empty($_POST['lfname']))
		{
			echo "Legal First Name Cannot Be Empty<br>";
		}
		if(empty($_POST['lmname']))
		{
			echo "Legal Middle Name Cannot Be Empty<br>";
		}
		if(empty($_POST['llname']))
		{
			echo "Legal Last Name Cannot Be Empty<br>";
		}
		if(empty($_POST['ofname']))
		{
			echo "Owner First Name Cannot Be Empty<br>";
		}
		if(empty($_POST['omname']))
		{
			echo "Owner Middle Name Cannot Be Empty<br>";
		}
		if(empty($_POST['olname']))
		{
			echo "Owner Last Name Cannot Be Empty<br>";
		}
		if(empty($_POST['ownerid']))
		{
			echo "Owner ID Cannot Be Empty<br>";
		}
		if(empty($_POST['panno']))
		{
			echo "Pan No. Cannot Be Empty<br>";
		}
		if(empty($_POST['email']))
		{
			echo "Email Id Cannot Be Empty<br>";
		}
		if(empty($_POST['contact']))
		{
			echo "Contact No. Cannot Be Empty<br>";
		}
		if(empty($_POST['gst']))
		{
			echo "GST Cannot Be Empty<br>";
		}
		if(empty($_POST['address']))
		{
			echo "Address Cannot Be Empty<br>";
		}	
		if(empty($_POST['username']))
		{
			echo "Username Cannot Be Empty<br>";
		}
		if(empty($_POST['accountid']))
		{
			echo "Account ID Cannot Be Empty<br>";
		}
		if(empty($_POST['password']))
		{
			echo "Password Cannot Be Empty<br>";
		}
		exit;	
	}
?>