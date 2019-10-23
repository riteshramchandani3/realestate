<!DOCTYPE html>
<!--
Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
Unauthorized copying of this file, via any medium is strictly prohibited
Proprietary and confidential.
Written by Oga Technologies, October 1,  2016.
-->
<html>
    <head>
        <title>Payments</title>
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
        </style>
          <style>
            input{
                font-weight:bold;
                border: none;
                border-bottom: 1px solid;
            }
            input[type=text]:disabled {
                font-weight:bold;
                background: white;
            }
            h4{
                font-weight:bold;
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
    <?php
                                    log_message('error', 'applicant payment  page start:');
                                    $user1 = $this->input->get('uid');
                                    
                                    //  print_r( $user); echo'<br/>';
                                    foreach ($this->Payment_model->get_appl_details($user1) as $row) {
                                        ?> 
                <div class="row">
                    <div class="panel panel-primary" >
                        <div class="panel-heading">
                            <h4>  <strong>Payment Details for:</strong>&nbsp;&nbsp;&nbsp;<?php echo $row->name; ?>&nbsp;&nbsp;&nbsp;&nbsp;<strong> Project Name:</strong> &nbsp;<?php echo $row->project_name; ?>&nbsp;&nbsp;&nbsp;&nbsp;<strong>Unit no : </strong>&nbsp;<?php echo $row->unit_no; ?>&nbsp;&nbsp;&nbsp;&nbsp;<strong>Type:</strong>&nbsp;<?php echo $row->type; ?>
                           </h4>
                            
                            <a href="<?php echo site_url('Payment/index');?>" class="btn btn-primary pull-right clickable" role="button"> Back</a>
                        </div>
                         


                         
                                    <?php
                                    
                                    }
                                    ?>
                       
                        <div class="panel-body" style="overflow-y:scroll;" >
                            <table class="table table-bordered table-striped" border='2' style="overflow-x: scroll;">

                                <tr style="background-color: #337ab7;color:#FFF;">
                                    <th style="text-align: center;">  Date </th>
                                    <th style="text-align: center;">  Stages </th> 
                                   
                                    <th style="text-align: center;">  Amount </th> 
                                    <th style="text-align: center;">  View </th> 

                                </tr>
                                <tbody>
                                    <?php
                                    log_message('error', 'applicant payment  page start:');
                                    $user = $this->input->get('uid');
                                    
                                    //  print_r( $user); echo'<br/>';
                                    foreach ($this->Payment_model->get_appl_pay($user) as $row) {
                                        ?> 

                                                                                                                  
                                        <tr style="text-transform: capitalize;text-align: center;">
                                            <td><?php echo $row['Date']; ?></td>
                                            <td><?php echo $row['stages']; ?></td>                                                                          
                                            <td><?php echo $row['amount_paid']; ?></td>
                                            <td><a class="btn btn-info" href="<?php echo site_url('Payment/view_Pa?id=' . $row['appl_name'] . '?' . $row['project_name'] . '?' . $row['type'] . '?' . $row['unit_no'] . '?'.$row['stages']. '?' . $row['other_charges'] . '?' . $row['Date'] . '?' . $row['receipt_no'] . '?' . $row['cheque_cash'] . '?' . $row['payment_mode'] . '?' . $row['amount_paid'] . '') ?> ">View</a></td>
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
                                    log_message('error', 'applicant payment  page start:');
                                    $user1 = $this->input->get('uid');
                                    
                                    //  print_r( $user); echo'<br/>';
                                    foreach ($this->Payment_model->get_appl_details($user1) as $row) {
                                    ?> 
                        <?php 
                                    
                                    }?>
                    </div>
                </div>
            </div>
        </div>


        <script>
            if (window.print) {
                document.write('<form><input type=button name=print value="Print" onClick="window.print()"></form>');
                var ButtonControl = document.getElementById("btnprint");
                ButtonControl.style.visibility = "hidden";
            }
        </script>


        <script>

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
        </script>  
         <script>
            $(document).ready(function () {
                $('#toppageheader').html('View Payment');
                $("a:contains(Payment)").parent().addClass('active');
            });
        </script>
    </body>
</html>