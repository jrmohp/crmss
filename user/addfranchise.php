<?php


  include "header.php";
?>




 
<!DOCTYPE html>
<html>
<head>
  <title>Franchise Registration | Smart Solar  </title>
</head>
<body>

 	<div class="row" id="body2">
            <div class="col-md-12 col-sm-12 col-xs-12">

            
                 <form  method="post" data-parsley-validate action="../php/addfranchisecontroller.php">
                    	

                	<h2>Franchise Registration</h2>
                    <div class="row">
                    	 <div class="ln_solid"></div>
                   			 <h2>Legal & Owner Details</h2 >


   			  <div class="col-md-4 col-sm-4 col-xs-12"  >
                  		   <label for="lfname" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Legal First Name</span></label>

                    			<input type="text" name="lfname" id="lfname" class="form-control" placeholder="Legal First Name">			
                   			 </div>



                  		  <div class="col-md-4 col-sm-4 col-xs-12" >
                         <label for="lmname" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Legal Middle Name</span></label>

                   		  	<input type="text" name="lmname" id="lmname" class="form-control" placeholder="Legal Middle Name">
                  		  </div>


                      
                   		 <div class="col-md-4 col-sm-4 col-xs-12"  >
                    	   <label for="llname" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Legal Last Name</span></label>
							<input type="text" name="llname" id="llname" class="form-control"  placeholder="Legal Last Name">	
                    	</div>   

             </div>

             <br>

             <div class="row">

 				 <div class="col-md-4 col-sm-4 col-xs-12"  >
              		   		<label for="ofname" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Owner First Name</span></label>

                			<input type="text" name="ofname" id="ofname" class="form-control" placeholder="Owner First Name">			
       			 </div>



          		  	<div class="col-md-4 col-sm-4 col-xs-12" >
                    			 <label for="omname" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Owner Middle Name</span></label>

               		  	 		 <input type="text" name="omname" id="omname" class="form-control" placeholder="Owner Middle Name">
  		 		 	</div>


                      
               		 	<div class="col-md-4 col-sm-4 col-xs-12"  >
                    	   			<label for="olname" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Owner Last Name</span></label>
							<input type="text" name="olname" id="olname" class="form-control"  placeholder="Owner Last Name">	
                    	</div>   

             </div>

             <br>

             <div class="row">
             		<div class="col-md-6 col-sm-6 col-xs-12" >
                  					   <label for="oid" class="col-md-1 col-sm-1 col-xs-1 control-label multiline"><span class="label label-info">Owner Id</span></label>

                    						<input type="number" name="oid" id="oid" class="form-control" placeholder="Owner Id">			
                   			
					</div>			
									<div class="col-md-6 col-sm-6 col-xs-12" >
                  					   <label for="panno" class="col-md-1 col-sm-1 col-xs-1 control-label multiline"><span class="label label-info">Pan No.</span></label>

                    						<input type="number" name="panno" id="panno" class="form-control" placeholder="Pan No.">			
                   			
									</div>



             </div>

			<br>

         	<div class="row">
             		<div class="col-md-6 col-sm-6 col-xs-12" >
                  					   <label for="email" class="col-md-1 col-sm-1 col-xs-1 control-label multiline"><span class="label label-info">Email Id</span></label>

                    						<input type="email" name="email" id="email" class="form-control" placeholder="Email Id">			
                   			
					</div>			
									<div class="col-md-6 col-sm-6 col-xs-12" >
                  					   <label for="contact" class="col-md-1 col-sm-1 col-xs-1 control-label multiline"><span class="label label-info">Contact No.</span></label>

                    						<input type="number" name="contact" id="contact" class="form-control" placeholder="Contact No.">			
                   			
									</div>



             </div>

         	<br>

         	<div class="row">
             		<div class="col-md-12 col-sm-12 col-xs-12" >
      					   	<label for="GST" class="col-md-1 col-sm-1 col-xs-1 control-label multiline"><span class="label label-info">GST</span></label>

    						<input type="text" name="GST" id="GST" class="form-control" placeholder="GST">			
                   			
					</div>
			</div>
			

			<br>



                     <div class="row">
                     		</div class="col-md-9 col-sm-9 col-xs-12">
      		              	 <label for="pa" class="col-md-1 col-sm-1 col-xs-1 control-label multiline"><span class="label label-info">Address</span></label>
            		          <textarea class="pa form-control" placeholder="Address" rows="5" name="adsress"></textarea>
                 			</div>
                     </div>



















                    </div>
                    </div>
                    </body>

	
<?php


  include "footer.php";
?>