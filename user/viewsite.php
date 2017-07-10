<?php

require("../php/connect.php");


$query ="SELECT property FROM siteid WHERE siteid='SITE0001'"; 


if($result=mysqli_query($conn,$sql))
{
	 while ($row=mysqli_fetch_row($result))
    {
   			
   		printf ("%s (%s)\n",$row[0],$row[1]);
    }

}

?>