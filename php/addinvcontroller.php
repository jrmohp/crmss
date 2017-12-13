<?php

if(!empty($_POST['iname']) && !empty($_POST['quantity']))
{
require("connect.php");
$iname=mysqli_real_escape_string($conn, $_POST['iname']);
$quantity=mysqli_real_escape_string($conn, $_POST['quantity']);


$query = $conn->query("SELECT MAX(id) FROM inventories"); // execute
	$max_id = $query->fetch_array(); // fetch
		$tid=$max_id[0];
		$new_id=$tid+1;
		$ssid = 'SSI' . sprintf ( "%04d" , $new_id ) ;

$sql="INSERT INTO inventories(invid,iname,quantity) VALUES ('$ssid',$iname','$quantity')";

if($conn->query($sql))
{
    echo "1";

}
else
{

    echo "0";

}
}
else
{
	exit;
}


?>