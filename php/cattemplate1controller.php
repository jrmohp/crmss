<?php


    require("connect.php");
if( !empty($_POST['']) && !empty($_POST['lmname']) && !empty($_POST['llname']) && !empty($_POST['ofname']) && !empty($_POST['omname']) && !empty($_POST['olname']) && !empty($_POST['ownerid']) && !empty($_POST['panno']) && !empty($_POST['email']) && !empty($_POST['contact']) && !empty($_POST['gst']) && !empty($_POST['address']) && !empty($_POST['username']) && !empty($_POST['accountid']) && !empty($_POST['password']))
{
    $iname=mysqli_real_escape_string($conn, $_POST['name']);
    $quantity=mysqli_real_escape_string($conn, $_POST['quantity']);


    $query = $conn->query("SELECT MAX(id) FROM inventories"); // execute
    $max_id = $query->fetch_array(); // fetch
    $tid=$max_id[0];
    $new_id=$tid+1;
    $ssid = 'SSI' . sprintf ( "%04d" , $new_id ) ;

    $sql="INSERT INTO inventories(invid,iname,quantity) VALUES ('$ssid','$iname','$quantity')";

    if($conn->query($sql))
    {
        echo "1";

    }
    else
    {

        echo "0";

    }
}
else
{
    exit;
}


?>