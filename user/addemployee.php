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
                    <div class="row" style="margin: 0.5%">
                    	 <div class="ln_solid"></div>
                   			 <h2>Basic Information</h2 >

                    	
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
                  					   <label for="Gender" class="col-md-1 col-sm-1 col-xs-1 control-label multiline"><span class="label label-info">Gender</span></label>

                    						<input type="text" name="Gender" id="Gender" class="form-control" placeholder="Male/Female">			
                   			
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12" >
                  					   <label for="dob" class="col-md-1 col-sm-1 col-xs-1 control-label multiline"><span class="label label-info">Date Of Birth</span></label>

                    						<input type="text" name="dob" id="dob" class="form-control" placeholder="DD/MM/YYYY">			
                   			
									</div>



                     </div>
                     <br>
                     <div class="row">
                    				
                  					  <div class="col-md-6 col-sm-6 col-xs-12" >
                  					   <label for="bg" class="col-md-1 col-sm-1 col-xs-1 control-label multiline"><span class="label label-info">Blood Group</span></label>

                    						<input type="text" name="bg" id="bg" class="form-control" placeholder="Blood Group">			
                   			
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12" >
                  					   <label for="im" class="col-md-1 col-sm-1 col-xs-1 control-label multiline"><span class="label label-info">Identification Mark</span></label>

                    						<input type="text" name="im" id="im" class="form-control" placeholder="Identification Mark">			
                   			
									</div>



                     </div>
                     <br>

                     <div class="row">
                     		</div class="col-md-9 col-sm-9 col-xs-12">
      		              	 <label for="pa" class="col-md-1 col-sm-1 col-xs-1 control-label multiline"><span class="label label-info">Permanent Address</span></label>
            		          <textarea class="pa form-control" placeholder="Permanent Address" rows="5"></textarea>
                     			</div>
                     </div>

	                
	                 <br>
	                 <div class="row">
	                 </div class="col-md-9 col-sm-9 col-xs-12">
	      	              	 <label for="ta" class="col-md-1 col-sm-1 col-xs-1 control-label multiline"><span class="label label-info">Temporary Address</span></label>
	           		          <textarea class="ta form-control" placeholder="Temporary Address" rows="5"></textarea>
	                 </div>


	                 <br>


	                 <div class="row">
                     		
                  		  <div class="col-md-6 col-sm-6 col-xs-12"  >
                  		   <label for="acard" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Aadhar Card</span></label>

                    			<input type="text" name="acard" id="acard" class="form-control" placeholder="Aadhar Card">			
                   			 </div>

                   		 <div class="col-md-6 col-sm-6 col-xs-12"  >
                  		   <label for="pcard" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Pan Card</span></label>

                    			<input type="text" name="pcard" id="pcard" class="form-control" placeholder="Pan Card">			
                   			 </div>
	                 </div>


	                 <br>
                     

                     <div class="row">
                     		
                  		  <div class="col-md-6 col-sm-6 col-xs-12"  >
                  		   <label for="EPF" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">EPF No.</span></label>

                    			<input type="text" name="EPF" id="EPF" class="form-control" placeholder="EPF No.">			
                   			 </div>

                   		 <div class="col-md-6 col-sm-6 col-xs-12"  >
                  		   <label for="Experience" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Experience</span></label>

                    			<input type="text" name="Experience" id="Experience" class="form-control" placeholder="Experience">			
                   			 </div>

	                 </div>

	                 <br>

	                  <div class="row">
                     		
                  		  <div class="col-md-6 col-sm-6 col-xs-12"  >
                  		   <label for="EPF" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Bank Account No.</span></label>

                    			<input type="text" name="EPF" id="EPF" class="form-control" placeholder="Bank Account No.">			
                   			 </div>

                   		 <div class="col-md-6 col-sm-6 col-xs-12"  >
                  		   <label for="Experience" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Bank IFSC Code</span></label>

                    			<input type="text" name="Experience" id="Experience" class="form-control" placeholder="Bank IFSC Code">			
                   			 </div>

	                 </div>

	                 <br>

	                  <div class="row">
                     		
                  		  <div class="col-md-6 col-sm-6 col-xs-12"  >
                  		   <label for="EPF" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Contact No.</span></label>

                    			<input type="text" name="EPF" id="EPF" class="form-control" placeholder="Contact No.">			
                   			 </div>

                   		 <div class="col-md-6 col-sm-6 col-xs-12"  >
                  		   <label for="Experience" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Alternate Contact No.</span></label>

                    			<input type="text" name="Experience" id="Experience" class="form-control" placeholder="Alternate Contact No.">			
                   			 </div>

	                 </div>

	                 <br>

	                  <div class="row">
                     		
                  		  <div class="col-md-6 col-sm-6 col-xs-12"  >
                  		   <label for="EPF" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Email Id</span></label>

                    			<input type="text" name="EPF" id="EPF" class="form-control" placeholder="Email Id">			
                   			 </div>

                   		 <div class="col-md-6 col-sm-6 col-xs-12"  >
                  		   <label for="Experience" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Alternate Email Id</span></label>

                    			<input type="text" name="Experience" id="Experience" class="form-control" placeholder="Alternate Email Id">			
                   			 </div>

	                 </div>

	                 <br>

	                  <div class="row">
                     		
                  		  <div class="col-md-6 col-sm-6 col-xs-12"  >
                  		   <label for="EPF" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Work Phone No.</span></label>

                    			<input type="text" name="EPF" id="EPF" class="form-control" placeholder="Work Phone No.">			
                   			 </div>

                   		 <div class="col-md-6 col-sm-6 col-xs-12"  >
                  		   <label for="Experience" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Work Email</span></label>

                    			<input type="text" name="Experience" id="Experience" class="form-control" placeholder="Work Email">			
                   			 </div>

	                 </div>












                    </form>




               














                    </div>
                    </div>
                    </body>

	
<?php


  include "footer.php";
?>