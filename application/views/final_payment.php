<!DOCTYPE html>
<!--
Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
Unauthorized copying of this file, via any medium is strictly prohibited
Proprietary and confidential.
Written by Oga Technologies, October 1,  2016.
-->
<html>
    <head>
        <title>Direct Payment</title>
        <?php
        include_once('assets/html_head_links.php');
        ?>

        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
        <!-- script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script --> 
        <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
        <style>

            .panel.with-nav-tabs .panel-heading{
                padding: 5px 5px 0 5px;
            }
            .astrick{
                color:red;
            }
            .panel.with-nav-tabs .nav-tabs{
                border-bottom: none;
            }
            .panel.with-nav-tabs .nav-justified{
                margin-bottom: -1px;
            }
            /********************************************************************/
            /*** PANEL DEFAULT ***/
            .with-nav-tabs.panel-default .nav-tabs > li > a,
            .with-nav-tabs.panel-default .nav-tabs > li > a:hover,
            .with-nav-tabs.panel-default .nav-tabs > li > a:focus {
                color: #777;
            }
            .with-nav-tabs.panel-default .nav-tabs > .open > a,
            .with-nav-tabs.panel-default .nav-tabs > .open > a:hover,
            .with-nav-tabs.panel-default .nav-tabs > .open > a:focus,
            .with-nav-tabs.panel-default .nav-tabs > li > a:hover,
            .with-nav-tabs.panel-default .nav-tabs > li > a:focus {
                color: #777;
                background-color: #ddd;
                border-color: transparent;
            }
            .with-nav-tabs.panel-default .nav-tabs > li.active > a,
            .with-nav-tabs.panel-default .nav-tabs > li.active > a:hover,
            .with-nav-tabs.panel-default .nav-tabs > li.active > a:focus {
                color: #555;
                background-color: #fff;
                border-color: #ddd;
                border-bottom-color: transparent;
            }
            .with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu {
                background-color: #f5f5f5;
                border-color: #ddd;
            }
            .with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > li > a {
                color: #777;   
            }
            .with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > li > a:hover,
            .with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > li > a:focus {
                background-color: #ddd;
            }
            .with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > .active > a,
            .with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > .active > a:hover,
            .with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > .active > a:focus {
                color: #fff;
                background-color: #555;
            }
            textarea {
                resize: none;
            }
            .nav-tabs > li > a{
                color: #fff !important;

            }
            .nav-tabs > li.active > a{
                color: #fff !important;
                background-color: #337AB7 !important;
            }
            .nav-tabs > li >  a:hover{
                color: #fff !important;
                background-color: #337AB7 !important;
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
                <?php if ($this->session->flashdata('success')) { ?>
                    <div class="alert alert-success">
                        <button data-dismiss="alert" class="close"  type="button">
                            <span aria-hidden="true">x</span><span  class="sr-only">Close</span></button>

                        <?php echo $this->session->flashdata('success') ?>
                    </div>
                <?php } else if ($this->session->flashdata('failure')) {
                    ?>
                    <div class="alert alert-danger">
                        <button data-dismiss="alert" class="close"  type="button">
                            <span aria-hidden="true">x</span><span  class="sr-only">Close</span></button>

                        <?php echo $this->session->flashdata('failure') ?>
                    </div>

                <?php } ?>
                <div class="row">

                    <div class="panel with-nav-tabs panel-primary">
                        <div class="panel-heading">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab1default" data-toggle="tab">Create Receipt</a></li>
                                <li><a href="#tab2default" data-toggle="tab">View Receipt</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1default">
                            <div class="panel panel-primary">
                                <div class="panel-body">

                                    <form action="<?php echo site_url('Payment/finalpaymentinputs'); ?>" method="post" autocomplete="off" >
                                        <form class="form-inline"> 

                                            <?php $login_id = $this->session->userdata('user_id'); ?>

                                            <input type="hidden" name="login_id" value="<?php echo $login_id; ?>" />
                                            <div class="container">

                                                <div class="row">
                                                    <div class="col-xs-2">
                                                        <label for="project_id">Project Name:</label>
                                                    </div>
                                                    <div class="col-xs-5">
                                                        <select class="form-control"  id="project_select" name="project_select" onchange="showblockss2(this.value)" > 
                                                            <option value="">--Select--</option>      
                                                            <?php
                                                            foreach ($this->Pre_sales_model->project_tbl() as $w) {
                                                                ?>
                                                                <option  value="<?php echo $w->id; ?>"><?php echo $w->project_name . ' ' . $w->block; ?><?php ?></option>  
                                                                <?php
                                                            }
                                                            ?>
                                                        </select>
                                                        <input type="hidden" name="project_name" value="<?php echo $w->project_name; ?>"/>
                                                    </div><span class="astrick" style="font-size:20px;">*</span><span><?php echo "<font style='color:red;font-size:15px; display:inline;'>" . form_error('project_select') . "</font>"; ?></span>
                                                </div>
                                                <br clear="ALL"/>
                                                <div class="row">
                                                    <div class="col-xs-2">
                                                        <label for="block_selectsss">Phase:</label>
                                                    </div>
                                                    <div class="col-xs-5 ">
                                                        <select class="form-control" id="block_selectsss" name="block_select"> 
                                                            <option value="">--Select--</option>
                                                        </select>
                                                    </div><span class="astrick" style="font-size:20px;">*</span><span><?php echo "<font style='color:red;font-size:15px; display:inline;'>" . form_error('block_select') . "</font>"; ?></span>
                                                </div>
                                                <br clear="ALL"/>
                                                <div class="row">
                                                    <div class="col-xs-2">
                                                        <label for="unittype">Unit-Type:</label>
                                                    </div>
                                                    <div class="col-xs-5">
                                                        <select class="form-control" id="unittype" onchange="getcategory(this.value);" name="unittype_select"> 
                                                            <option value=''>--Select--</option>      
                                                            <?php
                                                            foreach ($this->Pre_sales_model->unittype_tbl() as $w) {
                                                                ?>
                                                                <option value="<?php echo $w->type_name; ?>"><?php echo $w->type_name; ?></option>  
                                                                <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div><span class="astrick" style="font-size:20px;">*</span><span><?php echo "<font style='color:red;font-size:15px; display:inline;'>" . form_error('unittype_select') . "</font>"; ?></span>
                                                </div>
                                                <br clear="ALL"/>
                                                <div class="row">
                                                    <div id="category">
                                                        <div class="form-group" id="selcat1" style="display: block;">
                                                            <div class="col-xs-2"><label for="selcat">Block:</label></div>
                                                            <div class="col-xs-5 ">
                                                                <select class="form-control" id="selcat" name="category_select" onchange="show_unit()"> 
                                                                    <option value="">--Select--</option>
                                                                </select>
                                                            </div><span class="astrick" style="font-size:20px;">*</span><span><?php echo "<font style='color:red;font-size:15px; display:inline;'>" . form_error('category_select') . "</font>"; ?></span>
                                                        </div>
                                                    </div>
                                                </div>


                                                <br clear="ALL"/>
                                                <div class="row">
                                                    <div id="unit_no1">
                                                        <div class="form-group" id="unit_no" style="display: block;">
                                                            <div class="col-xs-2"><label for="unit_no">Unit No:</label></div>
                                                            <div class="col-xs-5 ">
                                                                <select class="form-control" id="unit_no2" name="unit_no" onchange="show_name();" > 
                                                                    <option value="">--Select--</option>
                                                                </select>


                                                                <!--input class="form-control" id="unit_no" name="unit_no" /-->
                                                            </div><span class="astrick" style="font-size:20px;">*</span><span><?php echo "<font style='color:red;font-size:15px; display:inline;'>" . form_error('unit_no') . "</font>"; ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br clear="ALL"/>

                                                <br clear="ALL"/>
                                                <div class="row">
                                                    <div id="stage">
                                                        <div class="form-group" id="stage" style="display: block;">
                                                            <div class="col-xs-2"><label for="stage">Stage:</label></div>
                                                            <div class="col-xs-5 ">
                                                                <select class="form-control" id="stages" name="stages"  onchange="show_stage_amt(this.value);"  > 
                                                                    <option value="">--Select--</option>
                                                                </select>                                   
                                                            </div><span class="astrick" style="font-size:20px;">*</span><span><?php echo "<font style='color:red;font-size:15px; display:inline;'>" . form_error('stages') . "</font>"; ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br clear="ALL"/>
                                                <div class="row">
                                                    <div id="stage">
                                                        <div class="form-group" id="stage" style="display: block;">
                                                            <div class="col-xs-2"><label for="stage">Stage Due Amount:</label></div>
                                                            <div class="col-xs-5 ">
                                                                <input class="form-control" type="text" id="stage_amt" name="stage_amt" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br clear="ALL"/>
                                                <div class="row">
                                                    <div class="col-xs-2">
                                                        <label>Received from:</label>
                                                    </div>
                                                    <div class="col-xs-5 ">
                                                        <input type="text" id="name" name="appl_name" class="form-control" readonly/>
                                                        <input type="hidden" id="customer_id" name="customer_id" class="form-control" readonly/>
                                                    </div>

                                                </div>
                                                <br clear="ALL"/>
                                                <div class="row">
                                                    <div class="col-xs-2">
                                                        <label>Payment(or cheque)Date:</label>
                                                    </div>


                                                    <div class="col-xs-5 ">
                                                        <div class="input-group">
                                                            <input type="text" name="chq_submit_date" class="form-control" id="date" onchange="checktax(this.value);"   />
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                        </div>
                                                    </div>

                                                </div>


                                                <br clear="ALL"/>

                                                <script>
                                                    $('form').bind("keypress", function (e) {
                                                    if (e.keyCode == 13) {
                                                    e.preventDefault();
                                                    return false;
                                                    }
                                                    });
                                                    $(document).ready(function () {
                                                    $('#method').change(
                                                            function () {
                                                            var method = $('option:selected').val();
                                                            if (this.value == "Demand Draft") {
                                                            document.getElementById('payment_mode_no').value = '';
                                                            $('#contact').text("Demand Draft no.");
                                                            } else if (this.value == "NEFT") {
                                                            document.getElementById('payment_mode_no').value = 'NEFT Payment';
                                                            $('#contact').text("NEFT Transaction no.");
                                                            } else if (this.value == "Cheque") {
                                                            document.getElementById('payment_mode_no').value = '';
                                                            $('#contact').text("Cheque no");
                                                            } else if (this.value == "RTGS") {
                                                            document.getElementById('payment_mode_no').value = '';
                                                            $('#contact').text("RTGS Transaction no.");
                                                            } else if (this.value == "Cash") {
                                                            document.getElementById('payment_mode_no').value = '';
                                                            $('#contact').text("Cash");
                                                            }
                                                            });
                                                    });
                                                </script>
                                                <br>
                                                <?php
                                                $taxlist = $this->Payment_model->getalltaxes();
                                                foreach ($taxlist as $jj) {
                                                    if ($jj->tax_name == 'CGST') {
                                                        $CGST = $jj->tax_percentage;
                                                    } else if ($jj->tax_name == 'SGST') {
                                                        $SGST = $jj->tax_percentage;
                                                    } else {
                                                        
                                                    }
                                                }
                                                ?>
                                                <input type="hidden" value="<?php echo $CGST ?>" id="cgst">
                                                <input type="hidden" value="<?php echo $SGST; ?>" id="sgst">
                                                <div class="row">
                                                    <div class="col-xs-2">
                                                        <label>Amount:</label>
                                                    </div>
                                                    <div class="col-xs-5 ">
                                                        <input type="number" id="price" name="amount" class="form-control" readonly/><br>
                                                    </div>
                                                </div>
                                                <br>
                                                <div id="cgstdiv" class="row">
                                                    <div class="col-xs-2">
                                                        <label>CGST: &nbsp;<?php echo $CGST ?> %</label>
                                                    </div>
                                                    <div class="col-xs-5 ">
                                                        <input type="text" id="tax3" name="CGST" class="form-control" readonly/>
                                                    </div>
                                                </div>
                                                <br>
                                                <div id="sgstdiv" class="row">
                                                    <div class="col-xs-2">
                                                        <label>SGST: &nbsp;<?php echo $SGST; ?> %</label>
                                                    </div>
                                                    <div class="col-xs-5 ">
                                                        <input type="text" id="tax4" name="SGST" class="form-control" readonly/>
                                                    </div>
                                                </div>
                                                <br>
                                                <div id="stdiv" class="row" style="display:none;">
                                                    <div class="col-xs-2">
                                                        <label>Service Tax: &nbsp;<span id="sttax"></span>%</label>
                                                    </div>
                                                    <div class="col-xs-5 ">
                                                        <input type="hidden" id="taxpercent" name="taxpercent" class="form-control" readonly/>
                                                        <input type="hidden" id="taxliability" name="taxliability" class="form-control" readonly/>
                                                        <input type="text" id="servicetax3" name="servicetax3" class="form-control" readonly/>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-xs-2">
                                                        <label>Total Amount:</label>
                                                    </div>
                                                    <div class="col-xs-5 ">

                                                        <input type='text' id="pay" name="amount_paid" step="0.01" onblur="decide_tax(this.value)" onblur="word.innerHTML = convertNumberToWords(this.value)" onkeypress="return isNumberKey(event)" class="form-control" required/>
                                                    </div>
                                                </div>
                                                <br>
                                                <!--div class="row">
                                                    <div class="col-xs-2">
                                                        <label>In words:</label>
                                                    </div>
                                                    <div class="col-xs-5 ">
                                                        <div id="word">Only/-</div>
                                                    </div>

                                                </div-->
                                                <br>
                                                <div class="row">
                                                    <div class="col-xs-2">
                                                        <label>Installment No</label>
                                                    </div>
                                                    <div class="col-xs-5 ">
                                                        <input type="text" name="installment_no" class="form-control" /> 
                                                    </div>
                                                    <div class="col-xs-4">
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-xs-2">
                                                        <label>Arrears</label>
                                                    </div>
                                                    <div class="col-xs-5 ">
                                                        <input type="text" name="arrears" class="form-control" /> 
                                                    </div>
                                                    <div class="col-xs-4">
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-xs-2">
                                                        <label>Other Charges</label>
                                                    </div>
                                                    <div class="col-xs-5 ">
                                                        <input type="text" name="other_charges" class="form-control" /> 
                                                    </div>
                                                    <div class="col-xs-4">
                                                    </div>
                                                </div>
                                                <br clear="ALL"/>
                                                <div class="row">
                                                    <div class="col-xs-2">
                                                        <label>Mode of Payment:</label>
                                                    </div>
                                                    <div class="col-xs-5 ">
                                                        <select name="mode_of_payment" id="method" class="form-control">
                                                            <option value="">--Select--</option>
                                                            <option value="Demand Draft">DD</option>
                                                            <option value="Cheque">Cheque</option>
                                                            <option value="NEFT">NEFT</option>
                                                            <option value="RTGS">RTGS</option>
                                                            <option value="Cash">Cash</option>
                                                        </select> 
                                                    </div><span class="astrick" style="font-size:20px;">*</span><span><?php echo "<font style='color:red;font-size:15px; display:inline;'>" . form_error('mode_of_payment') . "</font>"; ?></span>

                                                </div>
                                                <!--br>
                                                <div class="row">
                                                    <div class="col-xs-2">
                                                        <label>Mode of Payment</label>
                                                    </div>
                                                    <div class="col-xs-5 ">
                                                        <input type="text" name="mode_of_payment" onkeyup="copy()" class="form-control" /> 
                                                    </div>
                                                    <div class="col-xs-4">
                                                    </div>
                                                </div-->

                                                <br>

                                                <div class="row" id="show" style="display:block;">
                                                    <div class="col-xs-2">
                                                        <label>Drawn on</label>
                                                    </div>
                                                    <div class="col-xs-5 ">
                                                        <select class="selectpicker" data-show-subtext="true" data-live-search="true" name="drawn_on">
                                                            <option  value="">--Select--</option>
                                                            <option data-subtext="" value="Bank of Baroda">Bank of Baroda</option>
                                                            <option data-subtext="" value="Bank of India">Bank of India</option>
                                                            <option data-subtext="" value="Bank of Maharashtra">Bank of Maharashtra</option>
                                                            <option data-subtext="" value="Canara Bank">Canara Bank</option>
                                                            <option data-subtext="" value="Corporation Bank">Corporation Bank</option>
                                                            <option data-subtext="" value="Dena Bank">Dena Bank</option>
                                                            <option data-subtext="" value="Indian Bank">Indian Bank</option>
                                                            <option data-subtext="" value="Indian Overseas Bank">Indian Overseas Bank</option>
                                                            <option data-subtext="" value="IDBI Bank">IDBI Bank</option>
                                                            <option data-subtext="" value="Oriental Bank of Commerce">Oriental Bank of Commerce</option>
                                                            <option data-subtext="" value="Punjab National Bank">Punjab National Bank</option>
                                                            <option data-subtext="" value="State Bank of India">State Bank of India</option>
                                                            <option data-subtext="" value="Syndicate Bank">Syndicate Bank</option>
                                                            <option data-subtext="" value="UCO Bank">UCO Bank</option>
                                                            <option data-subtext="" value="Union Bank of India">Union Bank of India</option>
                                                            <option data-subtext="" value="United Bank of India">United Bank of India</option>
                                                            <option data-subtext="" value="Vijaya Bank">Vijaya Bank</option>
                                                            <option data-subtext="" value="Private-Sector Banks">Private-Sector Banks</option>
                                                            <option data-subtext="" value="Axis Bank">Axis Bank</option>
                                                            <option data-subtext="" value="Bandhan Bank">Bandhan Bank</option>
                                                            <option data-subtext="" value="Catholic Syrian Bank">Catholic Syrian Bank</option>
                                                            <option data-subtext="" value="City Union Bank">City Union Bank</option>
                                                            <option data-subtext="" value="DCB Bank">DCB Bank</option>
                                                            <option data-subtext="" value="Dhanlaxmi Bank">Dhanlaxmi Bank</option>
                                                            <option data-subtext="" value="Federal Bank">Federal Bank</option>
                                                            <option data-subtext="" value="HDFC Bank">HDFC Bank</option>
                                                            <option data-subtext="" value="ICICI Bank">ICICI Bank</option>
                                                            <option data-subtext="" value="IDFC Bank">IDFC Bank</option>
                                                            <option data-subtext="" value="IndusInd Bank">IndusInd Bank</option>
                                                            <option data-subtext="" value="Jammu and Kashmir Bank">Jammu and Kashmir Bank</option>
                                                            <option data-subtext="" value="Karnataka Bank">Karnataka Bank</option>
                                                            <option data-subtext="" value="Karur Vysya Bank">Karur Vysya Bank</option>
                                                            <option data-subtext="" value="Kotak Mahindra Bank">Kotak Mahindra Bank</option>
                                                            <option data-subtext="" value="Lakshmi Vilas Bank">Lakshmi Vilas Bank</option>
                                                            <option data-subtext="" value="Nainital Bank">Nainital Bank</option>
                                                            <option data-subtext="" value="RBL Bank">RBL Bank</option>
                                                            <option data-subtext="" value="South Indian Bank">South Indian Bank</option>
                                                            <option data-subtext="" value="Tamilnad Mercantile Bank">Tamilnad Mercantile Bank</option>
                                                            <option data-subtext="" value="YES Bank">YES Bank</option>
                                                            <option data-subtext="" value="Small Finance Banks">Small Finance Banks</option>
                                                            <option data-subtext="" value="AU Small Finance Bank">AU Small Finance Bank</option>
                                                            <option data-subtext="" value="Capital Small Finance Bank">Capital Small Finance Bank</option>
                                                            <option data-subtext="" value="Equitas Small Finance Bank">Equitas Small Finance Bank</option>
                                                            <option data-subtext="" value="ESAF Small Finance Bank">ESAF Small Finance Bank</option>
                                                            <option data-subtext="" value="Fincare Small Finance Bank">Fincare Small Finance Bank</option>
                                                            <option data-subtext="" value="Janalakshmi Small Finance Bank">Janalakshmi Small Finance Bank</option>
                                                            <option data-subtext="" value="Suryoday Small Finance Bank">Suryoday Small Finance Bank</option>
                                                            <option data-subtext="" value="Ujjivan Small Finance Bank">Ujjivan Small Finance Bank</option>
                                                            <option data-subtext="" value="Utkarsh Small Finance Bank">Utkarsh Small Finance Bank</option>
                                                            <option data-subtext="" value="RGVN small finance bank">RGVN small finance bank</option>
                                                            <option data-subtext="" value="Local Area Banks">Local Area Banks</option>
                                                            <option data-subtext="" value="Coastal Local Area Bank Limited">Coastal Local Area Bank Limited</option>
                                                            <option data-subtext="" value="Krishna Bhima Samruddhi Local Area Bank Limited">Krishna Bhima Samruddhi Local Area Bank Limited</option>
                                                            <option data-subtext="" value="Subhadra Local Area Bank Limited">Subhadra Local Area Bank Limited</option>
                                                            <option data-subtext="" value="Payments Banks">Payments Banks</option>
                                                            <option data-subtext="" value="Airtel Payments Bank">Airtel Payments Bank</option>
                                                            <option data-subtext="" value="Fino Payments Bank">Fino Payments Bank</option>
                                                            <option data-subtext="" value="Central Bank of India">Central Bank of India</option>
                                                            <option data-subtext="" value="Allahabad Bank">Allahabad Bank</option>
                                                            <option data-subtext="" value="India Post Payments Bank">India Post Payments Bank</option>
                                                            <option data-subtext="" value="Paytm Payments Bank">Paytm Payments Bank</option>

                                                        </select>
                                                    </div>
                                                    <div class="col-xs-4">
                                                    </div>
                                                </div>

                                                <br>

                                                <div class="row">
                                                    <div class="col-xs-2">
                                                        <label for="contact" id="contact"></label>
                                                    </div>
                                                    <div class="col-xs-5 ">
                                                        <input type="text" class="form-control" id="payment_mode_no" name="payment_mode_no" size="38"  placeholder="" size="30" required/>
                                                    </div>

                                                </div>
                                                <br>



                                                <div class="row">
                                                    <div class="col-xs-2">
                                                        <label>Description</label>
                                                    </div>
                                                    <div class="col-xs-5 ">
                                                        <textarea class="form-control" name="descreption"></textarea>
                                                    </div>
                                                    <div class="col-xs-4">
                                                    </div>
                                                </div>

                                                <br>
                                            </div>                     

                                            <div class="hidden-lg hidden-md hidden-sm"
                                                 <i class="fa fa-scissors" style="position:absolute; margin-top: 7px; margin-left: 10px;" aria-hidden="true"></i><hr style="border-top: dashed 2px; width: 100%; margin-left: -10px;" />

                                                <div class="container" style=" width:100%; border:1px solid #000;">

                                                    <div class="row"><br> 
                                                        <div class="text-center"><label>Acknowledgement</label></div><br>
                                                        <div class="form-inline">
                                                            <label>I </label>
                                                            <label><div id="get" class="keyword"></div></label>
                                                            <label>have received the orignal Receipt No. </label>
                                                            <label><?php echo $receipt_no; ?></label>
                                                            <label>issued by </label>
                                                            <label><?php echo $company_name; ?></label>
                                                            <label>against the payment of Rs. </label>
                                                            <label> <div id="get_pay" class="keyword"></div></label>


                                                            <br><br><br>

                                                        </div>                    
                                                    </div>

                                                    <div class="row">

                                                        <div class="col-xs-9">
                                                        </div>
                                                        <div class="col-xs-3 text-center">
                                                            <label style="padding-right: 24px !important;">Signature</label>
                                                        </div>

                                                    </div><br><br>

                                                </div>
                                            </div>


                                            <br>
                                            <br>
                                            <div class="row text-center">
                                                <input class="btn btn-success btn-3d" type="submit" value="submit"/> 
                                            </div>
                                            <br>
                                            <br>
                                            </div>
                                            </div>
                                        </form>
                                </div>

                                <div class="tab-pane fade" id="tab2default">

                                    <div class="container" style="width:100%;" >

                                        <div class="row">
                                            <div class="panel panel-primary">
                                                <div class="panel-heading"><h4>Search Applicant</h4></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-10 search-col-md-10">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">Name</span>
                                                            <input type="text" name="search_text" id="search_text" autocomplete="off" onkeyup="getres(this.value);"  placeholder="Search" class="form-control" />
                                                        </div>

                                                        <div  id="result"></div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"> Project</span>
                                                            <select name="project_id" id="project_id" class="form-control">

                                                                <option value='0'>--Select--</option>

                                                                <?php
                                                                foreach ($this->View_applicant_info->getprojectname() as $row) {
                                                                    ?>
                                                                    <option value="<?php echo $row->id; ?>"> <?php echo $row->project_name . nbs(1) . $row->block; ?></option>

                                                                    <?php
                                                                }
                                                                ?>
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"> Unit Number</span>
                                                            <input type="text" name="unit_no" id="unitno" class="form-control"  placeholder="(optional)takes priority"/>                           
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-2 search-col-md-2">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <button class="btn btn-primary" type="button" value="submit" onclick="getallapplicants();" >Search&nbsp;&nbsp;&nbsp;<li class="fa fa-search"></li></button>

                                                        <button class="btn btn-danger btn-3d"    type="reset" onclick="reset_results();">Clear &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-refresh"></i> </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="panel panel-primary" id="panelsuccess" style="display: none;">
                                                <div class="panel-heading">
                                                    <h4>Applicants List</h4>
                                                </div>
                                                <div class="panel-body scrollpane" style="width:100%;overflow:auto; max-height:500px;" >
                                                        <!--<form class="form-inline" action="<?php echo site_url('Payment/applicant_doc'); ?>" method = "post">-->
                                                    <div class="row" id="tablespace">

                                                    </div>
                                                    <!--</form>-->
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>



                                <script type="text/javascript">

                                    function getres(arg)
                                    {
                                    var alphabet = arg;
                                    //alert(alphabet);
                                    $.ajax({
                                    type: "POST",
                                            url: "<?php echo site_url('Payment/getsearchwords'); ?>",
                                            data: {alphabet: alphabet},
                                            success: function (msg) {
                                            $('#result').html(msg).show();
                                            }
                                    });
                                    }

                                    function setthis(arg)
                                    {
                                    //alert(arg);
                                    document.getElementById('search_text').value = arg;
                                    $('#result').hide();
                                    }


                                    function getallapplicants()
                                    {

                                    var username = document.getElementById('search_text').value;
                                    var projectid = document.getElementById('project_id').value;
                                    var unitno = document.getElementById('unitno').value;
                                    $.ajax({
                                    type: "POST",
                                            url: "<?php echo site_url('Payment/all_appl_payment') ?>",
                                            data: {uname: username, pid: projectid, unitno: unitno},
                                            success: function (msg) {
                                            //alert(msg);
                                            document.getElementById('tablespace').innerHTML = msg;
                                            $('#panelsuccess').css('display', '');
                                            }

                                    });
                                    }



                                    function get_docs_for_this_applicant(uid) {
                                    window.location.href = 'show_appl_pay?uid=' + uid;
                                    }
                                    function getfor_this_applicant(uid) {
                                    window.location.href = 'show_appl_info?uid=' + uid;
                                    }
                                    function get_invoice_for_applicant(uid) {
                                    window.location.href = 'show_appl_invoice?uid=' + uid;
                                    }
                                    /* 
                                     $.ajax({
                                     type: "POST",
                                     url: "<?php //echo site_url('Welcome/show_applicant_docs')                                                      ?>",
                                     data: {'Sendid':uid},
                                     success: function (msg) {
                                     alert("Success: "+msg);
                                     
                                     },
                                     error: function(err_msg){
                                     alert("error: " + err_msg.responseText);
                                     console.log(err_msg);
                                     }
                                     
                                     });
                                     }*/


                                    function reset_results() {
                                    $('#panelsuccess').hide();
                                    $('#search_text').val('');
                                    $('#project_id').prop('selectedIndex', 0);
                                    $('#unit_no').val('');
                                    }

                                    $(document).ready(function () {
                                    $('#toppageheader').html('Payment Receipts');
                                    $("a:contains(Payment Receipts)").parent().addClass('active');
                                    $("a:contains(Payment Receipts)").parents().addClass('open');
                                    });
                                </script>
                            </div>


                        </div>
                    </div>
                </div>
                <br/>

                <script>

                    $("#date").on("keydown keypress keyup", false);
                    function decide_tax(arg)
                    {
                    if ($('#taxliability').val() == '')
                    {
                    calculate(arg);
                    }
                    else
                    {
                    calculate_st(arg);
                    }
                    }
                    function calculate(arg)
                    {
                    var x = arg / 1.12;
                    var cgst = document.getElementById('cgst').value;
                    var sgst = document.getElementById('sgst').value;
                    var csgst = Number(cgst) + Number(sgst);
                    var tax3 = x * cgst / 100;
                    var tax4 = x * sgst / 100;
                    var reversecalc1 = x * csgst / 100;
                    var reversecalc = x - reversecalc1;
                    document.getElementById('price').value = x.toFixed(2); //reversecalc;
                    document.getElementById('tax3').value = tax3.toFixed(2);
                    document.getElementById('tax4').value = tax4.toFixed(2);
                    }
                    function calculate_st(arg)
                    {
                    var tl = $('#taxliability').val();
                    var tr = $('#taxpercent').val();
                    var factor = 1 + (tl * tr) / 10000;
                    var x = arg / factor;
                    var st = (arg - x).toFixed(2);
                    $('#servicetax3').val(st);
                    var price = $('#pay').val() - st;
                    $('#price').val(price);
                    }



                    function checktax(arg)
                    {
                    var check = arg;
                    var first = '2012-04-01';
                    var second = '2017-06-30';
                    var a = new Date(first).getTime();
                    var b = new Date(second).getTime();
                    var checkdt = new Date(check).getTime();
                    if (checkdt >= a && checkdt <= b)
                    {
                    $('#cgstdiv').hide();
                    $('#sgstdiv').hide();
                    $('#stdiv').show();
                    $.ajax({
                    type:"POST",
                            dataType: 'JSON',
                            url:"<?php echo site_url('Payment/getservicetax') ?>",
                            data:{givendate:check},
                            success:function(msg){
                            var q = JSON.stringify(msg);
                            var jsonobj = JSON.parse(q);
                            for (var i = 0; i < jsonobj.length; i++)
                            {
                            $('#sttax').html(jsonobj[i]['tax_percentage']);
                            $('#taxpercent').val(jsonobj[i]['tax_percentage']);
                            $('#taxliability').val(jsonobj[i]['tax_liability']);
                            }
                            }

                    });
                    }


                    else
                    {
                    $('#cgstdiv').show();
                    $('#sgstdiv').show();
                    $('#stdiv').hide();
                    }






                    }
                </script>

                <script>


                    var data = new Array();
                    window.copy = function ()
                    {
                    data[0] = document.getElementById('name').value;
                    data[1] = document.getElementById('pay').value;
                    document.getElementById('get').innerHTML = data[0];
                    document.getElementById('get_pay').innerHTML = data[1];
                    //                    document.getElementById('get').innerHTML= document.getElementById('add').value;
                    //                    return true;
                    }
                </script>

                <script LANGUAGE = "JavaScript" >



                    function showblockss2(arg)
                    {
                    //alert(arg);
                    var argc = arg;
                    $.ajax({
                    type: "POST",
                            url: "<?php echo site_url('Pre_sales/getprojectblocks'); ?>",
                            data: {arg: argc},
                            success: function (msg) {
                            //alert(msg);
                            var msgarray = msg.split(',');
                            var selectptr = document.getElementById('block_selectsss');
                            selectptr.length = 0;
                            var opt = document.createElement('option');
                            opt.value = 0;
                            opt.text = "--Select--";
                            selectptr.appendChild(opt);
                            for (var i = 0; i < msgarray.length; i++)
                            {
                            var opt = document.createElement('option');
                            opt.value = msgarray[i].trim();
                            opt.text = msgarray[i].trim();
                            selectptr.appendChild(opt);
                            document.getElementById("block_selectsss").selectedIndex = "1";
                            $("#block_selectsss").prop('disabled', 'disabled');
                            }
                            }
                    });
                    }

                    function getcategory(arg)
                    {
                    //alert(arg);
                    var typeid = arg;
                    if (arg == 0)
                    {
                    var selptr = document.getElementById('selcat');
                    selptr.length = 0;
                    var opt = document.createElement('option');
                    opt.value = 0;
                    opt.text = "--Select--";
                    }
                    var pid = document.getElementById('project_select').value;
                    var block = document.getElementById('block_selectsss').value;
                    var m = document.getElementById('unittype');
                    //var typename = document.getElementById('unittype').value;
                    //alert(pid+blname+typeid);
                    $.ajax({
                    type: "POST",
                            url: "<?php echo site_url('Pre_sales/getcategoryy_inv'); ?>",
                            data: { pid:pid, block:block, typeid:typeid},
                            success: function (msg) {
                            //alert(msg);
                            var msgarray = msg.split(',');
                            var selptr = document.getElementById('selcat');
                            selptr.length = 0;
                            var opt = document.createElement('option');
                            opt.value = 0;
                            opt.text = "--Select--";
                            selptr.appendChild(opt);
                            for (var i = 0; i < msgarray.length - 1; i++)
                            {
                            var opt = document.createElement('option');
                            opt.value = msgarray[i].trim();
                            opt.text = msgarray[i].trim();
                            selptr.appendChild(opt);
                            }
                            }
                    });
                    $.ajax({
                    type: "POST",
                            url: "<?php echo site_url('Pre_sales/getfootmtrlist'); ?>",
                            data: {typeid, typeid},
                            success: function (msg) {
                            //alert(msg);
                            var msgarray = msg.split(',');
                            var selptr = document.getElementById('plot_size_mtr');
                            selptr.length = 0;
                            var opt = document.createElement('option');
                            opt.value = 0;
                            opt.text = "--Select--";
                            selptr.appendChild(opt);
                            for (var i = 0; i < msgarray.length - 1; i++)
                            {
                            var opt = document.createElement('option');
                            opt.value = msgarray[i].trim();
                            opt.text = msgarray[i].trim();
                            selptr.appendChild(opt);
                            }

                            }
                    });
                    $.ajax({
                    type: "POST",
                            url: "<?php echo site_url('Payment/getallstages'); ?>",
                            data: {typeid, typeid},
                            success: function (msg) {
                            //alert(msg);
                            var msgarray = msg.split(',');
                            var selptr = document.getElementById('stages');
                            selptr.length = 0;
                            var opt = document.createElement('option');
                            opt.value = 0;
                            opt.text = "--Select--";
                            selptr.appendChild(opt);
                            for (var i = 0; i < msgarray.length - 1; i++)
                            {
                            var opt = document.createElement('option');
                            opt.value = msgarray[i].trim();
                            opt.text = msgarray[i].trim();
                            selptr.appendChild(opt);
                            }

                            }
                    });
                    }
                    function plotsizeft()
                    {


                    var plot_size_mtr = $('#plot_size_mtr').val();
                    //  alert(plot_size_mtr);document.getElementById("submit").disabled = true;
                    var unittype = $('#unittype').val();
                    //  alert(unittype);
                    $.ajax({
                    type: "POST",
                            url: "<?php echo site_url('Pre_sales/getplotdetail'); ?>",
                            data: {unittype: unittype, plot_size_mtr: plot_size_mtr},
                            success: function (msg) {
                            //alert(msg);
                            //alert('ldjslaf');
                            var msgarray = msg.split(',');
                            var selectptr = document.getElementById('plot_size_ft');
                            //selectptr.length = 0;
                            //var opt = document.createElement('option');
                            //opt.value = 0;
                            //opt.text = "--Select--";
                            //selectptr.appendChild(opt);
                            // for (var i = 0; i < msgarray.length; i++)
                            //  {
                            // var opt = document.createElement('option');
                            // opt.value = msgarray[i].trim();
                            //opt.text = msgarray[i].trim();
                            //selectptr.value =msgarray[i].trim();//.appendChild(opt);
                            // $('#plot_size_ft').val(msgarray[0]);
                            document.getElementById('plot_size_ft').value = msgarray[0].trim();
                            var aa = document.getElementById('plot_size_ft').value;
                            //  alert(msgarray[0]);
                            // $('#plot_sqmt').(val(msgarray[1]).trim());
                            //alert(  $('#plot_sqft').val(msgarray[2]).trim();

                            // }
                            if (aa == '')
                            {
                            document.getElementById('submit').disabled = true;
                            } else if (document.getElementById('unit_no2').value == 0)
                            {
                            document.getElementById('submit').disabled = true;
                            } else
                            {
                            document.getElementById('submit').disabled = false;
                            }
                            }
                    });
                    }

                    function btnenable()
                    {
                    var aa = document.getElementById('plot_size_ft').value;
                    if (document.getElementById('unit_no2').value == 0)
                    {
                    document.getElementById('submit').disabled = true;
                    } else if (aa == '')
                    {
                    document.getElementById('submit').disabled = true;
                    } else
                    {
                    document.getElementById('submit').disabled = false;
                    }
                    }

                    function show_unit()
                    {
                    var pid = document.getElementById('project_select').value;
                    var block = document.getElementById('block_selectsss').value;
                    var unittype = document.getElementById('unittype').value;
                    var cat = document.getElementById('selcat').value;
                    //alert(pid+block+unittype+cat);
                    $.ajax({
                    type: "POST",
                            url: "<?php echo site_url('Pre_sales/getunit_no_available1'); ?>",
                            data: {pid: pid, block: block, unittype: unittype, cat: cat},
                            success: function (msg) {
                            //alert(msg);
                            var msgarray = msg.split(',');
                            var selptr = document.getElementById('unit_no2');
                            selptr.length = 0;
                            var opt = document.createElement('option');
                            opt.value = 0;
                            opt.text = "--Select--";
                            selptr.appendChild(opt);
                            for (var i = 0; i < msgarray.length - 1; i++)
                            {
                            var opt = document.createElement('option');
                            opt.value = msgarray[i].trim();
                            opt.text = msgarray[i].trim();
                            selptr.appendChild(opt);
                            }
                            }
                    });
                    }



                    function show_stage_amt(arg)
                    {
                    var unit_no = document.getElementById('unit_no2').value;
                    var unittype = document.getElementById('unittype').value;
                    var stage = arg;
                    //  alert(unittype);
                    $.ajax({
                    type: "POST",
                            url: "<?php echo site_url('payment/getstageamt'); ?>",
                            data: {unit_no: unit_no, stage: stage, unittype: unittype},
                            success: function (msg) {
                            // alert(msg);


                            var msgarray = msg.split(',');
                            var selectptr = document.getElementById('stage_amt');
                            document.getElementById('stage_amt').value = msgarray[0].trim();
                            var aa = document.getElementById('stage_amt').value;
                            }
                    }
                    );
                    }



                    function show_name()
                    {
                    var pid = document.getElementById('project_select').value;
                    var block = document.getElementById('block_selectsss').value;
                    var unittype = document.getElementById('unittype').value;
                    var cat = document.getElementById('selcat').value;
                    var unit_no = document.getElementById('unit_no2').value;
                    //alert(pid+block+unittype+cat+unit_no);
                    $.ajax({
                    type: "POST",
                            url: "<?php echo site_url('Pre_sales/getunit_no_availablename'); ?>",
                            data: {pid: pid, block: block, unittype: unittype, cat: cat, unit_no: unit_no},
                            success: function (msg) {
                            //alert(msg);


                            var msgarray = msg.split(',');
                            var selectptr = document.getElementById('name');
                            document.getElementById('name').value = msgarray[0].trim();
                            var aa = document.getElementById('name').value;
                            }
                    });
                    $.ajax({
                    type: "POST",
                            url: "<?php echo site_url('Payment/getappl_id'); ?>",
                            data: {unit_no: unit_no},
                            success: function (msg) {
                            //alert(msg);


                            var msgarray = msg.split(',');
                            var selectptr = document.getElementById('customer_id');
                            document.getElementById('customer_id').value = msgarray[0].trim();
                            var aa = document.getElementById('customer_id').value;
                            }
                    });
                    $.ajax({
                    type: "POST",
                            url: "<?php echo site_url('Payment/getstage'); ?>",
                            data: {unit_no: unit_no},
                            success: function (msg) {
                            //alert(msg);

                            var msgarray = msg.split(',');
                            var selptr = document.getElementById('stages');
                            selptr.length = 0;
                            var opt = document.createElement('option');
                            opt.value = 0;
                            opt.text = "--Select--";
                            selptr.appendChild(opt);
                            for (var i = 0; i < msgarray.length - 1; i++)
                            {
                            var opt = document.createElement('option');
                            opt.value = msgarray[i].trim();
                            opt.text = msgarray[i].trim();
                            selptr.appendChild(opt);
                            }


                            }
                    }
                    );
                    }








                    function print_this_doc() {

                    window.print();
                    }

                    $(document).ready(function () {

                    var amtrs = $('#amtrs').val();
                    $('#word').text(convertNumberToWords(amtrs));
                    $('#toppageheader').html('Receipt & Payment <span class="pull-right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="print" id="btnprint" value="print" class="btn btn-sm btn-default" onClick="print_this_doc();">Print&nbsp;&nbsp;<i class="fa fa-print"></i></button></span>');
                    $("a:contains(Receipt & Payment)").parent().addClass('active');
                    });
                    function getrupees()
                    {
                    var rs = document.getElementById('number').value;
                    document.getElementById('rsinput').innerHTML = rs;
                    }
                    function getcheque()
                    {
                    var chq = document.getElementById('chequeinput').value;
                    document.getElementById('chqinput').innerHTML = chq;
                    var recp = document.getElementById('recptspn').innerHTML;
                    document.getElementById('recptinput').innerHTML = recp;
                    }

                    function convertNumberToWords(amount) {

                    var words = new Array();
                    words[0] = '';
                    words[1] = 'One';
                    words[2] = 'Two';
                    words[3] = 'Three';
                    words[4] = 'Four';
                    words[5] = 'Five';
                    words[6] = 'Six';
                    words[7] = 'Seven';
                    words[8] = 'Eight';
                    words[9] = 'Nine';
                    words[10] = 'Ten';
                    words[11] = 'Eleven';
                    words[12] = 'Twelve';
                    words[13] = 'Thirteen';
                    words[14] = 'Fourteen';
                    words[15] = 'Fifteen';
                    words[16] = 'Sixteen';
                    words[17] = 'Seventeen';
                    words[18] = 'Eighteen';
                    words[19] = 'Nineteen';
                    words[20] = 'Twenty';
                    words[30] = 'Thirty';
                    words[40] = 'Forty';
                    words[50] = 'Fifty';
                    words[60] = 'Sixty';
                    words[70] = 'Seventy';
                    words[80] = 'Eighty';
                    words[90] = 'Ninety';
                    amount = amount.toString();
                    var atemp = amount.split(".");
                    var number = atemp[0].split(",").join("");
                    var n_length = number.length;
                    var words_string = "";
                    if (n_length <= 9) {
                    var n_array = new Array(0, 0, 0, 0, 0, 0, 0, 0, 0);
                    var received_n_array = new Array();
                    for (var i = 0; i < n_length; i++) {
                    received_n_array[i] = number.substr(i, 1);
                    }
                    for (var i = 9 - n_length, j = 0; i < 9; i++, j++) {
                    n_array[i] = received_n_array[j];
                    }
                    for (var i = 0, j = 1; i < 9; i++, j++) {
                    if (i == 0 || i == 2 || i == 4 || i == 7) {
                    if (n_array[i] == 1) {
                    n_array[j] = 10 + parseInt(n_array[j]);
                    n_array[i] = 0;
                    }
                    }
                    }
                    value = "";
                    for (var i = 0; i < 9; i++) {
                    if (i == 0 || i == 2 || i == 4 || i == 7) {
                    value = n_array[i] * 10;
                    } else {
                    value = n_array[i];
                    }
                    if (value != 0) {
                    words_string += words[value] + " ";
                    }
                    if ((i == 1 && value != 0) || (i == 0 && value != 0 && n_array[i + 1] == 0)) {
                    words_string += "Crores ";
                    }
                    if ((i == 3 && value != 0) || (i == 2 && value != 0 && n_array[i + 1] == 0)) {
                    words_string += "Lakh ";
                    }
                    if ((i == 5 && value != 0) || (i == 4 && value != 0 && n_array[i + 1] == 0)) {
                    words_string += "Thousand ";
                    }
                    if (i == 6 && value != 0 && (n_array[i + 1] != 0 && n_array[i + 2] != 0)) {
                    words_string += "Hundred and ";
                    } else if (i == 6 && value != 0) {
                    words_string += "Hundred ";
                    }
                    }
                    words_string = words_string.split("  ").join(" ");
                    }
                    return words_string;
                    }
                </script>

                <script>

                    $(function () {
                    $("#date").datepicker({
                    dateFormat: 'yy-mm-dd',
                            changeMonth: true,
                            changeYear: true,
                            yearRange: '-100y:c+nn',
                            //  minDate: 0,
                    });
                    });
                    $('#method').change(function () {
                    if ($(this).val() == 'Cash') {
                    $('#show').hide();
                    //$('#drawn_on').prop("disabled", false);
                    } else {
                    $('#show').show();
                    }
                    });
                </script>
                <script>

                    $(document).ready(function () {
                    $(window).keydown(function (event) {
                    if (event.keyCode == 13) {
                    event.preventDefault();
                    return false;
                    }
                    });
                    });
                    
                    
                    function isNumberKey(evt)
                    {
                    var charCode = (evt.which) ? evt.which : event.keyCode
                            if (charCode > 31 && (charCode < 45 || charCode > 57))
                            return false;
                    return true;
                    }
                </script>




                </body>
                </html>