<!DOCTYPE html>
<!--
Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
Unauthorized copying of this file, via any medium is strictly prohibited
Proprietary and confidential.
Written by Oga Technologies, October 1,  2016.
-->
<html>
    <head>
        <title>Agreement Search</title>
        <?php
        include_once('assets/html_head_links.php');
        ?>


        <style>
            ul{list-style-type: none;}
            .modal-header-primary {
                color:#fff;
                padding:25px 15px;
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
        <?php
        require_once('assets/top_menu.php');
        require_once('assets/side_menu.php');
        ?>

        <div class="main">
            <div class="container">
                <div class="row">
                    <div class="panel panel-primary">
                        <div class="panel-heading"> <h4>Search Applicant</h4></div>
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
                                    <input type="text" name="unit_no" id="unit_no" class="form-control" />                           
                                </div>
                            </div>
                          
                        </div>
                    </div>
                    <div class="col-md-2 search-col-md-2">
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-primary btn-3d" type="button" value="submit" onclick="getallusersprjdtls();" >Search&nbsp;&nbsp;&nbsp;<li class="fa fa-search"></li></button>
                               
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

                        <form class="form-inline" action="<?php echo site_url('Agreement/show_appl_agreement'); ?>" method = "post">
                            <div class="panel-heading"></div>
                            <div class="panel-body" style="width:100%;overflow:auto; max-height:500px;">
                                <div class="row" id="tablespace">

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                </div>



                <div class="modal fade" id="myModal"role="dialog" style="margin-top: 200px;">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header modal-header-primary">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title"></h4>
                            </div>
                            <div class="modal-body">
                                <h3 style="text-align: center;">Application form is incomplete.</h3>

                            </div>
                            <div class="modal-footer" style="text-align: center;">

                                <a id="del_row_to_get" href="<?php echo site_url('View_ctrl/do_application_search') ?>"  class='btn btn-primary'  name='Delete' value='Fill Application Form'><i class="fa fa-plus"></i></a>

                            </div>
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

        <script>

            function reset_results() {
                $('#panelsuccess').hide();
                $('#result').hide();
                $('#search_text').val('');
                $('#project_id').prop('selectedIndex', 0);
                $('#unit_no').val('');
            }

            $(document).ready(function () {
                $('#toppageheader').html('Agreement Search');
                $("a:contains(Agreement)").parent().addClass('active');
                $("a:contains(Agreement Search)").parents().addClass('open');
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
                        url: "<?php echo site_url('Agreement/getsearchwords'); ?>",
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
                    url: "<?php echo site_url('Agreement/showapplagreement') ?>",
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