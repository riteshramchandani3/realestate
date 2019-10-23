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

        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
        <!-- script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script --> 
        <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
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
                <form action="<?php echo site_url('Payment/paymentInputs'); ?>" method="post" class="form-inline" enctype="multipart/form-data" id="contact_form" autocomplete="off">

                    <?php $login_id = $this->session->userdata('user_id'); ?>

                    <input type="hidden" name="login_id" value="<?php echo $login_id; ?>" />

                    <?php
                    // echo "<br><br><br><br><br><br><br>";
                    $id = $this->input->get('id');
                    $explode_data = explode('?', $id);
                    $invoice_id = $explode_data[0];
                    $appl_id = $explode_data[1];
                    ?>
                    <?php
                    foreach ($this->Payment_model->get_appl_stage_payment($id) as $row) {
                        $to_be_taken = $row->amount;
                        ?> 



                        <?php
                    }
                    ?>

                    <?php
                    // get data from invoice table 
                    foreach ($this->Payment_model->get_applinfo($invoice_id) as $row) {
                        ?> 
                        <?php $paid_amount = $row->total_amount; ?>
                        <?php $current_stage = $row->stages; ?>
                        <?php $invoice_no = $row->invoice_no; ?>
                        <?php $other_charges = $row->other_charges; ?>
                        <?php $numtowords = $row->numtowords; ?>

                    <?php } ?>
                    <?php
                    foreach ($this->Payment_model->show_info($appl_id) as $row) {
                        ?> 
                        <?php $name = $row->name; ?>
                        <?php $unit_no = $row->unit_no; ?>
                        <?php $project_name = $row->project_name; ?>
                        <?php $block = $row->block; ?>
                        <?php $type = $row->type; ?>
                    <?php } ?>



                    <?php
                    foreach ($this->Payment_model->show_applicant_Cumulative($appl_id) as $row) {
                        ?>
                        <?php $cumulative_amountpaid_so_far = $row['sum(amount_paid)']; ?>
                    <?php } ?>


                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3>Payment</h3>
                            <a href="<?php echo site_url('Payment/index'); ?>" class="btn btn-primary pull-right clickable" role="button"> &nbsp;&nbsp;&nbsp;Back&nbsp;&nbsp;&nbsp;</a>
                        </div>
                        <div class="panel-body">
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-8">
<?php //echo $dl_current_id;  ?>
                                        <input type="hidden" name="to_be_taken" id="to_be_taken" value="<?php echo $to_be_taken; ?>"/>
                                        <input type="hidden" name="amount_paid" id="amount_paid" value="<?php echo $paid_amount; ?>" />
                                        <input type="hidden" name="invoice_id" value="<?php echo $invoice_no; ?>" />
                                        <input type="hidden" name="first_appl_id" value="<?php echo $appl_id; ?>" />
                                        <input type="hidden" name="appl_name" value="<?php echo $name; ?>" />
                                        <input type="hidden" name="unit_no" value="<?php echo $unit_no; ?>" />
                                        <input type="hidden" name="project_name" value="<?php echo $project_name; ?>" />
                                        <input type="hidden" name="type" value="<?php echo $type; ?>" />
                                        <input type="hidden" name="receipt_no" value="<?php echo $invoice_no; ?>" />
                                        <input type="hidden" name="stages" value="<?php echo $current_stage; ?>" />
                                        <input type="hidden" name="status" value="paid"/>
                                        <input type="hidden" name="block" value="<?php echo $block; ?>"/>
                                        <input type="hidden" name="numtowords" value="<?php echo $numtowords; ?>"/>

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
                                                <input type="text" value="<?php echo $current_stage; ?>" class="form-control"  disabled/>
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
                                                <label for="Date">Payment Date:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="date" name="Date" required/>
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
                                                <select name="payment_mode" id="method" required>
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
                                                <label for="" class="control-label" >Bank Details:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <select class="selectpicker" data-show-subtext="true" data-live-search="true" name="drawn_on_bank">
                                                    <option  value="">--Select--</option>
                                                    <option data-subtext="" value="Bank of Baroda">Bank of Baroda</option>
                                                    <option data-subtext="" value="Bank of India">Bank of India</option>
                                                    <option data-subtext="" value="Bank of Maharashtra">Bank of Maharashtra</option>
                                                    <option data-subtext="" value="Canara Bank">Canara Bank</option>
                                                    <option data-subtext="" value="Corporation Bank">Corporation Bank</option>
                                                    <option data-subtext="" value="Dena Bank">Dena Bank</option>
                                                    <option data-subtext="" value="Indian Bank">Indian Bank</option>
                                                    <option data-subtext="" value="Indian Overseas Bank">Indian Overseas Bank</option>
                                                    <option data-subtext="" value="IDBI Bank">IDBI Bank</option>
                                                    <option data-subtext="" value="Oriental Bank of Commerce">Oriental Bank of Commerce</option>
                                                    <option data-subtext="" value="Punjab National Bank">Punjab National Bank</option>
                                                    <option data-subtext="" value="State Bank of India">State Bank of India</option>
                                                    <option data-subtext="" value="Syndicate Bank">Syndicate Bank</option>
                                                    <option data-subtext="" value="UCO Bank">UCO Bank</option>
                                                    <option data-subtext="" value="Union Bank of India">Union Bank of India</option>
                                                    <option data-subtext="" value="United Bank of India">United Bank of India</option>
                                                    <option data-subtext="" value="Vijaya Bank">Vijaya Bank</option>
                                                    <option data-subtext="" value="Private-Sector Banks[edit]">Private-Sector Banks[edit]</option>
                                                    <option data-subtext="" value="Axis Bank">Axis Bank</option>
                                                    <option data-subtext="" value="Bandhan Bank">Bandhan Bank</option>
                                                    <option data-subtext="" value="Catholic Syrian Bank">Catholic Syrian Bank</option>
                                                    <option data-subtext="" value="City Union Bank">City Union Bank</option>
                                                    <option data-subtext="" value="DCB Bank">DCB Bank</option>
                                                    <option data-subtext="" value="Dhanlaxmi Bank">Dhanlaxmi Bank</option>
                                                    <option data-subtext="" value="Federal Bank">Federal Bank</option>
                                                    <option data-subtext="" value="HDFC Bank">HDFC Bank</option>
                                                    <option data-subtext="" value="ICICI Bank">ICICI Bank</option>
                                                    <option data-subtext="" value="IDFC Bank">IDFC Bank</option>
                                                    <option data-subtext="" value="IndusInd Bank">IndusInd Bank</option>
                                                    <option data-subtext="" value="Jammu and Kashmir Bank">Jammu and Kashmir Bank</option>
                                                    <option data-subtext="" value="Karnataka Bank">Karnataka Bank</option>
                                                    <option data-subtext="" value="Karur Vysya Bank">Karur Vysya Bank</option>
                                                    <option data-subtext="" value="Kotak Mahindra Bank">Kotak Mahindra Bank</option>
                                                    <option data-subtext="" value="Lakshmi Vilas Bank">Lakshmi Vilas Bank</option>
                                                    <option data-subtext="" value="Nainital Bank">Nainital Bank</option>
                                                    <option data-subtext="" value="RBL Bank">RBL Bank</option>
                                                    <option data-subtext="" value="South Indian Bank">South Indian Bank</option>
                                                    <option data-subtext="" value="Tamilnad Mercantile Bank">Tamilnad Mercantile Bank</option>
                                                    <option data-subtext="" value="YES Bank">YES Bank</option>
                                                    <option data-subtext="" value="Small Finance Banks[edit]">Small Finance Banks[edit]</option>
                                                    <option data-subtext="" value="AU Small Finance Bank">AU Small Finance Bank</option>
                                                    <option data-subtext="" value="Capital Small Finance Bank">Capital Small Finance Bank</option>
                                                    <option data-subtext="" value="Equitas Small Finance Bank">Equitas Small Finance Bank</option>
                                                    <option data-subtext="" value="ESAF Small Finance Bank">ESAF Small Finance Bank</option>
                                                    <option data-subtext="" value="Fincare Small Finance Bank">Fincare Small Finance Bank</option>
                                                    <option data-subtext="" value="Janalakshmi Small Finance Bank">Janalakshmi Small Finance Bank</option>
                                                    <option data-subtext="" value="Suryoday Small Finance Bank">Suryoday Small Finance Bank</option>
                                                    <option data-subtext="" value="Ujjivan Small Finance Bank">Ujjivan Small Finance Bank</option>
                                                    <option data-subtext="" value="Utkarsh Small Finance Bank">Utkarsh Small Finance Bank</option>
                                                    <option data-subtext="" value="RGVN small finance bank">RGVN small finance bank</option>
                                                    <option data-subtext="" value="Local Area Banks[edit]">Local Area Banks[edit]</option>
                                                    <option data-subtext="" value="Coastal Local Area Bank Limited">Coastal Local Area Bank Limited</option>
                                                    <option data-subtext="" value="Krishna Bhima Samruddhi Local Area Bank Limited">Krishna Bhima Samruddhi Local Area Bank Limited</option>
                                                    <option data-subtext="" value="Subhadra Local Area Bank Limited">Subhadra Local Area Bank Limited</option>
                                                    <option data-subtext="" value="Payments Banks[edit]">Payments Banks[edit]</option>
                                                    <option data-subtext="" value="Airtel Payments Bank">Airtel Payments Bank</option>
                                                    <option data-subtext="" value="Fino Payments Bank">Fino Payments Bank</option>
                                                    <option data-subtext="" value="Allahabad Bank">Allahabad Bank</option>
                                                    <option data-subtext="" value="India Post Payments Bank">India Post Payments Bank</option>
                                                    <option data-subtext="" value="Paytm Payments Bank">Paytm Payments Bank</option>

                                                </select>
                                            </div>


                                            <br>  
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
                                                        <span class="inputbox" ><i class="fa fa-inr"></i><?php echo $paid_amount; ?></span> 

                                                    </div>

                                                    <div class="col-md-6">
                                                        <select class="form-control"name="payment_status" required>
                                                            <option value="">--Select--</option>
                                                            <option value="Self">Self</option>
                                                            <option value="Bank">Bank</option>


                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
