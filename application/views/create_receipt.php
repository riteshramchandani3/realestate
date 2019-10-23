<html>
    <head>
        <title>Payment</title>
        <?php require_once('assets/html_head_links.php'); ?>

        <style type="text/css">

            .topleftlabel{
                width: 100;
                font-size: 13px !important;

            }


            .bottomleftlabel{
                width: 200;
                font-size: 18px !important;

            }
            .bottomrightlabel{

                font-size: 18px !important;
                margin-left: 10px;



            }
            #word{
                width: 100% ;
            }


            .form-control{
                font-size: 18px;
                width: 80% !important;


            }
            input[type=text]:disabled {
                /*font-weight:bold;*/
                background: white;

            }
            h4{
                font-weight:bold;
            }
            @media print
            {
                /*@page {size: landscape}*/
                .non-printable { display: none; }
                #printable {display: block;}
                html, body {
                    width: 210mm !important;
                    height: 297mm !important;
                }
                .form-control{
                    border:none;
                }
                .container{
                    font-size: 13px !important;
                }
                body{
                    font-size: 13px !important;
                }


                .bottomrightlabel{
                    font-size: 13px !important;
                }
                .bottomleftlabel{
                    font-size: 13px !important;
                }
                .form-control{
                    font-size: 13px !important;
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
                    -webkit-transform: rotate(350deg);
                    text-decoration: overline underline;
                    /*margin-right: 400;
                     margin-right: 250px; */
                    margin-top: 378px;

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

                #content{
                    position:absolute;
                    z-index:1;
                }


            }

            a.clickable {
                display: inline-block;
                padding: 8px 12px;
                border-radius: 4px;
                cursor: pointer;
            }

            @page {
                margin:0mm 0mm 0mm 10mm;
            }
            body {
                color: #000;
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
                margin-top: 100;

            }
            #bg-text2
            {
                color: #ee2300;
                opacity: 0.3;
                font-size: 120px;
                transform: rotate(300deg);
                -webkit-transform: rotate(320deg);
                text-decoration: overline underline;
                margin-left: 400;
                /* margin-right: 250px; */
                margin-top: 378px;

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

        </style>
    </head>
    <body>
        <div class="non-printable">
            <?php
            require_once('assets/top_menu.php');
            require_once('assets/side_menu.php');
            ?>

        </div>

        <div class="main">
            <div class="container non-printable"> <a href="javascript: history.go(-1)"  class="btn btn-primary pull-right clickable" role="button"><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;&nbsp;Back</a></div>  

            <?php
            //   $i = 1;
            //  while ($i < 3) {
            //   if ($i == 1) {
            //      $copyname = 'Customer Copy';
            //  } else {
            //      $copyname = 'Office Copy';
            //   }
            ?>


            <?php
            $id = $this->input->get('id');
            $explode_data = explode('?', $id);
            $idr = $explode_data[0];
            $invoice_no = $explode_data[1];
            ?>
            <?php
            foreach ($this->Payment_model->view_payment($idr) as $row) {
                ?>
                <?php $receipt_no = $row->receipt_no; ?>
                <?php $installment_no = $row->installment_no; ?>
                <?php $arrears = $row->arrears; ?>
                <?php $drawn_on = $row->drawn_on; ?>
                <?php $appl_id = $row->appl_id; ?>
                <?php $Date1 = $row->deposite_date; ?>
                <?php $payment_mode = $row->mode_of_payment; ?>
                <?php $other_charges = $row->other_charges; ?>
                <?php $amount_paid = $row->advance; ?>
                <?php $numtowords = 'null'; ?>
                <?php $cheque_cash = $row->payment_mode_no; ?>
                <?php $payment_date = $row->cheque_date; ?>
                <?php $login_id = $row->login_id; ?>
                <?php $reg_status = $row->reg_status; ?>
            <?php } ?>
            <?php
            foreach ($this->View_applicant_info->get_login_info($login_id) as $row) {
                ?> 
                <?php $first_name = $row->first_name; ?>
                <?php $last_name = $row->last_name; ?>

            <?php } ?>

            <div id="printable">
                <div class="container">


                    <div class="row">
                        <div class="col-xs-4 text-left">
                        </div>
                        <div class="col-xs-4 text-right">

                        </div>
                        <div class="col-xs-4 text-right">
                            <b>Customer Copy</b>
                        </div>
                    </div>
                </div>

                <br>


                <div class="container" style="border: 1px solid #000;">


                    <div class="row">
                        <div class="col-xs-8" style="margin-top: 16px;">

                            <span>
                                <img src="<?php echo base_url('resources/image/ESSARJEE.PNG'); ?>" alt="Arvo ERP" class="img-responsive" style=" margin-top: 5px; width: 100%;"/>
                            </span>
                        </div>
                        <div class="col-xs-4" style="margin-top: 30px;font-size: 10px;" >

                            <div class="col-xs-12">

                                <label class="topleftlabel">Date</label><span style="font-weight:bold;">:</span>
                                <label class="toprightlabel"><span>
                                        <?php
                                        $x = explode(' ', $payment_date);
                                        $payment_date = new DateTime($x[0]);
                                        echo $payment_date->format('d-m-Y');
                                        ?></span></label>

                            </div>
                            <div class="col-xs-12">
                                <?php
                                foreach ($this->Payment_model->get_max_receipt() as $row) {
                                    ?> 

                                    <label class="topleftlabel">Receipt No.</label><span style="font-weight:bold;">:</span>
                                    <label class="toprightlabel"><span id="recptspn"><?php echo $receipt_no ?></span></label>  

                                <?php } ?> 
                            </div>

                            <div class="col-xs-12" >

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
                                        <label class="topleftlabel"><?php echo $row->attribute; ?> No.</label><span style="font-weight:bold;">:</span>
                                        <label style="border-bottom:1px solid #000;"><span><?php echo $row->value; ?></span></label>
                                    <?php } ?>
                                <?php } else { ?>
                                    <?php
                                    foreach ($this->Company_info_model->get_company_info() as $row) {
                                        ?> 
                                        <label class="topleftlabel"><span><?php echo $row->attribute; ?></span></label><span style="font-weight:bold;">:</span>
                                        <label class="toprightlabel" stopleftlabeltyle="border-bottom:1px solid #000;"> <span><?php echo $row->value; ?></span></label>
                                    <?php } ?>
                                <?php } ?>
                            </div>

                            <div class="col-xs-12">
                                <?php
                                foreach ($this->Payment_model->get_company_info1() as $row) {
                                    ?> 
                                    <label class="topleftlabel"><span><?php echo $row->attribute; ?></span></label><span style="font-weight:bold;">:</span>
                                    <label class="toprightlabel"><span><?php echo $row->value; ?></span></label>

                                <?php } ?>
                            </div>

                            <div class="col-xs-12">
                                <?php
                                foreach ($this->Payment_model->get_company_info2() as $row) {
                                    ?> 
                                    <label class="topleftlabel"><span><?php echo $row->attribute; ?></span></label><span style="font-weight:bold;">:</span>
                                    <label class="toprightlabel"><span><?php echo $row->value; ?></span></label>

                                <?php } ?>
                            </div>



                            <?php
                            foreach ($this->Payment_model->get_company_info3() as $row) {
                                ?>
                                <label class="topleftlabel"><span><?php echo $row->attribute; ?></span>&</label>
                                <label class="toprightlabel"><span><?php echo $row->value; ?></span></label>

                            <?php } ?>

                        </div>
                    </div>
                    <?php if ($reg_status == 'REVERTED') { ?>
                        <div id="background">
                            <p id="bg-text">CANCELLED</p>
                        </div>
                    <?php
                    } else {
                        
                    }
                    ?>

                    <form class="form-inline"> 
                        <br>
