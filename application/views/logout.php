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
    <body>
        <?php
        require_once('assets/top_menu.php');
        require_once('assets/side_menu.php');
        ?>
        <div class="main">
            <div class="container">
                <div class="row">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h2>Confirm Logout</h2>
                        </div>
                        <div class="panel-body">
                            <div style="text-align: center;">
                                <br/>
                                <a class="btn btn-danger btn-3d" href="<?php echo site_url('Myy_ctrl/logout_cnfd'); ?>">Logout Now!</a> &nbsp; &nbsp;
                                <a class="btn btn-success btn-3d" href="javascript:history.go(-1);">Cancel</a>
                                <br/>
                                <br/>
                            </div>
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
        </div>
    </body>
</html>