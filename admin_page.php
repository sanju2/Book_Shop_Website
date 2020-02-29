<?php
include_once("controller.php");

if (!isset($_SESSION["user"])) {
    header("location:login.php");
}
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Simple Responsive Admin</title>
        <!-- BOOTSTRAP STYLES-->
        <link href="assets/css/bootstrap.css" rel="stylesheet" />
        <!-- FONTAWESOME STYLES-->
        <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
        <link href="assets/css/custom.css" rel="stylesheet" />
        <!-- GOOGLE FONTS-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    </head>
    <body>



        <div id="wrapper">
            <div class="navbar navbar-inverse navbar-fixed-top">
                <div class="adjust-nav">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">
                          <!--  <img src="assets/img/logo.png" />-->

                        </a>

                    </div>

                    <span class="logout-spn" style="color:white; font-size:20px;">

                        welcome : <?php
                        if (isset($_SESSION["user"])) {
                            echo $_SESSION["user"];
                        } else {
                            echo "User";
                        }
                        ?> &nbsp; 
                        <?php
                        if (isset($_SESSION["user"])) {
                            echo "<a href='Log-out.php'  style='color:#fff;'>Log Out</a>";
                        } else {
                            echo "<a href='login.php'>Login</a>||<a href='customer_register.php'>Register</a>";
                        }
                        ?>   

                        <!--  <a href="#" style="color:#fff;">LOGOUT</a>   -->

                    </span>
                </div>
            </div>
            <!-- /. NAV TOP  -->
            <nav class="navbar-default navbar-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="main-menu">



                        <li class="active-link">
                            <a href="index.html" ><i class="fa fa-desktop "></i>Dashboard <span class="badge">Included</span></a>
                        </li>




                    </ul>
                </div>

            </nav>
            <!-- /. NAV SIDE  -->
            <div id="page-wrapper" >
                <div id="page-inner">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2>ADMIN DASHBOARD</h2>   
                        </div>
                    </div>              
                    <!-- /. ROW  -->
                    <hr />
                    <div class="row">
                        <div class="col-lg-12 ">
                            <div class="alert alert-info">
                                <strong>Welcome </strong> 
                            </div>

                        </div>
                    </div>
                    <!-- /. ROW  --> 
                    <div class="row text-center pad-top">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                            <div class="div-square">
                                <a href="admin_register.php" >
                                    <i class="fa fa-circle-o-notch fa-5x"></i>
                                    <h4>Admin register</h4>
                                </a>
                            </div>


                        </div> 

                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                            <div class="div-square">
                                <a href="book_register.php" >
                                    <i class="fa fa-envelope-o fa-5x"></i>
                                    <h4>Book Adding to System</h4>
                                </a>
                            </div>


                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                            <div class="div-square">
                                <a href="all_user.php" >
                                    <i class="fa fa-lightbulb-o fa-5x"></i>
                                    <h4>All user Details</h4>
                                </a>
                            </div>


                        </div>

                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                            <div class="div-square">
                                <a href="dashbord.php" >
                                    <i class="fa fa-lightbulb-o fa-5x"></i>
                                    <h4>Dash board</h4>
                                </a>
                            </div>


                        </div>
                       
                    </div>
                   
                    
                   
                    
                </div>
                <!-- /. PAGE INNER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->
        </div>
        <div class="footer">


            <div class="row">
                <div class="col-lg-12" >
                    &copy;  2020 Book Shop | Design by: <strong>Sanju</strong>
                </div>
            </div>
        </div>


        <!-- /. WRAPPER  -->
        <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
        <!-- JQUERY SCRIPTS -->
        <script src="assets/js/jquery-1.10.2.js"></script>
        <!-- BOOTSTRAP SCRIPTS -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- CUSTOM SCRIPTS -->
        <script src="assets/js/custom.js"></script>


    </body>
</html>
