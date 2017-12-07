<?php




include "header.php";

?>

    <title>Select Date For Viewing Site Transaction</title>






        <div class="bootstrap-iso">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-4"></div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"><i class="ti-settings"></i> Choose The Date</div>
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body">
                                    <form  action="/viewsitetrans.php" method="post">

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

                                        <input class="form-control" id="date" name="date"  type="date"/><br>
                                        <br>
                                        <div class="form-group"> <!-- Submit button -->
                                            <center><button class="btn btn-primary " name="submit" type="submit">Submit</button></center>
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