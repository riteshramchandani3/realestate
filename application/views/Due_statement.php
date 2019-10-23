<!DOCTYPE html>
<!--
Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
Unauthorized copying of this file, via any medium is strictly prohibited
Proprietary and confidential.
Written by Oga Technologies, October 1,  2016.
-->
<html>
    <head>
        <title>Due Statement</title>

        <?php require_once('assets/html_head_links.php'); ?>
        <style>
            #table {
                border-collapse: collapse;
                width: 100%;
                border: 1px solid #ddd;
                font-size: 11px !important;
            }
            .table-fixed tbody {
                height: 350px;
                overflow-x: auto;
                width: 100%;
            }
            .table-fixed thead, .table-fixed tbody, .table-fixed tr, .table-fixed td, .table-fixed th {
                display: block;
            }
            .table-fixed tbody td, .table-fixed thead > tr> th {
                /* float: left; */
                border-bottom-width: 0;
            }
            .table-fixed thead > tr> th {
                background-color: #f1f1f1;
                width: 15.75%;

            }
            .table-fixed tbody > tr> td {
                width: 16%;

            }
            .table-fixed tbody td, .table-fixed thead > tr> th {
                float: left;
                display: block;

            }
            .table-fixed thead > tr> th {
                text-align: center;
                background-color: #337AB7;
                color: #fff;
            }
            .table-fixed tbody td{
                float: left;
                display: block;
                font-weight: bold;
            }
            @media print
            {
                /*@page {size: landscape}*/
                .non-printable { display: none; }
                #printable { display: block;}
                .panel-body{
                    overflow:auto !important; 
                    max-height:100% !important; 
                }
                .panel{
                    width: 100% !important;
                    border: 1px solid #000 !important;
                }

                .table-fixed {
                    border: 1px solid #000 !important;
                }
                .table-fixed > thead > tr > th,
                .table-fixed > tbody > tr > th,
                .table-fixed > tfoot > tr > th,
                .table-fixed > thead > tr > td,
                .table-fixed > tbody > tr > td,
                .table-fixed > tfoot > tr > td {
                    border: 1px solid #000 !important;
                }
                select{
                    font-size: 20px;
                }
                select::-ms-expand {	
                    display: none; 
                }
                .col-xs-1 {
    width: 10.33333%;
}
                select{
                    -webkit-appearance: none;
                    appearance: none;
                    width: auto;
                    border: none !important; 
                    box-shadow: none ;
                    font-size: 20px;

                }

                .phs{
                    width: 216px !important; 
                }
                .phs2{
                    position: absolute;
                    margin-left: 210px;
                    padding-right: 10px;


                }
                .form-control{
                    width: 75% !important; 
                }
                label{
                    position: absolute;
                    top: 5px;
                    left: 40px;
                }


            }
            @page {

                margin: 5mm 5mm 5mm 5mm;
            }
        </style>
    </head>
    <body> 

        <?php
        require_once('assets/top_menu.php');
        require_once('assets/side_menu.php');
        ?>
        <div class="main">
            <!-- Content Here -->
            <div id="printable">
                <div class="container">
                    <div class="row">
                        <div class="panel panel-primary">
                            <div class="panel-heading" >
                                <h4>Due Statement</h4>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-1">
                                        <label for="project_name">Project</label>
                                    </div>
                                    <div class="col-xs-3 phs">
                                        <select class="form-control" name="project_name" id="project_name" onchange='getblocks(this.value);'> 
                                            <option value='0'>--Select--</option>      
                                            <?php
                                            foreach ($this->Dashboard_model->project_dtls() as $w) {
                                                ?>
                                                <option value="<?php echo $w->id; ?>"><?php echo $w->project_name.' '.$w->block; ?></option>  
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-xs-1 non-printable">
                                        <label for="block">Phase:</label>
                                    </div>
                                    <div class="col-xs-2 phs2">
                                        <select class="form-control" id='block_name' name="blocksss" onchange="gettype(this.value);" >
                                            <option value="0">--Select--</option>
                                        </select>
                                        <input type="hidden" id="block_item" name="block">
                                    </div>
                                    <div class="col-xs-1">
                                        <label for="type">Type:</label>
                                    </div>
                                    <div class="col-xs-2">
                                        <select class="form-control" id="unittype" onchange="get15dayssitereport();" name="type" style= "display: block; padding: 2px; margin: 0; width: 100%;">
                                            <option value="0">--Select--</option>
                                        </select>
                                    </div>
                                </div>
                            </div>                                      
                        </div>
                    </div>

                    <div class="row">
                        <div class="panel panel-primary" id="panelsuccess" style="display: none;">
                            <div class="panel-heading"><h4>Due Statement List:</h4></div>
                            <div class="panel-body" style="width:100%;overflow:auto; max-height:500px;">
                                <div class="row" id="tablespace"></div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="panel-body" style="width:100%;overflow:auto; max-height:500px;">
                    <table id="ashwincodetable" class="table table-bordered table-striped" border='2'>

                                    <tr style="background-color: #337ab7;color:#FFF;">

                                        <th style="text-align: center;">  Name </th>
                                        <th style="text-align: center;">  Contact Mobile</th>
                                        <th style="text-align: center;">  Unit No </th>
                                        <th style="text-align: center;">  Stage </th>
                                        <th style="text-align: center;">  Amount</th>
                                        <th style="text-align: center;">  Date </th> 
                                        
                                    </tr>

                                </table>
                    </div>
                    
                    
                </div>
            </div>
        </div>





        <script>
            $(document).ready(function () {
                $('#toppageheader').html('Due Statement<span class="pull-right non-printable">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="print" id="btnprint" value="print" class="btn btn-sm btn-default non-printable" onClick="print_this_doc();">Print&nbsp;&nbsp;<i class="fa fa-print"></i></button></span>');
                $("a:contains(Due Statement)").parent().addClass('active');
            });

            function print_this_doc() {
                window.print();
            }

            function getblocks(arg)
            {
                //alert(arg);
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
                        url: "<?php echo site_url('Dashboard/getprojectblocks'); ?>",
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
                                //alert("|"+msgarray[i]+"|");
                                opt.value = msgarray[i].trim();
                                opt.text = msgarray[i].trim();
                                selectptr.appendChild(opt);
                                document.getElementById("block_name").selectedIndex = "1";
                                $("#block_name").prop('disabled', 'disabled');
                                $("#block_item").val(msgarray[i].trim());
                                var blockname = msgarray[i].trim();
                                gettype(blockname);
                            }
                        }
                    });
                }
            }

            function gettype(arg) {
                //alert('hello');
                if (arg == 0)
                {
                    recvd_data.push([key, val]);
                    var selptr = document.getElementById('unittype');
                    selptr.length = 0;
                    var opt = document.createElement('option');
                    opt.value = 0;
                    opt.text = '--Select--';
                }
                var pid = document.getElementById('project_name').value;
                var blid = arg;
                //alert(pid+"/"+blid);

                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('Dashboard/getprojecttype'); ?>",
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


            function get15dayssitereport() {
                var project_name = $('#project_name').val();
                var block = $('#block_name').val();
                var type = $('#unittype').val();
                $.ajax({
                    type: "POST",
                    dataType:"JSON",
                    url: "<?php echo site_url('Final_calculation/show_all_due') ?>",
                    data: {project_name: project_name, block: block, type: type},
                    success: function (msg) {
                          
                          var q = JSON.stringify(msg);
                          var jsonobj = JSON.parse(q);
                          var tbl = document.getElementById('ashwincodetable');
                          tbl.style.textAlign = 'center';
                    for (var i = 0; i < jsonobj.length; i++)
                    {
                        var tr = document.createElement('tr');

                        var td = document.createElement('td');
                        td.innerHTML = jsonobj[i]['name'];
                        tr.appendChild(td);
                        
                        var td = document.createElement('td');
                        td.innerHTML = jsonobj[i]['contact_mobile'];
                        tr.appendChild(td);
                        
                        var td = document.createElement('td');
                        td.innerHTML = jsonobj[i]['unit_no'];
                        tr.appendChild(td);
                        var td = document.createElement('td');
                        td.innerHTML = jsonobj[i]['stage'];
                        tr.appendChild(td);
                        

                        var td = document.createElement('td');
                        td.innerHTML = jsonobj[i]['amount'];
                        tr.appendChild(td);
                        
                    var td = document.createElement('td');
                        td.innerHTML = jsonobj[i]['date'];
                        tr.appendChild(td);
                        tbl.appendChild(tr);
                    }
                          
                        
                    }

                });
            }


        </script>    
    </body>
</html>