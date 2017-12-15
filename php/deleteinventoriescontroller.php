<?php


require ("connect.php");




$reqid=$_GET['id'];

$sql="DELETE FROM inventories WHERE invid='$reqid'";



    if($conn->query($sql))
    {

        echo "<script>alert('Inventory Deleted Succesfully');window.location.assign('../user/editinventoryselect.php')</script>";
    }
    else
    {
        echo "<script>alert('Inventory Delete Failed');window.location.assign('../user/editinventoryselect.php')</script>";
    }
?>