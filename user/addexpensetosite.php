<?php


  include "header.php";

$site=$_POST['siteid'];




?>




 
<!DOCTYPE html>
<html>
<head>
  <title>Add Expense Site | Smart Solar  </title>
</head>
<body>

 	<div class="row" id="body2">
  <form>

            <div class="col-md-12 col-sm-12 col-xs-12">

            <div class="row">

          <div class="col-md-12 col-sm-12 col-xs-12" >
          <form action="" method="post">
                      <label for="advt" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Site</span></label>

                         <?php echo"<input type='text'  readonly='true' id='siteid' value=$site class='form-control'>" ?>
                </div>

            
      </div>

            <div class="row">

            <div class="ln_solid"></div>



					<div class="col-md-4 col-sm-4 col-xs-12"  >
          		   		<label for="fuel" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Fuel Quantity</span></label>

            			 <input type="number" name="fuelquant" id="fuelquant" class="form-control" placeholder="Quantity" onchange="total('fuel')">     

	    			</div>
              <div class="col-md-4 col-sm-4 col-xs-12"  >
              <label for="fuel" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Fuel Rate</span></label>
                   <input type="number" name="fuelrate" id="fuelrate" class="form-control" placeholder="Rate" required="true"  onchange="total('fuel')">    

                 
            </div>
              <div class="col-md-4 col-sm-4 col-xs-12"  ><
                   <label for="fuel" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Fuel Total</span></label>

                  <input type="text" name="fueltotal" id="fueltotal" class="form-control" placeholder="Total" readonly="true" >     
            </div>


	    		

			</div>




			<br>
                

            <div class="row">

            <div class="ln_solid"></div>

          <div class="col-md-4 col-sm-4 col-xs-12"  >
                    <label for="ec" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Employee Conveyance Quantity</span></label>

                   <input type="number" name="ecquant" id="ecquant" class="form-control" placeholder="Quantity" onchange="total('ec')">     

            </div>
              <div class="col-md-4 col-sm-4 col-xs-12"  >
              <label for="ec" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Employee Conveyance Rate</span></label>
                   <input type="number" name="ecrate" id="ecrate" class="form-control" placeholder="Rate" required="true"  onchange="total('ec')">    

                 
            </div>
              <div class="col-md-4 col-sm-4 col-xs-12"  ><
                   <label for="ec" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Employee Conveyance Total</span></label>

                  <input type="text" name="ectotal" id="ectotal" class="form-control" placeholder="Employee Conveyance Total" readonly="true" >     
            </div>


          

      </div>




      <br>

      <div class="row">

            <div class="ln_solid"></div>

          <div class="col-md-4 col-sm-4 col-xs-12"  >
                    <label for="trans" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Transportation Quantity</span></label>

                   <input type="number" name="transquant" id="transquant" class="form-control" placeholder="Quantity" onchange="total('trans')">     

            </div>
              <div class="col-md-4 col-sm-4 col-xs-12"  >
              <label for="trans" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Transportation Rate</span></label>
                   <input type="number" name="transrate" id="transrate" class="form-control" placeholder="Rate" required="true"  onchange="total('trans')">    

                 
            </div>
              <div class="col-md-4 col-sm-4 col-xs-12"  ><
                   <label for="trans" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Transportation Total</span></label>

                  <input type="text" name="transtotal" id="transtotal" class="form-control" placeholder="Total" readonly="true" >     
            </div>


          

      </div>




      <br>

      <div class="row">

            <div class="ln_solid"></div>

          <div class="col-md-4 col-sm-4 col-xs-12"  >
                    <label for="advt" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Advertisement Quantity</span></label>

                   <input type="number" name="advtquant" id="advtquant" class="form-control" placeholder="Quantity" onchange="total('advt')">     

            </div>
              <div class="col-md-4 col-sm-4 col-xs-12"  >
              <label for="advt" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Advertisement Rate</span></label>
                   <input type="number" name="advtrate" id="advtrate" class="form-control" placeholder="Rate" required="true"  onchange="total('advt')">    

                 
            </div>
              <div class="col-md-4 col-sm-4 col-xs-12"  ><
                   <label for="advt" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Advertisement Total</span></label>

                  <input type="text" name="advttotal" id="advttotal" class="form-control" placeholder="Total" readonly="true" >     
            </div>


          

      </div>




      <br>

      <div class="row">

            <div class="ln_solid"></div>

          <div class="col-md-4 col-sm-4 col-xs-12"  >
                    <label for="food" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Fooding Quantity</span></label>

                   <input type="number" name="foodquant" id="foodquant" class="form-control" placeholder="Quantity" onchange="total('food')">     

            </div>
              <div class="col-md-4 col-sm-4 col-xs-12"  >
              <label for="food" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Fooding Rate</span></label>
                   <input type="number" name="foodrate" id="foodrate" class="form-control" placeholder="Rate" required="true"  onchange="total('food')">    

                 
            </div>
              <div class="col-md-4 col-sm-4 col-xs-12"  ><
                   <label for="food" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Fooding Total</span></label>

                  <input type="text" name="foodtotal" id="foodtotal" class="form-control" placeholder="Total" readonly="true" >     
            </div>


          

      </div>




      <br>

      <div class="row">

            <div class="ln_solid"></div>

          <div class="col-md-4 col-sm-4 col-xs-12"  >
                    <label for="rent" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Rent For Room Quantity</span></label>

                   <input type="number" name="rentquant" id="rentquant" class="form-control" placeholder="Quantity" onchange="total('rent')">     

            </div>
              <div class="col-md-4 col-sm-4 col-xs-12"  >
              <label for="rent" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Rent For Room Rate</span></label>
                   <input type="number" name="rentrate" id="rentrate" class="form-control" placeholder="Rate" required="true"  onchange="total('rent')">    

                 
            </div>
              <div class="col-md-4 col-sm-4 col-xs-12"  ><
                   <label for="rent" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Rent For Room Total</span></label>

                  <input type="text" name="renttotal" id="renttotal" class="form-control" placeholder="Total" readonly="true" >     
            </div>


          

      </div>




      <br>

      <div class="row">

            <div class="ln_solid"></div>

          <div class="col-md-4 col-sm-4 col-xs-12"  >
                    <label for="telebill" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Telephone Bill Quantity</span></label>

                   <input type="number" name="telebillquant" id="telebillquant" class="form-control" placeholder="Quantity" onchange="total('telebill')">     

            </div>
              <div class="col-md-4 col-sm-4 col-xs-12"  >
              <label for="telebill" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Telephone Bill Rate</span></label>
                   <input type="number" name="telebillrate" id="telebillrate" class="form-control" placeholder="Rate" required="true"  onchange="total('telebill')">    

                 
            </div>
              <div class="col-md-4 col-sm-4 col-xs-12"  ><
                   <label for="telebill" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Telephone Bill Total</span></label>

                  <input type="text" name="telebilltotal" id="telebilltotal" class="form-control" placeholder="Total" readonly="true" >     
            </div>


          

      </div>




      <br>

      <div class="row">

            <div class="ln_solid"></div>

          <div class="col-md-4 col-sm-4 col-xs-12"  >
                    <label for="elecbill" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Electricity Bill Quantity</span></label>

                   <input type="number" name="elecbillquant" id="elecbillquant" class="form-control" placeholder="Quantity" onchange="total('elecbill')">     

            </div>
              <div class="col-md-4 col-sm-4 col-xs-12"  >
              <label for="elecbill" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info"Electricity Bill>Electricity Bill Rate</span></label>
                   <input type="number" name="elecbillrate" id="elecbillrate" class="form-control" placeholder="Rate" required="true"  onchange="total('elecbill')">    

                 
            </div>
              <div class="col-md-4 col-sm-4 col-xs-12"  ><
                   <label for="elecbill" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Electricity Bill Total</span></label>

                  <input type="text" name="elecbilltotal" id="elecbilltotal" class="form-control" placeholder="Total" readonly="true" >     
            </div>


          

      </div>




      <br>

      <div class="row">

            <div class="ln_solid"></div>

          <div class="col-md-4 col-sm-4 col-xs-12"  >
                    <label for="postcharge" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Postal Cahrges Quantity</span></label>

                   <input type="number" name="postchargequant" id="postchargequant" class="form-control" placeholder="Quantity" onchange="total('postcharge')">     

            </div>
              <div class="col-md-4 col-sm-4 col-xs-12"  >
              <label for="postcharge" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Postal Cahrges Rate</span></label>
                   <input type="number" name="postchargerate" id="postchargerate" class="form-control" placeholder="Rate" required="true"  onchange="total('postcharge')">    

                 
            </div>
              <div class="col-md-4 col-sm-4 col-xs-12"  ><
                   <label for="postcharge" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Postal Cahrges Total</span></label>

                  <input type="text" name="postchargetotal" id="postchargetotal" class="form-control" placeholder="Total" readonly="true" >     
            </div>


          

      </div>


      <br>


      


      <?php

