<?php
/**
 * Created by PhpStorm.
 * User: JRM2
 * Date: 14-12-2017
 * Time: 8:34 AM
 */


$reqid=$_GET['empid'];
$attdate=$_GET['attdate'];


require ("connect.php");


require ("connect.php");

$sql="INSERT INTO empattn(empid,attdate) VALUES ('$reqid','$attdate')";

if($conn->query($sql))
{
    echo "<script>alert('Attendance Updated Successfully');window.location.assign('../user/viewattendance.php?attdate=$attdate');</script>";

}
else
{
    echo "<script>alert('Attendance Update Failed,Please Try Again');window.location.assign('../user/viewattendance.php?attdate=$attdate');</script>";


}





?>