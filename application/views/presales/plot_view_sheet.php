<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
    <head>
        <title> Plot View Sheet</title>
        <?php
        require_once('assets/html_head_links.php');
        ?>
        <style>
            .col-xs-5 >input{
                display: block;
                padding: 12px;
                margin: 0;
                border: 0;
                width: 100%;
                border-radius: 0px;
            }
            .col-xs-1 .fa{
                float: right;
            }

            .back 
            {
                margin-top: -45px;
                font-size: 15px;
            }



            .col-xs-1{
                width: 3.9% !important;
                font-weight: bold;
            }
            input{
                readonly:readonly; 
            }


            @page {
                size: auto;   /* auto is the initial value */
                margin: 5mm 10mm 5mm 10mm;  /* this affects the margin in the printer settings */

            }
            @media print
            {
                /*@page {size: landscape}*/
                .non-printable { display: none; }
                #printable { display: block;}
                .table {
                    margin-bottom: 0px;

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

                html, body {
                    font-size: 12px !important;
                    width: 210mm !important;
                    height: 297mm !important;
                }

                .table{
                    font-size: 12px !important;
                }
                ol{
                    font-size: 8px !important;
                }
                .table > tbody > tr > td{
                    padding: 5px!important;
                }

            }

            .panel-primary {
                border-color: #000 !important;
            }

            input{border: transparent;  background-color: #00B0F0; font-weight: bold; }

            .col-xs-4{
                font-weight: bold;
            }
            .col-xs-3{
                font-weight: bold;
            }
            .col-xs-11{
                font-weight: bold;
            }
            .col-xs-12{
                font-weight: bold;
            }

            li{
                padding: 2px !important;
            }
            ol{
                font-size: 10px !important;
            }
            @media screen and (min-width:240px){
                .table > .table-bordered > .col-xs-12 > .btn > .btn-primary > .pull-right > .clickable {
                    position: absolute;
                    left: 78%;
                    top: 33px;
                }
            }



            textarea {
                resize: none;
            }
            .form-control[readonly]{
                background: #fff;
                box-shadow: none;
            }
            
            /*********************************/
            @media print
            {
                .gray
                {
                    background:#999 !important;
                }
                .outerdiv{
                     height:1310px !important;
                    
                }
            }
              .outerdiv
            {
                border-radius: 10px;
                margin:auto;
                margin-top:40px;
                height:1480px;
                width:1060px;
                border:2px solid black;
            }
            .innertop
            {
                 border-bottom: 1px solid black;
                 height:80px;
                width:1060px;
                border-top-left-radius: 10px;
                border-top-right-radius: 10px;
                text-align: center;
                padding-top: 8px;
            }
            .top_label
            {
                
                
                font-size: 22px;
                height: 22px;
                display:block;
                }
                .top_label2
                {
                    border-top: 2px solid black;
                    display:block;
                    margin-top:10px;
                    text-align: left;
                    height:28px;
                    line-height: 25px;
                    font-size:20px;
                        
                }
                .middleleft
                {
                    width:170px;
                    heigth:20px;
                    margin-left:20px;
                    line-height: 20px;
                    display : inline-block;
                    font-size:20px;
                    margin-top:5px;
                    
                }
                .middleright
                {
                    width:470px;
                    heigth:20px;
                    margin-left:20px;
                    line-height: 20px;
                    display : inline-block;
                    font-size: 20px;
                    
                    margin-top:5px;
                }
                .labeldiv
                {
                    width:1000px;
                    height: 30px;
                    line-height: 30px;
                    
                   
                }
                .middlelefttwo{
                   width:230px;
                    heigth:20px;
                    margin-left:70px;
                    line-height: 20px;
                    display : inline-block;
                    font-weight: bold;
                    
                    
                }
                .middlerighttwo
                {
                    
                    width:250px;
                    heigth:20px;
                    margin-left:20px;
                    line-height: 40px;
                    display : inline-block;
                    font-size: 28px;
                    background-image:  url("<?php echo base_url('resources/image/inp-bg.png'); ?>");
                    background-repeat: repeat;
                    margin-top:5px;
                    border:2px solid black;
                    border-radius: 5px;
                    text-align: right;
                    
                }
                .rs
                {
                    font-size: 28px;
                }
                .middleleftthree
                {
                  width:230px;
                    heigth:20px;
                    margin-left:70px;
                    line-height: 20px;
                    display : inline-block;
                    font-size: 20px;
                }
               .extralbl
               {
                   font-weight: Bold;
                   font-size: 25px;
                   margin-left: 100px;
                   margin-top: 20px;
               }
               .lowertbl
               {
                   margin-left:20px;
                   font-size:20px;
                   
               }
               .lowertbl2
               {
                   border-top : 2px solid black;
                   
                   width:1060px;
                   height:auto;
                   font-size: 20px;
                   font-weight: bold;
               }
               .notelbl
               {
                   font-size: 20px;
                   font-weight: lighter;
                   margin-left:10px;
               }
               p
               {
                   font-weight: lighter;
                   margin-top: -12px;
                   margin-left:10px;
                       
               }
               .cost
               {
                   font-size: 20px;
               }
               .utils
               {
                   font-weight: bold;
                   font-size: 24px;
               }
               .registry
               {
                   margin-left:20px;
                   font-size:25px;
                   font-weight: bold;
               }
               
        </style>

    </head>
    <body>
        
        
        <div style="z-index: 10;">  
            <?php
            require_once('assets/top_menu.php');
            require_once('assets/pre_sales_side_menu.php');
            ?>
        </div>
        
        
        <div class="main">
            <div class="container">
     
                <form class="form-inline" action="<?php echo site_url('pre_sales/update_visitor_Input'); ?>" method="post" enctype="multipart/form-data"  >
                    <div id="printable">
                        <div class="container">
                           
                  
                            <input type="hidden" id="currentdate" name="currentdate" value="<?php echo date('Y-m-d'); ?>">
                            <?php
                            foreach ($this->Sheet_model->get_company_taxCGST() as $row) {
                                ?> 
                                <?php $result12 = $row->tax_percentage; ?>
                            <?php } ?>
                            <?php
                            foreach ($this->Sheet_model->get_company_taxSGST() as $row) {
                                ?> 
                                <?php $result11 = $row->tax_percentage; ?>
                            <?php } ?>

                            <?php $result5 = $result12 + $result11 ?>


                            <?php
                            $id = $this->input->get('id');
                            // echo $id;


                            foreach ($this->Pre_sales_model->view_sheet1($id) as $row) {
                                
                                ?>
                                <?php $project_id = $row->project_id; ?>
                                <?php $prospect_id = $row->prospect_id; ?>
                                <?php $name = $row->name; ?>
                                <?php $mobile_no = $row->mobile; ?>
                                <?php $block = $row->block; ?>
                                <?php $category = $row->category; ?>
                                <?php $type = $row->type; ?>
                                <?php $unit_no = $row->unit_no; ?>
                                <?php $plot_size_mtr = $row->plot_size_mtr; ?>
                                <?php $plot_size_ft = $row->plot_size_ft; ?>
                                <?php $total_cost = $row->total_cost; ?>
                                <?php $cost_payble_to_company = $row->cost_payble_to_company; ?>
                                <?php $discount = $row->discount; ?>
                                <?php $discussion = $row->discussion; ?>
                                <?php $gst = $row->gst; ?>
                                <?php $basic_cost_ref_rate = $row->basic_cost_ref_rate; ?>
                                <?php $mpseb_cost_ref_rate = $row->mpseb_cost_ref_rate; ?>
                                <?php $water_connection_ref_rate = $row->water_connection_ref_rate; ?>
                                <?php $maintenance_cost_ref_rate = $row->maintenance_cost_ref_rate; ?>
                                <?php $corner_charges = $row->corner_charges; ?>
                                <?php $garden_facing_charges = $row->garden_facing_charges; ?>
                             

                                    <?php $login_id = $row->login_id; ?>
                                <?php } ?>
                                  <?php
                            foreach ($this->View_applicant_info->get_login_info($login_id) as $row) {
                                ?> 
                                <?php //$login_usernsme = $row->username; ?>
                                <?php $first_name = $row->first_name; ?>
                                <?php $last_name = $row->last_name; ?>
                                <?php $username = $row->username; ?>

                            <?php } ?>
                            <?php
                                        $a = $this->Company_info_model->get_attribute_value('RERA Regd No.');
                                        $rerano = $a;
                                        ?>

                            <?php
                            $data['plot_size_mtr'] = $plot_size_mtr;
                            $data['plot_size_ft'] = $plot_size_ft;
                            $data['project_id'] = $project_id;
                            $data['type'] = $type;
                            $data['block'] = $block;
                            foreach ($this->Allotment_letter_model->show_plot_info($data) as $row) {
                                ?>
                                <?php $plot_sqmt = $row->plot_sqmt; ?>
                                <?php $plot_size_sqft = $row->plot_sqft; ?>
                                <?php $length_m = $row->length_m; ?>
                                <?php $width_m = $row->width_m; ?>


                            <?php } ?>

                            <input type="hidden" value="<?php echo $id; ?>" name="id"  disabled />
                            <div class="container non-printable">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-12">
                                            <?php echo anchor('Pre_sales/pre_sales_costing?id=' . $prospect_id, 'Back', 'class="btn btn-primary pull-right clickable non-printable" title="Back"');
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <br>

                            <!--table class="table table-bordered"-->
                                
                                
                                
                                
                                 <div class="outerdiv">
            <div class="innertop">
                <label class="top_label">Sheet No. 1 </label>
                <label class="top_label2"><?php echo date('d-m-Y'); ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $mobile_no; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="margin-left: 550;"><?php echo $rerano ?></span></label>
                </div>
            <div class="labeldiv"><label class="middleleft">Name</label>:-<label class="middleright"><?php echo $name; ?></label></div>
            <div class="labeldiv"><label class="middleleft">Project</label>:-<label class="middleright">
                    <?php
                                            $data['project_id'] = $project_id;
                                            foreach ($this->Pre_sales_model->getproject_info($data) as $row) {
                                                ?>
                                                <?php $project_name = $row->project_name; ?>
                                            <?php } ?>
                                            <input type="hidden" value="<?php echo $project_id; ?>" name="project_id" readonly > 
                                            <input type="hidden" value="<?php echo $block; ?>" name="block" readonly>
                                            <?php echo $project_name; ?> <?php echo $block; ?></label></div>
            <div class="labeldiv"><label class="middleleft">Unit No.</label>:-<label class="middleright"><?php echo $unit_no; ?></label></div>
            <div class="labeldiv"><label class="middleleft">Type</label>:-<label class="middleright"> <?php echo $type ?></label></div>
                    <div class="labeldiv"><label class="middleleft">Plot size</label>:-<label class="middleright">
                <?php echo number_format((float) $length_m, 2, '.', ''); ?><?php echo nbs(2); ?>X<?php echo nbs(2); ?><?php echo number_format((float) $width_m, 2, '.', ''); ?>
                                            <input type="hidden" value="<?php echo $plot_size_mtr ?>" name="plot_size_mtr" style= " padding: 8px; margin: 0; border: 0; border-radius: 0px;"  disabled /> in Mtr
                            
                </label></div>
            
            
              <?php
                                        $data['project_id'] = $project_id;
                                        $data['block'] = $block;
                                        $data['category'] = $category;
                                        $data['type'] = $type;
                                        $data['plot_size_mtr'] = $plot_size_mtr;
                                        $data['plot_size_ft'] = $plot_size_ft;

                                        foreach ($this->Pre_sales_model->getpdts($data) as $row) {
                                            
                                            ?>
                                            <?php $carpet_area = $row->carpet_area; ?>
                                            <?php $ca_ref_rate = $row->ca_ref_rate; ?>
                                            <?php $carpet_area_result = $carpet_area * 10.76 * $ca_ref_rate; ?>
                                            <?php $basic_costs = $row->basic_cost_ref_rate; ?>
            



                                            <?php $total_sum_x = $carpet_area_result; ?>

                                        <?php }
                                        ?>





                                        <?php
                                        $data['plot_size_mtr'] = $plot_size_mtr;
                                        $data['plot_size_ft'] = $plot_size_ft;

                                        foreach ($this->Pre_sales_model->getproj_info($data) as $row) {
                                            ?>

                                            <?php $plot_sqmt = $row->plot_sqmt; ?>
                                            <?php $plot_sqft = $row->plot_sqft; ?>
                                        <?php }
                                        ?>

                                <input  id="gst" type="hidden" value="<?php echo $result5 ?>"  disabled />
                                <input   type="hidden" name="plot_size_ft" value="<?php echo $plot_size_ft ?>"  disabled />
                                <input   type="hidden" name="category" value="<?php echo $category ?>"  disabled />
            <div class="labeldiv"><label class="middleleft">Plot Area</label>:-<label class="middleright"><?php echo number_format((float) $plot_sqmt, 2, '.', ''); ?>
                SQMT
                </label></div>
                                <div class="labeldiv"><label class="middleleft">Plot Area in Sq. Ft.</label>:-<label class="middleright"> <?php echo number_format((float) $plot_sqft, 2, '.', ''); ?>&nbsp;SQFT</label></div><br>
                                <div class="labeldiv"><label class="middlelefttwo cost">Basic Cost of Plot</label>:- <font class="rs">Rs.</font><label class="middlerighttwo gray"><?php echo number_format((float) $basic_cost_ref_rate, 2, '.', ''); ?></label><span class="registry">@<?php echo $basic_costs; ?> Rs.</span></div><br>
            <div class="labeldiv"><label class="middlelefttwo cost">Corner Charges</label>:- <font class="rs">Rs.</font><label class="middlerighttwo gray"><?php echo number_format((float) $corner_charges, 2, '.', ''); ?></label></div><br>
            <div class="labeldiv"><label class="middlelefttwo cost">Garden Facing Charges</label>:- <font class="rs">Rs.</font><label class="middlerighttwo gray"><?php echo number_format((float) $garden_facing_charges, 2, '.', ''); ?></label></div><br>
            <div class="labeldiv"><label class="middlelefttwo cost">Total Cost of Plot</label>:- <font class="rs">Rs.</font><label class="middlerighttwo gray"> <?php echo number_format((float) $corner_charges + $garden_facing_charges + $basic_cost_ref_rate, 2, '.', ''); ?></label></div><br>
            <!--div class="labeldiv"><label class="middlelefttwo cost">Total Cost of Unit</label>:- <font class="rs">Rs.</font><label class="middlerighttwo gray"><?php //echo number_format((float) $corner_charges + $garden_facing_charges + $basic_cost_ref_rate, 2, '.', ''); ?></label></div><br><br-->
            <div class="labeldiv"><label class="middleleftthree cost">MPSEB Charges</label>:- <font class="rs">Rs.</font><label class="middlerighttwo gray"> <?php echo number_format((float) $mpseb_cost_ref_rate, 2, '.', ''); ?></label></div><br>
            <div class="labeldiv"><label class="middleleftthree cost">Water Connection</label>:- <font class="rs">Rs.</font><label class="middlerighttwo gray"><?php echo number_format((float) $water_connection_ref_rate, 2, '.', ''); ?></label></div><br>
            <div class="labeldiv"><label class="middlelefttwo cost">Maintanence Charges</label>:- <font class="rs">Rs.</font><label class="middlerighttwo gray"> <?php echo number_format((float) $maintenance_cost_ref_rate, 2, '.', ''); ?></label></div><br>
            <div class="labeldiv"><label class="middlelefttwo utils">Total COST</label>:- <font class="rs">Rs.</font><label class="middlerighttwo gray"><?php echo number_format((float) $cost_payble_to_company, 2, '.', ''); ?></label><span class="registry">+Registry Charges + Society</span></div><br>
            <div class="labeldiv"><label class="middlelefttwo cost">DISCOUNT OFFERED</label>:- <font class="rs">Rs.</font><label class="middlerighttwo gray"> <?php echo number_format((float) $discount, 2, '.', ''); ?></label></div><br>
            <div class="labeldiv"><label class="middlelefttwo utils">NET FINAL COST</label>:- <font class="rs">Rs.</font><label class="middlerighttwo gray"><?php echo number_format((float) $total_cost, 2, '.', ''); ?> </label><span class="registry">+Registry Charges + Society</span></div><br>
            <label class="extralbl">Extra Charges</label><br>
            
            <table border="2px" class="lowertbl gray">
                <tr><td style="padding:15px;">REGISTRY CHARGES</td><td style="padding:15px;">AS PER ACTUAL</td></tr>
                <tr align="center"><td>SOCIETY CHARGES</td><td>550.00</td></tr>
                <tr align="center"><td>SOCIETY CHARGES</td><td>25000.00</td></tr>
            </table>
            <label class="notelbl">Note : Registration Stamp Duty, Fees and other chareges of Plot Registry shall be charged as per actual additionally</label>
            <table  class=" table table-bordered">
                <tr><td>Other Charges to be bear by the customer</td></tr>
                <tr><td><b style="text-decoration: underline;">Note</b><br> 
                <tr><td> 1. Registration Stamp Duty, Fees & Other charges as per actual. (shall be beared by the customer)</td></tr>
                        <tr><td> 2. Registration of Agreement, Fees & other charges as per actual. (Shall be beared by the customer)</td></tr>
                        <tr><td> 3. Bank Documentation charges Extra (shall be beared by the customer)</td></tr>
                        <tr><td> 4. Any other tax shall be charged additionally as per the norms of Govt. like GST TAX @18% of the Unit Cost as applicable</td></tr>
                       <tr><td>  5. Society Charges 25000.00 as Society Corpus Fund & Rs 550 for Membership shall be additionally by alottee/customer</td></tr>
                        <tr><td> 6. Mortgage Stamp Fees & Other Charges shall be beared by the customer</td></tr>
                        <tr><td> 7. Corner Charge shall be charged additionally  @5% of the cost</td></tr>
                        <tr><td> 8. Garden facing charge shall be charged additionally @5% of the cost</td></tr>
                        
                    
                
            </table>
        </div>
                            <label> Executive Name :- &nbsp;<?php echo $first_name . nbs(1) . $last_name; ?> /id : <?php echo $username; ?></label>
                                  
                            <br><br><br><br><br><br><br><br><br><br><br><br>
            <!--table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td class="col-xs-12" colspan="5" style="background:#92D050; color: #FF0000; padding: 15px;">

                                            <div class="row">
                                                <div class="col-xs-4">

                                                </div>
                                                <div class="col-xs-4 text-center">
                                                    SHEET NO. 1
                                                </div>
                                                <div class="col-xs-4 text-right">
                                                    <p style="font-weight:200 !important;"> <?php //echo date('d-m-Y'); ?></p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            &nbsp;
                                        </td>
                                        <td>
                                            Name
                                        </td>

                                        <td colspan="2">
                                            <?php //echo $name; ?>
                                        </td>
                                        <td>
                                            &nbsp;
                                        </td>

                                    </tr>

                                    <tr>
                                        <td>
                                            &nbsp;
                                        </td>
                                        <td>
                                            Mobile No.
                                        </td>

                                        <td colspan="2">
                                            <?php //echo $mobile_no; ?>
                                        </td>
                                        <td>
                                            &nbsp;
                                        </td>

                                    </tr>

                                    <tr>
                                        <td>
                                            &nbsp;
                                        </td>
                                        <td>
                                            Project
                                        </td>

                                        <td colspan="2">
                                            <?php
                                      /*      $data['project_id'] = $project_id;
                                            foreach ($this->Pre_sales_model->getproject_info($data) as $row) {
                                               
                                                ?>
                                                <?php $project_name = $row->project_name; ?>
                                            <?php } ?>
                                            <input type="hidden" value="<?php echo $project_id; ?>" name="project_id" readonly > 
                                            <input type="hidden" value="<?php echo $block; ?>" name="block" readonly>
                                            <?php echo $project_name; ?> <?php echo $block; ?>
                                        <?php
                                        $a = $this->Company_info_model->get_attribute_value('RERA Regd No.');
                                        echo $a;
                                      */  ?>
                                        </td>
                                        <td>
                                            &nbsp;
                                        </td>

                                    </tr>

                                    <tr>
                                        <td>
                                            &nbsp;
                                        </td>
                                        <td>
                                            Unit No.
                                        </td>

                                        <td colspan="2">
                                            <?php //echo $unit_no; ?>
                                        </td>
                                        <td>
                                            &nbsp;
                                        </td>

                                    </tr>

                                    <tr>
                                        <td>
                                            &nbsp;
                                        </td>
                                        <td>
                                            Type
                                        </td>

                                        <td colspan="2">
                                            <?php //echo $type ?>
                                        </td>
                                        <td>
                                            &nbsp;
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            &nbsp;
                                        </td>
                                        <td>
                                            Plot Size
                                        </td>                                     
                                        <td>
                                            <?php //echo number_format((float) $length_m, 2, '.', ''); ?><?php echo nbs(2); ?>X<?php echo nbs(2); ?><?php echo number_format((float) $width_m, 2, '.', ''); ?>
                                            <input type="hidden" value="<?php //echo $plot_size_mtr ?>" name="plot_size_mtr" style= " padding: 8px; margin: 0; border: 0; border-radius: 0px;"  disabled />
                                        </td>
                                        <td>
                                            in Mtr
                                        </td>
                                        <td>

                                        </td>

                                    </tr>
                                    <tr>
                                        <?php
                                   /*     $data['project_id'] = $project_id;
                                        $data['block'] = $block;
                                        $data['category'] = $category;
                                        $data['type'] = $type;
                                        $data['plot_size_mtr'] = $plot_size_mtr;
                                        $data['plot_size_ft'] = $plot_size_ft;

                                        foreach ($this->Pre_sales_model->getpdts($data) as $row) {
                                            
                                            ?>
                                            <?php $carpet_area = $row->carpet_area; ?>
                                            <?php $ca_ref_rate = $row->ca_ref_rate; ?>
                                            <?php $carpet_area_result = $carpet_area * 10.76 * $ca_ref_rate; ?>
                                            


                                            <?php $total_sum_x = $carpet_area_result; ?>

                                        <?php }
                                        ?>





                                        <?php
                                        $data['plot_size_mtr'] = $plot_size_mtr;
                                        $data['plot_size_ft'] = $plot_size_ft;

                                        foreach ($this->Pre_sales_model->getproj_info($data) as $row) {
                                            
                                            ?>

                                            <?php $plot_sqmt = $row->plot_sqmt; ?>
                                            <?php $plot_sqft = $row->plot_sqft; ?>
                                        <?php }
                                    */    ?>

                                <input  id="gst" type="hidden" value="<?php //echo $result5 ?>"  disabled />
                                <input   type="hidden" name="plot_size_ft" value="<?php //echo $plot_size_ft ?>"  disabled />
                                <input   type="hidden" name="category" value="<?php //echo $category ?>"  disabled />
                                <td>
                                    &nbsp;
                                </td>
                                <td>
                                    Plot Area
                                </td>

                                <td>
                                    <?php //echo number_format((float) $plot_sqmt, 2, '.', ''); ?>
                                </td>
                                <td>
                                    SQMT
                                </td>
                                <td>

                                </td>

                                </tr>
                                <tr>
                                    <td>
                                        &nbsp;
                                    </td>
                                    <td>
                                        PLot Area in Sq.Ft
                                    </td>

                                    <td>
                                        <?php //echo number_format((float) $plot_sqft, 2, '.', ''); ?>
                                    </td>
                                    <td>
                                        SQFT Approx
                                    </td>
                                    <td>

                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        &nbsp;
                                    </td>
                                    <td>
                                        Basic Cost of Plot
                                    </td>

                                    <td>
                                        <span class="pull-right">Rs.</span>
                                    </td>
                                    <td>
                                        <?php //echo number_format((float) $basic_cost_ref_rate, 2, '.', ''); ?>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        &nbsp;
                                    </td>
                                    <td>
                                        Corner Charges
                                    </td>

                                    <td>
                                        <span class="pull-right">Rs.</span>
                                    </td>
                                    <td>
                                        <?php //echo number_format((float) $corner_charges, 2, '.', ''); ?>
                                    </td>
                                    <td>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        &nbsp;
                                    </td>
                                    <td>
                                        Garden Facing Charges
                                    </td>

                                    <td>
                                        <span class="pull-right">Rs.</span>
                                    </td>
                                    <td>
                                        <?php //echo number_format((float) $garden_facing_charges, 2, '.', ''); ?>
                                    </td>
                                    <td>
                                    </td>
                                </tr>

                                <tr>
                                    <td>

                                    </td>
                                    <td>
                                        Total Cost Of Plot
                                    </td>

                                    <td>
                                        <span class="pull-right">Rs.</span>    
                                    </td>
                                    <td>
                                        <?php //echo number_format((float) $corner_charges + $garden_facing_charges + $basic_cost_ref_rate, 2, '.', ''); ?>
                                    </td>
                                    <td class="col-xs-2" style="margin: 0; padding: 0;">

                                    </td>
                                </tr>


                                <tr>

                                    <td>

                                    </td>
                                    <td>
                                        Water Connection
                                    </td>

                                    <td>
                                        <span class="pull-right">Rs.</span>                                
                                    </td>
                                    <td>
                                        <?php //echo number_format((float) $water_connection_ref_rate, 2, '.', ''); ?>
                                    </td>
                                    <td>

                                    </td>
                                </tr>

                                <tr>
                                    <?php //foreach ($this->Pre_sales_model->get_charge_amount() as $row) {
                                        ?>
                                        <?php //$charge_amount1 = $row->charge_amount * 18 / 100; ?>
                                        <?php //$charge_amount = $row->charge_amount + $charge_amount1; ?>
                                        <?php //$ch_amt = $row->charge_amount ?>


                                    <?php //} ?>
                                    <td>

                                    </td>
                                    <td>
                                        Maintanance Charges
                                    </td>

                                    <td>
                                        <span class="pull-right">Rs.</span>                                
                                    </td>
                                    <td>
                                        <?php //echo number_format((float) $maintenance_cost_ref_rate, 2, '.', ''); ?>
                                    </td>
                                    <td>
                                        18% for GST
                                    </td>
                                </tr>

                                <tr>
                                    <td class="col-xs-1">

                                    </td>
                                    <td>
                                        Other Fix Charges(MPSEB SSC &amp; WCC)
                                    </td>

                                    <td>
                                        <span class="pull-right">Rs.</span>  
                                    </td>
                                    <td>
                                        <?php //echo number_format((float) $mpseb_cost_ref_rate, 2, '.', ''); ?>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-xs-1">

                                    </td>
                                    <td>
                                        Total Cost
                                    </td>

                                    <td>
                                        <span class="pull-right">Rs.</span>  
                                    </td>
                                    <td>
                                        <?php //echo number_format((float) $cost_payble_to_company, 2, '.', ''); ?>
                                    </td>
                                    <td>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="7">
                                        <label>Extra Charges</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        REGISTRY CHARGES
                                    </td>


                                    <td>
                                        As Per Actual
                                    </td>
                                    <td>
                                        Based on Prevailing Collector Guide Line rates
                                    </td>
                                </tr>

                                <tr>
                                    <td>

                                    </td>
                                    <td>
                                        Discount
                                    </td>

                                    <td>
                                        <span class="pull-right">Rs.</span> 
                                    </td>
                                    <td>
                                        <?php //echo number_format((float) $discount, 2, '.', ''); ?>
                                    </td>
                                    <td>

                                    </td>
                                </tr>
                                <tr>
                                    <td>

                                    </td>
                                    <td>
                                        NET FINAL TOTAL COST
                                    </td>

                                    <td>
                                        <span class="pull-right">Rs.</span> 
                                    </td>
                                    <td>
                                        <?php //echo number_format((float) $total_cost, 2, '.', ''); ?>
                                    </td>
                                    <td>
                                        <span>+Registry + Society + Monthly Operational Charges + Mutation</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="7">
                                        &nbsp; &nbsp; &nbsp;  Note :-  Registration charges of <?php echo $type ?> registry shall be charged as per actual additionally
                                    </td>
                                </tr>
                                <tr>
                                    <td>

                                    </td>
                                    <td colspan="6">
                                        <span>Other Charges to be bourn by the customer</span>
                                    </td>
                                </tr>
                                <td colspan="6">
                                    <span>Note : </span>
                                    <br>
                                    <ol>
                                        <li>
                                            Extra charges will be taken for premium location.
                                        </li>
                                        <li>
                                            Registration Stamp duty, Fees & other charges as per actual.
                                            (shall be born by the customer).
                                        </li>
                                        <li>
                                            Membership charge of Society Shall be paid additionally 
                                            at the time of possession @ Rs. 550.00 as & Rs. 25000.00 for
                                            Common Corpus fund for residents welfare Society.
                                        </li>
                                        <li>Bank Documentation Charges Extra (shall be born by the customer).</li>
                                        <li>Mortgage Stamp Fees & Other Charges shall be born by the customer.</li>
                                        <li>Namantaran Charges (Advocate fees) shall be Charged Extra.</li>
                                        <li>
                                            Meter Connection Charges As per actual Shall be the responsibility of
                                            the allottee.
                                        </li>
                                        <li>
                                            Water Meter Application with department shall be the responsibility of
                                            the allottee.
                                        </li>
                                    </ol>
                                </td>
                                </tbody>
                            </table-->
                            <br>                       
                        </div> 
                        <!--div class="container">
                            <div class="row">
                                <div class="col-xs-12">
                                    <label>Discussion</label>
                                    &nbsp;<textarea cols="3" id="discussion"  rows="4" style="width:100%;" name="discussion" class="form-control"><?php echo $discussion ?></textarea>
                                <label> Executive Name :- &nbsp;<?php //echo $first_name . nbs(1) . $last_name; ?> /id : <?php echo $username; ?></label>
                                </div>
                            </div><br>
                            
                        </div-->

                    </div> 

                </form>
            </div>
        </div>
        <script type="text/javascript">

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

            $(document).ready(function () {

                $('#toppageheader').html('View Plot Sheet1 <span class="pull-right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="print" id="btnprint" value="print" class="btn btn-xs btn-default" onClick="print_this_doc();">Print&nbsp;&nbsp;<i class="fa fa-print"></i></button></span>');
                $("a:contains(View Plot Sheet1)").parent().addClass('active');
            });
        </script>
    </body>

</html>

