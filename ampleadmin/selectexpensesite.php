<?php


  include "header.php";
?>



  <title>Select Site | Smart Solar  </title>


  <div class="row" id="body2">
            <div class="col-md-12 col-sm-12 col-xs-12">

            
                    <!--page content-->



                      <div class="col-md-12 col-sm-12 col-xs-12"  >
                      <label for="fname" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Site Id</span></label>


                      <form action="addexpensetosite.php" method="post">
                    <select class="form-control" id="siteid" name="siteid">
                    

                      <?php 

                            require("../php/connect.php");

                              $siteids="SELECT  siteid FROM siteinfo";

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



                    <center><button class="btn btn-success" type="submit" style="margin-top: 8px;">Proceed</button></center>

                    </form>
            </div>
                














                    </div>
                    </div>
                    

  
<?php


  include "footer.php";
?>