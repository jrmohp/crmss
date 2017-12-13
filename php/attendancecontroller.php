<?php
require("connect.php");
$query = "SELECT empid FROM addemployee";
$attdate=$_POST['attdate'];
if($result=$conn->query($query))
{
    $attquery="INSERT into empattn(empid,attdate) VALUES ";
    $insert_values="";
    while ($row=$result->fetch_array())

    {
        $emp_id=$row['empid'];




        if(isset($_POST[$emp_id]))
        {

            $insert_values.="('$emp_id', '$attdate'),";

        }





/*

        if($emp_stat=='1')
        {
           if($conn->query($attquery))
           {
                echo "inserted";
           }



        }



 if($conn->query($attquery))
            {


            }
*/



    }




        /*

$at_site=$row[empid]
     if($_POST[$at_site]==true) {
         INSERT INTO ATTENDACE (date,empid)

*/

    $insert_values= substr($insert_values,0,-1);

    $attquery.=$insert_values;

    echo $attquery;



    if($conn->query($attquery))
    {
        echo "<script> alert('Attendance Updated');window.location.assign('../index.php');</script>";
    }
    else{
        echo "gmara";
    }

     }

