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
                    $unit_no = $explode_data[0];
                   
                    ?>
         <?php
                          
                    foreach ($this->Demand_letter_model->get_appl_byunit_details($unit_no) as $row) {
                        ?> 
        <?php  $appl_id1 = $row->customer_id; ?>
                    <?php } ?>
        
                    <?php
                          
                    foreach ($this->Demand_letter_model->get_appl($appl_id1) as $row) {
                        ?> 
                        <?php $mr_mrs = $row->mr_mrs; ?>
                        <?php $name = $row->name; ?>
                        <?php $unit_no = $row->unit_no; ?>
                        <?php $ca_son_doughter_wife = $row->ca_son_doughter_wife; ?>
                        <?php $son_doughter_wife = $row->son_doughter_wife; ?>
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
        foreach ($this->View_applicant_info->view_appl_co_ap_dl_info($appl_id1) as $row) {
            ?>

            <?php $ca_mr_mrs = $row->ca_mr_mrs; ?>     
            <?php $ca_name = $row->ca_name; ?> 
            <?php $ca_mr_mrs_1 = $row->ca_mr_mrs_1; ?>     
            <?php $ca_name_1 = $row->ca_name_1; ?>     

        <?php } ?>
               
        
          <?php $data['unit_no'] = $unit_no; ?>
                                        <?php foreach ($this->Site_report_model->get_dl_stage_desc_step_no($data) as $row1) { ?>

                                            <?php $last = $row1['step_no']; ?>

                                        <?php } ?>

                                        <?php $data['unit_no'] = $unit_no; ?>
                                        <?php foreach ($this->Site_report_model->get_dl_stage_asc_step_no($data) as $row1) { ?>

                                            <?php $first = $row1['step_no']; ?>

                                        <?php } ?>
                                        <?php if ($first == '') { ?>

                                        <?php } else { ?>

                                            <?php $data1['unit_no'] = $unit_no; ?>
                                            <?php $data1['step_no'] = $last; ?>

                                            <?php foreach ($this->Site_report_model->get_dl_stage_name($data1) as $row1) { ?>

                                                <?php $final_stage = $row1['stage']; ?>

                                            <?php } ?>
        
                                   
                                        
                                        <?php  $first1 =  $last-1; ?>
                                        <?php if($first1 == 0){?>
                                      <?php $first_one = 1 ?>
                                       <?php }else{?>
                                        <?php $first_one = $first1;  ?>
                                        <?php } ?>
                                        
                                         <?php  foreach ($this->Site_report_model->get_dl_stage_sum_lastrow($last,$first_one, $data) as $row1) { ?>

                                                <?php $tot = $row1['amount']; ?>

                                            <?php } ?>

                                            <?php //foreach ($this->Site_report_model->get_dl_stage_sum($last, $first, $data) as $row1) { ?>

                                                <?php //$tot = $row1['amount']; ?>

                                            <?php //} ?>
                                            <?php } ?>
        
                                    <?php $data_st['unit_no'] = $unit_no; ?>
                                            <?php $data_st['stage'] = $final_stage; ?>

                                            <?php foreach ($this->Site_report_model->get_dl_stagenam($data_st) as $row1) { ?>

                                                <?php  $due_date = $row1->due_date; ?>
                                             <?php $currents_date1 = $row1->currents_date; ?>

                                            <?php } ?>
        
        <div class="main">
            <div class="container"style="font-size:16px;">
                <a href="javascript: history.go(-1)" class="btn btn-primary pull-right clickable" role="button"> <i class="fa fa-arrow-left" aria-hidden="true"></i> &nbsp;&nbsp;Back</a>
                <div id="printable">
                <br> <br>   <br>   <br>                    
                                  
                              
                  
                    <form class="form-inline">

                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <strong>Ref:&nbsp;&nbsp;</strong>Essarjee/<strong>&nbsp;<span><?php echo $unit_no; ?></span></strong>/<strong><?php echo $project_name; ?> <?php echo $block; ?></strong>/2018
                                     <br>
                                         <?php
                                           foreach ($this->Company_info_model->get_company_info() as $row) {
                                               ?> 
                                               <span><?php echo $row->attribute; ?> No</span>&nbsp;:&nbsp;
                                               <span><?php echo $row->value; ?></span>
                                           <?php } ?>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="pull-right"> 
                                    DATE: <strong><?php $x = explode(' ', $currents_date1);
                                        $currents_date1 = new DateTime($x[0]);
                                        echo $currents_date1->format('d-m-Y');
                                        ?></strong>
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
                                <span> <?php echo $son_doughter_wife; ?></span> <?php echo $swd_of; ?><span></span><br>
                                <!--span> <?php //echo $ca_mr_mrs; ?></span><span> <?php echo $ca_name; ?></span><br>
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
                                &nbsp;&nbsp;<span><?php echo $ca_mr_mrs; ?></span> <span><?php echo $ca_name; ?></span> &nbsp;&nbsp; <span><?php echo $ca_mr_mrs_1; ?></span> <span><?php echo $ca_name_1; ?></span>
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
                               
                                <p>1. The agreement executed between M/s <strong>Essarjee Constructions Pvt. Ltd. & your due date is <?php
                                                $x = explode(' ', $due_date);
                                                $due_date = new DateTime($x[0]);
                                                echo $due_date->format('d-m-Y');
                                                ?>.</strong></p>
                                <p>2. For Unit No. <strong>&nbsp;<?php echo $unit_no; ?></strong> in Project <strong></strong> "<strong><?php echo $project_name; ?> <?php echo $block; ?></strong>"</p>
                                <p>3. <?php  if($final_stage == 'BOOKING'){
                                    echo' Amount Demand For Booking of Unit No' . nbs(2) .$unit_no ;
                                }else{
                                  echo 'Stage of Construction: Completion of' . nbs(2) .$final_stage;
                                } ?>.</p>
                                <p>4. <strong>Amount Due : <i class="fa fa-inr"></i> <?php echo number_format((float)$tot, 2, '.', '');   ?></strong></p>
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
        document.getElementById("date").innerHTML = d + "/" + m + "/" + y;

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
            $('#toppageheader').html('Demand Letter <span class="pull-right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="print" id="btnprint" value="print" class="btn btn-sm btn-default" onClick="print_this_doc();">Print&nbsp;&nbsp;<i class="fa fa-print"></i></button></span>');
            $("a:contains(Demand Letter)").parent().addClass('active');
        });

    </script>

</body>
</html>