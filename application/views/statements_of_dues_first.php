<!DOCTYPE html>
<!--
Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
Unauthorized copying of this file, via any medium is strictly prohibited
Proprietary and confidential.
Written by Oga Technologies, October 1,  2016.
-->
<html>

    <head>
        <title>statements of dues I</title>
        <?php
        require_once('assets/html_head_links.php');
        ?>
        <style>
            .form-control{
                width:   100% !important;
            }
            @media print
            {
                /*@page {size: landscape}*/
                .non-printable { display: none; }
                #printable { display: block;}
                .container{
                    margin-top: 150px;
                }
            }
            @page {
                margin:  5mm 15mm 5mm 15mm;
            }
            p{
                font-size: 14px;
                font-weight: 600;
                text-align: justify;
            }
            .form-control{
                border:none;
                box-shadow: none !important;
                font-size: 14px;
            }
            .form-control[readonly]{
                background-color: #fff;
            }

        </style>
    </head>


    <body>
        <div class="non-printable">
            <?php
            require_once('assets/top_menu.php');
            require_once('assets/side_menu.php');
            ?>
        </div>

        <div class="main">
            <div class="container">
                <a href="javascript: history.go(-1)" class="btn btn-primary pull-right clickable" role="button"><i class="fa fa-arrow-left" aria-hidden="true"></i> &nbsp;&nbsp;Back&nbsp;&nbsp;&nbsp;</a>
                <?php
             /*   $listing = explode('__', $ll);
                $userid = $listing[1];
                $unit_no = $listing[2];
                $doc_type = 'Statement of dues I';
                $pdf = $this->Search_all_form_model->first_check_pdf($userid, $doc_type);

                if ($pdf != 'error') {
                    $browsername = $_SERVER['HTTP_USER_AGENT'];
                    if (strpos($browsername, 'Chrome')) {
                        ?>
                        <iframe style="width: 1107px; height: 1200px;" src="<?php echo base_url($pdf); ?>"></iframe>
                        <?php
                    } else {
                        ?>
                        <OBJECT data="<?php echo base_url($pdf); ?>" TYPE="application/x-pdf" TITLE="SamplePdf" WIDTH=1000 HEIGHT=1500 style="margin-left:140px;">
                        <!--a href="<?php //echo base_url('uploads/uploaded_docs/Allotment Letter_144_ESSARJEE SAMPADA_20180131011018.pdf');              ?>">afdfdaf</a--> 
                        </object>
                        <?php
                    }
                } else {
                  */  ?>
                    <br> <br> <br> 

                    <?php
                    $listing = explode('__', $ll);
                    $userid = $listing[1];
                    $unit_no = $listing[2];
                    $dtl = $this->Search_all_form_model->getdtlsappl($userid, $unit_no);
                    $name = $dtl->name;
                    $project_name = $dtl->project_name;
                    $block = $dtl->block;
                    $mr_mrs = $dtl->mr_mrs;
                    $ca_mr_mrs = $dtl->ca_mr_mrs;
                    $ca_mr_mrs_1 = $dtl->ca_mr_mrs_1;
                    $ca_name = $dtl->ca_name;
                    $ca_name_1 = $dtl->ca_name_1;
                    $type = $dtl->type;
                    $pre_salesid = $dtl->pre_salesid;
                    ?>
                    <?php
                    foreach ($this->Agreement_model->view_sheet1($pre_salesid) as $row) {
                        ?>

                        <?php $total_cost = $row->total_cost; ?>

                    <?php } ?>
                    <?php foreach ($this->Pre_sales_model->get_charge_amount() as $row) { ?>

                        <?php $charge_amt = $row->charge_amount; ?>
                        <?php $charge_amount1 = $row->charge_amount * 18 / 100; ?>
                        <?php $charge_amount = $row->charge_amount + $charge_amount1; ?>

                    <?php } ?>
                    <?php
                    foreach ($this->Company_info_model->get_Company_name() as $row) {
                        ?> 

                        <?php $company_name = $row->value; ?>
                    <?php } ?>
                    <?php
                    $id = $userid;
                    foreach ($this->Agreement_model->document_date($id) as $row) {
                        ?>

                        <?php $dateofdocument = $row->date_of_document; ?>

                    <?php } ?>
                </div>
                <div id="printable">
                    <div class="container">
                        <?php
                        $sql = "SELECT date_of_document FROM documents_tbl WHERE applicant_id='$userid' and doc_type like '%Agreement%'";
                        //print_r($sql);
                        $this->db->query($sql);
                        // print_r($sql);
                        if ($this->db->affected_rows() > 0) {
                            ?>
                            <form class="form-inline" action="<?php echo site_url('Allotment_letter/search_id'); ?>" method ="post">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <label>
                                            Ref.- ECPL/<?php echo $project_name . nbs(1) . $block; ?> /<?php echo $unit_no; ?>/2018	
                                        </label> 
                                    </div>
                                    <div class="col-xs-4">
                                        <p>
                                            &nbsp;
                                        </p> 
                                    </div>
                                    <div class="col-xs-4">
                                        <label>
                                            Date:-&nbsp;<?php //echo date('d-m-Y')  ?> 	
                                        </label>
                                    </div>
                                </div> 

                                <div class="row">
                                    <div class="col-xs-4">
                                        <label>
                                            &nbsp;
                                        </label>
                                    </div>
                                    <div class="col-xs-4">
                                        <p>
                                            &nbsp;
                                        </p> 
                                    </div>
                                    <div class="col-xs-4">
                                        <label>
                                            Bhopal 	
                                        </label>
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="col-xs-12 text-center">
                                        <label>
                                            STATEMENT OF DUES
                                        </label>
                                    </div>
                                </div> 
                                <br>
                                <div class="row">
                                    <div class="col-xs-3">
                                        <p>
                                            Name of Builder / Coloniser
                                        </p>
                                    </div>
                                    <div class="col-xs-1">
                                        <label>:</label>
                                    </div>
                                    <div class="col-xs-8">
                                        <p>
                                            <?php echo $company_name; ?> <br> <?php echo $project_name . nbs(1) . $block; ?>
                                        </p>
                                    </div>
                                </div> 
                                <br>
                                <div class="row">
                                    <div class="col-xs-3">
                                        <p>
                                            Name of Allottee
                                        </p>
                                    </div>
                                    <div class="col-xs-1">
                                        <label>:</label>
                                    </div>
                                    <div class="col-xs-5">
                                        <p><?php echo $mr_mrs . nbs(1) . $name; ?>

                                            <?php
                                            if ($ca_mr_mrs == '') {
                                                echo '';
                                            } else if ($ca_mr_mrs == 'Mrs.') {
                                                echo '<span>,</span>';
                                            } else if ($ca_mr_mrs == 'Ms.') {
                                                echo '<span>,</span>';
                                            } else if ($ca_mr_mrs == 'Mr.') {
                                                echo '<span>,</span>';
                                            } else if ($ca_mr_mrs == 'Mrs') {
                                                echo '<span>,</span>';
                                            } else if ($ca_mr_mrs == 'Ms') {
                                                echo '<span>,</span>';
                                            } else if ($ca_mr_mrs == 'Mr') {
                                                echo '<span>,</span>';
                                            }
                                            ?>
                                            <span><?php echo $ca_mr_mrs; ?></span> <span><?php echo $ca_name; ?></span>
                                            <?php
                                            if ($ca_mr_mrs_1 == '') {
                                                echo '';
                                            } else if ($ca_mr_mrs_1 == 'Mrs.') {
                                                echo '<span>,</span>';
                                            } else if ($ca_mr_mrs_1 == 'Ms.') {
                                                echo '<span>,</span>';
                                            } else if ($ca_mr_mrs_1 == 'Mr.') {
                                                echo '<span>,</span>';
                                            } else if ($ca_mr_mrs_1 == 'Mrs') {
                                                echo '<span>,</span>';
                                            } else if ($ca_mr_mrs_1 == 'Ms') {
                                                echo '<span>,</span>';
                                            } else if ($ca_mr_mrs_1 == 'Mr') {
                                                echo '<span>,</span>';
                                            }
                                            ?>

                                            <span><?php echo $ca_mr_mrs_1; ?></span> <span><?php echo $ca_name_1; ?></span></p><br>
                                    </div>
                                </div> 
                                <br>
                                <div class="row">
                                    <div class="col-xs-3">
                                        <p>
                                            Date of Agreement	
                                        </p>
                                    </div>
                                    <div class="col-xs-1">
                                        <label>:</label>
                                    </div>
                                    <div class="col-xs-5">
                                        <span><?php
                                        $x = explode(' ', $dateofdocument);
                                        $dateofdocument = new DateTime($x[0]);
                                        echo $dateofdocument->format('d-m-Y');
                                        ?></span>
                                    </div>
                                </div> 
                                <br>
                                <div class="row">
                                    <div class="col-xs-3">
                                        <p>
                                            Type	
                                        </p>
                                    </div>
                                    <div class="col-xs-1">
                                        <label>:</label>
                                    </div>
                                    <div class="col-xs-8">
                                        <?php echo $type; ?>/Residential unit
                                    </div>
                                </div> 
                                <br>
                                <div class="row">
                                    <div class="col-xs-3">
                                        <p>
                                            Duplex No./House No.	
                                        </p>
                                    </div>
                                    <div class="col-xs-1">
                                        <label>:</label>
                                    </div>
                                    <div class="col-xs-8">
                                        <?php echo $unit_no; ?>,&nbsp;<?php echo $project_name . nbs(1) . $block; ?><br>
                                        Kh. No. 824/1, 825/2, 828/1/2, 816, 827/1, 825/1/क,825/1/ख,<br>
                                        828/1/1/ख & 827/2 at Khajuri Kalan, Tehsil Huzur, Distt. 
                                        Bhopal, Ward No. 62.
                                    </div>
                                </div> 
                                <br>
                                <div class="row">
                                    <div class="col-xs-5">
                                        <p>
                                            1.	Cost as per Agreement
                                        </p>
                                    </div>                         
                                    <div class="col-xs-1 text-left">Rs.</div>
                                    <div class="col-xs-4 text-left">
                                        <input type="text" value="<?php echo $total_cost; ?>" class="form-control">
                                    </div>
                                </div> 
                                <br>


                                <div class="row">
                                    <div class="col-xs-3">
                                        <p>
                                            &nbsp;
                                        </p>
                                    </div>

                                    <div class="col-xs-2">
                                        <p>
                                            Total Amount 
                                        </p>
                                    </div>
                                    <div class="col-xs-1 text-left">(Rs.)</div>
                                    <div class="col-xs-4 text-left">
                                        <p>
                                            <?php echo $total_cost; ?>
                                        </p>
                                    </div>
                                </div> 
                                <br>
                                <div class="row">
                                    <div class="col-xs-3">
                                        <p>
                                            &nbsp;
                                        </p>
                                    </div>

                                    <div class="col-xs-2">
                                        <p>
                                            Less Amount Received  
                                        </p>
                                    </div>
                                    <div class="col-xs-1 text-left">(Rs.)</div>
                                    <div class="col-xs-4 text-left">
                                        <p>
                                            <?php echo $total_cost; ?>
                                        </p>
                                    </div>
                                </div> 
                                <br>
                                <div class="row">
                                    <div class="col-xs-3">
                                        <p>
                                            &nbsp;
                                        </p>
                                    </div>

                                    <div class="col-xs-2">
                                        <p>
                                            Balance  
                                        </p>
                                    </div>
                                    <div class="col-xs-1 text-left">(Rs.)</div>
                                    <div class="col-xs-4 text-left">

                                        _______________________

                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <p>
                                            2.	As per the Clause No. 23 of the Agreement executed on dt. 
                                            <?php
                                            $id = $userid;
                                            foreach ($this->Agreement_model->document_date($id) as $row) {
                                                ?>

                                                <?php $dateofdocument = $row->date_of_document; ?>

                                            <?php } ?> 


                                            <?php
                                            $x = explode(' ', $dateofdocument);
                                            $dateofdocument = new DateTime($x[0]);
                                            echo $dateofdocument->format('d-m-Y');
                                            ?>, tax liablity (GST/vat) if 	applicable is to be paid additionally.
                                        </p>
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="col-xs-12">
                                        <p>
                                            For <?php echo $company_name; ?>  <br><br>
                                            <?php echo $project_name . nbs(1) . $block; ?>
                                        </p>
                                    </div>
                                </div> 
                                <br>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <p>
                                            (Authorized Signatory)               
                                        </p>
                                    </div>
                                </div> 

                            </form>
                        <?php } else { ?>
                            <div class="container" style="width: 82%;">
                                <div class="alert alert-info text-center" role="alert">Please Fill the Agreement Upload Date</div>
                            </div>
                        <?php } ?>
                    </div> 
                </div> 
            <?php // } ?>
        </div> 


        <script type="text/javascript">

            $(document).ready(function () {
                $('#toppageheader').html('Statements Of Dues<span class="pull-right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="print" id="btnprint" value="print" class="btn btn-sm btn-default" onClick="print_this_doc();">Print&nbsp;&nbsp;<i class="fa fa-print"></i></button></span>');
                $("a:contains(statements of_dues I)").parent().addClass('active');
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


