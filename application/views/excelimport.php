<html>


    <head>
        <?php
        require_once('assets/html_head_links.php');
        ?>



        <style>
            table {
                width:100%;
            }
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }

            table#t01 tr:nth-child(even) {
                background-color: #eee;
            }
            table#t01 tr:nth-child(odd) {
                background-color:#fff;
            }
            table#t01 th {
                background-color: black;
                color: white;
            }
            .table-fixed thead {
                width: 97%;
            }
            .table-fixed tbody {
                height: 230px;
                overflow-y: auto;
                width: 100%;
            }
            .table-fixed thead, .table-fixed tbody, .table-fixed tr, .table-fixed td, .table-fixed th {
                display: block;
            }
            .table-fixed tbody td, .table-fixed thead > tr> th {
                float: left; 
                border-bottom-width: 0;
            }
            .table > tbody > tr > td {
                /* padding: 8px; */
                line-height: 1.42857143;
                vertical-align: top;
                border-top: 1px solid #ddd;
                /*  width: 178px; */
            }
            .table-fixed tbody td{
                float: none;
            }
            /*.table-fixed thead {
                width: 97.6%;
            }*/
            .table-fixed thead {
                width: 111.99%;
            }
            .table-fixed tbody {
                height: 280px;
                overflow-y: auto;
                width: 100%;
            }
            .col-xs-2 {
                width: 12.666667%;
            }

            @media print
            {
                /*@page {size: landscape}*/
                .non-printable { display: none; }
                #printable { display: block;}
                .table-fixed tbody {
                    height: 100%;
                    overflow-y: auto;
                    width: 100%;
                    overflow-x: auto;
                }
                  table {
                width:100%;
            }
         /*   table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
*/
            table#t01 tr:nth-child(even) {
                background-color: #eee;
            }
            table#t01 tr:nth-child(odd) {
                background-color:#fff;
            }
            table#t01 th {
                background-color: black;
                color: white;
            }
            .table-fixed thead {
                width: 100%;
            }
           
            .table-fixed thead, .table-fixed tbody, .table-fixed tr, .table-fixed td, .table-fixed th {
                display: block;
            }
            .table-fixed tbody td, .table-fixed thead > tr> th {
                float: left; 
                border-bottom-width: 0;
            }
            
            .table > tbody > tr > td {
                /* padding: 8px; */
                line-height: 1.42857143;
                vertical-align: top;
                border-top: 1px solid #ddd;
                /*  width: 178px; */
            }
            .table-fixed tbody td{
                float: none;
            }
            /*.table-fixed thead {
                width: 97.6%;
            }*/
            .table-fixed thead {
                width: 113.5%;
            }
            
            .col-xs-2 {
                width: 12.666667%;
            }
            }

            @page {
                margin: 5mm 15mm 5mm 15mm;

            }


        </style>


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

                <title>Cvs Import </title>
                <?php if ($this->session->flashdata('success')) { ?>
                    <div class="alert alert-success">
                        <button data-dismiss="alert" class="close"  type="button">
                            <span aria-hidden="true">x</span><span  class="sr-only">Close</span></button>

                        <?php echo $this->session->flashdata('success') ?>
                    </div>
                <?php } else if($this->session->flashdata('failure')) {
                    ?>
                    <div class="alert alert-danger">
                        <button data-dismiss="alert" class="close"  type="button">
                            <span aria-hidden="true">x</span><span  class="sr-only">Close</span></button>

                        <?php echo $this->session->flashdata('failure') ?>
                    </div>

                <?php } ?>
                <div class="panel panel-primary">
                    <div class="panel-heading">Import Site Report <a class="btn btn-default btn-sm pull-right" style="margin-top:-5px;" href="<?php echo site_url('Site_report/index'); ?>" ><i class="fa fa-arrow-left"></i> Back</a></div>
                    <div  class="panel-body">

                        <form action="<?php echo base_url(); ?>index.php/Upload_csv/import" method="post" name="upload_excel" enctype="multipart/form-data">
                            <input class="btn btn-primary" style="width: 40%; height:50px;color:#fff !important;" type="file" name="file" id="file">
                            <button type="submit" id="submit" style="margin-top:-45px; margin-left:520px;" name="import" class="btn btn-primary btn-3d button-loading inline">Import</button>
                            <span style="margin-top:-40px; margin-right: 100px; "class="pull-right">File should be in CSV format, refere usual manual for help.</span>
                        </form>
                    </div>

                </div>








                <div id="printable">

                    <table id="t01" class="table table-fixed">
                        <thead>
                            <tr >
                                <th class="col-xs-2 text-center">Project Name</th> 
                                <th class="col-xs-2 text-center">Unit no.</th>
                                <th class="col-xs-2 text-center">Phase</th>
                                <th class="col-xs-2 text-center">Unit type</th>
                                <th class="col-xs-2 text-center">Stage</th>
                                <th class="col-xs-2 text-center">Date</th>
                                <th class="col-xs-2 text-center">Send DL ?</th>
                                
                            </tr>
                        </thead>
                       
                        <tbody>
                              
                            <?php
                            if (isset($view_data) && is_array($view_data) && count($view_data)): $i = 1;
                                foreach ($view_data as $key => $data) {
                                    ?>

                        <form method="post" action="<?php echo site_url('Site_report/gen_dl'); ?>" enctype="multipart/form-data" > 
                                    <tr>
                                        
                                      
                                        <td class="col-xs-2"><?php echo $data['project_name'] ?></td>
                                        <td class="col-xs-2"><?php echo $data['unit_no'] ?><input type="hidden" name="unit_no" value="<?php echo $data['unit_no'] ?>" readonly></td>
                                        <td class="col-xs-2"><?php echo $data['block'] ?><input type="hidden" name="block" value="<?php echo $data['block'] ?>"></td>
                                        <td class="col-xs-2"><?php echo $data['type'] ?><input type="hidden" name="type" value="<?php echo $data['type'] ?>"></td>
                                        <td class="col-xs-2"><?php echo $data['stage'] ?>
                                            <input type="hidden" name="stage" value="<?php echo $data['stage'] ?>" >
                                            <input type="hidden" name="attribute" value="<?php echo $data['attribute']; ?>">
                                            <input type="hidden" name="value" value="<?php echo $data['value']; ?>">
                                            <input type="hidden" name="project_id" value="<?php echo $data['project_id']; ?>">
                                            <input type="hidden" name="category" value="<?php echo $data['category']; ?>">
                                            <input type="hidden" name="customer_id" id="customer_id" value="<?php echo $data['customer_id']; ?>" />
                                            
                                        </td>
                                        
                                        <?php  $originalDate = $data['date'];
                                        $newDate = date("d-m-Y", strtotime($originalDate)); ?>
                                        <td class="col-xs-2"><?php echo $newDate; ?></td>
                                        
                                        <?php if($data['is_updated'] ==1)
                                        { 
                                            
                                            ?>
                                        <td class="col-xs-2">
                                            <button type="submit" class='btn btn-primary'><i class="fa fa-envelope-o"></i> Send</button>
                                             
                                        </td>
                                       
                                            <?php
                                        } else
                                        { ?>
                                        <td class="col-xs-2"></td>
                                          
                                       <?php  }
                                            ?>
                                        
                                   
                                    </tr>
                        </form> 
                                <?php } 
                                endif; ?>
                                
                        </tbody>  
                        
                    </table>

                </div>
            </div>
        </div>
        <script>

            $(document).ready(function () {
                $('#toppageheader').html('Import Site Report<span class="pull-right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="print" id="btnprint" value="print" class="btn btn-sm btn-default" onClick="print_this_doc();">Print&nbsp;&nbsp;<i class="fa fa-print"></i></button></span>');
                $("a:contains(Csv Import)").parent().addClass('active');
            });

            function print_this_doc() {
                var printContents = document.getElementById('printable').innerHTML;
                var originalContents = document.body.innerHTML;
                document.body.innerHTML = printContents;
                var css = '@page { size: landscape; }',
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