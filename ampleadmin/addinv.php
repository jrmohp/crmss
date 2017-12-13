<?php




    include "header.php";

?>

    <title>Add Inventories | Smart Solar  </title>
<div class="row">

    <div class="panel panel-default">
        <div class="panel-heading"></div>
        <div class="panel-wrapper collapse in">
            <div class="panel-body">

                <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12">
                    <input type="text" class="form-control" placeholder="Inventories Count" id="icount">
                </div>



            </div>
            <div class="row">


                <br>
                <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12">
                    <button class="btn btn-success btn-block" onclick="inventc()">Next</button>
                </div>
            </div>



            <div id="ddata">

            </div>

            <br>
            <div class="row">
            <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12">
                <button class="btn btn-success btn-block">Submit</button>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>



    <script type="text/javascript">



        function inventc()
        {


            $('#ddata').empty();
            var count=$('#icount').val();

            var c=1;
            var s1="<br><div class='row'>";
            var s2="<div class='col-md-5 col-lg-5 col-sm-5 col-xs-12' ><input type='text' name='prop";
            var s3="' id='prop";
            var s4="' class='form-control' placeholder='Inventory name'></div><div class='col-md-5 col-lg-5 col-sm-5 col-xs-12' ><input type='text' name='val";
            var s5="' id='val";
            var s6="' class='form-control' placeholder='Inventory Quantity'></div></div>";



            while(c<=count)
            {
                var total=s1+s2+c+s3+c+s4+c+s5+c+s6;




                $('#ddata').append(total);
                c++;

            }

        }

    </script>
<?php


    include "footer.php";


?>