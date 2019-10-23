<!DOCTYPE html>
<!--
Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
Unauthorized copying of this file, via any medium is strictly prohibited
Proprietary and confidential.
Written by Oga Technologies, October 1,  2016.
-->
<html>
    <head>
        <title>Select Project Details</title>
        <?php
        require_once('assets/html_head_links.php');
        ?>

        <script>
            $(document).ready(function () {
                $('#phasediv').hide();
                $('#toppageheader').html('New Prospect Details');
                $("a:contains(New Prospect)").parent().addClass('active');
                //document.getElementById("submit").disabled = true;
                $(window).keydown(function (event) {
                    if (event.keyCode == 13) {
                        event.preventDefault();
                        return false;
                    }
                });
            });
            function showblockss2(arg)
            {
              //  alert(arg);
                var argc = arg;
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('Pre_sales/getprojectblocks'); ?>",
                    data: {arg: argc},
                    success: function (msg) {
                        //alert(msg);
                        var msgarray = msg.split(',');
                        var selectptr = document.getElementById('block_selectsss');
                        selectptr.length = 0;
                        var opt = document.createElement('option');
                        opt.value = 0;
                        opt.text = "--Select--";
                        selectptr.appendChild(opt);
                        for (var i = 0; i < msgarray.length; i++)
                        {
                            var opt = document.createElement('option');
                            opt.value = msgarray[i].trim();
                            opt.text = msgarray[i].trim();
                            selectptr.appendChild(opt);
                            document.getElementById("block_selectsss").selectedIndex = "1";
                        }


                    }
                });
                
                  $.ajax({
            type: "POST",
            url: "<?php echo site_url('Pre_sales/getprojectunittypes'); ?>",
            data: {prid: arg},
            success: function (msg) {
                // alert(msg);
                var msgarray = msg.split(',');
                var selectptr = document.getElementById('unittype');
                selectptr.length = 0;
                var opt = document.createElement('option');
                opt.value = 0;
                opt.text = "--Select--";
                selectptr.appendChild(opt);
                for (var i = 0; i < msgarray.length - 1; i++)
                {
                    var opt = document.createElement('option');
                    opt.value = msgarray[i].trim();
                    opt.text = msgarray[i].trim();
                    selectptr.appendChild(opt);
                }


            }
        });
                //showblockss6(arg)
            }

            function  showblockss6(arg)
            {
                //alert(arg);
                var argc = arg;
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('Pre_sales/getprojectblocks66'); ?>",
                    data: {arg: argc},
                    success: function (msg) {
                        //(msg);
                        document.getElementById('p_name').value = msg.trim();
                    }


                }
                );
            }


            function getcategory(arg)
            {
                var typeid = arg;

                var phase = document.getElementById('block_selectsss').value;

                if ((typeid == 'Flat') && (phase == 'Phase-1')) {

                    $('#show_flat_block').show();
                    $('#phase_1_Flat_type').show();
                    $('#flat_floor').show();
                    $('#category').hide();
                    $('#category2').hide();
                    $('#selcat1').hide();
                    $('#unit_no').hide();
                }else if ((typeid == 'Shop') && (phase == 'Phase-1')){
                      $('#category').hide();
                    $('#category2').hide();
                    $('#category_block').hide();
                    
                } else if ((arg == 'Flat') && (phase == 'Phase-2') ){
                    $('#category').hide();
                    $('#category2').hide();
                } else {
                    $('#category').show();
                    $('#category2').show();
                }



                if (arg == 0)
                {
                    var selptr = document.getElementById('selcat');
                    selptr.length = 0;
                    var opt = document.createElement('option');
                    opt.value = 0;
                    opt.text = "--Select--";
                }
                var pid = document.getElementById('project_select').value;

                var blname = document.getElementById('block_selectsss').value;
                var m = document.getElementById('unittype').value;

                var typename = document.getElementById('unittype').value;
                
                
                 $.ajax({

            type: "POST",
                    url: "<?php echo site_url('Pre_sales/getphase1flatblock'); ?>",
                    data: {pid:pid, block:blname,typename:typename},
                    success: function (msg) {
                  //  alert(msg);
                    var msgarray = msg.split(',');
                    var selptr = document.getElementById('flat_block');
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

                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('Pre_sales/getcategoryy'); ?>",
                    data: {typeid: typeid},
                    success: function (msg) {
                        //alert('msg');
                        var msgarray = msg.split(',');
                        var selptr = document.getElementById('selcat');
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
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('Pre_sales/getfootmtrlist'); ?>",
                    data: {typeid: typeid, pid: pid},
                    success: function (msg) {
                        // alert(msg);
                        var msgarray = msg.split(',');
                        var selptr = document.getElementById('plot_size_mtr');
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
                if (arg == 'Shop') {
                  //  alert(typeid + pid + 'joy');

                    $.ajax({
                        type: "POST",
                        url: "<?php echo site_url('Pre_sales/getunit_no_shopavailable3'); ?>",
                        data: {typeid: typeid, pid: pid},
                        success: function (msg) {
                            //  alert(msg);
                            if (msg == 0)
                            {
                                alert("no property kindly find another project");
                                // document.getElementById("submit").disabled = true;
                                document.getElementById("unit_no2").length = 0;
                            } else
                            {
                                var msgarray = msg.split(',');
                                var selptr = document.getElementById('unit_no2');
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

                            }//end of else
                        }
                    });
                } else {

                }


                if (m.options[m.selectedIndex].text == 'Other')
                {
                    document.getElementById('plot_size_mtr1').style.display = "none";
                    document.getElementById('plot_size_ft1').style.display = "none";
                    document.getElementById('tex1').style.display = "block";
                } else {

                    document.getElementById('plot_size_mtr1').style.display = "block";
                    document.getElementById('plot_size_ft1').style.display = "block";
                    document.getElementById('tex1').style.display = "none";
                }
            }
            
                     function show_flat_type()
            {
             var pid = document.getElementById('project_select').value;

                var block = document.getElementById('block_selectsss').value;
                var unit_type = document.getElementById('unittype').value;
            var category = document.getElementById('flat_block').value;
           // alert(pid + unit_type + block + category);

          $.ajax({
            type: "POST",
                    url: "<?php echo site_url('Pre_sales/getphase1flattype'); ?>",
                    data: {pid:pid, block:block, unit_type:unit_type, category:category},
                    success: function (msg) {
                    //alert('hello');
                    var msgarray = msg.split(',');
                    var selptr = document.getElementById('flat_type');
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
            
            function show_flat_phase1_ft_mt()
            {
                  var pid = document.getElementById('project_select').value;

                var block = document.getElementById('block_selectsss').value;
                var unit_type = document.getElementById('unittype').value;
            var category = document.getElementById('flat_block').value;
            var flat_type = document.getElementById('flat_type').value;
            
         //   alert(pid + unit_type + block + category + flat_type);
         
              $.ajax({
            type: "POST",
                    url: "<?php echo site_url('Pre_sales/getphase1flatfloor'); ?>",
                    data: {pid:pid, block:block, unit_type:unit_type, category:category ,flat_type:flat_type},
                    success: function (msg) {
                   // alert(msg);
                    var msgarray = msg.split(',');
                    var selptr = document.getElementById('flat_floork');
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
            
            function show_flat_phase1_unit_no(){
              var pid = document.getElementById('project_select').value;

                var block = document.getElementById('block_selectsss').value;
                var unit_type = document.getElementById('unittype').value;
            var category = document.getElementById('flat_block').value;
            var flat_type = document.getElementById('flat_type').value;
            var floor = document.getElementById('flat_floork').value;
            
             //alert(pid + unit_type + block + category + flat_type + floor);
             
              $.ajax({
            type: "POST",
                    url: "<?php echo site_url('Pre_sales/getphase1flatfloor_unit_no'); ?>",
                    data: {pid:pid, block:block, unit_type:unit_type, category:category ,flat_type:flat_type,floor:floor},
                    success: function (msg) {
                   // alert(msg);
                    var msgarray = msg.split(',');
                    var selptr = document.getElementById('unit_no_flat');
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
            
            function plotsizeft()
            {
                document.getElementById('unit_no2').value = 0
                document.getElementById('selcat').value = 0
                var pid = document.getElementById('project_select').value;

                var plot_size_mtr = $('#plot_size_mtr').val();
                //  alert(plot_size_mtr);document.getElementById("submit").disabled = true;
                var unittype = $('#unittype').val();
                var block = document.getElementById('block_selectsss').value;

                $.ajax({
                    type: "POST",
                    //neew code
                    url: "<?php echo site_url('Pre_sales/getplotdetail'); ?>",
                    data: {unittype: unittype, pid: pid, block: block, plot_size_mtr: plot_size_mtr},
                    success: function (msg) {
                        //  alert(msg);
                        //alert('ldjslaf');
                        var msgarray = msg.split(',');
                        var selectptr = document.getElementById('plot_size_ft');
                        document.getElementById('plot_size_ft').value = msgarray[0].trim();
                        var aa = document.getElementById('plot_size_ft').value;
                        if (aa == '')
                        {
                            //document.getElementById('submit').disabled = true;
                        } else if (document.getElementById('unit_no2').value == 0)
                        {
                            //document.getElementById('submit').disabled = true;
                        } else
                        {
                            //document.getElementById('submit').disabled = false;
                        }
                    }
                });
            }

            function btnenable()
            {
                var plotft = document.getElementById('plot_size_ft').value;
                var aa = document.getElementById('unit_no2').value;
                if (document.getElementById('unit_no2').value == 0)
                {
                    //document.getElementById('submit').disabled = true;
                } else if (aa == '')
                {
                    //document.getElementById('submit').disabled = true;
                } else if (plotft == '')
                {
                    //document.getElementById('submit').disabled = true;
                } else
                {
                    document.getElementById('submit').disabled = false;
                }
            }

            function show_unit()
            {
                var pid = document.getElementById('project_select').value;
                var block = document.getElementById('block_selectsss').value;
                var unittype = document.getElementById('unittype').value;
                var cat = document.getElementById('selcat').value;
                var plot_size_mtr = document.getElementById('plot_size_mtr').value;
                var plot_size_ft = document.getElementById('plot_size_ft').value;
                if (unittype == 'Other')
                {
                    $.ajax({
                        type: "POST",
                        url: "<?php echo site_url('Pre_sales/getunit_no_available3'); ?>",
                        data: {pid: pid, block: block, unittype: unittype, cat: cat},
                        success: function (msg) {

                            if (msg == 0)
                            {
                                alert("no property kindly find another project");
                                document.getElementById("submit").disabled = true;
                                document.getElementById("unit_no2").length = 0;
                            } else
                            {

                                var msgarray = msg.split(',');
                                var selptr = document.getElementById('unit_no2');
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

                            }//end of else
                        }
                    });
                } else {
                    $.ajax({
                        type: "POST",
                        url: "<?php echo site_url('Pre_sales/getunit_no_available'); ?>",
                        data: {pid: pid, block: block, unittype: unittype, cat: cat, plot_size_mtr: plot_size_mtr, plot_size_ft: plot_size_ft},

                        success: function (msg) {
                            // alert(msg);          
                            if (msg == 0)
                            {
                                alert("no property kindly find another project");
                                // document.getElementById("submit").disabled = true;
                                document.getElementById("unit_no2").length = 0;
                            } else
                            {
                                var msgarray = msg.split(',');
                                var selptr = document.getElementById('unit_no2');
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

                            }//end of else
                        }
                    });
                }
            }
        </script>
        <style>
            .status{
                color: red;
            }
            .col-xs-5 > .form-control{
                background: #fff;
            }
            body{
                font-family: Titillium web !important;
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
                <?php $login_user_id = $this->session->userdata('user_id'); ?>
<?php if ($this->session->flashdata('message')) { ?>
                    <div class="alert alert-success">      
                        <button data-dismiss="alert" class="close" type="button">
                            <span aria-hidden="true">x</span><span class="sr-only">Close</span></button>

                    <?php echo $this->session->flashdata('message') ?>
                    </div>
<?php } ?>

                <div class="alert alert-danger fadeout" id="exists" style="display: none;">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
                    <strong>Failed!</strong> Project Detail Already Exists. Try another combination.
                </div>

                <div class="panel panel-primary">
                    <div class="panel-heading"><h4>Add Prospect</h4>
                        <input action="action" onclick="window.history.go(-1);
                                return false;" type="button" value="Back" class="btn btn-primary pull-right clickable" style="    margin-top: -34px;" />
                    </div>
                    <div class="panel-body">
                        <form action="<?php echo site_url('Pre_sales/open_sheetno1'); ?>" method="post"  name="Form" autocomplete="off" onsubmit="return validateForm()">

                            <?php
                            foreach ($this->Pre_sales_model->get_max_id_prospect() as $row) {
                                ?>
                                <?php $max = $row->id ?>
                                <?php $max_id = $max + 1; ?>
<?php } ?>
                            <input type='hidden' value='<?php echo $login_user_id; ?>' name='login_id'/>
                            <input type="hidden" name="prospect_id" value="<?php echo $max_id; ?>" />
                            <input type="hidden" name="status" value="HOLD" />

                            <div class="form-group">

                                <div class="col-xs-2"><label for="name"> Name:</label></div>
                                <div class="col-xs-5 col-xs-offset-0">
                                    <input type="text" value="" id="txt_firstCapital" placeholder="first name Last name" name="name" class="form-control text-capitalize" onkeyup = "Validate(this)" required>
                                </div>
                            </div>
                            <br clear="ALL"/> <br clear="ALL"/>
                            <div class="form-group">
                                <div class="col-xs-2"><label for="mobile"> Mobile No.:</label></div>
                                <div class="col-xs-5 col-xs-offset-0">
                                    <input type="text" name="mobile"  maxlength="10"  pattern="[789][0-9]{9}" placeholder="contact number" class="form-control" onchange="mobile_validate(this.value);" required>
                                    <label class="status" id="statusmobile"></label>
                                </div>
                            </div>
                            <br clear="ALL"/>
                            <div class="form-group" >
                                <div class="col-xs-2"><label for="Email"> E-mail:</label></div>
                                <div class="col-xs-5 col-xs-offset-0">
                                    <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"  name="email" placeholder="E-mail" class="form-control" />
                                    <label class="status" id="statusmobile"></label>
                                </div>
                            </div>
                            <br clear="ALL"/>
                            <div class="form-group">
                                <div class="col-xs-2"><label for="Address">Address:</label></div>
                                <div class="col-xs-5 col-xs-offset-0">
                                    <textarea name="address" rows="3" width="100%" placeholder="Address" class="form-control"></textarea>
                                    <label class="status" id="statusmobile"></label>
                                </div>
                            </div>

                            <br clear="ALL"/>



                            <div class="form-group">
                                <div class="col-xs-2"><label for="project_id">Project Name:</label></div>
                                <div class="col-xs-5 col-xs-offset-0">
                                    <select class="form-control"  id="project_select" name="project_select" onchange="showblockss2(this.value)"  required> 
                                        <option value="selectproject">--Select--</option>      
                                        <?php
                                        foreach ($this->Pre_sales_model->project_tbl() as $w) {
                                            ?>
                                            <option  value="<?php echo $w->id; ?>"><?php echo $w->project_name . ' ' . $w->block; ?><?php ?></option>  
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div><br clear="ALL"/>
                            <input type="hidden" id="p_name" name="project_name"><br clear="ALL"/>
                            <div id="phasediv" class="form-group">
                                <div class="col-xs-2"><label for="block_selectsss">Phase:</label></div>
                                <div class="col-xs-5 col-xs-offset-0">
                                    <select class="form-control" id="block_selectsss" name="block_select" required> 
                                        <option>--Select--</option> 
                                    </select>
                                </div>
                            </div><!--br clear="ALL"/><br clear="ALL"/-->
                            <div class="form-group">
                                <div class="col-xs-2"><label for="unittype">Unit-Type:</label></div>
                                <div class="col-xs-5 col-xs-offset-0">
                                    <select class="form-control" id="unittype" onchange="getcategory(this.value);" name="unittype_select" required> 
                                        <option value='0'>--Select--</option>      
                                    
                                        
                                    </select>
                                </div>
                            </div>
                            <br clear="ALL"/><br clear="ALL"/>
                            
                            <div id="show_flat_block" style="display:none;">
                                <div class="form-group">
                                    <div class="col-md-2"><label for="caty">Block:</label></div>
                                    <div class="col-md-6 col-md-offset-0">
                                        <select class="form-control" name="flat_block" id="flat_block" onchange="show_flat_type(this.value);"> 
                                            <option>--Select--</option>

                                        </select>
                                    </div>
                                </div> <br clear="ALL"/><br clear="ALL"/>
                            </div>
                            
                                              <div id="flat_floor" style="display: none;">

                                <div id="phase_1_Flat_type"  style="display: none;">
                                    <div class="form-group">
                                        <div class="col-md-2"><label for="flat_type">Flat Type:</label></div>
                                        <div class="col-md-6 col-md-offset-0">
                                            <select class="form-control" id="flat_type" name="flat_type" onchange="show_flat_phase1_ft_mt(this.value);"> 
                                                <option>--Select--</option>    


                                            </select>
                                        </div>
                                        
                                    </div><br clear="ALL"/><br clear="ALL"/>

                                </div>

                                <div class="form-group">
                                    <div class="col-md-2"><label for="floor">Floor:</label></div>
                                    <div class="col-md-6 col-md-offset-0">
                                        <select class="form-control" name="floor" id="flat_floork"  onchange="show_flat_phase1_unit_no(this.value);"> 
                                            <option>----Select----</option>
                                            
                                        </select>
                                    </div>
                                   
                                </div> <br clear="ALL"/><br clear="ALL"/>
                                <div class="form-group">
                                    <div class="col-md-2"><label for="floor">Unit No:</label></div>
                                    <div class="col-md-6 col-md-offset-0">
                                        <select class="form-control" name="unit_no_flat" id="unit_no_flat"> 
                                            <option>----Select----</option>
                                            
                                        </select>
                                    </div>
                                   
                                </div> <br clear="ALL"/><br clear="ALL"/>
                                
                            </div>



                            <div id="category">
                                <div class="form-group" id="plot_size_mtr1" style="display: block;">
                                    <div class="col-xs-2"><label for="plot_size_mtr">Plot Size(Mtr):</label></div>
                                    <div class="col-xs-5 col-xs-offset-0">
                                        <select class="form-control" id="plot_size_mtr" name="plot_size_mtr" onchange="plotsizeft(this.value);" required> 
                                            <option>--Select--</option> 
                                        </select>
                                    </div>
                                </div>
                            </div><br clear="ALL"/><br clear="ALL"/>
                            <div id="category2">
                                <div class="form-group" id="plot_size_ft1" style="display: block;">
                                    <div class="col-xs-2"><label for="plot_size_ft">Plot Size(Ft):</label></div>
                                    <div class="col-xs-5 col-xs-offset-0">
                                        <!-- <select class="form-control" id="plot_size_ftss" name="plot_size_ftss" > 

                                        </select>-->

                                        <input class="form-control" id="plot_size_ft" name="plot_size_ft" required readonly />
                                    </div>
                                </div>
                            </div><br clear="ALL"/><br clear="ALL"/>

                            <div id="category_block">
                                <div class="form-group" id="selcat1" style="display: block;">
                                    <div class="col-xs-2"><label for="selcat">Block:</label></div>
                                    <div class="col-xs-5 col-xs-offset-0">
                                        <select class="form-control" id="selcat" name="category_select" onchange="show_unit()" required> 
                                            <option>--Select--</option> 
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <br clear="ALL"/><br clear="ALL"/>


                            <div id="unit_no1">
                                <div class="form-group" id="unit_no" style="display: block;">
                                    <div class="col-xs-2"><label for="unit_no">Unit No:</label></div>
                                    <div class="col-xs-5 col-xs-offset-0">
                                        <select class="form-control" id="unit_no2" name="unit_no2" onchange="btnenable();" required> 
                                            <option>--Select--</option> 
                                        </select>

                                        <!--input class="form-control" id="unit_no" name="unit_no" /-->
                                    </div>
                                </div>
                            </div><br clear="ALL"/><br clear="ALL"/>

                            <div class="row">  
                                <div class="centered">
                                    <button id="submit" name="submit" class="btn btn-success" value="submit" type="submit" >Submit</button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

        <script src="<?php //echo base_url('resources/js/fadeout.js')      ?>" type="text/javascript"></script>

        <script>

                                            // validates text only
                                            function Validate(txt) {
                                                txt.value = txt.value.replace(/[^a-zA-Z-'\n\r.{ }]+/g, '');
                                            }

                                            function buttonenable() {
                                                // alert('helo');
                                                document.getElementById("submit").disabled = false;
                                            }


                                            function show_div() {
                                                // check if project details exist already
                                                //alert('Im here!!');
                                                var pid = $('#project_select').val();
                                                var block = $('#block_selectsss').val();
                                                var m = $('#unittype').val();
                                                //var category = $('#selcat').val();

                                                //var m = document.getElementById('unittype');
                                                // alert('Im here::' + msg);

                                                //alert('Im here::' + msg);
                                                if (m.options[m.selectedIndex].text == 'Other')
                                                {
                                                    document.getElementById('plot_size_mtr1').style.display = "none";
                                                    document.getElementById('plot_size_ft1').style.display = "none";
                                                    //$('#category').css('display', 'block');
                                                    //document.getElementById('duplex_div').style.display = "block";
                                                } else {

                                                    document.getElementById('plot_size_mtr1').style.display = "block";
                                                    document.getElementById('plot_size_ft1').style.display = "block";
                                                }


                                            }

        </script>

        <script LANGUAGE="JavaScript">


            function addChar(input, character) {
                if (input.value == null || input.value == "0")
                    input.value = character
                else
                    input.value += character
            }
            function cos(form) {
                form.display.value = Math.cos(form.display.value);
            }
            function sin(form) {
                form.display.value = Math.sin(form.display.value);
            }
            function tan(form) {
                form.display.value = Math.tan(form.display.value);
            }
            function sqrt(form) {
                form.display.value = Math.sqrt(form.display.value);
            }
            function ln(form) {
                form.display.value = Math.log(form.display.value);
            }
            function exp(form) {
                form.display.value = Math.exp(form.display.value);
            }
            function sqrt(form) {
                form.display.value = Math.sqrt(form.display.value);
            }
            function deleteChar(input) {
                input.value = input.value.substring(0, input.value.length - 1)
            }
            function changeSign(input) {
                substring
                if (input.value.substring(0, 1) == "-")
                    input.value = input.value.substring(1, input.value.length)
                else
                    input.value = "-" + input.value
            }
            function compute(form) {
                form.display.value = eval(form.display.value)
            }
            function square(form) {
                form.display.value = eval(form.display.value) *
                        eval(form.display.value)
            }
            function checkNum(str) {
                for (var i = 0; i < str.length; i++) {
                    var ch = str.substring(i, i + 1)
                    if (ch < "0" || ch > "9") {
                        if (ch != "/" && ch != "*" && ch != "+" && ch !=
                                "-" && ch != "."
                                && ch != "(" && ch != ")") {
                            alert("invalid entry!")
                            return false
                        }
                    }
                }
                return true
            }
// End -->
            jQuery('#txt_firstCapital').keyup(function ()
            {
                var str = jQuery('#txt_firstCapital').val();
                var spart = str.split(" ");
                for (var i = 0; i < spart.length; i++)
                {
                    var j = spart[i].charAt(0).toUpperCase();
                    spart[i] = j + spart[i].substr(1);
                }
                jQuery('#txt_firstCapital').val(spart.join(" "));
            });
        </SCRIPT>


    </body>
</html>
