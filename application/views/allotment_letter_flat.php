<!DOCTYPE html>
<!--
Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
Unauthorized copying of this file, via any medium is strictly prohibited
Proprietary and confidential.
Written by Oga Technologies, October 1,  2016.
-->

<html>
    <head>
        <title>Alottment Letter</title>
        <?php
        require_once('assets/html_head_links.php');
        ?>
        <style>
            .container{
                padding-top: 50px;
                padding-bottom: 50px;
                font-family: vardana;
            }
            input{
                border: none;
                border-bottom: 1px solid;
            }
            input[type=text]:disabled {

                background: white;
            }

            @media print
            {
                /*@page {size: landscape}*/
                .non-printable { display: none; }
                #printable { display: block;}
                .container{
                    margin-top:100px;
                }
                html, body {
                    width: 210mm !important;
                    height: 290mm !important;
                    font-size: 14px;
                }
            }
            p{
                text-align:justify;
            }
            body{
                font-size: 16px;
            }

            .navbar.navbar-inverse.sidebar {
                margin-top: 55px !important; 
            }

        </style> 
    </head>
    <body>
        <div style="z-index: 10;">
            <div class="non-printable">
                <?php
                require_once('assets/top_menu.php');
                require_once('assets/side_menu.php');
                ?>
            </div>
        </div>
        <div class="main">
            <div class="container">
                <a href="javascript: history.go(-1)" class="btn btn-primary pull-right clickable" role="button"> <i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;&nbsp;Back&nbsp;</a><br><br>
                <input type="hidden" value="<?php //$customer_id = $id;             ?>" disabled/><br>
                <?php $customer_id ?>               
                <?php
                foreach ($this->Sheet_model->get_prospect_info($customer_id) as $row) {
                    ?> 
                    <?php $pre_salesid = $row->pre_salesid; ?>
                <?php } ?>
                <?php
                foreach ($this->Agreement_model->view_sheet1($pre_salesid) as $row) {
                    ?>
                    <?php $plot_size_mtr = $row->plot_size_mtr; ?>
                    <?php $plot_size_ft = $row->plot_size_ft; ?>
                    <?php $type = $row->type; ?>
                    <?php $category = $row->category; ?>
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
                foreach ($this->Agreement_model->get_applinfo($customer_id) as $row) {
                    ?>
                    <?php $row->name; ?>
                    <?php $date = $row->date; ?>
                    <?php $pre_salesid = $row->pre_salesid; ?>
                    <?php $customer_id = $row->customer_id; ?>
                    <?php $block = $row->block; ?>
                    <?php $row->unit_no; ?>
                    <?php $ca_name = $row->ca_name; ?>
                    <?php $type = $row->type; ?>
                    <?php $name = $row->name; ?>
                    <?php $unit_no = $row->unit_no; ?>
                    <?php $mr_mrs = $row->mr_mrs; ?>
                    <?php $son_doughter_wife_mr_mrs = $row->son_doughter_wife_mr_mrs; ?>
                    <?php $son_doughter_wife = $row->son_doughter_wife; ?>
                    <?php $east_by = $row->east_by ?>
                    <?php $west_by = $row->west_by ?>
                    <?php $north_by = $row->north_by ?>
                    <?php $south_by = $row->south_by ?>

                    <?php $aadhar_no = $row->aadhar_no; ?>
                    <?php $swd_of = $row->swd_of; ?>
                    <?php $pan = $row->pan; ?>
                    <?php $cheque_no = $row->cheque_no; ?>
                    <?php $fappl_age = $row->fappl_age; ?>
                    <?php $checkdate = $row->date; ?>
                    <?php $checkdate1 = $row->date; ?>
                    <?php $bank_name = $row->bank_name; ?>

                    <?php $present_addr = $row->present_addr; ?>
                    <?php $pin_code = $row->pin_code; ?>
                    <?php $ca_pin_code = $row->ca_pincode; ?>
                    <?php $co_present_add = $row->co_present_add; ?>
                    <?php $customer_booking_amt = $row->booking_amt; ?>



                <?php } ?>


                <form class="form-inline">
                    <div id="printable">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span><strong><?php echo $project_name; ?> </strong></span><span><strong><?php echo $block; ?> </strong></span> 

                                    <span><strong><?php
                                            echo $category . nbs(1);
                                            ?>/<?php echo $unit_no; ?>/2018</strong></span>
                                </div><br><br>
                                <div class="form-group">


                                    <?php
                                    foreach ($this->Company_info_model->get_company_info() as $row) {
                                        ?> 
                                        <span><?php echo $row->attribute; ?> No</span>&nbsp;:&nbsp;
                                        <span><?php echo $row->value; ?></span>
                                    <?php } ?>

                                </div>
                            </div>
                            <div class="col-md-6" style="text-align:right;">

                                DATE: .................
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <p class="text-center"><span  style="font-size: 16px;"><strong><u>ALLOTMENT LETTER </u></strong></span></p>
                        </div><br><br>

                        <div class="row">
                            <div class="col-md-6">
                                <address>

                                    <label>To,</label><br>

                                    <label><span><?php echo $mr_mrs; ?></span></label>
                                    &nbsp;&nbsp;<span><?php echo $name; ?></span><br>

                                    <label><span><?php echo $son_doughter_wife; ?></span></label>
                                    &nbsp;&nbsp;<span><strong><?php echo $son_doughter_wife_mr_mrs; ?></strong></span>

                                    <span><?php echo $swd_of; ?></span><br>

                                    <label>R/o</label>
                                    &nbsp;&nbsp;<span><?php echo $permanent_addr; ?></span>

                                </address>
                            </div>
                            <div class="col-md-6">




                            </div>
                        </div>
                        <?php if ($project_id == 1) { ?>
                            <div class="row">
                                <div class="col-md-12">


                                    <p>It is here by informed that you have deposited a sum of Rs. <?php echo number_format((float) $customer_booking_amt, 2, '.', ''); ?>
                                        <input type="hidden" id="deposited" name="number" placeholder="Number OR Amount" onmouseover="word.innerHTML = convertNumberToWords(this.value)" value="<?php echo number_format((float) $customer_booking_amt, 2, '.', ''); ?>" readonly/> 
                                        (Rupees <span id='worddeposited' style="font-weight:bold;"></span> only/-)
                                        as part booking of one Residential Unit No.<?php echo nbs(2) . $category; ?> - <?php echo $unit_no; ?> 
                                        in a plotable Row/Group housing scheme know as <?php echo $project_name; ?> <?php echo $block; ?>
                                        AT VILLAGE KHAJURI KALAN on land Khasra. NO 824/1, 825/2, 828/1/2, 816, 827/1, 825/1/क 825/1/ख 828/1/1/ख & 827/2 Near Khajuri Square, Bhopal Bye-Pass Road, Teh. Huzur, Dist. BHOPAL (M.P.) which is under construction. 
                                    </p>
                                    <p>That the built-up area (Roofcovered area) of this Residential <?php echo $category; ?> Unit is <?php echo $unit_no; ?><?php echo nbs(2) . $flat_carpet_area_ft; ?>  Sqft. (<?php echo $flat_carpet_area_mt; ?>Sqmts.). 
                                        On <?php echo $category; ?>  unit size <?php echo $plot_size_mtr; ?> Mt. Total <?php echo $category; ?>  unit area (<?php echo $flat_carpet_area_mt; ?>Sq. Mts.). The total sale realisation
                                        against the Residential <?php echo $category; ?>  Unit is Rs. <?php echo number_format((float) $total_cost, 2, '.', ''); ?> 
                                        <input type="hidden" id="residential" name="number" placeholder="Number OR Amount" onmouseover="word.innerHTML = convertNumberToWords(this.value)" value="<?php echo number_format((float) $total_cost, 2, '.', ''); ?>" readonly/> 
                                        (Rupees <span id='wordresidential' style="font-weight:bold;"></span> only/-).
                                    </p>

                                    <p>After adjusting your deposit in total value balance Rs.<?php echo number_format((float) $total_cost - $customer_booking_amt, 2, '.', ''); ?> 
                                        <input type="hidden" id="adjusting" name="number" placeholder="Number OR Amount" onmouseover="word.innerHTML = convertNumberToWords(this.value)" value="<?php echo number_format((float) $total_cost - $customer_booking_amt, 2, '.', ''); ?>" readonly/> 
                                        (Rupees <span id='wordadjusting' style="font-weight:bold;"></span> only/-)
                                        is to be pay by you as per the payment schedule of the agreement. The boundaries of the plot is as under.</p>



                                </div>
                            </div><br><br>
                            <div class="row">
                                <div class="col-xs-2">
                                </div>
                                <div class="col-xs-10">
                                    <div class="col-xs-12">
                                        <div class="col-xs-2">
                                            <label>East By</label>
                                        </div>
                                        <div class="col-xs-1">
                                            :
                                        </div>
                                        <div class="col-xs-9">
                                            <?php echo $east_by; ?>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="col-xs-2">
                                            <label>West By</label>
                                        </div>
                                        <div class="col-xs-1">
                                            :
                                        </div>
                                        <div class="col-xs-9">
                                            <?php echo $west_by; ?>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="col-xs-2">
                                            <label>North By</label>
                                        </div>
                                        <div class="col-xs-1">
                                            :
                                        </div>
                                        <div class="col-xs-9">
                                            <?php echo $north_by; ?>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="col-xs-2">
                                            <label>South By</label>
                                        </div>
                                        <div class="col-xs-1">
                                            :
                                        </div>
                                        <div class="col-xs-9">
                                            <?php echo $south_by; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-2">
                                </div>                
                            </div>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <strong><p>Confirmation of this allotment is subjected to the execution of agreement only.</p></strong>
                                </div>
                            </div>
                            <br>
                            <br>
                        <?php } else { ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <p>
                                        It is here by confirm that you have deposited a sum of Rs.<?php echo number_format((float) $customer_booking_amt, 2, '.', ''); ?> 


                                        (Rupees <span id='wordnumoneone' style="font-weight:bold;"></span> only/-)
                                        against booking of one Ready built Residential Flat in ready built Residential Complex in a housing scheme know as 
                                        ESSARJEE Sampada Phase-1 "Block-B” Shop-Cum-Residence, which is part of the project Essarjee Sampada Phase – I situated at Village
                                        KHAJURI KALAN, on land Kh. NO. 824/1, 825/2, 828/1/2, 816, 827/1, 825/1/d] 825/1/[k] 828/1/1/[k] & 827/2 Near Khajuri Square,
                                        on Bhopal Bye-Pass Road, Teh.-Huzur, Dist.-BHOPAL (M.P.). Further we confirm that we have allotted you a
                                        Flat No. <?php echo $unit_no; ?> having boundaries as under.
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-2">
                                </div>
                                <div class="col-xs-8">
                                    <div class="col-xs-12">
                                        <div class="col-xs-2">
                                            <label>East By</label> &nbsp;&nbsp;:
                                        </div>
                                        <div class="col-xs-10">
                                            <?php echo $east_by; ?>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="col-xs-2">
                                            <label>West By</label> &nbsp;&nbsp;:
                                        </div>
                                        <div class="col-xs-10">
                                            <?php echo $west_by; ?>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="col-xs-2">
                                            <label>North By</label> &nbsp;&nbsp;:
                                        </div>
                                        <div class="col-xs-10">
                                            <?php echo $north_by; ?>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="col-xs-2">
                                            <label>South By</label> &nbsp;&nbsp;:
                                        </div>
                                        <div class="col-xs-10">
                                            <?php echo $south_by; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-2">
                                </div>                
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    That the built-up area (roof slab covered area) of this Flat is <?php echo $unit_no; ?><?php echo nbs(2) . $flat_carpet_area_ft; ?> Sqft. (<?php echo $flat_carpet_area_mt; ?>. Sq. Mts.).
                                    The total sale value of the Flat is Rs.<?php echo number_format((float) $total_cost, 2, '.', ''); ?> 


                                    (Rupees <span id='wordnumtwotwo' style="font-weight:bold;"></span> only/-).
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    After adjusting your deposit in total value, balance Rs.<?php echo number_format((float) $total_cost - $customer_booking_amt, 2, '.', ''); ?> (Rupees <span id='wordnumthreethree' style="font-weight:bold;"></span> only/-).
                                    is to be paid by you as under.

                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <p>
                                        .	That Approx 10% of the cost i.e. Rs. <?php echo number_format((float) $total_cost * 10 / 100, 2, '.', ''); ?>(Rupees <span id='wordnumfourfour' style="font-weight:bold;"></span> only/-) shall be deposited as booking amount deposit within 15 days of booking/agreement out of which customer has paid Rs.  <?php echo number_format((float) $booking_amt, 2, '.', ''); ?>  vide cheque no. <?php echo $cheque_no; ?>, date: <?php
                                        $x = explode(' ', $checkdate1);
                                        $checkdate1 = new DateTime($x[0]);
                                        echo $checkdate1->format('d-m-Y');
                                        ?>,<?php echo $bank_name; ?>
                                    </p>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    2.	That 90% of the cost i.e. Rs.<?php echo number_format((float) $total_cost * 90 / 100, 2, '.', ''); ?> (Rupees <span id='wordnumfivefive' style="font-weight:bold;"></span> only/-)
                                    is payable before registration of unit with 90 days from the date of agreement
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    That the charges toward Water Connection, MPMKVV Co Ltd. & Registration of flat shall be born by you additionally as per agreement. 
                                </div>
                            </div>

                        <?php } ?>
                        <br>
                        <br>
                        <div class="row">
                            <div class="col-md-4 text-left" >
                                <?php
                                foreach ($this->Company_info_model->get_Company_name() as $row) {
                                    ?>
                                    <?php $company_name = $row->value; ?>
                                <?php } ?>
                                <strong>For <?php echo $company_name; ?></strong>
                            </div>
                            <div class="col-md-4">

                            </div>
                            <div class="col-md-4">

                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-md-4 text-left">
                                <strong> (Authorised Signatory)</strong>
                            </div>
                            <div class="col-md-4">

                            </div>
                            <div class="col-md-4">

                            </div>
                        </div>

                    </div>
                    <input type="hidden" id="numoneone" name="number1" placeholder="Number OR Amount"  value="<?php echo number_format((float) $customer_booking_amt, 2, '.', ''); ?>" readonly/> 
                    <input type="hidden" id="numtwotwo" name="number2" placeholder="Number OR Amount" value='<?php echo number_format((float) $total_cost, 2, '.', ''); ?>' readonly /> 
                    <input type="hidden" id="numthreethree" name="number2" placeholder="Number OR Amount" value='<?php echo number_format((float) $total_cost - $customer_booking_amt, 2, '.', ''); ?>' readonly /> 
                    <input type="hidden" id="numfourfour" name="number2" placeholder="Number OR Amount" value='<?php echo number_format((float) $total_cost, 2, '.', ''); ?>' readonly /> 
                    <input type="hidden" id="numfivefive" name="number2" placeholder="Number OR Amount" value='<?php echo number_format((float) $total_cost, 2, '.', ''); ?>' readonly /> 

                </form>
            </div>  
        </div>




        <script src="<?php echo base_url('resources/js/numtoword.js'); ?>" ></script>
        <script>

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
                                                $('#toppageheader').html('View Allotment Letter <span class="pull-right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="print" id="btnprint" value="print" class="btn btn-sm btn-default" onClick="print_this_doc();">Print&nbsp;&nbsp;<i class="fa fa-print"></i></button></span>');
                                                $("a:contains(Allotment)").parent().addClass('active');
                                            });

                                            n = new Date();
                                            y = n.getFullYear();
                                            m = n.getMonth() + 1;
                                            d = n.getDate();
                                            document.getElementById("date22").innerHTML = d + "/" + m + "/" + y;


        </script>

        <script>


            $(document).ready(function () {
                /*  var deposited = $('#deposited').val();
                 $('#worddeposited').text(convertNumberToWords(deposited));
                 
                 var residential = $('#residential').val();
                 $('#wordresidential').text(convertNumberToWords(residential));
                 
                 var adjusting = $('#adjusting').val();
                 $('#wordadjusting').text(convertNumberToWords(adjusting));
                 
                 */
                var numone = $('#numoneone').val();
                $('#wordnumoneone').text(convertNumberToWords(numone));

                var numtwo = $('#numtwotwo').val();
                $('#wordnumtwotwo').text(convertNumberToWords(numtwo));

                var numthree = $('#numthreethree').val();
                $('#wordnumthreethree').text(convertNumberToWords(numthree));

                var numfour = $('#numfourfour').val();
                $('#wordnumfourfour').text(convertNumberToWords(numfour));

                var numfive = $('#numfivefive').val();
                $('#wordnumfivefive').text(convertNumberToWords(numfive));

            });

            function convertNumberToWords(amount) {

                var words = new Array();
                words[0] = '';
                words[1] = 'One';
                words[2] = 'Two';
                words[3] = 'Three';
                words[4] = 'Four';
                words[5] = 'Five';
                words[6] = 'Six';
                words[7] = 'Seven';
                words[8] = 'Eight';
                words[9] = 'Nine';
                words[10] = 'Ten';
                words[11] = 'Eleven';
                words[12] = 'Twelve';
                words[13] = 'Thirteen';
                words[14] = 'Fourteen';
                words[15] = 'Fifteen';
                words[16] = 'Sixteen';
                words[17] = 'Seventeen';
                words[18] = 'Eighteen';
                words[19] = 'Nineteen';
                words[20] = 'Twenty';
                words[30] = 'Thirty';
                words[40] = 'Forty';
                words[50] = 'Fifty';
                words[60] = 'Sixty';
                words[70] = 'Seventy';
                words[80] = 'Eighty';
                words[90] = 'Ninety';
                amount = amount.toString();
                var atemp = amount.split(".");
                var number = atemp[0].split(",").join("");
                var n_length = number.length;
                var words_string = "";
                if (n_length <= 9) {
                    var n_array = new Array(0, 0, 0, 0, 0, 0, 0, 0, 0);
                    var received_n_array = new Array();
                    for (var i = 0; i < n_length; i++) {
                        received_n_array[i] = number.substr(i, 1);
                    }
                    for (var i = 9 - n_length, j = 0; i < 9; i++, j++) {
                        n_array[i] = received_n_array[j];
                    }
                    for (var i = 0, j = 1; i < 9; i++, j++) {
                        if (i == 0 || i == 2 || i == 4 || i == 7) {
                            if (n_array[i] == 1) {
                                n_array[j] = 10 + parseInt(n_array[j]);
                                n_array[i] = 0;
                            }
                        }
                    }
                    value = "";
                    for (var i = 0; i < 9; i++) {
                        if (i == 0 || i == 2 || i == 4 || i == 7) {
                            value = n_array[i] * 10;
                        } else {
                            value = n_array[i];
                        }
                        if (value != 0) {
                            words_string += words[value] + " ";
                        }
                        if ((i == 1 && value != 0) || (i == 0 && value != 0 && n_array[i + 1] == 0)) {
                            words_string += "Crores ";
                        }
                        if ((i == 3 && value != 0) || (i == 2 && value != 0 && n_array[i + 1] == 0)) {
                            words_string += "Lakh ";
                        }
                        if ((i == 5 && value != 0) || (i == 4 && value != 0 && n_array[i + 1] == 0)) {
                            words_string += "Thousand ";
                        }
                        if (i == 6 && value != 0 && (n_array[i + 1] != 0 && n_array[i + 2] != 0)) {
                            words_string += "Hundred and ";
                        } else if (i == 6 && value != 0) {
                            words_string += "Hundred ";
                        }
                    }
                    words_string = words_string.split("  ").join(" ");
                }
                return words_string;
            }
        </script>
    </body>
</html>

