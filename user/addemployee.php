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

            
                    <form  method="post" data-parsley-validate="" onsubmit="return false" action="../php/addemployeecontroller.php">
                    	

                	<h2>Employee Registration</h2>
                    <div class="row">
                    	 <div class="ln_solid"></div>
                   			 <h2>Basic Information</h2 >

                    	
                  		  <div class="col-md-4 col-sm-4 col-xs-12 "  >
                  		   <label for="fname" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">First Name</span></label>

                    			<input type="text" name="fname" id="fname" class="form-control has-feedback-right has-feedback-left" required="required" placeholder="First Name">			
                   			 </div>



                  		  <div class="col-md-4 col-sm-4 col-xs-12 " >
                         <label for="mname" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Middle Name</span></label>

                   		  	<input type="text" name="mname" id="mname" class="form-control has-feedback-right has-feedback-left" required="required" placeholder="Middle Name">
                  		  </div>


                      
                   		 <div class="col-md-4 col-sm-4 col-xs-12 "  >
                    	   <label for="lname" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Last Name</span></label>
							<input type="text" name="lname" id="lname" class="form-control has-feedback-right has-feedback-left"  required="required" placeholder="Last Name">	
                    	</div>
                     </div>


                     <br>


                   	 <div class="row">
                    				
                  					  <div class="col-md-6 col-sm-6 col-xs-12 " >
                  					   <label for="fn" class="col-md-1 col-sm-1 col-xs-1 control-label multiline"><span class="label label-info">Father's Name</span></label>

                    						<input type="text" name="fn" id="fn" class="form-control has-feedback-right has-feedback-left" required="required" placeholder="Father's Name">			
                   			
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12 " >
                  					   <label for="mn" class="col-md-1 col-sm-1 col-xs-1 control-label multiline"><span class="label label-info">Mother's Name</span></label>

                    						<input type="text" name="mn" id="mn" class="form-control has-feedback-right has-feedback-left" required="required" placeholder="Mother's Name">			
                   			
									</div>



                     </div>


                     <br>


                     <div class="row">
                    				
                  					  <div class="col-md-6 col-sm-6 col-xs-12 " >
                  					   <label for="gender" class="col-md-1 col-sm-1 col-xs-1 control-label multiline"><span class="label label-info">Gender</span></label>

                    						<input type="text" name="gender" id="gender" class="form-control has-feedback-right has-feedback-left" required="required" placeholder="Male/Female">			
                   			
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12 " >
                  					   <label for="dob" class="col-md-1 col-sm-1 col-xs-1 control-label multiline"><span class="label label-info">Date Of Birth</span></label>

                    						<input type="text" name="dob" id="dob" class="form-control has-feedback-right has-feedback-left" required="required" placeholder="DD/MM/YYYY">			
                   			
									</div>



                     </div>


                     <br>


                     <div class="row">
                    				
                  					  <div class="col-md-6 col-sm-6 col-xs-12 " >
                  					   <label for="bg" class="col-md-1 col-sm-1 col-xs-1 control-label multiline"><span class="label label-info">Blood Group</span></label>

                    						<input type="text" name="bg" id="bg" class="form-control has-feedback-right has-feedback-left" required="required" placeholder="Blood Group">			
                   			
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12 " >
                  					   <label for="im" class="col-md-1 col-sm-1 col-xs-1 control-label multiline"><span class="label label-info">Identification Mark</span></label>

                    						<input type="text" name="im" id="im" class="form-control has-feedback-right has-feedback-left" required="required" placeholder="Identification Mark">			
                   			
									</div>



                     </div>


                     <br>



                     <div class="row">
                     		</div class="col-md-9 col-sm-9 col-xs-12">
      		              	 <label for="pa" class="col-md-1 col-sm-1 col-xs-1 control-label multiline"><span class="label label-info">Permanent Address</span></label>
            		          <textarea class="pa form-control" required="required" placeholder="Permanent Address" rows="5"  id="pa" name="pa"></textarea>
                     			</div>
                     </div>

	                
	                 <br>


	                 <div class="row">
	                 		</div class="col-md-9 col-sm-9 col-xs-12">
	      	              	 <label for="ta" class="col-md-1 col-sm-1 col-xs-1 control-label multiline"><span class="label label-info">Temporary Address</span></label>
	           		          <textarea class="ta form-control" required="required" placeholder="Temporary Address" rows="5" id="ta" name="ta"></textarea>
	           		          </div>
	                 </div>



           			 <br>


	                 <div class="row">
                     		
                  		  <div class="col-md-6 col-sm-6 col-xs-12 "  >
                  		   <label for="acard" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Aadhar Card</span></label>

                    			<input type="text" name="acard" id="acard" class="form-control has-feedback-right has-feedback-left" data-parsley-minlength="12" data-parsley-maxlength="12" data-parsley-minlength-message="Enter 12 digit aadhar card no..."required="required" placeholder="Aadhar Card">			
                   			 </div>

                   		 <div class="col-md-6 col-sm-6 col-xs-12 "  >
                  		   <label for="pcard" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Pan Card</span></label>

                    			<input type="text" name="pcard" id="pcard" class="form-control has-feedback-right has-feedback-left" data-parsley-minlength="10" data-parsley-maxlength="10" data-parsley-minlength-message="Enter 10 digit aadhar card no..." required="required" placeholder="Pan Card">			
                   			 </div>
	                 </div>


	                 <br>
                     

                     <div class="row">
                     		
                  		  <div class="col-md-6 col-sm-6 col-xs-12 "  >
                  		   <label for="epf" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">EPF No.</span></label>

                    			<input type="text" name="epf" id="epf" class="form-control has-feedback-right has-feedback-left" required="required" placeholder="EPF No.">			
                   			 </div>

                   		 <div class="col-md-6 col-sm-6 col-xs-12 "  >
                  		   <label for="exp" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Experience</span></label>

                    			<input type="text" name="exp" id="exp" class="form-control has-feedback-right has-feedback-left" required="required" placeholder="Experience">			
                   			 </div>

	                 </div>

	                 <br>

	                  <div class="row">
                     		
                  		  <div class="col-md-6 col-sm-6 col-xs-12 "  >
                  		   <label for="accno" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Bank Account No.</span></label>

                    			<input type="text" name="accno" id="accno" class="form-control has-feedback-right has-feedback-left" required="required" placeholder="Bank Account No.">			
                   			 </div>

                   		 <div class="col-md-6 col-sm-6 col-xs-12 "  >
                  		   <label for="ifsc" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Bank IFSC Code</span></label>

                    			<input type="text" name="ifsc" id="ifsc" class="form-control has-feedback-right has-feedback-left" required="required" placeholder="Bank IFSC Code">			
                   			 </div>

	                 </div>

	                 <br>

	                  <div class="row">
                     		
                  		  <div class="col-md-6 col-sm-6 col-xs-12 "  >
                  		   <label for="cno" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Contact No.</span></label>

                    			<input type="text" name="cno" id="cno" class="form-control has-feedback-right has-feedback-left" required="required" placeholder="Contact No.">			
                   			 </div>

                   		 <div class="col-md-6 col-sm-6 col-xs-12 "  >
                  		   <label for="altcno" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Alternate Contact No.</span></label>

                    			<input type="text" name="altcno" id="altcno" class="form-control has-feedback-right has-feedback-left" required="required" placeholder="Alternate Contact No.">			
                   			 </div>

	                 </div>

	                 <br>

	                  <div class="row">
                     		
                  		  <div class="col-md-6 col-sm-6 col-xs-12 "  >
                  		   <label for="email" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Email Id</span></label>

                    			<input type="text" name="email" id="email" class="form-control has-feedback-right has-feedback-left" required="required" placeholder="Email Id">			
                   			 </div>

                   		 <div class="col-md-6 col-sm-6 col-xs-12 "  >
                  		   <label for="altemail" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Alternate Email Id</span></label>

                    			<input type="text" name="altemail" id="altemail" class="form-control has-feedback-right has-feedback-left" required="required" placeholder="Alternate Email Id">			
                   			 </div>

	                 </div>

	                 <br>

	                  <div class="row">
                     		
                  		  <div class="col-md-6 col-sm-6 col-xs-12 "  >
                  		   <label for="wphno" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Work Phone No.</span></label>

                    			<input type="text" name="wphno" id="wphno" class="form-control has-feedback-right has-feedback-left" required="required" placeholder="Work Phone No.">			
                   			 </div>

                   		 <div class="col-md-6 col-sm-6 col-xs-12 "  >
                  		   <label for="wemail" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Work Email</span></label>

                    			<input type="text" name="wemail" id="wemail" class="form-control has-feedback-right has-feedback-left" required="required" placeholder="Work Email">			
                   			 </div>

	                 </div>
                  <br>
                    <div class="row">
                        
                        <div class="col-md-4 col-sm-4 col-xs-12 "  >
                         <label for="empid" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Employee Id</span></label>

                          <input type="text" name="empid" id="empid" class="form-control has-feedback-right has-feedback-left" required="required" placeholder="Work Phone No.">     
                         </div>

                       <div class="col-md-4 col-sm-4 col-xs-12 "  >
                         <label for="username" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Username</span></label>

                          <input type="text" name="username" id="username" class="form-control has-feedback-right has-feedback-left" required="required" placeholder="Work Email">     
                         </div>

                       <div class="col-md-4 col-sm-4 col-xs-12 "  >
                         <label for="password" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Password</span></label>

                          <input type="text" name="password" id="password" class="form-control has-feedback-right has-feedback-left" required="required" placeholder="Work Email">     
                         </div>

                   </div>
                  <br>
                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                    <button  class="btn btn-success col-md-12 " type="submit" align='center' id="sendmail">Send</button>
                    </div>
                  </div>








                    </form>




               














                    </div>
                    </div>
                    </body>

	
  <script src="../vendors/jquery/dist/jquery.min.js"></script>
 <script type="text/javascript" src="../js/alertify.js"></script>
 <link rel="stylesheet" href="../css/alertify.core.css" />
  <link rel="stylesheet" href="../css/alertify.bootstrap.css" />
