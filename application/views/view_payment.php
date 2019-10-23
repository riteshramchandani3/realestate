<!DOCTYPE html>
<!--
Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
Unauthorized copying of this file, via any medium is strictly prohibited
Proprietary and confidential.
Written by Oga Technologies, October 1,  2016.
-->
<html>
    <head>
        <title>Payment</title>
        <?php require_once('assets/html_head_links.php'); ?>

        <style type="text/css">
            input{
                font-weight:bold;
                border: none;

            }
            input[type=text]:disabled {
                font-weight:bold;
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
                margin-top: -35px;
                font-size: 15px;

            }
            a.clickable {
                display: inline-block;
                padding: 6px 12px;
                border-radius: 4px;
                cursor: pointer;
            }

        </style>
    </head>
    <body>
        <div class="non-printable">
            <?php
            require_once('assets/top_menu.php');
            require_once('assets/side_menu.php');
            ?>

        </div>

        <div class="main">
            <div class="container" >
                <a href="<?php echo site_url('Main_controller/application_search');?>" class="btn btn-primary pull-right clickable" role="button"><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;&nbsp;Back</a><br><br>
                <?php
                $id = $this->input->get('id');
                $explode_data = explode('?', $id);
                $idr = $explode_data[0];
                $invoice_no = $explode_data[1];
                ?>


                <div id="printable">


                    <div class="row">
                        <div class="col-md-12">
                            <span>
                                <img src="<?php echo base_url('resources/image/ESSARJEE.PNG'); ?>" alt="Arvo ERP" style="height:132px; width: 100%;position: absolute; margin-top: -46px;"/>
                            </span>
                        </div>
                    </div>

                    <br><br><br><br><br>

                    <form class="form-inline"> 

                        <div class="row">
                            <div class="col-md-12">
                                <table class="table borderless table-responsive" style="font-size: 14px;"> 
                                    <tr>
                                        <td>

                                        </td>

                                        <td>
                                            <?php
                                            foreach ($this->Payment_model->get_company_info() as $row) {
                                                ?> 
                                                <span><strong><?php echo $row->attribute; ?></strong></span>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;
                                                <span><?php echo $row->value; ?></span>
                                            <?php } ?>
                                        </td>

                                        <td>
                                            <?php
                                            foreach ($this->Payment_model->get_company_info1() as $row) {
                                                ?> 
                                                <span><strong><?php echo $row->attribute; ?></strong></span>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;
                                                <span><?php echo $row->value; ?></span>

                                            <?php } ?>
                                        </td>

                                        <td>
                                            <?php
                                            foreach ($this->Payment_model->get_company_info2() as $row) {
                                                ?> <span><strong><?php echo $row->attribute; ?></strong></span>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;
                                                <span><?php echo $row->value; ?></span>

                                            <?php } ?>
                                        </td>
                                  
                                    <td>

                                        <?php
                                        foreach ($this->Payment_model->get_company_info3() as $row) {
                                            ?> <span><strong><?php echo $row->attribute; ?></strong></span>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;
                                            <span><?php echo $row->value; ?></span>

                                        <?php } ?>
                                    </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <?php
                                foreach ($this->Payment_model->view_payment($id) as $row) {
                                    ?>


                                    <table class="table table-responsive" style="font-size: 14px;">
                                        <tr>
                                            <td> 
Recept Number:  &nbsp;&nbsp;<input type="text"   value="<?php echo $row->receipt_no; ?>" disabled style="border-bottom:solid 1px black; font-size:15px "/>
                                            </td>
                                            <td>
                                                Project: &nbsp;&nbsp;<input type="text"value="<?php echo $row->project_name; ?>" disabled style="border-bottom:solid 1px black; font-size:15px" />
                                            </td>
                                            <td>
                                                Date: <strong><span id="date"></span></strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Invoice Number: &nbsp;&nbsp; <strong><input type="text"   value="ECPL/GST/R/<?php echo $row->receipt_no; ?>" disabled style="border-bottom:solid 1px black; font-size:15px "/></strong>
                                            </td>
                                            <td>
                                                Received with thanks from <input type="text"   value="<?php echo $row->appl_name; ?>" disabled style="border-bottom:solid 1px black; font-size:15px"/>
                                            </td>
                                            <td>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Payment For:&nbsp;&nbsp; <input type="text"   value="<?php echo $row->payment_status; ?>" disabled style="border-bottom:solid 1px black; font-size:15px"/> 
                                            </td>
                                            <td>
                                                Towards Following item for <input type="text"   value="<?php echo $row->type; ?>" disabled style="border-bottom:solid 1px black; font-size:15px"/> Unit no: <input type="text"   value="<?php echo $row->unit_no; ?>" disabled style="border-bottom:solid 1px black; font-size:15px"/>
                                            </td>
                                            <td>

                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table table-bordered table-responsive" style="font-size:14px">

                                        <tr style="border-top:   solid 1px black;">
                                            <td>
                                                Advance
                                            </td>
                                            <td>
                                                &nbsp;&nbsp;<input type="text" value="<?php echo $row->payment_mode; ?>"  disabled/>
                                            </td>
                                            <td>

                                            </td>
                                            <td style="font-weight: bold;">
                                                Amount
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Stage/Installment No
                                            </td>
                                            <td>
                                                 <input type="text" value="<?php echo $row->stages; ?>" disabled/>
                                            </td>
                                            <td style="text-align: center;font-weight: bold;">
                                                Rs.
                                            </td> 
                                            <td style="text-align: center;font-weight: bold;">
                                                Ps.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Arreas
                                            </td>
                                            <td>
                                                <input type="text"  />
                                            </td>
                                            <td>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" value="<?php echo $row->amount_paid; ?>" disabled />
                                            </td>
                                            <td>
                                                <input type="text" value="00" disabled/>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Other Charges
                                            </td>
                                            <td>
                                                &nbsp;&nbsp;<input type="text" value="<?php echo $row->other_charges; ?>" disabled/>
                                            </td>
                                            <td>

                                            </td>
                                            <td>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: bold;">
                                                Rupees
                                            </td>
                                            <td>
                                                &nbsp;<span style="text-transform:capitalize; font-weight: bold;"><?php echo $row->numtowords; ?>&nbsp;Only/-</span>
                                            </td>
                                            <td>
                                                
                                                
                                                
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" value="<?php echo $row->amount_paid; ?>" disabled />
                                            </td>
                                            <td>
                                                <input type="text" value="00" disabled/>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </table>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-responsive" style="font-size: 14px;">
                                    <tr>
                                        <td>
                                            Cheque No./D.D.No  
                                        </td>
                                        <td>
                                            &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" value="<?php echo $row->cheque_cash; ?>" disabled style="border-bottom: solid 1px black;"/>
                                        </td>  
                                        <td>
                                            &nbsp;&nbsp;&nbsp;&nbsp;Date
                                        </td>
                                        &nbsp;&nbsp;&nbsp;&nbsp;<td><?php $date2= $row->Date; ?>
                                            &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" value="<?php
                                   $x = explode(' ', $date2);
                                   $date2 = new DateTime($x[0]);
                                   echo $date2->format('d-m-Y');
                                   ?>" disabled style="border-bottom: solid 1px black;"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Drawn on
                                        </td>
                                        <td>
                                            &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" style="border-bottom: solid 1px black;" />
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>



                    </form>

                </div>

            </div>



        </div>




        <script LANGUAGE = "JavaScript" >
            
           
       
            
            function print_this_doc() {
                var printContents = document.getElementById('printable').innerHTML;
                var originalContents = document.body.innerHTML;
                document.body.innerHTML = printContents;
                var css = '@page { size: landscape; }',
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
                $('#toppageheader').html('Payment Receipt <span class="pull-right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="print" id="btnprint" value="print" class="btn btn-sm btn-default" onClick="print_this_doc();">Print&nbsp;&nbsp;<i class="fa fa-print"></i></button></span>');
                $("a:contains(Invoices & Payments)").parent().addClass('active');
            });

            n = new Date();
            y = n.getFullYear();
            m = n.getMonth() + 1;
            d = n.getDate();
            document.getElementById("date").innerHTML = d + "/" + m + "/" + y;
        </script>



    </body>
</html>