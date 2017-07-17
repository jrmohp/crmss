<?php


  include "header.php";

  $editid=$_GET['id'];
  
  require("../php/connect.php");

  $query = "SELECT * FROM franchise WHERE id=$editid"; 

  $result=$conn->query($query);
        
  $row=$result->fetch_array();

?>

<!DOCTYPE html>
<html>
<head>
  <title>Franchise Registration | Smart Solar  </title>
</head>
<body>

  <div class="row" id="body2">
            <div class="col-md-12 col-sm-12 col-xs-12">

            
                 <form  method="post" data-parsley-validate>
                      

                  <h2>Franchise Registration</h2>
                    <div class="row">
                       <div class="ln_solid"></div>
                         <h2>Legal & Owner Details</h2 >


          <div class="col-md-4 col-sm-4 col-xs-12"  >
                         <label for="lfname" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Legal First Name</span></label>

                          <input type="text" name="lfname" id="lfname" class="form-control" placeholder="Legal First Name" value="<?php echo $row['lfirstname']?>">     
                         </div>



                        <div class="col-md-4 col-sm-4 col-xs-12" >
                         <label for="lmname" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Legal Middle Name</span></label>

                          <input type="text" name="lmname" id="lmname" class="form-control" placeholder="Legal Middle Name" value="<?php echo $row['lmiddlename']?>">
                        </div>


                      
                       <div class="col-md-4 col-sm-4 col-xs-12"  >
                         <label for="llname" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Legal Last Name</span></label>
                           <input type="text" name="llname" id="llname" class="form-control"  placeholder="Legal Last Name" value="<?php echo $row['llastname']?>"> 
                      </div>   

             </div>

             <br>

             <div class="row">

         <div class="col-md-4 col-sm-4 col-xs-12"  >
                        <label for="ofname" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Owner First Name</span></label>

                      <input type="text" name="ofname" id="ofname" class="form-control" placeholder="Owner First Name" value="<?php echo $row['ofirstname']?>">     
             </div>



                  <div class="col-md-4 col-sm-4 col-xs-12" >
                           <label for="omname" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Owner Middle Name</span></label>

                           <input type="text" name="omname" id="omname" class="form-control" placeholder="Owner Middle Name" value="<?php echo $row['omiddlename']?>">
            </div>


                      
                    <div class="col-md-4 col-sm-4 col-xs-12"  >
                              <label for="olname" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Owner Last Name</span></label>
              <input type="text" name="olname" id="olname" class="form-control"  placeholder="Owner Last Name" value="<?php echo $row['olastname']?>"> 
                      </div>   

             </div>

             <br>

             <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12" >
                               <label for="ownerid" class="col-md-1 col-sm-1 col-xs-1 control-label multiline"><span class="label label-info">Owner Id</span></label>

                                <input type="number" name="ownerid" id="ownerid" class="form-control" placeholder="Owner Id" value="<?php echo $row['ownerid']?>">     
                        
          </div>      
                  <div class="col-md-6 col-sm-6 col-xs-12" >
                               <label for="panno" class="col-md-1 col-sm-1 col-xs-1 control-label multiline"><span class="label label-info">Pan No.</span></label>

                                <input type="number" name="panno" id="panno" class="form-control" placeholder="Pan No." value="<?php echo $row['panno']?>">      
                        
                  </div>



             </div>

      <br>

          <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12" >
                               <label for="email" class="col-md-1 col-sm-1 col-xs-1 control-label multiline"><span class="label label-info">Email Id</span></label>

                                <input type="email" name="email" id="email" class="form-control" placeholder="Email Id" value="<?php echo $row['email']?>">      
                        
          </div>      
                  <div class="col-md-6 col-sm-6 col-xs-12" >
                               <label for="contact" class="col-md-1 col-sm-1 col-xs-1 control-label multiline"><span class="label label-info">Contact No.</span></label>

                                <input type="number" name="contact" id="contact" class="form-control" placeholder="Contact No." value="<?php echo $row['contact']?>">      
                        
                  </div>



             </div>

          <br>

          <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12" >
                    <label for="gst" class="col-md-1 col-sm-1 col-xs-1 control-label multiline"><span class="label label-info">gst</span></label>

                <input type="text" name="gst" id="gst" class="form-control" placeholder="gst" value="<?php echo $row['gst']?>">      
                        
          </div>
      </div>
      

      <br>



                     <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                           <label for="pa" class="col-md-1 col-sm-1 col-xs-1 control-label multiline"><span class="label label-info">Address</span></label>
                          <textarea class="pa form-control" placeholder="Address" rows="5" name="address"><?php echo $row['address']?></textarea>
                      </div>
                      </div>
                      <br>

                      <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12" >
                        <label for="username" class="col-4md-1 col-sm-1 col-xs-1 control-label multiline"><span class="label label-info">Username</span></label>

                        <input type="text" name="username" id="username" class="form-control" placeholder="Username" value="<?php echo $row['username']?>">
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12" >
                        <label for="accountid" class="col-md-1 col-sm-1 col-xs-1 control-label multiline"><span class="label label-info">Account ID</span></label>

                        <input type="text" name="accountid" id="accountid" class="form-control" placeholder="Account ID" value="<?php echo $row['accountid']?>">
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12" >
                        <label for="password" class="col-md-1 col-sm-1 col-xs-1 control-label multiline"><span class="label     label-info">Password</span></label>

                        <input type="password" name="password" id="password" class="form-control" placeholder="Password" value="<?php echo $row['password']?>">
                        </div>
                        </div>
                        <br>
                      <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                    <button  class="btn btn-success col-md-12 " type="submit" align='center' id="senddata">Send</button>
                    </div>
                    </div>
                    </form>

<script src="../vendors/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="../js/alertify.js"></script>
<link rel="stylesheet" href="../css/alertify.core.css"/>
<link rel="stylesheet" href="../css/alertify.bootstrap.css" />

<script type="text/javascript">
    $("#senddata").on("click",regc);
        function regc()
        {
        var lfname   =$('#lfname').val();
        var lmname   =$('#lmname').val();
        var llname   =$('#llname').val();
        var ofname   =$('#ofname').val();
        var omname   =$('#omname').val();
        var olname   =$('#olname').val();
        var ownerid  =$('#ownerid').val();
        var panno    =$('#panno').val();
        var email    =$('#email').val();
        var contact  =$('#contact').val();
        var gst      =$('#gst').val();
        var address  =$('#address').val();
        var username =$('#username').val();
        var accountid=$('#accountid').val();
        var password =$('#password').val();
        

        var data={'lfname':lfname,'lmname':lmname,'llname':llname,'ofname':ofname,'omname':omname,'olname':olname,'ownerid':ownerid,'panno':panno,'email':email,'contact':contact,'gst':gst.'address':address,'username':username,'accountid':accountid,'password':password};

        $.post('../php/franchiseeditcontroller.php?id=$editid',data,function(info)
        {
            if(info!=0)
            {   
                alertify.alert(info);                  
            }
            else if(info==0)
            {
                $("#querymsg").addClass('alert alert-danger');
                $('#querymsg').fadeIn();
                $("#querymsg").html("Mail Not Sent,Contact 7978555567 ");
                $('#querymsg').delay(2000).fadeOut();
            }
        });
    }

                    </script>
                    </div>
                    </div>
                    </body>

  
<?php


  include "footer.php";
?>