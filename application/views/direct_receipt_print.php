<html>
    <head>
        <title>direct_receipt_print</title>
        <?php require_once('assets/html_head_links.php'); ?>

        <style type="text/css">

            .topleftlabel{
                width: 100;
                font-size: 15px !important;

            }
            .toprightlabel{
                width: 110;

            }

            .bottomleftlabel{
                width: 200;
                font-size: 18px !important;

            }
            .bottomrightlabel{
                width: 700;
                font-size: 18px !important;
                margin-left: 10px;



            }
            #word{
                width: 100% ;
            }


            .form-control{

                width: 80% !important;


            }
            input[type=text]:disabled {
                /*font-weight:bold;*/
                background: white;

            }
            h4{
                font-weight:bold;
            }
            @media print
            {
                /*@page {size: landscape}*/
                .non-printable { display: none; }
                #printable { display: block;}
            }
            .panel-heading a
            {
                margin-top: -45px;
                font-size: 15px;
            }
            a.clickable {
                display: inline-block;
                padding: 8px 12px;
                border-radius: 4px;
                cursor: pointer;
            }

            @page {
                size: auto;   /* auto is the initial value */
                margin: 5mm 5mm 5mm 10mm;  /* this affects the margin in the printer settings */
            }
            @media print
            {
                /*@page {size: landscape}*/
                .non-printable { display: none; }
                #printable { display: block;}

                body {
                    font-size: 14px !important;
                    line-height: 1.0 !important;
                }

            }
        </style>
    </head>
    <body>
        <div class="non-printable">
            <?php
            require_once('assets/top_menu.php');
            require_once('assets/side_menu.php');
            ?>

            <?php if ($this->session->flashdata('success')) { ?>
                    <div class="alert alert-success">
                        <button data-dismiss="alert" class="close"  type="button">
                            <span aria-hidden="true">x</span><span  class="sr-only">Close</span></button>

                        <?php echo $this->session->flashdata('success') ?>
                    </div>
                <?php } else if($this->session->flashdata('failure')) {
                    ?>
                    <div class="alert alert-danger">
                        <button data-dismiss="alert" class="close"  type="button">
                            <span aria-hidden="true">x</span><span  class="sr-only">Close</span></button>

                        <?php echo $this->session->flashdata('failure') ?>
                    </div>

                <?php } ?>
            
            
            
            
            
            
        </div>

        <?php $id = $this->input->get('id'); ?>
        <?php $id1 = $id + 1 ?>

        <?php
        //  print_r( $user); echo'<br/>';
        foreach ($this->Pre_sales_model->get_pay_info($id1) as $row) {
            ?>

            <?php $name = $row->name ?> 
            <?php $unit_no = $row->unit_no; ?> 
            <?php $receipt_no = $row->receipt_no; ?> 
            <?php $installment_no = $row->installment_no; ?> 
            <?php $advance = $row->advance; ?> 
            <?php $arrears = $row->arrears; ?> 
            <?php $other_charges = $row->other_charges; ?> 
            <?php $mode_of_payment = $row->mode_of_payment; ?>
            <?php $date = $row->date; ?> 
            <?php $drawn_on = $row->drawn_on; ?> 
            <?php $cgst = $row->cgst; ?> 
            <?php $sgst = $row->sgst; ?> 
            <?php $amount = $row->amount; ?> 
            <?php $descreption = $row->descreption; ?> 
            <?php $payment_mode_no = $row->payment_mode_no; ?> 
            <?php $login_id = $row->login_id; ?> 
        <?php } ?>
        <?php
        foreach ($this->View_applicant_info->get_login_info($login_id) as $row) {
            ?> 
            <?php $first_name = $row->first_name; ?>
            <?php $last_name = $row->last_name; ?>

        <?php } ?>

        <div class="main">

            <div class="container">
                
                         <?php if ($this->session->flashdata('success')) { ?>
                    <div class="alert alert-success">
                        <button data-dismiss="alert" class="close"  type="button">
                            <span aria-hidden="true">x</span><span  class="sr-only">Close</span></button>

                        <?php echo $this->session->flashdata('success') ?>
                    </div>
                <?php } else if ($this->session->flashdata('failure')) {
                    ?>
                    <div class="alert alert-danger">
                        <button data-dismiss="alert" class="close"  type="button">
                            <span aria-hidden="true">x</span><span  class="sr-only">Close</span></button>

                        <?php echo $this->session->flashdata('failure') ?>
                    </div>

                <?php } ?>
                <div class="row">
                    <div class="col-xs-4 text-left">

                    </div>
                    <div class="col-xs-4 text-right">

                    </div>
                    <div class="col-xs-4 text-right">
                        <a href="javascript: history.go(-1)"  class="btn btn-primary pull-right clickable" role="button"><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;&nbsp;Back</a>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-4 text-left">
                        <b> Executive Name :- <?php echo ucfirst($first_name); ?>  <?php echo ucfirst($last_name); ?></b> 
                    </div>
                    <div class="col-xs-4 text-right">

                    </div>
                    <div class="col-xs-4 text-right">

                    </div>
                </div>
            </div>
            <br>
            <div class="container">

                <div id="printable">

                    <div class="container" style="border: 1px solid #000;">
                        <div class="row">
                            <div class="col-xs-8">
                                <img src="<?php echo base_url('resources/image/ESSARJEE.PNG'); ?>" alt="Arvo ERP" class="img-responsive" style="margin-top: 5px;width: 100%;"/>
                            </div>
                            <div class="col-xs-4" >
                                <div class="col-xs-12" style="margin-top:90px;">
                                    <label class="topleftlabel">Date</label><span style="font-weight:bold;">:</span>
                                    <label class="toprightlabel"><?php echo date("d-m-Y") ?>
                                    </label>
                                </div>
                                <div class="col-xs-12"> 



                                    <?php
                                    // foreach ($this->Pre_sales_model->get_receipt_no() as $row) {
                                    ?>
                                    <?php //$receipt_no = $row->series_no ?>
                                    <?php //} ?>
                                    <label class="topleftlabel">Receipt No.</label><span style="font-weight:bold;">:</span>
                                    <label class="toprightlabel"><span id="recptspn"><?php echo $receipt_no ?></span></label> 
                                    <input type="hidden" name="receipt_no" value="<?php echo $receipt_no ?>" />
                                    <input type="hidden" name="date" value="<?php echo date("d-m-Y") ?>" />
                                </div>
                                <div class="col-xs-12" >                                                                                                           
                                    <?php
                                    foreach ($this->Company_info_model->get_company_info() as $row) {
                                        ?> 
                                        <label class="topleftlabel"><span><?php echo $row->attribute; ?></span></label><span style="font-weight:bold;">:</span>
                                        <label class="toprightlabel" stopleftlabeltyle="border-bottom:1px solid #000;"> <span><?php echo $row->value; ?></span></label>
                                    <?php } ?>                                  
                                </div>
                            </div>
                        </div><br><br>

                        <?php
                        //  print_r( $user); echo'<br/>';
                        foreach ($this->Pre_sales_model->get_inv_info($unit_no) as $row) {
                            ?>
                            <?php $project_id = $row->project_id ?> 
                            <?php $block = $row->block ?> 
                            <?php $unit_no = $row->unit_no; ?> 
                            <?php $category = $row->category; ?>
                            <?php $type = $row->type; ?>
                            <?php $block = $row->block; ?>
                        <?php } ?>



                        <?php
                        foreach ($this->View_applicant_info->get_login_info($login_id) as $row) {
                            ?> 
                            <label><?php $login_usernsme = $row->username; ?></label>

                        <?php } ?>
                        <br>
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <label> Project Name </label>
                                    </div>
                                    <div class="col-xs-8">
                                        <?php
                                        foreach ($this->Pre_sales_model->project_tbl() as $w) {
                                            ?>
                                            <?php $w->id; ?><?php $w->project_name; ?><?php ?> 
                                            <?php
                                        }
                                        ?>
                                        <?php echo $w->project_name; ?>
                                    </div>

                                </div>
                               
                                <br clear="ALL"/>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <label> Unit-Type</label>
                                    </div>

                                    <div class="col-xs-8">
                                        <?php echo $type; ?>
                                    </div>

                                </div>
                                <br clear="ALL"/>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <label>Block</label>
                                    </div>
                                    <div class="col-xs-8">
                                        <?php echo $category; ?>
                                    </div>
                                </div>

                                <br clear="ALL"/>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <label>unit_no</label>
                                    </div>
                                    <div class="col-xs-8">
                                        <?php echo $unit_no; ?>
                                    </div>
                                </div>

                                <br clear="ALL"/>

                                <div class="row">
                                    <div class="col-xs-4">
                                        <label> Received from</label>
                                    </div>
                                    <div class="col-xs-8">
                                        <?php echo $name; ?>
                                    </div>
                                </div>
                                <br>
                                <?php
                                $taxlist = $this->Payment_model->getalltaxes();
                                foreach ($taxlist as $jj) {
                                    if ($jj->tax_name == 'CGST') {
                                        $CGST = $jj->tax_percentage;
                                    } else if ($jj->tax_name == 'SGST') {
                                        $SGST = $jj->tax_percentage;
                                    } else {
                                        
                                    }
                                }
                                ?>
                                <input type="hidden" value="<?php echo $CGST ?>" id="cgst">
                                <input type="hidden" value="<?php echo $SGST; ?>" id="sgst">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <label> Amount</label>
                                    </div>
                                    <div class="col-xs-8">
                                        <?php echo number_format((float) $amount, 2, '.', ''); ?>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <label> CGST &nbsp;<?php echo number_format((float) $CGST, 2, '.', ''); ?> %</label>
                                    </div>
                                    <div class="col-xs-8">
                                        <?php echo number_format((float) $cgst, 2, '.', ''); ?>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <label> SGST &nbsp;<?php echo number_format((float) $SGST, 2, '.', ''); ?> %</label>
                                    </div>
                                    <div class="col-xs-8">
                                        <?php echo number_format((float) $sgst, 2, '.', ''); ?>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <label> Total Amount</label>
                                    </div>
                                    <div class="col-xs-8">
                                        <?php echo number_format((float) $advance, 2, '.', ''); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-6">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <label>In words</label>
                                    </div>
                                    <input type="hidden" id="amtrs" name="number" placeholder="Number OR Amount" onmouseover="word.innerHTML = convertNumberToWords(this.value)" value= "<?php echo round($advance); ?>" disabled/> 

                                    <div class="col-xs-8 ">
                                        <span id='word'  ></span> Rupees Only /-
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <label>Installment No</label>
                                    </div>
                                    <div class="col-xs-8">
                                        <?php echo $installment_no; ?>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <label>  Arrears</label>
                                    </div>
                                    <div class="col-xs-8">
                                        <?php echo $arrears; ?>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <label> Other Charges</label>
                                    </div>
                                    <div class="col-xs-8">
                                        <?php echo $other_charges; ?>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <label> Mode of Payment</label>
                                    </div>
                                    <div class="col-xs-8">
                                        <?php echo $mode_of_payment; ?>
                                    </div>
                                </div>

                                <br>

                                <div class="row">
                                    <div class="col-xs-4">
                                        <label> Drawn on</label>
                                    </div>
                                    <div class="col-xs-8">
                                        <?php echo $drawn_on; ?>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <label><?php echo $mode_of_payment; ?></label>
                                    </div>
                                    <div class="col-xs-8">
                                        <?php echo $payment_mode_no; ?>
                                    </div>
                                </div>
                                <br>

                                <div class="row">
                                    <div class="col-xs-4">
                                        <label> Description</label>
                                    </div>
                                    <div class="col-xs-8">
                                        <?php echo $descreption; ?>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <label> Date</label>
                                    </div>
                                    <div class="col-xs-8">
                                        <?php echo $date; ?>
                                    </div>
                                </div>
                                <br>
                               
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-xs-8">
                                <label>Note : Cheque subjected to Realisation.</label>
                            </div>
                            <?php
                            foreach ($this->Company_info_model->get_Company_name() as $row) {
                                ?> 
                                <div class="col-xs-4 text-right">
                                    <label style="font-size:16px;"><?php echo $company_name = $row->value; ?></label><br><br>
                                    <label style="font-size:16px;">Authorized Signatory</label>
                                </div>
                            <?php } ?>
                        </div>
                        <br>
                        <br>

                    </div>
                    <i class="fa fa-scissors" style="position:absolute; margin-top: 7px; margin-left: 10px;" aria-hidden="true"></i><hr style="border-top: dashed 2px; width: 100%; margin-left: -10px;" />
                    <div class="container" style="border: 1px solid #000;">

                        <div class="row"><br><br>
                            <div class="text-center"><label>Acknowledgement</label></div><br>
                            <div class="col-xs-12">
                                <label>I </label>
                                <label><?php echo $name; ?></label>
                                <label>have received the orignal Receipt No.  <?php echo $receipt_no; ?></label>
                                <label><?php //echo $receipt_no;                                     ?></label>
                                <label>issued by </label>
                                <label><?php echo $company_name ?></label>
                                <label>against the payment of Rs. </label>
                                <label><?php echo $advance; ?></label>
                                <br><br><br>
                            </div>                    
                        </div>
                        <div class="row">
                            <div class="col-xs-9">
                            </div>
                            <div class="col-xs-3 text-center">
                                <label style="padding-right: 24px !important;">Signature</label>
                            </div>
                        </div><br><br><br><br>
                    </div>
                    <br>
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-4 text-left">
                                <b> Executive Name :- <?php echo ucfirst($first_name); ?>  <?php echo ucfirst($last_name); ?></b> 
                            </div>
                            <div class="col-xs-4 text-right">

                            </div>
                            <div class="col-xs-4 text-right">

                            </div>
                        </div>
                    </div>
                    <br><br><br><br>
                    




                </div>

            </div>
        </div>


        <script LANGUAGE = "JavaScript" >

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

                $('#toppageheader').html('<span class="pull-right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="print" id="btnprint" value="print" class="btn btn-xs btn-default" onClick="print_this_doc();">Print&nbsp;&nbsp;<i class="fa fa-print"></i></button></span>');



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