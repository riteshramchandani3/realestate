

<html>
    <head>
        <title>Plot Sheet</title>
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
                    <?php $id = $this->input->get('id'); ?>
                    <form class="form-inline" action="<?php echo site_url('pre_sales/update_plot_visitor_Input'); ?>" method="post" name="Form" enctype="multipart/form-data" onsubmit="return validateForm()">
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
                                <?php $unit_no = $row->unit_no; ?>
                                <?php $plot_size_mtr = $row->plot_size_mtr; ?>
                                <?php $plot_size_ft = $row->plot_size_ft; ?>
                                <?php $total_finalcost = $row->total_cost; ?>
                                <?php $cost_payble_to_company = $row->cost_payble_to_company; ?>
                                <?php $discount = $row->discount; ?>
                                <?php $discussion = $row->discussion; ?>
                                <?php $gst = $row->gst; ?>
                                    <?php $corner_charges = $row->corner_charges; ?>
                                <?php $garden_facing_charges = $row->garden_facing_charges; ?>
                                  <?php $basic_cost_ref_rate = $row->basic_cost_ref_rate; ?>
                                    <?php $mpseb_cost_ref_rate = $row->mpseb_cost_ref_rate; ?>
                                    <?php $water_connection_ref_rate = $row->water_connection_ref_rate; ?>
                                    <?php $maintenance_cost_ref_rate = $row->maintenance_cost_ref_rate; ?>
                              
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
                                  
                             


                                    <?php $carpet_area_result = $carpet_area * 10.76 * $ca_ref_rate; ?>
                                    <?php $total_sum_x = $carpet_area_result; ?> 
                                <?php }
                                ?>





                            

