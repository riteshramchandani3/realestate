<!DOCTYPE html>
<!--
Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
Unauthorized copying of this file, via any medium is strictly prohibited
Proprietary and confidential.
Written by Oga Technologies, October 1,  2016.
-->
<html>

    <head>
        <title>License Agreement</title>
        <?php
        include_once('assets/html_head_links.php');
        ?>
        <style>
            .section_one{
                height: 500px;
                font-size: 30px;
                background-color: #FFA07A;
                padding: 20px;
            }

            h2{

                color: white;
                font-weight: bold;
            }
            p{
                text-align: justify;
                color: black;

            }
            h5{
                font-weight: bold;
                color: black;
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
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>License Agreement</h4>
                    </div>
                    <div class="panel-body">


                        Last updated: dd/mm/yy<br>
                        <h3>Terms of use:</h3>
                        <h3> End-User License Agreement ("Agreement")</h3>
                        <p>

                            Please read this End-User License Agreement ("Agreement") carefully before clicking the "I Agree" button, downloading or using Oga Technologies Private Limited.

                            By clicking the "I Agree" button, downloading or using the Product, you are agreeing to be bound by the terms and conditions of this Agreement.

                            If you do not agree to the terms of this Agreement, do not click on the "I Agree" button and do not download or use the Product. 

                        <h5>License</h5>

                            Oga Technologies Private Limited grants you a revocable, non-exclusive, non-transferable, limited license to download, install and use the Product solely for your personal, non-commercial purposes strictly in accordance with the terms of this Agreement.

                            Restrictions

                            You agree not to, and you will not permit others to:

                            a) license, sell, rent, lease, assign, distribute, transmit, host, out source, disclose or otherwise commercially exploit the Product or make the Product available to any third party.

                            The Restrictions section is for applying certain restrictions on the Product usage, e.g. user can't sell product, user can't distribute the product. For the full disclosure section, create your own EULA.

                            Modifications to Product

                            Oga Technologies Private Limited (change this) reserves the right to modify, suspend or discontinue, temporarily or permanently, the Product or any service to which it connects, with or without notice and without liability to you.

                            The Modifications to Product  will be updated or regularly maintained.  



                            <h5>Term and Termination</h5>

                            This Agreement shall remain in effect until terminated by you or Oga Technologies Private Limited. 

                            Oga Technologies Private Limited (change this) may, in its sole discretion, at any time and for any or no reason, suspend or terminate this Agreement with or without prior notice.

                            This Agreement will terminate immediately, without prior notice from Oga Technologies Private Limited, in the event that you fail to comply with any provision of this Agreement.

                            Upon termination of this Agreement, you shall cease all use of the Product and delete all copies of the Product from your mobile device or from your desktop.<br/>

                            <h5>Severability</h5>

                            If any provision of this Agreement is held to be unenforceable or invalid, such provision will be changed and interpreted to accomplish the objectives of such provision to the greatest extent possible under applicable law and the remaining provisions will continue in full force and effect.

                             
                            <h5>Amendments to this Agreement</h5>

                            Oga Technologies Private Limited (change this) reserves the right, at its sole discretion, to modify or replace this Agreement at any time. If a revision is material we will provide at least 30 (changes this) days' notice prior to any new terms taking effect. What constitutes a material change will be determined at our sole discretion.

                            <h5>Contact Information</h5>

                            If you have any questions about this Agreement, please contact us.</p>
                    <h5>Terms and Conditions</h5>
                        <ul>
                            <li>You may not Sell, transmit, host or otherwise commercially exploit my Product.</li>
                            <li>Modify, decrypt, reverse compile or reverse engineer my Product.</li>
                            <li>Do you want to make it clear that your Product, its contents, and your trademarks are your exclusive intellectual property?</li>
                            <li> I may regularly update the Product with new features, bug fixes etc. as needed.</li>
                            <li>If users will provide you feedback and suggestions for your Product, do you want to use this feedback without compensation or credits given?</li>
                            <li> we may collect certain personal information from users</li>
                            <li>limit your liability by providing your Product on an "AS IS" and "AS AVAILABLE" basis.</li>
                            <li>please read disclaimer below.</li>
                        </ul>
                        <h3>Disclaimer:</h3>
                        <p>
                            IN NO EVENT SHALL COPYRIGHT OWNERS BE LIABLE TO ANY PARTY FOR DIRECT, INDIRECT, SPECIAL, INCIDENTAL, OR CONSEQUENTIAL DAMAGES, INCLUDING LOST PROFITS,
                            ARISING OUT OF THE USE OF THIS SOFTWARE AND ITS DOCUMENTATION, EVEN IF COPYRIGHT OWNERS HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
                            COPYRIGHT OWNERS SPECIFICALLY DISCLAIMS ANY WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE. 
                            THE SOFTWARE AND ACCOMPANYING DOCUMENTATION, IF ANY, PROVIDED HEREUNDER IS PROVIDED "AS IS". 
                        </p>
                        

                <h3><input class="coupon_question" type="checkbox" name="coupon_question" value="1" onchange="valueChanged()"/>&nbsp;&nbsp; I agree to the usage and license terms </h3>
                <center><button type="submit"  name="submit" value="submit" class="btn btn-success  form-submit-button">Submit <i class="fa fa-user-plus"></i></button>
                                    
                    </div> 

                </div>
                
            </div>
        </div>

        <script>
            $(document).ready(function () {
                $('#toppageheader').html('License Agreement');

            });
        </script>

    </body>
</html>