<!--img src="<?php // echo base_url('resources/image/cancelled_logo.png');    ?>" alt="arvo-erp-logo" height="300px"/-->
                        <div class="row">
                            <?php
                            foreach ($this->Payment_model->get_apl_info($appl_id) as $row) {
                                ?> 
                                <div class="col-xs-12"><?php $project_name = $row->project_name; ?>

                                    <label class="bottomleftlabel">Project</label><span style="font-weight:bold;">:</span>
                                    <label class="bottomrightlabel"><span><?php echo $project_name ?>&nbsp;<?php echo $block = $row->block; ?></span></label>
                                </div>
                            </div>
                            <!--div class="row">
                                <div class="col-xs-10">
                                    <label class="bottomleftlabel">Date</label>
                                    <label class="bottomrightlabel"><span id="date"></span></label>
                                </div>
                            </div-->
                            <div class="row">

                                <div class="col-xs-12">
                                    <label class="bottomleftlabel">Received from</label><span style="font-weight:bold;">:</span>
                                    <label class="bottomrightlabel"><span><?php echo $name = $row->name; ?> </span></label>
                                </div>
                                <div class="col-xs-4">

                                </div>
                            </div>
                            <div class="row">

                                <div class="col-xs-12">
                                    <label class="bottomleftlabel">Type/Unit No.</label><span style="font-weight:bold;">:</span>
                                    <label class="bottomrightlabel"><span><?php echo $type = $row->type; ?>/<?php echo $unit_no = $row->unit_no; ?></span></label>

<?php } ?> 
                            </div>

                        </div>              
                        <div class="row">

                            <!--div class="col-xs-12">
                                <label class="bottomleftlabel">Advance</label>
                                <label class="bottomrightlabel" >
                                    <input type="text" class="form-control" value="" id="raj" name="raj" />
                                </label>
                            </div-->
                            <div  class="col-xs-12">
                                <label class="bottomleftlabel">Advance</label><span style="font-weight:bold;">:</span>
                                <label class="bottomrightlabel"><span>