<?php $login_user_id = $this->session->userdata('user_id'); ?>
                        <input type='hidden' value='<?php echo $login_user_id; ?>' name='login_id'/>
                        <input type="hidden" value="<?php echo $updateid; ?>" name="updateid" />
                                
                                <input type="hidden" value="<?php echo $name; ?>" name="name" />
                                <input type="hidden" value="<?php echo $mobile_no; ?>" name="mobile" />
                                <input type="hidden" value="<?php echo $project_id; ?>" name="project_id" />
                                <input type="hidden" value="<?php echo $block; ?>" name="block" />
                                <input type="hidden" value="<?php echo $category; ?>" name="category" />
                                <input type="hidden" value="<?php echo $type; ?>" name="type" />
                                <input type="hidden" value="<?php echo $unit_no; ?>" name="unit_no" />
                                <input type="hidden" value="<?php echo $plot_size_mtr; ?>" name="plot_size_mtr" />
                                <input type="hidden" value="<?php echo $plot_size_ft; ?>" name="plot_size_ft" />
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td class="col-xs-12" colspan="7" style="background:#92D050; color: #FF0000; padding: 15px;">

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
                                            <td colspan="3">
                                                Name
                                            </td>
                                            <td colspan="2">
                                                <input type="text" value="<?php echo $name; ?>" style="width:100%; border: none;" /> 
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
                                                <input type="text" pattern="[789][0-9]{9}" value="<?php echo $mobile_no; ?>" style="width:100%; border: none;" />
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
                                                <input type="text" value="<?php echo $unit_no; ?>" name="unit_no" style="width:100%; border: none;"  readonly/>
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
                                                <input type="text" value="<?php echo $type ?>" name="type" style="width:100%; border: none;" readonly/>
                                            </td>
                                            <td>
                                                &nbsp;
                                            </td>

                                        </tr>
                                        <tr>

                                            <td colspan="3">
                                                Plot Size
                                            </td>                                      
                                            <td colspan="2">
                                                <?php echo nbs(1); ?>  <?php echo $length_m; ?><?php echo nbs(2); ?>X<?php echo nbs(2); ?><?php echo $width_m; ?>                                           
                                                <input type="hidden" value="<?php echo $plot_size_mtr ?>" name="plot_size_mtr" />
                                            </td>
                                            <td>
                                                in Mtr
                                            </td>

                                        </tr>
                                        <tr>
                                    <input  id="gst" type="hidden" value="<?php echo $result5 ?>"/>
                                    <input   type="hidden" name="plot_size_ft" value="<?php echo $plot_size_ft ?>"/>
                                    <input   type="hidden" name="category" value="<?php echo $category ?>"/>

                                    <td colspan="3">
                                        Plot Size Area
                                    </td>

                                    <td colspan="2">
                                        <input type="text" value="<?php echo $plot_sqmt; ?>" style="width:100%; border: none;" readonly/>
                                    </td>
                                    <td>
                                        Sq. Mtr
                                    </td>

                                    </tr>
                                    <tr>
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
                                            <?php $carpet_area_result = $carpet_area * 10.76 * $ca_ref_rate; ?>

                                          

                                            <?php $total_sum_x = $carpet_area_result; ?>

                                        <?php }
                                        ?>





                                        <?php
                                        $data['plot_size_mtr'] = $plot_size_mtr;
                                        $data['plot_size_ft'] = $plot_size_ft;

                                        foreach ($this->Pre_sales_model->getproj_info($data) as $row) {
                                            ?>

                                            <?php $plot_sqmt = $row->plot_sqmt; ?>
                                            <?php $plot_sqft = $row->plot_sqft; ?>
                                        <?php }
                                        ?>


                                        <td colspan="3">
                                            Plot Area (SQFt)
                                        </td>

                                        <td colspan="2">
                                            <input type="text" id="plot_sqft" value="<?php echo $plot_sqft; ?>" style="width:100%; border: none;" readonly/>
                                        </td>
                                        <td>
                                            Sq. Mt.
                                        </td>

                                    </tr>

                                    <tr>

                                        <td colspan="3">
                                            Basic Cost of Plot
                                        </td>

                                        <td colspan="2" class="text-right">
                                            Rs.

                                        </td>
                                        <td>
                                           <input type="text" name="basic_cost_ref_rate" id="basic_cost" onblur="makedecimal(this.id);"  value="<?php echo number_format((float) $basic_cost_ref_rate, 2, '.', ''); ?>" style="width:100%; border: none;" readonly/>
                                        </td>

                                    </tr>
                                   
                                    <tr>

                                        <td colspan="3">
                                            Corner Charges
                                        </td>

                                        <td colspan="2" class="text-right">
                                            <span class="pull-left"> 5% of Basic Cost of Plot</span> Rs.

                                        </td>
                                        <td>
                                           <input type="text" name="basic_cost_ref_rate" id="basic_cost" onblur="makedecimal(this.id);"  value="<?php echo number_format((float) $corner_charges, 2, '.', ''); ?>" style="width:100%; border: none;" readonly/>
                                        </td>

                                    </tr>
                                    <tr>

                                        <td colspan="3">
                                            Garden Facing Charges
                                        </td>

                                        <td colspan="2" class="text-right">
                                           <span class="pull-left"> 5% of Basic Cost of Plot</span> Rs.

                                        </td>
                                        <td>
                                           <input type="text" name="basic_cost_ref_rate" id="basic_cost" onblur="makedecimal(this.id);"  value="<?php echo number_format((float) $garden_facing_charges, 2, '.', ''); ?>" style="width:100%; border: none;" readonly/>
                                        </td>

                                    </tr>
                                    

                                    <tr>

                                        <td colspan="3"> 
                                            Total Cost Of Plot
                                        </td>

                                        <td colspan="2" class="text-right">
                                            Rs.        
                                        </td>
                                        <td>
                                            <input type="text" id="plot_cost" onblur="makedecimal(this.id);" value="<?php echo number_format((float) $corner_charges + $garden_facing_charges + $basic_cost_ref_rate, 2, '.', ''); ?>" style="width:100%; border: none;" readonly/>
                                        </td>

                                    </tr>
                                   
                                    <tr>

                                        <td colspan="3">
                                            Total Cost Of Unit
                                        </td>

                                        <td colspan="2" class="text-right">
                                            Rs.  
                                        </td>
                                        <td>
                                            <input type="text" id="total_cost_of_unit"  onblur="makedecimal(this.id)" onkeyup="allinone();" value="<?php echo number_format((float) $corner_charges + $garden_facing_charges + $basic_cost_ref_rate, 2, '.', ''); ?>" style="width:100%; border: none;" readonly/>
                                        </td>

                                    </tr>

                                    <tr>

                                        <td colspan="3">
                                            MPSEB Charges
                                        </td>

                                        <td colspan="2" class="text-right">
                                            Rs.    
                                        </td>
                                        <td>
                                            <input type="text" id="mpseb_charges" name="mpseb_cost_ref_rate" onblur="makedecimal(this.id)" onkeyup="allinone();" value="<?php echo $mpseb_cost_ref_rate; ?>" style="width:100%; border: none;" readonly/>
                                        </td>

                                    </tr>

                                    <tr>

                                        <td colspan="3">
                                            Water Connection
                                        </td>

                                        <td colspan="2" class="text-right">
                                            Rs.    
                                        </td>
                                        <td>
                                            <input type="text" name="water_connection_ref_rate" style="width:100%; border: none;" id="water_connection"  onblur="makedecimal(this.id)" onkeyup="allinone();" value="<?php echo $water_connection_ref_rate; ?>" style="width:100%; border: none;" readonly/>
                                        </td>

                                    </tr>
                                    <tr>
                                        <?php foreach ($this->Pre_sales_model->get_charge_amount() as $row) {
                                            ?>
                                            <?php $charge_amount1 = $row->charge_amount * 18 / 100; ?>
                                            <?php $charge_amount = $row->charge_amount + $charge_amount1; ?>
                                            <?php $ch_amt = $row->charge_amount ?>
                                            <?php //$charge_amount = $charge_amount1 + $charge_amount2; ?>


                                        <?php } ?>

                                        <td colspan="3">
                                            Maintanance Charges
                                        </td>

                                        <td>
                                            <?php $ch_amt; ?>     
                                        </td>
                                        <td>
                                            18% for GST <span class="pull-right">Rs.</span>
                                        </td>
                                        <td>
                                            <input type="text" name="maintenance_cost_ref_rate" id="maintanace_charges" style="width:100%; border: none;" onblur="makedecimal(this.id)" onkeyup="allinone();" name="$maintenance_cost_ref_rate"  value="<?php echo $maintenance_cost_ref_rate; ?>"  readonly/>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td colspan="3">
                                            Total Cost
                                        </td>

                                        <td>
                                                 
                                        </td>
                                        <td>
