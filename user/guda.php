<?php




include "header.php";

?>




    <div class="bootstrap-iso">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-4"></div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><i class="ti-settings"></i> Choose Site Id </div>
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            <form method="post" action="invtrans" >

                                <select class="form-control" id="siteid" name="siteid" >


                                    <?php



                                    $siteids="SELECT  siteid FROM siteinfo";

                                    if($result=mysqli_query($conn,$siteids))
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

                                <br>

                                <div class="form-group"> <!-- Submit button -->
                                    <center><input type="submit" class="btn btn-primary " name=""></center>
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