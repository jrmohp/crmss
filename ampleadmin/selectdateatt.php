<?php




    include "header.php";

?>

<title>Select Date For Attendance</title>



	

                        
                                    <form action="siteattendance.php" method="post">
                                    	<div class="bootstrap-iso">
 <div class="container-fluid">
  <div class="row">

    <div class="col-md-4"></div>
   
   <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"><i class="ti-settings"></i> Choose The Date</div>
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body">
                                  <form>
                                    <input class="form-control" id="date" name="attdate"  type="date"/><br>
        <br>
                  <div class="form-group"> <!-- Submit button -->
        <center><button class="btn btn-primary " name="submit" type="submit">Submit</button></center>
        </form>
                                </div>
                            </div>
                        </div>
                    </div>  
 </div>
</div>
                                        
                                        
                                        
                                    </form>
                                
                            
			



<?php


    include "footer.php";


?>