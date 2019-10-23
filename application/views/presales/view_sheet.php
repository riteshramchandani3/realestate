<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
    <head>
        <title>View Sheet</title>
        <?php
        require_once('assets/html_head_links.php');
        ?>
        <style>

            .back 
            {
                margin-top: -45px;
                font-size: 15px;
            }

            input{
                readonly:readonly; 
            }

            @page {
                size: auto;   /* auto is the initial value */
                margin: 0mm 10mm 0mm 10mm;  /* this affects the margin in the printer settings */
            }
            @media print
            {
                /*@page {size: landscape}*/
                .non-printable { display: none; }
                #printable { display: block;}

                html, body {
                    font-size: 12px !important;
                    width: 210mm !important;
                    height: 297mm !important;
                    font-family: arial !important
                }   

                label {
                    display: inline !important;
                }  

                .graybg{
                    background-color: #999 !important;
                }

                .fa{
                    font-size: 9px !important;
                }
                .leftlabel{
                    font-size: 12px !important; 
                    font-weight: 400 !important;
                    padding: 2.3 !important;
                }
                .rightlabel{
                    font-size: 20px !important; 
                }

                .col-xs-4 {
                    width: 40.333333%;
                    padding: 2.3 !important;
                }
                .col-xs-7 {
                    width: 45.333333% !important;
                }
                .col-xs-1 { 
                    padding: 2.3 !important;
                }
                .col-xs-2 { 
                    padding: 2.3 !important;
                }
                .intro{
                    margin-left: 3 !important;
                }
                select::-ms-expand {	
                    display: none; 
                }
                select{
                    -webkit-appearance: none;
                    appearance: none;
                    border: none !important; 
                    box-shadow: none ;
                }

            }    
            .rightlabel{
                font-size: 20px !important; 

            }
            .leftlabel{
                font-size: 16px !important; 
                font-weight: 400 !important;
                padding: 2.3 !important;
            }
            .col-xs-4 {
                width: 40.333333%;
                padding: 2.3 !important;
            }
            .col-xs-1 { 
                padding: 2.3 !important;
            }
            .col-xs-2 { 
                padding: 2.3 !important;
            }
            .col-xs-7 {
                width: 45.333333% !important;
            }
            textarea {
                resize: none;
            }
            .col-xs-1 {
                width: 2.333333%;
            }
            .col-xs-2 {
                width: 6.666667%;
            }
            label {
                display: inline !important;

            } 



            .graybg{
                background-color: #999 !important;
            }


        </style>




    </head>
    <body style="font-family: arial !important">

        <div style="z-index: 10;">  
            <?php
            require_once('assets/top_menu.php');
            require_once('assets/pre_sales_side_menu.php');
            ?>
        </div>
        <div class="main">
            <div class="container">
                <form class="form-inline" action="<?php echo site_url('pre_sales/update_visitor_Input'); ?>" method="post" enctype="multipart/form-data"  >
                    <div id="printable">
                        <div class="container">
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
                                <?php $plot_size_mtr = $row->plot_size_mtr; ?>
                                <?php $plot_size_ft = $row->plot_size_ft; ?>
                                <?php $cost_carpet_area = $row->cost_carpet_area; ?>
                                <?php $cost_ca_ref_rate = $row->cost_ca_ref_rate; ?>
                                <?php $total_unit_cost_as_per_carpet_area = $row->total_unit_cost_as_per_carpet_area; ?>

                                <?php $cost_balcony_area = $row->cost_balcony_area; ?>
                                <?php $cost_balcony_ref_rate = $row->cost_balcony_ref_rate; ?>
                                <?php $total_balcony_area = $row->total_balcony_area; ?>

                                <?php $cost_wash_area = $row->cost_wash_area; ?>
                                <?php $cost_washarea_ref_rate = $row->cost_washarea_ref_rate; ?>
                                <?php $total_wash_area = $row->total_wash_area; ?>

                                <?php $cost_open_terrace_area_front = $row->cost_open_terrace_area_front; ?>
                                <?php $cost_open_terrace_front_area_ref_rate = $row->cost_open_terrace_front_area_ref_rate; ?>
                                <?php $total_open_terrace_area_front = $row->total_open_terrace_area_front; ?>

                                <?php $cost_open_terrace_area_back = $row->cost_open_terrace_area_back; ?>
                                <?php $cost_open_terrace_back_area_ref_rate = $row->cost_open_terrace_back_area_ref_rate; ?>
                                <?php $total_open_terrace_area_back = $row->total_open_terrace_area_back; ?>

                                <?php $cost_car_poarch_area = $row->cost_car_poarch_area; ?>
                                <?php $cost_car_poarch_area_ref_rate = $row->cost_car_poarch_area_ref_rate; ?>
                                <?php $total_car_poarch_area = $row->total_car_poarch_area; ?>

                                <?php $total_six = $total_unit_cost_as_per_carpet_area + $total_balcony_area + $total_wash_area + $total_open_terrace_area_front + $total_open_terrace_area_back + $total_car_poarch_area; ?>

                                <?php $total_cost1 = $row->total_cost; ?>
                                <?php $cost_payble_to_company = $row->cost_payble_to_company; ?>
                                <?php $discount = $row->discount; ?>
                                <?php $discussion = $row->discussion; ?>
                                <?php $gst = $row->gst; ?>
                                <?php $extra_charge = $row->extra_charge; ?>
                                <?php $extra_charge_des = $row->extra_charge_des; ?>
                                <?php $premium_location_charges = $row->premium_location_charges; ?>
                                <?php $premium_location_charges_des = $row->premium_location_charges_des; ?>
                                <?php $discussion = $row->discussion; ?>
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


                            <input type="hidden" value="<?php echo $id; ?>" name="id"  readonly />
                            <input  id="gst" type="hidden" value="<?php echo $result5 ?>"/>
                            <input   type="hidden" name="plot_size_ft" value="<?php //echo $plot_size_ft                                                ?>"/>
                            <input   type="hidden" name="category" value="<?php //echo $category                                                ?>"/>


                            <?php foreach ($this->Pre_sales_model->get_charge_amount() as $row) {
                                ?>
                                <?php $charge_amt = $row->charge_amount; ?>
                                <?php $charge_amount1 = $row->charge_amount * 18 / 100; ?>
                                <?php $charge_amount = $row->charge_amount + $charge_amount1; ?>

                            <?php } ?>

                            <div class="container non-printable">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-12">
                                            <?php echo anchor('Pre_sales/pre_sales_costing?id=' . $prospect_id, 'Back', 'class="btn btn-primary pull-right clickable non-printable" title="Back"');
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                            <div class="container-fluid" style="border: 1px solid #000;">
                                <div class="row" style="font-weight:800;font-size: 22px;border-bottom: 1px solid #000;">
                                    <div class="col-xs-12 text-center">
                                        <label>  SHEET NO. 1 </label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-1">
                                    </div>
                                    <div class="col-xs-5">
                                        <label> <?php echo date('d-m-Y'); ?> </label>
                                    </div>
                                    <div class="col-xs-6 text-right">
                                        <label> 
                                            <?php
                                            foreach ($this->Company_info_model->get_company_info() as $row) {
                                                ?> 
                                                <span><?php echo $row->attribute; ?></span>&nbsp;:&nbsp;
                                                <span><?php echo $row->value; ?></span>
                                            <?php } ?>
                                        </label>
                                    </div>
                                </div>
                                <div class="row intro" style=" border-top: 1px solid #000;margin-left: 14px;">
                                    <div class="col-xs-4" style="border-left:1px solid #000;">
                                        <label class="leftlabel"> Name</label>
                                    </div>
                                    <div class="col-xs-1" style="border-left:1px solid #000;">
                                        <label>:-</label>
                                    </div>
                                    <div class="col-xs-7" style="border-left:1px solid #000;">
                                        <label class="rightlabel"><?php echo $name; ?></label>
                                    </div>
                                </div>
                                <div class="row intro" style=" border-top: 1px solid #000;margin-left: 14px;">
                                    <div class="col-xs-4" style="border-left:1px solid #000;">
                                        <label class="leftlabel">  Mobile No.</label>
                                    </div>
                                    <div class="col-xs-1" style="border-left:1px solid #000;">
                                        <label class="leftlabel">:-</label>
                                    </div>
                                    <div class="col-xs-7" style="border-left:1px solid #000;">
                                        <label class="rightlabel"> <?php echo $mobile_no; ?></label>
                                    </div>
                                </div>
                                <div class="row intro" style=" border-top: 1px solid #000;margin-left: 14px;">
                                    <div class="col-xs-4" style="border-left:1px solid #000;">
                                        <label class="leftlabel"> Project</label>
                                    </div>
                                    <div class="col-xs-1" style="border-left:1px solid #000;">
                                        <label class="leftlabel">:-</label>
                                    </div>
                                    <div class="col-xs-7" style="border-left:1px solid #000;">
                                        <?php
                                        $data['project_id'] = $project_id;
                                        foreach ($this->Pre_sales_model->getproject_info($data) as $row) {
                                            ?>
                                            <?php $project_name = $row->project_name; ?>
                                        <?php } ?>
                                        <input type="hidden" value="<?php echo $project_id; ?>" name="project_id" readonly > 
                                        <input type="hidden" value="<?php echo $block; ?>" name="block" readonly>

                                        <label class="rightlabel"> <?php echo $project_name; ?> <?php echo $block; ?></label>
                                    </div>
                                </div>
                                <div class="row intro" style=" border-top: 1px solid #000;margin-left: 14px;">
                                    <div class="col-xs-4" style="border-left:1px solid #000;">
                                        <label class="leftlabel"> Unit No.</label>
                                    </div>
                                    <div class="col-xs-1" style="border-left:1px solid #000;">
                                        <label class="leftlabel">:-</label>
                                    </div>
                                    <div class="col-xs-7" style="border-left:1px solid #000;">
                                        <label class="rightlabel"> <?php echo $unit_no; ?></label>
                                    </div>
                                </div>
                                <div class="row intro" style=" border-top: 1px solid #000;margin-left: 14px;">
                                    <div class="col-xs-4" style="border-left:1px solid #000;">
                                        <label class="leftlabel">  Type</label>
                                    </div>
                                    <div class="col-xs-1" style="border-left:1px solid #000;">
                                        <label class="leftlabel">:-</label>
                                    </div>
                                    <div class="col-xs-7" style="border-left:1px solid #000;">
                                        <label class="rightlabel">  <?php echo $type ?></label>
                                    </div>
                                </div>
                                <div class="row intro" style=" border-top: 1px solid #000;margin-left: 14px;">
                                    <div class="col-xs-4" style="border-left:1px solid #000;">
                                        <label class="leftlabel">  Plot Size</label>
                                    </div>
                                    <div class="col-xs-1" style="border-left:1px solid #000;">
                                        <label class="leftlabel">:-</label>
                                    </div>
                                    <?php
                                    $data['plot_size_mtr'] = $plot_size_mtr;
                                    $data['plot_size_ft'] = $plot_size_ft;
                                    $data['project_id'] = $project_id;
                                    $data['type'] = $type;
                                    $data['block'] = $block;
                                    foreach ($this->Allotment_letter_model->show_plot_info($data) as $row) {
                                        $plot_sqmt = $row->plot_sqmt;
                                        $plot_size_sqft = $row->plot_sqft;
                                        $length_m = $row->length_m;
                                        $width_m = $row->width_m;
                                    }
                                    ?>
                                    <div class="col-xs-7 intro" style="border-left:1px solid #000;">
                                        <label class="rightlabel"> <?php echo $length_m; ?><?php echo nbs(2); ?>X<?php echo nbs(2); ?><?php echo $width_m; ?> &nbsp; Mt.</label>
                                    </div>
                                </div>
                                <div class="row intro" style=" border-top: 1px solid #000;margin-left: 14px;">
                                    <div class="col-xs-4" style="border-left:1px solid #000;">
                                        <label class="leftlabel"> Plot Area</label>
                                    </div>
                                    <div class="col-xs-1" style="border-left:1px solid #000;">
                                        <label class="leftlabel">:-</label>
                                    </div>

                                    <div class="col-xs-7" style="border-left:1px solid #000;">
                                        <label class="rightlabel">
                                            <?php if ($type == 'Duplex') { ?>
                                                <?php
                                                $data['plot_size_mtr'] = $plot_size_mtr;
                                                $data['plot_size_ft'] = $plot_size_ft;
                                                $data['project_id'] = $project_id;
                                                $data['type'] = $type;
                                                $data['block'] = $block;
                                                foreach ($this->Allotment_letter_model->show_plot_info($data) as $row) {
                                                    $plot_sqmt = $row->plot_sqmt;
                                                    $plot_size_sqft = $row->plot_sqft;
                                                    $length_m = $row->length_m;
                                                    $width_m = $row->width_m;
                                                }
                                                ?>

                                                <?php echo number_format((float) $length_m * $width_m, 2, '.', ''); ?>
                                            <?php } else { ?>                

                                                <?php echo $plot_size_ft; ?>
                                            <?php } ?> &nbsp; Sq. Mt.
                                        </label>
                                    </div>
                                </div>
                                <div class="row intro" style=" border-top: 1px solid #000;margin-left: 14px;border-bottom: 1px solid #000;">

                                    <div class="col-xs-4" style="border-left:1px solid #000;">
                                        <label class="leftlabel">  Duplex Carpet Area</label>
                                    </div>
                                    <div class="col-xs-1" style="border-left:1px solid #000;">
                                        <label class="leftlabel">:-</label>
                                    </div>

                                    <div class="col-xs-7" style="border-left:1px solid #000;">
                                        <label class="rightlabel">
                                            <?php echo number_format((float) $cost_carpet_area, 2, '.', ''); ?> &nbsp; Sq. Mt.
                                        </label>
                                    </div>
                                </div>



                                <div class="row" style="margin-top: 5px;">
                                    <div class="col-xs-1">
                                        <label style="font-weight:400;">1</label>
                                    </div>
                                    <div class="col-xs-4" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;">
                                        <label class="leftlabel"> Unit Cost as per carpet area</label>
                                    </div>
                                    <div class="col-xs-1" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;">
                                        <label class="leftlabel">:-</label>
                                    </div>
                                    <div class="col-xs-2" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;">
                                        <label class="leftlabel">Rs.</label>
                                    </div>

                                    <div class="col-xs-3 graybg" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;border-right: 1px solid #000;">
                                        <label class="graybg rightlabel">
                                            <?php echo number_format((float) $total_unit_cost_as_per_carpet_area, 2, '.', ''); ?>
                                        </label>
                                    </div>
                                </div>

                                <div class="row" style="margin-top: 5px;">
                                    <div class="col-xs-1">
                                        <label style="font-weight:400;">2</label>
                                    </div>
                                    <div class="col-xs-4" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;">
                                        <label class="leftlabel"> Car Porch Area (1) <?php echo round($cost_car_poarch_area, 2); ?> SQM</label>
                                    </div>
                                    <div class="col-xs-1" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;">
                                        <label class="leftlabel">:-</label>
                                    </div>
                                    <div class="col-xs-2" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;">
                                        <label class="leftlabel">Rs.</label>
                                    </div>

                                    <div class="col-xs-3 graybg" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;border-right: 1px solid #000;">
                                        <label class="graybg rightlabel">
                                            <?php echo number_format((float) $total_car_poarch_area, 2, '.', ''); ?>
                                        </label>
                                    </div>
                                </div>

                                <div class="row" style="margin-top: 5px;">
                                    <div class="col-xs-1">
                                        <label style="font-weight:400;">3</label>
                                    </div>
                                    <div class="col-xs-4" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;">
                                        <label class="leftlabel"> Covered Balcony Area(1)  <?php echo round($cost_balcony_area, 2); ?> SQM</label>
                                    </div>
                                    <div class="col-xs-1" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;">
                                        <label class="leftlabel">:-</label>
                                    </div>
                                    <div class="col-xs-2" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;">
                                        <label class="leftlabel">Rs.</label>
                                    </div>

                                    <div class="col-xs-3 graybg" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;border-right: 1px solid #000;  background-color: #ccc;">
                                        <label class="graybg rightlabel">
                                            <?php echo number_format((float) $total_balcony_area, 2, '.', ''); ?>
                                        </label>
                                    </div>
                                </div>

                                <div class="row" style="margin-top: 5px;">
                                    <div class="col-xs-1">
                                        <label style="font-weight:400;">4</label>
                                    </div>
                                    <div class="col-xs-4" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;">
                                        <label class="leftlabel"> Open Terrace Area (1)  <?php echo round($cost_open_terrace_area_back, 2); ?> SQM</label>
                                    </div>
                                    <div class="col-xs-1" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;">
                                        <label class="leftlabel">:-</label>
                                    </div>
                                    <div class="col-xs-2" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;">
                                        <label class="leftlabel">Rs.</label>
                                    </div>

                                    <div class="col-xs-3 graybg" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;border-right: 1px solid #000;  background-color: #ccc;">
                                        <label class="graybg rightlabel">
                                            <?php echo number_format((float) $total_open_terrace_area_back, 2, '.', ''); ?>
                                        </label>
                                    </div>
                                </div>

                                <div class="row" style="margin-top: 5px;">
                                    <div class="col-xs-1">
                                        <label style="font-weight:400;">5</label>
                                    </div>
                                    <div class="col-xs-4" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;">
                                        <label class="leftlabel">  Open Terrace Area (2)   <?php echo round($cost_open_terrace_area_front, 2); ?> AQM</label>
                                    </div>
                                    <div class="col-xs-1" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;">
                                        <label class="leftlabel">:-</label>
                                    </div>
                                    <div class="col-xs-2" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;">
                                        <label class="leftlabel">Rs.</label>
                                    </div>

                                    <div class="col-xs-3 graybg" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;border-right: 1px solid #000;  background-color: #ccc;">
                                        <label class="graybg rightlabel">
                                            <?php echo number_format((float) $total_open_terrace_area_front, 2, '.', ''); ?>
                                        </label>
                                    </div>
                                </div>

                                <div class="row" style="margin-top: 5px;">
                                    <div class="col-xs-1">
                                        <label style="font-weight:400;">6</label>
                                    </div>
                                    <div class="col-xs-4" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;">
                                        <label class="leftlabel">  Wash Area G. F. (1) =    <?php echo round($cost_wash_area, 2); ?> SQM</label>
                                    </div>
                                    <div class="col-xs-1" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;">
                                        <label class="leftlabel">:-</label>
                                    </div>
                                    <div class="col-xs-2" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;">
                                        <label class="leftlabel">Rs.</label>
                                    </div>

                                    <div class="col-xs-3 graybg" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;border-right: 1px solid #000; background-color: #ccc;">
                                        <label class="graybg rightlabel">
                                            <?php echo number_format((float) $total_wash_area, 2, '.', ''); ?>
                                        </label>
                                    </div>
                                </div>

                                <div class="row" style="margin-top: 5px;">
                                    <div class="col-xs-1">
                                        <label style="font-weight:400;">7</label>
                                    </div>
                                    <div class="col-xs-4" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;">
                                        <label class="leftlabel">  Corner Facing Charges</label>
                                    </div>
                                    <div class="col-xs-1" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;">
                                        <label class="leftlabel">:-</label>
                                    </div>
                                    <div class="col-xs-2" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;">
                                        <label class="leftlabel">Rs.</label>
                                    </div>

                                    <div class="col-xs-3 graybg" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;border-right: 1px solid #000; background-color: #ccc;">
                                        <label class="graybg rightlabel">
                                            0.00
                                        </label>
                                    </div>
                                </div>

                                <div class="row" style="margin-top: 5px;">
                                    <div class="col-xs-1">
                                        <label style="font-weight:400;">8</label>
                                    </div>
                                    <div class="col-xs-4" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;">
                                        <label class="leftlabel">  Garden Facing Charges</label>
                                    </div>
                                    <div class="col-xs-1" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;">
                                        <label class="leftlabel">:-</label>
                                    </div>
                                    <div class="col-xs-2" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;">
                                        <label class="leftlabel">Rs.</label>
                                    </div>

                                    <div class="col-xs-3 graybg" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;border-right: 1px solid #000; background-color: #ccc;">
                                        <label class="graybg rightlabel">
                                            0.00
                                        </label>
                                    </div>
                                </div>

                                <div class="row" style="margin-top: 5px;">
                                    <div class="col-xs-1 text-left">
                                        <label style="font-weight:400;"><i class="fa fa-times" style=" font-size: 14px;font-weight: 400 !important;"></i></label>
                                    </div>
                                    <div class="col-xs-4" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;">
                                        <label class="leftlabel"> Total (1+2+3+4+5+6+7+8)</label>
                                    </div>
                                    <div class="col-xs-1" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;">
                                        <label class="leftlabel">:-</label>
                                    </div>
                                    <div class="col-xs-2" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;">
                                        <label class="leftlabel">Rs.</label>
                                    </div>

                                    <div class="col-xs-3 graybg" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;border-right: 1px solid #000; background-color: #ccc;">
                                        <label class="graybg rightlabel">
                                            <?php echo number_format((float) $total_six, 2, '.', ''); ?>
                                        </label>
                                    </div>
                                </div>

                                <div class="row hidden-lg hidden-md hidden-sm hidden-xs non-printable" style="margin-top: 5px;">
                                    <div class="col-xs-1 text-left">
                                        <label style="font-weight:400;">8</label>
                                    </div>
                                    <div class="col-xs-4" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;">
                                        <label class="leftlabel">Proportionate Common area.</label>
                                    </div>
                                    <div class="col-xs-1" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;">
                                        <label class="leftlabel">:-</label>
                                    </div>
                                    <div class="col-xs-2" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;">
                                        <label class="leftlabel">Rs.</label>
                                    </div>

                                    <div class="col-xs-3 graybg" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;border-right: 1px solid #000; background-color: #ccc;">
                                        <label class="graybg rightlabel">
                                            0.00
                                        </label>
                                    </div>
                                </div>



                                <div class="row" style="margin-top: 5px;">
                                    <div class="col-xs-1 text-left">
                                        <label style="font-weight:400;">9</label>
                                    </div>
                                    <div class="col-xs-4" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;">
                                        <label class="leftlabel">Maintance 5 Year</label>
                                    </div>
                                    <div class="col-xs-1" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;">
                                        <label class="leftlabel">:-</label>
                                    </div>
                                    <div class="col-xs-2" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;">
                                        <label class="leftlabel">Rs.</label>
                                    </div>

                                    <div class="col-xs-3 graybg" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;border-right: 1px solid #000; background-color: #ccc;">
                                        <!--select class="form-control graybg rightlabel" style="display: inline !important;border:  none;padding: 0px !important;color: #000;height: 27px;width: 100%;">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select-->
                                        <label class="graybg rightlabel">
                                        <?php echo number_format((float) $charge_amount, 2, '.', ''); ?>
                                        </label>
                                    </div>
                                </div>

                                <div class="row hidden-lg hidden-md hidden-sm hidden-xs non-printable" style="margin-top: 5px;">
                                    <div class="col-xs-1 text-left">
                                        <label style="font-weight:400; font-size: 14px;">10</label>
                                    </div>
                                    <div class="col-xs-4" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;">
                                        <label class="leftlabel">Other Fix Charges (MPSEB SSC & WCC)</label>
                                    </div>
                                    <div class="col-xs-1" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;">
                                        <label class="leftlabel">:-</label>
                                    </div>
                                    <div class="col-xs-2" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;">
                                        <label class="leftlabel">Rs.</label>
                                    </div>

                                    <div class="col-xs-3 graybg" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;border-right: 1px solid #000; background-color: #ccc;">
                                        <label class="graybg rightlabel">
                                            <?php echo number_format((float) $extra_charge, 2, '.', ''); ?>
                                        </label>
                                    </div>
                                </div>

                                <div class="row" style="margin-top: 5px;">
                                    <div class="col-xs-1 text-left">
                                        <label style="font-weight:400; font-size: 14px;"></label>
                                    </div>
                                    <div class="col-xs-4" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;">
                                        <label class="leftlabel">GST Tax </label>
                                    </div>
                                    <div class="col-xs-1" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;">
                                        <label class="leftlabel">:-</label>
                                    </div>
                                    <div class="col-xs-2" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;">
                                        <label class="leftlabel">Rs.</label>
                                    </div>

                                    <div class="col-xs-3 graybg" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;border-right: 1px solid #000; background-color: #ccc;">
                                        <label class="graybg rightlabel">
                                            <?php echo number_format((float) $gst, 2, '.', ''); ?>
                                        </label>
                                    </div>
                                </div>

                                <div class="row" style="margin-top: 5px;">
                                    <div class="col-xs-1 text-left">
                                        <label style="font-weight:400; font-size: 14px;"></label>
                                    </div>
                                    <div class="col-xs-4" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;">
                                        <label class="leftlabel">Cost payable to company (<i class="fa fa-times" style=" font-size: 14px;font-weight: 400 !important;"></i> + 9)</label>
                                    </div>
                                    <div class="col-xs-1" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;">
                                        <label class="leftlabel">:-</label>
                                    </div>
                                    <div class="col-xs-2" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;">
                                        <label class="leftlabel">Rs.</label>
                                    </div>

                                    <div class="col-xs-3 graybg" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;border-right: 1px solid #000; background-color: #ccc;">
                                        <label class="graybg rightlabel">
                                            <?php echo $cost_pay = number_format((float) $cost_payble_to_company, 2, '.', ''); ?>
                                        </label>
                                    </div>
                                </div>

                                <div class="row" style="margin-top: 5px;">
                                    <div class="col-xs-1 text-left">
                                        <label style="font-weight:400; font-size: 14px;"></label>
                                    </div>
                                    <div class="col-xs-4" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;">
                                        <label class="leftlabel">Discount</label>
                                    </div>
                                    <div class="col-xs-1" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;">
                                        <label class="leftlabel">:-</label>
                                    </div>
                                    <div class="col-xs-2" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;">
                                        <label class="leftlabel">Rs.</label>
                                    </div>

                                    <div class="col-xs-3 graybg" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;border-right: 1px solid #000; background-color: #ccc;">
                                        <label class="graybg rightlabel">
                                            <?php echo number_format((float) $discount, 2, '.', ''); ?>
                                        </label>
                                    </div>
                                </div>

                                <div class="row intro" style="margin-top: 5px;margin-left: 14px;">
                                    <div class="col-xs-1" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;">
                                        <label class="leftlabel">&nbsp;</label>
                                    </div>                        
                                    <div class="col-xs-3 leftlabel" style="border-top: 1px solid #000;border-bottom: 1px solid #000;">
                                        <label class="leftlabel"><u>Total Cost</u></label>
                                    </div>                                
                                    <div class="col-xs-2" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;">
                                        <label class="leftlabel">Rs.</label>
                                    </div>                                
                                    <div class="col-xs-3 graybg" style="border-left:1px solid #000;border-top: 1px solid #000;border-right: 1px solid #000;border-bottom: 1px solid #000;">
                                        <label class="graybg rightlabel">
                                            <?php echo number_format((float) $total_cost1, 2, '.', ''); ?>
                                        </label>
                                    </div>                                                                 
                                    <div class="col-xs-3">
                                        <label style="font-size:10px;">&nbsp;+Registry + Society + Monthly Operational Charges + Mutation</label> 
                                    </div>                                                                 

                                </div>

                                <div class="row" style="margin-top: 5px;">
                                    <div class="col-xs-1">
                                        <label class="">&nbsp;</label>
                                    </div>  
                                    <div class="col-xs-8 text-center" style="border-left:1px solid #000;border-top: 1px solid #000;border-right: 1px solid #000;border-bottom: 1px solid #000;">
                                        <label style="font-size:20px;">Extra Charges </label>
                                    </div>                                
                                </div>

                                <div class="row intro" style="margin-top: 5px;margin-left: 14px;">
                                    <div class="col-xs-1" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;">
                                        <label class="leftlabel">1</label>
                                    </div>                                
                                    <div class="col-xs-3 leftlabel" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;">
                                        <label class="leftlabel">REGISTRY Charges</label>
                                    </div>                                
                                    <div class="col-xs-2 leftlabel" style="border-left:1px solid #000;border-top: 1px solid #000;border-bottom: 1px solid #000;">
                                        <label class="leftlabel">:-</label>
                                    </div>                                
                                    <div class="col-xs-3 leftlabel" style="border-left:1px solid #000;border-top: 1px solid #000;border-right: 1px solid #000;border-bottom: 1px solid #000;">
                                        <label class="leftlabel">As Per Actual</label>
                                    </div>                                
                                    <div class="col-xs-4 ">
                                        <label style="font-size:10px;">&nbsp;Based on Prevailing Collector Guide Line rate</label>
                                    </div>                                
                                </div>

                                <div class="row" style="border-bottom: 1px solid #000;border-top: 1px solid #000;margin-top: 12px;">
                                    <div class="col-xs-12">
                                        <label> Other Charges to be born by the customer</label>
                                    </div>
                                </div>
                                <div class="row" style="border-bottom: 1px solid #000;">
                                    <div class="col-xs-12">
                                        <label>Note : </label>
                                    </div>
                                </div>
                                <div class="row" style="border-bottom: 1px solid #000;">
                                    <div class="col-xs-1" style="padding: 0 !important;">
                                        <span>
                                            1
                                        </span>
                                    </div>
                                    <div class="col-xs-11" style="border-left:1px solid #000;padding: 0 !important;">
                                        <span> 
                                            Registration Stamp duty, Fees & other charges as per actual.(shall be born by the customer).
                                        </span>
                                    </div>
                                </div>
                                <div class="row" style="border-bottom: 1px solid #000;">
                                    <div class="col-xs-1" style="padding: 0 !important;">
                                        <span>
                                            2
                                        </span>
                                    </div>
                                    <div class="col-xs-11" style="border-left:1px solid #000;padding: 0 !important;">
                                        <span>
                                            Membership charge of Society Shall be paid additionally 
                                            at the time of possession @ Rs. 550.00 as & Rs. 25000.00 for
                                            Common Corpus fund for residents welfare Society.
                                        </span>
                                    </div>
                                </div>
                                <div class="row" style="border-bottom: 1px solid #000;">
                                    <div class="col-xs-1" style="padding: 0 !important;">
                                        <span>
                                            3
                                        </span>
                                    </div>
                                    <div class="col-xs-11" style="border-left:1px solid #000;padding: 0 !important;">
                                        <span>
                                            Bank Documentation Charges Extra (shall be born by the customer).
                                        </span>
                                    </div>
                                </div>
                                <div class="row" style="border-bottom: 1px solid #000;">
                                    <div class="col-xs-1" style="padding: 0 !important;">
                                        <span>
                                            4
                                        </span>
                                    </div>
                                    <div class="col-xs-11" style="border-left:1px solid #000;padding: 0 !important;">
                                        <span>
                                            Mortgage Stamp Fees & Other Charges shall be born by the customer.
                                        </span>
                                    </div>
                                </div>
                                <div class="row" style="border-bottom: 1px solid #000;">
                                    <div class="col-xs-1" style="padding: 0 !important;">
                                        <span>
                                            5
                                        </span>
                                    </div>
                                    <div class="col-xs-11" style="border-left:1px solid #000;padding: 0 !important;">
                                        <span>
                                            Namantaran Charges (Advocate fees) shall be Charged Extra.
                                        </span>
                                    </div>
                                </div>
                                <div class="row" style="border-bottom: 1px solid #000;">
                                    <div class="col-xs-1" style="padding: 0 !important;">
                                        <span>
                                            6
                                        </span>
                                    </div>
                                    <div class="col-xs-11" style="border-left:1px solid #000;padding: 0 !important;">
                                        <span>
                                            Meter Connection Charges As per actual Shall be the responsibility of
                                            the allottee.
                                        </span>
                                    </div>
                                </div>
                                <div class="row" style="border-bottom: 1px solid #000;">
                                    <div class="col-xs-1" style="padding: 0 !important;">
                                        <span>
                                            7
                                        </span>
                                    </div>
                                    <div class="col-xs-11" style="border-left:1px solid #000;padding: 0 !important;">
                                        <span>
                                            Water Meter Application with department shall be the responsibility of
                                            the allottee.
                                        </span>
                                    </div>
                                </div>
                                <div class="row" style="border-bottom: 1px solid #000;">
                                    <div class="col-xs-1" style="padding: 0 !important;">
                                        <span>
                                            8
                                        </span>
                                    </div>
                                    <div class="col-xs-11" style="border-left:1px solid #000;padding: 0 !important;" >
                                        <span>
                                            GST @ 18% shall be charged additionally (As applicable, abatment of land component @ 6% . Net effective rate of GST for GST for Duplex is @ 12%).     
                                        </span>
                                    </div>
                                </div>
                                <div class="row" style="border-bottom: 1px solid #000;">
                                    <div class="col-xs-1" style="padding: 0 !important;">
                                        <span>
                                            9
                                        </span>
                                    </div>
                                    <div class="col-xs-11" style="border-left:1px solid #000;padding: 0 !important;">
                                        <span>
                                            Agreement Registration shall be charged additionally as per actual (Shall be born by Customer as applicable).     
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-xs-1">
                                    <label>&nbsp;</label>
                                </div>
                                <div class="col-xs-11">
                                    <label>
                                        Executive Name :- &nbsp;<?php echo $first_name . nbs(1) . $last_name; ?> /id : <?php echo $username; ?>
                                    </label>
                                </div>
                            </div>


                            <table class="table table-bordered hidden-lg hidden-md hidden-sm hidden-xs">
                                <tbody>
                                    <tr>
                                        <td class="col-xs-12" colspan="5" style="background:#92D050; color: #FF0000; padding: 5px;">

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

                                        <td colspan="3">
                                            <?php echo $name; ?>
                                        </td>

                                        <td>
                                            &nbsp;
                                        </td>
                                    </tr>

                                    <tr>

                                        <td>
                                            Mobile No.
                                        </td>

                                        <td colspan="3">
                                            <?php echo $mobile_no; ?>
                                        </td>

                                        <td>
                                            &nbsp;
                                        </td>
                                    </tr>

                                    <tr>

                                        <td>
                                            Project
                                        </td>

                                        <td colspan="3">
                                            <?php
                                            $data['project_id'] = $project_id;
                                            foreach ($this->Pre_sales_model->getproject_info($data) as $row) {
                                                ?>
                                                <?php $project_name = $row->project_name; ?>
                                            <?php } ?>
                                            <input type="hidden" value="<?php echo $project_id; ?>" name="project_id" readonly > 
                                            <input type="hidden" value="<?php echo $block; ?>" name="block" readonly>
                                            <?php echo $project_name; ?> <?php echo $block; ?>
                                        </td>

                                        <td>
                                            &nbsp;
                                        </td>
                                    </tr>

                                    <tr>

                                        <td>
                                            Unit No.
                                        </td>

                                        <td colspan="3">
                                            <?php echo $unit_no; ?>
                                        </td>

                                        <td>
                                            &nbsp;
                                        </td>
                                    </tr>

                                    <tr>

                                        <td>
                                            Type
                                        </td>

                                        <td colspan="3">
                                            <?php echo $type ?>
                                        </td>

                                        <td>
                                            &nbsp;
                                        </td>
                                    </tr>

                                    <tr>

                                        <td>
                                            Plot Size
                                        </td>
                                        <?php
                                        $data['plot_size_mtr'] = $plot_size_mtr;
                                        $data['plot_size_ft'] = $plot_size_ft;
                                        $data['project_id'] = $project_id;
                                        $data['type'] = $type;
                                        $data['block'] = $block;
                                        foreach ($this->Allotment_letter_model->show_plot_info($data) as $row) {
                                            $plot_sqmt = $row->plot_sqmt;
                                            $plot_size_sqft = $row->plot_sqft;
                                            $length_m = $row->length_m;
                                            $width_m = $row->width_m;
                                        }
                                        ?>
                                        <td colspan="3">
                                            <?php //echo number_format((float)$plot_size_mtr, 2, '.', ''); ?>
                                            <?php echo $length_m; ?><?php echo nbs(2); ?>X<?php echo nbs(2); ?><?php echo $width_m; ?> &nbsp; Mt.
                                        </td>

                                        <td>
                                            &nbsp;
                                        </td>
                                    </tr>

                                    <tr>

                                        <td>
                                            Plot Area
                                        </td>

                                        <td colspan="3">
                                            <?php if ($type == 'Duplex') { ?>
                                                <?php
                                                $data['plot_size_mtr'] = $plot_size_mtr;
                                                $data['plot_size_ft'] = $plot_size_ft;
                                                $data['project_id'] = $project_id;
                                                $data['type'] = $type;
                                                $data['block'] = $block;
                                                foreach ($this->Allotment_letter_model->show_plot_info($data) as $row) {
                                                    $plot_sqmt = $row->plot_sqmt;
                                                    $plot_size_sqft = $row->plot_sqft;
                                                    $length_m = $row->length_m;
                                                    $width_m = $row->width_m;
                                                }
                                                ?>

                                                <?php echo number_format((float) $length_m * $width_m, 2, '.', ''); ?>
                                            <?php } else { ?>                

                                                <?php echo $plot_size_ft; ?>
                                            <?php } ?> &nbsp; Sq. Mt.
                                        </td>

                                        <td>
                                            &nbsp;
                                        </td>
                                    </tr>

                                    <tr>

                                        <td>
                                            Duplex Carpet Area
                                        </td>

                                        <td colspan="3">
                                            <?php echo number_format((float) $cost_carpet_area, 2, '.', ''); ?> &nbsp; Sq. Mt.
                                        </td>
                                        <td>
                                            &nbsp;
                                        </td>
                                    </tr>

                                    <tr>

                                        <td>
                                            Duplex Carpet Area
                                        </td>

                                        <td colspan="3">
                                            <?php echo number_format((float) $cost_carpet_area * 10.76, 2, '.', ''); ?> &nbsp; Sq. Ft.
                                        </td>

                                        <td>
                                            &nbsp;
                                        </td>
                                    </tr>
                                    <tr>


                                        <td>
                                            &nbsp;
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
                                            <?php echo round($cost_carpet_area, 2); ?>
                                        </td>
                                        <td>
                                            Rs. <?php echo number_format((float) $cost_ca_ref_rate, 2, '.', ''); ?>
                                        </td>
                                        <td>
                                            10.76
                                        </td>
                                        <td>
                                            Rs.  <?php echo number_format((float) $total_unit_cost_as_per_carpet_area, 2, '.', ''); ?>
                                        </td>


                                    </tr>

                                    <tr>

                                        <td>
                                            Covered Balcony Area(1)
                                        </td>


                                        <td>
                                            <?php echo round($cost_balcony_area, 2); ?>
                                        </td>
                                        <td>
                                            Rs.  <?php echo number_format((float) $cost_balcony_ref_rate, 2, '.', ''); ?> 
                                        </td>
                                        <td>
                                            10.76
                                        </td>
                                        <td>
                                            Rs. <?php echo number_format((float) $total_balcony_area, 2, '.', ''); ?>
                                        </td>

                                    </tr>

                                    <tr>

                                        <td>
                                            Open Terrace Area (Front)
                                        </td>

                                        <td>
                                            <?php echo round($cost_open_terrace_area_front, 2); ?>
                                        </td>
                                        <td>
                                            Rs.  <?php echo number_format((float) $cost_open_terrace_front_area_ref_rate, 2, '.', ''); ?> 
                                        </td>
                                        <td>
                                            10.76
                                        </td>
                                        <td>
                                            Rs.    <?php echo number_format((float) $total_open_terrace_area_front, 2, '.', ''); ?>
                                        </td>

                                    </tr>

                                    <tr>

                                        <td>
                                            Open Terrace Area (Back)
                                        </td>

                                        <td>
                                            <?php echo round($cost_open_terrace_area_back, 2); ?>
                                        </td>
                                        <td>
                                            Rs.  <?php echo number_format((float) $cost_open_terrace_back_area_ref_rate, 2, '.', ''); ?> 
                                        </td>
                                        <td>
                                            10.76
                                        </td>
                                        <td>
                                            Rs. <?php echo number_format((float) $total_open_terrace_area_back, 2, '.', ''); ?>
                                        </td> 

                                    </tr>
                                    <tr>

                                        <td>
                                            Car Porch Area (1)
                                        </td>

                                        <td>
                                            <?php echo round($cost_car_poarch_area, 2); ?>
                                        </td>
                                        <td>
                                            Rs.  <?php echo number_format((float) $cost_car_poarch_area_ref_rate, 2, '.', ''); ?>
                                        </td>
                                        <td>
                                            10.76
                                        </td>
                                        <td>
                                            Rs.  <?php echo number_format((float) $total_car_poarch_area, 2, '.', ''); ?>
                                        </td>

                                    </tr>
                                    <tr>

                                        <td>
                                            Wash Area G. F. (1)
                                        </td>

                                        <td>
                                            <?php echo round($cost_wash_area, 2); ?>
                                        </td>
                                        <td>
                                            Rs. <?php echo number_format((float) $cost_washarea_ref_rate, 2, '.', ''); ?> 
                                        </td>
                                        <td>
                                            10.76
                                        </td>
                                        <td>
                                            Rs. <?php echo number_format((float) $total_wash_area, 2, '.', ''); ?>
                                        </td>

                                    </tr>
                                    <tr>

                                        <td>
                                            Total
                                        </td>

                                        <td colspan="2">

                                        </td>
                                        <td>
                                            &nbsp;
                                        </td>
                                        <td>

                                            <b>Rs. <?php echo number_format((float) $total_six, 2, '.', ''); ?></b>
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
                                            Rs. <?php echo number_format((float) $gst, 2, '.', ''); ?>
                                        </td>

                                    </tr>
                                    <?php foreach ($this->Pre_sales_model->get_charge_amount() as $row) {
                                        ?>
                                        <?php $charge_amt = $row->charge_amount; ?>
                                        <?php $charge_amount1 = $row->charge_amount * 18 / 100; ?>
                                        <?php $charge_amount = $row->charge_amount + $charge_amount1; ?>
                                        <?php //$charge_amount = $charge_amount1 + $charge_amount2;  ?>


                                    <?php } ?>
                                    <tr>

                                        <td>
                                            Maintenance 5 Years
                                        </td>

                                        <td colspan="2">
                                            Rs.   <?php echo number_format((float) $charge_amt, 2, '.', ''); ?>
                                        </td>
                                        <td>
                                            18% for GST
                                        </td>
                                        <td>
                                            Rs. <?php echo number_format((float) $charge_amount, 2, '.', ''); ?>
                                        </td>

                                    </tr>
                                    <tr>

                                        <td>
                                            Other Fix Charges
                                        </td>

                                        <td colspan="2">
                                            <?php echo $extra_charge_des; ?>
                                        </td>
                                        <td>
                                            &nbsp;
                                        </td>
                                        <td>
                                            Rs. <?php echo number_format((float) $extra_charge, 2, '.', ''); ?>
                                        </td>

                                    </tr>
                                    <tr>

                                        <td>
                                            Premium location charges
                                        </td>

                                        <td colspan="2">
                                            <?php echo $premium_location_charges_des; ?>
                                        </td>
                                        <td>
                                            &nbsp;
                                        </td>
                                        <td>
                                            Rs. <?php echo number_format((float) $premium_location_charges, 2, '.', ''); ?>
                                        </td>
                                    </tr>

                                    <tr>

                                        <td>
                                            <strong> Total Cost </strong>
                                        </td>

                                        <td colspan="2">

                                        </td>
                                        <td>
                                            &nbsp;
                                        </td>
                                        <td>
                                            <b title="'Total + GST + Other Fix Charges + Maintenance 5 Years + Premium location charges'"> 
                                                Rs.<?php echo $cost_pay = number_format((float) $cost_payble_to_company, 2, '.', ''); ?></b>
                                        </td>

                                    </tr>

                                    <tr>

                                        <td>
                                            Discount
                                        </td>

                                        <td colspan="2">

                                        </td>
                                        <td>
                                            &nbsp;
                                        </td>
                                        <td>
                                            Rs. <?php echo number_format((float) $discount, 2, '.', ''); ?>
                                        </td>

                                    </tr>
                                    <tr>

                                        <td>
                                            <strong> Total Unit Cost Including GST after Discount </strong>
                                        </td>

                                        <td colspan="2">
                                            Registry + Society<br> + Monthly Operational<br> + Charges + Mutation <br>

                                        </td>
                                        <td>
                                            Shall be Born by allottee
                                        </td>
                                        <td>
                                            <b title="= <?php echo round($total_six, 2); ?> + <?php echo round($gst, 2); ?> + <?php echo round($charge_amount, 2); ?> - discount">Rs. <?php echo number_format((float) $total_cost1, 2, '.', ''); ?></b>
                                            <br><br><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="7">
                                            &nbsp; &nbsp; &nbsp;  Note :-  Registration charges of <?php echo $type ?> registry shall be charged as per actual additionally
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            &nbsp;
                                        </td>
                                        <td colspan="6">
                                            Other Charges to be born by the customer
                                        </td>
                                    </tr>
                                    <tr>

                                        <td colspan="6">
                                            <span>Note : </span>
                                            <br>
                                            <ol>
                                                <li>
                                                    Extra charges will be taken for premium location.
                                                </li>
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


                            <br> <label>Discussion</label>
                            <?php echo $discussion; ?>
                        </div> 
                    </div> 
                </form>
            </div> 
        </div> 

        <script type="text/javascript">

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
                $('#toppageheader').html('Cost Calculation <span class="pull-right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="print" id="btnprint" value="print" class="btn btn-xs btn-default" onClick="print_this_doc();">Print&nbsp;&nbsp;<i class="fa fa-print"></i></button></span>');
                $("a:contains(Cost Calculation)").parent().addClass('active');
            });
        </script>
    </body>

