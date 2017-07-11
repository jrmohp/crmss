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

                   		  	<input type="text" name="mname" id="mname" class="form-control" placeholder="Site Name">
       		  		</div>

  			</div>

  		  	<br>

			<div class="row">

					<div class="col-md-6 col-sm-6 col-xs-12"  >
          		   		<label for="fname" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Supervisor</span></label>

            			<input type="text" name="fname" id="fname" class="form-control" placeholder="Supervisor">			
	    			</div>


	    			<div class="col-md-6 col-sm-6 col-xs-12" >
                     	<label for="mname" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Expense Count</span></label>

                   		  	<input type="text" name="ecount" id="ecount" class="form-control" placeholder="Expense Count">
       		  		</div>

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
    
    while(c2<=ec)
    { 
      
        proparr.push("'#prop"+c2+"'");
        
       
        c2++;
       
    }

    var propid=new Array();
    
    c2=0;
    while(c2<ec)
    {
         
        propid.push(proparr[c2]);
         alert("l1");
       
        if(c2==ec)
        {
          break;
        }
        c2++;
        
    }

 alert("OUT");

    c2=0;

    while(c2<ec)
    {
        var siteid=$('#siteid').val();
        var propfinal=$(propid[c2]).val();
        var data={'siteid':siteid,'property':propfinal};
     
        alert("dsfd");
        c2++;
       
    }


    

}


 

</script>




               














                    </div>
                    </div>
                    </body>

	
<?php


  include "footer.php";
?>