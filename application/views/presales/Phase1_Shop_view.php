<html>
    <head>
        <title>Phase1 Shop</title>
        <?php
        require_once('assets/html_head_links.php');
        ?>
        <style>


            @page {
                size: A4;   /* auto is the initial value */
                margin: 1mm 10mm 1mm 10mm;  /* this affects the margin in the printer settings */

            }
            @media print
            {
                /*@page {size: landscape}*/
                .non-printable { display: none; }
                #printable { display: block;}
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
                html, body {
                    font-size: 14px !important;
                    width: 210mm !important;
                    height: 297mm !important;
                }

                .table{
                    font-size: 14px !important;
                }
                ol{
                    font-size: 10px !important;
                }
                .table > tbody > tr > td{
                    padding: 5px!important;
                }

                .graybg{
                    background-color: #999 !important;
                }
            }

            .gray{
                background: #aaa !important;
                font-weight: bold;
            }
            .panel-primary {
                border-color: #000 !important;
            }
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

            .borderleft{
                border-left: 1px solid #000;
            }
            .borderright{
                border-right: 1px solid #000;
            }
            .bordertop{
                border-top: 1px solid #000;
            }
            .borderbottom{
                border-bottom: 1px solid #000;
            }
            .borderfour{
                border: 1px solid #000;
            }
            .lineheight{
                line-height: 1.2;
                font-size: 18px;
            }
            .marginleft{
                margin-left: 10px;
            }
            .colxs1 {
                width: 5.333333%;
            }
            .padding10{
                padding: 10px;
            }
            .padding5{
                padding: 5px;
            }
            .graybg{
                background-color: #999 !important;
            }


        </style>

    </head>
    <body>


        <?php
        require_once('assets/top_menu.php');
        require_once('assets/pre_sales_side_menu.php');
        ?>
        <?php
        $id = $this->input->get('id');
        // //echo $id;

        foreach ($this->Pre_sales_model->view_sheet1($id) as $row) {
            ?>
            <?php $project_id = $row->project_id; ?>
            <?php $name = $row->name; ?>
            <?php $mobile_no = $row->mobile; ?>
            <?php $block = $row->block; ?>

            <?php $type = $row->type; ?>
            <?php $unit_no = $row->unit_no; ?>
            <?php $plot_size_mtr = $row->plot_size_mtr; ?>
            <?php $plot_size_ft = $row->plot_size_ft; ?>
            <?php $total_unit_cost_as_per_carpet_area = $row->total_unit_cost_as_per_carpet_area; ?>
            <?php $water_connection_ref_rate = $row->water_connection_ref_rate; ?>
            <?php $maintenance_cost_ref_rate = $row->maintenance_cost_ref_rate; ?>
            <?php $discount = $row->discount; ?>
            <?php $cost_payble_to_company = $row->cost_payble_to_company; ?>
            <?php $total_cost = $row->total_cost; ?>
            <?php $MPSEB_system = $row->MPSEB_system; ?>
            <?php $registry_charges = $row->registry_charges; ?>
            <?php $monthly = $row->monthly; ?>
            <?php $MPSEB_meter = $row->MPSEB_meter; ?>
            <?php $mutation = $row->mutation; ?>
            <?php $society = $row->society; ?>
            <?php $prospect_id = $row->prospect_id; ?>

            <?php $discussion = $row->discussion; ?>
            <?php $login_id = $row->login_id; ?>
        <?php } ?>

        <div class="main">
            <div class="container non-printable">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <?php echo anchor('Pre_sales/pre_sales_costing?id=' . $prospect_id, 'Back', 'class="btn btn-primary pull-right clickable non-printable" title="Back"');
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div id="printable">
                <div class="container">
                    <input type="hidden" name="max_id" value="<?php //echo $max_id;                                ?>" />
                    <input type="hidden" id="currentdate" name="currentdate" value="<?php echo date('Y-m-d'); ?>">
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
                    <?php $gst = $result5 ?>


                    <?php
                    foreach ($this->View_applicant_info->get_login_info($login_id) as $row) {
                        ?> 
                        <?php //$login_usernsme = $row->username; ?>
                        <?php $first_name = $row->first_name; ?>
                        <?php $last_name = $row->last_name; ?>
                        <?php $username = $row->username; ?>

                    <?php } ?>

                    <?php
                    $data['plot_size_mtr'] = $plot_size_mtr;
                    $data['plot_size_ft'] = $plot_size_ft;
                    $data['project_id'] = $project_id;
                    $data['type'] = $type;
                    $data['block'] = $block;
                    foreach ($this->Allotment_letter_model->show_plot_info($data) as $row) {
                        ?>
                        <?php $plot_sqmt = $row->plot_sqmt; ?>
                        <?php $plot_size_sqft = $row->plot_sqft; ?>
                        <?php $length_m = $row->length_m; ?>
                        <?php $width_m = $row->width_m; ?>

                    <?php } ?>
                    <?php
                    $a = $this->Company_info_model->get_attribute_value('RERA Regd No.');
                    $rerano = $a;
                    ?>
                    <input type="hidden" value="<?php echo $id; ?>" name="prospect_id" />
                    <input type="hidden" value="<?php echo $name; ?>" name="name" />
                    <input type="hidden" value="<?php echo $mobile_no; ?>" name="mobile" />
                    <input type="hidden" value="<?php echo $project_id; ?>" name="project_id" />
                    <input type="hidden" value="<?php echo $block; ?>" name="block" />
                    <input type="hidden" value="<?php echo $type; ?>" name="type" />
                    <input type="hidden" value="<?php echo $unit_no; ?>" name="unit_no" />
                    <input type="hidden" value="<?php echo $plot_size_mtr; ?>" name="plot_size_mtr" />
                    <input type="hidden" value="<?php echo $plot_size_ft; ?>" name="plot_size_ft" />
                    <br>
                    <input  id="gst" type="hidden" value="<?php echo $result5 ?>"/>
                    <input   type="hidden" name="plot_size_ft" value="<?php //echo $plot_size_ft                                           ?>"/>
                    <input   type="hidden" name="category" value="<?php //echo $category                                           ?>"/>


                    <div class="row borderfour">
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-xs-12 text-center borderbottom">
                                    <span style="font-size:24px; font-weight: 600;">SHEET NO. 1</span>
                                </div>
                            </div>
                            <div class="row lineheight marginleft">
                                <div class="col-xs-6">
                                    <span> <?php echo date('d-m-Y'); ?></span>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <span><b>  Rera Regd No. <?php echo $rerano ?></b></span>
                                </div>
                            </div>
                            <div class="row lineheight marginleft">
                                <div class="col-xs-4 borderleft bordertop borderbottom">
                                    Name
                                </div>
                                <div class="col-xs-1 borderleft bordertop borderbottom">
                                    :-
                                </div>
                                <div class="col-xs-7 borderleft bordertop borderbottom">
                                    <span >
                                        <?php echo $name; ?>
                                    </span>
                                </div>
                            </div>
                            <div class="row lineheight marginleft">
                                <div class="col-xs-4 borderleft borderbottom">
                                    Mobile
                                </div>
                                <div class="col-xs-1 borderleft borderbottom">
                                    :-
                                </div>
                                <div class="col-xs-7 borderleft borderbottom">
                                    <span >
                                        <?php echo $mobile_no; ?>
                                    </span>
                                </div>
                            </div>
                            <?php
                            $data['project_id'] = $project_id;
                            foreach ($this->Pre_sales_model->getproject_info($data) as $row) {
                                ?>
                                <?php $project_name = $row->project_name; ?>
                            <?php } ?>
                            <div class="row lineheight marginleft">
                                <div class="col-xs-4 borderleft borderbottom">
                                    Project
                                </div>
                                <div class="col-xs-1 borderleft borderbottom">
                                    :-
                                </div>
                                <div class="col-xs-7 borderleft borderbottom">
                                    <span >
                                        <?php echo $project_name; ?> <?php echo $block; ?>
                                    </span>
                                    <input type="hidden" value="<?php echo $project_id; ?>"/> 
                                    <input type="hidden" value="<?php echo $block; ?>"/>
                                    <input type="hidden" value="<?php echo $project_name; ?> <?php echo $block; ?>"/>
                                </div>
                            </div>
                            <div class="row lineheight marginleft">
                                <div class="col-xs-4 borderleft borderbottom">
                                    Unit No
                                </div>
                                <div class="col-xs-1 borderleft borderbottom">
                                    :-
                                </div>
                                <div class="col-xs-7 borderleft borderbottom">
                                    <span >
                                        <?php echo $type; ?>
                                    </span>
                                </div>
                            </div>
                            <div class="row lineheight marginleft">
                                <div class="col-xs-4 borderleft borderbottom">
                                    Type
                                </div>
                                <div class="col-xs-1 borderleft borderbottom">
                                    :-
                                </div>
                                <div class="col-xs-7 borderleft borderbottom">
                                    <span >
                                        <?php echo $type; ?>
                                    </span>
                                </div>
                            </div>
                            <div class="row hidden-lg hidden-md hidden-sm hidden-xs non-printable lineheight marginleft">
                                <div class="col-xs-4 borderleft borderbottom">
                                    Shop Size
                                </div>
                                <div class="col-xs-1 borderleft borderbottom">
                                    :-
                                </div>
                                <div class="col-xs-7 borderleft borderbottom">
                                    <span >
                                        <?php echo nbs(1); ?>  <?php //echo $length_m;  ?><?php echo nbs(2); ?><?php echo nbs(2); ?><?php //echo $width_m;  ?>                                           
                                    </span>
                                </div>
                            </div>
                            <div class="row lineheight marginleft">
                                <div class="col-xs-4 borderleft borderbottom">
                                    Shop Area
                                </div>
                                <div class="col-xs-1 borderleft borderbottom">
                                    :-
                                </div>
                                <div class="col-xs-7 borderleft borderbottom">
                                    <span >
                                        <?php echo number_format((float) $plot_size_mtr, 2, '.', ''); ?>      
                                    </span>
                                </div>
                            </div>
                            <div class="row lineheight marginleft">
                                <div class="col-xs-4 borderleft borderbottom">
                                    Shop Area in SQFT
                                </div>
                                <div class="col-xs-1 borderleft borderbottom">
                                    :-
                                </div>
                                <div class="col-xs-7 borderleft borderbottom">
                                    <span >
                                        <?php echo number_format((float) $plot_size_ft, 2, '.', ''); ?>   
                                    </span>
                                </div>
                            </div>

                            <br>

                            <div class="row lineheight marginleft">
                                <div class="col-xs-4 borderleft borderbottom bordertop padding5">
                                    Cost of Unit
                                </div>
                                <div class="col-xs-1 colxs1 borderleft borderbottom bordertop padding5">
                                    :-
                                </div>
                                <div class="col-xs-1 borderleft borderbottom bordertop padding5">
                                    Rs.
                                </div>
                                <div class="col-xs-3 borderleft borderright borderbottom bordertop padding5 gray">
                                    <span">
                                        <?php echo number_format((float) $total_unit_cost_as_per_carpet_area, 2, '.', ''); ?>
                                    </span>
                                </div>
                            </div>

                            <br>

                            <div class="row lineheight marginleft">
                                <div class="col-xs-4 borderleft borderbottom bordertop padding5">
                                    MPSEB System Strengthening
                                </div>
                                <div class="col-xs-1 colxs1 borderleft borderbottom bordertop padding5">
                                    :-
                                </div>
                                <div class="col-xs-1 borderleft borderbottom bordertop padding5">
                                    Rs.
                                </div>
                                <div class="col-xs-3 borderleft borderright borderbottom bordertop padding5 gray">
                                    <span >
                                        <?php echo number_format((float) $MPSEB_system, 2, '.', ''); ?>
                                    </span>
                                </div>
                            </div>

                            <br>

                            <div class="row lineheight marginleft">
                                <div class="col-xs-4 borderleft borderbottom bordertop padding5">
                                    Water Connection
                                </div>
                                <div class="col-xs-1 colxs1 borderleft borderbottom bordertop padding5">
                                    :-
                                </div>
                                <div class="col-xs-1 borderleft borderbottom bordertop padding5">
                                    Rs.
                                </div>
                                <div class="col-xs-3 borderleft borderright borderbottom bordertop padding5 gray">
                                    <span >
                                        <?php echo number_format((float) $water_connection_ref_rate, 2, '.', ''); ?>
                                    </span>
                                </div>
                            </div>
                            <div class="row lineheight marginleft">
                                <div class="col-xs-4 borderleft borderbottom padding5">
                                    Registry Charges
                                </div>
                                <div class="col-xs-1 colxs1 borderleft borderbottom padding5">
                                    :-
                                </div>
                                <div class="col-xs-1 borderleft borderbottom padding5">
                                    Rs.
                                </div>
                                <div class="col-xs-3 borderleft borderright borderbottom padding5 gray">
                                    <span >
                                        <?php echo number_format((float) $registry_charges, 2, '.', ''); ?>
                                    </span>
                                </div>
                            </div>
                            <div class="row lineheight marginleft">
                                <div class="col-xs-4 borderleft borderbottom padding5">
                                    Maintenance
                                </div>
                                <div class="col-xs-1 colxs1 borderleft borderbottom padding5">
                                    :-
                                </div>
                                <div class="col-xs-1 borderleft borderbottom padding5">
                                    Rs.
                                </div>
                                <div class="col-xs-3 borderleft borderright borderbottom padding5 gray">
                                    <span >
                                        <?php echo number_format((float) $maintenance_cost_ref_rate, 2, '.', ''); ?>
                                    </span>
                                </div>
                            </div>
                            <?php foreach ($this->Pre_sales_model->get_charge_amount() as $row) {
                                ?>
                                <?php $charge_amount1 = $row->charge_amount * 18 / 100; ?>
                                <?php $charge_amount = $row->charge_amount + $charge_amount1; ?>
                                <?php $ch_amt = $row->charge_amount ?>
                                <?php //$charge_amount = $charge_amount1 + $charge_amount2;  ?>
                            <?php } ?>
                            <div class="row lineheight marginleft">
                                <div class="col-xs-4 borderleft borderbottom padding5">
                                    Monthly Oper. 1 Year
                                </div>
                                <div class="col-xs-1 colxs1 borderleft borderbottom padding5">
                                    :-
                                </div>
                                <div class="col-xs-1 borderleft borderbottom padding5">
                                    Rs.
                                </div>
                                <div class="col-xs-3 borderleft borderright borderbottom padding5 gray">
                                    <span >
                                        <?php echo number_format((float) $monthly, 2, '.', ''); ?>
                                    </span>
                                </div>
                            </div>
                            <div class="row lineheight marginleft">
                                <div class="col-xs-4 borderleft borderbottom padding5">
                                    MPSEB Meter
                                </div>
                                <div class="col-xs-1 colxs1 borderleft borderbottom padding5">
                                    :-
                                </div>
                                <div class="col-xs-1 borderleft borderbottom padding5">
                                    Rs.
                                </div>
                                <div class="col-xs-3 borderleft borderright borderbottom padding5 gray">
                                    <span >
                                        <?php echo number_format((float) $MPSEB_meter, 2, '.', ''); ?>
                                    </span>
                                </div>
                            </div>
                            <div class="row lineheight marginleft">
                                <div class="col-xs-4 borderleft borderbottom padding5">
                                    Mutation
                                </div>
                                <div class="col-xs-1 colxs1 borderleft borderbottom padding5">
                                    :-
                                </div>
                                <div class="col-xs-1 borderleft borderbottom padding5">
                                    Rs.
                                </div>
                                <div class="col-xs-3 borderleft borderright borderbottom padding5 gray">
                                    <span >
                                        <?php echo number_format((float) $mutation, 2, '.', ''); ?>
                                    </span>
                                </div>
                            </div>
                            <div class="row lineheight marginleft">
                                <div class="col-xs-4 borderleft borderbottom padding5">
                                    Society
                                </div>
                                <div class="col-xs-1 colxs1 borderleft borderbottom padding5">
                                    :-
                                </div>
                                <div class="col-xs-1 borderleft borderbottom padding5">
                                    Rs.
                                </div>
                                <div class="col-xs-3 borderleft borderright borderbottom padding5 gray">
                                    <span >
                                        <?php echo number_format((float) $society, 2, '.', ''); ?>
                                    </span>
                                </div>
                            </div>
                            <br>
                            <div class="row lineheight marginleft">
                                <div class="col-xs-4 borderleft borderbottom bordertop padding5">
                                    Total Cost of Shop
                                </div>
                                <div class="col-xs-1 colxs1 borderleft borderbottom bordertop padding5">
                                    :-
                                </div>
                                <div class="col-xs-1 borderleft borderbottom bordertop padding5">
                                    Rs.
                                </div>
                                <div class="col-xs-3 borderleft borderright borderbottom bordertop padding5 gray">
                                    <span >
                                        <?php echo number_format((float) $cost_payble_to_company, 2, '.', ''); ?>
                                    </span>
                                </div>
                            </div>
                            <br>
                            <div class="row lineheight marginleft">
                                <div class="col-xs-1 padding10">

                                </div>

                                <div class="col-xs-3 text-right padding10">
                                    Total Cost
                                </div>
                                <div class="col-xs-1 colxs1">

                                </div>
                                <div class="col-xs-1 borderleft borderbottom bordertop padding10 gray">
                                    Rs.
                                </div>
                                <div class="col-xs-2 borderleft borderright borderbottom bordertop padding10 gray">
                                    <span >
                                        <?php echo number_format((float) $cost_payble_to_company, 2, '.', ''); ?>
                                    </span>
                                </div>
                                <div class="col-xs-4">
                                    <span >
                                        + Registry + Society + Meter Installation + Mutation + GST
                                    </span>
                                </div>
                            </div>

                            <div class="row lineheight marginleft">
                                <div class="col-xs-1">

                                </div>
                                <div class="col-xs-3 text-right">
                                    Discount No.01
                                </div>
                                <div class="col-xs-1 colxs1">

                                </div>
                                <div class="col-xs-1">
                                    Rs.
                                </div>
                                <div class="col-xs-2">
                                    <span >
                                        <?php echo number_format((float) $discount, 2, '.', ''); ?>
                                    </span>
                                </div>
                                <div class="col-xs-4 borderleft borderright">
                                    <span >
                                    </span>
                                </div>
                            </div>
                            <br>
                            <div class="row lineheight marginleft">
                                <div class="col-xs-1 padding5">

                                </div>
                                <div class="col-xs-3 text-right borderleft borderbottom bordertop padding5">
                                    Net Final Amount
                                </div>
                                <div class="col-xs-1 colxs1 bordertop borderbottom padding5">
                                    &nbsp;
                                </div>
                                <div class="col-xs-1 borderleft borderbottom bordertop padding5">
                                    Rs.
                                </div>
                                <div class="col-xs-2 borderleft borderbottom bordertop borderright padding5">
                                    <span >
                                        <b> <?php echo number_format((float) $total_cost, 2, '.', ''); ?> </b>
                                    </span>
                                </div>
                                <div class="col-xs-4 borderleft borderright padding5">
                                    <span >
                                    </span>
                                </div>
                            </div>
                            <br>

                            <div class="row marginleft">
                                <div class="col-xs-1">
                                </div>
                                <div class="col-xs-10">
                                    <span>Note :- Registration charges of Shop registry shall be charged as per actual additionally</span>
                                </div>
                                <div class="col-xs-1">
                                </div>
                            </div>
                            <br>
                            <div class="row lineheight">
                                <div class="col-xs-12 bordertop">
                                    <label>  Other Charges to be born by the customer</label>
                                </div>
                            </div>
                            <div class="row lineheight">
                                <div class="col-xs-12 bordertop">
                                    <label> Note</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-1 bordertop">
                                    <span>1</span>
                                </div>
                                <div class="col-xs-11 bordertop borderleft">
                                    <span>
                                        Registration Stamp duty, Fees & other charges as per actual.(shall be born by the customer).

                                    </span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-1 bordertop">
                                    <span>2</span>
                                </div>
                                <div class="col-xs-11 bordertop borderleft">
                                    <span> 
                                        Bank Documentation Charges Extra (shall be born by the customer)
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-1 bordertop">
                                    <span>3</span>
                                </div>
                                <div class="col-xs-11 bordertop borderleft">
                                    <span> 
                                        Maintanence Charges Shall be charged additionally for maintanence of Flat @. 25000.00 + GST tax.@18% = 29500.00 For two years.
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-1 bordertop">
                                    <span>4</span>
                                </div>
                                <div class="col-xs-11 bordertop borderleft">
                                    <span> 
                                        Society Charges Shall be paid additionally at the time of possession @ Rs. 550.00 as Membership Charges & @ Rs. 25000.00 for Common Corpus fund for residents welfare Society.

                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-1 bordertop">
                                    <span>5</span>
                                </div>
                                <div class="col-xs-11 bordertop borderleft">
                                    <span> 
                                        Mortgage Stamp Fees & Other Charges shall be born by the customer.
                                    </span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-1 bordertop">
                                    <span>6</span>
                                </div>
                                <div class="col-xs-11 bordertop borderleft">
                                    <span> 
                                        Meter Connection Charges As per actual Shall be the responsibility of
                                        the allottee.                
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-1 bordertop">
                                    <span>7</span>
                                </div>
                                <div class="col-xs-11 bordertop borderleft">
                                    <span> 
                                        Water Meter Application with department shall be the responsibility of
                                        the allottee.        
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-1 bordertop">
                                    <span>8</span>
                                </div>
                                <div class="col-xs-11 bordertop borderleft">
                                    <span> 
                                        Namantaran Charges (Advocate fees) shall be Charged Extra.

                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-1 bordertop">
                                    <span>9</span>
                                </div>
                                <div class="col-xs-11 bordertop borderleft">
                                    <span> 
                                        Monthly Operational Charges Shall be charged additionally before Possession of Flat for common facilities of Campus, on monthly basis @ Rs. 800.00 + GST @18% = 11328.00 payable for one year as advance.

                                    </span>
                                </div>
                            </div>


                        </div>
                    </div>





                    <table class="table table-bordered hidden-lg hidden-md hidden-sm hidden-xs">
                        <tbody>
                            <tr>
                                <td class="col-xs-12" colspan="7" style="padding: 15px; font-weight: bold;">
                                    <div class="row">
                                        <div class="col-xs-4">

                                        </div>
                                        <div class="col-xs-4 text-center">
                                            Cost Calculation
                                        </div>
                                        <div class="col-xs-4 text-right">
                                            <p style="font-weight:200 !important;"> <?php echo date('d-m-Y'); ?></p>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    Name
                                </td>
                                <td colspan="2">
                                    <input type="text" value="<?php echo $name; ?>" style="width:100%; border: none;" readonly/> 
                                </td>
                                <td>
                                    &nbsp;
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    Mobile
                                </td>
                                <td colspan="2">
                                    <input type="text" pattern="[789][0-9]{9}" value="<?php echo $mobile_no; ?>" style="width:100%; border: none;" readonly/>
                                </td>
                                <td>
                                    &nbsp;
                                </td>
                            </tr>
                            <tr>
                                <?php
                                $data['project_id'] = $project_id;
                                foreach ($this->Pre_sales_model->getproject_info($data) as $row) {
                                    ?>
                                    <?php $project_name = $row->project_name; ?>
                                <?php } ?>
                                <td colspan="3">
                                    Project
                                </td>
                                <td colspan="2">
                                    <?php echo $project_name; ?> <?php echo $block; ?>
                                    <input type="hidden" value="<?php echo $project_id; ?>"/> 
                                    <input type="hidden" value="<?php echo $block; ?>"/>
                                    <input type="hidden" value="<?php echo $project_name; ?> <?php echo $block; ?>"/>
                                </td>
                                <td>
                                    &nbsp;
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    Unit No
                                </td>
                                <td colspan="2">
                                    <input type="text" value="<?php echo $unit_no; ?>" name="unit_no" style="width:100%; border: none;" readonly />
                                </td>
                                <td>
                                    &nbsp;
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    Type
                                </td>
                                <td colspan="2">
                                    <input type="text" value="<?php echo $type ?>" name="type" style="width:100%; border: none;" readonly />
                                </td>
                                <td>
                                    &nbsp;
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    Shop Size
                                </td>                                      
                                <td colspan="2">
                                    <?php echo nbs(1); ?>  <?php //echo $length_m;  ?><?php echo nbs(2); ?><?php echo nbs(2); ?><?php //echo $width_m;  ?>                                           
                                    <input type="hidden" value="<?php //echo $plot_size_mtr                                           ?>" name="plot_size_mtr" style= " padding: 8px; margin: 0; border: 0; border-radius: 0px;"   />
                                </td>
                                <td>

                                </td>

                            </tr>
                            <tr>

                                <td colspan="3">
                                    Shop Area
                                </td>

                                <td colspan="2">
                                    <?php echo number_format((float) $plot_size_mtr, 2, '.', ''); ?>
                                </td>
                                <td>
                                    Sq. Mt
                                </td>

                            </tr>
                            <tr>

                                <td colspan="3">
                                    Shop Area SQFT
                                </td>

                                <td colspan="2">
                                    <?php echo number_format((float) $plot_size_ft, 2, '.', ''); ?>
                                </td>
                                <td>
                                    Sq. Ft
                                </td>

                            </tr>

                            <tr>

                                <td colspan="3">
                                    <b>Cost of Unit</b> 
                                </td>

                                <td colspan="2">
                                    <span class="pull-right"> Rs.</span>

                                </td>
                                <td>
                                    <?php echo number_format((float) $total_unit_cost_as_per_carpet_area, 2, '.', ''); ?>
                                </td>

                            </tr>                                                                      
                            <tr>
                                <td colspan="3"> 
                                    MPSEB System Strengthening
                                </td>

                                <td colspan="2">
                                    <span class="pull-right"> Rs.</span>         
                                </td>
                                <td>
                                    <?php echo number_format((float) $MPSEB_system, 2, '.', ''); ?>
                                </td>

                            </tr>
                            <tr>
                                <td colspan="3">
                                    Water Connection
                                </td>

                                <td colspan="2">
                                    <span class="pull-right"> Rs.</span>   
                                </td>
                                <td>
                                    <?php echo number_format((float) $water_connection_ref_rate, 2, '.', ''); ?>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    Registry Charges
                                </td>

                                <td colspan="2">
                                    <span class="pull-right"> Rs.</span>     
                                </td>
                                <td>
                                    <?php echo number_format((float) $registry_charges, 2, '.', ''); ?>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    Maintenance
                                </td>
                                <td colspan="2">
                                    <span class="pull-right"> Rs.</span>    
                                </td>
                                <td>
                                    <?php echo number_format((float) $maintenance_cost_ref_rate, 2, '.', ''); ?>
                                </td>
                            </tr>
                            <tr>
                                <?php foreach ($this->Pre_sales_model->get_charge_amount() as $row) {
                                    ?>
                                    <?php $charge_amount1 = $row->charge_amount * 18 / 100; ?>
                                    <?php $charge_amount = $row->charge_amount + $charge_amount1; ?>
                                    <?php $ch_amt = $row->charge_amount ?>
                                    <?php //$charge_amount = $charge_amount1 + $charge_amount2;  ?>
                                <?php } ?>

                                <td colspan="3">
                                    Monthly Oper. 1 Year
                                </td>
                                <td colspan="2">
                                    <span class="pull-right"> Rs.</span> 
                                </td>
                                <td>
                                    <?php echo number_format((float) $monthly, 2, '.', ''); ?>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    MPSEB Meter
                                </td>
                                <td colspan="2">
                                    <span class="pull-right"> Rs.</span> 
                                </td>
                                <td>
                                    <?php echo number_format((float) $MPSEB_meter, 2, '.', ''); ?>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    Mutation
                                </td>
                                <td colspan="2">
                                    <span class="pull-right"> Rs.</span> 
                                </td>
                                <td>
                                    <?php echo number_format((float) $mutation, 2, '.', ''); ?>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    Society
                                </td>
                                <td colspan="2">
                                    <span class="pull-right"> Rs.</span> 
                                </td>
                                <td>
                                    <?php echo number_format((float) $society, 2, '.', ''); ?>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <b>Total Cost of Shop</b> 
                                </td>
                                <td colspan="2">
                                    <span class="pull-right"> Rs.</span> 
                                </td>
                                <td>
                                    <?php echo number_format((float) $cost_payble_to_company, 2, '.', ''); ?>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    Discount No.01
                                </td>
                                <td colspan="2">
                                    <span class="pull-right"> Rs.</span> 
                                </td>
                                <td>
                                    <?php echo number_format((float) $discount, 2, '.', ''); ?>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <b>Net Final Amount</b>
                                </td>
                                <td colspan="2">
                                    + Registry + Society  <span class="pull-right"> Rs.</span> <br> + Meter Installation + Mutation <br> + GST Tax as applicable

                                </td>
                                <td>
                                    <?php echo number_format((float) $total_cost, 2, '.', ''); ?>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="7">
                                    <span>Note :- Registration charges of Shop registry shall be charged as per actual additionally</span>
                                </td>
                            </tr>

                            <tr>

                            </tr>
                            <tr>

                                <td colspan="7">
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
                    </table>

                </div> 

                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <label> Executive Name :- &nbsp;<?php echo $first_name . nbs(1) . $last_name; ?> /id : <?php echo $username; ?></label>
                            <br>
                            <label>Discussion</label>
                            <?php echo $discussion; ?>
                        </div>
                    </div><br>

                </div>

            </div> 


        </div>


        <script type="text/javascript">

            function allinone()
            {
                var basic_cost = Number(document.getElementById('basic_cost').value);
                var MPSEB_system = Number(document.getElementById('MPSEB_system').value);
                var water_connection = Number(document.getElementById('water_connection').value);
                var registry_charges = Number(document.getElementById('registry_charges').value);
                var maintenance = Number(document.getElementById('maintenance').value);
                var monthly = Number(document.getElementById('monthly').value);
                var MPSEB_meter = Number(document.getElementById('MPSEB_meter').value);
                var mutation = Number(document.getElementById('mutation').value);
                var society = Number(document.getElementById('society').value);
                var ttl = (basic_cost + MPSEB_system + water_connection + registry_charges + maintenance + monthly + MPSEB_meter + mutation + society).toFixed(2);
                document.getElementById('total_cost').value = ttl;


                var total_cost = Number(document.getElementById('total_cost').value);
                var discount_one = Number(document.getElementById('discount_one').value);
                var ttl2 = (total_cost - discount_one).toFixed(2);
                document.getElementById('final_cost').value = ttl2;

                if (total_cost < discount_one)
                {
                    alert('discount cannot be more then the total cost');
                    document.getElementById('discount_one').value = 0;
                }

                allinone();
            }
            function makedecimal(id)
            {
                var onen = Number(document.getElementById(id).value);
                var a = onen.toFixed(2);
                document.getElementById(id).value = a;

            }

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

                $('#toppageheader').html('Shop Cost Calculation <span class="pull-right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="print" id="btnprint" value="print" class="btn btn-xs btn-default" onClick="print_this_doc();">Print&nbsp;&nbsp;<i class="fa fa-print"></i></button></span>');
                $("a:contains(Shop Cost Calculation)").parent().addClass('active');
                allinone();
            });
        </script>
    </body>

</html>
