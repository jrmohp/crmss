<?php

require("connect.php");

if(!empty($_POST['custid']) && !empty($_POST['franid'])&& !empty($_POST['ordersummary']))
{

    $custid=mysqli_real_escape_string($conn, $_POST['custid']);
    $franid=mysqli_real_escape_string($conn, $_POST['franid']);
    $ordersummary=mysqli_real_escape_string($conn, $_POST['ordersummary']);
    $year=date("Y");
    $query = $conn->query("SELECT MAX(id) FROM ordersummary"); // execute
    $max_id = $query->fetch_array(); // fetch
    $tid=$max_id[0];
    $new_id=$tid+1;
    $ssid = 'SSO_' .$year. sprintf ( "%04d" , $new_id ) ;
    $sql= "INSERT INTO ordersummary(orderid,custid,franid,ordersummary) VALUES ('$ssid','$custid','$franid','$ordersummary')";
    if($conn->query($sql))
    {
        echo  "We will get back to you shortly.\nPlease Note Your order ID:".$ssid." for future reference";
    }
    else
    {
        echo 0;
    }
}


?>