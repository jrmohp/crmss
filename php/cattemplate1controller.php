<?php
require("connect.php");



if(!empty($_POST['model1']) && !empty($_POST['brand1'])&& !empty($_POST['rating1']) &&!empty($_POST['quantity1']) && !empty($_POST['model2']) && !empty($_POST['brand2'])&& !empty($_POST['rating2'])&& !empty($_POST['quantity2'])&& !empty($_POST['model3'])&& !empty($_POST['brand3'])&& !empty($_POST['rating3'])&& !empty($_POST['quantity3'])&& !empty($_POST['model4'])&& !empty($_POST['brand4'])&& !empty($_POST['rating4'])&& !empty($_POST['quantity4'])&& !empty($_POST['model5'])&& !empty($_POST['brand5'])&& !empty($_POST['rating5'])&& !empty($_POST['quantity5']) && !empty($_POST['model6'])&& !empty($_POST['brand6'])&& !empty($_POST['rating6'])&& !empty($_POST['quantity6']))
{

    $model1=mysqli_real_escape_string($conn, $_POST['model1']);
    $brand1=mysqli_real_escape_string($conn, $_POST['brand1']);
    $rating1=mysqli_real_escape_string($conn, $_POST['rating1']);
    $quantity1=mysqli_real_escape_string($conn, $_POST['quantity1']);
    $model2=mysqli_real_escape_string($conn, $_POST['model2']);
    $brand2=mysqli_real_escape_string($conn, $_POST['brand2']);
    $rating2=mysqli_real_escape_string($conn, $_POST['rating2']);
    $quantity2=mysqli_real_escape_string($conn, $_POST['quantity2']);
    $model3=mysqli_real_escape_string($conn, $_POST['model3']);
    $brand3=mysqli_real_escape_string($conn, $_POST['brand3']);
    $rating3=mysqli_real_escape_string($conn, $_POST['rating3']);
    $quantity3=mysqli_real_escape_string($conn, $_POST['quantity3']);
    $model4=mysqli_real_escape_string($conn, $_POST['model4']);
    $brand4=mysqli_real_escape_string($conn, $_POST['brand4']);
    $rating4=mysqli_real_escape_string($conn, $_POST['rating4']);
    $quantity4=mysqli_real_escape_string($conn, $_POST['quantity4']);
    $model5=mysqli_real_escape_string($conn, $_POST['model5']);
    $brand5=mysqli_real_escape_string($conn, $_POST['brand5']);
    $rating5=mysqli_real_escape_string($conn, $_POST['rating5']);
    $quantity5=mysqli_real_escape_string($conn, $_POST['quantity5']);
    $model6=mysqli_real_escape_string($conn, $_POST['model6']);
    $brand6=mysqli_real_escape_string($conn, $_POST['brand6']);
    $rating6=mysqli_real_escape_string($conn, $_POST['rating6']);
    $quantity6=mysqli_real_escape_string($conn, $_POST['quantity6']);

    $sql="UPDATE inventories SET fname='$fname',mname='$mname',lname='$lname',fn='$fn',mn='$mn',gender='$gender',dob='$dob',bg='$bg',im='$im',pa='$pa',ta='$ta',acard='$acard',pcard='$pcard',epf='$epf',exp='$exp',accno='$accno',ifsc='$ifsc',cno='$cno',altcno='$altcno',email='$email',altemail='$altemail',wphno='$wphno',wemail='$wemail',empid='$empid',username='$username',password='$password' WHERE id=$editid ";

    if($conn->query($sql))
    {
        echo "Customer Data Edited Succesfully";
        header("location:../user/editemployeeselect.php");
    }
    else
    {
        echo 0;
    }

}
else
{
    if(empty($_POST['fname']))
    {
        echo "First Name Cannot Be Empty<br>";
    }

    if(empty($_POST['lname']))
    {
        echo "Last Name Cannot Be Empty<br>";
    }
    if(empty($_POST['fn']))
    {
        echo "Father's Name Cannot Be Empty<br>";
    }
    if(empty($_POST['mn']))
    {
        echo "Mother's Name Cannot Be Empty<br>";
    }
    if(empty($_POST['gender']))
    {
        echo "Gender Cannot Be Empty<br>";
    }
    if(empty($_POST['dob']))
    {
        echo "Date Of Birth Cannot Be Empty<br>";
    }
    if(empty($_POST['bg']))
    {
        echo "Blood Group Cannot Be Empty<br>";
    }

    if(empty($_POST['pa']))
    {
        echo "Permanent Address Cannot Be Empty<br>";
    }
    if(empty($_POST['ta']))
    {
        echo "Temporary Address Cannot Be Empty<br>";
    }

    if(empty($_POST['acard']))
    {
        echo "Adhar Card Number Cannot Be Empty<br>";
    }
    if(empty($_POST['accno']))
    {
        echo "Bank Account Number Cannot Be Empty<br>";
    }

    if(empty($_POST['ifsc']))
    {
        echo "Bank IFSC Code Cannot Be Empty<br>";
    }
    if(empty($_POST['cno']))
    {
        echo "Contatct Number Cannot Be Empty<br>";
    }
    if(empty($_POST['email']))
    {
        echo "Email Id Cannot Be Empty<br>";
    }
    if(empty($_POST['wphno']))
    {
        echo "Work Phone No. Cannot Be Empty<br>";
    }
    if(empty($_POST['wemail']))
    {
        echo "Work Email Cannot Be Empty<br>";
    }
    if(empty($_POST['empid']))
    {
        echo "Employee Id Cannot Be Empty<br>";
    }
    if(empty($_POST['username']))
    {
        echo "Username Cannot Be Empty<br>";
    }
    if(empty($_POST['password']))
    {
        echo "Password Cannot Be Empty<br>";
    }

    exit ;
}






?>
