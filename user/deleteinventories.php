<?php


if($_SESSION['prv']==0)
{
    header( "Location: na.php");
}


$reqid=$_GET['id'];


require ("connect.php");

$sql="DELETE FROM inventories WHERE invid=$reqid";

if($conn->query($sql))
{
    echo "<script>alert('');window.location.assign('../user/viewattendance.php?attdate=$attdate');</script>";

}
else
{
    echo "<script>alert('Attendance Update Failed,Please Try Again');window.location.assign('../user/viewattendance.php?attdate=$attdate');</script>";


}




?>