

<table>
<?php

require("../php/connect.php");


$query ="SELECT property FROM siteid WHERE siteid='SITE0001'"; 


if($result=mysqli_query($conn,$query))
{
	 while ($row=mysqli_fetch_row($result))
    {
   		
    	foreach ($row as $val) 
    	{
    		echo "<div class="col-md-6 col-sm-6 col-xs-12"  ><tr><td>$val</td>";
    		echo "<td><input type='text' id='$val' ></td></tr></div>";
    	}

    }

}

?>
</table>