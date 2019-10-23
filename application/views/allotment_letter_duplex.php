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
            }
            input{
                border: none;
                border-bottom: 1px solid;
                width:100px;
            }
            input[type=text]:readonly {
                background: white;
                width:100px;
            }

            @media print
            {
                /*@page {size: landscape}*/
                .non-printable { display: none; }
                #printable { display: block;}
                input{
                    border: none;
                    width:120px;
                }
                .form-control{
                    border: none;
                }

                p{
                    text-align: justify;
                }

                .container{
                    margin-top:100px;
                }
                html, body {
                    width: 210mm !important;
                    height: 290mm !important;
                    font-size: 14px;
                }

            }
            @page {
                margin: 5mm 15mm 5mm 15mm;

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
                <?php
                if (isset($pdf)) {
                    $browsername = $_SERVER['HTTP_USER_AGENT'];
                    if (strpos($browsername, 'Chrome')) {
                        ?>
                        <iframe style="width: 1107px; height: 1200px; margin-left: 50px;" src="<?php echo base_url($pdf); ?>"></iframe>
                        <?php
                    } else {
                        ?>
                        <OBJECT data="<?php echo base_url($pdf); ?>" TYPE="application/x-pdf" TITLE="SamplePdf" WIDTH=1000 HEIGHT=1500 style="margin-left:140px;">
                        <!--a href="<?php //echo base_url('uploads/uploaded_docs/Allotment Letter_144_ESSARJEE SAMPADA_20180131011018.pdf');              ?>">afdfdaf</a--> 
                        </object>
                        <?php
                    }
                    ?>


                    <?php
                } else {
                    ?>
                    <div class="container">
                        <input type="hidden" value="<?php //$customer_id = $id;                  ?>" readonly/><br>
                        <?php $customer_id ?> 
                        <?php $is_form_complete = $this->realestate_model->is_application_form_complete($customer_id); ?>
                        <?php
                        if ($is_form_complete == 0) {
                            ?>
                            <div class="alert alert-danger">
                                <button data-dismiss="alert" class="close"  type="button">
                                    <span aria-hidden="true">x</span><span  class="sr-only">Close</span></button>
                                Application form is incomplete.


                            </div>
                            <a href="<?php echo site_url('View_ctrl/do_application_search') ?>" class="btn btn-primary btn-3d" role='button'>Application Form</a>
                            <?php
                            die;
                        }
                        ?>    
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

                        <?php
                        foreach ($this->Allotment_letter_model->show_project_details($customer_id) as $row) {
                            ?>
                            <?php $project_id; ?>
                            <?php $type; ?>
                            <?php $block; ?>
                            <?php $plot_size_mtr = $row->plot_size_mtr; ?>
                            <?php $plot_size_ft = $row->plot_size_ft; ?>
                            <?php $carpet_area = $row->carpet_area; ?>


                            <?php $roof_covered_ground_ff_area = $row->roof_covered_ground_ff_area; ?>
                            <?php $roof_covered_ground_gf_area = $row->roof_covered_ground_gf_area; ?>

                            <?php
                            //old
                        }
                        ?>

                        <?php
                        foreach ($this->View_applicant_info->view_appl_info_for_allot($customer_id) as $row) {
                            ?>
                            <?php $pre_salesid = $row->pre_salesid; ?>     
                            <?php $date = $row->date; ?>     
                        <?php } ?>
                        <?php
                        foreach ($this->View_applicant_info->view_appl_co_ap_info($customer_id) as $row) {
                            ?>

                            <?php $ca_mr_mrs = $row->ca_mr_mrs; ?>     
                            <?php $ca_name = $row->ca_name; ?> 
                            <?php $ca_mr_mrs_1 = $row->ca_mr_mrs_1; ?>     
                            <?php $ca_name_1 = $row->ca_name_1; ?>     

                        <?php } ?>


                        <?php
                        foreach ($this->View_applicant_info->view_sheet1($pre_salesid) as $row) {
                            ?>
                            <?php $project_id1 = $row->project_id; ?>
                            <?php //$name = $row->name; ?>
                            <?php //$mobile = $row->mobile; ?>
                            <?php $block1 = $row->block; ?>
                            <?php $category1 = $row->category; ?>
                            <?php $type1 = $row->type; ?>
                            <?php $unit_no1 = $row->unit_no; ?>
                            <?php $plot_size_mtr1 = $row->plot_size_mtr; ?>
                            <?php $plot_size_ft1 = $row->plot_size_ft; ?>
                            <?php $total_cost1 = $row->total_cost; ?>
                            <?php $cost_carpet_area = $row->cost_carpet_area; ?>
                            <?php $cost_ca_ref_rate = $row->cost_ca_ref_rate; ?>
                        <?php } ?>

                        <?php
                        $data['plot_size_mtr'] = $plot_size_mtr1;
                        $data['plot_size_ft'] = $plot_size_ft1;
                        $data['project_id'] = $project_id1;
                        $data['type'] = $type1;
                        $data['block'] = $block1;
                        foreach ($this->Allotment_letter_model->show_plot_info($data) as $row) {
                            $plot_sqmt = $row->plot_sqmt;
                            $plot_size_sqft = $row->plot_sqft;
                            $length_m = $row->length_m;
                            $width_m = $row->width_m;
                            $plot_areasqmt = $length_m * $width_m;
                        }
                        ?>






                        <form class="form-inline">

                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="row">
                                        <div class="form-group">
                                            <span><?php echo $project_name; ?> </span> <span><?php echo $block; ?> </span> /<span><?php echo $unit_no; ?></span>
                                        </div>
                                    </div>
                                    <div class="row">
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
                                            //  if (strcmp($status, 'Completed') == 0) {
                                            //      foreach ($this->Company_info_model->get_Completion_Certificate() as $row) {
                                            ?> 
                                            <?php //echo $row->attribute; ?> No&nbsp;:&nbsp;
                                            <?php //echo $row->value; ?>
                                            <?php //} ?>
                                            <?php //} else { ?>
                                            <?php
                                            foreach ($this->Company_info_model->get_company_info() as $row) {
                                                ?> 
                                                <?php echo $row->attribute; ?>&nbsp;&nbsp;:&nbsp;
                                                <?php echo $row->value; ?>
                                            <?php } ?>
                                            <?php //} ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6" style="text-align:right;">
                                    Date : <!--span id="date"></span-->   <?php
                                    $id = $customer_id;
                                    $sql = "SELECT date_of_document FROM documents_tbl WHERE applicant_id='$id' and doc_type='Allotment Letter'";

                                    $this->db->query($sql);
                                    // print_r($sql);
                                    if ($this->db->affected_rows() > 0) {
                                        ?>

                                        <?php
                                        foreach ($this->Allotment_letter_model->document_date($id) as $row) {
                                            ?>

                                            <?php $dateofdocument = $row->date_of_document; ?>

                                        <?php } ?> 


                                        <?php
                                        $x = explode(' ', $dateofdocument);
                                        $dateofdocument = new DateTime($x[0]);
                                        echo $dateofdocument->format('d-m-Y');
                                        ?>

                                        <?php
                                    } else {
                                        
                                    }
                                    ?>
                                </div>
                            </div>

                            <div class="row text-center">
                                <div class="col-xs-12">
                                    <u>ALLOTMENT LETTER</u>
                                </div>
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
                                    <p>

                                    <p>
                                        It is here by informed that you have deposited a sum of &nbsp;Rs. <?php echo number_format((float) $booking_amt, 2, '.', ''); ?> <input type="hidden" id="amtrs" name="number" placeholder="Number OR Amount" onkeyup="word.innerHTML = convertNumberToWords(this.value)" value= "<?php echo number_format((float) $booking_amt, 2, '.', ''); ?>" readonly/>
                                        (Rupees &nbsp;<span id='word' style="height:20px; width:auto;"></span>  Only) as part booking of one ready built 
                                        Residential Unit No.  <span> <?php echo $unit_no; ?></span> in a plotable Row/Group housing scheme
                                        known as <span><?php echo $project_name; ?></span> <span><?php echo $block; ?></span> AT VILLAGE KHAJURI KALAN on land Khasra No. 824/1, 825/2, 828/1/2, 816, 827/1, 825/1/क 825/1/ख 828/1/1/ख  & 827/2 Near Khajuri 
                                        Square, Bhopal Bye-Pass Road, Teh. Huzur, Dist. BHOPAL (M.P.). </p> <br>
                                    <input type="hidden" id="amtrs3" name="number" placeholder="Number OR Amount" onkeyup="word.innerHTML = convertNumberToWords2(this.value)" value= "<?php echo number_format((float) $total_cost1, 2, '.', ''); ?>" readonly/>
                                    <input type="hidden" id="amtrs2" name="number" placeholder="Number OR Amount" onkeyup="word.innerHTML = convertNumberToWords2(this.value)" value= "<?php echo number_format((float) $total_cost1, 2, '.', ''); ?>" readonly/> 
                                    <?php if ($block == 'Phase-1') { ?>
                                        That the built-up area (Roofcovered area) of this ready built Residential Unit is 
                                        <?php echo number_format((float) $cost_carpet_area * 10.76, 2, '.', ''); ?> Sqft.
                                        (<?php echo number_format((float) $cost_carpet_area, 2, '.', ''); ?>Sqmts.). 
                                        On plot size <?php echo $plot_size_mtr1; ?> Mt. Total Plot area (<?php echo number_format((float) $plot_areasqmt, 2, '.', ''); ?> Sq. Mts.).
                                        The total sale realisation against the Residential Unit is Rs.<?php echo number_format((float) $total_cost1, 2, '.', ''); ?> 
                                        (Rupees&nbsp;<span id='word3' style="height:20px; width:auto;"></span>Only).

                                    <?php } else { ?>


                                        <?php $total_builtuparea = number_format((float) $roof_covered_ground_ff_area + $roof_covered_ground_gf_area, 2, '.', ''); ?>
                                        <p> That the built-up area (Roof-covered area) of this ready built Residential Unit is <?php echo number_format((float) $total_builtuparea * 10.76, 2, '.', ''); ?>
                                            Sqft. (<?php echo number_format((float) $total_builtuparea, 2, '.', ''); ?> Sqmt.) and Carpet area is <?php echo number_format((float) $carpet_area * 10.76, 2, '.', ''); ?> Sqft.(<?php echo number_format((float) $carpet_area, 2, '.', ''); ?> Sqmts.)  on plot size <?php echo number_format((float) $length_m, 2, '.', ''); ?> Mt.  X <?php echo number_format((float) $width_m, 2, '.', ''); ?> Mt. Total Plot area (<?php echo number_format((float) $plot_sqmt, 2, '.', ''); ?>  Sq. Mts.). 
                                            The total sale realisation against the Residential Unit is Rs.
                                            <?php echo number_format((float) $total_cost1, 2, '.', ''); ?> (Rupees &nbsp;<span id='word2' style="height:20px; width:auto;"></span> 
                                            Only).</p><br>
                                    <?php } ?>

                                    <p> After adjusting your deposit in total value balance Rs.<span> <?php echo number_format((float) $total_cost1 - $booking_amt, 2, '.', ''); ?> <input type="hidden" id="amtrs1" name="number" placeholder="Number OR Amount" onkeyup="word.innerHTML = convertNumberToWords1(this.value)" value= "<?php echo number_format((float) $total_cost1 - $booking_amt, 2, '.', ''); ?>" readonly/>  </span>(Rupees &nbsp;<span id='word1' style="height:20px; width:auto;"></span> Only) is to be paid by you as per the payment schedule of the
                                        agreement. The boundaries of the plot is as under :</p>
                                </div>
                            </div><br>
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
                                    <div class="col-xs-4">

                                    </div>
                                    <div class="col-xs-4">

                                    </div>
                                </div>

                        </form>
                    </div>




                </div>  
                <?php
            }
            ?>
        </div>
    </div>
    <script src="<?php echo base_url('resources/js/numtoword.js'); ?>" ></script>
    <script>

                                        $(document).ready(function () {
                                            $('#toppageheader').html('Allotment Letter');
                                            $("a:contains(Allotment Letter)").parent().addClass('active');
                                            $("a:contains(Allotment Letter)").parents().addClass('open');
                                        });

                                        n = new Date();
                                        y = n.getFullYear();
                                        m = n.getMonth() + 1;
                                        d = n.getDate();
                                        document.getElementById("date22").innerHTML = d + "/" + m + "/" + y;

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

    </script>
    <script>




        $(document).ready(function () {


            var amtrs = $('#amtrs').val();
            $('#word').text(convertNumberToWords(amtrs));
            var amtrs3 = $('#amtrs3').val();
            $('#word3').text(convertNumberToWords(amtrs3));
            var amtrs1 = $('#amtrs1').val();
            $('#word1').text(convertNumberToWords(amtrs1));
            var amtrs2 = $('#amtrs2').val();
            $('#word2').text(convertNumberToWords(amtrs2));
            $('#toppageheader').html('View Allotment Letter <span class="pull-right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="print" id="btnprint" value="print" class="btn btn-sm btn-default" onClick="print_this_doc();">Print&nbsp;&nbsp;<i class="fa fa-print"></i></button></span>');
            $("a:contains(Allotment)").parent().addClass('active');


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
