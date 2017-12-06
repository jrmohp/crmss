<?php




    include "header.php";

?>

<title>Select Date For Attendance</title>



	
		<div class="row ">

			<div class="col-md-4"></div>
<div class="col-md-4 col-sm-12">
                        
                                    <form>
                                    	<div class="bootstrap-iso">
 <div class="container-fluid">
  <div class="row">
   <div class="col-md-6 col-sm-6 col-xs-12">

    <!-- Form code begins -->
    <form method="post">
      <div class="form-group"> <!-- Date input -->
        <label class="control-label" for="date">Date</label>
        <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text"/>
      </div>
      <div class="form-group"> <!-- Submit button -->
        <button class="btn btn-primary " name="submit" type="submit">Submit</button>
      </div>
     </form>
     <!-- Form code ends --> 

    </div>
  </div>    
 </div>
</div>
                                        
                                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                                        
                                    </form>
                                </div>
                         
			<div class="col-md-4"></div>


			<div class="col-md-4"></div>
                    
                                
                            </div>
			



<?php


    include "footer.php";


?>