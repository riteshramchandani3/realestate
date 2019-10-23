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
        <style>
            .inputbox{
                border: 2px solid #ccc;
                width:300px; height:30px;
                border-radius: 5px;
                line-height: 16px; font-size: 16px;
                display:table-cell;
                vertical-align: middle;
                padding-left: 5px;
            } 
            #success_message{ display: none;}
            feedbackIcons{
                font-size: 40;
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
        <?php
        require_once('assets/top_menu.php');
        require_once('assets/side_menu.php');
        ?>
        <div class="main">
            <div class="container">
                <form action="<?php echo site_url('Payment/paymentInputs'); ?>" method="post" class="form-inline" enctype="multipart/form-data" id="contact_form">
                   
  <?php   $login_id = $this->session->userdata('user_id'); ?>
                                                
                  <input type="hidden" name="login_id" value="<?php echo $login_id; ?>" />

 <?php
                    echo "<br><br><br><br><br><br><br>";
                    $id = $this->input->get('id');
                    $explode_data = explode('?', $id);
                    $idr = $explode_data[0];
                    $appl_id = $explode_data[1];
                    ?>
                    <?php
                    foreach ($this->Payment_model->get_appl_stage_payment($id) as $row) {
                       echo  '1'.$payment_amt =  $row->amount;
                        ?> 
                    
                       
                        
                    <?php 
                    
                        
                    
                    } 
                   
                    ?>

                    <?php
                    // get data from invoice table 
                    foreach ($this->Payment_model->get_applinfo($idr) as $row) {
                        ?> 
                        <?php echo $total_amount = $row->amount; ?>
                        <?php echo $total_amount1 = $row->total_amount; ?>
                        <?php echo $stages = $row->stages; ?>
                        <?php echo $invoice_no = $row->invoice_no; ?>
                        <?php echo $other_charges = $row->other_charges; ?>
                        <?php echo $numtowords = $row->numtowords; ?>
                    <?php } ?>
                    <?php
                    foreach ($this->Payment_model->show_info($appl_id) as $row) {
                        ?> 
                        <?php echo $name = $row->name; ?>
                        <?php echo $unit_no = $row->unit_no; ?>
                        <?php echo $project_name = $row->project_name; ?>
                        <?php echo $block = $row->block; ?>
                        <?php echo $type = $row->type; ?>
                    <?php } ?>
                        
                        
                        
                    <?php
                    foreach ($this->Payment_model->show_applicant_Cumulative($appl_id) as $row) {
                        ?>
                        <?php $res = $row['sum(amount_paid)']; ?>
                    <?php } ?>
                        
                          <?php
                      echo   'stagenames'.$data['stage'] = $stages;
                      echo   $data['unit_no'] = $unit_no;
                      echo   $data['appl_id'] = $appl_id;
                      
                      foreach ($this->Payment_model->show_dues_info($data) as $row) {
                           echo $pay_amount = $row->amount1;
                           echo  $dl_current_id = $row->id;
                            
                        }
                        ?>
                        
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3>Payment</h3>
                            <a href="<?php echo site_url('Payment/index'); ?>" class="btn btn-primary pull-right clickable" role="button"> &nbsp;&nbsp;&nbsp;Back&nbsp;&nbsp;&nbsp;</a>
                        </div>
                        <div class="panel-body">
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-8">
                                        dl id<?php echo $dl_current_id."<BR>"; ?>
                                        stage name is <?php echo $stages; ?>
                                        <input type="text" name="" value="<?php echo $pay_amount; ?>" /><br>
                                        <input type="text" name="amount_paid" value="<?php echo $total_amount1; ?>" />
                                        
                                        <input type="text" name="" value="<?php echo $pay_amount - $total_amount1; ?>" />
                                        <input type="text" name="invoice_id" value="<?php echo $idr; ?>" />
                                        <input type="text" name="first_appl_id" value="<?php echo $appl_id; ?>" />
                                        <input type="text" name="appl_name" value="<?php echo $name; ?>" />
                                        <input type="text" name="unit_no" value="<?php echo $unit_no; ?>" />
                                        <input type="text" name="project_name" value="<?php echo $project_name; ?>" />
                                        <input type="text" name="type" value="<?php echo $type; ?>" />
                                        <input type="text" name="other_charges" value="<?php echo $other_charges; ?>" />
                                      
                                        <input type="text" name="receipt_no" value="<?php echo $invoice_no; ?>" />
                                        <input type="text" name="stages" value="<?php echo $stages; ?>" />
                                        <input type="text" name="numtowords" value="<?php echo $numtowords; ?>" />
                                        <input type="text" name="status" value="paid"/>
                                        <div class="row">
                                            <div class="col-md-6" style="text-align: right;"> 
                                                <label for="appl_name">Applicant Name:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="inputbox">
                                                    <?php echo $name; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <br>

                                        <div class="row">

                                            <div class="col-md-6" style="text-align: right;"> 
                                                <label for="project_name">Project:</label>
                                            </div>
                                            <div class="col-md-6" >
                                                <span class="inputbox" >
                                                    <?php echo $project_name; ?>
                                                </span>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6" style="text-align: right;"> 
                                                <label for="block">Block:</label>
                                            </div>
                                            <div class="col-md-6" >
                                                <span class="inputbox"  >
                                                    <?php echo $block; ?>
                                                </span>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6" style="text-align: right;"> 
                                                <label for="type">Type:</label>
                                            </div>
                                            <div class="col-md-6" >
                                                <span class="inputbox">
                                                    <?php echo $type; ?>
                                                </span>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6" style="text-align: right;"> 
                                                <label for="unit_no">Unit Number:</label>
                                            </div>
                                            <div class="col-md-6" >
                                                <span class="inputbox">
                                                    <?php echo $unit_no; ?>
                                                </span>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6" style="text-align: right;"> 
                                                <label class="control-label" for="stages">Stage:</label>
                                            </div>
                                            <div class="col-md-2" >
                                                <input type="text" value="<?php echo $stages; ?>" class="form-control"  disabled/>
                                            </div>
                                        </div><br>

                                        <div class="row">
                                            <div class="col-md-6" style="text-align: right;"> 
                                                <label  for="other_charges">Other Charges:</label>
                                            </div>
                                            <div class="col-md-2">
                                                <input type="text" value="<?php echo $other_charges; ?>" class="form-control"  disabled/>
                                            </div> 
                                        </div>  

                                        <br>    
                                        <div class="row">
                                            <div class="col-md-6" style="text-align: right;"> 
                                                <label for="Date">Date:</label>
                                            </div>
                                            <div class="col-md-6">
                                            	<div class="input-group">
                                                            <input type="text" class="form-control" id="date" name="Date" />
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                  </div>
                                            </div>
                                        </div>
                                        <br>

                                        <div class="row">
                                            <div class="col-md-6" style="text-align: right;"> 
                                                <label for="payment_mode" class="control-label" >Mode of Payment:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <select name="payment_mode" id="method" >
                                                    <option value="None">--Select--</option>
                                                    <option value="Demand Draft">DD</option>
                                                    <option value="Cheque">Cheque</option>
                                                    <option value="NEFT">NEFT</option>
                                                    <option value="RTGS">RTGS</option>
                                                    <option value="Cash">Cash</option>
                                                </select>                    
                                            </div>
                                        </div>
                                        <br>  
                                        <div class="row">                  
                                            <div class="col-md-6" style="text-align: right;"> 
                                                <label for="contact" id="contact"></label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="cheque_cash" size="38"  placeholder="" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  size="30" required />
                                            </div>      
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6" style="text-align: right;"> 
                                                <label for="receipt_no">Invoice Number:</label>
                                            </div>
                                            <div class="col-md-6" >

                                                <span class="inputbox" >
                                                    ECPL/GST/R/<?PHP echo $invoice_no; ?>
                                                </span>

                                            </div>
                                        </div>
                                        <br>

                                        <div class="row">
                                            <div class="col-md-6" style="text-align: right;"> 
                                                <label for="amount_paid" class="control-label">Amount Paid:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="col-md-6">
                                                    <span class="inputbox" ><i class="fa fa-inr"></i><?php echo $total_amount1; ?></span> 
                                                    <input type="hidden" value="<?php echo $payment_amt; ?> " >
                                                </div>

                                                <div class="col-md-6">
                                                    <select class="form-control"name="payment_status" >
                                                        <option value="0">--Select--</option>
                                                        <option value="Self">Self</option>
                                                        <option value="Bank">Bank</option>


                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6" style="text-align: right;"> 
                                                <label for="due_amount" class="control-label">Due Amount:</label>
                                            </div>
                                            <div class="col-md-6">

                                                
                                                <span class="inputbox" ><i class="fa fa-inr"></i>
                                                    <?php
                    $data['unit_no'] = $unit_no;
                    $data['stagename'] = $stages;
                        
                    foreach ($this->Payment_model->get_adv_sum($data) as $row) {
                        ?>
                        <?php echo $ramaining_bal = $row['sum(adv_amt)']; ?>
                    <?php } ?>  
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                <?php  $resul = $payment_amt - $total_amount1;//+$ramaining_bal);
                                                echo "<BR>";
                                                echo "To be given".$payment_amt;
                                                echo "<br>/";
                                                echo "we paid".$total_amount1."<br>";
                                                
                                                if($resul<0){ 
                                                    $rr = $total_amount1-$payment_amt;
                                                    $rq ="no dues<br>";
                                                echo $rq."/advance amt is now<br>".$rr;
                                                ?>
                                                <input type="hidden" name="bal_amount" value="<?php echo $rr; ?> " />
                                                <input type="hidden" name="due_amount" value=0 />
                                                <?php
                                                }
                                                else
                                                { 
                                                    $rq = $resul;
                                                   echo "due amount is now :".$rq; 
                                                   ?>
                                                <input type="hidden" name="bal_amount" value=0 />
                                                 <input type="text" name="due_amount" value="<?php echo $rq; ?> " />
                                                <?php
                                                }
                                                ?></span> 
                                                

                                               
 <?php   ?>
                                               

                                            </div>
                                        </div>

                                        <br>

                                        <div class="row">                  
                                            <div class="col-md-6" style="text-align: right;"> 
                                                <label  for="Cumulative">Cumulative:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <span class="inputbox" >
                                                    <i class="fa fa-inr"></i><?php echo $res; ?>
                                                </span>
                                            </div>      
                                        </div>
                                        <br>
                                        <br>

                                        <div class="pull-right">

                                   

                                            <!--button type="submit" <?php //if($resul== $resul) {?> disabled="disabled" <?php //} ?> name="submit" value="submit" class="btn btn-success">Submit</button-->
                                            <button type="submit"  name="submit" value="submit" class="btn btn-success">Submit</button>

                                            <a href="javascript: history.go(-1)" class="btn btn-default" role="button">Cancel</a>
                                        </div>
                                        <div class="col-md-6">
                                        </div>
                                    </div>

                                </div>
                            </fieldset>

                        </div>
                    </div>

                </form>
            </div>
        </div>
        <hr/>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.js"></script>

        <script>
            $(document).ready(function () {
            $('#toppageheader').html('New Payment');
            $("a:contains(Payment)").parent().addClass('active');
            });
        </script>

        <script>
            
            $(document).ready(function () {
            $('#method').change(
                    function () {
                    var method = $('option:selected').val();
                    if (this.value == "Demand Draft") {
                    $('#contact').text("Demand Draft no.");
                    } else if (this.value == "NEFT") {
                    $('#contact').text("NEFT Transaction no.");
                    } else if (this.value == "Cheque") {
                    $('#contact').text("Cheque no");
                    } else if (this.value == "RTGS") {
                    $('#contact').text("RTGS Transaction no.");
                    } else if (this.value == "Cash") {
                    $('#contact').text("Cash");
                    }
                    });
            });
        </script>
        <script>
            
           $(function () {
                $("#date").datepicker({
                    dateFormat: 'dd-mm-yy',
                    changeMonth: true,
                    changeYear: true,
                    yearRange: '-100y:c+nn',
                   
                });
            });
            </script>

        <script type="text/javascript">

            .on('success.form.bv', function (e) {
            $('#success_message').slideDown({opacity: "show"}, "slow") // Do something ...
                    $('#contact_form').data('bootstrapValidator').resetForm();
            // Prevent form submission
            e.preventDefault();
            // Get the form instance
            var $form = $(e.target);
            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');
            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function (result) {
            console.log(result);
            }, 'json');
            });
            });
            $('#submit').click(function(e){
            e.preventDefault();
            $('#page').animate({opacity:0}, 400, function(){
            $('#contact_form').submit();
            });
            });
        </script>



    </body>
</html>