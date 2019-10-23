<!DOCTYPE html>
<!--
Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
Unauthorized copying of this file, via any medium is strictly prohibited
Proprietary and confidential.
Written by Oga Technologies, October 1,  2016.
-->
<html>
    <head>
        <title>Update Profile </title>
        <?php
        require_once('assets/html_head_links.php');
        ?>
        <style>
            #showNoticeModal{
                margin-top: 100px;
            }
        </style>
    </head>
    <body>
        <?php require_once ('assets/top_menu.php'); ?>
        <?php require_once ('assets/side_menu.php'); ?>
        <form action="<?php echo site_url('Main_controller/UpdateregistationInputs'); ?>" method="post"  enctype="multipart/form-data">
            <div class="main">
                <div class="container">
                    <?php
                    $user_id = $this->input->get('id');
                    foreach ($this->realestate_model->getuser_profile($user_id) as $row) {
                        ?> 
                        <?php $first_name = $row->first_name; ?>
                        <?php $last_name = $row->last_name; ?>
                        <?php $phone = $row->phone; ?>
                        <?php $email = $row->email; ?>
                        <?php $role = $row->role; ?>
                        <?php $user_name = $row->username; ?>
                    <?php } ?>
                    <input type='hidden' name='user_id' value='<?php echo $user_id; ?>'>

                    <div class="panel pane panel-primary">
                        <div class="panel-heading"><h4>Update Profile</h4>

                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-md-2"><label for="project_name">First Name:</label></div>
                                <div class="col-md-5 col-lg-offset-0"><input type="text" name="first_name" value="<?php echo $first_name; ?>" class="form-control"  />
                                </div>
                            </div><br clear="ALL"/><br clear="ALL"/>
                            <div class="form-group">
                                <div class="col-md-2"><label for="project_name">Last Name:</label></div>
                                <div class="col-md-5 col-lg-offset-0"><input type="text" name="last_name" value="<?php echo $last_name; ?>" class="form-control"   />
                                </div>
                            </div><br clear="ALL"/><br clear="ALL"/>
                            <div class="form-group">
                                <div class="col-md-2"><label for="project_name">Phone:</label></div>
                                <div class="col-md-5 col-lg-offset-0"><input type="text" name="phone" value="<?php echo $phone; ?>"  class="form-control"   />
                                </div>
                            </div><br clear="ALL"/><br clear="ALL"/>
                            <div class="form-group">
                                <div class="col-md-2"><label for="project_name">E-Mail:</label></div>
                                <div class="col-md-5 col-lg-offset-0"><input type="text" name="email" value="<?php echo $email; ?>"  class="form-control"   />
                                </div>
                            </div><br clear="ALL"/><br clear="ALL"/>
                            <div class="form-group">
                                <div class="col-md-2"><label for="project_name">Role:</label></div>
                                <div class="col-md-5 col-lg-offset-0"><input type="text" value="<?php echo $role; ?>" name="role"  class="form-control" readonly  />
                                </div>
                            </div><br clear="ALL"/><br clear="ALL"/>
                            <div class="form-group">
                                <div class="col-md-2"><label for="project_name">User Name:</label></div>
                                <div class="col-md-5 col-lg-offset-0"><input type="text" name="username" value="<?php echo $user_name; ?>" class="form-control" readonly  />
                                </div>
                            </div><br clear="ALL"/><br clear="ALL"/>
                            <div class="row centered">
                                <center>
                                    <button type="submit"  name="submit" value="submit" class="btn btn-success  form-submit-button">Update <i class="fa fa-pencil"></i></button>
                                    <a href="javascript: history.go(-1)" class="btn btn-default" role="button">Cancel</a>
                                </center>
                            </div>
                        </div>
                    </div>

                </div>

            </div>





            <script>
                $(document).ready(function () {
                    $('#toppageheader').html('Property category');
                    $("a:contains(Add Property Category)").parent().addClass('active');
                });
    //-------------------deleteing a project record-------------

            </script>




        </form>
    </body>
</html>