<!DOCTYPE html>
<!--
Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
Unauthorized copying of this file, via any medium is strictly prohibited
Proprietary and confidential.
Written by Oga Technologies, October 1,  2016.
-->
<html>
    <head>
        <title>Unauthorized Access</title>
         <?php require_once('assets/html_head_links.php'); ?>
    </head>
    <body>
         <?php require_once ('assets/top_menu.php'); ?>
        <?php require_once ('assets/side_menu.php'); ?>
        <div class="main">
            <div class="container">

                <div class="panel panel-danger" >
                    <div class="panel-heading">
                        <h3 class="text-danger"> Unauthorized Access </h3>

                    </div>
                    <div class="panel-body" style="text-align: center;">
                        <div class="col-lg-4 pull-left">
                            <span class="fa fa-ban embossed" aria-hidden="true" style="color: #d9534f;font-size: 140px;">
                            </span>
                        </div>
                        <div class="col-lg-6 pull-left">
                            <h2 class="text-danger">You do not have access to this page.</h2>
                            <br clear="All"/>
                            <a class="btn btn-danger btn-3d" href="javascript:history.go(-1);">&laquo; Back</a>&nbsp; &nbsp;
                            <a href="<?php echo site_url('Main_controller/pre_dash');?>" class="btn btn-default btn-3d">Home</a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </body>
</html>