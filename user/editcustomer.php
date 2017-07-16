<?php


  include "header.php";



  $editid=$_GET['id'];





   require("../php/connect.php");

                                        $query = "SELECT * FROM user WHERE id=$editid"; 

                                          $result=$conn->query($query))
                                              
                                        ?>

?>




 
<!DOCTYPE html>
<html>
<head>
  <title>Edit Customer | Smart Solar  </title>
</head>
<body>

  <div class="row" id="body2">
            <div class="col-md-12 col-sm-12 col-xs-12">

            <div class="row">
<center>
              <div class="col-md-8 col-xs-12 " style="float: none; margin: 0 auto;">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tell Us Something About Yourself ! </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        
                        
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left input_mask" onsubmit="return false" method="post">

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" name="firstname" class="form-control has-feedback-left" id="firstname" placeholder="First Name" required="required" value="<?php echo $row['username'];?>">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true" style="color:lightgreen"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" name="lastname" class="form-control  has-feedback-left" id="lastname" placeholder="Last Name" required="required">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"  style="color:lightgreen"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" name="email" class="form-control has-feedback-left" id="email" placeholder="Email" onkeyup="checkemail()">
                        <span class="fa fa-envelope form-control-feedback left" aria-hidden="true" style="color:lightgreen"></span>
                        <span id="email_status" style="color: red"> </span> 
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" name="phone" class="form-control has-feedback-left " id="phone" placeholder="Phone" required="true"> 
                        <span class="fa fa-phone form-control-feedback left" aria-hidden="true" style="color:lightgreen"></span>
                      </div>

                      <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" name="address" class="form-control has-feedback-left " id="address" placeholder="Address" required="true">
                        <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true" style="color:lightgreen"></span>
                      </div>

                       <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                       
                       <select name="city" class="form-control" required="true">
                         
                         <option disabled="true" selected="true"></option>
                         <option>Others</option>
                         <option> Agastinuagan  </option>
