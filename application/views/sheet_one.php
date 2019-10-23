<!DOCTYPE html>
<!--
Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
Unauthorized copying of this file, via any medium is strictly prohibited
Proprietary and confidential.
Written by Oga Technologies, October 1,  2016.
-->

<html>
    <head>
        <title>Cost Calculation</title>
          </head>
     <?php
        require_once('assets/html_head_links.php');
        ?>
    <body>
       <div style="z-index: 10;">
            <?php
            require_once('assets/top_menu.php');
            require_once('assets/side_menu.php');
            ?>
        </div>
        <div class="main">


            <div class="container">
                <form>
                     
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Cost Calculation
                        </div>
                        <div class="panel-body">

                            
                            <table class="table table-bordered"  style="font-family: Times New Roman; font-weight: bold; font-size: 16px;">
                                <tbody>
                                    <tr>

                                        <td class="col-sm-4">Name</td>
                                        <td class="col-sm-8"  style="margin: 0; padding: 0;"><input type="text"value="<?php echo $name; ?>" style= "display: block; padding: 2px; margin: 0; border: 0; width: 100%; border-radius: 0px;" disabled/></td>
                                    </tr>
                                    <tr>
                                        <td class="col-sm-4">Project</td>
                                        <td class="col-sm-8" style="margin: 0; padding: 0;"><input type="text" value="<?php echo $project_id; ?>" style= "display: block; padding: 2px; margin: 0; border: 0; width: 100%; border-radius: 0px;" disabled/></td>
                                    </tr>
                                    <tr>
                                        <td class="col-sm-4">Unit No.</td>
                                        <td class="col-sm-8" style="margin: 0; padding: 0;"><input type="text"  value="<?php echo $unit_no; ?>" style= "display: block; padding: 2px; margin: 0; border: 0; width: 100%; border-radius: 0px;" disabled/></td>
                                    </tr>
                                    <tr>
                                        <td class="col-sm-4">Type</td>
                                        <td class="col-sm-8" style="margin: 0; padding: 0;"><input type="text"  value="<?php echo $type; ?>" style= "display: block; padding: 2px; margin: 0; border: 0; width: 100%; border-radius: 0px;" disabled/></td>
                                    </tr>
                                    <tr>
                                        <td class="col-sm-4">Flat Carpet Area</td>
                                        <td class="col-sm-8" style="margin: 0; padding: 0;"><input type="text"  value="<?php echo $first_floor_carpet_area; ?>" style= "display: block; padding: 2px; margin: 0; border: 0; width: 100%; border-radius: 0px;" disabled/></td>
                                    </tr>

                                    <tr>
                                        <td class="col-sm-4">Flat Carpet area(SQM)</td>
                                        <td class="col-sm-8" style="margin: 0; padding: 0;"><input type="text"  value="<?php echo $ground_floor_carpet_area; ?>" style= "display: block; padding: 2px; margin: 0; border: 0; width: 100%; border-radius: 0px;" disabled/></td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table table-bordered" style="font-family: Times New Roman; font-weight: bold; font-size: 16px;">
                                <tbody>
                                    <tr>
                                        <td class="col-sm-1" style="text-align:center;">1</td>
                                        <td class="col-sm-3">Unit Cost as Per Carpet Area</td>
                                        <td class="col-sm-1">Rs.</td>
                                        <td class="col-sm-6" style="margin: 0; padding: 0;"><input type="text"  style= "display: block; padding: 2px; margin: 0; border: 0; width: 100%; border-radius: 0px;" disabled/></td>
                                        <td class="col-sm-1">@2500</td>
                                    </tr>
                                </tbody>
                            </table> 
                            <table class="table table-bordered" style="font-family: Times New Roman; font-weight: bold; font-size: 16px;">
                                <tbody>
                                    <tr>
                                        <td class="col-sm-1" style="text-align:center;">2</td>
                                        <td class="col-sm-3">Balcony Area (1) 3.9 SQM</td>
                                        <td class="col-sm-1">Rs.</td>
                                        <td class="col-sm-6" style="margin: 0; padding: 0;"><input type="text"  style= "display: block; padding: 2px; margin: 0; border: 0; width: 100%; border-radius: 0px;" disabled/></td>
                                        <td class="col-sm-1">@1350</td>
                                    </tr>
                                </tbody>
                            </table>  
                            <table class="table table-bordered" style="font-family: Times New Roman; font-weight: bold; font-size: 16px;">
                                <tbody>
                                    <tr>
                                        <td class="col-sm-1" style="text-align:center;">3</td>
                                        <td class="col-sm-3">Balcony Area (2) 3.9 SQM</td>
                                        <td class="col-sm-1">Rs.</td>
                                        <td class="col-sm-6" style="margin: 0; padding: 0;"><input type="text"  style= "display: block; padding: 2px; margin: 0; border: 0; width: 100%; border-radius: 0px;" disabled/></td>
                                        <td class="col-sm-1">@1350</td>
                                    </tr>
                                </tbody>
                            </table> 
                            <table class="table table-bordered" style="font-family: Times New Roman; font-weight: bold; font-size: 16px;">
                                <tbody>
                                    <tr>
                                        <td class="col-sm-1" style="text-align:center;">4</td>
                                        <td class="col-sm-3">Wash Area</td>
                                        <td class="col-sm-1">Rs.</td>
                                        <td class="col-sm-6" style="margin: 0; padding: 0;"><input type="text"  style= "display: block; padding: 2px; margin: 0; border: 0; width: 100%; border-radius: 0px;" disabled/></td>
                                        <td class="col-sm-1">@1350</td>
                                    </tr>
                                </tbody>
                            </table> 
                            <table class="table table-bordered" style="font-family: Times New Roman; font-weight: bold; font-size: 16px;">
                                <tbody>
                                    <tr>
                                        <td class="col-sm-4">Total (1+2+3+4)</td>
                                        <td class="col-sm-1">Rs.</td>
                                        <td class="col-sm-5" style="margin: 0; padding: 0;"><input type="text"  style= "display: block; padding: 2px; margin: 0; border: 0; width: 100%; border-radius: 0px;" disabled/></td>
                                        <td class="col-sm-2">2739.1 <span style="font-size:16px;">&nbsp;&nbsp;per sqft</span></td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table table-bordered" style="font-family: Times New Roman; font-weight: bold; font-size: 16px;">
                                <tbody>
                                    <tr>
                                        <td class="col-sm-1" style="text-align:center;">5</td>
                                        <td class="col-sm-3">Proportionate Common Area</td>
                                        <td class="col-sm-1">Rs.</td>
                                        <td class="col-sm-6" style="margin: 0; padding: 0;"><input type="text"  style= "display: block; padding: 2px; margin: 0; border: 0; width: 100%; border-radius: 0px;" disabled/></td>
                                        <td class="col-sm-1">@1350</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table table-bordered" style="font-family: Times New Roman; font-weight: bold; font-size: 16px;">
                                <tbody>
                                    <tr>
                                        <td class="col-sm-1" style="text-align:center;">6</td>
                                        <td class="col-sm-3">Parking</td>
                                        <td class="col-sm-1">Rs.</td>
                                        <td class="col-sm-6" style="margin: 0; padding: 0;"><input type="text"  style= "display: block; padding: 2px; margin: 0; border: 0; width: 100%; border-radius: 0px;" disabled/></td>
                                        <td class="col-sm-1">fix</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table table-bordered" style="font-family: Times New Roman; font-weight: bold; font-size: 16px;">
                                <tbody>
                                    <tr>
                                        <td class="col-sm-1" style="text-align:center;">7</td>
                                        <td class="col-sm-3">Maintanance 5 Years</td>
                                        <td class="col-sm-1">Rs.</td>
                                        <td class="col-sm-6" style="margin: 0; padding: 0;"><input type="text"  style= "display: block; padding: 2px; margin: 0; border: 0; width: 100%; border-radius: 0px;" disabled/></td>
                                        <td class="col-sm-1">fix</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table table-bordered" style="font-family: Times New Roman; font-weight: bold; font-size: 16px;">
                                <tbody>
                                    <tr>
                                        <td class="col-sm-1" style="text-align:center;">8</td>
                                        <td class="col-sm-3">GST Tax</td>
                                        <td class="col-sm-1">Rs.</td>
                                        <td class="col-sm-7" style="margin: 0; padding: 0;"><input type="text"  style= "display: block; padding: 2px; margin: 0; border: 0; width: 100%; border-radius: 0px;" disabled/></td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table table-bordered" style="font-family: Times New Roman; font-weight: bold; font-size: 16px;">
                                <tbody>
                                    <tr>
                                        <td class="col-sm-4">Cost Payable to Company (X+5+6+7+8)</td>
                                        <td class="col-sm-1">Rs.</td>
                                        <td class="col-sm-5" style="margin: 0; padding: 0;"><input type="text"  style= "display: block; padding: 2px; margin: 0; border: 0; width: 100%; border-radius: 0px;" disabled/></td>
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
                                        <td class="col-sm-1">Rs.</td>
                                        <td class="col-sm-7" style="margin: 0; padding: 0;"><input type="text"  style= "display: block; padding: 2px; margin: 0; border: 0; width: 100%; border-radius: 0px;" disabled/></td>
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
                </form>
            </div>

        </div>
        <script>
       $(document).ready(function () {
                $('#toppageheader').html('Cost Calculation');
                $("a:contains(Cost Calculation)").parent().addClass('active');
            });
        </script>
            
    </body>
</html>
