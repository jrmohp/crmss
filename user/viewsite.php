<?php


  include "header.php";
?>




 
<!DOCTYPE html>
<html>
<head>
  <title>Add Faculty | Mega ATV Championship  </title>
</head>
<body>

 	<div class="row" id="body2">
            <div class="col-md-12 col-sm-12 col-xs-12">


<table width="100%"  class="table table-striped table-bordered info-table">
<?php

require("../php/connect.php");


$query ="SELECT property FROM siteid WHERE siteid='SITE0001'"; 


if($result=mysqli_query($conn,$query))
{
	 while ($row=mysqli_fetch_row($result))
    {
   		
    	foreach ($row as $val) 
    	{
    		echo "<div class="col-md-6 col-sm-6 col-xs-12"  ><tr align='center'><td>$val</td>";
    		echo "<td><input type='text' id='$val' ></td></tr></div>";
    	}

    }

}

?>
</table>
</div>
                    </div>
                    </body>

	
<?php


  include "footer.php";
?>