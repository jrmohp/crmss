<?php




    include "header.php";

?>



<div class="row">

	
             <form method="post" action="../php/addinvcontroller.php">
                   
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12" >
                      <label for="mname" class="col-md-1 col-sm-1 col-xs-1"><span class="label label-info">Inventory Count</span></label>

                          <input type="text" name="icount" id="icount" class="form-control" placeholder="Inventory Count">
                </div>
               


                <br>

      <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                    <button  class="btn btn-success col-md-12 "  align='center' id="next" onclick="inventc()">Next</button>
                    </div>
          <div class="col-md-12 col-sm-12 col-xs-12">
              <button  class="btn btn-success col-md-12 "  align='center' id="next" onclick="inventc()">Next</button>
          </div>

                    
            </div>

            <div id="ddata">
              
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

</script>

             </form>


<?php


    include "footer.php";


?>