<?php echo number_format((float) $amount_paid, 2, '.', ''); ?> </span>
                                    <input type="hidden" id="bookingAmountOne" value="<?php echo number_format((float) $amount_paid, 2, '.', ''); ?>" onmouseover="word.innerHTML = convertNumberToWords(this.value)" />
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <label class="bottomleftlabel">In words</label><span style="font-weight:bold;">:</span>
                                <label class="bottomrightlabel"><span id='wordbookingAmountOne'>
                                    </span> Only/-</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <label class="bottomleftlabel">Installment No</label><span style="font-weight:bold;">:</span>
                                <label class="bottomrightlabel"><?php echo $installment_no; ?> </label>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <label class="bottomleftlabel">Arrears</label><span style="font-weight:bold;">:</span>
                                <label class="bottomrightlabel"><?php echo $arrears; ?> </label>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <label class="bottomleftlabel">Other Charges</label><span style="font-weight:bold;">:</span>
                                <label class="bottomrightlabel"><span><?php echo $other_charges; ?></span></label>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <label class="bottomleftlabel">Mode of Payment</label><span style="font-weight:bold;">:</span>
                                <label class="bottomrightlabel"><?php echo $payment_mode; ?></label>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-xs-12">
                                <label class="bottomleftlabel">Instrument No.</label><span style="font-weight:bold;">:</span>
                                <label class="bottomrightlabel"><?php echo $cheque_cash; ?> </label>
                            </div>
                            <div class="col-xs-12">
                                <label class="bottomleftlabel">Date of Instrument</label><span style="font-weight:bold;">:</span>
                                <label class="bottomrightlabel">
                                    <?php //$date2 = $row->Date;  ?>
                                    <?php
                                    $x = explode(' ', $Date1);
                                    $Date1 = new DateTime($x[0]);
                                    echo $Date1->format('d-m-Y');
                                    ?></label>


                            </div>  
                            <div class="col-xs-12">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <label class="bottomleftlabel">Drawn on</label><span style="font-weight:bold;">:</span>
                                <label class="bottomrightlabel"><?php $drown_on; ?> </label>
                            </div>

                        </div>
                        <br>
                        <div class="row">

                            <div class="col-xs-8">
                                <label>Note : Cheque subjected to Realisation.</label>
                            </div>
                            <?php
                            foreach ($this->Company_info_model->get_Company_name() as $row) {
                                ?> 

                                <div class="col-xs-4 text-right">
                                    <label style="font-size:16px;"><?php echo $company_name = $row->value; ?></label><br><br>
                                    <label style="font-size:16px;">Authorized Signatory</label>
                                </div>
<?php } ?>
                        </div>
                    </form>

                </div>                     

                <div class="container">
                    <div class="row">
                        <div class="col-xs-4 text-left">
                            <b> Executive Name :- <?php echo ucfirst($first_name); ?>  <?php echo ucfirst($last_name); ?></b> 
                        </div>
                        <div class="col-xs-4 text-right">

                        </div>
                        <div class="col-xs-4 text-right">

                        </div>
                    </div>
                </div>

             

                <?php
                $id = $this->input->get('id');
                $explode_data = explode('?', $id);
                $idr = $explode_data[0];
                $invoice_no = $explode_data[1];
                ?>
                <?php
                foreach ($this->Payment_model->view_payment($idr) as $row) {
                    ?>
                    <?php $receipt_no = $row->receipt_no; ?>
                    <?php $installment_no = $row->installment_no; ?>
                    <?php $arrears = $row->arrears; ?>
                    <?php $drawn_on = $row->drawn_on; ?>
                    <?php $appl_id = $row->appl_id; ?>
                    <?php $Date1 = $row->deposite_date; ?>
                    <?php $payment_mode = $row->mode_of_payment; ?>
                    <?php $other_charges = $row->other_charges; ?>
                    <?php $amount_paid = $row->advance; ?>
                    <?php $numtowords = 'null'; ?>
                    <?php $cheque_cash = $row->payment_mode_no; ?>
                    <?php $payment_date = $row->cheque_date; ?>
                    <?php $login_id = $row->login_id; ?>
                <?php } ?>
                <?php
                foreach ($this->View_applicant_info->get_login_info($login_id) as $row) {
                    ?> 
                    <?php $first_name = $row->first_name; ?>
                    <?php $last_name = $row->last_name; ?>

                <?php } ?>
