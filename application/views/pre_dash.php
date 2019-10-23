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
            .nav-tabs > li.active  { 
                border: 1px solid #ffffff !important;
                border-top: 1px solid #337ab7 !important;
                border-left: 1px solid #337ab7 !important;
                border-right: 1px solid #337ab7 !important;

            }
            .panel-oga {
                border-color: #1C518E;
                text-align: center;
                text-shadow: 2px 2px #555;
            }
            .panel-oga:hover {
                box-shadow: 2px 2px 5px #555;
                border-color: #0563C8;
            }
            .panel-oga > .panel-heading {
                border-color: #1C518E;
                color: #D4E6F1;
                background-color: #1C518E;  
            }
            .panel-oga > .panel-body {
                color: #1C518E;
            }
            .panel-oga:hover>.panel-heading{
                background: #0563C8;
                border-color: #0563C8;
                color: #FDFEFE;
            }
            .panel-oga:hover>.panel-body{
                color: #0563C8;
            }
            
            h1{color:#0563C8; text-align: center;margin-bottom: 40px;}

            .carousel-control.right{ background-color: none !important; background-image:none !important; color: #ccc;}
            .carousel-control.left{ background-color: none !important; background-image:none !important; color: #ccc;}  </style>
    </head>
    <body style="background-color:#ccc;background-image: url(<?php echo base_url('resources/image/pre-dash-bg.jpg');?>);background-repeat: no-repeat;background-size: cover;">
        <?php require_once ('assets/top_menu.php'); ?>
        <!--?php require_once ('assets/pre_sales_side_menu.php'); ?-->
        <div class="main">
            <div class="container">

                <h1>Real Estate Business Management System</h1>

                    
                        <div class="col-xs-12 col-md-6 col-lg-3">
                        <a href="<?php echo site_url('Pre_sales/index') ?>" style="text-decoration: none;">
                            <div class="panel panel-oga">
                                <div class="panel-heading">
                                    <h2> Pre Sales<br/><br/></h2>
                                </div>
                                <div class="panel-body">
                                    <i class="fa fa-handshake-o fa-5x"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-xs-12 col-md-6 col-lg-3">
                        <a href="<?php echo site_url('Main_controller/saleswelcome') ?>" style="text-decoration: none;">
                            <div class="panel panel-oga">
                                <div class="panel-heading">
                                    <h2>Sales<br/><br/></h2>
                                </div>
                                <div class="panel-body">
                                    <i class="fa fa-line-chart fa-5x"></i>
                                </div>
                            </div>
                        </a>
                    </div>  
                        <div class="col-xs-12 col-md-2 col-lg-3">
                            <a href="#" style="text-decoration: none;" class="disabled">
                            <div class="panel panel-oga">
                                <div class="panel-heading">
                                    <h2>Purchase<br/><br/></h2>
                                </div>
                                <div class="panel-body">
                                    <i class="fa fa-truck fa-5x"></i>
                                </div>
                            </div>
                        </a>
                    </div> 
                    
                        <div class="col-xs-12 col-md-2 col-lg-3">
                        <a href="#" style="text-decoration: none;" class="disabled">
                            <div class="panel panel-oga">
                                <div class="panel-heading">
                                    <h2>Contract <br><br></h2>
                                </div>
                                <div class="panel-body">
                                    <i class="fa fa-male fa-5x"></i>
                                </div>
                            </div>
                        </a>
                    </div>   
                  
                </div>
            </div>
        </div>


        <br>
        <br clear="all"/>
        <!-- jQuery -->
        <script src="resources/js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="resources/js/bootstrap.min.js"></script>
    </body>
</html>