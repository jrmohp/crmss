<?php


  include "header.php";
?>




 
<!DOCTYPE html>
<html>
<head>
  <title>Add Faculty | Mega ATV Championship  </title>
</head>
<body>

  <div class="row" id="body2">
            <div class="col-md-12 col-sm-12 col-xs-12">

            
                    <!--page content-->



                      <div class="col-md-6 col-sm-6 col-xs-12"  >
                      <label for="fname" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Site Id</span></label>

                    <select class="form-control" id="siteid">
                    

                      <?php 

                            require("../php/connect.php");

                              $siteids="SELECT DISTINCT siteid FROM siteprop";

                             if($result=mysqli_query($conn,$siteids))
                              {
                                           while ($row=mysqli_fetch_row($result))
                                             {
    
                                                            foreach ($row as $val) 
                                                            { 
                                                                  echo "<option>$val</option>" ;

                                                             }
      
                                              }

                              }

                                          ?>


                    </select>     
            </div>
                














                    </div>
                    </div>
                    </body>

  
<?php


  include "footer.php";
?>