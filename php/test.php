 <?php 

  require("connect.php");

                              $siteids="SELECT DISTINCT siteid FROM siteprop";

                             if($result=mysqli_query($conn,$siteids))
                              {
                                           while ($row=mysqli_fetch_row($result))
                                             {
    
                                                            foreach ($row as $val) 
                                                            { 
                                                                  echo "$val" ;

                                                             }
      
                                              }

                              }

                                          ?>
