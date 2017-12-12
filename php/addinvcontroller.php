<?php

require("connect.php");
$name=mysqli_real_escape_string($conn, $_POST['name']);
$quantity=mysqli_real_escape_string($conn, $_POST['quantity']);

$sql="INSERT INTO inventories(name,quantity) VALUES ('$name','$quantity')";


if($conn->query($sql))
{
    echo "1";

}
else
{

    echo "0";

}



?>