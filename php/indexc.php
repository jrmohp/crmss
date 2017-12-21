<?php



require ('connect.php');

$query = $conn->query("SELECT MAX(id) FROM user"); // execute
$max_id = $query->fetch_array(); // fetch
$tid=$max_id[0];
$new_id=$tid+1;
$ssid = 'SS' . sprintf ( "%04d" , $new_id ) ;
$wa=1;







if(!empty($_POST['fn']) && !empty($_POST['mobile'])&& !empty($_POST['req']) && !empty($_POST['city'])&& !empty($_POST['emailo']))
{



    $fn=mysqli_real_escape_string($conn, $_POST['fn']);
    $mobile=mysqli_real_escape_string($conn, $_POST['mobile']);
    $req=mysqli_real_escape_string($conn, $_POST['req']);
    $city=mysqli_real_escape_string($conn, $_POST['city']);
    $email=mysqli_real_escape_string($conn, $_POST['emailo']);



    if(isset($_POST['wa']))
    {
        $wa=mysqli_real_escape_string($conn, $_POST['wa']);
    }



        echo "asila";

    $mobileq="SELECT username FROM user WHERE mobile=$mobile";
    $mobileq2="SELECT username FROM user WHERE email=$em";



    $res=$conn->query($mobileq);
    $res2=$conn->query($mobileq2);


    if(mysqli_num_rows($res)>0 || mysqli_num_rows($res2)>0)
    {
        $details= "SELECT username FROM user WHERE mobile=$mobile";

        $res=$conn->query($details)->fetch_assoc();


        echo "<script>alert('Customer Already Exist with Cust ID :".$res['username']."');window.location.assign('../user/')</script>";
    }


    $sql="INSERT INTO user (username,firstname,mobile,req,city,wa,email) VALUES ('$ssid','$fn','$mobile','$req','$city','$wa','$email')";


    if($conn->query($sql))
    {
        echo "<script>alert('Customer Added');window.location.assign('../user/')</script>";
    }

    else
    {
        echo "<script>alert('Adding Failed');window.location.assign('../user/')</script>";
    }

}

?>