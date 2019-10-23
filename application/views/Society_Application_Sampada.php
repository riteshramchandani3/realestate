<!DOCTYPE html>
<!--
Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
Unauthorized copying of this file, via any medium is strictly prohibited
Proprietary and confidential.
Written by Oga Technologies, October 1,  2016.
-->
<html>

    <head>
        <title>Society Application Sampada</title>
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
                $doc_type = 'Society Application Sampada';
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
                        <!--a href="<?php //echo base_url('uploads/uploaded_docs/Allotment Letter_144_ESSARJEE SAMPADA_20180131011018.pdf');                 ?>">afdfdaf</a--> 
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
                    $age = $dtl->fappl_age;
                    $swd_of = $dtl->swd_of;
                    $pincode = $dtl->pin_code;
                    $occupation = $dtl->occupation;
                    ?>
                </div>
                <div id="printable">
                    <div class="container">
                        <form class="form-inline" action="" method ="post">
                            <div class="row">
                                <p class="text-center">
                                    <b>
                                        laink jslhMsUV~l osyQs;j ,.M esUVhusUl dks&vkijsfVo lkslk;Vh e;kZ-] Hkksiky
                                    </b>
                                </p> 
                            </div>
                            <div class="row">
                                <p class="text-center">
                                    <b>
                                        izi=&ßvÞ                              
                                    </b>
                                </p> 
                            </div>
                            <div class="row">
                                <p class="text-center">
                                    <b>
                                        izorZdksa ds thouo`Rr ds fy, izksQkekZ                            
                                    </b>
                                </p> 
                            </div>
                            <div class="row text-center">
                                <table class="table">
                                    <tr>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            <p>
                                                iwjk uke
                                            </p>
                                        </td>
                                        <td>
                                        <td>
                                            <p style="font-family: Titillium; font-size: 24px;">
                                                :
                                            </p>
                                        </td>
                                        </td>
                                        <td>
                                            <p><span style="font-family:Titillium;"><?php echo $name; ?></span></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>

                                        </td>
                                        <td>
                                            <p>
                                                firk@ifr Jh
                                            </p>
                                        </td>
                                        <td>
                                        <td>
                                            <p style="font-family: Titillium; font-size: 24px;">
                                                :
                                            </p>
                                        </td>
                                        </td>
                                        <td>
                                            <p><span style="font-family:Titillium;"><?php echo $swd_of; ?></span></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            2
                                        </td>
                                        <td>
                                            <p>
                                                vk;q
                                            </p>
                                        </td>
                                        <td>
                                        <td>
                                            <p style="font-family: Titillium; font-size: 24px;">
                                                :
                                            </p>
                                        </td>
                                        </td>
                                        <td>
                                            <p><span style="font-family:Titillium;"><?php echo $age; ?></span></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            3
                                        </td>
                                        <td>
                                            <p>
                                                irk fuoklh
                                            </p>
                                        </td>
                                        <td>
                                        <td>
                                            <p style="font-family: Titillium; font-size: 24px;">
                                                :
                                            </p>
                                        </td>
                                        </td>
                                        <td>
                                            <p>
                                                
                                                <span style="font-family:Titillium;"><?php echo $addr ?><?php
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
                                                ?></span></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            4
                                        </td>
                                        <td>
                                            <p>
                                                O;olk;@vkthfodk
                                            </p>
                                        </td>
                                        <td>
                                        <td>
                                            <p style="font-family: Titillium; font-size: 24px;">
                                                :
                                            </p>
                                        </td>
                                        </td>
                                        <td>
                                            <p><span style="font-family:Titillium;"><?php echo $occupation; ?></span></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            5
                                        </td>
                                        <td>
                                            <p>
                                                fdlh lgdkjh laLFkk ;k 
                                            </p>
                                        </td>
                                        <td>
                                        <td>
                                            <p style="font-family: Titillium; font-size: 24px;">
                                                :
                                            </p>
                                        </td>
                                        </td>
                                        <td>
                                            <p>-------------------------------------------------------------------------------------------</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>

                                        </td>
                                        <td>
                                            <p>
                                                vU; O;olk; laca/kh vuqHko
                                            </p>
                                        </td>
                                        <td>
                                        <td>
                                            <p style="font-family: Titillium; font-size: 24px;">
                                                :
                                            </p>
                                        </td>
                                        </td>
                                        <td>
                                            <p>-------------------------------------------------------------------------------------------</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            6
                                        </td>
                                        <td>
                                            <p>
                                                lgdkfjrk rFkk vU; {ks=ksa laca/kh lkekftd
                                            </p>
                                        </td>
                                        <td>
                                        <td>
                                            <p style="font-family: Titillium; font-size: 24px;">
                                                :
                                            </p>
                                        </td>
                                        </td>
                                        <td>
                                            <p>-------------------------------------------------------------------------------------------</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>

                                        </td>
                                        <td>
                                            <p>
                                                vkfFkZd xfrfof/k;ksa dk C;kSjk nsa%&
                                            </p>
                                        </td>
                                        <td>
                                        <td>
                                            <p style="font-family: Titillium; font-size: 24px;">
                                                :
                                            </p>
                                        </td>
                                        </td>
                                        <td>
                                            <p>-------------------------------------------------------------------------------------------</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            7
                                        </td>
                                        <td>
                                            <p>
                                                D;k vki vU; lgdkjh lfefr@cSad ds 
                                            </p>
                                        </td>
                                        <td>
                                        <td>
                                            <p style="font-family: Titillium; font-size: 24px;">
                                                :
                                            </p>
                                        </td>
                                        </td>
                                        <td>
                                            <p>-------------------------------------------------------------------------------------------</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>

                                        </td>
                                        <td>
                                            <p>
                                                m/kkjdrkZ ;k fdlh vU; m/kkjdrkZ ds 
                                            </p>
                                        </td>
                                        <td>
                                        <td>
                                            <p style="font-family: Titillium; font-size: 24px;">
                                                :
                                            </p>
                                        </td>
                                        </td>
                                        <td>
                                            <p>-------------------------------------------------------------------------------------------</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>

                                        </td>
                                        <td>
                                            <p>
                                                tekurnkj ds :i esa pqukSrh ckcr pwddrkZ gSA
                                            </p>
                                        </td>
                                        <td>
                                        <td>
                                            <p style="font-family: Titillium; font-size: 24px;">
                                                :
                                            </p>
                                        </td>
                                        </td>
                                        <td>
                                            <p>-------------------------------------------------------------------------------------------</p>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="row">
                                <p>
                                    eSa Hkou Ø- <span style="font-family:Titillium;"><?php echo $unit_no; ?></span> dk@dh Lokeh gwWa ,oa ,rn~ }kjk ?kksf"kr djrk@djrh gwWa fd Åij fn;k x;k C;kSjk esjh laiw.kZ tkudkjh fo"k; vuqlkj lgh gSA eSa ;g Hkh ?kks"k.kk djrk@djrh gwWa fd lgdkjh lfefr;ka vf/kfu;e vkSj muds varxZr fufeZr fu;eksa ¼;k izLrkfor fu;eksa½ esa fufnZ"V ,slh dksbZ Hkh v;ksX;rk eq>esa ugha gS tks eq>s lgdkjh laLFkk dh izca/k lfefr dk lnL; cukus ds v;ksX; Bgjkrh@jksdrh gksA
                                </p>
                            </div>
                            <br>
                            <br>
                            <div class="row">
                                <p class="text-left">
                                    fnukad %   
                                </p>
                            </div>
                            <div class="row">
                                <p class="text-left">
                                    LFkku % Hkksiky 
                                </p>
                            </div>
                            <div class="row">
                                <p class="text-right">
                                    <b> gLrk{kj vkosnd </b>
                                </p>
                            </div>
                            <div class="row">
                                <div class="col-xs-6 text-center">
                                    <p class="text-center">
                                        <b>v/;{k </b>
                                    </p>
                                    <p class="text-center">
                                        <b>  Þlaink jslhMsUV~l osyQs;j ,.M esUVhusUl   </b>
                                    </p>
                                    <p class="text-center">
                                        <b>  dks&vkijsfVo lkslk;Vh e;kZfnrÞ] Hkksiky  </b>
                                    </p>
                                </div>
                            </div>


                    </div>
                    </form>
                </div>
            <?php } ?>
            <br><br><br><br><br><br><br>

        </div> 
    </div> 
</div> 


<script type="text/javascript">

    $(document).ready(function () {
        $('#toppageheader').html('Society Application Sampada<span class="pull-right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="print" id="btnprint" value="print" class="btn btn-sm btn-default" onClick="print_this_doc();">Print&nbsp;&nbsp;<i class="fa fa-print"></i></button></span>');
        $("a:contains(Society Application Sampada)").parent().addClass('active');
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


