<!DOCTYPE html>
<!--
(C) Oga Technologies Private Limited. All Rights Reserved.
Nobody is Allowed to copy this code.
(C) 2017 onwards.
-->
<html>
    <head>
        <title>Interest Calculation</title>
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
            <div class="container">
                <div class="row">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>Search Applicant</h4>
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

                    <!-- next -->

                    <div class="col-md-2 search-col-md-2">
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-primary" type="button" value="submit" onclick="getallapplicants();" >Search&nbsp;&nbsp;&nbsp;<i class="fa fa-search"></i></button>

                                <button class="btn btn-danger btn-3d"    type="reset" onclick="reset_results();">Clear &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-refresh"></i> </button>

                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="panel panel-primary" id="panelsuccess" style="display: none;">
                        <div class="panel-heading">
                            <h4>Applicants List</h4>
                        </div>
                        <div class="panel-body scrollpane" style="width:100%;overflow:auto; max-height:500px;" >
                                <!--<form class="form-inline" action="<?php echo site_url('Demand_letter/applicant_doc'); ?>" method = "post">-->
                            <div class="row" id="tablespace">
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

            function getres(arg)
            {
                var alphabet = arg;
                //alert(alphabet);
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('Interest/getsearchwords'); ?>",
                    data: {alphabet: alphabet},
                    success: function (msg) {
                        $('#result').html(msg).show();

                    }
                });


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
                    url: "<?php echo site_url('Interest/allprojectdoc') ?>",
                    data: {uname: username, pid: projectid, unitno: unitno},
                    success: function (msg) {
                        //alert(msg);
                        document.getElementById('tablespace').innerHTML = msg;
                        $('#panelsuccess').css('display', '');
                    }

                });

            }
            function get_docs_for_this_applicant(uid) {
                window.location.href = 'show_appl_interest?uid=' + uid;
            }

            $(document).ready(function () {
                $('#toppageheader').html('Interest Calculation Search');
                $("a:contains(Interest Calculation)").parent().addClass('active');
            });
            function reset_results() {
                $('#panelsuccess').hide();
                $('#search_text').val('');
                $('#result').hide();
                $('#project_id').prop('selectedIndex', 0);
                $('#unit_no').val('');
            }


        </script>

    </body>


</html>