<?php

		if(empty($_POST['siteid']) || empty($_POST['date']))
		{
			echo "<script>alert('Please Select Proper Date And Site');window.location.assign('selectdatesitetrans')</script>";
		}

		 include "header.php";
	$siteid= $_POST['siteid'];
	$transdate= $_POST['date'];                         
                          
?>




<title>View site transaction | Smart Solar  </title>

   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Transaction For <span style="color:red"><?php echo $siteid?></span>  On <span style="color:red"><?php echo $transdate?></span></div>
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body">
                                     <div class="row" id="body2">
            
              
                          <table id="datatable-keytable" class="table table-striped table-bordered">
                            <thead>
                           
                              <tr align='center'>
                                 
                                <th>site ID</th>
                                <th>property</th>
                              
                                <th>quantity</th>
                                <th>rate</th>
                                <th>total</th> 

                              </tr>
                             
                            </thead>


                            <tbody>
                              
                                <?php
 require("../php/connect.php");

                                        $query = "SELECT * FROM sitetrans WHERE siteid='$siteid' AND transdate='$transdate'"; 

                                          if($result=$conn->query($query))
                                              {
                                                    while ($row=$result->fetch_array())
                                                  { 

                                                             echo "<tr align='center'>";

        
        echo "<td>".$row['siteid']."</td>";
        echo "<td>".$row['property']."</td>";
        
      
        
        echo "<td>".$row['quantity']."</td>";
        echo "<td>".$row['rate']."</td>";
        echo "<td>".$row['total']."</td>";
        echo "</tr>";

                                                    }
                                                            }

                                        ?>
                          
                                

                            
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <div class="panel-footer">   Empoloyee has no rights to copy or use the user data of the Smart Solar without the consent of the Company Officials. </div>
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