<!DOCTYPE html>
<!--
Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
Unauthorized copying of this file, via any medium is strictly prohibited
Proprietary and confidential.
Written by Oga Technologies, October 1,  2016.
-->
<html>

    <head>
        <title>MAINTENANCE AGREEMENT</title>
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
                $listing = explode('__', $ll);
                $userid = $listing[1];
                $unit_no = $listing[2];
                $doc_type = 'Maintenance Agreement';
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
                        <!--a href="<?php //echo base_url('uploads/uploaded_docs/Allotment Letter_144_ESSARJEE SAMPADA_20180131011018.pdf');        ?>">afdfdaf</a--> 
                        </object>
                        <?php
                    }
                } else {
                    ?>

                    <br> <br> <br> 

                    <?php
                    $listing = explode('__', $ll);
                    $userid = $listing[1];
                    $customer_id = $userid;
                    $unit_no = $listing[2];
                    $dtl = $this->Search_all_form_model->getdtlsappl($userid, $unit_no);
                    $name = $dtl->name;
                    $addr = $dtl->present_addr;
                    $age = $dtl->fappl_age;
                    $son_doughter_wife = $dtl->son_doughter_wife;
                    $son_doughter_wife_mr_mrs = $dtl->son_doughter_wife_mr_mrs;
                    $swd_of = $dtl->swd_of;
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
                    <?php
                    foreach ($this->Allotment_letter_model->show_project_details($customer_id) as $row) {
                        ?>
                        <?php $project_id; ?>
                        <?php $type; ?>
                        <?php $block; ?>
                        <?php $plot_size_mtr = $row->plot_size_mtr; ?>
                        <?php $plot_size_ft = $row->plot_size_ft; ?>
                        <?php $carpet_area = $row->carpet_area; ?>
                        <?php $roof_covered_ground_ff_area = $row->roof_covered_ground_ff_area; ?>
                        <?php $roof_covered_ground_gf_area = $row->roof_covered_ground_gf_area; ?>

                        <?php
                        //old
                    }
                    ?>
                </div>
                <div id="printable">
                    <div class="container">
                        <form class="form-inline" method ="post">
                            <div class="row">
                                <div class="col-xs-12 text-center">
                                    <h4>MAINTENANCE AGREEMENT</h4>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12">
                                    <p>
                                        This Agreement for Maintenance of Residential Unit executed at Bhopal 
                                        on this _______ day of _______ 2018 between M/s <?php echo $company_name; ?> through Managing Director Shri Sunil Kumar Gupta S/o Shri
                                        Gulab Chand Shah aged about 50 years having its Corporate office at 
                                        “Essarjee House”&nbsp;<?php echo $company_address; ?> - 011 Phone No:- 4270331, 2559665 (office) as “The COMPANY” 
                                        (BUILDER, COLONISERS & CONTRACTOR) (which expression shall include his legal heirs,
                                        Successors, Assigns and all other persons who has interest in him) of the one part.
                                    </p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12 text-center">
                                    AND
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12">
                                    <p>
                                        <?php echo $mr_mrs . nbs(1) . $name ?> (Age <?php echo $age; ?> Yrs.) <?php echo $son_doughter_wife . nbs(1) . $son_doughter_wife_mr_mrs . nbs(1) . $swd_of; ?>, 
                                        R/o:&nbsp;<?php echo $addr ?>
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
                                        hereinafter referred as “ALLOTTEE” (which expression shall included his
                                        legal heirs, successors, assigns and all other persons who has any interest
                                        in him/her/their heirs, executors) of the other part.
                                    </p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12">
                                    <p>
                                        <b>HENCE THIS AGREEMENT WITNESSES AS UNDER</b>
                                    </p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12">
                                    <p>
                                        Whereas BUILDERS, COLONISERS & CONTRACTOR is the absolute owner of the land 
                                        and is in possession of <?php echo $company_name; ?> having Khasra.
                                        no. 824/1, 825/2, 828/1/2, 816, 827/1, 825/1/क, 825/1/ख, 828/1/1/ख  & 827/2
                                        at Village Khajuri Kalan, Tehsil: - Huzur, Dist. - Bhopal within limits of Bhopal
                                        Municipal Corporation Ward No. 62 and the allottee is the owner of the Residential 
                                        Unit <?php echo $unit_no; ?>, At <?php echo $project_name . nbs(1) . $block; ?>, <?php echo $location; ?>.
                                    </p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12">
                                    <p class="text-uppercase">
                                        NOW IT IS HEREBY AGREED, DECLARED AND RECORDED BY BETWEEN BUILDERS,
                                        COLONISERS & CONTRATCORS AND ALLOTTEE AS FOLLOWS : -
                                    </p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12">

                                    <ol>
                                        <li><b>DETAILS OF PROPERTY</b>

                                            <div class="row">
                                                <div class="col-xs-2"><p>Unit No.</p></div>
                                                <div class="col-xs-1">:-</div>
                                                <div class="col-xs-6"><label><?php echo $unit_no; ?></label></div>
                                            </div> 

                                            <div class="row">
                                                <div class="col-xs-2"><p>Built up Area</p></div>
                                                <div class="col-xs-1">:-</div><?php $total_builtuparea = number_format((float) $roof_covered_ground_ff_area + $roof_covered_ground_gf_area, 2, '.', ''); ?>
                                                <div class="col-xs-6"><label><?php echo number_format((float) $total_builtuparea * 10.76, 2, '.', ''); ?>&nbsp;Sqft. (<?php echo number_format((float) $total_builtuparea, 2, '.', ''); ?> Sqmt.)</label></div>
                                            </div> 
                                            <br>
                                        </li>

                                        <li>
                                            <p>
                                                That the Allottee agrees to pay Rs. 25,000/- + GST @ 18% as applicable as on
                                                date to the Company / Builder, Coloniser & Contractor as charges towards 
                                                maintenance of the above said Residential Unit allotted to him and The Company 
                                                / Builder, Coloniser & Contractor shall be responsible for maintenance of the 
                                                above said residential unit for a maximum period of 24 months from the notice
                                                of possession or physical possession whichever is earlier, if any deficiency 
                                                is observed by the company in the fixtures and fittings provided in the unit,
                                                the company shall rectify the same. However, if the deficiency is caused due
                                                to the fault of allottee(s) they shall not held Company/Builder & Colonizer
                                                responsible or liable for the same.
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                That the Allottee agrees to pay All the common running facilities / maintenance
                                                like Water Charges, Electricity for running all the common services (like Water
                                                Pump, Bore-well, Fire Pump, STP, Street Light, Lifts etc.), Gardner, Sweeper,
                                                Security Guards, STP Operating man-power, Lift operators, etc. shall be </p>




                                            <p> paid by 
                                                the allottee(s) on mutually decided monthly contribution on monthly basis in 
                                                addition to the charges mentioned above in clause no. 1 to the Resident Welfare
                                                Society / Company / Builder & Colonizer additionally / separately as society 
                                                monthly running charges.
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                Moreover, the Company/Builder & Colonizer / maintenance Agency of the company 
                                                Allottee(s) will be entitled to effect disconnection of services to defaulting
                                                Allottee(s), that may include disconnection of water/sewer and power / power backup
                                                connections (if any) and debarment from usage of any or all-common facilities 
                                                within the complex.
                                            </p>                              
                                        </li>
                                        <div class="hidden-lg hidden-md hidden-sm"><br><br><br><br><br><br><br><br><br><center>-- 02 --</center><br></div>
                                        <li>
                                            <p>
                                                The Company/Builder & Colonizer shall maintain the colony / the said residential unit
                                                subjected to the payment of maintenance charges given by the allottee(s) for a
                                                maximum period of twenty four months from the date of completion of the building 
                                                / offer of possession of the Residential Unit to the allottee(s), whichever is 
                                                earlier. 
                                            </p> 
                                        </li>
                                        <li>
                                            <p>
                                                That only common services shall be transferred to the Allottee(s) /
                                                Resident Welfare society. Facilities like recreational facilities /
                                                Club house, central parks etc. shall not be handed over to the Allottee(s)
                                                and will be owned by the Company / Builder & Colonizer. Provided the transfer
                                                of such above listed areas to the Resident Welfare Society shall be
                                                mechanized by the Govt. through any prescribed format of such transfer.
                                            </p> 
                                        </li>
                                        <li>
                                            <p>
                                                That the allottee / Residential Unit buyers / subsequent transferees 
                                                shall also be liable to pay to the Company / Builder & Colonizer 
                                                (or its nominee / agency as appointed by the company), such charges 
                                                as may be determined by the Company / Builder & Colonizer for maintaining
                                                various service / facilities in the Residential complex such as street
                                                lighting, area security, maintenance of STP, Fire Fighting System and bulk 
                                                water supply and distribution systems, garbage disposal and scavenging of 
                                                streets and cost towards administrative set up to run the services and
                                                purchase of equipment and machinery required to provide these services 
                                                and depreciations thereof until the same are handed over to the residential
                                                well-fare society for maintenance.
                                            </p> 
                                        </li>
                                        <li>
                                            <p>
                                                Once the recreational facilities becoming functional, keeping in the view 
                                                the general requirement of the members, the quantum of facilities available 
                                                and other incidental factors affecting running and maintenance the 
                                                allottee(s) upon becoming a member shall pay charges as prescribed from
                                                time to time and also to abide by the rules and regulation formulated by
                                                the Company / Society / Maintenance Agency for proper management of these
                                                facilities. That the charges for maintenance of these facilities shall be
                                                payable by such allottee(s), additionally, on monthly basis.
                                            </p> 
                                        </li>
                                    </ol>
                                    <label>POSSESSION</label>
                                    <ol>
                                        <li>
                                            <p>
                                                That the possession period agreed upon is only indicative and the company may
                                                offer possession before that date. The allottee(s) has to take possession of 
                                                the unit within 30 days of the written offer of possession from the company
                                                failing which the unit shall be at the risk and cost of the allottee. Further
                                                the allottee shall be liable to pay holding charges, at the rate to be intimated
                                                by the company for the period of delay in taking over actual possession of the
                                                unit after the expiry of the said period of 30 days.
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                The possession of the Unit shall be handed over on receipt of all the dues, 
                                                documentation and on fulfillment of conditions as stipulated in the agreement
                                                of sale.
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                That subject to his/her/their right as stipulated in above the Allottee(s) hereby 
                                                covenants with the Company that from the date of the receipt of the possession notice
                                                of the unit of the date of receiving deemed possession, as provided herein before, 
                                                he/she/they/shall, at his/her/their own cost, keep the said unit, its wall and partitions,
                                                sewers, drains, pipes and appurtenances there to or belonging there to, in good and 
                                                tenantable repair and maintain the same in a fit and proper condition and ensure that
                                                the structure/safety of the premises is in no way damaged or jeopardized. He shall 
                                                neither himself do nor permit or suffer anything to be done in any manner to any part
                                                of the unit.
                                            </p>
                                        </li>


                                        <li>
                                            <p>
                                                That the Allottee(s) agrees not to use the said Dwelling Unit or permit the same 
                                                to be used for purpose other than for Residential or use the same for any purpose
                                                which may or is likely to cause nuisance or annoyance to occupiers of other units
                                                in the building or for any illegal of  immoral purpose.

                                            </p>
                                        </li>
                                    </ol>
                                    <div class="hidden-lg hidden-md hidden-sm"><br><br><br><br><br><br><br><br><br><br><br><br><br><center>-- 03 --</center><br><br></div>
                                    <label>GENERAL TERMS AND CONDITIONS</label>
                                    <ol>
                                        <li>
                                            <p>
                                                That all charges payable to various departments for obtaining service 
                                                connections to the residential unit like water, telephone, electricity etc.
                                                including security deposits for sanction and release of such connections as 
                                                well as informal charges pertaining there to will be payable by the 
                                                Allottee(s) additionally.
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                Allottee agrees to pay applicable charges for Narmada Water 
                                                Connection/Bulk Narmada Water Connection whichever is applicable or both 
                                                to the Colonizer/Society/Maintenance Agency/Municipal Corporation which 
                                                ever is applicable additionally for availing the water supply from Municipal
                                                Corporation.
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                Allottee agrees to pay additionally as applicable / required by the 
                                                Residents Welfare Society apart from common corpus fund for purchasing 
                                                of any Generator Set for maintaining Uninterrupted Power Supply if 
                                                required by the Residents Welfare society for common area functionality
                                                like Entrance Foyer, Lighting, Lifts, Fire pump, STP etc. & he/she/they 
                                                are agreeing to pay the charges towards the any approvals required if
                                                any additionally as decided by Residents Welfare Society.
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                Allottee agrees to pay additionally as applicable / required by the Residents 
                                                Welfare Society as his/her/there contribution for furnishing and any other
                                                facilities as decided by Residents Welfare Society for running of Club House.
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                Allottee agrees to pay additionally as applicable / required by the
                                                Residents Welfare Society as his/her/there contribution towards anything
                                                as decided by the Residents Welfare Society in addition to the standard 
                                                development work done by the Colonizer.
                                            </p>
                                        </li>
                                    </ol>
                                    <br>
                                    <p>
                                        <b>
                                            IN WITNESSES WHEREOF THE Parties hereto have set their respective hands with 
                                            free at Bhopal, on the day and month of the year above in the presence of 
                                            witnesses: -
                                        </b>
                                    </p>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <label>WITNESSES</label>
                                        </div>
                                        <div class="col-xs-6">
                                            <label>For <?php echo $company_name; ?></label>
                                        </div>
                                    </div>
                                    <ol>
                                        <li>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    ------------------------------------------
                                                    <br>
                                                    ------------------------------------------
                                                    <br>
                                                    ------------------------------------------
                                                    <br>
                                                    ------------------------------------------
                                                </div>
                                                <div class="col-xs-6">
                                                    <label>Managing Director </label> <br>
                                                    <label>(BUILDERS & COLONISERS)</label>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    ------------------------------------------
                                                    <br>
                                                    ------------------------------------------
                                                    <br>
                                                    ------------------------------------------

                                                </div>
                                                <div class="col-xs-6">
                                                    <label> (ALLOTTEES)</label>
                                                </div>
                                            </div>
                                        </li>
                                    </ol>
                                    <br><br><br><br><br><br><br><br>
                                </div>
                            </div>
                        </form>
                    </div> 
                </div> 
                <?php
            }  //end of pdf else
            ?>
        </div> 


        <script type="text/javascript">

            $(document).ready(function () {
                $('#toppageheader').html('Maintenance Agreement <span class="pull-right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="print" id="btnprint" value="print" class="btn btn-sm btn-default" onClick="print_this_doc();">Print&nbsp;&nbsp;<i class="fa fa-print"></i></button></span>');
                $("a:contains(maintenance agreement)").parent().addClass('active');
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


