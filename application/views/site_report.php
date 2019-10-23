<!DOCTYPE html>
<!--
(C) Oga Technologies Private Limited. All Rights Reserved.
Nobody is Allowed to copy this code.
(C) 2017 onwards.
-->
<html>
    <head>
        <title>Site Report</title>
        <?php
        require_once('assets/html_head_links.php');
        ?>
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


                <div class="alert alert-danger" id="exists" style="display: none;">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
                    <strong>Failed!</strong> Project Detail Already Exists. Try another combination.
                </div>
                <div class="panel panel-primary">
                    <div class="panel-heading"><h4>Add Site Report Details</h4><a href="<?php echo site_url('Upload_csv'); ?>" class="btn btn-default pull-right" style="margin-top:-30px;">Import Site Report</a></div>
                    
                    <div class="panel-body">




                        <form action="<?php echo site_url('Site_report/report_site_and_gen_dl'); ?>" method="post" enctype="multipart/form-data">
                            <?php
                            foreach ($this->Company_info_model->get_company_info() as $row) {
                                ?> 
                                <input type="hidden" value="<?php echo $row->attribute; ?>" name="attribute" />
                                <input type="hidden" value="<?php echo $row->value; ?>" name="value" />

                            <?php } ?>

                            <div class="row" style="display: inline;">
                                <div class="form-group">
                                    <div class="col-md-2">
                                        <label for="project_id">Project Name:</label>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-control" name="project_id" id="project_name" onchange='getblocks(this.value);' required> 
                                            <option value='0'>--Select--</option>      
                                            <?php
                                            foreach ($this->Site_report_model->project_tbl() as $w) {
                                                ?>
                                                <option value="<?php echo $w->id; ?>"><?php echo $w->project_name.' '.$w->block; ?></option>  
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-1"><label for="block_selectsss">Phase:</label></div>
                                    <div class="col-md-3">
                                        <select class="form-control" id='block_name' name="blocksss" onchange="gettype();" required >
                                            <option value="0">--Select--</option>
                                        </select>
                                        <input type="hidden" name="block" id="block_unit" />
                                    </div>

                                </div>
                            </div>
                            <br clear="all"/>
                            <div class="row" style="display: inline;">
                                <div class="form-group">
                                    <div class="col-md-2"><label for="type">Type:</label></div>
                                    <div class="col-md-3">
                                        <select class="form-control" id="unittype" name="type"  onchange="getcategory();" required>

                                            <option value="0">--Select--</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-1">
                                        <label for="block">Block:</label>
                                    </div>
                                    <div class="col-md-3 col-md-offset-0">
                                        <select class="form-control" id="category" name="category" onchange="showunitno();" required >
                                            <option value="0">--Select--</option>
                                        </select>
                                        
                                    </div>
                                </div>

                                <br clear="all"/><br clear="all"/>   
                            </div>

                            <div class="row" style="display: inline;">
                                <div id="show_div" style="display: block;">
                                    <div class="form-group">
                                        <div class="col-md-2">
                                            <label for="unit_no">Unit No. :</label>
                                        </div>
                                        <div class="col-md-3">
                                            <select class="form-control" id="unit_no" name="unit_no" onchange="showstages(this.value);" required> 
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-1"><label for="stage">Stage:</label></div>
                                    <div class="col-md-3">
                                        <select class="form-control"  id="stage_select" name="stage" required > 
                                        </select>
                                    </div>
                                </div>
                                <input type="hidden" name="customer_id" id="customer_id" />

                            </div>
                            <br clear="ALL"/><br clear="ALL"/>
                            <div class="row" style="display: inline;">

                                <div class="form-group">
                                    <div class="col-md-2"><label for="date">Date:</label></div>
                                    <div class="col-md-3">                                    
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="date" name="date" placeholder="DD-MM-YYYY" required/>
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-1"><label for="date">Upload Image:</label></div>

                                    <div class="col-md-6 col-md-4">
                                        <div class="thumbnail">
                                            <img src="<?php echo base_url('resources/image/site_img.png'); ?>" height="300" width="600" name="coapplicant_img" id="profile-img-tag2" class="img-rounded img-responsive" alt="Cinque Terre"/>
                                            <div class="caption">
                                                <p style="text-align: center;">Site Image</p>

                                                <!--<a href="#" class="btn btn-default btn-xs" role="button">Upload</a></center>-->
                                                <input type="file" name="profile-img2"  id="profile-img2"  >
                                            </div>
                                        </div>
                                    </div>   

                                </div>



                            </div><br clear="ALL"/><br clear="ALL"/>
                            <div class="row centered">  
                                <input id="submit" name="submit" class="btn btn-success btn-3d" value="Submit" type="submit"/>&nbsp;&nbsp;
                                <input id="cancel" name="cancel" class="btn btn-default btn-3d" type="reset" value="Reset"/>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function () {
                $('#toppageheader').html('Site Report');
                $("a:contains(Site Report)").parent().addClass('active');
            });




            function rr(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#profile-img-tag2').attr('src', e.target.result);
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }
            $("#profile-img2").change(function () {
                rr(this);
            });

            $(function () {
                $("#date").datepicker({
                    dateFormat: 'dd-mm-yy',
                    changeMonth: true,
                    changeYear: true,
                    yearRange: '-100y:c+100',
                   // minDate: 0
                });
            });



            $(document).ready(function () {
                $('#toppageheader').html('Add Site Report');
            });

            function customer_stage(unit_no)
            {
                var cat = document.getElementById('category').value;
                //alert(cat);
                //custom_id(unit_no);
                showstages(unit_no, cat);


            }
            function show_stage_and_unit_num() {


                var type = $('#unittype').val();
                getcategory();
                if ((type == 'Duplex'))
                {
                    showdiv();

                    showunitno();


                } else if (type == 'Flat') {
                    showdiv();
                    // showunitno();

                    showstages();

                } else if (type == 'Plot') {
                    // showdiv();
                    showunitno();

                    showstages();
                }
            }

            function getblocks(arg)
            {
                // alert(arg);
                if (arg == 0)
                {
                    var selectptr = document.getElementById('block_name');
                    selectptr.length = 0;
                    var opt = document.createElement('option');
                    opt.value = '0';
                    opt.text = '--Select--';
                    selectptr.appendChild(opt);

                } else
                {
                    $.ajax({
                        type: "POST",
                        url: "<?php echo site_url('Site_report/getprojectblocks'); ?>",
                        data: {arg: arg},
                        success: function (msg) {
                            //alert(msg);
                            var msgarray = msg.split(',');
                            var selectptr = document.getElementById('block_name');
                            selectptr.length = 0;
                            var opt = document.createElement('option');
                            opt.value = '0';
                            opt.text = '--Select--';
                            selectptr.appendChild(opt);
                            for (var i = 0; i < msgarray.length; i++)
                            {
                                var opt = document.createElement('option');
                                opt.value = msgarray[i].trim();
                                opt.text = msgarray[i].trim();
                                selectptr.appendChild(opt);
                                
                             document.getElementById("block_name").selectedIndex = "1";
                             $("#block_name").prop('disabled', 'disabled');
                             $("#block_unit").val(msgarray[i].trim());
                             gettype();
                                
                            }
                        }
                    });
                    
                }
            }
            function gettype() {
                //alert('hello');
                //if (arg == 0)
                //{
                //var selptr = document.getElementById('unittype');
                //selptr.length = 0;
                //var opt = document.createElement('option');
                //opt.value = 0;
                //opt.text = '--Select--';
                //}
                var pid = $('#project_name').val();
                var blid = $('#block_name').val();
                // alert(pid+"/"+blid);

                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('Site_report/getprojecttype'); ?>",
                    data: {plid: pid, blid: blid},
                    success: function (msg) {
                        // alert(msg);
                        var msgarray = msg.split(',');
                        var selptr = document.getElementById('unittype');
                        selptr.length = 0;
                        var opt = document.createElement('option');
                        opt.value = 0;
                        opt.text = '--Select--';
                        selptr.appendChild(opt);
                        for (var i = 0; i < msgarray.length - 1; i++)
                        {
                            var opt = document.createElement('option');
                            opt.value = msgarray[i].trim();
                            opt.text = msgarray[i].trim();
                            selptr.appendChild(opt);
                        }
                    }
                });

            }

            // function showstages(unit_no, categorys)
            function showstages(unit_no)
            {
                //  alert(categorys+'this is unit no');
                //var typeid=arg;
                var pid = $('#project_name').val();
                var block = $('#block_name').val();
                var type = $('#unittype').val();
                var unit_no = unit_no;

                var category = $('#category').val();
                //alert(category);
                //alert("Hereee in showstages..." + unit_no);
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('Site_report/get_the_following_stages'); ?>",
                    data: {project_id: pid, block: block, type: type, category: category, unit_no: unit_no},
                    success: function (msg) {
                      // alert(msg+'nirbhay');
                        var msgarray = msg.split(',');
                        var selectptr = document.getElementById('stage_select');
                        selectptr.length = 0;
                        var opt = document.createElement('option');
                        opt.value = '';
                        opt.text = "--Select--";
                        selectptr.appendChild(opt);

                        for (var i = 0; i < msgarray.length-1; i++)
                        {
                            var opt = document.createElement('option');
                            opt.value = msgarray[i].trim();
                            opt.text = msgarray[i].trim();
                            selectptr.appendChild(opt);
                        }
                    },
                    error: function (msg) {
                        alert("ERRORRRRR: ");
                    }

                });
                custom_id();
            }



            function showunitno()
            {
                //alert(arg);
                var pid = $('#project_name').val();
                var block = $('#block_name').val();
                var type = $('#unittype').val();
                //alert(pid);

                //var unit_num == $('#unit_no').val();
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('Site_report/getunitno'); ?>",
                    data: {project_id: pid, block: block, type: type},
                    success: function (msg) {
                        //alert(msg);
                        var msgarray = msg.split(',');
                        var selectptr = document.getElementById('unit_no');
                        selectptr.length = 0;
                        var opt = document.createElement('option');
                        opt.value = 0;
                        opt.text = "--Select--";
                        selectptr.appendChild(opt);
                        for (var i = 0; i < msgarray.length-1; i++)
                        {
                            var opt = document.createElement('option');
                            opt.value = msgarray[i].trim();
                            opt.text = msgarray[i].trim();
                            selectptr.appendChild(opt);
                        }
                    }
                });


            }
            function showdiv() {
                // check if project details exist already
                //alert('Im here!!');

                var m = $('#unittype').val();
                //var m = document.getElementById('unittype');
                //if ((m.options[m.selectedIndex].text == 'Flat') || (m.options[m.selectedIndex].text == 'Row House') || (m.options[m.selectedIndex].text == 'Shop') || (m.options[m.selectedIndex].text == 'Plot'))
                if ((m == 'Flat') || (m == 'Shop') || (m == 'Plot'))
                {
                    //document.getElementById('show_div').style.display = "none";
                    $('#show_div').hide();
                } else
                {
                    //document.getElementById('show_div').style.display = "block";
                    $('#show_div').show();
                }
                // return m;
            }

            function getcategory()
            {
                //alert(arg);

                var project_id = document.getElementById('project_name').value;
                //alert(project_id);
                var block = document.getElementById('block_name').value;
                // alert(block);
                var type = document.getElementById('unittype').value;
                // alert(type);
                //var typename = document.getElementById('unittype').value;
                //alert(project_id+"/"+block+"/"+type);
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('Site_report/getcategoryy'); ?>",
                    data: {project_id: project_id, block: block, type: type},
                    success: function (msg) {
                        //alert(msg);
                        var msgarray = msg.split(',');
                        var selptr = document.getElementById('category');
                        selptr.length = 0;
                        var opt = document.createElement('option');
                        opt.value = 0;
                        opt.text = "--Select--";
                        selptr.appendChild(opt);
                        for (var i = 0; i < msgarray.length - 1; i++)
                        {
                            var opt = document.createElement('option');
                            opt.value = msgarray[i].trim();
                            opt.text = msgarray[i].trim();
                            selptr.appendChild(opt);
                        }
                    }
                });
            }
            function custom_id(unit_no)
            {
                //alert(arg);
                var pid = $('#project_name').val();
                //alert(pid);
                var block = $('#block_name').val();
                var type = $('#unittype').val();
                var unit_no = $('#unit_no').val();
                //var unit_num == $('#unit_no').val();
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('Site_report/custom_id'); ?>",
                    data: {project_id: pid, block: block, type: type, unit_no: unit_no},
                    success: function (msg) {

                        var msgarray = msg.split(',');
                        var selectptr = document.getElementById('customer_id');
                        document.getElementById('customer_id').value = msgarray[0].trim();
                        //  document.getElementById('name').value = msgarray[1].trim();
                        var aa = document.getElementById('customer_id').value;


                        document.getElementById('customer_id').value = aa;
                    }
                });
            }
        </script>
        
        <script>

            $(document).ready(function () {
                $(window).keydown(function (event) {
                    if (event.keyCode == 13) {
                        event.preventDefault();
                        return false;
                    }
                });
            });

        </script>
    </body>
</html>