<option>  Anandpur  </option>
<option>  Anjira  </option>
<option>  Anugul (Angul)  </option>
<option>  Anugul (Angul)  </option>
<option>  Arjyapalli  </option>
<option>  Asika </option>
<option>  Athagad </option>
<option>  Athmallik </option>
<option>  Badagada  </option>
<option>  Badakodanda </option>
<option>  Badamba (Nizigarh)  </option>
<option>  Badmal  </option>
<option>  Balagoda (Bolani) </option>
<option>  Balangir  </option>
<option>  Balangir  </option>
<option>  Baleshwar (Balasore)  </option>
<option>  Baleshwar (Balasore)  </option>
<option>  Baliguda  </option>
<option>  Balimela  </option>
<option>  Balipatapur </option>
<option>  Balugaon  </option>
<option>  Banaigarh </option>
<option>  Banapur </option>
<option>  Bandhbahal  </option>
<option>  Bangomunda  </option>
<option>  Banki </option>
<option>  Barapali  </option>
<option>  Barbil  </option>
<option>  Bardol  </option>
<option>  Bargarh </option>
<option>  Bargarh </option>
<option>  Baripada  </option>
<option>  Basudebpur  </option>
<option>  Baudh (Boudh) </option>
<option>  Baudhgarh (Boudh) </option>
<option>  Belagachhia </option>
<option>  Bellaguntha (Belaguntha)  </option>
<option>  Belpahar  </option>
<option>  Bhabinipur  </option>
<option>  Bhadrak </option>
<option>  Bhadrak </option>
<option>  Bhakarsahi  </option>
<option>  Bhanjanagar </option>
<option>  Bhapur  </option>
<option>  Bhatli  </option>
<option>  Bhawanipatna  </option>
<option>  Bhuban  </option>
<option>  Bhubaneswar </option>
<option>  Bijepur </option>
<option>  Binika  </option>
<option>  Biramitrapur  </option>
<option>  Birapratappur </option>
<option>  Bishamakatak (Bissam Cuttack) </option>
<option>  Borigam </option>
<option>  Boriguma (Borigumma)  </option>
<option>  Brahmabarada  </option>
<option>  Brahmapur (Berhampur) </option>
<option>  Brajarajnagar </option>
<option>  Budhapanka  </option>
<option>  Buguda  </option>
<option>  Bundia  </option>
<option>  Burla </option>
<option>  Byasanagar  </option>
<option>  Champua </option>
<option>  Chandapur </option>
<option>  Chandili  </option>
<option>  Charibatia  </option>
<option>  Chhatrapur  </option>
<option>  Chikiti </option>
<option>  Chitrakonda </option>
<option>  Choudwar  </option>
<option>  Cuttack </option>
<option>  Cuttack </option>
<option>  Dadhapatna  </option>
<option>  Daitari </option>
<option>  Damanjodi </option>
<option>  Danara  </option>
<option>  Daringbadi  </option>
<option>  Debagarh  </option>
<option>  Debagarh  </option>
<option>  Dera Colliery Township  </option>
<option>  Dhamanagar  </option>
<option>  Dhenkanal </option>
<option>  Dhenkanal </option>
<option>  Digapahandi </option>
<option>  Dungamal  </option>
<option>  Erei  </option>
<option>  Fertilizer Corporation of India Township (F.C.I. Township)  </option>
<option>  G. Udayagiri  </option>
<option>  Gajapati  </option>
<option>  Ganjam  </option>
<option>  Ganjam  </option>
<option>  Ghantapada  </option>
<option>  Godiputamatiapara </option>
<option>  Golabandha  </option>
<option>  Gopalpur  </option>
<option>  Gotamara  </option>
<option>  Gudari  </option>
<option>  Gunupur </option>
<option>  Hatibandha  </option>
<option>  Hinjilicut  </option>
<option>  Hirakud </option>
<option>  Indipur </option>
<option>  Itamati </option>
<option>  Jagatsinghapur  </option>
<option>  Jagatsinghapur(Jagatsinghpur) </option>
<option>  Jajanga </option>
<option>  Jajapur </option>
<option>  Jajapur (Jajpur)  </option>
<option>  Jalda </option>
<option>  Jaleshwar (Jaleswar)  </option>
<option>  Jashipur  </option>
<option>  Jatani  </option>
<option>  Jeypur (Jeypore)  </option>
<option>  Jharsuguda  </option>
<option>  Jharsuguda  </option>
<option>  Jhumpura  </option>
<option>  Joda  </option>
<option>  Jorada (Bada) </option>
<option>  Junagarh  </option>
<option>  Kabatabandha  </option>
<option>  Kabisurjyanagar(Kabisuryanagar) </option>
<option>  Kaipadar  </option>
<option>  Kalahandi </option>
<option>  Kalarangiata  </option>
<option>  Kaliapani </option>
<option>  Kalyanasingpur  </option>
<option>  Kamakshyanagar  </option>
<option>  Kandasar  </option>
<option>  Kandhamal </option>
<option>  Kanheipur </option>
<option>  Kantabanji (Kantabanjhi)  </option>
<option>  Kantilo </option>
<option>  Karanjia  </option>
<option>  Kashinagar  </option>
<option>  Kendrapara  </option>
<option>  Kendrapara  </option>
<option>  Kendujhar </option>
<option>  Kendujhar </option>
<option>  Kesinga </option>
<option>  Khaliapali  </option>
<option>  Khalikote (Khallikote)  </option>
<option>  Khandapada  </option>
<option>  Khariar </option>
<option>  Khariar Road  </option>
<option>  Khatiguda </option>
<option>  Khordha </option>
<option>  Khordha </option>
<option>  Kochinda (Kuchinda) </option>
<option>  Kodala  </option>
<option>  Koida </option>
<option>  Konark  </option>
<option>  Koraput </option>
<option>  Koraput </option>
<option>  Kotpad  </option>
<option>  Krushnanandapur </option>
<option>  Kuanrmunda  </option>
<option>  Kukudakhandi  </option>
<option>  Kulad </option>
<option>  Kullada </option>
<option>  Kunjabangarh  </option>
<option>  Kurumuli  </option>
<option>  Lalsingi  </option>
<option>  Lathikata </option>
<option>  Lochapada </option>
<option>  Loisinga  </option>
<option>  Madanpur Rampur </option>
<option>  Majhihara </option>
<option>  Makundapur  </option>
<option>  Malkangiri  </option>
<option>  Malkangiri  </option>
<option>  Mayurbhanj  </option>
<option>  Mohana  </option>
<option>  Mukhiguda </option>
<option>  Mundamarai  </option>
<option>  Nabarangapur (Nabarangpur)  </option>
<option>  Nabarangapur(Nabarangpur) </option>
<option>  Nalco </option>
<option>  Nayagarh  </option>
<option>  Nayagarh  </option>
<option>  Nilagiri  </option>
<option>  Nimapada  </option>
<option>  Nuahata </option>
<option>  Nuapada </option>
<option>  Nuapatna  </option>
<option>  O.C.L. Industrial Township  </option>
<option>  Odagaon </option>
<option>  Padmapur  </option>
<option>  Palalahada  </option>
<option>  Palurgada </option>
<option>  Panposh </option>
<option>  Papadahandi </option>
<option>  Paradip </option>
<option>  Paradipgarh </option>
<option>  Paralakhemundi  </option>
<option>  Pathar  </option>
<option>  Patnagarh </option>
<option>  Patrapur  </option>
<option>  Pattamundai </option>
<option>  Phulabani (Phulbani)  </option>
<option>  Pipili  </option>
<option>  Pitala  </option>
<option>  Polasara  </option>
<option>  Pratapsasan </option>
<option>  Puri  </option>
<option>  Puri  </option>
<option>  Purusottampur </option>
<option>  R. Udayagiri  </option>
<option>  Raighar </option>
<option>  Rairangpur  </option>
<option>  Rajagangapur(Rajgangpur)  </option>
<option>  Rajasunakhala </option>
<option>  Rambha  </option>
<option>  Ramgarh </option>
<option>  Ranapurgada </option>
<option>  Raurkela (Rourkela) </option>
<option>  Raurkela Industrial Township  </option>
<option>  Rayagada  </option>
<option>  Rayagada  </option>
<option>  Rayagada  </option>
<option>  Redhakhol (Rairakhol) </option>
<option>  Remuna  </option>
<option>  Rengali </option>
<option>  Rengali Dam Project Township  </option>
<option>  Sambalpur </option>
<option>  Sambalpur </option>
<option>  Saranga </option>
<option>  Sayadpur  </option>
<option>  Sheragada </option>
<option>  Sohela  </option>
<option>  Sonapur (Sonepur) </option>
<option>  Soro  </option>
<option>  Subalaya  </option>
<option>  Subarnapur  </option>
<option>  Sunabeda  </option>
<option>  Sundargarh (Sundergarh) </option>
<option>  Sundargarh (Sundergarh) </option>
<option>  Surada  </option>
<option>  Surala  </option>
<option>  Suvani  </option>
<option>  Talcher </option>
<option>  Talcher Thermal Power Station Township (T.T.P.S. Township)  </option>
<option>  Tangi </option>
                       </select> 
                       
                      </div>




                       
                      <div class="form-group">
                        
                      </div>
                      <div class="ln_solid"></div>
                        <div class="x_title">
                    <h2>Tell Us About Your Usage ! </h2>

                    <div class="form-group">



                    <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left input_mask">


                    <div class="col-md-6 col-sm-6 col-xs-12" style="margin-bottom: 5px;">
                          <div id="gender" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-success" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="type" value="Domestic" required="true"> &nbsp; Domestic &nbsp;
                            </label>
                            <label class="btn btn-success" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="type" value="Commercial"> Commercial
                            </label>
                            <label class="btn btn-success" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="type" value="Industrial"> &nbsp; Industrial &nbsp;
                            </label>
                          </div>
                        </div>
                      
                     
                      <div class="col-md-6 col-sm-6 col-xs-12" >
                          <div id="gender" class="btn-group" data-toggle="buttons" style="margin-bottom: 35px;">
                            <label class="btn btn-success" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="phase" value="one"> &nbsp; Single Phase &nbsp;
                            </label>
                            <label class="btn btn-success" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="phase" value="three"> Three Phase
                            </label>
                          </div>
                        </div>
                        

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback"  >
                        <input type="text" name="units" class="form-control has-feedback-right has-feedback-left" id="units" placeholder="Units">
                        <span class="form-control-feedback right" aria-hidden="true" style="color:darkgrey">kWh</span>
                         <span class="form-control-feedback left fa fa-lightbulb-o" aria-hidden="true" style="color:lightgreen"></span>
                      </div>
                      

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" name="monthlybill" class="form-control has-feedback-left has-feedback-right " id="monthly bill" placeholder="Monthly Bill">
                        <span class="fa fa-file-text form-control-feedback left" aria-hidden="true" style="color:lightgreen"></span>
                         <span class=" form-control-feedback right" aria-hidden="true" style="color:darkgrey">INR</span>
                      </div>
                         <br>

                       <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" name="contractload" class="form-control has-feedback-left has-feedback-right" id="contract load" placeholder="Contract Load">
                        <span class="fa fa-bolt form-control-feedback left" aria-hidden="true" style="color:lightgreen"></span>
                        <span class="form-control-feedback right" aria-hidden="true" style="color:darkgrey">kW</span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" name="roofarea" class="form-control has-feedback-left has-feedback-right " id="roof area" placeholder="Roof Area">
                        <span class="fa fa-arrows form-control-feedback left" aria-hidden="true" style="color:lightgreen"></span>
                         <span class=" form-control-feedback right" aria-hidden="true" style="color:darkgrey">sq.ft</span>
                      </div>




               
                      



                        <center>
                      <div class="form-group">
                        
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <button type="button" class="btn btn-primary">Cancel</button>
               <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success" id="senddata">Submit</button>
                        </div>
                      </div></center>

                    </form>
                  </div>
                </div>



 <script src="../vendors/jquery/dist/jquery.min.js"></script>
 <script type="text/javascript" src="../js/alertify.js"></script>
 <link rel="stylesheet" href="../css/alertify.core.css" />
  <link rel="stylesheet" href="../css/alertify.bootstrap.css" />
