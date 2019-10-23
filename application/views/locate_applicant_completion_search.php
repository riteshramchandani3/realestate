<!DOCTYPE html>
<!--
Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
Unauthorized copying of this file, via any medium is strictly prohibited
Proprietary and confidential.
Written by Oga Technologies, October 1,  2016.
-->
<html>

    <head>
        <title>Work Completion Search</title>
        <?php
        include_once('assets/html_head_links.php');
        ?>
        <style>
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
          
        </style>
    </head>

    <body>
        <?php
        require_once('assets/top_menu.php');
        require_once('assets/side_menu.php');
        ?>
        <div class="main">

            <div class="container">
                <div class="row">
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
                </div>
                <div class="row">
                    <div class="panel panel-primary">
                        <div class="panel-heading"><h4>Work Completion Search</h4></div>
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

                                <div id="result"></div>
                                <!--div  id="result" style="background: #e9e9e9; z-index: 9999; margin-top:-20px;"></div-->
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
                                    <input type="text" name="unit_no" id="unit_no" class="form-control" />                           
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-2 search-col-md-2">
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-primary btn-3d" type="button" value="submit" onclick="getallusersprjdtls();" >Search&nbsp;&nbsp;&nbsp;<li class="fa fa-search"></li></button>

                                <button class="btn btn-danger btn-3d" type="reset" onclick="reset_results();">Clear &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-refresh"></i> </button> 
                               

<!--a class="btn btn-success btn-3d" href="<?php //echo site_url('Myy_ctrl/load_appl_fill_form');          ?>" >New&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<li class="fa fa-plus"></li></a-->
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="panel panel-primary" id="panelsuccess" style="display: none;">
                        <div class="panel-heading"><h4>Applicants List:</h4></div>
                        <div class="panel-body" style="width:100%;overflow:auto; max-height:500px;">
                            <form class="form-inline" action="<?php echo site_url('View_ctrl/application_search'); ?>" method = "post">
                                <div class="row" id="tablespace"></div>
                            </form>
                        </div>

                    </div>

                </div>
            </div>
            <div class="modal fade" id="myModal"role="dialog" style="margin-top: 200px;">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header-danger">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Confirm Delete</h4>
                        </div>
                        <div class="modal-body">
                            <h3 style="text-align: center;">Are You Sure?</h3>
                            <p style="text-align: center;">This change is un-reversible. </p>
                        </div>
                        <div class="modal-footer" style="text-align: center;">

                            <a id="del_row_to_get" href="<?php echo site_url('View_ctrl/delete_row') ?>"  class='btn btn-danger'  name='Delete' value='delete'>Delete <i class="fa fa-trash"></i></a>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>



        </div>

        <script type="text/javascript">
            var elem = document.getElementById("unit_no");
            elem.onkeyup = function (e) {
                if (e.keyCode == 13) {
                    getallusersprjdtls()
                }
            }

        </script>


        <script type="text/javascript">
          

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
                        url: "<?php echo site_url('View_ctrl/getsearchwords'); ?>",
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
                    url: "<?php echo site_url('Final_calculation/completion_search') ?>",
                    data: {uname: username, pid: projectid, unitno: unitno},
                    success: function (msg) {
                        //alert(msg);
                        document.getElementById('tablespace').innerHTML = msg;
                        $('#panelsuccess').css('display', '');
                    }

                });

            }

            function reset_results() {
                $('#panelsuccess').hide();
                $('#result').hide();
                $('#search_text').val('');
                $('#project_id').prop('selectedIndex', 0);
                $('#unit_no').val('');
            }



            $(document).ready(function () {
                $('#toppageheader').html('Work Completion Search');
                $("a:contains('Completion Status')").parent().addClass('active');
            });
            //-------------------deleteing a project record-------------
         



           
        </script>

    </body>
</html>