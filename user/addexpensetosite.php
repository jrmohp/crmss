<?php


  include "header.php";
?>




 
<!DOCTYPE html>
<html>
<head>
  <title>Add Expense Site | Smart Solar  </title>
</head>
<body>

 	<div class="row" id="body2">
            <div class="col-md-12 col-sm-12 col-xs-12">

            <div class="row">

            <div class="ln_solid"></div>

					<div class="col-md-4 col-sm-4 col-xs-12"  >
          		   		<label for="fuel" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Fuel</span></label>

            			 <input type="number" name="fuelquant" id="fuelquant" class="form-control" placeholder="Quantity">     

	    			</div>
              <div class="col-md-4 col-sm-4 col-xs-12"  >
              <label for="fuel" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info"></span></label>
                   <input type="number" name="fuelrate" id="fuelrate" class="form-control" placeholder="Fuel" required="true">    

                 
            </div>
              <div class="col-md-4 col-sm-4 col-xs-12"  >
                   <label for="fuel" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Fuel</span></label>

                  <input type="text" name="fueltotal" id="fueltotal" class="form-control" placeholder="Total" readonly="true">     
            </div>


	    		

			</div>




			<br>
                

            <div class="row">

					<div class="col-md-4 col-sm-4 col-xs-12" >
                     	<label for="advt" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Advertisement</span></label>

                   		  	<input type="text" name="advt" id="advt" class="form-control" placeholder="Advertisement">
       		  		</div>

	    			<div class="col-md-4 col-sm-4 col-xs-12" >
                     	<label for="food" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Fooding</span></label>

                   		  	<input type="text" name="food" id="food" class="form-control" placeholder="Fooding">
       		  		</div>

       		  		<div class="col-md-4 col-sm-4 col-xs-12" >
                     	<label for="rent" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Rent For Room</span></label>

                   		  	<input type="text" name="rent" id="rent" class="form-control" placeholder="Rent For Room">
       		  		</div>

			</div>


			<br>


			<div class="row">

					<div class="col-md-4 col-sm-4 col-xs-12"  >
          		   		<label for="telebill" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Telephone Bill</span></label>

            			<input type="text" name="telebill" id="telebill" class="form-control" placeholder="Telephone Bill">			
	    			</div>


	    			<div class="col-md-4 col-sm-4 col-xs-12" >
                     	<label for="elecbill" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Electricity Bill</span></label>

                   		  	<input type="text" name="elecbill" id="elecbill" class="form-control" placeholder="Electricity Bill">
       		  		</div>

       		  		<div class="col-md-4 col-sm-4 col-xs-12" >
                     	<label for="postcharge" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Postal Cahrges</span></label>

                   		  	<input type="text" name="postcharge" id="postcharge" class="form-control" placeholder="Postal Cahrges">
       		  		</div>

			</div>

                    </div>
                    </div>
                    </body>

	
<?php


  include "footer.php";
?>