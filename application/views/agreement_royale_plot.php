<!DOCTYPE html>
<!--
Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
Unauthorized copying of this file, via any medium is strictly prohibited
Proprietary and confidential.
Written by Oga Technologies, October 1,  2016.
-->
<html>
    <head>
        <title>Agreement Letter</title>
        <?php
        include_once('assets/html_head_links.php');
        require('assets/convert_number_to_words.php');
        ?>

        <style>
            input{
                font-weight:bold;
                border: none;
                border-bottom: 1px solid;
            }
            input[type=text]:disabled {
                font-weight:bold;
                background: white;
            }

            @media print
            {
                /*@page {size: landscape}*/
                .non-printable { display: none; }
                #printable { display: block;}
            }

            @page {
                size: auto;   /* auto is the initial value */
                margin: 5px;  /* this affects the margin in the printer settings */

            }



            p{
                text-align: justify;
            }
            .col-xs-1 {
                width: 5.333333% !important;
            }
        </style>

    </head>
    <body>    <div class="non-printable">
            <?php
            require_once('assets/top_menu.php');
            require_once('assets/side_menu.php');
            ?>
        </div>


        <?php
        $uid = $this->input->get('id');

        $explode_data = explode('?', $uid);
        $id = $explode_data[0];
        $pid = $explode_data[1];
        $block = $explode_data[2];
        $type = $explode_data[3];


        foreach ($this->Agreement_model->get_applinfo($id) as $row) {
            ?>
            <?php $row->name; ?>
            <?php $customer_id = $row->customer_id; ?>
            <?php $block = $row->block; ?>
            <?php $row->unit_no; ?>
            <?php $ca_name = $row->ca_name; ?>
            <?php $row->project_name; ?>
            <?php $row->ground_floor_carpet_area; ?>
            <?php $name = $row->name; ?>
            <?php $unit_no = $row->unit_no; ?>
            <?php $mr_mrs = $row->mr_mrs; ?>
            <?php $son_doughter_wife = $row->son_doughter_wife; ?>
            <?php $project_name = $row->project_name; ?>
            <?php $registration_no = $row->registration_no; ?>
            <?php $aadhar_no = $row->aadhar_no; ?>
            <?php $swd_of = $row->swd_of; ?>
            <?php $pan = $row->pan; ?>
            <?php $cheque_no = $row->cheque_no; ?>
            <?php $fappl_age = $row->fappl_age; ?>
            <?php $checkdate = $row->date; ?>
            <?php $checkdate1 = $row->date; ?>
            <?php $bank_name = $row->bank_name; ?>
            <?php $plot_boundary = $row->plot_boundary; ?>
            <?php $plot_area = $row->plot_area; ?>
            <?php $plot_size_sqmts = $row->plot_size_sqmts; ?>
            <?php $carpet_area_price = $row->carpet_area_price; ?>
            <?php $carpet_area = $row->carpet_area; ?>
            <?php $preferred_location_area = $row->preferred_location_area; ?>
            <?php $preferred_location_price = $row->preferred_location_price; ?>
            <?php $balcony_area_price = $row->balcony_area_price; ?>
            <?php $balcony_area = $row->balcony_area; ?>
            <?php $open_terrace_front_area = $row->open_terrace_front_area; ?>
            <?php $terrace_front_price = $row->terrace_front_price; ?>
            <?php $open_terrace_back_area = $row->open_terrace_back_area; ?>
            <?php $open_terrace_back_area_ref_rate = $row->open_terrace_back_area_ref_rate; ?>
            <?php $present_addr = $row->present_addr; ?>
            <?php $co_present_add = $row->co_present_add; ?>
            <?php $booking_amt = $row->booking_amt; ?>
            <?php $cost_payable_to_company = $row->total_cost; ?>
            <?php $plot_size_mtr = $row->plot_size_mtr; ?>
            <?php $plot_size_ft = $row->plot_size_ft; ?>
            <?php $car_poarch_area1 = $row->car_poarch_area; ?>
            <?php $price_ca_ref_rate = $row->price_ca_ref_rate; ?>
            <?php $preferred_location_area = $row->preferred_location_area; ?>
            <?php $preferred_location_area_ref_rate = $row->preferred_location_area_ref_rate; ?>
            <?php $open_terrace_front_area_ref_rate = $row->open_terrace_front_area_ref_rate; ?>
            <?php $car_poarch_area_ref_rate = $row->car_poarch_area_ref_rate; ?>
            <?php $gst = $row->gst; ?>


        <?php } ?>



        <?php
        $data['plot_size_mtr'] = $plot_size_mtr;
        $data['plot_size_ft'] = $plot_size_ft;
        $data['project_id'] = $pid;
        $data['type'] = $type;
        $data['block'] = $block;
        foreach ($this->Allotment_letter_model->show_plot_info($data) as $row) {
            ?>
            <?php $plot_sqmt = $row->plot_sqmt; ?>
            <?php $plot_size_sqft = $row->plot_sqft; ?>
            <?php $length_m = $row->length_m; ?>
            <?php $width_m = $row->width_m; ?>

        <?php } ?>

        <div class="main">
            <div class="container" style="font-size: 20px;">

                <a href="javascript: history.go(-1)" class="btn btn-primary pull-right clickable" role="button"> <i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;&nbsp;Back&nbsp;</a><br><br>
                <div id="printable">
                    <form class="form-inline">

                        <div class="row text-center">
                            <label>AGREEMENT FOR SALE OF RESIDENTIAL PLOT (<?php echo$project_name; ?> <?php echo $block; ?>)</label>
                        </div>
                        <div class="row">
                            <center> <h4>This Agreement for Sale (“Agreement”) executed on this Date: <span  id="date" ></span><label>
                                    </label></h4></center>
                        </div>

                        <br>
                        <div class="row text-center">
                            <label>By and Between</label>
                        </div><br><br>

                        <div class="row">
                            <div class="col-xs-12">
                                <p><?php
                                    foreach ($this->Payment_model->get_company_Company_Name() as $row) {
                                        ?> 
                                        <span><?php echo $row->value; ?></span>

                                    <?php } ?>  ( <?php
                                    foreach ($this->Payment_model->get_company_CIN() as $row) {
                                        ?> <span><strong><?php echo $row->attribute; ?></strong></span>:
                                        <span><?php echo $row->value; ?></span>
                                    <?php } ?>), 
                                    a company incorporated under the provisions of the Companies Act, [1956 or 2013,
                                    as the case may be], having its registered office at Essarjee House,  <?php foreach ($this->Payment_model->get_company_Address() as $row) {
                                        ?> 
                                        <span><?php echo $row->value; ?></span>
                                    <?php } ?>   <?php
                                    foreach ($this->Payment_model->get_company_Pincode() as $row) {
                                        ?> 
                                        <span><?php echo $row->value; ?></span>
                                    <?php } ?>  and its corporate office at Essarjee House, <?php foreach ($this->Payment_model->get_company_Address() as $row) {
                                        ?> 
                                        <span><?php echo $row->value; ?></span>
                                    <?php } ?>  <?php
                                    foreach ($this->Payment_model->get_company_Pincode() as $row) {
                                        ?> 
                                        <span><?php echo $row->value; ?></span>
                                    <?php } ?>( <?php
                                    foreach ($this->Payment_model->get_company_info2() as $row) {
                                        ?> <span><strong><?php echo $row->attribute; ?></strong></span>&nbsp;:
                                        <span><?php echo $row->value; ?></span>

                                    <?php } ?>) represented by its 
                                    authorized signatory Sunil Kumar Gupta S/o Shri G. C. Shah (<?php
                                    foreach ($this->Payment_model->get_company_Aadhar() as $row) {
                                        ?> <span><strong><?php echo $row->attribute; ?></strong></span>&nbsp;:
                                        <span><?php echo $row->value; ?></span>

                                    <?php } ?>)
                                    authorized vide board resolution dated 24.05.2016 hereinafter referred to as the “Promoter” 
                                    (Which expression shall unless repugnant to the context or meaning thereof be deemed to mean
                                    and include its successor-in-interest, and permitted assigns).</p>


                                <label>AND</label>
                                <p class="text-justify">  <strong><?php echo $mr_mrs; ?></strong> <strong><?php echo $name; ?></strong>, 
                                    (Aadhar no. <strong><?php echo $aadhar_no; ?></strong>) 
                                    <strong><?php echo $son_doughter_wife; ?></strong>  of <strong><?php echo $swd_of; ?></strong>, 
                                    aged  <strong><?php echo $fappl_age; ?></strong> 
                                    about residing at  <strong><?php echo $project_name; ?></strong>/<strong><?php echo $block; ?></strong>,	
                                    PAN <strong><?php echo $pan; ?></strong>, hereinafter called the “Allottee” (which expression shall
                                    unless repugnant to the context or 
                                    meaning thereof be deemed to mean and include his/her heirs, executors,
                                    administrators, successors-in-interest and permitted an assigns).

                                </p>
                                <p>
                                    The Promoter and Allottee shall hereinafter collectively be referred to as the 
                                    “Parties” and individually as a “Party”.
                                </p>
                                <label>Note:</label>
                                <p>
                                    For the purpose of this Agreement for Sale, unless the context otherwise requires,-<br>
                                    (a) “Act” means the Real Estate (Regulation and Development) Act, 2016 (16 of 2016).<br>
                                    (b) “Appropriate Government” means the Central Government.<br>
                                    (c) “Rules” means the Real Estate (Regulation and Development) (General) Rules, 2016 made under the Real Estate (Regulation and Development) Act, 2016.<br>
                                    (d) “Regulations” means the Regulations made under the Real Estate (Regulation and Development Act, 2016; (e) “section” means a section of the Act.
                                </p>
                                <label>WHEREAS:</label>
                                <div class="row">
                                    <div class="col-xs-1">
                                        A.
                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            Mrs. Meenu Gupta W/o Shri Sunil Kumar Gupta is the absolute and lawful owner of free hold land bearing
                                            Khasra no. 73/1/1/1 totally admeasuring 9635.01 Sq. Mtr. (103672.80 Sq. Fts.) / 0.963 Hectare, (2.38 Acres)
                                            situated at Village Hataikhera, Raisen Road, Tehsil – Huzur Dist. – Bhopal Madhya Pradesh (“Said Land”) 
                                            vide sale deed(s) dated 30.06.2006 registered as Volume no. 24574 Sr. No. 1361 ([k) At the office of the Sub-Registrar Bhopal.
                                            The Owner and the Promoter have entered into a development agreement dated 18.05.2016 registered as document
                                            no. MP059712016A1283780 at the office of the Sub-Registrar Bhopal and also that the Power of Attorney is Executed by
                                            Land Owner in favor of Mr. Sunil Kumar Gupta (Managing Director Essarjee Constructions Pvt. Ltd)
                                            Vide Document No. MP059712016A4304935 dated 27.05.2016 at the office of Sub-Registrar Bhopal.
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        B.
                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            The Said Land is earmarked for the purpose of sale /
                                            building a residential units / commercial units / 
                                            plots for the project, comprising details as follows :-
                                        </p>
                                    </div>
                                </div>


                                <div class="row" style="color:red;">
                                    <div class="col-xs-12">
                                        <table class="table">
                                            <thead class="thead-inverse">
                                                <tr>
                                                    <th>Sr. No.</th>
                                                    <th>Particulars of Units</th>
                                                    <th></th>


                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Duplex / Plot</td>
                                                    <td>56 Units</td>


                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Plot</td>
                                                    <td>0</td>


                                                </tr>



                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row" style="color:red;">
                                    <div class="col-xs-12">
                                        <p class="text-justify">
                                            The said project shall be known as “
                                            <strong><?php echo $project_name; ?></strong>”
                                            Phase – 1, Phase – 2 and Phase – 3 (“Project”);
                                        </p>
                                        <ul>
                                            <li>Phase 1 : Completed </li>
                                            <li>Phase 2 : Ongoing state, scheduled to complete by 2022</li>
                                            <li>Phase 3 : Proposed to commence in 2019 and scheduled to complete by 2024/li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        C. 
                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            The Promoter is fully competent to enter into this Agreement and all the legal 
                                            formalities with respect to the right, title and interest of the Promoter regarding the
                                            Said Land on which Project is to be constructed/developed have been completed. 
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        D. 
                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            The Municipal Corporation Bhopal has granted the commencement certificate to develop 
                                            the Project vide Development Permission approval No. 427 dated 04.12.2006 and revised & re-issued permission 
                                            under section 29(3) of Town & Country Planning Department vide their letter no. 
                                            BPLLP 2166/L.P.130/29(3)/Ukxzkfu@ftdk@2015-16 dated 27.02.2016.
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        E. 
                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            The Promoter has obtained the final layout plan, sanctioned plan, 
                                            specifications and approvals for the Project and also for the Duplexes,
                                            Plots and one plot under mixed land use (shop Cum Residence) as the case may be, 
                                            from Town & Country Planning Department, Bhopal. The Promoter agrees and undertakes 
                                            that it shall not make any changes to these approved plans except in strict compliance
                                            with section 14 of the Act and other laws as applicable.
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        F. 
                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            The Promoter has registered the Project under the provisions of the Act with the 

                                            Madhya Pradesh Real Estate Regulatory Authority at Bhopal on <strong><?php echo $project_name; ?> <?php echo $block; ?> </strong> under registration no.<strong><?php echo $registration_no; ?></strong>

                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        G.  
                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            The Allottee had applied for a Residential plot in the “<strong><?php echo $project_name; ?></strong>” Project vide application no. <strong><?php echo $customer_id; ?></strong> dated ___________ and has been
                                            allotted Residential plot no. <strong><strong> <?php echo $unit_no; ?> </strong></strong> having area of <strong><?php echo $plot_sqmt; ?></strong> square Meter will have parking / porch within 
                                            the plot boundary as applied / permitted / approved by Municipal Corporation Bhopal within law. No additional space
                                            shall be provided by the Promoter for individual car parking, as permissible under the applicable law and of pro rata share 
                                            in the common areas (“Common Areas”) as defined under clause (n) of Section 2 of the Act (hereinafter referred to as the “Plot”
                                            more particularly described in Schedule A and the demarcation layout of the plot is annexed hereto and marked as Schedule B);  
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        H.  
                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            The Parties have gone through all the terms and conditions set out in this
                                            Agreement and understood the mutual rights and obligations detailed herein; 
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        I. 
                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            The allotment of the above said Residential Plot is made to the allottee with 
                                            following terms and condition;
                                        </p>
                                        <div class="col-xs-1">
                                            (i)
                                        </div>
                                        <div class="col-xs-11">
                                            <p>
                                                That the allottee has to take the Building permission from the Municipal Corporation Bhopal at his 
                                                own expenses and shall strictly abide with the building permission given by the Municipal Corporation Bhopal.
                                                After completion of the construction work it is the sole responsibility of the allottee to obtain 
                                                completion certificate from the Municipal Corporation Bhopal at his own expenses. 
                                            </p>
                                        </div>
                                        <div class="col-xs-1">
                                            (ii)
                                        </div>
                                        <div class="col-xs-11">
                                            <p>
                                                That it is the sole responsibility of allottee to pay the property tax and diversion rent etc., 
                                                which will be levied on the Allottee from the date of registry/Conveyance deed of the plot in 
                                                favor of the Allottee by the promoter 
                                            </p>
                                        </div>
                                        <div class="col-xs-1">
                                            (iii)
                                        </div>
                                        <div class="col-xs-11">
                                            <p>
                                                Installation of the individual electric meter / water meter as applicable shall be the 
                                                responsibility of the allottee.
                                            </p>
                                        </div>
                                        <div class="col-xs-1">
                                            (iv) 
                                        </div>
                                        <div class="col-xs-11">
                                            <p>
                                                The Allottee has to deposit the Monthly operational charges as decided and demanded 
                                                by society / residents’ welfare association / Promoter (as the case may be) as soon
                                                as the construction on the plot is completed by allottee after taking the Building
                                                permission from the Municipal Corporation Bhopal.
                                            </p>
                                        </div>
                                        <div class="col-xs-1">
                                            (v) 
                                        </div>
                                        <div class="col-xs-11">
                                            <p>
                                                That the allottee has to make provisions for the use of Treated water in his residential 
                                                plot/unit in his built up residential unit as the promoter has installed the Dual Plumbing 
                                                network for the reuse of recycled water in the project and for the purpose of construction
                                                the allottee shall use tanker water.
                                            </p>
                                        </div>
                                        <div class="col-xs-1">
                                            (vi)
                                        </div>
                                        <div class="col-xs-11">
                                            <p>
                                                That the allottee has to take the membership of the Residents Welfare Society and has to
                                                deposit the required one time membership fees @ Rs. 550 and Common Corpus Fund charges 
                                                @ Rs. 25000.00 as decided by the society members separately.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        J. 
                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            The Parties hereby confirm that they are signing this Agreement with full knowledge
                                            of all the laws, rules, regulations, notifications, etc., applicable to the Project; 
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        K.
                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            The Parties, relying on the confirmations, representations and assurances
                                            of each other to faithfully abide by all the terms, conditions and stipulations contained 
                                            in this Agreement and all applicable laws, are now willing to enter into this Agreement on the 
                                            terms and conditions appearing hereinafter; 
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        L.
                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            In accordance with the terms and conditions set out in this
                                            Agreement and as mutually agreed upon by and between the Parties,
                                            the Promoter hereby agrees to sell and the Allottee hereby agrees to 
                                            purchase the Residential Plot No. <strong> <?php echo $unit_no; ?> </strong>  as specified in para G. 
                                        </p> 
                                    </div>
                                </div>
                                <label>
                                    NOW THEREFORE, in consideration of the mutual representations, covenants, assurances, promises and agreements contained herein and other good and valuable consideration, the Parties agree as follows:
                                </label>
                                <div class="row">
                                    <div class="col-xs-1">
                                        1.
                                    </div>
                                    <div class="col-xs-11">
                                        <label>TERMS:</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        1.1
                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            Subject to the terms and conditions as detailed in this Agreement,
                                            the Promoter agrees to sell to the Allottee and the Allottee hereby agrees to purchase, 
                                            the Residential Plot No. <strong> <?php echo $unit_no; ?> </strong> as specified in para G
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        1.2 
                                    </div>
                                    <div class="col-xs-11">

                                        <p>
                                            The Total Price for the Residential Plot No. <strong> <?php echo $unit_no; ?> </strong>  is  
                                            Rs.                       <strong>
                                                <input type="text" id="amtrs" name="number" placeholder="Number OR Amount" onmouseover="word.innerHTML = convertNumberToWords(this.value)" value= "<?php echo $cost_payable_to_company; ?>" disabled/>

                                            </strong> 

                                            (Rupees <span id='word' style="height:20px; width:auto; font-weight:bold;"></span> only/- )
                                        </p>

                                    </div>
                                </div>
                                <div class="row text-center">
                                    <div class="col-xs-12">
                                        <label>BREAK UP OF COST</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <table class="table table-bordered">
                                            <thead class="thead-inverse">
                                                <tr>
                                                    <th style="text-align:center;"> Rate of Row House Duplex Unit per SQM</th>
                                                </tr>
                                            </thead>
                                        </table>

                                        <table class="table ">

                                            <thead class="thead-inverse">
                                                <tr>
                                                    <th>#</th>
                                                    <th>Particular</th>
                                                    <th>AREA in SQM</th>
                                                    <th>Rate per SQM</th>
                                                    <th>Amount in Rs.</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Cost of Residential Plot as per plot area</td>
                                                    <td><input  type="text" value="<?php echo $carpet_area; ?>"  style="width: 150px; border: none; background-color: white;" disabled/></td>
                                                    <td><input type="text" value="<?php echo $price_ca_ref_rate; ?>"  style="width: 150px; border: none; background-color: white;" disabled/></td>
                                                    <td><input type="text"  value="<?php echo$result1 = $price_ca_ref_rate * $carpet_area ?>.00"  style="width: 150px; border: none; background-color: white;" disabled/></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Proportionate cost of Common Area / Facilities</td>
                                                    <td><input  value="<?php //echo$preferred_location_area;                                                                                                                                                           ?>"  style="width: 150px; border: none; background-color: white;" disabled/></td>
                                                    <td><input  value="<?php //echo$preferred_location_price;                                                                                                                                                           ?>"  style="width: 150px; border: none; background-color: white;" disabled/></td>
                                                    <td><input  value="<?php //echo$result_pl = $preferred_location_area * $preferred_location_price                                                                                                                                                           ?>"  style="width: 150px; border: none; background-color: white;" disabled/></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Other Fixed Charges</td>
                                                    <td> 0</td>
                                                    <td>0</td>
                                                    <td><?php
                                                        foreach ($this->Agreement_model->get_othercharge() as $row) {
                                                            echo $result3 = $row['sum'];
                                                        }
                                                        ?></td>                                                          
                                                </tr>
                                                <tr>
                                                    <?php foreach ($this->Agreement_model->get_company_taxCGST() as $row) { ?>
                                                        <?php $cgst = $row->tax_percentage; ?>
                                                    <?php } ?>
                                                    <?php foreach ($this->Agreement_model->get_company_taxSGST() as $row) { ?>
                                                        <?php $sgst = $row->tax_percentage; ?>
                                                    <?php } ?>
                                                    <th scope="row">4</th>
                                                    <td>GST (as applicable)</td>

                                                    <td>0</td>
                                                    <td>@ <?php echo $result_gst = $cgst + $sgst ?> %</td>


                                                    <td><?php echo $result4 = $gst; ?></td>    
                                                </tr>

                                                <tr>
                                                    <th scope="row">5</th>
                                                    <td>Maintenance Charges
                                                    </td>

                                                    <td>0</td>
                                                    <td>0</td>
                                                    <?php foreach ($this->Agreement_model->get_charge_amount() as $row) { ?>
                                                        <?php $charge_amount = $row->charge_amount; ?>
                                                    <?php } ?>
                                                    <td><input  value="<?php echo $result5 = $charge_amount ?>"  style="width: 150px; border: none; background-color: white;" disabled/></td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">6</th>
                                                    <td>TOTAL PRICE in Rs.</td>
                                                    <td><input  value="<?php //echo$result_tt_ar = $carpet_area + $preferred_location_area + $balcony_area + $terrace_front_area + $terrace_back_price                                                                                                                                                           ?>"  style="width: 150px; border: none; background-color: white;" disabled/></td>
                                                    <td><input  value="<?php //echo$result_tt_ra = $carpet_area_price + $preferred_location_price + $balcony_area_price + $terrace_front_price + $terrace_back_price                                                                                                                                                           ?>"  style="width: 150px; border: none; background-color: white;" disabled/></td>
                                                    <td><input  value="<?php echo $result_tt = $result1 + $result3 + $result4 + $result5 ?>.00"  style="width: 150px; border: none; background-color: white;" disabled/></td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row text-center" style="color:red;">
                                    <div class="col-xs-12">
                                        <p>
                                            Provided that the amounts mentioned under the heads, Taxes, Maintenance Charges,
                                            Any Extra Charge for Amenities/Facilities, Service Charges and other heads of like nature, 
                                            shall not be taken into account, while determining the Market Value of the said Plot for the
                                            purpose of calculation of the Stamp Duty, Registration Charges and any other incidental expenses,
                                            for the execution and registration of this Agreement to Sale or the Conveyance/Sale Deed to be 
                                            executed in future, with respect to the said Plot.
                                        </p> 
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-1">

                                    </div>
                                    <div class="col-xs-11">
                                        <label>Explanation:</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        (i)
                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            The Total Price above includes the booking amount paid by the allottee to the Promoter
                                            towards the Plot; 
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        (ii) 
                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            The Total Price above includes Taxes (consisting of tax paid or payable by the Promoter by 
                                            way of GST and Cess or any other similar taxes up to the date of handing over the possession
                                            of the plot to the allottee and the project to the association of allottees or the competent
                                            authority, as the case may be, after obtaining the completion certificate: <br>
                                            Provided that in case there is any change / modification in the taxes, the subsequent amount
                                            payable by the allottee to the promoter shall, be increased/reduced based on 
                                            such change / modification: <br>
                                            Provided further that if there is any increase in the taxes after the expiry of the 
                                            scheduled date of completion of the project as per registration with the Authority, 
                                            which shall include the extension of registration, if any, granted to the said project 
                                            by the Authority, as per the Act, the same shall not be charged from the allottee; 
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        (iii)
                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            The Promoter shall periodically intimate in writing to the Allottee, the amount
                                            payable as stated in (i) above and the Allottee shall make payment demanded by the 
                                            Promoter within the time and in the manner specified therein. In addition, the Promoter
                                            shall provide to the Allottee the details of the taxes paid or demanded along with the 
                                            acts/rules/notifications together with dates from which such taxes/levies etc. have been
                                            imposed or become effective;
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        (iv) 
                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            The Total Price of Plot includes recovery of price of land, external development charges like 
                                            External Electrification, Roads, Gardens, Sump-well, Water line network up to the plot, 
                                            External sewer line network including STP, drainage system, taxes, maintenance charges as 
                                            per para 11 and other common facilities and amenities of the Project if/as applicable.
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        1.3 
                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            The Total Price is escalation-free, save and except increases, which the Allottee hereby agrees to pay, due 
                                            to increase because of development charges payable to the competent authority and/or any other increase in charges
                                            which may be levied or imposed by the competent authority from time to time. The Promoter undertakes and agrees that
                                            while raising a demand on the Allottee for increase in development charges, cost/charges imposed by the competent authorities, 
                                            the Promoter shall enclose the said notification/order/rule/regulation to that effect along with the demand letter being issued
                                            to the Allottee, which shall only be applicable on subsequent payments. Provided that if there is any new imposition or increase 
                                            of any development charges after the expiry of the scheduled date of completion of the project as per registration with the Authority, 
                                            which shall include the extension of registration, if any, granted to the said project by the Authority, as per the Act, the same shall 
                                            not be charged from the allottee. 
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        1.4
                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            The Allottee(s) shall make the payment as per the payment plan set out in 
                                            Schedule C (“Payment Plan”). 
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        1.5
                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            The Promoter may allow, in its sole discretion, a rebate for early payments of 
                                            installments payable by the Allottee by discounting such early payments @ 00.00 %
                                            per annum for the period by which the respective installment has been preponed. 
                                            The provision for allowing rebate and such rate of rebate shall not be subject 
                                            to any revision/withdrawal, once granted to an Allottee by the Promoter. 
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        1.6
                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            It is agreed that the Promoter shall not make any additions and alterations in the
                                            sanctioned plans, layout plans and specifications of amenities described herein at
                                            Schedule ‘D’ and Schedule ‘E’ (which shall be in conformity with the advertisement, 
                                            prospectus etc., on the basis of which sale is effected) in respect of the Residential 
                                            Plot, as the case may be, without the previous written consent of the Allottee as per 
                                            the provisions of the Act. Provided that the Promoter may make such minor additions or
                                            alterations as may be required by the Allottee, or such minor changes or alterations 
                                            as per the provisions of the Act. 
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        1.7
                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            The Promoter shall confirm to the final Plot area that has been allotted to
                                            the Allottee after the development of the plot is complete and the completion
                                            certificateis granted by the competent authority, by furnishing details of the
                                            changes, if any, in the Plot area. The total price payable for the Plot area shall
                                            be recalculated upon confirmation by the Promoter. If there is reduction in the 
                                            Plot area then the Promoter shall refund the excess money paid by Allottee within
                                            forty-five days with annual interest at the rate prescribed in the Rules, from 
                                            the date when such an excess amount was paid by the Allottee. If there is any 
                                            increase in the Plot area, which is not more than three percent of the Plot area
                                            of the plot, allotted to Allottee, the Promoter may demand that from the Allottee
                                            as per the next milestone of the Payment Plan as provided in Schedule C. All these
                                            monetary adjustments shall be made at the same rate per square feet as agreed in 
                                            para 1.2 of this Agreement.
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        1.8
                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            Subject to para 9.3 the Promoter agrees and acknowledges, the Allottee shall have
                                            the right to the Residential Plot No. <strong> <?php echo $unit_no; ?> </strong>  as mentioned below: 
                                        </p>
                                        <div class="col-xs-1">
                                            (i)
                                        </div>
                                        <div class="col-xs-11">
                                            <p>
                                                The Allottee shall have exclusive ownership of the Residential 
                                                Plot No. <strong> <?php echo $unit_no; ?> </strong> ;  
                                            </p>
                                        </div>
                                        <div class="col-xs-1">
                                            (ii)
                                        </div>
                                        <div class="col-xs-11">
                                            <p>
                                                The Allottee shall also have undivided proportionate share in the Common Areas. 
                                                Since the share / interest of Allottee in the Common Areas is undivided and cannot
                                                be divided or separated, the Allottee shall use the Common Areas along with other
                                                occupants, maintenance staff etc., without causing any inconvenience or hindrance 
                                                to them. It is clarified that the promoter shall hand over the common areas to the 
                                                association of allottees after duly obtaining the completion certificate from the 
                                                competent authority as provided in the Act; 
                                            </p>
                                        </div>
                                        <div class="col-xs-1">
                                            (iii)
                                        </div>
                                        <div class="col-xs-11">
                                            <p>
                                                That the computation of the price of the Residential 
                                                Plot No. <strong> <?php echo $unit_no; ?> </strong>  includes recovery of price of land, external 
                                                development charges like External Electrification, Roads, Gardens, Water line 
                                                network up to the plot,  External sewer line network including STP, drainage system, 
                                                taxes, maintenance charges as per para 11 and the cost of other common 
                                                facilities and amenities of the Project if/as applicable to be provided within the Project;
                                            </p>
                                        </div>
                                        <div class="col-xs-1">
                                            (iv)
                                        </div>
                                        <div class="col-xs-11">
                                            <p>
                                                The Allottee has the right to visit the project site to assess the extent of development 
                                                of the project and his Residential Plot unit, as the case may be. 
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        1.9
                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            It is made clear by the Promoter and the Allottee agrees that the Residential 
                                            Plot No. <strong> <?php echo $unit_no; ?> </strong>  will have parking / porch within the plot boundary
                                            as applied / permitted / approved by Municipal Corporation Bhopal within law no additional space shall
                                            be provided by the Promoter for individual car parking shall be treated as a single
                                            indivisible unit for all purposes. It is agreed that this 
                                            Project <?php echo $project_name; ?> is an Residential, self-contained Project
                                            covering the said Land and is not a part of any other neighboring project or 
                                            zone and shall not form a part of and/or linked/combined with any other project 
                                            in its vicinity or otherwise except for the purpose of integration of infrastructure for the benefit of the Allottee. 
                                            It is clarified that Project’s facilities and amenities shall be available only for 
                                            use and enjoyment of the Allottees of the <?php echo $project_name; ?> Project. 
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        1.10
                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            The Promoter agrees to pay all outgoings before transferring the physical possession of the Residential Plot No. to the Allottees, which it has collected from the Allottees, for the payment of outgoings (including land cost, ground rent, municipal
                                            or other local taxes, charges for water or electricity, maintenance charges, including mortgage loan 
                                            and interest on mortgages or other encumbrances and such other liabilities payable to competent authorities, banks and financial institutions, which are related to the project). If the Promoter fails to pay all or any of the outgoings collected by it from the Allottees or any liability, mortgage loan and
                                            interest thereon before transferring the Plot to the Allottees, the Promoter agrees to be liable, even after the transfer of the property, to pay such outgoings and penal charges, if any, to the authority or person to whom they are payable and be liable for the 
                                            cost of any legal proceedings which may be taken therefore by such authority or person. 
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        1.11
                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            The Allottee has paid a sum of Rs. <input type="text" id="amtrs2" name="number" placeholder="Number OR Amount" onmouseover="word.innerHTML = convertNumberToWords2(this.value)" value= "<?php echo $booking_amt; ?>" disabled/>   (Rupees <span id='word2' style="height:20px; width:auto; font-weight:bold;"></span> only/- )
                                            as booking amount being part payment towards the Total Price of the
                                            Residential Plot No. <strong> <?php echo $unit_no; ?> </strong>at the time of application. <br>

                                            The receipt of which the Promoter hereby acknowledges and the Allottee hereby 
                                            agrees to pay the remaining price of the Residential Plot No. <strong> <?php echo $unit_no; ?> </strong> 
                                            as prescribed in the Payment Plan [Schedule C] as may be demanded by the Promoter within
                                            the time and in the manner specified therein: Provided that if the allottee delays in 
                                            payment towards any amount which is payable, he shall be liable to pay interest at the 
                                            rate based on the State Bank of India highest marginal cost of lending rate ………… plus 
                                            two percent (as on date of signing of the agreement) from their respective due dates.

                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        <label>2</label>
                                    </div>
                                    <div class="col-xs-11">
                                        <label>MODE OF PAYMENT: </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">

                                    </div>
                                    <div class="col-xs-11">  
                                        <p>
                                            Subject to the terms of the Agreement and the Promoter abiding by the development/construction milestones, the Allottee shall make all payments, on written demand by the Promoter, within the stipulated time as mentioned in the Payment Plan [Schedule C] through A/c Payee cheque/demand draft/bankers cheque or online payment (as applicable) in favour of ‘Essarjee Constructions Private Limited.’ payable at Bhopal. 
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        <label> 3.</label>
                                    </div>
                                    <div class="col-xs-11">  
                                        <label>COMPLIANCE OF LAWS RELATING TO REMITTANCES: </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        3.1
                                    </div>
                                    <div class="col-xs-11">  
                                        <p>
                                            The Allottee, if resident outside India, shall be solely responsible for complying with the necessary
                                            formalities as laid down in Foreign Exchange Management Act, 1999, Reserve Bank of India Act, 1934 and
                                            the Rules and Regulations made there under or any statutory amendment(s) modification(s) made thereof and all
                                            other applicable laws including that of remittance of payment acquisition/sale/transfer of immovable properties 
                                            in India etc. and provide the Promoter with such permission, approvals which would enable the Promoter to fulfill
                                            its obligations under this Agreement. Any refund, transfer of security, if provided in terms of the Agreement shall
                                            be made in accordance with the provisions of Foreign Exchange Management Act, 1999 or the statutory enactments or amendments 
                                            thereof and the Rules and Regulations of the Reserve Bank of India or any other applicable law. The Allottee understands and 
                                            agrees that in the event of any failure on his/her part to comply with the applicable guidelines issued by the Reserve Bank of
                                            India; he/she may be liable for any action under 
                                            the Foreign Exchange Management Act, 1999 or other laws as applicable, as amended from time to time.   
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        3.2
                                    </div>
                                    <div class="col-xs-11">  
                                        <p>
                                            The Promoter accepts no responsibility in regard to matters specified in
                                            para 3.1 above. The Allottee shall keep the Promoter fully indemnified and harmless
                                            in this regard. Whenever there is any change in the residential status of the Allottee 
                                            subsequent to the signing of this Agreement, it shall be the sole responsibility of the
                                            Allottee to intimate the same in writing to the Promoter immediately and comply with
                                            necessary formalities if any under the applicable laws. The Promoter shall not be 
                                            responsible towards any third party making payment/remittances on behalf of any Allottee 
                                            and such third party shall not have any right in the application/allotment of the said plot 
                                            applied for herein in any way and the Promoter shall be issuing the payment receipts in
                                            favour of the Allottee only. 
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        <label> 4.</label>
                                    </div>
                                    <div class="col-xs-11">  
                                        <label>ADJUSTMENT / APPROPRIATION OF PAYMENTS:</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">

                                    </div>
                                    <div class="col-xs-11">  
                                        <p>
                                            The Allottee authorizes the Promoter to adjust/appropriate 
                                            all payments made by him/her under any head(s) of dues against lawful outstanding 
                                            of the allottee against the Residential Plot No. <strong> <?php echo $unit_no; ?> </strong>, if any, in his/her name and
                                            the Allottee undertakes not to object/demand/direct the Promoter to adjust his payments in
                                            any manner. 
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        <label> 5.</label>
                                    </div>
                                    <div class="col-xs-11">  
                                        <label>TIME IS ESSENCE:  </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">

                                    </div>
                                    <div class="col-xs-11">  
                                        <p>
                                            The Promoter shall abide by the time schedule for completing the project as disclosed 
                                            at the time of registration of the project with the Authority and towards handing over
                                            the Residential Plot No. <strong> <?php echo $unit_no; ?> </strong>  to the Allottee and the common area 
                                            / amenities and facilities to the association of allottees or the competent authority,
                                            as the case may be. 
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        <label>  6.</label>
                                    </div>
                                    <div class="col-xs-11">  
                                        <label> CONSTRUCTION / DEVELOPMENT OF THE PROJECT:   </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">

                                    </div>
                                    <div class="col-xs-11">  
                                        <p>
                                            The Allottee has seen the proposed layout plan, specifications, amenities and facilities of
                                            the Project and accepted demarcation plan, payment plan, and the specifications, amenities 
                                            and facilities [annexed along with this Agreement] which has been approved by the competent 
                                            authority, as represented by the Promoter. The Promoter shall develop the Project in 
                                            accordance with the said layout plans and specifications, amenities and facilities. Subject
                                            to the terms in this Agreement, the Promoter undertakes to strictly abide by such plans
                                            approved by the competent Authorities and shall also strictly abide by the bye-laws, FAR
                                            and density norms and provisions prescribed by the Town and Country Planning Bhopal and 
                                            shall not have an option to make any variation /alteration / modification in such plans, 
                                            other than in the manner provided under the Act, and breach of this term by the Promoter 
                                            shall constitute a material breach of the Agreement. 
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        <label>7.</label>
                                    </div>
                                    <div class="col-xs-11">  
                                        <label>POSSESSION OF THE RESIDENTIAL PLOT UNIT.  </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        7.1
                                    </div>
                                    <div class="col-xs-11">  
                                        <p>
                                        <p>
                                            Schedule for possession of the said Residential Plot No. <strong> <?php echo $unit_no; ?> </strong>  - The
                                            Promoter agrees and understands that timely delivery of possession of the Residential 
                                            Plot No. <strong> <?php echo $unit_no; ?> </strong> to the allottee and the common areas, amenities and 
                                            facilities to the association of allottees or the competent authority, as the case may 
                                            be, is the essence of the Agreement. The Promoter assures to hand over possession of the
                                            Residential Plot No. <strong> <?php echo $unit_no; ?> </strong> along with ready and complete common area,of
                                            the project in place on (date to be specified) _________________, unless there is delay or
                                            failure due to war, flood, drought, fire, cyclone, earthquake or any other calamity caused 
                                            by nature affecting the regular development of the real estate project (“Force Majeure”).
                                            If, however, the completion of the Project is delayed due to the Force Majeure conditions 
                                            then the Allottee agrees that the Promoter shall be entitled to the extension of time for
                                            delivery of possession of the Residential Plot No. <strong> <?php echo $unit_no; ?> </strong> , provided that
                                            such Force Majeure conditions are not of a nature, which make it impossible for the contract
                                            to be implemented. The Allottee agrees and confirms that, in the event it becomes impossible
                                            for the Promoter to implement the project due to Force Majeure conditions, then this 
                                            allotment shall stand terminated and the Promoter shall refund to the Allottee the entire
                                            amount received by the Promoter from the allotment within 45 days from that date. 
                                            The promoter shall intimate the allottee about such termination at least thirty days prior
                                            to such termination. After refund of the money paid by the Allottee, the Allottee agrees 
                                            that he/ she shall not have any rights, claims etc. against the Promoter and that the 
                                            Promoter shall be released and discharged from all its obligations and liabilities under
                                            this Agreement. 
                                        </p>
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        7.2
                                    </div>
                                    <div class="col-xs-11">  
                                        <p>
                                            Procedure for taking possession - The Promoter, upon obtaining full and final payment 
                                            from the allottee & the completion certificate* from the competent authority shall offer
                                            in writing the possession of the Residential Plot No. <strong> <?php echo $unit_no; ?> </strong> , to the 
                                            Allottee in terms of this Agreement to be taken within two months from the date of issue
                                            of completion certificate. [Provided that, in the absence of local law, the conveyance
                                            deed in favour of the allottee shall be carried out by the promoter within 3 months from
                                            the date of issue of completion certificate]. The Promoter agrees and undertakes to 
                                            indemnify the Allottee in case of failure of fulfillment of any of the provisions, 
                                            formalities, documentation on part of the Promoter. The Allottee, after taking possession,
                                            agree(s) to pay the maintenance charges as determined by the Promoter/association of 
                                            allottees, as the case may be after the issuance of the completion certificate for the 
                                            project. The promoter shall hand over the completion certificate of the Residential Plot 
                                            unit, as the case may be, to the allottee at the time of conveyance of the same. That it 
                                            shall be mandatory for the Allottee  to become a member of the residents society, at 
                                            the time of possession of the said property, which is already formed by the residents 
                                            of Essarjee Sampada (Phase-1) and which shall be responsible for all maintenance and 
                                            security provision of the premises as may be mutually decided later. 
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        7.3
                                    </div>
                                    <div class="col-xs-11">  
                                        <p>
                                            Failure of Allottee to take Possession of Residential Plot
                                            No. <strong> <?php echo $unit_no; ?> </strong> Upon receiving a written intimation from the Promoter
                                            as per para 7.2, the Allottee shall take possession of the Residential Plot 
                                            No. <strong> <?php echo $unit_no; ?> </strong>  from the Promoter by executing necessary indemnities, 
                                            undertakings and such other documentation as prescribed in this Agreement, and the 
                                            Promoter shall give possession of the Residential Plot No. <strong> <?php echo $unit_no; ?> </strong>  to 
                                            the allottee. In case the Allottee fails to take possession within the time provided 
                                            in para 7.2, such Allottee shall continue to be liable to pay maintenance charges as 
                                            specified in para 7.2. Also in the event of Allottee’s failure to take possession or
                                            getting conveyance deed done in time limit, for any reason whatsoever, expenditure 
                                            incurred on the taking care and/or maintenance of the plot shall be charged extra at
                                            the rate of rupees thirty per sqm of the plot area plus taxes per month from the date
                                            onwards other than external maintenance charges, and be paid by the purchaser as and 
                                            when demanded by the builder. 
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        7.4
                                    </div>
                                    <div class="col-xs-11">  
                                        <p>
                                            Possession by the Allottee - After obtaining the completion certificate* and 
                                            handing over physical possession of the Residential Plot No. <strong> <?php echo $unit_no; ?> </strong>  to
                                            the Allottees, it shall be the responsibility of the Promoter to hand over the necessary
                                            documents and plans, including common area amenities and facilities, to the association
                                            of Allottees or the competent authority, as the case may be, as per the local laws. 
                                            Provided that, in the absence of any local law, the promoter shall handover the necessary
                                            documents and plans, including common area amenities and facilities, to the association 
                                            of allottees or the competent authority, as the case may be, within thirty days after 
                                            obtaining the completion certificate. 
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        7.5
                                    </div>
                                    <div class="col-xs-11">  
                                        <p>
                                            Cancellation by Allottee – The Allottee shall have the right to cancel/withdraw his
                                            allotment in the Project as provided in the Act: 
                                            Provided that where the allottee proposes to cancel/withdraw from the project without
                                            any fault of the promoter, the promoter herein is entitled to forfeit the booking 
                                            amount paid or 10% of the total cost of the allotted Plot whichever is more for the
                                            allotment. The balance amount of money paid by the allottee shall be returned by the
                                            promoter to the allottee within 45 days of such cancellation. 
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        7.6
                                    </div>
                                    <div class="col-xs-11">  
                                        <p>
                                            Compensation – The Promoter shall compensate the Allottee in case of any loss caused
                                            to him due to defective title of the land, on which the project is being developed or
                                            has been developed, in the manner as provided under the Act and the claim for interest
                                            and compensation under this provision shall not be barred by limitation provided under
                                            any law for the time being in force. 
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">

                                    </div>
                                    <div class="col-xs-11">  
                                        <p>
                                            Except for occurrence of a Force Majeure event, if the promoter fails to complete or
                                            is unable to give possession of the Residential Plot No. <strong> <?php echo $unit_no; ?> </strong> (i) 
                                            in accordance with the terms of this Agreement, duly completed by the date specified 
                                            in para 7.1; or (ii) due to discontinuance of his business as a developer on account 
                                            of suspension or revocation of the registration under the Act; or for any other reason; 
                                            the Promoter shall be liable, on demand to the allottees, in case the Allottee wishes to 
                                            withdraw from the Project, without prejudice to any other remedy available, to return the
                                            total amount received by him in respect of the Residential Plot No. <strong> <?php echo $unit_no; ?> </strong> 
                                            with interest at the rate prescribed in the Rules including compensation in the manner as
                                            provided under the Act within forty-five days of it becoming due. Provided that where if
                                            the Allottee does not intend to withdraw from the Project, the Promoter shall pay the
                                            Allottee interest at the rate prescribed in the Rules for every month of delay, till 
                                            the handing over of the possession of the Residential Plot No. <strong> <?php echo $unit_no; ?> </strong>
                                            which shall be paid by the promoter to the allottee within forty-five days of it 
                                            becoming due. 
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        <label>8.</label>
                                    </div>
                                    <div class="col-xs-11">  
                                        <label> REPRESENTATIONS AND WARRANTIES OF THE PROMOTER:  </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">

                                    </div>
                                    <div class="col-xs-11">  
                                        The Promoter hereby represents and warrants to the Allottee as follows: 
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        (i)
                                    </div>
                                    <div class="col-xs-11">  
                                        <p>
                                            The Promoter has absolute, clear and marketable title with respect to the said Land; 
                                            the requisite rights to carry out development upon the said Land and absolute, 
                                            actual, physical and legal possession of the said Land for the Project; 
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        (ii)
                                    </div>
                                    <div class="col-xs-11">  
                                        <p>
                                            The Promoter has lawful rights and requisite approvals from the competent Authorities
                                            to carry out development of the Project; 
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        (iii)
                                    </div>
                                    <div class="col-xs-11">  
                                        <p>
                                            There are no encumbrances upon the said Land or the Project;
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        (iv)
                                    </div>
                                    <div class="col-xs-11">  
                                        <p>
                                            There are no litigations pending before any Court of law or Authority with respect
                                            to the said Land, Project or the Residential Plot No. <strong> <?php echo $unit_no; ?> </strong>
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        (v)
                                    </div>
                                    <div class="col-xs-11">  
                                        <p>
                                            All approvals, licenses and permits issued by the competent authorities with 
                                            respect to the Project, said Land and Residential Plot No. <strong> <?php echo $unit_no; ?> </strong> 
                                            are valid and subsisting and have been obtained by following due process of law.
                                            Further, the Promoter has been and shall, at all times, remain to be in compliance 
                                            with all applicable laws in relation to the Project, said Land, and Residential Plot
                                            No. <strong> <?php echo $unit_no; ?> </strong>  and common area; 
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        (vi)
                                    </div>
                                    <div class="col-xs-11">  
                                        <p>
                                            The Promoter has the right to enter into this Agreement and has not committed or 
                                            omitted to perform any act or thing, whereby the right, title and interest of the 
                                            Allottee created herein, may prejudicially be affected; 
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        (vii)
                                    </div>
                                    <div class="col-xs-11">  
                                        <p>
                                            The Promoter has not entered into any agreement for sale and/or development 
                                            agreement or any other agreement / arrangement with any person or party with
                                            respect to the said Land, including the Project and the said Residential Plot
                                            No. <strong> <?php echo $unit_no; ?> </strong>  which will, in any manner, affect the rights of 
                                            Allottee under this Agreement;
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        (viii)
                                    </div>
                                    <div class="col-xs-11">  
                                        <p>
                                            The Promoter confirms that the Promoter is not restricted in any manner whatsoever 
                                            from selling the said Residential Plot No. <strong> <?php echo $unit_no; ?> </strong> to the Allottee in
                                            the manner contemplated in this Agreement; 
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        (ix)
                                    </div>
                                    <div class="col-xs-11">  
                                        <p>
                                            At the time of execution of the conveyance deed the Promoter shall handover lawful, 
                                            vacant, peaceful, physical possession of the Residential Plot No. <strong> <?php echo $unit_no; ?> </strong> 
                                            to the Allottee and the common area, to the association of allottees or the competent 
                                            authority, as the case may be; 
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        (x) 
                                    </div>
                                    <div class="col-xs-11">  
                                        <p>
                                            The Schedule Property is not the subject matter of any HUF and that no part thereof
                                            is owned by any minor and/or no minor has any right, title and claim over the Schedule 
                                            Property; 
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        (xi)
                                    </div>
                                    <div class="col-xs-11">  
                                        <p>
                                            The Promoter has duly paid and shall continue to pay and discharge all governmental
                                            dues, rates, charges and taxes and other monies, levies, impositions, premiums, damages
                                            and/or penalties and other outgoings, whatsoever, payable with respect to the said
                                            project to the competent Authorities till the completion certificate has been issued
                                            and possession of Residential Plot No. <strong> <?php echo $unit_no; ?> </strong> , along with common 
                                            area, (equipped with all the specifications, amenities and facilities) has been handed
                                            over to the allottee and the association of allottees or the competent authority, as 
                                            the case may be except for the property tax and diversion rent etc., which will be 
                                            levied on the Allottee from the date of registry of the row house in favour of the 
                                            Allottee by the promoter or from the last date of payment as mentioned in the payment
                                            schedule whichever is earlier. 
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        (xii)
                                    </div>
                                    <div class="col-xs-11">  
                                        <p>
                                            No notice from the Government or any other local body or authority or any legislative 
                                            enactment, government ordinance, order, notification (including any notice for acquisition
                                            or requisition of the said property) has been received by or served upon the Promoter in 
                                            respect of the said Land and/or the Project pertaining to the legality of the project. 
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        <label>9.</label>
                                    </div>
                                    <div class="col-xs-11">  
                                        <label> EVENTS OF DEFAULTS AND CONSEQUENCES:  </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        <label>9.1 </label>
                                    </div>
                                    <div class="col-xs-11">  
                                        <p>
                                            Subject to the Force Majeure clause, the Promoter shall be considered
                                            under a condition of Default, in the following events: 
                                        </p>
                                        <div class="col-xs-1">
                                            <label>(i)  </label>
                                        </div>
                                        <div class="col-xs-11">  
                                            <p>
                                                Promoter fails to provide ready to move in possession of the Residential Plot 
                                                No. <strong> <?php echo $unit_no; ?> </strong>  to the Allottee within the time period specified in
                                                para 7.1 or fails to complete the project within the stipulated time disclosed at 
                                                the time of registration of the project with the Authority. For the purpose of this 
                                                para, 'ready to move in possession' shall mean that the Residential Plot shall ready
                                                for construction after taking necessary building permission from Municipal 
                                                Corporation, Bhopal. The plot is complete in all respects including the provision 
                                                of all specifications, amenities and facilities, as agreed to between the parties,
                                                and for which completion certificate, has been issued by the competent authority; 
                                            </p>
                                        </div>
                                        <div class="col-xs-1">
                                            <label>(ii)</label>
                                        </div>
                                        <div class="col-xs-11">  
                                            <p>
                                                Discontinuance of the Promoter’s business as a developer on account of suspension or 
                                                revocation of his registration under the provisions of the Act or the rules or 
                                                regulations made there under. 
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        <label>9.2 </label>
                                    </div>
                                    <div class="col-xs-11">  
                                        <p>
                                            In case of Default by Promoter under the conditions listed above, Allottee 
                                            is entitled to the following: 
                                        </p>
                                        <div class="col-xs-1">
                                            <label>(i)  </label>
                                        </div>
                                        <div class="col-xs-11">  
                                            <p>
                                                Stop making further payments to Promoter as demanded by the Promoter. If the 
                                                Allottee stops making payments, the Promoter shall correct the situation by completing
                                                the construction milestones and only thereafter the Allottee be required to make the 
                                                next payment without any interest; or
                                            </p>
                                        </div>
                                        <div class="col-xs-1">
                                            <label>(ii)</label>
                                        </div>
                                        <div class="col-xs-11">  
                                            <p>
                                                The Allottee shall have the option of terminating the Agreement in which case the 
                                                Promoter shall be liable to refund the entire money paid by the Allottee under any head
                                                whatsoever towards the purchase of the apartment, along with interest at the rate 
                                                prescribed in the Rules within forty-five days of receiving the termination notice:
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        <label> 9.3 </label>
                                    </div>
                                    <div class="col-xs-11">  
                                        <p>
                                            The Allottee shall be considered under a condition of Default, on the occurrence 
                                            of the following events: 
                                        </p>
                                        <div class="col-xs-1">
                                            <label>(i)  </label>
                                        </div>
                                        <div class="col-xs-11">  
                                            <p>
                                                In case the Allottee fails to make payments for 2 consecutive demands made by the 
                                                Promoter as per the Payment Plan annexed hereto, despite having been issued notice in
                                                that regard the allottee shall be liable to pay interest to the promoter on the unpaid 
                                                amount at the rate based on the State Bank of India highest marginal cost of lending 
                                                rate ………… plus two percent (as on date of signing of the agreement) from their 
                                                respective due dates. 
                                            </p>
                                        </div>
                                        <div class="col-xs-1">
                                            <label>(ii)</label>
                                        </div>
                                        <div class="col-xs-11">  
                                            <p>
                                                In case of Default by Allottee under the condition listed above continues for a 
                                                period beyond 2 consecutive months after notice from the Promoter in this regard, the 
                                                Promoter may cancel the allotment of the Residential Plot No. <strong> <?php echo $unit_no; ?> </strong> 
                                                in favour of the Allottee and refund the money paid to him by the allottee by deducting
                                                the booking amount or 10% of the total price of the plot, whichever is more and the 
                                                interest liabilities and this Agreement shall thereupon stand terminated. Provided 
                                                that the promoter shall intimate the allottee about such termination at least thirty
                                                days prior to such termination.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        <label>10.</label>
                                    </div>
                                    <div class="col-xs-11">  
                                        <p>
                                            The Promoter, on receipt of Total Price of the Residential Plot 
                                            No. <strong> <?php echo $unit_no; ?> </strong>  as per para 1.2 under the Agreement from the Allottee, shall execute
                                            a conveyance deed and convey the title of the Residential Plot No. <strong> <?php echo $unit_no; ?> </strong>  
                                            together with proportionate indivisible share in the Common area, within 3 months from the date 
                                            of issuance of the the completion certificate, to the allottee. [Provided that, in the absence of
                                            local law, the conveyance deed in favour of the allottee shall be carried out by the promoter within 
                                            3 months from the date of issue of Completion certificate]. However, in case the Allottee fails to
                                            deposit the stamp duty and/or registration charges and mutation charges within the period mentioned
                                            in the notice, the Allottee authorizes the Promoter to withhold registration of the conveyance deed
                                            in his/her favour until payment of stamp duty and registration charges and mutation charges to the
                                            Promoter is made by the Allottee.
                                            <br>  Provided further that the Promoter may instead of executing separate transfer deeds of 
                                            proportionate common area, along with each individual plot, may transfer the entire proportionate
                                            common area with respect to all the units in the project, to the Association of Allottees, by executing
                                            a single Deed, in accordance with the provisions of the M.P. Prakostha Swamitva Adhiniyam 2002, within 
                                            three months of obtaining the Completion/Occupancy Certificate, as the case may be. It is hereby made 
                                            clear, that in either case the entire cost of the transfer deed to executed with respect to the 
                                            proportionate common areas, shall be borne exclusive by each of the Allottee or the Association of 
                                            Allottees, as the case may be.
                                            <br>    Provided further that since the entire proportionate common area shall be transferred to 
                                            the Association of the Allottees by operation and in compliance of the provisions of the Act, without
                                            any consideration to be paid to the Promoter, therefore the transfer of the proportionate common area
                                            to the Association of Allottees, shall always be deemed to be without payment of any consideration to
                                            the Promoter so as not to add any amount to the Capital Gain or consequent Income Tax to the account 
                                            of the Promoter and it shall always be deemed to be a transfer by operation of law.       
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        <label>11.</label>
                                    </div>
                                    <div class="col-xs-11">
                                        <label> MAINTENANCE OF THE SAID PROJECT: </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">

                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            The Promoter shall be responsible to provide and maintain essential services in the Project until 
                                            the taking over of the maintenance of the project by the association of allottees upon the issuance
                                            of the completion certificate of the project. The cost of such maintenance has been included in the
                                            Total Price of the Residential Plot No. <strong> <?php echo $unit_no; ?> </strong>    
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        <label> 112.</label>
                                    </div>
                                    <div class="col-xs-11">
                                        <label>DEFECT LIABILITY:</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">

                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            It is agreed that in case any defect or any other defect in workmanship, quality or 
                                            provision of services of common area, or any other obligations of the Promoter as per the agreement 
                                            for sale relating to such developments is brought to the notice of the Promoter within 
                                            a period of 5 (five) years by the Allottee from the date of handing over possession of the Plot,
                                            it shall be the duty of the Promoter to rectify such defects without further charge, within 30 (thirty) 
                                            days, and in the event of Promoter’s failure to rectify such defects within such time, the aggrieved Allottees 
                                            shall be entitled to receive appropriate compensation in the manner as provided under the Act.
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        <label> 
                                            13.
                                        </label>
                                    </div>
                                    <div class="col-xs-11">
                                        <label>RIGHT TO ENTER THE PLOT FOR REPAIRS: </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        <label> 

                                        </label>
                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            The Promoter/maintenance agency/association of allottees shall have rights of
                                            unrestricted access of all Common Areas, for providing necessary maintenance services and 
                                            the Allottee agrees to permit the association of allottees and/or maintenance agency to enter
                                            into the plot or any part thereof, after due notice and during the normal working hours, unless
                                            the circumstances warrant otherwise, with a view to set right any defect.   
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        <label> 
                                            14.
                                        </label>
                                    </div>
                                    <div class="col-xs-11">
                                        <label> USAGE:</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        <label> 

                                        </label>
                                    </div>
                                    <div class="col-xs-11">
                                        the <?php echo $project_name; ?>,
                                        shall be earmarked for purposes such as parking spaces and services including but not limited to
                                        electric sub-station,
                                        transformer, DG set rooms, underground water tanks, pump rooms, maintenance and service rooms, 
                                        firefighting pumps and
                                        equipment’s etc. and other permitted uses as per sanctioned plans. The Allottee shall not be 
                                        permitted to use the services
                                        areas and the basements in any manner whatsoever, other than those earmarked as parking spaces,
                                        and the same shall be reserved 
                                        for use by the association of allottees formed by the Allottees for rendering maintenance services.
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        <label> 
                                            15.
                                        </label>
                                    </div>
                                    <div class="col-xs-11">
                                        <label>  GENERAL COMPLIANCE WITH RESPECT TO THE PLOT: </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        <label> 
                                            15.1
                                        </label>
                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            Subject to para 12 above, the Allottee shall, after taking possession of plot and during the course of 
                                            construction the allottee shall ensure that; (a) The common services provided at the project by promoter should 
                                            not get damaged or jeopardized. (b) The adjacent constructed units should not get damaged or jeopardized. In case 
                                            of any such damage the allottee agrees to repair and maintain it to its original condition on its own cost and expenditure.
                                            After completing the construction on the plot, the allotee shall be solely responsible to maintain
                                            the Residential Plot No. <strong> <?php echo $unit_no; ?> </strong> at his/her own cost, in good repair and condition and shall not do or suffer to
                                            be done anything in or to the adjacent units on either side and at back side of the Residential Plot No. <strong> <?php echo $unit_no; ?> </strong> , which 
                                            may be in violation of any laws or rules of any authority or change or alter or make additions to the 
                                            Residential Plot No. <strong> <?php echo $unit_no; ?> </strong>  and keep the Residential Plot No. <strong> <?php echo $unit_no; ?> </strong> , its walls and partitions, sewers, 
                                            drains, pipe and appurtenances thereto or belonging thereto, in good and tenantable repair and maintain the same in 
                                            a fit and proper condition and ensure that the support, shelter etc. of the Residential Plot No. <strong> <?php echo $unit_no; ?> </strong> 
                                            And adjacent units on either side and at back side are not in any way damaged or jeopardized.   
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        <label> 
                                            15.2
                                        </label>
                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            The Allottee further undertakes, assures and guarantees that he/she would not put any sign-board / name-plate,
                                            neon light, publicity material or advertisement material etc. on the face / facade of the Residential Plot No. <strong> <?php echo $unit_no; ?> </strong>   or 
                                            anywhere on the exterior of the Project, buildings therein or Common Areas. Further, the Allottee shall not store any hazardous
                                            or combustible goods in the 
                                            Residential Plot No. <strong> <?php echo $unit_no; ?> </strong>  or place any heavy material in the common area of the project. 
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        <label> 
                                            15.3 
                                        </label>
                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            The Allottee shall plan and distribute its electrical load in conformity with the electrical systems installed by the 
                                            Promoter as per the sanctioned load by MPMKVVCL and thereafter the association of allottees and/or maintenance agency appointed
                                            by association of allottees. The Allottee shall be responsible for any 
                                            loss or damages arising out of breach of any of the previously mentioned conditions. 
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        <label> 
                                            16.
                                        </label>
                                    </div>
                                    <div class="col-xs-11">
                                        <label> COMPLIANCE OF LAWS, NOTIFICATIONS ETC. BY PARTIES:</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">

                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            The Parties are entering into this Agreement for the allotment of a Residential Plot No. <strong> <?php echo $unit_no; ?> </strong>  with the
                                            full knowledge of all laws, rules, regulations,
                                            notifications applicable to the project. 
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        <label>17.</label>
                                    </div>
                                    <div class="col-xs-11">
                                        <label>ADDITIONAL CONSTRUCTIONS: </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">

                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            The Promoter undertakes that it has no right to make additions or to put up additional structure(s)
                                            anywhere in the Project after the development plan, layout plan, sanction plan and specifications, 
                                            amenities and facilities has been approved by the competent authority(is) and disclosed, except for
                                            as provided in the Act.  
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        <label>18.</label>
                                    </div>
                                    <div class="col-xs-11">
                                        <label> PROMOTER SHALL NOT MORTGAGE OR CREATE A CHARGE:  </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">

                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            After the Promoter executes this Agreement he shall not mortgage or create a charge on
                                            the Residential Plot No. <strong> <?php echo $unit_no; ?> </strong>  and if any such mortgage or charge is made or created then
                                            notwithstanding anything contained in any other law for the time being in force, such mortgage or charge shall
                                            not affect the right and interest of
                                            the Allottee who has taken or agreed to take such Plot.    
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        <label>19.</label>
                                    </div>
                                    <div class="col-xs-11">
                                        <label>OWNERSHIP ACT:  </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">

                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            The Promoter has assured the Allottees that the project in its entirety
                                            is in accordance with the provisions of the Registration Act 1908. The Promoter showing compliance of
                                            various laws / regulations as applicable in Registration Act 1908 and amendments, if any.  
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        <label>20.</label>
                                    </div>
                                    <div class="col-xs-11">
                                        <label> BINDING EFFECT: </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">

                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            Forwarding this Agreement to the Allottee by the Promoter does not create a binding obligation on the 
                                            part of the Promoter or the Allottee until, firstly, the Allottee signs and delivers this Agreement 
                                            with all the schedules along with the payments due as stipulated in the Payment Plan within 30 (thirty) days from 
                                            the date of receipt by the Allottee and secondly, appears for registration of the same before the concerned 
                                            Sub-Registrar Bhopal, at ISBT Bhopal as and when intimated by the Promoter. If the Allottee(s) fails to execute and deliver to
                                            the Promoter this Agreement within 30 (thirty) days from the date of its receipt by the Allottee and/or appear before the 
                                            Sub-Registrar for its registration as and when intimated by the Promoter, then the Promoter shall serve a notice to 
                                            the Allottee for rectifying the default, which if not rectified within 30 (thirty) days from the date of its receipt by
                                            the Allottee, application of the Allottee shall be treated as cancelled and all sums deposited by the Allottee in connection 
                                            therewith including the booking amount
                                            shall be returned to the Allottee without any interest or compensation whatsoever.
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        <label>21.</label>
                                    </div>
                                    <div class="col-xs-11">
                                        <label>ENTIRE AGREEMENT:</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">

                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            This Agreement, along with its schedules, constitutes the entire Agreement between the
                                            Parties with respect to the subject matter hereof and supersedes any and all 
                                            understandings, any other agreements, allotment letter, correspondences, 
                                            arrangements whether written or oral, if any, between the Parties in regard to 
                                            the said plot/plot/building, as the case may be. 
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        <label>22.</label>
                                    </div>
                                    <div class="col-xs-11">
                                        <label>RIGHT TO AMEND:</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">

                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            This Agreement may only be amended through written consent of the Parties.
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        <label>23.</label>
                                    </div>
                                    <div class="col-xs-11">
                                        <label>PROVISIONS OF THIS AGREEMENT APPLICABLE ON ALLOTTEE / SUBSEQUENT ALLOTTEES:</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">

                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            It is clearly understood and so agreed by and between the Parties hereto that all 
                                            the provisions contained herein and the obligations arising hereunder in respect of the
                                            Residential Plot No. <strong> <?php echo $unit_no; ?> </strong>  and the Project shall equally be applicable to and enforceable against 
                                            and by any subsequent Allottees of the Residential Plot No. <strong> <?php echo $unit_no; ?> </strong> , in case of a transfer, as the
                                            said obligations go along with the Residential Plot No. <strong> <?php echo $unit_no; ?> </strong>  for all intents and purposes.    
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        <label>24.</label>
                                    </div>
                                    <div class="col-xs-11">
                                        <label>WAIVER NOT A LIMITATION TO ENFORCE:</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        24.1
                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            The Promoter may, at its sole option and discretion, without prejudice to its
                                            rights as set out in this Agreement, waive the breach by the Allottee in not
                                            making payments as per the Payment Plan [Annexure C] including waiving the 
                                            payment of interest for delayed payment. It is made clear and so agreed by 
                                            the Allottee that exercise of discretion by the Promoter in the case of one 
                                            Allottee shall not be construed to be a precedent and /or binding on the Promoter
                                            to exercise such discretion in the case of other Allottees.
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        24.2
                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            Failure on the part of the Parties to enforce at any time or for any period 
                                            of time the provisions hereof shall not be construed to be a waiver of any
                                            provisions or of the right thereafter to enforce each and every provision.   
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        <label>25.</label>
                                    </div>
                                    <div class="col-xs-11">
                                        <label>SEVERABILITY:</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">

                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            If any provision of this Agreement shall be determined to be void or 
                                            unenforceable under the Act or the Rules and Regulations made there under
                                            or under other applicable laws, such provisions of the Agreement shall be
                                            deemed amended or deleted in so far as reasonably inconsistent with the 
                                            purpose of this Agreement and to the extent necessary to conform to Act 
                                            or the Rules and Regulations made there under or the applicable law, as
                                            the case may be, and the remaining provisions of this Agreement shall 
                                            remain valid and enforceable as applicable at the time of execution of 
                                            this Agreement.   
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        <label>26.</label>
                                    </div>
                                    <div class="col-xs-11">
                                        <label>METHOD OF CALCULATION OF PROPORTIONATE SHARE WHEREVER REFERRED TO IN THE 
                                            AGREEMENT:</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">

                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            Wherever in this Agreement it is stipulated that the Allottee has to 
                                            make any payment, in common with other Allottee(s) in Project, the same 
                                            shall be the proportion which the Plot area of the Residential Plot No.
                                            <strong> <?php echo $unit_no; ?> </strong>  bears to the total Plot area of
                                            all the Residential Plots in the Project.   
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        <label>27.</label>
                                    </div>
                                    <div class="col-xs-11">
                                        <label>FURTHER ASSURANCES: </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">

                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            Both Parties agree that they shall execute, acknowledge and deliver to the
                                            other such instruments and take such other actions, in additions to the 
                                            instruments and actions specifically provided for herein, as may be reasonably
                                            required in order to effectuate the provisions of this Agreement or of any 
                                            transaction contemplated herein or to confirm or perfect any right to be 
                                            created or transferred hereunder or pursuant to any such transaction. 
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        <label>28.</label>
                                    </div>
                                    <div class="col-xs-11">
                                        <label>PLACE OF EXECUTION:</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">

                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            The execution of this Agreement shall be complete only upon its execution by 
                                            the Promoter through its authorized signatory at the Promoter’s Office, or at
                                            some other place, which may be mutually agreed between the Promoter and the 
                                            Allottee, in BHOPAL after the Agreement is duly executed by the Allottee and 
                                            the Promoter or simultaneously with the execution the said Agreement shall be
                                            registered at the office of the Sub-Registrar at ISBT, Bhopal. Hence this 
                                            Agreement shall be deemed to have been executed at BHOPAL. In case any 
                                            additional stamp duty is required to be paid for the registration of the
                                            Agreement for sale that shall be additionally borne by the Allottee
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        <label>29.</label>
                                    </div>
                                    <div class="col-xs-11">
                                        <label>NOTICES:</label>
                                    </div>
                                </div>

                                <p>
                                    That all notices to be served on the Allottee and the Promoter as contemplated by this 
                                    Agreement shall be deemed to have been duly served if sent to the Allottee or the Promoter 
                                    by Registered Post at their respective addresses specified below:   
                                    <strong><?php echo $name; ?></strong> . of Allottee <br>
                                    <strong><?php echo $present_addr; ?></strong> 	
                                    (Allottee Address)<br>M/s <?php foreach ($this->Payment_model->get_company_Company_Name() as $row) { ?> 
                                        <span><?php echo $row->value; ?></span><?php } ?> 
                                    Essarjee House,<?php foreach ($this->Payment_model->get_company_Address() as $row) { ?> <span><?php echo $row->value; ?></span> <?php } ?> <?php foreach ($this->Payment_model->get_company_Pincode() as $row) { ?> <span><?php //echo$row->value;                                                                                                                                                           ?></span> <?php } ?> 

                                    It shall be the duty of the Allottee and the Promoter to inform each other of any change in address subsequent to the execution of this Agreement in the above address by Registered Post failing which all communications and letters posted at the above address shall be deemed to have been received by the promoter or the Allottee, as the case may be.
                                </p>
                                <div class="row">
                                    <div class="col-xs-1">
                                        <label>30.</label>
                                    </div>
                                    <div class="col-xs-11">
                                        <label> JOINT ALLOTTEES:</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">

                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            That in case there are Joint Allottees all communications shall be sent by the 
                                            Promoter to the Allottee whose name appears first and at the address given by him/her, 
                                            which shall for all intents and purposes to consider as properly served on all the Allottees.    
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        <label>31.</label>
                                    </div>
                                    <div class="col-xs-11">
                                        <label>SAVINGS: </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">

                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            Any application letter, allotment letter, agreement, or any other document 
                                            signed by the allottee, in respect of the Residential Plot No. 
                                            <strong> <?php echo $unit_no; ?> </strong>   prior to the execution and 
                                            registration of this Agreement for Sale for such Residential Plot No. 
                                            <strong> <?php echo $unit_no; ?> </strong>   shall not be construed to 
                                            limit the rights and interests of the allottee under the Agreement for 
                                            Sale or under the Act or the rules or the regulations made there under.     
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        <label> 32.</label>
                                    </div>
                                    <div class="col-xs-11">
                                        <label>GOVERNING LAW & JURISDICTION:</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">

                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            That the rights and obligations of the parties under or arising out of this Agreement shall 
                                            be construed and enforced in accordance with the Act and the Rules and Regulations made there 
                                            under including other applicable laws of India for the time being in force. In the matters 
                                            falling beyond the jurisdiction of the Authority and/or Real Estate Regulatory Tribunal, the
                                            Courts of Law in Bhopal will have exclusive jurisdiction with respect to all matters pertaining 
                                            to this Agreement.    
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">
                                        <label>33.</label>
                                    </div>
                                    <div class="col-xs-11">
                                        <label>DISPUTE RESOLUTION:</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-1">

                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            All or any disputes arising out or touching upon or in relation to the terms
                                            and conditions of this Agreement, including the interpretation and validity of the terms thereof and 
                                            the respective rights and obligations of the Parties, shall be settled amicably by mutual discussion, 
                                            failing which the same shall be settled through the adjudicating officer appointed under the Act.    
                                        </p> 
                                    </div>
                                </div>
                                <div class="row" style="color:red;">
                                    <div class="col-xs-1">
                                        34.
                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            If the Allottee wishes to sell or transfer the said plot to any other
                                            Third party before or after the registration of the said plot, the 
                                            Allottee  will have to pay 5% of the Collector value of the plot to
                                            the Promoter and take NOC from the Promoter before any such transfer.
                                        </p>  
                                    </div>
                                </div>
                                <div class="row" style="color:red;">
                                    <div class="col-xs-1">
                                        35.
                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            The Allottee has/have also satisfied himself/herself/themselves 
                                            regarding the size location,  orientation, boundaries of the said plot.
                                        </p> 
                                    </div>
                                </div>
                                <div class="row" style="color:red;">
                                    <div class="col-xs-1">
                                        36. 
                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            Since the Project is under “self Finance Scheme”, therefore, it shall be
                                            the responsibility of the Allottee to make timely payment of all the 
                                            installments of the sale consideration and other dues payable by him/her.
                                            Loans from financial institutions for the said plot can be availed by the 
                                            Allottee at his/ her own costs and responsibilities, liabilities, 
                                            obligations by mortgaging the said unit by way of security for repayment 
                                            of the said loan to such Bank/ Financial Institution, with the prior
                                            written consent of the Promoter. The Promoter shall have rights to refuse
                                            permission to Allottee for availing any such loan and for creation of such
                                            mortgage/charge, in the event the Allottee has/have defaulted in making
                                            timely payment of the sale consideration and/or other amounts payable by
                                            the allottee under this agreement. However, if a particular 
                                            institution/Bank refuse to extend financial assistance on any ground, 
                                            the Allottee shall not make such refusal an excuse for non- payment of 
                                            further installment/dues. The Allottee shall not make delayed postal 
                                            delivery, delayed sanction of loan or another reason as an excuse for 
                                            non- payment of installment/dues. No claim by way of damages / compensation
                                            shall lie against the Promoter in case of delay in handing over the 
                                            possession on account of period of untimely payment by the Allottee and 
                                            the Promoter shall be entitled to a reasonable extension of time for the 
                                            delivery of possession of the said house to the Allottee. The aforesaid 
                                            period of construction shall be computed by excluding Sundays, Bank 
                                            holidays, enforced Govt. holidays, delays in payments and the days of 
                                            cessation of work at site in compliance of order of any judicial/ concerned 
                                            State legislative Body. 
                                        </p> 
                                    </div>
                                </div>
                                <div class="row" style="color:red;">
                                    <div class="col-xs-1">
                                        37.  
                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            In case of acceptance of delayed payments with interest the Promoter 
                                            shall be entitled to retain the possession of the said plot on the expenses
                                            of the Allottee till the time any such installment, interest or any sum 
                                            remain payable on account of any of the matters herein contained and to 
                                            enjoy the plot in any manner as they feel suitable and to recover all the 
                                            charges as may be necessary for the upkeep of the house, further. In case 
                                            of such eventuality, if any discount /concession, in whatsoever way, has
                                            been given by the Promoter in the basic original sale price to the Allottee
                                            in lieu of consensus of the Allottee for timely payment of installments and 
                                            other charges, then the Allottee hereby authorizes the Promoter to withdraw 
                                            such discount / concession and demand the payment of such 
                                            discount / concession amount as a part of sale consideration amount, which 
                                            the Allottee hereby agrees to pay immediately.
                                        </p>   
                                    </div>
                                </div>
                                <div class="row" style="color:red;">
                                    <div class="col-xs-1">
                                        38. 
                                    </div>
                                    <div class="col-xs-11">
                                        <p> 
                                            In ordinary course of business the Promoter shall not be entitled to 
                                            claim compensation on the account of delay and losses; the Promoter can
                                            claim such compensation in case of delays beyond the date of payment of 
                                            installments made by the Allottee, and Promoter shall be at liberty to 
                                            treat the date of completion of development/ construction as extended
                                            accordingly, and other losses because of interruption in the continuity 
                                            of the work as well. 
                                        </p>  
                                    </div>
                                </div>
                                <div class="row" style="color:red;">
                                    <div class="col-xs-1">
                                        39.
                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            The Allottee that in no condition shall dig any bore well in his plot to
                                            avail personal/ public water supply without taking prior written permission 
                                            from the Promoter/ local Govt. authority. In case of availability of water 
                                            the Promoter shall have all the rights in the public interest to seize bore
                                            wells from the property mentioned in the schedule hereto as per norms of the
                                            Bhopal Municipal Corporation/ local authorities. 
                                        </p>  
                                    </div>
                                </div>
                                <div class="row" style="color:red;">
                                    <div class="col-xs-1">
                                        40.
                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            The above mentioned price as specified in this agreement does not include 
                                            Narmada/ Kolar Water Taxes/Charges and shall be additionally borne by the 
                                            Allottee as and when required. In case if any kind of 
                                            installation/up-gradation, rates, cesses, charges, levies due to any 
                                            legislation of any Government and/or Semi Government and/or other departments 
                                            body’s order or directives or guidelines are demanded/ sanctioned/ imposed,
                                            then the Allottee will pay on demand to the Promoter, the additional 
                                            expenditure incurred thereon individually and/or on a pro rata basis along 
                                            with other Allottees, as the case may be, along with proportionate charges
                                            of the expenses incurred leading to the installation of network and/or 
                                            systems and/or equipments of all kinds whatsoever, and these charges shall 
                                            be treated, as unpaid sale price of the plot and the Promoter shall have 
                                            lien on the property under this agreement for the recovery of such charges. 
                                        </p> 
                                    </div>
                                </div>
                                <div class="row" style="color:red;">
                                    <div class="col-xs-1">
                                        41.
                                    </div>
                                    <div class="col-xs-11">
                                        <p> 
                                            As the construction of the project is being executed on the demarcated 
                                            boundaries as per T&CP,  In case any open area/plot/extra land or its part
                                            thereof is claimed by the Government/Semi Government/Local/ Town and Country
                                            Planning, Bhopal/ Bhopal Municipal Corporation/ Panchayat or any other Lawful
                                            Authority from the property under question or from the project’s premises, 
                                            the Allottee shall not be entitled to lodge any claim, dispute
                                            or/and demand/refund before any lawful authority against the Promoter 
                                            holding them responsible for any such event and in case if they do so, 
                                            the same shall be void and of no effect. 
                                        </p>  
                                    </div>
                                </div>
                                <div class="row" style="color:red;">
                                    <div class="col-xs-1">
                                        42.
                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            The Allottee is very clear that the whole project construction will be taken 
                                            up in phases and the Allottee is not having any objection to the same and is 
                                            also fully aware that the construction may have some disturbances in the
                                            neighborhood which he is clear about and would not interfere in the progress 
                                            of construction works. Also In case the Promoter get permission to construct 
                                            further new structures/alteration in the existing structures within the areas
                                            under his possession and/or ownership, the Allottee shall not raise any 
                                            objection and/or claim on further construction work to be carried out on 
                                            the same plot/ building in future by using the common excess to such 
                                            locations and is aware that there can be inconvenience due to the same. 
                                        </p>  
                                    </div>
                                </div>
                                <div class="row" style="color:red;">
                                    <div class="col-xs-1">
                                        43.
                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            The Allottee shall have no objection in case the Promoter creates a charge 
                                            on the project land during the course of development of the project for 
                                            raising loan from any bank/financial institution. However, such charge, 
                                            if created, such charge, if created shall be got vacant before handing over
                                            possession of the property to the Allottee. 
                                        </p>  
                                    </div>
                                </div>
                                <div class="row" style="color:red;">
                                    <div class="col-xs-1">
                                        44.
                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            If the Promoter deposits any amount of any nature for achieving the goal to
                                            complete this project in various departments of government, semi government,
                                            local bodies etc, the Promoter shall have right to recover the deposited amount
                                            paid by him and Allottee shall not have any objection for the same.
                                        </p> 
                                    </div>
                                </div>
                                <div class="row" style="color:red;">
                                    <div class="col-xs-1">
                                        45.
                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            All carriage ways of the roads of the project are designed for movement of 
                                            light motor vehicles. Allottee or any resident of the project shall not 
                                            drive/ allow driving any heavy motor vehicle carrying more than five ton 
                                            of load on the carriage ways/ shoulders of the roads of the Project for 
                                            any reason whatsoever. If any part of the carriage ways/ shoulders of the 
                                            roads, water supply lines, sewerage lines, manholes, electric lines, road 
                                            side drains, culverts, plantation or similar kind of development work of 
                                            the Project is damaged because of overload (more than five ton) or mishandling,
                                            the allottee or the resident responsible must get it repaired at his/her own 
                                            costs or shall pay the promoter the cost of damages done. In such eventuality
                                            the Promoter shall not be held responsible. 
                                        </p>   
                                    </div>
                                </div>
                                <div class="row" style="color:red;">
                                    <div class="col-xs-1">
                                        46. 
                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            That in case of cancellation of the booking for any reason whatsoever, 
                                            the cancellation deed will be executed only after going to the office of
                                            the registrar and thereby the Allottee will bear the cancellation cost of 
                                            such deed. Only after that the allotment will be deemed as cancelled.
                                        </p>  
                                    </div>
                                </div>
                                <div class="row" style="color:red;">
                                    <div class="col-xs-1">
                                        47. 
                                    </div>
                                    <div class="col-xs-11">
                                        <label>The Allottee do hereby covenant with the Promoter as follows:-</label> 
                                    </div>
                                </div>
                                <div class="row" style="color:red;">
                                    <div class="col-xs-1">
                                        (i)
                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            To use the property or any part thereof or permit the same to be 
                                            used for the purpose as per agreement only, and shall not change
                                            use of the property. 
                                        </p>
                                    </div>
                                    <div class="col-xs-1">
                                        (ii)
                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            Not to store/dump any belongings in any of the common areas,
                                            park or roads nor shall he/she construct any temporary/permanent structure 
                                            thereon.
                                        </p>
                                    </div>
                                    <div class="col-xs-1">
                                        (iii)
                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            To maintain the said property at the Allottee’s own cost in
                                            good condition from the date of possession of the property and shall not
                                             do anything non-permissible act in the property or change/ alter or make
                                            addition in or to the property itself or any part thereof.
                                        </p>
                                    </div>
                                    <div class="col-xs-1">
                                        (iv)
                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            Not to store in the property any goods which are hazardous, 
                                            combustible or dangerous nature, or storing of which goods is objected by 
                                            the law. 
                                        </p>
                                    </div>
                                    <div class="col-xs-1">
                                        (v)
                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            Not  to  demolish  or  cause  to  be  demolished  the property or any
                                             part  thereof, at any  time or make or cause to be made any addition or 
                                            alteration of whatever nature in or to the common property or any part
                                            thereof and shall keep the portion, sewers, drains, pipes in the property 
                                            and appurtenances thereof in good, tenantable repair and conditions, in case 
                                            of having done so shall be liable to compensate the affected persons for the
                                            damages caused.
                                        </p>
                                    </div>
                                    <div class="col-xs-1">
                                        (vi)
                                    </div>
                                    <div class="col-xs-11">
                                        <p>
                                            Till a conveyance of project related which property is situated 
                                            is executed, the Allottee shall permit the Promoter and their surveyors and 
                                            agents with or without workmen and other, at all reasonable times, to enter
                                            into and upon the said land or any part thereof to view and examine the state
                                            and conditions thereof.
                                        </p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-12">
                                        <label>
                                            IN WITNESS WHEREOF parties hereinabove named have set their 
                                            respective hands and signed this Agreement for Sale at BHOPAL 
                                            in the presence of attesting witness, signing as such on the 
                                            day first above written.
                                        </label>
                                    </div>
                                </div>
                                <label>SIGNED AND DELIVERED BY THE WITHIN NAMED:</label>
                                <p class="text-justify">
                                    <strong>Allottee: (including joint buyers)</strong><br>
                                <div class="row">
                                    <div class="col-xs-4">

                                        (1)   Signature <input type="text"><br>
                                        Name <strong><?php echo $name; ?></strong> .<br>
                                        Address <strong><?php echo $present_addr; ?></strong> .<br>
                                    </div>

                                    <div class="col-xs-4">

                                        (2)   Signature <input type="text" /><br>
                                        Name <input type="text"/><br>
                                        Address <input type="text" />
                                    </div>
                                </div>
                                <br>
                                </p>
                                <h4>SIGNED AND DELIVERED BY THE WITHIN NAMED:</h4>

                                <p class="text-justify">
                                    <strong>Promoter:</strong><br>

                                    (1)   Signature <input type="text" /><br>
                                    Mr. Sunil Kumar Gupta, Managing Director,<br>
                                    Essarjee Constructions Pvt. Ltd. <br> 
                                    Essarjee House, Z – 10, Zone – 1, M. P. Nagar,<br> 
                                    Bhopal (M. P.) 462011<br>
                                    on <input type="text" />      in the presence of:<br>


                                </p>
                                <br>
                                <strong>  WITNESSES:</strong><br>
                                <div class="row">
                                    <div class="col-xs-5">
                                        (1)   Signature <input type="text" /><br>
                                        Name <strong><?php echo $ca_name; ?></strong><br>
                                        Address  <strong><?php echo $co_present_add; ?></strong><br>
                                    </div>
                                    <div class="col-xs-5">
                                        (2)   Signature <input type="text" /><br>
                                        Name <input type="text" /><br>
                                        Address <input type="text" /><br>
                                    </div>

                                </div>
                                <br>
                                <p class="text-justify">

                                    <strong>  SCHEDULE 'A'</strong> -	DESCRIPTION OF THE Residential Plot <strong><strong> <?php echo $unit_no; ?> </strong></strong> ALONG WITH BOUNDARIES IN ALL FOUR DIRECTIONS.   <strong><strong> <?php echo $unit_no; ?> </strong></strong>  along with the boundaries in all four directions. <br>

                                    <strong> SCHEDULE 'B'</strong> -	DEMARCATION LAYOUT OF THE PLOT.    <strong><strong> <?php echo $unit_no; ?> </strong></strong> <br>

                                    <strong>    SCHEDULE 'C' </strong>-	PAYMENT PLAN.

                                    <strong>    SCHEDULE 'D'</strong> -	Schedule is Not applicable for plot sale <strong><strong> <?php echo $unit_no; ?> </strong></strong><br>

                                    <strong>    SCHEDULE 'E' </strong>-	AMENITIES, FACILITIES (WHICH ARE PART OF THE PROJECT)<br>

                                    * Or such other certificate by whatever name called issued by the competent authority.<br>

                                </p><br>
                                <h4 style="text-align: center;"><strong><u>SCHEDULE “A”</u></strong></h4>

                                <p class="text-justify">

                                    That the property known as Residential Plot No. <strong> <?php echo $unit_no; ?> </strong> admeasuring 
                                    <?php echo $length_m; ?> Mtr x <strong><?php echo $width_m; ?> </strong> Mtr. = Plot area <strong> <?php echo $width_m * $length_m; ?></strong>  Sq. Mt. (<strong><?php echo $plot_size_sqft; ?></strong> Sq. Ft.) 
                                    will have parking / porch within the plot boundary as applied / permitted / approved by Municipal Corporation Bhopal
                                    within law no additional space shall be provided by the Promoter for individual car parking, on Khasra No. 73/1/1/1 situated 
                                    at Hataikhera, Tehsil: Huzur, Dist.: Bhopal within the limits of Bhopal Municipal Corporation Ward No. 62. The Residential
                                    Plot No. <strong> <?php echo $unit_no; ?> </strong> boundaries are as under.<br>

                                    <strong>  East By</strong>	:   <input type="text" /><br>	

                                    <strong>  West By </strong>: <input type="text" /><br>	 

                                    <strong>   North By</strong>:  <input type="text" /><br>	

                                    <strong>  South By</strong>:  <input type="text" /><br>
                                </p>
                                <br>


                                <?php
                              
                               
                                $remaining = $cost_payable_to_company;
                                "start <br>" . $booking_amt1 = round($cost_payable_to_company * (10 / 100));
                                //$remaining = $remaining-$booking_amt;


                                $pay1 = round($remaining * (50 / 100)) . "<br>";
                                //$remaining = $remaining - $foundation;

                                $pay2 = round($remaining * (30 / 100)) . "<br>";
                                //$remaining = $remaining - $plinth;

                                $pay3 = round($remaining * (10 / 100)) . "<br>";
                                //$remaining = $remaining - $gffslab;
                                ?>


                                <h4 style="text-align: center;"><strong><u>SCHEDULE “C”</u></strong></h4>

                                <p class="text-justify">


                                    That the total cost of the Residential Plot No.<strong> <?php echo $unit_no; ?> </strong> is Rs. <?php echo $cost_payable_to_company; ?> as shown agreement clause no. 1.2   <strong><?php echo$unit_no; ?></strong> is Rs. <strong><?php //echo$cost_payable_to_company;                                                                                                                                                           ?> </strong>as shown agreement clause no. 1.2<br>

                                    Payment Schedule (Construction Linked) as below-<br>

                                    1.	That the 10% of the agreement cost i.e. Rs. <input type="text" id="amtrs14" name="number" placeholder="Number OR Amount" onmouseover="word.innerHTML = convertNumberToWords14(this.value)" value= "<?php echo round($booking_amt1); ?>" disabled/>   (Rupees <span id='word14' style="height:20px; width:auto; font-weight:bold;"></span> only/- )Rupees only)
                                    shall be deposited as booking amount out of which allottee has paid Rs.<input type="text" id="amtrs3" name="number" placeholder="Number OR Amount" onmouseover="word.innerHTML = convertNumberToWords3(this.value)" value= "<?php echo $booking_amt; ?>" disabled/>   (Rupees <span id='word3' style="height:20px; width:auto; font-weight:bold;"></span> only/- ) vide cheque/DD/NEFT/RTGS No <strong> <?php echo $cheque_no; ?>  dated <?php
                                        $x = explode(' ', $checkdate1);
                                        $checkdate1 = new DateTime($x[0]);
                                        echo $checkdate1->format('d-m-Y');
                                        ?></strong>  bank <strong><?php echo $bank_name; ?></strong>
                                    …………………………………………………………… . within 15 days from the date of Booking <br>

                                    2.	That 50% of the cost i.e. <input type="text" id="amtrs11" name="number" placeholder="Number OR Amount" onmouseover="word.innerHTML = convertNumberToWords11(this.value)" value= "<?php echo round($pay1); ?>" disabled/>   (Rupees <span id='word11' style="height:20px; width:auto; font-weight:bold;"></span> only/- )Rupees only) is payable within 45 days from the date of the Booking. <br>
                                    3.	That 30% of the cost i.e.<input type="text" id="amtrs12" name="number" placeholder="Number OR Amount" onmouseover="word.innerHTML = convertNumberToWords12(this.value)" value= "<?php echo round($pay2); ?>" disabled/>   (Rupees <span id='word12' style="height:20px; width:auto; font-weight:bold;"></span> only/- )Rupees only) is payable within 75 days from the date of the Booking.<br>
                                    4.       That 10% (Balance Full & Final payment) of the cost i.e. Rs. <strong><?php echo $pay3; ?></strong>  <input type="text" id="amtrs13" name="number" placeholder="Number OR Amount" onmouseover="word.innerHTML = convertNumberToWords13(this.value)" value= "<?php echo round($pay3); ?>" disabled/>   (Rupees <span id='word13' style="height:20px; width:auto; font-weight:bold;"></span> only/- )Rupees only) is payable at the time of execution of conveyance deed.  <br>
                                </p><br>
                                <h4 style="text-align: center;"><strong><u>SCHEDULE “D”</u></strong></h4>
                                <h5 style="text-align: center;"><strong><u>
                                            NOT APPLICABLE FOR PLOT SALE</u></strong></h5>


                                <br>
                                <h4 style="text-align: center;"><strong><u>SCHEDULE “E”</u></strong></h4>
                                <h5 style="text-align: center;"><u>
                                        Specifications for Amenities & facilities for <?php echo $project_name; ?>. </u></h5>
                                <p class="text-justify">

                                    <strong> Roads</strong>	:		6” C.C. thick road with 8” sub base complete with hard copra filling up to 1’ and compacted as per layout of the project approved by Town & Country Planning department Bhopal.<br>
                                    <strong>   Open Garden	</strong>:	Green well developed landscaped garden/Open Park with exclusive children play area in the Garden/Open Park.<br>
                                    <strong>Sewer Line	</strong>:	Underground sewer line network is well connected with all the Plots.<br>
                                    <strong>  Sewage Treatment Plant</strong>	:	A Pre-Fabricated STP capacity 50 KLD FAB based is installed for the reuse of Recycled / treated water with dual plumbing network connected to all residential Plot and to serve the gardens and one car washing common point near STP location. <br>
                                    <strong>    External Electrification</strong>	:	Completed as per the norms of the MPMKVVCL Bhopal.<br>
                                    <strong>    Water supply</strong>	:	Sump well of 75 Thousand liters capacity is constructed at project for water supply to all the plots.<br>


                                </p>
                            </div>

                        </div>
                    </form>
                </div>

            </div>    
        </div> 

        <script>
            $(document).on("change keyup blur", "#chDiscount", function () {
                var axs = $('#cBalance').val();
                var disc = $('#chDiscount').val();
                if (disc != '' && axs != '') {
                    $('#result').val((parseInt(axs)) - (parseInt(disc)));
                } else {
                    $('#result').val(parseInt(axs));
                }
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


            $(document).ready(function () {

                var amtrs11 = $('#amtrs11').val();
                $('#word11').text(convertNumberToWords(amtrs11));

                var amtrs12 = $('#amtrs12').val();
                $('#word12').text(convertNumberToWords12(amtrs12));

              

                var amtrs13 = $('#amtrs13').val();
                $('#word13').text(convertNumberToWords13(amtrs13));






                var amtrs = $('#amtrs').val();
                $('#word').text(convertNumberToWords(amtrs));

                var amtrs2 = $('#amtrs2').val();
                $('#word2').text(convertNumberToWords2(amtrs2));

                var amtrs3 = $('#amtrs3').val();
                $('#word3').text(convertNumberToWords3(amtrs3));
                var amtrs14 = $('#amtrs14').val();
                $('#word14').text(convertNumberToWords13(amtrs14));

                $('#toppageheader').html('View Agreement Letter <span class="pull-right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="print" id="btnprint" value="print" class="btn btn-sm btn-default" onClick="print_this_doc();">Print&nbsp;&nbsp;<i class="fa fa-print"></i></button></span>');
                $("a:contains(Agreement)").parent().addClass('active');
            });


            n = new Date();
            y = n.getFullYear();
            m = n.getMonth() + 1;
            d = n.getDate();
            document.getElementById("date").innerHTML = d + "/" + m + "/" + y;



            function convertNumberToWords11(amount) {
                var words = new Array();
                words[0] = '';
                words[1] = 'One';
                words[2] = 'Two';
                words[3] = 'Three';
                words[4] = 'Four';
                words[5] = 'Five';
                words[6] = 'Six';
                words[7] = 'Seven';
                words[8] = 'Eight';
                words[9] = 'Nine';
                words[10] = 'Ten';
                words[11] = 'Eleven';
                words[12] = 'Twelve';
                words[13] = 'Thirteen';
                words[14] = 'Fourteen';
                words[15] = 'Fifteen';
                words[16] = 'Sixteen';
                words[17] = 'Seventeen';
                words[18] = 'Eighteen';
                words[19] = 'Nineteen';
                words[20] = 'Twenty';
                words[30] = 'Thirty';
                words[40] = 'Forty';
                words[50] = 'Fifty';
                words[60] = 'Sixty';
                words[70] = 'Seventy';
                words[80] = 'Eighty';
                words[90] = 'Ninety';
                amount = amount.toString();
                var atemp = amount.split(".");
                var number = atemp[0].split(",").join("");
                var n_length = number.length;
                var words_string = "";
                if (n_length <= 9) {
                    var n_array = new Array(0, 0, 0, 0, 0, 0, 0, 0, 0);
                    var received_n_array = new Array();
                    for (var i = 0; i < n_length; i++) {
                        received_n_array[i] = number.substr(i, 1);
                    }
                    for (var i = 9 - n_length, j = 0; i < 9; i++, j++) {
                        n_array[i] = received_n_array[j];
                    }
                    for (var i = 0, j = 1; i < 9; i++, j++) {
                        if (i == 0 || i == 2 || i == 4 || i == 7) {
                            if (n_array[i] == 1) {
                                n_array[j] = 10 + parseInt(n_array[j]);
                                n_array[i] = 0;
                            }
                        }
                    }
                    value = "";
                    for (var i = 0; i < 9; i++) {
                        if (i == 0 || i == 2 || i == 4 || i == 7) {
                            value = n_array[i] * 10;
                        } else {
                            value = n_array[i];
                        }
                        if (value != 0) {
                            words_string += words[value] + " ";
                        }
                        if ((i == 1 && value != 0) || (i == 0 && value != 0 && n_array[i + 1] == 0)) {
                            words_string += "Crores ";
                        }
                        if ((i == 3 && value != 0) || (i == 2 && value != 0 && n_array[i + 1] == 0)) {
                            words_string += "Lakhs ";
                        }
                        if ((i == 5 && value != 0) || (i == 4 && value != 0 && n_array[i + 1] == 0)) {
                            words_string += "Thousand ";
                        }
                        if (i == 6 && value != 0 && (n_array[i + 1] != 0 && n_array[i + 2] != 0)) {
                            words_string += "Hundred and ";
                        } else if (i == 6 && value != 0) {
                            words_string += "Hundred ";
                        }
                    }
                    words_string = words_string.split("  ").join(" ");
                }
                return words_string;
            }

            function convertNumberToWords12(amount) {
                var words = new Array();
                words[0] = '';
                words[1] = 'One';
                words[2] = 'Two';
                words[3] = 'Three';
                words[4] = 'Four';
                words[5] = 'Five';
                words[6] = 'Six';
                words[7] = 'Seven';
                words[8] = 'Eight';
                words[9] = 'Nine';
                words[10] = 'Ten';
                words[11] = 'Eleven';
                words[12] = 'Twelve';
                words[13] = 'Thirteen';
                words[14] = 'Fourteen';
                words[15] = 'Fifteen';
                words[16] = 'Sixteen';
                words[17] = 'Seventeen';
                words[18] = 'Eighteen';
                words[19] = 'Nineteen';
                words[20] = 'Twenty';
                words[30] = 'Thirty';
                words[40] = 'Forty';
                words[50] = 'Fifty';
                words[60] = 'Sixty';
                words[70] = 'Seventy';
                words[80] = 'Eighty';
                words[90] = 'Ninety';
                amount = amount.toString();
                var atemp = amount.split(".");
                var number = atemp[0].split(",").join("");
                var n_length = number.length;
                var words_string = "";
                if (n_length <= 9) {
                    var n_array = new Array(0, 0, 0, 0, 0, 0, 0, 0, 0);
                    var received_n_array = new Array();
                    for (var i = 0; i < n_length; i++) {
                        received_n_array[i] = number.substr(i, 1);
                    }
                    for (var i = 9 - n_length, j = 0; i < 9; i++, j++) {
                        n_array[i] = received_n_array[j];
                    }
                    for (var i = 0, j = 1; i < 9; i++, j++) {
                        if (i == 0 || i == 2 || i == 4 || i == 7) {
                            if (n_array[i] == 1) {
                                n_array[j] = 10 + parseInt(n_array[j]);
                                n_array[i] = 0;
                            }
                        }
                    }
                    value = "";
                    for (var i = 0; i < 9; i++) {
                        if (i == 0 || i == 2 || i == 4 || i == 7) {
                            value = n_array[i] * 10;
                        } else {
                            value = n_array[i];
                        }
                        if (value != 0) {
                            words_string += words[value] + " ";
                        }
                        if ((i == 1 && value != 0) || (i == 0 && value != 0 && n_array[i + 1] == 0)) {
                            words_string += "Crores ";
                        }
                        if ((i == 3 && value != 0) || (i == 2 && value != 0 && n_array[i + 1] == 0)) {
                            words_string += "Lakhs ";
                        }
                        if ((i == 5 && value != 0) || (i == 4 && value != 0 && n_array[i + 1] == 0)) {
                            words_string += "Thousand ";
                        }
                        if (i == 6 && value != 0 && (n_array[i + 1] != 0 && n_array[i + 2] != 0)) {
                            words_string += "Hundred and ";
                        } else if (i == 6 && value != 0) {
                            words_string += "Hundred ";
                        }
                    }
                    words_string = words_string.split("  ").join(" ");
                }
                return words_string;
            }

            function convertNumberToWords13(amount) {
                var words = new Array();
                words[0] = '';
                words[1] = 'One';
                words[2] = 'Two';
                words[3] = 'Three';
                words[4] = 'Four';
                words[5] = 'Five';
                words[6] = 'Six';
                words[7] = 'Seven';
                words[8] = 'Eight';
                words[9] = 'Nine';
                words[10] = 'Ten';
                words[11] = 'Eleven';
                words[12] = 'Twelve';
                words[13] = 'Thirteen';
                words[14] = 'Fourteen';
                words[15] = 'Fifteen';
                words[16] = 'Sixteen';
                words[17] = 'Seventeen';
                words[18] = 'Eighteen';
                words[19] = 'Nineteen';
                words[20] = 'Twenty';
                words[30] = 'Thirty';
                words[40] = 'Forty';
                words[50] = 'Fifty';
                words[60] = 'Sixty';
                words[70] = 'Seventy';
                words[80] = 'Eighty';
                words[90] = 'Ninety';
                amount = amount.toString();
                var atemp = amount.split(".");
                var number = atemp[0].split(",").join("");
                var n_length = number.length;
                var words_string = "";
                if (n_length <= 9) {
                    var n_array = new Array(0, 0, 0, 0, 0, 0, 0, 0, 0);
                    var received_n_array = new Array();
                    for (var i = 0; i < n_length; i++) {
                        received_n_array[i] = number.substr(i, 1);
                    }
                    for (var i = 9 - n_length, j = 0; i < 9; i++, j++) {
                        n_array[i] = received_n_array[j];
                    }
                    for (var i = 0, j = 1; i < 9; i++, j++) {
                        if (i == 0 || i == 2 || i == 4 || i == 7) {
                            if (n_array[i] == 1) {
                                n_array[j] = 10 + parseInt(n_array[j]);
                                n_array[i] = 0;
                            }
                        }
                    }
                    value = "";
                    for (var i = 0; i < 9; i++) {
                        if (i == 0 || i == 2 || i == 4 || i == 7) {
                            value = n_array[i] * 10;
                        } else {
                            value = n_array[i];
                        }
                        if (value != 0) {
                            words_string += words[value] + " ";
                        }
                        if ((i == 1 && value != 0) || (i == 0 && value != 0 && n_array[i + 1] == 0)) {
                            words_string += "Crores ";
                        }
                        if ((i == 3 && value != 0) || (i == 2 && value != 0 && n_array[i + 1] == 0)) {
                            words_string += "Lakhs ";
                        }
                        if ((i == 5 && value != 0) || (i == 4 && value != 0 && n_array[i + 1] == 0)) {
                            words_string += "Thousand ";
                        }
                        if (i == 6 && value != 0 && (n_array[i + 1] != 0 && n_array[i + 2] != 0)) {
                            words_string += "Hundred and ";
                        } else if (i == 6 && value != 0) {
                            words_string += "Hundred ";
                        }
                    }
                    words_string = words_string.split("  ").join(" ");
                }
                return words_string;
            }

            function convertNumberToWords14(amount) {
                var words = new Array();
                words[0] = '';
                words[1] = 'One';
                words[2] = 'Two';
                words[3] = 'Three';
                words[4] = 'Four';
                words[5] = 'Five';
                words[6] = 'Six';
                words[7] = 'Seven';
                words[8] = 'Eight';
                words[9] = 'Nine';
                words[10] = 'Ten';
                words[11] = 'Eleven';
                words[12] = 'Twelve';
                words[13] = 'Thirteen';
                words[14] = 'Fourteen';
                words[15] = 'Fifteen';
                words[16] = 'Sixteen';
                words[17] = 'Seventeen';
                words[18] = 'Eighteen';
                words[19] = 'Nineteen';
                words[20] = 'Twenty';
                words[30] = 'Thirty';
                words[40] = 'Forty';
                words[50] = 'Fifty';
                words[60] = 'Sixty';
                words[70] = 'Seventy';
                words[80] = 'Eighty';
                words[90] = 'Ninety';
                amount = amount.toString();
                var atemp = amount.split(".");
                var number = atemp[0].split(",").join("");
                var n_length = number.length;
                var words_string = "";
                if (n_length <= 9) {
                    var n_array = new Array(0, 0, 0, 0, 0, 0, 0, 0, 0);
                    var received_n_array = new Array();
                    for (var i = 0; i < n_length; i++) {
                        received_n_array[i] = number.substr(i, 1);
                    }
                    for (var i = 9 - n_length, j = 0; i < 9; i++, j++) {
                        n_array[i] = received_n_array[j];
                    }
                    for (var i = 0, j = 1; i < 9; i++, j++) {
                        if (i == 0 || i == 2 || i == 4 || i == 7) {
                            if (n_array[i] == 1) {
                                n_array[j] = 10 + parseInt(n_array[j]);
                                n_array[i] = 0;
                            }
                        }
                    }
                    value = "";
                    for (var i = 0; i < 9; i++) {
                        if (i == 0 || i == 2 || i == 4 || i == 7) {
                            value = n_array[i] * 10;
                        } else {
                            value = n_array[i];
                        }
                        if (value != 0) {
                            words_string += words[value] + " ";
                        }
                        if ((i == 1 && value != 0) || (i == 0 && value != 0 && n_array[i + 1] == 0)) {
                            words_string += "Crores ";
                        }
                        if ((i == 3 && value != 0) || (i == 2 && value != 0 && n_array[i + 1] == 0)) {
                            words_string += "Lakhs ";
                        }
                        if ((i == 5 && value != 0) || (i == 4 && value != 0 && n_array[i + 1] == 0)) {
                            words_string += "Thousand ";
                        }
                        if (i == 6 && value != 0 && (n_array[i + 1] != 0 && n_array[i + 2] != 0)) {
                            words_string += "Hundred and ";
                        } else if (i == 6 && value != 0) {
                            words_string += "Hundred ";
                        }
                    }
                    words_string = words_string.split("  ").join(" ");
                }
                return words_string;
            }




            function convertNumberToWords(amount) {
                var words = new Array();
                words[0] = '';
                words[1] = 'One';
                words[2] = 'Two';
                words[3] = 'Three';
                words[4] = 'Four';
                words[5] = 'Five';
                words[6] = 'Six';
                words[7] = 'Seven';
                words[8] = 'Eight';
                words[9] = 'Nine';
                words[10] = 'Ten';
                words[11] = 'Eleven';
                words[12] = 'Twelve';
                words[13] = 'Thirteen';
                words[14] = 'Fourteen';
                words[15] = 'Fifteen';
                words[16] = 'Sixteen';
                words[17] = 'Seventeen';
                words[18] = 'Eighteen';
                words[19] = 'Nineteen';
                words[20] = 'Twenty';
                words[30] = 'Thirty';
                words[40] = 'Forty';
                words[50] = 'Fifty';
                words[60] = 'Sixty';
                words[70] = 'Seventy';
                words[80] = 'Eighty';
                words[90] = 'Ninety';
                amount = amount.toString();
                var atemp = amount.split(".");
                var number = atemp[0].split(",").join("");
                var n_length = number.length;
                var words_string = "";
                if (n_length <= 9) {
                    var n_array = new Array(0, 0, 0, 0, 0, 0, 0, 0, 0);
                    var received_n_array = new Array();
                    for (var i = 0; i < n_length; i++) {
                        received_n_array[i] = number.substr(i, 1);
                    }
                    for (var i = 9 - n_length, j = 0; i < 9; i++, j++) {
                        n_array[i] = received_n_array[j];
                    }
                    for (var i = 0, j = 1; i < 9; i++, j++) {
                        if (i == 0 || i == 2 || i == 4 || i == 7) {
                            if (n_array[i] == 1) {
                                n_array[j] = 10 + parseInt(n_array[j]);
                                n_array[i] = 0;
                            }
                        }
                    }
                    value = "";
                    for (var i = 0; i < 9; i++) {
                        if (i == 0 || i == 2 || i == 4 || i == 7) {
                            value = n_array[i] * 10;
                        } else {
                            value = n_array[i];
                        }
                        if (value != 0) {
                            words_string += words[value] + " ";
                        }
                        if ((i == 1 && value != 0) || (i == 0 && value != 0 && n_array[i + 1] == 0)) {
                            words_string += "Crores ";
                        }
                        if ((i == 3 && value != 0) || (i == 2 && value != 0 && n_array[i + 1] == 0)) {
                            words_string += "Lakhs ";
                        }
                        if ((i == 5 && value != 0) || (i == 4 && value != 0 && n_array[i + 1] == 0)) {
                            words_string += "Thousand ";
                        }
                        if (i == 6 && value != 0 && (n_array[i + 1] != 0 && n_array[i + 2] != 0)) {
                            words_string += "Hundred and ";
                        } else if (i == 6 && value != 0) {
                            words_string += "Hundred ";
                        }
                    }
                    words_string = words_string.split("  ").join(" ");
                }
                return words_string;
            }

            function convertNumberToWords2(amount) {
                var words = new Array();
                words[0] = '';
                words[1] = 'One';
                words[2] = 'Two';
                words[3] = 'Three';
                words[4] = 'Four';
                words[5] = 'Five';
                words[6] = 'Six';
                words[7] = 'Seven';
                words[8] = 'Eight';
                words[9] = 'Nine';
                words[10] = 'Ten';
                words[11] = 'Eleven';
                words[12] = 'Twelve';
                words[13] = 'Thirteen';
                words[14] = 'Fourteen';
                words[15] = 'Fifteen';
                words[16] = 'Sixteen';
                words[17] = 'Seventeen';
                words[18] = 'Eighteen';
                words[19] = 'Nineteen';
                words[20] = 'Twenty';
                words[30] = 'Thirty';
                words[40] = 'Forty';
                words[50] = 'Fifty';
                words[60] = 'Sixty';
                words[70] = 'Seventy';
                words[80] = 'Eighty';
                words[90] = 'Ninety';
                amount = amount.toString();
                var atemp = amount.split(".");
                var number = atemp[0].split(",").join("");
                var n_length = number.length;
                var words_string = "";
                if (n_length <= 9) {
                    var n_array = new Array(0, 0, 0, 0, 0, 0, 0, 0, 0);
                    var received_n_array = new Array();
                    for (var i = 0; i < n_length; i++) {
                        received_n_array[i] = number.substr(i, 1);
                    }
                    for (var i = 9 - n_length, j = 0; i < 9; i++, j++) {
                        n_array[i] = received_n_array[j];
                    }
                    for (var i = 0, j = 1; i < 9; i++, j++) {
                        if (i == 0 || i == 2 || i == 4 || i == 7) {
                            if (n_array[i] == 1) {
                                n_array[j] = 10 + parseInt(n_array[j]);
                                n_array[i] = 0;
                            }
                        }
                    }
                    value = "";
                    for (var i = 0; i < 9; i++) {
                        if (i == 0 || i == 2 || i == 4 || i == 7) {
                            value = n_array[i] * 10;
                        } else {
                            value = n_array[i];
                        }
                        if (value != 0) {
                            words_string += words[value] + " ";
                        }
                        if ((i == 1 && value != 0) || (i == 0 && value != 0 && n_array[i + 1] == 0)) {
                            words_string += "Crores ";
                        }
                        if ((i == 3 && value != 0) || (i == 2 && value != 0 && n_array[i + 1] == 0)) {
                            words_string += "Lakhs ";
                        }
                        if ((i == 5 && value != 0) || (i == 4 && value != 0 && n_array[i + 1] == 0)) {
                            words_string += "Thousand ";
                        }
                        if (i == 6 && value != 0 && (n_array[i + 1] != 0 && n_array[i + 2] != 0)) {
                            words_string += "Hundred and ";
                        } else if (i == 6 && value != 0) {
                            words_string += "Hundred ";
                        }
                    }
                    words_string = words_string.split("  ").join(" ");
                }
                return words_string;
            }
            function convertNumberToWords3(amount) {
                var words = new Array();
                words[0] = '';
                words[1] = 'One';
                words[2] = 'Two';
                words[3] = 'Three';
                words[4] = 'Four';
                words[5] = 'Five';
                words[6] = 'Six';
                words[7] = 'Seven';
                words[8] = 'Eight';
                words[9] = 'Nine';
                words[10] = 'Ten';
                words[11] = 'Eleven';
                words[12] = 'Twelve';
                words[13] = 'Thirteen';
                words[14] = 'Fourteen';
                words[15] = 'Fifteen';
                words[16] = 'Sixteen';
                words[17] = 'Seventeen';
                words[18] = 'Eighteen';
                words[19] = 'Nineteen';
                words[20] = 'Twenty';
                words[30] = 'Thirty';
                words[40] = 'Forty';
                words[50] = 'Fifty';
                words[60] = 'Sixty';
                words[70] = 'Seventy';
                words[80] = 'Eighty';
                words[90] = 'Ninety';
                amount = amount.toString();
                var atemp = amount.split(".");
                var number = atemp[0].split(",").join("");
                var n_length = number.length;
                var words_string = "";
                if (n_length <= 9) {
                    var n_array = new Array(0, 0, 0, 0, 0, 0, 0, 0, 0);
                    var received_n_array = new Array();
                    for (var i = 0; i < n_length; i++) {
                        received_n_array[i] = number.substr(i, 1);
                    }
                    for (var i = 9 - n_length, j = 0; i < 9; i++, j++) {
                        n_array[i] = received_n_array[j];
                    }
                    for (var i = 0, j = 1; i < 9; i++, j++) {
                        if (i == 0 || i == 2 || i == 4 || i == 7) {
                            if (n_array[i] == 1) {
                                n_array[j] = 10 + parseInt(n_array[j]);
                                n_array[i] = 0;
                            }
                        }
                    }
                    value = "";
                    for (var i = 0; i < 9; i++) {
                        if (i == 0 || i == 2 || i == 4 || i == 7) {
                            value = n_array[i] * 10;
                        } else {
                            value = n_array[i];
                        }
                        if (value != 0) {
                            words_string += words[value] + " ";
                        }
                        if ((i == 1 && value != 0) || (i == 0 && value != 0 && n_array[i + 1] == 0)) {
                            words_string += "Crores ";
                        }
                        if ((i == 3 && value != 0) || (i == 2 && value != 0 && n_array[i + 1] == 0)) {
                            words_string += "Lakhs ";
                        }
                        if ((i == 5 && value != 0) || (i == 4 && value != 0 && n_array[i + 1] == 0)) {
                            words_string += "Thousand ";
                        }
                        if (i == 6 && value != 0 && (n_array[i + 1] != 0 && n_array[i + 2] != 0)) {
                            words_string += "Hundred and ";
                        } else if (i == 6 && value != 0) {
                            words_string += "Hundred ";
                        }
                    }
                    words_string = words_string.split("  ").join(" ");
                }
                return words_string;
            }
        </script>
    </body>
</html>
