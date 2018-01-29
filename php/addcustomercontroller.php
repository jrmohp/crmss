<?php
require("connect.php");
if(!empty($_POST['firstname']) && !empty($_POST['lastname'])&& !empty($_POST['email']) && !empty($_POST['mobile'])&& !empty($_POST['city'])&& !empty($_POST['type'])) {
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['mobile']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $type = mysqli_real_escape_string($conn, $_POST['type']);
    $units = mysqli_real_escape_string($conn, $_POST['units']);
    $monthlybill = mysqli_real_escape_string($conn, $_POST['monthlybill']);
    $contractload = mysqli_real_escape_string($conn, $_POST['contractload']);
    $roofarea = mysqli_real_escape_string($conn, $_POST['roofarea']);
    $phase = mysqli_real_escape_string($conn, $_POST['phase']);
    $username=mysqli_real_escape_string($conn, $_POST['username']);

    $sql= "INSERT INTO user(username,type,firstname,lastname,email,mobile,peraddress,city,mbill,cload,rarea,phase) VALUES ('$ssid','$type','$firstname','$lastname','$email','$phone','$address','$city','$monthlybill','$contractload','$roofarea','$phase')";

    $query = $conn->query("SELECT MAX(id) FROM addemployee"); // execute
    $max_id = $query->fetch_array(); // fetch
    $tid=$max_id[0];
    $new_id=$tid+1;
    $ssid = 'SSE' . sprintf ( "%04d" , $new_id ) ;
}