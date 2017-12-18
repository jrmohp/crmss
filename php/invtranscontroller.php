<?php
/**
 * Created by PhpStorm.
 * User: sidha
 * Date: 14-Dec-17
 * Time: 2:40 PM
 */





if (!isset($_POST['siteid']) || !isset($_POST['invdate']))
{
    echo "<script>alert('Select Site And Date');window.location.assign('../user/invtrans.php')</script>";


}
else
{
    $siteid=$_POST['siteid'];
    $invdate=$_POST['invdate'];
}


require("../php/connect.php");

$query = "SELECT invid FROM inventories";



if($result=$conn->query($query))
{
    while ($row=$result->fetch_array())
    {
        $curinvid=$row['invid'];



        if(!empty($_POST[$curinvid]))
        {

            $intquant=(int)$_POST[$curinvid];

            $sqlc="INSERT INTO invtrans(site_id,inventory_id,invdate,quantity) VALUES ('$siteid','$curinvid','$invdate','$_POST[$curinvid]')";
            $sqlmilnus="UPDATE inventories SET quantity=quantity-$intquant WHERE invid='$curinvid'";



            if($conn->query($sqlc) && $conn->query($sqlmilnus))
            {
               echo "<script>alert('Transaction Added Successfully');window.location.assign('../user/index.php')</script>";
            }



        }
    }

}





?>



