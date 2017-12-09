

 <?php


  include "header.php";


?>


 

  <title>Select Site | Smart Solar  </title>


   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Sites</div>
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body">
                                     <div class="row" id="body2">
            
             

                          <table id="datatable-keytable" class="table table-striped table-bordered">
                            <thead>
                           
                              <tr align='center'>
                                <th>SITE ID</th>
                                <th>EDIT</th>
                              </tr>
                             
                            </thead>


                            <tbody>
                              
                            


                                <?php

                                    require("../php/connect.php");

                                        $query = "SELECT DISTINCT(siteid) FROM siteprop"; 

                                          if($result=$conn->query($query))
                                              {
                                                    while ($row=$result->fetch_array())
                                                  { 
                                                            $reqid=$row['siteid'];
                                                             echo "<tr align='center'>";
        echo "<td>".$row['siteid']."</td>";
        
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
                                </div>
                            </div>
                        </div>
                    </div>

 

            

            
      



    <script type="text/javascript">
              

                
                function DB(btnid)
        {
               

              
               var link="http://crm.smartsolar.co.in/ampleadmin/viewsite?id="+btnid;

               window.location.assign(link);

              
        }


            </script>


<?php

include "footer.php";

?>