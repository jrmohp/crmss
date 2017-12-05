<?php




    include "header.php";

?>






    <div class="row" id="body2">
        <div class="col-md-12 col-sm-12 col-xs-12">





            <h2>Add Site</h2>


            <div class="row">


                <div class="ln_solid"></div>


                <div class="col-md-6 col-sm-6 col-xs-12"  >
                    <label for="fname" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Site Id</span></label>

                    <input type="text" name="siteid" id="siteid" class="form-control" placeholder="Site Id">
                </div>



                <div class="col-md-6 col-sm-6 col-xs-12" >
                    <label for="mname" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Site Name</span></label>

                    <input type="text" name="sitename" id="sitename" class="form-control" placeholder="Site Name">
                </div>

            </div>

            <br>

            <div class="row">

                <div class="col-md-6 col-sm-6 col-xs-12"  >
                    <label for="fname" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Supervisor</span></label>

                    <input type="text" name="supervisor" id="supervisor" class="form-control" placeholder="Supervisor">
                </div>

            </div>


            <br>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <button  class="btn btn-success col-md-12 "  align='center' id="subm" onclick="addsite()">Add Site</button>
                </div>

            </div>







<?php


    include "footer.php";


?>