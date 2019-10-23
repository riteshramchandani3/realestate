<!DOCTYPE html>
<!--
Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
Unauthorized copying of this file, via any medium is strictly prohibited
Proprietary and confidential.
Written by Oga Technologies, October 1,  2016.
-->
<html>
    <head>
        <title>View Applicant Invoice</title>
        <?php require_once('assets/html_head_links.php'); ?>
        <style>
            .navbar.navbar-inverse.sidebar {
                margin-top: 31px !important;
            }
            .inputbox{
                border: 2px solid #ccc;
                width:300px; height:30px;
                border-radius: 5px;
                line-height: 16px; font-size: 16px;
                display:table-cell;
                vertical-align: middle;
                padding-left: 5px;
            } 
            #success_message{ display: none;}
            feedbackIcons{
                font-size: 40;
            }
            .panel-heading a
            {
                margin-top: -35px;
                font-size: 15px;

            }
            a.clickable {
                display: inline-block;
                padding: 6px 12px;
                border-radius: 4px;
                cursor: pointer;
            }
            /* remove gutter spacing outside */
            .row.no-gutter {
                margin-left: 0;
                margin-right: 0;
            }

            /* only remove padding of middle columns */
            .row.no-gutter [class*='col-']:not(:first-child),
            .row.no-gutter [class*='col-']:not(:last-child) {
                padding-right:0px;
                padding-left:0;

            }
            .table-bordered > tbody > tr > td, .table-bordered > tbody > tr > th, .table-bordered > tfoot > tr > td, .table-bordered > tfoot > tr > th, .table-bordered > thead > tr > td, .table-bordered > thead > tr > th {
                border: 1px solid black;
            }
            .table{
                margin-bottom: 0px;
            }
            @media print{
                .table thead tr td,.table tbody tr td,.table th{
                    border-width: 1px !important;
                    border-style: solid !important;
                    border-color: black !important;
                    -webkit-print-color-adjust:exact ;
                }
                
                  #bg-text
                {
                    color: #ee2300;
                    opacity: 0.3;
                    font-size: 120px;
                    transform: rotate(300deg);
                    -webkit-transform: rotate(300deg);
                    text-decoration: overline underline;
                    margin-left: 0px;
                    margin-right: 250px;
                    margin-top: 260px;

                }

                #background{
                    position:absolute;
                    z-index:0;
                    background:white;
                    display:block;
                    /* min-height:100%; 
                     min-width:100%; */
                    color:yellow;
                }
                  #bg-text2
                {
                    color: #ee2300;
                    opacity: 0.3;
                    font-size: 120px;
                    transform: rotate(300deg);
                    -webkit-transform: rotate(300deg);
                    text-decoration: overline underline;
                    margin-left: 0px;
                    margin-right: 250px;
                    margin-top: 260px;

                }

                #background2{
                    position:absolute;
                    z-index:0;
                    background:white;
                    display:block;
                    /* min-height:100%; 
                     min-width:100%; */
                    color:yellow;
                }
                
            }
            @page {
                size: 7in 9.25in;
                margin: 5mm 16mm 5mm 16mm;
            }
            
            
             #background{
                position:absolute;
                z-index:0;
                background:white;
                display:block;
                /* min-height:100%; 
                 min-width:100%; */
                color:yellow;
            }

            #content{
                position:absolute;
                z-index:1;
            }

            #bg-text
            {
                color: #ee2300;
                opacity: 0.3;
                font-size: 120px;
                transform: rotate(300deg);
                -webkit-transform: rotate(325deg);
                text-decoration: overline underline;
                margin-left: 200px;
                margin-top: 200 !important;

            }
            
             #background2{
                position:absolute;
                z-index:0;
                background:white;
                display:block;
                /* min-height:100%; 
                 min-width:100%; */
                color:yellow;
            }

         
            #bg-text2
            {
                color: #ee2300;
                opacity: 0.3;
                font-size: 120px;
                transform: rotate(300deg);
                -webkit-transform: rotate(325deg);
                text-decoration: overline underline;
                margin-left: 200px;
                margin-top: 200 !important;

            }
        </style>
    </head>
    <body> 
        <?php
        require_once('assets/top_menu.php');
        require_once('assets/side_menu.php');
        ?>

        <div class="main">

            <a href="javascript: history.go(-1)" class="btn btn-primary pull-right clickable" role="button"><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;&nbsp;Back</a><br><br>
         
            <?php
            $id = $this->input->get('id');
            $explode_data = explode('?', $id);
            $idr = $explode_data[0];
            $appl_id = $explode_data[1];
            ?>
            <?php
            foreach ($this->Payment_model->get_applinfo($idr) as $row) {
                ?> 
                <?php $amount = $row->amount; ?>
                <?php $total_amount = $row->advance; ?>
                <?php $stages = $row->stage; ?>
                <?php $invoice_no = $row->receipt_no; ?>
                <?php $other_charges = $row->other_charges; ?>
                <?php $cgst_amount = $row->cgst; ?>
                <?php $service_tax = $row->service_tax; ?>
                <?php $sgst_amount = $row->sgst; ?>
                <?php $particular = $row->descreption; ?>
                <?php $application_no = $row->appl_id; ?>
                <?php $date = $row->cheque_date; ?>
                <?php $date1 = $row->cheque_date; ?>
                <?php $reg_status = $row->reg_status; ?>
                <?php $numtowords = 'null'; ?>
                <?php $login_id = $row->login_id; ?>


            <?php } ?>

            <?php
            foreach ($this->View_applicant_info->get_login_info($login_id) as $row) {
                ?> 
                <?php $first_name = $row->first_name; ?>
                <?php $last_name = $row->last_name; ?>

            <?php } ?>
            <div id="printable">

                <div class="container">
                    
                      <?php if ($reg_status == 'REVERTED') { ?>
                    <div id="background" style="margin-top: 200px;">
                            <p id="bg-text">CANCELLED</p>
                        </div>
                    <?php } else {
                        
                    }
                    ?>
                    <div class="row">
                     
                        <div class="col-xs-4 text-center">
                            <b>Tax Invoice</b>
                        </div>
                        <div class="col-xs-4 text-right">
                            <b>Customer Copy</b>
                        </div>
                    </div>
                    <br>

                    <div class="row no-gutter">
                        <div class="col-xs-6">
                            <table class="table table-bordered" >

                                <tr>
                                    <td>

                                        <img src="<?php echo base_url('resources/image/ESSARJEE_wt_addr.PNG'); ?>" alt="Arvo ERP" class="img-responsive" style="height:151px;"/>
                                       
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php
                                        foreach ($this->Payment_model->get_company_Address() as $row) {
                                            ?> 
                                            <span><strong><?php echo $row->value; ?></strong></span>
                                        <?php } ?>
                                        <?php
                                        foreach ($this->Payment_model->get_company_Pincode() as $row) {
                                            ?> <span><strong><?php echo $row->attribute; ?></strong></span>:
                                            <span><?php echo $row->value; ?></span>
                                        <?php } ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php
                                        foreach ($this->Sheet_model->get_project_status_appl($appl_id) as $row) {
                                            ?> 

                                            <?php $status = $row->status; ?>
                                            <?php $project_name = $row->project_name; ?>
                                        <?php } ?>
                                        <?php
                                        if (strcmp($status, 'Completed') == 0) {

                                            foreach ($this->Company_info_model->get_Completion_Certificate() as $row) {
                                                ?> 
                                                <span><strong><?php echo $row->attribute; ?> No</strong></span>&nbsp;:&nbsp;
                                                <span><?php echo $row->value; ?></span>
                                            <?php } ?>
                                        <?php } else { ?>
                                            <?php
                                            foreach ($this->Company_info_model->get_company_info() as $row) {
                                                ?> 
                                                <span><?php echo $row->attribute; ?></span>&nbsp;:&nbsp;
                                                <span><?php echo $row->value; ?></span>
                                            <?php } ?>
                                        <?php } ?>
                                        <?php
                                        foreach ($this->Payment_model->get_company_info1() as $row) {
                                            ?>  <span><strong><?php echo $row->attribute; ?></strong></span>:
                                            <span><?php echo $row->value; ?></span>
                                        <?php } ?>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php
                                        foreach ($this->Payment_model->get_company_CIN() as $row) {
                                            ?> <span><strong><?php echo $row->attribute; ?></strong></span>:
                                            <span><?php echo $row->value; ?></span>
                                        <?php } ?>
                                        <?php
                                        foreach ($this->Payment_model->get_company_info2() as $row) {
                                            ?>  <span><strong><?php echo $row->attribute; ?></strong></span>:
                                            &nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $row->value; ?></span>
                                        <?php } ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php
                                        foreach ($this->Payment_model->get_company_EMail() as $row) {
                                            ?> <span><strong><?php echo $row->attribute; ?></strong></span>:
                                            <span><?php echo $row->value; ?></span>
                                        <?php } ?>
                                    </td>
                                </tr>

                            </table>
                        </div>
                        <div class="col-xs-6">
                            <table class="table table-bordered">
                                <tr>
                                    <td>
                                        Invoice No :<br>
                                        <strong>ECPL/GST/R/<?PHP echo $invoice_no; ?></strong>
                                    </td>
                                    <td>
                                        Customer id.<br>
                                        <strong><span><?php echo $application_no; ?></span></strong>
                                    </td>
                                    <td>
                                        Date : <br><strong><span><?php
                                                $x = explode(' ', $date);
                                                $date = new DateTime($x[0]);
                                                echo $date->format('d-m-Y');
                                                ?></span></strong> 
                                    </td>

                                </tr>

                                <?php
                                foreach ($this->Payment_model->get_appl_information($appl_id) as $row) {
                                    ?> 
                                    <?php $project_id = $row->project_id; ?>
                                    <?php $project_id; ?>

                                    <?php $block = $row->block; ?>
                                    <?php $unit_no = $row->unit_no; ?>
                                    <tr >
                                        <td colspan="3"> 
                                            Buyer 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td  colspan="3"> 
                                            <strong>Name :</strong> <?php echo $applname = $row->name; ?>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td  colspan="3"> 
                                            <strong>Address :</strong> <?php echo $row->present_addr; ?> (<?php echo $row->pin_code; ?>).
                                        </td>
                                    </tr>

                                    <tr>
                                        <td  colspan="3"> 
                                            <strong>PAN : </strong>    <?php echo $row->pan; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td  colspan="3">

                                            <strong>Email :</strong>  <?php echo $row->email; ?>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td  colspan="3"> 
                                            <strong>Contact :</strong> <?php echo $row->contact_mobile; ?>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                <tr>
                                    <td  colspan="3"> <strong>Project:</strong>
                                        <span><?php echo $project_name . nbs(1) . $block . nbs(3); ?></span>
                                        <span><b>Unit No.</b> <?php echo nbs(2) . $unit_no; ?></span>
                                    </td>
                                </tr>


                            </table>
                        </div>
                    </div>

                    <?php
                    if ($service_tax < 1) {
                        ?>
                        <table class="table table-bordered table-responsive">

                            <th>
                                S.No
                            </th>

                            <th>
                                Particulars
                            </th>

                            <th>
                                Rate
                            </th>

                            <th>
                                Amount
                            </th>
                            <tr>
                                <td>
                                </td>
                                <td>
                                    <label> Stage:</label>
                                    <span><?php echo $stages; ?></span> 
                                    &nbsp; &nbsp; &nbsp; &nbsp;
                                    <label> Other Charges:</label>
                                    <span><?php echo $other_charges; ?></span>
                                    <br>
                                    <?php
                                    foreach ($this->Payment_model->get_company_taxCGST() as $row) {
                                        ?> 

                                        <span style="float:right;">CGST</span>
                                       
                                    <?php }
                                    ?>
                                    <br>

                                    <span style="float:right;">SGST</span>
                                   <br>
                                    <span style="float:left;"><b><?php echo $particular; ?></b></span>
                                </td>

                                <td>
                                    <span><?php $taxcgst = $row->tax_percentage; ?> </span>
                                    <br>
                                    <span><?php echo $taxsgst = $row->tax_percentage; ?>%</span>
                                    <br>
                                    <span><?php echo $row->tax_percentage; ?></span>
                                    <span><?php $RESULT = $row->tax_percentage + $row->tax_percentage; ?> %</span>

                                </td>
                                <td>
                                    <span>&nbsp;<?php echo number_format((float) $amount, 2, '.', ''); ?></span><br>

                                    &nbsp;<span><?php echo number_format((float) $cgst_amount, 2, '.', ''); ?></span><br>

                                    &nbsp;<span><?php echo number_format((float) $sgst_amount, 2, '.', ''); ?></span><br>

                                </td>
                            </tr>
                            <tr>

                                <td>
                                    Total
                                </td>

                                <td>
                                    <span id='wordbookingAmountOne' style="text-transform:capitalize;"></span> Only/-
                                </td>
                                <td>
                                    <span><?php echo number_format((float) $RESULT, 2, '.', ''); ?> %</span>
                                </td>

                                <td>
                                    <span><?php echo number_format((float) $total_amount, 2, '.', ''); ?></span>
                                    <input type="hidden" id="bookingAmountOne" value="<?php echo number_format((float) $total_amount, 2, '.', ''); ?>" onmouseover="word.innerHTML = convertNumberToWords(this.value)" />
                                </td>
                            </tr>

                        </table>
                        <table class="table table-bordered">

                            <tr>
                                <th>

                                </th>
                                <th>
                                    Taxable Value
                                </th>

                                <th colspan="2" style="text-align: center;">
                                    Central Tax
                                </th>

                                <th colspan="2" style="text-align: center;">
                                    State Tax
                                </th>

                                <th>
                                    Total Tax Amount                               
                                </th>
                            </tr>
                            <tr>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                    Rate
                                </td>
                                <td>
                                    Amount
                                </td>
                                <td>
                                    Rate
                                </td>
                                <td>
                                    Amount
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>

                                </td>
                                <td>
                                    <span><?php echo number_format((float) $total_amount, 2, '.', ''); ?></span>
                                </td>
                                <td>
                                    <span><?php echo number_format((float) $taxsgst, 2, '.', ''); ?>%</span>
                                </td>
                                <td>
                                    <span><?php echo number_format((float) $sgst_amount, 2, '.', ''); ?></span>
                                </td>
                                <td>
                                    <span><?php echo number_format((float) $taxsgst, 2, '.', ''); ?>%</span>
                                </td>
                                <td>
                                    <span><?php echo number_format((float) $cgst_amount, 2, '.', ''); ?></span>
                                </td>
                                <td>
                                    <span><?php echo $total_tax_amount = number_format((float) $cgst_amount + $sgst_amount, 2, '.', ''); ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Total</strong>
                                </td>
                                <td>
                                    <strong> <span><?php echo number_format((float) $total_amount, 2, '.', ''); ?></span></strong>

                                </td>
                                <td>
                                    <strong>  <span><?php echo number_format((float) $taxsgst, 2, '.', ''); ?>%</span></strong>

                                </td>
                                <td>
                                    <strong>   <span><?php echo number_format((float) $sgst_amount, 2, '.', ''); ?></span></strong>

                                </td>
                                <td>
                                    <strong>  <span><?php echo number_format((float) $taxsgst, 2, '.', ''); ?>%</span></strong>

                                </td>
                                <td>
                                    <strong>   <span><?php echo number_format((float) $cgst_amount, 2, '.', ''); ?></span></strong>

                                </td>
                                <td>
                                    <strong> <span><?php echo $total_tax_amount = number_format((float) $cgst_amount + $sgst_amount, 2, '.', ''); ?></span></strong>

                                </td>
                            </tr>


                        </table>

                        <div class="row">
                            <div class="col-xs-6">
                                <strong>NOTE</strong> :GST @18 Due to land cost abetment by 33% effective <?php echo $RESULT; ?> %  will be charged <br>
                                <?php
                            } else {
                                $dat2 = $date->format('Y-m-d');
                                ?>

                                <table class="table table-bordered table-responsive">

                                    <th>
                                        S.No
                                    </th>

                                    <th>
                                        Particulars
                                    </th>

                                    <th>
                                        Rate
                                    </th>

                                    <th>
                                        Amount
                                    </th>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                            <label> Stage:</label>
                                            <span><?php echo $stages; ?></span> 

                                            &nbsp; &nbsp; &nbsp; &nbsp;
                                            <label> Other Charges:</label>
                                            <span><?php echo $other_charges; ?></span>
                                            <br>
                                            <?php
                                         
                                            foreach ($this->Payment_model->get_servicetax($dat2) as $row) {
                                                ?> 

                                                <span style="float:right;">Service Tax</span>

                                            <?php }
                                            ?>
                                        </td>

                                        <td style="padding-top:15px;">
                                            <br>
                                            <span ><?php echo $row->tax_percentage; ?></span>


                                            <span><?php $RESULT = $row->tax_percentage; ?> %</span>

                                        </td>
                                        <td  style="padding-top:15px;">
                                            <span>&nbsp;<?php echo number_format((float) $amount, 2, '.', ''); ?></span><br>


                                            <span><?php echo $service_tax; ?></span>


                                         
                                        </td>
                                    </tr>
                                    <tr>


                                        <td>
                                            Total
                                        </td>

                                        <td>
                                            <span id='wordbookingAmountOne' style="text-transform:capitalize;"></span> Only/-
                                        </td>

                                        <td>
                                            <span><?php echo number_format((float) $RESULT, 2, '.', ''); ?> %</span>
                                        </td>

                                        <td>
                                            <span><?php echo number_format((float) $total_amount, 2, '.', ''); ?></span>
                                            <input type="hidden" id="bookingAmountOne" value="<?php echo number_format((float) $total_amount, 2, '.', ''); ?>" onmouseover="word.innerHTML = convertNumberToWords(this.value)" />
                                        </td>
                                    </tr>

                                </table>
                                <?php
                            }
                            ?>
                            <?php

                            $date = new DateTime($x[0]);
                            $dat = $date->format('d-m-Y');

                            echo $date->format('d-m-Y');
                            ?>
                            (INVOICE NO. ECPL/GST/R/<?PHP echo $invoice_no; ?> of <?php echo $applname; ?> ) of <?php echo $dat; //$x = explode(' ', $dat);             ?>
                            <br>

                            <strong>Declaration</strong><br>
                            We declare that this invoice shows the actual price of the service described and that all particulars are true and correct.

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            Company's Bank Details :
                           <?php foreach ($this->Payment_model->get_company_BankName() as $row) {
                                ?>  <span><?php echo $row->attribute; ?></span> &nbsp;:
                                &nbsp;<span><strong><?php echo $row->value; ?></strong></span>&nbsp;,
                            <?php } ?>
                            <?php
                            foreach ($this->Payment_model->get_company_Account_Number() as $row) {
                                ?>  <span><?php echo $row->attribute; ?></span>:
                                &nbsp;<span><strong><?php echo $row->value; ?></strong></span><br>
                            <?php } ?>
                            <?php
                            foreach ($this->Payment_model->get_company_IFS_Code() as $row) {
                                ?>  <span> <?php echo $row->attribute; ?> </span> &nbsp;:
                                &nbsp;<span><strong> <?php echo $row->value; ?></strong></span>
                            <?php } ?>
                       

                        <br>

                          <table class="table table-bordered text-right">

                            <tr>
                                <th style="text-align: center;">
                                    Customer Signature
                                </th>
                                <th class="text-right">
                                    <?php
                                    foreach ($this->Payment_model->get_company_NAME() as $row) {
                                        ?> 
                                        <span><strong>for <?php echo $row->value; ?></strong></span>
                                    <?php } ?>
                                    <br><br><br>
                                    <span class="pull-right">Authorised Signatory</span>
                                </th>

                            </tr>
                        </table>

                    </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4 text-left">
                            <b> Executive Name :- <?php echo ucfirst($first_name); ?>  <?php echo ucfirst($last_name); ?></b>
                        </div>
                        <div class="col-xs-8 text-left">
                            SUBJECT TO BHOPAL JURISDICTION<br>
                            This is a Computer Generated Invoice
                        </div>
                    </div>

                </div>
                
                     <?php if ($reg_status == 'REVERTED') { ?>
                <br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
                   
                    <?php } else {
                        
                    }
                    ?>


                <div class="container"> 
                    
                      <?php if ($reg_status == 'REVERTED') { ?>
                    <div id="background2" style="margin-top: 200px;">
                            <p id="bg-text2">CANCELLED</p>
                        </div>
                    <?php } else {
                        
                    }
                    ?>
                    <div class="row">
                              <div class="col-xs-4 text-center">
                            <b>Tax Invoice</b>
                        </div>
                        <div class="col-xs-4 text-right">
                            <b>Office Copy</b>
                        </div>
                    </div>
                    <br>

                    <div class="row no-gutter">
                        <div class="col-xs-6">
                            <table class="table table-bordered" >
                                <tr>
                                    <td>
                                        <img src="<?php echo base_url('resources/image/ESSARJEE_wt_addr.PNG'); ?>" alt="Arvo ERP" class="img-responsive" style="height:151px;"/>
                                                                          </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php
                                        foreach ($this->Payment_model->get_company_Address() as $row) {
                                            ?> 
                                            <span><strong><?php echo $row->value; ?></strong></span>
                                        <?php } ?>
                                        <?php
                                        foreach ($this->Payment_model->get_company_Pincode() as $row) {
                                            ?> <span><strong><?php echo $row->attribute; ?></strong></span>:
                                            <span><?php echo $row->value; ?></span>
                                        <?php } ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php
                                        foreach ($this->Sheet_model->get_project_status_appl($appl_id) as $row) {
                                            ?> 
                                            <?php $status = $row->status; ?>
                                            <?php $project_name = $row->project_name; ?>
                                        <?php } ?>
                                        <?php
                                        if (strcmp($status, 'Completed') == 0) {

                                            foreach ($this->Company_info_model->get_Completion_Certificate() as $row) {
                                                ?> 
                                                <span><strong><?php echo $row->attribute; ?> No</strong></span>&nbsp;:&nbsp;
                                                <span><?php echo $row->value; ?></span>
                                            <?php } ?>
                                        <?php } else { ?>
                                            <?php
                                            foreach ($this->Company_info_model->get_company_info() as $row) {
                                                ?> 
                                                <span><?php echo $row->attribute; ?></span>&nbsp;:&nbsp;
                                                <span><?php echo $row->value; ?></span>
                                            <?php } ?>
                                        <?php } ?>
                                        <?php
                                        foreach ($this->Payment_model->get_company_info1() as $row) {
                                            ?>  <span><strong><?php echo $row->attribute; ?></strong></span>:
                                            <span><?php echo $row->value; ?></span>
                                        <?php } ?>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php
                                        foreach ($this->Payment_model->get_company_CIN() as $row) {
                                            ?> <span><strong><?php echo $row->attribute; ?></strong></span>:
                                            <span><?php echo $row->value; ?></span>
                                        <?php } ?>
                                        <?php
                                        foreach ($this->Payment_model->get_company_info2() as $row) {
                                            ?>  <span><strong><?php echo $row->attribute; ?></strong></span>:
                                            &nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $row->value; ?></span>
                                        <?php } ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php
                                        foreach ($this->Payment_model->get_company_EMail() as $row) {
                                            ?> <span><strong><?php echo $row->attribute; ?></strong></span>:
                                            <span><?php echo $row->value; ?></span>
                                        <?php } ?>
                                    </td>
                                </tr>

                            </table>
                        </div>
                        <div class="col-xs-6">
                            <table class="table table-bordered">
                                <tr>
                                    <td>
                                        Invoice No :<br>
                                        <strong>ECPL/GST/R/<?PHP echo $invoice_no; ?></strong>
                                    </td>
                                    <td>
                                        Customer id.<br>
                                        <strong><span><?php echo $application_no; ?></span></strong>
                                    </td>
                                    <td>
                                        Date : <br><strong><span><?php
                                               
                                                echo $date->format('d-m-Y');
                                                ?></span></strong> 
                                    </td>

                                </tr>

                                <?php
                                foreach ($this->Payment_model->get_appl_information($appl_id) as $row) {
                                    ?> 
                                    <?php $project_id = $row->project_id; ?>
                                    <?php $project_id; ?>

                                    <?php $block = $row->block; ?>
                                    <?php $unit_no = $row->unit_no; ?>
                                    <tr >
                                        <td colspan="3"> 
                                            Buyer 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td  colspan="3"> 
                                            <strong>Name :</strong> <?php echo $applname = $row->name; ?>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td  colspan="3"> 
                                            <strong>Address :</strong> <?php echo $row->present_addr; ?> (<?php echo $row->pin_code; ?>).
                                        </td>
                                    </tr>

                                    <tr>
                                        <td  colspan="3"> 
                                            <strong>PAN : </strong>    <?php echo $row->pan; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td  colspan="3">

                                            <strong>Email :</strong>  <?php echo $row->email; ?>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td  colspan="3"> 
                                            <strong>Contact :</strong> <?php echo $row->contact_mobile; ?>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                <tr>
                                    <td  colspan="3"> <strong>Project:</strong>
                                        <span><?php echo $project_name . nbs(1) . $block . nbs(3); ?></span>
                                        <span><b>Unit No.</b> <?php echo nbs(2) . $unit_no; ?></span>
                                    </td>
                                </tr>


                            </table>
                        </div>
                    </div>

                    <?php
                    if ($service_tax < 1) {
                        ?>
                        <table class="table table-bordered table-responsive">

                            <th>
                                S.No
                            </th>

                            <th>
                                Particulars
                            </th>



                            <th>
                                Rate
                            </th>


                            <th>
                                Amount
                            </th>
                            <tr>
                                <td>

                                </td>
                                <td>
                                    <label> Stage:</label>
                                    <span><?php echo $stages; ?></span> 

                                    &nbsp; &nbsp; &nbsp; &nbsp;
                                    <label> Other Charges:</label>
                                    <span><?php echo $other_charges; ?></span>
                                    <br>
                                    <?php
                                    foreach ($this->Payment_model->get_company_taxCGST() as $row) {
                                        ?> 

                                        <span style="float:right;">CGST</span>
                                       
                                    <?php }
                                    ?>
                                    <br>

                                    <span style="float:right;">SGST</span>
                                   <br>
                                    <span style="float:left;"><b><?php echo $particular; ?></b></span>


                                </td>

                                <td>

                                    <span><?php $taxcgst = $row->tax_percentage; ?> </span>

                                    <br>

                                    <span><?php echo $taxsgst = $row->tax_percentage; ?>%</span>

                                    <br>

                                    <span><?php echo $row->tax_percentage; ?></span>


                                    <span><?php $RESULT = $row->tax_percentage + $row->tax_percentage; ?> %</span>

                                </td>
                                <td>
                                    <span>&nbsp;<?php echo number_format((float) $amount, 2, '.', ''); ?></span><br>
                                    &nbsp;<span><?php echo number_format((float) $cgst_amount, 2, '.', ''); ?></span><br>

                                    &nbsp;<span><?php echo number_format((float) $sgst_amount, 2, '.', ''); ?></span><br>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Total
                                </td>

                                <td>
                                    <span id='wordbookingAmountOne' style="text-transform:capitalize;"></span> Only/-
                                </td>

                                <td>
                                    <span><?php echo number_format((float) $RESULT, 2, '.', ''); ?> %</span>
                                </td>

                                <td>
                                    <span><?php echo number_format((float) $total_amount, 2, '.', ''); ?></span>
                                    <input type="hidden" id="bookingAmountOne" value="<?php echo number_format((float) $total_amount, 2, '.', ''); ?>" onmouseover="word.innerHTML = convertNumberToWords(this.value)" />
                                </td>
                            </tr>

                        </table>
                        <table class="table table-bordered">

                            <tr>
                                <th>

                                </th>
                                <th>
                                    Taxable Value
                                </th>

                                <th colspan="2" style="text-align: center;">
                                    Central Tax
                                </th>

                                <th colspan="2" style="text-align: center;">
                                    State Tax
                                </th>

                                <th>
                                    Total Tax Amount                               
                                </th>
                            </tr>
                            <tr>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                    Rate
                                </td>
                                <td>
                                    Amount
                                </td>
                                <td>
                                    Rate
                                </td>
                                <td>
                                    Amount
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>

                                </td>
                                <td>
                                    <span><?php echo number_format((float) $total_amount, 2, '.', ''); ?></span>
                                </td>
                                <td>
                                    <span><?php echo number_format((float) $taxsgst, 2, '.', ''); ?>%</span>
                                </td>
                                <td>
                                    <span><?php echo number_format((float) $sgst_amount, 2, '.', ''); ?></span>
                                </td>
                                <td>
                                    <span><?php echo number_format((float) $taxsgst, 2, '.', ''); ?>%</span>
                                </td>
                                <td>
                                    <span><?php echo number_format((float) $cgst_amount, 2, '.', ''); ?></span>
                                </td>
                                <td>
                                    <span><?php echo $total_tax_amount = number_format((float) $cgst_amount + $sgst_amount, 2, '.', ''); ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Total</strong>
                                </td>
                                <td>
                                    <strong> <span><?php echo number_format((float) $total_amount, 2, '.', ''); ?></span></strong>

                                </td>
                                <td>
                                    <strong>  <span><?php echo number_format((float) $taxsgst, 2, '.', ''); ?>%</span></strong>

                                </td>
                                <td>
                                    <strong>   <span><?php echo number_format((float) $sgst_amount, 2, '.', ''); ?></span></strong>

                                </td>
                                <td>
                                    <strong>  <span><?php echo number_format((float) $taxsgst, 2, '.', ''); ?>%</span></strong>

                                </td>
                                <td>
                                    <strong>   <span><?php echo number_format((float) $cgst_amount, 2, '.', ''); ?></span></strong>

                                </td>
                                <td>
                                    <strong> <span><?php echo $total_tax_amount = number_format((float) $cgst_amount + $sgst_amount, 2, '.', ''); ?></span></strong>

                                </td>
                            </tr>
                        </table>

                        <div class="row" style="margin-left:5px;">
                            <div class="col-xs-6">
                                <strong>NOTE</strong> :GST @18 Due to land cost abetment by 33% effective <?php echo $RESULT; ?> %  will be charged <br>
                                <?php
                            } else {
                                $dat2 = $date->format('Y-m-d');
                                ?>
                                <table class="table table-bordered table-responsive">

                                    <th>
                                        S.No
                                    </th>

                                    <th>
                                        Particulars
                                    </th>



                                    <th>
                                        Rate
                                    </th>


                                    <th>
                                        Amount
                                    </th>
                                    <tr>
                                        <td>

                                        </td>
                                        <td>
                                            <label> Stage:</label>
                                            <span><?php echo $stages; ?></span> 

                                            &nbsp; &nbsp; &nbsp; &nbsp;
                                            <label> Other Charges:</label>
                                            <span><?php echo $other_charges; ?></span>
                                            <br>
                                            <?php
                                                     foreach ($this->Payment_model->get_servicetax($dat2) as $row) {
                                                ?> 

                                                <span style="float:right;">Service Tax</span>

                                            <?php }
                                            ?>
                                        </td>

                                        <td style="padding-top:15px;">
                                            <br>
                                            <span ><?php echo $row->tax_percentage; ?></span>


                                            <span><?php $RESULT = $row->tax_percentage; ?> %</span>

                                        </td>
                                        <td  style="padding-top:15px;">
                                            <span>&nbsp;<?php echo number_format((float) $amount, 2, '.', ''); ?></span><br>


                                            <span><?php echo $service_tax; ?></span>


                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Total
                                        </td>

                                        <td>
                                            <span id='wordbookingAmountOne' style="text-transform:capitalize;"></span> Only/-
                                        </td>

                                        <td>
                                            <span><?php echo number_format((float) $RESULT, 2, '.', ''); ?> %</span>
                                        </td>

                                        <td>
                                            <span><?php echo number_format((float) $total_amount, 2, '.', ''); ?></span>
                                            <input type="hidden" id="bookingAmountOne" value="<?php echo number_format((float) $total_amount, 2, '.', ''); ?>" onmouseover="word.innerHTML = convertNumberToWords(this.value)" />
                                        </td>
                                    </tr>

                                </table>
                                <?php
                            }
                            ?>
                            <?php

                            $date = new DateTime($x[0]);
                            $dat = $date->format('d-m-Y');

                            echo $date->format('d-m-Y');
                            ?>
                            (INVOICE NO. ECPL/GST/R/<?PHP echo $invoice_no; ?> of <?php echo $applname; ?> ) of <?php echo $dat; //$x = explode(' ', $dat);             ?>
                     
                            <strong>Declaration</strong><br>
                            We declare that this invoice shows the actual price of the service described and that all particulars are true and correct.

                        </div>
                    </div>
                    <div class="row" style="margin-left:5px;">
                        <div class="col-xs-12">
                          
                            Company's Bank Details :
                            <?php
                            foreach ($this->Payment_model->get_company_BankName() as $row) {
                                ?>  <span><?php echo $row->attribute; ?></span> &nbsp;:
                               &nbsp;<span><strong><?php echo $row->value; ?></strong></span>
                            <?php } ?>
                            <?php
                            foreach ($this->Payment_model->get_company_Account_Number() as $row) {
                                ?>  <span><?php echo $row->attribute; ?></span>&nbsp;:
                               &nbsp;<span><strong><?php echo $row->value; ?></strong></span><br>
                            <?php } ?>
                            <?php
                            foreach ($this->Payment_model->get_company_IFS_Code() as $row) {
                                ?>  <span> <?php echo $row->attribute; ?> </span> &nbsp;:
                               &nbsp;<span><strong> <?php echo $row->value; ?></strong></span>
                            <?php } ?>
                        </div>

                    </div>
              
                    <table class="table table-bordered text-right">

                        <tr>
                            <th style="text-align: center;">
                                Customer Signature
                            </th>
                            <th class="text-right">
                                <?php
                                foreach ($this->Payment_model->get_company_NAME() as $row) {
                                    ?> 
                                    <span><strong>for <?php echo $row->value; ?></strong></span>
                                <?php } ?>
                                <br>
                                <br>
                                <span class="pull-right">Authorised Signatory</span>
                            </th>

                        </tr>
                    </table>

                    <div class="row">
                        <div class="col-xs-4 text-left">
                            <b> Executive Name :- <?php echo ucfirst($first_name); ?>  <?php echo ucfirst($last_name); ?></b>
                        </div>
                        <div class="col-xs-8 text-left">
                            SUBJECT TO BHOPAL JURISDICTION<br>
                            This is a Computer Generated Invoice
                        </div>

                    </div>

                </div>
            </div>

        </div>

        <script>

            function print_this_doc() {
                var printContents = document.getElementById('printable').innerHTML;
                var originalContents = document.body.innerHTML;
                document.body.innerHTML = printContents;
                var css = '@page { size: portrait; }',
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

            $(document).ready(function () {
                var bookingAmountOne = $('#bookingAmountOne').val();
                $('#wordbookingAmountOne').text(convertNumberToWords(bookingAmountOne));
                $('#wordbookingAmounttwo').text(convertNumberToWords(bookingAmountOne));

                $('#toppageheader').html('View Invoice <span class="pull-right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="print" id="btnprint" value="print" class="btn btn-sm btn-default" onClick="print_this_doc();">Print&nbsp;&nbsp;<i class="fa fa-print"></i></button></span>');
                $("a:contains(Invoices & Payments)").parent().addClass('active');
            });

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

    </body>
</html>