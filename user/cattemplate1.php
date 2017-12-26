<?php




include "header.php";




?>
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
    <div class="col-sm-12">
        <div class="white-box p-l-20 p-r-20">
            <h3 class="box-title m-b-0"> </h3>
            <div class="row">
                <div class="col-md-2">
                    <form class="floating-labels ">
                        <div class="form-group m-b-40">
                            <input type="text" class="form-control" id="input1" required><span class="highlight"></span> <span class="bar"></span>
                            <label for="input1" style="color: darkgrey;">Item Description</label>
                        </div>
                    </div>

                <div class="col-md-2">
                    <div class="form-group m-b-40">

                        <select class="form-control p-0" id="input2" required>
                            <option>Quantity</option>
                            <option>1</option>
                        </select><span class="highlight"></span> <span class="bar"></span>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group m-b-40">

                        <select class="form-control p-0" id="input3" required>
                            <option>Rating</option>
                            <option>40Wp</option>
                        </select><span class="highlight"></span> <span class="bar"></span>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group m-b-40">

                        <select class="form-control p-0" id="input4" required>
                            <option>Brand</option>
                            <option>MNRE Approved</option>
                        </select><span class="highlight"></span> <span class="bar"></span>
                    </div>
                </div>


            </div>

            <div class="row">
                <div class="col-md-2">
                        <div class="form-group m-b-40">
                            <form class="floating-labels ">
                            <input type="text" class="form-control" id="input5" required><span class="highlight"></span> <span class="bar"></span>
                            <label for="input5" style="color: darkgrey;">Item Description</label>
                        </div>
                </div>

            <div class="col-md-2">
                <div class="form-group m-b-40">

                    <select class="form-control p-0" id="input6" required>
                        <option>Quantity</option>
                        <option>1</option>
                    </select><span class="highlight"></span> <span class="bar"></span>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group m-b-40">

                    <select class="form-control p-0" id="input7" required>
                        <option>Rating</option>
                        <option>9 Watt</option>
                    </select><span class="highlight"></span> <span class="bar"></span>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group m-b-40">

                    <select class="form-control p-0" id="input8" required>
                        <option>Brand</option>
                        <option>photonics</option>
                    </select><span class="highlight"></span> <span class="bar"></span>
                </div>
            </div>


        </div>



            <div class="row">
                <div class="col-md-2">
                    <form class="floating-labels ">
                        <div class="form-group m-b-40">
                            <input type="text" class="form-control" id="input9" required><span class="highlight"></span> <span class="bar"></span>
                            <label for="input9" style="color: darkgrey;">Item Description</label>
                        </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group m-b-40">

                        <select class="form-control p-0" id="input10" required>
                            <option>Quantity</option>
                            <option>1</option>
                        </select><span class="highlight"></span> <span class="bar"></span>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group m-b-40">

                        <select class="form-control p-0" id="input11" required>
                            <option>Rating</option>
                            <option>12V, 17Ah</option>
                        </select><span class="highlight"></span> <span class="bar"></span>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group m-b-40">

                        <select class="form-control p-0" id="input12" required>
                            <option>Brand</option>
                            <option>Exide</option>
                            <option>Luminious</option>
                        </select><span class="highlight"></span> <span class="bar"></span>
                    </div>
                </div>


            </div>
            <div class="row">
                <div class="col-md-2">
                    <form class="floating-labels ">
                        <div class="form-group m-b-40">
                            <input type="text" class="form-control" id="input13" required><span class="highlight"></span> <span class="bar"></span>
                            <label for="input13" style="color: darkgrey;">Item Description</label>
                        </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group m-b-40">

                        <select class="form-control p-0" id="input14" required>
                            <option>Quantity</option>
                            <option>As Applicable</option>
                        </select><span class="highlight"></span> <span class="bar"></span>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group m-b-40">

                        <select class="form-control p-0" id="input15" required>
                            <option>Rating</option>
                            <option>As Applicable</option>
                        </select><span class="highlight"></span> <span class="bar"></span>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group m-b-40">

                        <select class="form-control p-0" id="input16" required>
                            <option>Brand</option>
                            <option>Ploycab</option>
                        </select><span class="highlight"></span> <span class="bar"></span>
                    </div>
                </div>


            </div>
            <div class="row">
                <div class="col-md-2">
                    <form class="floating-labels ">
                        <div class="form-group m-b-40">
                            <input type="text" class="form-control" id="input17" required><span class="highlight"></span> <span class="bar"></span>
                            <label for="input17" style="color: darkgrey;">Item Description</label>
                        </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group m-b-40">

                        <select class="form-control p-0" id="input18" required>
                            <option>Quantity</option>
                            <option>As Applicable</option>
                        </select><span class="highlight"></span> <span class="bar"></span>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group m-b-40">

                        <select class="form-control p-0" id="input19" required>
                            <option>Rating</option>
                            <option>As Applicable</option>
                        </select><span class="highlight"></span> <span class="bar"></span>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group m-b-40">

                        <select class="form-control p-0" id="input20" required>
                            <option>ISI</option>
                        </select><span class="highlight"></span> <span class="bar"></span>
                    </div>
                </div>


            </div>

                    </div>

        </div>
    </div>
</div>

<br><br><br>

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