<?php if ($reg_status == 'REVERTED') { ?>
                    <div id="background2">
                        <p id="bg-text2">CANCELLED</p>
                    </div>
                <?php
                } else {
                    
                }
                ?>
             


               
                <?php if ($reg_status == 'REVERTED') { ?>
                   <br>
                <?php
                } else { ?>
                    <br><br><br><br><br><br>
                    <br><br><br><br><br><br>
                    <br><br><br><br><br><br>
                    <br><br><br><br><br><br><br><br><br><br>
             <?php   }
                ?>
   <div class="container">
                    <div class="row">
                        <div class="col-xs-4 text-left">
                        </div>
                        <div class="col-xs-4 text-right">

                        </div>
                        <div class="col-xs-4 text-right">
                            <b>Office Copy</b>
                        </div>
                    </div>
                </div>

                <div class="container" style="border: 1px solid #000;">
                    <div class="row">
                        <div class="col-xs-8" style="margin-top: 16px;">

                            <span>
                                <img src="<?php echo base_url('resources/image/ESSARJEE.PNG'); ?>" alt="Arvo ERP" class="img-responsive" style=" margin-top: 5px; width: 100%;"/>
                            </span>
                        </div>
                        <div class="col-xs-4" style="margin-top: 30px;font-size: 10px;" >

                            <div class="col-xs-12">

                                <label class="topleftlabel">Date</label><span style="font-weight:bold;">:</span>
                                <label class="toprightlabel"><span>
                                        <?php
                                        $x = explode(' ', $payment_date);
                                        $payment_date = new DateTime($x[0]);
                                        echo $payment_date->format('d-m-Y');
                                        ?></span></label>

                            </div>
                            <div class="col-xs-12">
                                <?php
                                foreach ($this->Payment_model->get_max_receipt() as $row) {
                                    ?> 

                                    <label class="topleftlabel">Receipt No.</label><span style="font-weight:bold;">:</span>
                                    <label class="toprightlabel"><span id="recptspn"><?php echo $receipt_no ?></span></label>  

                                <?php } ?> 
                            </div>

                            <div class="col-xs-12" >

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
                                        <label class="topleftlabel"><?php echo $row->attribute; ?> No.</label><span style="font-weight:bold;">:</span>
                                        <label style="border-bottom:1px solid #000;"><span><?php echo $row->value; ?></span></label>
                                    <?php } ?>
                                <?php } else { ?>
                                    <?php
                                    foreach ($this->Company_info_model->get_company_info() as $row) {
                                        ?> 
                                        <label class="topleftlabel"><span><?php echo $row->attribute; ?></span></label><span style="font-weight:bold;">:</span>
                                        <label class="toprightlabel" stopleftlabeltyle="border-bottom:1px solid #000;"> <span><?php echo $row->value; ?></span></label>
                                    <?php } ?>
                                <?php } ?>
                            </div>

                            <div class="col-xs-12">
                                <?php
                                foreach ($this->Payment_model->get_company_info1() as $row) {
                                    ?> 
                                    <label class="topleftlabel"><span><?php echo $row->attribute; ?></span></label><span style="font-weight:bold;">:</span>
                                    <label class="toprightlabel"><span><?php echo $row->value; ?></span></label>

                                <?php } ?>
                            </div>

                            <div class="col-xs-12">
                                <?php
                                foreach ($this->Payment_model->get_company_info2() as $row) {
                                    ?> 
                                    <label class="topleftlabel"><span><?php echo $row->attribute; ?></span></label><span style="font-weight:bold;">:</span>
                                    <label class="toprightlabel"><span><?php echo $row->value; ?></span></label>

                                <?php } ?>
                            </div>



                            <?php
                            foreach ($this->Payment_model->get_company_info3() as $row) {
                                ?>
                                <label class="topleftlabel"><span><?php echo $row->attribute; ?></span>&</label>
                                <label class="toprightlabel"><span><?php echo $row->value; ?></span></label>

                            <?php } ?>

                        </div>
                    </div>

                    <form class="form-inline"> 
                        <br>

                        <div class="row">
                            <?php
                            foreach ($this->Payment_model->get_apl_info($appl_id) as $row) {
                                ?> 
                                <div class="col-xs-12"><?php $project_name = $row->project_name; ?>

                                    <label class="bottomleftlabel">Project</label><span style="font-weight:bold;">:</span>
                                    <label class="bottomrightlabel"><span><?php echo $project_name ?>&nbsp;<?php echo $block = $row->block; ?></span></label>
                                </div>
                            </div>
                            <!--div class="row">
                                <div class="col-xs-10">
                                    <label class="bottomleftlabel">Date</label>
                                    <label class="bottomrightlabel"><span id="date"></span></label>
                                </div>
                            </div-->
                            <div class="row">

                                <div class="col-xs-12">
                                    <label class="bottomleftlabel">Received from</label><span style="font-weight:bold;">:</span>
                                    <label class="bottomrightlabel"><span><?php echo $name = $row->name; ?> </span></label>
                                </div>
                                <div class="col-xs-4">

                                </div>
                            </div>
                            <div class="row">

                                <div class="col-xs-12">
                                    <label class="bottomleftlabel">Type/Unit No.</label><span style="font-weight:bold;">:</span>
                                    <label class="bottomrightlabel"><span><?php echo $type = $row->type; ?>/<?php echo $unit_no = $row->unit_no; ?></span></label>

<?php } ?> 
                            </div>

                        </div>              
                        <div class="row">

                            <!--div class="col-xs-12">
                                <label class="bottomleftlabel">Advance</label>
                                <label class="bottomrightlabel" >
                                    <input type="text" class="form-control" value="" id="raj" name="raj" />
                                </label>
                            </div-->
                            <div  class="col-xs-12">
                                <label class="bottomleftlabel">Advance</label><span style="font-weight:bold;">:</span>
                                <label class="bottomrightlabel"><span>
