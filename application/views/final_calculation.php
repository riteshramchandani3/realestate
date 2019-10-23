<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
    <head>
        <title>Final Calculation</title>
        <?php
        require_once('assets/html_head_links.php');
        ?>
        <style>


            @page {

                margin: 5mm 5mm 5mm 5mm;  /* this affects the margin in the printer settings */

            }
            @media print
            {
                /*@page {size: landscape}*/
                .non-printable { display: none; }
                #printable { display: block;}
            }

            .form-control{
                width: 100% !important;
            }
            .table > .table-bordered > input {

                border: none !important;
                box-shadow: none !important;


            }
            .table-bordered {
                border: 1px solid #000 !important;
            }
            .table-bordered > thead > tr > th,
            .table-bordered > tbody > tr > th,
            .table-bordered > tfoot > tr > th,
            .table-bordered > thead > tr > td,
            .table-bordered > tbody > tr > td,
            .table-bordered > tfoot > tr > td {
                border: 1px solid #000 !important;
            }
            input{
                border: none !important;
                box-shadow: none !important;
                font-weight: 700;
            }
            .form-control[readonly]{
                background: #fff;
            }


        </style>
    </head>

    <?php
    $uid = $this->input->get('id');

    $explode_data = explode('?', $uid);
    $id = $explode_data[0];
    $pid = $explode_data[1];
    $unit_no = $explode_data[2];
    $pre_salesid = $explode_data[3];
    ?>
    <?php
    // echo $id;


    foreach ($this->Agreement_model->view_sheet1($pre_salesid) as $row) {
        ?>
        <?php $total_cost = $row->total_cost; ?>
        <?php $block = $row->block; ?>
    <?php } ?>

    <?php
    $data['project_id'] = $pid;

    foreach ($this->Agreement_model->show_project_info($data) as $row) {
        ?>
        <?php $project_name = $row->project_name; ?>


    <?php } ?>
    <?php
    foreach ($this->View_applicant_info->get_applicant_info($uid) as $row) {
        ?>
        <?php $name = $row->name; ?>


    <?php } ?>

    <?php foreach ($this->Pre_sales_model->get_charge_amount() as $row) { ?>

        <?php $charge_amt = $row->charge_amount; ?>
        <?php $charge_amount1 = $row->charge_amount * 18 / 100; ?>
        <?php $charge_amount = $row->charge_amount + $charge_amount1; ?>

    <?php } ?>


    <body>
        <div style="z-index: 10;">
            <?php
            require_once('assets/top_menu.php');
            require_once('assets/side_menu.php');
            ?>
        </div>
        <div class="main">
            <form action="<?php echo site_url('Final_calculation/getpossession_input'); ?>" method="post" name="Form" class="form-inline" enctype="multipart/form-data" autocomplete="off">
                <div id="printable">
                    <div class="container">
                        <table class="table table-bordered">
                            <thead>
                                <tr style="background-color: #337ab7;color:#FFF;">
                                    <td class="text-center" colspan="6">
                                        <label>CALCULATION BEFORE POSSESSION Sheet No. 01</label>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>    

                                    <td class="text-right" colspan="5">                                 
                                        <label>Date : <?php echo date('d-m-Y'); ?></label> 
                                    </td>                                                             
                                </tr>
                                <tr>                              
                                    <td colspan="3">
                                        <label>Duplex No. <?php echo $unit_no; ?></label>  
                                        <input type="hidden" value="<?php echo $unit_no ?>" name="unit_no">
                                        <input type="hidden" value="<?php echo $id ?>" name="appl_id">
                                    </td>                               
                                    <td colspan="1">                                
                                        <label><?php echo $project_name . nbs(1) . $block; ?></label>                                
                                    </td>                               
                                    <td colspan="1">                                 
                                        <label>  <?php echo $name; ?></label>
                                    </td>                               
                                </tr>

                                <tr>                              
                                    <td colspan="3">
                                        <label>Unit Cost</label>                              
                                    </td>                               
                                    <td colspan="1">                                
                                        <label>:-</label>                                
                                    </td>                               
                                    <td colspan="1">                                 
                                        <label>&nbsp;&nbsp;&nbsp;<?php echo $total_cost; ?></label>

                                        <input class="form-control" type="hidden" step="0.01" min="0"  id="unit_cost1" name="unit_cost1"  value="<?php echo $total_cost; ?>" >
                                    </td>                               
                                </tr>

                                <tr>                              
                                    <td colspan="3">
                                        <label>Maintenance Charges</label>                          
                                    </td>                               
                                    <td colspan="1">                                
                                        <label>:-</label>                                
                                    </td>                               
                                    <td colspan="1">                                 
                                        <input class="form-control" type="text" onblur="makedecimal(this.id)"  step="0.01" min="0"  id="maintiance_charge" name="maintiance_charge"  value="00" onkeypress="return isNumberKey(event)"  onkeyup="input0(this.value)">
                                    </td>                               
                                </tr>

                                <tr>                              
                                    <td colspan="3">
                                        <label>Monthly Operation Charges @ 800 per month + GST@18%</label>        
                                    </td>                               
                                    <td colspan="1">                                
                                        <label>:-</label>                                
                                    </td>                               
                                    <td colspan="1">                                 
                                        <input type="text" step="0.01" min="0" onblur="makedecimal(this.id)"  id="monthly_operation" name="monthly_operation" value="00" class="form-control" onkeypress="return isNumberKey(event)" onkeyup="input1(this.value)">
                                    </td>                               
                                </tr>

                                <tr>                              
                                    <!--td colspan="3">
                                        <label>Society Common Corpus Fund</label>     
                                    </td-->                               
                                    <!--td colspan="1">                                
                                        <label>:-</label>                                
                                    </td-->                               
                                    <!--td colspan="1"-->                                 
                            <input type="hidden" step="0.01" min="0" onblur="makedecimal(this.id)" class="form-control" name="society_common" value="00" id="society_common" onkeypress="return isNumberKey(event)" onkeyup="input2(this.value)">
                            <!--/td-->                               
                            </tr>
                            <tr>                              
                                <!--td colspan="3">
                                    <label>Society Membership Charges</label>     
                                </td-->                               
                                <!--td colspan="1">                                
                                    <label>:-</label>                                
                                </td-->                               
                                <!--td colspan="1"-->                                 
                            <input type="hidden" step="0.01" min="0" onblur="makedecimal(this.id)" class="form-control" name="society_membership_charges" value="00" id="society_membership_charges" onkeypress="return isNumberKey(event)" onkeyup="input11(this.value)">
                            <!--/td-->                               
                            </tr>

                            <tr>                              
                                <td colspan="3">
                                    <label>Registration Stamp Duty charges</label>
                                </td>                               
                                <td colspan="1">                                
                                    <label>:-</label>                                
                                </td>                               
                                <td colspan="1">                                 
                                    <input id="registration_stamp" type="text" step="0.01" onblur="makedecimal(this.id)"  min="0" name="registration_stamp" value="00" class="form-control" onkeypress="return isNumberKey(event)"  onkeyup="input3(this.value)">
                                </td>                               
                            </tr>

                            <tr>                              
                                <td colspan="3">
                                    <label>Service Tax Difference @ 25% from 12.36% to 14.00%</label>
                                </td>                               
                                <td colspan="1">                                
                                    <label>:-</label>                                
                                </td>                               
                                <td colspan="1">                                 
                                    <input type="text" step="0.01" min="0" onblur="makedecimal(this.id)"  id="service_tax1" class="form-control" name="service_tax1" value="00" onkeypress="return isNumberKey(event)" onkeyup="input4(this.value)">
                                </td>                               
                            </tr>

                            <tr>                              
                                <td colspan="3">
                                    <label>Service Tax Difference @ 25% from 14.00% to 14.50%</label>
                                </td>                               
                                <td colspan="1">                                
                                    <label>:-</label>                                
                                </td>                               
                                <td colspan="1">                                 
                                    <input type="text" step="0.01" min="0" onblur="makedecimal(this.id)" id="service_tax2" class="form-control" name="service_tax2" value="00" onkeypress="return isNumberKey(event)" onkeyup="input5(this.value)">
                                </td>                               
                            </tr>

                            <tr>                              
                                <td colspan="3">
                                    <label>Service Tax Difference @ 30% from 14.50% to 14.50%</label>
                                </td>                               
                                <td colspan="1">                                
                                    <label>:-</label>                                
                                </td>                               
                                <td colspan="1">                                 
                                    <input  id="service_tax3" type="text" step="0.01" onblur="makedecimal(this.id)" min="0" class="form-control" name="service_tax3" value="00" onkeypress="return isNumberKey(event)" onkeyup="input6(this.value)">
                                </td>                               
                            </tr>

                            <tr>                              
                                <td colspan="3">
                                    <label>Service Tax Difference @ 30% from 14.50% to 15.00%</label>
                                </td>                               
                                <td colspan="1">                                
                                    <label>:-</label>                                
                                </td>                               
                                <td colspan="1">                                 
                                    <input id="service_tax4" type="text" step="0.01" onblur="makedecimal(this.id)" min="0" class="form-control" name="service_tax4" value="00" onkeypress="return isNumberKey(event)"  onkeyup="input7(this.value)">
                                </td>                               
                            </tr>

                            <tr>                              
                                <td colspan="3">
                                    <label>Service Tax Difference @ 100% of 18% GST</label>
                                </td>                               
                                <td colspan="1">                                
                                    <label>:-</label>                                
                                </td>                               
                                <td colspan="1">                                 
                                    <input id="service_tax5" type="text" step="0.01" onblur="makedecimal(this.id)" min="0" class="form-control" name="service_tax5" value="00" onkeypress="return isNumberKey(event)" onkeyup="input8(this.value)">
                                </td>                               
                            </tr>

                            <tr>                              
                                <td colspan="3">
                                    <label>Interest Charged</label>
                                </td>                               
                                <td colspan="1">                                
                                    <label>:-</label>                                
                                </td>                               
                                <td colspan="1">                                 
                                    <input id="interest" type="text" step="0.01" min="0" onblur="makedecimal(this.id)" class="form-control" name="interest" value="00" onkeypress="return isNumberKey(event)" onkeyup="input9(this.value)">
                                </td>                               
                            </tr>

                            <tr>                              
                                <td class="text-right" colspan="3">
                                    <h5><b>TOTAL</b></h5>
                                </td>                               
                                <td colspan="1">                                
                                    <label>&nbsp;</label>                                
                                </td>                               
                                <td colspan="1">                                 
                                    <input id="total" type="text" class="form-control" name="total" value=" <?php echo $tt = $total_cost; ?>" readonly>
                                </td>                               
                            </tr>

                            <tr>                              
                                <td class="text-right" colspan="3">
                                    <h5><b>PAYMENT RECEIVED</b></h5>
                                </td>                               
                                <td colspan="1">                                
                                    <label>&nbsp;</label>                                
                                </td>  
                                <?php foreach ($this->Final_calculation_model->tot_amt_of_appl($id) as $row) {
                                    ?> 
                                    <?php $sum_tot = $row->total; ?>
                                <?php } ?>
                                <td colspan="1">                                 
                                    <input type="text" id="unit_cost" name="payment_received" value=" <?php echo $sum_tot; ?>" class="form-control" readonly>                                </td>                               
                            </tr>

                            <tr>                              
                                <td class="text-right" colspan="3">
                                    <h5><b>BALANCED PAYMENT</b></h5>
                                </td>                               
                                <td colspan="1">                                
                                    <label>&nbsp;</label>                                
                                </td>                               
                                <td colspan="1">                                 
                                    <input type="text" id="due_balance" class="form-control" name="due_balance" value="<?php echo $tt - $sum_tot; ?>" readonly>                             </td>                               
                            </tr>

                            </tbody>
                        </table>

                        <br>
                        <div class="col-md-12 text-center">
                            <h3><label>PAYMENT DETAIL</label></h3>
                        </div>




                        <table class="table table-bordered" border='2'>

                            <tr style="background-color: #337ab7;color:#FFF;">

                                <th style="text-align: center;">  Mr. No. </th>
                                <th style="text-align: center;">  Date </th>
                                <th style="text-align: center;">  Particular </th>
                                <th style="text-align: center;">  Amount </th>
                                <th colspan="2" style="text-align: center;">  Remark </th> 
                             </tr>
                            <tbody>
                                                                <?php
                                $user = $id;
                                foreach ($this->Payment_model->get_invoice($user) as $row) {
                                    ?> 
                                    <tr style="text-transform: capitalize;text-align: center;">
                                <?php  if($row['reg_status'] == 'REVERTED'){
                                    
                                }else{?>
                                    
                                
                                
                                        <td><?php echo $row['receipt_no']; ?></td>
                                        <td>
                                            <?php
                                            $d = explode(' ', $deposite_date = $row['deposite_date']);
                                            $deposite_date = new DateTime($d[0]);
                                            echo $deposite_date->format('d-m-Y');
                                            ?></td>
                                        <td><?php echo $row['descreption']; ?></td>
                                        <td><?php echo $row['advance']; ?></td>
                                        <td><?php  if($row['mode_of_payment'] =='DD'){
                                            echo 'DD NO'.nbs(1).  $row['payment_mode_no'];
                                        }elseif($row['mode_of_payment'] =='Cheque'){
                                              echo 'CH NO'.nbs(1).  $row['payment_mode_no'];
                                        }elseif ($row['mode_of_payment'] =='NEFT'){
                                              echo 'NEFT NO'.nbs(1).  $row['payment_mode_no'];
                                        }elseif ($row['mode_of_payment'] =='RTGS'){
                                              echo 'RTGS NO'.nbs(1).  $row['payment_mode_no'];
                                        }else{
                                              echo 'Cash'.nbs(1).  $row['payment_mode_no'];
                                        } ?></td>


                                        <td>
                                            <?php
                                            $x = explode(' ', $due_date = $row['cheque_date']);
                                            $due_date = new DateTime($x[0]);
                                            echo 'Date ' . nbs(1) . $due_date->format('d-m-Y');
                                            ?></td>
                                      <?php  } ?>

                                    <?php } ?>
                                </tr>
                                <?php
                                $user = $id;
                                foreach ($this->Final_calculation_model->get_cumulative($user) as $row) {
                                    ?> 
                                    <tr style="text-transform: capitalize;text-align: center;">
                                        <td></td>
                                        <td> </td>
                                        <td></td>
                                        <td><?php echo $cumulative = $row->cumulative; ?></td>
                                        <td></td>
                                        <td></td>

                                    <?php } ?>
                                </tr>

                            </tbody>
                        </table>

                        <br><br>



                        <table class="table table-bordered" border='2'>
                            <thead>
                                <tr style="background-color: #337ab7;color:#FFF;">


                                    <td class="text-center">
                                        <label></label>
                                    </td>
                                    <td class="text-center">
                                        <label> Party Name</label>
                                    </td>
                                    <td class="text-center">
                                        <label>Chq. No.</label>
                                    </td>
                                    <td class="text-center">
                                        <label>Ch. deposite date</label>
                                    </td>
                                    <td class="text-center">
                                        <label>Amount</label>
                                    </td>
                                </tr>

                            </thead>
                            <tbody>



                                <tr>
                                    <td>Chq.    part(Agre)</td>
                                    <td>Essarjee Sampada Pvt. Ltd.</td>
                                    <td></td>
                                    <td>

                                    </td>

                                    <td><input type="text" value="<?php echo number_format((float) $total_cost - $cumulative, 2, '.', ''); ?>" id="chq_part_arg" name="chq_part_arg" readonly</td>
                                </tr>
                                <tr>
                                    <td>Chq.    part(STD)</td>
                                    <td>Essarjee Sampada Pvt. Ltd.</td>
                                    <td></td>
                                    <td>

                                    </td>

                                    <td><input type="text" id="chq_part_std" name="chq_part_std" readonly></td>
                                </tr>
                                <tr>
                                    <td>Chq.    ECPL S Maint.</td>
                                    <td>Essarjee Sampada Pvt. Ltd.</td>
                                    <td></td>
                                    <td>

                                    </td>

                                    <td><input type="text" id="chq_ecpls_maint" name="chq_ecpls_maint" readonly></td>
                                </tr>
                                <tr>
                                    <td>Chq.    ECPL S Maint.</td>
                                    <td>Essarjee Sampada Pvt. Ltd.</td>
                                    <td></td>
                                    <td>

                                    </td>

                                    <td><input type="text" id="chq_monthly_opt" name="chq_monthly_opt" readonly></td>
                                </tr>
                                <tr>
                                    <!--td>Chq.    Society.</td-->
                                    <!--td>Sampada Residents Welfare Society</td-->
                                    <!--td></td-->
                                    <!--td>

                                    </td-->

                                    <!--td--><input type="hidden" id="chq_soc_com_fund" name="chq_soc_com_fund" readonly><!--/td-->
                            </tr>
                            <tr>
                                <!--td>Chq.    Society.</td-->
                                <!--td>Sampada Residents Welfare Society</td-->
                                <!--td></td-->
                                <!--td>

                                </td-->

                                <!--td--><input type="hidden" id="chq_soc_welf" name="chq_soc_welf" readonly><!--/td-->
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>

                                </td>

                                <td><input type="text" id="cal" name="cal" value="<?php echo $total_cost - $cumulative; ?>" readonly></td>
                            </tr>







                            </tbody>
                        </table>

                        <input type="hidden" id="userid" name="userid" value="<?php echo $id; ?>">
                        <input type="hidden" id="unitno" name="unitno" value="<?php echo $unit_no; ?>">

                        <!--div class="col-md-12 text-center">
                          <h3><label>Accrued Interest</label></h3>
                      </div>
                      <div class="panel-body" style="overflow-y:scroll;" >
                       
                       
                       <table id="ashwincodetable" class="table table-bordered table-striped" border='2'>

                              <tr style="background-color: #337ab7;color:#FFF;">

                                  <th style="text-align: center;">  Stage </th>
                                  <th style="text-align: center;">  Stage Actual Amount </th>
                                  <th style="text-align: center;">  Due Date </th>
                                  <th style="text-align: center;">  Cheque Date(Payment) </th>
                                  <th style="text-align: center;">  After Payment Due Amount </th>
                                  <th style="text-align: center;">  Delay Days </th> 
                                  <th style="text-align: center;">  % Interest Amount </th> 

                              </tr>
                              
                       </table>
                  </div-->
                    </div>
                    <dir class="container">
                        <div class="row text-center">
                            <input type="submit" name="submit" class="btn btn-success" value="submit"/>
                            <a href="javascript: history.go(-1)" class="btn btn-default" role="button">Cancel</a>
                        </div>
                    </dir>
            </form>
            <br><br>
            <script type="text/javascript">

                $(document).ready(function () {


                    $('#toppageheader').html('Final Calculation');
                    $("a:contains('Dues Settlement')").parent().addClass('active');
                    $("a:contains(Dues Settlement)").parents().addClass('open');
                });

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
            <script type="text/javascript">

                function input0(arg)
                {
                    //alert(arg);
                    var unit_cost1 = document.getElementById('unit_cost1').value;
                    var unit_cost = document.getElementById('unit_cost').value;
                    var monthly_operation = document.getElementById('monthly_operation').value;
                    var society_common = document.getElementById('society_common').value;
                    var society_membership_charges = document.getElementById('society_membership_charges').value;
                    var registration_stamp = document.getElementById('registration_stamp').value;
                    var service_tax1 = document.getElementById('service_tax1').value;
                    var service_tax2 = document.getElementById('service_tax2').value;
                    var service_tax3 = document.getElementById('service_tax3').value;
                    var service_tax4 = document.getElementById('service_tax4').value;
                    var service_tax5 = document.getElementById('service_tax5').value;
                    var interest = document.getElementById('interest').value;



                    var total = (parseFloat(arg) + parseFloat(monthly_operation) + parseFloat(unit_cost1) + parseFloat(society_common) + parseFloat(registration_stamp) + parseFloat(service_tax1) + parseFloat(service_tax2) + parseFloat(service_tax3) + parseFloat(service_tax4) + parseFloat(service_tax5) + parseFloat(interest) + parseFloat(society_membership_charges));
                    document.getElementById('total').value = (total).toFixed(2);
                    document.getElementById('due_balance').value = (parseFloat(total) - parseFloat(unit_cost)).toFixed(2);
                    document.getElementById('chq_ecpls_maint').value = (parseFloat(arg).toFixed(2));
                    var chq_part_arg = document.getElementById('chq_part_arg').value;

                    var cal = (parseFloat(arg) + parseFloat(chq_part_arg) + parseFloat(service_tax1) + parseFloat(service_tax2) + parseFloat(service_tax3) + parseFloat(service_tax4) + parseFloat(service_tax5) + parseFloat(monthly_operation) + parseFloat(society_common) + parseFloat(society_membership_charges));
                    document.getElementById('cal').value = cal.toFixed(2);
                }
                function input1(arg)
                {
                    //alert(arg);
                    var unit_cost1 = document.getElementById('unit_cost1').value;
                    var unit_cost = document.getElementById('unit_cost').value;
                    var maintiance_charge = document.getElementById('maintiance_charge').value;
                    var society_common = document.getElementById('society_common').value;
                    var society_membership_charges = document.getElementById('society_membership_charges').value;
                    var registration_stamp = document.getElementById('registration_stamp').value;
                    var service_tax1 = document.getElementById('service_tax1').value;
                    var service_tax2 = document.getElementById('service_tax2').value;
                    var service_tax3 = document.getElementById('service_tax3').value;
                    var service_tax4 = document.getElementById('service_tax4').value;
                    var service_tax5 = document.getElementById('service_tax5').value;
                    var interest = document.getElementById('interest').value;


                    var total = (parseFloat(arg) + parseFloat(unit_cost1) + parseFloat(maintiance_charge) + parseFloat(society_common) + parseFloat(registration_stamp) + parseFloat(service_tax1) + parseFloat(service_tax2) + parseFloat(service_tax3) + parseFloat(service_tax4) + parseFloat(service_tax5) + parseFloat(interest) + parseFloat(society_membership_charges));
                    document.getElementById('total').value = (total).toFixed(2);
                    document.getElementById('due_balance').value = (parseFloat(total) - parseFloat(unit_cost)).toFixed(2);
                    document.getElementById('chq_monthly_opt').value = (parseFloat(arg).toFixed(2));
                    var chq_part_arg = document.getElementById('chq_part_arg').value;

                    var cal = (parseFloat(arg) + parseFloat(chq_part_arg) + parseFloat(service_tax1) + parseFloat(service_tax2) + parseFloat(service_tax3) + parseFloat(service_tax4) + parseFloat(service_tax5) + parseFloat(maintiance_charge) + parseFloat(society_common) + parseFloat(society_membership_charges));
                    document.getElementById('cal').value = cal.toFixed(2);
                }
                function input2(arg)
                {
                    //alert(arg);
                    var unit_cost1 = document.getElementById('unit_cost1').value;
                    var unit_cost = document.getElementById('unit_cost').value;
                    var maintiance_charge = document.getElementById('maintiance_charge').value;
                    var monthly_operation = document.getElementById('monthly_operation').value;
                    var society_membership_charges = document.getElementById('society_membership_charges').value;
                    var registration_stamp = document.getElementById('registration_stamp').value;
                    var service_tax1 = document.getElementById('service_tax1').value;
                    var service_tax2 = document.getElementById('service_tax2').value;
                    var service_tax3 = document.getElementById('service_tax3').value;
                    var service_tax4 = document.getElementById('service_tax4').value;
                    var service_tax5 = document.getElementById('service_tax5').value;
                    var interest = document.getElementById('interest').value;


                    var total = (parseFloat(arg) + parseFloat(unit_cost1) + parseFloat(maintiance_charge) + parseFloat(monthly_operation) + parseFloat(registration_stamp) + parseFloat(service_tax1) + parseFloat(service_tax2) + parseFloat(service_tax3) + parseFloat(service_tax4) + parseFloat(service_tax5) + parseFloat(interest) + parseFloat(society_membership_charges));
                    document.getElementById('total').value = (total).toFixed(2);
                    document.getElementById('due_balance').value = (parseFloat(total) - parseFloat(unit_cost)).toFixed(2);
                    document.getElementById('chq_soc_com_fund').value = (parseFloat(arg).toFixed(2));

                    var chq_part_arg = document.getElementById('chq_part_arg').value;
                    var cal = (parseFloat(arg) + parseFloat(chq_part_arg) + parseFloat(service_tax1) + parseFloat(service_tax2) + parseFloat(service_tax3) + parseFloat(service_tax4) + parseFloat(service_tax5) + parseFloat(maintiance_charge) + parseFloat(monthly_operation) + parseFloat(society_membership_charges));
                    document.getElementById('cal').value = cal.toFixed(2);
                }
                function input3(arg)
                {
                    //alert(arg);
                    var unit_cost1 = document.getElementById('unit_cost1').value;
                    var unit_cost = document.getElementById('unit_cost').value;
                    var maintiance_charge = document.getElementById('maintiance_charge').value;
                    var monthly_operation = document.getElementById('monthly_operation').value;
                    var society_common = document.getElementById('society_common').value;
                    var society_membership_charges = document.getElementById('society_membership_charges').value;
                    var service_tax1 = document.getElementById('service_tax1').value;
                    var service_tax2 = document.getElementById('service_tax2').value;
                    var service_tax3 = document.getElementById('service_tax3').value;
                    var service_tax4 = document.getElementById('service_tax4').value;
                    var service_tax5 = document.getElementById('service_tax5').value;
                    var interest = document.getElementById('interest').value;


                    var total = (parseFloat(arg) + parseFloat(unit_cost1) + parseFloat(maintiance_charge) + parseFloat(monthly_operation) + parseFloat(society_common) + parseFloat(service_tax1) + parseFloat(service_tax2) + parseFloat(service_tax3) + parseFloat(service_tax4) + parseFloat(service_tax5) + parseFloat(interest) + parseFloat(society_membership_charges));
                    document.getElementById('total').value = (total).toFixed(2);
                    document.getElementById('due_balance').value = (parseFloat(total) - parseFloat(unit_cost)).toFixed(2);

                }
                function input4(arg)
                {
                    //alert(arg);
                    var unit_cost1 = document.getElementById('unit_cost1').value;
                    var unit_cost = document.getElementById('unit_cost').value;
                    var maintiance_charge = document.getElementById('maintiance_charge').value;
                    var monthly_operation = document.getElementById('monthly_operation').value;
                    var society_common = document.getElementById('society_common').value;
                    var society_membership_charges = document.getElementById('society_membership_charges').value;
                    var registration_stamp = document.getElementById('registration_stamp').value;
                    var service_tax2 = document.getElementById('service_tax2').value;
                    var service_tax3 = document.getElementById('service_tax3').value;
                    var service_tax4 = document.getElementById('service_tax4').value;
                    var service_tax5 = document.getElementById('service_tax5').value;
                    var interest = document.getElementById('interest').value;


                    var total = (parseFloat(arg) + parseFloat(unit_cost1) + parseFloat(maintiance_charge) + parseFloat(monthly_operation) + parseFloat(society_common) + parseFloat(registration_stamp) + parseFloat(service_tax2) + parseFloat(service_tax3) + parseFloat(service_tax4) + parseFloat(service_tax5) + parseFloat(interest) + parseFloat(society_membership_charges));
                    document.getElementById('total').value = (total).toFixed(2);
                    document.getElementById('due_balance').value = (parseFloat(total) - parseFloat(unit_cost)).toFixed(2);

                    var chq_part_std = (parseFloat(arg) + parseFloat(service_tax2) + parseFloat(service_tax3) + parseFloat(service_tax4) + parseFloat(service_tax5));
                    document.getElementById('chq_part_std').value = chq_part_std.toFixed(2);
                    var chq_part_arg = document.getElementById('chq_part_arg').value;

                    var cal = (parseFloat(arg) + parseFloat(chq_part_arg) + parseFloat(society_membership_charges) + parseFloat(service_tax2) + parseFloat(service_tax3) + parseFloat(service_tax4) + parseFloat(service_tax5) + parseFloat(maintiance_charge) + parseFloat(monthly_operation) + parseFloat(society_common));
                    document.getElementById('cal').value = cal.toFixed(2);

                }
                function input5(arg)
                {
                    //alert(arg);
                    var unit_cost1 = document.getElementById('unit_cost1').value;
                    var unit_cost = document.getElementById('unit_cost').value;
                    var maintiance_charge = document.getElementById('maintiance_charge').value;
                    var monthly_operation = document.getElementById('monthly_operation').value;
                    var society_common = document.getElementById('society_common').value;
                    var society_membership_charges = document.getElementById('society_membership_charges').value;
                    var registration_stamp = document.getElementById('registration_stamp').value;
                    var service_tax1 = document.getElementById('service_tax1').value;
                    var service_tax3 = document.getElementById('service_tax3').value;
                    var service_tax4 = document.getElementById('service_tax4').value;
                    var service_tax5 = document.getElementById('service_tax5').value;
                    var interest = document.getElementById('interest').value;


                    var total = (parseFloat(arg) + parseFloat(unit_cost1) + parseFloat(maintiance_charge) + parseFloat(monthly_operation) + parseFloat(society_common) + parseFloat(registration_stamp) + parseFloat(service_tax1) + parseFloat(service_tax3) + parseFloat(service_tax4) + parseFloat(service_tax5) + parseFloat(interest) + parseFloat(society_membership_charges));
                    document.getElementById('total').value = (total).toFixed(2);
                    document.getElementById('due_balance').value = (parseFloat(total) - parseFloat(unit_cost)).toFixed(2);


                    var chq_part_std = (parseFloat(arg) + parseFloat(service_tax1) + parseFloat(service_tax3) + parseFloat(service_tax4) + parseFloat(service_tax5));
                    document.getElementById('chq_part_std').value = chq_part_std.toFixed(2);
                    var chq_part_arg = document.getElementById('chq_part_arg').value;
                    var cal = (parseFloat(arg) + parseFloat(chq_part_arg) + parseFloat(society_membership_charges) + parseFloat(service_tax1) + parseFloat(service_tax3) + parseFloat(service_tax4) + parseFloat(service_tax5) + parseFloat(maintiance_charge) + parseFloat(monthly_operation) + parseFloat(society_common));
                    document.getElementById('cal').value = cal.toFixed(2);

                }
                function input6(arg)
                {
                    //alert(arg);
                    var unit_cost1 = document.getElementById('unit_cost1').value;
                    var unit_cost = document.getElementById('unit_cost').value;
                    var maintiance_charge = document.getElementById('maintiance_charge').value;
                    var monthly_operation = document.getElementById('monthly_operation').value;
                    var society_common = document.getElementById('society_common').value;
                    var society_membership_charges = document.getElementById('society_membership_charges').value;
                    var registration_stamp = document.getElementById('registration_stamp').value;
                    var service_tax1 = document.getElementById('service_tax1').value;
                    var service_tax2 = document.getElementById('service_tax2').value;
                    var service_tax4 = document.getElementById('service_tax4').value;
                    var service_tax5 = document.getElementById('service_tax5').value;
                    var interest = document.getElementById('interest').value;


                    var total = (parseFloat(arg) + parseFloat(unit_cost1) + parseFloat(maintiance_charge) + parseFloat(monthly_operation) + parseFloat(society_common) + parseFloat(registration_stamp) + parseFloat(service_tax1) + parseFloat(service_tax2) + parseFloat(service_tax4) + parseFloat(service_tax5) + parseFloat(interest) + parseFloat(society_membership_charges));
                    document.getElementById('total').value = (total).toFixed(2);
                    document.getElementById('due_balance').value = (parseFloat(total) - parseFloat(unit_cost)).toFixed(2);
                    var chq_part_std = (parseFloat(arg) + parseFloat(service_tax1) + parseFloat(service_tax2) + parseFloat(service_tax4) + parseFloat(service_tax5));
                    document.getElementById('chq_part_std').value = chq_part_std.toFixed(2);
                    var chq_part_arg = document.getElementById('chq_part_arg').value;
                    var cal = (parseFloat(arg) + parseFloat(chq_part_arg) + parseFloat(society_membership_charges) + parseFloat(service_tax1) + parseFloat(service_tax2) + parseFloat(service_tax4) + parseFloat(service_tax5) + parseFloat(maintiance_charge) + parseFloat(monthly_operation) + parseFloat(society_common));
                    document.getElementById('cal').value = cal.toFixed(2);

                }
                function input7(arg)
                {
                    //alert(arg);
                    var unit_cost1 = document.getElementById('unit_cost1').value;
                    var unit_cost = document.getElementById('unit_cost').value;
                    var maintiance_charge = document.getElementById('maintiance_charge').value;
                    var monthly_operation = document.getElementById('monthly_operation').value;
                    var society_common = document.getElementById('society_common').value;
                    var society_membership_charges = document.getElementById('society_membership_charges').value;
                    var registration_stamp = document.getElementById('registration_stamp').value;
                    var service_tax1 = document.getElementById('service_tax1').value;
                    var service_tax2 = document.getElementById('service_tax2').value;
                    var service_tax3 = document.getElementById('service_tax3').value;
                    var service_tax5 = document.getElementById('service_tax5').value;
                    var interest = document.getElementById('interest').value;


                    var total = (parseFloat(arg) + parseFloat(unit_cost1) + parseFloat(maintiance_charge) + parseFloat(monthly_operation) + parseFloat(society_common) + parseFloat(registration_stamp) + parseFloat(service_tax1) + parseFloat(service_tax2) + parseFloat(service_tax3) + parseFloat(service_tax5) + parseFloat(interest) + parseFloat(society_membership_charges));
                    document.getElementById('total').value = (total).toFixed(2);
                    document.getElementById('due_balance').value = (parseFloat(total) - parseFloat(unit_cost)).toFixed(2);
                    var chq_part_std = (parseFloat(arg) + parseFloat(service_tax1) + parseFloat(service_tax2) + parseFloat(service_tax3) + parseFloat(service_tax5));
                    document.getElementById('chq_part_std').value = chq_part_std.toFixed(2);
                    var chq_part_arg = document.getElementById('chq_part_arg').value;
                    var cal = (parseFloat(arg) + parseFloat(chq_part_arg) + parseFloat(society_membership_charges) + parseFloat(service_tax1) + parseFloat(service_tax2) + parseFloat(service_tax3) + parseFloat(service_tax5) + parseFloat(maintiance_charge) + parseFloat(monthly_operation) + parseFloat(society_common));
                    document.getElementById('cal').value = cal.toFixed(2);
                }
                function input8(arg)
                {
                    //alert(arg);
                    var unit_cost1 = document.getElementById('unit_cost1').value;
                    var unit_cost = document.getElementById('unit_cost').value;
                    var maintiance_charge = document.getElementById('maintiance_charge').value;
                    var monthly_operation = document.getElementById('monthly_operation').value;
                    var society_common = document.getElementById('society_common').value;
                    var society_membership_charges = document.getElementById('society_membership_charges').value;
                    var registration_stamp = document.getElementById('registration_stamp').value;
                    var service_tax1 = document.getElementById('service_tax1').value;
                    var service_tax2 = document.getElementById('service_tax2').value;
                    var service_tax3 = document.getElementById('service_tax3').value;
                    var service_tax4 = document.getElementById('service_tax4').value;
                    var interest = document.getElementById('interest').value;


                    var total = (parseFloat(arg) + parseFloat(unit_cost1) + parseFloat(maintiance_charge) + parseFloat(monthly_operation) + parseFloat(society_common) + parseFloat(registration_stamp) + parseFloat(service_tax1) + parseFloat(service_tax2) + parseFloat(service_tax3) + parseFloat(service_tax4) + parseFloat(interest) + parseFloat(society_membership_charges));
                    document.getElementById('total').value = (total).toFixed(2);
                    document.getElementById('due_balance').value = (parseFloat(total) - parseFloat(unit_cost)).toFixed(2);

                    var chq_part_std = (parseFloat(arg) + parseFloat(service_tax1) + parseFloat(service_tax2) + parseFloat(service_tax3) + parseFloat(service_tax4));
                    document.getElementById('chq_part_std').value = chq_part_std.toFixed(2);
                    var chq_part_arg = document.getElementById('chq_part_arg').value;
                    var cal = (parseFloat(arg) + parseFloat(chq_part_arg) + parseFloat(society_membership_charges) + parseFloat(service_tax1) + parseFloat(service_tax2) + parseFloat(service_tax3) + parseFloat(service_tax4) + parseFloat(maintiance_charge) + parseFloat(monthly_operation) + parseFloat(society_common));
                    document.getElementById('cal').value = cal.toFixed(2);
                }
                function input9(arg)
                {
                    //alert(arg);
                    var unit_cost1 = document.getElementById('unit_cost1').value;
                    var unit_cost = document.getElementById('unit_cost').value;
                    var maintiance_charge = document.getElementById('maintiance_charge').value;
                    var monthly_operation = document.getElementById('monthly_operation').value;
                    var society_common = document.getElementById('society_common').value;
                    var society_membership_charges = document.getElementById('society_membership_charges').value;
                    var registration_stamp = document.getElementById('registration_stamp').value;
                    var service_tax1 = document.getElementById('service_tax1').value;
                    var service_tax2 = document.getElementById('service_tax2').value;
                    var service_tax3 = document.getElementById('service_tax3').value;
                    var service_tax4 = document.getElementById('service_tax4').value;
                    var service_tax5 = document.getElementById('service_tax5').value;


                    var total = (parseFloat(arg) + parseFloat(unit_cost1) + parseFloat(maintiance_charge) + parseFloat(monthly_operation) + parseFloat(society_common) + parseFloat(registration_stamp) + parseFloat(service_tax1) + parseFloat(service_tax2) + parseFloat(service_tax3) + parseFloat(service_tax4) + parseFloat(service_tax5) + parseFloat(society_membership_charges));
                    document.getElementById('total').value = (total).toFixed(2);
                    document.getElementById('due_balance').value = (parseFloat(total) - parseFloat(unit_cost)).toFixed(2);


                }
                function input11(arg)
                {


                    //alert(arg);
                    var unit_cost1 = document.getElementById('unit_cost1').value;
                    var unit_cost = document.getElementById('unit_cost').value;
                    var maintiance_charge = document.getElementById('maintiance_charge').value;
                    var monthly_operation = document.getElementById('monthly_operation').value;
                    var society_common = document.getElementById('society_common').value;

                    var registration_stamp = document.getElementById('registration_stamp').value;
                    var service_tax1 = document.getElementById('service_tax1').value;
                    var service_tax2 = document.getElementById('service_tax2').value;
                    var service_tax3 = document.getElementById('service_tax3').value;
                    var service_tax4 = document.getElementById('service_tax4').value;
                    var service_tax5 = document.getElementById('service_tax5').value;
                    var interest = document.getElementById('interest').value;


                    var total = (parseFloat(arg) + parseFloat(unit_cost1) + parseFloat(maintiance_charge) + parseFloat(monthly_operation) + parseFloat(society_common) + parseFloat(registration_stamp) + parseFloat(service_tax1) + parseFloat(service_tax2) + parseFloat(service_tax3) + parseFloat(service_tax4) + parseFloat(service_tax5) + parseFloat(interest));
                    document.getElementById('total').value = (total).toFixed(2);
                    document.getElementById('due_balance').value = (parseFloat(total) - parseFloat(unit_cost)).toFixed(2);
                    document.getElementById('chq_soc_welf').value = (parseFloat(arg).toFixed(2));



                    var chq_part_arg = document.getElementById('chq_part_arg').value;
                    var cal = (parseFloat(arg) + parseFloat(chq_part_arg) + parseFloat(service_tax1) + parseFloat(service_tax2) + parseFloat(service_tax3) + parseFloat(service_tax4) + parseFloat(service_tax5) + parseFloat(maintiance_charge) + parseFloat(monthly_operation) + parseFloat(society_common));
                    document.getElementById('cal').value = cal.toFixed(2);


                }


                $(document).ready(function () {
                    $('#toppageheader').html('Final Calculation');
                    $("a:contains(Final Calculation)").parent().addClass('active');
                    var userid = $('#userid').val();
                    var unitno = $('#unitno').val();

                    $.ajax({
                        type: 'POST',
                        dataType: 'JSON',
                        url: "<?php echo site_url('Interest_calculation/calculate_interest'); ?>",
                        data: {userid: userid, unitno: unitno},
                        success: function (msg) {

                            var q = JSON.stringify(msg);
                            var jsonobj = JSON.parse(q);
                            //  alert('Now see');
                            var tbl = document.getElementById('ashwincodetable');
                            for (var i = 0; i < jsonobj.length; i++)
                            {
                                //   alert(jsonobj[i]['due_dt']);
                                //   alert(jsonobj[i]['stage']);
                                //  alert(jsonobj[i]['chq_dt']);
                                var tr = document.createElement('tr');

                                var td = document.createElement('td');
                                td.innerHTML = jsonobj[i]['stage'];
                                tr.appendChild(td);
                                var td = document.createElement('td');
                                td.innerHTML = jsonobj[i]['actual_amt'];
                                tr.appendChild(td);
                                var td = document.createElement('td');
                                td.innerHTML = jsonobj[i]['due_dt'];
                                tr.appendChild(td);

                                var td = document.createElement('td');
                                td.innerHTML = jsonobj[i]['chq_dt'];
                                tr.appendChild(td);

                                if (jsonobj[i]['chq_dt'] == '0000-00-00')
                                {
                                    var td = document.createElement('td');
                                    td.innerHTML = 'Interest on Actual Amount';
                                    tr.appendChild(td);
                                } else
                                {
                                    var td = document.createElement('td');
                                    td.innerHTML = jsonobj[i]['due_amt'];
                                    tr.appendChild(td);
                                }
                                var td = document.createElement('td');
                                td.innerHTML = jsonobj[i]['delaydays'];
                                tr.appendChild(td);
                                var td = document.createElement('td');
                                td.innerHTML = jsonobj[i]['interestamt'].toFixed(2);
                                tr.appendChild(td);
                                tbl.appendChild(tr);

                            }

                        }

                    });
                });


                function makedecimal(id)
                {
                    var onen = Number(document.getElementById(id).value);
                    var a = onen.toFixed(2);
                    document.getElementById(id).value = a;

                }

                function ValidateNum(num) {
                    num.value = num.value.replace(/[\\A-Za-z!"£$%^&\,*+_={};:'@#~,.Š\/<>?|`¬\]\[]/g, '');
                }


                function isNumberKey(evt)
                {
                    var charCode = (evt.which) ? evt.which : event.keyCode
                    if (charCode > 31 && (charCode < 45 || charCode > 57))
                        return false;

                    return true;
                }
                
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