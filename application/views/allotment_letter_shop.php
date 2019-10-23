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
            }
            p{
                text-align:justify;
            }
            .container{
                margin-top:100px;
            }
            html, body {
                width: 210mm !important;
                height: 290mm !important;
                font-size: 14px;
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
                <input type="hidden" value="<?php //$customer_id = $id;        ?>" disabled/><br>
                <?php $customer_id ?>               
                <?php
                foreach ($this->Allotment_letter_model->show_allotment($customer_id) as $row) {
                    ?>



                    <?php $ground_floor_carpet_area = $row->ground_floor_carpet_area; ?>
                    <?php $first_floor_carpet_area = $row->first_floor_carpet_area; ?>

                    <?php $cost_payable_to_company = $row->cost_payable_to_company; ?>
                <?php } ?>

                <?php
                foreach ($this->View_applicant_info->view_appl_info_for_allot($customer_id) as $row) {
                    ?>
                    <?php $pre_salesid = $row->pre_salesid; ?>     
                    <?php $date = $row->date; ?>  
                    <?php $cheque_no = $row->cheque_no; ?>
                    <?php $checkdate1 = $row->date; ?>
                    <?php $bank_name = $row->bank_name; ?>
                <?php } ?>
                <?php
                foreach ($this->Agreement_model->view_sheet1($pre_salesid) as $row) {
                    ?>
                    <?php $plot_size_mtr = $row->plot_size_mtr; ?>
                    <?php $plot_size_ft = $row->plot_size_ft; ?>
                    <?php $type = $row->type; ?>
                    <?php $category = $row->category; ?>

                    <?php $total_cost = $row->total_cost; ?>
                <?php } ?>

                <form class="form-inline">
                    <div id="printable">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span><strong><?php echo $project_name; ?> </strong></span><span><strong><?php echo $block; ?> </strong></span> /<span><strong><?php echo $unit_no; ?></strong></span>
                                </div><br><br>
                                <div class="form-group">
                                    <?php
                                    $data['project_id'] = $project_id;
                                    $data['block'] = $block;
                                    foreach ($this->Sheet_model->get_project_status($data) as $row) {
                                        ?> 

                                        <?php $status = $row->status; ?>
                                        <?php $project_name = $row->project_name; ?>
                                    <?php } ?>
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
                                            <span><?php echo $row->attribute; ?></span>&nbsp;&nbsp;:&nbsp;
                                            <span><?php echo $row->value; ?></span>
                                        <?php } ?>
                                    <?php } ?>

                                    <?php
                                    foreach ($this->Allotment_letter_model->show_allotment($customer_id) as $row) {
                                        ?>

                                        <?php $ground_floor_carpet_area = $row->ground_floor_carpet_area; ?>
                                        <?php $first_floor_carpet_area = $row->first_floor_carpet_area; ?>

                                        <?php $cost_payable_to_company = $row->cost_payable_to_company; ?>
                                        <?php $total_cost = $row->total_cost; ?>


                                        <?php $east_by = $row->east_by ?>
                                        <?php $west_by = $row->west_by ?>
                                        <?php $north_by = $row->north_by ?>
                                        <?php $south_by = $row->south_by ?>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="col-md-6" style="text-align:right;">

                                DATE: <span>.......................</span>
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

                                    <span><?php echo $swd_of; ?></span><br>

                                    <label>R/o</label>
                                    &nbsp;&nbsp;<span><?php echo $permanent_addr; ?> (<?php echo $pin_code; ?>)</span>

                                </address>
                            </div>
                            <div class="col-md-6">




                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p>

                                <p>
                                    It is here by confirm that you have deposited a sum of Rs. <?php echo number_format((float) $booking_amt, 2, '.', ''); ?><input type="text" id="amtrs" name="number" placeholder="Number OR Amount" onkeyup="word.innerHTML = convertNumberToWords(this.value)" value= "<?php echo number_format((float) $booking_amt, 2, '.', ''); ?>" hidden/>
                                    (Rupees &nbsp;<span id='word' style="height:20px; width:auto;"></span> Only) 
                                    against booking of one Ready Built Shop in ready built Residential Complex in a housing scheme know as
                                    <span><?php echo $project_name; ?></span> <span><?php echo $block; ?></span> "Block-B” Shop-Cum-Residence, which is part of the project <?php echo $project_name; ?> <?php echo $block; ?>
                                    situated at Village Khajuri Kalan, on land Khasra. NO. 824/1, 825/2, 828/1/2, 816, 827/1, 825/1/क 825/1/ख 828/1/1/ख
                                    & 827/2 Near Khajuri Square, on Bhopal Bye-Pass Road, Teh.-Huzur, Dist.-BHOPAL (M.P.). Further we confirm that we have
                                    allotted you a Shop No. <?php echo $unit_no; ?> having boundaries as under.</p> <br>


                            </div><br><br>
                            <div class="row">
                                <div class="col-xs-4">

                                </div>
                                <div class="col-xs-4">
                                    <div class="row">
                                        <div class="col-xs-5">
                                            East By
                                        </div>
                                        <div class="col-xs-7">
                                            <?php echo $east_by; ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-5">
                                            West By
                                        </div>
                                        <div class="col-xs-7">
                                            <?php echo $west_by; ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-5">
                                            North By
                                        </div>
                                        <div class="col-xs-7">
                                            <?php echo $north_by; ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-5">
                                            South By
                                        </div>
                                        <div class="col-xs-7">
                                            <?php echo $south_by; ?>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-xs-4">

                                </div>

                            </div><br><br>
                            <div class="row">
                                <div class="col-md-12">
                                    <p>That the built-up area (roof slab covered area) of this Shop is <?php echo $plot_size_ft; ?> Sqft. (<?php echo $plot_size_mtr; ?> Sq. Mts.).
                                        The total sale value of the Shop is Rs. <?php echo number_format((float) $total_cost, 2, '.', ''); ?><input type="hidden" id="residential" name="number" placeholder="Number OR Amount" onmouseover="word.innerHTML = convertNumberToWords(this.value)" value="<?php echo number_format((float) $total_cost, 2, '.', ''); ?>" readonly/> 
                                        (Rupees <span id='wordresidential' style="font-weight:bold;"></span> Only/-).</p>
                                    <br>
                                    <p>After adjusting your deposit in total value, balance Rs.<?php echo number_format((float) $total_cost - $booking_amt, 2, '.', ''); ?> (Rupees …………………….. ………………………………… Only)
                                        is to be paid by you as under.</p>
                                    <p>
                                        .	That Approx 10% of the cost i.e. Rs. <?php echo number_format((float) $total_cost * 10 / 100, 2, '.', ''); ?>(Rupees ……………………. only) shall be deposited as booking amount deposit within 15 days of booking/agreement out of which customer has paid Rs.  <?php echo number_format((float) $booking_amt, 2, '.', ''); ?>  vide cheque no. <?php echo $cheque_no; ?>, dated: <?php
                                        $x = explode(' ', $checkdate1);
                                        $checkdate1 = new DateTime($x[0]);
                                        echo $checkdate1->format('d-m-Y');
                                        ?>, Bank <?php echo $bank_name; ?>
                                    </p>
                                    <p>

                                        2.	That 90% of the cost i.e. Rs. <?php echo number_format((float) $total_cost * 90 / 100, 2, '.', ''); ?> (Rupees ……………………………….. only) is payable before registration of unit with 90 day from the date of agreement
                                    </p>
                                    <p>
                                        That the charges toward Water Connection, MPMKVV Co Ltd. & Registration of Shop shall be born by you additionally as per agreement. 
                                    </p>
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-md-4">
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


                                                var amtrs = $('#amtrs').val();
                                                $('#word').text(convertNumberToWords(amtrs));

                                                var deposited = $('#deposited').val();
                                                $('#worddeposited').text(convertNumberToWords(deposited));

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

