
<?php




include "header.php";

$editid=$_GET['id'];


                        require("../php/connect.php");

                   $query = "SELECT * FROM inventories WHERE invid='$editid'";

                             $result=$conn->query($query);

                             $row=$result->fetch_assoc();

                            echo "<script>alert(".$row['iname'].")</script>";
?>


<title>Edit Inventories | Smart Solar </title>


<div class="row" id="body2">
    <div class="col-md-12 col-sm-12 col-xs-12">


        <form  method="post" data-parsley-validate action="../php/inventorieseditcontroller.php " >
            <h2>Inventories </h2>
            <div class="row">
                <div class="ln_solid"></div>
                <h2>Inventories Information</h2 >


                <div class="col-md-4 col-sm-4 col-xs-12"  >
                    <label for="iname" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info"> Name</span></label>

                    <input type="text" name="iname" id="iname" class="form-control" placeholder="Name" value="<?php echo $row['iname']?>">
                </div>


                <div class="col-md-4 col-sm-4 col-xs-12" >
                    <label for="quantity" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">quantity</span></label>

                    <input type="text" name="quantity" id="quantity" class="form-control" placeholder="quantity" value="<?php echo $row['quantity']?>">
                </div>
                <br>

                <div class="row">

                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <input type="hidden" value="<?php echo $editid?>" name="editid" id="editid">
                        <button type="submit" class="btn btn-success" id="senddata">Submit</button>

                    </div>

                </div>


        </form>
    </div>
</div>



<?php


include "footer.php";


?>