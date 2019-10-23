<!DOCTYPE html>
<!--
Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
Unauthorized copying of this file, via any medium is strictly prohibited
Proprietary and confidential.
Written by Oga Technologies, October 1,  2016.
-->
<html>

    <head>
        <title>Stamp Value Purpose - Maintenance Agreement</title>
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
                    margin-top:400px;
                }


            }
            @page {
                margin: 5mm 5mm 5mm 5mm;

            }
            p{             
                text-align: justify;
                font-size: 20px;
                font-family: Titillium;
            }
            h4,h2{
                font-weight: 600;
                font-family: Titillium;
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
                $doc_type = 'Stamp Value Purpose Maintenance Agreement';
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
                        <!--a href="<?php //echo base_url('uploads/uploaded_docs/Allotment Letter_144_ESSARJEE SAMPADA_20180131011018.pdf');            ?>">afdfdaf</a--> 
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
                    $mr_mrs = $dtl->mr_mrs;
                    $name = $dtl->name;
                    $addr = $dtl->present_addr;
                    $pan = $dtl->pan;
                    $son_doughter_wife = $dtl->son_doughter_wife;
                    $son_doughter_wife_mr_mrs = $dtl->son_doughter_wife_mr_mrs;
                    $swd_of = $dtl->swd_of;
                    $fappl_dob = $dtl->fappl_dob;
                    $contact_mobile = $dtl->contact_mobile;
                    $pincode = $dtl->pin_code;
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
                    <?php
                    foreach ($this->Company_info_model->get_Company_pincode() as $row) {
                        ?> 

                        <?php $pin_code = $row->value; ?>
                    <?php } ?>
                </div>
                <div id="printable">
                    <div class="container">
                        <form class="form-inline" action="<?php echo site_url('Allotment_letter/search_id'); ?>" method ="post">
                            <div class="row">
                                <div class="col-xs-12 text-center">
                                    <h2><u>Stamp Value Rs. 1000/-</u></h2>
                                    <br>
                                    <h4 style="margin-top: -22px;">Purpose - Maintenance Agreement</h4>
                                </div>
                            </div>
                            <br>
                            <div class="row">

                                <div class="col-xs-4">
                                    <div class="row">
                                        <div class="col-xs-8">
                                            <label>&nbsp;</label>
                                        </div>
                                        <div class="col-xs-4">
                                            <p> Party No. 1</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-5">
                                    <div class="row">
                                        <div class="col-xs-1">
                                        </div>
                                        <div class="col-xs-11">
                                            <p>
                                                <?php echo $company_name; ?><br>
                                                Office : "Essarjee House", <?php echo $company_address; ?> - <?php echo $pin_code; ?><br>
                                                Shri. Sunil Kumar Gupta (Age - 50 Yrs.)<br>
                                                S/o Shri. G.C. Shah
                                            </p>
                                        </div>                                            
                                    </div>                                            
                                </div>  
                                <div class="col-xs-3">
                                    <label>&nbsp;</label>
                                </div>                                            
                            </div>  
                            <br>
                            <div class="row">
                                <div class="col-xs-4">
                                    <label>&nbsp;</label>
                                </div>
                                <div class="col-xs-4">
                                    <div class="row text-center">
                                        <div class="col-xs-12">
                                            <p class="text-center"><b>V/s</b></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <label>&nbsp;</label>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-xs-4">
                                    <div class="row">
                                        <div class="col-xs-8">
                                            <label>&nbsp;</label>
                                        </div>
                                        <div class="col-xs-4">
                                            <p>Party No. 2</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-5">
                                    <label>&nbsp;</label>
                                </div>
                                <div class="col-xs-3">
                                    <label>&nbsp;</label>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-xs-3">                             
                                    <label>&nbsp;</label>
                                </div>                                

                                <div class="col-xs-5">
                                    <div class="row">                                                           
                                        <div class="col-xs-3">
                                            <p>Name</p>
                                        </div>
                                        <div class="col-xs-1">
                                            :
                                        </div>
                                        <div class="col-xs-8">
                                            <p><?php echo $mr_mrs; ?> <?php echo $name; ?></p>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">                             
                                        <div class="col-xs-3">
                                            <p><?php echo $son_doughter_wife; ?></p> 
                                        </div>
                                        <div class="col-xs-1">
                                            :
                                        </div>
                                        <div class="col-xs-8">
                                            <p><?php echo $son_doughter_wife_mr_mrs; ?> <?php echo $swd_of; ?></p>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">                             
                                        <div class="col-xs-3">
                                            <p>R/o</p>  
                                        </div>
                                        <div class="col-xs-1">
                                            :
                                        </div>
                                        <div class="col-xs-8">
                                            <p><?php echo $addr ?>
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
                                                ?></p>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">                               
                                        <div class="col-xs-3">
                                            <p> PAN No.</p> 
                                        </div>
                                        <div class="col-xs-1">
                                            :
                                        </div>
                                        <div class="col-xs-8">
                                            <p><?php echo $pan; ?></p>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">                              
                                        <div class="col-xs-3">
                                            <p>DOB</p>
                                        </div>
                                        <div class="col-xs-1">
                                            :
                                        </div>
                                        <div class="col-xs-8">
                                            <p><?php echo $fappl_dob; ?></p>
                                        </div> 
                                    </div> 
                                    <div class="row">                              
                                        <div class="col-xs-3">
                                            <p>Phone No.</p>  
                                        </div>
                                        <div class="col-xs-1">
                                            :
                                        </div>
                                        <div class="col-xs-8">
                                            <p><?php echo $contact_mobile; ?></p>
                                        </div> 
                                    </div> 
                                </div>
                                <div class="col-xs-4">
                                </div>
                            </div> 
                        </form>
                        <br><br><br><br><br><br><br>


                    </div> 
                </div> 
                <?php
            }  //end of pdf else
            ?>
        </div> 


        <script type="text/javascript">

            $(document).ready(function () {
                $('#toppageheader').html('Stamp Value Purpose - Maintenance Agreement <span class="pull-right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="print" id="btnprint" value="print" class="btn btn-sm btn-default" onClick="print_this_doc();">Print&nbsp;&nbsp;<i class="fa fa-print"></i></button></span>');
                $("a:contains(Stamp  Value II)").parent().addClass('active');
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


