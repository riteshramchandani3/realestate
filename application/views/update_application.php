<html>

    <head>
        <title>Update Application</title>
        <?php
        include_once 'assets/html_head_links.php';
        ?>
        <style type="text/css">
            input{
                border: none;
                border-bottom: 1px solid;
            }
            input[type=text]:disabled {

                background: white;
            }

            @media print
            {
                /*@page {size: landscape}*/
                .non-printable { display: none; }
                #printable { display: block;}
            }

            a.clickable {
                display: inline-block;
                padding: 6px 12px;
                border-radius: 4px;
                cursor: pointer;
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
            .thumbnail img {
                height:200px;
                width:100%;
            }
            .thumbnail{ border: 1px solid #fff !important; }
            .row{padding: 5px !important;}
            .form-group{ width: 100% !important;}
            textarea { resize:none; }
            .form-control{ width: 100% !important; }
            .form-group { margin-bottom: 0px !important; }

            .col-md-1{
                padding-left: 0px; 
            } 

            img:after {  
                content: "" " " attr(alt);

                font-size: 16px;
                font-family: FontAwesome;
                color: rgb(100, 100, 100);

                display: block;
                position: absolute;
                z-index: 2;
                top: 0;
                left: 0;
                width: 100%;
                height: 78%;
                background-color: #fff;

            }
            .thumbnail .caption {
                margin-top: 50px;
            }
            textarea {
                resize: none;
            }
            .status{
                color: red;
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

        <?php
        $user = $this->input->get('id');
        //  print_r( $user); echo'<br/>';
        foreach ($this->View_applicant_info->get_projectinfo($user) as $row) {
            ?>
            <?php $first_floor_carpet_area = $row->first_floor_carpet_area; ?>

            <?php $ffresult = $first_floor_carpet_area; ?>

            <?php $ground_floor_carpet_area = $row->ground_floor_carpet_area; ?>

            <?php $ggresult = $ground_floor_carpet_area; ?>
        <?php } ?>
        <?php
        $id = $this->input->get('id');
        $explode_data = explode('?', $id);
        $idr = $explode_data[0];
        $pid = $explode_data[1];
        $unit_no = $explode_data[2];
        ?>
        <?php
        $user = $this->input->get('id');

        //  print_r( $user); echo'<br/>';
        foreach ($this->View_applicant_info->get_applicant_info($user) as $row) {
            ?>
            <?php $appl_id = $row->id; ?>
            <?php $name = $row->name; ?>
            <?php $mr_mrs = $row->mr_mrs; ?>
            <?php $son_doughter_wife = $row->son_doughter_wife; ?>
            <?php $fappl_dob = $row->fappl_dob ?>
            <?php $fappl_age = $row->fappl_age ?>
            <?php $son_doughter_wife = $row->son_doughter_wife ?>
            <?php $son_doughter_wife_mr_mrs = $row->son_doughter_wife_mr_mrs ?>
            <?php $swd_of = $row->swd_of ?>
            <?php $present_addr = $row->present_addr ?>
            <?php $permanent_addr = $row->permanent_addr ?>
            <?php $pin_code = $row->pin_code ?>
            <?php $contact_mobile = $row->contact_mobile ?>
            <?php $contact_landline = $row->contact_landline ?>
            <?php $email = $row->email ?>
            <?php $aadhar_no = $row->aadhar_no ?>
            <?php $pan = $row->pan ?>
            <?php $qualification = $row->qualification ?>
            <?php $occupation = $row->occupation ?>
            <?php $company_name = $row->company_name ?>
            <?php $appl_doj = $row->appl_doj ?>
            <?php $appl_dept = $row->appl_dept ?>
            <?php $appl_monthly_income = $row->appl_monthly_income ?>
            <?php $fa_empl_addr = $row->fa_empl_addr ?>
            <?php $pin_code_emp = $row->pin_code_emp ?>
            <?php $earning_members = $row->earning_members ?>
            <?php $no_of_dependent = $row->no_of_dependent ?>
            <?php $dependents_details = $row->dependents_details ?>
            <?php $solo_coowner = $row->solo_coowner ?>
            <?php $loan_reqs = $row->loan_reqs ?>
            <?php $amt_of_loan = $row->amt_of_loan ?>
            <?php $bank_name = $row->bank_name ?>
            <?php $acc_no = $row->acc_no ?>
            <?php $mode_of_payment = $row->mode_of_payment ?>
            <?php $booking_amt = $row->booking_amt ?>
            <?php $cheque_no = $row->cheque_no ?>
            <?php $cheque_dt = $row->cheque_dt ?>
            <?php $date = $row->date ?>
            <?php $fappl_documents = $row->fappl_documents ?>
            <?php $additional_info = $row->additional_info ?>
            <?php $parking_type = $row->parking_type ?>
            <?php $date = $row->date ?>
            <?php $img_path = $row->img_path ?>
            <?php $appl_desig = $row->appl_desig ?>
            <?php $project_id = $row->project_id ?>
            <?php $pre_salesid = $row->pre_salesid ?>
        <?php } ?>
        <?php
        $user = $this->input->get('id');
        //  print_r( $user); echo'<br/>';
        foreach ($this->View_applicant_info->get_inventory_info($user) as $row) {
            ?>


            <?php $unit_no = $row->unit_no ?>
            <?php $block = $row->block ?>
            <?php $type = $row->type ?>
            <?php $category = $row->category ?>
            <?php $status = $row->status ?>
            <?php $east_by = $row->east_by ?>
            <?php $west_by = $row->west_by ?>
            <?php $north_by = $row->north_by ?>
            <?php $south_by = $row->south_by ?>


            <?php $gf_carpet_area_price = $row->gf_carpet_area_price ?>
            <?php $ff_carpet_area_price = $row->ff_carpet_area_price ?>
            <?php $carpet_area_price = $row->carpet_area_price ?>

        <?php } ?>

        <?php
        $user = $this->input->get('id');
        //  print_r( $user); echo'<br/>';
        foreach ($this->View_applicant_info->get_co_applicant_info($user) as $row) {
            ?>
            <?php $appl_id = $row->first_appl_id; ?>
            <?php $ca_name = $row->ca_name ?>
            <?php $ca_mr_mrs = $row->ca_mr_mrs; ?>
            <?php $ca_dob = $row->ca_dob ?>
            <?php $ca_age = $row->ca_age ?>
            <?php $ca_swd_of = $row->ca_swd_of ?>
            <?php $ca_son_doughter_wife = $row->ca_son_doughter_wife ?>
            <?php $ca_son_doughter_wife_mr_mrs = $row->ca_son_doughter_wife_mr_mrs ?>
            <?php $co_present_add = $row->co_present_add ?>
            <?php $co_parma_add = $row->co_parma_add ?>
            <?php $ca_pincode = $row->ca_pincode ?>
            <?php $ca_mo_no = $row->ca_mo_no ?>
            <?php //$ca_landline_no = $row->ca_landline_no ?>
            <?php $ca_email = $row->ca_email ?>
            <?php $ca_aadhar_no = $row->ca_aadhar_no ?>
            <?php $ca_pan = $row->ca_pan ?>
            <?php $ca_Qualification = $row->ca_Qualification ?>
            <?php $ca_occupation = $row->ca_occupation ?>
            <?php $ca_company_name = $row->ca_company_name ?>
            <?php $ca_doj = $row->ca_doj ?>
            <?php $ca_desig = $row->ca_desig ?>
            <?php $ca_department = $row->ca_department ?>
            <?php $ca_addr_of_employer = $row->ca_addr_of_employer ?>
            <?php $ca_addr_of_pincode = $row->ca_addr_of_pincode ?>
            <?php $ca_monthly_income = $row->ca_monthly_income ?>
            <?php $ca_bank_name_ac_no = $row->ca_bank_name_ac_no ?>
            <?php $ca_img_path = $row->ca_img_path ?>

        <?php } ?>

        <?php
        $user = $this->input->get('id');
        //  print_r( $user); echo'<br/>';
        foreach ($this->View_applicant_info->get_co_applicant_info1($user) as $row) {
            ?>
            <?php $appl_id_1 = $row->first_appl_id_1; ?>
            <?php $ca_name_1 = $row->ca_name_1 ?>
            <?php $ca_mr_mrs_1 = $row->ca_mr_mrs_1; ?>
            <?php $ca_dob_1 = $row->ca_dob_1 ?>
            <?php $ca_age_1 = $row->ca_age_1 ?>
            <?php $ca_swd_of_1 = $row->ca_swd_of_1 ?>
            <?php $ca_son_doughter_wife_1 = $row->ca_son_doughter_wife_1 ?>
            <?php $ca_son_doughter_wife_mr_mrs_1 = $row->ca_son_doughter_wife_mr_mrs_1 ?>
            <?php $co_present_add_1 = $row->co_present_add_1 ?>
            <?php $co_parma_add_1 = $row->co_parma_add_1 ?>
            <?php $ca_pincode_1 = $row->ca_pincode_1 ?>
            <?php $ca_mo_no_1 = $row->ca_mo_no_1 ?>
            <?php $ca_landline_no_1 = $row->ca_landline_no_1 ?>
            <?php $ca_email_1 = $row->ca_email_1 ?>
            <?php $ca_aadhar_no_1 = $row->ca_aadhar_no_1 ?>
            <?php $ca_pan_1 = $row->ca_pan_1 ?>
            <?php $ca_Qualification_1 = $row->ca_Qualification_1 ?>
            <?php $ca_occupation_1 = $row->ca_occupation_1 ?>
            <?php $ca_company_name_1 = $row->ca_company_name_1 ?>
            <?php $ca_doj_1 = $row->ca_doj_1 ?>
            <?php $ca_desig_1 = $row->ca_desig_1 ?>
            <?php $ca_department_1 = $row->ca_department_1 ?>
            <?php $ca_addr_of_employer_1 = $row->ca_addr_of_employer_1 ?>
            <?php $ca_addr_of_pincode_1 = $row->ca_addr_of_pincode_1 ?>
            <?php $ca_monthly_income_1 = $row->ca_monthly_income_1 ?>
            <?php $ca_bank_name_ac_no_1 = $row->ca_bank_name_ac_no_1 ?>
            <?php $ca_img_path_1 = $row->ca_img_path_1 ?>

        <?php } ?>


        <?php
        foreach ($this->View_applicant_info->view_sheet1($pre_salesid) as $row) {
            ?>
            <?php $project_id = $row->project_id; ?>
            <?php // $name = $row->name; ?>
            <?php //$mobile = $row->mobile; ?>
            <?php $block = $row->block; ?>
            <?php $category = $row->category; ?>
            <?php $type = $row->type; ?>
            <?php $unit_no = $row->unit_no; ?>
            <?php $plot_size_mtr = $row->plot_size_mtr; ?>
            <?php $plot_size_ft = $row->plot_size_ft; ?>
            <?php $total_cost = $row->total_cost; ?>
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

        <?php
        $user = $this->input->get('id');
        //  print_r( $user); echo'<br/>';
        foreach ($this->View_applicant_info->get_project_info($user) as $row) {
            ?>
            <?php $project_name = $row->project_name; ?>
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
        $user = $this->input->get('id');
        //  print_r( $user); echo'<br/>';
        foreach ($this->View_applicant_info->get_parking_info($user) as $row) {
            ?>
            <?php $parking_no = $row->parking_no; ?>

        <?php } ?>  

        <?php
        $user = $this->input->get('id');
        //  print_r( $user); echo'<br/>';
        foreach ($this->Realestate_model->getintrest($user) as $row) {
            ?>

            <?php echo $rate= $row->rate; ?>
        <?php } ?>



        <div class="non-printable">
            <?php
            require_once('assets/top_menu.php');
            require_once('assets/side_menu.php');
            ?>       
        </div>
        <div class="main">
            <div class="container">

                <a href="<?php echo site_url('View_ctrl/do_application_search'); ?>" class="btn btn-primary pull-right clickable" role="button">Go Back</a>
            </div>
            <div class="container" style="border: 1px solid #000;margin-bottom: 70px; margin-top: 30px; font-size: 12px;">
                <div id="printable">
                    <!--address start ----->

                    <form action="<?php echo site_url('Main_controller/takeupsdateinputs'); ?>" method="post" class="form-inline" name="Form"  enctype="multipart/form-data" onsubmit="return validateForm()" autocomplete="off">

                        <div class="row">  
                            <table class="table table-bordered text-center">
                                <tr>
                                    <td>

                                        <div class="col-md-4 col-sm-4 col-xs-4 text-left">
                                            <?php
                                            foreach ($this->Company_info_model->get_company_info() as $row) {
                                                ?> 
                                                <label><?php echo $row->attribute; ?></label>&nbsp;&nbsp;
                                                <label><?php echo $row->value; ?></label>
                                            <?php } ?>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-4">
                                            <label>Application Number:-</label> &nbsp;<label><?php echo $appl_id; ?></label>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-4 text-right">
                                            <label>Date:&nbsp;</label> 
                                            <label> <?php
                                                $x = explode(' ', $date);
                                                $date = new DateTime($x[0]);
                                                echo $date->format('d-m-Y');
                                                ?></label> 

                                            <!--label id="date22" style="float: left;"> </label-->
                                        </div>
                                    </td>
                                </tr>
                            </table>  
                        </div>

                        <!--address area is end----->

                        <!--project ----->

                        <div class="row">
                            <div class="col-md-7">
                                <label>Project : <?php echo $project_name . '&nbsp;' . $block; ?></label>
                                <input type="hidden" name="id" value="<?php echo $appl_id; ?>"/>
                                <input type="hidden" value="<?php echo $project_id; ?>"/>
                                <input type="hidden" name="project_name" value="<?php echo $project_name; ?>"/>
                                  <input type="hidden" id='block_name' name="block" class="form-control"  value="<?php echo $block; ?>" />
                                <input type="text" class="form-control" name="example" id="example" style='display:none;'/>

                                <!-- image row -------------------------------image row-------------------------------------------------------------------- -->

                                <div class="row text-center">
                                    <div class="col-md-4">
                                        <div class="thumbnail">
                                            <img src="<?php echo base_url($img_path); ?>" height="300" width="150" name="applicant_img" id="profile-img-tag" class="img-rounded img-responsive"/>
                                            <div class="caption">
                                                <div class="row">
                                                    <div class="col-md-6">                                                                                                    
                                                        <input type="file" name="img_path" value="<?php echo base_url($img_path); ?>" id="profile-img" style="margin-bottom: 20px;">
                                                    </div>
                                                    <div class="col-md-2"> 
                                                        <a href="<?php echo site_url('Main_controller/del_coapp2_image?id=' . $appl_id . '?' . $project_id . '?' . $unit_no . '') ?>" class="btn btn-danger" style="padding: 3px 5px;"><i class="fa fa-times"></i></a>
                                                    </div>                                            
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="thumbnail">
                                            <img src="<?php echo base_url($ca_img_path); ?>" height="300" width="150" name="coapplicant_img" id="profile-img-tag2" class="img-rounded img-responsive"/>
                                            <div class="caption">
                                                <div class="row">
                                                    <div class="col-md-6">                                                                                                    
                                                        <input type="file" name="ca_img_path" value="<?php echo base_url($ca_img_path); ?>" id="profile-img2" style="margin-bottom: 20px;">
                                                    </div>
                                                    <div class="col-md-2"> 
                                                        <a href="<?php echo site_url('Main_controller/del_coapp_image?id=' . $appl_id . '?' . $project_id . '?' . $unit_no . '') ?>" class="btn btn-danger" style="padding: 3px 5px;"><i class="fa fa-times"></i></a>
                                                    </div>                                            
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="thumbnail">
                                            <img src="<?php echo base_url($ca_img_path_1); ?>" height="300" width="150" name="coapplicant_img_1" id="profile-img-tag3" class="img-rounded img-responsive"/>
                                            <div class="caption">
                                                <div class="row">
                                                    <div class="col-md-6">                                                                                                    
                                                        <input type="file" name="ca_img_path_1" value="<?php echo base_url($ca_img_path_1); ?>" id="profile-img3" style="margin-bottom: 20px;">
                                                    </div>
                                                    <div class="col-md-2"> 
                                                        <a href="<?php echo site_url('Main_controller/del_coapp1_image?id=' . $appl_id . '?' . $project_id . '?' . $unit_no . '') ?>" class="btn btn-danger" style="padding: 3px 5px;"><i class="fa fa-times"></i></a>
                                                    </div>                                            
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- image row -------------------------------image row-------------------------------------------------------------------- -->

                            </div>
                            <div class="col-md-5">
                                <!--5 line close-->

                                <div class="row"><!--Mobile number-->
                                    <div class="col-md-6 col-xs-6">
                                        <div class="form-group">
                                            <label>Unit No. </label>
                                        </div>	
                                    </div>

                                    <div class="col-md-6 col-xs-6">
                                        <div class="form-group">
                                            <label><?php echo $unit_no; ?></label>
                                            <input type="hidden" value="<?php echo $unit_no; ?>" name="unit_no"/>
                                        </div>
                                    </div>
                                </div><!--5 line close-->

                                <div class="row"><!--Mobile number-->
                                    <div class="col-md-6  col-xs-6">
                                        <div class="form-group">
                                            <label>Type </label>
                                        </div>	
                                    </div>

                                    <div class="col-md-6 col-xs-6">
                                        <div class="form-group">
                                            <label><?php echo $type; ?></label>
                                            <input type="hidden" id="unittype" value="<?php echo $type; ?>" />
                                        </div>
                                    </div>
                                </div><!--5 line close-->
 <?php if($type == 'Shop'){ }else{ ?>
                                <div class="row"><!--Mobile number-->
                                    <div class="col-md-6  col-xs-6">
                                        <div class="form-group">
                                            <label>Block </label>
                                        </div>	
                                    </div>

                                    <div class="col-md-6 col-xs-6">
                                        <div class="form-group">
                                            <label><?php echo $category; ?></label>
                                        </div>
                                    </div>
                                </div><!--5 line close-->
 <?php }?>

                                             <?php if(($type == 'Flat') || ($type == 'Shop')  ){ ?>
                                                    
                                              <?php  }else{ ?>
                                <div class="row"><!--Mobile number-->
                                    <div class="col-md-6 col-xs-6">
                                        <div class="form-group">
                                            <label>Plot Size  </label>
                                        </div>	
                                    </div>

                                    <div class="col-md-6 col-xs-6">
                                        <div class="form-group">

                                            <label><?php echo number_format((float) $length_m, 2, '.', ''); ?> x <?php echo number_format((float) $width_m, 2, '.', ''); ?> &nbsp;&nbsp;&nbsp;Sq. Mt.</label> 

                                        </div>
                                    </div>
                                </div><!--5 line close-->
                                <div class="row"><!--Mobile number-->
                                    <div class="col-md-6 col-xs-6">
                                        <div class="form-group">
                                            <label>Plot Area  </label>
                                        </div>	
                                    </div>

                                    <div class="col-md-6 col-xs-6">
                                        <div class="form-group">

                                            <label><?php echo number_format((float) $length_m * $width_m, 2, '.', ''); ?>  &nbsp;&nbsp;&nbsp;Sq. Mt. 

                                        </div>
                                    </div>
                                </div><!--5 line close-->
                                <div class="row ffca"><!--Mobile number-->
                                    <div class="col-md-6 col-xs-6">
                                        <div class="form-group">
                                            <label>First Floor Carpet Area </label>
                                        </div>	
                                    </div>

                                    <div class="col-md-6 col-xs-6">
                                        <div class="form-group">

                                            <label><?php echo number_format((float) $ffresult, 2, '.', ''); ?> &nbsp;&nbsp;&nbsp;Sq. Mt. &nbsp;&nbsp;&nbsp;
                                                <?php echo number_format((float) $ffresult * 10.76, 2, '.', ''); ?>&nbsp;&nbsp;&nbsp;Sq. Ft.</label> 
                                        </div>
                                    </div>
                                </div><!--5 line close-->




                                <div class="row gfca"><!--Mobile number-->
                                    <div class="col-md-6  col-xs-6">
                                        <div class="form-group">
                                            <label>Ground Floor Carpet Area</label>
                                        </div>	
                                    </div>

                                    <div class="col-md-6 col-xs-6">
                                        <div class="form-group">
                                            <label><?php echo number_format((float) $ggresult, 2, '.', ''); ?>&nbsp;&nbsp;&nbsp;Sq. Mt. &nbsp;&nbsp;&nbsp;
                                                <?php echo number_format((float) $ggresult * 10.76, 2, '.', ''); ?>&nbsp;&nbsp;&nbsp;Sq. Ft.</label>
                                        </div>
                                    </div>
                                </div><!--5 line close-->

                                <div class="row tca"><!--Mobile number-->
                                    <div class="col-md-6  col-xs-6">
                                        <div class="form-group">
                                            <label>Total Carpet area</label>
                                        </div>	
                                    </div>

                                    <div class="col-md-6 col-xs-6">
                                        <div class="form-group">
                                            <?php $totalcarpetarea = $ffresult + $ggresult; ?>
                                            <label><?php echo number_format((float) $totalcarpetarea, 2, '.', ''); ?>&nbsp;&nbsp;&nbsp; Sq. Mt. &nbsp;&nbsp;&nbsp; <?php echo number_format((float) $totalcarpetarea * 10.76, 2, '.', ''); ?> &nbsp;&nbsp;&nbsp; Sq. Ft.</label>

                                        </div>
                                    </div>
                                </div><!--5 line close-->
                                <div class="row rca"><!--Mobile number-->
                                    <div class="col-md-6 col-xs-6">
                                        <div class="form-group">
                                            <label>Roof Covered Area </label>
                                        </div>	
                                    </div>

                                    <div class="col-md-6 col-xs-6">
                                        <div class="form-group">

                                            <label><?php echo number_format((float) $total_roof, 2, '.', ''); ?>&nbsp;&nbsp;&nbsp;Sq. Mt.</label> 

                                        </div>
                                    </div>
                                </div><!--5 line close-->
 <?php } ?>
                                <div class="row"><!--Mobile number-->
                                    <div class="col-md-6  col-xs-6">
                                        <div class="form-group">
                                            <label>Status</label>
                                        </div>	
                                    </div>

                                    <div class="col-md-6 col-xs-6">
                                        <div class="form-group">
                                            <input type="text" value="<?php echo $status; ?>" name="status"  style= "display: block; padding: 2px; margin: 0; border: 0; width: 100%; border-radius: 0px;" readonly/>
                                            <!--select class="form-control" name="status" >

                                            <?php //echo '<option value="BOOKED">BOOKED</option>'; ?>


                                            </select-->
                                        </div>
                                    </div>
                                </div><!--5 line close-->


                                <div class="row"><!--Mobile number-->
                                    <div class="col-md-3  col-xs-3">
                                        <div class="form-group">
                                            <label>East By</label>
                                        </div>	
                                    </div>
                                    <div class="col-md-1 hidden-xs">
                                        :
                                    </div>
                                    <div class="col-md-6  col-xs-6">
                                        <div class="form-group">
                                            <input type="text"  value="<?php echo $east_by; ?>"   name="east_by" class="form-control" required/>
                                        </div>
                                    </div>
                                </div><!--5 line close-->
                                <div class="row"><!--Mobile number-->
                                    <div class="col-md-3  col-xs-3">
                                        <div class="form-group">
                                            <label>West By</label>
                                        </div>	
                                    </div>
                                    <div class="col-md-1 hidden-xs">
                                        :
                                    </div>
                                    <div class="col-md-6  col-xs-6">
                                        <div class="form-group">
                                            <input type="text"  value="<?php echo $west_by; ?>"   name="west_by" class="form-control" required/>
                                        </div>
                                    </div>
                                </div><!--5 line close-->
                                <div class="row"><!--Mobile number-->
                                    <div class="col-md-3  col-xs-3">
                                        <div class="form-group">
                                            <label>North By</label>
                                        </div>	
                                    </div>
                                    <div class="col-md-1 hidden-xs">
                                        :
                                    </div>
                                    <div class="col-md-6  col-xs-6">
                                        <div class="form-group">
                                            <input type="text"  value="<?php echo $north_by; ?>"    name="north_by" class="form-control" required/>
                                        </div>
                                    </div>
                                </div><!--5 line close-->
                                <div class="row"><!--Mobile number-->
                                    <div class="col-md-3  col-xs-3">
                                        <div class="form-group">
                                            <label>South By</label>
                                        </div>	
                                    </div>
                                    <div class="col-md-1 hidden-xs">
                                        :
                                    </div>
                                    <div class="col-md-6  col-xs-6">
                                        <div class="form-group">
                                            <input type="text"  value="<?php echo $south_by; ?>"   name="south_by" class="form-control" required/>
                                        </div>
                                    </div>
                                </div><!--5 line close-->

                                <div class="row">
                                    <div class="col-md-3  col-xs-3">
                                        <div class="form-group">
                                            <label>Interest Rate</label>
                                        </div>	
                                    </div>
                                    <div class="col-md-1 hidden-xs">
                                        :
                                    </div>
                                    <div class="col-md-6  col-xs-6">
                                        <div class="form-group">
                                            <input type="text"  value="<?php echo $rate ?>"  name="rate" class="form-control" required/>
                                        </div>
                                    </div>
                                </div><!--5 line close-->
<?php if($type == 'Flat'){ ?>
                                                    
                                              <?php  }else{ ?>
                                <div <?php
                                if (($type == 'Plot') || ($type == 'Duplex') ||  ($type == 'Shop')  ) {
                                    echo "style='display: none'";
                                }else{
                                ?>class="row"><!--Mobile number-->
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Parking option</label>
                                        </div>	
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text"  value="<?php echo $parking_type; ?>"/> 
                                        </div>
                                    </div>
                                    <?php  } ?>
                                 </div><!--5 line close-->
                                <div <?php
                                if (($type == 'Plot') || ($type == 'Duplex')) {
                                    echo "style='display: none'";
                                }
                                ?>class="row"><!--Mobile number-->
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Parking Number</label>
                                        </div>	
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text"  value="<?php echo $parking_no; ?>" /> 

                                        </div>
                                    </div>
                                </div><!--5 line close-->
 <?php } ?>

                            </div> 
                        </div>

                        <!-- ---------------------Applicant--------------------------------Applicant----------------------------------------------Applicant------------------------------------- Applicant------------------------------------- -->

                        <div class="row"><!--1 row-->
                            <div class="col-md-5" ><!--1/1 row div-->
                                <div class="row">
                                    <table class="table table-bordered text-center">
                                        <tr>
                                            <td>
                                                <label>Applicant</label>
                                            </td>
                                        </tr>
                                    </table>  
                                </div>
                                <div class="row"><!--1 line-->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>1. Name</label>
                                        </div>	
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group form-inline">
                                            <select name="fa_mr_mrs" class="form-control" style="width: 32% !important;">

                                                <?php
                                                if ($mr_mrs == 'Mr.') {
                                                    echo '<option value="Mr.">Mr.</option>
                                                            <option value="Ms.">Ms.</option>
                                                            <option value="Mrs.">Mrs.</option>';
                                                } else if ($mr_mrs == 'Mrs.') {
                                                    echo '<option value="Mrs.">Mrs.</option>
                                                             <option value="Ms.">Ms.</option>
                                                            <option value="Mr.">Mr.</option>';
                                                } else if ($mr_mrs == 'Ms.') {
                                                    echo '<option value="Ms.">Ms.</option>
                                                             <option value="Mrs.">Mrs.</option>
                                                            <option value="Mr.">Mr.</option>';
                                                } else if ($mr_mrs == 'Mr') {
                                                    echo '<option value="Mr.">Mr.</option>
                                                            <option value="Ms.">Ms.</option>
                                                            <option value="Mrs.">Mrs.</option>';
                                                } else if ($mr_mrs == 'Mrs') {
                                                    echo '<option value="Mrs.">Mrs.</option>
                                                             <option value="Ms.">Ms.</option>
                                                            <option value="Mr.">Mr.</option>';
                                                } else if ($mr_mrs == 'Ms') {
                                                    echo '<option value="Ms.">Ms.</option>
                                                             <option value="Mrs.">Mrs.</option>
                                                            <option value="Mr.">Mr.</option>';
                                                } else if ($mr_mrs == '') {
                                                    echo '<option value=""></option>
                                                         <option value="Ms.">Ms.</option>
                                                         <option value="Mrs.">Mrs.</option>
                                                         <option value="Mr.">Mr.</option>';
                                                }
                                                ?>



                                            </select>
                                         <!-- input type="text" class="form-control" name="fa_mr_mrs"  value="<?php //echo $mr_mrs;                               ?>" style="width: 24% !important;"/ -->
                                            <input type="text" class="form-control" name="name" value="<?php echo $name; ?>" onkeyup="Validate(this)" style="width: 100% !important; margin-top: 5px;"/>
                                        </div>
                                    </div>
                                </div><!--1 line close-->

                                <div class="row"><!--2 line-->

                                    <div class="col-md-4">
                                        <div class="form-group form-inline">
                                            <label>2. Date of Birth</label>                                                         
                                        </div>	
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group form-inline">
                                            <div class="input-group" style="width: 65%;">
                                                <input type="text" class="form-control" id="date" name="fappl_dob" value="<?php echo $fappl_dob; ?>"  onchange="getAge(this.value);" placeholder="DD-MM-YYYY" style="width: 100% !important;"/>
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            </div>
                                            <label>Age </label>
                                            <input type="text" class="form-control" id="age"  name="fappl_age" value="<?php echo $fappl_age; ?>" placeholder="Age" style="background: #ffffff; width: 16% !important;" readonly>
                                        </div>
                                    </div>	
                                </div><!--2 line close-->

                                <div class="row"><!--3 line-->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>3. S/o. or W/o. or D/o</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8 form-inline">
                                        <select name="son_doughter_wife" class="form-control" style="width: 32% !important;">

                                            <?php
                                            if ($son_doughter_wife == 'S/o.') {
                                                echo '<option value="S/o.">S/o.</option>
                                                             <option value="D/o.">D/o.</option>
                                                            <option value="W/o.">W/o.</option>';
                                            } else if ($son_doughter_wife == 'D/o.') {
                                                echo '<option value="D/o.">D/o.</option>
                                                        <option value="S/o.">S/o.</option>
                                                         <option value="W/o.">W/o.</option>';
                                            } else if ($son_doughter_wife == 'W/o.') {
                                                echo '<option value="W/o.">W/o.</option>
                                                        <option value="D/o.">D/o.</option>
                                                        <option value="S/o.">S/o.</option>';
                                            } else if ($son_doughter_wife == 'S/o') {
                                                echo '<option value="S/o.">S/o.</option>
                                                             <option value="D/o.">D/o.</option>
                                                            <option value="W/o.">W/o.</option>';
                                            } else if ($son_doughter_wife == 'D/o') {
                                                echo '<option value="D/o.">D/o.</option>
                                                        <option value="S/o.">S/o.</option>
                                                         <option value="W/o.">W/o.</option>';
                                            } else if ($son_doughter_wife == 'W/o') {
                                                echo '<option value="W/o.">W/o.</option>
                                                        <option value="D/o.">D/o.</option>
                                                        <option value="S/o.">S/o.</option>';
                                            } else if ($son_doughter_wife == '') {
                                                echo '<option value=""></option>
                                                    <option value="W/o.">W/o.</option>
                                                        <option value="D/o.">D/o.</option>
                                                        <option value="S/o.">S/o.</option>';
                                            }
                                            ?>

                                        </select>
                                        <!-- input type="text" class="form-control" size="2" name="son_doughter_wife" value="<?php //echo $son_doughter_wife;                              ?>" style="width: 26% !important;"/ -->
                                        <select name="son_doughter_wife_mr_mrs" class="form-control" style="width: 32% !important;">                                          
                                            <?php
                                            if ($son_doughter_wife_mr_mrs == 'Mr.') {
                                                echo '<option value="Mr.">Mr.</option>
                                                            <option value="Ms.">Ms.</option>
                                                            <option value="Mrs.">Mrs.</option>';
                                            } else if ($son_doughter_wife_mr_mrs == 'Mrs.') {
                                                echo '<option value="Mrs.">Mrs.</option>
                                                             <option value="Ms.">Ms.</option>
                                                            <option value="Mr.">Mr.</option>';
                                            } else if ($son_doughter_wife_mr_mrs == 'Ms.') {
                                                echo '<option value="Ms.">Ms.</option>
                                                             <option value="Mrs.">Mrs.</option>
                                                            <option value="Mr.">Mr.</option>';
                                            } else if ($son_doughter_wife_mr_mrs == 'Mr') {
                                                echo '<option value="Mr.">Mr.</option>
                                                            <option value="Ms.">Ms.</option>
                                                            <option value="Mrs.">Mrs.</option>';
                                            } else if ($son_doughter_wife_mr_mrs == 'Mrs') {
                                                echo '<option value="Mrs.">Mrs.</option>
                                                             <option value="Ms.">Ms.</option>
                                                            <option value="Mr.">Mr.</option>';
                                            } else if ($son_doughter_wife_mr_mrs == 'Ms') {
                                                echo '<option value="Ms.">Ms.</option>
                                                             <option value="Mrs.">Mrs.</option>
                                                            <option value="Mr.">Mr.</option>';
                                            } else if ($son_doughter_wife_mr_mrs == '') {
                                                echo '<option value=""></option>
                                                         <option value="Ms.">Ms.</option>
                                                             <option value="Mrs.">Mrs.</option>
                                                            <option value="Mr.">Mr.</option>';
                                            }
                                            ?>
                                        </select>
                                        <!-- input type="text" class="form-control"  size="2" name="son_doughter_wife_mr_mrs" value="<?php //echo $son_doughter_wife_mr_mrs;                              ?>" style="width: 26% !important;"/ -->
                                        <input type="text" class="form-control"  name="swd_of" value="<?php echo $swd_of; ?>" onkeyup = "Validate(this)" style="width: 100% !important; margin-top: 5px;"/>
                                    </div>	
                                </div><!--3 line close-->


                                <div class="row"><!--4 line-->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>4. Present Address</label>
                                        </div>	
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <textarea class="form-control"  rows="3" cols="20" name="present_addr" id="fappladdr" style="width: 100%;" required="required"><?php echo $present_addr; ?></textarea>
                                        </div>
                                    </div>
                                </div><!--4 line close-->

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
                                            <label>5. Permanent Address</label>
                                        </div>	
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <textarea class="form-control"  rows="3" cols="20" name="permanent_addr" id="fappladdr2" style="width: 100%;" required="required"><?php echo $permanent_addr; ?></textarea>

                                        </div>
                                    </div>
                                </div><!--4 line close-->


                                <div class="row"><!--6 line-->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>6. Pin Code</label>
                                        </div>	
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="pin_code" value="<?php echo $pin_code; ?>" onKeyUp="pincode_validate(this.value);" />
                                            <label class="status" id="statuspincode"></label>
                                        </div>
                                    </div>
                                </div><!--6 line close-->


                                <div class="row"><!--9 line-->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>7. Mobile number</label>	
                                        </div>	
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="text"   class="form-control"  name="contact_mobile" value="<?php echo $contact_mobile; ?>" onKeyUp="mobile_validate(this.value);" />
                                            <label class="status" id="statusmobile"></label>
                                        </div>
                                    </div>
                                </div><!--9 line close-->



                                <div class="row"><!--8 line-->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>8. Email address</label>	
                                        </div>	
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="email" value="<?php echo $email; ?>" onKeyUp="email_validate(this.value);"/>
                                            <label class="status" id="statusAppemail"></label>
                                        </div>
                                    </div>
                                </div><!--8 line close-->


                                <div class="row"><!--4 line-->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>9. Aadhar  No.</label>
                                        </div>	
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="text" class="form-control"  name="aadhar_no" value="<?php echo $aadhar_no; ?>" onKeyUp="aadhar_validate(this.value);"/>
                                            <label class="status" id="statusaadhaar"></label>
                                        </div>
                                    </div>
                                </div><!--4 line close-->

                                <div class="row"><!--5 line-->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>10. PAN No.</label>
                                        </div>	
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="pan"  value="<?php echo $pan; ?>" onKeyUp="pan_validate(this.value);"/>
                                            <label class="status" id="statusAppPan"></label>
                                        </div>
                                    </div>
                                </div><!--5 line close-->


                                <div class="row"><!--10 line-->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>11. Qualification</label>	
                                        </div>	
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="qualification" value="<?php echo $qualification; ?>" onKeyUp="q1_validate(this.value);"/>
                                            <label class="status" id="statusAppQ1"></label>
                                        </div>
                                    </div>
                                </div><!--10 line close-->

                                <div class="row"><!--10 line-->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>12. Occupation</label>	
                                        </div>	
                                    </div>
                                    <div class="col-md-8">
                                        <select name="occupation" class="form-control">

                                            <?php
                                            if ($occupation == 'Business') {
                                                echo '<option value="Business"> Business</option>
                                                        <option value="Service"> Service</option>
                                                        <option value="Others"> Others</option>
                                                        <option value="None"> None</option>';
                                            } else if ($occupation == 'Service') {
                                                echo ' <option value="Service"> Service</option>
                                                        <option value="Business"> Business</option>
                                                        <option value="Others"> Others</option>
                                                        <option value="None"> None</option>';
                                            } else if ($occupation == 'Others') {
                                                echo '<option value="Others"> Others</option>
                                                        <option value="Service"> Service</option>
                                                        <option value="Business"> Business</option>
                                                        <option value="None"> None</option>';
                                            } else if ($occupation == 'None') {
                                                echo '<option value="None"> None</option>
                                                        <option value="Others"> Others</option>
                                                        <option value="Service"> Service</option>
                                                        <option value="Business"> Business</option>';
                                            } else if ($occupation == '') {
                                                echo '<option value=""></option>
                                                        <option value="None"> None</option>
                                                        <option value="Others"> Others</option>
                                                        <option value="Service"> Service</option>
                                                        <option value="Business"> Business</option>';
                                            }
                                            ?>
                                        </select>  
<!-- input type="text" class="form-control"  name="occupation" value="<?php //echo $occupation;                  ?>"/ -->
                                    </div>
                                </div><!--10 line close-->

                                <div class="row"><!--10 line-->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>13. Company Name</label>	
                                        </div>	
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">	
                                            <input type="text" class="form-control" size="40" name="company_name" onkeyup = "Validate(this)" value="<?php echo $company_name; ?>"/>

                                        </div>
                                    </div>
                                </div><!--10 line close-->


                                <div class="row"><!--10 line-->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>14. Date of Joining</label>	
                                        </div>	
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="appl_doj" name="appl_doj"  value="<?php echo $appl_doj; ?>"/>
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--10 line close-->

                                <div class="row"><!--10 line-->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>15. Designation</label>	
                                        </div>	
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="text" class="form-control"  name="appl_desig" value="<?php echo $appl_desig; ?>" onkeyup = "Validate(this)"/>

                                        </div>
                                    </div>
                                </div><!--10 line close-->

                                <div class="row"><!--10 line-->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>16. Department</label>	
                                        </div>	
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="appl_dept" value="<?php echo $appl_dept; ?>" onkeyup = "Validate(this)"/>

                                        </div>
                                    </div>
                                </div><!--10 line close-->

                                <div class="row"><!--10 line-->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>17. Monthly Income</label>	
                                        </div>	
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="appl_monthly_income" value="<?php echo number_format((float) $appl_monthly_income, 2, '.', ''); ?>" onkeyup = "ValidateIncome(this)"/>

                                        </div>
                                    </div>
                                </div><!--10 line close-->

                                <div class="row"><!--10 line-->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>18. Address Of Employer</label>	
                                        </div>	
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="text" class="form-control" size="40" name="fa_empl_addr" value="<?php echo $fa_empl_addr; ?>"/>

                                        </div>
                                    </div>
                                </div><!--10 line close-->

                                <div class="row"><!--10 line-->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>19. Pin Code</label>	
                                        </div>	
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="text" class="form-control" size="40" name="pin_code_emp" value="<?php echo $pin_code_emp; ?>" onKeyUp="Emppincode_validate(this.value);"/>
                                            <label class="status" id="statusemppincode"></label>
                                        </div>
                                    </div>
                                </div><!--10 line close-->

                                <div class="row"><!--9 line-->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>20. No. of Earning Members</label>	
                                        </div>	
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="earning_members" value="<?php echo $earning_members; ?>"/>

                                        </div>
                                    </div>
                                </div><!--9 line close-->

                                <div class="row"><!--10 line-->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>21. No.of Dependent</label>	
                                        </div>	
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">

                                            <input type="text" class="form-control" name="no_of_dependent" value="<?php echo $no_of_dependent; ?>"/>   
                                        </div>
                                    </div>
                                </div><!--10 line close-->
                                <br>
                                <div class="row"><!--10 line-->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>22. Dependent Details</label>	
                                        </div>	
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">

                                            <textarea class="form-control" rows="5" id="dependent_app" name="dependents_details"><?php echo $dependents_details; ?></textarea>   
                                        </div>
                                    </div>
                                </div><!--10 line close-->
                                <br>
                                <div class="row"><!--10 line-->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>23. Co-Owner/Sole Owner</label>	
                                        </div>	
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">	
                                            <select class="form-control"  name="solo_coowner" style="width:100%;">
                                                <?php
                                                if ($solo_coowner == 'Co-Owner') {
                                                    echo ' <option value="Co-Owner">Co-Owner</option>
                                                            <option value="Sole-Owner">Sole-Owner</option>';
                                                } else if ($solo_coowner == 'Sole-Owner') {
                                                    echo '<option value="Sole-Owner">Sole-Owner</option>
                                                            <option value="Co-Owner">Co-Owner</option>';
                                                } else if ($solo_coowner == '') {
                                                    echo '<option value=""></option>
                                                    <option value="Sole-Owner">Sole-Owner</option>
                                                            <option value="Co-Owner">Co-Owner</option>';
                                                }
                                                ?>
                                            </select>
                                                                                        <!-- input type="text" class="form-control" name="solo_coowner" value="<?php //echo $solo_coowner;                    ?>"/ -->  

                                        </div>
                                    </div>
                                </div><!--10 line close-->

                                <div class="row"><!--11 line-->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>24. Loan Required</label>	
                                        </div>	
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <select class="form-control"  name="loan_reqs" style="width:100%;">
                                                <?php
                                                if ($loan_reqs == 'Yes') {
                                                    echo ' <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                            <option value=""></option>';
                                                } else if ($loan_reqs == 'No') {
                                                    echo '<option value="No">No</option>
                                                            <option value="Yes">Yes</option>
                                                            <option value=""></option>';
                                                } else if ($loan_reqs == '') {
                                                    echo '<option value=""></option>
                                                    <option value="Yes">Yes</option>
                                                            <option value="No">No</option>';
                                                }
                                                ?>
                                            </select>

                                        </div>

                                    </div>
                                </div><!--11 line close-->


                                <div class="row"><!--10 line-->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>25. Amount of Loan Required</label>	
                                        </div>	
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="amt_of_loan" onblur="makethisdecimal(this.id);"  name="amt_of_loan"  value="<?php echo number_format((float) $amt_of_loan, 2, '.', ''); ?>" onkeyup = "ValidateIncome(this)" />  

                                        </div>
                                    </div>
                                </div><!--10 line close-->

                                <div class="row"><!--10 line-->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>26. Bank Name</label>	
                                        </div>	
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="bank_name" value="<?php echo $bank_name; ?>" onkeyup = "Validate(this)"/>  

                                        </div>
                                    </div>
                                </div><!--10 line close-->


                                <div class="row"><!--10 line-->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>27. Account No.</label>	
                                        </div>	
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">	
                                            <input type="text" class="form-control" name="acc_no"  value="<?php echo $acc_no; ?>" onkeyup = "ValidateNum(this)"/> 

                                        </div>
                                    </div>
                                </div><!--10 line close-->

                                <div class="row"><!--10 line-->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>28. Mode of Payment</label>	
                                        </div>	
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <select class="form-control" name="mode_of_payment" id="payment_mode"   onKeyUp='CheckProject(this.value);'>            
                                                <?php
                                                if ($mode_of_payment == 'Cheque') {
                                                    echo ' <option value="Cheque">Cheque</option>  
                                                            <option value="Cash">Cash</option>  
                                                            <option value="DD">DD</option>
                                                            <option value="RTGS">RTGS</option>
                                                            <option value="NEFT">NEFT</option>
                                                            <option value="CR_DB_CARD">Card swipe</option>';
                                                } else if ($mode_of_payment == 'Cash') {
                                                    echo '  <option value="Cash">Cash</option> 
                                                            <option value="Cheque">Cheque</option>
                                                            <option value="DD">DD</option>
                                                            <option value="RTGS">RTGS</option>
                                                            <option value="NEFT">NEFT</option>
                                                            <option value="CR_DB_CARD">Card swipe</option>';
                                                } else if ($mode_of_payment == 'DD') {
                                                    echo ' <option value="DD">DD</option>
                                                        <option value="Cheque">Cheque</option>  
                                                            <option value="Cash">Cash</option>  
                                                            <option value="RTGS">RTGS</option>
                                                            <option value="NEFT">NEFT</option>
                                                            <option value="CR_DB_CARD">Card swipe</option>';
                                                } else if ($mode_of_payment == 'RTGS') {
                                                    echo ' <option value="RTGS">RTGS</option>
                                                        <option value="Cheque">Cheque</option>  
                                                            <option value="Cash">Cash</option>  
                                                            <option value="DD">DD</option>
                                                            <option value="NEFT">NEFT</option>
                                                            <option value="CR_DB_CARD">Card swipe</option>';
                                                } else if ($mode_of_payment == 'NEFT') {
                                                    echo ' <option value="NEFT">NEFT</option>
                                                        <option value="Cheque">Cheque</option>  
                                                            <option value="Cash">Cash</option>  
                                                            <option value="DD">DD</option>
                                                            <option value="RTGS">RTGS</option>
                                                            <option value="CR_DB_CARD">Card swipe</option>';
                                                } else if ($mode_of_payment == 'Card swipe') {
                                                    echo ' <option value="Card swipe">Card swipe</option>
                                                        <option value="Cheque">Cheque</option>  
                                                            <option value="Cash">Cash</option>  
                                                            <option value="DD">DD</option>
                                                            <option value="RTGS">RTGS</option>
                                                            <option value="NEFT">NEFT</option>';
                                                } else if ($mode_of_payment == '') {
                                                    echo ' <option value="Card swipe">Card swipe</option>
                                                        <option value="Cheque">Cheque</option>  
                                                            <option value="Cash">Cash</option>  
                                                            <option value="DD">DD</option>
                                                            <option value="RTGS">RTGS</option>
                                                            <option value="NEFT">NEFT</option>';
                                                }
                                                ?>
                                            </select>  
                                <!-- input type="text" class="form-control" name="mode_of_payment" value="<?php //echo $mode_of_payment;                  ?>"/ --> 
                                        </div>
                                    </div>
                                </div><!--10 line close-->

                                <div class="row"><!--10 line-->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>29. Booking Amount Rs.</label>	
                                        </div>	
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">	
                                            Amount Rs. &nbsp;&nbsp; <input type="text" class="form-control" onblur="makethisdecimal(this.id);"  size="20" name="booking_amt" onKeyUp="bookingFixed();"  id="booking_amt" value="<?php echo number_format((float) $booking_amt, 2, '.', ''); ?>"/> 

                                        </div>
                                        <div class="form-group">
                                            Cheque No.&nbsp;&nbsp;&nbsp; <input type="text" class="form-control" size="20" name="cheque_no" value="<?php echo $cheque_no; ?>"/> 

                                        </div>
                                        <div class="form-group">  Cheque Date.&nbsp; 
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="cheque_dt" size="20" name="cheque_dt" value="<?php echo $cheque_dt; ?>"/> 
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            </div>


                                        </div>

                                    </div>
                                </div><!--10 line close-->
                                <div class="row"><!--10 line-->
                                    <div class="col-md-4">

                                    </div>
                                    <div class="col-md-8">                                 
                                        <div  id="errmsg" style="visibility: hidden; font-weight: bold;">Booking Amount in Cash Should Not Be Not  More than Rs. 20000/- </div>
                                    </div>
                                </div>

                                <div class="row"><!--10 line-->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>30. Documents</label>	
                                        </div>	
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <?php
                                            $r = $this->realestate_model->getalldocs();
                                            ?>
                                            <select name="fappl_documents[]" multiple="true" style="width:250px; height:100px;">
                                                <?php
                                                for ($i = 0; $i < sizeof($r); $i++) {
                                                    if (strpos($fappl_documents, $r[$i]->document_title) !== false) {
                                                        ?>

                                                        <option value='<?php echo $r[$i]->document_title; ?>' selected><?php echo $r[$i]->document_title; ?></option>
                                                        <?php
                                                    } else {
                                                        ?>
                                                        <option value='<?php echo $r[$i]->document_title; ?>'  ><?php echo $r[$i]->document_title; ?></option>  
                                                        <?php
                                                    }
                                                }
                                                ?>

                                            </select>
                                            <!--textarea name="fappl_documents" class="form-control"><?php //echo $fappl_documents;            ?></textarea-->
                                        </div>
                                    </div>
                                </div><!--10 line close-->
                            </div><!--1/1 row div close-->

                            <!-- --------------------------------------co-applicant----------------------------------------------------------co-applicant---------------------------------------------------------- -->

                            <div class="col-md-4"><!--1/2 row div-->
                                <div class="row">
                                    <table class="table table-bordered text-center">
                                        <tr>
                                            <td>
                                                <label>Co-Applicant</label>
                                            </td>
                                        </tr>
                                    </table> 
                                </div>
                                <div class="row"><!--1 line-->
                                    <div class="col-md-1">
                                        <div class="form-group">
                                        </div>	
                                    </div>
                                    <div class="col-md-11 form-inline">
                                        <div class="form-group">
                                            <select name="ca_mr_mrs" class="form-control" style="width: 32% !important;">

                                                <?php
                                                if ($ca_mr_mrs == 'Mr.') {
                                                    echo '<option value="Mr.">Mr.</option>
                                                            <option value="Ms.">Ms.</option>
                                                            <option value="Mrs.">Mrs.</option>';
                                                } else if ($ca_mr_mrs == 'Mrs.') {
                                                    echo '<option value="Mrs.">Mrs.</option>
                                                             <option value="Ms.">Ms.</option>
                                                            <option value="Mr.">Mr.</option>';
                                                } else if ($ca_mr_mrs == 'Ms.') {
                                                    echo '<option value="Ms.">Ms.</option>
                                                             <option value="Mrs.">Mrs.</option>
                                                            <option value="Mr.">Mr.</option>';
                                                } else if ($ca_mr_mrs == 'Mr') {
                                                    echo '<option value="Mr.">Mr.</option>
                                                            <option value="Ms.">Ms.</option>
                                                            <option value="Mrs.">Mrs.</option>';
                                                } else if ($ca_mr_mrs == 'Mrs') {
                                                    echo '<option value="Mrs.">Mrs.</option>
                                                             <option value="Ms.">Ms.</option>
                                                            <option value="Mr.">Mr.</option>';
                                                } else if ($ca_mr_mrs == 'Ms') {
                                                    echo '<option value="Ms.">Ms.</option>
                                                             <option value="Mrs.">Mrs.</option>
                                                            <option value="Mr.">Mr.</option>';
                                                } else if ($ca_mr_mrs == '') {
                                                    echo '<option value=""></option>
                                                         <option value="Ms.">Ms.</option>
                                                         <option value="Mrs.">Mrs.</option>
                                                         <option value="Mr.">Mr.</option>';
                                                }
                                                ?>
                                            </select>
<!-- input type="text" class="form-control"  name="ca_mr_mrs" value="<?php //echo $ca_mr_mrs;                           ?>" style="width: 24% !important;"/ --> 
                                            <input type="text" class="form-control" name="ca_name"  value="<?php echo $ca_name; ?>" style="width: 100% !important; margin-top: 5px;" onkeyup = "Validate(this)"/> 
                                        </div>
                                    </div>
                                </div><!--1 line close-->

                                <div class="row"><!--2 line-->

                                    <div class="col-md-1">
                                        <div class="form-group">
                                        </div>	
                                    </div>
                                    <div class="col-md-11">
                                        <div class="form-group form-inline">
                                            <div class="input-group" style="width: 50%;">
                                                <input type="text" class="form-control" size="9" id="date2" name="ca_dob" value="<?php echo $ca_dob; ?>" onchange="getAge2(this.value);" style="width: 100% !important;"/> 
                                                <span class="input-group-addon" style="padding: 6px 5px !important;"><i class="fa fa-calendar"></i></span>
                                            </div>
                                            <label>Age </label>
                                            <input type="text" class="form-control" size="3"  id="age2" name="ca_age" value="<?php echo $ca_age; ?>" style="width: 14% !important;"/> 
                                        </div>
                                    </div>	
                                </div><!--2 line close-->

                                <div class="row"><!--3 line-->
                                    <div class="col-md-1">
                                        <div class="form-group">
                                        </div>	
                                    </div>
                                    <div class="col-md-11 form-inline">
                                        <div class="form-group">
                                            <select name="ca_son_doughter_wife" class="form-control" style="width: 28% !important;">

                                                <?php
                                                if ($ca_son_doughter_wife == 'S/o.') {
                                                    echo '<option value="S/o.">S/o.</option>
                                                    <option value="D/o.">D/o.</option>
                                                <option value="W/o.">W/o.</option>';
                                                } else if ($ca_son_doughter_wife == 'D/o.') {
                                                    echo '<option value="D/o.">D/o.</option>
                                                   <option value="S/o">S/o.</option>
                                                <option value="W/o">W/o.</option>';
                                                } else if ($ca_son_doughter_wife == 'W/o.') {
                                                    echo '<option value="W/o.">W/o.</option>
                                                   <option value="S/o.">S/o.</option>
                                                <option value="D/o.">D/o.</option>';
                                                } else if ($ca_son_doughter_wife == 'S/o') {
                                                    echo '<option value="S/o.">S/o.</option>
                                                    <option value="D/o.">D/o.</option>
                                                <option value="W/o.">W/o.</option>';
                                                } else if ($ca_son_doughter_wife == 'D/o') {
                                                    echo '<option value="D/o.">D/o.</option>
                                                   <option value="S/o">S/o.</option>
                                                <option value="W/o">W/o.</option>';
                                                } else if ($ca_son_doughter_wife == 'W/o') {
                                                    echo '<option value="W/o.">W/o.</option>
                                                   <option value="S/o.">S/o.</option>
                                                <option value="D/o.">D/o.</option>';
                                                } else if ($ca_son_doughter_wife == '') {
                                                    echo '<option value=""></option>
                                                         <option value="S/o.">S/o.</option>
                                                <option value="D/o.">D/o.</option>
                                                <option value="W/o.">W/o.</option>';
                                                }
                                                ?>
                                            </select>
                                            <select name="ca_son_doughter_wife_mr_mrs" class="form-control" style="width: 28% !important;">

                                                <?php
                                                if ($ca_son_doughter_wife_mr_mrs == 'Mr.') {
                                                    echo ' <option value="Mr.">Mr.</option>
                                                    <option value="Ms.">Ms.</option>
                                                <option value="Mrs.">Mrs.</option>';
                                                } else if ($ca_son_doughter_wife_mr_mrs == 'Ms.') {
                                                    echo ' <option value="Ms.">Ms.</option>
                                                     <option value="Mr.">Mr.</option>
                                                <option value="Mrs.">Mrs.</option>';
                                                } else if ($ca_son_doughter_wife_mr_mrs == 'Mrs.') {
                                                    echo ' <option value="Mrs.">Mrs.</option>
                                                        <option value="Mr.">Mr.</option>
                                                        <option value="Ms.">Ms.</option>';
                                                } else if ($ca_son_doughter_wife_mr_mrs == 'Mr') {
                                                    echo ' <option value="Mr.">Mr.</option>
                                                    <option value="Ms.">Ms.</option>
                                                <option value="Mrs.">Mrs.</option>';
                                                } else if ($ca_son_doughter_wife_mr_mrs == 'Ms') {
                                                    echo ' <option value="Ms.">Ms.</option>
                                                     <option value="Mr.">Mr.</option>
                                                <option value="Mrs.">Mrs.</option>';
                                                } else if ($ca_son_doughter_wife_mr_mrs == 'Mrs') {
                                                    echo ' <option value="Mrs.">Mrs.</option>
                                                        <option value="Mr.">Mr.</option>
                                                        <option value="Ms.">Ms.</option>';
                                                } else if ($ca_son_doughter_wife_mr_mrs == '') {
                                                    echo '<option value=""></option>
                                                        <option value="Mr.">Mr.</option>
                                                <option value="Ms.">Ms.</option>
                                                <option value="Mrs.">Mrs.</option>';
                                                }
                                                ?>

                                            </select>
                                <!-- input type="text" class="form-control" size="3" name="ca_son_doughter_wife" value="<?php //echo $ca_son_doughter_wife;                            ?>" style="width: 26% !important;"/ --> 
                                <!-- input type="text" class="form-control" size="3" name="ca_son_doughter_wife_mr_mrs" value="<?php //echo $ca_son_doughter_wife_mr_mrs;                            ?>" style="width: 26% !important;"/ --> 
                                            <input type="text" class="form-control" name="ca_swd_of"  value="<?php echo $ca_swd_of; ?>" onkeyup = "Validate(this)" style="width: 100% !important; margin-top: 5px;"/> 
                                        </div>
                                    </div>
                                </div><!--3 line close-->

                                <div class="row"><!--4 line-->
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label></label>
                                        </div>	
                                    </div>
                                    <div class="col-md-11">
                                        <div class="form-group">
                                            <textarea class="form-control"  rows="3" id="n1" cols="20" name="co_present_add" ><?php echo $co_present_add; ?></textarea>

                                        </div>
                                    </div>
                                </div><!--4 line close-->

                                <div class="row"><!--4 line-->
                                    <div class="col-md-1">
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
                                            <textarea class="form-control"  rows="3" id="n2" cols="20" name="co_parma_add" ><?php echo $co_parma_add; ?></textarea>

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
                                            <input type="text"   class="form-control"  name="ca_pincode" value="<?php echo $ca_pincode; ?>" onKeyUp="pincode_validate2(this.value);"/>
                                            <label class="status" id="statuspincode2"></label>
                                        </div>
                                    </div>
                                </div><!--4 line close-->

                                <div class="row"><!--Mobile number-->
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label></label>
                                        </div>	
                                    </div>
                                    <div class="col-md-11">
                                        <div class="form-group">
                                            <input type="text" class="form-control" maxlength="10"  pattern="[789][0-9]{9}"  name="ca_mo_no"  value="<?php echo trim($ca_mo_no); ?>" onKeyUp="mobile_validate2(this.value);"/> 
                                            <label class="status" id="statusmobile2"></label>
                                        </div>
                                    </div>
                                </div><!--5 line close-->


                                <div class="row"><!--8 line-->
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label></label>	
                                        </div>	
                                    </div>
                                    <div class="col-md-11">
                                        <div class="form-group">
                                            <input type="text" class="form-control"  name="ca_email" value="<?php echo trim($ca_email); ?>" onKeyUp="email_validate2(this.value);"/> 
                                            <label class="status" id="statuscoemail"></label>
                                        </div>
                                    </div>
                                </div><!--8 line close-->

                                <div class="row"><!--Adhar Card No.-->
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label></label>	
                                        </div>	
                                    </div>
                                    <div class="col-md-11">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="ca_aadhar_no" value="<?php echo $ca_aadhar_no; ?>" onKeyUp="aadhar_validate2(this.value);" /> 
                                            <label class="status" id="statusaadhaar2"></label>
                                        </div>
                                    </div>
                                </div><!--8 line close-->

                                <div class="row"><!--PAN Card No.-->
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label></label>	
                                        </div>	
                                    </div>
                                    <div class="col-md-11">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="ca_pan" value="<?php echo $ca_pan; ?>" onKeyUp="pan_validate2(this.value);"/> 
                                            <label class="status" id="statusAppPan2"></label>
                                        </div>
                                    </div>
                                </div><!--9 line close-->

                                <div class="row"><!--Qualification-->
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label></label>	
                                        </div>	
                                    </div>
                                    <div class="col-md-11">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="ca_Qualification"  value="<?php echo $ca_Qualification; ?>" onKeyUp="q3_validate(this.value);"/>
                                            <label class="status" id="statusAppQ3"></label>
                                        </div>
                                    </div>
                                </div><!--10 line close-->


                                <div class="row"><!--Occupation-->
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label></label>	
                                        </div>	
                                    </div>
                                    <div class="col-md-11">
                                        <div class="form-group">
                                            <select name="ca_occupation" class="form-control">

                                                <?php
                                                if ($ca_occupation == 'Business') {
                                                    echo '<option value="Business"> Business</option>
                                                        <option value="Service"> Service</option>
                                                        <option value="Others"> Others</option>
                                                        <option value="None"> None</option>';
                                                } else if ($ca_occupation == 'Service') {
                                                    echo ' <option value="Service"> Service</option>
                                                        <option value="Business"> Business</option>
                                                        <option value="Others"> Others</option>
                                                        <option value="None"> None</option>';
                                                } else if ($ca_occupation == 'Others') {
                                                    echo '<option value="Others"> Others</option>
                                                        <option value="Service"> Service</option>
                                                        <option value="Business"> Business</option>
                                                        <option value="None"> None</option>';
                                                } else if ($ca_occupation == 'None') {
                                                    echo '<option value="None"> None</option>
                                                        <option value="Others"> Others</option>
                                                        <option value="Service"> Service</option>
                                                        <option value="Business"> Business</option>';
                                                } else if ($ca_occupation == '') {
                                                    echo '<option value=""></option>
                                                         <option value="None"> None</option>
                                                        <option value="Others"> Others</option>
                                                        <option value="Service"> Service</option>
                                                        <option value="Business"> Business</option>';
                                                }
                                                ?>
                                            </select> 
                                     <!-- input type="text" class="form-control"  name="ca_occupation"  value="<?php //echo $ca_occupation;                ?>"/ -->

                                        </div> 
                                    </div>
                                </div><!--10 line close-->

                                <div class="row"><!--Company Name-->
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label></label>	
                                        </div>	
                                    </div>
                                    <div class="col-md-11">
                                        <div class="form-group">
                                            <input type="text" class="form-control"  size="40" name="ca_company_name" value="<?php echo $ca_company_name; ?>" onkeyup = "Validate(this)"/>

                                        </div>
                                    </div>
                                </div><!--10 line close-->

                                <div class="row"><!--Date of Joining-->
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label></label>	
                                        </div>	
                                    </div>
                                    <div class="col-md-11">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="ca_doj" name="ca_doj" value="<?php echo $ca_doj; ?>" onkeyup = "Validate(this)"/>
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--10 line close-->

                                <div class="row"><!--Designation-->
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label></label>	
                                        </div>	
                                    </div>
                                    <div class="col-md-11">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="ca_desig" value="<?php echo $ca_desig; ?>" onkeyup = "Validate(this)"/>

                                        </div>
                                    </div>
                                </div><!--10 line close-->

                                <div class="row"><!--Department-->
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label></label>	
                                        </div>	
                                    </div>
                                    <div class="col-md-11">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="ca_department"  value="<?php echo $ca_department; ?>" onkeyup = "Validate(this)"/>

                                        </div>
                                    </div>
                                </div><!--10 line close-->

                                <div class="row"><!--Monthly Income-->
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label></label>	
                                        </div>	
                                    </div>
                                    <div class="col-md-11">
                                        <div class="form-group">
                                            <input type="text" class="form-control" size="50" name="ca_monthly_income" value="<?php echo number_format((float) $ca_monthly_income, 2, '.', ''); ?>" onkeyup = "ValidateIncome(this)"/>

                                        </div>
                                    </div>
                                </div><!--10 line close-->

                                <div class="row"><!--Address Of Employer-->
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label></label>	
                                        </div>	
                                    </div>
                                    <div class="col-md-11">
                                        <div class="form-group">	
                                            <input type="text" class="form-control" name="ca_addr_of_employer" value="<?php echo $ca_addr_of_employer; ?>"/>

                                        </div>
                                    </div>
                                </div><!--10 line close-->
                                <div class="row"><!--Address Of Employer-->
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label></label>	
                                        </div>	
                                    </div>
                                    <div class="col-md-11">
                                        <div class="form-group">	
                                            <input type="text" class="form-control" name="ca_addr_of_pincode" value="<?php echo $ca_addr_of_pincode; ?>" style="margin-top: 5px;" onKeyUp="Emppincode_validate2(this.value);"/>
                                            <label class="status" id="statusemppincode2"></label>
                                        </div>
                                    </div>
                                </div><!--emp pin code-->
                            </div><!--1/2 row div close-->


                            <!-- -------------------------------------------- co-applicant-3 -----------------------------------------------------------------------co-applicant-3   --------------------------------------co-applicant-3------------------------- -->

                            <div class="col-md-3"><!--1/2 row div-->
                                <div class="row">
                                    <table class="table table-bordered text-center">
                                        <tr>
                                            <td>
                                                <label>Co-Applicant</label>
                                            </td>
                                        </tr>
                                    </table> 
                                </div>
                                <div class="row"><!--1 line-->
                                    <div class="col-md-1">
                                        <div class="form-group">
                                        </div>	
                                    </div>
                                    <div class="col-md-11 form-inline">
                                        <div class="form-group">
                                            <select name="ca_mr_mrs_1" class="form-control" style="width: 42% !important;">
                                                <?php
                                                if ($ca_mr_mrs_1 == 'Mr.') {
                                                    echo '<option value="Mr.">Mr.</option>
                                                            <option value="Ms.">Ms.</option>
                                                            <option value="Mrs.">Mrs.</option>';
                                                } else if ($ca_mr_mrs_1 == 'Mrs.') {
                                                    echo '<option value="Mrs.">Mrs.</option>
                                                             <option value="Ms.">Ms.</option>
                                                            <option value="Mr.">Mr.</option>';
                                                } else if ($ca_mr_mrs_1 == 'Ms.') {
                                                    echo '<option value="Ms.">Ms.</option>
                                                             <option value="Mrs.">Mrs.</option>
                                                            <option value="Mr.">Mr.</option>';
                                                } else if ($ca_mr_mrs_1 == 'Mr') {
                                                    echo '<option value="Mr.">Mr.</option>
                                                            <option value="Ms.">Ms.</option>
                                                            <option value="Mrs.">Mrs.</option>';
                                                } else if ($ca_mr_mrs_1 == 'Mrs') {
                                                    echo '<option value="Mrs.">Mrs.</option>
                                                             <option value="Ms.">Ms.</option>
                                                            <option value="Mr.">Mr.</option>';
                                                } else if ($ca_mr_mrs_1 == 'Ms') {
                                                    echo '<option value="Ms.">Ms.</option>
                                                             <option value="Mrs.">Mrs.</option>
                                                            <option value="Mr.">Mr.</option>';
                                                } else if ($ca_mr_mrs_1 == '') {
                                                    echo '<option value=""></option>
                                                        <option value="Mr.">Mr.</option>
                                                <option value="Ms.">Ms.</option>
                                                <option value="Mrs.">Mrs.</option>';
                                                }
                                                ?>
                                            </select>
                               <!-- input type="text" class="form-control" size="3" name="ca_mr_mrs_1" value="<?php //echo $ca_mr_mrs_1;                          ?>" style="width: 26% !important;"/ --> 
                                            <input type="text" class="form-control" name="ca_name_1"  value="<?php echo $ca_name_1; ?>" style="width: 100% !important; margin-top: 5px;" onkeyup = "Validate(this)"/> 
                                        </div>
                                    </div>
                                </div><!--1 line close-->

                                <div class="row"><!--2 line-->

                                    <div class="col-md-1">
                                        <div class="form-group">
                                        </div>	
                                    </div>
                                    <div class="col-md-11">
                                        <div class="form-group form-inline">
                                            <div class="input-group" style="width: 62%;">
                                                <input type="text" class="form-control" size="9" id="date3" name="ca_dob_1" value="<?php echo $ca_dob_1; ?>" onchange="getAge3(this.value);" style="width: 100% !important;"/> 
                                                <span class="input-group-addon" style="padding: 6px 5px !important;"><i class="fa fa-calendar"></i></span>
                                            </div>
                                            <label>Age </label>
                                            <input type="text" class="form-control" size="3"  id="age3" name="ca_age_1" value="<?php echo $ca_age_1; ?>" style="width: 23% !important;"/> 
                                        </div>
                                    </div>	
                                </div><!--2 line close-->

                                <div class="row"><!--3 line-->
                                    <div class="col-md-1">
                                        <div class="form-group">
                                        </div>	
                                    </div>
                                    <div class="col-md-11 form-inline">
                                        <div class="form-group">
                                            <select name="ca_son_doughter_wife_1" class="form-control" style="width: 40% !important;">

                                                <?php
                                                if ($ca_son_doughter_wife_1 == 'S/o.') {
                                                    echo '<option value="S/o.">S/o.</option>
                                                             <option value="D/o.">D/o.</option>
                                                            <option value="W/o.">W/o.</option>';
                                                } else if ($ca_son_doughter_wife_1 == 'D/o.') {
                                                    echo '<option value="D/o.">D/o.</option>
                                                        <option value="S/o.">S/o.</option>
                                                         <option value="W/o.">W/o.</option>';
                                                } else if ($ca_son_doughter_wife_1 == 'W/o.') {
                                                    echo '<option value="W/o.">W/o.</option>
                                                        <option value="D/o.">D/o.</option>
                                                        <option value="S/o.">S/o.</option>';
                                                } else if ($ca_son_doughter_wife_1 == 'S/o') {
                                                    echo '<option value="S/o.">S/o.</option>
                                                             <option value="D/o.">D/o.</option>
                                                            <option value="W/o.">W/o.</option>';
                                                } else if ($ca_son_doughter_wife_1 == 'D/o') {
                                                    echo '<option value="D/o.">D/o.</option>
                                                        <option value="S/o.">S/o.</option>
                                                         <option value="W/o.">W/o.</option>';
                                                } else if ($ca_son_doughter_wife_1 == 'W/o') {
                                                    echo '<option value="W/o.">W/o.</option>
                                                        <option value="D/o.">D/o.</option>
                                                        <option value="S/o.">S/o.</option>';
                                                } else if ($ca_son_doughter_wife_1 == '') {
                                                    echo '<option value=""></option>
                                                        <option value="W/o.">W/o.</option>
                                                        <option value="D/o.">D/o.</option>
                                                        <option value="S/o.">S/o.</option>';
                                                }
                                                ?>
                                            </select>
                                            <select name="ca_son_doughter_wife_mr_mrs_1" class="form-control" style="width: 40% !important;">

                                                <?php
                                                if ($ca_son_doughter_wife_mr_mrs_1 == 'Mr.') {
                                                    echo '<option value="Mr.">Mr.</option>
                                                            <option value="Ms.">Ms.</option>
                                                            <option value="Mrs.">Mrs.</option>';
                                                } else if ($ca_son_doughter_wife_mr_mrs_1 == 'Mrs.') {
                                                    echo '<option value="Mrs.">Mrs.</option>
                                                             <option value="Ms.">Ms.</option>
                                                            <option value="Mr.">Mr.</option>';
                                                } else if ($ca_son_doughter_wife_mr_mrs_1 == 'Ms.') {
                                                    echo '<option value="Ms.">Ms.</option>
                                                             <option value="Mrs.">Mrs.</option>
                                                            <option value="Mr.">Mr.</option>';
                                                } else if ($ca_son_doughter_wife_mr_mrs_1 == 'Mr') {
                                                    echo '<option value="Mr.">Mr.</option>
                                                            <option value="Ms.">Ms.</option>
                                                            <option value="Mrs.">Mrs.</option>';
                                                } else if ($ca_son_doughter_wife_mr_mrs_1 == 'Mrs') {
                                                    echo '<option value="Mrs.">Mrs.</option>
                                                             <option value="Ms.">Ms.</option>
                                                            <option value="Mr.">Mr.</option>';
                                                } else if ($ca_son_doughter_wife_mr_mrs_1 == 'Ms') {
                                                    echo '<option value="Ms.">Ms.</option>
                                                             <option value="Mrs.">Mrs.</option>
                                                            <option value="Mr.">Mr.</option>';
                                                } else if ($ca_son_doughter_wife_mr_mrs_1 == '') {
                                                    echo '<option value=""></option>
                                                       <option value="Ms.">Ms.</option>
                                                             <option value="Mrs.">Mrs.</option>
                                                            <option value="Mr.">Mr.</option>';
                                                }
                                                ?>                                             
                                            </select>
                                <!-- input type="text" class="form-control" size="3" name="ca_son_doughter_wife_1" value="<?php //echo $ca_son_doughter_wife_1;                          ?>" style="width: 26% !important;"/ --> 
                                <!-- input type="text" class="form-control" size="3" name="ca_son_doughter_wife_mr_mrs_1" value="<?php //echo $ca_son_doughter_wife_mr_mrs_1;                            ?>" style="width: 26% !important;"/ --> 
                                            <input type="text" class="form-control" name="ca_swd_of_1"  value="<?php echo $ca_swd_of_1; ?>" style="width: 100% !important; margin-top: 5px;" onkeyup = "Validate(this)"/> 
                                        </div>
                                    </div>
                                </div><!--3 line close-->

                                <div class="row"><!--4 line-->
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label></label>
                                        </div>	
                                    </div>
                                    <div class="col-md-11">
                                        <div class="form-group">
                                            <textarea class="form-control"  rows="3" cols="20" id="n3" name="co_present_add_1" ><?php echo $co_present_add_1; ?></textarea>

                                        </div>
                                    </div>
                                </div><!--4 line close-->

                                <div class="row"><!--4 line-->
                                    <div class="col-md-1">
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
                                            <textarea class="form-control"  rows="3" cols="20" id="n4" name="co_parma_add_1" ><?php echo $co_parma_add_1; ?></textarea>

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
                                            <input type="text"   class="form-control"  name="ca_pincode_1" value="<?php echo $ca_pincode_1; ?>" onKeyUp="pincode_validate3(this.value);"/>
                                            <label class="status" id="statuspincode3"></label>
                                        </div>
                                    </div>
                                </div><!--4 line close-->

                                <div class="row"><!--Mobile number-->
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label></label>
                                        </div>	
                                    </div>
                                    <div class="col-md-11">
                                        <div class="form-group">
                                            <input type="text" class="form-control" maxlength="10"  pattern="[789][0-9]{9}"  name="ca_mo_no_1"  value="<?php echo trim($ca_mo_no_1); ?>" onKeyUp="mobile_validate3(this.value);"/> 
                                            <label class="status" id="statusmobile3"></label>
                                        </div>
                                    </div>
                                </div><!--5 line close-->


                                <div class="row"><!--8 line-->
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label></label>	
                                        </div>	
                                    </div>
                                    <div class="col-md-11">
                                        <div class="form-group">
                                            <input type="text" class="form-control"  name="ca_email_1" value="<?php echo trim($ca_email_1); ?>" onKeyUp="email_validate3(this.value);"/> 
                                            <label class="status" id="statuscoemail3"></label>
                                        </div>
                                    </div>
                                </div><!--8 line close-->

                                <div class="row"><!--Adhar Card No.-->
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label></label>	
                                        </div>	
                                    </div>
                                    <div class="col-md-11">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="ca_aadhar_no_1" value="<?php echo $ca_aadhar_no_1; ?>" onKeyUp="aadhar_validate3(this.value);" /> 
                                            <label class="status" id="statusaadhaar3"></label>
                                        </div>
                                    </div>
                                </div><!--8 line close-->

                                <div class="row"><!--PAN Card No.-->
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label></label>	
                                        </div>	
                                    </div>
                                    <div class="col-md-11">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="ca_pan_1" value="<?php echo $ca_pan_1; ?>" onKeyUp="pan_validate3(this.value);"/> 
                                            <label class="status" id="statusAppPan3"></label>
                                        </div>
                                    </div>
                                </div><!--9 line close-->

                                <div class="row"><!--Qualification-->
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label></label>	
                                        </div>	
                                    </div>
                                    <div class="col-md-11">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="ca_Qualification_1"  value="<?php echo $ca_Qualification_1; ?>" onKeyUp="q3_validate(this.value);"/>
                                            <label class="status" id="statusAppQ2"></label>
                                        </div>
                                    </div>
                                </div><!--10 line close-->


                                <div class="row"><!--Occupation-->
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label></label>	
                                        </div>	
                                    </div>
                                    <div class="col-md-11">
                                        <div class="form-group">

                                            <select name="ca_occupation_1" class="form-control">

                                                <?php
                                                if ($ca_occupation_1 == 'Business') {
                                                    echo '<option value="Business"> Business</option>
                                                        <option value="Service"> Service</option>
                                                        <option value="Others"> Others</option>
                                                        <option value="None"> None</option>';
                                                } else if ($ca_occupation_1 == 'Service') {
                                                    echo ' <option value="Service"> Service</option>
                                                        <option value="Business"> Business</option>
                                                        <option value="Others"> Others</option>
                                                        <option value="None"> None</option>';
                                                } else if ($ca_occupation_1 == 'Others') {
                                                    echo '<option value="Others"> Others</option>
                                                        <option value="Service"> Service</option>
                                                        <option value="Business"> Business</option>
                                                        <option value="None"> None</option>';
                                                } else if ($ca_occupation_1 == 'None') {
                                                    echo '<option value="None"> None</option>
                                                        <option value="Others"> Others</option>
                                                        <option value="Service"> Service</option>
                                                        <option value="Business"> Business</option>';
                                                } else if ($ca_occupation_1 == '') {
                                                    echo '<option value=""></option>
                                                        <option value="None"> None</option>
                                                        <option value="Others"> Others</option>
                                                        <option value="Service"> Service</option>
                                                        <option value="Business"> Business</option>';
                                                }
                                                ?>


                                            </select>

<!-- input type="text" class="form-control"  name="ca_occupation_1"  value="<?php //echo $ca_occupation_1;                 ?>"/ -->

                                        </div> 
                                    </div>
                                </div><!--10 line close-->

                                <div class="row"><!--Company Name-->
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label></label>	
                                        </div>	
                                    </div>
                                    <div class="col-md-11">
                                        <div class="form-group">
                                            <input type="text" class="form-control"  size="40" name="ca_company_name_1" value="<?php echo $ca_company_name_1; ?>" onkeyup = "Validate(this)"/>

                                        </div>
                                    </div>
                                </div><!--10 line close-->

                                <div class="row"><!--Date of Joining-->
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label></label>	
                                        </div>	
                                    </div>
                                    <div class="col-md-11">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="ca_doj3" name="ca_doj_1" value="<?php echo $ca_doj_1; ?>"/>
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--10 line close-->

                                <div class="row"><!--Designation-->
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label></label>	
                                        </div>	
                                    </div>
                                    <div class="col-md-11">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="ca_desig_1" value="<?php echo $ca_desig_1; ?>" onkeyup = "Validate(this)"/>

                                        </div>
                                    </div>
                                </div><!--10 line close-->

                                <div class="row"><!--Department-->
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label></label>	
                                        </div>	
                                    </div>
                                    <div class="col-md-11">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="ca_department_1"  value="<?php echo $ca_department_1; ?>" onkeyup = "Validate(this)"/>

                                        </div>
                                    </div>
                                </div><!--10 line close-->

                                <div class="row"><!--Monthly Income-->
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label></label>	
                                        </div>	
                                    </div>
                                    <div class="col-md-11">
                                        <div class="form-group">
                                            <input type="text" class="form-control" size="50" name="ca_monthly_income_1" value="<?php echo number_format((float) $ca_monthly_income_1, 2, '.', ''); ?>" onkeyup = "ValidateIncome(this)"/>

                                        </div>
                                    </div>
                                </div><!--10 line close-->

                                <div class="row"><!--Address Of Employer-->
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label></label>	
                                        </div>	
                                    </div>
                                    <div class="col-md-11">
                                        <div class="form-group">	
                                            <input type="text" class="form-control" name="ca_addr_of_employer_1" value="<?php echo $ca_addr_of_employer_1; ?>"/>

                                        </div>
                                    </div>
                                </div><!--10 line close-->
                                <div class="row"><!--Address Of Employer-->
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label></label>	
                                        </div>	
                                    </div>
                                    <div class="col-md-11">
                                        <div class="form-group">	
                                            <input type="text" class="form-control" name="ca_addr_of_pincode_1" value="<?php echo $ca_addr_of_pincode_1; ?>" onKeyUp="Emppincode_validate3(this.value);" style="margin-top: 5px;"/>
                                            <label class="status" id="statusemppincode3"></label>
                                        </div>
                                    </div>
                                </div><!--emp pincode-->
                            </div><!--1/2 row div close-->

                        </div><!--main 1 row div close-->
                        <br>
                        <div class="row" ><!--1 line-->
                            <div class="col-md-7">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="Any Additional Information or Requirement">31. Any Additional Information</label>
                                        </div>	
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <textarea class="form-control" id="additional_info" rows="5" cols="20" name="additional_info" ><?php echo $additional_info; ?></textarea>


                                        </div>
                                    </div>
                                </div>

                            </div><!--1 line close-->

                        </div>

                        <br>
                        <br>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Ref. Shri.</label>
                                    <input type="text" disabled/>
                                </div>
                                <div class="form-group">
                                    <label>Place</label>
                                    <input type="text" disabled/>
                                </div>
                                <div class="form-group">
                                    <label>Date</label>
                                    <input type="text" disabled/>
                                </div>


                            </div>
                            <br>
                            <br>
                            <br>
                            <div class="col-md-3">
                                Sign. of Applicant
                            </div>
                            <div class="col-md-3">
                                Sign. of Co-Applicant
                            </div>
                            <div class="col-md-3">
                                Sign. of Co-Applicant
                            </div>
                        </div>
                        <br> <br> <br> <br>




                        <div class="row">  

                            <p class="text-center">
                                <input type="submit" name="submit" class="btn btn-success" value="submit"/>
                                <!--   <button id="submit" name="submit" class="btn btn-success" value="1">Submit</button>-->
                                <!--button id="submit" name="submit" class="btn btn-info" value="1">Update</button-->
                                <a href="javascript: history.go(-1)" class="btn btn-default" role="button">Cancel</a>
                            </p> 
                        </div>


                    </form>

                </div><!-- printable-->
            </div><!--container div-->

        </div><!--main-->
        <script src="<?php echo base_url('resources/js/application_form.js'); ?>" type="text/javascript"></script>
        <script>
                                                $(document).ready(function () {

                                                    $('#toppageheader').html('Application Form Update');
                                                    $("a:contains('Application)").parent().addClass('active');
                                                });

$(document).ready(function () {

                                                                var type = $('#unittype').val();
                                                                if (type == 'Plot') {
                                                                 
                                                                    $('.ffca').hide();
                                                                    $('.gfca').hide();
                                                                    $('.tca').hide();
                                                                    $('.rca').hide();
                                                                } else {
                                                                    $('.ffca').show();
                                                                    $('.gfca').show();
                                                                    $('.tca').show();
                                                                    $('.rca').show();
                                                                }


                                                            });


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
                                                        yearRange: '-100y:c+100',
                                                    });
                                                });
                                                $(function () {
                                                    $("#ca_doj3").datepicker({
                                                        dateFormat: 'dd-mm-yy',
                                                        changeMonth: true,
                                                        changeYear: true,
                                                        yearRange: '-100y:c+100'

                                                    });
                                                });
                                                $(function () {
                                                    $("#appl_doj").datepicker({
                                                        dateFormat: 'dd-mm-yy',
                                                        changeMonth: true,
                                                        changeYear: true,
                                                        yearRange: '-100y:c+100'

                                                    });
                                                });
                                                $(function () {
                                                    $("#ca_doj").datepicker({
                                                        dateFormat: 'dd-mm-yy',
                                                        changeMonth: true,
                                                        changeYear: true,
                                                        yearRange: '-100y:c+100'

                                                    });
                                                });
                                                $(function () {
                                                    $("#cheque_dt").datepicker({
                                                        dateFormat: 'dd-mm-yy',
                                                        changeMonth: true,
                                                        changeYear: true,
                                                        yearRange: '-100y:c+100'

                                                    });
                                                });

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
                                                });

                                                // co applicant image 2

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

                                                // co applicant image 3

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





/////// validations

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


                                                $(document).ready(function () {
                                                    $(window).keydown(function (event) {
                                                        if (event.keyCode == 13) {
                                                            event.preventDefault();
                                                            return false;
                                                        }
                                                    });
                                                });
                                                function makethisdecimal(id)
                                                {
                                                    //alert(id);
                                                    var onen = Number(document.getElementById(id).value);
                                                    var a = onen.toFixed(2);
                                                    document.getElementById(id).value = a;

                                                }

        </script>
    </body>
</html>

