


<?php

    require ("../php/connect.php");



    $stmt = $conn->prepare("SELECT DISTINCT make FROM inventories WHERE category=?");



    $stmt->bind_param("s",$cat);







?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div class="row">
    <div class="col-sm-12">
        <div class="white-box p-l-20 p-r-20">
            <h3 class="box-title m-b-0"> </h3>
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group m-b-40">
                        <input type="text" class="form-control" id="input1" required disabled="true" placeholder="SOLAR PV MODEL" name="model1">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group m-b-40">

                        <select class="form-control p-0" id="input4" name="brand1" onchange="pvmrating()">

                            <option >Select Brand</option>

                            <?php
                                    $cat="SOLAR_PV_MODEL";
                                    $stmt->execute();

                                    $stmt->bind_result($pvm);
                                    while($stmt->fetch())
                                    {
                                        echo "<option>$pvm</option>";
                                    }




                            ?>
                            ?>

                        </select><span class="highlight"></span> <span class="bar"></span>
                    </div>
                </div>


                <div class="col-md-2">
                    <div class="form-group m-b-40">

                        <select class="form-control p-0" id="input3" name="rating1" required>
                            <option>Rating</option>
                            <option>40Wp</option>
                        </select><span class="highlight"></span> <span class="bar"></span>
                    </div>
                </div>
                <div class="col-md-2">
                    <form class="floating-labels ">
                        <div class="form-group m-b-40">
                            <input type="number" class="form-control" name="quantity1" id="input2" required><span class="highlight"></span> <span class="bar"></span>
                            <label for="input2" style="color: darkgrey;">Quantity</label>
                        </div>
                </div>
            </div>

                <div id="demo">

                </div>



                <script>

                    function pvmrating()
                    {
                        var x = $("#input4").val();



                        var data= {'cat':"SOLAR_PV_MODEL",'brand':x}


                        $.post('../php/respiname.php',data,function(info){

                            var arr = Object.keys(info).map(function(k) { return info[k] });


                            document.getElementById("demo").innerHTML =arr[0];

                        });







                    }


                </script>