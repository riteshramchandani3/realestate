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
                <input type="hidden" value="<?php $customer_id = $id; ?>" disabled/><br>
                <?php
                foreach ($this->Allotment_letter_model->show_allotment($customer_id) as $row) {
                    ?>
                    <?php $unit_no = $row->unit_no; ?>
                    <?php $ground_floor_carpet_area = $row->ground_floor_carpet_area; ?>
                    <?php $first_floor_carpet_area = $row->first_floor_carpet_area; ?>
                    <?php $project_name = $row->project_name; ?>
                    <?php $block = $row->block; ?> 
                    <?php $cost_payable_to_company = $row->cost_payable_to_company; ?>
                <?php } ?>
                <form class="form-inline">
                    <div id="printable">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span><strong><?php echo $project_name; ?> </strong></span>/ <span><strong><?php echo $block; ?> </strong></span> /<span><strong><?php echo $unit_no; ?></strong></span>
                                </div><br><br>
                                <div class="form-group">
                                    <?php
                                    foreach ($this->Company_info_model->get_company_info() as $row) {
                                        ?> 
                                        <span><strong><?php echo $row->attribute; ?></strong></span>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;
                                        <span><?php echo $row->value; ?></span>
                                    <?php } ?>

                                </div>
                            </div>
                            <div class="col-md-6" style="text-align:right;">

                                DATE: <span id="date22"></span>
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <p class="text-center"><span  style="font-size: 16px;"><strong><u>ALLOTMENT LETTER</u></strong></span></p>
                        </div><br><br>

                        <div class="row">
                            <div class="col-md-6">
                                <address>

                                    <label>To,</label><br>

                                    <label><span><?php echo $mr_mrs; ?></span></label>
                                    &nbsp;&nbsp;<span><?php echo $name; ?></span><br>

                                    <label><span><?php echo $son_doughter_wife; ?></span></label>
                                    &nbsp;&nbsp;<span><strong><?php echo $son_doughter_wife_mr_mrs; ?></strong></span>

                                         <span><?php echo $swd_of; ?></span><br><?php // }    ?>

                                    <label>R/o</label>
                                    &nbsp;&nbsp;<span><?php echo $permanent_addr; ?></span>

                                </address>
                            </div>
                            <div class="col-md-6">




                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p class="text-justify">With Reference to your application dated <span><strong><?php $x = explode(' ', $date);
                                    echo $x[0];
                                    ?></strong></span>. It is here 
                                    by informed that you have deposited a sum of Rs.<span> <strong><?php echo $booking_amt; ?></strong></span>
                                    against booking of Duplex / Residential Unit No. <span> <strong><?php echo $unit_no; ?></strong></span>  in 
                                    a Row housing scheme know as <span><strong><?php echo $project_name; ?></strong></span> , which is under proposed
                                    construction.<br>
                                    That the carpet area of this duplex/residential unit is <span><strong><?php echo $ground_floor_carpet_area + $first_floor_carpet_area; ?> sqft</strong></span> . (built-up area Roofcoverd area <input type="text" disabled/> sqfts.).
                                    <br /><br />On plot size <input type="text" disabled/> <strong>Mt. X</strong> <input type="text" disabled/> <strong>Mt.</strong>
                                    Total Plot area (<span><strong><?php echo $ground_floor_carpet_area; ?> sqft</strong></span>).<br /><br />
                                    The total sale value of Duplex/Residential Unit is Rs. <span><strong><?php echo $cost_payable_to_company; ?> </strong></span>.
                                    <br><br> 
                                    After adjusting your deposit in total value balance of Rs. <input type="text" name="number" placeholder="Number OR Amount" value="<?php echo $cost_payable_to_company - $booking_amt; ?>" onkeyup="word.innerHTML = convertNumberToWords(this.value)" />(Rupees <div id="word"></div> Only.) is to be paid by you as per the payment schedule mentioned in
                                the agreement.The boundaries of duplex is as under.
                                </p>
                            </div>
                        </div><br><br>
                        <div class="row" style="text-align:center; font:bold;">
                            <label>East By</label>
                            &nbsp;&nbsp;&nbsp<input type="text" disabled/><br>
                            <label>West By</label>
                            &nbsp;&nbsp;<input type="text" disabled/><br>
                            <label>North By</label>
                            &nbsp;<input type="text" disabled/><br>
                            <label>South By</label>
                            <input type="text" disabled/><br>
                        </div><br><br>
                        <div class="row">
                            <div class="col-md-12">
                                <p><strong>Confirmation of this alootment is subject to the execution/registration of the agreement.</strong></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                For <strong> Essarjee Construction Pvt. Ltd.</strong>
                            </div>
                            <div class="col-md-4">

                            </div>
                            <div class="col-md-4">

                            </div>
                        </div>
                        <br><br><br>
                        <div class="row">
                            <div class="col-md-4" style="margin-left: 90px;">
                                <strong> (Authorised Signatory)</strong>
                            </div>
                            <div class="col-md-4">

                            </div>
                            <div class="col-md-4">

                            </div>
                        </div>
                    </div>

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
                                                        words_string += "Lakhs ";
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
