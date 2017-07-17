<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Smart Solar</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="../images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $name; ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="http://crm.smartsolar.co.in/user/index">Dashboard</a></li>
                      
                    </ul>
                  </li>

                   <li><a><i class="fa fa-users"></i>Customers<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                    
                      <li><a href="http://crm.smartsolar.co.in/user/addcustomer">Add Customer</a></li>
                      <li><a href="http://crm.smartsolar.co.in/user/viewcustomer">View Customers</a></li>
                       <li><a href="http://crm.smartsolar.co.in/user/editcustomerselect">Edit Customer</a></li>
                      <li><a href="http://crm.smartsolar.co.in/user/singlemail">Send Mail To Customer</a></li>
                    </ul>
                  </li>
                  
                  <li><a><i class="fa fa-user"></i>Employee <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                    
                      <li><a href="http://crm.smartsolar.co.in/user/addemployee">Add Employee</a></li>
                      <li><a href="http://crm.smartsolar.co.in/user/viewemployee">view Employee</a></li>
                      <li><a href="http://crm.smartsolar.co.in/user/editemployeeselect">Edit Employee</a></li>
                     
                    </ul>
                  </li>
                    
                 
                  <li><a><i class="fa fa-edit"></i>Site Management<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="http://crm.smartsolar.co.in/user/addsite">Add Sites</a></li>
                      <li><a href="http://crm.smartsolar.co.in/user/viewsites">View Sites</a></li>
                      <li><a href="http://crm.smartsolar.co.in/user/addexpenses">Add Expense To Site</a></li>
                      
                    </ul>
                  </li>

                  <li><a><i class="fa fa-edit"></i>Franchise Management<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="http://crm.smartsolar.co.in/user/addfranchise">Add Franchise</a></li>
                      <li><a href="http://crm.smartsolar.co.in/user/viewfranchise">View Franchise</a></li>
                      <li><a href="http://crm.smartsolar.co.in/user/editfranchise">Edit Franchise</a></li>
                      <li><a href="http://crm.smartsolar.co.in/user/franchisebilling">Billing</a></li>
                      <li><a href="http://crm.smartsolar.co.in/user/assigntofranchise">Assign Project</a></li>
                      
                      
                    </ul>
                  </li>
                  
                  
              </div>
             
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="../logout.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="../images/img.jpg" alt=""><?php echo $name; ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                   
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="../logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">1</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="../images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span><?php echo $name;  ?></span>
                          <span class="time"></span>
                        </span>
                        <span class="message">
                          Signed up for Mega ATV Championship

                        </span>
                      </a>
                    </li>
                    
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->





            </div>


        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-users"></i> Team Members</span>
              <div class="count"><?php echo $teammem ?></div>
              <span class="count_bottom"><i class="green"> </i>Out Of 30</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-users"> </i> Faculty Members</span>
              <div class="count"><?php echo $facmem ?></div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i></i> Out Of 2</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-money"></i> First Phase </span>
              <div class="count green">Unpaid</div>
              <span class="count_bottom"><i class="red"><i class="fa fa-sort-asc"></i> </i> INR 30,000</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-money"></i> Second Phase </span>
              <div class="count">Unpaid</div>
              <span class="count_bottom"><i class="red"><i class="fa fa-sort-asc"></i></i> INR 27,500</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> MAC ID</span>
              <div class="count" style="font-size: 2.3em"><?php echo $_SESSION['tid'];  ?></div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i> </i> </span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-car"></i> Car Number</span>
              <div class="count">NA</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i> </i> </span>
            </div>
          </div>
          <!-- /top tiles -->
          <!--page start -->
         
          <!--page ned-->


        <div class="row" id="body2">
            <div class="col-md-12 col-sm-12 col-xs-12">
          
               
        <!-- footer content -->

       