<?php

require("../php/connect.php");

$query = "SELECT username,type,firstname,lastname,email,mobile,peraddress,city,mbill,cload,rarea,phase,referredby,remarks,req FROM user"; 

if($result=$conn->query($query))
{
   while ($row=$result->fetch_array())
    {	

    	
		echo $row['username'];
    }
}
?>