<span class="pull-right">Rs.</span>
                                        </td>
                                        <td>
                                            <input type="text"  name="cost_pay" value='<?php echo $cost_payble_to_company;  ?>' id="cost_pay" style="width:100%; border: none;" readonly/>
                                        </td>
                                    </tr>
                                    <!--tr>

                                        <td colspan="3">
                                            GST Tax
                                        </td>

                                        <td>
                                            Rs.    
                                        </td>
                                        <td>

                                        </td>
                                        <td>
                                            <input type="text"  name="taxgst" id="totalgst" />
                                        </td>
                                    </tr-->
                                    <tr>
                                        <td colspan="7">
                                            <label>Extra Charges</label>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td colspan="3">
                                            REGISTRY CHARGES
                                        </td>                                      
                                        <td>
                                            As Per Actual
                                        </td>
                                        <td colspan="2">
                                            Based on Prevailing Collector Guide Line rates
                                        </td>
                                    </tr>

                                    <tr>

                                        <td colspan="3">
                                            Discount
                                        </td>

                                        <td class="text-right">
                                            Rs.  
                                        </td>
                                        <td>

                                        </td>
                                        <td>
                                            <input type="text" onblur="makedecimal(this.id)" onkeyup="allinone();"  value='<?php echo $discount; ?>' id="discount" name="discount" style="width:100%;" />
                                        </td>
                                    </tr>
                                    <tr>

                                        <td  colspan="3">
                                            NET FINAL TOTAL COST
                                        </td>

                                        <td>
                                            Rs.   
                                        </td>
                                        <td>
                                            <span>53535+Registry + Society + <br>Monthly Operational Charges + Mutation</span>
                                        </td>
                                        <td>
                                            <input type="text" name="net_final_total_cost" value='<?php echo $total_finalcost; ?>' id="net_final_total_cost" style="width:100%; border: none;" readonly/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="7">
                                            <span>Note :- Registration charges of Plot registry shall be charged as per actual additionally</span>
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
                                       &nbsp;<textarea cols="3" id="discussion"  rows="4" style="width:100%;" name="discussion" class="form-control"><?php echo $discussion ?></textarea>
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
                      $('#toppageheader').html('Upadate Plot Sheet1');
                $("a:contains(Upadate Plot Sheet1)").parent().addClass('active');
                });
 

                function allinone()
                {

                    var ttl = 0;
                    var total_cost_of_unit = Number(document.getElementById('total_cost_of_unit').value);
                    var mpseb_charges = Number(document.getElementById('mpseb_charges').value);
                    var water_connection = Number(document.getElementById('water_connection').value);
                    var maintanace_charges = Number(document.getElementById('maintanace_charges').value);
                    var discount = Number(document.getElementById('discount').value);

                    var ttl = (ttl + total_cost_of_unit + mpseb_charges + water_connection + maintanace_charges).toFixed(2);//+parseInt(two)+parseInt(three);
                    var nftc = (ttl - discount).toFixed(2);
                    document.getElementById('cost_pay').value = ttl;
                    document.getElementById('net_final_total_cost').value = nftc;
                    var cost_pay = document.getElementById('cost_pay').value;
                    if(cost_pay < discount)
                    {
                        alert('discount cannot be more then the total cost');
                        document.getElementById('discount').value =0;
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
