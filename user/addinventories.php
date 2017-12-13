<?php

 


    include "header.php";

?>



<div class="row">

	
             <form method="post" onsubmit="return false" action="../php/addinvcontroller.php">
                   
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12" >
                      <label for="icount" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Inventory Count</span></label>

                          <input type="text" name="icount" id="icount" class="form-control" placeholder="Inventory Count">
                </div>
               


                <br>

      <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                    <button  class="btn btn-success col-md-12 "  align='center' id="next" onclick="inventc()">Next</button>
                    </div>
          `

                    
            </div>

            <div id="ddata">
              
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12">
              <button  class="btn btn-success col-md-12 "  align='center' id="next" onclick="addsite()">Submit</button>
          </div>

            <script type="text/javascript">
  


function inventc()
{

  
  $('#ddata').empty();
 var count=$('#icount').val();
  
var c=1;
var s1="<br><div class='row'>";
var s2="<div class='col-md-5 col-lg-5 col-sm-5 col-xs-12' ><input type='text' name='name";
var s3="' id='name";
var s4="' class='form-control' placeholder='Inventory name'></div><div class='col-md-5 col-lg-5 col-sm-5 col-xs-12' ><input type='text' name='quantity";
var s5="' id='quantity";
var s6="' class='form-control' placeholder='Inventory Quantity'></div></div>";



while(c<=count)
{
  var total=s1+s2+c+s3+c+s4+c+s5+c+s6;

 


  $('#ddata').append(total);
  c++;

}

}

function addsite()
{ 
    var ec=$('#icount').val();
    
    var c2=1;
    
    var invnamearr = new Array();
    var invquantarr = new Array();
    
    while(c2<=ec)
    { 
      
        invnamearr.push("#name"+c2);
        invquantarr.push("#quantity"+c2);
        c2++;
       
    }

    
    var invnameid=new Array();
    var invquantid=new Array();
    c2=0;
    while(c2<ec)
    {
         
        
        invnameid.push(invnamearr[c2]);
        invquantid.push(invquantarr[c2]);

       
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

        
        

        var invnamefinal=$(invnameid[c2]).val();

        var invquantfinal=$(invquantid[c2]).val();
        
        var data={'name':invnamefinal,'quantity':invquantfinal};
        
        



        $.post('../php/addinvcontroller.php',data,function(info){
            
          alert(info);

        });

     c2++;
       
       
    }

    alert("Inventories Added"); 

}

</script>

</form>


<?php


    include "footer.php";


?>