<script type="text/javascript">

 
    $("#senddata").on("click",regc);


        function regc()
        {
        
        var empid=$('#empid')   
        var username=$('#username').val();
        var password=$('#password').val();
        var fname=$('#fname').val();
        var mname=$('#mname').val();
        var lname=$('#lname').val();
        var fn=$('#fn').val();
        var mn=$('#mn').val();
        var gender=$('#gender').val();
        var dob=$('#dob').val();
        var pa=$('#pa').val();
        var ta=$('#ta').val();
        var acard=$('#acard').val();
        var pcard=$('#pcard').val();
        var epf=$('#epf').val();
        var exp=$('#exp').val();
        var accno=$('#accno').val();
        var ifsc=$('#ifsc').val();
        var cno=$('#cno').val();
        var altcno=$('#altcno').val();
        var email=$('#email').val();
        var altemail=$('#altemail').val();
        var wphno=$('#wphno').val();
        var wemail=$('#wemail').val();
       
      
        var data={'empid':empid,'username':username,'password':password,'fname':fname,'mname':mname,'lname':lname,'fn':fn,'mn':mn,'gender':gender,'dob':dob,'pa':pa,'ta':ta,'acard':acard,'pcard':pcard,'epf':epf,'exp':exp,'accno':accno,'ifsc':ifsc,'cno':cno,'altcno':altcno,'email':email,'altemail':altemail,'wphno':wphno,'wemail':wemail};

        
        
        
        $.post('../php/custregcontroller.php',data,function(info){
            if(info!=0)
            {
               
                    alertify.alert("Thank You  "+fname+"  for registering with us.\nWe will get back to you shortly.\nPlease Note Your Smart Solar ID:"+info+" for future reference");                  
        

            }
            else if(info==0)
            {
             
            $("#querymsg").addClass('alert alert-danger');
              $('#querymsg').fadeIn();
            $("#querymsg").html("Mail Not Sent,Contact 7978555567 ");
             $('#querymsg').delay(2000).fadeOut();
            
            }
        });


    }

<?php


  include "footer.php";
?>