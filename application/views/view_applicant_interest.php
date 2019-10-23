<!DOCTYPE html>
<html>
    <head>
        <title>Show Interest</title>
        <?php require_once('assets/html_head_links.php'); ?>
        <style>
            @media print
            {
                /*@page {size: landscape}*/
                .non-printable { display: none; }
                #printable { display: block;}

            }
            @page {

                margin: 5mm 12mm 5mm 12mm;
            }

    
            .bar {
             
                position: absolute;
                top: 80%;
                left: 27%;
                height: 20px;
                width: 600px;

                border-radius: 20px;
                background-image: -webkit-linear-gradient(-45deg, #fff 25%, rgba(255, 154, 26, 0) 25%, rgba(255, 154, 26, 0) 50%, #fff 50%, #fff 75%, rgba(255, 154, 26, 0) 75%);
                background-image: -moz-linear-gradient(-45deg, #fff 25%, rgba(255, 154, 26, 0) 25%, rgba(255, 154, 26, 0) 50%, #fff 50%, #fff 75%, rgba(255, 154, 26, 0) 75%);
                background-image: -o-linear-gradient(-45deg, #fff 25%, rgba(255, 154, 26, 0) 25%, rgba(255, 154, 26, 0) 50%, #fff 50%, #fff 75%, rgba(255, 154, 26, 0) 75%);
                background-image: linear-gradient(-45deg, #fff 25%, rgba(255, 154, 26, 0) 25%, rgba(255, 154, 26, 0) 50%, #fff 50%, #fff 75%, rgba(255, 154, 26, 0) 75%);
                background-color: #337AB7;
                background-size: 50px 50px;
                border: 1px solid #337AB7;
                border-bottom-color: #337AB7;
                -webkit-box-shadow: inset 0 10px 0 rgba(255, 255, 255, 0.2);
                box-shadow: inset 0 10px 0 rgba(255, 255, 255, 0.2);
                -webkit-animation: move 2s linear infinite;
                -moz-animation: move 2s linear infinite;
                -ms-animation: move 2s linear infinite;
                animation: move 2s linear infinite;
            }

            /**
             * The ::before element creates the darker box around the loading bar itself.
             */

            .bar::before {
                content: " ";
                position: absolute;
                top: -10px;
                left: -10px;
                right: -10px;
                bottom: -10px;
                background-color: #000;
                background-color: rgba(0, 0, 0, 0.1);
                border-radius: 20px;
                -webkit-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.03), inset 0 1px 0 rgba(0, 0, 0, 0.1);
                box-shadow: 0 1px 0 rgba(255, 255, 255, 0.03), inset 0 1px 0 rgba(0, 0, 0, 0.1);
                z-index: -1;
            }

            /**
             * Animate the stripes.
             */

            @-webkit-keyframes move {
                0%   { background-position: 0 0; }
                100% { background-position: 50px 50px; }
            }

            @-moz-keyframes move {
                0%   { background-position: 0 0; }
                100% { background-position: 50px 50px; }
            }

            @-ms-keyframes move {
                0%   { background-position: 0 0; }
                100% { background-position: 50px 50px; }
            }

            @-webkit-keyframes move {
                0%   { background-position: 0 0; }
                100% { background-position: 50px 50px; }
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


                    <?php
                    log_message('error', 'applicant payment  page start:');
                    $user1 = $this->input->get('uid');

                    //  print_r( $user); echo'<br/>';
                    foreach ($this->Interest_model->get_appl_details($user1) as $row) {
                        ?> 
                        <div class="row">
                            <div class="panel panel-primary" >
                                <div class="panel-heading">
                                    <h4>  
                                        &nbsp;&nbsp;&nbsp;<strong>Accrued Interest</strong<?php $name = $row->name; ?>&nbsp;&nbsp;&nbsp;&nbsp;<strong> </strong> &nbsp;<?php $project_name = $row->project_name; ?> <?php $block = $row->block; ?>&nbsp;&nbsp;&nbsp;&nbsp;<strong></strong>&nbsp;<?php $unit_no = $row->unit_no; ?>&nbsp;&nbsp;&nbsp;&nbsp;<strong></strong>&nbsp;<?php $type = $row->type; ?>
                                    </h4>

                                    <a href="<?php echo site_url('Interest/index'); ?>" class="btn btn-primary pull-right clickable non-printable" role="button" style="margin-top: -37px;"><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;&nbsp; Back</a>
                                </div>




                                <?php
                            }
                            ?>
                            <br>
                            <center>
                                <div class="btn-3d" style="border:1px solid #337ab7; border-radius:5px; width:80%; line-height:150%;  ">
                                    <label>Customer Name :</label><?php echo nbs(2) . $name; ?><?php echo nbs(3); ?>
                                     <label>Project Name :</label><?php echo nbs(2) . $project_name . nbs(1) . $block; ?> <?php echo nbs(3); ?>
                                    <label>Unit No :</label><?php echo nbs(2) . $unit_no; ?> <?php echo nbs(3); ?>
                                    <label>Type :</label><?php echo nbs(2) . $type; ?>

                                </div>
                            </center>

                            <?php
                            $user = $this->input->get('uid');
                            ?>
                            <input type="hidden" id="userid" name="userid" value="<?php echo $user; ?>">
                            <input type="hidden" id="unitno" name="unitno" value="<?php echo $unit_no; ?>">


                            <div class="panel-body" style="overflow-y:scroll;" >


                                <table id="ashwincodetable" class="table table-bordered table-striped" border='2'>

                                    <tr style="background-color: #337ab7;color:#FFF;">

                                        <th style="text-align: center;">  Stage </th>
                                        <th style="text-align: center;">  Amount Payable </th>
                                        <th style="text-align: center;">  Due Date </th>
                                        <th style="text-align: center;">  Cheque Date(Payment) </th>
                                        <th style="text-align: center;">  Due Amount After Payment </th>
                                        <th style="text-align: center;">  Delay Days </th> 
                                        <th style="text-align: center;">  % Interest Amount </th> 
                                        <th style="text-align: center;">  Previous Amount Interest so far </th> 

                                    </tr>

                                </table>
                                <div id="bar" class="bar"></div>
                                <label id="ttl">Total Amt:</label><?php echo nbs(170); ?> <label id="inter"></label>
                                <br><br>
                            </div>

                            </tbody>
                            </table>
                            <div class="panel-success" id="panelsuccess" style="display: none;">
                                <div class="panel-heading">View Document</div>
                                <div class="panel-body">
                                    <div class="row" id="tablespace">

                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>                

            </div>
        </div>
    </div>
    <script>

        $(document).ready(function () {
            $('#toppageheader').html('Interest Calculation <span class="pull-right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="print" id="btnprint" value="print" class="btn btn-sm btn-default" onClick="print_this_doc();">Print&nbsp;&nbsp;<i class="fa fa-print"></i></button></span>');
            $("a:contains(Interest Calculation)").parent().addClass('active');
            var userid = $('#userid').val();
            var unitno = $('#unitno').val();
            
                    $('#bar').show();

            $.ajax({
                type: 'POST',
                dataType: 'JSON',
                url: "<?php echo site_url('Interest_calculation/calculate_interest'); ?>",
                data: {userid: userid, unitno: unitno},
                success: function (msg) {
                    var actualamt = 0;
                    var interestamt = 0;
                    var q = JSON.stringify(msg);
                    var jsonobj = JSON.parse(q);
                    //  alert('Now see');
                    var tbl = document.getElementById('ashwincodetable');
                    for (var i = 0; i < jsonobj.length; i++)
                    {
                        //   alert(jsonobj[i]['due_dt']);
                        //   alert(jsonobj[i]['stage']);
                        //  alert(jsonobj[i]['chq_dt']);
                        var tr = document.createElement('tr');

                        var td = document.createElement('td');
                        td.innerHTML = jsonobj[i]['stage'];
                        tr.appendChild(td);
                        var td = document.createElement('td');
                        td.innerHTML = jsonobj[i]['actual_amt'];
                        tr.appendChild(td);

                        actualamt = parseFloat(actualamt) + parseFloat(jsonobj[i]['actual_amt']);
                        var td = document.createElement('td');
                        td.innerHTML = jsonobj[i]['due_dt'];
                        tr.appendChild(td);

                        var td = document.createElement('td');
                        td.innerHTML = jsonobj[i]['chq_dt'];
                        tr.appendChild(td);

                        if (jsonobj[i]['chq_dt'] == '0000-00-00')
                        {
                            var td = document.createElement('td');
                            td.innerHTML = 'Interest on Actual Amount';
                            tr.appendChild(td);
                        } else
                        {
                            var td = document.createElement('td');
                            td.innerHTML = jsonobj[i]['due_amt'];
                            tr.appendChild(td);
                        }
                        var td = document.createElement('td');
                        td.innerHTML = jsonobj[i]['delaydays'];
                        tr.appendChild(td);
                        var td = document.createElement('td');
                        td.innerHTML = jsonobj[i]['interestamt'].toFixed(2);
                        interestamt = parseFloat(interestamt) + parseFloat(jsonobj[i]['interestamt'].toFixed(2));
                        tr.appendChild(td);
                        tbl.appendChild(tr);


                        var td = document.createElement('td');
                        td.innerHTML = jsonobj[i]['prevint'];
                        tr.appendChild(td);

                    }
                    document.getElementById('ttl').innerHTML = "Total Amount  : <?php echo "<i class='fa fa-inr'></i>&nbsp;"; ?>" + parseFloat(actualamt).toFixed(2) + "/-";
                    document.getElementById('inter').innerHTML = "Total Interest : <?php echo "<i class='fa fa-inr'></i>&nbsp;"; ?>" + parseFloat(interestamt).toFixed(2) + "/-";
     
                    $('#bar').hide();
                }



            });
        });

        function print_this_doc() {
            var printContents = document.getElementById('printable').innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            var css = '@page { size: portrait; }',
                    head = document.head || document.getElementsByTagName('head')[0],
                    style = document.createElement('style');

            style.type = 'text/css';
            style.media = 'print';

            if (style.styleSheet) {
                style.styleSheet.cssText = css;
            } else {
                style.appendChild(document.createTextNode(css));
            }

            head.appendChild(style);
            window.print();
            document.body.innerHTML = originalContents;
        }



    </script>
</body>
</html>