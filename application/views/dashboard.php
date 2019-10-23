<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard</title>
        <?php
        include_once('assets/html_head_links.php');
        ?>
        <style>
            .nav-tabs > li > a{
                color: #fff !important;

            }
            .nav-tabs > li.active > a{
                color: #fff !important;
                background-color: #337AB7 !important;
            }
            .nav-tabs > li >  a:hover{
                color: #fff !important;
                background-color: #337AB7 !important;
            }
            .panel.with-nav-tabs .panel-heading{
                padding: 5px 5px 0 5px;
            }
            .panel.with-nav-tabs .nav-tabs{
                border-bottom: none;
            }
            .panel.with-nav-tabs .nav-justified{
                margin-bottom: -1px;
            }
            /********************************************************************/
            /*** PANEL DEFAULT ***/
            .with-nav-tabs.panel-default .nav-tabs > li > a,
            .with-nav-tabs.panel-default .nav-tabs > li > a:hover,
            .with-nav-tabs.panel-default .nav-tabs > li > a:focus {
                color: #777;
            }
            .with-nav-tabs.panel-default .nav-tabs > .open > a,
            .with-nav-tabs.panel-default .nav-tabs > .open > a:hover,
            .with-nav-tabs.panel-default .nav-tabs > .open > a:focus,
            .with-nav-tabs.panel-default .nav-tabs > li > a:hover,
            .with-nav-tabs.panel-default .nav-tabs > li > a:focus {
                color: #777;
                background-color: #ddd;
                border-color: transparent;
            }
            .with-nav-tabs.panel-default .nav-tabs > li.active > a,
            .with-nav-tabs.panel-default .nav-tabs > li.active > a:hover,
            .with-nav-tabs.panel-default .nav-tabs > li.active > a:focus {
                color: #555;
                background-color: #fff;
                border-color: #ddd;
                border-bottom-color: transparent;
            }
            .with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu {
                background-color: #f5f5f5;
                border-color: #ddd;
            }
            .with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > li > a {
                color: #777;   
            }
            .with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > li > a:hover,
            .with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > li > a:focus {
                background-color: #ddd;
            }
            .with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > .active > a,
            .with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > .active > a:hover,
            .with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > .active > a:focus {
                color: #fff;
                background-color: #555;
            }

            /* tb css end */


            .panel-blue {
                border-color: #007BFF;
            }
            .panel-blue > .panel-heading {
                border-color: #007BFF;
                color: #fff;
                background-color: #007BFF;
            }
            .panel-yellow {
                border-color: #F5B041;
            }
            .panel-yellow > .panel-heading {
                border-color: #F5B041;
                color: #fff;
                background-color: #F5B041;
            }
            .panel-red {
                border-color: #26A142;
            }
            .panel-red > .panel-heading {
                border-color: #26A142;
                color: #fff;
                background-color: #26A142;
            }
            .panel-violet {
                border-color: #8E44AD;
            }
            .panel-violet > .panel-heading {
                border-color: #8E44AD;
                color: #fff;
                background-color: #8E44AD;
            }
            .carousel-caption {
                top: 0;
                bottom: auto;
                color:#000;
            }
            .carousel-control.right{ background-color: none !important; background-image:none !important; color: #ccc;}
            .carousel-control.left{ background-color: none !important; background-image:none !important; color: #ccc;}


            #chart_div3
            {
                min-height: 250px;
            }
            .panelheading{
                padding: 15px;
            }
            .panel-primary {
                box-shadow: none;
            }

            .panel-primary {
                border-color: #fff;
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
                <div class="panel with-nav-tabs panel-primary">
                    <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active"><a class= "btn-primary" data-toggle="tab" href="#official_report"><i class="fa fa-opera"></i>  Overview</a></li>
                            <li><a class= "btn-primary" data-toggle="tab" href="#fortnightly_report"><i class="fa fa-bar-chart-o"></i> Overall Project Report</a></li>
                            <li><a class= "btn-primary" data-toggle="tab" href="#booking_status"><i class="fa fa-address-book-o "></i> Booking Status</a></li>
                        </ul>
                    </div>

                    <div class="tab-content">
                        <div id="official_report" class="tab-pane fade in active">                 
                            <div class="row" style="margin-top: 20px;margin-right:  0px;margin-left:  0px;">
                                <div class="col-lg-3 col-md-3">
                                    <div class="panel panel-violet">
                                        <div class="panel-heading">
                                            <div class="row panelheading">
                                                <div class="col-xs-3">
                                                    <i class="fa fa-inr fa-2x" aria-hidden="true"></i>
                                                </div>
                                                <div class="col-xs-9 text-right">
                                                    <?php
                                                    foreach ($this->Dashboard_model->total_sale_value() as $row) {
                                                        ?><?php $number = $row['sum(cost_payable_to_company)']; ?>
                                                    <?php } ?>
                                                    <?php

                                                    function count_digit($number) {
                                                        return strlen($number);
                                                    }

                                                    function divider($number_of_digits) {
                                                        $tens = "1";

                                                        if ($number_of_digits > 8)
                                                            return 10000000;

                                                        while (($number_of_digits - 1) > 0) {
                                                            $tens .= "0";
                                                            $number_of_digits--;
                                                        }
                                                        return $tens;
                                                    }

//function call
                                                    $num = $number;
                                                    $ext = ""; //thousand,lac, crore
                                                    $number_of_digits = count_digit($num); //this is call :)
                                                    if ($number_of_digits > 3) {
                                                        if ($number_of_digits % 2 != 0)
                                                            $divider = divider($number_of_digits - 1);
                                                        else
                                                            $divider = divider($number_of_digits);
                                                    } else
                                                        $divider = 1;

                                                    $fraction = $num / $divider;
                                                    $fraction = number_format($fraction, 2);
                                                    if ($number_of_digits == 4 || $number_of_digits == 5)
                                                        $ext = "k";
                                                    if ($number_of_digits == 6 || $number_of_digits == 7)
                                                        $ext = "Lac";
                                                    if ($number_of_digits >= 8)
                                                        $ext = "Cr";
                                                    $fraction . " " . $ext;
                                                    ?>

                                                    <div class="huge"><strong><span style="font-size:24px;"><?php echo $fraction . " " . $ext; ?>  </span></strong></div>
                                                    <div>Total Revenue</div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="panel panel-blue">
                                        <div class="panel-heading">
                                            <div class="row panelheading">
                                                <div class="col-xs-3">
                                                    <i class="fa fa-building-o fa-2x" aria-hidden="true"></i>
                                                </div>
                                                <div class="col-xs-9 text-right">
                                                    <?php
                                                    foreach ($this->Dashboard_model->total_sale_unit() as $row) {
                                                        ?> 
                                                        <div class="huge"><strong><span style="font-size:24px;"><?php echo $row->count; ?></span></strong></div>
                                                    <?php } ?>
                                                    <div>Total Booked Units</div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="panel panel-yellow">
                                        <div class="panel-heading">
                                            <div class="row panelheading">
                                                <div class="col-xs-3">
                                                    <i class="fa fa-crosshairs fa-2x" aria-hidden="true"></i>

                                                </div>
                                                <div class="col-xs-9 text-right">

                                                    <?php
                                                    $sql = "select * from demand_letter_tbl  ";
                                                    //  print_r($sql);
                                                    $this->db->query($sql);

                                                    if ($this->db->affected_rows() > 0) {
                                                        //true
                                                        ?>
                                                        <?php
                                                        foreach ($this->Dashboard_model->total_demand() as $row) {
                                                            ?>
                                                            <?php $numb = $row['sum(amount1)']; ?>
                                                            <?php

                                                            function count_digit_numb($numb) {
                                                                return strlen($numb);
                                                            }

                                                            function divid_er($number_of_digits) {
                                                                $tens = "1";

                                                                if ($number_of_digits > 8)
                                                                    return 10000000;

                                                                while (($number_of_digits - 1) > 0) {
                                                                    $tens .= "0";
                                                                    $number_of_digits--;
                                                                }
                                                                return $tens;
                                                            }

//function call
                                                            $num = $numb;
                                                            $ext = ""; //thousand,lac, crore
                                                            $number_of_digits = count_digit_numb($num); //this is call :)
                                                            if ($number_of_digits > 3) {
                                                                if ($number_of_digits % 2 != 0)
                                                                    $divider = divider($number_of_digits - 1);
                                                                else
                                                                    $divider = divider($number_of_digits);
                                                            } else
                                                                $divider = 1;

                                                            $fract_ion = $num / $divider;
                                                            $fract_ion = number_format($fract_ion, 2);
                                                            if ($number_of_digits == 4 || $number_of_digits == 5)
                                                                $ext2 = "k";
                                                            if ($number_of_digits == 6 || $number_of_digits == 7)
                                                                $ext2 = "Lac";
                                                            if ($number_of_digits >= 8)
                                                                $ext2 = "Cr";
                                                            $fract_ion . " " . $ext2;
                                                            ?>
                                                            <div class="huge"><strong><span style="font-size:24px;"><?php echo $fract_ion . " " . $ext2; ?> </span></strong></div>
                                                        <?php } ?>
                                                    <?php }else { ?>


                                                    <?php } ?>



                                                    <div>Total Demand</div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="panel panel-red">
                                        <div class="panel-heading">
                                            <div class="row panelheading">
                                                <div class="col-xs-3">
                                                    <i class="fa fa-money fa-2x" aria-hidden="true"></i>

                                                </div>
                                                <div class="col-xs-9 text-right">
                                                    <?php
                                                    $sql = "select * from payment_receipt  ";
                                                    //  print_r($sql);
                                                    $this->db->query($sql);

                                                    if ($this->db->affected_rows() > 0) {
                                                        //true
                                                        ?>
                                                        <?php
                                                        foreach ($this->Dashboard_model->total_payment() as $row) {
                                                            ?> 
                                                            <?php $numb1 = $row['sum(advance)']; ?>
                                                        <?php } ?>
                                                        <?php

                                                        function count_digitnumb($numb1) {
                                                            return strlen($numb1);
                                                        }

                                                        function divi_der($number_of_digits) {
                                                            $tens = "1";

                                                            if ($number_of_digits > 8)
                                                                return 10000000;

                                                            while (($number_of_digits - 1) > 0) {
                                                                $tens .= "0";
                                                                $number_of_digits--;
                                                            }
                                                            return $tens;
                                                        }

//function call
                                                        $num = $numb1;
                                                        $ext = ""; //thousand,lac, crore
                                                        $number_of_digits = count_digitnumb($num); //this is call :)
                                                        if ($number_of_digits > 3) {
                                                            if ($number_of_digits % 2 != 0)
                                                                $divider = divider($number_of_digits - 1);
                                                            else
                                                                $divider = divider($number_of_digits);
                                                        } else
                                                            $divider = 1;

                                                        $frac_tion = $num / $divider;
                                                        $fract_ion = number_format($frac_tion, 2);
                                                        if ($number_of_digits == 4 || $number_of_digits == 5)
                                                            $ext3 = "k";
                                                        if ($number_of_digits == 6 || $number_of_digits == 7)
                                                            $ext3 = "Lac";
                                                        if ($number_of_digits >= 8)
                                                            $ext3 = "Cr";
                                                        $frac_tion . " " . $ext3;
                                                        ?>

                                                        <div class="huge"><strong><span style="font-size:24px;"><?php
                                                                    echo round($frac_tion, 2) . " " . $ext3;
                                                                    ;
                                                                    ?></span></strong></div>
                                                    <?php }else { ?>


                                                    <?php } ?>
                                                    <div>Total Payments</div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false"  >
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                    </ol>

                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox" >
                                        <div class="item active">
                                            <div class="carousel-caption">
                                                <h3>Monthly Booking Trend</h3>
                                            </div>
                                            <div id="chart_div3"></div>
                                        </div>
                                        <div class="item">
                                            <div class="carousel-caption">
                                                <h3>Available Vs Booked</h3>
                                            </div>
                                            <div id="chart_div11"></div>
                                        </div>
                                        ...
                                    </div>

                                    <!-- Controls -->
                                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div id="fortnightly_report" class="tab-pane fade">
                            <br><br>
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="panel panel-info">
                                        <div class="panel-heading" >
                                            <h4><i class="fa fa-bar-chart-o"></i> Overall Project Report</h4>
                                        </div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <label for="project_name">Project :</label>
                                                </div>
                                                <div class="col-md-3">

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
                                                <div class="col-md-1">
                                                    <label for="block">Phase:</label>
                                                </div>
                                                <div class="col-md-2">
                                                    <select class="form-control" id='block_name' name="blocksss" onchange="gettype(this.value);" >
                                                        <option value="0">--Select--</option>
                                                    </select>
                                                    <input type="hidden" id="block_unit" name="block">
                                                </div>
                                                <div class="col-md-1">
                                                    <label for="type">Type:</label>
                                                </div>
                                                <div class="col-md-2">
                                                    <select class="form-control" id="unittype" onchange="get15dayssitereport();" name="type" style= "display: block; padding: 2px; margin: 0; border: 0; width: 100%; border-radius: 0px;">

                                                        <option value="0">--Select--</option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="chart_div5" style="min-height: 500px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="booking_status" class="tab-pane fade">
                            <br><br>
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="panel panel-info">
                                        <div class="panel-heading" >
                                            <h4><i class="fa fa-address-book-o"></i> Booking Status</h4>
                                        </div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <label for="project_name">Project :</label>
                                                </div>
                                                <div class="col-md-3">

                                                    <select class="form-control" name="project_name" id="project_name2" onchange='getblocksforbooking(this.value);'> 
                                                        <option value='0'>--Select--</option>      
                                                        <?php
                                                        foreach ($this->Dashboard_model->project_dtls() as $w) {
                                                            ?>
                                                            <option value="<?php echo $w->id; ?>"><?php echo $w->project_name." ".$w->block; ?></option>  
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="col-md-1">
                                                    <label for="block">Phase:</label>
                                                </div>
                                                <div class="col-md-2">
                                                    <select class="form-control" id='block_name2' name="block" onchange="gettypeforbooking(this.value);" >
                                                        <option value="0">--Select--</option>
                                                    </select>
                                                   
                                                </div>
                                                <div class="col-md-1">
                                                    <label for="type">Type:</label>
                                                </div>
                                                <div class="col-md-2">
                                                    <select class="form-control" id="unittype2" onchange="getbookingstatus();" name="type" style= "display: block; padding: 2px; margin: 0; border: 0; width: 100%; border-radius: 0px;">

                                                        <option value="0">--Select--</option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="chart_div6" style="min-height: 500px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="<?php echo base_url('resources/js/loader.js'); ?>" type="text/javascript"></script>

        <script type="text/javascript">

                                                        //1// Load the Visualization API and the piechart package. 
                                                        google.charts.load('current', {'packages': ['corechart']});

                                                        // Set a callback to run when the Google Visualization API is loaded. 
                                                        google.charts.setOnLoadCallback(drawChart);

                                                        function drawChart() {

                                                            var jsonData = $.ajax({
                                                                url: "<?php echo site_url('Dashboard/getdata') ?>",
                                                                dataType: "json",
                                                                async: false
                                                            }).responseText;

                                                            // Create our data table out of JSON data loaded from server. 
                                                            var data = new google.visualization.DataTable(jsonData);

                                                            // Instantiate and draw our chart, passing in some options. 
                                                            // var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
                                                            var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
                                                            chart.draw(data, {width: 500, height: 500});
                                                        }

        </script> 

        <script type="text/javascript">

            //2// Load the Visualization API and the piechart package. 
            google.charts.load('current', {'packages': ['corechart']});

            // Set a callback to run when the Google Visualization API is loaded. 
            google.charts.setOnLoadCallback(drawChart1);

            function drawChart1() {

                var jsonData = $.ajax({
                    url: "<?php echo site_url('Dashboard/getdata2') ?>",
                    dataType: "json",
                    async: false,
                }).responseText;

                // Create our data table out of JSON data loaded from server. 
                var data = new google.visualization.DataTable(jsonData);

                // Instantiate and draw our chart, passing in some options. 
                var chart = new google.visualization.PieChart(document.getElementById('chart_div1'));
                //var chart = new google.visualization.ColumnChart(document.getElementById('chart_div1'));
                chart.draw(data, {width: 500, height: 500});

            }

        </script> 


        <script type="text/javascript">

            //1// Load the Visualization API and the piechart package. 
            google.charts.load('current', {'packages': ['corechart']});

            // Set a callback to run when the Google Visualization API is loaded. 
            google.charts.setOnLoadCallback(drawChart3);

            function drawChart3() {

                var jsonData = $.ajax({
                    url: "<?php echo site_url('Dashboard/getdata3') ?>",
                    dataType: "json",
                    async: false
                }).responseText;

                // Create our data table out of JSON data loaded from server. 
                var data = new google.visualization.DataTable(jsonData);

                // Instantiate and draw our chart, passing in some options. 
                // var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
                var chart = new google.visualization.AreaChart(document.getElementById('chart_div2'));
                chart.draw(data, {backgroundColor: '#FFFFFF', width: 1000, height: 500});
            }


        </script> 




        <script type="text/javascript">

            //1// Load the Visualization API and the piechart package. 
            //google.charts.load('current', {'packages': ['corechart']});

            // Set a callback to run when the Google Visualization API is loaded. 
            // google.charts.setOnLoadCallback(reportsight);

            google.charts.load('current', {packages: ['corechart', 'bar']});
            // google.charts.setOnLoadCallback(drawMultSeries);

            function get15dayssitereport() {
                var prj_id = $('#project_name').val();
                var block = $('#block_name').val();
                var type = $('#unittype').val();
                //alert(prj_id);
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('Dashboard/get15dayssitereport'); ?>",
                    data: {pid: prj_id, block: block, type: type},
                    success: function (msg) {
                        //alert(msg);
                        console.log(msg);
                        var got_ary = JSON.parse(msg);
                        console.log("got_ary.length= " + got_ary.length);
                        var recvd_data = [['Stage', 'Number of Units']];
                        var thebar;
                        var num;
                        var val;
                        for (i = 0; i < got_ary.length; i++) {
                            thebar = got_ary[i];
                            for (var key in thebar) {
                                console.log(key);
                                console.log(thebar[key]);
                                key = key.replace(/"/g, '');
                                val = thebar[key];
                                val = val.replace(/"/g, '');
                                val = parseInt(val);
                                recvd_data.push([key, val]);
                            }
                        }

                        console.log(recvd_data);
                        var data = google.visualization.arrayToDataTable(recvd_data);
                        var options = {
                            title: 'Status for Project : ' + $("#project_name option:selected").text() ,//+ ', ' + $("#block_name option:selected").text(),
                            colors: ['#337ab7', '#e0440e'],
                            chartArea: {width: '50%'},
                            hAxis: {
                                title: 'Number of Units of type: ' + $("#unittype option:selected").text(),
                                minValue: 1,
                            },
                            vAxis: {
                                title: 'Property Stages'
                            },
                            'is3D': true
                        };
                        var chart = new google.visualization.BarChart(document.getElementById('chart_div5'));
                        chart.draw(data, options);

                    }
                    ,
                    error: function (err) {
                        alert("failed" + err.toString());
                        console.log(err);
                    }
                });
            }


            function getbookingstatus() {
                var prj_id = $('#project_name2').val();
                var block = $('#block_name2').val();
                var type = $('#unittype2').val();
                //alert(prj_id);
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('Dashboard/getbookings'); ?>",
                    data: {pid: prj_id, block: block, type: type},
                    success: function (msg) {
                        //alert(msg);
                        console.log(msg);
                        var got_ary = JSON.parse(msg);
                        console.log("got_ary.length= " + got_ary.length);
                        var recvd_data = [['status', 'Number of Units']];
                        var thebar;
                        var num;
                        var val;
                        for (i = 0; i < got_ary.length; i++) {
                            thebar = got_ary[i];
                            for (var key in thebar) {
                                console.log(key);
                                console.log(thebar[key]);
                                key = key.replace(/"/g, '');
                                val = thebar[key];
                                val = val.replace(/"/g, '');
                                val = parseInt(val);
                                recvd_data.push([key, val]);
                            }
                        }

                        console.log(recvd_data);
                        var data = google.visualization.arrayToDataTable(recvd_data);
                        var options = {
                            title: 'Booking Status',
                            chartArea: {width: '50%'},
                            hAxis: {
                                title: 'Number of units',
                                minValue: 1
                            },
                            vAxis: {
                                title: 'Booking Status'
                            }
                        };
                        var chart = new google.visualization.PieChart(document.getElementById('chart_div6'));
                        chart.draw(data, options);

                    }
                    ,
                    error: function (err) {
                        //alert("failed" + err.toString());
                        console.log(err);
                    }
                });
            }






        </script>




        <script>
            $(document).ready(function () {
                $('#toppageheader').html('Dashboard');
                $("a:contains(Dashboard)").parent().addClass('active');
            });
        </script>

        <script>

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
                                $("#block_unit").val(msgarray[i].trim());
                                var phasename = msgarray[i].trim();
                                gettype(phasename);
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

            function getblocksforbooking(arg)
            {
                //alert(arg);
                if (arg == 0)
                {
                    var selectptr = document.getElementById('block_name2');
                    selectptr.length = 0;
                    var opt = document.createElement('option');
                    opt.value = '0';
                    opt.text = '--Select--';
                    selectptr.appendChild(opt);

                } else
                {
                    $.ajax({
                        type: "POST",
                        url: "<?php echo site_url('Dashboard/getprojectblocksforbooking'); ?>",
                        data: {arg: arg},
                        success: function (msg) {
                            //alert(msg);
                            var msgarray = msg.split(',');
                            var selectptr = document.getElementById('block_name2');
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
                                document.getElementById("block_name2").selectedIndex = "1";
                                 $("#block_name2").prop('disabled', 'disabled');
                                 gettypeforbooking(msgarray[i].trim());
                            }
                        }
                    });
                }
            }


            function gettypeforbooking(arg) {
                //alert('hello');
                if (arg == 0)
                {
                    var selptr = document.getElementById('unittype2');
                    selptr.length = 0;
                    var opt = document.createElement('option');
                    opt.value = 0;
                    opt.text = '--Select--';
                }
                var pid = document.getElementById('project_name2').value;
                var blid = arg;
                //alert(pid+"/"+blid);

                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('Dashboard/getprojecttypeforbooking'); ?>",
                    data: {plid: pid, blid: blid},
                    success: function (msg) {
                        // alert(msg);
                        var msgarray = msg.split(',');
                        var selptr = document.getElementById('unittype2');
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


        </script>



        <!--script>  
             
              $(document).ready(function () {
          
                //alert(prj_id);
                $.ajax({
                    type: "POST",
                    url: "<?php //echo site_url('Dashboard/getas');                  ?>",
                    data: {pid: prj_id, block: block, type: type},
                    success: function (msg) {
                        //alert(msg);
                        console.log(msg);
                        var got_ary = JSON.parse(msg);
                        console.log("got_ary.length= " + got_ary.length);
                        var recvd_data = [['status', 'Number of Units']];
                        var thebar;
                        var num;
                        var val;
                        for (i = 0; i < got_ary.length; i++) {
                            thebar = got_ary[i];
                            for (var key in thebar) {
                                console.log(key);
                                console.log(thebar[key]);
                                key = key.replace(/"/g, '');
                                val = thebar[key];
                                val = val.replace(/"/g, '');
                                val = parseInt(val);
                                recvd_data.push([key, val]);
                            }
                        }

                        console.log(recvd_data);
                        var data = google.visualization.arrayToDataTable(recvd_data);
                        var options = {
                            title: 'Booking Status',
                            chartArea: {width: '50%'},
                            hAxis: {
                                title: 'Number of units',
                                minValue: 1
                            },
                            vAxis: {
                                title: 'Booking Status'
                            }
                        };
                        var chart = new google.visualization.PieChart(document.getElementById('chart_div2'));
                        chart.draw(data, options);

                    }
                    ,
                    error: function (err) {
                        //alert("failed" + err.toString());
                        console.log(err);
                    }
                });
            }
</script-->

        <script type="text/javascript">

// Load the Visualization API and the piechart package. 
            google.charts.load('current', {'packages': ['corechart']});

// Set a callback to run when the Google Visualization API is loaded. 
            google.charts.setOnLoadCallback(drawChartavailvssold);

            function drawChartavailvssold() {

                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('Dashboard/get_sold_vs_avail'); ?>",
                    dataType: "json",
                    success: function (msg) {
                        //alert(msg['AVAILABLE']+msg['BOOKED']);
                        console.log(msg);
                        var got_ary = msg;
                        console.log("BOOKED = " + got_ary['BOOKED']);
                        console.log("Available = " + got_ary['AVAILABLE']);
                        var booked = parseInt(got_ary['BOOKED']);
                        var avail = parseInt(got_ary['AVAILABLE']);
                        var data = google.visualization.arrayToDataTable([
                            ['Status', 'Count'],
                            ['BOOKED', booked],
                            ['AVAILABLE', avail]
                        ]);
                        var options = {
                            //title: 'Available vs Sold',
                            width: 900, height: 500
                                    //is3D: true
                        };

                        var chart = new google.visualization.PieChart(document.getElementById('chart_div11'));
                        chart.draw(data, options);

                    }

                });


            }

        </script> 
        <script type="text/javascript">

            //1// Load the Visualization API and the piechart package. 
            google.charts.load('current', {'packages': ['corechart']});

            // Set a callback to run when the Google Visualization API is loaded. 
            google.charts.setOnLoadCallback(drawChartmonthlybooking);




            function drawChartmonthlybooking() {

                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('Dashboard/getmonthlybooking'); ?>",
                    dataType: "json",
                    success: function (msg) {
                        console.log(msg);
                        var got_ary = msg;
                        var months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
                        var tbldata = [["Month", "Count"]];
                        for (i = 1; i <= 12; i++) {
                            var booked = parseInt(got_ary[i]);
                            var mymnth = months[i - 1];
                            console.log("show booked: " + booked);
                            var mydata = [mymnth, booked];
                            tbldata.push(mydata);
                        }
                        var data = google.visualization.arrayToDataTable(tbldata);
                        var options = {
                            //title: 'Available vs Sold',
                            width: 1000, height: 500//,
                                    //is3D: true
                        };
                        var chart = new google.visualization.AreaChart(document.getElementById('chart_div3'));
                        chart.draw(data, options);
                    }
                });


            }

            $(document).ready(function () {
                $('#toppageheader').html('Dashboard');
                $("a:contains(Dashboard)").parent().addClass('active');
            });
        </script>

</html>