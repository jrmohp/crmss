<?php

require("../php/connect.php");


$query ="SELECT property FROM siteid WHERE id='SITE0001'"; 

$result=mysqli_query($con,$query);
$row=mysqli_fetch_array($result,MYSQLI_NUM);

echo $row[0];

?>