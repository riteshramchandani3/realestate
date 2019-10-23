<!DOCTYPE html>
<!--
Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
Unauthorized copying of this file, via any medium is strictly prohibited
Proprietary and confidential.
Written by Oga Technologies, October 1,  2016.
-->
<html>
    <head>
        <title>Bank Application </title>
        <?php
        require_once('assets/html_head_links.php');
        ?>
        <style>
            #showNoticeModal{
                margin-top: 100px;
            }

            .inputbox{
                border: 2px solid #ccc;
                width:300px; height:30px;
                border-radius: 5px;
                line-height: 16px; font-size: 16px;
                display:table-cell;
                vertical-align: middle;
                padding-left: 5px;
            }
        </style>
    </head>
    <body>
        <?php require_once ('assets/top_menu.php'); ?>
        <?php require_once ('assets/side_menu.php'); ?>
        <div class="main">
            <div class="container">
                
            <?php
                $id = $this->input->get('Uid');

                foreach ($this->Bank_model->get_appl_info($id) as $row) {
                    ?>
                  <?php  $pre_salesid = $row->pre_salesid; ?>
                <?php } ?>
                
                           <?php
            foreach ($this->View_applicant_info->view_sheet1($pre_salesid) as $row) {
                ?>
                <?php  ?>
              
              
                <?php $total_cost = $row->total_cost; ?>
            <?php } ?>
                <?php
                $idr = $this->input->get('Uid');
                foreach ($this->Bank_model->update_bank_info($idr) as $row) {
                    ?> 
                    <?php $applicant_id = $row->applicant_id ?>
                    <?php $bank_name = $row->bank_name ?>
                    <?php $bank_address = $row->bank_address ?>
                    <?php $bank_ifsc = $row->bank_ifsc ?>
                    <?php $loan_amount_sanctioned = $row->loan_amount_sanctioned ?>
                    
                     <?php $loan_file_number = $row->loan_file_number ?>
                    <?php $pc_loan_amount_sanctioned = $row->pc_loan_amount_sanctioned ?>
                <?php } ?>
                <div class="panel panel-primary">
                    <div class="panel-heading"><h4> Applicant Bank Information</h4>
                    <a href="javascript: history.go(-1)" class="btn btn-primary pull-right clickable" role="button" style="margin-top: -33px; "><i class="fa fa-arrow-left" aria-hidden="true"></i> &nbsp;&nbsp;Back&nbsp;&nbsp;&nbsp;</a><br></div>
                    <div class="panel-body">
                        <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-2" > 
                                <label for="appl_name">Bank Name:</label>
                            </div>
                            <div class="col-md-10">
                                <div class="inputbox">
                                    <?php echo $bank_name; ?>
                                </div>
                            </div>
                        </div><br clear="ALL"/><br clear="ALL"/>
                        <div class="row">
                            <div class="col-md-2"> 
                                <label for="appl_name">Bank Address:</label>
                            </div>
                            <div class="col-md-10">
                                <div class="inputbox">
                                    <?php echo $bank_address; ?>
                                </div>
                            </div>
                        </div><br clear="ALL"/><br clear="ALL"/>
                        <div class="row">
                            <div class="col-md-2"> 
                                <label for="appl_name">Bank IFSC:</label>
                            </div>
                            <div class="col-md-10">
                                <div class="inputbox">
                                    <?php echo $bank_ifsc; ?>
                                </div>
                            </div>
                        </div><br clear="ALL"/><br clear="ALL"/> 
                         <div class="row">
                            <div class="col-md-2"> 
                                <label for="appl_name">Loan File Number:</label>
                            </div>
                            <div class="col-md-10">
                                <div class="inputbox">
                                    <?php echo $loan_file_number; ?>
                                </div>
                            </div>
                        </div><br clear="ALL"/><br clear="ALL"/>
                        </div>
                        <div class="col-md-6">
                       <div class="row">
                            <div class="col-md-2"> 
                                <label for="appl_name">Loan Amount Sanctioned:</label>
                            </div>
                            <div class="col-md-10">
                                <div class="inputbox">
                                    <?php echo $loan_amount_sanctioned; ?>
                                </div>
                            </div>
                        </div><br clear="ALL"/><br clear="ALL"/>
                         <div class="row">
                             <div class="col-md-2"> 
                                    <label for="appl_name">Total Cost:</label>
                             </div>
                             <div class="col-md-10">
                                 <div class="inputbox">
                               <?php echo $total_cost; ?>
                                    </div>
                             </div>
                                </div><br clear="ALL"/><br clear="ALL"/>
                       
                        <div class="row">
                            <div class="col-md-2"> 
                                <label for="appl_name">Percentage Loan Amount:</label>
                            </div>
                            <div class="col-md-10">
                                <div class="inputbox">
                                    <?php echo $pc_loan_amount_sanctioned; ?>
                                </div>
                            </div>
                        </div><br clear="ALL"/><br clear="ALL"/>
                    </div>


                </div>
            </div>
        </div>



        <script>
            $(document).ready(function () {
                $('#toppageheader').html('Bank Details');
                $("a:contains(Bank Details)").parent().addClass('active');
            });
        </script>
    </body>
</html>