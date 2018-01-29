<?php




include "header.php";

?>

    <div class="row" id="body2">

        <div class="row">
            <center>
                <div class="col-md-11 col-xs-12 " style="float: none; margin: 0 auto;">
                    <div class="x_panel">
                        <div class="x_title">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><i class="ti-settings"></i> Customer Details </div>
                                    <div class="panel-wrapper collapse in">
                                        <div class="panel-body">

                                            <h2>Tell Us Something About Yourself ! </h2>

                                            <div class="x_content">
                                                <br>
                                                <form class="form-horizontal form-label-left input_mask" onsubmit="return false" method="post">

                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <input type="text" name="firstname" class="form-control has-feedback-left" id="firstname" placeholder="First Name" required="required">
                                                        <span class="fa fa-user form-control-feedback left" aria-hidden="true" style="color:lightgreen"></span>

                                                    </div>


                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <input type="text" name="lastname" class="form-control  has-feedback-left" id="lastname" placeholder="Last Name" required="required">
                                                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"  style="color:lightgreen"></span>
                                                    </div>

                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <input type="text" name="email" class="form-control has-feedback-left" id="email" placeholder="Email" onkeyup="checkemail()">
                                                        <span class="fa fa-envelope form-control-feedback left" aria-hidden="true" style="color:#8aee85"></span>
                                                        <span id="email_status" style="color: #ff0406"> </span>
                                                    </div>

                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <input type="text" name="phone" class="form-control has-feedback-left " id="phone" placeholder="Phone" required="true">
                                                        <span class="fa fa-phone form-control-feedback left" aria-hidden="true" style="color:lightgreen"></span>
                                                    </div>

                                                    <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <input type="text" name="address" class="form-control has-feedback-left " id="address" placeholder="Address" >
                                                        <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true" style="color:lightgreen"></span>
                                                    </div>

                                            <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">

                                                <select name="city" class="form-control" required="true" id="city">

                                                    <option disabled="true" selected="true">Select Your City</option>
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


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </center>
        </div>
    </div>





<?php


include "footer.php";


?>