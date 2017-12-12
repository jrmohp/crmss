<?php
require("connect.php");
$query = "SELECT empid FROM addemployee";

if($result=$conn->query($query))
{
    while ($row=$result->fetch_array())

    {
        $emp_id=$row['empid'];
        $emp_stat=$_POST['$emp_id'];

        if($emp_stat==1)
        {
            $conn->
        }

    }




        /*

$at_site=$row[empid]
     if($_POST[$at_site]==true) {
         INSERT INTO ATTENDACE (date,empid)

*/

     }

