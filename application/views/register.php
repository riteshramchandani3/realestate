<!DOCTYPE html>
<!--
Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
Unauthorized copying of this file, via any medium is strictly prohibited
Proprietary and confidential.
Written by Oga Technologies, October 1,  2016.
-->
<html lang="en">
    <head>
        <title> Registration</title>
        <?php
        require_once('assets/html_head_links.php');
        ?>
        <link href="https://fonts.googleapis.com/css?family=Megrim" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="page-header"> 
                    <h1><span style="Color: #FF3300;text-shadow: 1px 1px #777;font-weight:700; font-family: 'Megrim', cursive;">MY</span> 
                        <span style="color: #0C63BE;text-shadow: 1px 1px #777;font-weight:700;">ERP</span>
                        <small> Register a New User </small></h1>

                </div>
            </div>
            <div class="row">
                <?php
                if (isset($success)) {
                    ?>
                    <div class="alert alert-success alert-dismissable" > 
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Success!</strong> Successfully Registered
                    </div>
                    <?php
                } else {
                    
                }
                ?>
            </div>
            <div class="row">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3>Register a New User</h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-lg-1" style="text-align: center;">
                            <span style="font-size:40px; color: #337ab7;"><i class="fa fa-5x fa-user-plus "></i></span>
                        </div>
                        <div class="col-lg-6" style="text-align: center;">
                            <form action="<?php echo site_url('Main_controller/registationInputs'); ?>" method="post" class="form-inline" enctype="multipart/form-data">


                                <div class="row">
                                    <div class="col-md-4">

                                    </div>
                                    <div class="col-md-4">
                                        <div class="row">

                                            <div class="col-md-6"> 
                                                <label for="FirstName">First Name:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-inline" name="first_name" style="font-family:Arial, FontAwesome"  placeholder="&#xf007; Enter First Name" pattern="[A-Za-z ñ.]+"
                                                       title="FirstName should only contain uppercase and lowercase letters. e.g. Mahendra" required> 
                                            </div>

                                        </div>
                                        <br>
                                        <div class="row">

                                            <div class="col-md-6"> 
                                                <label for="LastName">Last Name:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-inline"   name="last_name" style="font-family:Arial, FontAwesome" placeholder="&#xf007; Enter Last Name" pattern="[A-Za-z ñ.]+"
                                                       title="LastName should only contain uppercase and lowercase letters. e.g. Dhoni" required>
                                            </div>

                                        </div>
                                        <br>
                                        <div class="row">

                                            <div class="col-md-6"> 
                                                <label for="Phone">Phone:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-inline"   name="phone" style="font-family:Arial, FontAwesome"  placeholder="&#xf095; 999999999" pattern="[0-9]{10}"
                                                       title="Phone should only contain number. e.g.9039612254" required="">
                                            </div>

                                        </div>
                                        <br>
                                        <div class="row">

                                            <div class="col-md-6"> 
                                                <label for="Email" class="control-label" >Email:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="Email" class="form-inline"  name="email" style="font-family:Arial, FontAwesome" placeholder=" &#xf0e0; abc.gmail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                                                       title="Email should only contain email address. e.g.abc123@gmail.com" required/>                      
                                            </div>

                                        </div>
                                        <br>
                                        <div class="row">

                                            <div class="col-md-6"> 
                                                <label for="Role" class="control-label">Role:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <select name="role" id="role" class="form-control">
                                                    <option value="0"> ---Select---</option>
                                                    <?php
                                                        foreach ($this->realestate_model->get_role() as $row) {
                                                    ?>

                                                        <option value="<?php echo $row->role; ?>">  <?php echo $row->role; ?></option>

                                                    <?php
                                                        }
                                                    ?>
                                                </select>                     
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">

                                            <div class="col-md-6"> 
                                                <label for="UserName" class="control-label">User Name:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-inline" name="username"  style="font-family:Arial, FontAwesome" placeholder="&#xf007 Enter UserName" pattern="[a-z]{1,15}" 
                                                       title="Username should only contain lowercase letters. e.g. john" required><span id="usercheck"></span>  

                                            </div>

                                        </div>
                                        <br>
                                        <div class="row">                  
                                            <div class="col-md-6"> 
                                                <label  for="Password">Password:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="password" class="form-inline" name="password" style="font-family:Arial, FontAwesome" placeholder="&#xf084;**********" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                                            </div>      
                                        </div>
                                        <br>
                                        <br>


                                    </div>
                                    <div class="col-md-4">

                                    </div>
                                </div>
                                <center><button type="submit"  name="submit" value="submit" class="btn btn-success  form-submit-button">Register <i class="fa fa-user-plus"></i></button>
                                    <a href="javascript: history.go(-1)" class="btn btn-default" role="button">Cancel</a></center>

                            </form>
                        </div>
                    </div>
                    <div class="panel-footer">
                        Authorised Persons Only.
                        <a href="<?php echo site_url('Myy_ctrl/home') ?>" class="pull-right">Home</a>
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

        <script type="text/javascript">
            $(document).ready(function () {
                $('#username').keyup(function () {
                    var usercheck = $(this).val();
                    $('#usercheck').html('<img src="loading.gif" width="150" />');
                    $.post("Register.php", {user_name: usercheck}, function (data)
                    {
                        if (data.status == true)
                        {
                            $('#usercheck').parent('div').removeClass('has-error').addClass('has-success');

                        } else {
                            $('#usercheck').parent('div').removeClass('has-success').addClass('has-error');
                        }
                        $('#usercheck').html(data.msg);
                    }, 'json');
                });
            });
        </script>

    </body>
</html>
