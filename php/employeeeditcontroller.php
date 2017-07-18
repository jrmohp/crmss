<?php
require("connect.php"); 

if(!empty($_POST['fname']) && !empty($_POST['lname'])&& !empty($_POST['fn']) && !empty($_POST['mn']) && !empty($_POST['gender'])&& !empty($_POST['dob'])&& !empty($_POST['bg'])&& !empty($_POST['pa'])&& !empty($_POST['ta'])&& !empty($_POST['acard'])&& !empty($_POST['accno'])&& !empty($_POST['ifsc'])&& !empty($_POST['cno'])&& !empty($_POST['email'])&& !empty($_POST['wphno'])&& !empty($_POST['wemail'])&& !empty($_POST['username'])&& !empty($_POST['password']) && !empty($_POST['empid']))	
	{
		
	$fname=mysqli_real_escape_string($conn, $_POST['fname']);
	$mname=mysqli_real_escape_string($conn, $_POST['mname']);
	$lname=mysqli_real_escape_string($conn, $_POST['lname']);
	$fn=mysqli_real_escape_string($conn, $_POST['fn']);
	$mn=mysqli_real_escape_string($conn, $_POST['mn']);
	$gender=mysqli_real_escape_string($conn, $_POST['gender']);
	$dob=mysqli_real_escape_string($conn, $_POST['dob']);
	$bg=mysqli_real_escape_string($conn, $_POST['bg']);
	$im=mysqli_real_escape_string($conn, $_POST['im']);
	$pa=mysqli_real_escape_string($conn, $_POST['pa']);
	$ta=mysqli_real_escape_string($conn, $_POST['ta']);
	$acard=mysqli_real_escape_string($conn, $_POST['acard']);
	$pcard=mysqli_real_escape_string($conn, $_POST['pcard']);
	$epf=mysqli_real_escape_string($conn, $_POST['epf']);
	$exp=mysqli_real_escape_string($conn, $_POST['exp']);
	$accno=mysqli_real_escape_string($conn, $_POST['accno']);
	$ifsc=mysqli_real_escape_string($conn, $_POST['ifsc']);
	$cno=mysqli_real_escape_string($conn, $_POST['cno']);
	$altcno=mysqli_real_escape_string($conn, $_POST['altcno']);
	$email=mysqli_real_escape_string($conn, $_POST['email']);
	$altemail=mysqli_real_escape_string($conn, $_POST['altemail']);
	$wphno=mysqli_real_escape_string($conn, $_POST['wphno']);
	$wemail=mysqli_real_escape_string($conn, $_POST['wemail']);
	$empid=mysqli_real_escape_string($conn, $_POST['empid']);
	$username=mysqli_real_escape_string($conn, $_POST['username']);
	$password=mysqli_real_escape_string($conn, $_POST['password']);
	$editid=mysqli_real_escape_string($conn, $_POST['editid']);
	echo $editid;
/*$sql="UPDATE addemployee SET fname='$fname',mname='$mname',lname='$lname',fn='$fn',mn='$mn',gender='$gender',dob='$dob',bg='$bg',im='$im',pa='$pa',ta='$ta',acard='$acard',pcard='$pcard',epf='$epf',exp='$exp',accno='$accno',ifsc='$ifsc',cno='$cno',altcno='$altcno',email='$email',altemail='$altemail',wphone='$wphone',wemail='$wemail',empid='$empid',username='$username',pass='$password' WHERE id=$editid ";
	
	if($conn->query($sql))
	{
		echo "Customer Data Edited Succesfully";
	}
	else 
	{
		echo 0;
	}
*/
}
else
{
	if(empty($_POST['fname']))
		{
			echo "First Name Cannot Be Empty<br>";
		}

	if(empty($_POST['lname']))
		{
			echo "Last Name Cannot Be Empty<br>";
		}
	if(empty($_POST['fn']))
		{
			echo "Father's Name Cannot Be Empty<br>";
		}
	if(empty($_POST['mn']))
		{
			echo "Mother's Name Cannot Be Empty<br>";
		}
	if(empty($_POST['gender']))
		{
			echo "Gender Cannot Be Empty<br>";
		}
	if(empty($_POST['dob']))
		{
			echo "Date Of Birth Cannot Be Empty<br>";
		}
	if(empty($_POST['bg']))
		{
			echo "Blood Group Cannot Be Empty<br>";
		}

	if(empty($_POST['pa']))
		{
			echo "Permanent Address Cannot Be Empty<br>";
		}
	if(empty($_POST['ta']))
		{
			echo "Temporary Address Cannot Be Empty<br>";
		}

	if(empty($_POST['acard']))
		{
			echo "Adhar Card Number Cannot Be Empty<br>";
		}
	if(empty($_POST['accno']))
		{
			echo "Bank Account Number Cannot Be Empty<br>";
		}

	if(empty($_POST['ifsc']))
		{
			echo "Bank IFSC Code Cannot Be Empty<br>";
		}
	if(empty($_POST['cno']))
		{
			echo "Contatct Number Cannot Be Empty<br>";
		}
	if(empty($_POST['email']))
		{
			echo "Email Id Cannot Be Empty<br>";
		}
	if(empty($_POST['wphno']))
		{
			echo "Work Phone No. Cannot Be Empty<br>";
		}
	if(empty($_POST['wemail']))
		{
			echo "Work Email Cannot Be Empty<br>";
		}
	if(empty($_POST['empid']))
		{
			echo "Employee Id Cannot Be Empty<br>";
		}
	if(empty($_POST['username']))
		{
			echo "Username Cannot Be Empty<br>";
		}
	if(empty($_POST['password']))
		{
			echo "Password Cannot Be Empty<br>";
		}

	exit ;
}



	


?>
