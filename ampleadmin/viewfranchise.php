



 <?php


  include "header.php";
?>


 

  <title>View Franchise | Smart Solar  </title>

   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"></div>
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body">
                                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"></div>
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body">
                                     <div class="row" id="body2">
            
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Customer Database<small>Please Wait Until The Page Fully Loads</small></h2>
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
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="card-box table-responsive">
                          <p class="text-muted font-13 m-b-30">
                           Empoloyee has no rights to copy or use the user data of the Smart Solar without the consent of the Company Officials.
                          </p>

                          <table id="datatable-keytable" class="table table-striped table-bordered">
                            <thead>
                           
                              <tr align="center">
                  <th>Username</th>
                  <th>Account ID</th>
                  <th>Legal First Name</th>
                  <th>Legal Middle Name</th>
                  <th>Legal Last Name</th>
                  <th>Owner First Name</th>
                  <th>Owner Middle Name</th>
                  <th>Owner Last Name</th>
                  <th>Owner ID</th>
                    <th>Pan No.</th>
                  <th>Email ID</th>
                  <th>Contact No.</th>
                  <th>GST</th>
                  <th>Address</th>
                  
                  
              </tr>
                             
                            </thead>


                            <tbody>
                              
                            


                                <?php

                                    require("../php/connect.php");

                                        $query = "SELECT * FROM franchise"; 
                                         

                                         
                                         if($result=$conn->query($query))
                                              {
                                                    while ($val=$result->fetch_array())
                                                  { 

                                                            echo "<tr align='center'>";
         echo "<td>".$val['username']."</td>";
        echo "<td>".$val['accountid']."</td>";
        echo "<td>".$val['lfirstname']."</td>";
        echo "<td>".$val['lmiddlename']."</td>";
        echo "<td>".$val['llastname']."</td>";
        echo "<td>".$val['ofirstname']."</td>";
        echo "<td>".$val['omiddlename']."</td>";
        echo "<td>".$val['olastname']."</td>";
        echo "<td>".$val['ownerid']."</td>";
      echo "<td>".$val['panno']."</td>";
        echo "<td>".$val['email']."</td>";
        echo "<td>".$val['contact']."</td>";
        echo "<td>".$val['gst']."</td>";
        echo "<td>".$val['address']."</td>";
        
        echo "</tr>";

                                                    }
                                                            }
 
           

                                        ?>
                          
                                

                            
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
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