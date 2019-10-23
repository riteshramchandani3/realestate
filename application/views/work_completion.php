<!DOCTYPE html>
<!--
Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
Unauthorized copying of this file, via any medium is strictly prohibited
Proprietary and confidential.
Written by Oga Technologies, October 1,  2016.
-->
<html>

    <head>
        <title>Work Completion Status</title>
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

            }
            p{
                font-size: 14px;
                font-weight: 600;
                text-align: justify;
            }
            .astrick{
                color: red;
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

            <div class="container">
                <a href="javascript: history.go(-1)" class="btn btn-primary pull-right clickable" role="button"><i class="fa fa-arrow-left" aria-hidden="true"></i> &nbsp;&nbsp;Back&nbsp;&nbsp;&nbsp;</a>
                <br> <br> <br> 
            </div>
            <?php
            // log_message('error', 'applicant payment  page start:');
            $user1 = $this->input->get('id');




            $explode_data = explode('?', $user1);
            $id = $explode_data[0];


            //  print_r( $user); echo'<br/>';
            foreach ($this->Final_calculation_model->get_completion_appl_details($user1) as $row) {
                ?>  
                <?php $type = $row->type; ?> 
                <?php $project_name = $row->project_name; ?> 
                <?php $block = $row->block; ?> 

                <?php $unit_no = $row->unit_no; ?> 
                <?php $name = $row->name; ?> 

            <?php } ?>

            <h4>  
                &nbsp;&nbsp;<?php $name = $row->name; ?>&nbsp;&nbsp;&nbsp;&nbsp;<strong> </strong> &nbsp;<?php $project_name = $row->project_name; ?> <?php $block = $row->block; ?>&nbsp;&nbsp;&nbsp;&nbsp;<strong></strong>&nbsp;<?php $unit_no = $row->unit_no; ?>&nbsp;&nbsp;&nbsp;&nbsp;<strong></strong>&nbsp;<?php $type = $row->type; ?>
            </h4>


            <center>
                <div class="btn-3d" style="margin-top: -50px;border:1px solid #337ab7; border-radius:5px; width:80%; line-height:150%;  ">
                    <label>Customer Name :</label><?php echo nbs(2) . $name; ?><?php echo nbs(3); ?>
                    <label>Project Name :</label><?php echo nbs(2) . $project_name . nbs(1) . $block; ?> <?php echo nbs(3); ?>
                    <label>Unit No :</label><?php echo nbs(2) . $unit_no; ?> <?php echo nbs(3); ?>
                    <label>Type :</label><?php echo nbs(2) . $type; ?>

                </div>
            </center>

            <br><br>

            <div class="container">

                <?php
                // log_message('error', 'applicant payment  page start:');
                $user1 = $this->input->get('id');




                $explode_data = explode('?', $user1);
                $id = $explode_data[0];


                //  print_r( $user); echo'<br/>';
                foreach ($this->Final_calculation_model->get_appl_details($user1) as $row) {
                    ?>  
                    <?php $type = $row->type; ?> 
                    <?php $project_id = $row->project_id; ?> 
                    <?php $block = $row->block; ?> 
                    <?php $category = $row->category; ?> 
                    <?php $unit_no = $row->unit_no; ?> 

                <?php } ?>

                <form class="form-inline" autocomplete="off" action="<?php echo site_url('Final_calculation/insert_work_completion_status'); ?>" method ="post">

                    <!-- 1.Flooring -- -->
                    <!--  Drawing Room -->
                    <div class="row">
                        <div class="col-xs-2">
                            <input type="hidden" value="<?php echo $id; ?>" name="user_id" id="user_id">
                            <input type="hidden" value="<?php echo $type; ?>" name="type" id="type">
                            <input type="hidden" value="<?php echo $project_id; ?>" name="project_id" id="project_id">
                            <input type="hidden" value="<?php echo $block; ?>" name="phase" id="phase">
                            <input type="hidden" value="<?php echo $category; ?>" name="block" id="block">
                            <input type="hidden" value="<?php echo $unit_no; ?>" name="unit_no" id="unit_no">


                            <p>1.Flooring</p>      
                        </div>
                        <div class="col-xs-3">
                            <p>Drawing Room</p>      
                        </div>
                        <div class="col-xs-7">
                            <input type="text" name="drawing_room" id="drawing_room" onkeyup="Validate(this);" class="form-control">    
                        </div>
                    </div>
                    <br>

                    <!-- Dining Room -->
                    <div class="row">
                        <div class="col-xs-2">
                            <p>&nbsp;</p>      
                        </div>
                        <div class="col-xs-3">
                            <p>Dining Room</p>      
                        </div>
                        <div class="col-xs-7">
                            <input type="text" name="dining_room" id="dining_room" onkeyup="Validate(this);" class="form-control">    
                        </div>
                    </div>
                    <br>

                    <!-- Bedroom No.1 -->
                    <div class="row">
                        <div class="col-xs-2">
                            <p>&nbsp;</p>      
                        </div>
                        <div class="col-xs-3">
                            <p>Bedroom No.1</p>      
                        </div>
                        <div class="col-xs-7">
                            <input type="text" name="bedroom_1" id="bedroom_1" onkeyup="Validate(this);" class="form-control">    
                        </div>
                    </div>
                    <br>

                    <!-- Bedroom No.2 -->
                    <div class="row">
                        <div class="col-xs-2">
                            <p>&nbsp;</p>      
                        </div>
                        <div class="col-xs-3">
                            <p>Bedroom No.2</p>      
                        </div>
                        <div class="col-xs-7">
                            <input type="text" name="bedroom_2" id="bedroom_2" onkeyup="Validate(this);" class="form-control">    
                        </div>
                    </div>
                    <br>

                    <!-- Bedroom No.3 -->
                    <div class="row">
                        <div class="col-xs-2">
                            <p>&nbsp;</p>      
                        </div>
                        <div class="col-xs-3">
                            <p>Bedroom No.3</p>      
                        </div>
                        <div class="col-xs-7">
                            <input type="text" name="bedroom_3" id="bedroom_3" onkeyup="Validate(this);" class="form-control">    
                        </div>
                    </div>
                    <br>


                    <!-- Kitchen -->
                    <div class="row">
                        <div class="col-xs-2">
                            <p>&nbsp;</p>      
                        </div>
                        <div class="col-xs-3">
                            <p>Kitchen</p>      
                        </div>
                        <div class="col-xs-7">
                            <input type="text" name="kitchen" id="kitchen" onkeyup="Validate(this);" class="form-control">    
                        </div>
                    </div>
                    <br>

                    <!-- Staircase -->
                    <div class="row">
                        <div class="col-xs-2">
                            <p>&nbsp;</p>      
                        </div>
                        <div class="col-xs-3">
                            <p>Staircase</p>      
                        </div>
                        <div class="col-xs-7">
                            <input type="text" name="staircase" id="staircase" onkeyup="Validate(this);" class="form-control">    
                        </div>
                    </div>
                    <br>

                    <!-- Lobby Area -->
                    <div class="row">
                        <div class="col-xs-2">
                            <p>&nbsp;</p>      
                        </div>
                        <div class="col-xs-3">
                            <p>Lobby Area</p>      
                        </div>
                        <div class="col-xs-7">
                            <input type="text" name="lobby_area" id="lobby_area" onkeyup="Validate(this);" class="form-control">    
                        </div>
                    </div>
                    <br>

                    <!-- Front Terrace -->
                    <div class="row">
                        <div class="col-xs-2">
                            <p>&nbsp;</p>      
                        </div>
                        <div class="col-xs-3">
                            <p>Front Terrace</p>      
                        </div>
                        <div class="col-xs-7">
                            <input type="text" name="front_terrace" id="front_terrace" onkeyup="Validate(this);" class="form-control">    
                        </div>
                    </div>
                    <br>

                    <!-- Back Terrace -->
                    <div class="row">
                        <div class="col-xs-2">
                            <p>&nbsp;</p>      
                        </div>
                        <div class="col-xs-3">
                            <p>Back Terrace</p>      
                        </div>
                        <div class="col-xs-7">
                            <input type="text" name="back_terrace" id="back_terrace" onkeyup="Validate(this);" class="form-control">    
                        </div>
                    </div>
                    <br>

                    <!-- Toilet Floor -->
                    <div class="row">
                        <div class="col-xs-2">
                            <p>&nbsp;</p>      
                        </div>
                        <div class="col-xs-3">
                            <p>Toilet Floor</p>      
                        </div>
                        <div class="col-xs-7">
                            <input type="text" name="toilet_floor" id="toilet_floor" onkeyup="Validate(this);" class="form-control">    
                        </div>
                    </div>
                    <br>

                    <!-- Toilet Wall -->
                    <div class="row">
                        <div class="col-xs-2">
                            <p>&nbsp;</p>      
                        </div>
                        <div class="col-xs-3">
                            <p>Toilet Wall</p>      
                        </div>
                        <div class="col-xs-7">
                            <input type="text" name="toilet_wall" id="toilet_wall" onkeyup="Validate(this);" class="form-control">    
                        </div>
                    </div>
                    <br>

                    <!-- Kitchen Wall Tiles -->
                    <div class="row">
                        <div class="col-xs-2">
                            <p>&nbsp;</p>      
                        </div>
                        <div class="col-xs-3">
                            <p>Kitchen Wall Tiles</p>      
                        </div>
                        <div class="col-xs-7">
                            <input type="text" name="kitchen_wall_tiles" id="kitchen_wall_tiles" onkeyup="Validate(this);" class="form-control">    
                        </div>
                    </div>
                    <br>

                    <!-- Wash Area -->
                    <div class="row">
                        <div class="col-xs-2">
                            <p>&nbsp;</p>      
                        </div>
                        <div class="col-xs-3">
                            <p>Wash Area</p>      
                        </div>
                        <div class="col-xs-7">
                            <input type="text" name="wash_area" id="wash_area" onkeyup="Validate(this);" class="form-control">    
                        </div>
                    </div>
                    <br>
                    
                    <!-- Porch -->
                    <div class="row">
                        <div class="col-xs-2">
                            <p>&nbsp;</p>      
                        </div>
                        <div class="col-xs-3">
                            <p>Porch</p>      
                        </div>
                        <div class="col-xs-7">
                            <input type="text" name="porch" id="porch" onkeyup="Validate(this);" class="form-control">    
                        </div>
                    </div>
                    <br>
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
                            <input type="text" name="flush_door" id="flush_door" onkeyup="Validate(this);" class="form-control">    
                        </div>
                    </div>
                    <br>

                    <!-- Dewas Frames -->
                    <div class="row">
                        <div class="col-xs-2">
                            <p>&nbsp;</p>      
                        </div>
                        <div class="col-xs-3">
                            <p>Dewas Frames</p>      
                        </div>
                        <div class="col-xs-7">
                            <input type="text" name="dewas_frame" id="dewas_frame" onkeyup="Validate(this);" class="form-control">    
                        </div>
                    </div>
                    <br>

                    <!-- Alluminium Handles -->
                    <div class="row">
                        <div class="col-xs-2">
                            <p>&nbsp;</p>      
                        </div>
                        <div class="col-xs-3">
                            <p>Alluminium Handles</p>      
                        </div>
                        <div class="col-xs-7">
                            <input type="text" name="alluminium_handle" id="alluminium_handle" onkeyup="Validate(this);" class="form-control">    
                        </div>
                    </div>
                    <br>

                    <!-- Aldrops -->
                    <div class="row">
                        <div class="col-xs-2">
                            <p>&nbsp;</p>      
                        </div>
                        <div class="col-xs-3">
                            <p>Aldrops</p>      
                        </div>
                        <div class="col-xs-7">
                            <input type="text" name="aldrops" id="aldrops" onkeyup="Validate(this);" class="form-control">    
                        </div>
                    </div>
                    <br>

                    <!-- Door Stopper -->
                    <div class="row">
                        <div class="col-xs-2">
                            <p>&nbsp;</p>      
                        </div>
                        <div class="col-xs-3">
                            <p>Door Stopper</p>      
                        </div>
                        <div class="col-xs-7">
                            <input type="text" name="door_stopper" id="door_stopper" onkeyup="Validate(this);" class="form-control">    
                        </div>
                    </div>
                    <br>


                    <!-- Tower Bolts -->
                    <div class="row">
                        <div class="col-xs-2">
                            <p>&nbsp;</p>      
                        </div>
                        <div class="col-xs-3">
                            <p>Tower Bolts</p>      
                        </div>
                        <div class="col-xs-7">
                            <input type="text" name="tower_bolt" id="tower_bolt" onkeyup="Validate(this);" class="form-control">    
                        </div>
                    </div>   
                    <br>
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
                            <textarea name="window_alluminium" id="window_alluminium" onkeyup="Validate(this);" class="form-control"></textarea>  
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-xs-2">
                            <p>&nbsp;</p>      
                        </div>
                        <div class="col-xs-3">
                            <p>ii. 2 Nos.Ventilator with pin-head/plan glass fitted in good working conditions with very good ventilation. </p>      
                        </div>
                        <div class="col-xs-7">
                            <textarea name="window_ventilator" id="window_ventilator" onkeyup="Validate(this);" class="form-control"></textarea>    

                        </div>
                    </div>
                    <br>

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
                            <input type="text" name="san_indian" id="san_indian" onkeyup="ValidateNum(this);" class="form-control">                               
                        </div>
                        <div class="col-xs-3 text-left">
                            <p>Nos.</p>
                        </div>
                    </div>
                    <br>
                    <!-- European Seat -->
                    <div class="row">
                        <div class="col-xs-2">
                            <p>&nbsp;</p>      
                        </div>
                        <div class="col-xs-3">
                            <p>European Seat</p>      
                        </div>
                        <div class="col-xs-4">
                            <input type="text" name="san_european" id="san_european" onkeyup="ValidateNum(this);" class="form-control">                               
                        </div>
                        <div class="col-xs-3 text-left">
                            <p>Nos.</p>
                        </div>
                    </div>
                    <br>

                    <!-- Seat cover -->
                    <div class="row">
                        <div class="col-xs-2">
                            <p>&nbsp;</p>      
                        </div>
                        <div class="col-xs-3">
                            <p>Seat cover</p>      
                        </div>
                        <div class="col-xs-4">
                            <input type="text" name="san_seat_cover" id="san_seat_cover" onkeyup="ValidateNum(this);" class="form-control">                               
                        </div>
                        <div class="col-xs-3 text-left">
                            <p>Nos.</p>
                        </div>
                    </div>
                    <br>

                    <!-- Bib cock  -->
                    <div class="row">
                        <div class="col-xs-2">
                            <p>&nbsp;</p>      
                        </div>
                        <div class="col-xs-3">
                            <p>Bib cock </p>      
                        </div>
                        <div class="col-xs-4">
                            <input type="text" name="san_bib_cock" id="san_bib_cock" onkeyup="ValidateNum(this);" class="form-control">                               
                        </div>
                        <div class="col-xs-3 text-left">
                            <p>Nos.</p>
                        </div>
                    </div>
                    <br>

                    <!-- Pillar cock  -->
                    <div class="row">
                        <div class="col-xs-2">
                            <p>&nbsp;</p>      
                        </div>
                        <div class="col-xs-3">
                            <p>Pillar cock</p>      
                        </div>
                        <div class="col-xs-4">
                            <input type="text" name="san_pillar_cock" id="san_pillar_cock" onkeyup="ValidateNum(this);" class="form-control">                               
                        </div>
                        <div class="col-xs-3 text-left">
                            <p>Nos.</p>
                        </div>
                    </div>
                    <br>

                    <!-- Wall Mixture  -->
                    <div class="row">
                        <div class="col-xs-2">
                            <p>&nbsp;</p>      
                        </div>
                        <div class="col-xs-3">
                            <p>Wall Mixture </p>      
                        </div>
                        <div class="col-xs-4">
                            <input type="text" name="san_wall_mix" id="san_wall_mix" onkeyup="ValidateNum(this);" class="form-control">                               
                        </div>
                        <div class="col-xs-3 text-left">
                            <p>Nos.</p>
                        </div>
                    </div>
                    <br>


                    <!-- C.P.Concealed stop cocks -->
                    <div class="row">
                        <div class="col-xs-2">
                            <p>&nbsp;</p>      
                        </div>
                        <div class="col-xs-3">
                            <p>C.P.Concealed stop cocks</p>      
                        </div>
                        <div class="col-xs-4">
                            <input type="text" name="san_c_p_stop_cocks" id="san_c_p_stop_cocks" onkeyup="ValidateNum(this);" class="form-control">                               
                        </div>
                        <div class="col-xs-3 text-left">
                            <p>Nos.</p>
                        </div>
                    </div>                      
                    <br>


                    <!-- C.P.N. -->
                    <div class="row">
                        <div class="col-xs-2">
                            <p>&nbsp;</p>      
                        </div>
                        <div class="col-xs-3">
                            <p>C.P.N.</p>      
                        </div>
                        <div class="col-xs-4">
                            <input type="text" name="san_cpn" id="san_cpn" onkeyup="ValidateNum(this);" class="form-control">                               
                        </div>
                        <div class="col-xs-3 text-left">
                            <p>Nos.</p>
                        </div>
                    </div>                      
                    <br>


                    <!-- Wash basin -->
                    <div class="row">
                        <div class="col-xs-2">
                            <p>&nbsp;</p>      
                        </div>
                        <div class="col-xs-3">
                            <p>Wash basin</p>      
                        </div>
                        <div class="col-xs-4">
                            <input type="text" name="san_wash_basin" id="san_wash_basin" onkeyup="ValidateNum(this);" class="form-control">                               
                        </div>
                        <div class="col-xs-3 text-left">
                            <p>Nos.</p>
                        </div>
                    </div>                      
                    <br>


                    <!-- Waste pipe -->
                    <div class="row">
                        <div class="col-xs-2">
                            <p>&nbsp;</p>      
                        </div>
                        <div class="col-xs-3">
                            <p>Waste pipe </p>      
                        </div>
                        <div class="col-xs-4">
                            <input type="text" name="san_waste_pipe" id="san_waste_pipe" onkeyup="ValidateNum(this);" class="form-control">                               
                        </div>
                        <div class="col-xs-3 text-left">
                            <p>Nos.</p>
                        </div>
                    </div>                      
                    <br>

                    <!-- TPN -->
                    <div class="row">
                        <div class="col-xs-2">
                            <p>&nbsp;</p>      
                        </div>
                        <div class="col-xs-3">
                            <p>TPN</p>      
                        </div>
                        <div class="col-xs-4">
                            <input type="text" name="tpn" id="tpn" onkeyup="ValidateNum(this);" class="form-control">    
                        </div>
                        <div class="col-xs-3 text-left">
                            <p>Nos.</p>
                        </div>
                    </div>
                    <br>

                    <!-- Wash basin -->
                    <div class="row">
                        <div class="col-xs-2">
                            <p>&nbsp;</p>      
                        </div>
                        <div class="col-xs-10">
                            <p>PVC connection, Kitchen, Toilet Drains / Disposal system are clear.
                                All fitted in good working conditions with satisfactory drainages 
                                system sewage line network is passing through backyard is as per 
                                the Agreement and Registry. </p>      
                        </div>
                    </div>     
                    <br>
                    <!-- Sanitary End -- -->

                    <!-- Electrical Start -- -->                       
                    <div class="row">
                        <div class="col-xs-2">
                            <p>5. Electrical</p>      
                        </div>
                        <div class="col-xs-3">
                            <input type="text" name="elec_6_amp_switch" id="elec_6_amp_switch" onkeyup="ValidateNum(this);" class="form-control">   
                        </div>
                        <div class="col-xs-2 text-left">
                            <p>	Nos. 6 Amp switches, </p>                             
                        </div>
                        <div class="col-xs-3 text-left">
                            <input type="text" name="elec_16_amp_switch" id="elec_16_amp_switch" onkeyup="ValidateNum(this);" class="form-control">   
                        </div>
                        <div class="col-xs-2 text-left">
                            <p>16 Amp Switches</p>
                        </div>
                    </div> 
                    <br>
                    <div class="row">
                        <div class="col-xs-2">
                            <p>&nbsp;</p>      
                        </div>
                        <div class="col-xs-3">
                            <input type="text" name="elec_6_amp_socket" id="elec_6_amp_socket" onkeyup="ValidateNum(this);" class="form-control">   
                        </div>
                        <div class="col-xs-2 text-left">
                            <p>Nos. 6  Amp Socket ,</p>                             
                        </div>
                        <div class="col-xs-3 text-left">
                            <input type="text" name="elec_16_amp_socket" id="elec_16_amp_socket" onkeyup="ValidateNum(this);" class="form-control">   
                        </div>
                        <div class="col-xs-2 text-left">
                            <p>16 Amp Socket</p>
                        </div>
                    </div> 
                    <br>
                    <div class="row">
                        <div class="col-xs-2">
                            <p>&nbsp;</p>      
                        </div>
                        <div class="col-xs-3">
                            <input type="text" name="elec_ceiling_rose" id="elec_ceiling_rose" onkeyup="ValidateNum(this);" class="form-control">   
                        </div>
                        <div class="col-xs-2 text-left">
                            <p>Nos.,ceiling Rose , </p>                             
                        </div>
                    </div> 
                    <br>
                    <div class="row">
                        <div class="col-xs-2">
                            <p>&nbsp;</p>      
                        </div>
                        <div class="col-xs-3">
                            <input type="text" name="elec_angle_holder" id="elec_angle_holder" onkeyup="ValidateNum(this);" class="form-control">   
                        </div>
                        <div class="col-xs-2 text-left">
                            <p>Nos. Angle holder , </p>                             
                        </div>
                    </div> 
                    <br>
                    <div class="row">
                        <div class="col-xs-2">
                            <p>&nbsp;</p>       
                        </div>
                        <div class="col-xs-3">
                            <input type="text" name="elec_button_holder" id="elec_button_holder" onkeyup="ValidateNum(this);" class="form-control">   
                        </div>
                        <div class="col-xs-2 text-left">
                            <p>Nos. Button holder,</p>                             
                        </div>
                    </div> 
                    <br>
                    <div class="row">
                        <div class="col-xs-2">
                            <p>&nbsp;</p>      
                        </div>
                        <div class="col-xs-3">
                            <input type="text" name="elec_mcb" id="elec_mcb" onkeyup="ValidateNum(this);" class="form-control">   
                        </div>
                        <div class="col-xs-2 text-left">
                            <p>Nos. MCB’s,</p>                             
                        </div>
                    </div> 
                    <br>
                    <div class="row">
                        <div class="col-xs-2">
                            <p>&nbsp;</p>      
                        </div>
                        <div class="col-xs-10">
                            <p>All fitted in good working conditions with “A” class copper 	
                                wire wiring tested in satisfactory working condition .</p>
                        </div>

                    </div> 
                    <br>
                    <!-- Electrical End -- -->

                    <!-- Painting Start -- -->                       
                    <div class="row">
                        <div class="col-xs-2">
                            <p>6. Painting</p>      
                        </div>
                        <div class="col-xs-10">
                            <p>All  walls  are  painted  with  oil  bound distemper, Doors, Door frames & 
                                grills painted with synthetic Enamel paints, painting work is up to my 
                                satisfaction .</p> 
                        </div>
                    </div> 
                    <br>
                    <!-- Painting End -- -->
                    <div class="row">  

                        <p class="text-center">
                            <input type="submit" name="submit" class="btn btn-success" value="submit"/>
                            <!--   <button id="submit" name="submit" class="btn btn-success" value="1">Submit</button>-->
                            <button id="cancel" name="cancel" class="btn btn-default" type="reset">Reset</button>
                            <!--a href="javascript: history.go(-1)" class="btn btn-default" role="button">Cancel</a-->
                        </p> 
                    </div>

                </form>
            </div> 
        </div> 


        <script type="text/javascript">

            $(document).ready(function () {
                $('#toppageheader').html('Work Completion Status');
                $("a:contains('Completion Status')").parent().addClass('active');
            });
            function Validate(txt) {
                txt.value = txt.value.replace(/[^a-zA-Z0-9-'\n\r.{ }]+/g, '');
                //txt.value = txt.value.replace(/^[a-zA-Z0-9\-\s]+$/,'');
            }
            function ValidateNum(num) {
                //num.value = num.value.replace(/[\\A-Za-z!"£$%^&\,*+_={};:'@#~,.Š\/<>?|`¬\]\[]/g, '');
                num.value = num.value.match(/^\d+$/);
            }
            $("input").keypress(function (event) {
                if (event.which == 13) {
                    event.preventDefault();
                    $("form").submit();
                }
            });
        </script>
    </body>
</html>


