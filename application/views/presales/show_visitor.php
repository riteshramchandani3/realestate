<!DOCTYPE html>
<!--
Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
Unauthorized copying of this file, via any medium is strictly prohibited
Proprietary and confidential.
Written by Oga Technologies, October 1,  2016.
-->
<html>
    <head>
        <title>All Prospect</title>
        <?php require_once('assets/html_head_links.php'); ?>
        <style>

            #search{
                font-size: 20px;
            }
            #table {
                border-collapse: collapse;
                width: 100%;
                border: 1px solid #ddd;
                font-size: 14px !important;
                font-weight: 600 !important;
            }
            .table-fixed thead {
                width: 100%;
            }
            .table-fixed tbody {
                height: 350px;
                overflow-x: auto;
                width: 100%;
            }
            .table-fixed thead, .table-fixed tbody, .table-fixed tr, .table-fixed td, .table-fixed th {
                display: block;
            }
            .table-fixed tbody td, .table-fixed thead > tr> th {
                /* float: left; */
                border-bottom-width: 0;
            }
            .table-fixed thead > tr> th {
                background-color: #f1f1f1;
                width: 212px;
            }
            .modal-header-danger {
                color:#fff;
                padding:9px 15px;
                border-bottom:1px solid #eee;
                background-color: #d9534f;
                -webkit-border-top-left-radius: 5px;
                -webkit-border-top-right-radius: 5px;
                -moz-border-radius-topleft: 5px;
                -moz-border-radius-topright: 5px;
                border-top-left-radius: 5px;
                border-top-right-radius: 5px;
            }
            .col-xs-2 {
                width: 19.666667%;
            }
            .table > tbody > tr > td {
                width: 212px;
            }


        </style>
    </head>
    <body> 
        <?php
        require_once('assets/top_menu.php');
        require_once('assets/pre_sales_side_menu.php');
        ?>

        <div class="main">
            <div class="container">
                <div class="modal fade" id="myModal"role="dialog" style="margin-top: 200px;">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header-danger">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Confirm</h4>
                            </div>
                            <div class="modal-body">
                                <h3 style="text-align: center;">Convert Customer Back To Prospect ?</h3>
                            </div>
                            <div class="modal-footer" style="text-align: center;">

                                <a id="del_row_to_get" href="<?php echo site_url('Pre_sales/convert') ?>"  class='btn btn-danger'  name='Delete' value='Convert'>Yes</a>
                                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                            </div>
                        </div>
                    </div>
                </div>

                <?php if ($this->session->flashdata('success')) { ?>
                    <div class="alert alert-success">      
                        <button data-dismiss="alert" class="close" type="button">
                            <span aria-hidden="true">x</span><span class="sr-only">Close</span></button>

                        <?php echo $this->session->flashdata('success') ?>
                    </div>
                <?php } else if ($this->session->flashdata('failure')) {
                    ?>
                    <div class="alert alert-danger">      
                        <button data-dismiss="alert" class="close" type="button">
                            <span aria-hidden="true">x</span><span class="sr-only">Close</span></button>

                        <?php echo $this->session->flashdata('failure') ?>
                    </div>

                <?php } ?>

                <div class="row">
                    <div class="panel panel-primary" style="margin-top: -7px; margin-left: 15px;" >
                        <div class="panel-heading">
                            <h4>  <strong>All Prospects:</strong> </h4>
                            <input action="action" onclick="window.history.go(-1); return false;" type="button" value="Back"   class="btn btn-primary pull-right clickable" style="margin-top: -32px;" />
                            <a href="<?php echo site_url('pre_sales/new_prospect'); ?>" class="btn btn-primary pull-right clickable" role="button" style="margin-top: -32px; margin-right: 10px;"><i class="fa fa-plus" aria-hidden="true"></i> Add New</a>
                        </div>

                        <br>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search" aria-hidden="true"></i></span>
                            <input type="text"  id="search" onkeyup="myFunction()" placeholder="Search for names.."  class="form-control" title="Type in a name" />
                        </div>
                        <br>
                        <table class="table table-fixed text-center" id="table">
                            <thead>
                                <tr>
                                    <th  class="col-xs-2" style="text-align: center;"> Prospect Name</th>

                                    <th class="col-xs-2" style="text-align: center;"> Project Name </th> 
                                    <th class="col-xs-2" style="text-align: center;"> Unit No </th> 
                                    <th class="col-xs-2" style="text-align: center;"> Status </th> 

                                    <th class="col-xs-2" style="text-align: center;"> Action </th> 
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($this->Pre_sales_model->get_visitor_details() as $row) {
                                    ?>
                                    <tr>
                                        <td class="col-xs-2"><?php echo $row['name']; ?></td>
                                        <td class="col-xs-2"><?php echo $row['project_name'].nbs(1).$row['block']; ?></td>
                                        <td class="col-xs-2"><?php echo $row['unit_no']; ?></td>
                                        <?php if ($row['status'] == 'BOOKED') { ?>
                                            <td class="col-xs-2" style="color: green;" >Customer</td>
                                        <?php } else { ?>
                                            <td class="col-xs-2" style="color: blue;">Prospect</td>
                                        <?php } ?>

                                        <td class="col-xs-2">
                                            <a class="btn btn-info btn-3d pull-left" href="<?php echo site_url('Pre_sales/pre_sales_costing?id=' . $row['id'] . '') ?> "><i class="fa fa-eye"></i> View</a>
                                            <?php
                                            if ($row['status'] == 'BOOKED' && ($urole == 'ADMIN' || $urole == 'MD')) {
                                                echo '<a class="btn btn-danger btn-3d" value=' . $row['id'] . ', onclick="myclicktest(' . $row['id'] . ')" data-toggle="modal" data-target="#myModal">' . '<i class="fa fa-repeat">' . '</i>' . '&nbsp;' . 'Revert' . '</a>';
                                            } else {
                                                ?>
                                                <?php echo ""; ?>
                                            <?php } ?>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <div class="panel-success" id="panelsuccess" style="display: none;">
                            <div class="panel-heading">View Document</div>
                            <div class="panel-body">
                                <div class="row" id="tablespace">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function () {
                $('#toppageheader').html('Pre-Sales > All Prospects');
                $("a:contains(All Prospects)").parent().addClass('active');
            });
        </script>

        <script>


            var $rows = $('#table tr');
            $('#search').keyup(function () {
                var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();

                $rows.show().filter(function () {
                    var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
                    return !~text.indexOf(val);
                }).hide();
            });

            $('.trash').click(function () {
                var del_href = $(this).data('href');
                $('#modalDelete').attr('href', del_href);
            });

            function myclicktest(id) {
                // alert(id);
                var _href = $('#del_row_to_get').attr("href");
                $('#del_row_to_get').attr("href", _href + '?id=' + id);
                ;
            }

        </script>



    </body>
</html>