require("../php/connect.php");


$query ="SELECT property FROM siteprop WHERE siteid='$site'"; 


if($result=mysqli_query($conn,$query))
{
   while ($row=mysqli_fetch_row($result))
    {
    
      foreach ($row as $val) 
      { 

          $quantid=$val."quant";
          $rateid=$val."rate";
          $totalid=$val."total";
            echo'<div class="row">
              <div class="col-md-4 col-sm-4 col-xs-12"  >
                      <label for="$quantid" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">'.$val.' Quantity'.'</span></label>

                  <input type="text" name="$quantid" id="$quantid" class="form-control"';
                  echo"placeholder='Quantity' onchange="total($val)" >     
            </div><br>";
            echo'<div class="col-md-4 col-sm-4 col-xs-12"  >
                      <label for="$rateid" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">'.$val.' Rate'.'</span></label>

                  <input type="text" name="$rateid" id="$rateid" class="form-control"';
                  echo"placeholder='Rate' onchange="total($val)">     
            </div><br>";
            echo'<div class="col-md-4 col-sm-4 col-xs-12"  >
                      <label for="$totalid" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">'.$val.' Total'.'</span></label>

                  <input type="text" name="$totalid" id="$totalid" class="form-control"';
                  echo"placeholder='Total' readonly='true'>     
            </div></div><br>";

      }
      
    }

}

?>
                    </div>

                    </div>
                    <br>

                    <button class="btn btn-success col-md-7 pull-center col-sm-7 col-xs-7" style="margin-top:8px"> Add Transaction</button>
                    </form>
                    </div>
                    </body>

	

  <script type="text/javascript">
    
    function total(name)
    {
        var getqid="#"+name+"quant";
        var getrid="#"+name+"rate";
        var gettotal="#"+name+"total";


        var quantity=$(getqid).val();
        var rate=$(getrid).val();

        var total=quantity*rate;


        $(gettotal).attr("value",total);

       

      }




      
  </script>




<?php


  include "footer.php";
?>