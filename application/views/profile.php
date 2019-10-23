<!DOCTYPE html>
<!--
Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
Unauthorized copying of this file, via any medium is strictly prohibited
Proprietary and confidential.
Written by Oga Technologies, October 1,  2016.
-->
<html>
    <head>
        <title>Profile </title>
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
        <div class="main">
            <div class="container">
 
                <!--///////////////////////////////////////////////-->
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

        
                <div class="panel pane panel-primary">
                    <div class="panel-heading"><h4>Profile</h4>
                        <div class="pull-right">
                            <a title="Edit Profile" class="btn btn-success btn-3d" href="<?php echo site_url('Main_controller/update_profile?id=' . $user_id); ?> " style="margin-top: -50px;"><i  class="fa fa-pencil-square-o"></i></a>
                        <!--a title="Add new user" class="btn btn-primary btn-3d" href="<!--?php echo site_url('Main_controller/update_password?id=' . $user_id); ?> " style="margin-top: -50px;">update password</a-->
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <div class="col-md-2"><label for="project_name">First Name:</label></div>
                            <div class="col-md-5 col-lg-offset-0"><input type="text" value="<?php echo $first_name; ?>" class="form-control"  readonly="readonly"/>
                            </div>
                        </div><br clear="ALL"/><br clear="ALL"/>
                        <div class="form-group">
                            <div class="col-md-2"><label for="project_name">Last Name:</label></div>
                            <div class="col-md-5 col-lg-offset-0"><input type="text" value="<?php echo $last_name; ?>" class="form-control"   readonly="readonly"/>
                            </div>
                        </div><br clear="ALL"/><br clear="ALL"/>
                        <div class="form-group">
                            <div class="col-md-2"><label for="project_name">Phone:</label></div>
                            <div class="col-md-5 col-lg-offset-0"><input type="text" value="<?php echo $phone; ?>"  class="form-control"   readonly="readonly"/>
                            </div>
                        </div><br clear="ALL"/><br clear="ALL"/>
                        <div class="form-group">
                            <div class="col-md-2"><label for="project_name">E-Mail:</label></div>
                            <div class="col-md-5 col-lg-offset-0"><input type="text" value="<?php echo $email; ?>"  class="form-control"   readonly="readonly"/>
                            </div>
                        </div><br clear="ALL"/><br clear="ALL"/>
                        <div class="form-group">
                            <div class="col-md-2"><label for="project_name">Role:</label></div>
                            <div class="col-md-5 col-lg-offset-0"><input type="text" value="<?php echo $role; ?>"  class="form-control"   readonly="readonly"/>
                            </div>
                        </div><br clear="ALL"/><br clear="ALL"/>
                        <div class="form-group">
                            <div class="col-md-2"><label for="project_name">User Name:</label></div>
                            <div class="col-md-5 col-lg-offset-0"><input type="text" value="<?php echo $user_name; ?>" class="form-control"   readonly="readonly"/>
                            </div>
                        </div><br clear="ALL"/><br clear="ALL"/>
                        <div class="row centered">

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





    </body>
</html>