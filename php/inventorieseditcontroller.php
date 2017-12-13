<?php
require("connect.php");
$editid=$_GET['id'];
if(!empty($_POST['iname']) && !empty($_POST['quantity']))
{
    $iname=mysqli_real_escape_string($conn, $_POST['iname']);
    $quantity=mysqli_real_escape_string($conn, $_POST['quantity']);


    $sql="UPDATE inventories SET iname='$iname',quantity='$quantity'WHERE id=$editid ";


    if($conn->query($sql))
    {
        echo "inventory Edited Succesfully";
        header("location:../user/editinventoryselect.php");
    }
    else
    {
        echo 0;
    }

}
else
    {
        if(empty($_POST['iname']))
        {
            echo " Name Cannot Be Empty<br>";
        }

        if(empty($_POST['quantity']))
        {
            echo "quantity Cannot Be Empty<br>";
        }
    exit;
}

?>