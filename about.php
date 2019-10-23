<!DOCTYPE html>
<!--
Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
Unauthorized copying of this file, via any medium is strictly prohibited
Proprietary and confidential.
Written by Oga Technologies, October 1,  2016.
-->
<html>

    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> ARVO:: About Us</title>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <link href = "https://fonts.googleapis.com/css?family=Titillium+Web:400,400i,700,700i" rel = "stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Megrim" rel="stylesheet"> 
         <link href = "resources/css/bootstrap.min.css" rel = "stylesheet" type = "text/css"/>
        <link href="resources/js/bootstrap-iso.css" rel="stylesheet" type="text/css"/>
        <script src="resources/js/bootstrap.min.js" type = "text/javascript"></script>
        <link href="resources/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
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
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><img src="resources/image/avro-white-text-txp-logo.png" alt="product logo" height="60px"/> About Us 
                            <a href="index.php" class="btn btn-sm btn-default pull-right">Home</a></h4>
                    </div>
                    <div class="panel-body" style="height:550px; overflow: scroll;">
                        <div class="row" id="about-product">
                            <div class="col-md-6">
                                <h2>About The Software : </h2>
                                <div class="about-text">     
                                    <p>
                                        ARVO ERP&reg; is a Brand name owned by Oga Technologies Private Limited.<br/>
                                        Manage your Construction business activities of :
                                    <ul><li>Pre-Sales</li><li>Sales</li><li> Procurement ( Material Requirement Planning )</li><li>Manage Contractors </li>
                                        <li>Contractor Tasks </li><li> Contractor Billing</li>
                                        </ul>
                                        
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img src="resources/image/3d-bevel-logo.png " class="img-responsive" alt="Product logo" width="350" height="350"/>
                            </div>
                        </div>
                        <br clear="all"/>
                        <div class="row" id="about-company">
                            <div class="col-md-6">
                                <h2>About the Company :</h2>
                                <div class="about-text">                    
                                    <p>Oga Technologies Private Limited aims to be a leading IT solutions
                                        and services company with an eye for Quality, Commitment and Delivery 
                                        thus helping customers achieve their business objectives.
                                    </p>
                                    <p>
                                        At Oga Technologies, our mission is to deliver software and hardware solutions with best quality and impeccable service at competitive prices for utmost client satisfaction by :
                                        innovations and use of new technologies, seamlessly integrating the process of project conceptualization to project implementation,
                                        providing excellent services, post implementation,
                                        constantly upgrading the skill set of our Human Resources.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <br> <br> <br> <br> <br> <br>
                                <img src="resources/image/OgaTechnologies-logo.png" alt="Oga technologies logo" class="img-responsive"  width="450" height="350"/>
                            </div>
                        </div>
                        <br clear="all"/>
                        <div class="row" id="contact">
                            <div class="col-md-12">
                                <h2>Contact us</h2> 
                                <div>   
                                    <div style="float: left; width: 100px;">Email </div>
                                    <div style="float:left;">&nbsp; <i class="fa fa-envelope " aria-hidden="true"></i> &nbsp;&nbsp; info@ogatechnologies.com</div><br/>
                                    <div style="float: left; width: 100px;">Phone  </div>
                                    <div style="float:left;">&nbsp; <i class="fa fa-phone" aria-hidden="true"></i> &nbsp;&nbsp; +91(755) 4082797, 2558221, 4270331</div><br/>
                                    <div style="float: left; width: 100px;">Fax  </div>
                                    <div style="float:left;"> &nbsp; <i class="fa fa-fax" aria-hidden="true"></i> &nbsp;&nbsp; +91(755) 2559665</div><br/>
                                    <div style="float: left; width: 100px;height: 50px;">Address  </div>
                                    <div style="float:left;">&nbsp; <i class="fa fa-address-card" aria-hidden="true"></i> &nbsp;&nbsp; Z-10, Lower Ground Floor, Zone-I, Maharana Pratap Nagar, Bhopal, Madhya Pradesh 462011, India.</div><br/>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function () {
                $('#toppageheader').html('About Us');

            });
        </script>

    </body>
</html>