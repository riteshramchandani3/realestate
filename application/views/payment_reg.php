<!DOCTYPE html>
<!--
Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
Unauthorized copying of this file, via any medium is strictly prohibited
Proprietary and confidential.
Written by Oga Technologies, October 1,  2016.
-->
<html>
    <head>
        <title>Payment Register</title>
        <?php
        require_once('assets/html_head_links.php');
        ?>
        <style>
            @media print
            {
                /*@page {size: landscape}*/
                .non-printable { display: none; }
                #printable { display: block;}
            }
            .panel-body{
                overflow:auto !important; 
                max-height:100% !important; 
            }
            @page {

                margin: 5mm;
            }
            .modal-header-primary {
                color:#fff;
                padding:10px 15px;
                border-bottom:1px solid #eee;
                background-color: #428bca;
                -webkit-border-top-left-radius: 5px;
                -webkit-border-top-right-radius: 5px;
                -moz-border-radius-topleft: 5px;
                -moz-border-radius-topright: 5px;
                border-top-left-radius: 5px;
                border-top-right-radius: 5px;
                font-weight: 800;
            }

        </style>
    </head>
    <body>
        <?php require_once ('assets/top_menu.php'); ?>
        <?php require_once ('assets/side_menu.php'); ?>
        <div class="main">
            <div class="container">
            
                         <?php if ($this->session->flashdata('success')) { ?>
                    <div class="alert alert-success">
                        <button data-dismiss="alert" class="close"  type="button">
                            <span aria-hidden="true">x</span><span  class="sr-only">Close</span></button>

                        <?php echo $this->session->flashdata('success') ?>
                    </div>
                <?php } else if ($this->session->flashdata('failure')) {
                    ?>
                    <div class="alert alert-danger">
                        <button data-dismiss="alert" class="close"  type="button">
                            <span aria-hidden="true">x</span><span  class="sr-only">Close</span></button>

                        <?php echo $this->session->flashdata('failure') ?>
                    </div>
                 <?php } ?>


                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>Payment Register
                            <a href="javascript: history.go(-1)" class="btn btn-primary pull-right clickable" role="button">Go Back</a>

                        </h4>
                    </div>
                    <div class="panel-body">
                        <form  method="post">                        
                            <div class="row">  
                                <div class="col-md-6">  
                                    <div class="input-group" style="width: 70%;">
                                        <span class="input-group-addon">Date</span>
                                        <input type="text" class="form-control" id="crr_date" name="crr_date" value="<?php echo date('d-m-Y'); ?>"  onchange="get_all_prj_dtls(this.value);" placeholder="DD-MM-YYYY"/>
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    </div>     
                                </div>
                                <div class="col-md-6 text-right">                                      
                                    <button name="print" id="btnprint" value="print" class="btn btn-sm btn-default non-printable pull-right" onClick="print_this_doc();">Print&nbsp;&nbsp;<i class="fa fa-print"></i></button>
                                </div>
                            </div>                         
                            <br clear="ALL"/><br clear="ALL"/>
                        </form>
                        <div id="printable">
                            <div class="container-fluid">
                                <form action="<?php echo site_url('Payment/project_search'); ?>" method="post">
                                    <div class="row" id="tablespace" >
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div> 
                <div class="modal fade" id="myModal"role="dialog" style="margin-top: 106px;">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header-primary">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Payment Register</h4>
                            </div>
                            <div class="modal-body">
                                <br><br>
                                <input type="hidden" id="id_update"  value="" name="id" />
                                <div class="row text-center">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4">
                                        <label>Deposite Date:</label>
                                        <input type="text" value="" id="deposite_date" name="deposite_date"  class="date-picker"/>
                                    </div>
                                    <div class="col-md-4"></div>
                                </div>
                                <br><br>

                                <!--input type="text" id="deposite_date"   value="" name="deposite_date"/-->

                                <div class="row text-center">
                                    <button type="submit" class="btn btn-primary" onclick="testFun()" id="admin">Submit</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                                <br><br>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <script>
            function testFun() {
                var id = $('#id_update').val();
                //alert(id);
                var deposite_date = $('#deposite_date').val();


                $('#myModal').modal('hide');
                $.ajax({
                    type: 'POST',
                    url: "<?php echo site_url('Payment/update_despositedate'); ?>",
                    data: {id: id, deposite_date: deposite_date},
                    success: function (data) {
                        //  alert(data);

                        window.location.href = "<?php echo site_url('Payment/paymentreg1'); ?>";
                    },
                    error: function (err) {
                        // alert("error" + JSON.stringify(err));
                    }
                });
            }
        </script>
        <script>
            
            $("#deposite_date").on("keydown keypress keyup", false);
            $("#crr_date").on("keydown keypress keyup", false);
            $(document).ready(function () {
                $('#my-dialog').modal('show');
                $('.date-picker').datepicker({
                    dateFormat: "dd-mm-yy",
                    yearRange: "-10:+10",
                    changeMonth: true,
                    changeYear: true
                });
            });
        </script>
        <script>
            $(document).ready(function () {
                var crr_date1 = document.getElementById('crr_date').value;


                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('Payment/get_all_date_payment') ?>",
                    data: {crr_date: crr_date1},
                    success: function (msg) {
                        //alert(msg);
                        document.getElementById('tablespace').innerHTML = msg;
                        $('#panelsuccess').css('display', '');
                    }

                });

                $('#toppageheader').html('Payment Register');
                $("a:contains(Payment Register)").parent().addClass('active');
            });

            function get_all_prj_dtls()
            {
                var crr_date = document.getElementById('crr_date').value;

                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('Payment/get_all_date_payment') ?>",
                    data: {crr_date: crr_date},
                    success: function (msg) {
                        //alert(msg);
                        document.getElementById('tablespace').innerHTML = msg;
                        $('#panelsuccess').css('display', '');
                    }

                });

            }


        </script>
        <script>
            $(function () {
                $("#crr_date").datepicker({
                    dateFormat: 'dd-mm-yy',
                    changeMonth: true,
                    changeYear: true,
                    yearRange: '-100y:c+100'
                });
            });
        </script>
        <script>


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

            function myclicktest(id) {
                //  alert(id);
                //var _href = $('#del_row_to_get').attr("href");
                //$('#del_row_to_get').attr("href", _href + '?id=' + id);
                //;
                document.getElementById('id_update').value = id;
                // alert(id);

                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('Payment/getupdate_deposite_date'); ?>",
                    data: {id: id},
                    success: function (msg) {
                        //alert(msg);


                        var msgarray = msg.split(',');
                        var selectptr = document.getElementById('deposite_date');
                        document.getElementById('deposite_date').value = msgarray[0].trim();
                        var aa = document.getElementById('deposite_date').value;
                    }
                }
                );

            }
        </script>
        <script src="<?php echo base_url('resources/js/fadeout.js') ?>" type="text/javascript"></script>

    </body>
</html>