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
                margin: 5mm 5mm 5mm 5mm;  /* this affects the margin in the printer settings */

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
                input{
                    border: none;
                }
            }

            .panel-primary {
                border-color: #000 !important;
            }
            input{
                padding-left: 15px;
            }
            input{
                border: none;
                padding-left: 15px;
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
                    <form class="form-inline" action="<?php echo site_url('pre_sales/get_visitor_Flat_Input_update'); ?>" method="post" autocomplete="off" name="Form"  onsubmit="return ValidationEvent()" > 


                        <input type="hidden" id="currentdate" name="currentdate" value="<?php echo date('Y-m-d'); ?>">
                        <?php
                        foreach ($this->Sheet_model->view() as $row) {
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
                            <?php $updateid = $row->id; ?>
                            <?php $project_id = $row->project_id; ?>
                            <?php $prospect_id = $row->prospect_id; ?>
                            <?php $name = $row->name; ?>
                            <?php $mobile_no = $row->mobile; ?>
                            <?php $block = $row->block; ?>
                            <?php $category = $row->category; ?>
                            <?php $type = $row->type; ?>
                
                        
                            <?php $cost_wash_area = $row->cost_wash_area; ?>
                            <?php $cost_washarea_ref_rate = $row->cost_washarea_ref_rate; ?>
                            <?php $total_wash_area = $row->total_wash_area; ?>
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

                        <?php } ?>

                        <?php $login_user_id = $this->session->userdata('user_id'); ?>
                        <input type='hidden' value='<?php echo $login_user_id; ?>' name='login_id'/>
                        <input type="hidden" value="<?php echo $id; ?>" name="prospect_id" />
                        <input type="hidden" value="<?php echo $updateid; ?>" name="updateid" />



                        <input  id="gst" type="hidden" value="<?php echo $result5 ?>"/>

                        <input   type="hidden" name="category" value="<?php echo $category ?>"/>




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
                                        <input type="text" class="form-control" name="name" value="<?php echo $name; ?>" style="width:100%;" /> 
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
                                        <input type="text" class="form-control" pattern="[789][0-9]{9}" name="mobile" value="<?php echo $mobile_no; ?>" />
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
                                        <input type="hidden" value="<?php echo $project_name; ?> <?php echo $block; ?>" />
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
                                        <?php echo $unit_no; ?>
                                        <input type="hidden" value="<?php echo $unit_no; ?>" name="unit_no" readonly/>
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
                                        <?php echo $type ?>
                                        <input type="hidden" value="<?php echo $type ?>" name="type"  readonly/>
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
                                        <?php echo $flat_carpet_area_mt; ?>    
                                        <input type="hidden" name="flat_carpet_area_mt" value="<?php echo $flat_carpet_area_mt; ?>" />

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
                                        <?php echo number_format((float) $flat_carpet_area_ft, 2, '.', ''); ?>
                                        <input type="hidden" name="flat_carpet_area_ft" value="<?php echo number_format((float) $flat_carpet_area_ft, 2, '.', ''); ?>"  readonly/>

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
                                        <?php echo number_format((float) $cost_carpet_area, 2, '.', ''); ?>
                                        <input type="hidden" id="unit_cost1" name="cost_carpet_area"  value="<?php echo number_format((float) $flat_carpet_area_mt, 2, '.', ''); ?>" readonly/>
                                        <!--button type="button" class="btn btn-info btn-sm" id="btnEditarea"><i class="fa fa-edit"></i></button-->
                                    </td>
                                    <td>
                                        Rs.<input type="text" id="unit_cost2" class="inputborder" onblur="makedecimal(this.id)" onkeyup="allinone();" name="cost_ca_ref_rate" value="<?php echo number_format((float) $cost_ca_ref_rate, 2, '.', ''); ?>" />

                                        <button type="button"  class="btn btn-info btn-sm" id="btnEditrate"><i class="fa fa-edit"></i></button>

                                    </td>


                                    <td>
                                        <input type="hidden" id="unit_cost3" value="10.76">
                                        10.76
                                    </td>
                                    <td>
                                        Rs. <input type="text" class="inputborder" id="unit_cost4" name="total_unit_cost_as_per_carpet_area"  value="<?php echo number_format((float) $total_unit_cost_as_per_carpet_area, 2, '.', ''); ?>" readonly />

                                    </td>
                                </tr>

                                <tr>

                                    <td>
                                        Balcony Area (1) 3.9 SQM
                                    </td>

                                    <td>
                                        <?php echo number_format((float) $cost_balcony_area, 2, '.', ''); ?>
                                        <input type="hidden" id="balcony_area_one1" name="cost_balcony_area"   value="<?php echo number_format((float) $cost_balcony_area, 2, '.', ''); ?>" /> 
                                    </td>
                                    <td>
                                        Rs.  <input type="text" name="cost_balcony_ref_rate" class="inputborder" onblur="makedecimal(this.id)" onkeyup="allinone();" class="inputborder" id="balcony_area_one2"  value="<?php echo number_format((float) $cost_balcony_ref_rate, 2, '.', ''); ?>" /> 

                                    </td>

                                    <td>
                                        <input type="hidden" value="10.76" id="balcony_area_one3" />
                                        10.76
                                    </td>

                                    <td>
                                        Rs. <input type="text" class="inputborder"  id="balcony_area_one4" name="total_balcony_area"  value="<?php echo number_format((float) $total_balcony_area, 2, '.', ''); ?>" readonly  />

                                    </td>

                                </tr>
                                <tr>

                                    <td>
                                        Balcony Area (2)
                                    </td>

                                    <td>
                                        <?php echo number_format((float) $cost_balcony_area_2, 2, '.', ''); ?>
                                        <input type="hidden" id="balcony_area_two1" name="cost_balcony_area_2" value="<?php echo number_format((float) $cost_balcony_area_2, 2, '.', ''); ?>" /> 
                                    </td>
                                    <td>
                                        Rs.  <input type="text" class="inputborder" name="cost_balcony_ref_rate_2" onblur="makedecimal(this.id)" onkeyup="allinone();" id="balcony_area_two2"  value="<?php echo number_format((float) $cost_balcony_ref_rate_2, 2, '.', ''); ?>" /> 

                                    </td>

                                    <td>
                                        <input type="hidden" value="10.76" id="balcony_area_two3">
                                        10.76
                                    </td>

                                    <td>
                                        Rs. <input type="text"  class="inputborder" id="balcony_area_two4" name="total_balcony_area_2"  value="<?php echo number_format((float) $total_balcony_area_2, 2, '.', ''); ?>" readonly  />

                                    </td>

                                </tr>       
                                
                                       <tr>

                                    <td>
                                        Wash area <?php echo number_format((float) $cost_wash_area, 2, '.', ''); ?> SQM
                                    </td>

                                    <td>
                                        <?php echo number_format((float) $cost_wash_area, 2, '.', '');   ?>
                                        <input type="hidden" id="wash_area" name="cost_wash_area" value="<?php echo number_format((float) $cost_wash_area, 2, '.', '');   ?>" /> 
                                    </td>
                                    <td>
                                        Rs.  <input type="text" id="wash_area_two2"  class="inputborder" name="cost_washarea_ref_rate" onblur="makedecimal(this.id)" onkeyup="allinone();"  value="<?php echo number_format((float) $cost_washarea_ref_rate, 2, '.', '');   ?>" readonly /> 

                                    </td>

                                    <td>
                                        <input type="hidden" value="10.76" id="wash_area_two3">
                                        10.76
                                    </td>

                                    <td>
                                        Rs.<input type="text" id="wash_area_two4" name="total_wash_area"  value="<?php echo number_format((float) $total_wash_area, 2, '.', '');   ?>"  readonly  />

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
                                        Rs.  <b>  <input type="text"  id="total1"  value="<?php echo number_format((float) $total_balcony_area_2 + $total_balcony_area + $total_unit_cost_as_per_carpet_area +$total_wash_area, 2, '.', ''); ?>" style="border:none" readonly  /> </b>
                                    </td>


                                </tr>
                                <tr>

                                    <td>
                                        Proportionate Common area.
                                    </td>

                                    <td>
                                        <?php echo number_format((float) $proportionate_common_area, 2, '.', ''); ?>
                                        <input type="hidden" id="common_area1" name="proportionate_common_area" value="<?php echo number_format((float) $proportionate_common_area, 2, '.', ''); ?>" /> 

                                    </td>
                                    <td>
                                        Rs. <input type="text" class="inputborder" name="proportionate_common_area_ref_rate" onblur="makedecimal(this.id)" onkeyup="allinone();" id="common_area2"  value=" <?php echo number_format((float) $proportionate_common_area_ref_rate, 2, '.', ''); ?>" /> 

                                    </td>
                                    <td>
                                        <input type="hidden" value="10.76" id="common_area3" />
                                        10.76
                                    </td>

                                    <td>
                                        Rs.    <input type="text" class="inputborder" id="common_area4" name="total_proportionate_common_area"  value="<?php echo number_format((float) $total_proportionate_common_area, 2, '.', ''); ?>" readonly  />

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
                                        Rs. <input type="text" name="flat_parking"  onblur="makedecimal(this.id)" onkeyup="allinone();" id="parking"  value="<?php echo number_format((float) $flat_parking, 2, '.', ''); ?>" style="border:1px solid #000"; />
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

                                    </td>
                                    <td>
                                        @18 for GST
                                    </td>
                                    <td>
                                        Rs. <input type="text" id="charge_amt" name="maintenance_cost_ref_rate" value="<?php echo number_format((float) $maintenance_cost_ref_rate, 2, '.', ''); ?>" style="border:none" readonly  />
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
                                        Rs. <input type="text"  id="mpseb"  name="mpseb_cost_ref_rate" onblur="makedecimal(this.id)" onkeyup="allinone();" value="<?php echo number_format((float) $mpseb_cost_ref_rate, 2, '.', ''); ?>" readonly/>
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
                                        Rs. <input type="text" id="gsttotal"  name="gst" value="<?php echo number_format((float) $gst, 2, '.', ''); ?>" style="border:none" readonly />
                                    </td>


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
                                        <b><input type="hidden"  id="total2" value="<?php //echo $total_sum_x + $mpseb_cost_ref_rate + $charge_amount + $common_area_result;         ?>" /></b>
                                        Rs. <b><input type="text"  name="cost_payble_to_company" id="total5" value="<?php echo number_format((float) $cost_payble_to_company, 2, '.', ''); ?>" style="border:none" readonly  /></b>
                                        <b><input type="hidden" name="" id="total3" value="" /></b>
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
                                        Rs. <input onfocus="clearabovetwo();" type="text" min="1" step="1" value="<?php echo number_format((float) $discount, 2, '.', ''); ?>" onblur="makedecimal(this.id)" onkeyup="allinone();" id="discount" name="discount" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13 || event.charCode == 46) ? null : event.charCode >= 48 && event.charCode <= 57" style="border:1px solid #000;"/>
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
                                        Rs. <b><input type="text" name="total_cost" id="total_cost" value="<?php echo number_format((float) $total_cost, 2, '.', ''); ?>" style="border:none" readonly  /></b>
                                    </td>

                                </tr>
                                <tr>
                                    <td colspan="7" class="text-center">
                                        Note :-  Registration charges of <?php //echo $type         ?> registry shall be charged as per actual additionally
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
                                &nbsp;<textarea cols="3" id="discussion" rows="4" style="width:100%;" name="discussion" class="form-control"><?php echo $discussion; ?></textarea>
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

            $(document).ready(function () {
               
                $('#toppageheader').html('Flat Cost Calculation');
                $("a:contains(Flat Cost Calculation)").parent().addClass('active');
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
                var wash_area_two1 = Number(document.getElementById('wash_area').value);
                var wash_area_two2 = Number(document.getElementById('wash_area_two2').value);
                var wash_area_two3 = Number(document.getElementById('wash_area_two3').value);
                var ttl20 = (wash_area_two1 * wash_area_two2 * wash_area_two3).toFixed(2);//+parseInt(two)+parseInt(three);
                document.getElementById('wash_area_two4').value = ttl20;
                //=========================================================

                var unit_cost4 = Number(document.getElementById('unit_cost4').value);
                var balcony_area_one4 = Number(document.getElementById('balcony_area_one4').value);
                var balcony_area_two4 = Number(document.getElementById('balcony_area_two4').value);
                var wash_area_two4 = Number(document.getElementById('wash_area_two4').value);
                var ttltotal = (unit_cost4 + balcony_area_one4 + balcony_area_two4 + wash_area_two4).toFixed(2);//+parseInt(two)+parseInt(three);
             //  alert(ttltotal);
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
                if (total5 < discount)
                {
                    alert('discount cannot be more then the total cost');
                    document.getElementById('discount').value = 0;
                }

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
