<?php


  include "header.php";
?>


    <title>Add Faculty | Smart Solar  </title>
	
                 <!-- page content -->
        <div class="right_col" role="main">
          

              
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"></div>
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body">
                                    <h2>Send Email  <small>specified customer</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />

                    <form data-parsley-validate method="post">

                    <div class="row">
                      
                      <label class="control-label col-sm-1 align-middle" for="mfrom" style="margin:-5px"><h2><span class="label label-info">From</span></h2></label>
                      <div class="col-md-5 col-sm-6 col-xs-10">

                      <input type="text"  class="form-control"  name="mfrom" placeholder="From" id="mfrom">
                        
                      </div>

                      <label class="control-label col-sm-1 align-middle" for="to" style="margin:-5px"><h2><span class="label label-info">&nbspTo&nbsp</span></h2></label>
                      <div class="col-md-5 col-sm-5 col-xs-10">
                        
                      <input type="text"  class="form-control"  name="mto" id="mto" placeholder="To">
                        
                      </div>
                      

                    </div>
                    <br>
                    <br>

                    <div class="row">


                      <label class="control-label col-sm-1 align-middle" for="subject" style="margin:-5px"><h2><span class="label label-info">Subject</span></h2></label>

                      <div class="col-md-11 col-sm-11 col-xs-11">
                        
                      <input type="text"  class="form-control"  name="subject" id="subject" placeholder="Subject">
                        
                      </div>
                    </div>
                    </form>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    


                                </div>
                            </div>
                        </div>
                    </div>
                    








                   


	<?php


	include "footer.php";

	?>