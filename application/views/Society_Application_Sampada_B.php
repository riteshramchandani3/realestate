<!DOCTYPE html>
<!--
Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
Unauthorized copying of this file, via any medium is strictly prohibited
Proprietary and confidential.
Written by Oga Technologies, October 1,  2016.
-->
<html>

    <head>
        <title>Society Application Sampada B</title>
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
                $doc_type = 'Society Application Sampada B';
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
                    $emp_company_name = $dtl->company_name;
                    $emp_addr = $dtl->fa_empl_addr;
                    $emp_addr_pincode = $dtl->pin_code_emp;
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
                                        izi=&ßcÞ                         
                                    </b>
                                </p> 
                            </div>

                            <div class="row">
                                <div class="col-xs-1">
                                    <p class="text-left">
                                        <b>
                                            izfr]                           
                                        </b>
                                    </p> 


                                </div>
                                <br>
                                <br>
                                <div class="col-xs-6">
                                    <p>
                                        <b>
                                            v/;{k                      
                                        </b>
                                    </p> 
                                    <p>
                                        <b>
                                            laink jslhMsUV~l osyQs;j ,.M esUVhusUl                  
                                        </b>
                                    </p> 
                                    <p>
                                        <b>
                                            dks&vkijsfVo lkslk;Vh e;kZfnr] Hkksiky        
                                        </b>
                                    </p> 
                                </div>
                                <div class="col-xs-2">
                                    &nbsp;
                                </div>
                                <div class="col-xs-2">
                                    <div class="thumbnail" style="height: 170px;">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <p class="text-left">
                                    <b> fo"k; %</b>
                                </p>
                            </div>
                            <div class="row">
                                <p class="text-left">
                                    <b> egksn;]</b>
                                </p>
                            </div>
                            <div class="row">
                                <div class="col-xs-1">                           
                                </div>                           
                                <div class="col-xs-10">
                                    <p>
                                        eSa Hkou Ø- <span style="font-family:Titillium;"><?php echo $unit_no; ?></span> dk@dh Lokeh gwWa ,oa laink jslhMsUV~l osyQs;j ,.M esUVhusUl dks&vkijsfVo lkslk;Vh e;kZ-] Hkksiky dh@dk lnL; cuuk pkgrk@pkgrh gwWaA eq>s laLFkk ds mifu;e ,oa vuq'kklu Lohdkj gSA eSa laLFkk ds ,d va'k Ø; djuk pkgrk@pkgrh gwWaA bl gsrq ,d va'kjkf'k :i;s 500@& rFkk izos'k 'kqYd :i;s 50@& vkosnu i= ds lkFk tek dj jgk@jgh gwWaA d`i;k eq>s lnL;rk iznku djus rFkk va'k vkoafVr djus dk d"V djsaA
                                    </p>
                                </div>

                            </div>
                            <br>
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
                                            <p style="font-family: Titillium; font-size: 24px;">
                                                :
                                            </p>
                                        </td>
                                        <td>
                                            <p><span style="font-family:Titillium;"><?php echo $name; ?></span></p>
                                        </td>
                                    </tr>

                                    <tr>

                                        <td>
                                            <p>
                                                2
                                            </p>
                                        </td>
                                        <td>
                                            <p>
                                                vk;q
                                            </p>
                                        </td>
                                        <td>
                                            <p style="font-family: Titillium; font-size: 24px;">
                                                :
                                            </p>
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
                                                firk@ifr dk uke Jh
                                            </p>
                                        </td>
                                        <td>
                                            <p style="font-family: Titillium; font-size: 24px;">
                                                :
                                            </p>
                                        </td>
                                        <td>
                                            <p><span style="font-family:Titillium;"><?php echo $swd_of; ?></span></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            4
                                        </td>
                                        <td>
                                            <p>
                                                lnL; dk oxZ
                                            </p>
                                        </td>
                                        <td>
                                            <p style="font-family: Titillium; font-size: 24px;">
                                                :
                                            </p>
                                        </td>
                                        <td>
                                            <p>-------------------------------------------------------------------------------------------</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            5
                                        </td>
                                        <td>
                                            <p>
                                                irk fuoklh
                                            </p>
                                        </td>
                                        <td>
                                            <p style="font-family: Titillium; font-size: 24px;">
                                                :
                                            </p>
                                        </td>
                                        <td>
                                            <p><span style="font-family:Titillium;"><span style="font-family:Titillium;"><?php echo $addr ?>
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
                                                        ?></span></span></p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            6
                                        </td>
                                        <td>
                                            <p>
                                                O;olk;
                                            </p>
                                        </td>
                                        <td>
                                            <p style="font-family: Titillium; font-size: 24px;">
                                                :
                                            </p>
                                        </td>
                                        <td>
                                            <p><span style="font-family:Titillium;"><?php echo $occupation; ?></span></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            7
                                        </td>
                                        <td>
                                            <p>
                                                O;olk; dk LFkku ,oa irk
                                            </p>
                                        </td>
                                        <td>
                                            <p style="font-family: Titillium; font-size: 24px;">
                                                :
                                            </p>
                                        </td>
                                        <td>
                                            <p><span style="font-family:Titillium;">

                                                    <span style="font-family:Titillium;"><?php echo $emp_company_name ?><?php
                                                        if ($emp_addr == '') {
                                                            echo '';
                                                        } else if ($emp_addr != '') {
                                                            echo '<span>,</span>';
                                                            echo $emp_addr;
                                                        }
                                                        ?>
                                                        <?php
                                                        if ($emp_addr_pincode == '') {
                                                            echo '';
                                                        } else if ($emp_addr_pincode != '') {
                                                            echo '<span>(</span>';
                                                        }
                                                        ?><?php echo $emp_addr_pincode; ?><?php
                                                        if ($emp_addr_pincode == '') {
                                                            echo '';
                                                        } else if ($emp_addr_pincode != '') {
                                                            echo '<span>)</span>';
                                                        }
                                                        ?>
                                                    </span></p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            8
                                        </td>
                                        <td>
                                            <p>
                                                mRrjkf/kdkjh ¼ukWeuh½ dk uke
                                            </p>
                                        </td>
                                        <td>
                                            <p style="font-family: Titillium; font-size: 24px;">
                                                :
                                            </p>
                                        </td>
                                        <td>
                                            <p>-------------------------------------------------------------------------------------------</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            9
                                        </td>
                                        <td>
                                            <p>
                                                mRrjkf/kdkjh dk lnL; ls laca/k
                                            </p>
                                        </td>
                                        <td>
                                            <p style="font-family: Titillium; font-size: 24px;">
                                                :
                                            </p>
                                        </td>
                                        <td>
                                            <p>-------------------------------------------------------------------------------------------</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            10
                                        </td>
                                        <td>
                                            <p>
                                                xokg dk uke
                                            </p>
                                        </td>
                                        <td>
                                            <p style="font-family: Titillium; font-size: 24px;">
                                                :
                                            </p>
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
                                                irk
                                            </p>
                                        </td>
                                        <td>
                                            <p style="font-family: Titillium; font-size: 24px;">
                                                :
                                            </p>
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

                                            </p>
                                        </td>
                                        <td>
                                            <p style="font-family: Titillium; font-size: 24px;">
                                                :
                                            </p>
                                        </td>
                                        <td>
                                            <p>-------------------------------------------------------------------------------------------</p>
                                        </td>
                                    </tr>

                                </table>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-xs-6">
                                    <p class="text-left">
                                        fnukad % 
                                    </p>
                                </div>
                                <div class="col-xs-6">

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <p class="text-left">
                                        LFkku% Hkksiky
                                    </p>
                                </div>
                                <div class="col-xs-6">

                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-xs-6">
                                    <p class="text-center">
                                        <b> v/;{k </b>
                                    </p>
                                    <p class="text-center">
                                        <b>  Þlaink jslhMsUV~l osyQs;j ,.M esUVhusUl  </b>
                                    </p>
                                    <p class="text-center">
                                        <b> dks&vkijsfVo lkslk;Vh e;kZfnrÞ] Hkksiky</b>
                                    </p>
                                </div>
                                <div class="col-xs-6">
                                    <p class="text-center">
                                        <b> Hkonh;</b>
                                    </p>
                                    <p class="text-center">
                                        <b> ¼gLrk{kj vkosnd½ </b>
                                    </p>
                                </div>
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
            $('#toppageheader').html('Society Application Sampada B<span class="pull-right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="print" id="btnprint" value="print" class="btn btn-sm btn-default" onClick="print_this_doc();">Print&nbsp;&nbsp;<i class="fa fa-print"></i></button></span>');
            $("a:contains(Society Application Sampada B)").parent().addClass('active');
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


