<?php

require("../php/connect.php");


$query = mysql_query("SELECT property FROM siteid WHERE id='SITE0001'"); 



echo $query;

?>