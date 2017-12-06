<?php


  include "regheader.php";
?>


<div class="row">
<center>
              <div class="col-md-8 col-xs-12 " style="float: none; margin: 0 auto;">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tell Us Something About Yourself ! </h2>
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

                    <form method="post">
                      
                    <div class="row">
                      
                    <div class="col-xs-12 col-md-5 col-sm-5">

                    <input type="text" name="firstname" class="form-control has-feedback-left" id="firstname" placeholder="First Name" data-parsley-required>
                      
                    </div>

                    </div>
                    <button class="btn btn-primary" type="submit">Submit</button>


                    </form>

                    <?php
                    include "footer.php";
                    ?>