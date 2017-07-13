 <?php  


  include "header.php"

?>


<!DOCTYPE html>
<html>
<head>
  <title>View Team | Mega ATV Championship  </title>
</head>
<body>

  <div class="row" id="body2">
            <div class="col-md-12 col-sm-12 col-xs-12">
          <table width="100%"  class="table table-striped table-bordered info-table">
             <tr align="center">
              
<br>
              <b><span style="color:red">Note: Alteration Of Data Will Not Be Allowed After 1<sup>st</sup> Jan 2018 </span></b>
                
             <td><big><b>Member Name</b></big></td>
             <td><big><b>Email</b></big></td>
             <td><big><b>Contact</b></big></td>
             <td><big><b>Age</b></big></td>
             <td><big><b>Year</b></big></td>
             <td><big><b>Role In Team</b></big></td>
             <td><big><b>TShirt Size</b></big></td>
             <td><big><b>Blood Group</b></big></td>
             

             </tr>
                    <?php 
                    if($row2)
                    {
                    foreach ($row2 as $mdata ) 
                    { echo "<tr align='center'>";
                      echo "<td>".$mdata['member_name']."</td>";
                      echo "<td>".$mdata['member_email']."</td>";
                      echo "<td>".$mdata['member_contact']."</td>";
                      echo "<td>".$mdata['member_age']."</td>";
                      echo "<td>".$mdata['member_year']."</td>";
                      echo "<td>".$mdata['member_role']."</td>";
                      echo "<td>".$mdata['tshirt_size']."</td>";
                      echo "<td>".$mdata['blood_group']."</td>";
                        echo"</tr>";
                    }
                  }

                    ?>
                     <?php 
                     if($row3)
                    {
                    foreach ($row3 as $fdata ) 
                    { echo "<tr align='center'>";
                      echo "<td>".$fdata['faculty_name']."</td>";
                      echo "<td>".$fdata['faculty_email']."</td>";
                      echo "<td>".$fdata['faculty_contact']."</td>";
                      echo "<td>".$fdata['faculty_age']."</td>";
                      echo "<td>".$fdata['faculty_year']."</td>";
                      echo "<td>".$fdata['faculty_role']."</td>";
                      echo "<td>".$fdata['f_tshirt_size']."</td>";
                      echo "<td>".$fdata['f_blood_group']."</td>";
                        echo"</tr>";
                    }
                  }

                    ?>

                </table>
                


          <!--page ned-->
               
        <!-- footer content -->
        <?php  


  include "footer.php"

?>
	
  </body>
</html>
