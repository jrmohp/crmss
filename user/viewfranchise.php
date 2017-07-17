<?php


  include "header.php";
?>
<!DOCTYPE html>
<html>
<head>
  <title>View Franchise | Smart Solar  </title>
</head>
<body>
 	<div class="row" id="body2">
            <div class="col-md-12 col-sm-12 col-xs-12">
                    
            	<table width="100%"  class="table table-striped table-bordered info-table">
             		<tr align="center">
			            <td><big><b>Username</b></big></td>
			            <td><big><b>Account ID</b></big></td>
			            <td><big><b>Legal First Name</b></big></td>
			            <td><big><b>Legal Middle Name</b></big></td>
			            <td><big><b>Legal Last Name</b></big></td>
			            <td><big><b>Owner First Name</b></big></td>
			            <td><big><b>Owner Middle Name</b></big></td>
			            <td><big><b>Owner Last Name</b></big></td>
			            <td><big><b>Owner ID</b></big></td>
                		<td><big><b>Pan No.</b></big></td>
			            <td><big><b>Email ID</b></big></td>
			            <td><big><b>Contact No.</b></big></td>
			            <td><big><b>GST</b></big></td>
			            <td><big><b>Address</b></big></td>
			            
			            
			        </tr>
<?php

require("../php/connect.php");

$query = "SELECT * FROM franchise"; 

if($result=mysqli_query($conn,$query))
{
   while ($row=mysqli_fetch_row($result))
    {	
		foreach ($row as $val) 
		{ 
		  echo "<tr align='center'>";
	      echo "<td>".$val['username']."</td>";
	      echo "<td>".$val['accountid']."</td>";
	      echo "<td>".$val['lfirstname']."</td>";
	      echo "<td>".$val['lmiddlename']."</td>";
	      echo "<td>".$val['llastname']."</td>";
	      echo "<td>".$val['ofirstname']."</td>";
	      echo "<td>".$val['omiddlename']."</td>";
	      echo "<td>".$val['olastname']."</td>";
	      echo "<td>".$val['ownerid']."</td>";
		  echo "<td>".$val['panno']."</td>";
	      echo "<td>".$val['email']."</td>";
	      echo "<td>".$val['contact']."</td>";
	      echo "<td>".$val['gst']."</td>";
	      echo "<td>".$val['address']."</td>";
	      
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