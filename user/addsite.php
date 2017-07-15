<?php


  include "header.php";
?>




 
<!DOCTYPE html>
<html>
<head>
  <title>Edit Site | Smart Solar  </title>
</head>
<body>

 	<div class="row" id="body2">
        <div class="col-md-12 col-sm-12 col-xs-12">

            
       		
                    	

			<h2>Add Site</h2>


    		<div class="row">


				<div class="ln_solid"></div>             


	  				<div class="col-md-6 col-sm-6 col-xs-12"  >
              		  	<label for="fname" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Site Id</span></label>

            		<select class="form-control" id="siteid">
                  <?php 

                              $siteids="SELECT DISTINCT siteid FROM siteprop";

                             if($result=mysqli_query($conn,$siteids))
                              {
                                           while ($row=mysqli_fetch_row($result))
                                             {
    
                                                            foreach ($row as $val) 
                                                            { 
                                                                  echo "<option>$val</option>" ;

                                                             }
      
                                              }

                                          }

                   ?>

                </select>	
    				</div>



	  				

			<br>

			<div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                    <button  class="btn btn-success col-md-12 "  align='center' id="next" onclick="regc()">Next</button>
                    </div>
                    
          	</div>

            <div id="ddata">
              
            </div>

            <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                    <button  class="btn btn-success col-md-12 "  align='center' id="subm" onclick="addsite()">Add Site</button>
                    </div>
                    
            </div>



<script type="text/javascript">
  


function regc()
{
  $('#ddata').empty();
 var ec=$('#ecount').val();
  
var c=1;
var s1="<div class='row'><label for='mname' class='col-md-1 col-sm-1 col-xs-1'><span class='label label-info'>Expense";
var s2="</span></label><div class='col-md-5 col-sm-5 col-xs-11' ><input type='text' name='prop";
var s3="'id='prop";
var s4="'class='form-control' placeholder='Expense Name'></div></div><br>";



while(c<=ec)
{
  var totals=s1+c+s2+c+s3+c+s4;


  $('#ddata').append(totals);
  c++;

}

}


function addsite()
{ 
    var ec=$('#ecount').val();
    
    var c2=1;
    
    var proparr= new Array();
    var sitename=$('#sitename').val();
    var supervisor=$('#supervisor').val();
    
    while(c2<=ec)
    { 
      
        proparr.push("#prop"+c2);
        
       
        c2++;
       
    }

    var propid=new Array();
    
    c2=0;
    while(c2<ec)
    {
         
        propid.push(proparr[c2]);
       
       
        if(c2==ec)
        {
          break;
        }
        c2++;
        
    }

    




var insertcount=0;
    c2=0;

    while(c2<ec)
      

    {

        
        var siteid=$('#siteid').val();
         
        var propfinal=$(propid[c2]).val();
        
        var data={'siteid':siteid,'prop':propfinal};
        
        



        $.post('../php/addsitecontroller.php',data,function(info){
            
            

        });

     c2++;
       
       
    }

    alert("Properties Added To Site");
    

    
   
var sitedata={'siteid':siteid,'sitename':sitename,'supervisor':supervisor};

 $.post('../php/addsiteinfocontroller.php',sitedata,function(info){
            
            if(info==1)
            {
              alert("Site Information Added");

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