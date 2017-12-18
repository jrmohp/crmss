<?php




include "header.php";


$franid="1541012381";


 ?>



<?php

        $sqlup="SELECT * FROM ordersummary WHERE franid='$franid' AND status=0";

        if($resup=$conn->query($sqlup))
        {

            while ($rowup=$resup->fetch_assoc())
            {

                $rowup['orderid'];

                $rowup['custid'];

                $rowup['ordersummary'];


                $rowup['total'];






            }
        }




?>




<?php


include "footer.php";


?>