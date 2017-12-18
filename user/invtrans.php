
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



                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading"><i class="fa fa-user"></i> Choose Site Id </div>
                                        <div class="panel-wrapper collapse in">
                                            <div class="panel-body">
                                                <form action="../php/invtranscontroller.php" method="post">

                                                    <select class="form-control" id="siteid" name="siteid" required="true">


                                                        <?php



                                                        $siteids="SELECT  siteid FROM siteinfo";

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

                                                    <br/>

                                                    <input type="date" class="form-control" name="invdate"  required="true">





                            <!-- /row -->
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="white-box">
                                            <h3 class="box-title m-b-0">Inventories Transactions Per Site</h3>
                                            <br>
                                            <div class="table-responsive">
                                                <table id="myTable" class="table table-striped">

                                                    <thead>

                                                    <tr align='center'>


                                                        <th align='center'>Sl No.</th>
                                                        <th align='center'>Inventory Id</th>
                                                        <th align='center'>Name</th>
                                                        <th align='center'>Quantity</th>


                                                    </tr>

                                                    </thead>
                                                    <tbody>








                                                    <?php

                                                    require("../php/connect.php");

                                                    $query = "SELECT * FROM inventories";



                                                    if($result=$conn->query($query))
                                                    {
                                                        while ($row=$result->fetch_array())
                                                        {

                                                            echo "<tr>";

                                                            echo "<td>";
                                                            echo $row['id'];
                                                            echo "</td>";


                                                            echo "<td>";
                                                            echo $row['invid'];
                                                            echo "</td>";

                                                            echo "<td>";
                                                            echo $row['name'];
                                                            echo "</td>";

                                                            echo "<td>";
                                                            echo "<input name='".$row['invid']."'  type='number' min='0' max='".$row['quantity']."'>/"."<span style='font-size:1.3em'>".$row['quantity']."</span></span>";
                                                            echo "</td>";

                                                            echo "</tr>";

                                                        }
                                                    }
                                                    ?>




                                                    </tbody>
                                                </table>

                                        <div class="form-group"> <!-- Submit button -->
                                        <center><input type="submit" class="btn btn-primary " name=""></center>
                                        </div>


                                                </form>

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





