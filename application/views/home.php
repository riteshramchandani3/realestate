<!DOCTYPE html>
<!--
Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
Unauthorized copying of this file, via any medium is strictly prohibited
Proprietary and confidential.
Written by Oga Technologies, October 1,  2016.
-->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> ARVO:: HOME</title>
        <?php
        require_once('assets/html_head_links.php');
        ?>
        <!-- Custom Fonts -->
        <link href="./resources/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
       
        <style>
            body{
                background-color: #eee;
            }
            .jumbotron {
                margin-top: -50px;
                background-image: url('<?php echo base_url('resources/image/pre-dash-bg.jpg'); ?>');
                padding-bottom: 15px !important;
                margin-bottom: 2px !important;
                background-repeat: no-repeat;
                background-size: 100% 100%;

            }
            .jumbotron .container{
                /*background-color: rgba(200,200,200, 0.25);*/
                margin-left: 20px;
            }

            hr{
                border:none;
                height: 3px;
                color:#ccc;
                background-color: #ccc;
            }
            .row p{
                text-align: center;
            }
            .row h2{
                text-align: center;
            }
            .btn-3d{
                box-shadow: 2px 2px 5px #555;
            }

            .embossed {
                text-shadow: -1px -1px 1px #fff, 1px 1px 1px #000;
                opacity: 0.9;
                /*font-size:  80px;
                font-family: 'Bungee Inline', cursive;*/
            }
            .menu-div{
                display: inline-block;
                width: 45%;
                height: 30%;
                margin-top: 100px;
                float: right;
            }
            .menu{
                display: inline;
            }
            .logo-div{
                display: inline-block;
                width: 45%;
                height: 30%;
                vertical-align:top;
                float: left;
            }
            #heading{
                font-family: Homestead ;font-size: 34px;font-weight: 400;color: #0b4996 ;
            }
            h2{
                margin-top: 5px;
                margin-bottom: 5px;
            }
        </style>
    </head>
    <body>

        <div class="jumbotron">
            <div class="container">
                <div style="width: 95%;vertical-align:top;">
                    <div class="logo-div">
                        <!--h1 class="text-3d"><span  style="Color: #FF3300;font-weight:700; font-family: 'Megrim', cursive;">ARVO</span> <span style="color: #0C63BE;font-weight:700;">ERP</span></h1-->
                        <img src="<?php echo base_url('resources/image/3d-bevel-logo.png'); ?>" alt="arvo-erp-logo" height="300px"/>
                    </div>
                    
                    <div class="menu-div">
                        <div>
                            <ul style="list-style-type: none;">
                                <li class="menu">
                                    <a class="btn btn-primary btn-3d " href="<?php echo site_url(''); ?>">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="menu">
                                    <a class="btn btn-primary btn-3d " href="<?php echo base_url('/about.php'); ?>">About</a>
                                </li>
                                <li class="menu">
                                    <a class="btn btn-primary btn-3d " href="<?php echo base_url('/copyright_notice.php'); ?>">Copyright</a>
                                </li>
                                <li class="menu">
                                    <a class="btn btn-primary btn-3d " href="<?php echo base_url('/license_agreement.php'); ?>">License</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <div style="width:95%;text-align:left;margin-top: 10px;margin-left:20px;">
                <p class="embossed" id="heading">Real Estate Business Management System.</p>
                <!--p style="margin-left: 150px;"><a class="btn btn-default btn-lg btn-3d" href="<?php //echo site_url('Main_controller/login_user'); ?>" role="button">Get Started &raquo;</a></p-->

            </div>
        </div>

        <p style="text-align: center; color:red;">  Recommended browser is <i><b><a target="_blank" href="https://www.google.com/chrome/browser/features.html?brand=CHBD&gclid=EAIaIQobChMIvvWH6JrA1wIVwg0rCh1lxw7rEAAYASABEgJc2vD_BwE&dclid=CN23hfKawNcCFRShjgod6G8KyA">Google Chrome</a></b></i> with all features turned on.</p>
    </div>

    <div class="container" style="background-color: #fff;width:100%;">
        <!-- Example row of columns -->
        <div class="row">
            <div class="col-md-4" style="border:2px #ccc solid;height:135px;">
                <h2 class="embossed">Login</h2>
                <p>Login to Your Account.</p>
                <p>
                    <a class="btn btn-success btn-3d"  href="<?php echo site_url('Main_controller/login_user'); ?>" role="button">
                        <span style="color:#fff;line-height: 1.5em; font-size:1.5em;"><i class="fa fa-sign-in" ></i> Login &raquo;</span> </a>
                </p>
            </div>
            <div class="col-md-4" style="border:2px #ccc solid;height:135px;">
                <h2 class="embossed">Reset Password</h2>
                <p>Unlock Your Account.</p>
                <p>
                    <a class="btn btn-danger btn-3d" href="<?php echo site_url('Main_controller/reset_pwd'); ?>" role="button">
                        <span style="color:#fff;line-height: 1.5em; font-size:1.5em;"><i class="fa fa-unlock-alt" ></i>  Reset password &raquo;</span></a>
                </p>
            </div>
            <div class="col-md-4" style="border:2px #ccc solid;height:135px;">
                <h2 class="embossed"> User Manual</h2>
                <p>Read the Documentation. </p>
                <p>
                    <a class="btn btn-primary btn-3d" href="<?php echo base_url('Documentation/User_Manual.pdf'); ?>" role="button" target="_blank">
                        <span  style="color:#FFF;line-height: 1.5em; font-size:1.5em;"><i class="fa fa-life-saver"></i> Get Help &raquo;</span> </a>
                </p>
            </div>


        </div>
        <br />
        <footer>
            <a href='http://www.ogatechnologies.com'target='_blank'>
            <div class="btn btn-lg btn-default col-lg-12 copyrt btn-3d">
                <p>&copy; 2017 Oga Technologies Private Limited.</p>
            </div>
            </a>
        </footer>
        <hr />
    </div> <!-- /container -->
    <!-- jQuery -->
    <script src="resources/js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="resources/js/bootstrap.min.js"></script>
</body>
</html>
