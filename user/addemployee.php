<?php


  include "header.php";
?>




 
<!DOCTYPE html>
<html>
<head>
  <title>Employee Registration | Smart Solar </title>
</head>
<body>

 	<div class="row" id="body2">
            <div class="col-md-12 col-sm-12 col-xs-12">

            
                    <form  method="post" data-parsley-validate>
                    	

                	<h2>Employee Registration</h2>
                    <div class="row">
                    	 <div class="ln_solid"></div>
                   			 <h2>Basic Information</h2>

                    	
                  		  <div class="col-md-4 col-sm-4 col-xs-12"  >
                  		   <label for="fname" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">First Name</span></label>

                    			<input type="text" name="fname" id="fname" class="form-control" placeholder="First Name">			
                   			 </div>



                  		  <div class="col-md-4 col-sm-4 col-xs-12" >
                         <label for="mname" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Middle Name</span></label>

                   		  	<input type="text" name="mname" id="mname" class="form-control" placeholder="Middle Name">
                  		  </div>


                      
                   		 <div class="col-md-4 col-sm-4 col-xs-12"  >
                    	   <label for="lname" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Last Name</span></label>
							<input type="text" name="lname" id="lname" class="form-control"  placeholder="Last Name">	
                    	</div>
                     </div>
                     <br>
                   	 <div class="row">
                    				
                  					  <div class="col-md-6 col-sm-6 col-xs-12" >
                  					   <label for="fname" class="col-md-1 col-sm-1 col-xs-1 control-label multiline"><span class="label label-info">Father's Name</span></label>

                    						<input type="text" name="fname" id="fname" class="form-control" placeholder="Father's Name">			
                   			
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12" >
                  					   <label for="mname" class="col-md-1 col-sm-1 col-xs-1 control-label multiline"><span class="label label-info">Mother's Name</span></label>

                    						<input type="text" name="mname" id="mname" class="form-control" placeholder="Mother's Name">			
                   			
									</div>



                     </div>
                     <br>
                     <div class="row">
                    				
                  					  <div class="col-md-6 col-sm-6 col-xs-12" >
                  					   <label for="fname" class="col-md-1 col-sm-1 col-xs-1 control-label multiline"><span class="label label-info">Gender</span></label>

                    						<input type="text" name="Gender" id="Gender" class="form-control" placeholder="Male/Female">			
                   			
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12" >
                  					   <label for="dob" class="col-md-1 col-sm-1 col-xs-1 control-label multiline"><span class="label label-info">Date Of Birth</span></label>

                    						<input type="text" name="dob" id="dob" class="form-control" placeholder="DD/MM/YYYY">			
                   			
									</div>



                     </div>





                    </form>




               














                    </div>
                    </div>
                    </body>

	
<?php


  include "footer.php";
?>