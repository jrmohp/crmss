<?php

require("../php/connect.php");


$query ="SELECT property FROM siteid WHERE id='SITE0001'"; 

/*$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result,MYSQLI_NUM);
echo "hauchire";
echo $row[0];*/


$result=$conn->mysqli_query($query);

echo "$result";

?>