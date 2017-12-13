<?php
 require("connect.php");
if(!empty($_POST['name']) && !empty($_POST['quantity']))
{

$iname=mysqli_real_escape_string($conn, $_POST['name']);
$quantity=mysqli_real_escape_string($conn, $_POST['quantity']);



$sql="INSERT INTO inventories (iname,quantity) VALUES ($iname','$quantity')";

if($conn->query($sql))
{
    echo "1";

}
else
{

    echo mysqli_error($conn);

}
}
else
{
	exit;
}


?>