<?php
if ($to_be_taken > $paid_amount) {
    $due_amount = $to_be_taken - $paid_amount;
    $adv_amount = 0;
} else if ($to_be_taken == $paid_amount) {
    $due_amount = 0;
    $adv_amount = 0;
} else {
    $adv_amount = $paid_amount - $to_be_taken;
    $due_amount = 0;
}
?>

                                            <!--div class="row">
                                                <div class="col-md-6" style="text-align: right;"> 
                                                    <label for="due_amount" class="control-label">Due Amount:</label>
                                                </div>
                                                <div class="col-md-6">
    
                                                    
                                                    <span class="inputbox" ><i class="fa fa-inr"></i-->

                                            <!--br-->
                                            <!-- Advance --> <input type="hidden" name="adv_amount" value="<?php echo $adv_amount; ?> " />
                                            <!--br--><!--Due Amt-->  <input type="hidden" name="due_amount" value="<?php echo $due_amount; ?>" />
                                            <!--/span> 
                                                  
  
                                                 
   
                                                 
  
                                              </div>
                                          </div-->

                                            <br>

                                            <div class="row">                  
                                                <div class="col-md-6" style="text-align: right;"> 
                                                    <label  for="Cumulative">Cumulative:</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <span class="inputbox" >
                                                        <i class="fa fa-inr"></i><?php echo $cumulative_amountpaid_so_far; ?>
                                                    </span>
                                                </div>      
                                            </div>
                                            <br>
                                            <br>

                                            <div class="pull-right">



                                            <!--button type="submit" <?php //if($resul== $resul) { ?> disabled="disabled" <?php //}  ?> name="submit" value="submit" class="btn btn-success">Submit</button-->
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

        <script>

            $(document).ready(function () {
            $(window).keydown(function (event) {
            if (event.keyCode == 13) {
            event.preventDefault();
            return false;
            }
            });
            });

        </script>

    </body>
</html>