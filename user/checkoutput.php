<?php

require("../php/connect.php");

$query = "SELECT username,type,firstname,lastname,email,mobile,peraddress,city,mbill,cload,rarea,phase,referredby,remarks,req FROM user"; 

if($result=mysqli_query($conn,$query))
{
   while ($row=mysqli_fetch_assoc($result))
    {	
		foreach ($row as $val) 
		{ 
		  echo $val['username'];

    	}   
    }
}
?>