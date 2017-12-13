<?php

require("../php/connect.php");

$query = "SELECT * FROM user"; 

if($result=$conn->query($query))
{
   while ($row=$result->fetch_array())
    {	

    	
		echo $row['username'];
    }
}
?>