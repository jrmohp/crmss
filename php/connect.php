  <?php

	$conn=new mysqli("localhost","smartzts_jrm","sikujyoti753","smartzts_ssjrm");

	if ($conn->connect_error) 
	{
    	die("Connection failed: " . $conn->connect_error);
	} 

?>