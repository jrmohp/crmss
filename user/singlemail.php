<?php


  include "header.php";
?>




 
<!DOCTYPE html>
<html>
<head>
  <title>Add Faculty | Mega ATV Championship  </title>
</head>
<body>

    <div class="row" id="body2">
            <div class="col-md-12 col-sm-12 col-xs-12">
            
            
                    <form data-parsley-validate method="post" onsubmit="return false">


                    <input type="hidden" name="emailauth" value="sikujyoti" id="authvalue">
                    <input type="hidden" name="fromname" value="JRM"  id="fromname">
                        <div id="querymsg"></div>

                    <div class="row">
                        
                        <label class="control-label col-sm-1 align-middle" for="mfrom" style="margin:-5px"><h2><span class="label label-info">From</span></h2></label>
                        <div class="col-md-5 col-sm-6 col-xs-10">

                        <input type="text"  class="form-control"  name="mfrom" placeholder="From" id="mfrom" readonly="true" value="jrm@smartsolar.co.in">
                            
                        </div>

                        <label class="control-label col-sm-1 align-middle" for="mto" style="margin:-5px"><h2><span class="label label-info">&nbspTo&nbsp</span></h2></label>
                        <div class="col-md-5 col-sm-5 col-xs-10">
                            
                        <input type="text"  class="form-control"  name="mto" id="mto" placeholder="To" readonly="true" value="iterjrm@gmail.com">
                            
                        </div>
                        

                    </div>
                    <br>
                    <br>

                    <div class="row">


                        <label class="control-label col-sm-1 align-middle" for="subject" style="margin:-5px"><h2><span class="label label-info">Subject</span></h2></label>

                        <div class="col-md-11 col-sm-11 col-xs-11">
                            
                        <input type="text"  class="form-control"  name="subject" id="subject" placeholder="Subject" data-parsley-required>
                            
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row">

                      <div class="col-md-12 col-sm-12 col-xs-12">
                      <label class="control-label col-sm-1 align-middle" for="subject" style="margin:-5px"><h2><span class="label label-info">Body</span></h2></label>
                      <br>
                        
                      <textarea  class="form-control"  name="body" id="body" placeholder="Message" rows="15"  data-parsley-required></textarea>

                    </div>
                    </div>

                    <br>


                    <div class="row pull-center" >
                    <div class="col-md-5 col-sm-5 col-xs-5">
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                    <button  class="btn btn-success col-md-4 " type="submit"  id="sendmail">Send</button>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3">
                    </div>
                    </div>
                    </form>
                    </div>
                    </div>
                    </body>
                    



       <script src="../vendors/jquery/dist/jquery.min.js"></script>
<script type="text/javascript">

 
    $("#sendmail").on("click",DB);
 

        function DB()
        {
              



        var mfrom=$('#mfrom').val();
        var mto=$('#mto').val();
        var subject=$('#subject').val();
         var authvalue=$('#authvalue').val();
          var fromname=$('#fromname').val();
        var body=$('#body').val();


        var data={'mfrom':mfrom,'mto':mto,'subject':subject,'body':body,'authvalue':authvalue,'fromname':fromname};

        
        
        
        $.post('../php/singlemailcontroller.php',data,function(info){
            if(info==1)
            {
                    $("#querymsg").addClass('alert alert-success');
                      $('#querymsg').fadeIn();
                    $("#querymsg").html("Mail Sent And Saved To Databse");
                     $('#querymsg').delay(2000).fadeOut();
                    
        

            }
            else
            {
            $("#querymsg").addClass('alert alert-danger');
              $('#querymsg').fadeIn();
            $("#querymsg").html("Mail Not Sent,Contact 7978555567");
             $('#querymsg').delay(2000).fadeOut();
            
            }
        });


    }


        










</script>
    
<?php


  include "footer.php";
?>