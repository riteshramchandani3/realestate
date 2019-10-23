<!DOCTYPE html>
<html>
    <head>
        <title>View Invoices & Payments</title>
        <?php require_once('assets/html_head_links.php'); ?>
        <style>
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

            @media print
            {
                /*@page {size: landscape}*/
                .non-printable { display: none; }
                #printable { display: block;}
                .panel-body{
                    overflow:auto !important; 
                    max-height:100% !important; 
                }
            }
            @page {

                margin: 5mm;
            }
            .panel-primary{
                box-shadow: none;
                border: none;
            }
            .panel-heading{
                border: 1px solid #000;
            }

        </style>
    </head>
    <body> 
        <?php
        require_once('assets/top_menu.php');
        require_once('assets/side_menu.php');
        ?>
        <div class="main">
            <!-- Content Here -->

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


                <?php
                // log_message('error', 'applicant payment  page start:');
                $user1 = $this->input->get('uid');

                //  print_r( $user); echo'<br/>';
                foreach ($this->Payment_model->get_appl_details($user1) as $row) {
                    ?> 
                    <div class="row">
                        <div class="panel with-nav-tabs panel-default">
                            <div class="panel-heading" style="height: 49px;">
                                <ul class="nav nav-tabs" style="margin-top: 30px;">
                                    <li class="active"><a href="#tab1default" data-toggle="tab">Invoices & Payments</a></li>
                                    <li><a href="#tab2default" data-toggle="tab">Payments Statment</a></li>
                                </ul>
                            </div>
                            <div class="panel-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="tab1default">
                                        <div class="panel panel-primary" >
                                            <div class="panel-heading">
                                                <h4>  
                                                    <strong>Invoices & Payments</strong>&nbsp;&nbsp;<?php $name = $row->name; ?>&nbsp;&nbsp;&nbsp;&nbsp;<strong> </strong> &nbsp;<?php $project_name = $row->project_name; ?> <?php $block = $row->block; ?>&nbsp;&nbsp;&nbsp;&nbsp;<strong></strong>&nbsp;<?php $unit_no = $row->unit_no; ?>&nbsp;&nbsp;&nbsp;&nbsp;<strong></strong>&nbsp;<?php $type = $row->type; ?>
                                                </h4>

                                                <a href="<?php echo site_url('Payment/finalpayment'); ?>" class="btn btn-primary pull-right clickable" role="button"><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;&nbsp;Back</a>
                                            </div>
                                            <br>
                                            <center>
                                                <div class="btn-3d" style="border:1px solid #337ab7; border-radius:5px; width:80%; line-height:150%;  ">
                                                    <label>Customer Name :</label><?php echo nbs(2) . $name; ?><?php echo nbs(3); ?>
                                                    <label>Project Name :</label><?php echo nbs(2) . $project_name . nbs(1) . $block; ?> <?php echo nbs(3); ?>
                                                    <label>Unit No :</label><?php echo nbs(2) . $unit_no; ?> <?php echo nbs(3); ?>
                                                    <label>Type :</label><?php echo nbs(2) . $type; ?>

                                                </div>
                                            </center>

                                            <?php
                                        }
                                        ?>
                                        <?php
                                        $user = $this->input->get('uid');
                                        $sql = "select * from payment_receipt where appl_id='$user' ";

                                        $this->db->query($sql);

                                        if ($this->db->affected_rows() > 0) {
                                            //true
                                            ?>
                                            <?php
                                            
                                              foreach ($this->Payment_model->get_payment_info($unit_no) as $row) {
                                                            ?> 
                                            
                                            <?php $max_id =$row->max_id; ?>
                                  
                                              <?php } ?>
                                            <div class="panel-body" style="width:100%;overflow:auto; max-height:500px;" >
                                                <table class="table table-bordered table-striped" border='2'>

                                                    <tr style="background-color: #337ab7;color:#FFF;">

                                                       
                                                        <th style="text-align: center;">  Invoice No. </th>
                                                       

                                                        <th style="text-align: center;">  Action </th> 

                                                    </tr>
                                                    <tbody>
                                                        <?php
                                                        log_message('error', 'applicant doccument  page start:');
                                                        $user = $this->input->get('uid');
                                                        //  print_r( $user); echo'<br/>';
                                                        foreach ($this->Payment_model->get_invoice($user) as $row) {
                                                            ?> 


                                                            <tr style="text-transform: capitalize;text-align: center;">

                                                               
                                                                <td>ECPL/GST/R/<?php echo $row['receipt_no']; ?></td>
                                                               

 

                                                                <td>
                                                       <?php if($row['reg_status'] == 'REVERTED'){?>
                                                            <a class="btn btn-info btn-3d" href="<?php echo site_url('Payment/show_applicant_invoice?id=' . $row['id'] . '?' . $row['appl_id']) ?> ">View Invoice&nbsp;&nbsp;<i class="fa fa-list-alt"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                                                                    <a class="btn btn-info btn-3d" href="<?php echo site_url('Payment/show_applicant_payment?id=' . $row['id'] . '?' . $row['appl_id']) ?> ">View Receipt&nbsp;&nbsp;<i class="fa fa-list-alt"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                                                                    <a class="btn btn-danger btn-3d disabled" href="<?php //echo site_url('Payment/revert_payment?id=' . $row['id'] ) ?> ">Cancel Payment&nbsp;&nbsp;<i class="fa fa-ban"></i></a>
                                                           
                                                  <?php     }else{ ?>
                                                           
                                                        <a class="btn btn-info btn-3d" href="<?php echo site_url('Payment/show_applicant_invoice?id=' . $row['id'] . '?' . $row['appl_id']) ?> ">View Invoice&nbsp;&nbsp;<i class="fa fa-list-alt"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                                                                    <a class="btn btn-info btn-3d" href="<?php echo site_url('Payment/show_applicant_payment?id=' . $row['id'] . '?' . $row['appl_id']) ?> ">View Receipt&nbsp;&nbsp;<i class="fa fa-list-alt"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                                                               
                                                                    <a class="btn btn-danger trash" data-href="<?php echo site_url('Payment/revert_payment?id=' . $row['id'] ) ?>" data-toggle="modal" href="#showNoticeModal" >Cancel Payment&nbsp;&nbsp;<i class="fa fa-ban"></i></a>
                                                   <?php    }?>
                                                           
                                                            
                                                   
                                                                    

                                                                </td>

                                                            </tr>
                                                            <?php
                                                        }
                                                        ?>
                                                    </tbody>
                                                </table>
                                                <div class="panel-success" id="panelsuccess" style="display: none;">
                                                    <div class="panel-heading">View Document</div>
                                                    <div class="panel-body">
                                                        <div class="row" id="tablespace">

                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                            <?php
                                        } else {
                                            //false
                                            ?>
                                            <br><br>
                                            <div class="container" style="width: 82%;">
                                                <div class="alert alert-info text-center" role="alert">No Invoice Found</div>
                                            </div>

                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab2default">
                                    <div id="printable">
                                        <div class="container" style="width:100%;" >

                                            <div class="panel panel-primary">
                                                <div class="panel-heading">
                                                    <h4>  
                                                        <strong>Payments Statement</strong>
                                                        <div class="non-printable"><a href="<?php echo site_url('Payment/finalpayment'); ?>" class="btn btn-primary pull-right clickable non-printable" role="button" style=" margin-top: 0 !important;margin-left: 20px;"><i class="fa fa-arrow-left non-printable" aria-hidden="true"></i>&nbsp;&nbsp;Back</a></div>
                                                        <button name="print" id="btnprint" value="print" class="btn btn-sm btn-default non-printable pull-right" onClick="print_this_doc();">Print&nbsp;&nbsp;<i class="fa fa-print"></i></button>&nbsp;&nbsp;

                                                    </h4>
                                                </div>
                                                <br>
                                                <center>
                                                    <div class="btn-3d" style="border:1px solid #337ab7; border-radius:5px; width:80%; line-height:150%;  ">
                                                        <label>Customer Name :</label><?php echo nbs(2) . $name; ?><?php echo nbs(3); ?>
                                                        <label>Project Name :</label><?php echo nbs(2) . $project_name . nbs(1) . $block; ?> <?php echo nbs(3); ?>
                                                        <label>Unit No :</label><?php echo nbs(2) . $unit_no; ?> <?php echo nbs(3); ?>
                                                        <label>Type :</label><?php echo nbs(2) . $type; ?>

                                                    </div>
                                                </center>
                                                <?php
                                                $user = $this->input->get('uid');
                                                $sql = "select * from payment_receipt where appl_id='$user' ";

                                                $this->db->query($sql);


                                                if ($this->db->affected_rows() > 0) {
                                                    //true
                                                    ?>

                                                    <div class="panel-body" style="width:100%;overflow:auto; max-height:500px;">
                                                        <table class="table table-bordered table-striped" border='2'>

                                                            <tr style="background-color: #337ab7;color:#FFF;">
                                                                <th style="text-align: center;">  Stage </th>
                                                                <th style="text-align: center;">  Actual </th>
                                                                <th style="text-align: center;">  Amount Payable </th>
                                                                <th style="text-align: center;">  Payment Mode </th>
                                                                <th style="text-align: center;">  Drawn on </th>

                                                                <th style="text-align: center;">  DD/Cheque/NEFT/RTGS No </th> 
                                                                <th style="text-align: center;">  DD/Cheque/NEFT/RTGS Date </th> 
                                                                <th style="text-align: center;">  Amount Paid </th> 
                                                                <th style="text-align: center;">  Advance Amount till date </th> 
                                                                <th style="text-align: center;">  Due Amount till date </th> 

                                                            </tr>
                                                            <tbody>
                                                                <?php
                                                                $idlist = '';
                                                                foreach ($this->Payment_model->get_payment_dtls($user) as $row) {

                                                                    $idlist = $idlist . $row['id'] . ',';
                                                                    $a = rtrim($idlist, ',');

                                                                    $paid_amt = $row['advance'];
                                                                    $payable_amt = $row['stage_actual_amt'];
                                                                    $adv = $row['stage_adv_amt'];
                                                                    $due = 0;
                                                                    $id = $row['id'];
                                                                    if ($payable_amt == 0) {
                                                                        $getprevadv = $this->Payment_model->getsumofprevadv($a);
                                                                        $adv = $getprevadv;
                                                                    } else if ($paid_amt <= $payable_amt) {
                                                                        $due = $payable_amt - $paid_amt;
                                                                        $adv = $adv + 0;
                                                                    } else if ($paid_amt > $payable_amt) {
                                                                        $adv = $paid_amt - $payable_amt;
                                                                        $due = 0;
                                                                    } else {
                                                                        
                                                                    }
                                                                    ?> 


                                                                    <tr style="text-transform: capitalize;text-align: center;">
                                                                        
                                                                           <?php if($row['reg_status'] == 'REVERTED'){ ?>
                                                                         
                                                                        <td style='color:#CD2626;' title='Payment Cancelled'><?php echo $row['stage']; ?></td>
                                                                        <td style='color:#CD2626;' title='Payment Cancelled'><?php echo $row['amount1']; ?></td>
                                                                        <td style='color:#CD2626;' title='Payment Cancelled'><?php echo $row['stage_actual_amt']; ?></td>
                                                                        <td style='color:#CD2626;' title='Payment Cancelled'><?php echo $row['mode_of_payment']; ?></td>
                                                                        <td style='color:#CD2626;' title='Payment Cancelled'><?php echo $row['drawn_on']; ?></td>
                                                                        <td style='color:#CD2626;' title='Payment Cancelled'><?php echo $row['payment_mode_no']; ?></td>
                                                                        <td style='color:#CD2626;' title='Payment Cancelled'>
                                                                            <?php
                                                                            $x = explode(' ', $due_date = $row['cheque_date']);
                                                                            $due_date = new DateTime($x[0]);
                                                                            echo $due_date->format('d-m-Y');
                                                                            ?></td>
                                                                        <td style='color:#CD2626;'  title='Payment Cancelled'><?php echo number_format((float) $paid_amt, 2, '.', '');              //echo $row['advance'];   ?></td>
                                                                        <td style='color:#CD2626;'  title='Payment Cancelled'><?php echo number_format((float) $adv, 2, '.', '');                  // $row['stage_adv_amt'];   ?></td>
                                                                        <td style='color:#CD2626;'  title='Payment Cancelled'><?php echo number_format((float) $due, 2, '.', '');         //$row['stage_due_amt'];   ?></td>
                                                                               
                                                                         <?php  }else{?>
                                                                        
                                                                        <td><?php echo $row['stage']; ?></td>
                                                                        <td><?php echo $row['amount1']; ?></td>
                                                                        <td><?php echo $row['stage_actual_amt']; ?></td>
                                                                        <td><?php echo $row['mode_of_payment']; ?></td>
                                                                        <td><?php echo $row['drawn_on']; ?></td>
                                                                        <td><?php echo $row['payment_mode_no']; ?></td>
                                                                        <td>
                                                                            <?php
                                                                            $x = explode(' ', $due_date = $row['cheque_date']);
                                                                            $due_date = new DateTime($x[0]);
                                                                            echo $due_date->format('d-m-Y');
                                                                            ?></td>
                                                                        <td><?php echo number_format((float) $paid_amt, 2, '.', '');              //echo $row['advance'];   ?></td>
                                                                        <td><?php echo number_format((float) $adv, 2, '.', '');                  // $row['stage_adv_amt'];   ?></td>
                                                                        <td><?php echo number_format((float) $due, 2, '.', '');         //$row['stage_due_amt'];   ?></td>
                                                                        
                                                                        
                                                                        
                                                                    <?php } ?>
                                                                    <?php } ?>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                        <br><br>
                                                    </div>
                                                    <?php
                                                } else {
                                                    //false
                                                    ?>
                                                    <br><br>
                                                    <div class="container" style="width: 82%;">
                                                        <div class="alert alert-info text-center" role="alert">No Payment Statement Found</div>
                                                    </div>

                                                <?php } ?>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="modal fade" id="showNoticeModal" tabindex="-1" role="dialog" aria-labelledby="showNoticeModalLabel" aria-hidden="true"  style="margin-top: 110px;">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header" style="background-color: #d9534f;color:#FFF;">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Confirm Cancel</h4>
                            </div>
                            <div class="modal-body">
                                <h3 style="text-align: center;">Are You Sure?</h3>
                                <p style="text-align: center;">This change is un-reversible. </p>
                            </div>
                            <div class="modal-footer" style="text-align: center;">
                                <a class="btn btn-danger" data-toggle="modal" id="modalDelete">Confirm</a>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button> 
                            </div>
                        </div>
                    </div> 
                </div>
            </div> 
            </div>
        </div>




        <script>
            $(document).ready(function () {
                $('#toppageheader').html('Invoices & Payments');
                $("a:contains(Invoice & Payment)").parent().addClass('active');
            });

 $('.trash').click(function () {
                var del_href = $(this).data('href');
                $('#modalDelete').attr('href', del_href);
            });


            function getFile(path) {
                go_url = path.getAttribute("data-href");
                //alert(go_url);
                $.ajax({
                    url: '' + go_url,
                    type: 'HEAD',
                    error: function ()
                    {
                        console.log('file absent');
                        //alert('File ABSENT');
                        window.location.href = 'index.php/Real404/show404';
                    },
                    success: function ()
                    {
                        console.log('file present');
                        //alert('File PRESENT');
                        window.location.href = go_url;
                        document.body.style.display = "go_url";
                    }
                });
            }

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

        </script>    
    </body>
</html>