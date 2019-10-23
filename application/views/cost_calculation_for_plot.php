

<html>
    <head>
        <title>Cost Calculation</title>
        <?php
        require_once('assets/html_head_links.php');
        ?>
        <style>
            .col-xs-5 >input{
                display: block;
                padding: 12px;
                margin: 0;
                border: 0;
                width: 100%;
                border-radius: 0px;
            }
            .col-xs-1 .fa{
                float: right;
            }
            #myReset{
                background-color:white;
                border:none;
            }
            .back 
            {
                margin-top: -45px;
                font-size: 15px;

            }
            a.clickable {
                display: inline-block;
                padding: 6px 12px;
                border-radius: 4px;
                cursor: pointer;
                margin: 16px;
            }
            .table {
                margin-bottom: 0px;

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
            .col-xs-3 {
                width: 27% !important;
            }
            .col-xs-1 {
                width: 3.9% !important;
            }
            .col-xs-4 {
                width: 32.5% !important;
            }

            @page {
                size: auto;   /* auto is the initial value */
                margin: 5mm 5mm 5mm 5mm;  /* this affects the margin in the printer settings */

            }

            .panel-primary {
                border-color: #000 !important;
            }
            ol{
                font-size: 12;
            }
            
             body{
                
                font-family: Arial !important;
                font-size: 14px !important;
            }


        </style>

    </head>
    <body>
        <div style="z-index: 10;">
            <?php
            require_once('assets/top_menu.php');
            require_once('assets/side_menu.php');
            ?>
        </div>
        <div class="main">
            <?php
            foreach ($this->Sheet_model->get_appl_parking($customer_id) as $row) {
                ?> 
                <?php $price = $row->price; ?>
            <?php } ?>

            <?php
            foreach ($this->Sheet_model->get_company_taxCGST($customer_id) as $row) {
                ?> 
                <?php $result12 = $row->tax_percentage; ?>
            <?php } ?>
            <?php
            foreach ($this->Sheet_model->get_company_taxSGST($customer_id) as $row) {
                ?> 
                <?php $result11 = $row->tax_percentage; ?>
            <?php } ?>
            <?php
            foreach ($this->Sheet_model->get_company_taxIGST($customer_id) as $row) {
                ?> 
                <?php $row->tax_percentage; ?>
            <?php } ?>



            <?php
            foreach ($this->Sheet_model->get_prospect_info($customer_id) as $row) {
                ?> 
                <?php $pre_salesid = $row->pre_salesid; ?>
            <?php } ?>
            <?php
            foreach ($this->Agreement_model->view_sheet1($pre_salesid) as $row) {
                ?>
                <?php //$project_id = $row->project_id; ?>
                <?php //$prospect_id = $row->prospect_id; ?>
                <?php //$name = $row->name; ?>
                <?php //$mobile_no = $row->mobile; ?>
                <?php //$block = $row->block; ?>
                <?php //$category = $row->category; ?>
                <?php //$type = $row->type; ?>
                <?php //$unit_no = $row->unit_no; ?>
                <?php $plot_size_mtr = $row->plot_size_mtr; ?>
                <?php $plot_size_ft = $row->plot_size_ft; ?>
                <?php $carpet_area = $row->cost_carpet_area; ?>
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

 <?php $basic_cost_ref_rate = $row->basic_cost_ref_rate; ?>
                                <?php $mpseb_cost_ref_rate = $row->mpseb_cost_ref_rate; ?>
                                <?php $water_connection_ref_rate = $row->water_connection_ref_rate; ?>
                                <?php $maintenance_cost_ref_rate = $row->maintenance_cost_ref_rate; ?>
                                <?php $corner_charges = $row->corner_charges; ?>
                                <?php $garden_facing_charges = $row->garden_facing_charges; ?>

                <?php $total_cost = $row->total_cost; ?>
                <?php $cost_payble_to_company = $row->cost_payble_to_company; ?>
                <?php $discount = $row->discount; ?>
                <?php $discussion = $row->discussion; ?>
                <?php $gst = $row->gst; ?>
                <?php $extra_charge = $row->extra_charge; ?>
                <?php $extra_charge_des = $row->extra_charge_des; ?>
                <?php $premium_location_charges = $row->premium_location_charges; ?>
                <?php $premium_location_charges_des = $row->premium_location_charges_des; ?>3
                <?php $total_six = $extra_charge + $premium_location_charges + $total_unit_cost_as_per_carpet_area + $total_balcony_area + $total_wash_area + $total_open_terrace_area_front + $total_open_terrace_area_back + $total_car_poarch_area; ?>

            <?php } ?>
                 <?php
                        
                        foreach ($this->Allotment_letter_model->show_project_details1($customer_id) as $row) {
                            $roof_covered_ground_gf_area = $row->roof_covered_ground_gf_area;
                            $roof_covered_ground_ff_area = $row->roof_covered_ground_ff_area;
                           $total_roof = $roof_covered_ground_gf_area + $roof_covered_ground_ff_area;
                           $carpet_area = $row->carpet_area;
                        }
                        ?>
                
                




            <div class="container">

                <form class="form-inline" action="<?php echo site_url('Cost_calculator/update_cost_calculation_for_duplex'); ?>" method="post">
                    <spn class="back"><a href="javascript: history.go(-1)" class="btn btn-primary pull-right clickable" role="button">Go Back</a></spn>
                    <div id="printable">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4>Plot - Cost Calculation</h4>


                                <?php
                                $data['project_id'] = $project_id;
                                $data['block'] = $block;
                                foreach ($this->Sheet_model->get_project_status($data) as $row) {
                                    ?> 

                                    <?php $status = $row->status; ?>
                                    <?php $project_name = $row->project_name; ?>
                                <?php } ?>
                                
                                 <?php
                                        $data['plot_size_mtr'] = $plot_size_mtr;
                                        $data['plot_size_ft'] = $plot_size_ft;

                                        foreach ($this->Pre_sales_model->getproj_info($data) as $row) {
                                            ?>

                                            <?php $plot_sqmt = $row->plot_sqmt; ?>
                                            <?php $plot_sqft = $row->plot_sqft; ?>
                                        <?php }
                                        ?>
                                
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
                                        
                         

                                        
                            </div>
                            <div class="panel-body">
                                <table class="table table-bordered"  style="font-weight: bold; font-size: 14px;">
                                    <tbody>
                                        <tr>
                                            <td class="col-xs-4"> Name4514514</td>
                                            <td class="col-xs-8"  style="margin: 0; padding: 0;"><input type="hidden" name="customer_id" value="<?php echo $customer_id; ?>"/><input type="text" name="name" value="<?php echo $name; ?>" style= "display: block; padding: 8px; margin: 0; border: 0; width: 100%; border-radius: 0px;" readonly/></td>
                                        </tr>
                                        <tr>
                                            <td class="col-xs-4">Project</td>
                                            
                                            <td class="col-xs-8" style="margin: 0; padding: 7px;"><?php echo $project_name; ?> <?php echo $block; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="col-xs-4">Unit No.</td>
                                            <td class="col-xs-8" style="margin: 0; padding: 0;"><input type="text" name="unit_no"  value="<?php echo $unit_no; ?>" style= "display: block; padding: 8px; margin: 0; border: 0; width: 100%; border-radius: 0px;" readonly/></td>
                                        </tr>
                                        <tr>
                                            <td class="col-xs-4">Type</td>
                                            <td class="col-xs-8" style="margin: 0; padding: 0;"><input type="text" name="type" value="<?php echo $type; ?>" style= "display: block; padding: 8px; margin: 0; border: 0; width: 100%; border-radius: 0px;" readonly/></td>
                                        </tr>
                                        <tr>

                                            <td class="col-xs-4">Plot Area (Sqmt.)</td>
                                            <td class="col-xs-7" style="margin: 0; padding: 0;">
                                                &nbsp;&nbsp;<?php echo number_format((float) $plot_sqmt, 2, '.', ''); ?>
                                            </td>
                                        </tr>
                                        <tr>

                                            <td class="col-xs-4">Plot Area  (Sqft) </td>
                                            <td class="col-xs-8" style="margin: 0; padding: 0;">
                                                &nbsp;&nbsp;<?php echo number_format((float) $plot_sqft, 2, '.', ''); ?>
                                            </td>
                                        </tr>
                                        <?php  $result1 = number_format((float)$first_floor_carpet_area, 2, '.', '');   ?>

                                        
                                            <?php  $result2 =  number_format((float)$ground_floor_carpet_area, 2, '.', '');  ?>
                                            <?php $result3 = $result1 + $result2 ?>
                                    </tbody>
                                </table>
                                <table class="table table-bordered" style=" font-weight: bold; font-size: 14px; text-align: center;">
                                    <tbody>
                                        <tr>
                                            <td class="col-xs-1"></td>
                                            <td class="col-xs-3">Total </td>
                                            <td class="col-xs-1"><i class="fa fa-inr"></i></td>
                                            <td class="col-xs-4" style="margin: 0; padding: 0; background-color: #E5E7E9;">
                                                <input id="total1" name="unit_cost_as_per_carpet_area"  value="<?php echo number_format((float) $corner_charges + $garden_facing_charges + $basic_cost_ref_rate, 2, '.', ''); ?>" style="border: none; color: #000;  background-color: #E5E7E9;text-align: center;" readonly/>
                                                <input type="hidden" class="form-control" name="cost_payable_to_company" readonly id="total22" value="<?php echo number_format((float)$total_cost, 2, '.', '');  ?>">
                                            </td>
                                            <td class="col-xs-3">

                                                <input type="hidden" name="price_ca_ref_rate" id="price" value="<?php echo $result4 =  number_format((float)$ca_ref_rate, 2, '.', '');  ?>" readonly style="border: none;"><br>
                                                <input  type="hidden" value="<?php echo $price_ca_ref_rate; ?>" readonly style="border:none;">

                                                <input type="hidden" readonly id="total">

                                                <input type="hidden" id="price2" value="<?php echo $result3; ?>" readonly>


                                                <input type="hidden" class="form-control" value="completed" name="cost_calculation" style="width: 60px;" readonly/>

                                            </td>

                                        </tr>
                                    </tbody>
                                </table>



                                <table class="table table-bordered" style=" font-weight: bold; font-size: 14px;text-align: center;">
                                    <tbody>
                                        <tr>
                                            <td class="col-xs-1" style="text-align:center;"></td>
                                            <td class="col-xs-3">Maintenance 5 Years</td>
                                            <td class="col-xs-1"><i class="fa fa-inr"></i></td>
                                            <td class="col-xs-4" style="margin: 0; padding: 0; background-color: #E5E7E9;">
                                                <?php foreach ($this->Pre_sales_model->get_charge_amount() as $row) {
                                                    ?>
                                                    <?php $charge_amt = $row->charge_amount; ?>
                                                    <?php $charge_amount1 = $row->charge_amount * 18 / 100; ?>
                                                    <?php $charge_amount = $row->charge_amount + $charge_amount1; ?>
                                                    <?php //$charge_amount = $charge_amount1 + $charge_amount2;  ?>


                                                <?php } ?>
                                                <input  type="text" name="maintenance" id="maintenance" value="<?php echo  number_format((float)$maintenance_cost_ref_rate, 2, '.', '');   ?>"  style="border: none; color: #000;  background-color: #E5E7E9;text-align: center;" readonly/>
                                            </td>
                                            <td class="col-xs-3">fix</td>
                                        </tr>
                                    </tbody>
                                </table>
                              
                                <!--table class="table table-bordered" style="font-family: Times New Roman; font-weight: bold; font-size: 10px; text-align: center;">
                                    <tbody>
                                        <tr>
                                            <td class="col-xs-1"></td>
                                            <td class="col-xs-3">Total</td>
                                            <td class="col-xs-1"><i class="fa fa-inr"></i></td>
                                            <td class="col-xs-4" style="margin: 0; padding: 0;  background-color: #E5E7E9;">
                                                <input name="cost_payable_to_company"  readonly id="total4" value="<?php echo round($cost_payable_to_company, 2); ?>" style="border: none;  background-color: #E5E7E9;text-align: center;">

                                                <input  id="gst" type="hidden" value="<?php //echo round($result5 ,2)  ?>"/>
                                                <input  type="hidden" value="<?php //echo $unit_cost_as_per_carpet_area;  ?>"/>
                                            </td>
                                            <td class="col-xs-3"><span style="font-size:10px;">&nbsp;&nbsp;</span></td>
                                        </tr>
                                    </tbody>
                                </table-->
                                <table class="table table-bordered" style=" font-weight: bold; font-size: 14px;text-align: center;">
                                    <tbody>
                                        <tr>
                                            <td class="col-xs-1" style="text-align:center;"></td>
                                            <td class="col-xs-3">Discount</td>
                                            <td class="col-xs-1"><i class="fa fa-inr"></i></td>
                                            <td class="col-xs-4" style="margin: 0; padding: 0; background-color: #E5E7E9;">
                                                <input  name="discount" id="discount" value="<?php echo  number_format((float)$discount, 2, '.', '');  ?>" style="border: none; color: #000;  background-color: #E5E7E9;text-align: center;" readonly/>
                                            </td>
                                            <td class="col-xs-3">fix</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table table-bordered" style=" font-weight: bold; font-size: 14px; text-align: center;">
                                    <tbody>
                                        <tr>
                                            <td class="col-xs-1"></td>
                                            <td class="col-xs-3">Final Cost</td>
                                            <td class="col-xs-1"><i class="fa fa-inr"></i></td>
                                            <td class="col-xs-4" style="margin: 0; padding: 0; background-color: #E5E7E9;"><input type="text" value="<?php echo  number_format((float)$total_cost, 2, '.', '');   ?>" style="border: none;  background-color: #E5E7E9;text-align: center;" id="total5" disabled/></td>
                                            <td class="col-xs-3"></td>
                                        </tr>
                                    </tbody>
                                </table>  
                                <div class="panel panel-default" style="border:none;">
                                    <div class="panel-body" style="font-weight: bold; font-size: 12px;">
                                        Note: Registration charges of <?php echo $type; ?> registry shall be charged as per actual addtionally
                                    </div>
                                </div>

                                <div class="row" style=" font-weight: bold; font-size: 12px; border: 1px solid black; border-left: none;border-right: none;">&nbsp;&nbsp;&nbsp;&nbsp;Other Charges to be bear by the customer</div>

                                <br>
                                <table class="table table-bordered" style=" font-weight: bold; font-size: 14px; border-color: black;">
                                    <tbody>
                                        <tr>

                                            <td>
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
                        </div>
                    </div>
                    <center>

                    </center>
                    <br> <br> <br>
                </form>

            </div>
        </div>
        <script type="text/javascript">

            function myFunctionReset() {
                document.getElementById("myReset").value = "2739.1";
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
                $('#toppageheader').html('Cost Calculation <span class="pull-right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="print" id="btnprint" value="print" class="btn btn-xs btn-default" onClick="print_this_doc();">Print&nbsp;&nbsp;<i class="fa fa-print"></i></button></span>');
                $("a:contains(Cost Calculation)").parent().addClass('active');
            });
        </script>




    </body>
</html>