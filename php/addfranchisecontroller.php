<?php 
require("connect.php");

	if(!empty($_POST['lfname']) && !empty($_POST['lmname']) && !empty($_POST['llname']) && !empty($_POST['ofname']) && !empty($_POST['omname']) && !empty($_POST['olname']) && !empty($_POST['oid']) && !empty($_POST['panno']) && !empty($_POST['email']) && !empty($_POST['contact']) && !empty($_POST['GST']) && !empty($_POST['address']))
	{
		$lfname = mysqli_real_escape_string($_POST['lfname']);
		$lmname = mysqli_real_escape_string($_POST['lmname']);
		$llname = mysqli_real_escape_string($_POST['llname']);
		$ofname = mysqli_real_escape_string($_POST['ofname']);
		$omname = mysqli_real_escape_string($_POST['omname']);
		$olname = mysqli_real_escape_string($_POST['olname']);
		$orderid= mysqli_real_escape_string($_POST['orderid']);
		$panno 	= mysqli_real_escape_string($_POST['panno']);
		$email 	= mysqli_real_escape_string($_POST['email']);
		$contact= mysqli_real_escape_string($_POST['contact']);
		$GST 	= mysqli_real_escape_string($_POST['GST']);
		$address= mysqli_real_escape_string($_POST['address']);
	

		$query = "INSERT INTO franchise(lfirstname,lmiddlename,llastname,ofirstname,omiddlename,olastname,orderid,panno,email,contact,GST,address) values('$lfname','$lmname','$llname','$ofname','$omname','$olname','$orderid','$panno','$email','$contact','$GST','$address')";                        	
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
		if(empty($_POST['orderid']))
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
		if(empty($_POST['GST']))
		{
			echo "GST Cannot Be Empty<br>";
		}
		if(empty($_POST['address']))
		{
			echo "Address Cannot Be Empty<br>";
		}	
		exit;	
	}

if($conn->query($query))
	{
		echo 1;
	}
else
	{
  		echo mysqli_error($conn);
	}

?>