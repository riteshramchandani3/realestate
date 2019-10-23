<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
    <head>
        <title>Flat Cost Calculation</title>
        <?php
        require_once('assets/html_head_links.php');
        ?>
        <style>


            @page {
                size: A4;   /* auto is the initial value */
                margin: 5mm 10mm 5mm 10mm;  /* this affects the margin in the printer settings */

            }
            @media print
            {
                /*@page {size: landscape}*/
                .non-printable { display: none; }
                #printable { display: block;}
                .table-bordered {
                    border: 1px solid #000 !important;
                    margin-top: 10px;

                }
                .table-bordered > thead > tr > th,
                .table-bordered > tbody > tr > th,
                .table-bordered > tfoot > tr > th,
                .table-bordered > thead > tr > td,
                .table-bordered > tbody > tr > td,
                .table-bordered > tfoot > tr > td {
                    border: 1px solid #000 !important;
                }
                html, body {
                    font-size: 12px !important;
                    width: 210mm !important;
                    height: 297mm !important;
                    /*overflow: hidden;*/
                    background: #FFF;
                }

                .table{
                    font-size: 12px !important;
                }
                ol{
                    font-size: 8px !important;
                }
                .table > tbody > tr > td{
                    padding: 5px!important;
                }

                .outerdiv{
                    height: 1470px!important;
                }


            }

            .panel-primary {
                border-color: #000 !important;
            }
            input{
                padding-left: 15px;
            }
            /*   input{
                 border: none;
                 width: 100px;
             }
           .form-control[readonly]{
                 background-color: #fff;
                 border: none;
                 box-shadow: none;
                 padding: 0px 0px; 
             }
             .border{
                 border: 1px solid #5084ed;
                 border-color: 1px solid #5084ed;
                 color: #5084ed;
             } */
            .table-bordered {
                border: 1px solid #000 !important;
            }
            .table-bordered > thead > tr > th,
            .table-bordered > tbody > tr > th,
            .table-bordered > tfoot > tr > th,
            .table-bordered > thead > tr > td,
            .table-bordered > tbody > tr > td,
            .table-bordered > tfoot > tr > td {
                border: 1px solid #000 !important;
            }   
            /*This is Sir Ashwin Juwekar's Style*/
            .outerdiv
            {
                border-radius: 10px;
                margin:auto;
                margin-top:20px;
                height:1600px;
                width:1040px;
                border:2px solid black;
            }
            .innertop
            {
                border-bottom: 1px solid black;
                height:80px;
                width:1040px;
                border-top-left-radius: 10px;
                border-top-right-radius: 10px;
                text-align: center;
                padding-top: 8px;
            }
            .top_label
            {


                font-size: 22px;
                height: 22px;
                display:block;
            }
            .top_label2
            {
                border-top: 2px solid black;
                display:block;
                margin-top:10px;
                text-align: left;
                height:28px;
                line-height: 25px;
                font-size:20px;

            }
            .middleleft
            {
                width:250px;
                heigth:20px;
                margin-left:20px;
                line-height: 20px;
                display : inline-block;
                font-size:20px;
                margin-top:5px;

            }
            .middleright
            {
                width:355px;
                heigth:57px;
                margin-left:20px;
                margin-bottom:5px;
                line-height: 40px;
                display : inline-block;
                font-size: 27px;
                /*background :orange;*/


                margin-top:5px;
            }
            .labeldiv
            {
                width:1000px;
                height: 30px;
                line-height: 30px;
            }
            .blocked_div
            {
                height:50px;
                width:700px;
                border:2px solid black;
                margin-left:20px;
                margin-top:10px;
                display : inline-block;
            }
            .rs
            {
                font-size: 28px;
            }
            .ratespan
            {
                font-size:20px;
                /*background:green;*/
                width:300px;
                height:40px;
                display:inline-block;
                position:relative;
                margin-top:10px;
            }
            .extralbl
            {
                font-weight: Bold;
                font-size: 25px;
                margin-left: 100px;
                margin-top: 20px;
            }
            .lowertbl
            {
                margin-left:20px;
                font-size:20px;
                padding-left : 5px;


            }
            .lowertbl2
            {
                border-top : 2px solid black;

                width:1040px;
                height:auto;
                font-size: 20px;
                font-weight: bold;
            }
            .notelbl
            {
                font-size: 20px;
                font-weight: lighter;
                margin-left:10px;
                margin-bottom: 5px;
            }
            p
            {
                font-weight: lighter;
                margin-top: -10px;
                margin-left:10px;
                font-size:12px;

            }
            .middlerightselect{
                    font-size: 20px;
    height: 40px;
    width: 220px;
    font-weight: bold;
                margin-left: -100px !important;
    /* top: -8px; */
    /* margin-right: 65px; */
    position: absolute;
            }

            @media print
            {
                .grey{
                    background:#aaa !important;
                }
                  select::-ms-expand {	
                    display: none; 
                }
                select{
                    -webkit-appearance: none;
                    appearance: none;
                    width: auto;
                    border: none !important; 
                    box-shadow: none ;
                    font-size: 20px;
                }
            }

        </style>
    </head>

    <body>

        <?php
        require_once('assets/top_menu.php');
        require_once('assets/pre_sales_side_menu.php');
        ?>

        <div class="main">
            <div class="container  non-printable">
                <a href="javascript: history.go(-1)" class="btn btn-primary pull-right clickable">Back</a>
            </div>
            <div id="printable">
                <div class="container">


                    <?php '<br><br><br>' . $_GET['id']; ?>
                    <form class="form-inline" action="<?php //echo site_url('pre_sales/get_visitor_Flat_Input');     ?>" method="post" autocomplete="off" name="Form"  onsubmit="return ValidationEvent()" > 


                        <input type="hidden" id="currentdate" name="currentdate" value="<?php //echo date('Y-m-d');     ?>">
                        <?php
                        foreach ($this->Sheet_model->get_company_taxCGST() as $row) {
                            ?> 
                            <?php $result12 = $row->tax_percentage; ?>
                        <?php } ?>
                        <?php
                        foreach ($this->Sheet_model->get_company_taxSGST() as $row) {
                            ?> 
                            <?php $result11 = $row->tax_percentage; ?>
                        <?php } ?>

                        <?php $result5 = $result12 + $result11 ?>


                        <?php
                        $id = $this->input->get('id');
                        // echo $id;


                        foreach ($this->Pre_sales_model->view_sheet1($id) as $row) {
                            ?>
                            <?php $project_id = $row->project_id; ?>
                            <?php $prospect_id = $row->prospect_id; ?>
                            <?php $name = $row->name; ?>
                            <?php $mobile_no = $row->mobile; ?>
                            <?php $block = $row->block; ?>
                            <?php $category = $row->category; ?>
                            <?php $type = $row->type; ?>
                            <?php $unit_no = $row->unit_no; ?>
                            <?php $flat_carpet_area_mt = $row->flat_carpet_area_mt; ?>
                            <?php $flat_carpet_area_ft = $row->flat_carpet_area_ft; ?>
                            <?php $cost_carpet_area = $row->cost_carpet_area; ?>
                            <?php $cost_ca_ref_rate = $row->cost_ca_ref_rate; ?>
                            <?php $total_unit_cost_as_per_carpet_area = $row->total_unit_cost_as_per_carpet_area; ?>
                            <?php $cost_balcony_area = $row->cost_balcony_area; ?>
                            <?php $cost_balcony_ref_rate = $row->cost_balcony_ref_rate; ?>
                            <?php $total_balcony_area = $row->total_balcony_area; ?>
                            <?php $cost_balcony_area_2 = $row->cost_balcony_area_2; ?>
                            <?php $cost_balcony_ref_rate_2 = $row->cost_balcony_ref_rate_2; ?>
                            <?php $total_balcony_area_2 = $row->total_balcony_area_2; ?>
                            <?php $proportionate_common_area = $row->proportionate_common_area; ?>
                            <?php $proportionate_common_area_ref_rate = $row->proportionate_common_area_ref_rate; ?>
                            <?php $total_proportionate_common_area = $row->total_proportionate_common_area; ?>
                            <?php $flat_parking = $row->flat_parking; ?>
                            <?php $maintenance_cost_ref_rate = $row->maintenance_cost_ref_rate; ?>
                            <?php $mpseb_cost_ref_rate = $row->mpseb_cost_ref_rate; ?>
                            <?php $gst = $row->gst; ?>
                            <?php $cost_payble_to_company = $row->cost_payble_to_company; ?>
                            <?php $discount = $row->discount; ?>
                            <?php $total_cost = $row->total_cost; ?>
                            <?php $discussion = $row->discussion; ?>
                            <?php $cost_wash_area = $row->cost_wash_area; ?>
                            <?php $cost_washarea_ref_rate = $row->cost_washarea_ref_rate; ?>
                            <?php $total_wash_area = $row->total_wash_area; ?>

                            <?php $login_id = $row->login_id; ?>
                        <?php } ?>
                        <?php
                        foreach ($this->View_applicant_info->get_login_info($login_id) as $row) {
                            ?> 
                            <?php //$login_usernsme = $row->username; ?>
                            <?php $first_name = $row->first_name; ?>
                            <?php $last_name = $row->last_name; ?>
                            <?php $username = $row->username; ?>

                        <?php } ?>
                        <?php
                        $a = $this->Company_info_model->get_attribute_value('RERA Regd No.');
                        $rerano = $a;
                        ?>


                        <input  id="gst" type="hidden" value="<?php echo $result5 ?>"/>

                        <input   type="hidden" name="category" value="<?php echo $category ?>"/>



                        <div class='outerdiv'>
                            <div class="innertop">
                                <label class="top_label">Sheet No. 1 </label>
                                <label class="top_label2"><?php echo date('d-m-Y'); ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $mobile_no; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="margin-left: 550;"><?php echo $rerano ?></span></label>
                            </div>
                            <div class="labeldiv"><label class="middleleft">Name</label>:-<label class="middleright"><?php echo $name; ?></label></div>
                            <?php
                            $data['project_id'] = $project_id;
                            foreach ($this->Pre_sales_model->getproject_info($data) as $row) {
                                ?>
                                <?php $project_name = $row->project_name; ?>
                            <?php } ?>
                            <?php foreach ($this->Pre_sales_model->show_unit_info($unit_no, $project_id, $block) as $row) {
                                ?>
                                <?php $flat_type = $row->flat_type; ?>
                            <?php } ?>

                            <div class="labeldiv"><label class="middleleft">Project Name.</label>:-<label class="middleright"><?php echo $project_name; ?> <?php echo $block; ?></label></div>
                            <div class="labeldiv"><label class="middleleft">Unit No.</label>:-<label class="middleright"><?php echo $unit_no; ?></label></div>
                            <div class="labeldiv"><label class="middleleft">Type</label>:-<label class="middleright"> <?php echo $type . nbs(1) . $flat_type .  nbs(1) . $category ?></label>
                              <select class="middlerightselect">
                                    <option value="0"></option>
                                    <option value="Open">Open Parking</option>
                                    <option value="Covered">Covered Parking</option>
                                </select> 
                            </div>
                          
                            <div class="labeldiv"><label class="middleleft">Flat Carpet Area</label>:-<label class="middleright">  <?php echo $flat_carpet_area_mt; ?>  SQM</label></div>
                            <div class="labeldiv"><label class="middleleft">Flat Carpet Area</label>:-<label class="middleright"><?php echo number_format((float) $flat_carpet_area_ft, 2, '.', ''); ?> SQFt</label></div>

                            <div class='blocked_div'><label class="middleleft">Unit Cost as per carpet Area</label>:- <font class="rs">Rs.</font><label class="middleright grey"><?php echo number_format((float) $total_unit_cost_as_per_carpet_area, 2, '.', ''); ?></label></div><span class="ratespan">@<?php echo number_format((float) $cost_ca_ref_rate, 2, '.', ''); ?></span>
                            <div class='blocked_div'><label class="middleleft">Balcony Area (1) <?php echo number_format((float) $cost_balcony_area, 2, '.', ''); ?> SQM</label>:- <font class="rs">Rs.</font><label class="middleright grey"><?php echo number_format((float) $total_balcony_area, 2, '.', ''); ?></label></div><span class="ratespan">@ <?php echo number_format((float) $cost_balcony_ref_rate, 2, '.', ''); ?></span>
                            <div class='blocked_div'><label class="middleleft">Balcony Area (2) <?php echo number_format((float) $cost_balcony_area_2, 2, '.', ''); ?> SQM</label>:- <font class="rs">Rs.</font><label class="middleright grey"> <?php echo number_format((float) $total_balcony_area_2, 2, '.', ''); ?></label></div><span class="ratespan">@<?php echo number_format((float) $cost_balcony_ref_rate_2, 2, '.', ''); ?></span>
                            <div class='blocked_div'><label class="middleleft">Wash Area</label>:- <font class="rs">Rs.</font><label class="middleright grey"><?php echo number_format((float) $total_wash_area, 2, '.', ''); ?></label></div><span class="ratespan">@<?php echo number_format((float) $cost_washarea_ref_rate, 2, '.', ''); ?></span>
                            <div class='blocked_div'><label class="middleleft">Total(1+2+3+4)</label>:- <font class="rs">Rs.</font><label class="middleright grey"><?php echo number_format((float) $total_balcony_area_2 + $total_balcony_area + $total_unit_cost_as_per_carpet_area+$total_wash_area, 2, '.', ''); ?></label></div><span class="ratespan"> </span><!---->
                            <div class='blocked_div'><label class="middleleft">Proportonate Common Area</label>:- <font class="rs">Rs.</font><label class="middleright grey"> <?php echo number_format((float) $total_proportionate_common_area, 2, '.', ''); ?></label></div><span class="ratespan">@<?php echo number_format((float) $proportionate_common_area_ref_rate, 2, '.', ''); ?> </span>
                            <div class='blocked_div'><label class="middleleft">Parking</label>:- <font class="rs">Rs.</font><label class="middleright grey"> <?php echo number_format((float) $flat_parking, 2, '.', ''); ?></label></div><span class="ratespan">fix </span>

                            <?php foreach ($this->Pre_sales_model->get_charge_amount() as $row) {
                                ?>
                                <?php $charge_amt = $row->charge_amount; ?>
                                <?php $charge_amount1 = $row->charge_amount * 18 / 100; ?>
                                <?php $charge_amount = $row->charge_amount + $charge_amount1; ?>
                                <?php //$charge_amount = $charge_amount1 + $charge_amount2;  ?>


                            <?php } ?>   


                            <div class='blocked_div'><label class="middleleft">Maintanance</label>:- <font class="rs">Rs.</font><label class="middleright grey"> <?php echo number_format((float) $maintenance_cost_ref_rate, 2, '.', ''); ?></label></div><span class="ratespan">@18 for GST </span>
                            <!--div class='blocked_div'><label class="middleleft">Other Fixed Charges<br>(MPSEB)&WCC</label>:- <font class="rs">Rs.</font><label class="middleright grey"> <?php echo number_format((float) $mpseb_cost_ref_rate, 2, '.', ''); ?></label></div><span class="ratespan"></span-->
                            <div class='blocked_div'><label class="middleleft">GST Tax</label>:- <font class="rs">Rs.</font><label class="middleright grey"> <?php echo number_format((float) $gst, 2, '.', ''); ?>   </label></div><span class="ratespan"></span>
                            <div class='blocked_div'><label class="middleleft">Cost Payable to company</label>:- <font class="rs">Rs.</font><label class="middleright grey"> <?php echo number_format((float) $cost_payble_to_company, 2, '.', ''); ?></label></div><span class="ratespan"></span>
                            <div class='blocked_div'><label class="middleleft">Discount</label>:- <font class="rs">Rs.</font><label class="middleright"> <?php echo number_format((float) $discount, 2, '.', ''); ?></label></div><span class="ratespan"></span>
                            <div class='blocked_div'><label class="middleleft">Total</label>:- <font class="rs">Rs.</font><label class="middleright grey"> <?php echo number_format((float) $total_cost, 2, '.', ''); ?></label></div><span class="ratespan">+Registry+Society+Monthly+Operational Charges+Mutation</span>

                            <label class="extralbl">Extra Charges</label><br>
                            <table class="lowertbl">
                                <tr align="center"><td style="border:4px solid black; width:200px;">REGISTRY CHARGES</td><td style="border:4px solid black; width:200px;">As per Actual </td><td style="border:0px solid black; width: 400px; text-align: right;">Based on Prevailing Collector Guide Line rates</td></tr>
                            </table>

                            <!--label class="notelbl">Note : Registration Stamp Duty, Fees and other chareges of Plot Registry shall be charged as per actual additionally</label-->
                            <table  class="lowertbl2" style="font-size:14px;">
                                <tr><td>Other Charges to be bear by the customer</td></tr>
                                <tr><td><b style="text-decoration: underline;">Note</b><br> 
                                        <p style='margin-top:2px !important;'>
                                            1. Registration Stamp duty, Fees & other charges as per actual.(shall be born by the customer).</p>
                                        <p>2. Membership charge of Society Shall be paid additionally at the time of possession @ Rs. 550.00 as & Rs. 25000.00 for Common Corpus fund for residents welfare Society.</p>
                                        <p>3.Bank Documentation Charges Extra (shall be born by the customer).</p>
                                        <p>4. Mortgage Stamp Fees & Other Charges shall be born by the customer.</p>
                                        <p>5. Namantaran Charges (Advocate fees) shall be Charged Extra.</p>
                                        <p>6. Meter Connection Charges As per actual Shall be the responsibility of the allottee.</p>
                                        <p>7. Water Meter Application with department shall be the responsibility of the allottee.</p>
                                        <p>8. GST @ 18% shall be charged additionally (As applicable, abatment of land component @ 6% . Net effective rate of GST for GST for Duplex is @ 12%).</p>
                                        <p>9. Agreement Registration shall be charged additionally as per actual (Shall be born by Customer as applicable).</p>
                                    </td></tr>
                                <tr><td></td></tr>
                            </table>


                        </div> <!-- end of outer div -->    
                        <br>
                        <label> Executive Name :- &nbsp;<?php echo $first_name . nbs(1) . $last_name; ?> /id : <?php echo $username; ?></label>


                        <br><br><br><br>
                        <!--table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td class="col-xs-12" colspan="6" style="background:#92D050; color: #FF0000; padding: 15px;">

                                        <div class="row">
                                            <div class="col-xs-4">

                                            </div>
                                            <div class="col-xs-4 text-center">
                                                SHEET NO. 1
                                            </div>
                                            <div class="col-xs-4 text-right">
                                                <p style="font-weight:200 !important;"> <?php echo date('d-m-Y'); ?></p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Name
                                    </td>
                                    <td colspan="2">
                        <?php //echo $name; ?>
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Mobile
                                    </td>
                                    <td colspan="2">
                        <?php //echo $mobile_no; ?>
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                </tr>
                                <tr>
                        <?php /*   $data['project_id'] = $project_id;
                          foreach ($this->Pre_sales_model->getproject_info($data) as $row) {
                          ?>
                          <?php $project_name = $row->project_name; ?>
                          <?php } */ ?>
                                    <td>
                                        Project
                                    </td>
                                    <td colspan="2">
                        <?php //echo $project_name;  ?> <?php //echo $block;  ?>
                                        <input type="hidden" value="<?php //echo $project_id; ?>" name="project_id" > 
                                        <input type="hidden" value="<?php //echo $block;  ?>" name="block" >
                                        <input type="hidden" value="<?php //echo $project_name;  ?> <?php echo $block; ?>" />
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Unit No
                                    </td>
                                    <td colspan="2">
                        <?php ///echo $unit_no;  ?>
                                        <input type="hidden" value="<?php //echo $unit_no; ?>" name="unit_no" readonly/>
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Type
                                    </td>
                                    <td colspan="2">
                        <?php //echo $type  ?>
                                        <input type="hidden" value="<?php //echo $type ?>" name="type"  readonly/>
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Flat Carpet Area ( Sq. Mt.)
                                    </td>
                                    <td colspan="2">
                        <?php //echo $flat_carpet_area_mt;  ?>    

                                    </td>
                                    <td>
                                        &nbsp;Sq. Mt.
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Flat Carpet Area ( Sq. Ft.)
                                    </td>
                                    <td colspan="2">
                        <?php //echo number_format((float) $flat_carpet_area_ft, 2, '.', '');  ?>


                                    </td>
                                    <td>
                                        Sq. Ft.
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                </tr>

                                <tr>
                                    <td>

                                    </td>

                                    <td>
                                        <b>Sq. Mt.</b>
                                    </td>
                                    <td>
                                        <b>Rate per Sq. Ft. </b>
                                    </td>
                                    <td>
                                        <b>1 Sq. Mt. = 10.76 Sq. Ft.</b>
                                    </td>
                                    <td>
                                        <b>Amount per Sq. Mt.</b>
                                    </td>

                                </tr>

                                <tr>
                                    <td>
                                        Unit Cost as per carpet area
                                    </td>

                                    <td>
                        <?php //echo number_format((float) $flat_carpet_area_mt, 2, '.', '');  ?>

                                    </td>
                                    <td>
                                        Rs.<?php //echo number_format((float) $cost_ca_ref_rate, 2, '.', '');  ?>



                                    </td>


                                    <td>

                                        10.76
                                    </td>
                                    <td>
                                        Rs. <?php //echo number_format((float) $total_unit_cost_as_per_carpet_area, 2, '.', '');  ?>

                                    </td>
                                </tr>

                                <tr>

                                    <td>
                                        Balcony Area (1) 
                                    </td>

                                    <td>
                        <?php //echo number_format((float) $cost_balcony_area, 2, '.', '');  ?>

                                    </td>
                                    <td>
                                        Rs.  <?php //echo number_format((float) $cost_balcony_ref_rate, 2, '.', '');  ?>

                                    </td>

                                    <td>

                                        10.76
                                    </td>

                                    <td>
                                        Rs.<?php //echo number_format((float) $total_balcony_area, 2, '.', '');  ?>

                                    </td>

                                </tr>
                                <tr>

                                    <td>
                                        Balcony Area (2) 
                                    </td>

                                    <td>
                        <?php //echo number_format((float) $cost_balcony_area_2, 2, '.', '');  ?>

                                    </td>
                                    <td>
                                        Rs.<?php //echo number_format((float) $cost_balcony_ref_rate_2, 2, '.', '');  ?>

                                    </td>

                                    <td>

                                        10.76
                                    </td>

                                    <td>
                                        Rs. <?php //echo number_format((float) $total_balcony_area_2, 2, '.', '');  ?>
                                    </td>

                                </tr>

                                <tr>

                                    <td>
                                        Total (1+2+3)
                                    </td>

                                   <td colspan="2">                                  
                                    </td>
                                    <td>                                  
                                    </td>



                                    <td>
                                        Rs.  <b>  <?php //echo number_format((float) $total_balcony_area_2 + $total_balcony_area + $total_unit_cost_as_per_carpet_area, 2, '.', '');  ?></b>
                                    </td>


                                </tr>
                                <tr>

                                    <td>
                                        Proportionate Common area.
                                    </td>

                                    <td>
                        <?php //echo number_format((float) $proportionate_common_area, 2, '.', '');  ?>


                                    </td>
                                    <td>
                                        Rs. <?php //echo number_format((float) $proportionate_common_area_ref_rate, 2, '.', '');  ?>

                                    </td>
                                    <td>

                                        10.76
                                    </td>

                                    <td>
                                        Rs.    <?php //echo number_format((float) $total_proportionate_common_area, 2, '.', '');  ?>

                                    </td>


                                </tr>

                                <tr>

                                    <td>
                                        Parking
                                    </td>

                                    <td colspan="2">                                  
                                    </td>
                                    <td>                                  
                                    </td>

                                    <td>
                                        Rs.<?php //echo number_format((float) $flat_parking, 2, '.', '');  ?>
                                    </td>

                                </tr>

                        <?php //foreach ($this->Pre_sales_model->get_charge_amount() as $row) {
                        ?>
                        <?php //$charge_amt = $row->charge_amount; ?>
                        <?php //$charge_amount1 = $row->charge_amount * 18 / 100; ?>
                        <?php //$charge_amount = $row->charge_amount + $charge_amount1; ?>
                        <?php //$charge_amount = $charge_amount1 + $charge_amount2;  ?>


                        <?php //}  ?>
                                <tr>

                                    <td>
                                        Maintenance 5 Years
                                    </td>

                                    <td colspan="2">
                                       
                                    </td>
                                    <td>
                                        @18 for GST
                                    </td>
                                    <td>
                                        Rs. <?php //echo number_format((float) $maintenance_cost_ref_rate, 2, '.', '');  ?>
                                    </td>

                                </tr>
                                <tr>

                                    <td>
                                        Other Fix Charges(MPSEB SSC & WCC)
                                    </td>



                                   <td colspan="2">                                  
                                    </td>
                                    <td>                                  
                                    </td>



                                    <td>
                                        Rs.<?php //echo number_format((float) $mpseb_cost_ref_rate, 2, '.', '');  ?>
                                    </td>


                                </tr>
                                <tr>

                                    <td>
                                        GST Tax
                                    </td>

                                    <td colspan="2">

                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                    <td>
                                        Rs.<?php //echo number_format((float) $gst, 2, '.', '');  ?>                                    </td>


                                </tr>
                                <tr>
                                    <td>
                                        Cost payable to company (X+4+5+6+7+8)
                                    </td>

                                    <td colspan="2">

                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                    <td>

                                        Rs. <b><?php //echo number_format((float) $cost_payble_to_company, 2, '.', '');  ?></b>

                                    </td>

                                </tr>




                                <tr>
                                    <td>
                                        Discount
                                    </td>

                                    <td colspan="2">

                                    </td>
                                    <td>
                                        <div class="non-printable"> </div> </td>
                                    <td>
                                        Rs. <?php //echo number_format((float) $discount, 2, '.', '');  ?>
                                    </td>

                                </tr>

                                <tr>
                                    <td>
                                        Total 
                                    </td>

                                    <td colspan="2">
                                        <span>Registry + Society <br> + Monthly Operational Charges + Mutation</span><br><br>
                                    </td>
                                    <td>
                                        Shall be Born by allottee
                                    </td>
                                    <td>
                                        Rs. <b><?php //echo number_format((float) $total_cost, 2, '.', '');  ?></b>
                                    </td>

                                </tr>
                                <tr>
                                    <td colspan="7" class="text-center">
                                        Note :-  Registration charges of <?php //echo $type    ?> registry shall be charged as per actual additionally
                                    </td>
                                </tr>
                                <tr>

                                    <td colspan="6">
                                        Other Charges to be born by the customer
                                    </td>
                                </tr>
                                <tr>

                                    <td colspan="6" style="font-size: 10px;">
                                        <span>Note : </span>
                                        <br>
                                        <ol>
                                            <li>
                                                Registration Stamp duty, Fees & other charges as per actual.
                                                (shall be born by the customer).
                                            </li>
                                            <li>
                                                Membership charge of Society Shall be paid additionally 
                                                at the time of possession @ Rs. 550.00 as & Rs. 25000.00 for
                                                Common Corpus fund for residents welfare Society.
                                            </li>
                                            <li>Bank Documentation Charges Extra (shall be born by the customer).</li>
                                            <li>Mortgage Stamp Fees & Other Charges shall be born by the customer.</li>
                                            <li>Namantaran Charges (Advocate fees) shall be Charged Extra.</li>
                                            <li>
                                                Meter Connection Charges As per actual Shall be the responsibility of
                                                the allottee.
                                            </li>
                                            <li>
                                                Water Meter Application with department shall be the responsibility of
                                                the allottee.
                                            </li>
                                        </ol>
                                    </td>
                                </tr>
                            </tbody>
                        </table-->
                        <!--div class="row">
                            <div class="col-xs-12">
                                <label>Discussion</label>
                                &nbsp;<textarea cols="3" id="discussion" rows="4" style="width:100%;" name="discussion" class="form-control"><?php echo $discussion; ?></textarea>
                              <label> Executive Name :- &nbsp;<?php //echo $first_name . nbs(1) . $last_name;  ?> /id : <?php echo $username; ?></label>
                            </div>
                            
                        </div-->

                        <!--/form--> 
                        </div>

                        </div>



                        </div>


                        <script type="text/javascript">

                            $(document).ready(function () {

                                $('#toppageheader').html('Flat Cost Calculation <span class="pull-right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="print" id="btnprint" value="print" class="btn btn-xs btn-default" onClick="print_this_doc();">Print&nbsp;&nbsp;<i class="fa fa-print"></i></button></span>');
                                $("a:contains(Flat Cost Calculation)").parent().addClass('active');
                                allinone();
                            });

                            function allinone()
                            {

                                var unit_cost1 = Number(document.getElementById('unit_cost1').value);
                                var unit_cost2 = Number(document.getElementById('unit_cost2').value);
                                var unit_cost3 = Number(document.getElementById('unit_cost3').value);
                                var ttl = (unit_cost1 * unit_cost2 * unit_cost3).toFixed(2);//+parseInt(two)+parseInt(three);
                                document.getElementById('unit_cost4').value = ttl;
                                //=========================================================

                                var balcony_area_one1 = Number(document.getElementById('balcony_area_one1').value);
                                var balcony_area_one2 = Number(document.getElementById('balcony_area_one2').value);
                                var balcony_area_one3 = Number(document.getElementById('balcony_area_one3').value);
                                var ttl1 = (balcony_area_one1 * balcony_area_one2 * balcony_area_one3).toFixed(2);//+parseInt(two)+parseInt(three);
                                document.getElementById('balcony_area_one4').value = ttl1;
                                //=========================================================

                                var balcony_area_two1 = Number(document.getElementById('balcony_area_two1').value);
                                var balcony_area_two2 = Number(document.getElementById('balcony_area_two2').value);
                                var balcony_area_two3 = Number(document.getElementById('balcony_area_two3').value);
                                var ttl2 = (balcony_area_two1 * balcony_area_two2 * balcony_area_two3).toFixed(2);//+parseInt(two)+parseInt(three);
                                document.getElementById('balcony_area_two4').value = ttl2;
                                //=========================================================

                                var unit_cost4 = Number(document.getElementById('unit_cost4').value);
                                var balcony_area_one4 = Number(document.getElementById('balcony_area_one4').value);
                                var balcony_area_two4 = Number(document.getElementById('balcony_area_two4').value);
                                var ttltotal = (unit_cost4 + balcony_area_one4 + balcony_area_two4).toFixed(2);//+parseInt(two)+parseInt(three);
                                document.getElementById('total1').value = ttltotal;
                                //=========================================================

                                var common_area1 = Number(document.getElementById('common_area1').value);
                                var common_area2 = Number(document.getElementById('common_area2').value);
                                var common_area3 = Number(document.getElementById('common_area3').value);
                                var ttl3 = (common_area1 * common_area2 * common_area3).toFixed(2);//+parseInt(two)+parseInt(three);
                                document.getElementById('common_area4').value = ttl3;


                //=========================================================


                                var total1 = Number(document.getElementById('total1').value);
                                var common_area4 = Number(document.getElementById('common_area4').value);
                                var parking = Number(document.getElementById('parking').value);

                                var mpseb = Number(document.getElementById('mpseb').value);

                                var ttltotal2 = (total1 + common_area4 + parking + mpseb).toFixed(2);//+parseInt(two)+parseInt(three);
                                document.getElementById('total2').value = ttltotal2;
                                //=========================================================



                                var total2 = Number(document.getElementById('total2').value);
                                var gst = Number(document.getElementById('gst').value);
                                var ttltotal4 = (total2 * gst / 100).toFixed(2);//+parseInt(two)+parseInt(three);
                                document.getElementById('gsttotal').value = ttltotal4;
                                var gsttotal = Number(document.getElementById('gsttotal').value);
                                var charge_amt = Number(document.getElementById('charge_amt').value);
                                var ttltotal5 = (gsttotal + total2 + charge_amt).toFixed(2);//+parseInt(two)+parseInt(three);
                                document.getElementById('total5').value = ttltotal5;


                                var total5 = Number(document.getElementById('total5').value);
                                var discount = Number(document.getElementById('discount').value);
                                var final_cal = (total5 - discount).toFixed(2);//+parseInt(two)+parseInt(three);
                                document.getElementById('total_cost').value = final_cal;




                            }
                            function makedecimal(id)
                            {
                                var onen = Number(document.getElementById(id).value);
                                var a = onen.toFixed(2);
                                document.getElementById(id).value = a;

                            }

                            function print_this_doc() {
                         
                                window.print();
                              
                            }
                        </script>
                        </body>

                        </html>
