<!DOCTYPE html>
<!--
Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
Unauthorized copying of this file, via any medium is strictly prohibited
Proprietary and confidential.
Written by Oga Technologies, October 1,  2016.
-->
<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="resources/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.0.3.js"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="resources/css/default.css">
     </head>
    <body>
        <div class="container">
           
            <div class="page-title-box">
                <h3>Forgot Password</h3>
            </div>
          
            <form action="<?php echo site_url('Main_controller/CheckInputs'); ?>" method="post" class="form-inline" enctype="multipart/form-data">
                <center><span style="font-size: 40px"><i class="fa fa-5x fa-unlock-alt"></i></span></center>
                <center>  <div class="form-group"><label for="username">UserName: &nbsp;</label><input type="text" class="text-primary" name="username" placeholder="Enter UserName" title="Username should only contain lowercase letters. e.g. john" required /> 
                    </div></center>
                <center>   <div class="form-group"><label for="email">Email: &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</label><input type="email" class="text-primary" name="email" style="font-family:Arial, FontAwesome" placeholder="  abc.gmail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Email should only contain email address. e.g.abc123@gmail.com" required /></div></center>
                <div class="btn-container" style="background-color: #f1f1f1;">
                    <center>   
                        <button type="submit" name="submit" value="submit" class="btn  btn-success form-submit-button">Reset Password <i class="fa fa-paper-plane"></i></button>
                        <a href="javascript: history.go(-1)" class="btn btn-primary" role="button">Cancel</a>
                    </center>
                </div> 
            </form>
        </div>

    </body>
</html>