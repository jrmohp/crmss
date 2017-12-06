

 <?php


  include "header.php";
?>


 

  <title>View Employee | Smart Solar  </title>




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
                                <th>Employee ID</th>
                                <th>Username</th>
                                <th>Employee Name</th>
                                <th>Father's Name</th>
                                <th>Mother's Name</th>
                                <th>Gender</th>
                                <th>Date Of Birth</th>
                                <th>Blood Group</th>
                                <th>Identification Mark</th>
                                <th>Permanent Address</th>
                                <th>Temporary Address</th>
                                <th>Aadhar Card No.</th>
                                <th>Pan Card No.</th>
                                <th>EPF No.</th>
                                <th>Experience</th>
                                <th>Bank Account No.</th>
                                <th>Bank IFSC Code</th>
                                <th>Contact No.</th>
                                <th>Alternate Contact No.</th>
                                <th>Email Id</th>
                                <th>Alternate Email ID</th>
                                <th>Work Phone No.</th>
                                <th>Work Email ID</th>
                               
                                

                              </tr>
                             
                            </thead>


                            <tbody>
                              
                            


                                <?php

                                    require("../php/connect.php");

                                        $query = "SELECT * FROM addemployee"; 
                                         

                                         
                                          if($result=$conn->query($query))
                                              {
                                                    while ($row=$result->fetch_array())
                                                  { 

                                                             echo "<tr align='center'>";
        
        echo "<td>".$row['empid']."</td>";
        echo "<td>".$row['username']."</td>";
        echo "<td>".$row['fname']." ".$row['mname']." ".$row['lname']."</td>";
        echo "<td>".$row['fn']."</td>";
        echo "<td>".$row['mn']."</td>";
      
        echo "<td>".$row['gender']."</td>";
        echo "<td>".$row['dob']."</td>";
        echo "<td>".$row['bg']."</td>";
        echo "<td>".$row['im']."</td>";
        
        echo "<td>".$row['pa']."</td>";
        echo "<td>".$row['ta']."</td>";
        echo "<td>".$row['acard']."</td>";
        echo "<td>".$row['pcard']."</td>";
        echo "<td>".$row['epf']."</td>";
        echo "<td>".$row['exp']."</td>";
        echo "<td>".$row['accno']."</td>";
        echo "<td>".$row['ifsc']."</td>";
        echo "<td>".$row['cno']."</td>";
        echo "<td>".$row['altcno']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['altemail']."</td>";
        echo "<td>".$row['wphno']."</td>";
        echo "<td>".$row['wemail']."</td>";
        
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