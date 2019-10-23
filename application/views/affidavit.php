<!DOCTYPE html>
<!--
Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
Unauthorized copying of this file, via any medium is strictly prohibited
Proprietary and confidential.
Written by Oga Technologies, October 1,  2016.
-->
<html>

    <head>
        <title>Affidavit</title>
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
                    margin-top:100px;
                    width: 216mm !important;
                    height: 356mm !important;
                }


            }
            @page {
                margin: 5mm 15mm 5mm 15mm;
            }
            p{             
                font-family: arial;
                text-align: justify;
                font-size: 16px;
            }
            h4{
                font-weight: 600;
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
           /*     $listing = explode('__', $ll);
                $userid = $listing[1];
                $unit_no = $listing[2];
                $doc_type = 'Affidavit';
                $pdf = $this->Search_all_form_model->first_check_pdf($userid, $doc_type);

                if ($pdf == 'error') {
                    $browsername = $_SERVER['HTTP_USER_AGENT'];
                    if (strpos($browsername, 'Chrome')) {
                        ?>
                        <iframe style="width: 1107px; height: 1200px;" src="<?php echo base_url($pdf); ?>"></iframe>
                        <?php
                    } else {
                        ?>
                        <OBJECT data="<?php echo base_url($pdf); ?>" TYPE="application/x-pdf" TITLE="SamplePdf" WIDTH=1000 HEIGHT=1500 style="margin-left:140px;">
                        <!--a href="<?php //echo base_url('uploads/uploaded_docs/Allotment Letter_144_ESSARJEE SAMPADA_20180131011018.pdf');          ?>">afdfdaf</a--> 
                        </object>
                        <?php
                    }
                } else {
                  */  ?>


                    <br> <br> <br>

                    <?php
                    $listing = explode('__', $ll);
                    $userid = $listing[1];
                    $unit_no = $listing[2];
                    $dtl = $this->Search_all_form_model->getdtlsappl($userid, $unit_no);
                    $name = $dtl->name;
                    $age = $dtl->fappl_age;
                    $son_doughter_wife = $dtl->son_doughter_wife;
                    $son_doughter_wife_mr_mrs = $dtl->son_doughter_wife_mr_mrs;
                    $swd_of = $dtl->swd_of;
                    $addr = $dtl->present_addr;
                    $pincode = $dtl->pin_code;
                    $project_name = $dtl->project_name;
                    $block = $dtl->block;
                    $ca_name = $dtl->ca_name;
                    $ca_name_1 = $dtl->ca_name_1;
                    $mr_mrs = $dtl->mr_mrs;
                    $ca_mr_mrs = $dtl->ca_mr_mrs;
                    $ca_mr_mrs_1 = $dtl->ca_mr_mrs_1;
                    ?>
                    <?php
                    foreach ($this->Company_info_model->get_Company_name() as $row) {
                        ?> 

                        <?php $company_name = $row->value; ?>
                    <?php } ?>
                </div>
                <div id="printable">
                    <div class="container">

                        <?php
                        $sql = "SELECT date_of_document FROM documents_tbl WHERE applicant_id='$userid' and doc_type like'%Agreement%'";
                        //print_r($sql);
                        $this->db->query($sql);
                        // print_r($sql);
                        if ($this->db->affected_rows() > 0) {
                            ?>


                            <form class="form-inline" action="<?php echo site_url('Allotment_letter/search_id'); ?>" method ="post">
                                <div class="row text-center">

                                    <h4><u>A F F I D A V I T</u></h4>

                                </div>
                                <br>
                                <div class="row">

                                    <p>
                                        I <?php echo $name; ?> (Age <?php echo $age; ?> Yrs.) <?php echo $son_doughter_wife . nbs(1) . $son_doughter_wife_mr_mrs . nbs(1) . $swd_of; ?>, 
                                        R/o:<?php echo $addr ?>
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
                                        State on oath that I have purchased a residential Unit No. <?php echo $unit_no; ?> at 
                                        <?php echo $project_name . nbs(1) . $block; ?> on Kh. No. 824/1, 825/2, 828/1/2, 816, 827/1, 825/1/क, 825/1/ख, 828/1/1/ख  & 827/2 at Khajuri Kalan, Tehsil Huzur, Dist. Bhopal,
                                        Ward No. 62. Promoted and constructed by <?php echo $company_name; ?>
                                        I Know all the changes  in my Unit done by the Builder/Coloniser from the
                                        approved plan & development permission of Municipal Corporation Bhopal &
                                        What so ever internal changes are on my request. I am fully satisfied with 
                                        the Construction & specification. Built up area is as per agreement dated
                                        <?php
                                        $id = $userid;
                                        foreach ($this->Agreement_model->document_date($id) as $row) {
                                            ?>

                                            <?php $dateofdocument = $row->date_of_document; ?>

                                        <?php } ?> 


                                        <?php
                                        $x = explode(' ', $dateofdocument);
                                        $dateofdocument = new DateTime($x[0]);
                                        echo $dateofdocument->format('d-m-Y');
                                        ?>. There is no balance work in Unit No.  <?php echo $unit_no; ?>. I also state on
                                        oath that:
                                    </p>

                                </div>
                                <br>

                                <div class="row">
                                    <ol>
                                        <li>
                                            <p>
                                                That I will regularly pay the charges for supply water, street light,
                                                STP & other common  maintenance like contribution towards chokidar salary, 
                                                sweeper salary & other Misc. Expenses as decided by the committe.
                                            </p>                                
                                        </li>
                                        <li>
                                            <p>
                                                Before the formation of committee the above said charges shall be deposited
                                                with the Coloniser / builder on monthly basis.
                                            </p>                                
                                        </li>
                                        <li>
                                            <p>
                                                That I will not misuse the common facilities provided by the Coloniser.
                                            </p>                               
                                        </li>
                                        <li>
                                            <p>
                                                That the decision taken by the committee will be final & binding upon me.
                                            </p>                              
                                        </li>
                                        <li>
                                            <p>
                                                That in case of common maintenance of sewer line, STP, water supply &  
                                                street light / External  Electrical Network and 33x11 5mb substation. 
                                                I will allow to maintain it through my premises  (if required) .
                                            </p>                             
                                        </li>
                                        <li>
                                            <p>
                                                That I will pay regularly electricity bill for my house as charged by the
                                                electricity board.
                                            </p>                            
                                        </li>
                                        <li>
                                            <p>
                                                That Iwill not make any additional constructions in front M.O.S. of 3m & rear 
                                                M.O.S. of 1.5m or as per approved  plan by  the Municipal  Corporation  Bhopal .
                                            </p>                          
                                        </li>
                                        <li>
                                            <p>
                                                That I will not damage any common system which has been provided by the Coloniser /
                                                developer  for  the  common  use .
                                            </p>                 
                                        </li>
                                        <li>
                                            <p>
                                                That I will deposit  land  revenue  &  property  tax, solid waste management charges &
                                                any other applicable charges of  my  land  &  house  yearly, this  will be  my  
                                                responsibility  to  deposit  it  timely .
                                            </p>

                                        </li>
                                    </ol>
                                </div>
                                <div class="row">
                                    <p class="pull-right">Deponent </p>
                                </div>
                                <br>
                                <div class="row">
                                     <b>  <p class="pull-right"> 
                                            <?php echo $mr_mrs . nbs(1) . $name; ?><br>
                                            <?php echo $ca_mr_mrs . nbs(1) . $ca_name; ?><br>
                                            <?php echo $ca_mr_mrs_1 . nbs(1) . $ca_name_1; ?><br>
                                        </p>
                                    </b>
                                </div>
                               <br>
                                <div class="row text-center">
                                    <label>VERIFICATION</label>
                                </div>
                                <br>
                                <div class="row">
                                    <p>
                                        The above named deponent, do here by solemnly verifies that the contents 
                                        contained in above paragraphs are true and correct to the best of my
                                        knowledge and belief. 
                                    </p>
                                    <p>
                                        Signed and verified at Bhopal on Dated    ____________________.
                                    </p>
                                </div>
                                <br>
                                <div class="row">
                                    <p class="pull-right">Deponent </p>
                                </div>
                                <br>
                                <div class="row">
                                    <b>  <p class="pull-right"> 
                                            <?php echo $mr_mrs . nbs(1) . $name; ?><br>
                                            <?php echo $ca_mr_mrs . nbs(1) . $ca_name; ?><br>
                                            <?php echo $ca_mr_mrs_1 . nbs(1) . $ca_name_1; ?><br>
                                        </p>
                                    </b>

                                </div>


                                <div class="row">
                                    <p><b>Dated:-&nbsp;<?php //echo date('d-m-Y') ?></b></p>
                                </div>
                                <div class="row">
                                    <p><b>Place:- Bhopal (M.P.)</b></p>
                                </div>


                            </form>
                        <?php } else { ?>
                            <div class="container" style="width: 82%;">
                                <div class="alert alert-info text-center" role="alert">Please Fill the Agreement Upload Date</div>
                            </div>
                        <?php } ?>
                    </div> 

                </div> 
                <?php
           // }  //end of pdf else
            ?>
        </div> 


        <script type="text/javascript">

            $(document).ready(function () {
                $('#toppageheader').html('Affidavit <span class="pull-right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="print" id="btnprint" value="print" class="btn btn-sm btn-default" onClick="print_this_doc();">Print&nbsp;&nbsp;<i class="fa fa-print"></i></button></span>');
                $("a:contains(Affidavit)").parent().addClass('active');
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


