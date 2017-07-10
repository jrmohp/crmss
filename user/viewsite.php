<?php

require("../php/connect.php");


$sql ="SELECT property FROM siteid WHERE siteid='SITE0001'"; 

if($result=mysqli_query($conn,$sql))
{
	printf ("%s (%s)\n",$row[0],$row[1]);

}
?>