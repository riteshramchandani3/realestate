<!DOCTYPE html>
<!--
Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
Unauthorized copying of this file, via any medium is strictly prohibited
Proprietary and confidential.
Written by Oga Technologies, October 1,  2016.
-->
<html>

    <head>
        <title>Namantaran</title>
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
                $doc_type = 'Namantaran';
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
                $project_name = $dtl->project_name;
                $block = $dtl->block;
                ?>
            </div>
            <div id="printable">
                <div class="container">
                    <form class="form-inline" action="" method ="post">
                        <div class="row">
                            <div class="col-xs-6">
                                <h4 class="text-left" style="font-family: Titillium;">
                                    <b>
                                        Ref:- ECPL/<?php echo $project_name . nbs(1) . $block; ?>/<?php echo $unit_no; ?>/2018
                                    </b>
                                </h4> 
                            </div>
                            <div class="col-xs-6">
                                <p class="text-right" style="font-family: Titillium;">
                                    Place :  Bhopal<br>
                                    Date : .............
                                </p>
                            </div>

                        </div>
                        <br>
                        <div class="row">
                            <p class="text-left">
                                izfr]
                            </p>
                        </div>
                        <div class="row">
                            <p>
                                uke  <?php echo nbs(2); ?>  % <span style="font-family:Titillium;"><?php echo $name; ?></span> <br>
                                vkRet  % <span style="font-family:Titillium;"><?php echo $swd_of; ?></span> <br>
                                irk  <?php echo nbs(2); ?>  % <span style="font-family:Titillium;"><?php echo $addr ?><?php
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
                                                ?></span> <br>

                            </p>
                        </div>
                        <div class="row">
                            <p class="text-left">
                                egksn;]
                            </p>
                        </div>
                        <br>
                        <div class="row">
                            <p>
                                ,rn }kjk vkidksa lwfpr fd;k tkrk gS fd vkidksa fnukad ----------------------- dks <span style="font-family:Titillium;">Plot No. </span>  <span style="font-family:Titillium;"><?php echo $unit_no; ?></span> xzke cj[ksM+k iBkuh fLFkr dkWyksuh ß,Llkjth vk/kkjf'kyk bZLV CykWdÞ [kljk Øekad 410<span style="font-family:Titillium;">/</span>2, cj[ksM+k iBkuh] rglhy gqtwj] ftyk Hkksiky dk foØ; iath;u fd;k tk pqdk gS] rFkk mlh vk/kkj ij vkidksa rRle; Hkw[k.M dk vf/kiR; Hkh lkSik tk pqdk gSA
                            </p>
                        </div>
                        <br>
                        <div class="row">
                            <p>
                                vr% vki iath;u ds vk/kkj ij jktLo vfHkys[kksa esa viuk fof/kor ukekUrj.k djok ysosa rFkk ml ij okf"kZd ns; Hkw jktLo vkfn dk Hkqxrku jktLo foHkkx esa fu;ekuqlkj izfr o"kZ djrs jgs ;g vkidksa fgr esa gS A iath;u i'pkr fdlh Hkh izdkj dh 'kkldh; ns;rk,W Hkw jktLo] lEifRrdkj] ;k vU; fdlh Hkh izdkj ds dj dk Hkqxrku vkidksa gh ogu djuk gksxk A 
                            </p>
                        </div>
                        <br>
                        <br>
                        <div class="row">
                            <p class="text-left">
                                /kU;okn]
                            </p>
                        </div>
                        <br>
                        <br>
                        <div class="row">
                            <div class="col-xs-4">
                                <p class="text-center">
                                    izs"kd %
                                </p>
                            </div>
                            <div class="col-xs-4">
                            </div>
                            <div class="col-xs-4">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-4">
                                <p class="text-center">
                                    ,Llkjth dUlVªD'kUl izk- fy-
                                </p>
                            </div>
                            <div class="col-xs-4">
                            </div>
                            <div class="col-xs-4">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-xs-4">
                                <p class="text-center">
                                    eSusftax Mk;jsDVj
                                </p>
                            </div>
                            <div class="col-xs-4">
                            </div>
                            <div class="col-xs-4">
                            </div>
                        </div>




                    </form>
                </div>

                <br><br><br><br><br><br><br>

            </div> 
                <?php }?>
        </div> 
    </div> 


    <script type="text/javascript">

        $(document).ready(function () {
            $('#toppageheader').html('Namantaran<span class="pull-right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="print" id="btnprint" value="print" class="btn btn-sm btn-default" onClick="print_this_doc();">Print&nbsp;&nbsp;<i class="fa fa-print"></i></button></span>');
            $("a:contains(Namantaran)").parent().addClass('active');
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


