<?php




require("../php/connect.php");
$editid="SS001";
$query = "SELECT * FROM inventories WHERE invid='$editid'";

$result=$conn->query($query);

$row=$result->fetch_array();

echo "hello";
echo $row['iname'];

?>