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
max

        <style type="text/css">
            .box{
                display: none;

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
        <div class="main">

            <div class="container">
                <form action="<?php echo site_url('main_controller/takeinputs'); ?>" method="post" name="Form" class="form-inline" enctype="multipart/form-data" onsubmit="return validateForm()">

                    <div class="panel-group" id="accordion">

                        <div class="panel panel-primary" title="Essargee Construction" style="cursor:default;">
                            <div class="panel-heading" style="/* background-color: #BEBEBE;*/">
                                <div class="panel-title" style="display: block;padding: 5px;">

                                    <?php
                                    foreach ($this->Company_info_model->get_company_info() as $row) {
                                        ?> 
                                        <span><?php echo $row->attribute; ?></span>&nbsp;:&nbsp;
                                        <span><?php echo $row->value; ?></span>
                                    <?php } ?>
                                    <span style="margin-left:32%;">Application Number 
                                        <?php
                                        $id = $this->realestate_model->get_max_id();
                                        echo $id[0]->max_id;
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

                                            <label for="project_name">Project :</label>
                                            <select class="form-control" name="project_name" id="project_name" onchange='getblocks(this.value);'> 
                                                <option value='0'>--Select--</option>      
                                                <?php
                                                foreach ($this->realestate_model->project_dtls() as $w) {
                                                    ?>
                                                    <option value="<?php echo $w->id; ?>"><?php echo $w->project_name; ?></option>  
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                            <br>
                                            <br>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="thumbnail">
                                                        <img src="<?php echo base_url('resources/image/f3.png'); ?>" height="300" width="150" name="applicant_img" id="profile-img-tag" class="img-rounded img-responsive" alt="Cinque Terre"/>
                                                        <div class="caption">
                                                            <p style="text-align: center;">Applicant</p>

                                                            <!--<a href="#" class="btn btn-default btn-xs" role="button">Upload</a></center>-->
                                                            <input type="file" name="img_path"  id="profile-img">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6 col-md-4">
                                                    <div class="thumbnail">
                                                        <img src="<?php echo base_url('resources/image/f3.png'); ?>" height="300" width="150" name="coapplicant_img" id="profile-img-tag2" class="img-rounded img-responsive" alt="Cinque Terre"/>
                                                        <div class="caption">
                                                            <p style="text-align: center;">Co-Applicant</p>

                                                            <input type="file" name="ca_img_path"  id="profile-img2"  >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <table class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <td class="col-sm-4">Block</td>
                                                        <td class="col-sm-8" style="margin: 0; padding: 0;">
                                                        <!--    <input type="text" name="block" class="form-control" style= "display: block; padding: 2px; margin: 0; border: 0; width: 100%; border-radius: 0px;"/>-->
                                                            <select class="form-control" id='block_name' name="block" onchange="gettype(this.value);" >
                                                                <option value="0">--Select--</option>
                                                            </select>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="col-sm-4">Type</td>
                                                        <td class="col-sm-8" style="margin: 0; padding: 0;">
                                                            <select class="form-control" id="unittype" onchange="getcategory();" name="type" style= "display: block; padding: 2px; margin: 0; border: 0; width: 100%; border-radius: 0px;" onchange="showdiv();">

                                                                <option value="0">--Select--</option>

                                                            </select></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-sm-4">Category</td>
                                                        <td class="col-sm-8" style="margin: 0; padding: 0;">
                                                            <select class="form-control" id="selcat" name="category" onchange="getavailableunits();" style= "display: block; padding: 2px; margin: 0; border: 0; width: 100%; border-radius: 0px;">
                                                                <option value="0">--Select--</option>

                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-sm-4">Unit No.</td>
                                                        <td class="col-sm-8" style="margin: 0; padding: 0;">

                                                            <select name="unit_no" id="selunit" onchange="getareas();" class="form-control" style= "display: block; padding: 2px; margin: 0; border: 0; width: 100%; border-radius: 0px;">
                                                                <option value="0">--Select--</option>
                                                            </select>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td class="col-sm-4">Status.</td>
                                                        <td class="col-sm-8" style="margin: 0; padding: 0;">
                                                        <!--    <input type="text" name="block" class="form-control" style= "display: block; padding: 2px; margin: 0; border: 0; width: 100%; border-radius: 0px;"/>-->
                                                            <select class="form-control" name="status" >
                                                                <option value="0">--select--</option>
                                                                <option value="HOLD">HOLD</option>
                                                                <option value="BOOKED">BOOKED</option>
                                                            </select>
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td class="col-sm-4">Ground Floor Carpet Area </td>
                                                        <td class="col-sm-8" style="margin: 0; padding: 0;"><input type="text" id="ground_carpet_area" name="ground_carpet_area" class="form-control" style= "display: block; padding: 2px; margin: 0; border: 0; width: 100%; border-radius: 0px;"/></td>
                                                    </tr>

                                                    <tr>
                                                        <td class="col-sm-4">First Floor Carpet Area</td>
                                                        <td class="col-sm-8" style="margin: 0; padding: 0;"><input type="text" id="floor_carpet_area" name="floor_carpet_area" class="form-control" style= "display: block; padding: 2px; margin: 0; border: 0; width: 100%; border-radius: 0px;"/></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-sm-4">Carpet area</td>
                                                        <td class="col-sm-8" style="margin: 0; padding: 0;"><input type="text" id="carpet_area" name="carpet_area" class="form-control" style= "display: block; padding: 2px; margin: 0; border: 0; width: 100%; border-radius: 0px;"/></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-sm-4">Balcony Area</td>
                                                        <td class="col-sm-8" style="margin: 0; padding: 0;"><input type="text" id="balcony_area" name="balcony_area" class="form-control" style= "display: block; padding: 2px; margin: 0; border: 0; width: 100%; border-radius: 0px;"/></td>
                                                    </tr>


                                                    <tr>
                                                        <td class="col-sm-4">Common Area</td>
                                                        <td class="col-sm-8" style="margin: 0; padding: 0;"><input type="text" name="common_area" id="common_area" class="form-control" style= "display: block; padding: 2px; margin: 0; border: 0; width: 100%; border-radius: 0px;"/></td>
                                                    </tr>

                                                    <tr>
                                                        <td class="col-sm-4">Wash Area</td>
                                                        <td class="col-sm-8" style="margin: 0; padding: 0;"><input type="text" name="wash_area" id="wash_area" class="form-control" style= "display: block; padding: 2px; margin: 0; border: 0; width: 100%; border-radius: 0px;"/></td>
                                                    </tr>

                                                <div id="show_div" style="display: block;">
                                                    <tr class="show_parking">
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


                                                    <tr class="show_parking">
                                                        <td class="col-sm-4">Parking No.</td>
                                                        <td class="col-sm-8" style="margin: 0; padding: 2px;">
                                                        <!--    <input type="text" name="block" class="form-control" style= "display: block; padding: 2px; margin: 0; border: 0; width: 100%; border-radius: 0px;"/>-->
                                                            <select class="form-control"  style="width: 114px" name="parking_no" id="parking_no">
                                                                <option>--select--</option>

                                                            </select>
                                                        </td>
                                                    </tr>
                                                </div>
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

                                        <div class="col-md-7" ><!--1/1 row div-->
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
                                                        <select name='fa_mr_mrs' class="form-control">
                                                            <option>Mr.</option>
                                                            <option>Mrs.</option>
                                                        </select>
                                                        <input type="text" name="name" id="name" class="form-control" onkeyup = "Validate(this)"/>
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
                                                            <option value="S/o">S/o.</option>
                                                            <option value="D/o">D/o.</option>
                                                            <option value="W/o">W/o.</option>
                                                        </select>
                                                        <select name ="son_doughter_wife_mr_mrs" class="form-control">
                                                            <option value="Mr.">Mr.</option>
                                                            <option value="Mrs.">Mrs.</option>
                                                        </select>
                                                        <input type="text" name="swd_of" class="form-control" onkeyup = "Validate(this)"/>
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
                                                        <input type="text" class="form-control" name="pin_code" placeholder="Pin Code" style="width:100%;" onchange="pincode_validate(this.value);"/>   
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
                                                        <input type="text" class="form-control" id="date" name="fappl_dob" value=""  onchange="getAge(this.value);" placeholder="DD-MM-YYYY"/>
                                                        <label>Age </label>
                                                        <input type="text" class="form-control" id="age" name="fappl_age" value="" placeholder="Age" style="width: 122px; background: #ffffff" disabled>
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
                                                        <input type="text" class="form-control" name="contact_mobile" placeholder="Mobile number" style="width:100%;" onchange="mobile_validate(this.value);"/>   
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
                                                        <input type="text" class="form-control" name="email" placeholder="Email address" style="width:100%;" onchange="email_validate(this.value);"/>   
                                                        <label class="status" id="status"></label>
                                                    </div>
                                                </div>
                                            </div><!--8 line close-->
                                            <br>

                                            <div class="row"><!--4 line-->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>9. Aadhar Card No.</label>
                                                    </div>	
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="aadhar_no" placeholder="Aadhaar Card No." onchange="aadhar_validate(this.value);" onkeyup = "ValidateAadhar(this)" style="width:100%;" />
                                                        <label class="status" id="statusaadhaar"></label>
                                                    </div>
                                                </div>
                                            </div><!--4 line close-->
                                            <br>
                                            <div class="row"><!--5 line-->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>10. PAN Card No.</label>
                                                    </div>	
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="pan" placeholder="PAN Card No." style="width:100%;" />
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
                                                        <input type="text" class="form-control" name="qualification" placeholder="Qualification" style="width:100%;" />       
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
                                                            <input type="radio" name="fa_occupation" id="optionsRadios1" value="Businessman" > Businees
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="fa_occupation" id="optionsRadios1" value="Serviceman" checked> Service
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="fa_occupation" id="optionsRadios1" value="Serviceman"> None
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
                                                        <input type="text" class="form-control" name="company_name" placeholder="Company Name" style="width:100%;" />       
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
                                                        <input type="text" class="form-control" name='appl_doj' placeholder="Date of Joining" style="width:100%;" />       
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
                                                        <input type="text" class="form-control" name="appl_desig" placeholder="Designation" style="width:100%;" />       
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
                                                        <input type="text" class="form-control" name="department" placeholder="Department" style="width:100%;" />       
                                                    </div>
                                                </div>
                                            </div><!--10 line close-->
                                            <br>
                                            <div class="row"><!--10 line-->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>17. Monthly Income/Yearly Income</label>
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
                                                        <input type="text" class="form-control" name="addr_of_employer" placeholder="Address Of Employer" style="width:100%;" />       
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
                                                        <input type="text" class="form-control" id="pin" name="pin_code_emp" placeholder="Address Of Employer" style="width:100%;" onchange="Emppincode_validate(this.value);"/>   
                                                        <label class="status" id="statusemppincode"></label>
                                                    </div>
                                                </div>
                                            </div><!--10 line close-->

                                        </div><!--1/1 row div close-->




                                        <div class="col-md-5"><!--1/2 row div-->
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
                                                            <option>Mr.</option>
                                                            <option>Mrs.</option>
                                                        </select>
                                                        <input type="text" name="ca_name" class="form-control" onkeyup = "Validate(this)"/>
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
                                                            <option value="S/o">S/o.</option>
                                                            <option value="D/o">D/o.</option>
                                                            <option value="W/o">W/o.</option>
                                                        </select>
                                                        <select name="ca_son_doughter_wife_mr_mrs" class="form-control">
                                                            <option value="Mr.">Mr.</option>
                                                            <option value="Mrs.">Mrs.</option>
                                                        </select>
                                                        <input type="text" name="ca_swd_of" class="form-control" onkeyup = "Validate(this)"/>
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
                                                        <input type="text" class="form-control" name="ca_pincode" placeholder="Pincode" style="width:100%;"onchange="pincode_validate2(this.value);"/>   
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
                                                        <input type="text" class="form-control" id="date2" name="ca_dob" value="" onchange="getAge2(this.value);"  placeholder="DD-MM-YYYY" />
                                                        <label>Age </label>
                                                        <input type="text" class="form-control" id="age2" name="ca_age" value="" placeholder="Age" style="width: 122px;background: #ffffff" disabled>
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
                                                        <input type="text" class="form-control" name="co_mo_no" placeholder="Mobile No" style="width:100%;" onchange="mobile_validate2(this.value);"/>   
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
                                                        <input type="text" class="form-control" name="co_email" placeholder="Email address" style="width:100%;" onchange="email_validate2(this.value);"/>   
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
                                                        <input type="text" class="form-control" name="ca_aadhar_no" placeholder="Aadhaar Card No." onchange="aadhar_validate2(this.value);" onkeyup = "ValidateAadhar(this)" style="width:100%;" />
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
                                                        <input type="text" class="form-control" name="ca_pan" placeholder="PAN Card No." style="width:100%;"/>       
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
                                                        <input type="text" class="form-control" name="ca_qualification" placeholder="Qualification" style="width:100%;"/>       
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
                                                            <input type="radio" name="ca_occupation" id="optionsRadios1" value="Businessman"> Businees 
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="ca_occupation" id="optionsRadios1" value="Serviceman"> Service 
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="ca_occupation" id="optionsRadios1" value="None" checked> None 
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
                                                        <input type="text" class="form-control" name="ca_company_name" placeholder="Company Name" style="width:100%;"/>       
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
                                                        <input type="text" class="form-control" name="ca_doj" placeholder="Date of Joining" style="width:100%;"/>       
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
                                                        <input type="text" class="form-control" name="ca_desig" placeholder="Designation" style="width:100%;"/>       
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
                                                        <input type="text" class="form-control" name="ca_department" placeholder="Department" style="width:100%;"/>       
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
                                                        <input type="text" class="form-control" name="ca_addr_of_pincode" placeholder="Pincode Of Employer" style="width:100%;"onchange="Emppincode_validate2(this.value);"/>   
                                                        <label class="status" id="statusemppincode2"></label>
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
                                                        <input type="text" name="earning_members" class="form-control" style="width:100%;"/>       
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
                                                        <label>22. Co-Owner/Sole Owner</label>	
                                                    </div>	
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <select class="form-control" name="solo_or_coowner" style="width:100%;"/>
                                                        <option>--select--</option>
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
                                                        <label>23. Loan Required</label>	
                                                    </div>	
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="radio">
                                                        <label>
                                                            <input class="form-control" type="radio" name="loan_req" value="Yes" onclick="myFunction2()"/>Yes
                                                        </label>&nbsp;&nbsp;&nbsp;
                                                        <label>
                                                            <input class="form-control" type="radio" name="loan_req" value="No" onclick="myFunction()"/>No
                                                        </label>
                                                    </div> 
                                                </div>
                                            </div><!--11 line close-->

                                            <br>
                                            <div class="row"><!--10 line-->
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label>24. Amount of Loan Required</label>	
                                                    </div>	
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="form-group">	
                                                        <input class="form-control" name="amt_of_loan" type="text" id="userAnswer1" placeholder="" style="width: 100%;" onkeyup = "ValidateIncome(this)"/>
                                                    </div>
                                                </div>
                                            </div><!--10 line close-->
                                            <br>
                                            <div class="row"><!--10 line-->
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label>25. Salary Account No.</label>	
                                                    </div>	
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="form-group">	
                                                        <input type="text" name="bank_name_ac_no" class="form-control" style="width:100%;" onkeyup = "ValidateAadhar(this)"/>       
                                                    </div>
                                                </div>
                                            </div><!--10 line close-->
                                            <br>
                                            <div class="row"><!--10 line-->
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label>26. Bank Name</label>	
                                                    </div>	
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="form-group">	
                                                        <input type="text" name="bank_name" class="form-control" style="width:100%;"/>       
                                                    </div>
                                                </div>
                                            </div><!--10 line close-->

                                            <br>

                                            <div class="row"><!--10 line-->
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label>27. Mode of Payment</label>	
                                                    </div>	
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="form-group">	
                                                        <select class="form-control" name="payment_mode" id="payment_mode"   onchange='CheckProject(this.value);'> 
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
                                                        <label>28. Booking Amount &nbsp;&nbsp; <i class="fa fa-inr"></i></label>

                                                    </div>	
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="form-group">	
                                                        Amount &nbsp;&#8377;&nbsp;&nbsp;&nbsp;

                                                        <input class="form-control" name="booking_amt" onKeyUp="bookingFixed();" type="text" id="booking_amt" placeholder="Amount in &#8377;" />
                                                        <br>
                                                        <span  id="errmsg" style="visibility: hidden;">Booking Amount in Cash Should Not Be Not  More than Rs. 20000/- </span>
                                                    </div><br><br>
                                                    <div class="form-group">
                                                        Cheque/TxN No.
                                                        &nbsp;&nbsp;<input class="form-control" name="cheque_no" type="text" id="userAnswer7" placeholder="Cheque No."/>
                                                    </div><br><br>

                                                    <div class="form-group">
                                                        Date
                                                        <input class="form-control" id="dateCalendar"  name="cheque_date" placeholder="DD/MM/YYYY" type="text"/>     
                                                    </div>
                                                </div>
                                            </div><!--10 line close-->
                                            <br>
                                            <div class="row"><!--10 line-->
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label>29. Documents Submitted by Customer</label>	
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
                                                        <label for="additional_info">30. Any Additional Information/Specific Requirement</label>

                                                    </div>	
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <textarea class="form-control" name="additional_info" rows="5" id="comment" placeholder="" style="width: 100%;"></textarea>
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

                            <a href="javascript: history.go(-1)" class="btn btn-default" role="button">Cancel</a>
                        </p> 
                    </div>

                </form><!--form div-->

            </div><!-- container -->
        </div> <!--End of main div-->

        <script src="<?php echo base_url('resources/js/application_form.js'); ?>" type="text/javascript"></script>


        <script>

                                                            $(document).ready(function () {
                                                                $('#toppageheader').html('Application Form');

                                                            });

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
                                                                var is_duplex = $('#unittype >option:selected').text();
                                                                var is_plot = $('#unittype >option:selected').text();
                                                                //alert(is_plot);
                                                                if (is_duplex === 'Duplex') {
                                                                    $('.show_parking').hide();
                                                                } else if (is_plot === 'Plot')
                                                                {
                                                                    $('.show_parking').hide();
                                                                } else
                                                                {
                                                                }

                                                                var pid = document.getElementById('project_name').value;
                                                                var blname = document.getElementById('block_name').value;
                                                                var typename = document.getElementById('unittype').value;
                                                                //alert(pid+"/"+blname+"/"+typename);
                                                                $.ajax({
                                                                    type: "POST",
                                                                    url: "<?php echo site_url('main_controller/getcategory'); ?>",
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
                                                                            selptr.appendChild(opt);
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
                                                                var pid = document.getElementById('project_name').value;
                                                                var pktype = document.getElementById('parking_type').value;
                                                                //var block = document.getElementById('block_name').value;
                                                                //alert(block);

                                                                $.ajax({
                                                                    type: "POST",
                                                                    url: "<?php echo site_url('main_controller/Parking'); ?>",
                                                                    data: {plid: pid, type: pktype},
                                                                    // data: {plid: pid,type: pktype,block: block},
                                                                    success: function (msg) {
                                                                        //  alert(msg);
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

                                                                var m = $('#unittype').val();
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

        </script>
        <script>
            $(document).ready(function () {
                var date_input = $('input[id="date"]'); //our date input has the name "date"
                var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
                var options = {
                    format: 'mm/dd/yyyy',
                    container: container,
                    todayHighlight: true,
                    autoclose: true,
                };
                date_input.datepicker(options);
            });
            $(document).ready(function () {
                var date_input = $('input[id="date2"]'); //our date input has the name "date"
                var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
                var options = {
                    format: 'mm/dd/yyyy',
                    container: container,
                    todayHighlight: true,
                    autoclose: true,
                };
                date_input.datepicker(options);
            });
            $(document).ready(function () {
                var date_input = $('input[name="appl_doj"]'); //our date input has the name "date"
                var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
                var options = {
                    format: 'mm/dd/yyyy',
                    container: container,
                    todayHighlight: true,
                    autoclose: true,
                };
                date_input.datepicker(options);
            });
            $(document).ready(function () {
                var date_input = $('input[name="ca_doj"]'); //our date input has the name "date"
                var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
                var options = {
                    format: 'mm/dd/yyyy',
                    container: container,
                    todayHighlight: true,
                    autoclose: true,
                };
                date_input.datepicker(options);
            });
            $(document).ready(function () {
                var date_input = $('input[name="cheque_date"]'); //our date input has the name "date"
                var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
                var options = {
                    format: 'mm/dd/yyyy',
                    container: container,
                    todayHighlight: true,
                    autoclose: true,
                };
                date_input.datepicker(options);
            });




            function email_validate(email)
            {
                var regMail = /^([_a-zA-Z0-9-]+)(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+([a-zA-Z]{2,3})$/;

                if (regMail.test(email) === false)
                {
                    document.getElementById("status").innerHTML = "<span class='warning'>Email address is not valid yet.</span>";
                } else
                {
                    document.getElementById("status").innerHTML = "";
                }
            }
            function email_validate2(email)
            {
                var regMail = /^([_a-zA-Z0-9-]+)(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+([a-zA-Z]{2,3})$/;

                if (regMail.test(email) === false)
                {
                    document.getElementById("statuscoemail").innerHTML = "<span class='warning'>Email address is not valid yet.</span>";
                } else
                {
                    document.getElementById("statuscoemail").innerHTML = "";
                }
            }

            function pincode_validate(pin_code)
            {
                var regPincode = /^\d{}$|^\d{6}$/;

                if (regPincode.test(pin_code) === false)
                {
                    document.getElementById("statuspincode").innerHTML = "<span class='warning'>Pincode is not valid yet.</span>";
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
                    document.getElementById("statuspincode2").innerHTML = "<span class='warning'>Pincode is not valid yet.</span>";
                } else
                {
                    document.getElementById("statuspincode2").innerHTML = "";
                }
            }
            function Emppincode_validate(pin_code)
            {
                var regPincode = /^\d{}$|^\d{6}$/;

                if (regPincode.test(pin_code) === false)
                {
                    document.getElementById("statusemppincode").innerHTML = "<span class='warning'>Pincode is not valid yet.</span>";
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
                    document.getElementById("statusemppincode2").innerHTML = "<span class='warning'>Pincode is not valid yet.</span>";
                } else
                {
                    document.getElementById("statusemppincode2").innerHTML = "";
                }
            }
            function mobile_validate(mobile)
            {
                var regPincode = /^([789][0-9]{9,9})+$/;
                ;

                if (regPincode.test(mobile) === false)
                {
                    document.getElementById("statusmobile").innerHTML = "<span class='warning'>mobile is not valid yet.</span>";
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
                    document.getElementById("statusmobile2").innerHTML = "<span class='warning'>mobile is not valid yet.</span>";
                } else
                {
                    document.getElementById("statusmobile2").innerHTML = "";
                }
            }


            // validates text only
            function Validate(txt) {
                txt.value = txt.value.replace(/[^a-zA-Z-'\n\r.{ }]+/g, '');
            }
            // validates number only
            function ValidateAadhar(num) {
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
                    document.getElementById("statusaadhaar").innerHTML = "<span class='warning'>aadhaar is not valid yet.</span>";
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
                    document.getElementById("statusaadhaar2").innerHTML = "<span class='warning'>aadhaar is not valid yet.</span>";
                } else
                {
                    document.getElementById("statusaadhaar2").innerHTML = "";
                }
            }

            function validateForm()
            {
                var name = document.forms["Form"]["name"].value;
                var contact_mobile = document.forms["Form"]["contact_mobile"].value;
                if (name == null || name == "")
                {
                    alert("Please Fill Applicant Name");
                    return false;
                } else if (contact_mobile == null || contact_mobile == "") {
                    alert("Please Fill Mobile Number");
                    return false;
                }
            }

        </script>

    </body>
</html>



