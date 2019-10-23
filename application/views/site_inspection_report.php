<!DOCTYPE html>
<!--
Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
Unauthorized copying of this file, via any medium is strictly prohibited
Proprietary and confidential.
Written by Oga Technologies, October 1,  2016.
-->
<html>

    <head>
        <title>Site Inspection Rreport I</title>
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
                $doc_type = 'Site Inspection Report I';
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
                    $coname1 = $dtl->ca_name;
                    $coname2 = $dtl->ca_name_1;
                    $mr_mrs = $dtl->mr_mrs;
                    $ca_mr_mrs = $dtl->ca_mr_mrs;
                    $ca_mr_mrs_1 = $dtl->ca_mr_mrs_1;
                    $ca_name = $dtl->ca_name;
                    $ca_name_1 = $dtl->ca_name_1;
                    $project_name = $dtl->project_name;
                    $block = $dtl->block;
                    ?>
                </div>
                <div id="printable">
                    <div class="container">
                        <form class="form-inline" action="" method ="post">
                            <div class="row">
                                <div class="col-xs-12 ">
                                    <p class="text-center"><b>Hkou /kkjd }kjk fnukad ------------- dks lkbZV bathfu;j ds lkFk la;qDr :i ls fd;s x;s 	<br>fujh{k.k dk izek.k i= A</b></p> 
                                </div>
                            </div>
                            <div class="row">

                                <p>lsok esa]</p> 
                                <p>
                                    Jheku eSusftax Mk;jsDVj]	<br>						
                                    ,Llkjth dUlVªD'kUl izk-fy-]	<br>					
                                    dk;kZ-&<span style="font-family:Titillium;"> Z-10</span>] estsukbZu ¶yksj] tksu&A]<br>		 		
                                    egkjk.kk izrki uxj] Hkksiky&462011
                                </p> <br>
                                <p>
                                    izkstsDV		%	<span style="font-family:Titillium;"><?php echo $project_name . nbs(1) . $block; ?></span><br>	 	 	 				
                                    Hkou Lokeh dk uke	%	<span style="font-family:Titillium;"><?php echo $mr_mrs . nbs(1) . $name; ?></span>
                                    <?php
                                    if ($ca_mr_mrs == '') {
                                        echo '';
                                    } else if ($ca_mr_mrs == 'Mrs.') {
                                        echo '<span style="font-family:Titillium;">,</span>';
                                    } else if ($ca_mr_mrs == 'Ms.') {
                                        echo '<span style="font-family:Titillium;">,</span>';
                                    } else if ($ca_mr_mrs == 'Mr.') {
                                        echo '<span style="font-family:Titillium;">,</span>';
                                    } else if ($ca_mr_mrs == 'Mrs') {
                                        echo '<span style="font-family:Titillium;">,</span>';
                                    } else if ($ca_mr_mrs == 'Ms') {
                                        echo '<span style="font-family:Titillium;">,</span>';
                                    } else if ($ca_mr_mrs == 'Mr') {
                                        echo '<span style="font-family:Titillium;">,</span>';
                                    }
                                    ?>
                                    <span style="font-family:Titillium;"><?php echo $ca_mr_mrs; ?></span> <span style="font-family:Titillium;"><?php echo $ca_name; ?></span>
                                    <?php
                                    if ($ca_mr_mrs_1 == '') {
                                        echo '';
                                    } else if ($ca_mr_mrs_1 == 'Mrs.') {
                                        echo '<span style="font-family:Titillium;">,</span>';
                                    } else if ($ca_mr_mrs_1 == 'Ms.') {
                                        echo '<span style="font-family:Titillium;">,</span>';
                                    } else if ($ca_mr_mrs_1 == 'Mr.') {
                                        echo '<span style="font-family:Titillium;">,</span>';
                                    } else if ($ca_mr_mrs_1 == 'Mrs') {
                                        echo '<span style="font-family:Titillium;">,</span>';
                                    } else if ($ca_mr_mrs_1 == 'Ms') {
                                        echo '<span style="font-family:Titillium;">,</span>';
                                    } else if ($ca_mr_mrs_1 == 'Mr') {
                                        echo '<span style="font-family:Titillium;">,</span>';
                                    }
                                    ?>

                                    <span style="font-family:Titillium;"><?php echo $ca_mr_mrs_1; ?></span> <span style="font-family:Titillium;"><?php echo $ca_name_1; ?></span><br>
                                    edku ua-		%	<span style="font-family:Titillium;"><?php echo $unit_no; ?></span><br>								
                                    fujh{k.k fnukad	%
                                </p>
                                <br>

                                <span style="font-family:Kruti-Dev-010;">
                                    eS </span>
                                <select id="applid" style="font-family: Titillium;" onchange="fixthis(this.value);" name="son_doughter_wife">
                                    <option value="<?php echo $name; ?>"><?php echo $name; ?></option>

                                    <?php
                                    if ($coname1 != '') {
                                        ?>
                                        <option value="<?php echo $coname1; ?>"><?php echo $coname1; ?></option>
                                        <?php
                                    }
                                    if ($coname2 != '') {
                                        ?>
                                        <option value="<?php echo $coname2; ?>"><?php echo $coname2; ?></option>
                                        <?php
                                    }
                                    ?>

                                </select>
                                <span style="font-family:Kruti-Dev-010;"> izekf.kr djrk gwa fd vkt fnukad ------------------------ dks eSus vkoafVr edku ua-  <span style="font-family:Titillium;"><?php echo $unit_no; ?></span> izkstsDV ,Llkjth laink esa tkWp gsrq fofHkUu dk;ksZ dk voyksdu lkbZV bapktZ@bathfu;j Jh </span>

                                <select style="font-family: Titillium;" id="selcat" name="category_select"  > 

                                </select>

                                &nbsp;<span style="font-family:Kruti-Dev-010;"> ds lkFk la;qDr :i ls fd;k gSA bu lHkh  dk;ksZ dk fooj.k ,oa fLFkfr fuEukuqlkj gS %& </span>

                                <br>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <td>Øa-</td>
                                            <td>dk;Z dk fooj.k</td>
                                            <td>orZeku fLFfr</td>
                                            <td>fVIi.kh</td>
                                            <td>gLrk{kj</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>nhoky ,oa Nr dk dk;Z IykLVj lfgr A</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Q'kZ dk dk;Z vkSj f?klkbZ ,oa ikfy'k A</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>fctyh dk dk;Z A</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>ty iznk; ,oa LoPNrk dk;ZA</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>isafVax dk;Z A</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>daiuh lk/ku ds vuqlkj vU; dk;Z A</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Iyacj ,oa lsusVjh dk;Z A </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br>
                                <p>
                                    mijksDrkuqlkj voyksdu ds vk/kkj ij iqu% eSa izekf.kr djrk gwa fd esjs edku ,oa dkWyksuh ds fodkl ds lHkh dk;Z vuqca/kkuqlkj larks"ktud gS A
                                </p>
                                <br>
                                <div class="row">
                                    <div class="col-xs-4 text-left">
                                        <p>gLrk{kj ¼lkbZV bathfu;j@bapktZ½</p>
                                    </div>
                                    <div class="col-xs-4">
                                        &nbsp;
                                    </div>
                                    <div class="col-xs-4 text-right">
                                        <p>gLrk{kj ¼Hkou Lokeh½</p>
                                    </div>
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
                $('#toppageheader').html('Site Inspection Report I <span class="pull-right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="print" id="btnprint" value="print" class="btn btn-sm btn-default" onClick="print_this_doc();">Print&nbsp;&nbsp;<i class="fa fa-print"></i></button></span>');
                $("a:contains(Stamp Value I)").parent().addClass('active');


                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('Search_all_form_ctrl/site_engineer_name'); ?>",
                    data: {},
                    success: function (msg) {

                        if (msg == 0)
                        {
                            //alert("no property kindly find another project");
                            //document.getElementById("submit").disabled = true;
                            document.getElementById("selcat").length = 0;
                        } else
                        {
                            var msgarray = msg.split(',');
                            var selptr = document.getElementById('selcat');
                            selptr.length = 0;
                            var opt = document.createElement('option');
                            opt.value = 0;
                            opt.text = "--Select--";
                            selptr.appendChild(opt);
                            for (var i = 0; i < msgarray.length - 1; i++)
                            {
                                var opt = document.createElement('option');
                                opt.value = msgarray[i].trim();
                                opt.text = msgarray[i].trim();
                                selptr.appendChild(opt);
                            }

                        }//end of else
                    }
                });

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


