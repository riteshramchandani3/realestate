<!DOCTYPE html>
<!--
Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
Unauthorized copying of this file, via any medium is strictly prohibited
Proprietary and confidential.
Written by Oga Technologies, October 1,  2016.
-->
<html>

    <head>
        <title>Society Affidavit a</title>
        <?php
        require_once('assets/html_head_links.php');
        ?>
        <style>

            @media print
            {
                /*@page {size: landscape}*/
                .non-printable { display: none; }
                #printable { display: block;}
                select::-ms-expand {	
                    display: none; 
                }
                select{
                    -webkit-appearance: none;
                    appearance: none;
                    width: auto;
                    border: none !important; 
                    box-shadow: none ;
                    font-size: 20px;
                }
                p{             
                    font-size: 24px;
                    font-family:Kruti-Dev-010;
                }

            }
            @page {
                margin: 5mm 15mm 5mm 15mm;
            }
            p{             
                text-align: justify;
                font-size: 24px;

                font-family:Kruti-Dev-010;
            }
            span{             
                font-size: 20px;
            }
            select{
                font-size: 20px;
            }
            h4,h2{
                font-weight: 600;
                font-family: Titillium;
            }
            .table{
                font-family: Kruti-Dev-010;
                font-size: 20px;

            }
            thead{
                font-weight: 700;
            }
            .table-bordered > thead > tr > th,
            .table-bordered > tbody > tr > th,
            .table-bordered > tfoot > tr > th,
            .table-bordered > thead > tr > td,
            .table-bordered > tbody > tr > td,
            .table-bordered > tfoot > tr > td {
                border: 1px solid #000 !important;
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
                <a href="javascript: history.go(-1)" class="btn btn-primary pull-right clickable non-printable" role="button"><i class="fa fa-arrow-left" aria-hidden="true"></i> &nbsp;&nbsp;Back&nbsp;&nbsp;&nbsp;</a>

                <?php
                $listing = explode('__', $ll);
                $userid = $listing[1];
                $unit_no = $listing[2];
                $doc_type = 'Society Affidavit A';
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
                        <!--a href="<?php //echo base_url('uploads/uploaded_docs/Allotment Letter_144_ESSARJEE SAMPADA_20180131011018.pdf');                ?>">afdfdaf</a--> 
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
                    $swd_of = $dtl->swd_of;
                    $pincode = $dtl->pin_code;
                    ?>
                </div>
                <div id="printable">
                    <div class="container">
                        <form class="form-inline" action="" method ="post">
                            <div class="row">
                                <p class="text-center"><b>laink jslhMsUV~l osyQs;j ,.M esUVhusUl dks&vkWijsfVo lkslk;Vh e;kZ-] Hkksiky</b></p> 
                            </div>

                            <div class="row">
                                <p class="text-center">izi=&^^Pk^^</p> 
                            </div>

                            <div class="row">
                                <p class="text-center">?kks"k.kk&i=</p> 
                            </div>
                            <div class="row">
                                <p class="text-center">¼fu;e 26 dk mifu;e&1½</p> 
                            </div>
                            <div class="row">
                                <p>
                                    eSa Hkou Ø- <span style="font-family:Titillium;"><?php echo $unit_no; ?></span>&nbsp;dk@dh Lokeh gWaw ,oa ;g fd eSa <span style="font-family:Titillium;"><?php echo $name; ?></span>&nbsp;firk@ifr Jh <span style="font-family:Titillium;"><?php echo $swd_of; ?></span>&nbsp;fuoklh& <span style="font-family:Titillium;">
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
                                                ?></span>&nbsp;ftyk&Hkksiky

                                </p> 
                            </div>

                            <div class="row">
                                <p>
                                    dk@dh 'kiFkZiwoZd dFku djrk@djrh gWaw fd lnL;rk xzg.k djuk pkgrk@pkgrh gWaw rFkk eSa bl izdkj dh fdlh vU; lgdkjh laLFkk dk@dh lnL; ugha gWawA e/;izns'k lgdkjh lkslk;Vh fu;e 1962 ds fu;e 26 ds mifu;e ¼1½ ds }kjk tSls visf{kr gS] eSa ,rn~ }kjk ?kksf"kr djrk@djrh gWaw fd eSa laink jslhMsUV~l osyQs;j ,.M esUVhusUl dks&vkWijsfVo lkslk;Vh e;kZ-] Hkksiky ls gh lacaf/kr jgWawaxk@jgWawxh fdlh vU; laLFkk ls ughaA
                                </p> 
                            </div>
                            <div class="row">
                                <p>
                                    fnukad %&<br>
                                    LFkku %&	
                                </p> 
                            </div>
                            <div class="row">
                                <p class="text-right">
                                    gLrk{kj & vkosnd	
                                </p> 
                            </div>
                            <div class="row">
                                <p class="text-left">
                                    xokg dk uke %&
                                </p> 
                            </div>
                            <div class="row">
                                <p>
                                    1- ----------------------------------------------<br>
                                    gLrk{kj -----------------------------------
                                </p> 
                            </div>
                            <div class="col-xs-3">

                            </div>
                            <div class="col-xs-3">

                            </div>
                            <div class="col-xs-6">
                                <p style="text-align: center;">
                                    v/;{k
                                </p> 
                                <br>
                                <p style="text-align: center;">
                                    ^^laink jslhMsUV~l osyQs;j ,.M esUVhusUl
                                </p> 
                                <p style="text-align: center;">
                                    dks&vkWijsfVo lkslk;Vh ek;kZfnr^^] Hkksiky
                                </p> 

                            </div>

                        </form>
                    </div>

                    <br><br><br><br><br><br><br>

                </div> 
            <?php } ?>
        </div> 
    </div> 


    <script type="text/javascript">

        $(document).ready(function () {
            $('#toppageheader').html('Society Affidavit<span class="pull-right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="print" id="btnprint" value="print" class="btn btn-sm btn-default" onClick="print_this_doc();">Print&nbsp;&nbsp;<i class="fa fa-print"></i></button></span>');
            $("a:contains(Society Affidavit)").parent().addClass('active');
        });
        function print_this_doc() {
            window.print();
            /*
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
             
             */
        }
        function fixthis(arg)
        {
            $('#applid option[value=' + arg + ']').attr('selected', 'selected');
        }

    </script>
</body>
</html>


