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
                padding-top: 10px;
                padding-bottom: 10px;
                font-family: Arial;
            }
            input{
                border: none;
                border-bottom: 1px solid;
                width:100px;
            }
            input[type=text]:disabled {
                width:100px;
                background: white;
            }

            @media print
            {
                /*@page {size: landscape}*/
                .non-printable { display: none; }
                #printable { display: block;}
                input{
                    border: none;
                    width:100px;
                }
                .form-control{
                    border: none;
                }
                 .container{
                    margin-top:100px;
                }
                html, body {
                    width: 210mm !important;
                    height: 290mm !important;
                    font-size: 14px;
                }  
                p{
                    text-align: justify;
                }
            }
            @page {
                size: 7in 9.25in;
                margin: 5mm 16mm 5mm 16mm;
            }
            body{

                font-family: Arial !important;
                font-size: 14px;
            }
            .btn{
                padding: 4px 8px;
                margin-bottom: 0;
                font-size: 13px;
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
                <a href="javascript: history.go(-1)" class="btn btn-primary pull-right clickable" role="button"> <i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;&nbsp;Back&nbsp;</a>
            </div>
            <div id="printable">
                <div class="container">
                    <input type="hidden" value="<?php //$customer_id = $id;              ?>" disabled/><br>
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
                        <?php $block = $row->block; ?>
                        <?php $project_id = $row->project_id; ?>
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
                    $data['plot_size_mtr'] = $plot_size_mtr;
                    $data['plot_size_ft'] = $plot_size_ft;
                    $data['project_id'] = $project_id;
                    $data['block'] = $block;
                    $data['unit_type'] = $type;
                    $data['category'] = $category;

                    foreach ($this->Agreement_model->getplotarea_info($data) as $row) {
                        ?>

                        <?php $plot_area = $row->plot_area; ?>
                        
                    <?php }
                    ?>

                    <?php
                    foreach ($this->Allotment_letter_model->show_allotment($customer_id) as $row) {
                        ?>

                        <?php $ground_floor_carpet_area = $row->ground_floor_carpet_area; ?>
                        <?php $first_floor_carpet_area = $row->first_floor_carpet_area; ?>

                        <?php $cost_payable_to_company = $row->cost_payable_to_company; ?>
                    <?php } ?>

                    <?php
                    foreach ($this->Allotment_letter_model->show_project_details($customer_id) as $row) {
                        ?>
                        <?php $project_id; ?>
                        <?php $type; ?>
                        <?php $block; ?>


                    <?php } ?>


                    <?php
                    foreach ($this->View_applicant_info->view_appl_co_ap_info($customer_id) as $row) {
                        ?>

                        <?php $ca_mr_mrs = $row->ca_mr_mrs; ?>     
                        <?php $ca_name = $row->ca_name; ?> 
                        <?php $ca_mr_mrs_1 = $row->ca_mr_mrs_1; ?>     
                        <?php $ca_name_1 = $row->ca_name_1; ?> 
                    <?php } ?>

                    <form class="form-inline">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <span><?php echo $project_name; ?> </span> <span><?php echo $block; ?> </span> /<span><?php echo $unit_no; ?></span>
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
                                            <span><?php echo $row->attribute; ?> No</span>&nbsp;:&nbsp;
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

                                        <?php $east_by = $row->east_by ?>
                                        <?php $west_by = $row->west_by ?>
                                        <?php $north_by = $row->north_by ?>
                                        <?php $south_by = $row->south_by ?>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="col-xs-6" style="text-align:right;">

                                DATE: <!--span id="date22"--></span>
                            </div>
                        </div>
                        <br><br>
                        <div class="row text-center">
                            <span>ALLOTMENT LETTER</span>
                        </div><br><br>

                        <div class="row">
                            <div class="col-xs-6">
                                <address>

                                    <span>To,</span><br>

                                    <span><?php echo $mr_mrs; ?></span>
                                    <span><?php echo $name; ?></span><br>

                                    <span><?php echo $son_doughter_wife; ?></span>
                                    <span><?php echo $son_doughter_wife_mr_mrs; ?></span>

                                    <span><?php echo $swd_of; ?></span><br>

                                    <span>R/o:</span>
                                    <span><?php echo $permanent_addr; ?> (<?php echo $pin_code; ?>)</span><br>

                                    <?php
                                    if ($ca_mr_mrs == '') {
                                        echo '';
                                    } else if ($ca_mr_mrs == 'Mrs.') {
                                        echo ' <span>Co-Applicants:</span>';
                                    } else if ($ca_mr_mrs == 'Ms.') {
                                        echo ' <span>Co-Applicants:</span>';
                                    } else if ($ca_mr_mrs == 'Mr.') {
                                        echo ' <span>Co-Applicants:</span>';
                                    } else if ($ca_mr_mrs == 'Mrs') {
                                        echo ' <span>Co-Applicants:</span>';
                                    } else if ($ca_mr_mrs == 'Ms') {
                                        echo ' <span>Co-Applicants:</span>';
                                    } else if ($ca_mr_mrs == 'Mr') {
                                        echo ' <span>Co-Applicants:</span>';
                                    }
                                    ?> &nbsp;&nbsp;<span><?php echo $ca_mr_mrs; ?></span> <span><?php echo $ca_name; ?></span>
                                    <?php
                                    if ($ca_mr_mrs_1 == '') {
                                        echo '';
                                    } else if ($ca_mr_mrs_1 == 'Mrs.') {
                                        echo ',';
                                    } else if ($ca_mr_mrs_1 == 'Ms.') {
                                        echo ',';
                                    } else if ($ca_mr_mrs_1 == 'Mr.') {
                                        echo ',';
                                    } else if ($ca_mr_mrs_1 == 'Mrs') {
                                        echo ',';
                                    } else if ($ca_mr_mrs_1 == 'Ms') {
                                        echo ',';
                                    } else if ($ca_mr_mrs_1 == 'Mr') {
                                        echo ',';
                                    }
                                    ?>

                                    <span><?php echo $ca_mr_mrs_1; ?></span> <span><?php echo $ca_name_1; ?></span>













                                </address>
                            </div>
                            <div class="col-xs-6">

                                <?php //echo $a ='<script type="text/javascript">','numToWords("2000");', '</script>';
                                ?>


                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <p>It is here by informed that you have deposited a sum of 
                                    Rs.<input type="text" id="amtrs" name="number" 
                                              placeholder="Number OR Amount"
                                              onkeyup="word.innerHTML = convertNumberToWords(this.value)"
                                              value= "<?php echo number_format((float) $booking_amt, 2, '.', ''); ?>" disabled/> 
                                    (Rupees &nbsp;<span id='word' style="height:20px; width:auto;"></span>  Only)
                                    against booking of one developed Residential Plot No.<?php echo $unit_no; ?> in a plotable 
                                    housing scheme know as "<?php echo $project_name; ?>" <?php echo $block; ?> AT VILLAGE KHAJURI KALAN on land Khasra No. 824/1, 825/2,
                                    828/1/2, 816, 827/1, 825/1/क 825/1/ख 828/1/1/ख & 827/2 Near Khajuri Square, Bhopal Bye-Pass Road, Teh. Huzur, Dist. BHOPAL (M.P.). 
                                </p> <br>

                                <p> That the plot size is <?php echo $plot_size_mtr; ?> Mt.   <?php //echo number_format((float) $width_m, 2, '.', '');  ?> Total Plot area (<?php echo number_format((float) $plot_area, 2, '.', ''); ?> Sq. Mts.).
                                    area of the Plot is <?php echo number_format((float) $plot_area*10.76, 2, '.', ''); ?> Sqft. 
                                    The total sale realisation against the Plot is Rs. <input type="text" id="amtrs2" name="number" placeholder="Number OR Amount" onkeyup="word.innerHTML = convertNumberToWords2(this.value)" value= "<?php echo number_format((float) $total_cost, 2, '.', ''); ?>" disabled/>(Rupees &nbsp;<span id='word2' style="height:20px; width:auto;"></span> 
                                    Only).</p><br>

                                <p>After adjusting your initial deposit/booking amount the balance Rs.<span><input type="text" id="amtrs1" name="number" placeholder="Number OR Amount" onkeyup="word.innerHTML = convertNumberToWords1(this.value)" value= "<?php echo number_format((float) $total_cost - $booking_amt, 2, '.', ''); ?>" disabled/></span>(Rupees &nbsp;<span id='word1' style="height:20px; width:auto;"></span> Only)
                                    is to be paid by you as per the payment schedule of the agreement. 
                                    The boundaries of the plot is as under.</p>
                            </div>
                        </div><br><br>
                        <div class="row">
                            <div class="col-xs-4">

                            </div>
                            <div class="col-xs-4">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <span>East By</span>
                                    </div>
                                    <div class="col-xs-7">
                                        <?php echo $east_by; ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-5">
                                        <span>West By</span>
                                    </div>
                                    <div class="col-xs-7">
                                        <?php echo $west_by; ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-5">
                                        <span>North By</span>
                                    </div>
                                    <div class="col-xs-7">
                                        <?php echo $north_by; ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-5">
                                        <span>South By</span>
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
                            <div class="col-xs-12">
                                <p>Confirmation of this allotment is subjected to the execution of agreement only.</p>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="row">
                            <div class="col-xs-8">
                                <?php
                                foreach ($this->Company_info_model->get_Company_name() as $row) {
                                    ?>
                                    <?php $company_name = $row->value; ?>
                                <?php } ?>
                                For <?php echo $company_name; ?>
                            </div>

                            <div class="col-xs-4">

                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-xs-4" style="margin-left: 90px;">
                                (Authorised Signatory)
                            </div>
                            <div class="col-xs-4">

                            </div>
                            <div class="col-xs-4">

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
                                    $(document).ready(function () {

                                        var amtrs = $('#amtrs').val();
                                        $('#word').text(convertNumberToWords(amtrs));
                                        var amtrs1 = $('#amtrs1').val();
                                        $('#word1').text(convertNumberToWords(amtrs1));
                                        var amtrs2 = $('#amtrs2').val();
                                        $('#word2').text(convertNumberToWords(amtrs2));
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
                                    function convertNumberToWords1(amount) {
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
                                    function convertNumberToWords2(amount) {
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
