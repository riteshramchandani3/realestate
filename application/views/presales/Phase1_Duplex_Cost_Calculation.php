<html>
    <head>
        <title>Duplex Phase1</title>
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
                    <form class="form-inline" action="<?php echo site_url('pre_sales/get_visitor_duplexphase1'); ?>" method="post" name="Form" enctype="multipart/form-data" onsubmit="return validateForm()">
                        <div id="printable">
                            <div class="container">
                                <?php
                                foreach ($this->Pre_sales_model->get_cost_max_id() as $row) {
                                    ?>
                                    <?php $max = $row->id ?>
                                    <?php $max_id = $max + 1; ?>
                                <?php } ?>
                                <input type="hidden" name="max_id" value="<?php //echo $max_id;           ?>" />
                                <input type="hidden" id="currentdate" name="currentdate" value="<?php //echo date('Y-m-d');           ?>">
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

                                foreach ($this->Pre_sales_model->getproj_info($data) as $row) {
                                    ?>

                                    <?php $plot_sqmt = $row->plot_sqmt; ?>
                                    <?php $plot_sqft = $row->plot_sqft; ?>
                                <?php }
                                ?>


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
                                    <?php //$built_up_area = $row->roof_covered_ground_gf_area; ?>
                                    <?php $built_up_area = $row->built_up_area; ?>
                                    <?php $basic_cost = $row->basic_cost; ?>
                                    <?php //$basic_cost = $row->basic_cost_ref_rate; ?>

                                <?php } ?>
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
                                                Plot Size
                                            </td>                                      
                                            <td colspan="2">
                                                <?php echo nbs(1); ?>  <?php echo $length_m; ?><?php echo nbs(2); ?>X<?php echo nbs(2); ?><?php echo $width_m; ?>                                           
                                                <input type="hidden" value="<?php echo $plot_size_mtr ?>" name="plot_size_mtr" style= " padding: 8px; margin: 0; border: 0; border-radius: 0px;"   />
                                            </td>
                                            <td>
                                                in Mtr
                                            </td>

                                        </tr>
                                        <tr>


                                            <td colspan="3">
                                                Plot Size Area
                                            </td>

                                            <td colspan="2">
                                                <input type="text" value="<?php echo $plot_sqmt; ?>" style="width:100%; border: none;" readonly />
                                            </td>
                                            <td>
                                                Sq. Mtr
                                            </td>

                                        </tr>
                                        <tr>

                                            <td colspan="3">
                                                Plot Area (SQFt)
                                            </td>

                                            <td colspan="2">
                                                <input type="text" id="plot_sqft" value="<?php echo $plot_sqft; ?>" style=" border: none;" readonly/>
                                            </td>
                                            <td>
                                                Sq. Mt.
                                            </td>

                                        </tr>
                                        <tr>

                                            <td colspan="3">
                                                Built-Up Area
                                            </td>

                                            <td colspan="2">
                                                <input type="hidden" name="cost_ca_ref_rate" value="<?php echo $basic_cost; ?>" />
                                                <input type="text" id="plot_sqft"  name="cost_carpet_area" value="<?php echo $built_up_area; ?>" style=" border: none;" readonly/>
                                            </td>
                                            <td>
                                                Sq. Mt.
                                            </td>

                                        </tr>
                                        <tr>

                                            <td colspan="3">
                                                Carpet Area
                                            </td>

                                            <td colspan="2">
                                                <input type="text" id="plot_sqft"  style="border: none;" readonly/>
                                            </td>
                                            <td>
                                                Sq. Mt.
                                            </td>

                                        </tr>

                                        <tr>

                                            <td colspan="3">
                                                Cost of land
                                            </td>

                                            <td colspan="2">
                                                Rs. <input type="text" name="land_cost" id="cost_of_land"  value="<?php echo number_format((float) $built_up_area * 10.76 * $basic_cost, 2, '.', ''); ?>" name="basic_cost_ref_rate"  onblur="makedecimal(this.id)" onkeyup="allinone();" />
                                            </td>
                                            <td>

                                            </td>

                                        </tr>

                                        <tr>

                                            <td colspan="3"> 
                                                Cost of construction
                                            </td>

                                            <td colspan="2">
                                                Rs.  <input type="text" name="construction_cost" id="cost_of_construction" value="0.00"  onblur="makedecimal(this.id)" onkeyup="allinone();" />       
                                            </td>
                                            <td>

                                            </td>

                                        </tr>
                                        <!--tr>

                                            <td colspan="3"> 
                                                Cost of Constructed Unit
                                            </td>

                                            <td colspan="2">
                                                Rs.  <input type="text" id="cost_of_constructed" value="<?php echo number_format((float) $built_up_area * 10.76 * $basic_cost, 2, '.', ''); ?>"  onblur="makedecimal(this.id)" onkeyup="allinone();"  style="border:none;" readonly />       
                                            </td>
                                            <td>

                                            </td>

                                        </tr-->

                                        <tr>
                                            <td colspan="3"> 
                                                Total Cost of Unit
                                            </td>
                                            <td colspan="2">
                                                <span class="pull-right"> Rs.</span>         
                                            </td>
                                            <td>
                                                <input id="total_cost" onblur="makedecimal(this.id)" onkeyup="allinone();"  type="text" name="total_unit_cost_as_per_carpet_area" value="<?php echo number_format((float) $built_up_area * 10.76 * $basic_cost, 2, '.', ''); ?>" style="border:none;" readonly />
                                            </td>
                                        </tr>
                                        <tr>

                                            <td colspan="3"> 
                                                Discount No. 1
                                            </td>

                                            <td colspan="2">
                                                <span class="pull-right"> Rs.</span>         
                                            </td>
                                            <td>
                                                <input id="discount_one" type="text"  name="discount" value="0.00" onblur="makedecimal(this.id)" onkeyup="allinone();" />
                                            </td>

                                        </tr>

                                        <tr>

                                            <td colspan="3">
                                                2nd Discounted Cost
                                            </td>

                                            <td colspan="2">
                                                <span class="pull-right"> Rs.</span>   
                                            </td>
                                            <td>
                                                <input type="text"  name="cost_pay" id="total_cost_after_discount" onblur="makedecimal(this.id)" onkeyup="allinone();" style="border:none;" readonly/>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td colspan="3"> 
                                                Discount No. 2
                                            </td>

                                            <td colspan="2">
                                                <span class="pull-right"> Rs.</span>         
                                            </td>
                                            <td>
                                                <input type="text" id="discount_two" name="discount_two" value="0.00" onblur="makedecimal(this.id)" onkeyup="allinone();" />
                                            </td>

                                        </tr>
                                        <tr>

                                            <td colspan="3"> 
                                                2nd Discounted Cost
                                            </td>

                                            <td colspan="2">
                                                <span class="pull-right"> Rs.</span>         
                                            </td>
                                            <td>
                                                <input type="text" id="total_cost_after_second_discount" name="net_final_total_cost" onblur="makedecimal(this.id)" onkeyup="allinone();" style="border:none;" readonly />
                                            </td>

                                        </tr>

                                        <tr>
                                            <td colspan="7">
                                                <span>Note :- Registration charges of Duplex registry shall be charged as per actual additionally</span>
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
                                        &nbsp;<textarea cols="3" id="discussion" rows="4" style="width:100%;" name="discussion" class="form-control"></textarea>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="text-center">
                                        <input type="submit" class="btn btn-success" value="submit" />
                                        <input  onclick="window.history.go(-1); return false;" type="button" value="Cancel" class="btn btn-primary clickable" />
                                    </div>
                                </div>
                            </div>
                        </div> 

                    </form>
                </div>
            </div>
            <script type="text/javascript">
                $(document).ready(function () {
                    allinone();
                    $('#toppageheader').html('Flat Cost Calculation');
                    $("a:contains(Flat Cost Calculation)").parent().addClass('active');
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

                    var cost_of_land = Number(document.getElementById('cost_of_land').value);
                    var cost_of_construction = Number(document.getElementById('cost_of_construction').value);
                    var final_cal22 = (cost_of_construction + cost_of_land).toFixed(2);//+parseInt(two)+parseInt(three);
                    document.getElementById('total_cost').value = final_cal22;

                    if (total_cost < discount_one)
                    {
                        alert('discount cannot be more then the total cost');
                        document.getElementById('discount_one').value = 0;
                    }
                    if (total_cost_after_discount < discount_two)
                    {
                        alert('discount cannot be more then the total cost');
                        document.getElementById('discount_two').value = 0;
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
