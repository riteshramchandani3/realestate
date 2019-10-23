<!DOCTYPE html>
<!--
Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
Unauthorized copying of this file, via any medium is strictly prohibited
Proprietary and confidential.
Written by Oga Technologies, October 1,  2016.
-->
<html>

    <head>
        <title>View Work Completion</title>
        <?php
        require_once('assets/html_head_links.php');
        ?>
        <style>
            .form-control{
                width:   100% !important;
            }
            @media print
            {
                /*@page {size: landscape}*/
                .non-printable { display: none; }
                #printable { display: block;}

           
            .container{
                    margin-top:100px;
                    width: 216mm !important;
                    height: 356mm !important;
                     
                }

            }
            @page {
                margin: 5mm 15mm 5mm 15mm;

            }

        </style>
    </head>


    <body>
        <div class="non-printable">
            <?php
            require_once('assets/top_menu.php');
            require_once('assets/side_menu.php');
            ?>
        </div>
        <div class="main">
             <div class="container non-printable"> <a href="javascript: history.go(-1)"  class="btn btn-primary pull-right clickable" role="button"><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;&nbsp;Back</a></div>  


            <div id="printable">
                <div class="container">
                    <?php
                    // log_message('error', 'applicant payment  page start:');
                    $user1 = $this->input->get('id');
                    $explode_data = explode('?', $user1);
                    $id = $explode_data[0];
                    //  print_r( $user); echo'<br/>';
                    foreach ($this->Final_calculation_model->get_completion_details($user1) as $row) {
                        ?>  
                        <?php $applicant_id = $row->applicant_id; ?> 
                        <?php $project_id = $row->project_id; ?> 
                        <?php $phase = $row->phase; ?> 
                        <?php $type = $row->type; ?> 
                        <?php $block = $row->block; ?> 
                        <?php $unit_no = $row->unit_no; ?> 
                        <?php $drawing_room = $row->drawing_room; ?> 
                        <?php $dining_room = $row->dining_room; ?> 
                        <?php $bedroom_1 = $row->bedroom_1; ?> 
                        <?php $bedroom_2 = $row->bedroom_2; ?> 
                        <?php $bedroom_3 = $row->bedroom_3; ?> 
                        <?php $kitchen = $row->kitchen; ?> 
                        <?php $staircase = $row->staircase; ?> 
                        <?php $lobby_area = $row->lobby_area; ?> 
                        <?php $front_terrace = $row->front_terrace; ?> 
                        <?php $back_terrace = $row->back_terrace; ?> 
                        <?php $toilet_floor = $row->toilet_floor; ?> 
                        <?php $toilet_wall = $row->toilet_wall; ?> 
                        <?php $kitchen_wall_tiles = $row->kitchen_wall_tiles; ?> 
                        <?php $wash_area = $row->wash_area; ?> 
                        <?php $tpn = $row->tpn; ?> 
                        <?php $porch = $row->porch; ?> 
                        <?php $flush_door = $row->flush_door; ?> 
                        <?php $dewas_frame = $row->dewas_frame; ?> 
                        <?php $alluminium_handle = $row->alluminium_handle; ?> 
                        <?php $aldrops = $row->aldrops; ?> 
                        <?php $door_stopper = $row->door_stopper; ?> 
                        <?php $tower_bolt = $row->tower_bolt; ?> 
                        <?php $window_alluminium = $row->window_alluminium; ?> 
                        <?php $window_ventilator = $row->window_ventilator; ?> 
                        <?php $san_indian = $row->san_indian; ?> 
                        <?php $san_european = $row->san_european; ?> 
                        <?php $san_seat_cover = $row->san_seat_cover; ?> 
                        <?php $san_bib_cock = $row->san_bib_cock; ?> 
                        <?php $san_pillar_cock = $row->san_pillar_cock; ?> 
                        <?php $san_wall_mix = $row->san_wall_mix; ?> 
                        <?php $san_c_p_stop_cocks = $row->san_c_p_stop_cocks; ?> 
                        <?php $san_cpn = $row->san_cpn; ?> 
                        <?php $san_wash_basin = $row->san_wash_basin; ?> 
                        <?php $san_waste_pipe = $row->san_waste_pipe; ?> 
                        <?php $elec_6_amp_switch = $row->elec_6_amp_switch; ?> 
                        <?php $elec_16_amp_switch = $row->elec_16_amp_switch; ?> 
                        <?php $elec_6_amp_socket = $row->elec_6_amp_socket; ?> 
                        <?php $elec_16_amp_socket = $row->elec_16_amp_socket; ?> 
                        <?php $elec_ceiling_rose = $row->elec_ceiling_rose; ?> 
                        <?php $elec_angle_holder = $row->elec_angle_holder; ?> 
                        <?php $elec_button_holder = $row->elec_button_holder; ?> 
                        <?php $elec_mcb = $row->elec_mcb; ?> 


                    <?php } ?>
                    <?php
                    foreach ($this->Final_calculation_model->get_appl_info($applicant_id) as $row) {
                        ?>  
                        <?php $present_addr = $row->present_addr; ?> 
                        <?php $mr_mrs = $row->mr_mrs; ?> 
                        <?php $name = $row->name; ?> 
                        <?php $son_doughter_wife = $row->son_doughter_wife; ?> 
                        <?php $son_doughter_wife_mr_mrs = $row->son_doughter_wife_mr_mrs; ?> 
                        <?php $swd_of = $row->swd_of; ?> 
                        <?php $pin_code = $row->pin_code; ?> 

                    <?php } ?>
                    <?php
                    foreach ($this->Final_calculation_model->get_project_name($project_id) as $row) {
                        ?>  
                        <?php $project_name = $row->project_name; ?> 
                        <?php $phase = $row->block; ?> 


                    <?php } ?>

                    <?php
                    foreach ($this->Company_info_model->get_company_info() as $row) {
                        ?> 
                        <?php $rera = $row->attribute; ?>&nbsp;&nbsp;&nbsp;
                        <?php $rera_no = $row->value; ?>
                    <?php } ?>
                    <?php
                    foreach ($this->Company_info_model->get_Company_name() as $row) {
                        ?> 

                        <?php $company_name = $row->value; ?>
                    <?php } ?>
                    <?php
                    foreach ($this->Company_info_model->get_Company_address() as $row) {
                        ?> 

                        <?php $company_address = $row->value; ?>
                    <?php } ?>
                    <?php
                    foreach ($this->Company_info_model->get_Company_pincode() as $row) {
                        ?> 

                        <?php $pincode = $row->value; ?>
                    <?php } ?>
                    <form class="form-inline" action="<?php echo site_url('Allotment_letter/search_id'); ?>" method ="post">
                        <div class="row">
                            <div class="col-xs-6">
                                <p><b>Ref.- ECPL/<?php echo $project_name; ?> <?php echo $phase; ?>/<?php echo $unit_no; ?>/2018</b></p>
                                <b><?php echo $rera; ?>&nbsp;: &nbsp;<?php echo $rera_no; ?></b></p>
                            </div>
                            <div class="col-xs-6">
                                <label>Date:-&nbsp;<?php echo date('d-m-Y') ?></label><br>
                                <label>Bhopal</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <p><b>
                                        Developer <br>
                                        <?php echo $company_name; ?>, <br>
                                        <?php echo $project_name.nbs(1).$phase; ?>,<br>
                                        <?php echo $company_address; ?> <br>
                                        (<?php echo $pincode; ?>)
                                    </b> </p>
                            </div>
                            <div class="col-xs-6">
                                <p><b>
                                        Allottee <br>
                                        <?php echo $mr_mrs; ?>&nbsp;<?php echo $name; ?>&nbsp;<?php echo $son_doughter_wife; ?>&nbsp;<?php echo $son_doughter_wife_mr_mrs; ?>&nbsp;<?php echo $swd_of; ?>,
                                        <br>
                                        R/o: <?php echo $present_addr; ?>&nbsp;(<?php echo $pin_code; ?>) 
                                    </b></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <p><b>Sub:	-	Completion  of  work.</b></p>
                            </div>
                            <div class="col-xs-6">
                                <p>&nbsp;</p>  
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-6">
                                <p><b>Dear  Sir,</b></p>      
                            </div>
                            <div class="col-xs-6">
                                <p>&nbsp;</p>  
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <p>
                                    I/We had verified that the following work/items has been completed in my Residential unit/duplex (Ground+First Floor) No.<b> <strong><?php echo $unit_no; ?></strong> </b>at <strong><?php echo $project_name; ?> <?php echo $phase; ?></strong>, Project on Kh. No.<b> 824/1, 825/2, 828/1/2, 816, 827/1, 825/1/क, 825/1/ख, 828/1/1/ख & 827/2</b> at Khajuri Kalan, Tehsil Huzur, Dist. Bhopal (M.P.) Ward No. 62.
                                </p>      
                            </div>
                        </div>
                        <!-- 1.Flooring -- -->
                        <!--  Drawing Room -->
                        <div class="row">
                            <div class="col-xs-2">
                                <p>1.Flooring</p>      
                            </div>
                            <div class="col-xs-3">
                                <p>Drawing Room</p>      
                            </div>
                            <div class="col-xs-7">
                                <span><?php echo $drawing_room; ?></span>    
                            </div>
                        </div>

                        <!-- Dining Room -->
                        <div class="row">
                            <div class="col-xs-2">
                                <p>&nbsp;</p>      
                            </div>
                            <div class="col-xs-3">
                                <p>Dining Room</p>      
                            </div>
                            <div class="col-xs-7">
                                <span><?php echo $dining_room; ?></span>    
                            </div>
                        </div>

                        <!-- Bedroom No.1 -->
                        <div class="row">
                            <div class="col-xs-2">
                                <p>&nbsp;</p>      
                            </div>
                            <div class="col-xs-3">
                                <p>Bedroom No.1</p>      
                            </div>
                            <div class="col-xs-7">
                                <span><?php echo $bedroom_1; ?></span>    
                            </div>
                        </div>

                        <!-- Bedroom No.2 -->
                        <div class="row">
                            <div class="col-xs-2">
                                <p>&nbsp;</p>      
                            </div>
                            <div class="col-xs-3">
                                <p>Bedroom No.2</p>      
                            </div>
                            <div class="col-xs-7">
                                <span><?php echo $bedroom_1; ?></span>      
                            </div>
                        </div>

                        <!-- Bedroom No.3 -->
                        <div class="row">
                            <div class="col-xs-2">
                                <p>&nbsp;</p>      
                            </div>
                            <div class="col-xs-3">
                                <p>Bedroom No.3</p>      
                            </div>
                            <div class="col-xs-7">
                                <span><?php echo $bedroom_1; ?></span>       
                            </div>
                        </div>

                        <!-- Kitchen -->
                        <div class="row">
                            <div class="col-xs-2">
                                <p>&nbsp;</p>      
                            </div>
                            <div class="col-xs-3">
                                <p>Kitchen</p>      
                            </div>
                            <div class="col-xs-7">
                                <span><?php echo $bedroom_1; ?></span>    
                            </div>
                        </div>

                        <!-- Staircase -->
                        <div class="row">
                            <div class="col-xs-2">
                                <p>&nbsp;</p>      
                            </div>
                            <div class="col-xs-3">
                                <p>Staircase</p>      
                            </div>
                            <div class="col-xs-7">
                                <span><?php echo $bedroom_1; ?></span>    
                            </div>
                        </div>

                        <!-- Lobby Area -->
                        <div class="row">
                            <div class="col-xs-2">
                                <p>&nbsp;</p>      
                            </div>
                            <div class="col-xs-3">
                                <p>Lobby Area</p>      
                            </div>
                            <div class="col-xs-7">
                                <span><?php echo $lobby_area; ?></span>      
                            </div>
                        </div>

                        <!-- Front Terrace -->
                        <div class="row">
                            <div class="col-xs-2">
                                <p>&nbsp;</p>      
                            </div>
                            <div class="col-xs-3">
                                <p>Front Terrace</p>      
                            </div>
                            <div class="col-xs-7">
                                <span><?php echo $front_terrace; ?></span>    
                            </div>
                        </div>

                        <!-- Back Terrace -->
                        <div class="row">
                            <div class="col-xs-2">
                                <p>&nbsp;</p>      
                            </div>
                            <div class="col-xs-3">
                                <p>Back Terrace</p>      
                            </div>
                            <div class="col-xs-7">
                                <span><?php echo $back_terrace; ?></span>       
                            </div>
                        </div>

                        <!-- Toilet Floor -->
                        <div class="row">
                            <div class="col-xs-2">
                                <p>&nbsp;</p>      
                            </div>
                            <div class="col-xs-3">
                                <p>Toilet Floor</p>      
                            </div>
                            <div class="col-xs-7">
                                <span><?php echo $toilet_floor; ?></span>    
                            </div>
                        </div>

                        <!-- Toilet Wall -->
                        <div class="row">
                            <div class="col-xs-2">
                                <p>&nbsp;</p>      
                            </div>
                            <div class="col-xs-3">
                                <p>Toilet Wall</p>      
                            </div>
                            <div class="col-xs-7">
                                <span><?php echo $toilet_wall; ?></span>    
                            </div>
                        </div>

                        <!-- Kitchen Wall Tiles -->
                        <div class="row">
                            <div class="col-xs-2">
                                <p>&nbsp;</p>      
                            </div>
                            <div class="col-xs-3">
                                <p>Kitchen Wall Tiles</p>      
                            </div>
                            <div class="col-xs-7">
                                <span><?php echo $kitchen_wall_tiles; ?></span>    
                            </div>
                        </div>

                        <!-- Wash Area -->
                        <div class="row">
                            <div class="col-xs-2">
                                <p>&nbsp;</p>      
                            </div>
                            <div class="col-xs-3">
                                <p>Wash Area</p>      
                            </div>
                            <div class="col-xs-7">
                                <span><?php echo $wash_area; ?></span>    
                            </div>
                        </div>
                    
                        <!-- Porch -->
                        <div class="row">
                            <div class="col-xs-2">
                                <p>&nbsp;</p>      
                            </div>
                            <div class="col-xs-3">
                                <p>Porch</p>      
                            </div>
                            <div class="col-xs-7">
                                <span><?php echo $porch; ?></span>    
                            </div>
                        </div>

                        <!-- 1.Flooring End -- -->
                        <!-- 2.Doors -- -->
                        <!--  Flush Doors with putty finish & painted -->
                        <div class="row">
                            <div class="col-xs-2">
                                <p>2.Doors</p>      
                            </div>
                            <div class="col-xs-3">
                                <p>Flush Doors with putty finish & painted</p>      
                            </div>
                            <div class="col-xs-7">
                                <span><?php echo $flush_door; ?></span>    
                            </div>
                        </div>


                        <!-- Dewas Frames -->
                        <div class="row">
                            <div class="col-xs-2">
                                <p>&nbsp;</p>      
                            </div>
                            <div class="col-xs-3">
                                <p>Dewas Frames</p>      
                            </div>
                            <div class="col-xs-7">
                                <span><?php echo $dewas_frame; ?></span>    
                            </div>
                        </div>
                        <!-- Alluminium Handles -->
                        <div class="row">
                            <div class="col-xs-2">
                                <p>&nbsp;</p>      
                            </div>
                            <div class="col-xs-3">
                                <p>Alluminium Handles</p>      
                            </div>
                            <div class="col-xs-7">
                                <span><?php echo $alluminium_handle; ?></span>    
                            </div>
                        </div>

                        <!-- Aldrops -->
                        <div class="row">
                            <div class="col-xs-2">
                                <p>&nbsp;</p>      
                            </div>
                            <div class="col-xs-3">
                                <p>Aldrops</p>      
                            </div>
                            <div class="col-xs-7">
                                <span><?php echo $aldrops; ?></span>    
                            </div>
                        </div>

                        <!-- Door Stopper -->
                        <div class="row">
                            <div class="col-xs-2">
                                <p>&nbsp;</p>      
                            </div>
                            <div class="col-xs-3">
                                <p>Door Stopper</p>      
                            </div>
                            <div class="col-xs-7">
                                <span><?php echo $door_stopper; ?></span>       
                            </div>
                        </div>

                        <!-- Tower Bolts -->
                        <div class="row">
                            <div class="col-xs-2">
                                <p>&nbsp;</p>      
                            </div>
                            <div class="col-xs-3">
                                <p>Tower Bolts</p>      
                            </div>
                            <div class="col-xs-7">
                                <span><?php echo $tower_bolt; ?></span>      
                            </div>
                        </div>                          
                        <!-- 2.Doors End -- -->
                        <!-- 3.Windows -- -->
                        <!--  Flush Doors with putty finish & painted -->
                        <div class="row">
                            <div class="col-xs-2">
                                <p>3.Windows</p>
                            </div>
                            <div class="col-xs-3">
                                <p>i. Alluminium Sliding Window of size </p>
                            </div>
                            <div class="col-xs-7">
                                <span><?php echo $window_alluminium; ?></span>
                            </div>
                        </div>
                       
                        <div class="row">
                            <div class="col-xs-2">
                                <p>&nbsp;</p>
                            </div>
                            <div class="col-xs-3">
                                <p>ii. 2 Nos.Ventilator with  pin-head/plan glass fitted in good working conditions with very good  ventilation. </p>
                            </div>
                            <div class="col-xs-7">
                                <span><?php echo $window_ventilator; ?></span>
                            </div>
                        </div>
                      
                        
                         <div class="hidden-lg hidden-md hidden-sm">
                            <br><br><br><br><br><br><br><br><br>
                        </div>

                        <!-- 3.Windows End -- -->
                        <!-- 4.Sanitary -- -->
                        <!--  Indian WC  -->
                        <div class="row">
                            <div class="col-xs-2">
                                <p>4. Sanitary</p>
                            </div>
                            <div class="col-xs-3">
                                <p>Indian WC </p>
                            </div>
                            <div class="col-xs-4">
                                <span><?php echo $san_indian; ?></span>
                            </div>
                            <div class="col-xs-3 text-left">
                                <p>Nos.</p>
                            </div>
                        </div>
                        
                        <!-- European Seat -->
                        <div class="row">
                            <div class="col-xs-2">
                                <p>&nbsp;</p>
                            </div>
                            <div class="col-xs-3">
                                <p>European Seat</p>
                            </div>
                            <div class="col-xs-4">
                                <span><?php echo $san_european; ?></span>
                            </div>
                            <div class="col-xs-3 text-left">
                                <p>Nos.</p>
                            </div>
                        </div>
                      

                        <!-- Seat cover -->
                        <div class="row">
                            <div class="col-xs-2">
                                <p>&nbsp;</p>
                            </div>
                            <div class="col-xs-3">
                                <p>Seat cover</p>
                            </div>
                            <div class="col-xs-4">
                                <span><?php echo $san_seat_cover; ?></span>
                            </div>
                            <div class="col-xs-3 text-left">
                                <p>Nos.</p>
                            </div>
                        </div>
                      

                        <!-- Bib cock  -->
                        <div class="row">
                            <div class="col-xs-2">
                                <p>&nbsp;</p>
                            </div>
                            <div class="col-xs-3">
                                <p>Bib cock </p>
                            </div>
                            <div class="col-xs-4">
                                <span><?php echo $san_bib_cock; ?></span>
                            </div>
                            <div class="col-xs-3 text-left">
                                <p>Nos.</p>
                            </div>
                        </div>
                       

                        <!-- Pillar cock  -->
                        <div class="row">
                            <div class="col-xs-2">
                                <p>&nbsp;</p>
                            </div>
                            <div class="col-xs-3">
                                <p>Pillar cock</p>
                            </div>
                            <div class="col-xs-4">
                                <span><?php echo $san_pillar_cock; ?></span>
                            </div>
                            <div class="col-xs-3 text-left">
                                <p>Nos.</p>
                            </div>
                        </div>
                       

                        <!-- Wall Mixture  -->
                        <div class="row">
                            <div class="col-xs-2">
                                <p>&nbsp;</p>
                            </div>
                            <div class="col-xs-3">
                                <p>Wall Mixture </p>
                            </div>
                            <div class="col-xs-4">
                                <span><?php echo $san_wall_mix; ?></span>
                            </div>
                            <div class="col-xs-3 text-left">
                                <p>Nos.</p>
                            </div>
                        </div>
                      

                        <!-- C.P.Concealed stop cocks -->
                        <div class="row">
                            <div class="col-xs-2">
                                <p>&nbsp;</p>
                            </div>
                            <div class="col-xs-3">
                                <p>C.P.Concealed stop cocks</p>
                            </div>
                            <div class="col-xs-4">
                                <span><?php echo $san_c_p_stop_cocks; ?></span>
                            </div>
                            <div class="col-xs-3 text-left">
                                <p>Nos.</p>
                            </div>
                        </div>
                      


                        <!-- C.P.N. -->
                        <div class="row">
                            <div class="col-xs-2">
                                <p>&nbsp;</p>
                            </div>
                            <div class="col-xs-3">
                                <p>C.P.N.</p>
                            </div>
                            <div class="col-xs-4">
                                <span><?php echo $san_cpn; ?></span>
                            </div>
                            <div class="col-xs-3 text-left">
                                <p>Nos.</p>
                            </div>
                        </div>
                       


                        <!-- Wash basin -->
                        <div class="row">
                            <div class="col-xs-2">
                                <p>&nbsp;</p>
                            </div>
                            <div class="col-xs-3">
                                <p>Wash basin</p>
                            </div>
                            <div class="col-xs-4">
                                <span><?php echo $san_wash_basin; ?></span>
                            </div>
                            <div class="col-xs-3 text-left">
                                <p>Nos.</p>
                            </div>
                        </div>
                       


                        <!-- Wash basin -->
                        <div class="row">
                            <div class="col-xs-2">
                                <p>&nbsp;</p>
                            </div>
                            <div class="col-xs-3">
                                <p>Waste pipe </p>
                            </div>
                            <div class="col-xs-4">
                                <span><?php echo $san_waste_pipe; ?></span>
                            </div>
                            <div class="col-xs-3 text-left">
                                <p>Nos.</p>
                            </div>
                        </div>
                       <!-- TPN -->
                        <div class="row">
                            <div class="col-xs-2">
                                <p>&nbsp;</p>      
                            </div>
                            <div class="col-xs-3">
                                <p>TPN</p>      
                            </div>
                            <div class="col-xs-4">
                                <span><?php echo $tpn; ?></span>    
                            </div>
                            <div class="col-xs-3 text-left">
                                <p>Nos.</p>
                            </div>
                        </div>


                        <!-- Wash basin -->
                        <div class="row">
                            <div class="col-xs-2">
                                <p>&nbsp;</p>
                            </div>
                            <div class="col-xs-10">
                                <p>PVC connection, Kitchen, Toilet Drains  / Disposal system are clear.
                                    All fitted in good working conditions  with satisfactory drainages
                                    system sewage line network is passing  through backyard is as per
                                    the Agreement and Registry. </p>
                            </div>
                        </div>
                       
                      
                        <!-- Sanitary End -- -->

                        <!-- Electrical Start -- -->
                        <div class="row">
                            <div class="col-xs-2">
                                <p>5. Electrical</p>
                            </div>
                            <div class="col-xs-3">
                                <span><?php echo $elec_6_amp_switch; ?></span>
                            </div>
                            <div class="col-xs-2 text-left">
                                <p>    Nos. 6 Amp switches, </p>
                            </div>
                            <div class="col-xs-3 text-left">
                                <span><?php echo $elec_16_amp_switch; ?></span>
                            </div>
                            <div class="col-xs-2 text-left">
                                <p>16 Amp Switches</p>
                            </div>
                        </div>
                       
                        <div class="row">
                            <div class="col-xs-2">
                                <p>&nbsp;</p>
                            </div>
                            <div class="col-xs-3">
                                <span><?php echo $elec_6_amp_socket; ?></span>
                            </div>
                            <div class="col-xs-2 text-left">
                                <p>Nos. 6  Amp Socket ,</p>
                            </div>
                            <div class="col-xs-3 text-left">
                                <span><?php echo $elec_16_amp_socket; ?></span>
                            </div>
                            <div class="col-xs-2 text-left">
                                <p>16 Amp Socket</p>
                            </div>
                        </div>
                       
                        <div class="row">
                            <div class="col-xs-2">
                                <p>&nbsp;</p>
                            </div>
                            <div class="col-xs-3">
                                <span><?php echo $elec_ceiling_rose; ?></span>
                            </div>
                            <div class="col-xs-2 text-left">
                                <p>Nos.,ceiling Rose , </p>
                            </div>
                        </div>
                       
                        <div class="row">
                            <div class="col-xs-2">
                                <p>&nbsp;</p>
                            </div>
                            <div class="col-xs-3">
                                <span><?php echo $elec_angle_holder; ?></span>
                            </div>
                            <div class="col-xs-2 text-left">
                                <p>Nos. Angle holder , </p>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-xs-2">
                                <p>&nbsp;</p>
                            </div>
                            <div class="col-xs-3">
                                <span><?php echo $elec_button_holder; ?></span>
                            </div>
                            <div class="col-xs-2 text-left">
                                <p>Nos. Button holder,</p>
                            </div>
                        </div>
                       
                        <div class="row">
                            <div class="col-xs-2">
                                <p>&nbsp;</p>
                            </div>
                            <div class="col-xs-3">
                                <span><?php echo $elec_mcb; ?></span>
                            </div>
                            <div class="col-xs-2 text-left">
                                <p>Nos. MCB’s,</p>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-xs-2">
                                <p>&nbsp;</p>
                            </div>
                            <div class="col-xs-10">
                                <p>All fitted in good working conditions  with “A” class copper
                                    wire wiring tested in satisfactory  working condition .</p>
                            </div>

                        </div>
                       
                        <!-- Electrical End -- -->

                        <!-- Painting Start -- -->
                        <div class="row">
                            <div class="col-xs-2">
                                <p>6. Painting</p>
                            </div>
                            <div class="col-xs-10">
                                <p>All  walls  are  painted  with  oil   bound distemper, Doors, Door frames &
                                    grills painted with synthetic Enamel  paints, painting work is up to my
                                    satisfaction .</p>
                            </div>
                        </div>
                        
                        <!-- Painting End -- -->


                        <div class="row">

                            <div class="col-xs-12">
                                <p>
                                    All item / quality has been verified  by me. I / we am / are pleased to
                                    certify that work of my / our  (Ground+First Floor Only), <?php echo $unit_no;?>, at
                                    <?php echo $project_name; ?> <?php echo $phase; ?> has been completed  as per agreement to my / our
                                    utmost satisfaction.  Developer/Builder/Coloniser has provided all
                                    the amenities like sewage disposal  network STP, water supply network
                                    Road and facilities as per the  agreement to me and I am fully satisfied
                                    with the House & also the Super Built  up area of my house.
                                </p>
                            </div>
                        </div>
                       
                        <div class="row">
                            <div class="col-xs-12">
                                <p>
                                    Signature of Allottee
                                </p>
                            </div>
                        </div>
                       
                        <div class="row">
                            <div class="col-xs-2">
                                <p>
                                    Name : 
                                </p>
                            </div>
                            <div class="col-xs-1">
                                <label>:</label>
                            </div>
                            <div class="col-xs-4">
                                <p>
                                    <span><?php echo $mr_mrs; ?>&nbsp;<?php echo $name;?></span>
                                </p>
                            </div>
                        </div>
                       
                        <div class="row">
                            <div class="col-xs-2">
                                <p>
                                    Address
                                </p>
                            </div>
                            <div class="col-xs-1">
                                <label>:</label>
                            </div>
                            <div class="col-xs-4">
                                <p>
                                    <span><?php echo $present_addr; ?>(<?php echo $pincode?>)</span>
                                </p>
                            </div>
                        </div>
                      
                        <div class="row">
                            <div class="col-xs-12">
                                <p>
                                    Signature of Site Engineer
                                </p>
                            </div>
                        </div>
                       
                        <div class="row">
                            <div class="col-xs-2">
                                <p>
                                    Name
                                </p>
                            </div>
                            <div class="col-xs-1">
                                <label>:</label>
                            </div>
                            <div class="col-xs-4">
                                <p>
                                    <span>&nbsp;</span>
                                </p>
                            </div>
                        </div>
                    </form>
                </div> 
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
                $('#toppageheader').html('View Work Completion<span class="pull-right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="print" id="btnprint" value="print" class="btn btn-sm btn-default" onClick="print_this_doc();">Print&nbsp;&nbsp;<i class="fa fa-print"></i></button></span>');
                $("a:contains('Completion Status')").parent().addClass('active');
            });
        </script>
    </body>
</html>


