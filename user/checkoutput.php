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