<?php


if($_SESSION['prv']==0)
{
    header( "Location: na.php");
}


include "header.php";

?>

    <title>order summary</title>






    <div class="bootstrap-iso">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-4"></div>

            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">summary</div>
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            <form method="post" action="../php/ordersummarycontroller.php" >
                                <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <select class="form-control" id="custid" name="custid" >
                                    <option>select customer</option>


                                    <?php



                                    $custids="SELECT  username FROM user";

                                    if($result=mysqli_query($conn,$custids))
                                    {
                                        while ($row=mysqli_fetch_row($result))
                                        {

                                            foreach ($row as $val)
                                            {
                                                echo "<option>$val</option>" ;

                                            }

                                        }

                                    }

                                    ?>


                                </select>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <select class="form-control" id="franid" name="franid" >
                                    <option>select franchise</option>


                                        <?php



                                        $franids="SELECT  ownerid FROM franchise";

                                        if($result=mysqli_query($conn,$franids))
                                        {
                                            while ($row=mysqli_fetch_row($result))
                                            {

                                                foreach ($row as $val)
                                                {
                                                    echo "<option>$val</option>" ;

                                                }

                                            }

                                        }

                                        ?>


                                </select>

                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">

                                    <input type="text" class="form-control" name="ordersummary" placeholder="order summary"</input>

                                </div>
                        </div>
                                <br>
<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="form-group"> <!-- Submit button -->
                                    <input type="submit" class="btn btn-primary " id="senddata">
                                </div>
    </div>
</div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>









<?php


include "footer.php";


?>