<?php echo number_format((float) $amount_paid, 2, '.', ''); ?> </span>
                                    <input type="hidden" id="bookingAmountOne" value="<?php echo number_format((float) $amount_paid, 2, '.', ''); ?>" onmouseover="word.innerHTML = convertNumberToWords(this.value)" />
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <label class="bottomleftlabel">In words</label><span style="font-weight:bold;">:</span>
                                <label class="bottomrightlabel"><span id='wordbookingAmounttwo'>
                                    </span> Only/-</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <label class="bottomleftlabel">Installment No</label><span style="font-weight:bold;">:</span>
                                <label class="bottomrightlabel"><?php echo $installment_no; ?> </label>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <label class="bottomleftlabel">Arrears</label><span style="font-weight:bold;">:</span>
                                <label class="bottomrightlabel"><?php echo $arrears; ?> </label>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <label class="bottomleftlabel">Other Charges</label><span style="font-weight:bold;">:</span>
                                <label class="bottomrightlabel"><span><?php echo $other_charges; ?></span></label>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <label class="bottomleftlabel">Mode of Payment</label><span style="font-weight:bold;">:</span>
                                <label class="bottomrightlabel"><?php echo $payment_mode; ?></label>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-xs-12">
                                <label class="bottomleftlabel">Instrument No.</label><span style="font-weight:bold;">:</span>
                                <label class="bottomrightlabel"><?php echo $cheque_cash; ?> </label>
                            </div>
                            <div class="col-xs-12">
                                <label class="bottomleftlabel">Date of Instrument</label><span style="font-weight:bold;">:</span>
                                <label class="bottomrightlabel">
                                    <?php //$date2 = $row->Date;  ?>
                                    <?php
                                    $x = explode(' ', $Date1);
                                    $Date1 = new DateTime($x[0]);
                                    echo $Date1->format('d-m-Y');
                                    ?></label>


                            </div>  
                            <div class="col-xs-12">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <label class="bottomleftlabel">Drawn on</label><span style="font-weight:bold;">:</span>
                                <label class="bottomrightlabel"><?php $drown_on; ?> </label>
                            </div>

                        </div>
                        <br>
                        <div class="row">

                            <div class="col-xs-8">
                                <label>Note : Cheque subjected to Realisation.</label>
                            </div>
                            <?php
                            foreach ($this->Company_info_model->get_Company_name() as $row) {
                                ?> 


                                <div class="col-xs-4 text-right">
                                    <label style="font-size:16px;"><?php echo $company_name = $row->value; ?></label><br><br>
                                    <label style="font-size:16px;">Authorized Signatory</label>
                                </div>
<?php } ?>
                        </div>
                    </form>

                </div>                     
                <div class="container">
                    <div class="row">
                        <div class="col-xs-4 text-left">
                            <b> Executive Name :- <?php echo ucfirst($first_name); ?>  <?php echo ucfirst($last_name); ?></b> 
                        </div>
                        <div class="col-xs-4 text-right">

                        </div>
                        <div class="col-xs-4 text-right">

                        </div>
                    </div>
                </div>
                <i class="fa fa-scissors" style="position:absolute; margin-top: 12px; margin-left: 10px;" aria-hidden="true"></i><hr style="border-top: dashed 2px; width: 100%; margin-left: -10px;" />
                <div class="container">
                    <div class="container" style="border: 1px solid #000; font-size: 18px;">
                        <div class="container">
                            <div class="row"><br> 
                                <div class="text-center"><label>Acknowledgement</label></div><br>
                                <div class="form-inline">
                                    <label>I </label>
                                    <label><?php echo $name; ?></label>
                                    <label>have received the orignal Receipt No. </label>
                                    <label><?php echo $receipt_no; ?></label>
                                    <label>issued by </label>
                                    <label><?php echo $company_name ?></label>
                                    <label>against the payment of Rs. </label>
                                    <label><?php echo number_format((float) $amount_paid, 2, '.', ''); ?></label>


                                    <br><br>

                                </div>                    
                            </div>
                            <div class="row">

                                <div class="col-xs-9">
                                </div>
                                <div class="col-xs-3 text-center">
                                    <label style="padding-right: 24px !important;">Signature</label>
                                </div>

                            </div><br>

                        </div>

                    </div>
                    <div class="row">
                        <div class="col-xs-4 text-left">
                            <b> Executive Name :- <?php echo ucfirst($first_name); ?>  <?php echo ucfirst($last_name); ?></b> 
                        </div>
                        <div class="col-xs-4 text-right">

                        </div>

                        <div class="col-xs-4 text-right">
                            <b></b>
                        </div>
                    </div>
                </div>



                <?php
                //  $i++;
//} //while loop ends here
                ?>

            </div>

        </div> 




        <script LANGUAGE = "JavaScript" >

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

            function print_this_doc() {
                /*var printContents = document.getElementById('printable').innerHTML;
                 //alert(printContents);
                 var originalContents = document.body.innerHTML;
                 alert(originalContents);
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
                 */





                window.print();
            }

            $(document).ready(function () {

                var bookingAmountOne = $('#bookingAmountOne').val();
                $('#wordbookingAmountOne').text(convertNumberToWords(bookingAmountOne));
                $('#wordbookingAmounttwo').text(convertNumberToWords(bookingAmountOne));


                $('#toppageheader').html('Payment Receipt <span class="pull-right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="print" id="btnprint" value="print" class="btn btn-sm btn-default" onClick="print_this_doc();">Print&nbsp;&nbsp;<i class="fa fa-print"></i></button></span>');
                $("a:contains(Invoices & Payments)").parent().addClass('active');
            });

            n = new Date();
            y = n.getFullYear();
            m = n.getMonth() + 1;
            d = n.getDate();
            document.getElementById("date").innerHTML = d + "/" + m + "/" + y;

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
        </script>

    </body>
</html>