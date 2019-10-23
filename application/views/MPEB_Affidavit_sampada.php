<!DOCTYPE html>
<!--
Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
Unauthorized copying of this file, via any medium is strictly prohibited
Proprietary and confidential.
Written by Oga Technologies, October 1,  2016.
-->
<html>

    <head>
        <title>MPEB Affidavit Sampada</title>
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

            }
            @page {
                margin: 5mm 15mm 5mm 15mm;
            }
            p{             
                text-align: justify;
                font-size: 20px;

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
                $doc_type = 'MPEB Affidavit Sampada';
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

                            <p class="text-center"><b>'kiFk & i=</b></p> 

                        </div>
                        <div class="row">
                            <p>
                                eSa <span style="font-family:Titillium;"><?php echo $name; ?></span> iq=@ifRu <span style="font-family:Titillium;"><?php echo $swd_of; ?></span>] fuoklh% <span style="font-family:Titillium;">
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
                                                ?></span> 'kiFk iwoZd dFku djrk@djrh gwaW fd%& 
                            </p>
                            <br><br>
                            <ol>
                                <li>
                                    <p>
                                        eSus e-iz-e-{ks- fo|qr forj.k daiuh fyfeVsM] Hkksiky ds laHkkx oYyHk uxj esa edku ua-       <span style="font-family:Titillium;"><?php echo $unit_no; ?></span>] okMZ Øekad 62 eksgYyk ,Llkjth lEink] [ktwjh dyka Hkksiky esa Fkzh Qsl esa ,d dusD'ku izdk'k@ikoj dusD'ku gsrq ---------------------------------- uke ls ,d LFkkbZ fo|qr dusD'ku dh ekax dh gSA
                                    </p> 
                                </li>
                                <li>
                                    <p>
                                        mDr vkosfnr ifjlj esjs oS| vkf/kiR; esa gS rFkk bl laca/k esa dksbZ Hkh okn fdlh U;k;ky; esa yfEcr ugha gSA                           
                                    </p> 
                                </li>
                                <li>
                                    <p>
                                        eq>s esjs mDr ifjlj esa LFkkbZ dusD'ku fn, tkus ds mijkar LokfeRo ;k vU; fdlh laca/k esa fookn gksus dh fLFkfr esa] eSa Lo;a mlds fy;s ftEesnkj jgwaxk@jgwaxh o fo|qr forj.k daiuh fyfeVsM dh fdlh izdkj dh cdk;k jkf'k ugha gS vkSj ,sls fdlh fookn ds dkj.k daiuh fyfeVsM dks vf/kdkj gks fd eq>s fn, x, mDr dusD'ku dks fcuk fdlh iwoZ lwpuk ds foPNsfnr dj nsaA                          
                                    </p> 
                                </li>
                                <li>
                                    <p>
                                        esjh leLr tkudkjh dss vuqlkj esjs ftl ifjlj esa mDr dusD'ku dh ekax dh xbZ gS] ml iwjs ifjlj esa esjs ;k vU; fdlh ds uke ls fo|qr forj.k daiuh fyfeVsM dh iqjuh ;k pkyw fdlh Hkh izdkj dh cdk;k jkf'k ugha gS vkSj ,sls fdlh fookn ds dkj.k e.My dks vf/kdkj gksxk fd eq>s fn, x, mDr dusD'ku dks fcuk fdlh iwoZ lwpuk ds foPNsfnr dj nsaA
                                    </p> 
                                </li>
                                <li>
                                    <p>
                                        esjs ikl edku ds LokfeRo n'kkZus gsrq nLrkost jftLVªh@Hkksiky fuxe }kjk Lohd`r Hkou vuqKk ,oa ekufp= dh Nk;kizfr layXu gSA bl txg ij dusD'ku nsus ds mijkar ;fn ftyk/;{k utwy Hkksiky] uxj fuxe] Hkksiky vFkok fdlh 'kkldh;@ v)Z'kkldh;@xSj 'kkldh; dk;kZy; ;k laLFkk ;k O;fDr dh fdlh izdkj dh vkifRr gksxh mlds fy, eSa Lo;a gh ftEesnkj jgwaxk@jgwaxh A ;fn fdlh laLFkk dks vkifRr gksxh rks e-iz-e-{ks- fo|qr forj.k daiuh fyfeVsM dks vf/kdkj gksxk fd cxSj fdlh iwoZ lwpuk ds esjs dusD'ku dkV nsa A bl ij eq>s dksbZ vkifRr ugha gksxh A ml ij gksus okys O;; @ uqdlku vkfn ds fy;s iw.kZ :i ls ftEesnkj jgwaxk@jgwaxhA
                                    </p> 
                                </li>
                                <li>
                                    <p>
                                        esjs edku ij dkMZ dusD'ku@iwoZ dusD'ku dh tks Hkh cdk;k jkf'k gksxh mldk Hkqxrku eSa fd'rksa esa tek djkus dh lgefr nsrk@nsrha gwaA
                                    </p> 
                                </li>
                            </ol>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-xs-4">
                            </div>
                            <div class="col-xs-4">
                            </div>
                            <div class="col-xs-4 text-center">
                                <p>
                                    'kiFkxzfgrk<br>
                                    ¼--------------------------½
                                </p>

                            </div>
                        </div>
                        <br>
                        <div class="row" style="font-family: Kruti-Dev-010; font-size: 20px;">
                            <center>lR;kiu</center>
                        </div>
                        <br>
                        <div class="row text-center">
                            <p>
                                eSa <span style="font-family:Titillium;"><?php echo $name; ?></span> mDr 'kiFkxzfgrk lR;kfir djrk@djrh gwW fd mDr 'kiFk i= esa pj.k dzekad 1 ls 6 esa nh xbZ tkudkjh esjs Kku ,oa fo'okl ds vuqlkj lgh gSA  
                            </p>
                        </div>
                        <br>
                        <div class="row text-center">
                            <p>
                                lR;kiu vkt fnukad ------------------------ dks Hkksiky esa fd;k x;k gSA 
                            </p>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-xs-4">
                            </div>
                            <div class="col-xs-4">
                            </div>
                            <div class="col-xs-4 text-center">
                                <p>
                                    'kiFkxzfgrk<br>
                                    ¼--------------------------½
                                </p>

                            </div>
                        </div>

                    </form>


                    <br><br><br><br><br><br><br>

                </div> 
            </div> 
                <?php } ?>
        </div> 


        <script type="text/javascript">

            $(document).ready(function () {
                $('#toppageheader').html('MPEB Affidavit Sampada<span class="pull-right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="print" id="btnprint" value="print" class="btn btn-sm btn-default" onClick="print_this_doc();">Print&nbsp;&nbsp;<i class="fa fa-print"></i></button></span>');
                $("a:contains(MPEB_Affidavit_sampada)").parent().addClass('active');
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


