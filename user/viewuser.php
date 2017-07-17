<?php


  include "header.php";
?>
<!DOCTYPE html>
<html>
<head>
  <title>View User | Smart Solar  </title>
</head>
<body>
 	<div class="row" id="body2">
            <div class="col-md-12 col-sm-12 col-xs-12">
                    
            	<table width="100%"  class="table table-striped table-bordered info-table">
             		<tr align="center">
             		<thead>
			            <th>User Name</th>
			            <th>Type</th>
			            <th>First Name</th>
			            <th>Last Name</th>
			            <th>Email</th>
			            <th>Mobile</th>
			            <th>Per Address</th>
                		<th>City</th>
			            <th>Mbill</th>
			            <th>Cload</th>
			            <th>Rarea</th>
			            <th>Phase</th>
			            <th>Reffered By</th>
			            <th>Remarks</th>
			            <th>Request</th>
			        </thead>
			        </tr>
<?php

require("../php/connect.php");

$query = "SELECT * FROM user"; 

if($result=mysqli_query($conn,$query))
{
   while ($val=mysqli_fetch_row($result))
    {	
		
		  echo "<tr align='center'>";
	      echo "<th>".$val['username']."</th>";
	      echo "<th>".$val['type']."</th>";
	      echo "<th>".$val['firstname']."</th>";
	      echo "<th>".$val['lastname']."</th>";
	      echo "<th>".$val['email']."</th>";
	      echo "<th>".$val['mobile']."</th>";
	      echo "<th>".$val['peraddress']."</th>";
	      echo "<th>".$val['city']."</th>";
		  echo "<th>".$val['mbill']."</th>";
	      echo "<th>".$val['cload']."</th>";
	      echo "<th>".$val['rarea']."</th>";
	      echo "<th>".$val['phase']."</th>";
	      echo "<th>".$val['referredby']."</th>";
	      echo "<th>".$val['remarks']."</th>";
	      echo "<th>".$val['req']."</th>";
	      echo "</tr>";

    	  
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