

 <?php


  include "header.php";
?>


 

  <title>View Customers | Smart Solar  </title>



    
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
                           
                              <tr align='center'>
                                 <th>ID</th>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>City</th>
                                <th>Address</th>
                                <th>Monthly Bill</th>
                                <th>Load</th>
                                <th>Roof Srea(in sq.ft)</th>
                                <th>Phase</th>
                                <th>Referred By</th>
                                <th>Requirement</th>
                                <th>Remarks</th>

                                 

                              </tr>
                             
                            </thead>


                            <tbody>
                              
                            


                                <?php

                                    require("../php/connect.php");

                                        $query = "SELECT * FROM user"; 

                                          if($result=$conn->query($query))
                                              {
                                                    while ($row=$result->fetch_array())
                                                  { 

                                                             echo "<tr align='center'>";
        echo "<td>".$row['username']."</td>";
        echo "<td>".$row['firstname'].$row['lastname']."</td>";
        echo "<td>".$row['type']."</td>";
        
      
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['mobile']."</td>";
        echo "<td>".$row['city']."</td>";
        echo "<td>".$row['peraddress']."</td>";
        
      echo "<td>".$row['mbill']."</td>";
        echo "<td>".$row['cload']."</td>";
        echo "<td>".$row['rarea']."</td>";
        echo "<td>".$row['phase']."</td>";
        echo "<td>".$row['referredby']."</td>";
           echo "<td>".$row['req']."</td>";
        echo "<td>".$row['remarks']."</td>";
     
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

<?php
include "footer.php";
?>