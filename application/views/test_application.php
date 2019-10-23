<!DOCTYPE html>
<!--
Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
Unauthorized copying of this file, via any medium is strictly prohibited
Proprietary and confidential.
Written by Oga Technologies, October 1,  2016.
-->
<html>
    <head>
        <title>Application Form</title>
        <?php
        require_once('assets/html_head_links.php');
        ?>
        <style type="text/css">
            .box{
                display: none;
            }
            .status{
                color: red;
            }
            .col-md-11{
                padding-left: 4px !important;
            }
            @media (min-width: 992px)
            {
                .col-md-11 {
                    width: 101.666667%;
                }
                .col-md-1{
                    display: none;
                }
            }
            .form-control {
                padding: 6px 6px !important;
            }
            .form-control[readonly]{
                background: #fff;
                box-shadow: none;
            }
            textarea {
                resize: none;
            }

        </style>
        <link href="<?php echo base_url('resources/css/Application_form.css'); ?>" rel="stylesheet" type="text/css"/>

    </head>
    <body> 
        <div style="z-index: 10;">
            <?php
            require_once('assets/top_menu.php');
            require_once('assets/side_menu.php');
            ?>
        </div>
        <div class="main">


            <?php
            $login_user_id = $this->session->userdata('user_id');
            $id = $this->input->get('id');
            $explode_data = explode('?', $id);
            $idr = $explode_data[0];
            $project_id = $explode_data[1];
            $unit_no = $explode_data[2];
            $pre_salesid = $explode_data[3];
            ?>
            <?php
            foreach ($this->View_applicant_info->view_sheet1($pre_salesid) as $row) {
                ?>
                <?php $project_id = $row->project_id; ?>
                <?php $name = $row->name; ?>
                <?php $mobile = $row->mobile; ?>
                <?php $block = $row->block; ?>
                <?php $category = $row->category; ?>
                <?php $type = $row->type; ?>
                <?php $unit_no = $row->unit_no; ?>
                <?php $plot_size_mtr = $row->plot_size_mtr; ?>
                <?php $plot_size_ft = $row->plot_size_ft; ?>
                <?php $total_cost = $row->total_cost; ?>
            <?php } ?>

            <?php
            $data['project_id'] = $project_id;
            $data['block'] = $block;
            $data['type'] = $type;
            $data['category'] = $category;
            $data['plot_size_mtr'] = $plot_size_mtr;
            $data['plot_size_ft'] = $plot_size_ft;
            foreach ($this->Pre_sales_model->show_plot_info($data) as $row) {
                ?> 
                <?php $carpet_area = $row->carpet_area; ?>
                <?php $first_floor_carpet_area = $row->first_floor_carpet_area; ?>
                <?php $ground_floor_carpet_area = $row->ground_floor_carpet_area; ?>
                <?php $balcony_area = $row->balcony_area; ?>
                <?php $common_area = $row->common_area; ?>
                <?php $wash_area = $row->wash_area; ?>
                <?php $roof_covered_ground_ff_area = $row->roof_covered_ground_ff_area; ?>
                <?php $roof_covered_ground_gf_area = $row->roof_covered_ground_gf_area; ?>
                <?php $total_roof = $roof_covered_ground_ff_area + $roof_covered_ground_gf_area ?>
            <?php } ?>




            <?php
            $data['plot_size_mtr'] = $plot_size_mtr;
            $data['plot_size_ft'] = $plot_size_ft;
            $data['project_id'] = $project_id;
            $data['type'] = $type;
            $data['block'] = $block;
            foreach ($this->Allotment_letter_model->show_plot_info($data) as $row) {
                $plot_sqmt = $row->plot_sqmt;
                $plot_size_sqft = $row->plot_sqft;
                $length_m = $row->length_m;
                $width_m = $row->width_m;
            }
            ?>
            <div class="container" style="font-size: 12px;">
                <form action="<?php echo site_url('main_controller/takeinputs_updated'); ?>" method="post" name="Form" class="form-inline" enctype="multipart/form-data" onsubmit="return validateForm()" autocomplete="off">


                    <div class="panel-group" id="accordion">
                        
                        <input type='hidden' value='<?php echo $pre_salesid; ?>' name='pre_salesid'/>
                        <input type='hidden' value='<?php echo $login_user_id; ?>' name='login_user_id'/>
                        <input type='hidden' value='<?php echo $idr; ?>' name='id'/>
                        <input type='hidden' name="id" value='<?php echo $idr; ?>'/>

                        <input type='hidden' name="total_cost" value='<?php echo $total_cost; ?>'/>
                        <input type='hidden' name="project_id" value='<?php echo $project_id; ?>'/>
                        <input type='hidden' name="id" value='<?php echo $idr; ?>'/>
                        <div class="panel panel-primary" title="Essargee Construction" style="cursor:default;">
                            <div class="panel-heading" style="/* background-color: #BEBEBE;*/">
                                <div class="panel-title" style="display: block;padding: 5px;">

                                    <?php
                                    foreach ($this->Company_info_model->get_company_info() as $row) {
                                        ?> 
                                        <span><?php echo $row->attribute; ?></span>&nbsp;:&nbsp;
                                        <span><?php echo $row->value; ?></span>
                                    <?php } ?>
                                    <span style="margin-left:25%;">Application Number 
                                        <?php
                                        echo $idr;
                                        // $id = $this->realestate_model->get_max_id();
                                        // echo $id[0]->max_id;
                                        ?>
                                    </span>
                                    <span style="float:right;">Date : <span id="date22"></span></span>
                                </div>
                            </div>   
                        </div>

                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#panel1" style="text-decoration: none;color: #fff;">
                                    <h4 class="panel-title">
                                        Project Details&nbsp;&nbsp;<i class="glyphicon glyphicon-minus pull-right"></i>
                                    </h4>
                                </a>
                            </div>
                            <div id="panel1" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type='hidden' id='pid' value='<?php echo $project_id;  ?>'>
                                            <label for="project_name">Project :</label>
                                           <!-- <select class="form-control" name="project_name" id="project_name" onKeyUp='getblocks(this.value);'> 
                                                <option value='0'>--Select--</option>      
                                            <?php
