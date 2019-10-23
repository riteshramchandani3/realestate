<!DOCTYPE html>
<!--
Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
Unauthorized copying of this file, via any medium is strictly prohibited
Proprietary and confidential.
Written by Oga Technologies, October 1,  2016.
-->
<html>
    <head>
        <title>Payment Register</title>
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
            @media print
            {
                /*@page {size: landscape}*/
                .non-printable { display: none; }
                #printable { display: block;}
            }
            @page {

                margin: 5mm;
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
                <div class="row">
                    <?php if ($this->session->flashdata('success')) { ?>
                        <div class="alert alert-success">
                            <button data-dismiss="alert" class="close" type="button">
                                <span aria-hidden="true">x</span><span class="sr-only">Close</span></button>

                            <?php echo $this->session->flashdata('success') ?>
                        </div>
                    <?php } else if ($this->session->flashdata('failure')) {
                        ?>
                        <div class="alert alert-danger">
                            <button data-dismiss="alert" class="close" type="button">
                                <span aria-hidden="true">x</span><span class="sr-only">Close</span></button>

                            <?php echo $this->session->flashdata('failure') ?>
                        </div>

                    <?php } ?>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel with-nav-tabs panel-default">
                            <div class="panel-heading">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tab1default" data-toggle="tab">New Payment Entry</a></li>
                                    <li><a href="#tab2default" data-toggle="tab">View Entry</a></li>
                                </ul>
                            </div>
                            <div class="panel-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="tab1default">

                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <h4>Payment Register</h4>

                                            </div>
                                            <div class="panel-body">
                                                <form action="<?php echo site_url('Payment/get_payment_reg_input'); ?>" method="post"  >

                                                    <?php $login_id = $this->session->userdata('user_id'); ?>
                                                    <?php
                                                    foreach ($this->View_applicant_info->get_login_info($login_id) as $row) {
                                                        ?> 
                                                        <?php $first_name = $row->first_name; ?>
                                                        <?php $last_name = $row->last_name; ?>

                                                    <?php } ?>

                                                    <div class="container" style="width:100%;">

                                                        <input type="hidden" value="<?php echo $first_name . nbs(1) . $last_name ?>" name="login_user"><br clear="ALL"/>
                                                        <input type="hidden" id="p_name" name="project_name"><br clear="ALL"/>
                                                        <input type="hidden"  name="current_date" value="<?php echo date("d-m-Y") ?>"><br clear="ALL"/>

                                                        <div class="row">
                                                            <div class="col-xs-2">
                                                                <label for="project_id">Project Name:</label>
                                                            </div>
                                                            <div class="col-xs-5">
                                                                <select class="form-control"  id="project_select" name="project_select" onchange="showblockss2(this.value)" onKeyUp="select(this.value);"> 
                                                                    <option value="selectproject">--Select--</option>      
                                                                    <?php
                                                                    foreach ($this->Pre_sales_model->project_tbl() as $w) {
                                                                        ?>
                                                                        <option  value="<?php echo $w->id; ?>"><?php echo $w->project_name; ?><?php ?></option>  
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <br clear="ALL"/>
                                                        <div class="row">
                                                            <div class="col-xs-2">
                                                                <label for="block_selectsss">Phase:</label>
                                                            </div>
                                                            <div class="col-xs-5 ">
                                                                <select class="form-control" id="block_selectsss" name="block_select"> 

                                                                </select>
                                                            </div>
                                                        </div>
                                                        <br clear="ALL"/>
                                                        <div class="row">
                                                            <div class="col-xs-2">
                                                                <label for="unittype">Unit-Type:</label>
                                                            </div>
                                                            <div class="col-xs-5">
                                                                <select class="form-control" id="unittype" onchange="getcategory(this.value);" name="unittype_select"> 
                                                                    <option value='0'>--Select--</option>      
                                                                    <?php
                                                                    foreach ($this->Pre_sales_model->unittype_tbl() as $w) {
                                                                        ?>
                                                                        <option value="<?php echo $w->type_name; ?>"><?php echo $w->type_name; ?></option>  
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <br clear="ALL"/>
                                                        <div class="row">
                                                            <div id="category">
                                                                <div class="form-group" id="selcat1" style="display: block;">
                                                                    <div class="col-xs-2"><label for="selcat">Block:</label></div>
                                                                    <div class="col-xs-5 ">
                                                                        <select class="form-control" id="selcat" name="category_select" onchange="show_unit()"> 

                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br clear="ALL"/>
                                                        <div class="row">
                                                            <div id="unit_no1">
                                                                <div class="form-group" id="unit_no" style="display: block;">
                                                                    <div class="col-xs-2"><label for="unit_no">unit_no:</label></div>
                                                                    <div class="col-xs-5 ">
                                                                        <select class="form-control" id="unit_no2" name="unit_no2" onchange="show_name();" > 

                                                                        </select>

                                                                        <!--input class="form-control" id="unit_no" name="unit_no" /-->
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
                                                            </div>

                                                        </div>
                                                        <br clear="ALL"/>
                                                        <div class="row">
                                                            <div class="col-xs-2">
                                                                <label >Mr.No.</label>
                                                            </div>
                                                            <div class="col-xs-5 ">
                                                                <input type="text" class="form-control" name="mr_no" size="38"  placeholder=""  size="30"  />
                                                            </div>

                                                        </div><br>

                                                        <div class="row">
                                                            <div class="col-xs-2">
                                                                <label>Mode of Payment:</label>
                                                            </div>
                                                            <div class="col-xs-5 ">
                                                                <select name="payment_mode" id="method" class="form-control">
                                                                    <option value="None">--Select--</option>
                                                                    <option value="Demand Draft">DD</option>
                                                                    <option value="Cheque">Cheque</option>
                                                                    <option value="NEFT">NEFT</option>
                                                                    <option value="RTGS">RTGS</option>
                                                                    <option value="Cash">Cash</option>
                                                                </select> 
                                                            </div>

                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="col-xs-2">
                                                                <label>Drawn on</label>
                                                            </div>
                                                            <div class="col-xs-5 ">
                                                                <select class="selectpicker" data-show-subtext="true" data-live-search="true" name="bank_details">
                                                                    <option >--Select--</option>
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
                                                                    <option data-subtext="" value="Private-Sector Banks[edit]">Private-Sector Banks[edit]</option>
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
                                                                    <option data-subtext="" value="Small Finance Banks[edit]">Small Finance Banks[edit]</option>
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
                                                                    <option data-subtext="" value="Local Area Banks[edit]">Local Area Banks[edit]</option>
                                                                    <option data-subtext="" value="Coastal Local Area Bank Limited">Coastal Local Area Bank Limited</option>
                                                                    <option data-subtext="" value="Krishna Bhima Samruddhi Local Area Bank Limited">Krishna Bhima Samruddhi Local Area Bank Limited</option>
                                                                    <option data-subtext="" value="Subhadra Local Area Bank Limited">Subhadra Local Area Bank Limited</option>
                                                                    <option data-subtext="" value="Payments Banks[edit]">Payments Banks[edit]</option>
                                                                    <option data-subtext="" value="Airtel Payments Bank">Airtel Payments Bank</option>
                                                                    <option data-subtext="" value="Fino Payments Bank">Fino Payments Bank</option>
                                                                    <option data-subtext="" value="Allahabad Bank">Allahabad Bank</option>
                                                                    <option data-subtext="" value="India Post Payments Bank">India Post Payments Bank</option>
                                                                    <option data-subtext="" value="Paytm Payments Bank">Paytm Payments Bank</option>

                                                                </select>
                                                            </div>
                                                            <div class="col-xs-4">
                                                            </div>
                                                        </div><br>

                                                        <div class="row">
                                                            <div class="col-xs-2">
                                                                <label for="contact" id="contact"></label>
                                                            </div>
                                                            <div class="col-xs-5 ">
                                                                <input type="text" class="form-control" name="ch_no" size="38"  placeholder=""  size="30"  />
                                                            </div>

                                                        </div>

                                                        <br>
                                                        <div class="row">
                                                            <div class="col-xs-2">
                                                                <label> Deposit Date:</label>
                                                            </div>


                                                            <div class="col-xs-5 ">
                                                                <div class="input-group">
                                                                    <input type="text" name="deposit_date"  class="form-control" id="date" name="Date" />
                                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <br clear="ALL"/>

                                                        <div class="row">
                                                            <div class="col-xs-2">
                                                                <label>Total Amount:</label>
                                                            </div>
                                                            <div class="col-xs-5 ">

                                                                <input type='text'  name="amount"   class="form-control" required/>
                                                            </div>
                                                        </div> <br>
                                                        <div class="row">
                                                            <div class="col-xs-2">
                                                                <label >Remark</label>
                                                            </div>
                                                            <div class="col-xs-5 ">
                                                                <textarea rows="3" width="100%" class="form-control" name="remark"></textarea>                                                        </div>

                                                        </div><br>
                                                        <div class="row">  
                                                            <div class="centered">
                                                                <button id="submit"  name="submit" class="btn btn-success" value="submit" type="submit" >Submit</button>

                                                            </div>
                                                        </div>




                                                        <script>

                                                            $(document).ready(function () {
                                                                $('#method').change(
                                                                        function () {
                                                                            var method = $('option:selected').val();
                                                                            if (this.value == "Demand Draft") {
                                                                                $('#contact').text("Demand Draft no.");
                                                                            } else if (this.value == "NEFT") {
                                                                                $('#contact').text("NEFT Transaction no.");
                                                                            } else if (this.value == "Cheque") {
                                                                                $('#contact').text("Cheque no");
                                                                            } else if (this.value == "RTGS") {
                                                                                $('#contact').text("RTGS Transaction no.");
                                                                            } else if (this.value == "Cash") {
                                                                                $('#contact').text("Cash");
                                                                            }
                                                                        });
                                                            });
                                                        </script>
                                                        <br>






                                                    </div>
                                                </form>
                                            </div >
                                        </div>



                                    </div>

                                    <div class="tab-pane fade" id="tab2default">
                                        <div id="printable">
                                            <div class="container" style="width:100%;" >


                                                <h4>
                                                    <b>Payment Register</b>
                                                    <button name="print" id="btnprint" value="print" class="btn btn-sm btn-default non-printable pull-right" onClick="print_this_doc();">Print&nbsp;&nbsp;<i class="fa fa-print"></i></button>
                                                </h4>
                                                <table class="table table-bordered table-striped" border='2'>

                                                    <tr style="background-color: #337ab7;color:#FFF;">
                                                        <th style="text-align: center;">  Sr.No. </th>
                                                        <th style="text-align: center;">  Name Of Customer </th>
                                                        <th style="text-align: center;">  Mode </th>

                                                        <th style="text-align: center;">  Unit No </th> 
                                                        <th style="text-align: center;">  Project </th> 
                                                        <th style="text-align: center;">  Deposit Date </th> 
                                                        <th style="text-align: center;">  MR.No </th> 
                                                        <th style="text-align: center;">  Date </th> 
                                                        <th style="text-align: center;">  Amount </th> 
                                                        <th style="text-align: center;">  Instrument No </th> 
                                                        <th style="text-align: center;">  Bank Details </th> 
                                                        <th style="text-align: center;">  Remark </th> 

                                                    </tr>
                                                    <tbody>
                                                        <?php foreach ($this->Payment_model->get_payment_statement() as $row) {
                                                            ?> 


                                                            <tr style="text-transform: capitalize;text-align: center;">
                                                                <td><?php echo $row['id']; ?></td>
                                                                <td><?php echo $row['appl_name']; ?></td>
                                                                <td><?php echo $row['payment_mode']; ?></td>
                                                                <td><?php echo $row['unit_no']; ?></td>
                                                                <td><?php echo $row['project_name']; ?></td>
                                                                <td><?php echo $row['deposit_date']; ?></td>
                                                                <td><?php echo $row['mr_no']; ?></td>
                                                                <td><?php echo $row['date']; ?></td>
                                                                <td><?php echo $row['amount']; ?></td>
                                                                <td><?php echo $row['ch_no']; ?></td>
                                                                <td><?php echo $row['bank_details']; ?></td>
                                                                <td><?php echo $row['remark']; ?></td>
                                                            <?php } ?>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                            </div>

                                        </div>

                                    </div>




                                    <script LANGUAGE = "JavaScript" >


                                        $(document).ready(function () {
                                            $('#toppageheader').html('Register');
                                            $("a:contains(Payment Register)").parent().addClass('active');
                                              $("a:contains(Receipt)").parents().addClass('open');
                                        });

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
                                                    }


                                                }
                                            });
                                            showblockss6(arg)
                                        }

                                        function  showblockss6(arg)
                                        {
                                            // alert(arg);
                                            var argc = arg;
                                            $.ajax({
                                                type: "POST",
                                                url: "<?php echo site_url('Pre_sales/getprojectblocks66'); ?>",
                                                data: {arg: arg},
                                                success: function (msg) {
                                                    // alert(msg);
                                                    document.getElementById('p_name').value = msg.trim();
                                                }


                                            }
                                            );
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
                                            var blname = document.getElementById('block_selectsss').value;
                                            var m = document.getElementById('unittype');
                                            //var typename = document.getElementById('unittype').value;
                                            //alert(pid+"/"+blname+"/"+typename);
                                            $.ajax({
                                                type: "POST",
                                                url: "<?php echo site_url('Pre_sales/getcategoryy'); ?>",
                                                data: {typeid, typeid},
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
                                            }
                                            );
                                        }

                                        $(function () {
                                            $("#date").datepicker({
                                                dateFormat: 'dd-mm-yy',
                                                changeMonth: true,
                                                changeYear: true,
                                                yearRange: '-100y:c+nn',
                                            });
                                        });

                                        function print_this_doc() {
                                            var printContents = document.getElementById('printable').innerHTML;
                                            var originalContents = document.body.innerHTML;
                                            document.body.innerHTML = printContents;
                                            var css = '@page { size: landscape; }',
                                                    head = document.head || document.getElementsByTagName('head')[0],
                                                    style = document.createElement('style');

                                            style.type = 'text/css';
                                            style.media = 'print';

                                            if (style.styleSheet) {
                                                style.styleSheet.cssText = css;
                                            } else {
                                                style.appendChild(document.createTextNode(css));
                                            }

                                            head.appendChild(style);
                                            window.print();
                                            document.body.innerHTML = originalContents;
                                        }

                                    </script>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br/>


        <script>

            $(document).ready(function () {
                $(window).keydown(function (event) {
                    if (event.keyCode == 13) {
                        event.preventDefault();
                        return false;
                    }
                });
            });

        </script>




    </body>
</html>