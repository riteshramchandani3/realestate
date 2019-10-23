<!DOCTYPE html>
<html>
    <head>
        <title>Demand Letter</title>
        <?php require_once('assets/html_head_links.php'); ?>
        <link rel="stylesheet" href="<?php echo base_url('resources/css/lightbox.min.css'); ?>">
        <style>

            @media print{
                /*@page {size: landscape}*/
                .non-printable { display: none; }
                #printable { display: block;}
            }
            @page {
                margin: 5mm 15mm 5mm 15mm;
            }

        </style>        
    </head>
    <body> 
        <?php
        require_once('assets/top_menu.php');
        require_once('assets/side_menu.php');
        ?>
        <div class="main">
            <!-- Content Here -->

            <div class="container">
                <div id="printable">
                    <?php
                    $user1 = $this->input->get('uid');

                    foreach ($this->Demand_letter_model->get_appl_details($user1) as $row) {
                        ?> 
                        <div class="row">
                            <div class="panel panel-primary" >
                                <div class="panel-heading">
                                    <h4>  <strong>Demand Letter</strong>&nbsp;&nbsp;&nbsp;<?php $name = $row->name; ?>&nbsp;&nbsp;&nbsp;&nbsp;<strong> </strong> &nbsp;<?php $project_name = $row->project_name; ?> <?php $block = $row->block; ?>&nbsp;&nbsp;&nbsp;&nbsp;<strong></strong>&nbsp;<?php $unit_no = $row->unit_no; ?>&nbsp;&nbsp;&nbsp;&nbsp;<strong></strong>&nbsp;<?php $type = $row->type; ?>
                                    </h4>

                                    <a href="<?php echo site_url('Demand_letter/appl_demand'); ?>" class="btn btn-primary pull-right clickable non-printable" role="button" style="margin-right:-3px; background-color: #337ab7;   margin-top: -36px;"><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;&nbsp;Back</a>
                                </div>

                                <?php
                            }
                            ?>

                            <br>


                            <center>
                                <div class="btn-3d" style="border:1px solid #337ab7; border-radius:5px; width:80%; line-height:150%;  ">
                                    <label>Customer Name :</label><?php echo nbs(2) . $name; ?><?php echo nbs(3); ?>
                                    <label>Project Name :</label><?php echo nbs(2) . $project_name . nbs(1) . $block; ?> <?php echo nbs(3); ?>
                                    <label>Unit No :</label><?php echo nbs(2) . $unit_no; ?> <?php echo nbs(3); ?>
                                    <label>Type :</label><?php echo nbs(2) . $type; ?>

                                </div>
                            </center>
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="tab1default">
                                    <div class="panel-body" style="overflow-y:scroll;" >
                                        <table class="table table-bordered table-striped" border='2'>

                                            <tr style="background-color: #337ab7;color:#FFF;">
                                                <th style="text-align: center;">  Stages </th>
                                                <th style="text-align: center;">  Due Amount <i class="fa fa-inr"></i> </th> 

                                                <!--th style="text-align: center;">  Advance Amount </th-->
                                                <th style="text-align: center;">  Demand Till Date <i class="fa fa-inr"></i> </th>
                                                <th style="text-align: center;">  Due Date </th>
                                                <th style="text-align: center;">  Action </th> 
                                                <th class="non-printable" style="text-align: center;">  Image </th> 

                                            </tr>
                                            <tbody>
                                                <?php
                                                $user = $this->input->get('uid');

                                                foreach ($this->Demand_letter_model->get_stages_dl($user) as $row) {
                                                    ?> 


                                                    <tr style="text-transform: capitalize;text-align: center;">
                                                        <td><?php echo $row['stage']; ?></td>
                                                        <td><?php echo $row['amount1']; ?></td>

                <!--td><?php //echo $row['adv_amt'];     ?></td-->
                                                        <td><?php echo $row['cumulative_amt']; ?></td>
                                                        <td>

                                                            <?php
                                                            $x = explode(' ', $row['due_date']);
                                                            $row['due_date'] = new DateTime($x[0]);
                                                            echo $row['due_date']->format('d-m-Y');
                                                            ?></td>


                                                        <?php if ($row['cumulative_amt'] > 0) { ?>
                                                        <td><a class="btn btn-info btn-3d non-printable" href="<?php echo site_url('Demand_letter/applicant_demand_letter?id=' . $row['id'] . '?' . $row['appl_id']) ?> "><i class="fa fa-file-text-o"></i>&nbsp;&nbsp;View Demand Letter</a>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                            <?php
                                                        } else {
                                                            echo "<td>Included in next Stage</td>";
                                                        }
                                                        ?>


                                            <!--  <a href="<?php //echo base_url($row['image_path']);            ?>" download><img src="<?php //echo base_url($row['image_path']);            ?>" alt=" " height="175" width="175"></a>-->
                                                        <!--  <a href="#">View Image</a>-->
                                                        <td class="non-printable">
                                                            <div>
                                                                <a class="example-image-link btn btn-primary btn-3d" href="<?php echo base_url($row['image_path']); ?>" data-lightbox="example-set" data-title="<?php echo $row['stage']; ?>">View Image</a>
                                                            </div>

                                                        </td>


                                                    </tr>
                                                    <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>






                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab2default">

                                    <?php $data['unit_no'] = $unit_no; ?>
                                    <?php foreach ($this->Site_report_model->get_dl_stage_desc_step_no($data) as $row1) { ?>

                                        <?php $last = $row1['step_no']; ?>

                                    <?php } ?>

                                    <?php $data['unit_no'] = $unit_no; ?>
                                    <?php foreach ($this->Site_report_model->get_dl_stage_asc_step_no($data) as $row1) { ?>

                                        <?php $first = $row1['step_no']; ?>

                                    <?php } ?>
                                    <?php if ($first == '') { ?>

                                    <?php } else { ?>

                                        <?php $data1['unit_no'] = $unit_no; ?>
                                        <?php $data1['step_no'] = $last; ?>

                                        <?php foreach ($this->Site_report_model->get_dl_stage_name($data1) as $row1) { ?>

                                            <?php $final_stage = $row1['stage']; ?>

                                        <?php } ?>






                                        <?php $first1 = $last - 1; ?>
                                        <?php if ($first1 == 0) { ?>
                                            <?php $first_one = 1 ?>
                                        <?php } else { ?>
                                            <?php $first_one = $first1; ?>
                                        <?php } ?>

                                        <?php foreach ($this->Site_report_model->get_dl_stage_sum_lastrow($last, $first_one, $data) as $row1) { ?>

                                            <?php $tot = $row1['amount']; ?>

                                        <?php } ?>




                                        <?php // foreach ($this->Site_report_model->get_dl_stage_sum($last, $first, $data) as $row1) { ?>

                                        <?php //$tot = $row1['amount']; ?>

                                        <?php //}   ?>

                                        <br>
                                        <table class="table table-bordered table-striped text-center" border='2'>
                                            <tr style="background-color: #337ab7;color:#FFF;">
                                                <th style="text-align: center;">  Stages </th>
                                                <th style="text-align: center;">  Due Amount </th>
                                                <th style="text-align: center;">  Action </th>
                                            </tr>
                                            <tbody>
                                                <tr>
                                                    <td><?php echo $final_stage; ?></td>
                                                    <?php if ($tot == 0) { ?> 
                                                        <td><?php echo $tot; ?></td>
                                                        <td>Amount Paid</td>
                                                    <?php } else { ?>
                                                        <td><?php echo $tot; ?></td>
                                                        <td><a class="btn btn-info btn-3d" href="<?php echo site_url('Demand_letter/applicant_all_stage_demand_letter?id=' . $unit_no) ?> "><i class="fa fa-file-text-o"></i>&nbsp;&nbsp;View Demand Letter</a>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                    <?php } ?>
                                                </tr>
                                            </tbody>
                                        </table>

                                    <?php } ?>

                                </div>
                            </div>                          
                        </div>
                    </div>
                </div>
            </div>
            <script>
                $(document).ready(function () {
                    $('#toppageheader').html('Demand Letter Stages <span class="pull-right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="print" id="btnprint" value="print" class="btn btn-sm btn-default" onClick="print_this_doc();">Print&nbsp;&nbsp;<i class="fa fa-print"></i></button></span>');
                    $("a:contains(Demand Letter)").parent().addClass('active');
                });

                function print_this_doc() {
                    var printContents = document.getElementById('printable').innerHTML;
                    var originalContents = document.body.innerHTML;
                    document.body.innerHTML = printContents;
                    var css = '@page { size: landscape; }',
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

            </script>
            <script src="<?php echo base_url('resources/js/lightbox-plus-jquery.min.js'); ?>"></script>
    </body>
</html>