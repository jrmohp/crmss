
<?php




include "header.php";

?>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="panel panel-default">
        <div class="panel-heading"></div>
        <div class="panel-wrapper collapse in">
            <div class="panel-body">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"></div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <div class="row" id="body2">



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




                                </div>


                                <!-- /row -->
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="white-box">
                                            <h3 class="box-title m-b-0">Data Table</h3>
                                            <p class="text-muted m-b-30">Data table example</p>
                                            <div class="table-responsive">
                                                <table id="myTable" class="table table-striped">
                                                    <thead>

                                                    <tr align='center'>
                                                        <th align='center'>Employee ID</th>
                                                        <th align='center'>Username</th>
                                                        <th align='center'>Employee Name</th>
                                                        <th align='center'>Father's Name</th>
                                                        <th align='center'>Mother's Name</th>
                                                        <th align='center'>Gender</th>
                                                        <th align='center'>Date Of Birth</th>
                                                        <th align='center'>Blood group</th>
                                                        <th align='center'>Identification mark</th>
                                                        <th align='center'>Permanent Address</th>
                                                        <th align='center'>Temporary Address</th>
                                                        <th align='center'>Aadhar card No.</th>
                                                        <th align='center'>Pan Card No.</th>
                                                        <th align='center'>EPF No.</th>
                                                        <th align='center'>Experience</th>
                                                        <th align='center'>Bank Account No.</th>
                                                        <th align='center'>Bank IFSC code</th>
                                                        <th align='center'>Contact No.</th>
                                                        <th align='center'>Alternate Contact No.</th>
                                                        <th align='center'>Email ID</th>
                                                        <th align='center'>Alternate Email ID</th>
                                                        <th align='center'>Work Phone no.</th>
                                                        <th align='center'>Work Email ID</th>




                                                    </tr>

                                                    </thead>
                                                    <tbody>




                                                    <?php

                                                    require("../php/connect.php");

                                                    $query = "SELECT * FROM addemployee";



                                                    if($result=$conn->query($query))
                                                    {
                                                        while ($row=$result->fetch_array())
                                                        {

                                                            echo "<tr align='center'>";

                                                            echo "<td>".$row['empid']."</td>";
                                                            echo "<td>".$row['username']."</td>";
                                                            echo "<td>".$row['fname']." ".$row['mname']." ".$row['lname']."</td>";
                                                            echo "<td>".$row['fn']."</td>";
                                                            echo "<td>".$row['mn']."</td>";

                                                            echo "<td>".$row['gender']."</td>";
                                                            echo "<td>".$row['dob']."</td>";
                                                            echo "<td>".$row['bg']."</td>";
                                                            echo "<td>".$row['im']."</td>";

                                                            echo "<td>".$row['pa']."</td>";
                                                            echo "<td>".$row['ta']."</td>";
                                                            echo "<td>".$row['acard']."</td>";
                                                            echo "<td>".$row['pcard']."</td>";
                                                            echo "<td>".$row['epf']."</td>";
                                                            echo "<td>".$row['exp']."</td>";
                                                            echo "<td>".$row['accno']."</td>";
                                                            echo "<td>".$row['ifsc']."</td>";
                                                            echo "<td>".$row['cno']."</td>";
                                                            echo "<td>".$row['altcno']."</td>";
                                                            echo "<td>".$row['email']."</td>";
                                                            echo "<td>".$row['altemail']."</td>";
                                                            echo "<td>".$row['wphno']."</td>";
                                                            echo "<td>".$row['wemail']."</td>";

                                                            echo "</tr>";

                                                        }
                                                    }
                                                    ?>




                                                    </tbody>

                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>





<!-- /.container-fluid -->
<footer class="footer text-center"> &copy Smart Solar</footer>

<!-- /#page-wrapper -->

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
<script src="../plugins/bower_components/datatables/jquery.dataTables.min.js"></script>
<!-- start - This is for export functionality only -->
<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
<!-- end - This is for export functionality only -->
<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
</script>
<!--Style Switcher -->
<script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>





