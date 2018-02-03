<?php
require("connect.php");

if(!empty($_POST['firstname']) && !empty($_POST['lastname'])&& !empty($_POST['email']) && !empty($_POST['mobile'])&& !empty($_POST['city'])&& !empty($_POST['type']))
{
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $type = mysqli_real_escape_string($conn, $_POST['type']);
    $units = mysqli_real_escape_string($conn, $_POST['units']);
    $monthlybill = mysqli_real_escape_string($conn, $_POST['monthlybill']);
    $contractload = mysqli_real_escape_string($conn, $_POST['contractload']);
    $roofarea = mysqli_real_escape_string($conn, $_POST['roofarea']);
    $phase = mysqli_real_escape_string($conn, $_POST['phase']);


    $query = $conn->query("SELECT MAX(id) FROM user");
    $max_id = $query->fetch_array(); // fetch
    $tid=$max_id[0];
    $new_id=$tid+1;
    $ssid = 'SS' . sprintf ( "%04d" , $new_id ) ;


    $sql= "INSERT INTO user(username,type,firstname,lastname,email,mobile,peraddress,city,mbill,cload,rarea,phase) VALUES ('$ssid','$type','$firstname','$lastname','$email','$mobile','$address','$city','$monthlybill','$contractload','$roofarea','$phase')";
}
else
{
    exit;
}
if($conn->query($sql))
{
    echo $ssid;

}
else
{

    echo 0;

}





?>
