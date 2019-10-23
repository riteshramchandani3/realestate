<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
    <head>
        <title>Sheet One Other</title>
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
                width: 80px;
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
            <div id="printable">
                <div class="container">
                    
              
                    <?php   '<br><br><br>'.$_GET['id']; ?>
                    <form class="form-inline" action="<?php echo site_url('pre_sales/get_visitor_Input'); ?>" method="post" name="Form"  onsubmit="return ValidationEvent()">

                         <?php
                                        foreach ($this->Pre_sales_model->get_cost_max_id() as $row) {
                                            ?>
                                        <?php    $max=  $row->id ?>
                                        <?php    $max_id =$max+1; ?>
                                        <?php } ?>
                        <input type="hidden" name="max_id" value="<?php echo $max_id; ?>" />
                        <input type="hidden" id="currentdate" name="currentdate" value="<?php //echo date('Y-m-d'); ?>">
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
                            <?php //$plot_size_mtr = $row->plot_size_mtr; ?>
                            <?php //$plot_size_ft = $row->plot_size_ft; ?>
                        <?php } ?>

                        <input type="hidden" value="<?php echo $id; ?>" name="prospect_id" />
                        <input  id="gst" type="hidden" value="<?php echo $result5 ?>"/>
                        <input   type="hidden" name="plot_size_ft" value="<?php //echo $plot_size_ft ?>"/>
                        <input   type="hidden" name="category" value="<?php //echo $category ?>"/>

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
                                    <td class="col-xs-12 text-center" colspan="6" style="background:#92D050; color: #FF0000;">
                                        <h3 style="font-weight: 600 !important;">SHEET NO. 1</h3> 
                                        <a href="javascript: history.go(-1)" class="btn btn-primary pull-right clickable non-printable" role="button" style="position: absolute; float: right;left: 85%;top: 33px; color: #fff;">Back</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Name
                                    </td>
                                    <td colspan="2">
                                        <input type="text" class="form-control" name="name" value="<?php echo $name; ?>"  readonly/> 
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
                                        <?php //echo $project_name; ?> <?php echo $block; ?>
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
                                         <input class="form-control" name="display" value="0" size="25" style="width:65%;">
                                    <input type="button" class="btn btn-primary btn btn-sm" value="OK" name="enter" onClick="if (checkNum(this.form.display.value)) { compute(this.form) }">
                                        <!--input type="hidden"  class="inputborder" name="plot_size_mtr" readonly/-->
                                    
                                       
                                        
                                        <CENTER class="hidden-lg">
                                                                                  
                                            <input type="text" value="   exp  " onClick="if (checkNum(this.form.display.value)) {
                                                exp(this.form)
                                                }">
                                            <input type="text" value="    7    " onClick="addChar(this.form.display, '7')">
                                            <input type="text" value="    8    " onClick="addChar(this.form.display, '8')">
                                            <input type="text" value="    9    " onClick="addChar(this.form.display, '9')">
                                            <input type="text" value="    /    " onClick="addChar(this.form.display, '/')">
                                            <br>
                                            <input type="text" value="   ln    " onClick="if (checkNum(this.form.display.value)) {
                                                ln(this.form)
                                                }">
                                            <input type="text" value="    4    " onClick="addChar(this.form.display, '4')">
                                            <input type="text" value="    5    " onClick="addChar(this.form.display, '5')">
                                            <input type="text" value="    6    " onClick="addChar(this.form.display, '6')">
                                            <input type="text" value="    *    " onClick="addChar(this.form.display, '*')">
                                            <br>
                                            <input type="text" value="   sqrt  " onClick="if (checkNum(this.form.display.value)) {
                                                cos(this.form)}">
                                            <input type="text" value="    1    " onClick="addChar(this.form.display, '1')">
                                            <input type="text" value="    2    " onClick="addChar(this.form.display, '2')">
                                            <input type="text" value="    3    " onClick="addChar(this.form.display, '3')">
                                            <input type="text" value="    -    " onClick="addChar(this.form.display, '-')">
                                            <br>
                                            <input type="text" value="   sq    " onClick="if (checkNum(this.form.display.value)) {
                                                square(this.form)
                                                }">
                                            <input type="text" value="    0    " onClick="addChar(this.form.display, '0')"> 
                                            <input type="text" value="    .    " onClick="addChar(this.form.display, '.')"> 
                                            <input type="text" value="   +/-   " onClick="changeSign(this.form.display)">
                                            <input type="text" value="    +    " onClick="addChar(this.form.display, '+')">
                                            <br>
                                            <input type="text" value="    (    " onClick="addChar(this.form.display, '(')"> 
                                            <input type="text" value="   cos   " onClick="if (checkNum(this.form.display.value)) {
                                                cos(this.form) }">
                                            <input type="text" value="   sin   " onClick="if (checkNum(this.form.display.value)) {
                                                sin(this.form)
                                                }">
                                            <input type="text" value="   tan   " onClick="if (checkNum(this.form.display.value)) {
                                                tan(this.form) }">
                                            <input type="text" value="    )    " onClick="addChar(this.form.display, ')')"> 
                                            <br>
                                            <input type="text" value="   Clear       " onClick="this.form.display.value = 0">
                                            <input type="text" value="   Back Space  " onClick="deleteChar(this.form.display)">
                                            <input type="text" value="   Enter       " name="enter" onClick="if (checkNum(this.form.display.value)) {
                                                compute(this.form)
                                                }">
                                     
                                    </CENTER>
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                </tr>
                                <tr >
                                    <td>
                                        Plot Area
                                    </td>
                                    <td colspan="2">
                                        <input type="text" name="plot_size_ft" class="inputborder" value="<?php //echo $carpet_area; ?>"  />
                                        <input type="hidden"   />
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
                                        <input type="text" class="inputborder" value="<?php //echo round($carpet_area, 2); ?>"   />
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
                                        <input type="text" class="inputborder" value="<?php //echo round($carpet_area * 10.76, 2); ?>" name=""  readonly/>
                                        <input type="hidde" value="<?php //echo $plot_sqft; ?>" name=""  />
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
                                        Unit Cost as per carpet area
                                    </td>

                                    <td>
                                        <input type="text" class="inputborder" id="Unit_Cost_as_per_carpet_area_size" name="cost_carpet_area" value="<?php //echo round($carpet_area, 2); ?>" readonly/> sqmt.
                                        <!--button type="button" class="btn btn-info btn-sm" id="btnEditarea"><i class="fa fa-edit"></i></button-->
                                    </td>
                                    <td>
                                        Rs.<input type="text" class="inputborder" onkeyup="calculate_Unit_Cost_as_per_carpet_area(this.value)" name="cost_ca_ref_rate" value="<?php //echo round($ca_ref_rate * 10.76, 2); ?>" readonly/>
                                        <button type="button" class="btn btn-info btn-sm" id="btnEditrate"><i class="fa fa-edit"></i></button>

                                    </td>
                                    <td>
                                        Rs. <input type="text" id="Unit_Cost_as_per_carpet_area_rate" name="total_unit_cost_as_per_carpet_area" value="<?php // echo round($carpet_area_result, 2); ?>" readonly/>
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                </tr>

                                <tr>

                                    <td>
                                        Coveres Balcony Area(1)
                                    </td>

                                    <td>
                                        <input type="text" class="inputborder" id="Coveres_Balcony_Area_size" name="cost_balcony_area"  readonly /> sqmt.
                                    </td>
                                    <td>
                                        Rs.  <input type="text" class="inputborder" onkeyup="calculate_Coveres_Balcony_Area(this.value)" name="cost_balcony_ref_rate"  readonly/> 
                                    </td>
                                    <td>
                                        Rs. <input type="text" id="Coveres_Balcony_Area_rate" name="total_balcony_area"  readonly/>
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                </tr>

                                <tr>

                                    <td>
                                        Open Terrace Area (Front)
                                    </td>

                                    <td>
                                        <input type="text" class="inputborder" id="Open_Terrace_Area_Front_size" name="cost_open_terrace_area_front"  readonly/> sqmt.
                                    </td>
                                    <td>
                                        Rs. <input type="text" class="inputborder" onkeyup="calculate_Open_Terrace_Area_Front(this.value)" name="cost_open_terrace_front_area_ref_rate"  readonly/> 
                                    </td>
                                    <td>
                                        Rs.    <input type="text" id="Open_Terrace_Area_Front_rate" name="total_open_terrace_area_front" />
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                </tr>

                                <tr>

                                    <td>
                                        Open Terrace Area (Back)
                                    </td>

                                    <td>
                                        <input type="text" class="inputborder" id="Open_Terrace_Area_Back_size" name="cost_open_terrace_area_back"  readonly /> sqmt.
                                    </td>
                                    <td>
                                        Rs.  <input type="text" class="inputborder" onkeyup="calculate_Open_Terrace_Area_Back(this.value)" name="cost_open_terrace_back_area_ref_rate"  readonly/> 
                                    </td>
                                    <td>
                                        Rs. <input type="text" id="Open_Terrace_Area_Back_rate" name="total_open_terrace_area_back" />
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                </tr>
                                <tr>

                                    <td>
                                        Car Porch Area (1)
                                    </td>

                                    <td>
                                        <input type="text" class="inputborder" id="Car_Porch_Area_size" name="cost_car_poarch_area"  readonly/> sqmt.
                                    </td>
                                    <td>
                                        Rs.  <input type="text" class="inputborder" onkeyup="calculate_Car_Porch_Area(this.value)" name="cost_car_poarch_area_ref_rate"  readonly/>
                                    </td>
                                    <td>
                                        Rs.   <input type="text" id="Car_Porch_Area_rate" name="total_car_poarch_area" />
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                </tr>
                                <tr>

                                    <td>
                                        Wash Area G. F. (1)
                                    </td>

                                    <td>
                                        <input type="text" class="inputborder" id="Wash_Area_G_F_size" name="cost_wash_area"  readonly/> sqmt.
                                    </td>
                                    <td>
                                        Rs. <input type="text" class="inputborder" onkeyup="calculate_Wash_Area_G_F(this.value)" name="cost_washarea_ref_rate"  readonly/>
                                    </td>
                                    <td>
                                        Rs.<input type="text" id="Wash_Area_G_F_rate" name="total_wash_area" />
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                </tr>
                                <tr>

                                    <td>
                                        Total
                                    </td>

                                    <td colspan="2">

                                    </td>
                                    <td>
                                        Rs. <input type="text" id="final_total" name="final_total" />
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        GST Tax
                                    </td>

                                    <td colspan="2">

                                    </td>
                                    <td>
                                        Rs. <input type="text" name="gst" id="total1"  readonly/>
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                </tr>

                                <tr>

                                    <td>
                                        Maintainance 5 Years
                                    </td>

                                    <td colspan="2">
                                        Rs. <?php //echo $charge_amt; ?> 
                                    </td>
                                    <td>
                                        Rs. <input type="text" id="charge_amt" value="<?php echo $charge_amount; ?>"  readonly />
                                    </td>
                                    <td>
                                        @18 for GST
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Other Fix Charges
                                    </td>

                                    <td colspan="2">

                                    </td>
                                    <td>
                                        Rs. <input type="text" class="form-control" name="extra_charge"  onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13 || event.charCode == 46) ? null : event.charCode >= 48 && event.charCode <= 57" id="other_charges"  />
                                    </td>
                                    <td>
                                        <textarea cols="3" rows="4" style="width:100%;" class="form-control" name="extra_charge_des"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Premium location charges
                                    </td>

                                    <td colspan="2">

                                    </td>
                                    <td>
                                        Rs. <input type="text" class="form-control" name="premium_location_charges"  onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13 || event.charCode == 46) ? null : event.charCode >= 48 && event.charCode <= 57" id="premium_location_charges"  />
                                    </td>
                                    <td>
                                        <textarea cols="3" rows="4" style="width:100%;" class="form-control" name="premium_location_charges_des"></textarea>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Total Cost
                                    </td>

                                    <td colspan="2">

                                    </td>
                                    <td>
                                        Rs. <input type="text" id='Cost_payable_to_company' name="cost_payble" title="'Total + GST + Other Fix Charges + Maintainance 5 Years + Premium location charges'" value="<?php //echo round($cost_pay = $charge_amount, 2); ?>"  readonly/>
                                        
                                        <input type="hidden"  id="cost_payable_to_com"  readonly/>
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Discount
                                    </td>

                                    <td colspan="2">

                                    </td>
                                    <td>
                                        Rs.  <input type="text" min="1" step="1" class="form-control" id="discount" name="discount" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13 || event.charCode == 46) ? null : event.charCode >= 48 && event.charCode <= 57"/>
                                    </td>
                                    <td>
                                        <div class="non-printable"> <input class="btn btn-info btn-sm btn-3d" type="button"  title="Get Total" onclick="getPrice()" value="Get Total" style="width:100%;"></div>
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
                                    
                                    
                                    
                                    var afterdiscount =  final_rate + other_charges + premium_location_charges;// - discount;
                                    //alert(afterdiscount);
                                    var gsttax = afterdiscount * gst / 100;
                                    
                                    document.getElementById('final_total').value = final_rate .toFixed(2);
                                    
                                    var Cost_payable = charge_amt + final_rate + other_charges + premium_location_charges + gsttax;
                                  //alert(charge_amt+'/'+final_rate+'/'+other_charges+'/'+premium_location_charges+'/'+gsttax);
                                    document.getElementById('Cost_payable_to_company').value = Cost_payable.toFixed(2);
                                    
                                    var total_cost = gsttax + charge_amt + final_rate + other_charges + premium_location_charges - discount .toFixed(2);

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
                                    Total Unit Cost Including GST and Discount
                                </td>

                                <td colspan="2">

                                </td>
                                <td>
                                    <input type="text" name="total_cost" id="total_cost"  readonly/>
                                </td>
                                <td>
                                    <span>Registry<br> + Society<br> + Monthly Operational Charges<br> + Mutation</span>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="7" class="text-center">
                                    Note  Registration charges of Flat registry shall be charged as per actual additionally
                                </td>
                            </tr>
                            <tr>

                                <td colspan="6">
                                    Other Charges to be bourn by the customer
                                </td>
                            </tr>
                            <tr>

                                <td colspan="6">
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
                                &nbsp;<textarea cols="3" rows="4" style="width:100%;" name="discussion" class="form-control"></textarea>
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

            function calculate_other_duplex_size(arg)
            {
                var plot_size_x  = document.getElementById('plot_size_x').value;
                var plot_size_y = arg * plot_size_x;
                document.getElementById('plot_size_xy').value = plot_size_y .toFixed(2);
            }
            function calculate_Unit_Cost_as_per_carpet_area(arg)
            {
                var Unit_Cost_as_per_carpet_area_size = document.getElementById('Unit_Cost_as_per_carpet_area_size').value;
                var Unit_Cost_as_per_carpet_area_rate = arg * Unit_Cost_as_per_carpet_area_size * 10.76;
                document.getElementById('Unit_Cost_as_per_carpet_area_rate').value = Unit_Cost_as_per_carpet_area_rate .toFixed(2);
            }
            function calculate_Coveres_Balcony_Area(arg)
            {
                var Coveres_Balcony_Area_size = document.getElementById('Coveres_Balcony_Area_size').value;
                var Coveres_Balcony_Area_rate = arg * Coveres_Balcony_Area_size * 10.76;
                document.getElementById('Coveres_Balcony_Area_rate').value = Coveres_Balcony_Area_rate .toFixed(2);
            }
            function calculate_Open_Terrace_Area_Front(arg)
            {
                var Open_Terrace_Area_Front_size = document.getElementById('Open_Terrace_Area_Front_size').value;
                var Open_Terrace_Area_Front_rate = arg * Open_Terrace_Area_Front_size * 10.76;
                document.getElementById('Open_Terrace_Area_Front_rate').value = Open_Terrace_Area_Front_rate .toFixed(2);
            }
            function calculate_Open_Terrace_Area_Back(arg)
            {
                var Open_Terrace_Area_Back_size = document.getElementById('Open_Terrace_Area_Back_size').value;
                var Open_Terrace_Area_Back_rate = arg * Open_Terrace_Area_Back_size * 10.76;
                document.getElementById('Open_Terrace_Area_Back_rate').value = Open_Terrace_Area_Back_rate .toFixed(2);
            }
            function calculate_Car_Porch_Area(arg)
            {
                var Car_Porch_Area_size = document.getElementById('Car_Porch_Area_size').value;
                var Car_Porch_Area_rate = arg * Car_Porch_Area_size * 10.76;
                document.getElementById('Car_Porch_Area_rate').value = Car_Porch_Area_rate .toFixed(2);
            }
            function calculate_Wash_Area_G_F(arg)
            {
                var Wash_Area_G_F_size = document.getElementById('Wash_Area_G_F_size').value;
                var Wash_Area_G_F_rate = arg * Wash_Area_G_F_size * 10.76;
                document.getElementById('Wash_Area_G_F_rate').value = Wash_Area_G_F_rate .toFixed(2);
            }

            $(document).ready(function ()
            {
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
            function showthis(){
               alert( document.getElementById('Unit_Cost_as_per_carpet_area_rate').value);
            }
        </script>
        
        <script>

                                            // validates text only
                                            function Validate(txt) {
                                            txt.value = txt.value.replace(/[^a-zA-Z-'\n\r.{ }]+/g, '');
                                            }

                                            function buttonenable() {
                                            alert('helo');
                                            document.getElementById("submit").disabled = false;
                                            }


                                            function show_div() {
                                            // check if project details exist already
                                            //alert('Im here!!');
                                            var pid = $('#project_select').val();
                                            var block = $('#block_selectsss').val();
                                            var m = $('#unittype').val();
                                            //var category = $('#selcat').val();

                                            //var m = document.getElementById('unittype');
                                            // alert('Im here::' + msg);

                                            //alert('Im here::' + msg);
                                            if (m.options[m.selectedIndex].text == 'Other')
                                            {
                                            document.getElementById('plot_size_mtr1').style.display = "none";
                                            document.getElementById('plot_size_ft1').style.display = "none";
                                            //$('#category').css('display', 'block');
                                            //document.getElementById('duplex_div').style.display = "block";
                                            } else {

                                            document.getElementById('plot_size_mtr1').style.display = "block";
                                            document.getElementById('plot_size_ft1').style.display = "block";
                                            }


                                        }

        </script>

        <SCRIPT LANGUAGE="JavaScript">

                                        <!-- This script and many more available at The JavaScript Source!!  -->
<!-- via the Internet  U R L :  http://www.compfund.com/javascript/  -->

                            <!-- Begin
                            function addChar(input, character) {
                                                    if (input.value == null || input.value == "0")
                                                    input.value = character
                                                    else
                                                    input.value += character
                                            }
                                            function cos(form) {
                                                    form.display.value = Math.cos(form.display.value); }
                                             function sin(form) {
                                                    form.display.value = Math.sin(form.display.value); }
                     function tan(form) {
                                                    form.display.value = Math.tan(form.display.value); }
                function sqrt(form) {
                                                    form.display.value = Math.sqrt(form.display.value); }
                function ln(form) {
                                                    form.display.value = Math.log(form.display.value); }
                function exp(form) {
                                                    form.display.value = Math.exp(form.display.value); }
                function sqrt(form) {
                                                    form.display.value = Math.sqrt(form.display.value); }
                function deleteChar(input) {
                                                    input.value = input.value.substring(0, input.value.length - 1)
                    }
                    function changeSign(input) {
                                                    substring
                                                    if (input.value.substring(0, 1) == "-")
                                                    input.value = input.value.substring(1, input.value.length)
                                                    else
                                                    input.value = "-" + input.value
                }
                function compute(form)  {
                                                    form.display.value = eval(form.display.value)}
                function square(form)  {
                                                    form.display.value = eval(form.display.value) *
                                                    eval(form.display.value)}
                function checkNum(str)  {
                                                    for (var i = 0; i < str.length; i++) {
                                            var ch = str.substring(i, i + 1)
                                                    if (ch < "0" ||ch > "9") {
                                            if (ch != "/" && ch != "*" && ch!= "+" && ch !=
"-" && ch != "."
&& ch != "(" && ch!= ")") {
alert("invalid entry!")
return false
         }
      }
   }
return true
}
// End -->
</SCRIPT>

    </body>

</html>
