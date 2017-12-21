<?php




include "header.php";

?>


<title>Inventories Transactions Per Site</title>


<!-- Bootstrap Core CSS -->
<link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="../plugins/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
<!-- Menu CSS -->
<link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
<!-- animation CSS -->
<link href="css/animate.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="css/style.css" rel="stylesheet">
<!-- color CSS -->
<link href="css/colors/blue-dark.css" id="theme" rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

            <div class="row">
                <div class="col-lg-12">
                    <div class="white-box">
                        <h3 class="box-title">Quotation Table</h3>
                        <p class="text-muted">Just click on word which you want to change and enter</p>
                        <table class="table table-striped table-bordered" id="editable-datatable">
                            <thead>
                            <tr>
                                <th>Sl No.</th>
                                <th>Item Description</th>
                                <th>Product Rating</th>
                                <th>Make</th>
                                <th>Quantity</th>
                                <th>Quantity Unit</th>
                                <th>Unit Price</th>
                                <th>Customer Price</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr id="1">
                                <td>1</td>
                                <td>Solar PV Module</td>
                                <td>315Wp,24V</td>
                                <td>Waaree Solar</td>
                                <td>32</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr id="2">
                                <td>2</td>
                                <td>Solar Inverter</td>
                                <td>3Kva/3000W,24V,4000W PV</td>
                                <td>Flin's Energy</td>
                                <td>1</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr id="3">
                                <td>3</td>
                                <td>Solar Acid Battery</td>
                                <td>150Ah,12V</td>
                                <td>Exide Solar</td>
                                <td>1</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr id="4">
                                <td>4</td>
                                <td>Solar Cable</td>
                                <td>25/6/4 mm</td>
                                <td>Polycab</td>
                                <td>2</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr id="5">
                                <td>5</td>
                                <td>Mounting Structure</td>
                                <td>32mm square pipe,Not & Bolt</td>
                                <td>Galvanized</td>
                                <td>1</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr id="6">
                                <td>6</td>
                                <td>DC MCB</td>
                                <td>63/32/125 amps</td>
                                <td>Schneider/FEEO</td>
                                <td>1</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr id="7">
                                <td>7</td>
                                <td>DC SPD</td>
                                <td>2P 20-40kA,600V DC SPD</td>
                                <td>Schneider/FEEO</td>
                                <td>1</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr id="8">
                                <td>8</td>
                                <td>AC MCB</td>
                                <td>63amps</td>
                                <td>Havells/Legarnd</td>
                                <td>1</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr id="9">
                                <td>9</td>
                                <td>AC SPD</td>
                                <td>2P AC SPD</td>
                                <td>FEEO</td>
                                <td>1</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr id="10">
                                <td>10</td>
                                <td>DB Box</td>
                                <td>8Way</td>
                                <td></td>
                                <td>1</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr id="11">
                                <td>11</td>
                                <td>Earthing Protection Set</td>
                                <td>Earthing Pit,Charcoal,Salt,Spike Rod</td>
                                <td></td>
                                <td>1</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr id="12">
                                <td>12</td>
                                <td>Electrical Access</td>
                                <td>PVC Pipe,Changeover,Lug,Clamp,Tconntecor,,Bend,Cable Tie,MC4 Connector etc</td>
                                <td></td>
                                <td>1</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr id="13">
                                <td>13</td>
                                <td>Parallel Kit</td>
                                <td></td>
                                <td></td>
                                <td>0</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr id="14">
                                <td>14</td>
                                <td>Civil Work</td>
                                <td>Brick,Cement,Sand,Chips,Civil Labour</td>
                                <td></td>
                                <td>0</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr id="15">
                                <td>15</td>
                                <td>Handling & Freight Charges</td>
                                <td></td>
                                <td></td>
                                <td>2</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr id="16">
                                <td>16</td>
                                <td>IOnstallation & Service Charges</td>
                                <td></td>
                                <td></td>
                                <td>1</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>



                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Grand Total Price(including 5% GST)</th>
                                <th></th>

                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <!-- .row -->
            <!-- /.row -->
            <!-- .row -->
            <!-- /.row -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <div class="right-sidebar">
                <div class="slimscrollright">
                    <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                    <div class="r-panel-body">
                        <ul id="themecolors" class="m-t-20">
                            <li><b>With Light sidebar</b></li>
                            <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                            <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                            <li><a href="javascript:void(0)" data-theme="gray" class="yellow-theme">3</a></li>
                            <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme">4</a></li>
                            <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                            <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                            <li><b>With Dark sidebar</b></li>
                            <br/>
                            <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                            <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                            <li><a href="javascript:void(0)" data-theme="gray-dark" class="yellow-dark-theme">9</a></li>
                            <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme working">10</a></li>
                            <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                            <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme">12</a></li>
                        </ul>
                        <ul class="m-t-20 all-demos">
                            <li><b>Choose other demos</b></li>
                        </ul>
                        <ul class="m-t-20 chatonline">
                            <li><b>Chat option</b></li>
                            <li>
                                <a href="javascript:void(0)"><img src="../plugins/images/users/varun.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../plugins/images/users/genu.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../plugins/images/users/ritesh.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../plugins/images/users/arijit.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../plugins/images/users/govinda.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../plugins/images/users/hritik.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../plugins/images/users/john.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../plugins/images/users/pawandeep.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
        <!-- /.container-fluid -->
        <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by themedesigner.in </footer>
    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<!-- jQuery -->
<script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
<!--slimscroll JavaScript -->
<script src="js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="js/waves.js"></script>
<!-- Custom Theme JavaScript -->
<script src="js/custom.min.js"></script>
<!-- Editable -->
<script src="../plugins/bower_components/jquery-datatables-editable/jquery.dataTables.js"></script>
<script src="../plugins/bower_components/datatables/dataTables.bootstrap.js"></script>
<script src="../plugins/bower_components/tiny-editable/mindmup-editabletable.js"></script>
<script src="../plugins/bower_components/tiny-editable/numeric-input-example.js"></script>
<script>
    $('#mainTable').editableTableWidget().numericInputExample().find('td:first').focus();
    $('#editable-datatable').editableTableWidget().numericInputExample().find('td:first').focus();
    $(document).ready(function() {
        $('#editable-datatable').DataTable();
    });
</script>
<!--Style Switcher -->
<script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>
