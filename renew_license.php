<!DOCTYPE html>
<!--
Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
Unauthorized copying of this file, via any medium is strictly prohibited
Proprietary and confidential.
Written by Oga Technologies, October 1,  2016.
-->
<html>

    <head>
        <title>Renew your license</title>
        <?php
        include_once('assets/html_head_links.php');
        ?>
        <style>
            .about-text{
                font-size: 16px;
                text-align: justify;
            }
            #about-company{
                /*border: 1px solid #ccc;*/
                min-height: 300px;
                padding-left: 20px;
            }
            #about-product{
                /*border: 1px solid #ccc;*/
                min-height: 200px;
                padding-left: 20px;
            }
            #contact{
                /*border: 1px solid #ccc;*/
                min-height: 200px;
                padding-left: 20px;
            }
        </style>
    </head>

    <body>
        <div class="main">
            <div class="container">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4>License Renewal</h4>
                    </div>
                    <div class="panel-body">
                        <div class="row" id="about-product">
                            <div class="col-md-6">
                                <h2>License Renewal: </h2>
                                <div class="about-text">                    
                                    ARVO ERP&reg; is a Brand name owned by Oga Technologies Private Limited.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img src="<?php echo base_url('resources/image/3d-bevel-logo.png'); ?>" class="img-responsive" alt="Product logo" width="350" height="350"/>
                            </div>                                              
                        </div>                     
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function () {
                $('#toppageheader').html('Renew Your License');

            });
        </script>
    </body>
</html>
