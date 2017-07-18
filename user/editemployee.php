<?php


  include "header.php";
  $editid=$_GET['id'];




   require("../php/connect.php");

                                        $query = "SELECT * FROM addemployee WHERE id=$editid"; 

                                          $result=$conn->query($query);
                                              
                                        $row=$result->fetch_array();
?>




 
<!DOCTYPE html>
<html>
<head>
  <title>Edit Employee | Smart Solar </title>
</head>
<body>

 	<div class="row" id="body2">
            <div class="col-md-12 col-sm-12 col-xs-12">

            
                    <form  method="post" data-parsley-validate action="../php/employeeeditcontroller.php?id=<?php echo $editid;?> " >
                    	

                	<h2>Employee Registration</h2>
                    <div class="row">
                    	 <div class="ln_solid"></div>
                   			 <h2>Basic Information</h2 >

                    	
                  		  <div class="col-md-4 col-sm-4 col-xs-12"  >
                  		   <label for="fname" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">First Name</span></label>

                    			<input type="text" name="fname" id="fname" class="form-control" placeholder="First Name" value="<?php echo $row['fname']?>">			
                   			 </div>



                  		  <div class="col-md-4 col-sm-4 col-xs-12" >
                         <label for="mname" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Middle Name</span></label>

                   		  	<input type="text" name="mname" id="mname" class="form-control" placeholder="Middle Name" value="<?php echo $row['mname']?>">
                  		  </div>


                      
                   		 <div class="col-md-4 col-sm-4 col-xs-12"  >
                    	   <label for="lname" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Last Name</span></label>
							<input type="text" name="lname" id="lname" class="form-control"  placeholder="Last Name" value="<?php echo $row['lname']?>">	
                    	</div>
                     </div>


                     <br>


                   	 <div class="row">
                    				
                  					  <div class="col-md-6 col-sm-6 col-xs-12" >
                  					   <label for="fn" class="col-md-1 col-sm-1 col-xs-1 control-label multiline"><span class="label label-info">Father's Name</span></label>

                    						<input type="text" name="fn" id="fn" class="form-control" placeholder="Father's Name" value="<?php echo $row['fn']?>">			
                   			
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12" >
                  					   <label for="mn" class="col-md-1 col-sm-1 col-xs-1 control-label multiline"><span class="label label-info">Mother's Name</span></label>

                    						<input type="text" name="mn" id="mn" class="form-control" placeholder="Mother's Name" value="<?php echo $row['mn']?>">			
                   			
									</div>



                     </div>


                     <br>


                     <div class="row">
                    				
                  					  <div class="col-md-6 col-sm-6 col-xs-12" >
                  					   <label for="gender" class="col-md-1 col-sm-1 col-xs-1 control-label multiline"><span class="label label-info">Gender</span></label>

                    						<input type="text" name="gender" id="gender" class="form-control" placeholder="Male/Female" value="<?php echo $row['gender']?>">			
                   			
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12" >
                  					   <label for="dob" class="col-md-1 col-sm-1 col-xs-1 control-label multiline"><span class="label label-info">Date Of Birth</span></label>

                    						<input type="text" name="dob" id="dob" class="form-control" placeholder="DD/MM/YYYY" value="<?php echo $row['dob']?>">			
                   			
									</div>



                     </div>


                     <br>


                     <div class="row">
                    				
                  					  <div class="col-md-6 col-sm-6 col-xs-12" >
                  					   <label for="bg" class="col-md-1 col-sm-1 col-xs-1 control-label multiline"><span class="label label-info">Blood Group</span></label>

                    						<input type="text" name="bg" id="bg" class="form-control" placeholder="Blood Group" value="<?php echo $row['bg']?>">			
                   			
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12" >
                  					   <label for="im" class="col-md-1 col-sm-1 col-xs-1 control-label multiline"><span class="label label-info">Identification Mark</span></label>

                    						<input type="text" name="im" id="im" class="form-control" placeholder="Identification Mark" value="<?php echo $row['im']?>">			
                   			
									</div>



                     </div>


                     <br>



                     <div class="row">
                     		</div class="col-md-9 col-sm-9 col-xs-12">
      		              	 <label for="pa" class="col-md-1 col-sm-1 col-xs-1 control-label multiline"><span class="label label-info">Permanent Address</span></label>
            		          <textarea class="pa form-control" placeholder="Permanent Address" rows="5"  id="pa" name="pa"><?php echo $row['pa']?></textarea>
                     			</div>
                     </div>

	                
	                 <br>


	                 <div class="row">
	                 		</div class="col-md-9 col-sm-9 col-xs-12">
	      	              	 <label for="ta" class="col-md-1 col-sm-1 col-xs-1 control-label multiline"><span class="label label-info">Temporary Address</span></label>
	           		          <textarea class="ta form-control" placeholder="Temporary Address" rows="5" id="ta" name="ta"><?php echo $row['fname']?></textarea>
	           		          </div>
	                 </div>


	                 <br>

                  	 <div class="row">
                    	 <div class="ln_solid"></div>
                   			 <h2>Legal Information</h2 >
           			 </div>

           			 <br>


	                 <div class="row">
                     		
                  		  <div class="col-md-6 col-sm-6 col-xs-12"  >
                  		   <label for="acard" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Aadhar Card</span></label>

                    			<input type="text" name="acard" id="acard" class="form-control" placeholder="Aadhar Card" value="<?php echo $row['acard']?>">			
                   			 </div>

                   		 <div class="col-md-6 col-sm-6 col-xs-12"  >
                  		   <label for="pcard" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Pan Card</span></label>

                    			<input type="text" name="pcard" id="pcard" class="form-control" placeholder="Pan Card" value="<?php echo $row['pcard']?>">			
                   			 </div>
	                 </div>


	                 <br>
                     

                     <div class="row">
                     		
                  		  <div class="col-md-6 col-sm-6 col-xs-12"  >
                  		   <label for="epf" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">EPF No.</span></label>

                    			<input type="text" name="epf" id="epf" class="form-control" placeholder="EPF No." value="<?php echo $row['epf']?>">			
                   			 </div>

                   		 <div class="col-md-6 col-sm-6 col-xs-12"  >
                  		   <label for="exp" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Experience</span></label>

                    			<input type="text" name="exp" id="exp" class="form-control" placeholder="Experience" value="<?php echo $row['exp']?>">			
                   			 </div>

	                 </div>

	                 <br>

	                  <div class="row">
                     		
                  		  <div class="col-md-6 col-sm-6 col-xs-12"  >
                  		   <label for="accno" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Bank Account No.</span></label>

                    			<input type="text" name="accno" id="accno" class="form-control" placeholder="Bank Account No." value="<?php echo $row['accno']?>">			
                   			 </div>

                   		 <div class="col-md-6 col-sm-6 col-xs-12"  >
                  		   <label for="ifsc" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Bank IFSC Code</span></label>

                    			<input type="text" name="ifsc" id="ifsc" class="form-control" placeholder="Bank IFSC Code" value="<?php echo $row['ifsc']?>">			
                   			 </div>

	                 </div>

	                 <br>

	                  <div class="row">
                     		
                  		  <div class="col-md-6 col-sm-6 col-xs-12"  >
                  		   <label for="cno" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Contact No.</span></label>

                    			<input type="text" name="cno" id="cno" class="form-control" placeholder="Contact No." value="<?php echo $row['cno']?>">			
                   			 </div>

                   		 <div class="col-md-6 col-sm-6 col-xs-12"  >
                  		   <label for="altcno" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Alternate Contact No.</span></label>

                    			<input type="text" name="altcno" id="altcno" class="form-control" placeholder="Alternate Contact No." value="<?php echo $row['altcno']?>">			
                   			 </div>

	                 </div>

	                 <br>

	                  <div class="row">
                     		
                  		  <div class="col-md-6 col-sm-6 col-xs-12"  >
                  		   <label for="email" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Email Id</span></label>

                    			<input type="text" name="email" id="email" class="form-control" placeholder="Email Id" value="<?php echo $row['email']?>">			
                   			 </div>

                   		 <div class="col-md-6 col-sm-6 col-xs-12"  >
                  		   <label for="altemail" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Alternate Email Id</span></label>

                    			<input type="text" name="altemail" id="altemail" class="form-control" placeholder="Alternate Email Id" value="<?php echo $row['altemail']?>">			
                   			 </div>

	                 </div>

	                 <br>

	                  <div class="row">
                     		
                  		  <div class="col-md-6 col-sm-6 col-xs-12"  >
                  		   <label for="wphno" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Work Phone No.</span></label>

                    			<input type="text" name="wphno" id="wphno" class="form-control" placeholder="Work Phone No." value="<?php echo $row['wphno']?>">			
                   			 </div>

                   		 <div class="col-md-6 col-sm-6 col-xs-12"  >
                  		   <label for="wemail" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Work Email</span></label>

                    			<input type="text" name="wemail" id="wemail" class="form-control" placeholder="Work Email" value="<?php echo $row['wemail']?>">			
                   			 </div>

	                 </div>
                  <br>
                    <div class="row">
                        
                        <div class="col-md-4 col-sm-4 col-xs-12"  >
                         <label for="empid" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Employee Id</span></label>

                          <input type="text" name="empid" id="empid" class="form-control" placeholder="Work Phone No." value="<?php echo $row['empid']?>">     
                         </div>

                       <div class="col-md-4 col-sm-4 col-xs-12"  >
                         <label for="username" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Username</span></label>

                          <input type="text" name="username" id="username" class="form-control" placeholder="Work Email" value="<?php echo $row['username']?>">     
                         </div>

                       <div class="col-md-4 col-sm-4 col-xs-12"  >
                         <label for="password" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Password</span></label>

                          <input type="text" name="password" id="password" class="form-control" placeholder="Work Email" value="<?php echo $row['password']?>">     
                         </div>

                   </div>
                  <br>
                  <div class="row">
                   
                    <div class="col-md-12 col-sm-12 col-xs-12">
                    <input type="hidden" value="<?php echo $editid?>" name="" id="editid">
                    <button type="submit" class="btn btn-success" id="senddata">Submit</button>
                    </div>
                    
                  </div>


                    </form>




              
                    </div>
                    </div>
                    </body>
                
	
<?php


  include "footer.php";
?>