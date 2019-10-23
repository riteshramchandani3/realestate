<!DOCTYPE html>
<!--
Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
Unauthorized copying of this file, via any medium is strictly prohibited
Proprietary and confidential.
Written by Oga Technologies, October 1,  2016.
-->
<html>

    <head>
        <title>Notice</title>
        <?php
        include_once('assets/html_head_links.php');
        ?>
        <style>
            .copyright-text{
                font-size: 18px;
                max-width: 1200px;
                text-align: justify;
            }


        </style>
    </head>

    <body>
        <?php
        require_once('assets/top_menu.php');
        require_once('assets/side_menu.php');
        ?>
        <div class="main">
            <div class="container">
                <div class="panel panel-primary copyright-text">
                    <div class="panel-heading">
                        <h4>Copyright &copy; Oga Technologies Private Limited</h4>
                    </div>
                    <div class="panel-body">
                        last updated: dd/mm/yy
                        <h5> ARVO ERP&reg; is a Brand name owned by Oga Technologies Private Limited</h5>
                        <p class="copyright-text">
                            Copyright ©2017. The Copyright owners of ARVO ERP&reg;,  Oga Technologies Private Limited (COPYRIGHT OWNERS). 
                            All Rights Reserved.<br/> Permission to use, copy, modify, and distribute this software and its documentation is not permitted
                            without a license fee and a signed licensing agreement is required to be executed between Copyright owners and the client. 
                            <br/><br/>
                            Contact The Office of Oga Technologies Private Limited, Lower Ground Floor, Z-10 Zone 1, MP Nagar, Bhopal, MP, India for purchase of license and renewal.
                        </p>
                        <h3>Terms of use:</h3>
                        <div>
                            <ul>
                                <li>You may not Sell, transmit, host or otherwise commercially exploit this software.</li>
                                <li>You may not Modify, decrypt, reverse compile or reverse engineer this software.</li>
                                <li>This software product, its contents, and the trademarks are our exclusive intellectual property</li>
                                <li> We may regularly update the application with new features, bug fixes etc. as needed.</li>
                                <li>Users feedback and suggestions for this product, if any will be used without compensation or credits.</li>
                                <li> We may collect certain personal information from users, regarding the usage of this product.</li>
                                <li>Limited liability DISCLAIMER is in effect as below:</li>
                            </ul>
                        </div>
                        <h3>DISCLAIMER:</h3>
                        <p>
                            THIS SOFTWARE AND DOCUMENTATION IS PROVIDED "AS IS," AND COPYRIGHT HOLDERS MAKE NO REPRESENTATIONS OR WARRANTIES, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO, 
                            WARRANTIES OF MERCHANTABILITY OR FITNESS FOR ANY PARTICULAR PURPOSE OR THAT THE USE OF THE SOFTWARE OR DOCUMENTATION WILL NOT INFRINGE ANY THIRD PARTY PATENTS, 
                            COPYRIGHTS, TRADEMARKS OR OTHER RIGHTS.
                            <br><br>
                            COPYRIGHT HOLDERS WILL NOT BE LIABLE FOR ANY DIRECT, INDIRECT, SPECIAL OR CONSEQUENTIAL DAMAGES ARISING OUT OF ANY USE OF THE SOFTWARE OR DOCUMENTATION.
                        </p>
                    </div>
                </div>

            </div>

        </div>
        <script>
            $(document).ready(function () {
                $('#toppageheader').html('Copyright Notice');

            });
        </script>
    </body>
</html>