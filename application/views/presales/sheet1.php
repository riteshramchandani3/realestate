<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
    <head>
        <title>Sheet One</title>
        <?php
        require_once('assets/html_head_links.php');
        ?>
        <style>


            @page {
                size: A4;   /* auto is the initial value */
                margin: 5mm 5mm 5mm 5mm;  /* this affects the margin in the printer settings */

            }
            @media print
            {
                /*@page {size: landscape}*/
                .non-printable { display: none; }
                #printable { display: block;}
            }

            .panel-primary {
                border-color: #000 !important;
            }
            input{
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
                    <form class="form-inline" action="<?php echo site_url('pre_sales/get_visitor_Input'); ?>" method="post" autocomplete="off" name="Form"  onsubmit="return ValidationEvent()" > 

                        <?php
                        foreach ($this->Pre_sales_model->get_cost_max_id() as $row) {
                            ?>
                            <?php $max = $row->id ?>
                            <?php $max_id = $max + 1; ?>
                        <?php } ?>
                        <input type="hidden" name="max_id" value="<?php echo $max_id; ?>" />
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

                        foreach ($this->Pre_sales_model->view_proj_info($id) as $row) {
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
                        <?php } ?>

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
                           <?php  $login_user_id = $this->session->userdata('user_id'); ?>
                          <input type='hidden' value='<?php echo $login_user_id; ?>' name='login_id'/>
                        <input type="hidden" value="<?php echo $id; ?>" name="prospect_id" />

                        <?php
                        $data['project_id'] = $project_id;
                        $data['block'] = $block;
                        $data['category'] = $category;
                        $data['type'] = $type;
                        $data['plot_size_mtr'] = $plot_size_mtr;
                        $data['plot_size_ft'] = $plot_size_ft;

                        foreach ($this->Pre_sales_model->getpdts($data) as $row) {
                            ?>
                            <?php $carpet_area = $row->carpet_area; ?>
                            <?php $ca_ref_rate = $row->ca_ref_rate; ?>
                            <?php //$carpet_area_result = $carpet_area * 10.76 * $ca_ref_rate; ?>
                            <?php $carpet_area_result = $carpet_area * 10.76 * $ca_ref_rate; ?>

                            <?php $car_poarch_area = $row->car_poarch_area; ?>
                            <?php $car_poarch_area_ref_rate = $row->car_poarch_area_ref_rate; ?>
                            <?php $car_poarch_result = $car_poarch_area * 10.76 * $car_poarch_area_ref_rate; ?>

                            <?php $balcony_area = $row->balcony_area; ?>
                            <?php $balcony_ref_rate = $row->balcony_ref_rate; ?>
                            <?php $balcony_area_result = $balcony_area * 10.76 * $balcony_ref_rate; ?>


                            <?php $open_terrace_front_area = $row->open_terrace_front_area; ?>
                            <?php $open_terrace_front_area_ref_rate = $row->open_terrace_front_area_ref_rate; ?>
                            <?php $open_terrace_front_area_result1 = $open_terrace_front_area * 10.76 * $open_terrace_front_area_ref_rate; ?>


                            <?php $open_terrace_back_area2 = $row->open_terrace_back_area; ?>
                            <?php $open_terrace_back_area_ref_rate2 = $row->open_terrace_back_area_ref_rate; ?>
                            <?php $open_terrace_back_area_result2 = $open_terrace_back_area2 * 10.76 * $open_terrace_back_area_ref_rate2; ?>

                            <?php $wash_area = $row->wash_area; ?>
                            <?php $washarea_ref_rate = $row->washarea_ref_rate; ?>
                            <?php $wash_area_result = $wash_area * $washarea_ref_rate * 10.76; ?>


                            <?php $box_back_side_area = $row->box_back_side_area; ?>
                            <?php $box_back_side_area_ref_rate = $row->box_back_side_area_ref_rate; ?>
                            <?php $box_back_side_area_result = $box_back_side_area * 10.76 * $box_back_side_area_ref_rate; ?>


                            <?php $common_area = $row->common_area; ?>
                            <?php $commonarea_ref_rate = $row->commonarea_ref_rate; ?>
                            <?php $common_area_result = $common_area * 10.76 * $commonarea_ref_rate; ?>

                            <?php //$total_sum_x = $carpet_area_result + $car_poarch_result + $balcony_area_result + $covered_terrace_front_side_area_result + $open_terrace_back_area_result + $wash_area_result + $box_back_side_area_result;  ?>
                            <?php
                            $total_sum_x = $carpet_area_result + $car_poarch_result + $balcony_area_result + $open_terrace_front_area_result1 + $open_terrace_back_area_result2 + $wash_area_result; // + $box_back_side_area_result;
                            ?>

                        <?php }
                        ?>
                        <?php
                        //  $data['plot_size_mtr'] = $plot_size_mtr;
                        //  $data['plot_size_ft'] = $plot_size_ft;

                        foreach ($this->Pre_sales_model->getproj_info($data) as $row) {
                            ?>

                            <?php $plot_sqmt = $row->plot_sqmt; ?>
                            <?php $plot_sqft = $row->plot_sqft; ?>
                        <?php }
                        ?>

                        <input  id="gst" type="hidden" value="<?php echo $result5 ?>"/>
                        <input   type="hidden" name="plot_size_ft" value="<?php echo $plot_size_ft ?>"/>
                        <input   type="hidden" name="category" value="<?php echo $category ?>"/>

                        <?php foreach ($this->Pre_sales_model->get_charge_amount() as $row) {
                            ?>
                            <?php $charge_amt = $row->charge_amount; ?>
                            <?php $charge_amount1 = $row->charge_amount * 18 / 100; ?>
                            <?php $charge_amount = $row->charge_amount + $charge_amount1; ?>
                            <?php //$charge_amount = $charge_amount1 + $charge_amount2;  ?>


                        <?php } ?>


                        <table class="table table-bordered">
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
                                        <input type="text" class="form-control" name="name" value="<?php echo $name; ?>" style="width:100%;" readonly/> 
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
                                        <input type="text" class="form-control" pattern="[789][0-9]{9}" name="mobile" value="<?php echo $mobile_no; ?>"  readonly/>
                                    </td>
                                    <td>
                                        &nbsp;
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
                                    <td>
                                        Project
                                    </td>
                                    <td colspan="2">
                                        <?php echo $project_name; ?> <?php echo $block; ?>
                                        <input type="hidden" value="<?php echo $project_id; ?>" name="project_id" > 
                                        <input type="hidden" value="<?php echo $block; ?>" name="block" >
                                        <input type="hidden" value="<?php echo $project_name; ?> <?php echo $block; ?>"  readonly/>
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
                                        <input type="text" value="<?php echo $unit_no; ?>" name="unit_no"  readonly/>
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
                                        <input type="text" value="<?php echo $type ?>" name="type" readonly/>
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
                                        Plot Size
                                    </td>
                                    <td colspan="2">
                                        <?php echo nbs(1); ?>  <?php echo $length_m; ?><?php echo nbs(2); ?>X<?php echo nbs(2); ?><?php echo $width_m; ?>
                                        <input type="hidden" value="<?php echo $plot_size_mtr ?>" name="display" readonly/>
                                    </td>
                                    <td>
                                        &nbsp;Mtr
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Plot Area
                                    </td>
                                    <td colspan="2">
                                        <input type="text" value="<?php echo number_format((float) $length_m * $width_m, 2, '.', '');  //echo $carpet_area;                             ?>"  readonly/>
                                        <input type="hidden" value="<?php echo round($plot_sqmt, 2); ?>"  readonly/>
                                    </td>
                                    <td>
                                        sqmt.
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Duplex Carpet Area
                                    </td>
                                    <td colspan="2">
                                        <input type="text" value="<?php echo number_format((float) $carpet_area, 2, '.', ''); ?>"   readonly/>
                                    </td>
                                    <td>
                                        sqmt.
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Duplex Carpet Area
                                    </td>
                                    <td colspan="2">
                                        <input type="text" value="<?php echo number_format((float) $carpet_area * 10.76, 2, '.', ''); ?>" name=""  readonly/>
                                        <input type="hidden" value="<?php echo round($plot_sqft, 2); ?>" name=""  readonly/>
                                    </td>
                                    <td>
                                        sqft.
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
                                        <input type="text" id="Unit_Cost_as_per_carpet_area_size" name="cost_carpet_area" value="<?php echo number_format((float) $carpet_area, 2, '.', ''); ?>" readonly/>
                                        <!--button type="button" class="btn btn-info btn-sm" id="btnEditarea"><i class="fa fa-edit"></i></button-->
                                    </td>
                                    <td>
                                        Rs.<input type="text" class="inputborder" onkeyup="calculate_Unit_Cost_as_per_carpet_area(this.value)" name="cost_ca_ref_rate" value="<?php echo number_format((float) $ca_ref_rate, 2, '.', ''); ?>" readonly/>

                                        <button type="button" class="btn btn-info btn-sm" id="btnEditrate"><i class="fa fa-edit"></i></button>

                                    </td>

                            <input type="hidden" id='tencoma_unit_cost_as_per_carpet_rate' value="<?php echo round($ca_ref_rate * 10.76, 2); ?>" readonly/>
                            <td>

                                10.76
                            </td>
                            <td>
                                Rs. <input type="text" title="Unit Cost as per carpet area * Unit Cost as per carpet area rate * 10.76" id="Unit_Cost_as_per_carpet_area_rate" name="total_unit_cost_as_per_carpet_area" value="<?php echo number_format((float) $carpet_area_result, 2, '.', ''); ?>" readonly/>

                                <input type="hidden" title="Unit Cost as per carpet area * Unit Cost as per carpet area rate * 10.76" id="Unit_Cost_as_per_carpet_area_rate_gst" value="<?php echo $gst_res1 = round((($carpet_area * $ca_ref_rate) * 10.76 ) * $result5 / 100, 2); ?>"  readonly/>  <!--  Hidden GST-1 -->
                            </td>

                            </tr>

                            <tr>

                                <td>
                                    Covered Balcony Area(1)
                                </td>

                                <td>
                                    <input type="text" id="Coveres_Balcony_Area_size" name="cost_balcony_area" value="<?php echo number_format((float) $balcony_area, 2, '.', ''); ?>" readonly/> 
                                </td>
                                <td>
                                    Rs.  <input type="text" class="inputborder" onkeyup="calculate_Coveres_Balcony_Area(this.value)" name="cost_balcony_ref_rate" value="<?php echo number_format((float) $balcony_ref_rate, 2, '.', ''); ?>" readonly/> 

                                </td>


                            <input type="hidden" id='tencoma_balcony_area' value="<?php echo round($balcony_ref_rate * 10.76, 2); ?>" readonly/>


                            <td>
                                10.76
                            </td>

                            <td>
                                Rs. <input type="text" title="Coveres Balcony Area * Coveres Balcony Area Rate * 10.76" id="Coveres_Balcony_Area_rate" name="total_balcony_area" value="<?php echo number_format((float) $balcony_area_result, 2, '.', ''); ?>" readonly/>

                                <input type="hidden" title="Coveres Balcony Area * Coveres Balcony Area Rate * 10.76" id="Coveres_Balcony_Area_rate_gst" value="<?php echo $gst_res2 = round((($balcony_area * $balcony_ref_rate) * 10.76 ) * $result5 / 100, 2); ?>" /> <!--  Hidden GST-2 -->
                            </td>

                            </tr>

                            <tr>

                                <td>
                                    Open Terrace Area (Front)
                                </td>

                                <td>
                                    <input type="text" id="Open_Terrace_Area_Front_size" name="cost_open_terrace_area_front" value="<?php echo number_format((float) $open_terrace_front_area, 2, '.', ''); ?>" readonly/> 

                                </td>
                                <td>
                                    Rs. <input type="text" class="inputborder" onkeyup="calculate_Open_Terrace_Area_Front(this.value)" name="cost_open_terrace_front_area_ref_rate" value=" <?php echo number_format((float) $open_terrace_front_area_ref_rate, 2, '.', ''); ?>" readonly/> 

                                </td>


                            <input type="hidden" id='tencoma_open_terrance_front' value="<?php echo round($open_terrace_front_area_ref_rate * 10.76, 2); ?>" readonly/>


                            <td>
                                10.76
                            </td>

                            <td>
                                Rs.    <input type="text" title="Open Terrace Area (Front) * Open Terrace Area Rate (Front) * 10.76" id="Open_Terrace_Area_Front_rate" name="total_open_terrace_area_front" value="<?php echo number_format((float) $open_terrace_front_area_result1, 2, '.', ''); ?>" readonly/>

                                <input type="hidden" title="Open Terrace Area (Front) * Open Terrace Area Rate (Front) * 10.76" id="Open_Terrace_Area_Front_rate_gst" value="<?php echo $gst_res3 = round((($open_terrace_front_area * $open_terrace_front_area_ref_rate) * 10.76 ) * $result5 / 100, 2); ?>"/> <!--  Hidden GST-3 -->
                            </td>


                            </tr>

                            <tr>

                                <td>
                                    Open Terrace Area (Back)
                                </td>

                                <td>
                                    <input type="text" id="Open_Terrace_Area_Back_size" name="cost_open_terrace_area_back" value="<?php echo number_format((float) $open_terrace_back_area2, 2, '.', ''); ?>" readonly/> 
                                </td>
                                <td>
                                    Rs.  <input type="text" class="inputborder" onkeyup="calculate_Open_Terrace_Area_Back(this.value)" name="cost_open_terrace_back_area_ref_rate" value="<?php echo number_format((float) $open_terrace_back_area_ref_rate2, 2, '.', ''); ?>" readonly/> 

                                </td>


                            <input type="hidden" id='tencoma_open_terrance_back' value="<?php echo round($open_terrace_back_area_ref_rate2 * 10.76, 2); ?>" readonly/>

                            <td>
                                10.76
                            </td>

                            <td>
                                Rs. <input type="text" title="Open Terrace Area (Back) * Open Terrace Area Rate(Back) *10.76 " id="Open_Terrace_Area_Back_rate" name="total_open_terrace_area_back" value="<?php echo number_format((float) $open_terrace_back_area_result2, 2, '.', ''); ?>" readonly/>

                                <input type="hidden" title="Open Terrace Area (Back) * Open Terrace Area Rate(Back) *10.76 " id="Open_Terrace_Area_Back_rate_gst" value="<?php echo $gst_res4 = round((($open_terrace_back_area2 * $open_terrace_back_area_ref_rate2) * 10.76 ) * $result5 / 100, 2); ?>"/><!--  Hidden GST-4 -->
                            </td>

                            </tr>
                            <tr>
                                <td>
                                    Car Porch Area (1)
                                </td>

                                <td>
                                    <input type="text" id="Car_Porch_Area_size" name="cost_car_poarch_area" value="<?php echo number_format((float) $car_poarch_area, 2, '.', ''); ?>" readonly/> 
                                </td>
                                <td>
                                    Rs.  <input type="text" class="inputborder" onkeyup="calculate_Car_Porch_Area(this.value)" name="cost_car_poarch_area_ref_rate" value="<?php echo number_format((float) $car_poarch_area_ref_rate, 2, '.', ''); ?>" readonly/>
                                </td>

                            <input type="hidden" id='tencoma_car_porch_area' value="<?php echo round($car_poarch_area_ref_rate * 10.76, 2); ?>" readonly/>

                            <td>
                                10.76
                            </td>

                            <td>
                                Rs.   <input type="text" title="Car Porch Area * Car Porch Area Rate * 10.76"  id="Car_Porch_Area_rate" name="total_car_poarch_area" value="<?php echo number_format((float) $car_poarch_result, 2, '.', ''); ?>" readonly/>

                                <input type="hidden" title="Car Porch Area * Car Porch Area Rate * 10.76"  id="Car_Porch_Area_rate_gst" value="<?php echo $gst_res5 = round((($car_poarch_area * $car_poarch_area_ref_rate) * 10.76 ) * $result5 / 100, 2); ?>"/> <!--  Hidden GST-5 -->
                            </td>


                            </tr>
                            <tr>

                                <td>
                                    Wash Area G. F. (1)
                                </td>

                                <td>
                                    <input type="text" id="Wash_Area_G_F_size" name="cost_wash_area" value="<?php echo number_format((float) $wash_area, 2, '.', ''); ?>" readonly/> 
                                </td>
                                <td>
                                    Rs. <input type="text" class="inputborder" onkeyup="calculate_Wash_Area_G_F(this.value)" name="cost_washarea_ref_rate" value="<?php echo number_format((float) $washarea_ref_rate, 2, '.', ''); ?>" readonly/>
                                </td>

                            <input type="hidden" id='tencoma_wash_area' value="<?php echo round($washarea_ref_rate * 10.76, 2); ?>" readonly/>

                            <td>
                                10.76
                            </td>

                            <td>
                                Rs.<input type="text" title="Wash Area G. F. * Wash Area G. F. Rate * 10.76" id="Wash_Area_G_F_rate" name="total_wash_area" value="<?php echo number_format((float) $wash_area_result, 2, '.', ''); ?>" readonly/>

                                <input type="hidden" title="Wash Area G. F. * Wash Area G. F. Rate * 10.76" id="Wash_Area_G_F_rate_gst" value="<?php echo $gst_res6 = round((($wash_area * $washarea_ref_rate) * 10.76 ) * $result5 / 100, 2); ?>"/> <!--  Hidden GST-6 -->
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
                                    Rs. <strong><input type="text" id="final_total" name="final_total" value="<?php echo number_format((float) $total_sum_x, 2, '.', ''); ?>" readonly/></strong>
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
                                    Rs. <b><input type="text" name="gst" id="total1"  readonly/></b>
                                </td>

                            </tr>

                            <tr>

                                <td>
                                    Maintenance 5 Years
                                </td>

                                <td colspan="2">
                                    Rs. <?php echo number_format((float) $charge_amt, 2, '.', ''); ?> 
                                </td>
                                <td>
                                    @18 for GST
                                </td>
                                <td>
                                    Rs. <b><input type="text" id="charge_amt" value="<?php echo number_format((float) $charge_amount, 2, '.', ''); ?>"  readonly /></b>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    Other Fix Charges
                                </td>

                                <td colspan="2">
                                    <textarea cols="3" rows="4" style="width:100%;" class="form-control" placeholder="Description" id="extra_charge_box" name="extra_charge_des"></textarea>

                                </td>
                                <td>
                                    &nbsp;
                                </td>
                                <td>
                                    Rs. <input type="text" onfocus="cleasdiscountpremium();" onblur="makethisdecimal(this.id);"  class="form-control" value="00" name="extra_charge" onkeyup="calculate_other_fix_charges(this.value)"  onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13 || event.charCode == 46) ? null : event.charCode >= 48 && event.charCode <= 57" id="other_charges"  />
                                    <input type="hidden" value="00" id="extra_charge_gst"> <!-- hidden extra_charge_gst -->
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    Premium location charges
                                </td>

                                <td colspan="2">
                                    <textarea cols="3" rows="4" style="width:100%;" class="form-control"   id="premium_location_charges_box" placeholder="Description" name="premium_location_charges_des"></textarea>

                                </td>
                                <td>
                                    &nbsp;
                                </td>
                                <td>
                                    Rs. <input type="text"  onfocus="cleardiscount();"  onblur="makethisdecimal(this.id);" class="form-control" value="00" name="premium_location_charges" onkeyup="calculate_premium_location_charges(this.value)" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13 || event.charCode == 46) ? null : event.charCode >= 48 && event.charCode <= 57" id="premium_location_charges"  />
                                    <input type="hidden" value="00" id="premium_location_charges_gst"> <!-- hidden extra_charge_gst -->
                                </td>

                            </tr>

                            <tr>
                                <td>
                                    Total Cost
                                </td>

                                <td colspan="2">

                                </td>
                                <td>
                                    &nbsp;
                                </td>
                                <td>
                                    Rs. <b><input type="text" id='Cost_payable_to_company' name="cost_payble" title="'Total + GST + Other Fix Charges + Maintainance 5 Years + Premium location charges'" value="<?php echo round($cost_pay = $charge_amount, 2); ?>"  readonly/></b>

                                    <input type="hidden"  id="cost_payable_to_com" value="<?php echo number_format((float) $total_sum_x, 2, '.', ''); ?>" readonly/>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    Discount
                                </td>

                                <td colspan="2">

                                </td>
                                <td>
                                    <div class="non-printable"> <!-- input class="btn btn-info btn-sm btn-3d" type="button"  title="Get Total" onclick="getPrice()" value="Get Total" style="width:100%;" --></div>
                                </td>
                                <td>
                                    Rs. <input onfocus="clearabovetwo();" type="text" min="1" step="1" value="00" class="form-control" onblur="makethisdecimal(this.id);" onkeyup="calculate_discount(this.value)" id="discount" name="discount" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13 || event.charCode == 46) ? null : event.charCode >= 48 && event.charCode <= 57"/>
                                </td>

                            </tr>
                            <script>



                                getPrice = function () {
                                    //alert(document.getElementById("Unit_Cost_as_per_carpet_area_rate").value);

                                    var gst = Number(document.getElementById("gst").value);
                                    var Unit_Cost_as_per_carpet_area_rate = Number(document.getElementById("Unit_Cost_as_per_carpet_area_rate").value);
                                    var Coveres_Balcony_Area_rate = Number(document.getElementById("Coveres_Balcony_Area_rate").value);
                                    var Open_Terrace_Area_Front_rate = Number(document.getElementById("Open_Terrace_Area_Front_rate").value);
                                    var Open_Terrace_Area_Back_rate = Number(document.getElementById("Open_Terrace_Area_Back_rate").value);
                                    var Car_Porch_Area_rate = Number(document.getElementById("Car_Porch_Area_rate").value);
                                    var Wash_Area_G_F_rate = Number(document.getElementById("Wash_Area_G_F_rate").value);
                                    //alert(Wash_Area_G_F_rate);

                                    var discount = Number(document.getElementById("discount").value);

                                    var charge_amt = Number(document.getElementById("charge_amt").value);




                                    var other_charges = Number(document.getElementById("other_charges").value);
                                    var premium_location_charges = Number(document.getElementById("premium_location_charges").value);

                                    var final_rate = Unit_Cost_as_per_carpet_area_rate + Coveres_Balcony_Area_rate + Open_Terrace_Area_Front_rate + Open_Terrace_Area_Back_rate + Car_Porch_Area_rate + Wash_Area_G_F_rate;



                                    var afterdiscount = final_rate + other_charges + premium_location_charges;// - discount;
                                    //alert(afterdiscount);
                                    var gsttax = afterdiscount * gst / 100;

                                    document.getElementById('final_total').value = final_rate.toFixed(2);

                                    var Cost_payable = charge_amt + final_rate + other_charges + premium_location_charges + gsttax;
                                    //alert(charge_amt+'/'+final_rate+'/'+other_charges+'/'+premium_location_charges+'/'+gsttax);
                                    document.getElementById('Cost_payable_to_company').value = Cost_payable.toFixed(2);

                                    var total_cost = gsttax + charge_amt + final_rate + other_charges + premium_location_charges - discount.toFixed(2);

                                    if (final_rate >= discount) {
                                        document.getElementById("total1").value = gsttax.toFixed(2);
                                        document.getElementById("total_cost").value = total_cost.toFixed(2);
                                    } else {
                                        alert("No more discount than the cost payable to company");
                                        document.getElementById("discount").value = 0;
                                        document.getElementById("discount").focus();
                                    }



                                }
                            </script>
                            <tr>
                                <td>
                                    Total Unit Cost Including GST after Discount
                                </td>

                                <td colspan="2">
                                    <span>Registry + Society <br> + Monthly Operational Charges + Mutation</span><br><br>
                                </td>
                                <td>
                                    Shall be Born by allottee
                                </td>
                                <td>
                                    Rs. <b><input type="text" name="total_cost" id="total_cost"  readonly/></b>
                                </td>

                            </tr>
                            <tr>
                                <td colspan="7" class="text-center">
                                    Note :-  Registration charges of <?php echo $type ?> registry shall be charged as per actual additionally
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
                        </table>
                        <div class="row">
                            <div class="col-xs-12">
                                <label>Discussion</label>
                                &nbsp;<textarea cols="3" id="discussion" rows="4" style="width:100%;" name="discussion" class="form-control"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="text-center">
                            <input type="submit" class="btn btn-success" value="submit" />
                            <input action="action" onclick="window.history.go(-1);
                                    return false;" type="button" value="Cancel" class="btn btn-primary clickable" />
                        </div>
                    </form> 
                </div>

            </div>



        </div>


        <script type="text/javascript">
            //---------------replace CR with semicolon and space in a textarea------------------

            $("#discussion").on("keydown", function (event) {
                //alert('A key has been entered.');
                var str = $('#discussion').val();
                if (event.which == 13) {
                    //console.log('Enter has been entered.');
                    event.preventDefault();
                    $('#discussion').val(str + '; ');
                    //alert('Enter Key has been entered.');
                }
            });

            //--------------------------------
            //---------------replace CR with semicolon and space in a textarea------------------

            $("#premium_location_charges_box").on("keydown", function (event) {
                //alert('A key has been entered.');
                var str = $('#premium_location_charges_box').val();
                if (event.which == 13) {
                    //console.log('Enter has been entered.');
                    event.preventDefault();
                    $('#premium_location_charges_box').val(str + '; ');
                    //alert('Enter Key has been entered.');
                }
            });

            //--------------------------------
            //---------------replace CR with semicolon and space in a textarea------------------

            $("#extra_charge_box").on("keydown", function (event) {
                //alert('A key has been entered.');
                var str = $('#extra_charge_box').val();
                if (event.which == 13) {
                    //console.log('Enter has been entered.');
                    event.preventDefault();
                    $('#extra_charge_box').val(str + '; ');
                    //alert('Enter Key has been entered.');
                }
            });

            //--------------------------------

            $(document).ready(function () {

                var Unit_Cost_as_per_carpet_area_rate_gst = document.getElementById('Unit_Cost_as_per_carpet_area_rate_gst').value;
                var Coveres_Balcony_Area_rate_gst = document.getElementById('Coveres_Balcony_Area_rate_gst').value;
                var Open_Terrace_Area_Front_rate_gst = document.getElementById('Open_Terrace_Area_Front_rate_gst').value;
                var Open_Terrace_Area_Back_rate_gst = document.getElementById('Open_Terrace_Area_Back_rate_gst').value;
                var Car_Porch_Area_rate_gst = document.getElementById('Car_Porch_Area_rate_gst').value;
                var Wash_Area_G_F_rate_gst = document.getElementById('Wash_Area_G_F_rate_gst').value;

                var charge_amt = document.getElementById('charge_amt').value;

                var Wash_Area_G_F_rate_rs = document.getElementById('Wash_Area_G_F_rate').value;
                var Car_Porch_Area_size_rs = document.getElementById('Car_Porch_Area_rate').value;
                var Open_Terrace_Area_Back_size_rs = document.getElementById('Open_Terrace_Area_Back_rate').value;
                var Open_Terrace_Area_Front_size_rs = document.getElementById('Open_Terrace_Area_Front_rate').value;
                var Coveres_Balcony_Area_rate_rs = document.getElementById('Coveres_Balcony_Area_rate').value;
                var Unit_Cost_as_per_carpet_area_rs = document.getElementById('Unit_Cost_as_per_carpet_area_rate').value;


                document.getElementById('total1').value = (parseFloat(Unit_Cost_as_per_carpet_area_rate_gst) + parseFloat(Wash_Area_G_F_rate_gst) + parseFloat(Coveres_Balcony_Area_rate_gst) + parseFloat(Open_Terrace_Area_Front_rate_gst) + parseFloat(Open_Terrace_Area_Back_rate_gst) + parseFloat(Car_Porch_Area_rate_gst)).toFixed(2);

                document.getElementById('Cost_payable_to_company').value = (parseFloat(charge_amt) + parseFloat(Unit_Cost_as_per_carpet_area_rs) + parseFloat(Coveres_Balcony_Area_rate_rs) + parseFloat(Open_Terrace_Area_Front_size_rs) + parseFloat(Open_Terrace_Area_Back_size_rs) + parseFloat(Car_Porch_Area_size_rs) + parseFloat(Wash_Area_G_F_rate_rs) + parseFloat(Unit_Cost_as_per_carpet_area_rate_gst) + parseFloat(Wash_Area_G_F_rate_gst) + parseFloat(Coveres_Balcony_Area_rate_gst) + parseFloat(Open_Terrace_Area_Front_rate_gst) + parseFloat(Open_Terrace_Area_Back_rate_gst) + parseFloat(Car_Porch_Area_rate_gst)).toFixed(2);

                document.getElementById('total_cost').value = (parseFloat(charge_amt) + parseFloat(Unit_Cost_as_per_carpet_area_rs) + parseFloat(Coveres_Balcony_Area_rate_rs) + parseFloat(Open_Terrace_Area_Front_size_rs) + parseFloat(Open_Terrace_Area_Back_size_rs) + parseFloat(Car_Porch_Area_size_rs) + parseFloat(Wash_Area_G_F_rate_rs) + parseFloat(Unit_Cost_as_per_carpet_area_rate_gst) + parseFloat(Wash_Area_G_F_rate_gst) + parseFloat(Coveres_Balcony_Area_rate_gst) + parseFloat(Open_Terrace_Area_Front_rate_gst) + parseFloat(Open_Terrace_Area_Back_rate_gst) + parseFloat(Car_Porch_Area_rate_gst)).toFixed(2);

            });




            function calculate_Unit_Cost_as_per_carpet_area(arg)
            {


                var Unit_Cost_as_per_carpet_area_size = document.getElementById('Unit_Cost_as_per_carpet_area_size').value;
                var Coveres_Balcony_Area_rate_rs = document.getElementById('Coveres_Balcony_Area_rate').value;
                var Open_Terrace_Area_Front_rate_rs = document.getElementById('Open_Terrace_Area_Front_rate').value;
                var Open_Terrace_Area_Back_rate_rs = document.getElementById('Open_Terrace_Area_Back_rate').value;
                var Car_Porch_Area_rate_rs = document.getElementById('Car_Porch_Area_rate').value;
                var Wash_Area_G_F_rate_rs = document.getElementById('Wash_Area_G_F_rate').value;
                var Unit_Cost_as_per_carpet_area_rate = arg * Unit_Cost_as_per_carpet_area_size * 10.76; //result_1

                var gst = Number(document.getElementById("gst").value);
                var gsttax = Unit_Cost_as_per_carpet_area_rate * gst / 100;
                document.getElementById('Unit_Cost_as_per_carpet_area_rate_gst').value = gsttax.toFixed(2);

                var Tencoma_Unit_Cost_as_per_carpet_area_size_ft = arg * 10.76;



                var Coveres_Balcony_Area_rate_gst = document.getElementById('Coveres_Balcony_Area_rate_gst').value;
                var Open_Terrace_Area_Front_rate_gst = document.getElementById('Open_Terrace_Area_Front_rate_gst').value;
                var Open_Terrace_Area_Back_rate_gst = document.getElementById('Open_Terrace_Area_Back_rate_gst').value;
                var Car_Porch_Area_rate_gst = document.getElementById('Car_Porch_Area_rate_gst').value;
                var Wash_Area_G_F_rate_gst = document.getElementById('Wash_Area_G_F_rate_gst').value;

                var charge_amt = document.getElementById('charge_amt').value;

                document.getElementById('Unit_Cost_as_per_carpet_area_rate').value = Unit_Cost_as_per_carpet_area_rate.toFixed(2);
                document.getElementById('tencoma_unit_cost_as_per_carpet_rate').value = Tencoma_Unit_Cost_as_per_carpet_area_size_ft.toFixed(2);
                document.getElementById('final_total').value = (parseFloat(Unit_Cost_as_per_carpet_area_rate) + parseFloat(Coveres_Balcony_Area_rate_rs) + parseFloat(Open_Terrace_Area_Front_rate_rs) + parseFloat(Open_Terrace_Area_Back_rate_rs) + parseFloat(Car_Porch_Area_rate_rs) + parseFloat(Wash_Area_G_F_rate_rs)).toFixed(2);

                document.getElementById('total1').value = (parseFloat(gsttax) + parseFloat(Coveres_Balcony_Area_rate_gst) + parseFloat(Open_Terrace_Area_Front_rate_gst) + parseFloat(Open_Terrace_Area_Back_rate_gst) + parseFloat(Car_Porch_Area_rate_gst) + parseFloat(Wash_Area_G_F_rate_gst)).toFixed(2);


                document.getElementById('Cost_payable_to_company').value = (parseFloat(charge_amt) + parseFloat(Unit_Cost_as_per_carpet_area_rate) + parseFloat(Coveres_Balcony_Area_rate_rs) + parseFloat(Open_Terrace_Area_Front_rate_rs) + parseFloat(Open_Terrace_Area_Back_rate_rs) + parseFloat(Car_Porch_Area_rate_rs) + parseFloat(Wash_Area_G_F_rate_rs) + parseFloat(gsttax) + parseFloat(Coveres_Balcony_Area_rate_gst) + parseFloat(Open_Terrace_Area_Front_rate_gst) + parseFloat(Open_Terrace_Area_Back_rate_gst) + parseFloat(Car_Porch_Area_rate_gst) + parseFloat(Wash_Area_G_F_rate_gst)).toFixed(2);

                document.getElementById('total_cost').value = (parseFloat(charge_amt) + parseFloat(Unit_Cost_as_per_carpet_area_rate) + parseFloat(Coveres_Balcony_Area_rate_rs) + parseFloat(Open_Terrace_Area_Front_rate_rs) + parseFloat(Open_Terrace_Area_Back_rate_rs) + parseFloat(Car_Porch_Area_rate_rs) + parseFloat(Wash_Area_G_F_rate_rs) + parseFloat(gsttax) + parseFloat(Coveres_Balcony_Area_rate_gst) + parseFloat(Open_Terrace_Area_Front_rate_gst) + parseFloat(Open_Terrace_Area_Back_rate_gst) + parseFloat(Car_Porch_Area_rate_gst) + parseFloat(Wash_Area_G_F_rate_gst)).toFixed(2);




            }
            function calculate_Coveres_Balcony_Area(arg)
            {
                var Coveres_Balcony_Area_size = document.getElementById('Coveres_Balcony_Area_size').value;
                var Unit_Cost_as_per_carpet_area_rs = document.getElementById('Unit_Cost_as_per_carpet_area_rate').value;
                var Open_Terrace_Area_Front_rate_rs = document.getElementById('Open_Terrace_Area_Front_rate').value;
                var Open_Terrace_Area_Back_rate_rs = document.getElementById('Open_Terrace_Area_Back_rate').value;
                var Car_Porch_Area_rate_rs = document.getElementById('Car_Porch_Area_rate').value;
                var Wash_Area_G_F_rate_rs = document.getElementById('Wash_Area_G_F_rate').value;
                var Coveres_Balcony_Area_rate = arg * Coveres_Balcony_Area_size * 10.76; //result_2

                var gst = Number(document.getElementById("gst").value);
                var gsttax2 = Coveres_Balcony_Area_rate * gst / 100;
                document.getElementById('Coveres_Balcony_Area_rate_gst').value = gsttax2.toFixed(2);

                var Tencoma_Coveres_Balcony_Area_rate = arg * 10.76;

                var Unit_Cost_as_per_carpet_area_rate_gst = document.getElementById('Unit_Cost_as_per_carpet_area_rate_gst').value;
                var Open_Terrace_Area_Front_rate_gst = document.getElementById('Open_Terrace_Area_Front_rate_gst').value;
                var Open_Terrace_Area_Back_rate_gst = document.getElementById('Open_Terrace_Area_Back_rate_gst').value;
                var Car_Porch_Area_rate_gst = document.getElementById('Car_Porch_Area_rate_gst').value;
                var Wash_Area_G_F_rate_gst = document.getElementById('Wash_Area_G_F_rate_gst').value;


                var charge_amt = document.getElementById('charge_amt').value;

                document.getElementById('Coveres_Balcony_Area_rate').value = Coveres_Balcony_Area_rate.toFixed(2);
                document.getElementById('tencoma_balcony_area').value = Tencoma_Coveres_Balcony_Area_rate.toFixed(2);
                document.getElementById('final_total').value = (parseFloat(Unit_Cost_as_per_carpet_area_rs) + parseFloat(Coveres_Balcony_Area_rate) + parseFloat(Open_Terrace_Area_Front_rate_rs) + parseFloat(Open_Terrace_Area_Back_rate_rs) + parseFloat(Car_Porch_Area_rate_rs) + parseFloat(Wash_Area_G_F_rate_rs)).toFixed(2);

                document.getElementById('total1').value = (parseFloat(Unit_Cost_as_per_carpet_area_rate_gst) + parseFloat(gsttax2) + parseFloat(Open_Terrace_Area_Front_rate_gst) + parseFloat(Open_Terrace_Area_Back_rate_gst) + parseFloat(Car_Porch_Area_rate_gst) + parseFloat(Wash_Area_G_F_rate_gst)).toFixed(2);


                document.getElementById('Cost_payable_to_company').value = (parseFloat(charge_amt) + parseFloat(Unit_Cost_as_per_carpet_area_rs) + parseFloat(Coveres_Balcony_Area_rate) + parseFloat(Open_Terrace_Area_Front_rate_rs) + parseFloat(Open_Terrace_Area_Back_rate_rs) + parseFloat(Car_Porch_Area_rate_rs) + parseFloat(Wash_Area_G_F_rate_rs) + parseFloat(Unit_Cost_as_per_carpet_area_rate_gst) + parseFloat(gsttax2) + parseFloat(Open_Terrace_Area_Front_rate_gst) + parseFloat(Open_Terrace_Area_Back_rate_gst) + parseFloat(Car_Porch_Area_rate_gst) + parseFloat(Wash_Area_G_F_rate_gst)).toFixed(2);

                document.getElementById('total_cost').value = (parseFloat(charge_amt) + parseFloat(Unit_Cost_as_per_carpet_area_rs) + parseFloat(Coveres_Balcony_Area_rate) + parseFloat(Open_Terrace_Area_Front_rate_rs) + parseFloat(Open_Terrace_Area_Back_rate_rs) + parseFloat(Car_Porch_Area_rate_rs) + parseFloat(Wash_Area_G_F_rate_rs) + parseFloat(Unit_Cost_as_per_carpet_area_rate_gst) + parseFloat(gsttax2) + parseFloat(Open_Terrace_Area_Front_rate_gst) + parseFloat(Open_Terrace_Area_Back_rate_gst) + parseFloat(Car_Porch_Area_rate_gst) + parseFloat(Wash_Area_G_F_rate_gst)).toFixed(2);


            }
            function calculate_Open_Terrace_Area_Front(arg)
            {
                var Open_Terrace_Area_Front_size = document.getElementById('Open_Terrace_Area_Front_size').value;
                var Coveres_Balcony_Area_rate_rs = document.getElementById('Coveres_Balcony_Area_rate').value;
                var Unit_Cost_as_per_carpet_area_rs = document.getElementById('Unit_Cost_as_per_carpet_area_rate').value;
                var Open_Terrace_Area_Back_rate_rs = document.getElementById('Open_Terrace_Area_Back_rate').value;
                var Car_Porch_Area_rate_rs = document.getElementById('Car_Porch_Area_rate').value;
                var Wash_Area_G_F_rate_rs = document.getElementById('Wash_Area_G_F_rate').value;
                var Open_Terrace_Area_Front_rate = arg * Open_Terrace_Area_Front_size * 10.76; //result_3

                var gst = Number(document.getElementById("gst").value);
                var gsttax3 = Open_Terrace_Area_Front_rate * gst / 100;
                document.getElementById('Open_Terrace_Area_Front_rate_gst').value = gsttax3.toFixed(2);

                var Tencoma_Open_Terrace_Area_Front_rate = arg * 10.76;

                var Unit_Cost_as_per_carpet_area_rate_gst = document.getElementById('Unit_Cost_as_per_carpet_area_rate_gst').value;
                var Coveres_Balcony_Area_rate_gst = document.getElementById('Coveres_Balcony_Area_rate_gst').value;
                var Open_Terrace_Area_Back_rate_gst = document.getElementById('Open_Terrace_Area_Back_rate_gst').value;
                var Car_Porch_Area_rate_gst = document.getElementById('Car_Porch_Area_rate_gst').value;
                var Wash_Area_G_F_rate_gst = document.getElementById('Wash_Area_G_F_rate_gst').value;

                var charge_amt = document.getElementById('charge_amt').value;


                document.getElementById('Open_Terrace_Area_Front_rate').value = Open_Terrace_Area_Front_rate.toFixed(2);
                document.getElementById('tencoma_open_terrance_front').value = Tencoma_Open_Terrace_Area_Front_rate.toFixed(2);
                document.getElementById('final_total').value = (parseFloat(Unit_Cost_as_per_carpet_area_rs) + parseFloat(Coveres_Balcony_Area_rate_rs) + parseFloat(Open_Terrace_Area_Front_rate) + parseFloat(Open_Terrace_Area_Back_rate_rs) + parseFloat(Car_Porch_Area_rate_rs) + parseFloat(Wash_Area_G_F_rate_rs)).toFixed(2);

                document.getElementById('total1').value = (parseFloat(Unit_Cost_as_per_carpet_area_rate_gst) + parseFloat(gsttax3) + parseFloat(Coveres_Balcony_Area_rate_gst) + parseFloat(Open_Terrace_Area_Back_rate_gst) + parseFloat(Car_Porch_Area_rate_gst) + parseFloat(Wash_Area_G_F_rate_gst)).toFixed(2);


                document.getElementById('Cost_payable_to_company').value = (parseFloat(charge_amt) + parseFloat(Unit_Cost_as_per_carpet_area_rs) + parseFloat(Coveres_Balcony_Area_rate_rs) + parseFloat(Open_Terrace_Area_Front_rate) + parseFloat(Open_Terrace_Area_Back_rate_rs) + parseFloat(Car_Porch_Area_rate_rs) + parseFloat(Wash_Area_G_F_rate_rs) + parseFloat(Unit_Cost_as_per_carpet_area_rate_gst) + parseFloat(gsttax3) + parseFloat(Coveres_Balcony_Area_rate_gst) + parseFloat(Open_Terrace_Area_Back_rate_gst) + parseFloat(Car_Porch_Area_rate_gst) + parseFloat(Wash_Area_G_F_rate_gst)).toFixed(2);

                document.getElementById('total_cost').value = (parseFloat(charge_amt) + parseFloat(Unit_Cost_as_per_carpet_area_rs) + parseFloat(Coveres_Balcony_Area_rate_rs) + parseFloat(Open_Terrace_Area_Front_rate) + parseFloat(Open_Terrace_Area_Back_rate_rs) + parseFloat(Car_Porch_Area_rate_rs) + parseFloat(Wash_Area_G_F_rate_rs) + parseFloat(Unit_Cost_as_per_carpet_area_rate_gst) + parseFloat(gsttax3) + parseFloat(Coveres_Balcony_Area_rate_gst) + parseFloat(Open_Terrace_Area_Back_rate_gst) + parseFloat(Car_Porch_Area_rate_gst) + parseFloat(Wash_Area_G_F_rate_gst)).toFixed(2);


            }
            function calculate_Open_Terrace_Area_Back(arg)
            {
                var Open_Terrace_Area_Back_size = document.getElementById('Open_Terrace_Area_Back_size').value;
                var Open_Terrace_Area_Front_size_rs = document.getElementById('Open_Terrace_Area_Front_rate').value;
                var Coveres_Balcony_Area_rate_rs = document.getElementById('Coveres_Balcony_Area_rate').value;
                var Unit_Cost_as_per_carpet_area_rs = document.getElementById('Unit_Cost_as_per_carpet_area_rate').value;
                var Car_Porch_Area_rate_rs = document.getElementById('Car_Porch_Area_rate').value;
                var Wash_Area_G_F_rate_rs = document.getElementById('Wash_Area_G_F_rate').value;
                var Open_Terrace_Area_Back_rate = arg * Open_Terrace_Area_Back_size * 10.76;//result_4

                var gst = Number(document.getElementById("gst").value);
                var gsttax4 = Open_Terrace_Area_Back_rate * gst / 100;
                document.getElementById('Open_Terrace_Area_Back_rate_gst').value = gsttax4.toFixed(2);

                var Tencoma_Open_Terrace_Area_Back_rate = arg * 10.76;

                var Unit_Cost_as_per_carpet_area_rate_gst = document.getElementById('Unit_Cost_as_per_carpet_area_rate_gst').value;
                var Coveres_Balcony_Area_rate_gst = document.getElementById('Coveres_Balcony_Area_rate_gst').value;
                var Open_Terrace_Area_Front_rate_gst = document.getElementById('Open_Terrace_Area_Front_rate_gst').value;
                var Car_Porch_Area_rate_gst = document.getElementById('Car_Porch_Area_rate_gst').value;
                var Wash_Area_G_F_rate_gst = document.getElementById('Wash_Area_G_F_rate_gst').value;

                var charge_amt = document.getElementById('charge_amt').value;


                document.getElementById('Open_Terrace_Area_Back_rate').value = Open_Terrace_Area_Back_rate.toFixed(2);
                document.getElementById('tencoma_open_terrance_back').value = Tencoma_Open_Terrace_Area_Back_rate.toFixed(2);
                document.getElementById('final_total').value = (parseFloat(Unit_Cost_as_per_carpet_area_rs) + parseFloat(Coveres_Balcony_Area_rate_rs) + parseFloat(Open_Terrace_Area_Front_size_rs) + parseFloat(Open_Terrace_Area_Back_rate) + parseFloat(Car_Porch_Area_rate_rs) + parseFloat(Wash_Area_G_F_rate_rs)).toFixed(2);

                document.getElementById('total1').value = (parseFloat(Unit_Cost_as_per_carpet_area_rate_gst) + parseFloat(gsttax4) + parseFloat(Coveres_Balcony_Area_rate_gst) + parseFloat(Open_Terrace_Area_Front_rate_gst) + parseFloat(Car_Porch_Area_rate_gst) + parseFloat(Wash_Area_G_F_rate_gst)).toFixed(2);

                document.getElementById('Cost_payable_to_company').value = (parseFloat(charge_amt) + parseFloat(Unit_Cost_as_per_carpet_area_rs) + parseFloat(Coveres_Balcony_Area_rate_rs) + parseFloat(Open_Terrace_Area_Front_size_rs) + parseFloat(Open_Terrace_Area_Back_rate) + parseFloat(Car_Porch_Area_rate_rs) + parseFloat(Wash_Area_G_F_rate_rs) + parseFloat(Unit_Cost_as_per_carpet_area_rate_gst) + parseFloat(gsttax4) + parseFloat(Coveres_Balcony_Area_rate_gst) + parseFloat(Open_Terrace_Area_Front_rate_gst) + parseFloat(Car_Porch_Area_rate_gst) + parseFloat(Wash_Area_G_F_rate_gst)).toFixed(2);


                document.getElementById('total_cost').value = (parseFloat(charge_amt) + parseFloat(Unit_Cost_as_per_carpet_area_rs) + parseFloat(Coveres_Balcony_Area_rate_rs) + parseFloat(Open_Terrace_Area_Front_size_rs) + parseFloat(Open_Terrace_Area_Back_rate) + parseFloat(Car_Porch_Area_rate_rs) + parseFloat(Wash_Area_G_F_rate_rs) + parseFloat(Unit_Cost_as_per_carpet_area_rate_gst) + parseFloat(gsttax4) + parseFloat(Coveres_Balcony_Area_rate_gst) + parseFloat(Open_Terrace_Area_Front_rate_gst) + parseFloat(Car_Porch_Area_rate_gst) + parseFloat(Wash_Area_G_F_rate_gst)).toFixed(2);

            }
            function calculate_Car_Porch_Area(arg)
            {
                var Car_Porch_Area_size = document.getElementById('Car_Porch_Area_size').value;
                var Open_Terrace_Area_Back_size_rs = document.getElementById('Open_Terrace_Area_Back_rate').value;
                var Open_Terrace_Area_Front_size_rs = document.getElementById('Open_Terrace_Area_Front_rate').value;
                var Coveres_Balcony_Area_rate_rs = document.getElementById('Coveres_Balcony_Area_rate').value;
                var Unit_Cost_as_per_carpet_area_rs = document.getElementById('Unit_Cost_as_per_carpet_area_rate').value;
                var Wash_Area_G_F_rate_rs = document.getElementById('Wash_Area_G_F_rate').value;
                var Car_Porch_Area_rate = arg * Car_Porch_Area_size * 10.76;//result_5

                var gst = Number(document.getElementById("gst").value);
                var gsttax5 = Car_Porch_Area_rate * gst / 100;
                document.getElementById('Car_Porch_Area_rate_gst').value = gsttax5.toFixed(2);


                var Tencoma_Car_Porch_Area_rate = arg * 10.76;


                var Unit_Cost_as_per_carpet_area_rate_gst = document.getElementById('Unit_Cost_as_per_carpet_area_rate_gst').value;
                var Coveres_Balcony_Area_rate_gst = document.getElementById('Coveres_Balcony_Area_rate_gst').value;
                var Open_Terrace_Area_Front_rate_gst = document.getElementById('Open_Terrace_Area_Front_rate_gst').value;
                var Open_Terrace_Area_Back_rate_gst = document.getElementById('Open_Terrace_Area_Back_rate_gst').value;
                var Wash_Area_G_F_rate_gst = document.getElementById('Wash_Area_G_F_rate_gst').value;

                var charge_amt = document.getElementById('charge_amt').value;


                document.getElementById('Car_Porch_Area_rate').value = Car_Porch_Area_rate.toFixed(2);
                document.getElementById('tencoma_car_porch_area').value = Tencoma_Car_Porch_Area_rate.toFixed(2);
                document.getElementById('final_total').value = (parseFloat(Unit_Cost_as_per_carpet_area_rs) + parseFloat(Coveres_Balcony_Area_rate_rs) + parseFloat(Open_Terrace_Area_Front_size_rs) + parseFloat(Open_Terrace_Area_Back_size_rs) + parseFloat(Car_Porch_Area_rate) + parseFloat(Wash_Area_G_F_rate_rs)).toFixed(2);

                document.getElementById('total1').value = (parseFloat(Unit_Cost_as_per_carpet_area_rate_gst) + parseFloat(gsttax5) + parseFloat(Coveres_Balcony_Area_rate_gst) + parseFloat(Open_Terrace_Area_Front_rate_gst) + parseFloat(Open_Terrace_Area_Back_rate_gst) + parseFloat(Wash_Area_G_F_rate_gst)).toFixed(2);


                document.getElementById('Cost_payable_to_company').value = (parseFloat(charge_amt) + parseFloat(Unit_Cost_as_per_carpet_area_rs) + parseFloat(Coveres_Balcony_Area_rate_rs) + parseFloat(Open_Terrace_Area_Front_size_rs) + parseFloat(Open_Terrace_Area_Back_size_rs) + parseFloat(Car_Porch_Area_rate) + parseFloat(Wash_Area_G_F_rate_rs) + parseFloat(Unit_Cost_as_per_carpet_area_rate_gst) + parseFloat(gsttax5) + parseFloat(Coveres_Balcony_Area_rate_gst) + parseFloat(Open_Terrace_Area_Front_rate_gst) + parseFloat(Open_Terrace_Area_Back_rate_gst) + parseFloat(Wash_Area_G_F_rate_gst)).toFixed(2);

                document.getElementById('total_cost').value = (parseFloat(charge_amt) + parseFloat(Unit_Cost_as_per_carpet_area_rs) + parseFloat(Coveres_Balcony_Area_rate_rs) + parseFloat(Open_Terrace_Area_Front_size_rs) + parseFloat(Open_Terrace_Area_Back_size_rs) + parseFloat(Car_Porch_Area_rate) + parseFloat(Wash_Area_G_F_rate_rs) + parseFloat(Unit_Cost_as_per_carpet_area_rate_gst) + parseFloat(gsttax5) + parseFloat(Coveres_Balcony_Area_rate_gst) + parseFloat(Open_Terrace_Area_Front_rate_gst) + parseFloat(Open_Terrace_Area_Back_rate_gst) + parseFloat(Wash_Area_G_F_rate_gst)).toFixed(2);

            }
            function calculate_Wash_Area_G_F(arg)
            {
                var Wash_Area_G_F_size = document.getElementById('Wash_Area_G_F_size').value;
                var Car_Porch_Area_size_rs = document.getElementById('Car_Porch_Area_rate').value;
                var Open_Terrace_Area_Back_size_rs = document.getElementById('Open_Terrace_Area_Back_rate').value;
                var Open_Terrace_Area_Front_size_rs = document.getElementById('Open_Terrace_Area_Front_rate').value;
                var Coveres_Balcony_Area_rate_rs = document.getElementById('Coveres_Balcony_Area_rate').value;
                var Unit_Cost_as_per_carpet_area_rs = document.getElementById('Unit_Cost_as_per_carpet_area_rate').value;
                var Wash_Area_G_F_rate = arg * Wash_Area_G_F_size * 10.76;//result_6

                var gst = Number(document.getElementById("gst").value);
                var gsttax6 = Wash_Area_G_F_rate * gst / 100;
                document.getElementById('Wash_Area_G_F_rate_gst').value = gsttax6.toFixed(2);

                var Tencoma_Wash_Area_G_F_rate = arg * 10.76;


                var Unit_Cost_as_per_carpet_area_rate_gst = document.getElementById('Unit_Cost_as_per_carpet_area_rate_gst').value;
                var Coveres_Balcony_Area_rate_gst = document.getElementById('Coveres_Balcony_Area_rate_gst').value;
                var Open_Terrace_Area_Front_rate_gst = document.getElementById('Open_Terrace_Area_Front_rate_gst').value;
                var Open_Terrace_Area_Back_rate_gst = document.getElementById('Open_Terrace_Area_Back_rate_gst').value;
                var Car_Porch_Area_rate_gst = document.getElementById('Car_Porch_Area_rate_gst').value;


                var charge_amt = document.getElementById('charge_amt').value;

                document.getElementById('Wash_Area_G_F_rate').value = Wash_Area_G_F_rate.toFixed(2);
                document.getElementById('tencoma_wash_area').value = Tencoma_Wash_Area_G_F_rate.toFixed(2);
                document.getElementById('final_total').value = (parseFloat(Unit_Cost_as_per_carpet_area_rs) + parseFloat(Coveres_Balcony_Area_rate_rs) + parseFloat(Open_Terrace_Area_Front_size_rs) + parseFloat(Open_Terrace_Area_Back_size_rs) + parseFloat(Car_Porch_Area_size_rs) + parseFloat(Wash_Area_G_F_rate)).toFixed(2);

                document.getElementById('total1').value = (parseFloat(Unit_Cost_as_per_carpet_area_rate_gst) + parseFloat(gsttax6) + parseFloat(Coveres_Balcony_Area_rate_gst) + parseFloat(Open_Terrace_Area_Front_rate_gst) + parseFloat(Open_Terrace_Area_Back_rate_gst) + parseFloat(Car_Porch_Area_rate_gst)).toFixed(2);

                document.getElementById('Cost_payable_to_company').value = (parseFloat(charge_amt) + parseFloat(Unit_Cost_as_per_carpet_area_rs) + parseFloat(Coveres_Balcony_Area_rate_rs) + parseFloat(Open_Terrace_Area_Front_size_rs) + parseFloat(Open_Terrace_Area_Back_size_rs) + parseFloat(Car_Porch_Area_size_rs) + parseFloat(Wash_Area_G_F_rate) + parseFloat(Unit_Cost_as_per_carpet_area_rate_gst) + parseFloat(gsttax6) + parseFloat(Coveres_Balcony_Area_rate_gst) + parseFloat(Open_Terrace_Area_Front_rate_gst) + parseFloat(Open_Terrace_Area_Back_rate_gst) + parseFloat(Car_Porch_Area_rate_gst)).toFixed(2);

                document.getElementById('total_cost').value = (parseFloat(charge_amt) + parseFloat(Unit_Cost_as_per_carpet_area_rs) + parseFloat(Coveres_Balcony_Area_rate_rs) + parseFloat(Open_Terrace_Area_Front_size_rs) + parseFloat(Open_Terrace_Area_Back_size_rs) + parseFloat(Car_Porch_Area_size_rs) + parseFloat(Wash_Area_G_F_rate) + parseFloat(Unit_Cost_as_per_carpet_area_rate_gst) + parseFloat(gsttax6) + parseFloat(Coveres_Balcony_Area_rate_gst) + parseFloat(Open_Terrace_Area_Front_rate_gst) + parseFloat(Open_Terrace_Area_Back_rate_gst) + parseFloat(Car_Porch_Area_rate_gst)).toFixed(2);

            }
            function calculate_discount(arg)
            {
               // alert(arg);
                var Cost_payable_to_company_rs = document.getElementById('Cost_payable_to_company').value;
                //alert(Cost_payable_to_company_rs);

                var discount_rs = Cost_payable_to_company_rs - arg;

                document.getElementById('total_cost').value = discount_rs.toFixed(2);
                 document.getElementById("premium_location_charges").readOnly = true;
                document.getElementById("other_charges").readOnly = true;
                
 
            }
             function makethisdecimal(id)
                {
                    var onen = Number(document.getElementById(id).value);
                    var a = onen.toFixed(2);
                    document.getElementById(id).value = a;

                }
             function cleardiscount()
                                {
                                    document.getElementById('discount').value='00';
                                    
                                    document.getElementById('other_charges').readOnly = true;
                                    document.getElementById('premium_location_charges').readOnly=false;
                                   // var prloccharge = document.getElementById('premium_location_charges').value;
                                   // var disc = document.getElementById('discount').value;
                                   // calculate_premium_location_charges(prloccharge);
                                   // calculate_discount(disc);
                                }

           function cleasdiscountpremium()
           {
               document.getElementById('discount').value='00';
               document.getElementById('discount').readOnly = true;
               document.getElementById('premium_location_charges').value='00';
               document.getElementById('other_charges').readOnly = false;
               var otherchargeval = document.getElementById('other_charges').value;
               calculate_other_fix_charges(otherchargeval);
           }
           function clearabovetwo()
           {
               document.getElementById('discount').readOnly=false;
               document.getElementById('premium_location_charges').readOnly=true;
               
               document.getElementById('other_charges').readOnly = true;
               
           }

            function calculate_other_fix_charges(arg)

            {
                var charge_amt = document.getElementById('charge_amt').value;

                var Car_Porch_Area_size_rs = document.getElementById('Car_Porch_Area_rate').value;
                var Open_Terrace_Area_Back_size_rs = document.getElementById('Open_Terrace_Area_Back_rate').value;
                var Open_Terrace_Area_Front_size_rs = document.getElementById('Open_Terrace_Area_Front_rate').value;
                var Coveres_Balcony_Area_rate_rs = document.getElementById('Coveres_Balcony_Area_rate').value;
                var Unit_Cost_as_per_carpet_area_rs = document.getElementById('Unit_Cost_as_per_carpet_area_rate').value;
                var Wash_Area_G_F_rate_rs = document.getElementById('Wash_Area_G_F_rate').value;

                var gst = Number(document.getElementById("gst").value);


                var gsttax7 = arg * gst / 100;




                document.getElementById('extra_charge_gst').value = gsttax7.toFixed(2);


                var Unit_Cost_as_per_carpet_area_rate_gst = document.getElementById('Unit_Cost_as_per_carpet_area_rate_gst').value;
                var Coveres_Balcony_Area_rate_gst = document.getElementById('Coveres_Balcony_Area_rate_gst').value;
                var Open_Terrace_Area_Front_rate_gst = document.getElementById('Open_Terrace_Area_Front_rate_gst').value;
                var Open_Terrace_Area_Back_rate_gst = document.getElementById('Open_Terrace_Area_Back_rate_gst').value;
                var Car_Porch_Area_rate_gst = document.getElementById('Car_Porch_Area_rate_gst').value;
                var Wash_Area_G_F_rate_gst = document.getElementById('Wash_Area_G_F_rate_gst').value;

                document.getElementById('total1').value = (parseFloat(gsttax7) + parseFloat(Unit_Cost_as_per_carpet_area_rate_gst) + parseFloat(Wash_Area_G_F_rate_gst) + parseFloat(Coveres_Balcony_Area_rate_gst) + parseFloat(Open_Terrace_Area_Front_rate_gst) + parseFloat(Open_Terrace_Area_Back_rate_gst) + parseFloat(Car_Porch_Area_rate_gst)).toFixed(2);



                document.getElementById('Cost_payable_to_company').value = (parseFloat(arg) + parseFloat(charge_amt) + parseFloat(Unit_Cost_as_per_carpet_area_rs) + parseFloat(Coveres_Balcony_Area_rate_rs) + parseFloat(Open_Terrace_Area_Front_size_rs) + parseFloat(Open_Terrace_Area_Back_size_rs) + parseFloat(Car_Porch_Area_size_rs) + parseFloat(Wash_Area_G_F_rate_rs) + parseFloat(Unit_Cost_as_per_carpet_area_rate_gst) + parseFloat(gsttax7) + parseFloat(Coveres_Balcony_Area_rate_gst) + parseFloat(Open_Terrace_Area_Front_rate_gst) + parseFloat(Open_Terrace_Area_Back_rate_gst) + parseFloat(Wash_Area_G_F_rate_gst) + parseFloat(Car_Porch_Area_rate_gst)).toFixed(2);

                document.getElementById('total_cost').value = (parseFloat(arg) + parseFloat(charge_amt) + parseFloat(Unit_Cost_as_per_carpet_area_rs) + parseFloat(Coveres_Balcony_Area_rate_rs) + parseFloat(Open_Terrace_Area_Front_size_rs) + parseFloat(Open_Terrace_Area_Back_size_rs) + parseFloat(Car_Porch_Area_size_rs) + parseFloat(Wash_Area_G_F_rate_rs) + parseFloat(Unit_Cost_as_per_carpet_area_rate_gst) + parseFloat(gsttax7) + parseFloat(Coveres_Balcony_Area_rate_gst) + parseFloat(Open_Terrace_Area_Front_rate_gst) + parseFloat(Open_Terrace_Area_Back_rate_gst) + parseFloat(Wash_Area_G_F_rate_gst) + parseFloat(Car_Porch_Area_rate_gst)).toFixed(2);
              document.getElementById("premium_location_charges").readOnly = false; 
    
    }

            function calculate_premium_location_charges(arg)
            {


                var charge_amt = document.getElementById('charge_amt').value;
                var Car_Porch_Area_size_rs = document.getElementById('Car_Porch_Area_rate').value;
                var Open_Terrace_Area_Back_size_rs = document.getElementById('Open_Terrace_Area_Back_rate').value;
                var Open_Terrace_Area_Front_size_rs = document.getElementById('Open_Terrace_Area_Front_rate').value;
                var Coveres_Balcony_Area_rate_rs = document.getElementById('Coveres_Balcony_Area_rate').value;
                var Unit_Cost_as_per_carpet_area_rs = document.getElementById('Unit_Cost_as_per_carpet_area_rate').value;
                var Wash_Area_G_F_rate_rs = document.getElementById('Wash_Area_G_F_rate').value;
                var other_charges = document.getElementById('other_charges').value;



                var gst = Number(document.getElementById("gst").value);

                var gsttax8 = arg * gst / 100;


                document.getElementById('premium_location_charges_gst').value = gsttax8.toFixed(2);


                var Unit_Cost_as_per_carpet_area_rate_gst = document.getElementById('Unit_Cost_as_per_carpet_area_rate_gst').value;
                var Coveres_Balcony_Area_rate_gst = document.getElementById('Coveres_Balcony_Area_rate_gst').value;
                var Open_Terrace_Area_Front_rate_gst = document.getElementById('Open_Terrace_Area_Front_rate_gst').value;
                var Open_Terrace_Area_Back_rate_gst = document.getElementById('Open_Terrace_Area_Back_rate_gst').value;
                var Car_Porch_Area_rate_gst = document.getElementById('Car_Porch_Area_rate_gst').value;
                var Wash_Area_G_F_rate_gst = document.getElementById('Wash_Area_G_F_rate_gst').value;
                var extra_charge_gst = document.getElementById('extra_charge_gst').value;




                document.getElementById('total1').value = (parseFloat(gsttax8) + parseFloat(extra_charge_gst) + parseFloat(Unit_Cost_as_per_carpet_area_rate_gst) + parseFloat(Wash_Area_G_F_rate_gst) + parseFloat(Coveres_Balcony_Area_rate_gst) + parseFloat(Open_Terrace_Area_Front_rate_gst) + parseFloat(Open_Terrace_Area_Back_rate_gst) + parseFloat(Car_Porch_Area_rate_gst)).toFixed(2);



                document.getElementById('Cost_payable_to_company').value = (parseFloat(other_charges)+ parseFloat(arg) + parseFloat(charge_amt) + parseFloat(Unit_Cost_as_per_carpet_area_rs) + parseFloat(Coveres_Balcony_Area_rate_rs) + parseFloat(Open_Terrace_Area_Front_size_rs) + parseFloat(Open_Terrace_Area_Back_size_rs) + parseFloat(Car_Porch_Area_size_rs) + parseFloat(Wash_Area_G_F_rate_rs) + parseFloat(Unit_Cost_as_per_carpet_area_rate_gst) + parseFloat(gsttax8) + parseFloat(Coveres_Balcony_Area_rate_gst) + parseFloat(Open_Terrace_Area_Front_rate_gst) + parseFloat(Open_Terrace_Area_Back_rate_gst) + parseFloat(Wash_Area_G_F_rate_gst) + parseFloat(Car_Porch_Area_rate_gst) + parseFloat(extra_charge_gst)).toFixed(2);

                document.getElementById('total_cost').value = (parseFloat(other_charges)+ parseFloat(arg) + parseFloat(charge_amt) + parseFloat(Unit_Cost_as_per_carpet_area_rs) + parseFloat(Coveres_Balcony_Area_rate_rs) + parseFloat(Open_Terrace_Area_Front_size_rs) + parseFloat(Open_Terrace_Area_Back_size_rs) + parseFloat(Car_Porch_Area_size_rs) + parseFloat(Wash_Area_G_F_rate_rs) + parseFloat(Unit_Cost_as_per_carpet_area_rate_gst) + parseFloat(gsttax8) + parseFloat(Coveres_Balcony_Area_rate_gst) + parseFloat(Open_Terrace_Area_Front_rate_gst) + parseFloat(Open_Terrace_Area_Back_rate_gst) + parseFloat(Wash_Area_G_F_rate_gst) + parseFloat(Car_Porch_Area_rate_gst) + parseFloat(extra_charge_gst)).toFixed(2);
     document.getElementById("discount").readOnly = false; 



            }

            $(document).ready(function ()
            {
                 document.getElementById("premium_location_charges").readOnly = true; 
                    document.getElementById("discount").readOnly = true; 
                $('#btnEditarea').click(function ()
                {
                    $(".inputborder").addClass("border");
                    $(".inputborder").removeAttr("readonly");
                });

            });
            $(document).ready(function ()
            {
                $('#btnEditrate').click(function ()
                {
                    $(".inputborder").addClass("border");
                    $(".inputborder").removeAttr("readonly");
                });

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

            $(document).ready(function () {
                $('#toppageheader').html('Cost Calculation');
                $("a:contains(Cost Calculation)").parent().addClass('active');
            });







            function ValidationEvent()
            {

                var total_cost = document.forms["Form"]["total_cost"].value;
                if (total_cost == null || total_cost == "") {
                    alert("Please click the Get Total button");
                    return false;
                }
            }
            function showthis() {
                alert(document.getElementById('Unit_Cost_as_per_carpet_area_rate').value);
            }
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

        </script>
    </body>

</html>
