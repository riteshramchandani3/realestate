<!DOCTYPE html>
<!--
Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
Unauthorized copying of this file, via any medium is strictly prohibited
Proprietary and confidential.
Written by Oga Technologies, October 1,  2016.
--><html>

    <head>
        <title>Search Demand Letter</title>
        <?php
        require_once('assets/html_head_links.php');
        ?>
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
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>Search Demand Letter</h4>
                    </div>
                    <div class="panel-body" >
                        
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <span class="input-group-addon">Name</span>
                                                <input type="text" name="search_text" id="search_text" autocomplete="off" onkeyup="getres(this.value);"  placeholder="Search" class="form-control" />
                                            </div>
                                            <br><br>
                                            <div  id="result" style="background: #e9e9e9; z-index: 9999; margin-top:-20px;"></div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <span class="input-group-addon"> Project</span>
                                                <select name="project_id" id="project_id" class="form-control">

                                                    <option value="0"> --Select--</option>

                                                    <?php
                                                    foreach ($this->Demand_letter_view_model->Getprojectname() as $row) {
                                                        ?>
                                                        <option value="<?php echo $row->id; ?>"> <?php echo $row->project_name; ?></option>

                                                        <?php
                                                    }
                                                    ?>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <span class="input-group-addon"> Unit Number</span>
                                                <input type="text" name="unit_no" id="unit_no" class="form-control"  placeholder="(optional)takes priority"/>                         
                                            </div>
                                        </div>
                                        <br>
                                        <div class="col-md-2">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button class="btn btn-primary" type="button" value="submit" onclick="getallusersprjdtls();" >Search&nbsp;&nbsp;&nbsp;<li class="fa fa-search"></li></button>
                                            <br><br>
                                            <span type="button" class="btn btn-success" onClick="history.go(0)">Refresh&nbsp;&nbsp;<i class="fa fa-refresh"></i></span>
                                            <br><br>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                </div>
                <br><br>
                <div class="panel panel-primary" id="panelsuccess" style="display: none;">
                    <div class="panel-heading"><h4>Demand Letters</h4></div>
                    <div class="panel-body">
                        <form class="form-inline" action="<?php echo site_url('Demand_letter/demand_letter_search_by_id'); ?>" method = "post">
                            <div class="row" id="tablespace"></div>
                        </form>
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
                //alert(alphabet);
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('Demand_letter/getthewords'); ?>",
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

            function getallusersprjdtls()
            {
                var username = document.getElementById('search_text').value;
                var projectid = document.getElementById('project_id').value;
                var unitno = document.getElementById('unit_no').value;
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('Demand_letter/alluserswithproject') ?>",
                    data: {uname: username, pid: projectid, unitno: unitno},
                    success: function (msg) {
                        //alert(msg);
                        document.getElementById('tablespace').innerHTML = msg;
                        $('#panelsuccess').css('display', '');
                    }

                });

            }
            $(document).ready(function () {
                $('#toppageheader').html('Search Demand Letter');
                $("a:contains(Demand Letter)").parent().addClass('active');
            });

        </script>


    </body>


</html>

