<html>
    <head>
        <title>Phase1 Shop</title>
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
                    <form class="form-inline" action="<?php echo site_url('pre_sales/update_Phase1_shop_cost_cal'); ?>" method="post" name="Form" enctype="multipart/form-data" onsubmit="return validateForm()">
                        <div id="printable">
                            <div class="container">

                                <input type="hidden" name="max_id" value="<?php // echo $max_id;      ?>" />
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
                                // echo $id;

                                foreach ($this->Pre_sales_model->view_sheet1($id) as $row) {
                                    ?>
                                    <?php $updateid = $row->id; ?>
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
                                    <?php $total_unit_cost_as_per_carpet_area = $row->total_unit_cost_as_per_carpet_area; ?>

                                    <?php $discount = $row->discount; ?>
                                    <?php $cost_payble_to_company = $row->cost_payble_to_company; ?>
                                    <?php $total_cost = $row->total_cost; ?>

                                    <?php $MPSEB_system = $row->MPSEB_system; ?>
                                    <?php $registry_charges = $row->registry_charges; ?>
                                    <?php $monthly = $row->monthly; ?>
                                    <?php $MPSEB_meter = $row->MPSEB_meter; ?>
                                    <?php $mutation = $row->mutation; ?>
                                    <?php $society = $row->society; ?>

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
                                <?php $login_user_id = $this->session->userdata('user_id'); ?>
                                <input type='hidden' value='<?php echo $login_user_id; ?>' name='login_id'/>
                                <input type="hidden" value="<?php echo $updateid; ?>" name="updateid" />
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
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td class="col-xs-12" colspan="7" style="font-weight: bold; padding: 15px;">
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
                                                <input type="hidden" value="<?php //echo $plot_size_mtr                       ?>" name="plot_size_mtr" style= " padding: 8px; margin: 0; border: 0; border-radius: 0px;"   />
                                            </td>
                                            <td>

                                            </td>

                                        </tr>
                                        <tr>
                                    <input  id="gst" type="hidden" value="<?php echo $result5 ?>"/>
                                    <input   type="hidden" name="plot_size_ft" value="<?php //echo $plot_size_ft                       ?>"/>
                                    <input   type="hidden" name="category" value="<?php //echo $category                       ?>"/>

                                    <td colspan="3">
                                        Shop Area
                                    </td>

                                    <td colspan="2">
                                        <input type="text" name="shop_area_sqmt" value="<?php echo $plot_size_mtr; ?>" style="width:100%; border: none;" readonly />
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
                                            <input type="text" id="plot_sqft" name="shop_area_sqft" value="<?php echo $plot_size_ft; ?>" style="width:100%; border: none;" readonly/>
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
                                            <input type="text" name="total_unit_cost_as_per_carpet_area" id="basic_cost"   value="<?php echo number_format((float) $total_unit_cost_as_per_carpet_area, 2, '.', ''); ?>" style="width:100%; font-weight: bold;" readonly/>
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
                                            <input type="text" id="MPSEB_system" name="MPSEB_system" onblur="makedecimal(this.id)" onkeyup="allinone();" value="<?php echo number_format((float) $MPSEB_system, 2, '.', ''); ?>" style="width:100%;"/>
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
                                            <input type="text" name="water_connection" id="water_connection"  onblur="makedecimal(this.id)" onkeyup="allinone();" value="<?php echo number_format((float) $water_connection_ref_rate, 2, '.', ''); ?>" style="width:100%;" readonly/>
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
                                            <input type="text" id="registry_charges" name="registry_charges" onblur="makedecimal(this.id)" onkeyup="allinone();" value="<?php echo number_format((float) $registry_charges, 2, '.', ''); ?>" style="width:100%;" />
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
                                            <input type="text" name="maintenance" id="maintenance"  onblur="makedecimal(this.id)" onkeyup="allinone();" value="<?php echo $maintenance_cost_ref_rate; ?>" style="width:100%;" readonly />
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
                                            <input type="text" name="monthly" id="monthly" onblur="makedecimal(this.id)" onkeyup="allinone();"  value="<?php echo number_format((float) $monthly, 2, '.', ''); ?>" style="width:100%;" />
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
                                            <input type="text"  name="MPSEB_meter" id="MPSEB_meter" onblur="makedecimal(this.id)" onkeyup="allinone();" value="<?php echo number_format((float) $MPSEB_meter, 2, '.', ''); ?>" style="width:100%;" />
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
                                            <input type="text"  name="mutation" id="mutation" onblur="makedecimal(this.id)" value="<?php echo number_format((float) $mutation, 2, '.', ''); ?>" onkeyup="allinone();" style="width:100%;" />
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
                                            <input type="text"  name="society" id="society" onblur="makedecimal(this.id)" value="<?php echo number_format((float) $society, 2, '.', ''); ?>" onkeyup="allinone();" style="width:100%;"  />
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
                                            <input type="text"  name="cost_payble_to_company" id="total_cost" value="<?php echo number_format((float) $total_unit_cost_as_per_carpet_area, 2, '.', ''); ?>" style="width:100%; font-weight: bold;" readonly />
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
                                            <input type="text"  name="discount" id="discount_one" value="<?php echo number_format((float) $discount, 2, '.', ''); ?>" onblur="makedecimal(this.id)" onkeyup="allinone();" style="width:100%;" />
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
                                            <input type="text"  name="total_cost" id="final_cost" value="<?php echo number_format((float) $total_cost, 2, '.', ''); ?>" style="width:100%; font-weight: bold;" readonly />
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
                                <br>                       
                            </div> 
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <label>Discussion</label>
                                        &nbsp;<textarea cols="3" id="discussion" rows="4" style="width:100%;" name="discussion" class="form-control"><?php echo $discussion;?></textarea>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="text-center">
                                        <input type="submit" class="btn btn-success" value="submit" />
                                        <input action="action" onclick="window.history.go(-1);
                                                return false;" type="button" value="Cancel" class="btn btn-primary clickable" />
                                    </div>
                                </div>
                            </div>
                        </div> 

                    </form>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function () {
                allinone();
                $('#toppageheader').html('Shop Cost Calculation');
                $("a:contains(Update Cost calculation For Shop)").parent().addClass('active');
            });


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
