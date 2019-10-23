

<html>
    <head>
        <title>Cost Calculation</title>
        <?php
        require_once('assets/html_head_links.php');
        ?>
        <link rel="stylesheet" href="<?php echo base_url('resources/css/sheet_one.css'); ?>"/>
        <style>

            li{
                padding: 2px !important;
            }
            ol{
                font-size: 10px !important;
            }
            #myReset{
                background-color:white;
                border:none;
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

            @page {
                size: auto;   /* auto is the initial value */
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
        <div style="z-index: 10;">
            <?php
            require_once('assets/top_menu.php');
            require_once('assets/side_menu.php');
            ?>
        </div>
        <div class="main">
            <div id="printable">
                <div class="container">

                    <?php
                    foreach ($this->Sheet_model->get_prospect_info($customer_id) as $row) {
                        ?> 
                        <?php $pre_salesid = $row->pre_salesid; ?>
                    <?php } ?>
                    <?php
                    foreach ($this->Agreement_model->view_sheet1($pre_salesid) as $row) {
                        ?>
                        <?php $type = $row->type; ?>
                        <?php $flat_carpet_area_mt = $row->flat_carpet_area_mt; ?>
                        <?php $flat_carpet_area_ft = $row->flat_carpet_area_ft; ?>
                        <?php $total_unit_cost_as_per_carpet_area = $row->total_unit_cost_as_per_carpet_area; ?>
                        <?php $total_balcony_area = $row->total_balcony_area; ?>
                        <?php $total_balcony_area_2 = $row->total_balcony_area_2; ?>
                        <?php $total_proportionate_common_area = $row->total_proportionate_common_area; ?>
                        <?php $flat_parking = $row->flat_parking; ?>
                        <?php $maintenance_cost_ref_rate = $row->maintenance_cost_ref_rate; ?>
                        <?php $mpseb_cost_ref_rate = $row->mpseb_cost_ref_rate; ?>
                        <?php $gst = $row->gst; ?>
                        <?php $cost_payble_to_company = $row->cost_payble_to_company; ?>
                        <?php $discount = $row->discount; ?>
                        <?php $total_cost = $row->total_cost; ?>
                    <?php } ?>
                    <?php
                    $data['project_id'] = $project_id;
                    foreach ($this->Pre_sales_model->getproject_info($data) as $row) {
                        ?>
                        <?php $project_name = $row->project_name; ?>
                    <?php } ?>


                    <?php $this->input->get('id'); ?>


                    <table class="table table-bordered">
                        <tbody> 
                            <tr>
                                <td colspan="5"> 
                                    <span class="pull-left"><h3>Flat - Cost Calculation</h3></span>
                                    <span class="pull-right"> <a href="javascript: history.go(-1)" class="btn btn-primary pull-right clickable non-printable" role="button">Go Back</a></span>   
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">Name</td>
                                <td colspan="3"><input type="hidden" name="customer_id" value="<?php echo $customer_id; ?>"/><?php echo $name; ?></td>
                            </tr>
                            <tr>
                                <td colspan="2">Project</td>
                                <td colspan="3"><span><?php echo $project_name . nbs(1) . $block; ?></span></td>
                            </tr>
                            <tr>
                                <td colspan="2">Unit No.</td>
                                <td colspan="3"><span><?php echo $unit_no; ?></span></td>
                            </tr>
                            <tr>
                                <td colspan="2">Type</td>
                                <td colspan="3"><span><?php echo $type; ?></span></td>
                            </tr>
                            <tr>
                                <td colspan="2">1. Flat Carpet Area</td>
                                <td colspan="3"><span><?php echo $flat_carpet_area_mt; ?></span></td>
                            </tr>
                            <tr> 
                                <td colspan="2">2. Flat Carpet Area</td>
                                <td colspan="3"><span><?php echo $flat_carpet_area_ft; ?></span></td>
                            </tr>

                            <tr>
                                <td class="text-center">1</td>
                                <td>Unit Cost as Per Carpet Area</td>
                                <td><i class="fa fa-inr"></i></td>                                  
                                <td colspan="2"> <span><?php echo $total_unit_cost_as_per_carpet_area; ?></span>  </td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td>Balcony Area (1)</td>
                                <td><i class="fa fa-inr"></i></td>
                                <td colspan="2"><span><?php echo $total_balcony_area ?></span></td>
                            </tr>
                            <tr>
                                <td class="text-center">3</td>
                                <td>Balcony Area (2)</td>
                                <td><i class="fa fa-inr"></i></td>
                                <td colspan="2"><span><?php echo $total_balcony_area_2 ?></span></td>
                            </tr>
                            <tr>
                                <td class="text-center">4</td>
                                <td>Proportionate Common area</td>
                                <td><i class="fa fa-inr"></i></td>
                                <td colspan="2"><span><?php echo $total_proportionate_common_area; ?></span> </td>
                            </tr>                             
                            <tr>
                                <td class="text-center">5</td>
                                <td>Parking</td>
                                <td><i class="fa fa-inr"></i></td>
                                <td colspan="2"><span><?php echo $flat_parking; ?></span></td>
                            </tr>
                            <tr>
                                <td class="text-center">6</td>
                                <td>Maintanance 5 Years</td>
                                <td><i class="fa fa-inr"></i></td>
                                
                                    <input type="hidden" value="" onKeyUp="calc(this)" />
                                
                                    <td colspan="2"><span><?php echo $maintenance_cost_ref_rate; ?></span></td>
                            </tr>

                            <tr>
                                <td class="text-center">7</td>
                                <td>GST</td>
                                <td><i class="fa fa-inr"></i></td>
                               
                                    <span style="display:none;"> %</span>
                                    <span style="display:none;"></span>
                                
                                <td colspan="2"><span><?php echo $gst; ?></span></td>
                            </tr>
                            <tr>
                                <td class="text-center">8</td>
                                <td>Discount</td>
                                <td><i class="fa fa-inr"></i></td>
                                
                                    <span style="display:none;"> %</span>
                                    <span style="display:none;"></span>

                                
                                    <td colspan="2"><?php echo $discount; ?></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Cost Payable to Company</td>
                                <td><i class="fa fa-inr"></i></td>
                                <td colspan="2">
                                    <span><?php echo $cost_payble_to_company; ?></span>
                                </td>

                            </tr>
                            <tr>
                                <td class="text-center">1</td>
                                <td>REGISTRY CHARGES</td>                                       
                                <td></td>
                                <td colspan="3">As Per Actual</td>
                            </tr>

                            <tr>
                                <td></td>
                                <td>Total Cost</td>
                                <td><i class="fa fa-inr"></i></td>
                                <td colspan="2"><span><?php echo $total_cost; ?></span></td>
                            </tr>
                            <tr>
                                <td>
                                    &nbsp;
                                </td>
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

                </div>

            </div>
        </div>
        <script type="text/javascript">


            function goBack() {
                window.history.back();
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
                $('#toppageheader').html('Cost Calculation <span class="pull-right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="print" id="btnprint" value="print" class="btn btn-sm btn-default" onClick="print_this_doc();">Print&nbsp;&nbsp;<i class="fa fa-print"></i></button></span>');
                $("a:contains(Cost Calculation)").parent().addClass('active');
            });
        </script>

    </body>
</html>
