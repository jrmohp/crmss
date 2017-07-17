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
			            <td><big><b>User Name</b></big></td>
			            <td><big><b>Type</b></big></td>
			            <td><big><b>First Name</b></big></td>
			            <td><big><b>Last Name</b></big></td>
			            <td><big><b>Email</b></big></td>
			            <td><big><b>Mobile</b></big></td>
			            <td><big><b>Per Address</b></big></td>
                		<td><big><b>City</b></big></td>
			            <td><big><b>Mbill</b></big></td>
			            <td><big><b>Cload</b></big></td>
			            <td><big><b>Rarea</b></big></td>
			            <td><big><b>Phase</b></big></td>
			            <td><big><b>Reffered By</b></big></td>
			            <td><big><b>Remarks</b></big></td>
			            <td><big><b>Request</b></big></td>
			        </tr>
<?php

require("../php/connect.php");

$query = "SELECT * FROM user"; 

if($result=mysqli_query($conn,$query))
{
   while ($row=mysqli_fetch_row($result))
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