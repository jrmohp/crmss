

 <?php


  include "header.php";
?>


 

  <title>View Customers | Smart Solar  </title>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3>customer details</h3></div>
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body">
                                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body">
                                     <div class="row" id="body2">
            
              

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