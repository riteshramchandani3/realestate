<!DOCTYPE html>
<!--
(C) Oga Technologies Private Limited. All Rights Reserved.
Nobody is Allowed to copy this code.
(C) 2017 onwards.
-->
<html>
    <head>
        <title>Bank</title>
        <?php
        include_once('assets/html_head_links.php');
        ?>
    </head>
    <body> 
        <?php
        require_once('assets/top_menu.php');
        require_once('assets/side_menu.php');
        ?>
        <div class="main">
            <div class="container">    <?php if ($this->session->flashdata('success')) { ?>
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
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>Search Customers</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 search-col-md-10">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="input-group">
                                    <span class="input-group-addon">Name</span>
                                    <input type="text" name="search_text" id="search_text" autocomplete="off" onkeyup="getres(this.value);"  placeholder="Search" class="form-control" />
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
                                <button class="btn btn-primary" type="button" value="submit" onclick="getallapplicants();" >Search&nbsp;&nbsp;&nbsp;<li class="fa fa-search"></li></button>

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
                        <div class="panel-body scrollpane" style="width:100%;overflow:auto; max-height:500px;" >
                                <!--<form class="form-inline" action="<?php echo site_url('Bank/applicant_doc'); ?>" method = "post">-->
                            <div class="row" id="tablespace">
                            </div>
                        </div>

                    </div>
                </div>


                <div class="modal fade" id="myModal" role="dialog" style="margin-top: 200px;">
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

                                <a id="del_row_to_get" href="<?php echo site_url('Bank/delete_row') ?>"  class='btn btn-danger'  name='Delete'>Delete <i class="fa fa-trash"></i></a>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
                    getallapplicants()
                }
            }

        </script>
        <script type="text/javascript">

            $(document).ready(function () {
                $('#toppageheader').html('Bank');
                $("a:contains(Bank Finance)").parent().addClass('active');
            });

            function getres(arg)
            {
                var alphabet = arg;
                if (document.getElementById('search_text').value == '')
                {
                    $('#result').hide();
                } else
                {
                    //alert(alphabet);
                    $.ajax({
                        type: "POST",
                        url: "<?php echo site_url('Bank/getsearchwords'); ?>",
                        data: {alphabet: alphabet},
                        success: function (msg) {
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


            function getallapplicants()
            {

                var username = document.getElementById('search_text').value;
                var projectid = document.getElementById('project_id').value;
                var unitno = document.getElementById('unit_no').value;
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('Bank/allprojectdoc') ?>",
                    data: {uname: username, pid: projectid, unitno: unitno},
                    success: function (msg) {
                        //alert(msg);
                        document.getElementById('tablespace').innerHTML = msg;
                        $('#panelsuccess').css('display', '');
                    }

                });

            }
            function get_docs_for_this_applicant(uid) {
                window.location.href = 'show_appl_demand?uid=' + uid;
            }

            $(document).ready(function () {
                $('#toppageheader').html('Bank Details');
                $("a:contains(Bank)").parent().addClass('active');
            });


            function reset_results() {
                $('#panelsuccess').hide();
                $('#result').hide();
                $('#search_text').val('');
                $('#project_id').prop('selectedIndex', 0);
                $('#unit_no').val('');
            }
            function myclicktest(id) {
                //alert(id);
                var _href = $('#del_row_to_get').attr("href");
                $('#del_row_to_get').attr("href", _href + '?id=' + id);
                ;
            }
        </script>

    </body>


</html>