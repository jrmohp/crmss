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
                    <!--page content-->
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
		foreach ($row as $udata) 
		{ 
		  echo "<tr align='center'>";
	      echo "<td>".$udata['username']."</td>";
/*	      echo "<td>".$udata['type']."</td>";
	      echo "<td>".$udata['firstname']."</td>";
	      echo "<td>".$udata['lastname']."</td>";
	      echo "<td>".$udata['email']."</td>";
	      echo "<td>".$udata['mobile']."</td>";
	      echo "<td>".$udata['peraddress']."</td>";
	      echo "<td>".$udata['city']."</td>";
		  echo "<td>".$udata['mbill']."</td>";
	      echo "<td>".$udata['cload']."</td>";
	      echo "<td>".$udata['rarea']."</td>";
	      echo "<td>".$udata['phase']."</td>";
	      echo "<td>".$udata['referredby']."</td>";
	      echo "<td>".$udata['remarks']."</td>";
	      echo "<td>".$udata['req']."</td>";
*/	      echo"</tr>";
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