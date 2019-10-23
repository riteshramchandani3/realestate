<!DOCTYPE html>
<!--
Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
Unauthorized copying of this file, via any medium is strictly prohibited
Proprietary and confidential.
Written by Oga Technologies, October 1,  2016.
-->
<html>
    <head>
        <title>Payment Search</title>
        <?php
        include_once('assets/html_head_links.php');
        ?>
        <style>
            #result{
                margin-left: 64px;
                overflow: auto;
                width: 82%;
                height: 145px;
            }
        </style>
    </head>
    <body> 
        <?php
        require_once('assets/top_menu.php');
        require_once('assets/side_menu.php');
        ?>

        <div class="main">
            <?php
            if (isset($msg)) {
                ?>
                <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
                    <strong>Success!</strong> Details Inserted.
                </div>
                <?php
            } elseif (isset($danger)) {
                ?>
                <div class="alert alert-danger">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
                    <strong>Failed!</strong> Details Insertion.
                </div>
                <?php
            } else {
                
            }
            ?>
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
            <div class="container">

                <div class="row">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>Search Payments</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 search-col-md-10">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="input-group">
                                    <span class="input-group-addon">Name</span>
                                    <input type="text" name="search_text" id="search_text"  onkeyup="getres(this.value);"  placeholder="Search" class="form-control" />
                                </div>
                                <div  id="result"></div>
                            </div>

                            <div class="col-md-4">
                                <div class="input-group">
                                    <span class="input-group-addon"> Project</span>
                                    <select name="project_id" id="project_id" class="form-control">

                                        <option value='0'>--Select--</option>

                                        <?php
                                        foreach ($this->View_applicant_info->getprojectname() as $row) {
                                            ?>
                                            <option value="<?php echo $row->id; ?>"> <?php echo $row->project_name . nbs(1) . $row->block; ?></option>

                                            <?php
                                        }
                                        ?>
                                    </select>

                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="input-group">
                                    <span class="input-group-addon"> Unit Number</span>
                                    <input type="text" name="unit_no" id="unit_no" class="form-control"/>                           
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-2 search-col-md-2">
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-primary btn-3d" type="button" value="submit" onclick="getallusersprjdtls();" >Search&nbsp;&nbsp;&nbsp;<i class="fa fa-search"></i></button>

                                <button class="btn btn-danger btn-3d"    type="reset" onclick="reset_results();">Clear &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-refresh"></i> </button>

                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="panel panel-primary" id="panelsuccess" style="display: none;">
                        <div class="panel-heading">
                            <h4>Applicants List:</h4>
                        </div>
                        <div class="panel-body" >

                            <form class="form-inline" action="<?php echo site_url('Payment/show_appl_payment'); ?>" method = "post">
                                <div class="panel-heading"></div>
                                <div class="panel-body" style="width:100%;overflow:auto; max-height:500px;">
                                    <div class="row" id="tablespace">

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <script>

            function reset_results() {
                $('#panelsuccess').hide();
                $('#result').hide();
                $('#search_text').val('');
                $('#project_id').prop('selectedIndex', 0);
                $('#unit_no').val('');
            }

            $(document).ready(function () {
                $('#toppageheader').html('Payment');
                $("a:contains(Invoices & Payments)").parent().addClass('active');
            });


            function getres(arg)
            {
                var alphabet = arg;
                if (document.getElementById('search_text').value == '')
                {
                    $('#result').hide();
                } else
                {
                    // alert(alphabet);
                    $.ajax({
                        type: "POST",
                        url: "<?php echo site_url('Payment/getsearchwords'); ?>",
                        data: {alphabet: alphabet},
                        success: function (msg) {
                            //alert(msg);
                            console.log("^^^^^^^^^^^" + msg);
                            $('#result').html(msg).show();

                        }
                    });
                }

            }

            function setthis(arg)
            {
                //alert(arg);
                document.getElementById('search_text').value = arg;
                $('#result').hide();
            }


            function getallusersprjdtls()
            {

                var username = document.getElementById('search_text').value;
                var projectid = document.getElementById('project_id').value;
                var unitno = document.getElementById('unit_no').value;
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('Payment/showapplicant') ?>",
                    data: {uname: username, pid: projectid, unitno: unitno},
                    success: function (msg) {
                        //alert(msg);
                        document.getElementById('tablespace').innerHTML = msg;
                        $('#panelsuccess').css('display', '');
                    }

                });

            }

        </script>
    </body>
</html>