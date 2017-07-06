<?php


  include "regheader.php";
?>


<div class="row">
<center>
              <div class="col-md-8 col-xs-12 " style="float: none; margin: 0 auto;">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Send Mail </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        
                        
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left " action="a.php" method="post">

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control " id="inputSuccess2" placeholder="From" required="required" name="from">
                       
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control  " id="inputSuccess3" placeholder="To" required="required" name="to">

                         </div>

                       <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control  " id="inputSuccess3" placeholder="Subject"  name="subject">
                        
                        <br />

                        <div class="col-md-12 col-sm-12 col-xs-12">
          

              
                   </div>
                   <input type="submit" name="">

                   </div>
                   </div>

                       
                   </div>
                       
                   </form>

                    


                        <?php


  include "footer.php";
?>
