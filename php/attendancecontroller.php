<?php
require("connect.php");
$query = "SELECT empid FROM addemployee";
$attdate=$_POST['attdate'];
if($result=$conn->query($query))
{
    while ($row=$result->fetch_array())

    {
        $emp_id=$row['empid'];

        $attquery="INSERT into empattn(empid,absdate) VALUES ('$emp_id', '$attdate')";

        if(isset($_POST[$emp_id]))
        {

            if($conn->query($attquery))
            {
                echo "inserted";

            }
        }





/*

        if($emp_stat=='1')
        {
           if($conn->query($attquery))
           {
                echo "inserted";
           }



        }
*/
    }




        /*

$at_site=$row[empid]
     if($_POST[$at_site]==true) {
         INSERT INTO ATTENDACE (date,empid)

*/

     }

