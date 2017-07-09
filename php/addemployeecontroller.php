<?php
require("connect.php");


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
	
<<<<<<< HEAD
$sql="INSERT INTO addemployee (fname,mname,lname,fn,mn,gender,dob,bg,im,pa,ta,acard,pcard,epf,exp,accno,ifsc,cno,altcno,email,altemail,wphno,wemail) VALUES ('$fname','$mname','$lname','$fn','$mn','$gender','$dob','$bg','$im','$pa','$ta','$acard','$pcard','$epf','$exp','$accno','$ifsc','$cno','$altcno','$email','$altemail','$wphno','$wemail')";
=======
$sql="INSERT INTO addemployee(fname,mname,lname,fn,mn,gender,dob,bg,im,pa,ta,acard,pcard,epf,exp,accno,ifsc,cno,altcno,email,altemail,wphno,wemail) VALUES ('$fname','$mname','$lname','$fn','$mn','$gender','$dob','$bg','$im','$pa','$ta','$acard','$pcard','$epf','$exp','$accno','$ifsc,'$cno','$altcno','$email','$altemail','$wphno','$wemail')";
>>>>>>> 14cdb1000b6d4cabf522d3b9f9b484e1f1d7a8aa


if($conn->query($sql))
{
		echo 1;

}
else
{
	 
  echo mysqli_error($conn);

}


	


?>
