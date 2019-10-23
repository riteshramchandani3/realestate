<!DOCTYPE html>
<!--
Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
Unauthorized copying of this file, via any medium is strictly prohibited
Proprietary and confidential.
Written by Oga Technologies, October 1,  2016.
-->
<html>
    <head>
        <?php
        require_once('assets/html_head_links.php');
        ?>
        <link href="https://fonts.googleapis.com/css?family=Megrim" rel="stylesheet">
        <style>
            .panel-danger{
                box-shadow: 2px 2px 5px #555;
            }
        </style>

    </head>
    <body style="background-image: url('<?php echo base_url('resources/image/pre-dash-bg.jpg'); ?>');background-size: 100% 100%;">
        <div class="container">
            <div class="row">
                <div class="page-header"> 
                    <h1><img src="<?php echo base_url('resources/image/3d-bevel-logo.png'); ?>" alt="Arvo Logo" height="80px"/>
                        <small>Reset Your Password </small></h1>

                </div>
            </div>
            <div class="row">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h3>Reset Your Password</h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-lg-1" style="text-align: center;">
                            <span style="font-size: 40px;color:#a94442;">
                                <i class="fa fa-5x fa-unlock-alt embossed">
                                </i>
                            </span>
                        </div>
                        <div class="col-lg-6" style="text-align: center;">
                            <form action="<?php echo site_url('Main_controller/CheckInputs'); ?>" method="post" class="form-inline" enctype="multipart/form-data">
                                <div style="margin: auto; max-width: 300px;">
                                    <div class="row" align="center">
                                        <div class=" row " style="margin-top:5px;" >
                                            <label for="username">UserName: &nbsp;</label>
                                            <input type="text" class="form-control" name="username"style="font-family:Arial, FontAwesome" placeholder="&#xf007; Enter UserName" title="Enter Valid UserName" required />

                                            <br clear="ALL"/>   <br clear="ALL"/>   

                                            <label for="email">Email: &nbsp; &nbsp &nbsp &nbsp &nbsp;</label>
                                            <input type="email" class="form-control" name="email" style="font-family:Arial, FontAwesome" placeholder="  abc.gmail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Enter Valid Email Address required" />
                                        </div>
                                        <br>
                                        <br>
                                        <div class="btn-container">
                                            <button type="submit" name="submit" value="submit" class="btn  btn-success form-submit-button btn-3d">Reset Password <i class="fa fa-unlock"></i></button>
                                            &nbsp;&nbsp;
                                            <a href="<?php echo site_url('Myy_ctrl/index'); ?>" class="btn btn-danger btn-3d" role="button">Cancel <i class="fa fa-times"></i></a>

                                        </div> 
                                    </div> 
                                </div> 
                            </form>
                        </div>
                    </div>
                    <div class="panel-footer">
                        Authorised Persons Only.
                        <a href="<?php echo site_url('') ?>" class="pull-right">Home</a>
                    </div>
                </div>

                <hr/>
                <footer>
                    <div class="btn btn-lg btn-default col-lg-12 copyrt">
                        <p>&copy; 2017 Oga Technologies Private Limited.</p>
                    </div>
                </footer>
            </div>
        </div>
    </body>
</html>