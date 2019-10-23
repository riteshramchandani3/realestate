<!DOCTYPE html>
<!--
Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
Unauthorized copying of this file, via any medium is strictly prohibited
Proprietary and confidential.
Written by Oga Technologies, October 1,  2016.
-->
<html>

    <head>
        <title>Society Affidavit b</title>
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
                $doc_type = 'Society Affidavit B';
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
                    $dob = $dtl->fappl_dob;
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
                                <p class="text-left">izfr]</p> 
                            </div>
                            <div class="row">
                                <p>v/;{k@lfpo egksn;] <br>
                                    lEink] jslhMsUl osyQs;j lkslk;Vh <br>
                                    [ktwjh dyka] Hkksiky ¼e-iz-½
                                </p> 
                            </div>

                            <div class="row">
                                <p><b>fo"k; %	lnL;rk gsrq vkosnu i= A</b></p> 
                            </div>
                            <div class="row">
                                <p class="text-left">egksn;]</p> 
                            </div>
                            <div class="row">
                                <p>
                                    eSa <span style="font-family:Titillium;"><?php echo $name; ?></span>&nbsp;firk@ifr <span style="font-family:Titillium;"><?php echo $swd_of; ?></span>&nbsp;lEink] jslhMsUl osyQs;j lkslk;Vh] [ktwjh dyka lfefr] Hkksiky dk@dh lnL; cuuk pkgrk@pkgrh gWawA eq>s laLFkk dk vuq'kklu Lohdkj gSA d`i;k eq>s lnL;rk iznku djus dk d"V djsaA 
                                </p> 
                            </div>
                            <br>
                            <div class="row">
                                <p>
                                    <b>
                                        esjk iw.kZ fooj.k fuEukuqlkj gS %&
                                    </b>
                                </p> 
                            </div>
                            <div class="row">
                                <ol>
                                    <li>
                                        <p>
                                            uke <span style="font-family:Titillium;"><?php echo $name; ?></span>
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            vk;q <span style="font-family:Titillium;"><?php echo $age; ?></span> tUe frfFk <span style="font-family:Titillium;"><?php echo $dob; ?></span>
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            firk@ifr dk uke <span style="font-family:Titillium;"><?php echo $swd_of; ?></span>
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            lnL; oxZ@lkekU;@v0t0@v-t-tk-@fiNM+koxZ --------------------------------------------------------
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            irk <span style="font-family:Titillium;"><?php echo $addr ?>
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
                                                ?></span>
                                        </p>
                                        <p style="font-size: 16px;">
                                            ¼irs ds izek.khdj.k Lo:i jk'kudkMZ ernkrk QksVks ifjp; i=] laifRrdj] fctyhdj@tydj dh jlhnksa esa ls ,d dh QksVks izfr layXu dh tkosa½
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            O;olk; <span style="font-family:Titillium;"><?php echo $occupation; ?></span>
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            O;olk; dk LFkku ,oa irk <span style="font-family:Titillium;"><?php echo $emp_company_name . "," . nbs(1) . $emp_addr . nbs(1) . "(" . $emp_addr_pincode . ")"; ?></span>
                                        </p>
                                    </li>
                                </ol>
                            </div>
                            <div class="row">
                                <p class="text-right">
                                    <b>
                                        gLrk{kj vkosnd
                                    </b>
                                </p>
                            </div>
                            <div class="row">
                                <p class="text-center">
                                    <b>
                                        dk;kZy; mi;ksx gsrq
                                    </b>
                                </p>
                            </div>
                            <div class="row">
                                <p>
                                    Jh@Jherh ------------------------------------- firk@ifr ----------------------------------------- lnL;rk izca/kdkfj.kh lfefr cSBd fnukad ---------------------- ds izLrko Øa- ----------------- ds Lohd`r dh tkrh gS A LFkku ------------------- fnukad -----------------  lnL;rk Øekad ---------------------------
                                </p>
                            </div>
                            <div class="row">
                                <p class="text-right">
                                    <b>
                                        v/;{k ¼lhy½
                                    </b>
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


