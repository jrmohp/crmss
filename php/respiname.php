<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 13-01-2018
 * Time: 14:05
 */





        $cat=$_POST['cat'];
        $brand=$_POST['brand'];


        require ("connect.php");






        $sql="SELECT iname FROM inventories WHERE make='$brand' AND category='$cat'";

        if($result=$conn->query($sql))
        {

            $row = $result->fetch_array();
                $info=$row['iname'];


            $jsonData = json_encode($info);
            echo $jsonData;

        }
        else
        {
            echo 0;
        }









?>