<!DOCTYPE html>
<!--
Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
Unauthorized copying of this file, via any medium is strictly prohibited
Proprietary and confidential.
Written by Oga Technologies, October 1,  2016.
-->
<html>
    <head>
        <title>Insert Site Report Details</title>
        <?php
        require_once('assets/html_head_links.php');
        ?>
    </head>
    <body>
        <?php require_once ('assets/top_menu.php'); ?>
        <?php require_once ('assets/side_menu.php'); ?>
        <div class="main">
            <?php
            $id = $this->input->get('id');
            $explode_data = explode('?', $id);
            $idr = $explode_data[0];
            $name = $explode_data[1];
            $unit_no = $explode_data[2];
            $type = $explode_data[3];
            $project_name = $explode_data[4];
            $block = $explode_data[5];
            $pid = $explode_data[6];
            ?>
            <div class="container">
                <?php
                if (isset($msg)) {
                    ?>
                    <div class="alert alert-success">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
                        <strong>Success!</strong> Details Inserted.
                    </div>
                    <?php
                } elseif (isset($failure)) {
                    ?>
                    <div class="alert alert-danger">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
                        <strong>Failed!</strong> Details Insertion.
                    </div>
                    <?php
                } else {
                    
                }
                ?>
                <form action="<?php echo site_url('Payment/payment_stage_Inp'); ?>" method="post">
                    <div class="panel panel-default">
                        <div class="panel-heading">Add Site Details</div>
                        <div class="panel-body">
                            <input type="hidden" name="appl_id" value="<?php echo $idr; ?>" >
                            <div class="form-group">
                                <div class="col-md-2"><label for="appl_name">Name:</label></div>
                                <div class="col-md-5 col-md-offset-0">
                                    <input type="text" class="form-control" name="appl_name" value="<?php echo $name; ?>" style="font-family:Arial, FontAwesome"   required> 
                                </div>
                            </div><br clear="ALL"/><br clear="ALL"/>
                            <div class="form-group">
                                <div class="col-md-2"><label for="unit_no">Unit:</label></div>
                                <div class="col-md-5 col-md-offset-0">
                                    <input type="text" class="form-control" name="unit_no" value="<?php echo $unit_no; ?>" style="font-family:Arial, FontAwesome"   required> 
                                </div>
                            </div><br clear="ALL"/><br clear="ALL"/>
                            <div class="form-group">
                                <div class="col-md-2"><label for="type">Type:</label></div>
                                <div class="col-md-5 col-md-offset-0">
                                    <input type="text" class="form-control" name="type" value="<?php echo $type; ?>" style="font-family:Arial, FontAwesome"   required> 
                                </div>
                            </div><br clear="ALL"/><br clear="ALL"/>

                            <div class="form-group">
                                <div class="col-md-2"><label for="project_name">Project Name:</label></div>
                                <div class="col-md-5 col-md-offset-0">
                                    <input type="text" class="form-control" name="project_name" value="<?php echo $project_name; ?>" style="font-family:Arial, FontAwesome"   required> 
                                </div>
                            </div><br clear="ALL"/><br clear="ALL"/>
                            <input type="hidden" name="project_id" value="<?php echo $pid; ?>" >
                            <div class="form-group">
                                <div class="col-md-2"><label for="block">Block:</label></div>
                                <div class="col-md-5 col-md-offset-0">
                                    <input type="text" class="form-control" name="block" value="<?php echo $block; ?>" style="font-family:Arial, FontAwesome"   required> 
                                </div>
                            </div><br clear="ALL"/><br clear="ALL"/>

                            <div class="form-group">
                                <div class="col-md-2"><label for="stages">Stage:</label></div>
                                <div class="col-md-5 col-md-offset-0">
                                    <select class="form-control"  id="stage_select" name="stages"> 
                                        <option value='0'>--Select--</option>      
                                        <?php
                                        foreach ($this->Payment_model->site_report_table() as $w) {
                                            ?>
                                            <option value="<?php echo $w->stage; ?>"><?php echo $w->stage; ?><?php ?></option>  
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div><br clear="ALL"/><br clear="ALL"/>

                            <div class="form-group">
                                <div class="col-md-2"><label for="amount">Amount:</label></div>
                                <div class="col-md-5 col-md-offset-0">
                                    <input type="text" class="form-control" name="amount" style="font-family:Arial, FontAwesome" > 
                                </div>
                            </div><br clear="ALL"/>

                            <br clear="ALL"/>



                            <div class="form-group">
                                <div class="col-md-2"><label for="current_date">Date:</label></div>
                                <div class="col-md-5 col-md-offset-0">
                                    <input type="date" class="form-control" name="current_date" id="txtDate" type="text" />
                                </div>
                            </div>
                            <br clear="ALL"/>
                                
                               <br clear="ALL"/>
                            <div class="form-group">
                                <div class="col-md-2"><label for=""></label></div>
                                <div class="col-md-5 col-md-offset-0">
                                    <input type="button" class="form-control" onclick="getdate()" value="Fill Follow Date" />
                                </div>
                            </div>
                         
                            <br clear="ALL"/>
                            <br clear="ALL"/>
                            <div class="form-group">
                                <div class="col-md-2"><label for="due_date">Due-Date:</label></div>
                                <div class="col-md-5 col-md-offset-0">
                                    <input  name="due_date" class="form-control"  id="follow_Date" type="text" />
                                </div>
                            </div>
                          
                             
                            <br clear="ALL"/>
                            <div class="row">  
                                <div class="col-md-5">
                                    <div class="pull-right">

                                        <button id="submit" name="submit" class="btn btn-success" value="submit" type="submit">Submit</button>
                                        <button id="cancel" name="cancel" class="btn btn-default">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <script>
            
                $(document).ready(function () {
                $('#toppageheader').html('Payment Stages');
                $("a:contains(Invoices & Payments)").parent().addClass('active');
            });
            
            $(document).ready(function () {
                $('#toppageheader').html('Project Details');
            });

            function showblockss(arg)
            {
                //alert(arg);
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('Payment/getpaymentblock'); ?>",
                    data: {arg: arg},
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
                        }
                    }
                });
            }
       
            $(document).ready(function () {
                $('#txtDate').datepicker();
                $('#follow_Date').datepicker();
            });

            function getdate() {
                var tt = document.getElementById('txtDate').value;

                var date = new Date(tt);
                var newdate = new Date(date);

                newdate.setDate(newdate.getDate() + 3);

                var dd = newdate.getDate();
                var mm = newdate.getMonth() + 1;
                var y = newdate.getFullYear();

                var someFormattedDate = mm + '/' + dd + '/' + y;
                document.getElementById('follow_Date').value = someFormattedDate;
            }
        </script>

    </body>
</html>
