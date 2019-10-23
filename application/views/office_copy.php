<!DOCTYPE html>
<!--
Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
Unauthorized copying of this file, via any medium is strictly prohibited
Proprietary and confidential.
Written by Oga Technologies, October 1,  2016.
-->
<html>

    <head>
        <title>Office Copy</title>
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
                margin: 5mm 15mm 5mm 15mm;
            }
            p{
                font-size: 14px;
                font-weight: 600;
                text-align: justify;
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
                $listing = explode('__', $ll);
                $userid = $listing[1];
                $unit_no = $listing[2];
                $doc_type = 'Office Copy';
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
                        <!--a href="<?php //echo base_url('uploads/uploaded_docs/Allotment Letter_144_ESSARJEE SAMPADA_20180131011018.pdf');               ?>">afdfdaf</a--> 
                        </object>
                        <?php
                    }
                } else {
                    ?>
                    <br> <br> <br> 
                    <?php
                    $listing = explode('__', $ll);
                    $userid = $listing[1];
                    $unit_no = $listing[2];
                    $dtl = $this->Search_all_form_model->getdtlsappl($userid, $unit_no);
                    $name = $dtl->name;
                    $addr = $dtl->present_addr;
                    $son_doughter_wife = $dtl->son_doughter_wife;
                    $son_doughter_wife_mr_mrs = $dtl->son_doughter_wife_mr_mrs;
                    $swd_of = $dtl->swd_of;
                    $pincode = $dtl->pin_code;
                    $project_name = $dtl->project_name;
                    $block = $dtl->block;
                    $mr_mrs = $dtl->mr_mrs;
                    $ca_mr_mrs = $dtl->ca_mr_mrs;
                    $ca_mr_mrs_1 = $dtl->ca_mr_mrs_1;
                    $ca_name = $dtl->ca_name;
                    $ca_name_1 = $dtl->ca_name_1;
                    $type = $dtl->type;
                    ?>
                    <?php
                    foreach ($this->Company_info_model->get_Company_name() as $row) {
                        ?> 

                        <?php $company_name = $row->value; ?>
                    <?php } ?>

                    <div id="printable">
                        <div class="container">
                            <form class="form-inline" method ="post">
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
                                            Date:-&nbsp;<?php //echo date('d-m-Y') ?> 	
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
                                        <b>
                                            <u> OFFICE COPY</u>
                                        </b>
                                    </div>
                                </div> 
                                <br>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <p>
                                            To,<br>
                                            Site Engineer,<br>
                                            <?php echo $company_name; ?>,<br>
                                            <?php echo $project_name . nbs(1) . $block; ?> ,<br>
                                            Kh. No. 824/1, 825/2, 828/1/2, 816, 827/1, 825/1/क, 825/1/ख, 828/1/1/ख 
                                            & 827/2 at Khajuri Kalan, Tehsil Huzur, Distt. Bhopal, Ward No. 62.

                                        </p>
                                    </div>
                                </div> 
                                <br>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <p>
                                            Sub :- Possession  of  House No. <?php echo $unit_no; ?>. 
                                        </p>
                                    </div>
                                </div> 
                                <br>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <p>
                                            Please arrange to give possession of  House No. <?php echo $unit_no; ?>. 
                                            Type : <?php echo $type; ?>, at <?php echo $project_name . nbs(1) . $block; ?> to 
                                            <?php echo $mr_mrs . nbs(1) . $name . nbs(1) . $son_doughter_wife . nbs(1) . $son_doughter_wife_mr_mrs . nbs(1) . $swd_of; ?>.
                                        </p>
                                    </div>
                                </div> 

                                <br>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <p>
                                            For  <?php echo $company_name; ?> <br>
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
                                <br>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <p>
                                            The Possession of House No. <?php echo $unit_no; ?>. Type : Residential Unit, at
                                            <?php echo $project_name . nbs(1) . $block; ?>. AT Khajuri Kalan, Tehsil Huzur, Dist. Bhopal ward No. 
                                            62 has been taken by me. I am fully satisfied with the built up area of 
                                            my house, quality of construction  & material used by the colonizer/builder 
                                            in my unit and also satisfied with the amenities and development work STP/dual
                                            plumbing network/two separate OH water tanks on the roof of my house and other
                                            facilities provided by the Coloniser.
                                        </p>
                                    </div>
                                </div> 

                                <div class="row">
                                    <div class="col-xs-3">
                                        <p>
                                            WITNESSESS
                                        </p>
                                    </div>
                                    <div class="col-xs-3">
                                        <label>&nbsp;</label>
                                    </div>
                                    <div class="col-xs-6">
                                        <p>Signature  of  the  Allottee </p>
                                    </div>
                                </div> 
                                <br>
                                <div class="row">
                                    <div class="col-xs-1">
                                        <p>
                                            Name
                                        </p>
                                    </div>
                                    <div class="col-xs-4">
                                        <input type="text" class="form-control" >
                                    </div>
                                    <div class="col-xs-1">
                                        <p>&nbsp;</p>
                                    </div>
                                    <div class="col-xs-1">
                                        <p>
                                            Name
                                        </p>
                                    </div>
                                    <div class="col-xs-4">
                                        <?php echo $mr_mrs . nbs(1) . $name; ?>
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

                                        <span><?php echo $ca_mr_mrs_1; ?></span> <span><?php echo $ca_name_1; ?></span>
                                    </div>
                                </div> 
                                <br>
                                <div class="row">
                                    <div class="col-xs-1">
                                        <p>
                                            S/o
                                        </p>
                                    </div>
                                    <div class="col-xs-4">
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-xs-1">
                                        <p>&nbsp;</p>
                                    </div>
                                    <div class="col-xs-1">
                                        <p>
                                            Address
                                        </p>
                                    </div>
                                    <div class="col-xs-4">
                                       <?php echo $addr ?>
                                            <?php
                                                if ($pincode == '') {
                                                    echo '';
                                                } else if ($pincode != '') {
                                                    echo '<span>(</span>';
                                                }
                                                ?><?php echo $pincode; ?><?php
                                                if ($pincode == '') {
                                                    echo '';
                                                } else if ($pincode != '') {
                                                    echo '<span>)</span>';
                                                }
                                                ?>
                                    </div>
                                </div> 
                                <br>
                                <div class="row">
                                    <div class="col-xs-1">
                                        <p>
                                            R/o
                                        </p>
                                    </div>
                                    <div class="col-xs-4">
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-xs-1">
                                        <p>&nbsp;</p>
                                    </div>
                                    <div class="col-xs-1">
                                        <p>&nbsp;</p>
                                    </div>
                                    <div class="col-xs-4">
                                        <p>&nbsp;</p>
                                    </div>
                                </div> 
                                <br>
                                <div class="row">
                                    <div class="col-xs-3">
                                        <p>&nbsp;</p>
                                    </div>
                                    <div class="col-xs-3">
                                        <p>&nbsp;</p>
                                    </div>
                                    <div class="col-xs-3">
                                        <p>Signature of site Engineer</p>
                                    </div>
                                    <div class="col-xs-3">
                                        &nbsp;
                                    </div>
                                </div> 
                                <br>
                                <div class="row">
                                    <div class="col-xs-3">
                                        <p>&nbsp;</p>
                                    </div>
                                    <div class="col-xs-3">
                                        <p>&nbsp;</p>
                                    </div>
                                    <div class="col-xs-1">
                                        <p>Name</p>
                                    </div>
                                    <div class="col-xs-4">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <br><br><br><br>


                            </form>
                        </div> 
                    </div>
                    <?php
                }  //end of pdf else
                ?>
            </div> 


            <script type="text/javascript">
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

                $(document).ready(function () {
                    $('#toppageheader').html('Possession Set Office Copy<span class="pull-right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="print" id="btnprint" value="print" class="btn btn-sm btn-default" onClick="print_this_doc();">Print&nbsp;&nbsp;<i class="fa fa-print"></i></button></span>');
                    $("a:contains(Office Copy)").parent().addClass('active');
                });
            </script>
    </body>
</html>