<script type="text/javascript">

 
    $("#senddata").on("click",regc);


        function regc()
        {
           

        var firstname=$('#firstname').val();
        var lastname=$('#lastname').val();
        var email=$('#email').val();
        var phone=$('#phone').val();
        var address=$('#address').val();
        var city=$('#city').val();
        var gender=$('[name="type"]').val();
          var phase=$('[name="phase"]').val();
        var units=$('#units').val();
        var monthlybill=$('#monthlybill').val();
        var contractload=$('#contractload').val();
        var roofarea=$('#roofarea').val();
       
       


        var data={'firstname':firstname,'lastname':lastname,'email':email,'phone':phone,'address':address,'city':city,'gender':gender,'units':units,'monthlybill':monthlybill,'contractload':contractload,'roofarea':roofarea,'phase':phase};

        
        
        
        $.post('../php/custregcontroller.php',data,function(info){
            if(info!=0)
            {
               
                    alertify.alert("Thank You  "+firstname+"  for registering with us.\nWe will get back to you shortly.\nPlease Note Your Smart Solar ID:"+info+" for future reference");                  
        

            }
            else if(info==0)
            {
               alert("aila helani");
            $("#querymsg").addClass('alert alert-danger');
              $('#querymsg').fadeIn();
            $("#querymsg").html("Mail Not Sent,Contact 7978555567 ");
             $('#querymsg').delay(2000).fadeOut();
            
            }
        });


    }











   
          function checkemail()
{
 var email=document.getElementById( "email" ).value;
  
 if(email)
 {
  $.ajax({
  type: 'post',
  url: '../php/checkemail.php',
  data: {
   user_email:email,
  },
  success: function (response) {
   $( '#email_status' ).html(response);
   
      $(':input[type="submit"]').prop('disabled', true);

  
   if(response=="") 
   {
    $(':input[type="submit"]').prop('disabled', false);
    return true;


   }
   else
   {

    return false; 

   }
  }
  });
 }
 else
 {
  $( '#email_status' ).html("");
  $(':input[type="submit"]').prop('disabled', false);
  return false;
 }
}

</script>\

</div>
                    




               














                    </div>
                    </div>
                    </body>

  
<?php


  include "footer.php";
?>