//  foreach ($this->realestate_model->project_dtls() as $w) {
                                            ?>
                                                    <option value="<?php // echo $w->id;                                                      ?>"><?php //echo $w->project_name;                                                      ?></option>  
                                            <?php
                                            // }
                                            ?>
                                            </select>-->
                                            <?php
                                            $data['project_id'] = $project_id;

                                            foreach ($this->Pre_sales_model->getproject_info($data) as $row) {
                                                ?>
                                                <?php $project_name = $row->project_name; ?>

                                            <?php } ?>
                                            <input type="hidden" class="form-control" id="project_name" name="project_name" value="<?php echo $project_name; ?>" /><?php echo $project_name; ?>&nbsp;&nbsp;<?php echo $block; ?>
                                            <br>
                                            <br>

                                            <!-- --------------------------image row Start-------------------------------------------------------------- -->

                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                    <div class="thumbnail">
                                                        <img src="<?php echo base_url('resources/image/f3.png'); ?>" max-height="300" max-width="150" name="applicant_img" id="profile-img-tag" class="img-rounded img-responsive" alt="Cinque Terre"/>

                                                        <div class="caption">
                                                            <p style="text-align: center;">Applicant</p>
                                                            <div class="row">
                                                                <div class="col-md-6">                                                                                                    
                                                                    <input type="file" name="img_path"  id="profile-img">
                                                                </div>
                                                                <div class="col-md-2"> 
                                                                    <a onClick="removeimg1();" href="#" class="btn btn-default" style="padding: 0px 5px;margin-left: 10px;"><i class="fa fa-times"></i></a>
                                                                </div>                                            
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                    <div class="thumbnail">
                                                        <img src="<?php echo base_url('resources/image/f3.png'); ?>" max-height="300" max-width="150" name="coapplicant_img" id="profile-img-tag2" class="img-rounded img-responsive" alt="Cinque Terre"/>

                                                        <div class="caption">
                                                            <p style="text-align: center;">Co-Applicant</p>
                                                            <div class="row">
                                                                <div class="col-md-6">                                                                                                    
                                                                    <input type="file" name="ca_img_path"  id="profile-img2">
                                                                </div>
                                                                <div class="col-md-2"> 
                                                                    <a  onClick="removeimg2();" href="#" class="btn btn-default" style="padding: 0px 5px;margin-left: 10px;"><i class="fa fa-times"></i></a>

                                                                </div>                                            
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                    <div class="thumbnail">
                                                        <img src="<?php echo base_url('resources/image/f3.png'); ?>" max-height="300" max-width="150" name="coapplicant_img_1" id="profile-img-tag3" class="img-rounded img-responsive" alt="Cinque Terre"/>

                                                        <div class="caption">
                                                            <p style="text-align: center;">Co-Applicant</p>
                                                            <div class="row">
                                                                <div class="col-md-6">                                                                                                    
                                                                    <input type="file" name="ca_img_path_1"  id="profile-img3">
                                                                </div>
                                                                <div class="col-md-2"> 
                                                                    <a  onClick="removeimg3();" href="#" class="btn btn-default" style="padding: 0px 5px;margin-left: 10px;"><i class="fa fa-times"></i></a>

                                                                </div>                                            
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- --------------------------image row end-------------------------------------------------------------- -->

                                        </div>
                                        <div class="col-md-6">
                                            <table class="table table-bordered">
                                                <tbody>

                                                <input type="hidden" id='block_name' name="block" class="form-control"  value="<?php echo $block; ?>" style= "display: block; padding: 2px; margin: 0; border: 0; width: 100%; border-radius: 0px;"/>

                                                <tr>
                                                    <td class="col-sm-4">Type</td>
                                                    <td class="col-sm-8" style="margin: 0; padding: 0;">
                                                        <input type="text" name="type" id="unittype"  class="form-control"  value="<?php echo $type; ?>" onmouseover="getcategory()" style= "display: block; padding: 2px; margin: 0; border: 0; width: 100%; border-radius: 0px;" readonly />
                                                     <!-- <select class="form-control" id="unittype" onKeyUp="getcategory();" name="type" style= "display: block; padding: 2px; margin: 0; border: 0; width: 100%; border-radius: 0px;" onKeyUp="showdiv();">
                                                          <option value="0">--Select--</option>
                                                      </select> --></td>
                                                </tr>
                                                <tr class="block">
                                                    <td class="col-sm-4">Block</td>
                                                    <td class="col-sm-8" style="margin: 0; padding: 0;">
                                                        <input type="text" name="category" id="selcat" class="form-control"  value="<?php echo $category; ?>" style= "display: block; padding: 2px; margin: 0; border: 0; width: 100%; border-radius: 0px;" readonly/>
                                                    <!-- <select class="form-control" id="selcat" name="category" onKeyUp="getavailableunits();" style= "display: block; padding: 2px; margin: 0; border: 0; width: 100%; border-radius: 0px;">
                                                        <option value="0">--Select--</option>
                                                    </select>-->
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="col-sm-4">Unit No.</td>
                                                    <td class="col-sm-8" style="margin: 0; padding: 0;">
                                                        <input type="text" name="unit_no" class="form-control"  value="<?php echo $unit_no; ?>" style= "display: block; padding: 2px; margin: 0; border: 0; width: 100%; border-radius: 0px;" readonly/>
                                                                                                                <!--  <select name="unit_no" id="selunit" onKeyUp="getareas();" class="form-control" style= "display: block; padding: 2px; margin: 0; border: 0; width: 100%; border-radius: 0px;">
                                                                                                                      <option value="0">--Select--</option>
                                                                                                                  </select> -->
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="col-sm-4">Status.</td>
                                                    <td class="col-sm-8" style="margin: 0; padding: 0;">
                                                        <input type="text" value="BOOKED" name="status"  style= "display: block; padding: 2px; margin: 0; border: 0; width: 100%; border-radius: 0px;" readonly/>   
  <!--    <input type="text" name="block" class="form-control" style= "display: block; padding: 2px; margin: 0; border: 0; width: 100%; border-radius: 0px;"/>-->
                                                        <!--select class="form-control" name="status" id="status">

                                                            <option value="BOOKED">BOOKED</option>
                                                        </select-->
                                                    </td>
                                                </tr>
                                                <?php if(($type == 'Flat') || ($type == 'Shop') ){ ?>
                                                    
                                              <?php  }else{ ?>
                                                <tr class="show_ground_carpet_area1"> 
                                                    <td class="col-sm-4">Plot Size </td>
                                                    <td class="col-sm-8" style="margin: 0; padding: 0;">
                                                        &nbsp; <?php echo number_format((float) $length_m, 2, '.', ''); ?> x <?php echo number_format((float) $width_m, 2, '.', ''); ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>Sq. Mt.</label> 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo number_format((float) $length_m * $width_m, 2, '.', ''); ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>Sq. Mt.</label>
                                                    </td>
                                                </tr>

                                                <tr class="show_ground_carpet_area"> 
                                                    <td class="col-sm-4">Ground Floor Carpet Area </td>
                                                    <td class="col-sm-8" style="margin: 0; padding: 0;">
                                                        &nbsp; <?php echo number_format((float) $ground_floor_carpet_area, 2, '.', ''); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>Sq. Mt.</label>
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo number_format((float) $ground_floor_carpet_area * 10.76, 2, '.', ''); ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>Sq. Ft.</label> 
                                                    </td>
                                                </tr>
                                                <tr class="show_floor_carpet_area">
                                                    <td class="col-sm-4">First Floor Carpet Area</td>
                                                    <td class="col-sm-8" style="margin: 0; padding: 0;">
                                                        &nbsp; <?php echo number_format((float) $first_floor_carpet_area, 2, '.', ''); ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>Sq. Mt.</label> 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo number_format((float) $first_floor_carpet_area * 10.76, 2, '.', ''); ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>Sq. Ft.</label></td>

                                                </tr>
                                                <tr class="show_total_carpet_area">
                                                    <td class="col-sm-4">Total Carpet area</td>
                                                    <td class="col-sm-8" style="margin: 0; padding: 0;">
                                                        &nbsp; <?php echo number_format((float) $carpet_area, 2, '.', ''); ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>Sq. Mt.</label> 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo number_format((float) $carpet_area * 10.76, 2, '.', ''); ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>Sq. Ft.</label></td>
                                                </tr>
                                                <tr class="show_ground_carpet_area"> 
                                                    <td class="col-sm-4">Roof Covered Area </td>
                                                    <td class="col-sm-8" style="margin: 0; padding: 0;">
                                                        &nbsp; <?php echo number_format((float) $total_roof, 2, '.', ''); ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label>Sq. Mt.</label> 
                                                    </td>
                                                </tr>
 <?php } ?>

                                                <tr id="parking1"  class="show_parking">
                                                    <td class="col-sm-4">Parking Option.</td>
                                                    <td class="col-sm-8" style="margin: 0; padding: 0;">
                                                    <!--    <input type="text" name="block" class="form-control" style= "display: block; padding: 2px; margin: 0; border: 0; width: 100%; border-radius: 0px;"/>-->
                                                        <select class="form-control" name="parking_type" id="parking_type" onchange="getparking(this.value)">
                                                            <option>--select--</option>
                                                            <option value="OPEN">OPEN</option>
                                                            <option value="COVERED">COVERED</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr id="parking2" class="show_parking">
                                                    <td class="col-sm-4">Parking No.</td>
                                                    <td class="col-sm-8" style="margin: 0; padding: 2px;">
                                                    <!--    <input type="text" name="block" class="form-control" style= "display: block; padding: 2px; margin: 0; border: 0; width: 100%; border-radius: 0px;"/>-->
                                                        <select class="form-control"  style="width: 114px" name="parking_no" id="parking_no">
                                                            <option>--select--</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                             
                                                <tr>
                                                    <td class="col-sm-4">East By</td>
                                                    <td class="col-sm-8" style="margin: 0; padding: 0;"><input type="text"  name="east_by" class="form-control" style= "display: block; padding: 2px; margin: 0; border: 0; width: 100%; border-radius: 0px;" required/></td>
                                                </tr>
                                                <tr>
                                                    <td class="col-sm-4">West By</td>
                                                    <td class="col-sm-8" style="margin: 0; padding: 0;"><input type="text" name="west_by" class="form-control" style= "display: block; padding: 2px; margin: 0; border: 0; width: 100%; border-radius: 0px;" required/></td>
                                                </tr>
                                                <tr>
                                                    <td class="col-sm-4">North By</td>
                                                    <td class="col-sm-8" style="margin: 0; padding: 0;"><input type="text"  name="north_by" class="form-control" style= "display: block; padding: 2px; margin: 0; border: 0; width: 100%; border-radius: 0px;" required/></td>
                                                </tr>
                                                <tr>
                                                    <td class="col-sm-4">South By</td>
                                                    <td class="col-sm-8" style="margin: 0; padding: 0;"><input type="text" name="south_by" class="form-control" style= "display: block; padding: 2px; margin: 0; border: 0; width: 100%; border-radius: 0px;" required/></td>
                                                </tr>
                                                <tr>
                                                    <td class="col-sm-4">Interest Rate</td>
                                                    <td class="col-sm-8" style="margin: 0; padding: 0;"><input type="text" name="rate" class="form-control" style= "display: block; padding: 2px; margin: 0; border: 0; width: 100%; border-radius: 0px;" required/></td>
                                                </tr>


                                                </tbody>
                                            </table>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--project end ----->
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#panel2" style="text-decoration: none;color: #fff;">
                                    <h4 class="panel-title">Professional Details &nbsp;&nbsp;<i class="glyphicon glyphicon-plus pull-right"></i></h4>
                                </a>
                            </div>
                            <div id="panel2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="row"><!--1 row-->

                                        <!-- --------------------------Applicant------------------------------------------Applicant------------------------------------------------ -->

                                        <div class="col-md-5" ><!--1/1 row div-->
                                            <div class="row">
                                                <div class="panel panel-info" style="cursor:default;">
                                                    <div class="panel-heading" style="text-align:center;">
                                                        <b>Applicant</b>
                                                    </div>
                                                </div>
                                            </div>             
                                            <br>
                                            <div class="row"><!--1 line-->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>1. Name</label>
                                                        <span style="color:red"> *</span>
                                                    </div>	
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <select name='mr_mrs' class="form-control">
                                                            <option value="">Select</option>
                                                            <option value="Mr.">Mr.</option>
                                                            <option value="Ms.">Ms.</option>
                                                            <option value="Mrs.">Mrs.</option>
                                                        </select>
                                                        <input type="text" name="name" id="name" value="<?php echo $name; ?>" class="form-control" onkeyup = "Validate(this)" style="width:63%;"/>
                                                    </div>
                                                </div>
                                            </div><!--1 line close-->
                                            <br>
                                            <div class="row"><!--3 line-->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>2. S/o. or W/o. or D/o</label>
                                                    </div>	
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <select name="son_doughter_wife" class="form-control">
                                                            <option value="">Select</option>
                                                            <option value="S/o">S/o.</option>
                                                            <option value="D/o">D/o.</option>
                                                            <option value="W/o">W/o.</option>
                                                        </select>
                                                        <select name ="son_doughter_wife_mr_mrs" class="form-control">
                                                            <option value="">Select</option>
                                                            <option value="Mr.">Mr.</option>
                                                            <option value="Ms.">Ms.</option>
                                                            <option value="Mrs.">Mrs.</option>
                                                        </select>
                                                        <input type="text" name="swd_of" class="form-control" id="txt_firstCapital2" onkeyup = "Validate(this)" style="width: 100%; margin-top: 4px;"/>
                                                    </div>
                                                </div>
                                            </div><!--3 line close-->
                                            <br>
                                            <div class="row"><!--4 line-->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>3. Present Address</label>
                                                    </div>	
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <textarea class="form-control" rows="2" name="present_addr" id="fappladdr" placeholder="Present Residential Address" style="width: 100%;"></textarea>
                                                    </div>
                                                </div>
                                            </div><!--4 line close-->
                                            <br>
                                            <div class="row"><!--4 line-->
                                                <div class="col-md-4" style="text-align: right;">
                                                    <div class="form-group">
                                                    </div>	
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label>Same as above</label>
                                                        <input type="checkbox" value="copy" onClick="cpy2();">
                                                    </div>
                                                </div>
                                            </div><!--4 line close-->
                                            <div class="row"><!--4 line-->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>4.Permanent Address</label>
                                                    </div>	
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <textarea class="form-control" rows="2" name="permanent_addr" id="fappladdr2" placeholder="Permanent Address" style="width: 100%;"></textarea>
                                                    </div>
                                                </div>
                                            </div><!--4 line close-->
                                            <br>
                                            <div class="row"><!--9 line-->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>5. Pin Code</label>
                                                    </div>	
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">	
                                                        <input type="text" class="form-control" name="pin_code" placeholder="Pin Code" style="width:100%;" onKeyUp="pincode_validate(this.value);"/>   
                                                        <label class="status" id="statuspincode"></label>
                                                    </div>
                                                </div>
                                            </div><!--9 line close-->
                                            <br>
                                            <div class="row"><!--2 line-->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>6. Date of Birth</label>
                                                    </div>	
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <div class="input-group" style="width: 70%;">
                                                            <input type="text" class="form-control" id="date" name="fappl_dob" value=""  onchange="getAge(this.value);" placeholder="DD-MM-YYYY"/>
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                        </div>

                                                        <label>Age </label>
                                                        <input type="text" class="form-control" id="age" name="fappl_age"  placeholder="Age" style="width: 43px; background: #ffffff" readonly>
                                                    </div>
                                                </div>	
                                            </div><!--2 line close-->
                                            <br>
                                            <div class="row"><!--9 line-->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>7. Mobile number</label>
                                                        <span style="color:red"> *</span>
                                                    </div>	
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">	
                                                        <input type="text" class="form-control" value="<?php echo $mobile; ?>" name="contact_mobile" placeholder="Mobile number" style="width:100%;" onKeyUp="mobile_validate(this.value);"/>   
                                                        <label class="status" id="statusmobile"></label>
                                                    </div>
                                                </div>
                                            </div><!--9 line close-->
                                            <br>
                                            <div class="row"><!--8 line-->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>8. Email address</label>	
                                                    </div>	
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">	
                                                        <input type="text" class="form-control" name="email" placeholder="Email address" style="width:100%;" onKeyUp="email_validate(this.value);"/>   
                                                        <label class="status" id="statusAppemail"></label>
                                                    </div>
                                                </div>
                                            </div><!--8 line close-->
                                            <br>

                                            <div class="row"><!--4 line-->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>9. Aadhar No.</label>
                                                    </div>	
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="aadhar_no" placeholder="Aadhaar Card No." onKeyUp="aadhar_validate(this.value);" style="width:100%;" />
                                                        <label class="status" id="statusaadhaar"></label>
                                                    </div>
                                                </div>
                                            </div><!--4 line close-->
                                            <br>
                                            <div class="row"><!--5 line-->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>10. PAN No.</label>
                                                    </div>	
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="pan" placeholder="PAN Card No." style="width:100%;" onKeyUp="pan_validate(this.value);" />
                                                        <label class="status" id="statusAppPan"></label>
                                                    </div>
                                                </div>
                                            </div><!--5 line close-->
                                            <br>

                                            <div class="row"><!--10 line-->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>11. Qualification</label>	
                                                    </div>	
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">	
                                                        <input type="text" class="form-control" name="qualification" placeholder="Qualification" style="width:100%;" onKeyUp="q1_validate(this.value);"/>       
                                                        <label class="status" id="statusAppQ1"></label>
                                                    </div>
                                                </div>
                                            </div><!--10 line close-->
                                            <br>
                                            <div class="row"><!--10 line-->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>12. Occupation</label>	
                                                    </div>	
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="radio">
                                                        <label style="">
                                                            <input type="radio" name="fa_occupation" id="optionsRadios1" value="Business">Business
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="fa_occupation" id="optionsRadios1" value="Service">Service
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="fa_occupation" id="optionsRadios1" value="Others">Others
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="fa_occupation" id="optionsRadios1" value="None">None
                                                        </label>
                                                    </div> 
                                                </div>
                                            </div><!--10 line close-->
                                            <br>
                                            <div class="row"><!--10 line-->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>13. Employer Name</label>	
                                                    </div>	
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">	
                                                        <input type="text" class="form-control" name="company_name" placeholder="Company Name" onkeyup = "Validate(this)" style="width:100%;" />       
                                                    </div>
                                                </div>
                                            </div><!--10 line close-->

                                            <br>
                                            <div class="row"><!--10 line-->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>14. Date of Joining</label>	
                                                    </div>	
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">	
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="datepicker" name='appl_doj' placeholder="Date of Joining" style="width:100%;" />     
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!--10 line close-->
                                            <br>
                                            <div class="row"><!--10 line-->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>15. Designation</label>	
                                                    </div>	
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">	
                                                        <input type="text" class="form-control" name="appl_desig" placeholder="Designation" style="width:100%;" onkeyup = "Validate(this)"/>       
                                                    </div>
                                                </div>
                                            </div><!--10 line close-->
                                            <br>
                                            <div class="row"><!--10 line-->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>16. Department</label>	
                                                    </div>	
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">	
                                                        <input type="text" class="form-control" name="department" placeholder="Department" style="width:100%;" onkeyup = "Validate(this)"/>       
                                                    </div>
                                                </div>
                                            </div><!--10 line close-->
                                            <br>
                                            <div class="row"><!--10 line-->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>17. Monthly Income</label>
                                                    </div>	
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">	
                                                        <input type="text" class="form-control" name="monthly_income" placeholder="Monthly Income" onkeyup = "ValidateIncome(this)" style="width:100%;"/>       
                                                    </div>
                                                </div>
                                            </div><!--10 line close-->
                                            <br>
                                            <div class="row"><!--10 line-->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>18. Address Of Employer</label>	
                                                    </div>	
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">	
                                                        <input type="text" class="form-control" name="addr_of_employer" placeholder="Address Of Employer" style="width:100%;margin-top: 8px;" />       
                                                    </div>
                                                </div>
                                            </div><!--10 line close-->
                                            <br>
                                            <div class="row"><!--10 line-->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>19. Pin code</label>	
                                                    </div>	
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">	
                                                        <input type="text" class="form-control" id="pin" name="pin_code_emp" placeholder="Pincode Of Employer" style="width:100%;" onKeyUp="Emppincode_validate(this.value);"/>   
                                                        <label class="status" id="statusemppincode"></label>
                                                    </div>
                                                </div>
                                            </div><!--10 line close-->

                                        </div><!--1/1 row div close-->

                                        <!-- --------------------------Co-Applicant-2------------------------------------------Co-Applicant-2----------------------------------------------- -->

                                        <div class="col-md-4"><!--1/2 row div-->
                                            <div class="row">
                                                <div class="panel panel-info" style="cursor:default;">
                                                    <div class="panel-heading" style="text-align:center;">
                                                        <b>Co-Applicant</b>
                                                    </div>
                                                </div>
                                            </div> 
                                            <br>
                                            <div class="row"><!--1 line-->
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                    </div>	
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="form-group">
                                                        <select name="ca_mr_mrs" class="form-control">
                                                            <option value="">Select</option>
                                                            <option value="Mr.">Mr.</option>
                                                            <option value="Ms.">Ms.</option>
                                                            <option value="Mrs.">Mrs.</option>
                                                        </select>
                                                        <input type="text" name="ca_name" id="txt_firstCapital" class="form-control" onkeyup = "Validate(this)" style="width:60%;"/>
                                                    </div>
                                                </div>
                                            </div><!--1 line close-->
                                            <br>
                                            <div class="row"><!--3 line-->
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                    </div>	
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="form-group">
                                                        <select name="ca_son_doughter_wife" class="form-control">
                                                            <option value="">Select</option>
                                                            <option value="S/o">S/o.</option>
                                                            <option value="D/o">D/o.</option>
                                                            <option value="W/o">W/o.</option>
                                                        </select>
                                                        <select name="ca_son_doughter_wife_mr_mrs" class="form-control">
                                                            <option value="">Select</option>
                                                            <option value="Mr.">Mr.</option>
                                                            <option value="Ms.">Ms.</option>
                                                            <option value="Mrs.">Mrs.</option>
                                                        </select>
                                                        <input type="text" name="ca_swd_of" class="form-control" id="txt_firstCapital3" onkeyup = "Validate(this)" style="width:100%; margin-top: 4px;"/>
                                                    </div>
                                                </div>
                                            </div><!--3 line close-->
                                            <br>
                                            <div class="row"><!--4 line-->
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                        <label></label>
                                                    </div>	
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="form-group">
                                                        <textarea class="form-control" rows="2" name="co_present_add" id="n1" placeholder="Present Residential Address" style="width:100%;"></textarea>
                                                    </div>
                                                </div>
                                            </div><!--4 line close-->
                                            <br>
                                            <div class="row"><!--4 line-->
                                                <div class="col-md-1" style="text-align: right;">
                                                    <div class="form-group">
                                                    </div>	
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="form-group">
                                                        <label>Same as above</label>
                                                        <input type="checkbox" value="copy" onClick="cpy();">
                                                    </div>
                                                </div>
                                            </div><!--4 line close-->
                                            <div class="row"><!--4 line-->
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                        <label></label>
                                                    </div>	
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="form-group">
                                                        <textarea class="form-control" rows="2" name="co_parma_add" id="n2" placeholder="Permanent Address" style="width: 100%;"></textarea>
                                                    </div>
                                                </div>
                                            </div><!--4 line close-->
                                            <br>
                                            <div class="row"><!--pincode-->
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                        <label></label>
                                                    </div>	
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="ca_pincode" placeholder="Pincode" style="width:100%;" onKeyUp="pincode_validate2(this.value);"/>   
                                                        <label class="status" id="statuspincode2"></label>
                                                    </div>
                                                </div>
                                            </div><!--5 line close-->
                                            <br>
                                            <div class="row"><!--2 line-->
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                    </div>	
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="form-group">
                                                        <div class="input-group" style="width: 70%;">
                                                            <input type="text" class="form-control" id="date2" name="ca_dob" value="" onchange="getAge2(this.value);"  placeholder="DD-MM-YYYY" />
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                        </div>
                                                        <label>Age </label>
                                                        <input type="text" class="form-control" id="age2" name="ca_age" value="" placeholder="Age" style="width: 43px;background: #ffffff" readonly>
                                                    </div>
                                                </div>	
                                            </div><!--2 line close-->
                                            <br>
                                            <div class="row"><!--Pin Coder-->
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                        <label></label>
                                                    </div>	
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="co_mo_no" placeholder="Mobile No" style="width:100%;" onKeyUp="mobile_validate2(this.value);"/>   
                                                        <label class="status" id="statusmobile2"></label>
                                                    </div>
                                                </div>
                                            </div><!--5 line close-->
                                            <br>
                                            <div class="row"><!--8 line-->
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                        <label></label>	
                                                    </div>	
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="form-group">	
                                                        <input type="text" class="form-control" name="co_email" placeholder="Email address" style="width:100%;" onKeyUp="email_validate2(this.value);"/>   
                                                        <label class="status" id="statuscoemail"></label>
                                                    </div>
                                                </div>
                                            </div><!--8 line close-->
                                            <br>
                                            <div class="row"><!--Adhar Card No.-->
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                        <label></label>	
                                                    </div>	
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="form-group">	
                                                        <input type="text" class="form-control" name="ca_aadhar_no" placeholder="Aadhaar Card No." onKeyUp="aadhar_validate2(this.value);"  style="width:100%;" />
                                                        <label class="status" id="statusaadhaar2"></label>
                                                    </div>
                                                </div>
                                            </div><!--8 line close-->
                                            <br>
                                            <div class="row"><!--PAN Card No.-->
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                        <label></label>	
                                                    </div>	
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="form-group">	
                                                        <input type="text" class="form-control" name="ca_pan" placeholder="PAN Card No."  style="width:100%;" onKeyUp="pan_validate2(this.value);" />       
                                                        <label class="status" id="statusAppPan2"></label>
                                                    </div>
                                                </div>
                                            </div><!--9 line close-->
                                            <br>
                                            <div class="row"><!--Qualification-->
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                        <label></label>	
                                                    </div>	
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="form-group">	
                                                        <input type="text" class="form-control" name="ca_qualification" placeholder="Qualification" style="width:100%;" onKeyUp="q3_validate(this.value);"/>       
                                                        <label class="status" id="statusAppQ3"></label>
                                                    </div>
                                                </div>
                                            </div><!--10 line close-->
                                            <br>

                                            <div class="row"><!--Occupation-->
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                        <label></label>	
                                                    </div>	
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="radio">
                                                        <label style="">
                                                            <input type="radio" name="ca_occupation" id="optionsRadios1" value="Business">Business 
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="ca_occupation" id="optionsRadios1" value="Service">Service 
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="ca_occupation" id="optionsRadios1" value="Others">Others
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="ca_occupation" id="optionsRadios1" value="None">None
                                                        </label>
                                                    </div> 
                                                </div>
                                            </div><!--10 line close-->
                                            <br>
                                            <div class="row"><!--Company Name-->
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                        <label></label>	
                                                    </div>	
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="form-group">	
                                                        <input type="text" class="form-control" name="ca_company_name" placeholder="Company Name" style="width:100%;" onkeyup = "Validate(this)"/>       
                                                    </div>
                                                </div>
                                            </div><!--10 line close-->
                                            <br>
                                            <div class="row"><!--Date of Joining-->
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                        <label></label>	
                                                    </div>	
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="cadojdatepicker" name="ca_doj" placeholder="Date of Joining" style="width:100%;" onkeyup = "Validate(this)"/>       
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!--10 line close-->
                                            <br>
                                            <div class="row"><!--Designation-->
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                        <label></label>	
                                                    </div>	
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="form-group">	
                                                        <input type="text" class="form-control" name="ca_desig" placeholder="Designation" style="width:100%;" onkeyup = "Validate(this)"/>       
                                                    </div>
                                                </div>
                                            </div><!--10 line close-->
                                            <br>
                                            <div class="row"><!--Department-->
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                        <label></label>	
                                                    </div>	
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="form-group">	
                                                        <input type="text" class="form-control" name="ca_department" placeholder="Department" style="width:100%;" onkeyup = "Validate(this)"/>       
                                                    </div>
                                                </div>
                                            </div><!--10 line close-->
                                            <br>
                                            <div class="row"><!--Monthly Income-->
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                        <label></label>	
                                                    </div>	
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="form-group">	
                                                        <input type="text" class="form-control" name="ca_monthly_income" placeholder="Monthly Income" style="width:100%;" onkeyup = "ValidateIncome(this)"/>       
                                                    </div>
                                                </div>
                                            </div><!--10 line close-->
                                            <br> <br>
                                            <div class="row" style="margin-top:-7px;"><!--Address Of Employer-->
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                        <label></label>	
                                                    </div>	
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="form-group">	
                                                        <input type="text" class="form-control" name="ca_addr_of_employer" placeholder="Address Of Employer" style="width:100%;"/>       
                                                    </div>
                                                </div>
                                            </div><!--10 line close-->
                                            <br>
                                            <div class="row"><!--Address Of Employer-->
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                        <label></label>	
                                                    </div>	
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="form-group">	
                                                        <input type="text" class="form-control" name="ca_addr_of_pincode" placeholder="Pincode Of Employer" style="width:100%;" onKeyUp="Emppincode_validate2(this.value);"/>   
                                                        <label class="status" id="statusemppincode2"></label>
                                                    </div>
                                                </div>
                                            </div><!--10 line close-->
                                        </div><!--1/2 row div close-->

                                        <!-- ---------------------------------------------------Co-Applicant-3----------------------------------------------------Co-Applicant-3----------------------------------------------- -->

                                        <div class="col-md-3"><!--1/2 row div-->
                                            <div class="row">
                                                <div class="panel panel-info" style="cursor:default;">
                                                    <div class="panel-heading" style="text-align:center;">
                                                        <b>Co-Applicant</b>
                                                    </div>
                                                </div>
                                            </div> 
                                            <br>
                                            <div class="row"><!--1 line-->
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                    </div>	
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="form-group">
                                                        <select name="ca_mr_mrs_1" class="form-control">
                                                            <option value="">Select</option>
                                                            <option value="Mr.">Mr.</option>
                                                            <option value="Ms.">Ms.</option>
                                                            <option value="Mrs.">Mrs.</option>
                                                        </select>
                                                        <input type="text" name="ca_name_1" class="form-control" id="txt_firstCapital1" onkeyup = "Validate(this)" style="width: 70%;"/>
                                                    </div>
                                                </div>
                                            </div><!--1 line close-->
                                            <br>
                                            <div class="row"><!--3 line-->
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                    </div>	
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="form-group">
                                                        <select name="ca_son_doughter_wife_1" class="form-control">
                                                            <option value="">Select</option>
                                                            <option value="S/o">S/o.</option>
                                                            <option value="D/o">D/o.</option>
                                                            <option value="W/o">W/o.</option>
                                                        </select>
                                                        <select name="ca_son_doughter_wife_mr_mrs_1" class="form-control">
                                                            <option value="">Select</option>
                                                            <option value="Mr.">Mr.</option>
                                                            <option value="Ms.">Ms.</option>
                                                            <option value="Mrs.">Mrs.</option>
                                                        </select>
                                                        <input type="text" name="ca_swd_of_1" class="form-control" id="txt_firstCapital4" onkeyup = "Validate(this)" style="width:100%; margin-top: 4px;"/>
                                                    </div>
                                                </div>
                                            </div><!--3 line close-->
                                            <br>
                                            <div class="row"><!--4 line-->
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                        <label></label>
                                                    </div>	
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="form-group">
                                                        <textarea class="form-control" rows="2" name="co_present_add_1" id="n3" placeholder="Present Residential Address" style="width:100%;"></textarea>
                                                    </div>
                                                </div>
                                            </div><!--4 line close-->
                                            <br>
                                            <div class="row"><!--4 line-->
                                                <div class="col-md-1" style="text-align: right;">
                                                    <div class="form-group">
                                                    </div>	
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="form-group">
                                                        <label>Same as above</label>
                                                        <input type="checkbox" value="copy" onClick="cpy3();">
                                                    </div>
                                                </div>
                                            </div><!--4 line close-->
                                            <div class="row"><!--4 line-->
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                        <label></label>
                                                    </div>	
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="form-group">
                                                        <textarea class="form-control" rows="2" name="co_parma_add_1" id="n4" placeholder="Permanent Address" style="width: 100%;"></textarea>
                                                    </div>
                                                </div>
                                            </div><!--4 line close-->
                                            <br>
                                            <div class="row"><!--pincode-->
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                        <label></label>
                                                    </div>	
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="ca_pincode_1" placeholder="Pincode" style="width:100%;" onKeyUp="pincode_validate3(this.value);"/>   
                                                        <label class="status" id="statuspincode3"></label>
                                                    </div>
                                                </div>
                                            </div><!--5 line close-->
                                            <br>
                                            <div class="row"><!--2 line-->
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                    </div>	
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="form-group">
                                                        <div class="input-group" style="width: 70%;">
                                                            <input type="text" class="form-control" id="date3" name="ca_dob_1" value="" onchange="getAge3(this.value);"  placeholder="DD-MM-YYYY"/>
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                        </div>
                                                        <label>Age </label>
                                                        <input type="text" class="form-control" id="age3" name="ca_age_1" value="" placeholder="Age" style="width: 40px;background: #ffffff" readonly>
                                                    </div>
                                                </div>	
                                            </div><!--2 line close-->
                                            <br>
                                            <div class="row"><!--Pin Coder-->
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                        <label></label>
                                                    </div>	
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="co_mo_no_1" placeholder="Mobile No" style="width:100%;" onKeyUp="mobile_validate3(this.value);"/>   
                                                        <label class="status" id="statusmobile3"></label>
                                                    </div>
                                                </div>
                                            </div><!--5 line close-->
                                            <br>
                                            <div class="row"><!--8 line-->
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                        <label></label>	
                                                    </div>	
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="form-group">	
                                                        <input type="text" class="form-control" name="co_email_1" placeholder="Email address" style="width:100%;" onKeyUp="email_validate3(this.value);"/>   
                                                        <label class="status" id="statuscoemail3"></label>
                                                    </div>
                                                </div>
                                            </div><!--8 line close-->
                                            <br>
                                            <div class="row"><!--Adhar Card No.-->
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                        <label></label>	
                                                    </div>	
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="form-group">	
                                                        <input type="text" class="form-control" name="ca_aadhar_no_1" placeholder="Aadhaar Card No." onKeyUp="aadhar_validate3(this.value);"  style="width:100%;" />
                                                        <label class="status" id="statusaadhaar3"></label>
                                                    </div>
                                                </div>
                                            </div><!--8 line close-->
                                            <br>
                                            <div class="row"><!--PAN Card No.-->
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                        <label></label>	
                                                    </div>	
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="form-group">	
                                                        <input type="text" class="form-control" name="ca_pan_1" placeholder="PAN Card No." style="width:100%;" onKeyUp="pan_validate3(this.value);"/>       
                                                        <label class="status" id="statusAppPan3"></label>
                                                    </div>
                                                </div>
                                            </div><!--9 line close-->
                                            <br>
                                            <div class="row"><!--Qualification-->
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                        <label></label>	
                                                    </div>	
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="form-group">	
                                                        <input type="text" class="form-control" name="ca_qualification_1" placeholder="Qualification" style="width:100%;" onKeyUp="q3_validate(this.value);"/>       
                                                        <label class="status" id="statusAppQ2"></label>
                                                    </div>
                                                </div>
                                            </div><!--10 line close-->
                                            <br>

                                            <div class="row"><!--Occupation-->
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                        <label></label>	
                                                    </div>	
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="radio">
                                                        <label style="">
                                                            <input type="radio" name="ca_occupation_1" id="optionsRadios1" value="Business">Business 
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="ca_occupation_1" id="optionsRadios1" value="Service">Service 
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="ca_occupation_1" id="optionsRadios1" value="Others">Others
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="ca_occupation_1" id="optionsRadios1" value="None">None
                                                        </label>
                                                    </div> 
                                                </div>
                                            </div><!--10 line close-->
                                            <br>
                                            <div class="row"><!--Company Name-->
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                        <label></label>	
                                                    </div>	
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="form-group">	
                                                        <input type="text" class="form-control" name="ca_company_name_1" placeholder="Company Name" style="width:100%;" onkeyup = "Validate(this)"/>       
                                                    </div>
                                                </div>
                                            </div><!--10 line close-->
                                            <br>
                                            <div class="row"><!--Date of Joining-->
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                        <label></label>	
                                                    </div>	
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="cadojdatepicker_1" name="ca_doj_1" placeholder="Date of Joining" style="width:100%;"/>       
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!--10 line close-->
                                            <br>
                                            <div class="row"><!--Designation-->
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                        <label></label>	
                                                    </div>	
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="form-group">	
                                                        <input type="text" class="form-control" name="ca_desig_1" placeholder="Designation" style="width:100%;" onkeyup = "Validate(this)"/>       
                                                    </div>
                                                </div>
                                            </div><!--10 line close-->
                                            <br>
                                            <div class="row"><!--Department-->
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                        <label></label>	
                                                    </div>	
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="form-group">	
                                                        <input type="text" class="form-control" name="ca_department_1" placeholder="Department" style="width:100%;" onkeyup = "Validate(this)"/>       
                                                    </div>
                                                </div>
                                            </div><!--10 line close-->
                                            <br>
                                            <div class="row"><!--Monthly Income-->
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                        <label></label>	
                                                    </div>	
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="form-group">	
                                                        <input type="text" class="form-control" name="ca_monthly_income_1" placeholder="Monthly Income" style="width:100%;" onkeyup = "ValidateIncome(this)"/>       
                                                    </div>
                                                </div>
                                            </div><!--10 line close-->
                                            <br> <br>
                                            <div class="row" style="margin-top:-7px;"><!--Address Of Employer-->
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                        <label></label>	
                                                    </div>	
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="form-group">	
                                                        <input type="text" class="form-control" name="ca_addr_of_employer_1" placeholder="Address Of Employer" style="width:100%;"/>       
                                                    </div>
                                                </div>
                                            </div><!--10 line close-->
                                            <br>
                                            <div class="row"><!--Address Of Employer-->
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                        <label></label>	
                                                    </div>	
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="form-group">	
                                                        <input type="text" class="form-control" name="ca_addr_of_pincode_1" placeholder="Pincode Of Employer" style="width:100%;" onKeyUp="Emppincode_validate3(this.value);"/>   
                                                        <label class="status" id="statusemppincode3"></label>
                                                    </div>
                                                </div>
                                            </div><!--10 line close-->
                                        </div><!--1/2 row div close-->
                                    </div><!--main 1 row div close-->
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#panel3" style="text-decoration: none;color: #fff;">
                                    <h4 class="panel-title">
                                        Personal Details &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="glyphicon glyphicon-plus pull-right"></i>
                                    </h4>
                                </a>
                            </div>
                            <div id="panel3" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="row"><!--9 line-->
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label>20. No. of Earning Members</label>	
                                                    </div>	
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="form-group">	
                                                        <input type="text" name="earning_members" class="form-control" style="width:100%;" onkeyup = "ValidateNum(this)"/>       
                                                    </div>
                                                </div>
                                            </div><!--9 line close-->
                                            <br>
                                            <div class="row"><!--10 line-->
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label>21. No. of Dependents</label>	
                                                    </div>	
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="form-group">	
                                                        <select name="no_of_dependent" class="form-control" style="width: 100%;">
                                                            <option> 0</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                        </select>    
                                                    </div>
                                                </div>
                                            </div><!--10 line close-->
                                            <br>
                                            <div class="row"><!--10 line-->
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label>22.Dependents Details</label>	
                                                    </div>	
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="form-group">	
                                                        <textarea class="form-control" id="dependent_app" name="dependents_details" rows="5" id="comment" placeholder="" style="width: 100%;"></textarea>

                                                    </div>
                                                </div>
                                            </div><!--10 line close-->
                                            <br>
                                            <div class="row"><!--10 line-->
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label>23. Co-Owner/Sole Owner</label>	
                                                    </div>	
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <select class="form-control" name="solo_or_coowner" style="width:100%;">
                                                            <option value="">--select--</option>
                                                            <option value="Co-Owner">Co-Owner</option>
                                                            <option value="Sole-Owner">Sole-Owner</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div><!--10 line close-->
                                            <br>
                                            <div class="row"><!--11 line-->
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label>24. Loan Required</label>	
                                                    </div>	
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="loan_reqs" value="Yes" onclick="myFunction2()"/>Yes
                                                        </label>&nbsp;&nbsp;&nbsp;
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="loan_reqs" value="No" onclick="myFunction()"/>No
                                                        </label>
                                                    </div> 
                                                </div>
                                            </div><!--11 line close-->
                                            <br>
                                            <div class="row"><!--10 line-->
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label>25. Amount of Loan Required</label>	
                                                    </div>	
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="form-group">	
                                                        <input class="form-control"  onblur="makethisdecimal(this.id);" name="amt_of_loan" type="text" id="userAnswer1" placeholder="" style="width: 100%;" onkeyup = "ValidateIncome(this)"/>
                                                    </div>
                                                </div>
                                            </div><!--10 line close-->
                                            <br>
                                            <div class="row"><!--10 line-->
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label>26. Salary Account No.</label>	
                                                    </div>	
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="form-group">	
                                                        <input type="text" name="bank_name_ac_no" class="form-control" style="width:100%;" onkeyup = "ValidateNum(this)"/>       
                                                    </div>
                                                </div>
                                            </div><!--10 line close-->
                                            <br>
                                            <div class="row"><!--10 line-->
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label>27. Bank Name</label>	
                                                    </div>	
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="form-group">	
                                                        <input type="text" name="bank_name" class="form-control" style="width:100%;" onkeyup = "Validate(this)"/>       
                                                    </div>
                                                </div>
                                            </div><!--10 line close-->
                                            <br>
                                            <div class="row"><!--10 line-->
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label>28. Mode of Payment</label>	
                                                    </div>	
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="form-group">	
                                                        <select class="form-control" name="payment_mode" id="payment_mode"   onKeyUp='CheckProject(this.value);'> 
                                                            <option value="Cheque">Cheque</option>  
                                                            <option value="Cash">Cash</option>  
                                                            <option value="DD">DD</option>
                                                            <option value="RTGS">RTGS</option>
                                                            <option value="NEFT">NEFT</option>
                                                            <option value="CR_DB_CARD">Card swipe</option>
                                                        </select>       
                                                    </div>
                                                </div>
                                            </div><!--10 line close-->
                                            <br>
                                            <div class="row"><!--10 line-->
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label>29. Booking Amount &nbsp;&nbsp; <i class="fa fa-inr"></i></label>
                                                    </div>	
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="col-xs-5">
                                                        Amount
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <input class="form-control" name="booking_amt" onblur="makethisdecimal(this.id);" onKeyUp="bookingFixed();" type="text" id="booking_amt" placeholder="Amount in &#8377;" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13 || event.charCode == 46) ? null : event.charCode >= 48 && event.charCode <= 57" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row"><!--10 line-->
                                                <div class="col-md-5">

                                                </div>
                                                <div class="col-md-7">                                 
                                                    <div  id="errmsg" style="visibility: hidden; font-weight: bold;">Booking Amount in Cash Should Not Be Not  More than Rs. 20000/- </div>
                                                </div>
                                            </div>
                                            <div class="row"><!--10 line-->
                                                <div class="col-md-5">

                                                </div>
                                                <div class="col-md-7">
                                                    <div class="col-xs-5">
                                                        Cheque/TxN No.
                                                    </div>
                                                    <div class="col-xs-7">
                                                        <input class="form-control" name="cheque_no" type="text" id="userAnswer7" placeholder="Cheque No."/>
                                                    </div>
                                                </div>
                                            </div>
                                            <br><br>
                                            <div class="row"><!--10 line-->
                                                <div class="col-md-5">

                                                </div>
                                                <div class="col-md-7">
                                                    <div class="col-xs-5">
                                                        Date
                                                    </div>
                                                    <div class="col-xs-7">
                                                        <div class="input-group">
                                                            <input class="form-control" id="Chequedatepicker"  name="cheque_date" placeholder="DD-MM-YYYY" type="text"/>       
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!--10 line close-->                                        
                                            <br>
                                            <div class="row"><!--10 line-->
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label>30. Documents Submitted by Customer</label>	
                                                    </div>	
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="form-group">	
                                                        <select id="dates-field2" name="fappl_documents[]" class="multiselect-ui form-control" multiple="multiple">
                                                            <option value="PAN">PAN</option>
                                                            <option value="Adhar_card">Aadhar card</option>
                                                            <option value="Voter_id">Voter id</option>
                                                            <option value="Bank_statement">Bank statement last 6 months</option>
                                                            <option value="Income Tax return last 3 year">Income Tax return last 3 year</option>
                                                            <option value="Salary_slip">Salary slip (3 months)</option>
                                                            <option value="photo">5 Passport size photos</option>
                                                            <option value="form">form 16 last 2 year</option>
                                                        </select>      
                                                    </div>
                                                </div>
                                            </div><!--10 line close-->
                                            <br>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label for="additional_info">31. Any Additional Information/Specific Requirement</label>

                                                    </div>	
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <textarea class="form-control" id="additional_info" name="additional_info" rows="5" id="comment" placeholder="" style="width: 100%;"></textarea>
                                                    </div>
                                                </div>
                                            </div><!--1 line close-->
                                        </div><!-- col-md-8 row --> 
                                    </div><!-- row div close -->   
                                </div>
                            </div>
                        </div>
                    </div> 
                    <br>
                    <div class="row">  
                        <p class="text-center">
                            <input type="submit" name="submit" class="btn btn-success" value="submit"/>
                            <!--   <button id="submit" name="submit" class="btn btn-success" value="1">Submit</button>-->
                            <!--button id="submit" name="submit" class="btn btn-info" value="1">Update</button-->
                            <a href="javascript: history.go(-1)" class="btn btn-default" role="button">Cancel</a>
                        </p> 
                    </div>
                </form><!--form div-->
                <?php
