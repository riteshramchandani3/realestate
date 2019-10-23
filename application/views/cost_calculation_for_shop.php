

<html>
    <head>
        <title>Cost Calculation</title>
        <?php
        require_once('assets/html_head_links.php');
        ?>
        <link rel="stylesheet" href="<?php echo base_url('resources/css/sheet_one.css'); ?>"/>
        <style>
            .col-sm-4 >input{

            }
            .col-sm-5 >input{
                border: none;
                width: 100%;

                padding: 10px;
            }
            .col-sm-1 input{
                border: none;
                width: 60px;
            }
            .col-sm-1 .fa{
                float: right;
            }
            #myReset{
                background-color:white;
                border:none;
            }
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
    </head>
    <body  oncontextmenu="return false;"> 
        <div style="z-index: 10;">
            <?php
            require_once('assets/top_menu.php');
            require_once('assets/side_menu.php');
            ?>
        </div>

        <?php
        foreach ($this->Sheet_model->get_prospect_info($customer_id) as $row) {
            ?> 
            <?php $pre_salesid = $row->pre_salesid; ?>
            <?php //$userid = $row->pre_salesid; ?>
        <?php } ?>

        <?php
        // //echo $id;

        foreach ($this->Agreement_model->view_sheet1($pre_salesid) as $row) {
            ?>
            <?php $project_id = $row->project_id; ?>
            <?php $name = $row->name; ?>
            <?php $mobile_no = $row->mobile; ?>
            <?php $block = $row->block; ?>

            <?php $type = $row->type; ?>
            <?php $unit_no = $row->unit_no; ?>
            <?php $plot_size_mtr = $row->plot_size_mtr; ?>
            <?php $plot_size_ft = $row->plot_size_ft; ?>
            <?php $total_unit_cost_as_per_carpet_area = $row->total_unit_cost_as_per_carpet_area; ?>
            <?php $water_connection_ref_rate = $row->water_connection_ref_rate; ?>
            <?php $maintenance_cost_ref_rate = $row->maintenance_cost_ref_rate; ?>
            <?php $discount = $row->discount; ?>
            <?php $cost_payble_to_company = $row->cost_payble_to_company; ?>
            <?php $total_cost = $row->total_cost; ?>
            <?php $MPSEB_system = $row->MPSEB_system; ?>
            <?php $registry_charges = $row->registry_charges; ?>
            <?php $monthly = $row->monthly; ?>
            <?php $MPSEB_meter = $row->MPSEB_meter; ?>
            <?php $mutation = $row->mutation; ?>
            <?php $society = $row->society; ?>

            <?php $discussion = $row->discussion; ?>
            <?php $login_id = $row->login_id; ?>
        <?php } ?>
        <div class="main">

            <div class="container"> <?php $customer_id; ?>
                <form class="form-inline" action="<?php echo site_url('Cost_calculator/update_cost_calculation_for_shop'); ?>" method="post">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>Shop - Cost Calculation</h4>
                            <a href="javascript: history.go(-1)" class="btn btn-primary pull-right clickable" role="button">Go Back</a>
                            <?php
                            $data['project_id'] = $project_id;
                            $data['block'] = $block;
                            foreach ($this->Sheet_model->get_project_status($data) as $row) {
                                ?> 

                                <?php $status = $row->status; ?>
                                <?php $project_name = $row->project_name; ?>
                            <?php } ?>
                            <?php
                            if (strcmp($status, 'Completed') == 0) {

                                foreach ($this->Company_info_model->get_Completion_Certificate() as $row) {
                                    ?> 
                                    <span><strong><?php echo $row->attribute; ?> No</strong></span>&nbsp;:&nbsp;
                                    <span><?php echo $row->value; ?></span>
                                <?php } ?>
                            <?php } else { ?>
                                <?php
                                foreach ($this->Company_info_model->get_company_info() as $row) {
                                    ?> 
                                    <span><?php echo $row->attribute; ?></span>&nbsp;:&nbsp;
                                    <span><?php echo $row->value; ?></span>
                                <?php } ?>
                            <?php } ?>
                        </div>
                        <div class="panel-body">
                            <table class="table table-bordered"  style="font-family: Times New Roman; font-weight: bold; font-size: 16px;">
                                <tbody>
                                    <tr>
                                        <td class="col-sm-4">Name</td>
                                        <td class="col-sm-8"  style="margin: 0; padding: 0;"><input type="hidden" name="customer_id" value="<?php echo $customer_id; ?>"/><input type="text" name="name" value="<?php echo $name; ?>" style= "display: block; padding: 8px; margin: 0; border: 0; width: 100%; border-radius: 0px;"/></td>
                                    </tr>
                                    <tr>
                                        <td class="col-sm-4">Project</td>
                                        <td class="col-sm-8" style="margin: 0; padding: 0;"><input type="text" name="project_id" value="<?php echo $project_name . nbs(1) . $block; ?>" style= "display: block; padding: 8px; margin: 0; border: 0; width: 100%; border-radius: 0px;" /></td>
                                    </tr>
                                    <tr>
                                        <td class="col-sm-4">Unit No.</td>
                                        <td class="col-sm-8" style="margin: 0; padding: 0;"><input type="text" name="unit_no"  value="<?php echo $unit_no; ?>" style= "display: block; padding: 8px; margin: 0; border: 0; width: 100%; border-radius: 0px;" /></td>
                                    </tr>
                                    <tr>
                                        <td class="col-sm-4">Type</td>
                                        <td class="col-sm-8" style="margin: 0; padding: 0;"><input type="text" name="type" value="<?php echo $type; ?>" style= "display: block; padding: 8px; margin: 0; border: 0; width: 100%; border-radius: 0px;" /></td>
                                    </tr>
                                    <tr>

                                        <td class="col-sm-4">Shop Area (SQ-MT)</td>
                                        <td class="col-sm-8" style="margin: 0; padding: 0;"><input type="text" name="first_floor_carpet_area"  value="<?php echo $plot_size_mtr; ?>" style= "display: block; padding: 8px; margin: 0; border: 0; width: 100%; border-radius: 0px;" /></td>
                                    </tr>

                                    <tr>

                                        <td class="col-sm-4">Shop Area (SQ-FT)</td>
                                        <td class="col-sm-7" style="margin: 0; padding: 0;"><input type="text" name="ground_floor_carpet_area"  value="<?php echo $plot_size_ft; ?>" style= "display: block; padding: 8px; margin: 0; border: 0; width: 100%; border-radius: 0px;"/></td>
                                    </tr>
                                    <tr>

                                        <td class="col-sm-4">Cost of Unit</td>
                                        <td class="col-sm-7" style="margin: 0; padding: 0;"><input type="text" name="ground_floor_carpet_area"  value="<?php echo number_format((float) $total_unit_cost_as_per_carpet_area, 2, '.', ''); ?>" style= "display: block; padding: 8px; margin: 0; border: 0; width: 100%; border-radius: 0px;"/></td>
                                    </tr>
                                    <tr>

                                        <td class="col-sm-4">MPSEB System Strengthening</td>
                                        <td class="col-sm-7" style="margin: 0; padding: 0;"><input type="text" name="ground_floor_carpet_area"  value="<?php echo number_format((float) $MPSEB_system, 2, '.', ''); ?>" style= "display: block; padding: 8px; margin: 0; border: 0; width: 100%; border-radius: 0px;"/></td>
                                    </tr>
                                    <tr>

                                        <td class="col-sm-4">Water Connection</td>
                                        <td class="col-sm-7" style="margin: 0; padding: 0;"><input type="text" name="ground_floor_carpet_area"  value="<?php echo number_format((float) $water_connection_ref_rate, 2, '.', ''); ?>" style= "display: block; padding: 8px; margin: 0; border: 0; width: 100%; border-radius: 0px;"/></td>
                                    </tr>
                                    <tr>

                                        <td class="col-sm-4">Registry Charges</td>
                                        <td class="col-sm-7" style="margin: 0; padding: 0;"><input type="text" name="ground_floor_carpet_area"  value="<?php echo number_format((float) $registry_charges, 2, '.', ''); ?>" style= "display: block; padding: 8px; margin: 0; border: 0; width: 100%; border-radius: 0px;"/></td>
                                    </tr>
                                    <tr>

                                        <td class="col-sm-4">Maintenance</td>
                                        <td class="col-sm-7" style="margin: 0; padding: 0;"><input type="text" name="ground_floor_carpet_area"  value="<?php echo number_format((float) $maintenance_cost_ref_rate, 2, '.', ''); ?>" style= "display: block; padding: 8px; margin: 0; border: 0; width: 100%; border-radius: 0px;"/></td>
                                    </tr>
                                    <tr>

                                        <td class="col-sm-4">Monthly Oper. 1 year</td>
                                        <td class="col-sm-7" style="margin: 0; padding: 0;"><input type="text" name="ground_floor_carpet_area"  value="<?php echo number_format((float) $monthly, 2, '.', ''); ?>" style= "display: block; padding: 8px; margin: 0; border: 0; width: 100%; border-radius: 0px;"/></td>
                                    </tr>
                                    <tr>

                                        <td class="col-sm-4">MPSEB Meter</td>
                                        <td class="col-sm-7" style="margin: 0; padding: 0;"><input type="text" name="ground_floor_carpet_area"  value="<?php echo number_format((float) $MPSEB_meter, 2, '.', ''); ?>" style= "display: block; padding: 8px; margin: 0; border: 0; width: 100%; border-radius: 0px;"/></td>
                                    </tr>
                                    <tr>

                                        <td class="col-sm-4">Mutation</td>
                                        <td class="col-sm-7" style="margin: 0; padding: 0;"><input type="text" name="ground_floor_carpet_area"  value="<?php echo number_format((float) $mutation, 2, '.', ''); ?>" style= "display: block; padding: 8px; margin: 0; border: 0; width: 100%; border-radius: 0px;"/></td>
                                    </tr>
                                    <tr>

                                        <td class="col-sm-4">Society</td>
                                        <td class="col-sm-7" style="margin: 0; padding: 0;"><input type="text" name="ground_floor_carpet_area"  value="<?php echo number_format((float) $society, 2, '.', ''); ?>" style= "display: block; padding: 8px; margin: 0; border: 0; width: 100%; border-radius: 0px;"/></td>
                                    </tr>
                                    <tr>

                                        <td class="col-sm-4">Total Cost of Shop</td>
                                        <td class="col-sm-7" style="margin: 0; padding: 0;"><input type="text" name="ground_floor_carpet_area"  value="<?php echo number_format((float) $cost_payble_to_company, 2, '.', ''); ?>" style= "display: block; padding: 8px; margin: 0; border: 0; width: 100%; border-radius: 0px;"/></td>
                                    </tr>
                                    <tr>

                                        <td class="col-sm-4">Discount No. 01</td>
                                        <td class="col-sm-7" style="margin: 0; padding: 0;"><input type="text" name="ground_floor_carpet_area"  value="<?php echo number_format((float) $discount, 2, '.', ''); ?>" style= "display: block; padding: 8px; margin: 0; border: 0; width: 100%; border-radius: 0px;"/></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">
                                            <b>Net Final Amount</b>
                                        </td>
                                        <td colspan="2">
                                            + Registry + Society  <span class="pull-right"> Rs.</span> <br> + Meter Installation + Mutation <br> + GST Tax as applicable

                                        </td>
                                        <td>
                                            <?php echo number_format((float) $total_cost, 2, '.', ''); ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>





                            <div class="panel panel-default" style="border:none;">
                                <div class="panel-body" style="font-family: Times New Roman; font-weight: bold; font-size: 16px;">
                                    Note: Resistration charges of Shop registry shall be charged as per actual addtionally
                                </div>
                            </div>

                            <div class="row" style="font-family: Times New Roman; font-weight: bold; font-size: 16px; border: 1px solid black; border-left: none;border-right: none;">&nbsp;&nbsp;&nbsp;&nbsp;Other Charges to be bear by the customer</div>
                            <div class="row" style="font-family: Times New Roman; font-weight: bold; font-size: 16px; border-bottom: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;Note :</div>

                            <table class="table table-bordered" style="font-family: Times New Roman; font-weight: bold; font-size: 16px; border-color: black;">
                                <tbody>
                                    <tr>
                                        <td class="col-sm-1" style="text-align:center;">1</td>
                                        <td class="col-sm-11" style="margin: 0; padding: 10px;">
                                            Registration Stamp duty, fee & other charges as per actual. (shall be born by the customer)
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-sm-1" style="text-align:center;">2</td>
                                        <td class="col-sm-11" style="margin: 0; padding: 10px;">
                                            Bank Documentation Charges Extra (shall be born by the customer)
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-sm-1" style="text-align:center;">3</td>
                                        <td class="col-sm-11" style="margin: 0; padding: 10px;">
                                            Mortgage Stamp Fee & Other Charges shall be born by the customer
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-sm-1" style="text-align:center;">4</td>
                                        <td class="col-sm-11" style="margin: 0; padding: 10px;">
                                            Meter Connection Charges As per actual Shall be the responsibility of allottee
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-sm-1" style="text-align:center;">5</td>
                                        <td class="col-sm-11" style="margin: 0; padding: 10px;">
                                            Namantraran Charges (Advocate fees) shall be Charged Extra.
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="col-sm-1" style="text-align:center;">6</td>
                                        <td class="col-sm-11" style="margin: 0; padding: 10px;">
                                            Water Meter Application with department shall be the responsibility of the allottee
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>

                    <center>

                        <?php
                        if ($cost_calculation == 'completed') {
                            echo '';
                        } else if ($cost_calculation == '') {
                            echo '<button id="submit" name="submit" class="btn btn-success btn-3d"  type="update">Update</button>';
                            /* anchor('Cost_calculator/show_sheet_two?id=' . $row->id, '<i class="fa fa-plus">' . '&nbsp' . '</i>', 'class="btn btn-primary btn-3d btn-sm"'); */
                        }
                        ?>

                    </center>
                    <br> <br> <br>
                </form>
            </div>
        </div>
        <script type="text/javascript">

            $(document).ready(function () {
                var valor = $("#periode").val();
                $(".hidden").each(function () {
                    var hijo = $(this).children().attr('id');
                    if (hijo == valor)
                    {
                        $(this).removeClass("hidden");
                    }
                });
            });

            $(document).ready(function () {
                $('#toppageheader').html('Cost Calculation Search');
                $("a:contains(Cost Calculation)").parent().addClass('active');
            });
            function goBack() {
                window.history.back();
            }


        </script>

    </body>
</html>
