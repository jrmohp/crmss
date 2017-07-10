<?php

require("../php/connect.php");


$sql ="SELECT property FROM siteid WHERE id='SITE0001'"; 

/*$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result,MYSQLI_NUM);
echo "hauchire";
echo $row[0];*/

if($conn->mysqli_query($sql))

{
	echo "hela";
}
else
{
	echo mysqli_error($conn);
}
?>