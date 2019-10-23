<!DOCTYPE html>
<!--
Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
Unauthorized copying of this file, via any medium is strictly prohibited
Proprietary and confidential.
Written by Oga Technologies, October 1,  2016.
-->

<html>
    <head>
        <title>Satisfaction Letter</title>
        <?php
        require_once('assets/html_head_links.php');
        ?>
        <style>
            .container{
                padding-top: 10px;
                padding-bottom: 10px;
            }
            input{
                border: none;
                border-bottom: 1px solid;
                width:100px;
            }
            input[type=text]:disabled {
                background: white;
                width:100px;
            }

            @media print
            {
                /*@page {size: landscape}*/
                .non-printable { display: none; }
                #printable { display: block;}
                .container{
                    margin-top: 180px;
                }

            }
            @page {

                margin: 5mm 15mm 5mm 15mm;
            }

            body{

                font-family: Arial !important;
                font-size: 14px;
            }




        </style>
    </head>
    <body>
        <div style="z-index: 10;">
            <div class="non-printable">
                <?php
                require_once('assets/top_menu.php');
                require_once('assets/side_menu.php');
                ?>
            </div>
        </div>

        <div class="main">
            <div class="container">
                <a href="javascript: history.go(-1)" class="btn btn-primary pull-right clickable" role="button"><i class="fa fa-arrow-left" aria-hidden="true"></i> &nbsp;&nbsp;Back&nbsp;&nbsp;&nbsp;</a>
                <?php
            /*    $listing = explode('__', $ll);
                $userid = $listing[1];
                $unit_no = $listing[2];
                $doc_type = 'Satisfaction Form';
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
                        <!--a href="<?php //echo base_url('uploads/uploaded_docs/Allotment Letter_144_ESSARJEE SAMPADA_20180131011018.pdf');          ?>">afdfdaf</a--> 
                        </object>
                        <?php
                    }
                } else {
             * */
             
                    ?>

                    <br> <br> <br>

                    <?php
                    $listing = explode('__', $ll);
                    $userid = $listing[1];
                    $unit_no = $listing[2];
                    $dtl = $this->Search_all_form_model->getdtlsappl($userid, $unit_no);
                    $project_name = $dtl->project_name;
                    $block = $dtl->block;
                    $location = $dtl->location;
                    ?>
                    <?php
                    foreach ($this->Company_info_model->get_Company_name() as $row) {
                        ?> 

                        <?php $company_name = $row->value; ?>
                    <?php } ?>
                    <?php
                    foreach ($this->Company_info_model->get_Company_address() as $row) {
                        ?> 

                        <?php $company_address = $row->value; ?>
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
                            <div class="row">
                                <div class="col-xs-6">
                                    <address>

                                        <span>To,</span><br>

                                        <span>The Managing Director</span><br>
                                        <span>M/s <?php echo $company_name; ?></span><br>
                                        <span>(<?php echo $project_name . nbs(1) . $block; ?>)</span><br>
                                        <span>Corporate Office:<?php echo $company_address; ?> - 011</span><br>


                                    </address>
                                </div>
                                <div class="col-xs-4">
                                    &nbsp;

                                </div>
                                <div class="col-xs-2">
                                    <b>Date:-&nbsp;<?php //echo date('d-m-Y') ?><span></span></b><br>
                                    <b>Bhopal</b>

                                </div>


                            </div>
                            <br><br><br>
                            <div class="row">
                                Subject : <b> SATISFACTION  LETTER </b>
                            </div>
                            <br>
                            <br>
                            <br>


                            <div class="row">

                                <label>Dear sir,</label>
                                <p style="text-align: justify;" > As per the agreement executed between <?php echo $company_name; ?> & me/us. I/we have been allotted a <b>Residential Unit/House No. <?php echo $unit_no; ?><span> </span></b> in your project known as <?php echo $project_name . nbs(1) . $block; ?>. Situated on Kh. No. <b>824/1, 825/2, 828/1/2, 816, 827/1, 825/1/क
                                        , 825/1/ख, 828/1/1/ख & 827/2 </b> at <?php echo $location; ?>.<br> 
                                    I know all the changes done by you on my request in my unit internally or Externally. I undertake the responsibility for such changes. There is no balance work in my <b>Residential Unit /Unit No.&nbsp;<?php echo $unit_no; ?><span></span></b>  as per <b>Agreement dated <span>
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
                                            ?></span></b>  I am fully satisfied with the following for my House that is up to the mark and as per agreement between us. </P>

                            </div>
                            <br>
                            <div class="row">
                                <ul>
                                    <li>Constructed Area of my Duplex.</li>
                                    <li>Quality of construction.</li>
                                    <li >Sewer Disposal system network.</li>
                                    <li >Water Supply Network along with Dual plumbing system.</li>
                                    <li >Electrical Network of Colony.</li>
                                    <li >Electrical & Plumbing work of Residential Unit.</li>
                                    <li >Public amenities like Roads, Gardens, Club House, Sewage Treatment Plant and Other development work etc.</li>
                                </ul>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <B>Thanking You,</b>

                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="row">
                                        <div class="col-md-6 pull-right">
                                            <div class="col-xs-6">
                                                <b>Witness</b>

                                            </div>

                                            <div class="col-xs-5">


                                            </div>
                                        </div>
                                    </div><br>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="col-xs-2">
                                                <b>Sign</b>

                                            </div>
                                            <div class="col-xs-1">
                                                <b>:</b>

                                            </div>
                                            <div class="col-xs-5">


                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="col-xs-2">
                                                <b>Sign</b>

                                            </div>
                                            <div class="col-xs-1">
                                                <b>:</b>

                                            </div>
                                            <div class="col-xs-5">


                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="col-xs-2">
                                                <b>Name</b>

                                            </div>
                                            <div class="col-xs-1">
                                                <b>:</b>

                                            </div>
                                            <div class="col-xs-5">


                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="col-xs-2">
                                                <b>Name</b>

                                            </div>
                                            <div class="col-xs-1">
                                                <b>:</b>

                                            </div>
                                            <div class="col-xs-5">


                                            </div>
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="col-xs-2">
                                                <b>Address</b>

                                            </div>
                                            <div class="col-xs-1">
                                                <b>:</b>

                                            </div>
                                            <div class="col-xs-5">


                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="col-xs-2">
                                                <b>Address</b>

                                            </div>
                                            <div class="col-xs-1">
                                                <b>:</b>

                                            </div>
                                            <div class="col-xs-5">


                                            </div>
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="col-xs-2">
                                                <b>Phone</b>

                                            </div>
                                            <div class="col-xs-1">
                                                <b>:</b>

                                            </div>
                                            <div class="col-xs-5">


                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="col-xs-2">
                                                <b>phone</b>

                                            </div>
                                            <div class="col-xs-1">
                                                <b>:</b>

                                            </div>
                                            <div class="col-xs-5">


                                            </div>
                                        </div>
                                    </div>



                                </div>
                            </div>
                            <br><br><br><br><br><br>

                        <?php } else { ?>
                            <div class="container" style="width: 82%;">
                                <div class="alert alert-info text-center" role="alert">Please Fill the Agreement Upload Date</div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php // } ?>
        </div>

        <script>

            $(document).ready(function () {
                $('#toppageheader').html('Satisfaction Letter<span class="pull-right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="print" id="btnprint" value="print" class="btn btn-sm btn-default" onClick="print_this_doc();">Print&nbsp;&nbsp;<i class="fa fa-print"></i></button></span>');
                $("a:contains(Satisfaction)").parent().addClass('active');
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