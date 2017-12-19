<?php




    include "header.php";




?>


<style>
    table {

        table-layout:fixed;
        margin:auto;
    }

    thead, tfoot {

        display:table;
        width:100%;


    }
    tbody {
        height:150px;
        overflow:auto;
        overflow-x:hidden;
        display:block;
        width:100%;
    }
    tbody tr {
        display:table;
        width:100%;
        table-layout:fixed;
    }

    thead tr{
        display:table;
        width:100%;
        table-layout:fixed;

    }
</style>
    <title>index</title>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">






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
            <div class="col-sm-6">
                <div class="table-responsive">
                    <div class="table-responsive">
                        <table class="table color-bordered-table red-bordered-table" style="background-color: white;">
                            <thead>

                            <tr align='center' >
                                <th align='center' style="padding-left:15%">ID</th>
                                <th align='center' style="padding-left:7%">Customer Name</th>
                                <th align='center' style="padding-left:4%">Contact Number</th>


                            </tr>

                            </thead>


                            <tbody>


                            <?php



                            require("../php/connect.php");

                            $query = "SELECT * FROM user WHERE status=3";

                            if($result=$conn->query($query))
                            {
                                while ($row=$result->fetch_array())
                                {

                                    $reqid=$row['id'];
                                    echo "<tr align='center'>";
                                    echo "<td>".$row['username']."</td>";
                                    echo "<td>".$row['firstname'].$row['lastname']."</td>";
                                    echo "<td>".$row['mobile']."</td>";
                                    echo "</tr>";


                                }
                            }
                            ?>




                            </tbody>
                        </table>

                        <br>

                        <br>
                    </div>
                </div>
            </div>




        <div class="col-sm-6">
            <div class="table-responsive">
                <div class="table-responsive">
                    <table class="table color-bordered-table purple-bordered-table" style="background-color: white">
                        <thead>

                        <tr align='center'>
                            <th align='center' style="padding-left:15%">ID</th>
                            <th align='center' style="padding-left:7%">Customer Name</th>
                            <th align='center' style="padding-left:4%">Contact Number</th>


                        </tr>

                        </thead>


                        <tbody>


                        <?php



                        require("../php/connect.php");

                        $query = "SELECT * FROM user WHERE status=1";

                        if($result=$conn->query($query))
                        {
                            while ($row=$result->fetch_array())
                            {

                                $reqid=$row['id'];
                                echo "<tr align='center'>";
                                echo "<td>".$row['username']."</td>";
                                echo "<td>".$row['firstname'].$row['lastname']."</td>";
                                echo "<td>".$row['mobile']."</td>";
                                echo "</tr>";


                            }
                        }
                        ?>




                        </tbody>
                    </table>

                    <br>

                    <br>
                </div>
            </div>
        </div>

    </div>




<br>

<br>
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
                $('.mydTable').DataTable();
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






