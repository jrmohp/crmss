

 <?php


  include "header.php";
?>


 

  <title>View User | Smart Solar  </title>


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
                <thead>
                  <th>User Name</th>
                  <th>Type</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Email</th>
                  <th>Mobile</th>
                  <th>Per Address</th>
                    <th>City</th>
                  <th>Mbill</th>
                  <th>Cload</th>
                  <th>Rarea</th>
                  <th>Phase</th>
                  <th>Reffered By</th>
                  <th>Remarks</th>
                  <th>Request</th>
              </thead>
              </tr>
<?php

require("../php/connect.php");

$query = "SELECT * FROM user"; 

if($result=$conn->query($query))
{
  while ($val=$result->fetch_array())
  { 
    
      echo "<tr align='center'>";
        echo "<th>".$val['username']."</th>";
        echo "<th>".$val['type']."</th>";
        echo "<th>".$val['firstname']."</th>";
        echo "<th>".$val['lastname']."</th>";
        echo "<th>".$val['email']."</th>";
        echo "<th>".$val['mobile']."</th>";
        echo "<th>".$val['peraddress']."</th>";
        echo "<th>".$val['city']."</th>";
      echo "<th>".$val['mbill']."</th>";
        echo "<th>".$val['cload']."</th>";
        echo "<th>".$val['rarea']."</th>";
        echo "<th>".$val['phase']."</th>";
        echo "<th>".$val['referredby']."</th>";
        echo "<th>".$val['remarks']."</th>";
        echo "<th>".$val['req']."</th>";
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
  
 
 <?php
include "footer.php";
 ?>