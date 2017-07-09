<?php
require("connect.php");

if(isset($_POST['fname']) && isset($_POST['lname'])&& isset($_POST['fn']) && isset($_POST['mn']) && isset($_POST['gender'])&& isset($_POST['dob'])&& isset($_POST['bg'])&& isset($_POST['pa'])&& isset($_POST['ta'])&& isset($_POST['acard'])&& isset($_POST['accno'])&& isset($_POST['ifsc'])&& isset($_POST['cno'])&& isset($_POST['email'])&& isset($_POST['wphno'])&& isset($_POST['wemail'])&& isset($_POST['username'])&& isset($_POST['password']) && isset($_POST['empid']))	
{
	$fname=$_POST['fname'];
	$mname=$_POST['mname'];
	$lname=$_POST['lname'];
	$fn=$_POST['fn'];
	$mn=$_POST['mn'];
	$gender=$_POST['gender'];
	$dob=$_POST['dob'];
	$bg=$_POST['bg'];
	$im=$_POST['im'];
	$pa=$_POST['pa'];
	$ta=$_POST['ta'];
	$acard=$_POST['acard'];
	$pcard=$_POST['pcard'];
	$epf=$_POST['epf'];
	$exp=$_POST['exp'];
	$accno=$_POST['accno'];
	$ifsc=$_POST['ifsc'];
	$cno=$_POST['cno'];
	$altcno=$_POST['altcno'];
	$email=$_POST['email'];
	$altemail=$_POST['altemail'];
	$wphno=$_POST['wphno'];
	$wemail=$_POST['wemail'];
	$empid=$_POST['empid'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	

$sql="INSERT INTO addemployee(empid,username,password,fname,mname,lname,fn,mn,gender,dob,bg,im,pa,ta,acard,pcard,epf,exp,accno,ifsc,cno,altcno,email,altemail,wphno,wemail) VALUES ('$empid','$username','$password','$fname','$mname','$lname','$fn','$mn','$gender','$dob','$bg','$im','$pa','$ta','$acard','$pcard','$epf','$exp','$accno','$ifsc','$cno','$altcno','$email','$altemail','$wphno','$wemail')";

}
else
{
	if(!isset($_POST['fname']))
		{
			echo "First Name Cannot Be Empty<br>";
		}

	if(!isset($_POST['lname']))
		{
			echo "Last Name Cannot Be Empty<br>";
		}
	if(!isset($_POST['fn']))
		{
			echo "Father's Name Cannot Be Empty<br>";
		}
	if(!isset($_POST['mn']))
		{
			echo "Mother's Name Cannot Be Empty<br>";
		}
	if(!isset($_POST['gender']))
		{
			echo "Gender Cannot Be Empty<br>";
		}
	if(!isset($_POST['dob']))
		{
			echo "Date Of Birth Cannot Be Empty<br>";
		}
	if(!isset($_POST['bg']))
		{
			echo "Blood Group Cannot Be Empty<br>";
		}

	if(!isset($_POST['pa']))
		{
			echo "Permanent Address Cannot Be Empty<br>";
		}
	if(!isset($_POST['ta']))
		{
			echo "Temporary Address Cannot Be Empty<br>";
		}

	if(!isset(_POST['acard']))
		{
			echo "Adhar Card Number Cannot Be Empty<br>";
		}
	if(!isset($_POST['accno']))
		{
			echo "Bank Account Number Cannot Be Empty<br>";
		}

	if(!isset($_POST['ifsc']))
		{
			echo "Bank IFSC Code Cannot Be Empty<br>";
		}
	if(!isset($_POST['cno']))
		{
			echo "Contatct Number Cannot Be Empty";
		}
	if(!isset($_POST['email']))
		{
			echo "Email Id Cannot Be Empty";
		}
	if(!isset($_POST['wphno']))
		{
			echo "Work Phone No. Cannot Be Empty";
		}
	if(!isset($_POST['wemail']))
		{
			echo "Work Email Cannot Be Empty";
		}
	if(!isset($_POST['empid']))
		{
			echo "Employee Id Cannot Be Empty";
		}
	if(!isset($_POST['username']))
		{
			echo "Username Cannot Be Empty";
		}
	if(!isset($_POST['password']))
		{
			echo "Password Cannot Be Empty";
		}

	exit ;
}

if($conn->query($sql))
{
		echo 1;

}
else
{
	 
  echo mysqli_error($conn);

}


	


?>
