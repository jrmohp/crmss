<?php 
	if(!empty($_POST['lfname']) && !empty($_POST['lmname']) && !empty($_POST['llname']) && !empty($_POST['ofname']) && !empty($_POST['omname']) && !empty($_POST['olname']) && !empty($_POST['oid']) && !empty($_POST['panno']) && !empty($_POST['email']) && !empty($_POST['contact']) && !empty($_POST['GST']) && !empty($_POST['address']))
	{
		$lfname = mysqli_real_escape_string($_POST['lfname']);
		$lmname = mysqli_real_escape_string($_POST['lmname']);
		$llname = mysqli_real_escape_string($_POST['llname']);
		$ofname = mysqli_real_escape_string($_POST['ofname']);
		$omname = mysqli_real_escape_string($_POST['omname']);
		$olname = mysqli_real_escape_string($_POST['olname']);
		$oid 	= mysqli_real_escape_string($_POST['oid']);
		$panno 	= mysqli_real_escape_string($_POST['panno']);
		$email 	= mysqli_real_escape_string($_POST['email']);
		$contact= mysqli_real_escape_string($_POST['contact']);
		$GST 	= mysqli_real_escape_string($_POST['GST']);
		$address= mysqli_real_escape_string($_POST['address']);
	}
?>