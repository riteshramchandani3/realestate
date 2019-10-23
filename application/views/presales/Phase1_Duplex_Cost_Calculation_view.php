<html>
    <head>
        <title>Duplex Phase1</title>
        <?php
        require_once('assets/html_head_links.php');
        ?>
        <style>


            @page {
                size: A4;   /* auto is the initial value */
                margin: 3mm 10mm 3mm 10mm;  /* this affects the margin in the printer settings */

            }
            @media print
            {
                /*@page {size: landscape}*/
                .non-printable { display: none; }
                #printable { display: block;}

                b   
                label {
                    display: inline-block;
                    max-width: 100%;
                    margin-bottom: 5px;
                    font-weight: bold;
                    font-size: 12px !important;
                }

                .graybg{
                    background-color: #999 !important;
                }
                .col-xs-3 {
                    width: 30%;
                }

            }
            .graybg{
                background-color: #999 !important;
            }

        </style>

    </head>
    <body style="font-family: arial !important">

        <?php
        require_once('assets/top_menu.php');
        require_once('assets/pre_sales_side_menu.php');
        ?>

        <div class="main">
            <div class="container  non-printable">
                <a href="javascript: history.go(-1)" class="btn btn-primary pull-right clickable">Back</a>
            </div>

            <?php $_GET['id']; ?>
            <form class="form-inline" action="<?php echo site_url('pre_sales/get_visitor_duplexphase1'); ?>" method="post" name="Form" enctype="multipart/form-data" onsubmit="return validateForm()">
                <div id="printable">
                    <div class="container">

                        <input type="hidden" name="max_id" value="<?php //echo $max_id;                                                                            ?>" />
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
                        $id = $this->input->get('id');
                        // //echo $id;

                        foreach ($this->Pre_sales_model->view_sheet1($id) as $row) {
                            ?>
                            <?php $project_id = $row->project_id; ?>
                            <?php $name = $row->name; ?>
                            <?php $mobile_no = $row->mobile; ?>
                            <?php $block = $row->block; ?>
                            <?php $category = $row->category; ?>
                            <?php $type = $row->type; ?>
                            <?php $unit_no = $row->unit_no; ?>
                            <?php $plot_size_mtr = $row->plot_size_mtr; ?>
                            <?php $plot_size_ft = $row->plot_size_ft; ?>
                            <?php $plot_size_mtr = $row->plot_size_mtr; ?>
                            <?php $cost_carpet_area = $row->cost_carpet_area; ?>
                            <?php $cost_ca_ref_rate = $row->cost_ca_ref_rate; ?>
                            <?php $discount = $row->discount; ?>
                            <?php $cost_payble_to_company = $row->cost_payble_to_company; ?>
                            <?php $discount_two = $row->discount_two; ?>
                            <?php $total_cost = $row->total_cost; ?>
                            <?php $discussion = $row->discussion; ?>
                            <?php $login_id = $row->login_id; ?>
                            <?php $total_unit_cost_as_per_carpet_area = $row->total_unit_cost_as_per_carpet_area; ?>
                            <?php $land_cost = $row->land_cost; ?>
                            <?php $construction_cost = $row->construction_cost; ?>
                            <?php $maintenance_cost_ref_rate = $row->maintenance_cost_ref_rate; ?>
                            <?php $MPSEB_system = $row->MPSEB_system; ?>
                            <?php $registry_charges = $row->registry_charges; ?>
                            <?php $namantaran = $row->namantaran; ?>
                            <?php $rcc_tower = $row->rcc_tower; ?>
                            <?php $ac_point_at_ff = $row->ac_point_at_ff; ?>
                            <?php $total_open_terrace_area_back = $row->total_open_terrace_area_back; ?>
                            <?php $extra_charge = $row->extra_charge; ?>
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
                        <input type="hidden" value="<?php echo $category; ?>" name="category" />
                        <input type="hidden" value="<?php echo $type; ?>" name="type" />
                        <input type="hidden" value="<?php echo $unit_no; ?>" name="unit_no" />
                        <input type="hidden" value="<?php echo $plot_size_mtr; ?>" name="plot_size_mtr" />
                        <input type="hidden" value="<?php echo $plot_size_ft; ?>" name="plot_size_ft" />
                        <input  id="gst" type="hidden" value="<?php echo $result5 ?>"/>
                        <input   type="hidden" name="plot_size_ft" value="<?php echo $plot_size_ft ?>"/>
                        <input   type="hidden" name="category" value="<?php echo $category ?>"/>


                        <div class="row" style="font-weight:800;font-size: 22px;border: 1px solid #000;">
                            <div class="col-md-12 text-center">
                                <span>SHEET NO. 1</span> 
                            </div>
                        </div>

                        <div class="row" style="font-size: 12px;border: 1px solid #000; border-top: none;">
                            <div class="col-xs-4">
                                <?php echo date('d-m-Y'); ?>
                            </div>
                            <div class="col-xs-4 text-center">
                                <?php echo $block; ?>
                            </div>
                            <div class="col-xs-4 text-right">
                                <span><b>    Rera Regd No.  <?php echo $rerano ?></b></span>
                            </div>
                        </div>

                        <div class="row" style="border-left: 1px solid #000; border-right: 1px solid #000;border-top: none;">
                            <div class="col-xs-3">
                                <span style="font-size: 14px;font-weight: 600;">
                                    Name
                                </span>
                            </div>
                            <div class="col-xs-1">
                                <label> :-</label>
                            </div>
                            <div class="col-xs-7">
                                <span style="font-size: 16px;font-weight: 600;">
                                    <?php echo $name; ?> 
                                </span>
                            </div>
                        </div>

                        <div class="row" style="border-left: 1px solid #000; border-right: 1px solid #000;border-top: none;">
                            <div class="col-xs-3">
                                <span style="font-size: 14px;font-weight: 600;"> 
                                    Mobile
                                </span>
                            </div>
                            <div class="col-xs-1">
                                <label> :-</label>
                            </div>
                            <div class="col-xs-7">
                                <span style="font-size: 16px;font-weight: 600;">
                                    <?php echo $mobile_no; ?> 
                                </span>
                            </div>
                        </div>

                        <div class="row" style="border-left: 1px solid #000; border-right: 1px solid #000;border-top: none;">
                            <div class="col-xs-3">
                                <?php
                                $data['project_id'] = $project_id;
                                foreach ($this->Pre_sales_model->getproject_info($data) as $row) {
                                    ?>
                                    <?php $project_name = $row->project_name; ?>
                                <?php } ?>
                                <span style="font-size: 14px;font-weight: 600;"> 
                                    Project
                                </span>
                                <input type="hidden" value="<?php echo $project_id; ?>"/> 
                                <input type="hidden" value="<?php echo $block; ?>"/>
                                <input type="hidden" value="<?php echo $project_name; ?> <?php echo $block; ?>"/>
                            </div>
                            <div class="col-xs-1">
                                <label> :-</label>
                            </div>
                            <div class="col-xs-7">
                                <span style="font-size: 16px;font-weight: 600;">  
                                    <?php echo $project_name; ?> <?php echo $block; ?>
                                </span>
                            </div>
                        </div>

                        <div class="row" style="border-left: 1px solid #000; border-right: 1px solid #000;border-top: none;">
                            <div class="col-xs-3">
                                <span style="font-size: 14px;font-weight: 600;"> 
                                    Unit No
                                </span>
                            </div>
                            <div class="col-xs-1">
                                <label> :-</label>
                            </div>
                            <div class="col-xs-7">
                                <span style="font-size: 16px;font-weight: 600;"> 
                                    <?php echo $unit_no; ?>
                                </span>
                            </div>
                        </div>

                        <div class="row" style="border-left: 1px solid #000; border-right: 1px solid #000;border-top: none;">
                            <div class="col-xs-3">
                                <span style="font-size: 14px;font-weight: 600;">
                                    Type
                                </span>
                            </div>
                            <div class="col-xs-1">
                                <label> :-</label>
                            </div>
                            <div class="col-xs-7">
                                <span style="font-size: 16px;font-weight: 600;"> 
                                    <?php echo $type; ?>
                                </span>
                            </div>
                        </div>

                        <div class="row" style="border-left: 1px solid #000; border-right: 1px solid #000;border-top: none;">
                            <div class="col-xs-3">
                                <span style="font-size: 14px;font-weight: 600;"> 
                                    Plot Size
                                </span>
                            </div>
                            <div class="col-xs-1">
                                <label> :-</label>
                            </div>
                            <div class="col-xs-7">
                                <span style="font-size: 16px;font-weight: 600;"> 
                                    <?php echo $plot_size_mtr; ?>  Mtr
                                </span>
                            </div>                                                               
                            <input type="hidden" value="<?php echo $plot_size_mtr ?>" name="plot_size_mtr" />
                        </div>

                        <div class="row" style="border-left: 1px solid #000; border-right: 1px solid #000;border-top: none;">
                            <div class="col-xs-3">
                                <span style="font-size: 14px;font-weight: 600;">
                                    Plot Area
                                </span>
                            </div>
                            <div class="col-xs-1">
                                <label> :-</label>
                            </div>
                            <div class="col-xs-2">
                                <label> <?php echo $plot_sqmt; ?>  SQMTR.</label>
                            </div>                                                               
                            <div class="col-xs-3">
                                <span style="font-size: 16px;font-weight: 600;">
                                    <?php echo $plot_sqmt * 10.76; ?>  Sq. Ft.
                                </span>
                            </div>                                                               
                            <input type="hidden" value="<?php echo $plot_size_mtr ?>" name="plot_size_mtr" />
                        </div>

                        <div class="row" style="border-left: 1px solid #000; border-right: 1px solid #000;border-top: none;">
                            <div class="col-xs-3">
                                <span style="font-size: 14px;font-weight: 600;">
                                    Built-Up Area
                                </span>
                            </div>
                            <div class="col-xs-1">
                                <label> :-</label>
                            </div>
                            <div class="col-xs-2">
                                <input type="hidden" name="cost_ca_ref_rate" value="<?php echo $cost_ca_ref_rate; ?>" />
                                <label> <?php echo $cost_carpet_area; ?>  SQMTR.</label>
                            </div>                                                               
                            <div class="col-xs-3">
                                <span style="font-size: 16px;font-weight: 600;">
                                    <?php echo number_format((float) $cost_carpet_area * 10.76, 2, '.', ''); ?> Sq. Ft.
                                </span>
                            </div>                                                               
                        </div>

                        <div class="row" style="border-left: 1px solid #000; border-right: 1px solid #000;border-top: none;">
                            <div class="col-xs-3">
                                <span style="font-size: 14px;font-weight: 600;">Carpet Area</span>
                            </div>
                            <div class="col-xs-1">
                                <label> :-</label>
                            </div>
                            <div class="col-xs-2">
                                <span style="font-size: 16px;font-weight: 600;">SQMTR.</span>
                            </div>                                                                                                                                                    
                        </div>

                        <div class="row" style="border-left: 1px solid #000; border-right: 1px solid #000;border-top: none;">
                            <div class="col-xs-3 text-right" style="margin-top: 9px;">
                                <span style="font-size:16px;font-weight: 600;">Basic Cost of Unit</span>
                            </div>
                            <div class="col-xs-1" style="margin-top: 9px;">
                                <label> :-</label>
                            </div>
                            <div class="col-xs-1" style="margin-top: 9px;">
                                <label>Rs.</label> 
                            </div>
                            <div class="col-xs-4 graybg" style="border:1px solid #000; border-bottom: none;">
                                <span style="font-size:26"><?php echo number_format((float) $total_unit_cost_as_per_carpet_area, 2, '.', ''); ?></span>
                            </div>                                                                                                                                                    
                        </div>
                        <div class="row" style="border-left: 1px solid #000; border-right: 1px solid #000;border-top: none;">
                            <div class="col-xs-3 text-right">
                                <span style="font-size:16px;font-weight: 600;" style="margin-top: 9px;">Other Charges</span>
                            </div>
                            <div class="col-xs-1" style="margin-top: 9px;">
                                <label> :-</label>
                            </div>
                            <div class="col-xs-1" style="margin-top: 9px;">
                                <label>Rs.</label> 
                            </div>
                            <div class="col-xs-4 graybg" style="border:1px solid #000; border-bottom: none; margin-top: 4px;">
                                <span style="font-size:26"><?php echo number_format((float) $extra_charge, 2, '.', ''); ?></span>
                            </div>                                                                                                                                                    
                        </div>

                        <div class="row" style="border-left: 1px solid #000; border-right: 1px solid #000;margin-top: 0px;">
                            <div class="col-xs-3 text-right" style="margin-top: 10px;">
                                <span style="font-size: 16px;font-weight: 600;" style="margin-top: 9px;">Total Cost of Unit</span>
                            </div>
                            <div class="col-xs-1" style="margin-top: 9px;">

                            </div>
                            <div class="col-xs-1">
                            </div>
                            <div class="col-xs-4 graybg" style="border:1px solid #000;margin-top: 4px;">
                                <span style="font-size: 30px;font-weight: 400;"><?php echo number_format((float) $land_cost, 2, '.', ''); ?></span>
                            </div>                                                                                                                                                    
                        </div>
                       
                        <div class="row" style="font-size: 17px;border-left: 1px solid #000; border-right: 1px solid #000;border-top: none;">
                            <div class="col-xs-3" style="margin-top: 9px;">
                                <span style="font-size: 16px;font-weight: 600;">Cost of Constructed Unit</span>
                            </div>
                            <div class="col-xs-1" style="margin-top: 9px;">
                                <label> :-</label>
                            </div>
                            <div class="col-xs-1" style="margin-top: 9px;">
                                <label>Rs.</label> 
                            </div>
                            <div class="col-xs-4 graybg" style="border:1px solid #000;margin-top: 4px;margin-top: 4px;">
                                <span style="font-size:26"><?php echo number_format((float) $land_cost, 2, '.', ''); ?></span>
                            </div>                                                                                                                                                    
                        </div>

                        <div class="row" style="font-size: 20px;border-left: 1px solid #000; border-right: 1px solid #000;border-top: none;">
                            <div class="col-xs-2">
                            </div>
                            <div class="col-xs-4">
                                <label style="font-size:18px !important;">Extra Charges</label>
                            </div>
                            <div class="col-xs-1">
                            </div>
                            <div class="col-xs-2">
                            </div>                                                                                                                                                    
                        </div>

                        <div class="row" style="border-left: 1px solid #000; border-right: 1px solid #000;border-top: none;">
                            <div class="col-xs-1 graybg" style="font-size: 14px;border-top: 1px solid #000;border-right: 1px solid #000;">
                                <label >&nbsp;   1 </label>
                            </div>
                            <div class="col-xs-3 graybg" style="font-size: 14px;border-top: 1px solid #000;border-right: 1px solid #000;">
                                <label>REGISTRY CHARGES</label>
                            </div>
                            <div class="col-xs-1 graybg" style="font-size: 14px;border-top: 1px solid #000;border-right: 1px solid #000;">
                                <label >&nbsp; :- </label>
                            </div>
                            <div class="col-xs-2 graybg" style="font-size: 14px;border-top: 1px solid #000;border-right: 1px solid #000;">
                                <label> As Per Actual</label>
                            </div>                                                                                                                                                    
                            <div class="col-xs-4" style="font-size: 10px;">
                                <span>Based on Prevailing Collector Guide Line rates</span>
                            </div>                                                                                                                                                    
                        </div>

                        <div class="row" style="font-size: 20px;border-left: 1px solid #000; border-right: 1px solid #000;border-top: none;">
                            <div class="col-xs-1 graybg" style="font-size: 14px;border-top: 1px solid #000;border-right: 1px solid #000; border-bottom:1px solid #000;">
                                <label >&nbsp;  2 </label>
                            </div>
                            <div class="col-xs-3 graybg" style="font-size: 14px;border-top: 1px solid #000;border-right: 1px solid #000; border-bottom:1px solid #000;">
                                <label>SOCIETY CHARGES</label>
                            </div>
                            <div class="col-xs-1 graybg" style="font-size: 14px;border-top: 1px solid #000;border-right: 1px solid #000; border-bottom:1px solid #000;">
                                <label >&nbsp;  :- </label>
                            </div>
                            <div class="col-xs-2 graybg" style="font-size: 14px;border-top: 1px solid #000;border-right: 1px solid #000; border-bottom:1px solid #000;">
                                <label> 50000.00</label>
                            </div>                                                                                                                                                    
                            <div class="col-xs-4" style="font-size: 14px;">
                            </div>                                                                                                                                                    
                        </div>
                         
                        <div class="row" style="border-left: 1px solid #000; border-right: 1px solid #000;border-top: none; border-bottom: none;">
                            <div class="col-xs-1 non-printable">
                            </div>
                            <div class="col-xs-3" style="margin-top: 9px;">
                                <span style="font-size: 16px;font-weight: 600;">Maintenance</span>
                            </div>
                            <div class="col-xs-3 text-right graybg" style="border:1px solid #000; margin-top: 4px;">
                                <span style="font-size: 20px;font-weight: 400;">
                                   <?php echo number_format((float) $maintenance_cost_ref_rate, 2, '.', ''); ?>
                                </span>
                            </div> 
                            <div class="col-xs-4" style="margin-top: 9px;"> 
                                <span style="font-size:13px !important;">
                                    for two year of Unit only
                                </span>
                            </div>                                                                                                                                                                           
                        </div>
                        
                        <div class="row" style="border-left: 1px solid #000; border-right: 1px solid #000;border-top: none; border-bottom: none;">
                            <div class="col-xs-1 non-printable">
                            </div>
                            <div class="col-xs-3" style="margin-top: 9px;">
                                <span style="font-size: 16px;font-weight: 600;">MPMKVVCL Meter</span>
                            </div>
                            <div class="col-xs-3 text-right graybg" style="border:1px solid #000; margin-top: 4px;">
                                <span style="font-size: 20px;font-weight: 400;">
                                  <?php echo number_format((float) $MPSEB_system, 2, '.', ''); ?>
                                </span>
                            </div> 
                            <div class="col-xs-4" style="margin-top: 9px;"> 
                                <span style="font-size:13px !important;">
                                  One time
                                </span>
                            </div>                                                                                                                                                                           
                        </div>
                        
                        <div class="row" style="border-left: 1px solid #000; border-right: 1px solid #000;border-top: none; border-bottom: none;">
                            <div class="col-xs-1 non-printable">
                            </div>
                            <div class="col-xs-3" style="margin-top: 9px;">
                                <span style="font-size: 16px;font-weight: 600;">Namantaran</span>
                            </div>
                            <div class="col-xs-3 text-right graybg" style="border:1px solid #000; margin-top: 4px;">
                                <span style="font-size: 20px;font-weight: 400;">
                                  <?php echo number_format((float) $namantaran, 2, '.', ''); ?>
                                </span>
                            </div> 
                            <div class="col-xs-4" style="margin-top: 9px;"> 
                                <span style="font-size:13px !important;">
                                  One time
                                </span>
                            </div>                                                                                                                                                                           
                        </div>
                        
                        <div class="row" style="border-left: 1px solid #000; border-right: 1px solid #000;border-top: none; border-bottom: none;">
                            <div class="col-xs-1 non-printable">
                            </div>
                            <div class="col-xs-3" style="margin-top: 9px;">
                                <span style="font-size: 16px;font-weight: 600;">Registry</span>
                            </div>
                            <div class="col-xs-3 text-right graybg" style="border:1px solid #000; margin-top: 4px;">
                                <span style="font-size: 20px;font-weight: 400;">
                                 <?php echo number_format((float) $registry_charges, 2, '.', ''); ?>
                                </span>
                            </div> 
                            <div class="col-xs-4"> 
                                <span style="font-size:10px !important;">                                 
                                </span>
                            </div>                                                                                                                                                                           
                        </div>
                        
                        <div class="row" style="border-left: 1px solid #000; border-right: 1px solid #000;border-top: none; border-bottom: none;">
                            <div class="col-xs-1 non-printable">
                            </div>
                            <div class="col-xs-3" style="margin-top: 9px;">
                                <span style="font-size: 16px;font-weight: 600;">RCC Tower</span>
                            </div>
                            <div class="col-xs-3 text-right graybg" style="border:1px solid #000; margin-top: 4px;">
                                <span style="font-size: 20px;font-weight: 400;">
                                 <?php echo number_format((float) $rcc_tower, 2, '.', ''); ?>
                                </span>
                            </div> 
                            <div class="col-xs-4"> 
                                <span style="font-size:10px !important;">                                 
                                </span>
                            </div>                                                                                                                                                                           
                        </div>
                        
                        <div class="row" style="border-left: 1px solid #000; border-right: 1px solid #000;border-top: none; border-bottom: none;">
                            <div class="col-xs-1 non-printable">
                            </div>
                            <div class="col-xs-3" style="margin-top: 9px;">
                                <span style="font-size: 16px;font-weight: 600;">Bank Terrace Covered</span>
                            </div>
                            <div class="col-xs-3 text-right graybg" style="border:1px solid #000; margin-top: 4px;">
                                <span style="font-size: 20px;font-weight: 400;">
                                 <?php echo number_format((float) $total_open_terrace_area_back, 2, '.', ''); ?>
                                </span>
                            </div> 
                            <div class="col-xs-4"> 
                                <span style="font-size:10px !important;">                                 
                                </span>
                            </div>                                                                                                                                                                           
                        </div>
                        
                        <div class="row" style="border-left: 1px solid #000; border-right: 1px solid #000;border-top: none; border-bottom: none;">
                            <div class="col-xs-1 non-printable">
                            </div>
                            <div class="col-xs-3" style="margin-top: 9px;">
                                <span style="font-size: 16px;font-weight: 600;">AC Point at FF Big B.Room</span>
                            </div>
                            <div class="col-xs-3 text-right graybg" style="border:1px solid #000; margin-top: 4px;">
                                <span style="font-size: 20px;font-weight: 400;">
                                 <?php echo number_format((float) $ac_point_at_ff, 2, '.', ''); ?>
                                </span>
                            </div> 
                            <div class="col-xs-4"> 
                                <span style="font-size:10px !important;">                                 
                                </span>
                            </div>                                                                                                                                                                           
                        </div>
                        
                        <div class="row" style="border-left: 1px solid #000; border-right: 1px solid #000;border-top: none; border-bottom: none;">

                            <div class="col-xs-1 non-printable">
                            </div>
                            <div class="col-xs-3" style="margin-top: 14px;">
                                <span style="font-size: 16px;font-weight: 600;">Total Cost Of Unit</span>
                            </div>
                            <div class="col-xs-3 text-right graybg" style="border:1px solid #000; margin-top: 4px;">
                                <span style="font-size: 30px;font-weight: 400;">
                                    <?php echo number_format((float) $cost_payble_to_company, 2, '.', ''); ?>
                                </span>
                            </div> 
                            <div class="col-xs-4" style="margin-top: 9px;"> 
                                <span style="font-size:10px !important;">+ Registry Charges & Society Charges + 
                                    Maintenance + MPSEB Meter Installation + 
                                    Namantaran + GST Tax As Applicable
                                </span>
                            </div>                                                                                                                                                                           
                        </div>
                        <div class="row non-printable hidden-lg hidden-md hidden-sm hidden-xs" style="border-left: 1px solid #000; border-right: 1px solid #000;border-top: none;">
                            
                            <div class="col-xs-3" style="margin-top: 14px;">
                                <span style="font-size: 16px;font-weight: 600;">Total Cost Of Unit</span>
                            </div>
                            <div class="col-xs-3 text-right graybg" style="border:1px solid #000; margin-top: 4px;">
                                <span style="font-size: 30px;font-weight: 400;">
                                    <?php echo number_format((float) $land_cost, 2, '.', ''); ?>
                                </span>
                            </div> 
                            <div class="col-xs-4" style="margin-top: 9px;"> 
                                <span style="font-size:10px !important;">+ Registry Charges & Society Charges + 
                                    Maintenance + MPSEB Meter Installation + 
                                    Namantaran + GST Tax As Applicable
                                </span>
                            </div>                                                                                                                                                                           
                        </div>
                        <div class="row hidden-lg hidden-md hidden-sm hidden-xs non-printable" style="border-left: 1px solid #000; border-right: 1px solid #000;border-top: none;">
                            <div class="col-xs-1 non-printable">
                            </div>
                            <div class="col-xs-3" style="margin-top: 14px;">
                                <span style="font-size: 16px;font-weight: 600;"> Discount No. 1</span>
                            </div>
                            <div class="col-xs-3 graybg text-right" style="border:1px solid #000; margin-top: 4px;">
                                <span style="font-size:26">
                                    <?php echo number_format((float) $discount, 2, '.', ''); ?>
                                </span>
                            </div>                                                                                                                                                                                                    
                        </div>

                        <div class="row hidden-lg hidden-md hidden-sm hidden-xs non-printable" style="border-left: 1px solid #000; border-right: 1px solid #000;border-top: none;">
                            <div class="col-xs-1 non-printable"> </div>
                            <div class="col-xs-3"style="margin-top: 14px;">
                                <span style="font-size: 16px;font-weight: 600;">
                                    1st Discounted Cost
                                </span>
                            </div>
                            <div class="col-xs-3 text-right graybg" style="border:1px solid #000; margin-top: 4px;">
                                <span style="font-size: 30px;font-weight: 400;">
                                    <?php echo number_format((float) $cost_payble_to_company, 2, '.', ''); ?>
                                </span>
                            </div> 
                            <div class="col-xs-4"  style="font-size: 13px; margin-top: 9px;"> 
                                <span style="font-size:10px !important; font-weight: 400;">+ Registry Charges & Society Charges + 
                                    Maintenance + MPSEB Meter Installation + 
                                    Namantaran + GST Tax As Applicable
                                </span>
                            </div>                                                                                                                                                                           
                        </div>

                        <div class="row" style="border-left: 1px solid #000; border-right: 1px solid #000;border-top: none;">
                            <div class="col-xs-1 non-printable"> </div>
                            <div class="col-xs-3" style="margin-top: 4px;">
                                <span style="font-size: 16px;font-weight: 600;">  Discount</span>
                            </div>
                            <div class="col-xs-3 text-right graybg" style="border:1px solid #000; margin-top: 4px;">
                                <span style="font-size:26"><?php echo number_format((float) $discount, 2, '.', ''); ?></span>
                            </div> 
                            <div class="col-xs-4"  style="font-size: 14px;"> 
                            </div>                                                                                                                                                                           
                        </div>

                        <div class="row" style="border-left: 1px solid #000; border-right: 1px solid #000;border-top: none;">
                            <div class="col-xs-1 non-printable"> </div>
                            <div class="col-xs-3" style="margin-top: 14px;">
                                <label style="font-size:16px !important;">  NET Final</span>
                            </div>
                            <div class="col-xs-3 text-right graybg" style="border:1px solid #000; margin-top: 4px;">
                                <span style="font-size: 30px;font-weight: 400;">
                                    <?php echo number_format((float) $total_cost, 2, '.', ''); ?>
                                </span>
                            </div> 
                            <div class="col-xs-4" style="margin-top: 9px;"> 
                                <span style="font-size:10px !important;">+ Registry Charges & Society Charges + 
                                   + Society Membership @ Rs 550.00 & Society corpus fund @ Rs 25000.00 charges
                                    </span>
                            </div>                                                                                                                                                                         
                        </div>
                        <div class="row" style="font-size: 17px;border-left: 1px solid #000; border-right: 1px solid #000;border-top: none;">
                            <br>
                        </div> 
                        
                        <div class="row" style="border-left: 1px solid #000; border-right: 1px solid #000;border-top: 1px solid #000;">
                            &nbsp; <span style="font-size: 14px;font-weight: 400;">
                                Other Charges to be born by the customer
                            </span>
                        </div> 
                        <div class="row" style="border-left: 1px solid #000; border-right: 1px solid #000;border-top: 1px solid #000;; border-bottom: 1px solid #000;">
                            &nbsp; <span style="font-size: 12;"> <u>Note :</u></span>
                        </div> 
                        <div class="row" style="font-size: 15px;border-left: 1px solid #000; border-right: 1px solid #000;border-top:none; border-bottom: 1px solid #000;">
                            <div class="col-xs-1" style="width: 2.333333%;">
                                <span style="font-size: 12px;"> 
                                    1
                                </span>
                            </div>
                            <div class="col-xs-11" style="border-left: 1px solid #000;">
                                <span style="font-size: 12px;">
                                    Registration Stamp duty, Fees & other charges as per actual.(shall be born by the customer).
                                </span>
                            </div>
                        </div> 

                        <div class="row" style="font-size: 15px;border-left: 1px solid #000; border-right: 1px solid #000;border-top:none; border-bottom: 1px solid #000;">
                            <div class="col-xs-1" style="width: 2.333333%;">
                                <span style="font-size: 12px;"> 
                                    2
                                </span>
                            </div>
                            <div class="col-xs-11" style="border-left: 1px solid #000;">
                                <span style="font-size: 12px;"> 
                                    Bank Documentation Charges Extra (shall be born by the customer)
                                </span>   
                            </div>
                        </div> 
                        <div class="row" style="font-size: 15px;border-left: 1px solid #000; border-right: 1px solid #000;border-top:none; border-bottom: 1px solid #000;">
                            <div class="col-xs-1" style="width: 2.333333%;">
                                <span style="font-size: 12px;">
                                    3
                                </span>
                            </div>
                            <div class="col-xs-11" style="border-left: 1px solid #000;">
                                <span style="font-size: 12px;">
                                    Maintanence Charges Shall be charged additionally for maintanence of Flat @. 25000.00 + GST tax.@18% = 29500.00 For two years.
                                </span>
                            </div>
                        </div> 
                        <div class="row" style="font-size: 15px;border-left: 1px solid #000; border-right: 1px solid #000;border-top:none; border-bottom: 1px solid #000;">
                            <div class="col-xs-1" style="width: 2.333333%;">
                                <span style="font-size: 12px;">
                                    4
                                </span>
                            </div>
                            <div class="col-xs-11" style="border-left: 1px solid #000;">
                                <span style="font-size: 12px;"> 
                                    Society Charges Shall be paid additionally at the time of possession @ Rs. 550.00 as Membership Charges & @ Rs. 25000.00 for Common Corpus fund for residents welfare Society.
                                </span>
                            </div>
                        </div> 
                        <div class="row" style="font-size: 15px;border-left: 1px solid #000; border-right: 1px solid #000;border-top:none; border-bottom: 1px solid #000;">
                            <div class="col-xs-1" style="width: 2.333333%;">
                                <span style="font-size: 12px;"> 
                                    5
                                </span>
                            </div>
                            <div class="col-xs-11" style="border-left: 1px solid #000;">
                                <span style="font-size: 12px;">
                                    Mortgage Stamp Fees & Other Charges shall be born by the customer.
                                </span>
                            </div>
                        </div> 

                        <div class="row" style="font-size: 15px;border-left: 1px solid #000; border-right: 1px solid #000;border-top:none; border-bottom: 1px solid #000;">
                            <div class="col-xs-1" style="width: 2.333333%;">
                                <span style="font-size: 12px;">
                                    6 
                                </span>
                            </div>
                            <div class="col-xs-11" style="border-left: 1px solid #000;">
                                <span style="font-size: 12px;">
                                    Meter Connection Charges As per actual Shall be the responsibility of
                                    the allottee.
                                </span>
                            </div>
                        </div> 
                        <div class="row" style="font-size: 15px;border-left: 1px solid #000; border-right: 1px solid #000;border-top:none; border-bottom: 1px solid #000;">
                            <div class="col-xs-1" style="width: 2.333333%;">
                                <span style="font-size: 12px;">
                                    7 
                                </span>
                            </div>
                            <div class="col-xs-11" style="border-left: 1px solid #000;">
                                <span style="font-size: 12px;">  
                                    Water Meter Application with department shall be the responsibility of
                                    the allottee.
                                </span>
                            </div>
                        </div>
                        <div class="row" style="font-size: 15px;border-left: 1px solid #000; border-right: 1px solid #000;border-top:none; border-bottom: 1px solid #000;">
                            <div class="col-xs-1" style="width: 2.333333%;">
                                </span style="font-size: 12px;">
                                8   
                                </span>
                            </div>
                            <div class="col-xs-11" style="border-left: 1px solid #000;">
                                <span style="font-size: 12px;"> 
                                    Namantaran Charges (Advocate fees) shall be Charged Extra.
                                </span>
                            </div>
                        </div> 
                        <div class="row" style="font-size: 15px;border-left: 1px solid #000; border-right: 1px solid #000;border-top:none; border-bottom: 1px solid #000;">
                            <div class="col-xs-1" style="width: 2.333333%;">
                                <span style="font-size: 12px;">
                                    9   
                                </span>
                            </div>
                            <div class="col-xs-11" style="border-left: 1px solid #000;">
                                <span style="font-size: 13px;"> 
                                    Monthly Operational Charges Shall be charged additionally before Possession of Flat for common facilities of Campus, on monthly basis @ Rs. 800.00 + GST @18% = 11328.00 payable for one year as advance.
                                </span>
                            </div>
                        </div> 
                       
                        <label style="font-size: 12px;"> Executive Name :- &nbsp;<?php echo $first_name . nbs(1) . $last_name; ?> /id : <?php echo $username; ?></label>
                        
                        <div class="row" style="font-size: 13px; border: 1px solid #000;">
                            <label>Discussion : - </label> <label><?php echo $discussion; ?></label>
                        </div>
                    </div> 



                </div>

            </form>
            <script type="text/javascript">


                $(document).ready(function () {
                    $('#toppageheader').html('Cost Calculation <span class="pull-right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="print" id="btnprint" value="print" class="btn btn-xs btn-default" onClick="print_this_doc();">Print&nbsp;&nbsp;<i class="fa fa-print"></i></button></span>');
                    $("a:contains(Cost Calculation)").parent().addClass('active');
                    allinone();
                });

                function allinone()
                {

                    var total_cost = Number(document.getElementById('total_cost').value);
                    var discount_one = Number(document.getElementById('discount_one').value);
                    var total_cost_after_discount = Number(document.getElementById('total_cost_after_discount').value);
                    var discount_two = Number(document.getElementById('discount_two').value);
                    var final_cal2 = (total_cost_after_discount - discount_two).toFixed(2);//+parseInt(two)+parseInt(three);
                    var final_cal = (total_cost - discount_one).toFixed(2);//+parseInt(two)+parseInt(three);
                    document.getElementById('total_cost_after_discount').value = final_cal;
                    document.getElementById('total_cost_after_second_discount').value = final_cal2;
                    /*  if (total_cost < discount_one)
                     {
                     alert('discount cannot be more then the total cost');
                     document.getElementById('discount_one').value = 0;
                     }
                     if (total_cost_after_discount < discount_two)
                     {
                     alert('discount cannot be more then the total cost');
                     document.getElementById('discount_two').value = 0;
                     }*/

                    allinone();




                }
                function makedecimal(id)
                {
                    var onen = Number(document.getElementById(id).value);
                    var a = onen.toFixed(2);
                    document.getElementById(id).value = a;

                }


                $(document).ready(function ()
                {
                    $('#btnEditrate').click(function ()
                    {
                        $(".inputborder").addClass("border");
                        $(".inputborder").removeAttr("readonly");
                    });

                });

                $("#discussion").on("keydown", function (event) {
                    //alert('A key has been entered.');
                    var str = $('#discussion').val();
                    if (event.which == 13) {
                        //console.log('Enter has been entered.');
                        event.preventDefault();
                        $('#discussion').val(str + ', ');
                        //alert('Enter Key has been entered.');
                    }
                });

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


            </script>


    </body>

</html>
