<?php

require("../php/connect.php");


$query = mysql_query("SELECT property FROM siteid WHERE id='SITE0001'"); 

while($row=mysql_fetch_array($query))
{
echo sizeof($row);
$length= sizeof($row);

foreach($row as $value)
{
	echo "<label for="$value">".$value."</label>";
    echo "<input type="text" name="$value" id="$value">";
    echo "<br>;
}
}



?>