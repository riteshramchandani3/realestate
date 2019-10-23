<!DOCTYPE html>
<!--
Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
Unauthorized copying of this file, via any medium is strictly prohibited
Proprietary and confidential.
Written by Oga Technologies, October 1,  2016.
-->

<html>
    <head>
        <title>Undertaking Letter</title>
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
                    margin-top: 100px;
                    width: 216mm !important;
                    height: 356mm !important;
                }
            }
            @page {

                margin: 5mm 15mm 5mm 15mm;
            }

            body{

                font-family: Arial !important;
                font-size: 16px !important;
            }

            ol> li>  p{

                text-align: justify !important;

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
        /*        $listing = explode('__', $ll);
                $userid = $listing[1];
                $unit_no = $listing[2];
                $doc_type = 'Undertaking Form';
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
                        <!--a href="<?php //echo base_url('uploads/uploaded_docs/Allotment Letter_144_ESSARJEE SAMPADA_20180131011018.pdf');             ?>">afdfdaf</a--> 
                        </object>
                        <?php
                    }
                } else {} 
                */
                    ?>
                <br> <br> <br> 

                <?php
                $listing = explode('__', $ll);
                $userid = $listing[1];
                $unit_no = $listing[2];
                $dtl = $this->Search_all_form_model->getdtlsappl($userid, $unit_no);
                $name = $dtl->name;
                $fappl_age = $dtl->fappl_age;
                $son_doughter_wife = $dtl->son_doughter_wife;
                $son_doughter_wife_mr_mrs = $dtl->son_doughter_wife_mr_mrs;
                $swd_of = $dtl->swd_of;
                $addr = $dtl->present_addr;
                $pincode = $dtl->pin_code;
                $project_name = $dtl->project_name;
                $block = $dtl->block;
                $location = $dtl->location;
                $mr_mrs = $dtl->mr_mrs;
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

            <?php
            $sql = "SELECT date_of_document FROM documents_tbl WHERE applicant_id='$userid' and doc_type like '%Allotment Letter%'";
            //print_r($sql);
            $this->db->query($sql);
            // print_r($sql);
            if ($this->db->affected_rows() > 0) {
                ?>
                <div id="printable">
                    <div class="container">



                        <div class="row text-center">
                            <h3><u>UNDERTAKING</u></h3>
                        </div>
                        <br>
                        <div class="row">
                            <p><span>I/We <?php echo $mr_mrs . nbs(1) . $name; ?></span> (Age <span><?php echo $fappl_age; ?></span> Yrs. )&nbsp;<?php echo $son_doughter_wife; ?> <?php echo $son_doughter_wife_mr_mrs; ?> <?php echo $swd_of; ?> R/o: 
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
                                                ?> do hereby undertake and declare on oath, as under:-</P>

                        </div>
                        <div class="row">
                            <ol>
                                <li>
                                    <p> That M/s <?php echo $company_name; ?>, a Company registered and incorporated under the provisions of Companies Act, 1956, having its registered office at <?php echo $addr ?>
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
                                                ?> hereinafter called the Developer Company is developing and constructing its residential project known as "<?php echo $project_name . nbs(1) . $block; ?>" Bhopal.</p>

                                </li>
                                <li>

                                    <p>That I had applied for allotment of a residential unit/duplex in the said project and the said Developer Company had allotted a residential unit/duplex/House no. <?php echo $unit_no; ?> at "<?php echo $project_name . nbs(1) . $block; ?>", <?php echo $location; ?> (M.P.) on the terms and conditions of the <b>allotment </b>letter dt.<span>&nbsp;
                                            <?php
                                            $id = $userid;
                                            foreach ($this->Allotment_letter_model->document_date($id) as $row) {
                                                ?>

                                                <?php $dateofdocument = $row->date_of_document; ?>

                                            <?php } ?> 


                                            <?php
                                            $x = explode(' ', $dateofdocument);
                                            $dateofdocument = new DateTime($x[0]);
                                            echo $dateofdocument->format('d-m-Y');
                                            ?></span> terms of which has already been accepted by me.</P>
                                </li>
                                <li>
                                    <p> That I am aware that the State Government of MP had levied VAT Tax over all such transactions between the Developers/Builders and respective Purchasers of duplex and accordingly I had also agreed to pay the said VAT charges to the State Government of MP. However in view of the recent stay order/judgment passed by Hon'ble High Court of Madhya Pradesh the recovery of such VAT charges payable on transaction of residential unit/duplex between the Developer and Purchaser have been stayed, subject to further confirmation of the same by the State Government of MP.</p>

                                </li>
                                <li>
                                    <p>  That accordingly the Developer Company mentioned above has kindly agreed not to recover and deposit such VAT charges w.e.f. 07.02.2013, subject to the undersigned submitting this undertaking that in case at any time in future, if the said VAT charges are lawfully levied by the State Government of MP of the decision of Hon'ble M.P. High Court is reversed by any other Higher Court of Law, then I shall be duty bound to pay such VAT charges payable as per agreed terms.</P>

                                </li>
                                <li>
                                    <p>That I hereby accordingly agree and undertake that if at any stage the said VAT or any other statutory dues are levied again and/or the same are not withdrawn by the State Government of MP, then I shall solely be liable to pay the due amount of such VAT or any other statutory charges payable at any stage without any demur to the Developer Company, merely or demand. I further agree to pay to the Developer Company, all or any such liability arising in future on account of VAT or any other statutory charges as per State Government norms alongwith revised Service Tax if any pertaining to the above transaction entered into by me with the Developer Company.<p>

                                </li>
                                <li>
                                    <p> That I agree that the amount with respect to VAT or any other statutory charges, ascertained by the Developer Company as per Government directions will be final, conclusive and binding in all respect on me and I agree and undertake to pay the same within a week from the date of such communication received from the Developer Company. Further notwithstanding what is stated in the preceding paragraph, without prejudice to the Developer Company's other rights and remedies, the company shall be entitled to charge at its own discretion, interest on the outstanding or any portion of thereof or for any default or irregularity on my/our part, which in opinion of the company warrants charging of such enhanced rates of interest for such period as the company may deem fit. Accordingly I hereby agree and undertake that in case of any delay/default,without prejudice to other legal rights of the Developer Company, I also expressly agree to pay all such dues alongwith due interest thereon @ 18% p.a.</P>

                                </li>
                                <li>
                                    <p>That I hereby further undertake that in case I fail to pay the due VAT or any other statutory charges levied in future and demanded by the Developer Company, then the Developer Company shall have an absolute right to recover against said duplex and I shall not have any right of objection thereto.</P>
                                </li>
                                <li>
                                    <p>That I further agree and undertake that until and unless the entire dues of the Developer Company are fully paid and settled including the VAT or any other statutory charges and other related charges, the Developer Company shall continue to have a lien over the said duplex allotted to me and in such case I shall not claim possession of my said duplex until I clear and pay the entire dues thereof.</p>
                                </li>
                                <div class="hidden-lg hidden-md hidden-sm"><br><br><br><center>-- 2 --</center><br><br></div>
                                <li>
                                    <p>That I/We hereby further declare and irrevocably undertake that this undertaking may be read as a part of my/our aforesaid allotment letter and all other terms and conditions of the said allotment, except the rate of interest shall remain unchanged and the aforesaid revised terms are acceptable to me/us and henceforth, the said Developer Company shall have a legal right to recover the same by debiting my/our account with the said Developer Company and in that case, I/We shall neither raise nor have any right to raise any objection or claim.</p>
                                </li>
                                <li>
                                    <p>That in addition to the above conditions I/We hereby handover a duly signed account payee undated Blank Cheque No <span>.......................</span> of <span>................................ .............................</span> Bank in the name of Developer Company with a understanding that in case if I/We become liable to pay the said VAT tax in future the developer company reserves the right to deposit the same in their account with advance notice of 07 days to me/us.</p>
                                </li>

                            </ol>
                            <br>
                            <br>
                            <p> IN WITNESS WHERE OF I/We have set and scribed our hands on this deed on this …………… here at Bhopal in presence of witnesses.</p>



                        </div>
                        <br>
                        <br>
                        <div class="row">
                            <div class="col-xs-6">
                                <b> Witnesses</b>
                            </div>

                            <div class="col-xs-6">
                                <b>Allottee/Executant</b>
                            </div>

                        </div>
                        <br>
                        <br>
                        <div class="row">

                            <div class="col-xs-6">
                                <div class="col-xs-1">
                                    1
                                </div>
                                <div class="col-xs-11">
                                    .....................................................<br>
                                    .....................................................<br>
                                    .....................................................
                                </div>

                            </div>
                        </div> <br>
                        <div class="row">

                            <div class="col-xs-6">
                                <div class="col-xs-1">
                                    2
                                </div>
                                <div class="col-xs-11">
                                    .....................................................<br>
                                    .....................................................<br>
                                    .....................................................
                                </div>

                            </div>
                        </div>



                    </div>
                </div>
            
            <?php  } else { ?>
                <div class="container" style="width: 82%;">
                    <div class="alert alert-info text-center" role="alert">Please Fill the Allotment Letter Upload Date</div>
                </div>
            <?php } ?>
        </div>
        <script>

            $(document).ready(function () {
                $('#toppageheader').html('Undertaking<span class="pull-right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="print" id="btnprint" value="print" class="btn btn-sm btn-default" onClick="print_this_doc();">Print&nbsp;&nbsp;<i class="fa fa-print"></i></button></span>');
                $("a:contains(Undertaking)").parent().addClass('active');
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
