<?php
require("connect.php");

if(!empty($_POST['fname']) && !empty($_POST['lname'])&& !empty($_POST['fn']) && !empty($_POST['gender'])&& !empty($_POST['dob'])&& !empty($_POST['bg'])&& !empty($_POST['pa'])&& !empty($_POST['ta'])&& !empty($_POST['cno'])&& !empty($_POST['username'])&& !empty($_POST['password']) && !empty($_POST['empid']))	
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

$sql="INSERT INTO addemployee (empid,username,password,fname,mname,lname,fn,mn,gender,dob,bg,im,pa,ta,acard,pcard,epf,exp,accno,ifsc,cno,altcno,email,altemail,wphno,wemail) VALUES ('$empid','$username','$password','$fname','$mname','$lname','$fn','$mn','$gender','$dob','$bg','$im','$pa','$ta','$acard','$pcard','$epf','$exp','$accno','$ifsc','$cno','$altcno','$email','$altemail','$wphno','$wemail')";

$query = $conn->query("SELECT MAX(id) FROM addemployee"); // execute
	$max_id = $query->fetch_array(); // fetch
		$tid=$max_id[0];
		$new_id=$tid+1;
		$ssid = 'SS' . sprintf ( "%04d" , $new_id ) ;
}


if($conn->query($sql))
{
		echo $ssid;

}
else
{
	 
  echo 0;

}


	


?>
