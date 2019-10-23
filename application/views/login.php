<!DOCTYPE html>
<!--
Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
Unauthorized copying of this file, via any medium is strictly prohibited
Proprietary and confidential.
Written by Oga Technologies, October 1,  2016.
-->
<html lang="en">
    <head>
        <title>Login</title>
        <?php
        require_once('assets/html_head_links.php');
        ?>
    </head>
    <body style="background-image: url('<?php echo base_url('resources/image/pre-dash-bg.jpg'); ?>');background-size: 100% 100%;">
        <div class="container">
            <div class="row">
                <div class="page-header"> 
                    <h1>
                        <img src="<?php echo base_url('resources/image/3d-bevel-logo.png');?>" alt="Arvo Logo" height="80px"/>
                        
                        <small>Login to access </small></h1>

                </div>
            </div>
            <div class="row">
                <?php
                if (isset($danger)) {
                    ?>
                    <div class="alert alert-danger alert-dismissable" > 
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Failure!</strong> Invalid Credentials Try again
                    </div>
                    <?php
                } else {
                    
                }
                ?>
            </div>
            <div class="row">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3>Login to Your Account</h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-lg-1" style="text-align: center;">
                            <span style="font-size:40px; color: #337ab7;"><i class="fa fa-5x fa-user-circle-o embossed"></i></span>
                        </div>
                        <div class="col-lg-6" style="text-align: center;">
                            <form action="<?php echo site_url('Main_controller/readlogininputs'); ?>" method="post" class="form-inline" enctype="multipart/form-data">

                                <div style="margin: auto; max-width: 300px;">
                                    <div class="row" align="center">

                                        
                                        <div class=" row " style="margin-top:5px;" >
                                            <label for="username"><b> Username: </b></label> 
                                            <input type="text"  class="form-control" style="font-family:Arial, FontAwesome"  placeholder="&#xf007; Enter Username" name="username" required /> <br>
                                            <label for="password"><b> Password: </b></label>
                                            <input type="password" class="form-control"  style="font-family:Arial, FontAwesome" placeholder="&#xf084; Enter Password" name="password" required /><br>
                                            <input type="checkbox" checked="checked"> Remember me<br>	
                                        </div>
                                        <br clear="ALL"/>
                                        <button type="submit" name="login" value="Login" class=" btn btn-success btn-3d"> Login <i class="fa fa-sign-in"></i></button>	
                                        &nbsp;&nbsp;
                                        <a href="javascript: history.go(-1)" class="btn btn-danger btn-3d" role="button"> Cancel <i class="fa fa-times"></i></a>	
                                        <br><br clear="ALL"/>
                                        <div class="psw"><a href="<?php echo site_url('Main_controller/CheckInputs'); ?>"><span style="font-size: 18px;">Forgot Password <i class="fa fa-question-circle" aria-hidden="true"></i></span></a></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="panel-footer">
                        Authorised Persons Only.
                        <a href="<?php echo site_url('')?>" class="pull-right">Home</a>
                    </div>
                </div>
            </div>
            <hr />
            <footer>
                <div class="btn btn-lg btn-default col-lg-12 copyrt">
                    <p>&copy; 2017 Oga Technologies Private Limited.</p>
                </div>
            </footer>
            <hr />
        </div>
    </body>
</html>