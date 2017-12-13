<?php


  include "header.php";
?>

    <title>Add Faculty | Smart Solar  </title>
<div class="row">
<center>
              <div class="col-md-11 col-xs-12 " style="float: none; margin: 0 auto;">
                <div class="x_panel">
                  <div class="x_title">
                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"></div>
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body">
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
                  
                    <form id="target" method="post" data-parsley-validate>

                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text"  class="form-control" id="=mfrom" placeholder="From"  name="mfrom">
                       
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 ">
                        <input type="text" class="form-control  " id="mto" placeholder="To"  name="mto">

                         </div>

                       <div class="col-md-12 col-sm-6 col-xs-12 ">
                        <input type="text" class="form-control  " id="subject" placeholder="Subject"  name="subject">
                        
                        <br />
                        </div>

                        <button class="btn btn-primary" id="sub" > Submit</button>
                        </form>
</div></div></div></center></div>
                        
                                </div>
                            </div>
                        </div>
                    </div>
                    




  <script type="text/javascript">
    $("#sub").on("click",sendmail);

  function sendmail()
  {
    alert("hwllo");
  }



  </script>

<?php
include "footer.php";
?>