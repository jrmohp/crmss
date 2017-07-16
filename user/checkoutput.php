<?php

require("../php/connect.php");

$query = "SELECT * FROM user"; 

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