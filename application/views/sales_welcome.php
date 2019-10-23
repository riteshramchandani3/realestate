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


            .carousel-control.right{ background-color: none !important; background-image:none !important; color: #ccc;}
            .carousel-control.left{ background-color: none !important; background-image:none !important; color: #ccc;}  </style>
    </head>
    <body style="background-color:#ccc;background-image: url(<?php echo base_url('resources/image/pre-dash-bg.jpg'); ?>);background-repeat: no-repeat;background-size: cover;">
        <?php require_once ('assets/top_menu.php'); ?>
        <?php require_once ('assets/side_menu.php'); ?>
        <div class="main">
            <div class="container">




                <div class="col-xs-12">
                    <div class="panel panel-oga">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="<?php echo base_url('./resources/image/avro-white-text-txp-logo.png') ?>" width="100%">
                                </div>
                                <div class="col-md-6">
                                    <h2 style="margin-top:100px;">
                                        Customer Management
                                    </h2>
                                    <a class="btn btn-default btn-3d" href="<?php echo site_url('View_ctrl/do_application_search'); ?>" role="button" style="color:none;margin-top: 65px;padding: 5px 35px;">
                                        <span style="text-shadow:none; line-height: 1.5em; font-size:1.5em;">Start <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i> </span> </a>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <i class="fa fa-line-chart fa-5x"></i><span style="font-size: 52px;"> Sales</span>
                        </div>
                    </div>

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