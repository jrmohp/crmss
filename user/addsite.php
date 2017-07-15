<?php


  include "header.php";
?>




 
<!DOCTYPE html>
<html>
<head>
  <title>Add Site | Smart Solar  </title>
</head>
<body>

  <div class="row" id="body2">
        <div class="col-md-12 col-sm-12 col-xs-12">

            
          
                      

      <h2>Add Site</h2>


        <div class="row">


        <div class="ln_solid"></div>             


            <div class="col-md-6 col-sm-6 col-xs-12"  >
                      <label for="fname" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Site Id</span></label>

                  <input type="text" name="siteid" id="siteid" class="form-control" placeholder="Site Id">      
            </div>



            <div class="col-md-6 col-sm-6 col-xs-12" >
                      <label for="mname" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Site Name</span></label>

                          <input type="text" name="sitename" id="sitename" class="form-control" placeholder="Site Name">
                </div>

        </div>

          <br>

      <div class="row">

          <div class="col-md-6 col-sm-6 col-xs-12"  >
                    <label for="fname" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Supervisor</span></label>

                  <input type="text" name="supervisor" id="supervisor" class="form-control" placeholder="Supervisor">     
            </div>


            

           <br>

            <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                    <button  class="btn btn-success col-md-12 "  align='center' id="subm" onclick="addsite()">Add Site</button>
                    </div>
                    
            </div>



<script type="text/javascript">
  





function addsite()
{ 
    var ec=$('#ecount').val();
    
    var c2=1;
    
    var proparr= new Array();
    var sitename=$('#sitename').val();
    var siteid=$('#siteid').val();
    var supervisor=$('#supervisor').val();
    


    
   
var sitedata={'siteid':siteid,'sitename':sitename,'supervisor':supervisor};

 $.post('../php/addsiteinfocontroller.php',sitedata,function(info){
            
            if(info==1)
            {
              alert("Site Information Added");

            }

            else
            {
              alert("Either Site Exist Or Some Error Occured");
              alert("Try With New Site Name,If Does Not Work Contact Admin");
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