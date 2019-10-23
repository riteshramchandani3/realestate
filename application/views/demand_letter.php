<html>
    <head>
        <title>Demand Letter</title>
        <?php
        require_once('assets/html_head_links.php');
        ?>
        <style>
            a.clickable {
                display: inline-block;
                padding: 6px 12px;
                border-radius: 4px;
                cursor: pointer;
            }
            @media print {
                body { 
                    margin-left: 25mm; margin-right: 7mm; margin-top: 50mm;}
            }
            body {
                font-family: Arial !important;
                font-size: 14px !important;
            }
            @page{
                margin: 0;
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
        <?php
        $id = $this->input->get('id');
        $explode_data = explode('?', $id);
        $idr = $explode_data[0];
        $appl_id = $explode_data[1];
        ?>
        <?php
        log_message('error', 'applicant payment  page start:');


        //  print_r( $user); echo'<br/>';
        foreach ($this->Demand_letter_model->get_appl($appl_id) as $row) {
            ?> 
            <?php $mr_mrs = $row->mr_mrs; ?>
            <?php $name = $row->name; ?>
            <?php $unit_no = $row->unit_no; ?>
            <?php $ca_son_doughter_wife = $row->ca_son_doughter_wife; ?>
            <?php $son_doughter_wife = $row->son_doughter_wife; ?>
            <?php $son_doughter_wife_mr_mrs = $row->son_doughter_wife_mr_mrs; ?>
            <?php $project_name = $row->project_name; ?>
            <?php $block = $row->block; ?>
            <?php $ca_mr_mrs = $row->ca_mr_mrs; ?>
            <?php $ca_name = $row->ca_name; ?>
            <?php $ca_son_doughter_wife_mr_mrs = $row->ca_son_doughter_wife_mr_mrs; ?>
            <?php $ca_swd_of = $row->ca_swd_of; ?>
            <?php $swd_of = $row->swd_of; ?>
            <?php $permanent_addr = $row->permanent_addr; ?>
            <?php $pin_code = $row->pin_code; ?>

        <?php } ?>
        <?php
        log_message('error', 'applicant payment  page start:');


        //  print_r( $user); echo'<br/>';
        foreach ($this->Demand_letter_model->show_dl($id) as $row) {
            ?> 
            <?php $stage = $row->stage; ?>
            <?php $amount = $row->amount1; ?>
            <?php $cumulative_amt = $row->cumulative_amt; ?>
            <?php $due_date = $row->due_date; ?>
            <?php $currents_date = $row->currents_date; ?>

        <?php } ?>
        <?php
        foreach ($this->View_applicant_info->view_appl_co_ap_dl_info($appl_id) as $row) {
            ?>

            <?php $ca_mr_mrs = $row->ca_mr_mrs; ?>     
            <?php $ca_name = $row->ca_name; ?> 
            <?php $ca_mr_mrs_1 = $row->ca_mr_mrs_1; ?>     
            <?php $ca_name_1 = $row->ca_name_1; ?>     

        <?php } ?>
        <div class="main">
            <div class="container"style="font-size:16px;">
                <a href="javascript: history.go(-1)" class="btn btn-primary pull-right clickable" role="button"> <i class="fa fa-arrow-left" aria-hidden="true"></i> &nbsp;&nbsp;Back</a>
                <div id="printable">
                    <br> <br>   <br>   <br>                    



                    <form class="form-inline">
<input type="hidden" id="appl_id" value="<?php echo $appl_id; ?>"  />
<input type="hidden" id="unit_no" value="<?php echo $unit_no; ?>"  />
<input type="hidden" id="stage" value="<?php echo $stage; ?>"  />
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <strong>Ref:&nbsp;&nbsp;</strong>Essarjee/<strong>&nbsp;<span><?php echo $unit_no; ?></span></strong>/<strong><?php echo $project_name; ?> <?php echo $block; ?></strong>/2018
                                    <br>
                                    <?php
                                    foreach ($this->Company_info_model->get_company_info() as $row) {
                                        ?> 
                                        <span><?php echo $row->attribute; ?></span>&nbsp;:&nbsp;
                                        <span><?php echo $row->value; ?></span>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="pull-right"> 
                                    Date : <?php echo date('d-m-Y') ?>
                                    <!--strong> <?php $x = explode(' ', $currents_date);
                                        $currents_date = new DateTime($x[0]);
                                        echo $currents_date->format('d-m-Y');
                                        ?> </strong-->
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-xs-12">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                To,
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12" style="margin-left:50px;">
                                <span>  <?php echo $mr_mrs; ?></span> <span><?php echo $name; ?></span><br>
                                <span> <?php echo $son_doughter_wife; ?></span> <?php echo $son_doughter_wife_mr_mrs; ?> <?php echo $swd_of; ?><span></span><br>
                                <!--span> <?php //echo $ca_mr_mrs; ?></span><span> <?php //echo $ca_name; ?></span><br>
                                <span>  <?php //echo $ca_son_doughter_wife; ?></span>
                                <span>  <?php //echo $ca_son_doughter_wife_mr_mrs; ?></span>
                                <span> <?php //echo $ca_swd_of; ?></span><br-->
                                <span>R/o.</span>
                                <span> <?php echo $permanent_addr; ?>,<?php echo $pin_code; ?></span> <br>
                                <?php
                                    if ($ca_mr_mrs == '') {
                                        echo '';
                                    } else if ($ca_mr_mrs == 'Mrs.') {
                                        echo ' <span>Co-Applicants:</span>';
                                    }
                                    else if ($ca_mr_mrs == 'Ms.') {
                                        echo ' <span>Co-Applicants:</span>';
                                    }
                                    else if ($ca_mr_mrs == 'Mr.') {
                                        echo ' <span>Co-Applicants:</span>';
                                    }
                                   else if ($ca_mr_mrs == 'Mrs') {
                                        echo ' <span>Co-Applicants:</span>';
                                    }
                                    else if ($ca_mr_mrs == 'Ms') {
                                        echo ' <span>Co-Applicants:</span>';
                                    }
                                    else if ($ca_mr_mrs == 'Mr') {
                                        echo ' <span>Co-Applicants:</span>';
                                    }
                                    ?>
                                &nbsp;&nbsp;<span><?php echo $ca_mr_mrs; ?></span> <span><?php echo $ca_name; ?></span>
                                
                                <?php
                                     if ($ca_mr_mrs_1 == '') {
                                        echo '';
                                    } else if ($ca_mr_mrs_1 == 'Mrs.') {
                                        echo ',';
                                    }
                                    else if ($ca_mr_mrs_1 == 'Ms.') {
                                        echo ',';
                                    }
                                    else if ($ca_mr_mrs_1 == 'Mr.') {
                                        echo ',';
                                    }
                                   else if ($ca_mr_mrs_1 == 'Mrs') {
                                        echo ',';
                                    }
                                    else if ($ca_mr_mrs_1 == 'Ms') {
                                        echo ',';
                                    }
                                    else if ($ca_mr_mrs_1 == 'Mr') {
                                        echo ',';
                                    }
                                    ?>

                               <span><?php echo $ca_mr_mrs_1; ?></span> <span><?php echo $ca_name_1; ?></span>
                            </div>    
                        </div><br>
                        <div class="row">
                            <div class="col-xs-12">
                                <p><strong><u></u>Sub: Demand for the Payment Due of the Unit No.&nbsp;<span><?php echo $unit_no; ?></span> at  "<?php echo $project_name; ?> <?php echo $block; ?>"</strong></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <p><strong>Dear Sir,</strong></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <p>This is with referrence to:</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <p>1. The agreement executed between M/s <strong><?php
                                    foreach ($this->Payment_model->get_company_Company_Name() as $row) {
                                        ?> 
                                        <span><?php echo $row->value; ?></span>

                                    <?php } ?>  & your due date is <?php
                                        $x = explode(' ', $due_date);
                                        $due_date = new DateTime($x[0]);
                                        echo $due_date->format('d-m-Y');
                                        ?>.</strong></p>
                                <p>2. For Unit No. <strong>&nbsp;<?php echo $unit_no; ?></strong> in Project <strong></strong> "<strong><?php echo $project_name; ?> <?php echo $block; ?></strong>"</p>
                                <p>3.  <?php  if($stage == 'BOOKING'){
                                    echo' Amount Demand For Booking of Unit No' . nbs(2) .$unit_no ;
                                }else{
                                  echo 'Stage of Construction: Completion of' . nbs(2) .$stage;
                                } ?>.</p>
                                <p>4. <strong>Amount Due : <i class="fa fa-inr"></i><?php echo number_format((float) $cumulative_amt, 2, '.', ''); ?></strong></p>
                                <p>5. Please release the due Payment within 15 days from the date of issue of this letter.</p><br>
                                <p>Note: Kindly release the Payment with in stipulated time to avoid interest on delayed payments 
                                    as per Clause No. 22 of Agreement.</p>
                                <p><strong>Thanking You,</strong></p><br>
                                <p>For <strong>Essarjee Constructions Pvt. Ltd.</strong></p><br>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col-xs-12">
                                <strong> (Authorised Signatory)</strong>
                            </div>
                        </div>
                    </form>
                </div>  
            </div>  
        </div>

        <script type="text/javascript">

            n = new Date();
            y = n.getFullYear();
            m = n.getMonth() + 1;
            d = n.getDate();
            document.getElementById("date").innerHTML = d + "-" + m + "-" + y;

            function print_this_doc() {
                  var unit_no = document.getElementById('unit_no').value;
                  var stage = document.getElementById('stage').value;
                  var appl_id = document.getElementById('appl_id').value;
                  showblockss6(unit_no,stage,appl_id);
              
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
 function  showblockss6(unit_no,stage,appl_id)
            {
                 var unit_no = unit_no;
                 var stage = stage;
                 var appl_id = appl_id;
                 
                
               
                 
                 $.ajax({
            type: "POST",
                    url: "<?php echo site_url('Demand_letter/Dl_email'); ?>",
                    data: {unit_no: unit_no,stage:stage,appl_id:appl_id},
                    success: function (msg) {
                    // alert(msg+'johy');
                   // document.getElementById('p_name').value = msg.trim();
                    }


            }
            ); 
            }
            

        </script>
        <script>
        $(document).ready(function () {
                $('#toppageheader').html('Demand Letter <span class="pull-right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="print" id="btnprint" value="print" class="btn btn-sm btn-default" onClick="print_this_doc();">Print&nbsp;&nbsp;<i class="fa fa-print"></i></button></span>');
                $("a:contains(Demand Letter)").parent().addClass('active');
            });
        </script>
 
</body>
</html>