// echo $this->session->userdata('usrname');
// echo $_SERVER['HTTP_REFERER'];
                ?>
            </div><!-- container -->
        </div> <!--End of main div-->
        <script src="<?php echo base_url('resources/js/application_form.js'); ?>" type="text/javascript"></script>
        <script>
                                       
                                                            $(document).ready(function () {
                                                                 $('#toppageheader').html('Application Form');

                                                                var type = $('#unittype').val();
                                                                if (type == 'Plot') {
                                                                    $('#parking1').hide();
                                                                    $('#parking2').hide();
                                                                    $('.show_ground_carpet_area').hide();
                                                                    $('.show_floor_carpet_area').hide();
                                                                    $('.show_total_carpet_area').hide();
                                                                }else if (type == 'Shop'){
                                                                     $('#parking1').hide();
                                                                    $('#parking2').hide();
                                                                    $('.block').hide();
                                                                    $('.show_ground_carpet_area').hide();
                                                                    $('.show_floor_carpet_area').hide();
                                                                    $('.show_total_carpet_area').hide();
                                                                    
                                                                }else if(type == 'Duplex'){
                                                                     $('#parking1').hide();
                                                                    $('#parking2').hide();
                                                                } else {
                                                                    $('#parking1').show();
                                                                    $('#parking2').show();
                                                                    $('.show_ground_carpet_area').show();
                                                                    $('.show_floor_carpet_area').show();
                                                                    $('.show_total_carpet_area').show();
                                                                }


                                                            });

                                                            function makethisdecimal(id)
                                                            {
                                                                var onen = Number(document.getElementById(id).value);
                                                                var a = onen.toFixed(2);
                                                                document.getElementById(id).value = a;

                                                            }
                                                            // applicant image 

                                                            function jj(input) {
                                                                if (input.files && input.files[0]) {
                                                                    var reader = new FileReader();
                                                                    reader.onload = function (e) {
                                                                        $('#profile-img-tag').attr('src', e.target.result);
                                                                    };
                                                                    reader.readAsDataURL(input.files[0]);
                                                                }
                                                            }
                                                            $("#profile-img").change(function () {
                                                                jj(this);
                                                                //alert('joy');
                                                            });

                                                            function removeimg1()
                                                            {
                                                                $('#profile-img-tag').attr('src', '<?php echo base_url('resources/image/f3.png'); ?>');
                                                            }

                                                            // co-applicant image 2

                                                            function rr(input) {
                                                                if (input.files && input.files[0]) {
                                                                    var reader = new FileReader();
                                                                    reader.onload = function (e) {
                                                                        $('#profile-img-tag2').attr('src', e.target.result);
                                                                    };
                                                                    reader.readAsDataURL(input.files[0]);
                                                                }
                                                            }
                                                            $("#profile-img2").change(function () {
                                                                rr(this);
                                                            });

                                                            function removeimg2()
                                                            {
                                                                $('#profile-img-tag2').attr('src', '<?php echo base_url('resources/image/f3.png'); ?>');
                                                            }


                                                            // co-applicant image 3

                                                            function qq(input) {
                                                                if (input.files && input.files[0]) {
                                                                    var reader = new FileReader();
                                                                    reader.onload = function (e) {
                                                                        $('#profile-img-tag3').attr('src', e.target.result);
                                                                    };
                                                                    reader.readAsDataURL(input.files[0]);
                                                                }
                                                            }
                                                            $("#profile-img3").change(function () {
                                                                qq(this);
                                                            });


                                                            function removeimg3()
                                                            {
                                                                $('#profile-img-tag3').attr('src', '<?php echo base_url('resources/image/f3.png'); ?>');
                                                            }

                                                            // co-applicant image 3 End Section

                                                            function getblocks(arg)
                                                            {
                                                                // alert(arg);
                                                                if (arg == 0)
                                                                {
                                                                    var selectptr = document.getElementById('block_name');
                                                                    selectptr.length = 0;
                                                                    var opt = document.createElement('option');
                                                                    opt.value = '0';
                                                                    opt.text = '--Select--';
                                                                    selectptr.appendChild(opt);

                                                                } else
                                                                {
                                                                    $.ajax({
                                                                        type: "POST",
                                                                        url: "<?php echo site_url('main_controller/getprojectblocks'); ?>",
                                                                        data: {arg: arg},
                                                                        success: function (msg) {
                                                                            //alert(msg);
                                                                            var msgarray = msg.split(',');
                                                                            var selectptr = document.getElementById('block_name');
                                                                            selectptr.length = 0;
                                                                            var opt = document.createElement('option');
                                                                            opt.value = '0';
                                                                            opt.text = '--Select--';
                                                                            selectptr.appendChild(opt);
                                                                            for (var i = 0; i < msgarray.length; i++)
                                                                            {
                                                                                var opt = document.createElement('option');
                                                                                //alert("|"+msgarray[i]+"|");
                                                                                opt.value = msgarray[i].trim();
                                                                                opt.text = msgarray[i].trim();
                                                                                selectptr.appendChild(opt);
                                                                            }
                                                                        }
                                                                    });
                                                                }
                                                            }



                                                            function cpy2()
                                                            {
                                                                //alert('helo');
                                                                var j1 = document.getElementById("fappladdr");
                                                                var j2 = document.getElementById("fappladdr2");
                                                                j2.value = j1.value;

                                                            }
                                                            function cpy3()
                                                            {
                                                                //alert('helo');
                                                                var q1 = document.getElementById("n3");
                                                                var q2 = document.getElementById("n4");
                                                                q2.value = q1.value;

                                                            }
                                                            function cpy()
                                                            {
                                                                var k1 = document.getElementById("n1");
                                                                var k2 = document.getElementById("n2");
                                                                k2.value = k1.value;
                                                            }



                                                            function gettype(arg) {
                                                                //alert('hello');
                                                                if (arg == 0)
                                                                {
                                                                    var selptr = document.getElementById('unittype');
                                                                    selptr.length = 0;
                                                                    var opt = document.createElement('option');
                                                                    opt.value = 0;
                                                                    opt.text = '--Select--';
                                                                }
                                                                var pid = document.getElementById('project_name').value;
                                                                var blid = arg;
                                                                //alert(pid+"/"+blid);

                                                                $.ajax({
                                                                    type: "POST",
                                                                    url: "<?php echo site_url('main_controller/getprojecttype'); ?>",
                                                                    data: {plid: pid, blid: blid},
                                                                    success: function (msg) {
                                                                        // alert(msg);
                                                                        var msgarray = msg.split(',');
                                                                        var selptr = document.getElementById('unittype');
                                                                        selptr.length = 0;
                                                                        var opt = document.createElement('option');
                                                                        opt.value = 0;
                                                                        opt.text = '--Select--';
                                                                        selptr.appendChild(opt);
                                                                        for (var i = 0; i < msgarray.length - 1; i++)
                                                                        {
                                                                            var opt = document.createElement('option');
                                                                            opt.value = msgarray[i].trim();
                                                                            opt.text = msgarray[i].trim();
                                                                            selptr.appendChild(opt);
                                                                        }
                                                                    }
                                                                });
                                                            }


                                                            function getcategory()
                                                            {
                                                                // var is_duplex = $('#unittype >option:selected').text();
                                                                var is_duplex = $('#unittype').val();
                                                                //alert(is_duplex);
                                                                if (is_duplex == 'Duplex') {
                                                                    $('.show_parking').hide();
                                                                }


                                                                if (is_duplex != 'Duplex') {
                                                                    $('.show_parking').show();
                                                                }


                                                                if (is_duplex == 'Plot') {
                                                                    $('.show_parking').hide();
                                                                }
                                                                if (is_duplex != 'Plot') {
                                                                    $('.show_parking').show();
                                                                }
                                                                if (is_duplex == 'Plot') {
                                                                    $('.show_wash_area').hide();
                                                                }
                                                                if (is_duplex != 'Plot') {
                                                                    $('.show_wash_area').show();
                                                                }
                                                                if (is_duplex == 'Plot') {
                                                                    $('.show_wash_area').hide();
                                                                }
                                                                if (is_duplex != 'Plot') {
                                                                    $('.show_wash_area').show();
                                                                }
                                                                if (is_duplex == 'Plot') {
                                                                    $('.show_common_area').hide();
                                                                }
                                                                if (is_duplex != 'Plot') {
                                                                    $('.show_common_area').show();
                                                                }
                                                                if (is_duplex == 'Plot') {
                                                                    $('.show_balcony_area').hide();
                                                                }
                                                                if (is_duplex != 'Plot') {
                                                                    $('.show_balcony_area').show();
                                                                }


                                                                if (is_duplex == 'Plot') {
                                                                    $('.show_ground_carpet_area').hide();
                                                                }
                                                                if (is_duplex != 'Plot') {
                                                                    $('.show_ground_carpet_area').show();
                                                                }
                                                                if (is_duplex == 'Plot') {
                                                                    $('.show_floor_carpet_area').hide();
                                                                }
                                                                if (is_duplex != 'Plot') {
                                                                    $('.show_floor_carpet_area').show();
                                                                }
                                                                var pid = document.getElementById('project_name').value;
                                                                var blname = document.getElementById('block_name').value;
                                                                var typename = document.getElementById('unittype').value;
                                                                //alert(pid+"/"+blname+"/"+typename);
                                                                $.ajax({
                                                                 type: "POST",
                                                                 url: "<?php //echo site_url('main_controller/getcategory');                                                ?>",
                                                                 data: {plid: pid, blname: blname, typename: typename},
                                                                 success: function (msg) {
                                                                 //alert(msg);
                                                                 var msgarray = msg.split(',');
                                                                 var selptr = document.getElementById('selcat');
                                                                 selptr.length = 0;
                                                                 var opt = document.createElement('option');
                                                                 opt.value = 0;
                                                                 opt.text = '--Select--';
                                                                 selptr.appendChild(opt);
                                                                 for (var i = 0; i < msgarray.length - 1; i++)
                                                                 {
                                                                 var opt = document.createElement('option');
                                                                 opt.value = msgarray[i].trim();
                                                                 opt.text = msgarray[i].trim();
                                                                 selptr.appendChild(opt)
                                                                 }
                                                                 }
                                                                 });
                                                            }

                                                            function getavailableunits()
                                                            {
                                                                var pid = document.getElementById('project_name').value;
                                                                var blname = document.getElementById('block_name').value;
                                                                var typename = document.getElementById('unittype').value;
                                                                var categoryname = document.getElementById('selcat').value;

                                                                $.ajax({
                                                                    type: "POST",
                                                                    url: "<?php echo site_url('main_controller/getunits'); ?>",
                                                                    data: {plid: pid, blname: blname, typename: typename, categoryname: categoryname},
                                                                    success: function (msg) {
                                                                        //  alert(msg);
                                                                        var msgarray = msg.split(',');
                                                                        var selptr = document.getElementById('selunit');
                                                                        selptr.length = 0;
                                                                        var opt = document.createElement('option');
                                                                        opt.value = 0;
                                                                        opt.text = '--Select--';
                                                                        selptr.appendChild(opt);
                                                                        for (var i = 0; i < msgarray.length - 1; i++)
                                                                        {
                                                                            var opt = document.createElement('option');
                                                                            opt.value = msgarray[i].trim();
                                                                            opt.text = msgarray[i].trim();
                                                                            selptr.appendChild(opt);
                                                                        }
                                                                    }
                                                                });

                                                            }

                                                            function getareas()
                                                            {
                                                                var pid = document.getElementById('project_name').value;
                                                                var blname = document.getElementById('block_name').value;
                                                                var typename = document.getElementById('unittype').value;
                                                                var categoryname = document.getElementById('selcat').value;
                                                                $.ajax({
                                                                    type: "POST",
                                                                    url: "<?php echo site_url('main_controller/searchareas'); ?>",
                                                                    data: {plid: pid, blname: blname, typename: typename, categoryname: categoryname},
                                                                    success: function (msg) {
                                                                        //alert(msg);
                                                                        var msgarray = msg.split(',');


                                                                        if ((msgarray[0] == '') || (typename == 'Duplex'))
                                                                        {
                                                                            document.getElementById('carpet_area').value = 'N/A';
                                                                            document.getElementById('carpet_area').disabled = true;
                                                                        } else {
                                                                            document.getElementById('carpet_area').disabled = false;
                                                                            document.getElementById('carpet_area').value = msgarray[0];
                                                                        }
                                                                        if (msgarray[1] == '')
                                                                        {
                                                                            document.getElementById('floor_carpet_area').value = 'N/A';
                                                                            document.getElementById('floor_carpet_area').disabled = true;
                                                                        } else {
                                                                            document.getElementById('floor_carpet_area').disabled = false;
                                                                            document.getElementById('floor_carpet_area').value = msgarray[1];
                                                                        }
                                                                        if (msgarray[2] == '')
                                                                        {
                                                                            document.getElementById('ground_carpet_area').value = 'N/A';
                                                                            document.getElementById('ground_carpet_area').disabled = true;
                                                                        } else {
                                                                            document.getElementById('ground_carpet_area').value = msgarray[2];
                                                                            document.getElementById('ground_carpet_area').disabled = false;
                                                                        }
                                                                        if (msgarray[3] == '')
                                                                        {
                                                                            document.getElementById('balcony_area').value = 'N/A';
                                                                            document.getElementById('balcony_area').disabled = true;
                                                                        } else {
                                                                            document.getElementById('balcony_area').disabled = false;
                                                                            document.getElementById('balcony_area').value = msgarray[3];
                                                                        }
                                                                        if (msgarray[4] == '')
                                                                        {
                                                                            document.getElementById('common_area').value = 'N/A';
                                                                            document.getElementById('common_area').disabled = true;
                                                                        } else {
                                                                            document.getElementById('common_area').disabled = false;
                                                                            document.getElementById('common_area').value = msgarray[4];
                                                                        }
                                                                        if (msgarray[5] == '')
                                                                        {
                                                                            document.getElementById('wash_area').value = 'N/A';
                                                                            document.getElementById('wash_area').disabled = true;
                                                                        } else {
                                                                            document.getElementById('wash_area').disabled = false;
                                                                            document.getElementById('wash_area').value = msgarray[5];
                                                                        }



                                                                    }
                                                                });
                                                            }



                                                            function getparking()
                                                            {
                                                                var project_id = document.getElementById('pid').value;
                                                                var parking_type = document.getElementById('parking_type').value;
                                                                var block = document.getElementById('block_name').value;
                                                                var type = document.getElementById('unittype').value;
                                                                //alert(pid +block+unit_type+pktype);

                                                                $.ajax({
                                                                    type: "POST",
                                                                    url: "<?php echo site_url('main_controller/Parking'); ?>",
                                                                    data: {project_id:project_id,block:block,type:type,parking_type:parking_type},
                                                                    // data: {plid: pid,type: pktype,block: block},
                                                                    success: function (msg) {
                                                                     // alert(msg);
                                                                        var msgarray = msg.split(',');
                                                                        var selptr = document.getElementById('parking_no');
                                                                        selptr.length = 0;
                                                                        var opt = document.createElement('option');
                                                                        opt.value = 0;
                                                                        opt.text = '--Select--';
                                                                        selptr.appendChild(opt);
                                                                        for (var i = 0; i < msgarray.length - 1; i++)
                                                                        {
                                                                            var opt = document.createElement('option');
                                                                            opt.value = msgarray[i].trim();
                                                                            opt.text = msgarray[i].trim();
                                                                            selptr.appendChild(opt);
                                                                        }
                                                                    }
                                                                });

                                                            }

                                                            function showdiv() {
                                                                // check if project details exist already
                                                                //alert('Im here!!');

                                                                var m = $('#unittype').val();
                                                                //var m = document.getElementById('unittype');
                                                                //if ((m.options[m.selectedIndex].text == 'Flat') || (m.options[m.selectedIndex].text == 'Row House') || (m.options[m.selectedIndex].text == 'Shop') || (m.options[m.selectedIndex].text == 'Plot'))
                                                                if ((m == 'Duplex'))
                                                                {
                                                                    //document.getElementById('show_div').style.display = "none";
                                                                    $('#show_div').hide();
                                                                } else
                                                                {
                                                                    //document.getElementById('show_div').style.display = "block";
                                                                    $('#show_div').show();
                                                                }
                                                                // return m;
                                                            }

                                                                   function bookingFixed()
                                                            {
                                                                  var block = document.getElementById('block_name').value;
                                                                  if(block =='Phase-1'){}else{
                                                                       var mode = document.getElementById('payment_mode').value;
                                                                if (mode == 'Cash')
                                                                {


                                                                    var a = document.getElementById('booking_amt').value;
                                                                    var b = parseInt(a);

                                                                    if (a > 20000)
                                                                    {

                                                                        //alert(a);
                                                                        //document.getElementById('errmsg').style.display=inline;
                                                                        $("#errmsg").css('visibility', 'visible');
                                                                        $("#errmsg").css('color', 'red');

                                                                        document.getElementById('booking_amt').value = "";
                                                                        //document.purchaseData.errorname.value = a;

                                                                    } else
                                                                    {
                                                                        $("#errmsg").css('visibility', 'hidden');
                                                                    }
                                                                }
                                                                  }
                                                                
                                                               
                                                            }

        </script>
        <script>
            $(function () {
                $("#date").datepicker({
                    dateFormat: 'dd-mm-yy',
                    changeMonth: true,
                    changeYear: true,
                    yearRange: '-100y:c+100'
                });
            });
            $(function () {
                $("#date2").datepicker({
                    dateFormat: 'dd-mm-yy',
                    changeMonth: true,
                    changeYear: true,
                    yearRange: '-100y:c+100'
                });
            });
            $(function () {
                $("#date3").datepicker({
                    dateFormat: 'dd-mm-yy',
                    changeMonth: true,
                    changeYear: true,
                    yearRange: '-100y:c+100'
                });
            });
            $(function () {
                $("#datepicker").datepicker({
                    dateFormat: 'dd-mm-yy',
                    changeMonth: true,
                    changeYear: true,
                    yearRange: '-100y:c+100'
                });
            });
            $(function () {
                $("#cadojdatepicker").datepicker({
                    dateFormat: 'dd-mm-yy',
                    changeMonth: true,
                    changeYear: true,
                    yearRange: '-100y:c+100'
                });
            });
            $(function () {
                $("#cadojdatepicker_1").datepicker({
                    dateFormat: 'dd-mm-yy',
                    changeMonth: true,
                    changeYear: true,
                    yearRange: '-100y:c+100'
                });
            });
            $(function () {
                $("#Chequedatepicker").datepicker({
                    dateFormat: 'dd-mm-yy',
                    changeMonth: true,
                    changeYear: true,
                    yearRange: '-100y:c+100'
                });
            });



            function email_validate(email)
            {
                var regMail = /^([_a-zA-Z0-9-]+)(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+([a-zA-Z]{2,3})$/;

                if (regMail.test(email) === false)
                {
                    document.getElementById("statusAppemail").innerHTML = "<span class='warning'>Email address is Invalid.</span>";
                } else
                {
                    document.getElementById("statusAppemail").innerHTML = "";
                }
            }
            function pan_validate(pan)
            {
                var regPan = /^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}?$/;

                if (regPan.test(pan) === false)
                {
                    document.getElementById("statusAppPan").innerHTML = "<span class='warning'>Invalid.</span>";
                } else
                {
                    document.getElementById("statusAppPan").innerHTML = "";
                }
            }
            function pan_validate2(pan)
            {
                var regPan = /^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}?$/;

                if (regPan.test(pan) === false)
                {
                    document.getElementById("statusAppPan2").innerHTML = "<span class='warning'>Invalid.</span>";
                } else
                {
                    document.getElementById("statusAppPan2").innerHTML = "";
                }
            }
            function pan_validate3(pan)
            {
                var regPan = /^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}?$/;

                if (regPan.test(pan) === false)
                {
                    document.getElementById("statusAppPan3").innerHTML = "<span class='warning'>Invalid.</span>";
                } else
                {
                    document.getElementById("statusAppPan3").innerHTML = "";
                }
            }
            function q1_validate(q)
            {
                var regQ = /^[0-9a-zA-Z\_\. ]+$/;

                if (regQ.test(q) === false)
                {
                    document.getElementById("statusAppQ1").innerHTML = "<span class='warning'>Invalid.</span>";
                } else
                {
                    document.getElementById("statusAppQ1").innerHTML = "";
                }
            }
            function q2_validate(q)
            {
                var regQ = /^[0-9a-zA-Z\_\. ]+$/;

                if (regQ.test(q) === false)
                {
                    document.getElementById("statusAppQ2").innerHTML = "<span class='warning'>Invalid.</span>";
                } else
                {
                    document.getElementById("statusAppQ2").innerHTML = "";
                }
            }
            function q3_validate(q)
            {
                var regQ = /^[0-9a-zA-Z\_\. ]+$/;

                if (regQ.test(q) === false)
                {
                    document.getElementById("statusAppQ3").innerHTML = "<span class='warning'>Invalid.</span>";
                } else
                {
                    document.getElementById("statusAppQ3").innerHTML = "";
                }
            }
            function email_validate2(email)
            {
                var regMail = /^([_a-zA-Z0-9-]+)(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+([a-zA-Z]{2,3})$/;

                if (regMail.test(email) === false)
                {
                    document.getElementById("statuscoemail").innerHTML = "<span class='warning'>Email address is Invalid.</span>";
                } else
                {
                    document.getElementById("statuscoemail").innerHTML = "";
                }
            }
            function email_validate3(email)
            {
                var regMail = /^([_a-zA-Z0-9-]+)(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+([a-zA-Z]{2,3})$/;

                if (regMail.test(email) === false)
                {
                    document.getElementById("statuscoemail3").innerHTML = "<span class='warning'>Email address is Invalid.</span>";
                } else
                {
                    document.getElementById("statuscoemail3").innerHTML = "";
                }
            }


            function pincode_validate(pin_code)
            {
                var regPincode = /^\d{}$|^\d{6}$/;

                if (regPincode.test(pin_code) === false)
                {
                    document.getElementById("statuspincode").innerHTML = "<span class='warning'>Pincode is Invalid.</span>";
                } else
                {
                    document.getElementById("statuspincode").innerHTML = "";
                }
            }
            function pincode_validate2(pin_code)
            {
                var regPincode = /^\d{}$|^\d{6}$/;

                if (regPincode.test(pin_code) === false)
                {
                    document.getElementById("statuspincode2").innerHTML = "<span class='warning'>Pincode is Invalid.</span>";
                } else
                {
                    document.getElementById("statuspincode2").innerHTML = "";
                }
            }
            function pincode_validate3(pin_code)
            {
                var regPincode = /^\d{}$|^\d{6}$/;

                if (regPincode.test(pin_code) === false)
                {
                    document.getElementById("statuspincode3").innerHTML = "<span class='warning'>Pincode is Invalid.</span>";
                } else
                {
                    document.getElementById("statuspincode3").innerHTML = "";
                }
            }


            function Emppincode_validate(pin_code)
            {
                var regPincode = /^\d{}$|^\d{6}$/;

                if (regPincode.test(pin_code) === false)
                {
                    document.getElementById("statusemppincode").innerHTML = "<span class='warning'>Pincode is Invalid</span>";
                } else
                {
                    document.getElementById("statusemppincode").innerHTML = "";
                }
            }
            function Emppincode_validate2(pin_code)
            {
                var regPincode = /^\d{}$|^\d{6}$/;

                if (regPincode.test(pin_code) === false)
                {
                    document.getElementById("statusemppincode2").innerHTML = "<span class='warning'>Pincode is Invalid</span>";
                } else
                {
                    document.getElementById("statusemppincode2").innerHTML = "";
                }
            }
            function Emppincode_validate3(pin_code)
            {
                var regPincode = /^\d{}$|^\d{6}$/;

                if (regPincode.test(pin_code) === false)
                {
                    document.getElementById("statusemppincode3").innerHTML = "<span class='warning'>Pincode is Invalid</span>";
                } else
                {
                    document.getElementById("statusemppincode3").innerHTML = "";
                }
            }
            function mobile_validate(mobile)
            {
                var regPincode = /^([789][0-9]{9,9})+$/;
                ;

                if (regPincode.test(mobile) === false)
                {
                    document.getElementById("statusmobile").innerHTML = "<span class='warning'>Mobile Number is  Invalid .</span>";
                } else
                {
                    document.getElementById("statusmobile").innerHTML = "";
                }
            }
            function mobile_validate2(mobile)
            {
                var regPincode = /^([789][0-9]{9,9})+$/;
                ;

                if (regPincode.test(mobile) === false)
                {
                    document.getElementById("statusmobile2").innerHTML = "<span class='warning'>Mobile Number is Invalid.</span>";
                } else
                {
                    document.getElementById("statusmobile2").innerHTML = "";
                }
            }
            function mobile_validate3(mobile)
            {
                var regPincode = /^([789][0-9]{9,9})+$/;
                ;

                if (regPincode.test(mobile) === false)
                {
                    document.getElementById("statusmobile3").innerHTML = "<span class='warning'>Mobile Number is Invalid.</span>";
                } else
                {
                    document.getElementById("statusmobile3").innerHTML = "";
                }
            }


            // validates text only
            function Validate(txt) {
                txt.value = txt.value.replace(/[^a-zA-Z-'\n\r.{ }]+/g, '');
            }
            function Validate1(txt) {
                txt.value = txt.value.replace(/[^a-zA-Z-'\0-9\n\r.{ }]+/g, '');
            }
            // validates number only
            function ValidateNum(num) {
                num.value = num.value.replace(/[\\A-Za-z!"£$%^&\,*+_={};:'@#~,.Š\/<>?|`¬\]\[]/g, '');
            }
            function ValidateIncome(num) {
                num.value = num.value.replace(/[\\A-Za-z!"£$%^&\,*+_={};:'@#~,Š\/<>?|`¬\]\[]/g, '');
            }
            function aadhar_validate(aadhar)
            {
                var regPincode = /^\d{}$|^\d{12}$/;

                if (regPincode.test(aadhar) === false)
                {
                    document.getElementById("statusaadhaar").innerHTML = "<span class='warning'>aadhaar is Invalid</span>";
                } else
                {
                    document.getElementById("statusaadhaar").innerHTML = "";
                }
            }
            function aadhar_validate2(aadhar)
            {
                var regPincode = /^\d{}$|^\d{12}$/;

                if (regPincode.test(aadhar) === false)
                {
                    document.getElementById("statusaadhaar2").innerHTML = "<span class='warning'>aadhaar is Invalid</span>";
                } else
                {
                    document.getElementById("statusaadhaar2").innerHTML = "";
                }
            }
            function aadhar_validate3(aadhar)
            {
                var regPincode = /^\d{}$|^\d{12}$/;

                if (regPincode.test(aadhar) === false)
                {
                    document.getElementById("statusaadhaar3").innerHTML = "<span class='warning'>aadhaar is Invalid</span>";
                } else
                {
                    document.getElementById("statusaadhaar3").innerHTML = "";
                }
            }

            function validateForm()
            {
                var present_addr = document.forms["Form"]["present_addr"].value;
                var fa_occupation = document.forms["Form"]["fa_occupation"].value;
                var email = document.forms["Form"]["email"].value;
                var fappl_age = document.forms["Form"]["fappl_age"].value;
                if (present_addr == null || present_addr == "")
                {
                    alert("Please Fill Applicant Present Address");
                    return false;
                } else if (fa_occupation == null || fa_occupation == "") {
                    alert("Please Fill Applicant Occupation");
                    return false;
                } else if (email == null || email == "") {
                    alert("Please Fill Applicant Email");
                    return false;
                } else if (fappl_age == null || fappl_age == "" || fappl_age == 'Not Eligible') {
                    alert(" Applicant Age Is less than 18");
                    return false;
                }
            }

            //---------------replace CR with semicolon and space in a textarea------------------

            $("#dependent_app").on("keydown", function (event) {
                //alert('A key has been entered.');
                var str = $('#dependent_app').val();
                if (event.which == 13) {
                    //console.log('Enter has been entered.');
                    event.preventDefault();
                    $('#dependent_app').val(str + ', ');
                    //alert('Enter Key has been entered.');
                }
            });

            //--------------------------------
            //---------------replace CR with semicolon and space in a textarea------------------

            $("#additional_info").on("keydown", function (event) {
                //alert('A key has been entered.');
                var str = $('#additional_info').val();
                if (event.which == 13) {
                    //console.log('Enter has been entered.');
                    event.preventDefault();
                    $('#additional_info').val(str + '; ');
                    //alert('Enter Key has been entered.');
                }
            });

            //--------------------------------

            $(document).ready(function () {
                $(window).keydown(function (event) {
                    if (event.keyCode == 13) {
                        event.preventDefault();
                        return false;
                    }
                });
            });
            $('#payment_mode').change(function () {
                if ($(this).val() == 'Cheque') {
                    $('#userAnswer7').prop("disabled", false);
                } else {
                    $('#userAnswer7').prop("disabled", true);
                }
            });

            jQuery('#txt_firstCapital').keyup(function ()
            {
                var str = jQuery('#txt_firstCapital').val();
                var spart = str.split(" ");
                for (var i = 0; i < spart.length; i++)
                {
                    var j = spart[i].charAt(0).toUpperCase();
                    spart[i] = j + spart[i].substr(1);
                }
                jQuery('#txt_firstCapital').val(spart.join(" "));
            });

            jQuery('#txt_firstCapital1').keyup(function ()
            {
                var str = jQuery('#txt_firstCapital1').val();
                var spart = str.split(" ");
                for (var i = 0; i < spart.length; i++)
                {
                    var j = spart[i].charAt(0).toUpperCase();
                    spart[i] = j + spart[i].substr(1);
                }
                jQuery('#txt_firstCapital1').val(spart.join(" "));
            });
            jQuery('#txt_firstCapital2').keyup(function ()
            {
                var str = jQuery('#txt_firstCapital2').val();
                var spart = str.split(" ");
                for (var i = 0; i < spart.length; i++)
                {
                    var j = spart[i].charAt(0).toUpperCase();
                    spart[i] = j + spart[i].substr(1);
                }
                jQuery('#txt_firstCapital2').val(spart.join(" "));
            });
            jQuery('#txt_firstCapital3').keyup(function ()
            {
                var str = jQuery('#txt_firstCapital3').val();
                var spart = str.split(" ");
                for (var i = 0; i < spart.length; i++)
                {
                    var j = spart[i].charAt(0).toUpperCase();
                    spart[i] = j + spart[i].substr(1);
                }
                jQuery('#txt_firstCapital3').val(spart.join(" "));
            });
            jQuery('#txt_firstCapital1').keyup(function ()
            {
                var str = jQuery('#txt_firstCapital1').val();
                var spart = str.split(" ");
                for (var i = 0; i < spart.length; i++)
                {
                    var j = spart[i].charAt(0).toUpperCase();
                    spart[i] = j + spart[i].substr(1);
                }
                jQuery('#txt_firstCapital1').val(spart.join(" "));
            });
            jQuery('#txt_firstCapital4').keyup(function ()
            {
                var str = jQuery('#txt_firstCapital4').val();
                var spart = str.split(" ");
                for (var i = 0; i < spart.length; i++)
                {
                    var j = spart[i].charAt(0).toUpperCase();
                    spart[i] = j + spart[i].substr(1);
                }
                jQuery('#txt_firstCapital4').val(spart.join(" "));
            });

            jQuery('#name').keyup(function ()
            {
                var str = jQuery('#name').val();
                var spart = str.split(" ");
                for (var i = 0; i < spart.length; i++)
                {
                    var j = spart[i].charAt(0).toUpperCase();
                    spart[i] = j + spart[i].substr(1);
                }
                jQuery('#name').val(spart.join(" "));
            });

        </script>

    </body>
</html>
