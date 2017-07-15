<?php


  include "header.php";
?>
<!DOCTYPE html>
<html>
<head>
  <title>Add Faculty | Smart Solar  </title>
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
		foreach ($row as $val) 
		{ 
		  echo "<tr align='center'>";
	      echo "<td>".$val['username']."</td>";
	      echo "<td>".$val['type']."</td>";
	      echo "<td>".$val['firstname']."</td>";
	      echo "<td>".$val['lastname']."</td>";
	      echo "<td>".$val['email']."</td>";
	      echo "<td>".$val['mobile']."</td>";
	      echo "<td>".$val['peraddress']."</td>";
	      echo "<td>".$val['city']."</td>";
		  echo "<td>".$val['mbill']."</td>";
	      echo "<td>".$val['cload']."</td>";
	      echo "<td>".$val['rarea']."</td>";
	      echo "<td>".$val['phase']."</td>";
	      echo "<td>".$val['referredby']."</td>";
	      echo "<td>".$val['remarks']."</td>";
	      echo "<td>".$val['req']."</td>";
	      echo "</tr>";

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