<?php
/**
 * Created by PhpStorm.
 * User: JRM2
 * Date: 13-12-2017
 * Time: 4:45 PM
 */



$reqid=$_GET['empid'];


require ("connect.php");

$sql="DELETE FROM empattn WHERE sl=$reqid";

    if($conn->query($sql))
    {
        echo "<script>alert('Attendance Updated Succesfully');window.location.assign('../user/viewattendance.php');</script>";

    }
    else
    {
        echo "<script>alert('Attendance Update Failed,Please Try Again');window.location.assign('../user/viewattendance.php');</script>";

    }



?>