<!DOCTYPE html>
<!--
Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
Unauthorized copying of this file, via any medium is strictly prohibited
Proprietary and confidential.
Written by Oga Technologies, October 1,  2016.
-->
<html>
    <head>
        <title>Prospect Details</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php require_once('assets/html_head_links.php'); ?>
        <style>
            ul{list-style-type: none;}
            .modal-header-primary {
                color:#fff;
                padding:25px 15px;
                border-bottom:1px solid #eee;
                background-color: #428bca;
                -webkit-border-top-left-radius: 5px;
                -webkit-border-top-right-radius: 5px;
                -moz-border-radius-topleft: 5px;
                -moz-border-radius-topright: 5px;
                border-top-left-radius: 5px;
                border-top-right-radius: 5px;
                font-weight: 800;
            }

            .table-fixed thead {
                width: 100%;
            }
            .table-fixed tbody {
                height: 200px;
                overflow-y: auto;
                width: 100%;
            }
            .table-fixed thead, .table-fixed tbody, .table-fixed tr, .table-fixed td, .table-fixed th {
                display: block;
            }
            .table-fixed tbody td, .table-fixed thead > tr> th {

                border-bottom-width: 0;
            }
            .table-fixed thead > tr> th {
                background-color: #f1f1f1;
            }
            .clsDatePicker {
                z-index: 100000;
            }
            .table-fixed tbody td, .table-fixed thead > tr> th {
                float: left;
                /* padding-left: 140px; */
                width: 240px;
                text-align: center;
            }
            .table-fixed tbody tr> td {
                float: left;
                /* padding-left: 20px; */
                width: 240px;
                text-align: center;
            }
            .form-control[readonly]{
                background: #fff;
                box-shadow: none;
            }
            textarea {
                resize: none;
            }
            .trunc{
                width:270px;; 
                white-space: nowrap; 
                overflow: hidden; 
                text-overflow: ellipsis;
                font-weight: bold;
            }

            .popover.top {
                font-weight: 400;
                font-family: 'Titillium Web';
                font-size: 16px;
            }


        </style>
    </head>
    <body>
        <?php
        require_once('assets/top_menu.php');
        require_once('assets/pre_sales_side_menu.php');
        ?>

        <div class="main">
            <div class="container">
                <?php $role = $this->session->userdata('role'); ?>
                <div class="row" style="margin-left: 20px;">
                    <?php $id = trim($this->input->get('id')); ?>
                    <?php
                    if (isset($msg)) {
                        ?>
                        <div class="alert alert-success">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
                            <strong>Success!</strong>.
                        </div>
                        <?php
                    } elseif (isset($danger)) {
                        ?>
                        <div class="alert alert-danger">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
                            <strong>Failed!</strong> .
                        </div>
                        <?php
                    } else {
                        
                    }
                    ?>

                    <?php
                    //$id = $this->input->get('id');
                    // echo $id;


                    foreach ($this->Pre_sales_model->view_proj_info($id) as $row) {
                        ?>

                        <?php $name = $row->name; ?>
                        <?php $mobile_no = $row->mobile; ?>
                        <?php $email = $row->email; ?>
                        <?php $address = $row->address; ?>
                        <?php $unit_no = $row->unit_no; ?>
                        <?php $type = $row->type; ?>
                        <?php $status = $row->status; ?>
                        <?php $phase = $row->block; ?>
                        <?php $project_id = $row->project_id; ?>
                        <?php $category = $row->category; ?>

                    <?php } ?>
                </div>
                <div class="row" style="margin-left: 20px;">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <span style="font-size: 18px; font-weight: 700;">Prospect Details</span>

                            <?php
                            // $id = $this->input->get('id');
                            $sql = "select pre_salesid from first_applicant_personal_dtl_tbl where pre_salesid='$id' ";

                            $this->db->query($sql);

                            if ($this->db->affected_rows() > 0) {
                                echo nbs(5);
                                ?>
                                <span style="font-size: 16px;">( Approved to Customer )</span>

                            <?php } else {
                                ?>
                            <?php } ?>
                        </div>

                        <div class="panel-body">

                            <div class="col-xs-4">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <label>Prospect Details :</label>
                                    </div>
                                    <div class="panel-body">
                                        <table class="table">
                                            <tr>
                                                <td>Name</td>
                                                <td><?php echo $name; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Type</td>
                                                <td><?php echo $type; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Unit No</td>
                                                <td><?php echo $unit_no; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Status</td>
                                                <td><?php echo $status; ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>                       
                            </div>
                            <div class="col-xs-4">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <label>Contact Information:</label>
                                    </div>
                                    <div class="panel-body">
                                        <table class="table">
                                            <tr>
                                                <td>Mobile No.</td>
                                                <td><?php echo $mobile_no; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Address</td>
                                                <td><?php echo $address; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td><?php echo $email; ?></td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>

                                        </table>
                                    </div>
                                </div> 
                            </div>
                            <div class="col-xs-4">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <label>Cost Calculation :</label>
                                    </div>


                                    <div class="panel-body">
                                        <?php
                                        foreach ($this->Pre_sales_model->get_visitor_det($id) as $row) {
                                            ?>

                                            <?php $type = $row['type'] ?>

                                            <?php if ($type == 'Duplex') {
                                                ?>
                                                <?php if ($phase == 'Phase-1') {
                                                    ?>
                                                    <a class="btn btn-info btn-3d" role="button" title="View" href="<?php echo site_url('pre_sales/duplex_phase_sheet_view?id=' . $row['id']) ?> ">&nbsp;&nbsp;<i class="fa fa-eye"></i></a> <?php echo nbs(3); ?>
                                                <?php } else { ?>

                                                    <a class="btn btn-info btn-3d" role="button" title="View" href="<?php echo site_url('pre_sales/view_sheet?id=' . $row['id']) ?> ">&nbsp;&nbsp;<i class="fa fa-eye"></i></a> <?php echo nbs(3); ?>
                                                <?php } ?>
                                            <?php } else if ($type == 'Other') { ?>
                                                <a class="btn btn-info btn-3d" role="button" title="View" href="<?php echo site_url('pre_sales/view_sheet?id=' . $row['id']) ?> ">&nbsp;&nbsp;<i class="fa fa-eye"></i></a> <?php echo nbs(3); ?>
                                            <?php } else if ($type == 'Plot') { ?>
                                                <a class="btn btn-info btn-3d" role="button" title="View" href="<?php echo site_url('pre_sales/plot_view_sheet?id=' . $row['id']) ?> ">&nbsp;&nbsp;<i class="fa fa-eye"></i></a> <?php echo nbs(3); ?>
                                            <?php } else if ($type == 'Shop') { ?>
                                                <a class="btn btn-info btn-3d" role="button" title="View" href="<?php echo site_url('pre_sales/EssarjeeSampada_Phase1_Shop_view?id=' . $row['id']) ?> ">&nbsp;&nbsp;<i class="fa fa-eye"></i></a> <?php echo nbs(3); ?>
                                            <?php } else { ?>
                                                <a class="btn btn-info btn-3d" role="button" title="View" href="<?php echo site_url('pre_sales/flat_cost_cal_view?id=' . $row['id']) ?> ">&nbsp;&nbsp;<i class="fa fa-eye"></i></a> <?php echo nbs(3); ?>
                                            <?php } ?>

                                            <?php
                                            $sql = "select pre_salesid from first_applicant_personal_dtl_tbl where pre_salesid='$id' ";

                                            $this->db->query($sql);

                                            if ($this->db->affected_rows() > 0) {
                                                ?>
                                                                                                                                                       <!-- <a class="btn btn-success disabled" role="button" aria-disabled="true" id="editing" title="Edit" href="<?php echo site_url('pre_sales/update_sheet?id=' . $row['id']) ?> ">&nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i></a>-->
                                                <a class="btn btn-success disabled" role="button" aria-disabled="true" id="editing" title="Edit" href="#">&nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i></a>

                                            <?php } else {
                                                ?>
                                                <?php if ($type == 'Duplex') {
                                                    ?>
                                                    <?php if ($phase == 'Phase-1') {
                                                        ?>
                                                        <a class="btn btn-success btn-3d" id="editing" title="Edit" href="<?php echo site_url('pre_sales/Phase1_Duplex_Cost_Calculation_update?id=' . $row['id']) ?> ">&nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i></a>
                                                    <?php } else { ?>
                                                        <a class="btn btn-success btn-3d" id="editing" title="Edit" href="<?php echo site_url('pre_sales/update_sheet?id=' . $row['id']) ?> ">&nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i></a>
                                                    <?php } ?>

                                                <?php } else if ($type == 'Other') { ?>
                                                    <a class="btn btn-success btn-3d" id="editing" title="Edit" href="<?php echo site_url('pre_sales/update_sheet?id=' . $row['id']) ?> ">&nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i></a>

                                                <?php } else if ($type == 'Plot') { ?>

                                                    <a class="btn btn-success btn-3d" id="editing" title="Edit" href="<?php echo site_url('pre_sales/plotupdate_sheet?id=' . $row['id']) ?> ">&nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i></a>

                                                <?php } else if ($type == 'Shop') { ?>
                                                    <a class="btn btn-success btn-3d" id="editing" title="Edit" href="<?php echo site_url('pre_sales/EssarjeeSampada_Phase1_Shop_update?id=' . $row['id']) ?> ">&nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i></a> <?php echo nbs(3); ?>

                                                <?php } else { ?>
                                                    <a class="btn btn-success btn-3d" id="editing" title="Edit" href="<?php echo site_url('pre_sales/flat_cost_calculation_update?id=' . $row['id']) ?> ">&nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i></a>
                                                <?php } ?>
                                            <?php } ?>
                                        <?php } ?>

                                        <?php
                                        $sql = "select prospect_id from presales_costcalculation_tbl where prospect_id='$id' ";

                                        $this->db->query($sql);

                                        if ($this->db->affected_rows() > 0) {
                                            ?>

                                        <?php } else {
                                            ?>


                                            <?php
                                            //  $id = $this->input->get('id');
                                            foreach ($this->Pre_sales_model->view_proj_info($id) as $row) {
                                                ?>
                                                <?php $type = $row->type ?>
                                            <?php } ?> 


                                            <?php if ($type == 'Duplex') {
                                                ?>
                                                <?php if ($phase == 'Phase-1') {
                                                    ?>
                                                    <a class="btn btn-primary btn-3d" title="New" href="<?php echo site_url('pre_sales/get_Phase1_duplex_new_cost_calculation?id=' . $id) ?> ">Phase-1 New Duplex<?php echo nbs(2); ?>&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-plus"></i></a><br><br>
                                                    <a class="btn btn-primary btn-3d" title="New" href="<?php echo site_url('pre_sales/duplex_phase_sheet1?id=' . $id) ?> ">Phase-1 Old Duplex<?php echo nbs(2); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus"></i></a>
                                                <?php } else { ?>

                                                    <a class="btn btn-primary btn-3d" title="New" href="<?php echo site_url('pre_sales/sheet1?id=' . $id) ?> ">New<?php echo nbs(2); ?><i class="fa fa-plus"></i></a>
                                                <?php } ?>

                                            <?php } else if ($type == 'Other') { ?>
                                                <a class="btn btn-primary btn-3d" title="New" href="<?php echo site_url('pre_sales/sheet1_other?id=' . $id) ?> ">New<?php echo nbs(2); ?><i class="fa fa-plus"></i></a>
                                            <?php } else if ($type == 'Other') { ?>

                                                <a class="btn btn-primary btn-3d" title="New" href="<?php echo site_url('pre_sales/sheet1?id=' . $id) ?> ">New<?php echo nbs(2); ?><i class="fa fa-plus"></i></a>
                                            <?php } else if ($type == 'Plot') { ?>

                                                <a class="btn btn-primary btn-3d" title="New" href="<?php echo site_url('pre_sales/plotsheet1?id=' . $id) ?> ">New<?php echo nbs(2); ?><i class="fa fa-plus"></i></a>
                                            <?php } else if ($type == 'Shop') { ?>

                                                <a class="btn btn-primary btn-3d" title="New" href="<?php echo site_url('pre_sales/EssarjeeSampada_Phase1_SHOP?id=' . $id) ?> ">New<?php echo nbs(2); ?><i class="fa fa-plus"></i></a>
                                            <?php } else if ($type == 'Flat') { ?> 

                                                <?php if ($project_id == '2') { ?>
                                                    <a class="btn btn-primary btn-3d" title="New" href="<?php echo site_url('pre_sales/Phase1_flat?id=' . $id) ?> ">Phase-1 New Flat<?php echo nbs(2); ?>&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-plus"></i></a><br><br>
                                                    <a class="btn btn-primary btn-3d" title="New" href="<?php echo site_url('pre_sales/Phase1_old_flat?id=' . $id) ?> ">Phase-1 Old Flat<?php echo nbs(2); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus"></i></a>
                                                <?php } else { ?> 

                                                    <a class="btn btn-primary btn-3d" title="New" href="<?php echo site_url('pre_sales/flatsheet1?id=' . $id) ?> ">New<?php echo nbs(2); ?><i class="fa fa-plus"></i></a>
                                                <?php } ?>
                                            <?php } else {
                                                
                                            }
                                            ?>




<?php } ?>



                                    </div>
                                </div>

                                <?php
                                $sql = "select prospect_id from presales_costcalculation_tbl where prospect_id='$id' ";
                                $this->db->query($sql);
                                if ($this->db->affected_rows() > 0) {
                                    ?>
                                    <div class="panel panel-info">
                                        <div class="panel-heading">
                                            <?php if ($role == 'MD') { ?>
                                                <label>Approve Cost Calculation :</label>
                                            <?php } else { ?>
                                                <label>Request Approval For Cost Calculation :</label>
    <?php } ?>
                                        </div>
                                        <div class="panel-body">
                                            <?php
                                            $sql = "select prospect_id from presales_costcalculation_tbl where prospect_id='$id' ";
                                            $this->db->query($sql);
                                            if ($this->db->affected_rows() > 0) {
                                                ?>
                                                <?php
                                                $id = $this->input->get('id');
                                                foreach ($this->Pre_sales_model->view_proj_info($id) as $row) {
                                                    $unit_no = $row->unit_no;
                                                }
                                                if ($type == 'Shop') {
                                                    $sql = "select status from inventory_tbl where unit_no='$unit_no' and project_id='$project_id' and block ='$phase' and type='$type'  and status='BOOKED' ";
                                                } else if (($type == 'Flat') && ($project_id == '2')) {
                                                    $sql = "select status from inventory_tbl where unit_no='$unit_no' and project_id='$project_id' and block ='$phase' and type='$type'  and status='BOOKED' ";
                                                } else {

                                                    $sql = "select status from inventory_tbl where unit_no='$unit_no' and project_id='$project_id' and block ='$phase' and type='$type' and category='$category'  and status='BOOKED' ";
                                                    // print_r($sql); 
                                                }
                                                $this->db->query($sql);
                                                if ($this->db->affected_rows() > 0) {
                                                    ?>

                                                    <?php
                                                    $sql1 = "select * from first_applicant_personal_dtl_tbl where pre_salesid='$id' ";
                                                    // print_r($sql1);
                                                    $this->db->query($sql1);
                                                    if ($this->db->affected_rows() > 0) {
                                                        ?>
                                                        <span>Approved</span>
                                                    <?php } else {
                                                        ?>
                                                        <span>Booked by some other Prospect</span>
                                                    <?php } ?>

                                                <?php } else {
                                                    ?>
                                                    <?php if ($role == 'MD') { ?>
                                                        <a href="#" title="OK"><button  data-toggle="modal" data-target="#myModalinsert" class="btn btn-success btn-3d"><i class="fa fa-check"></i> Approve</button></a>

                                                        <?php
                                                    } else if ($role == 'SALES HEAD') {
                                                        $sql1 = "select * from presales_costcalculation_tbl where prospect_id='$id' and get_approval='1'  ";

                                                        $this->db->query($sql1);
                                                        if ($this->db->affected_rows() > 0) {
                                                            ?>Approval Pending... 

                                                        <?php } else { ?>
                                                            <a href="#" title="OK"><button  data-toggle="modal" data-target="#myModalrequest" class="btn btn-primary btn-3d"><i class="fa fa-paper-plane-o"></i> Get Approval </button></a>

                                                        <?php } ?>


                                                        <?php
                                                    } else {
                                                        
                                                    }
                                                    ?>
                                                <?php } ?>
                                            <?php } else { ?>
                                            <?php } ?>
                                            <?php echo nbs(2); ?>    <!--a href="<?php //echo site_url('Pre_sales/show_visitor')   ?>" title="Cancel" ><button class="btn btn-danger btn-3d"><i class="fa fa-ban"></i> No</button></a-->
                                        </div>
                                    </div>

                                <?php } else { ?>

                                <?php } ?>




                            </div>

                        </div>


                        <div class="row" style="margin-left: 20px; ">

                            <div class="col-xs-12">
                                <div class="panel panel-info"  style="width:97%;">
                                    <div class="panel-heading" style="">
                                        <label>Discussions :</label>
                                        <button type="button" id="modalbtn"  class="btn btn-info pull-right" style="margin-top: -4px;" title="Add Discussions" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i><?php echo nbs(2); ?>Add</button>
                                    </div>
                                    <div class="panel-body">
                                        <table class="table table-fixed text-center" id="myTable">
                                            <thead>
                                                <tr>
                                                    <th> Date</th>

                                                    <th>Summary </th> 
                                                    <th>Meeting Date </th> 

                                                    <th> Action </th> 
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php
                                                $id = $this->input->get('id');

                                                foreach ($this->Pre_sales_model->get_Summary($id) as $row) {
                                                    ?> 
                                                    <tr id="<?php $row['id']; ?>" onclick="deldiscuss(this);">
                                                        <td><?php echo $row['date']; ?></td>
                                                        <td><button type="button" class="btn btn-default trunc disabled" data-container="body" data-toggle="popover" data-placement="top" data-content="<?php echo $row['discussions']; ?>"><?php echo $row['discussions']; ?></button></td>
                                                        <td><?php
                                                            $x = explode(' ', $due_date = $row['meeting_date']);
                                                            $due_date = new DateTime($x[0]);
                                                            echo $due_date->format('d-m-Y');
                                                            ?></td>

                                                        <td class="col-xs-3"><a class="btn btn-danger trash" data-href="<?php echo site_url('Pre_sales/deletediscussbyid/' . $row['id']); ?>" data-toggle="modal" href="#showNoticeModal" ><i class="fa fa-trash"></i></a></td>
                                                    </tr>
                                                    <?php
                                                }
                                                ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>                       
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal fade" id="myModal" role="dialog" style="margin-top:100px;">

                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header modal-header-primary">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Discussion</h4>
                            </div>
                            <!--form  action="<?php //echo site_url('Pre_sales/visitor_discussions_input');                                                ?>" method="post"-->
                            <div class="modal-body">  
                                <div class="row">
                                    <div class="col-md-8">
                                        <?php //$id = $this->input->get('id');   ?>
                                        <input type="hidden" name="prospect_id" id="modal_id" value="<?php echo $id; ?>" />
                                        <input type="hidden" name="dates" id="modal_dates" value="<?php echo date("d-m-Y"); ?>" />
                                        <label>
                                            Discussion :
                                        </label>
                                        <!-- input type="text" name="discussions" style='height:100px;' id="modal_discussions" class="form-control" -->
                                        <textarea rows="5" name="discussions"  id="modal_discussions" class="form-control"  ></textarea>
                                        <!-- <textarea type="text" cols="3" rows="3" name="discussions" class="form-control"></textarea>-->
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-inline">
                                            <label>Meeting Date</label>&nbsp;&nbsp;
                                            <input type="text" value="<?php echo date("d-m-Y"); ?>" id="modal_reminder_date"  class="date-picker"/>
                                        </div>
                                    </div>
                                </div>


                                <script>
                                    $(document).ready(function () {
                                        $('#my-dialog').modal('show');
                                        $('.date-picker').datepicker({
                                            dateFormat: "dd-mm-yy",
                                            yearRange: "-0:+10",
                                            changeMonth: true,
                                            changeYear: true
                                        });
                                    });
                                </script>

                            </div>
                            <div class="modal-footer">
                                <center>
                                    <button type="submit" id="munasubmit" class="btn btn-primary" value="submit" data-dismiss="modal">Submit</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button></center>
                            </div>
                            <!--/form-->

                        </div>
                    </div>
                </div>
                <div class="modal fade" id="myModalinsert" role="dialog" style="margin-top:160px;" >
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header modal-header-primary">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h3 class="modal-title">Approve Cost Calculation</h3>
                            </div>
                            <div class="modal-body">
                                <H4 class="text-capitalize"> Do you want to approve the cost and Convert to Customer ?</H4>
                                <?php
                                $id1 = $this->realestate_model->get_max_id();
                                $cust_id = $id1[0]->max_id;
                                ?>
                                <input type="hidden" name="cust_id" id="u_cust_id" value="<?php echo $cust_id; ?>" />
                                <?php
                                //$id = $this->input->get('id');
                                foreach ($this->Pre_sales_model->view_proj_info($id) as $row) {
                                    ?> 
                                    <input type="hidden" name="prospect_id" id="u_prospect_id" value="<?php echo $row->id; ?>" />
                                    <input type="hidden" name="project_id" id="u_project_id" value="<?php echo $row->project_id; ?>" />
                                    <input type="hidden" name="unit_no" id="u_unit_no" value="<?php echo $row->unit_no; ?>" />
                                    <input type="hidden" name="name" id="u_name" value="<?php echo $row->name; ?>" />
                                <?php } ?>
                                <input type="hidden" name="status" id="u_status" value="BOOKED" />
                                <?php
                                //$id = $this->input->get('id');
                                foreach ($this->Pre_sales_model->view_cal_info($id) as $row) {
                                    ?> 
                                    <input type="hidden" name="dicount" id="u_discount" value="<?php echo $row->discount; ?>" />
                                    <input type="hidden" name="cost_payble_to_company" id="u_cost_payble_to_company" value="<?php echo $row->cost_payble_to_company; ?>" />
                                    <input type="hidden" name="gst" id="u_gst" value=" <?php echo $row->gst; ?>" />
                                    <input type="hidden" name="total_cost" id="u_total_cost" value=" <?php echo $row->total_cost; ?>" />
                                    <input type="hidden" name="total_cost" id="u_total_cost" value=" <?php echo $row->total_cost; ?>" />
                                <?php } ?>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" id="customersubmit" class="btn btn-success" value="submit" data-dismiss="modal"><i class="fa fa-check"></i> Yes</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> No</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="myModalrequest" role="dialog" style="margin-top:160px;">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header modal-header-primary">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h3 class="modal-title">Request Approval </h3>
                            </div>
                            <div class="modal-body">
                                <H4 class="text-capitalize"> Do you want to Get the cost calculation approved ?</H4>
                                <?php
                                ?>

                                <?php
                                //$id = $this->input->get('id');
                                foreach ($this->Pre_sales_model->view_proj_info($id) as $row) {
                                    ?> 
                                    <input type="hidden" name="prospect_id" id="update_prospect_id" value="<?php echo $row->id; ?>" />

                                <?php } ?>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" id="requestsubmit" class="btn btn-primary" value="submit" data-dismiss="modal"><i class="fa fa-check"></i> Yes</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal"> <i class="fa fa-times"></i> No</button>
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
                                <h4 class="modal-title">Confirm Delete</h4>
                            </div>
                            <div class="modal-body">
                                <h3 style="text-align: center;">Are You Sure?</h3>
                                <p style="text-align: center;">This change is un-reversible. </p>
                            </div>
                            <div class="modal-footer" style="text-align: center;">
                                <a class="btn btn-danger" data-toggle="modal" id="modalDelete">Delete</a>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button> 
                            </div>
                        </div>
                    </div> 
                </div>
            </div> 
        </div>
        <script>
            $("#modal_reminder_date").on("keydown keypress keyup", false);

            $(document).ready(function () {
                $('[data-toggle="popover"]').popover({
                    placement: 'top',
                    trigger: 'hover'
                });
            });

            $('.trash').click(function () {
                var del_href = $(this).data('href');
                $('#modalDelete').attr('href', del_href);
            });
            $(document).ready(function () {
                $('#toppageheader').html('Pre Sales Cost Calculation');
                $("a:contains(Dashboard)").parent().addClass('active');
                $('#munasubmit').on('click', function () {
                    var mi = $('#modal_id').val();
                    var mdates = $('#modal_dates').val();
                    var mreminder_date = $('#modal_reminder_date').val();
                    var mdiscuss = $('#modal_discussions').val();
                    $('#myModal').modal('hide');
                    $.ajax({
                        type: 'POST',
                        url: "<?php echo site_url('Pre_sales/visitor_discussions_input'); ?>",
                        data: {prospect_id: mi, dates: mdates, reminder_date: mreminder_date, discussions: mdiscuss},
                        success: function (data) {
                            var prosid = data;
                            //alert(prosid);
                            window.location.href = "<?php echo site_url('Pre_sales/pre_sales_costing3?id=') ?>" + prosid;
                        },
                        error: function (err) {
                            // alert("error" + JSON.stringify(err));
                        }
                    });
                });
//////////////////////////////////////////////////////
                $('#customersubmit').on('click', function () {
                    var mprospect_id = $('#u_prospect_id').val();
                    // alert(mprospect_id);
                    var mproject_id = $('#u_project_id').val();
                    var munit_no = $('#u_unit_no').val();
                    var mname = $('#u_name').val();
                    var mstatus = $('#u_status').val();
                    var mcust_id = $('#u_cust_id').val();
                    var mdiscount = $('#u_discount').val();
                    var mgst = $('#u_gst').val();
                    var mcost_payble_to_company = $('#u_cost_payble_to_company').val();
                    var mtotal_cost = $('#u_total_cost').val();
                    // alert(mdiscount);
                    $('#myModalinsert').modal('hide');
                    $.ajax({
                        type: 'POST',
                        url: "<?php echo site_url('Pre_sales/upadte_visitor_input'); ?>",
                        data: {prospect_id: mprospect_id, project_id: mproject_id, unit_no: munit_no, name: mname, status: mstatus, mcust_id: mcust_id, discount: mdiscount, gst: mgst, cost_payble_to_company: mcost_payble_to_company, total_cost: mtotal_cost},
                        success: function (data) {
                            // alert(data);
                            var ele = document.getElementById('editing');
                            ele.style.display = 'none';
                            $('#myModal').modal('hide')
                            window.location.href = "<?php echo site_url('Pre_sales/discussions_sucess'); ?>";
                        },
                        error: function (err) {
                            // alert("error" + JSON.stringify(err));
                        }
                    });
                });
                $('#requestsubmit').on('click', function () {
                    var mprospect_id = $('#update_prospect_id').val();
                    // alert(mprospect_id);

                    $('#myModalrequest').modal('hide');
                    $.ajax({
                        type: 'POST',
                        url: "<?php echo site_url('Pre_sales/requestupadte_visitor_input'); ?>",
                        data: {prospect_id: mprospect_id},
                        success: function (data) {
                            // alert(data);

                            $('#myModalrequest').modal('hide')
                            window.location.href = "<?php echo site_url('Pre_sales/discussions_sucess'); ?>";
                        },
                        error: function (err) {
                            // alert("error" + JSON.stringify(err));
                        }
                    });
                });















            });

            function deldiscuss(tr)
            {

                var tbl = document.getElementById('discusstbl');
                tbl.deleteRow(tr.rowIndex);
                //alert("Row index is: " + td.rowIndex);
            }


        </script>

    </body>
</html>
