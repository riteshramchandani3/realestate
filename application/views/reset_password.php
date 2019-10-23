<!DOCTYPE html>
<!--
Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
Unauthorized copying of this file, via any medium is strictly prohibited
Proprietary and confidential.
Written by Oga Technologies, October 1,  2016.
-->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Reset Password</title>
        <?php
        require_once('assets/html_head_links.php');
        ?>
        <style>
            .container{
                padding-top: 40px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="page-header"> 
                    <h1><span style="Color: #FF3300;text-shadow: 1px 1px #777;font-weight:700; font-family: 'Megrim', cursive;">MY</span> 
                        <span style="color: #0C63BE;text-shadow: 1px 1px #777;font-weight:700;">ERP</span>
                        <small>Create New password </small></h1>

                </div>
            </div>
            <?php
            $username = $this->session->userdata('usrname');
            $email = $this->session->userdata('email');
            ?>
            <div class="row">
                <?php if ($this->session->flashdata('success')) { ?>
                    <div class="alert alert-success">
                        <button data-dismiss="alert" class="close"  type="button">
                            <span aria-hidden="true">x</span><span  class="sr-only">Close</span></button>

                        <?php echo $this->session->flashdata('success') ?>
                    </div>
                <?php } else if($this->session->flashdata('failure')) {
                    ?>
                    <div class="alert alert-danger">
                        <button data-dismiss="alert" class="close"  type="button">
                            <span aria-hidden="true">x</span><span  class="sr-only">Close</span></button>

                        <?php echo $this->session->flashdata('failure') ?>
                    </div>

                <?php } ?>
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h3>Create New Password</h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-lg-1" style="text-align: center;">
                            <span style="font-size:40px; color: #a94442;"><i class="fa fa-5x fa-unlock "></i></span>
                        </div>
                        <div class="col-lg-6" style="text-align: center;">
                            <form class="form-inline" action="<?php echo site_url('Main_controller/changepassword'); ?>" method="post" enctype="multipart/form-data">
                                <div class="row">                         
                                    <div class="row">
                                        <div class="form-group ">
                                            <div class="col-md-6"> 
                                                <label  for="Password" >New Password:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="password" class="form-control" name="password" placeholder="**********" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" title=" Password must  contain in Uppercase & Lowercase letter & one special characters and at least 8 or more characters "required> 
                                            </div>
                                        </div>
                                    </div>
                                    <br clear="All"/>

                                    <div class="form-group">
                                        <div class="col-md-6">
                                            <label  for="Password1">Confirm Password:</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="password" class="form-control"  name="password1" placeholder="**********" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" title="Password must  contain in Uppercase & Lowercase letter, and at least 8 or more characters"  required>
                                        </div>
                                    </div>
                                </div>                             

                                <div class="row">             
                                    <input type="hidden" name="username" value="<?php echo $username;    ?>"/>
                                    <input type="hidden" name="email" value="<?php echo $email;    ?>"/>
                                    <br> <br>
                                    <center>
                                        <button type="submit" name="submit" value="submit" class="btn btn-danger">Reset Password</button>
                                        <a href="javascript: history.go(-1)" class="btn btn-default" role="button">Cancel</a>
                                    </center>                          
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
            <hr/>
            <footer>
                <div class="btn btn-lg btn-default col-lg-12 copyrt">
                    <p>&copy; 2017 Oga Technologies Private Limited.</p>
                </div>
            </footer>
        </div>
    </body>
</html>