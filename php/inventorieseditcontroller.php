<?php

require("connect.php");

if(!empty($_POST['iname']) &&!empty($_POST['editid']) && !empty($_POST['quantity']))
{
    $iname=mysqli_real_escape_string($conn, $_POST['iname']);
    $quantity=mysqli_real_escape_string($conn, $_POST['quantity']);
    $editid=$_POST['editid'];


    $sql="UPDATE inventories SET iname='$iname',quantity='$quantity'WHERE invid='$editid' ";


    if($conn->query($sql))
    {
        echo "<script>alert('inventory updated');window.location.assign('../index.php');</script>";
    }
    else
    {
        echo "<script>alert('update failed');window.location.assign('../editinventoryselect.php');</script>";
    }

}


?>