<?php




include "header.php";

?>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">Order Details</div>
            <div class="panel-wrapper collapse in">
                <div class="panel-body">

                                    <div class="row" id="body2">




        <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

        <link href="css/animate.css" rel="stylesheet">

        <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">

        <link href="css/animate.css" rel="stylesheet">

        <link href="css/style.css" rel="stylesheet">

        <link href="css/colors/blue-dark.css" id="theme" rel="stylesheet">

        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>


</div>
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                        <h4 class="page-title">Order Details</h4> </div>
                </div>
                <!-- .row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box p-l-20 p-r-20">
                            <h3 class="box-title m-b-0"> </h3>
                            <div class="row">
                                <div class="col-md-4">
                                    <form class="floating-labels ">
                                        <div class="form-group m-b-40">
                                            <input type="number" class="form-control" id="input1" required><span class="highlight"></span> <span class="bar"></span>
                                            <label for="input1" style="color: darkgrey;">Panel No.</label>
                                        </div>

                                       </div>

                                            </label>
                                
                                               <div class="col-md-5">
                                                <div class="form-group m-b-40">

                                                    <select class="form-control p-0" id="input2" required>
                                                        <option>Panel Capacity</option>
                                                        <option>200watt</option>
                                                        <option>300watt</option>
                                                        <option>400watt</option>
                                                        <option>500watt</option>
                                                    </select><span class="highlight"></span> <span class="bar"></span>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label" style="color: darkgrey">Inverter</label>
                                                    <div class="radio-list">
                                                        <label class="radio-inline p-0">
                                                            <div class="radio radio-info">
                                                                <input type="radio" name="radio1" id="radio1" value="option1">
                                                                <label for="radio1">Yes</label>
                                                            </div>
                                            <label class="radio-inline">
                                                <div class="radio radio-info">
                                                    <input type="radio" name="radio1" id="radio2" value="option2"
                                                   >
                                                    <label for="radio2">No</label>

                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <script>
                                    function yesnoCheck(that) {


                                        var ch=$("input[name='radio1']:checked").val();

                                        if(ch=="Yes")
                                        {
                                            $('#inv').attr("disabled","false");
                                        }
                                        else
                                        {
                                            $('#inv').attr("disabled","true");
                                        }
                                    }
                                </script>



                                <div class="col-md-5">
                                    <div class="form-group m-b-40">

                                        <select class="form-control p-0" id="inv" required disabled="true">
                                            <option>Inverter Model</option>
                                            <option>qww</option>
                                            <option>rte</option>
                                            <option>kdl</option>
                                            <option>hty</option>
                                        </select><span class="highlight"></span> <span class="bar"></span>
                                    </div>
                                </div>


                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="control-label" style="color: darkgrey">Battery</label>
                                        <div class="radio-list">
                                            <label class="radio-inline p-0">
                                                <div class="radio radio-info">
                                                    <input type="radio" name="radio2" id="radio3" value="option3">
                                                    <label for="radio3">Yes</label>
                                                </div>
                                            </label>
                                            <label class="radio-inline">
                                                <div class="radio radio-info">
                                                    <input type="radio" name="radio2" id="radio4" value="option4">
                                                    <label for="radio4">No</label>

                                                </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group m-b-40">

                                        <select class="form-control p-0" id="batt" required disabled="true">
                                            <option>Battery Model</option>
                                            <option>qwwd</option>
                                            <option>rted</option>
                                            <option>kdlf</option>
                                            <option>htys</option>
                                        </select><span class="highlight"></span> <span class="bar"></span>
                                    </div>
                                </div>

                                <script>
                                    function yesnoCheck(that) {


                                        var che=$("input[name='radio2']:checked").val();

                                        if(che=="Yes")
                                        {
                                            $('#batt').attr("disabled","false");
                                        }
                                        else
                                        {
                                            $('#batt').attr("disabled","true");
                                        }
                                    }
                                </script>



                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="control-label" style="color: darkgrey">frame</label>
                                        <div class="radio-list">
                                            <label class="radio-inline p-0">
                                                <div class="radio radio-info">
                                                    <input type="radio" name="radio3" id="radio5" value="option3">
                                                    <label for="radio5">Yes</label>
                                                </div>
                                            </label>
                                            <label class="radio-inline">
                                                <div class="radio radio-info">
                                                    <input type="radio" name="radio3" id="radio6" value="option4">
                                                    <label for="radio6">No</label>

                                                </div>
                                        </div>
                                    </div>
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

            <footer class="footer text-center"> 2017 &copy; smart solar.co.in </footer>

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
    <script src="js/jasny-bootstrap.js"></script>
    <!--Style Switcher -->
    <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>






