<?php
$username = $_POST['username'];
$password = $_POST['password'];
require("connect.php");
$conn = mysqli_connect('localhost', 'root', '', 'smartzts_ssjrm');

$username = mysqli_real_escape_string($conn, $username);
$query = "SELECT password, salt
        FROM addemployee
        WHERE username = '$username';";

$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) == 0) // User not found. So, redirect to login_form again.
{
    header('Location: index.html');
}

$userData = mysqli_fetch_array($result, MYSQLI_ASSOC);
$hash = hash('sha256', $userData['salt'] . hash('sha256', $password) );

if($hash != $userData['password']) // Incorrect password. So, redirect to login_form again.
{
    header('Location: index.html');
}else{ // Redirect to home page after successful login.
    header('Location: cattemplate1.php');
}
?>