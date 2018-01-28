<?php
ob_start ();
session_start();
$login_message = " ";
if (require 'connect.php')
{
    if ( isset ( $_SESSION [ 'username' ] ) === true )
    {
        $login_message = " You're already logged in " ;
        header('Location: user/index.php');

    }
    if ( ( isset ( $_POST [ 'username' ] )) && ( isset ( $_POST [ 'password' ] )) && !( isset ( $_SESSION [ 'username' ] )) )
    {
        $username = $_POST [ 'username' ];
        $password = $_POST [ 'password' ] ;

        if ( !( empty ( $username ) ) && !( empty ( $password ) )   )
        {
            $checkuserlogin = $conn -> prepare ( 'SELECT password FROM addemployee WHERE username = ? OR email=?' ) ;
            $checkuserlogin -> execute ( array ( $username,$username) ) ;
            $loginarray = $checkuserlogin -> fetch ( ) ;
            if ( $password == $loginarray [ 'password' ] ) {
                if (($_SESSION ['username'] = $loginarray ['username'])) {
                    $login_message = "Logging You in...";

                    if($loginarray [ 'asd' ]==1)
                    {
                        header ( "Location: user/index.php" ) ;

                    }
                    else
                    {
                        header ( "Location: php/login.php" ) ;
                    }

                }


            }
            elseif (( $_SESSION [ 'username' ] = $loginarray [ 'username' ] ) && $password != $loginarray [ 'password' ])
            {
                $login_message = "Invalid Password" ;

            }
            else
            {

                $login_message = "your ac has been disabled<br/>";
            }

        }
        else $login_message = "invalid credentials" ;
    }


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Ample Admin Template - The Ultimate Multipurpose admin template</title>
    <!-- Bootstrap Core CSS -->
    <link href="user/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="user/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="user/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="user/css/colors/blue.css" id="theme"  rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Preloader -->
<div class="preloader">
    <div class="cssload-speeding-wheel"></div>
</div>
<section id="wrapper" class="login-register">
    <div class="login-box login-sidebar">
        <div class="white-box">
            <form class="form-horizontal form-material" id="loginform" action="" method="post">
                <a href="javascript:void(0)" class="text-center db"><img src=" " alt="" /><br/><img src="" alt="" /></a>

                <div class="form-group m-t-40">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" required="" placeholder="Username" name="username" id="username">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control" type="password" required="" placeholder="Password" name="password" id="password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <div class="checkbox checkbox-primary pull-left p-t-0">
                            <input id="checkbox-signup" type="checkbox">
                            <label for="checkbox-signup"> Remember me </label>
                        </div>
                        <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> Forgot password?</a> </div>
                </div>
                <div class="form-group text-center m-t-20">
                    <div class="col-xs-12">
                        <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                        <div class="social"><a href="javascript:void(0)" class="btn  btn-facebook" data-toggle="tooltip"  title="Login with Facebook"> <i aria-hidden="true" class="fa fa-facebook"></i> </a> <a href="javascript:void(0)" class="btn btn-googleplus" data-toggle="tooltip"  title="Login with Google"> <i aria-hidden="true" class="fa fa-google-plus"></i> </a> </div>
                    </div>
                </div>
                <div class="form-group m-b-0">
                    <div class="col-sm-12 text-center">
                        <p>Don't have an account? <a href="register2.html" class="text-primary m-l-5"><b>Sign Up</b></a></p>
                    </div>
                </div>
            </form>
            <form class="form-horizontal" id="recoverform" action="index.html">
                <div class="form-group ">
                    <div class="col-xs-12">
                        <h3>Recover Password</h3>
                        <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
                    </div>
                </div>
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" required="" placeholder="Email">
                    </div>
                </div>
                <div class="form-group text-center m-t-20">
                    <div class="col-xs-12">
                        <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
                    </div>
                </div>



            </form>

        </div>
    </div>

</section>
<!-- jQuery -->
<script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="user/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>

<!--slimscroll JavaScript -->
<script src="user/js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="user/js/waves.js"></script>
<!-- Custom Theme JavaScript -->
<script src="user/js/custom.min.js"></script>
<!--Style Switcher -->
<script src="plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>
</html>

