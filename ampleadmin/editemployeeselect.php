

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
                                 <th>Employee ID</th>
                                <th>Name</th>
                              </tr>
                             
                            </thead>


                            <tbody>
                              
                            


                                <?php

                                    require("../php/connect.php");

                                        $query = "SELECT id,empid,fname,lname FROM addemployee"; 

                                          if($result=$conn->query($query))
                                              {
                                                    while ($row=$result->fetch_array())
                                                  { 
                                                            $reqid=$row['id'];
                                                             echo "<tr align='center'>";
        echo "<td>".$row['empid']."</td>";
        echo "<td>".$row['fname']." ".$row['lname']."</td>";
       
        echo "<td id='$reqid'><button class='btn btn-info editdata' id='$reqid' onclick='DB(this.id)'>Edit</button></td>";
       
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

            

            
        



    <script type="text/javascript">
              

                
                function DB(btnid)
        {
               

              
               var link="http://crm.smartsolar.co.in/ampleadmin/editcustomer?id="+btnid;

               window.location.assign(link);

              
        }


            </script>

<?php

include "footer.php";
?>