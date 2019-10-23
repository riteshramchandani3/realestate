<!DOCTYPE html>
<!--
Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
Unauthorized copying of this file, via any medium is strictly prohibited
Proprietary and confidential.
Written by Oga Technologies, October 1,  2016.
-->
<html>
    <head>
        <title>Company Information </title>
        <?php
        require_once('assets/html_head_links.php');
        ?>
        <style>
            #showNoticeModal{
                margin-top: 100px;
            }
        </style>
    </head>
    <body>
        <?php require_once ('assets/top_menu.php'); ?>
        <?php require_once ('assets/side_menu.php'); ?>
        <div class="main">
            <div class="container">
                <?php
                $id = $this->input->get('uid');

                foreach ($this->Bank_model->get_appl_info($id) as $row) {
                    ?>
                 <?php  $pre_salesid = $row->pre_salesid; ?>
                <?php } ?>
                <form action="<?php echo site_url('Bank/bank_inputs'); ?>" method="post">
                    <div class="panel panel-primary">
                        <div class="panel-heading"><h4> Applicant Bank Information</h4></div>
                        <div class="panel-body">
                            <input type="hidden" name="applicant_id"  value="<?php echo $id; ?>" />
                            
                            <?php
            foreach ($this->View_applicant_info->view_sheet1($pre_salesid) as $row) {
                ?>
                <?php  ?>
              
              
                <?php $total_cost = $row->total_cost; ?>
            <?php } ?>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="col-md-3"><label for="bank_name">Bank Name:</label></div>
                                    <div class="col-md-9"><input type="text" value="" name="bank_name" class="form-control" id="attribute" title="Bank Name should be start from Uppercase eg. Company Name." placeholder="Enter Bank Name" required/></div>
                                </div><br clear="ALL"/><br clear="ALL"/>
                                <div class="form-group">
                                    <div class="col-md-3"><label for="bank_address">Bank Address:</label></div>
                                    <div class="col-md-9"><textarea class="form-control" rows="5" name="bank_address" id="value" title="Bank Address can be Alpha-Numeric." placeholder="Enter Bank Address" required/></textarea></div>
                                </div><br clear="ALL"/><br clear="ALL"/>
                                <div class="form-group">
                                    <div class="col-md-3"><label for="bank_ifsc">Bank IFSC:</label></div>
                                    <div class="col-md-9"><input type="text" value="" name="bank_ifsc" class="form-control" id="value" title=" Bank IFSC can be Alpha-Numeric." placeholder="Enter Bank IFSC" required/>
                                    </div>
                                </div><br clear="ALL"/><br clear="ALL"/>
                                <div class="form-group">
                                    <div class="col-md-3"><label for="loan_file_number">Loan File No:</label></div>
                                    <div class="col-md-9"><input type="text" value="" name="loan_file_number" class="form-control" id="value" title="Loan File No can be Alpha-Numeric." placeholder="Enter Loan File No" required/>
                                    </div>
                                </div><br clear="ALL"/><br clear="ALL"/>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="col-md-3"><label for="loan_amount_sanctioned">loan Amount Sanctioned:</label></div>
                                    <div class="col-md-9"><input type="text" value="" name="loan_amount_sanctioned" onKeyUp="showpercent();" class="form-control" id="loan_amount_sanctioned" title="Loan Amount Sanctioned can be Alpha-Numeric." placeholder="Enter Loan Amount Sanctioned" required/>
                                    </div>
                                </div><br clear="ALL"/><br clear="ALL"/>
                                <div class="form-group">
                                    <div class="col-md-3"><label for="loan_amount_sanctioned">Total Cost:</label></div>
                                    <div class="col-md-9"><input type="text" value="<?php echo $total_cost ?>" name="cost" onblur="showpercent();" class="form-control" id="cost" title="Loan Amount Sanctioned can be Alpha-Numeric."  readonly/>
                                    </div>
                                </div><br clear="ALL"/><br clear="ALL"/>

                                <div class="col-md-3"><label for="pc_loan_amount_sanctioned">Percentage Loan Amount Sanctioned:</label></div>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <input type="text" value="" name="pc_loan_amount_sanctioned" class="form-control" id="pc_loan_amount_sanctioned" title="Pc Loan Amount Sanctioned can be Alpha-Numeric." placeholder="Enter Pc Loan Amount Sanctioned" readonly/>
                                        <span class="input-group-addon"><i class="fa fa-percent" aria-hidden="true"></i></span>
                                    </div>
                                </div>
                                <br clear="ALL"/><br clear="ALL"/>
                            </div>

                        </div>
                    </div>
                    <div class="row">  
                        <center>
                            <input type="submit" name="submit" class="btn btn-success" value="submit"/>
                            <!--   <button id="submit" name="submit" class="btn btn-success" value="1">Submit</button>-->
                            <!--button id="submit" name="submit" class="btn btn-info" value="1">Update</button-->
                            <a href="javascript: history.go(-1)" class="btn btn-default" role="button">Cancel</a>
                        </center>
                    </div>
                </form>
            </div>


        </div>



        <script>
            $('form').bind("keypress", function(e) {
  if (e.keyCode == 13) {               
    e.preventDefault();
    return false;
  }
});
            $(document).ready(function () {
                $('#toppageheader').html('Bank Details');
                $("a:contains(Bank)").parent().addClass('active');
            });
            function showpercent()
            {

                $a = document.getElementById('cost').value;
                $b = document.getElementById('loan_amount_sanctioned').value;
                $c = ($b * 100) / $a;

                $d = $c.toFixed(2);
                document.getElementById('pc_loan_amount_sanctioned').value = $d;

            }


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