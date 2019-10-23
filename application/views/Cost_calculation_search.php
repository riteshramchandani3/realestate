
<html>

    <head>
        <title>Cost Calculation Search</title>
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
                <div class="row">
                    <?php
                    if (isset($success)) {
                        ?>
                        <div class="alert alert-success alert-dismissable" > 
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Success!</strong> 
                        </div>
                        <?php
                    } else {
                        
                    }
                    ?>
                </div>
                <form action="<?php echo site_url('Cost_calculator/cost_search'); ?>" method = "post">
                    <div class="row">
                        <div class="panel panel-primary">
                            <div class="panel-heading"> <h4> Cost Calculation</h4></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 search-col-md-10">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">Name</span>
                                        <input type="text" name="search_text" id="search_text" autocomplete="off" onkeyup="getres(this.value);"  placeholder="Search" class="form-control"/>
                                    </div>                               
                                    <div  id="result"></div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon"> Project</span>
                                        <select name="project_id" id="project_id" class="form-control">

                                            <option value="0"> --Select--</option>

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
                                    <button class="btn btn-primary btn-3d" type="button" value="submit" onclick="getallusersprjdtls();" ><strong>Search</strong>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-search"></i></button>

                                    <button class="btn btn-danger btn-3d"    type="reset" onclick="reset_results();">Clear &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-undo"></i> </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="panel panel-primary" id="panelsuccess" style="display: none;">
                            <div class="panel-heading"><h5>Cost Calculation Results</h5></div>
                            <div class="panel-body" style="width:100%;overflow:auto; max-height:500px;">
                                <div class="row" id="tablespace"></div>
                            </div>
                        </div>
                    </div>
                </form>
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
                    //alert(alphabet);
                    $.ajax({
                        type: "POST",
                        url: "<?php echo site_url('cost_calculator/getthewords'); ?>",
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

            function getallusersprjdtls()
            {
                var username = document.getElementById('search_text').value;
                var projectid = document.getElementById('project_id').value;
                var unitno = document.getElementById('unit_no').value;
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('cost_calculator/alluserswithproject') ?>",
                    data: {uname: username, pid: projectid, unitno: unitno},
                    success: function (msg) {
                        //alert(msg);
                        document.getElementById('tablespace').innerHTML = msg;
                        $('#panelsuccess').css('display', '');
                    }

                });

            }

            $(document).ready(function () {
                $('#toppageheader').html('Cost Calculation Search');
                $("a:contains(Cost Calculation)").parent().addClass('active');
            });

            function reset_results() {
                $('#panelsuccess').hide();
                $('#result').hide();
                $('#search_text').val('');
                $('#project_id').prop('selectedIndex', 0);
                $('#unit_no').val('');
            }



        </script>


    </body>


</html>

