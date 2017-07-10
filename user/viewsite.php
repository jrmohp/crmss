<?php

require("../php/connect.php");


$query ="SELECT property FROM siteid WHERE siteid='SITE0001'"; 

/*
if($result=mysqli_query($conn,$sql))
{
	 while ($row=mysqli_fetch_row($result))
    {
   		
    }

}*/
while($row=mysql_fetch_array($query))
{
echo sizeof($row);
$length= sizeof($row);

foreach($row as $value)
{
	echo "<label for="$value">".$value."</label>";
    echo "<input type="text" name="$value" id="$value">";
    echo "<br>";
}
}
?>