<!DOCTYPE html>
<!--
Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
Unauthorized copying of this file, via any medium is strictly prohibited
Proprietary and confidential.
Written by Oga Technologies, October 1,  2016.
-->
<html>
    <head>
        <title>Payment Receipt</title>
        <?php require_once('assets/html_head_links.php'); ?>
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
                                   $unit_no = $this->input->get('id');
                                    
                                    //  print_r( $user); echo'<br/>';
                                    foreach ($this->Payment_model->get_appl_info($unit_no) as $row) {
                                        ?> 
                <div class="row">

                    <div class="panel panel-primary" >
                        <div class="panel-heading">
                             <h4>  <strong>Payment Receipt</strong>&nbsp;&nbsp;<?php $name = $row->name; ?>&nbsp;&nbsp;&nbsp;&nbsp;<strong> </strong> &nbsp;<?php $project_name = $row->project_name; ?>&nbsp;&nbsp;&nbsp;&nbsp;<strong></strong>&nbsp;<?php $unit_no = $row->unit_no; ?>&nbsp;&nbsp;&nbsp;&nbsp;<strong></strong>&nbsp;<?php $type = $row->type; ?>
                             <a href="javascript: history.go(-1)"  class="btn btn-primary pull-right clickable" role="button"><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;&nbsp;Back</a>
                        </div>
                                    <?php }?>
                         <br>
                                            <center>
                                                <div class="btn-3d" style="border:1px solid #337ab7; border-radius:5px; width:80%; line-height:150%;  ">
                                                    <label>Customer Name :</label><?php echo nbs(2) . $name; ?><?php echo nbs(3); ?>
                                                    <label>Project Name :</label><?php echo nbs(2) . $project_name; ?> <?php echo nbs(3); ?>
                                                    <label>Unit No :</label><?php echo nbs(2) . $unit_no; ?> <?php echo nbs(3); ?>
                                                    <label>Type :</label><?php echo nbs(2) . $type; ?>

                                                </div>
                                            </center>
                            <?php
                            // $id = $this->input->get('id');
                            $sql = "select * from payment_receipt where unit_no='$unit_no' ";

                            $this->db->query($sql);

                            if ($this->db->affected_rows() > 0) {
                               //true
                                ?>
                               <div class="panel-body" style="overflow-y:scroll;margin-top:  30px;" >
                            <table class="table table-bordered table-striped" border='2'>

                                <tr style="background-color: #5bc0de;color:#FFF;">
                                    <th style="text-align: center;"> Date </th>
                                    <th style="text-align: center;">Receipt_no </th>

                                    <th style="text-align: center;">  Action </th> 
                                </tr>
                                <tbody>
                                    <?php
                                    log_message('error', 'applicant doccument  page start:');
                                 
                                    //  print_r( $user); echo'<br/>';
                                    foreach ($this->Payment_model->get_appl_receipt($unit_no) as $row) {
                                        ?> 


                                        <tr style="text-transform: capitalize;text-align: center;">
                                            <td><?php echo $row['date']; ?></td>
                                            <td><?php echo $row['receipt_no']; ?></td>
                                       <td> <?php echo anchor('Payment/directpayment_receipt_print?id=' . $row['id'],'<strong>View Receipt&nbsp&nbsp&nbsp&nbsp<i class="fa fa-eye">' . '&nbsp' . '</i></strong>', 'class="btn btn-info btn-3d"'.'title="View Receipt"'); ?></td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                  

                        </div>

                            <?php } else {
                                 //false
                                ?>
                         <br><br>
                         <div class="container" style="width: 82%;">
                             <div class="alert alert-info text-center" role="alert">No Receipt Found</div>
                         </div>
                        
                            <?php } ?>
                         
                         
                        
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
            $(document).ready(function () {
                $('#toppageheader').html('Payment Receipt');
                $("a:contains(Direct Payment Receipt)").parent().addClass('active');
            });

            
            
        </script>    
    </body>
</html>