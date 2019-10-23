
<html>
    <head>
        <title>View Application</title>
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

           
            .thumbnail{
                border: 1px solid #fff !important;
            }
            .panel-heading {
                padding: 10px 15px 28px !important;
            }
            @page {
                size: auto;   /* auto is the initial value */
                margin: 2mm 8mm 5mm 10mm;  /* this affects the margin in the printer settings */

            }
            label {
                font-weight: 400 !important;
            }
            body {
                font-weight: 400;
            }
            @media print
            {
                #controls, .footer, .footerarea{ display: none; }
                /*@page {size: landscape}*/
                .non-printable { display: none; }
                #printable { display: block;}
                html,body {
                    font-size: 20px !important;
                    line-height: 0;
                    font-weight: 400;
                    width: 210mm !important;
                    height: 310mm !important;/*297mm !important;*/
                    overflow: hidden;
		    background: #FFF; 
                }
                .non-printable { display: none; }
                #printable { display: block;}
                label {
                    font-weight: 400 !important;
                }
                .table{
                    font-size: 10px;
                }
                .table > tbody > tr > td{
                    padding: 0px !important;
                    padding-left: 15px !important;
                }
                label{
                    font-size: 10px !important;
                }
                .col-md-6{
                    font-size: 10px !important;
                }
                p{
                    font-size: 10px !important; 
                }
                h5{
                    line-height: 1.8;
                    font-size: 10px;
                    font-family: 'Titillium Web';
                }
                .add{
                    margin-top:-6;
                    line-height:1.05;
                }
                .addd{
                    margin-top:-8;
                    line-height:1.05;
                }
                .adddd{
                    margin-top:-9;
                    line-height:1.05;
                }

                .col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12{
                    padding-right: 7px !important; 
                    padding-left: 12px !important; 
                }
                .thumbnail{
                    width: 65px !important;
                }

            }


            h5{
                line-height: 1.8;
                font-family: 'Titillium Web';
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
                height: 100%;
                background-color: #fff;

            }
            textarea {
                resize: none;
            }
            .the-legend {
                border-style: none;
                border-width: 0;
                font-size: 14px;
                line-height: 20px;
                margin-bottom: 0;
                width: auto;
                padding: 0 10px;
                font-size: 16px;
                font-weight: bold;
                text-align: right;
            }
            .the-fieldset {
                border: 1px solid #000;
                padding: 10px;
            }
            .table > tbody > tr > td{
                padding: 2px;
                padding-left: 15px;
            }
        </style>
    </head>


    <body style=" font-size: 12px !important;">
            <?php
            require_once('assets/top_menu.php');
            require_once('assets/side_menu.php');
            ?>        
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
        foreach ($this->View_applicant_info->get_projectinfo($user) as $row) {
            ?>
            <?php $first_floor_carpet_area = $row->first_floor_carpet_area; ?>

            <?php $ffresult = $first_floor_carpet_area; ?>

            <?php $ground_floor_carpet_area = $row->ground_floor_carpet_area; ?>

            <?php $ggresult = $ground_floor_carpet_area; ?>



        <?php } ?>





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
            <?php $appl_desig = $row->appl_desig ?>
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
            <?php $login_id = $row->login_id ?>
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


            <?php $ca_name = $row->ca_name ?>
            <?php $ca_mr_mrs = $row->ca_mr_mrs; ?>
            <?php $ca_dob = $row->ca_dob ?>
            <?php $ca_age = $row->ca_age ?>
            <?php $ca_swd_of = $row->ca_swd_of ?>
            <?php $co_present_add = $row->co_present_add ?>
            <?php $co_parma_add = $row->co_parma_add ?>
            <?php $ca_pincode = $row->ca_pincode ?>
            <?php $ca_son_doughter_wife = $row->ca_son_doughter_wife ?>
            <?php $ca_son_doughter_wife_mr_mrs = $row->ca_son_doughter_wife_mr_mrs ?>
            <?php $ca_monthly_income = $row->ca_monthly_income ?>
            <?php $ca_mo_no = $row->ca_mo_no ?>
            <?php $ca_landline_no = $row->ca_landline_no ?>
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
            <?php $ca_bank_name_ac_no = $row->ca_bank_name_ac_no ?>
            <?php $ca_img_path = $row->ca_img_path ?>

        <?php } ?>


        <?php
        foreach ($this->View_applicant_info->view_sheet1($pre_salesid) as $row) {
            ?>
            <?php $project_id = $row->project_id; ?>
            <?php //$name = $row->name; ?>
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
            <?php $parking_type = $row->parking_type; ?>

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
            <div class="container">
                <div id="printable">


                    <?php
                    foreach ($this->View_applicant_info->get_login_info($login_id) as $row) {
                        ?> 
                        <?php //$login_usernsme = $row->username; ?>
                        <?php $first_name = $row->first_name; ?>
                        <?php $last_name = $row->last_name; ?>
                        <?php $user_id = $row->user_id; ?>
                        <?php $username = $row->username; ?>

                    <?php } ?>

                    <!--label> Executive Name :- &nbsp;<?php //echo $first_name . nbs(1) . $last_name;                                                  ?></label-->

                    <form>

                        <fieldset class="the-fieldset">
                            <legend class="the-legend"><h4><b>APPLICATION FORM</b></h4></legend>
                            <!--address start ----->



                            <!--address area is end----->

                            <!--project ----->
                            <div class="row">

                                <div class="col-md-6 col-xs-6">

                                    <div class="row">
                                        <div class="col-md-12 col-xs-12">
                                            <img src="<?php echo base_url('resources/image/ESSARJEE_logo_small.png'); ?>" alt="Arvo ERP" class="img-responsive" style="height:37px;"/>

                                            <h5 style="margin-bottom: 0px;"> To
                                                The Managing Director,<br>
                                                <?php
                                                foreach ($this->Company_info_model->get_Company_name() as $row) {
                                                    ?> 
                                                    <span><?php echo $row->value; ?></span>,
                                                <?php } ?><br>
                                                <?php
                                                foreach ($this->Payment_model->get_company_Address() as $row) {
                                                    ?> 
                                                    <span><?php echo $row->value; ?></span>
                                                <?php } ?>
                                                <?php
                                                foreach ($this->Payment_model->get_company_Pincode() as $row) {
                                                    ?>
                                                    <span><?php echo $row->value; ?>.</span> 
                                                </h5>
                                            <?php } ?>


                                            <h5 style="">Project :
                                                <?php echo $project_name; ?>
                                                <input type="hidden" class="form-control" name="example" id="example"/> &nbsp;&nbsp;<?php echo $block; ?>

                                                <?php
                                                foreach ($this->Company_info_model->get_company_info() as $row) {
                                                    ?> 
                                                    <?php echo $row->attribute; ?>&nbsp;:&nbsp;
                                                    <?php echo $row->value; ?>
                                                <?php } ?>
                                                <br>
                                                <?php
                                                foreach ($this->Payment_model->get_company_CIN() as $row) {
                                                    ?>  <?php echo $row->attribute; ?> :
                                                    <?php echo $row->value; ?>
                                                <?php } ?>
                                                <?php
                                                foreach ($this->Payment_model->get_company_info2() as $row) {
                                                    ?> 

                                                <?php } ?>




                                                Application Number:-  <?php echo $appl_id; ?> <br>

                                                Date:&nbsp;
                                                <?php
                                                $x = explode(' ', $date);
                                                $date = new DateTime($x[0]);
                                                echo $date->format('d-m-Y');
                                                ?>

                                                <span id="date22" style="float: right;"></span>
                                            </h5>
                                        </div>
                                    </div>
                                    <!-- image row -------------------------------image row----------------------------------------------------------- -->

                                    <div class="row" style="margin-left: -10px !important;">
                                        <div class="col-sm-4 col-md-4 col-xs-4">
                                            <div class="thumbnail">
                                                <img src="<?php echo base_url($img_path); ?>"  name="applicant_imgaa" id="profile-img-tag" class="img-rounded img-responsive"/>
                                                <div class="caption">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4 col-md-4 col-xs-4"  id="ca_img_two">
                                            <div class="thumbnail">
                                                <img src="<?php echo base_url($ca_img_path); ?>"  name="coapplicant_imgss" id="profile-img-tag2" class="img-rounded img-responsive"/>
                                                <div class="caption">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4 col-md-4 col-xs-4" id="ca_img_three">
                                            <div class="thumbnail">
                                                <img src="<?php echo base_url($ca_img_path_1); ?>"  name="coapplicant_imgss_1" id="profile-img-tag_1" class="img-rounded img-responsive"/>
                                                <div class="caption">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- image row -------------------------------image row-------------------------------------------------------------------- -->

                                <div class="col-md-6 col-xs-6">
                                    <table class="table table-bordered" style="margin-bottom: 0;">
                                        <tr>
                                            <td>
                                                <label>Unit No. </label>
                                            </td>
                                            <td>
                                                <label><?php echo $unit_no; ?></label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>Type </label>
                                            </td>
                                            <td>
                                                <label><?php echo $type; ?></label>
                                            </td>
                                        </tr>
                                        <?php
                                        if ($type == 'Shop') {
                                            
                                        } else {
                                            ?>
                                            <tr>
                                                <td>
                                                    <label>Block </label>
                                                </td>
                                                <td>
                                                    <label><?php echo $category; ?></label>
                                                </td>
                                            </tr>
                                        <?php } ?>

                                        <?php if (($type == 'Flat') || ($type == 'Shop')) { ?>
                                            <?php if ($type == 'Flat') { ?>
                                                <tr>
                                                    <td>
                                                        <label>Parking Type</label>
                                                    </td>
                                                    <td>
                                                        <label><?php echo $parking_type; ?></label> 
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label>Parking Number</label>
                                                    </td>
                                                    <td>
                                                        <label><?php echo $parking_no; ?></label> 
                                                    </td>
                                                </tr>
                                                <?php
                                            } else {
                                                
                                            }
                                            ?>

                                        <?php } else { ?>
                                            <tr>
                                                <td>
                                                    <label>Plot Size </label>
                                                </td>
                                                <td>
                                                    <label><?php echo number_format((float) $length_m, 2, '.', ''); ?> x <?php echo number_format((float) $width_m, 2, '.', ''); ?> &nbsp;&nbsp;&nbsp;Sq. Mt.</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Plot Area 
                                                </td>
                                                <td>
                                                    <label><?php echo number_format((float) $length_m * $width_m, 2, '.', ''); ?></label>  &nbsp;&nbsp;&nbsp;Sq.Mt
                                                </td>
                                            </tr>
                                            <tr <?php if (($type == 'Plot') || ($type == 'Shop')) echo "style='display: none'"; ?>>
                                                <td>
                                                    <label>Ground Floor Carpet Area</label>
                                                </td>
                                                <td>
                                                    <label><?php echo number_format((float) $ggresult, 2, '.', ''); ?>&nbsp;&nbsp;&nbsp; Sq. Mt. &nbsp;&nbsp;&nbsp;
                                                        <?php echo number_format((float) $ggresult * 10.76, 2, '.', ''); ?>&nbsp;&nbsp;&nbsp;Sq. Ft.</label>
                                                </td>
                                            </tr>
                                            <tr <?php if (($type == 'Plot') || ($type == 'Shop')) echo "style='display: none'"; ?>>
                                                <td>
                                                    <label>First Floor Carpet Area </label>
                                                </td>
                                                <td>
                                                    <label><?php echo number_format((float) $ffresult, 2, '.', ''); ?> &nbsp;&nbsp;&nbsp;Sq. Mt.&nbsp;&nbsp;&nbsp;
                                                        <?php echo number_format((float) $ffresult * 10.76, 2, '.', ''); ?> &nbsp;&nbsp;&nbsp;Sq. Ft.</label>
                                                </td>
                                            </tr>
                                            <tr <?php if (($type == 'Plot') || ($type == 'Shop')) echo "style='display: none'"; ?>>
                                                <td>
                                                    <label>Total Carpet area</label>
                                                </td>
                                                <td>
                                                    <?php $totalcarpetarea = $ffresult + $ggresult; ?>
                                                    <label><?php echo number_format((float) $totalcarpetarea, 2, '.', ''); ?>&nbsp;&nbsp;&nbsp; Sq. Mt. &nbsp;&nbsp;&nbsp;
                                                        <?php echo number_format((float) $totalcarpetarea * 10.76, 2, '.', ''); ?>&nbsp;&nbsp;&nbsp;Sq. Ft.</label>
                                                </td>
                                            </tr>
                                            <tr <?php if (($type == 'Plot')) echo "style='display: none'"; ?>>
                                                <td>
                                                    <label>Roof Covered Area </label>
                                                </td>
                                                <td>
                                                    <label><?php echo number_format((float) $total_roof, 2, '.', ''); ?> &nbsp;&nbsp;&nbsp;Sq. Mt.</label> 
                                                </td>
                                            </tr>
                                            <tr <?php if (($type == 'Plot') || ($type == 'Shop')) echo "style='display: none'"; ?>>
                                                <td>
                                                    <label>Roof Covered Area </label>
                                                </td>
                                                <td>
                                                    <label><?php echo number_format((float) $total_roof, 2, '.', ''); ?> &nbsp;&nbsp;&nbsp;Sq. Mt.</label> 
                                                </td>
                                            </tr>
                                            <tr <?php if (($type == 'Plot') || ($type == 'Duplex') || ($type == 'Shop')) echo "style='display: none'"; ?>>
                                                <td>
                                                    <label>Parking option</label>
                                                </td>
                                                <td>
                                                    <label><?php echo $parking_type; ?></label> 
                                                </td>
                                            </tr>
                                            <tr <?php if (($type == 'Plot') || ($type == 'Duplex') || ($type == 'Shop')) echo "style='display: none'"; ?>>
                                                <td>
                                                    <label>Parking Number</label>
                                                </td>
                                                <td>
                                                    <label><?php echo $parking_no; ?></label> 
                                                </td>
                                            </tr>
                                        <?php } ?>                       
                                    </table>
                                    <!--5 line close-->

                                    <table class="table table-bordered" style="border-top: none !important;">
                                        <tr>
                                            <td colspan="4">
                                                Unit Boundaries
                                            </td>                                              
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>East By </label>
                                            </td>
                                            <td>
                                                <label><?php echo $east_by; ?></label>
                                            </td>
                                            <td>
                                                <label>West By </label>
                                            </td>
                                            <td>
                                                <label><?php echo $west_by; ?></label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>South By </label>
                                            </td>
                                            <td>
                                                <label><?php echo $north_by; ?></label>
                                            </td>
                                            <td>
                                                <label>North By </label>
                                            </td>
                                            <td>
                                                <label><?php echo $south_by; ?></label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>Interest Rate </label>
                                            </td>

                                            <td colspan="3">
                                                <label>
                                                    <?php
                                                    //  print_r( $user); echo'<br/>';
                                                    foreach ($this->Realestate_model->getintrest($appl_id) as $row) {
                                                        ?>

                                                        <?php echo $row->rate; ?>
                                                    <?php } ?>
                                                </label>
                                            </td>
                                        </tr>
                                    </table>                                                                               

                                </div> 
                            </div>
                            <!--project end ----->

                            <!-- -------------------------------------Applicant----------------------------------------------Applicant-------------------------------------------------Applicant---------------------------------------------- -->
                            <div class="container">
                                <div class="row"><!--1 row-->
                                    <div class="col-md-6 col-sm-6 col-xs-6" ><!--1/1 row div-->

                                        <p class="text-center" style="margin-top:-10px">Applicant</p>
                                        <hr style="margin-top: 10px;">

                                        <div class="row"><!--1 line-->
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <label>1.</label>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-4">
                                                <div class="form-group">
                                                    <label>Name</label>
                                                </div>	
                                            </div>
                                            <div class="col-md-7 col-sm-7 col-xs-7">
                                                <div class="form-group">
                                                    <label><?php echo $mr_mrs; ?> <?php echo $name; ?></label>
                                                </div>
                                            </div>
                                        </div><!--1 line close-->

                                        <div class="row"><!--2 line-->
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <label>2.</label>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-4">
                                                <div class="form-group">
                                                    <label>Date of Birth</label>
                                                </div>	
                                            </div>
                                            <div class="col-md-7 col-sm-7 col-xs-7">
                                                <div class="form-group">
                                                    <label><?php echo $fappl_dob; ?> Age <?php echo $fappl_age; ?></label>
                                                </div>
                                            </div>
                                        </div><!--2 line close-->

                                        <div class="row"><!--3 line-->
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <label>3.</label>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-4">
                                                <div class="form-group">
                                                    <label>S/o. or W/o. or D/o</label>
                                                </div>	
                                            </div>
                                            <div class="col-md-7 col-sm-7 col-xs-7">
                                                <div class="form-group">
                                                    <label><?php echo $son_doughter_wife; ?> <?php echo $son_doughter_wife_mr_mrs; ?> <?php echo $swd_of; ?></label>
                                                </div>
                                            </div>                               
                                        </div><!--3 line close-->


                                        <div class="row"><!--4 line-->
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <label>4.</label>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-4">
                                                <div class="form-group">
                                                    <label>Present Address</label>
                                                </div>	
                                            </div>
                                            <div class="col-md-5 col-sm-6 col-xs-5">
                                                <div class="form-group add">
                                                    <label><?php echo $present_addr; ?></label>
                                                </div>
                                            </div> 
                                        </div><!--4 line close-->

                                        <div class="row"><!--4 line-->
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <label>5.</label>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-4">
                                                <div class="form-group">
                                                    <label>Permanent Address</label>
                                                </div>	
                                            </div>
                                            <div class="col-md-5 col-sm-5 col-xs-5">
                                                <div class="form-group add">
                                                    <label><?php echo $permanent_addr; ?></label>
                                                </div>
                                            </div> 
                                        </div><!--4 line close-->

                                        <div class="row"><!--5 line-->
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <label>5.</label>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-4">
                                                <div class="form-group">
                                                    <label>Pin Code</label>
                                                </div>	
                                            </div>
                                            <div class="col-md-7 col-sm-7 col-xs-7">
                                                <div class="form-group">
                                                    <label><?php echo $pin_code; ?></label>
                                                </div>
                                            </div> 
                                        </div><!--4 line close-->


                                        <div class="row"><!--9 line-->
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <label>6.</label>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-4">
                                                <div class="form-group">
                                                    <label>Mobile number</label>
                                                </div>	
                                            </div>
                                            <div class="col-md-7 col-sm-7 col-xs-7">
                                                <div class="form-group">
                                                    <label><?php echo $contact_mobile; ?></label>
                                                </div>
                                            </div> 
                                        </div>

                                        <div class="row"><!--8 Email address-->
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <label>8.</label>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-4">
                                                <div class="form-group">
                                                    <label>Email address</label>
                                                </div>	
                                            </div>
                                            <div class="col-md-7 col-sm-7 col-xs-7">
                                                <div class="form-group">
                                                    <label><?php echo $email; ?></label>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="row"><!--9 Adhar Card No.-->
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <label>9.</label>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-4">
                                                <div class="form-group">
                                                    <label>Aadhar No.</label>
                                                </div>	
                                            </div>
                                            <div class="col-md-7 col-sm-7 col-xs-7">
                                                <div class="form-group">
                                                    <label><?php echo $aadhar_no; ?></label>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="row"><!--10 PAN Card No.-->
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <label>10.</label>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-4">
                                                <div class="form-group">
                                                    <label>PAN No.</label>
                                                </div>	
                                            </div>
                                            <div class="col-md-7 col-sm-7 col-xs-7">
                                                <div class="form-group">
                                                    <label><?php echo $pan; ?></label>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="row"><!--11 PAN Card No.-->
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <label>11.</label>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-4">
                                                <div class="form-group">
                                                    <label>Qualification</label>
                                                </div>	
                                            </div>
                                            <div class="col-md-7 col-sm-7 col-xs-7">
                                                <div class="form-group">
                                                    <label><?php echo $qualification; ?></label>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="row"><!--12. PAN Card No.-->
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <label>12.</label>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-4">
                                                <div class="form-group">
                                                    <label>Occupation</label>
                                                </div>	
                                            </div>
                                            <div class="col-md-7 col-sm-7 col-xs-7">
                                                <div class="form-group">
                                                    <label><?php echo $occupation; ?></label>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="row"><!--12. PAN Card No.-->
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <label>13.</label>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-4">
                                                <div class="form-group">
                                                    <label>Company Name</label>
                                                </div>	
                                            </div>
                                            <div class="col-md-7 col-sm-7 col-xs-7">
                                                <div class="form-group">
                                                    <label><?php echo $company_name; ?></label>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="row"><!--14. Date of Joining-->
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <label>14.</label>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-4">
                                                <div class="form-group">
                                                    <label>Date of Joining</label>
                                                </div>	
                                            </div>
                                            <div class="col-md-7 col-sm-7 col-xs-7">
                                                <div class="form-group">
                                                    <label><?php echo $appl_doj; ?></label>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="row"><!--15. Designation-->
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <label>15.</label>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-4">
                                                <div class="form-group">
                                                    <label>Designation</label>
                                                </div>	
                                            </div>
                                            <div class="col-md-7 col-sm-7 col-xs-7">
                                                <div class="form-group">
                                                    <label><?php echo $appl_desig; ?></label>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="row"><!--16. Department-->
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <label>16.</label>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-4">
                                                <div class="form-group">
                                                    <label>Department</label>
                                                </div>	
                                            </div>
                                            <div class="col-md-7 col-sm-7 col-xs-7">
                                                <div class="form-group">
                                                    <label><?php echo $appl_dept; ?></label>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="row"><!--17. Monthly Income-->
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <label>17.</label>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-4">
                                                <div class="form-group">
                                                    <label>Monthly Income</label>
                                                </div>	
                                            </div>
                                            <div class="col-md-7 col-sm-7 col-xs-7">
                                                <div class="form-group">
                                                    <label><?php echo number_format((float) $appl_monthly_income, 2, '.', ''); ?></label>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="row"><!--18. Address Of Employer-->
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <label>18.</label>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-4">
                                                <div class="form-group">
                                                    <label>Address Of Employer</label>
                                                </div>	
                                            </div>
                                            <div class="col-md-7 col-sm-7 col-xs-7">
                                                <div class="form-group">
                                                    <label><?php echo $fa_empl_addr; ?></label>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="row"><!--18. Address Of Employer-->
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <label>19.</label>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-4">
                                                <div class="form-group">
                                                    <label>Pin Code</label>
                                                </div>	
                                            </div>
                                            <div class="col-md-7 col-sm-7 col-xs-7">
                                                <div class="form-group">
                                                    <label><?php echo $pin_code_emp; ?></label>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="row"><!--19. No. of Earning Members-->
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <label>20.</label>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-4">
                                                <div class="form-group">
                                                    <label>No. of Earning Members</label>
                                                </div>	
                                            </div>
                                            <div class="col-md-7 col-sm-7 col-xs-7">
                                                <div class="form-group">
                                                    <label><?php echo $earning_members; ?></label>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="row"><!--20. No.of Dependent-->
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <label>21.</label>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-4">
                                                <div class="form-group">
                                                    <label>No.of Dependent</label>
                                                </div>	
                                            </div>
                                            <div class="col-md-7 col-sm-7 col-xs-7">
                                                <div class="form-group">
                                                    <label><?php echo $no_of_dependent; ?></label>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="row"><!--20. No.of Dependent-->
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <label>22.</label>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-4">
                                                <div class="form-group">
                                                    <label>Dependent Details</label>
                                                </div>	
                                            </div>
                                            <div class="col-md-7 col-sm-7 col-xs-7">
                                                <div class="form-group">
                                                    <label><?php echo $dependents_details; ?></label>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="row"><!--21.o-Owner/Sole Owner-->
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <label>23.</label>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-4">
                                                <div class="form-group">
                                                    <label>Co-Owner/Sole Owner</label>
                                                </div>	
                                            </div>
                                            <div class="col-md-7 col-sm-7 col-xs-7">
                                                <div class="form-group">
                                                    <label><?php echo $solo_coowner; ?></label>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="row"><!--22. Loan Requied-->
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <label>24.</label>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-4">
                                                <div class="form-group">
                                                    <label>Loan Required</label>
                                                </div>	
                                            </div>
                                            <div class="col-md-7 col-sm-7 col-xs-7">
                                                <div class="form-group">
                                                    <label><?php echo $loan_reqs; ?></label>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="row"><!--22.Amount of Loan Required-->
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <label>25.</label>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-4">
                                                <div class="form-group">
                                                    <label>Amount of Loan Required</label>
                                                </div>	
                                            </div>
                                            <div class="col-md-7 col-sm-7 col-xs-7">
                                                <div class="form-group">
                                                    <label><?php echo number_format((float) $amt_of_loan, 2, '.', ''); ?></label>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="row"><!--24.Amount of Loan Required-->
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <label>26.</label>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-4">
                                                <div class="form-group">
                                                    <label>Bank Name</label>
                                                </div>	
                                            </div>
                                            <div class="col-md-7 col-sm-7 col-xs-7">
                                                <div class="form-group">
                                                    <label><?php echo $bank_name; ?></label>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="row"><!--25.Account No.-->
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <label>27.</label>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-4">
                                                <div class="form-group">
                                                    <label>Account No.</label>
                                                </div>	
                                            </div>
                                            <div class="col-md-7 col-sm-7 col-xs-7">
                                                <div class="form-group">
                                                    <label><?php echo $acc_no; ?></label>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="row"><!--25.Account No.-->
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <label>28.</label>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-4">
                                                <div class="form-group">
                                                    <label>Mode of Payment</label>
                                                </div>	
                                            </div>
                                            <div class="col-md-7 col-sm-7 col-xs-7">
                                                <div class="form-group">
                                                    <label><?php echo $mode_of_payment; ?></label>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="row"><!--27. Booking Amount Rs..-->
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <label>29.</label>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-4">
                                                <div class="form-group">
                                                    <label>Booking Amount Rs.</label>
                                                </div>	
                                            </div>
                                            <div class="col-md-7 col-sm-7 col-xs-7">
                                                <div class="add">
                                                    <div class="row">
                                                        <label class="col-md-5 col-sm-5 col-xs-5">Amount Rs. </label>
                                                        <label class="col-md-7 col-sm-7 col-xs-7"><?php echo number_format((float) $booking_amt, 2, '.', ''); ?></label>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-md-5 col-sm-5 col-xs-5">Cheque No. </label>
                                                        <label class="col-md-7 col-sm-7 col-xs-7"><?php echo $cheque_no; ?></label>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-md-6 col-sm-6 col-xs-6">Cheque Date. </label>
                                                        <label class="col-md-6 col-sm-6 col-xs-6"><?php echo $cheque_dt; ?></label>
                                                    </div>                                                                         
                                                </div>                                                                         
                                            </div> 
                                        </div>

                                    </div>

                                    <!-- ----------------------------------------------------------  Co-Applicant  -------------------------------------------------------------  Co-Applicant  ----------------------------------------- -->

                                    <div class="col-md-3 col-sm-3 col-xs-3">

                                        <p style="margin-top:-10px;">Co-applicant</p>
                                        <hr style="margin-top: 10px;">

                                        <div class="row"><!--1. ca_mr_mrs-->
                                            <div class="col-md-7 col-sm-7 col-xs-10">
                                                <div class="form-group">
                                                    <input id="ca_two_show_div" type="hidden" value="<?php echo $ca_name; ?>"/>
                                                    <label id="c_mr_hide"><?php echo $ca_mr_mrs; ?></label> <label><?php echo $ca_name; ?>&nbsp;</label>
                                                </div>	
                                            </div>
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <label></label>
                                            </div> 
                                        </div> 

                                        <div class="row"><!--2. ca_dob-->
                                            <div class="col-md-7 col-sm-7 col-xs-10">
                                                <input id="ca_two_show_div_age" type="hidden" value="<?php echo $ca_dob; ?>" />
                                                <div class="form-group">
                                                    <label id="ca_age_two"><?php echo $ca_dob; ?> Age <?php echo $ca_age; ?></label> <label>&nbsp;</label>
                                                </div>

                                            </div>
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <label></label>
                                            </div> 
                                        </div>  

                                        <div class="row"><!--3. ca_son_doughter_wife-->
                                            <div class="col-md-8 col-sm-8 col-xs-11">
                                                <div class="form-group">
                                                    <label id="ca_son_dou_wi"><?php echo $ca_son_doughter_wife; ?></label> <label id="ca_son_dou_wi_mr_mrs"><?php echo $ca_son_doughter_wife_mr_mrs; ?> <?php echo $ca_swd_of; ?>&nbsp;</label>
                                                </div>	
                                            </div>
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <label></label>
                                            </div> 
                                        </div> 

                                        <div class="row"><!--4. co_present_add-->
                                            <div class="col-md-10 col-sm-10 col-xs-10">
                                                <div class="form-group addd">
                                                    <label><?php echo $co_present_add; ?>&nbsp;</label>
                                                </div>	
                                            </div>  
                                        </div>  

                                        <div class="row"><!--5. co_parma_add-->
                                            <div class="col-md-10 col-sm-10 col-xs-10">
                                                <div class="form-group addd">
                                                    <label><?php echo $co_parma_add; ?>&nbsp;</label>
                                                </div>	
                                            </div>
                                        </div>  

                                        <div class="row"><!--6. co_parma_addd-->
                                            <div class="col-md-10 col-sm-10 col-xs-10">
                                                <div class="form-group">
                                                    <label><?php echo $ca_pincode; ?>&nbsp;</label>
                                                </div>	
                                            </div>
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <label></label>
                                            </div> 
                                        </div>  

                                        <div class="row"><!--6. Mobile number-->
                                            <div class="col-md-7 col-sm-7 col-xs-10">
                                                <div class="form-group">
                                                    <label><?php echo $ca_mo_no; ?>&nbsp;</label>
                                                </div>	
                                            </div>
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <label></label>
                                            </div> 
                                        </div> 

                                        <div class="row"><!--8. ca_email-->
                                            <div class="col-md-7 col-sm-7 col-xs-10">
                                                <div class="form-group">
                                                    <label><?php echo $ca_email; ?>&nbsp;</label>
                                                </div>	
                                            </div>
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <label></label>
                                            </div> 
                                        </div> 


                                        <div class="row"><!--9. ca_aadhar_no-->
                                            <div class="col-md-7 col-sm-7 col-xs-10">
                                                <input type="hidden" id="ca_two_show_div_aadhar" value="<?php echo $ca_aadhar_no; ?>" />
                                                <div class="form-group">
                                                    <label id="ca_aadhar_two"><?php echo $ca_aadhar_no; ?></label> <label>&nbsp;</label>
                                                </div>	
                                            </div>
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <label></label>
                                            </div> 
                                        </div> 

                                        <div class="row"><!--10. ca_pan-->
                                            <div class="col-md-7 col-sm-7 col-xs-10">
                                                <div class="form-group">
                                                    <label><?php echo $ca_pan; ?>&nbsp;</label>
                                                </div>	
                                            </div>
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <label></label>
                                            </div> 
                                        </div> 

                                        <div class="row"><!--11. ca_Qualification-->
                                            <div class="col-md-7 col-sm-7 col-xs-10">
                                                <div class="form-group">
                                                    <label><?php echo $ca_Qualification; ?>&nbsp;</label>
                                                </div>	
                                            </div>
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <label></label>
                                            </div> 
                                        </div> 

                                        <div class="row"><!--12. ca_occupation-->
                                            <div class="col-md-7 col-sm-7 col-xs-10">
                                                <div class="form-group">
                                                    <label id="ca_occ"><?php echo $ca_occupation; ?>&nbsp;</label>
                                                </div>	
                                            </div>
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <label></label>
                                            </div> 
                                        </div> 

                                        <div class="row"><!--13. ca_company_name-->
                                            <div class="col-md-7 col-sm-7 col-xs-10">
                                                <div class="form-group">
                                                    <label><?php echo $ca_company_name; ?>&nbsp;</label>
                                                </div>	
                                            </div>
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <label></label>
                                            </div> 
                                        </div> 

                                        <div class="row"><!--14. ca_doj-->
                                            <div class="col-md-7 col-sm-7 col-xs-10">
                                                <div class="form-group">
                                                    <label><?php echo $ca_doj; ?>&nbsp;</label>
                                                </div>	
                                            </div>
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <label></label>
                                            </div> 
                                        </div> 

                                        <div class="row"><!--15. ca_desig-->
                                            <div class="col-md-7 col-sm-7 col-xs-10">
                                                <div class="form-group">
                                                    <label><?php echo $ca_desig; ?>&nbsp;</label>
                                                </div>	
                                            </div>
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <label></label>
                                            </div> 
                                        </div> 

                                        <div class="row"><!--16. ca_department-->
                                            <div class="col-md-7 col-sm-7 col-xs-10">
                                                <div class="form-group">
                                                    <label><?php echo $ca_department; ?>&nbsp;</label>
                                                </div>	
                                            </div>
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <label></label>
                                            </div> 
                                        </div> 

                                        <div class="row"><!--17. ca_monthly_income-->
                                            <div class="col-md-7 col-sm-7 col-xs-10">
                                                <div class="form-group" id="ca_mo_inc">
                                                    <label><?php echo number_format((float) $ca_monthly_income, 2, '.', ''); ?>&nbsp;</label>
                                                </div>	
                                            </div>
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <label>&nbsp;</label>
                                            </div> 
                                        </div> 

                                        <div class="row"><!--18. ca_addr_of_employer-->
                                            <div class="col-md-7 col-sm-7 col-xs-10">
                                                <div class="form-group">
                                                    <label><?php echo $ca_addr_of_employer; ?>&nbsp;</label>
                                                </div>	
                                            </div>
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <label></label>
                                            </div> 
                                        </div>                                                                                 
                                        <div class="row"><!--18. ca_addr_of_employer-->
                                            <div class="col-md-7 col-sm-7 col-xs-10">
                                                <div class="form-group">
                                                    <label><?php echo $ca_addr_of_pincode; ?>&nbsp;</label>
                                                </div>	
                                            </div>
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <label></label>
                                            </div> 
                                        </div>                                                                                 
                                    </div><!--1/2 row div close-->

                                    <!-- --------------------------------------------------   Co-applicant-3  -------------------------------------------------- Co-applicant-3 -------------------------------------------------------------->                    


                                    <div class="col-md-3 col-sm-3 col-xs-3">

                                        <p style="margin-top:-10px;">Co-applicant</p>
                                        <hr style="margin-top: 10px;">

                                        <div class="row"><!--1. ca_mr_mrs-->
                                            <div class="col-md-7 col-sm-7 col-xs-10">
                                                <div class="form-group">
                                                    <input type="hidden" id="ca_three_show_div" value="<?php echo $ca_name_1; ?>" />
                                                    <label id="c_mr_hide_1"><?php echo $ca_mr_mrs_1; ?></label> <label><?php echo $ca_name_1; ?>&nbsp;</label>
                                                </div>	
                                            </div>
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <label></label>
                                            </div> 
                                        </div> 

                                        <div class="row"><!--2. ca_dob-->
                                            <div class="col-md-7 col-sm-7 col-xs-10">
                                                <input id="ca_three_show_div_age" type="hidden" value="<?php echo $ca_dob_1; ?>" />
                                                <div class="form-group">
                                                    <label id="ca_age_three"><?php echo $ca_dob_1; ?> Age <?php echo $ca_age_1; ?></label>  <label>&nbsp;</label>
                                                </div>	                                    
                                            </div>
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <label></label>
                                            </div> 
                                        </div>  

                                        <div class="row"><!--3. ca_son_doughter_wife-->
                                            <div class="col-md-10 col-sm-10 col-xs-10">
                                                <div class="form-group">
                                                    <label id="ca_son_dou_wi_1"><?php echo $ca_son_doughter_wife_1; ?></label> <label id="ca_son_dou_wi_mr_mrs_1"> <?php echo $ca_son_doughter_wife_mr_mrs_1; ?> <?php echo $ca_swd_of_1; ?>&nbsp;</label>
                                                </div>	
                                            </div>
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <label></label>
                                            </div> 
                                        </div> 

                                        <div class="row"><!--4. co_present_add-->
                                            <div class="col-md-10 col-sm-10 col-xs-10">
                                                <div class="form-group adddd">
                                                    <label><?php echo $co_present_add_1; ?> &nbsp;</label>
                                                </div>	
                                            </div>
                                        </div>  

                                        <div class="row"><!--5. co_parma_add-->
                                            <div class="col-md-10 col-sm-10 col-xs-10">
                                                <div class="form-group adddd">
                                                    <label><?php echo $co_parma_add_1; ?>&nbsp;</label>
                                                </div>	
                                            </div>
                                        </div>  

                                        <div class="row"><!--6. co_parma_add-->
                                            <div class="col-md-10 col-sm-10 col-xs-10">
                                                <div class="form-group">
                                                    <label><?php echo $ca_pincode_1; ?>&nbsp;</label>
                                                </div>	
                                            </div>
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <label></label>
                                            </div> 
                                        </div>  

                                        <div class="row"><!--6. Mobile number-->
                                            <div class="col-md-7 col-sm-7 col-xs-10">
                                                <div class="form-group">
                                                    <label><?php echo $ca_mo_no_1; ?>&nbsp;</label>
                                                </div>	
                                            </div>
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <label></label>
                                            </div> 
                                        </div> 

                                        <div class="row"><!--8. ca_email-->
                                            <div class="col-md-7 col-sm-7 col-xs-10">
                                                <div class="form-group">
                                                    <label><?php echo $ca_email_1; ?>&nbsp;</label>
                                                </div>	
                                            </div>
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <label></label>
                                            </div> 
                                        </div> 


                                        <div class="row"><!--9. ca_aadhar_no-->
                                            <div class="col-md-7 col-sm-7 col-xs-10">
                                                <div class="form-group">
                                                    <input type="hidden" id="ca_three_show_div_aadhar" value="<?php echo $ca_aadhar_no_1; ?>" />
                                                    <label id="ca_aadhar_three"><?php echo $ca_aadhar_no_1; ?></label><label>&nbsp;</label>
                                                </div>	
                                            </div>
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <label></label>
                                            </div> 
                                        </div> 

                                        <div class="row"><!--10. ca_pan-->
                                            <div class="col-md-7 col-sm-7 col-xs-10">
                                                <div class="form-group">
                                                    <label><?php echo $ca_pan_1; ?>&nbsp;</label>
                                                </div>	
                                            </div>
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <label></label>
                                            </div> 
                                        </div> 

                                        <div class="row"><!--11. ca_Qualification-->
                                            <div class="col-md-7 col-sm-7 col-xs-10">
                                                <div class="form-group">
                                                    <label><?php echo $ca_Qualification_1; ?>&nbsp;</label>
                                                </div>	
                                            </div>
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <label></label>
                                            </div> 
                                        </div> 

                                        <div class="row"><!--12. ca_occupation-->
                                            <div class="col-md-7 col-sm-7 col-xs-10">
                                                <div class="form-group">
                                                    <label id="ca_occ_1"><?php echo $ca_occupation_1; ?>&nbsp;</label>
                                                </div>	
                                            </div>
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <label></label>
                                            </div> 
                                        </div> 

                                        <div class="row"><!--13. ca_company_name-->
                                            <div class="col-md-7 col-sm-7 col-xs-10">
                                                <div class="form-group">
                                                    <label><?php echo $ca_company_name_1; ?>&nbsp;</label>
                                                </div>	
                                            </div>
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <label></label>
                                            </div> 
                                        </div> 

                                        <div class="row"><!--14. ca_doj-->
                                            <div class="col-md-7 col-sm-7 col-xs-10">
                                                <div class="form-group">
                                                    <label><?php echo $ca_doj_1; ?>&nbsp;</label>
                                                </div>	
                                            </div>
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <label></label>
                                            </div> 
                                        </div> 

                                        <div class="row"><!--15. ca_desig-->
                                            <div class="col-md-7 col-sm-7 col-xs-10">
                                                <div class="form-group">
                                                    <label><?php echo $ca_desig_1; ?>&nbsp;</label>
                                                </div>	
                                            </div>
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <label></label>
                                            </div> 
                                        </div> 

                                        <div class="row"><!--16. ca_department-->
                                            <div class="col-md-7 col-sm-7 col-xs-10">
                                                <div class="form-group">
                                                    <label><?php echo $ca_department_1; ?>&nbsp;</label>
                                                </div>	
                                            </div>
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <label></label>
                                            </div> 
                                        </div> 

                                        <div class="row"><!--17. ca_monthly_income-->
                                            <div class="col-md-7 col-sm-7 col-xs-10">
                                                <div class="form-group" id="ca_mo_inc_1">
                                                    <label><?php echo number_format((float) $ca_monthly_income_1, 2, '.', ''); ?>&nbsp;</label>
                                                </div>	
                                            </div>
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <label>&nbsp;</label>
                                            </div> 
                                        </div> 

                                        <div class="row"><!--18. ca_addr_of_employer-->
                                            <div class="col-md-7 col-sm-7 col-xs-11">
                                                <div class="form-group">
                                                    <label><?php echo $ca_addr_of_employer_1; ?>&nbsp;</label>
                                                </div>	
                                            </div>
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <label></label>
                                            </div> 
                                        </div>                                                                                 
                                        <div class="row"><!--18. ca_addr_of_employer-->
                                            <div class="col-md-7 col-sm-7 col-xs-10">
                                                <div class="form-group">
                                                    <label><?php echo $ca_addr_of_pincode_1; ?>&nbsp;</label>
                                                </div>	
                                            </div>
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <label></label>
                                            </div> 
                                        </div>                                                                                 
                                    </div><!--1/2 row div close-->

                                </div><!--main 1 row div close-->
                                <div class="row"><!--27. Booking Amount Rs..-->
                                    <div class="col-md-7">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-2 col-xs-2" style="width: 8.666667%;">
                                                <label>30.</label>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-2" >
                                                <div class="form-group">
                                                    <label>Documents</label>
                                                </div>	
                                            </div>
                                            <div class="col-md-7 col-sm-7 col-xs-7 text-left">
                                                <label><?php echo $fappl_documents; ?></label>
                                            </div> 
                                        </div>   
                                    </div>   
                                </div>   
                                <div class="row"><!--1 line-->
                                    <div class="col-md-7">
                                        <div class="row"><!--9 Adhar Card No.-->
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                <label>31.</label>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-4" style="padding-left: 0;">
                                                <div class="form-group">
                                                    <label>Any Additional Information</label>
                                                </div>	
                                            </div>
                                            <div class="col-md-7 col-sm-7 col-xs-7">
                                                <div class="form-group">
                                                    <label><?php echo $additional_info; ?>&nbsp;</label>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <div class="form-group">
                                            <label>Ref.</label>
                                        </div>
                                        <div class="form-group">
                                            <label>Place</label>
                                        </div>
                                        <div class="form-group">
                                            <label>Date</label>
                                        </div>
                                    </div>
                                    <br><br>


                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <label> Sign. of Applicant</label>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <label id="sign_co_two"> Sign. of Co-Applicant</label>  <label>&nbsp;</label>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <label id="sign_co_three"> Sign. of Co-Applicant</label>   <label>&nbsp;</label>
                                    </div>
                                </div>
                                <br>
                            </div> <!-- container-->
                        </fieldset>
                    </form>
                    <br>
                    <footer>
                        <div class="col-lg-12">
                            <label> Executive Name : &nbsp;<?php echo $first_name . nbs(1) . $last_name; ?> &nbsp;&nbsp;&nbsp; Id : <?php echo $username; ?></label>
                        </div>
                    </footer>
                </div> <!-- container-->








            </div> <!-- printable-->
        </div> <!-- printable-->
        <br>
        <br>
        <script>

            $(document).ready(function () {



                //ca_two Start img script

                var m = $('#ca_three_show_div').val();
                if ((m == ''))
                {
                    $('#ca_img_three').hide();
                    $('#sign_co_three').hide();
                    $('#ca_mo_inc_1').hide();
                    $('#c_mr_hide_1').hide();
                    $('#ca_son_dou_wi_1').hide();
                    $('#ca_occ_1').hide();
                    $('#ca_son_dou_wi_mr_mrs_1').hide();
                } else
                {
                    $('#ca_img_three').show();
                    $('#sign_co_three').show();
                    $('#ca_mo_inc_1').show();
                    $('#c_mr_hide_1').show();
                    $('#ca_son_dou_wi_1').show();
                    $('#ca_occ_1').show();
                    $('#ca_son_dou_wi_mr_mrs_1').show();
                }
                // ca_two End img script 
                // ca_three Start img script

                var n = $('#ca_two_show_div').val();
                if ((n == ''))
                {
                    $('#ca_img_two').hide();
                    $('#sign_co_two').hide();
                    $('#ca_mo_inc').hide();
                    $('#c_mr_hide').hide();
                    $('#ca_son_dou_wi').hide();
                    $('#ca_occ').hide();
                    $('#ca_son_dou_wi_mr_mrs').hide();
                } else
                {
                    $('#ca_img_two').show();
                    $('#sign_co_two').show();
                    $('#ca_mo_inc').show();
                    $('#c_mr_hide').show();
                    $('#ca_son_dou_wi').show();
                    $('#ca_occ').show();
                    $('#ca_son_dou_wi_mr_mrs').show();
                }

                // ca_three Start img script 
                // ca_three End img script 



                //ca_two Start age script

                var p = $('#ca_three_show_div_age').val();
                if ((p == ''))
                {
                    $('#ca_age_three').hide();
                } else
                {
                    $('#ca_age_three').show();
                }
                // ca_two End age script 
                // ca_three Start age script

                var q = $('#ca_two_show_div_age').val();
                if ((q == ''))
                {
                    $('#ca_age_two').hide();
                } else
                {
                    $('#ca_age_two').show();
                }

                // ca_three Start age script 
                // ca_three End age script 




                //ca_two Start aadhar script

                var p = $('#ca_three_show_div_aadhar').val();
                if ((p == '0'))
                {
                    $('#ca_aadhar_three').hide();
                } else
                {
                    $('#ca_aadhar_three').show();
                }
                // ca_two End aadhar script 
                // ca_three Start aadhar script

                var q = $('#ca_two_show_div_aadhar').val();
                if ((q == '0'))
                {
                    $('#ca_aadhar_two').hide();
                } else
                {
                    $('#ca_aadhar_two').show();
                }

                // ca_three Start aadhar script 
                // ca_three End aadhar script 


















                $('#toppageheader').html('View Application Form <span class="pull-right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="print" id="btnprint" value="print" class="btn btn-sm btn-default" onClick="print_this_doc();">Print&nbsp;&nbsp;<i class="fa fa-print"></i></button></span>');
                $("a:contains(Application)").parent().addClass('active');
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


            function showdiv() {

            }
        </script>

    </body>
</html>
