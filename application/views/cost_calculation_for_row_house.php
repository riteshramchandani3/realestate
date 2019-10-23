

<html>
    <head>
        <title>Cost Calculation</title>
        <?php
        require_once('assets/html_head_links.php');
        ?>
        <link rel="stylesheet" href="<?php echo base_url('resources/css/sheet_one.css'); ?>"/>
        <style>
            .col-sm-4 >input{
                display: block;
                padding: 12px;
                margin: 0;
                border: 0;
                width: 100%;
                border-radius: 0px;
            }
            .col-sm-5 >input{
                display: block;
                padding: 12px;
                margin: 0;
                border: 0;
                width: 100%;
                border-radius: 0px;
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
    <body> 
        <div style="z-index: 10;">
            <?php
            require_once('assets/top_menu.php');
            require_once('assets/side_menu.php');
            ?>
        </div>
        <div class="main">

            <div class="container">
                <form class="form-inline" action="<?php echo site_url('Cost_calculator/update_cost_calculation_for_row_house'); ?>" method="post">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>Row House - Cost Calculation</h4>
                            <a href="javascript: history.go(-1)" class="btn btn-primary pull-right clickable" role="button">Go Back</a>

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
                                        <td class="col-sm-8" style="margin: 0; padding: 0;"><input type="text" name="project_id" value="<?php echo $project_id; ?>" style= "display: block; padding: 8px; margin: 0; border: 0; width: 100%; border-radius: 0px;" /></td>
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

                                        <td class="col-sm-4">1. Ground Floor Carpet Area (SQ-FT)</td>
                                        <td class="col-sm-8" style="margin: 0; padding: 0;"><input type="text" name="first_floor_carpet_area"  value="<?php echo $gf_carpet_area_price; ?>" style= "display: block; padding: 8px; margin: 0; border: 0; width: 100%; border-radius: 0px;" /></td>
                                    </tr>

                                    <tr>

                                        <td class="col-sm-4">2. First Floor Carpet Area (SQ-FT)</td>
                                        <td class="col-sm-7" style="margin: 0; padding: 0;"><input type="text" name="ground_floor_carpet_area"  value="<?php echo $ff_carpet_area_price; ?>" style= "display: block; padding: 8px; margin: 0; border: 0; width: 100%; border-radius: 0px;"/></td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table table-bordered" style="font-family: Times New Roman; font-weight: bold; font-size: 16px;">
                                <tbody>
                                    <tr>
                                        <td class="col-sm-4">Total (1+2) Per SQ-FT</td>
                                        <td class="col-sm-1"><i class="fa fa-inr"></i></td>
                                        <td class="col-sm-4" style="margin: 0; padding: 0;">
                                            <?php
                                            $a = $ffca_ref_rate;
                                            $b = $unit_cost_as_per_carpet_area;
                                            if ($a < $b) {
                                                $a;
                                            } else {
                                                $b;
                                            }
                                            ?>
                                            <input type="text" value="<?php echo $ref1 = $unit_cost_as_per_carpet_area; ?>" style="width:60px; display: none;">
                                            <input name="total" value="<?php echo $result1 = $gf_carpet_area_price + $ff_carpet_area_price * $ref1 ?> "/>
                                        </td>
                                        <td class="col-sm-3">
                                            <div class="form-inline">
                                                <input class="form-control" type="text" name="cost" value="<?php echo $ref1; ?>" style="width: 10px; display: none;"/>
                                                <input class="form-control" type="text" name="price" value="<?php echo $ref1; ?>" style="width: 80px;"/> 
                                                <input class="form-control" name="discount" value="<?php echo $discount; ?>" onchange="updateInput()" style="width: 60px;"/>%
                                                <input type="hidden" class="form-control" value="completed" name="cost_calculation" style="width: 60px;"/>
                                            </div>
                                        </td>
                                <script>
                                    function updateInput() {
                                        var discount = document.getElementsByName("discount")[0].value;
                                        var cost = document.getElementsByName("cost")[0].value;
                                        document.getElementsByName("price")[0].value = cost - (cost * (discount / 100));
                                    }
                                </script>
                                </tr>
                                </tbody>
                            </table>

                            <table class="table table-bordered" style="font-family: Times New Roman; font-weight: bold; font-size: 16px;">
                                <tbody>
                                    <tr>
                                        <td class="col-sm-1" style="text-align:center;">3</td>
                                        <td class="col-sm-3">Parking</td>
                                        <td class="col-sm-1"><i class="fa fa-inr"></i></td>
                                        <td class="col-sm-5" style="margin: 0; padding: 0;">
                                            <input type="text" name="parking" value="<?php echo $price; ?>"/>
                                        </td>
                                        <td class="col-sm-2">fix</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table table-bordered" style="font-family: Times New Roman; font-weight: bold; font-size: 16px;">
                                <tbody>
                                    <tr>
                                        <td class="col-sm-1" style="text-align:center;">4</td>
                                        <td class="col-sm-3">Maintanance 5 Years</td>
                                        <td class="col-sm-1"><i class="fa fa-inr"></i></td>
                                        <td class="col-sm-5" style="margin: 0; padding: 0;">
                                            <input type="text" name="maintenance" value="<?php echo $charge_amount; ?>"/>
                                        </td>
                                        <td class="col-sm-2">fix</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table table-bordered" style="font-family: Times New Roman; font-weight: bold; font-size: 16px;">
                                <tbody>
                                    <tr>
                                        <td class="col-sm-1" style="text-align:center;">5</td>
                                        <td class="col-sm-3">GST</td>
                                        <td class="col-sm-1"><i class="fa fa-inr"></i></td>
                                        <td class="col-sm-5" style="margin: 0; padding: 0;">
                                            <span style="display:none;"><?php echo $result5 = $tax_percentage + $tax_percentage ?> %</span>
                                            <span style="display:none;"><?php echo $result2 = $charge_amount + $price + $result1 ?></span>
                                            <input type="text" value="<?php echo $result3 = $result2 * $result5 / 100 ?>"/>
                                            <span style="display:none;"> <?php echo $result2; ?></span>
                                        </td>
                                        <td class="col-sm-2"><input type="text" name="gst" value="<?php echo $result5; ?>" style="border:none;"/></td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table table-bordered" style="font-family: Times New Roman; font-weight: bold; font-size: 16px;">
                                <tbody>
                                    <tr>
                                        <td class="col-sm-4">Cost Payable to Company (X+3+4+5)</td>
                                        <td class="col-sm-1"><i class="fa fa-inr"></i></td>
                                        <td class="col-sm-5" style="margin: 0; padding: 0;">

                                            <input  type="text" name="cost_payable_to_company" value="<?php echo $result3 + $result2 ?>"/>

                                        </td>
                                        <td class="col-sm-2">3570.9 <span style="font-size:16px;">&nbsp;&nbsp;per sqft</span></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="panel panel-default" style="border:none;">
                                <div class="panel-body" style="font-family: Times New Roman; font-weight: bold; font-size: 16px;">
                                    Extra Charges
                                </div>
                            </div>
                            <table class="table table-bordered" style="font-family: Times New Roman; font-weight: bold; font-size: 16px;">
                                <tbody>
                                    <tr>
                                        <td class="col-sm-1" style="text-align:center;">1</td>
                                        <td class="col-sm-3">REGISTRY CHARGES</td>
                                        <td class="col-sm-1"></td>
                                        <td class="col-sm-7">As Per Actual</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table table-bordered" style="font-family: Times New Roman; font-weight: bold; font-size: 16px;">
                                <tbody>
                                    <tr>
                                        <td class="col-sm-4">Total Cost</td>
                                        <td class="col-sm-1"><i class="fa fa-inr"></i></td>
                                        <td class="col-sm-7" style="margin: 0; padding: 0;"><input type="text"  style= "display: block; padding: 2px; margin: 0; border: 0; width: 100%; border-radius: 0px;"/></td>
                                    </tr>
                                </tbody>
                            </table>  
                            <div class="panel panel-default" style="border:none;">
                                <div class="panel-body" style="font-family: Times New Roman; font-weight: bold; font-size: 16px;">
                                    Note: Resistration charges of Flat registry shall be charged as per actual addtionally
                                </div>
                            </div>

                            <div class="row" style="font-family: Times New Roman; font-weight: bold; font-size: 16px; border: 1px solid black; border-left: none;border-right: none;">&nbsp;&nbsp;&nbsp;&nbsp;Other Charges to be bear by the customer</div>
                            <div class="row" style="font-family: Times New Roman; font-weight: bold; font-size: 16px; border-bottom: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;Note :</div>

                            <table class="table table-bordered" style="font-family: Times New Roman; font-weight: bold; font-size: 16px; border-color: black;">
                                <tbody>
                                    <tr>
                                        <td class="col-sm-1" style="text-align:center;">1</td>
                                        <td class="col-sm-11" style="margin: 0; padding: 10px;">
                                            Registration Stam duty, fee & other charges as per actual. (shall be born by the customer)
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
                $('#toppageheader').html('Cost Calculation Search');
                $("a:contains(Cost Calculation)").parent().addClass('active');
            });
            function goBack() {
                window.history.back();
            }

        </script>

    </body>
</html>
