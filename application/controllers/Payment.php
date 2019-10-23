<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller {

    public function index() {

        $this->load->view('locate_applicant_payment');
    }

    public function getprojectblocks() {
        $projectid = $this->input->post('arg');
        $row = $this->Realestate_modal->getblocksbyproject($projectid);
        echo $row;
    }

    public function getinfo() {
        //$this->load->model('Sheet_Model');
        $arr = $this->Realestate_modal->viewData();
        $this->load->view('Realestate_modal', $arr);
    }

    public function getsearchwords() {
        $alphabet = $this->input->post('alphabet');
        $s = $this->Payment_model->findapplicationwords($alphabet);
        foreach ($s as $row) {
            //echo $row->id."|".$row->name.",";
            echo "<a href=# class='btn btn-default btn-sm' style='width:100%;border-top: none;border-radius: 0px;' onclick=setthis(this.text); id=$row->id>$row->name</a>";
        }
    }

    //<--*************** start  search  applicant and  view applicant  document form *********************-->
    public function all_appl_payment() {
        $data['user_id'] = $this->input->post('uname');
        $data['project_id'] = $this->input->post('pid');
        $data['unit_no'] = $this->input->post('unitno');
        // echo $user_id.$project_id.$unit_no;



        echo '<table class="table table-responsive" style="border:2;">';
        echo '<tr>';

        echo '<th>Name</th>';
        echo '<th>Project</th>';
        echo '<th>Unit No.</th>';
        echo '<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Action</th>';
        echo '</tr>';

        $s = $this->Payment_model->locate_applicant($data);
        foreach ($s as $row) {
            echo '<tr>';

            echo '<td>' . $row->name . '</td>';
            echo '<td>' . $row->project_name . nbs(1) . $row->block . '</td>';
            echo '<td>' . $row->unit_no . '</td>';
            echo '<td>' . '<button type="submit" class="btn btn-info btn-3d" title="View Invoice" onclick="get_invoice_for_applicant(this.value)" name="Sendid" value= ' . $row->id . '>' . ' <strong>View Receipt & Invoices </strong> &nbsp;  &nbsp;<i class="fa fa-eye">' . '</i>' . '</button>'
            . "</td>";
        }


        echo "</table>";
    }

    public function show_applicant_pay() {
        $uid = $this->input->post('Sendid');
        $r = $this->Payment_model->get_appl_pay($uid);


        $out = "";
        foreach ($r as $row) {
            $out = $out . '<tr><td>' . $row['appl_name'] . '</td>' . '<tr><td>' . $row['Date'] . '</td>' . '<td>' . $row['stages'] . '</td>' . '<td>' . $row['other_charges'] . '</td>' . '<td>' . $row['receipt_no'] . '</td>' . '<td>' . $row['cheque_cash'] . '</td>' . '<td>' . $row['amount_paid'] . '</td></tr>';
        }
        // echo $out;
    }

    public function show_appl_pay() {
        $uid = $_GET['uid'];
        $data = array('uid' => $uid);
        $this->load->view('view_applicant_pay', $data);
    }

    public function show_appl_invoice() {
        $uid = $_GET['uid'];
        $data = array('uid' => $uid);
        $this->load->view('view_invoice', $data);
    }

    public function show_appl_info() {
        $uid = $_GET['uid'];
        $data = array('uid' => $uid);
        $this->load->view('invoice', $data);
    }

    //<--********************* end   search and  view applicant  document form ********************-->
    // this function is used for payment input 


    public function paymentInputs() {
        //echo "<br><br><br><br><br><br>";
        //print_r($_POST);
        //echo "<br><hr>this is for payment dtls table<br>";
        $date1 = $this->input->post('Date');


        $data['first_appl_id'] = $this->input->post('first_appl_id');
        $data['appl_name'] = $this->input->post('appl_name');
        $data['unit_no'] = $this->input->post('unit_no');
        $data['project_name'] = $this->input->post('project_name');
        $data['type'] = $this->input->post('type');
        $data['stages'] = $this->input->post('stages');
        $data['receipt_no'] = $this->input->post('receipt_no');
        $data['Date'] = date("Y-m-d", strtotime($date1));
        $data['cheque_cash'] = $this->input->post('cheque_cash');
        $data['payment_mode'] = $this->input->post('payment_mode');
        $data['payment_status'] = $this->input->post('payment_status');
        $data['amount_paid'] = $this->input->post('amount_paid');
        $data['due_amount'] = $this->input->post('due_amount');
        $data['payment_dt'] = date('Y-m-d');
        $data['login_id'] = $this->input->post('login_id');
        $data['bank_dtls'] = $this->input->post('drawn_on_bank');
        $data['numtowords'] = $this->input->post('numtowords');


        $data2['id'] = $this->input->post('invoice_id');
        $data2['status'] = $this->input->post('status');

        $data3['appl_id'] = $this->input->post('first_appl_id');
        $data3['unit_no'] = $this->input->post('unit_no');
        $data3['type'] = $this->input->post('type');
        $data3['stage'] = $this->input->post('stages');
        $data3['amount'] = $this->input->post('due_amount');
        $data3['due_amount'] = $this->input->post('due_amount');
        $data3['adv_amt'] = $this->input->post('adv_amount');

        // print_r($data3);



        $data4['amount_paid'] = $this->input->post('amount_paid');
        $data4['stage'] = $this->input->post('stages');
        $data4['first_appl_id'] = $this->input->post('first_appl_id');
        //$data4['due_amount'] = $this->input->post('due_amount');
        //$data4['amt_wt_tax'] = $this->input->post('amount_paid');//total_amount1');//amount we are giving
        $data4['unit_no'] = $this->input->post('unit_no');
        $data4['type'] = $this->input->post('type');
        $data4['to_be_taken'] = $this->input->post('to_be_taken');
        $data4['block'] = $this->input->post('block');

        $res = $this->Payment_model->update_invoice($data2);


        if ($this->input->post('stages') == 'BOOKING') {
            $result2 = $this->Payment_model->update_demand_tbl($data3);
        } else {

            $result4 = $this->Payment_model->clear_dues($data4);
        }



        $result = $this->Payment_model->getPaymentInput($data);




        if ($result == true || $res == true) {
            $this->session->set_flashdata("success", "Payment done successfully");
            redirect('Payment/show_appl_invoice?uid=' . $data3['appl_id']);
        } else {
            $this->session->set_flashdata("failure", "Payment failed.");
        }
        redirect('Payment/index');
    }

    public function all_payment() {
        $this->load->view('locate_applicant_payment');
    }

    public function get_Payment() {
        $this->load->view('Payment');
    }

    public function get_invoice_input() {
        $this->load->view('invoice');
    }

    public function show_applicant_invoice() {
        $this->load->view('view_applicant_invoice');
    }

    public function showpayment() {
        $this->load->view('showpayment');
    }

    public function finalpayment() {
        $this->load->view('final_payment');
    }

    public function show_applicant_payment() {
        $this->load->view('create_receipt');
    }

    public function create_appl_receipt() {
        $this->load->view('create_receipt');
    }

    public function payment_receipt1() {
        $this->load->view('direct_receipt');
    }

    public function getinvoice_Input() {
        //print_r($_POST);
        $data['appl_id'] = $this->input->post('appl_id');
        $data['login_id'] = $this->input->post('login_id');
        $data['application_no'] = $this->input->post('appl_id');
        $data['stages'] = $this->input->post('stages');
        $data['invoice_no'] = $this->input->post('invoice_no');
        // $data2['receipt_no'] = $this->input->post('invoice_no');
        $data['other_charges'] = $this->input->post('other_charges');
        $data['amount'] = $this->input->post('cost');
        $data['cgst_amount'] = $this->input->post('tax3');
        $data['sgst_amount'] = $this->input->post('tax4');
        $data['total_amount'] = $this->input->post('price');
        $data['total_amount_word'] = $this->input->post('output');
        $data['total_tax_amount'] = $this->input->post('tax8');
        $data['status'] = $this->input->post('status');
        $data['particular'] = $this->input->post('particular');
        $data['numtowords'] = $this->input->post('numtowords');
        $date = $this->input->post('date');
        $due_date = date('Y-m-d', strtotime($date));
        $data['Date'] = $due_date;

        $result = $this->Payment_model->getinvoiceInput($data);


        if ($result == true || $result1 == true) {

            $this->session->set_flashdata("success", "Invoice Create  successfully");
            redirect('Payment/show_appl_invoice?uid=' . $data['appl_id']);
        } else {
            $this->session->set_flashdata("failure", "Invoice Create failed.");
        }
        redirect('Payment/index');
    }

    public function payment_receipt() {
        $this->load->view('direct_receipt');
    }

    public function directpayment_receipt_print() {
        $this->load->view('payment_receiptprint');
    }

    public function allpayment_receipt() {
        $this->load->view('all_paymentreceipt');
    }

    public function show_appl_payment_receipt() {

        $data['user_id'] = $this->input->post('uname');
        $data['project_id'] = $this->input->post('pid');
        $data['unit_no'] = $this->input->post('unitno');
        // echo $user_id.$project_id.$unit_no;



        echo '<table class="table table-responsive" style="border:2;">';
        echo '<tr>';
        echo '<th>id</th>';
        echo '<th>Name</th>';
        echo '<th>Project</th>';
        echo '<th>Unit</th>';
        echo '<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Action</th>';
        echo '</tr>';

        $s = $this->Payment_model->locate_applicant($data);
        foreach ($s as $row) {
            echo '<tr>';
            echo '<td>' . $row->id . '</td>';
            echo '<td>' . $row->name . '</td>';
            echo '<td>' . $row->project_name . nbs(1) . $row->block . '</td>';
            echo '<td>' . $row->unit_no . '</td>';
            echo '<td>' . anchor('Payment/allpayment_receipt?id=' . $row->unit_no, '<i class="fa fa-eye">' . '&nbsp' . '</i>', 'class="btn btn-primary btn-3d btn-sm"') . ' </td>';
        }


        echo "</table>";
    }

    public function test_email() {
        //send mail config start
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'rwamailer@gmail.com', // change it to yours
            'smtp_pass' => 'oga@123456', // change it to yours
            'mailtype' => 'html',
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE
        );
        $message = " <html>
        <head>
            <title>Packet</title>
           <meta name = 'viewport' content = 'width=device-width, initial-scale=1.0'>
    <link href = 'https://fonts.googleapis.com/css?family=Titillium+Web:400,400i,700,700i' rel = 'stylesheet'>
    <link href = 'http://ogatechnologies.com:80/ogareal.cms/resources/css/bootstrap.css' rel = 'stylesheet' type = 'text/css'/>

    <script src='http://ogatechnologies.com:80/ogareal.cms/resources/js/jquery-3.2.1.min.js' type='text/javascript'></script>
    <script src='http://ogatechnologies.com:80/ogareal.cms/resources/js/jquery-ui.js' type='text/javascript'></script>
    <script src = 'http://ogatechnologies.com:80/ogareal.cms/resources/js/bootstrap.min.js' type = 'text/javascript'></script>
    <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet' integrity='sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN' crossorigin='anonymous'>
    <link rel='stylesheet' href='http://ogatechnologies.com:80/ogareal.cms/resources/css/side-menu.css'/>
    <link href='http://ogatechnologies.com:80/ogareal.cms/resources/css/top_menu.css' rel='stylesheet' type='text/css'/>
    <link rel='stylesheet' href='http://ogatechnologies.com:80/ogareal.cms/resources/css/style.css'/>
    <link href='http://ogatechnologies.com:80/ogareal.cms/resources/css/jquery-ui.css' rel='stylesheet' type='text/css'/> 
            </head>
        <body>
        <div class='container'>
         <div class='row'>
                                <img src='http://ogatechnologies.com:80/ogareal.cms/resources/image/ESSARJEE.PNG' alt='Arvo ERP' class='img-responsive' />
                            </div>
            <div class='row'>
                <div class='col-xs-6 col-sm-6 col-md-6 col-lg-6'>
                    <div class='col-xs-6 col-sm-6 col-md-6 col-lg-6'>
                        <lable>
                            Project Name
                        </label>
                     </div>
                     <div class='col-xs-6 col-sm-6 col-md-6 col-lg-6'>
                       <lable>
                            Project Name
                        </label>
                    </div>
                </div>
                <div class='col-xs-6 col-sm-6 col-md-6 col-lg-6'>
                    <div class='col-xs-6 col-sm-6 col-md-6 col-lg-6'>
                        <lable>
                            Project Name
                        </label>
                     </div>
                     <div class='col-xs-6 col-sm-6 col-md-6 col-lg-6'>
                       <lable>
                            Project Name
                        </label>
                    </div>
                </div>
            </div>
        </div>
        </body>
    </html>
    ";
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('rwamailer@gmail.com'); // change it to yours
        $this->email->to('nirbhayc4@gmail.com'); // change it to yours
        $this->email->subject('Regarding user Registration');
        $this->email->message($message);
        if ($this->email->send()) {
            echo 'Email sent.';
        } else {
            show_error($this->email->print_debugger());
        }
    }

    public function payment_reg() {
        $this->load->view('payment_reg_input');
    }

    public function get_payment_reg_input() {

        $data1['appl_name'] = $this->input->post('appl_name');
        $data1['project_name'] = $this->input->post('project_name');
        $data1['block'] = $this->input->post('block_select');
        $data1['type'] = $this->input->post('unittype_select');
        $data1['category'] = $this->input->post('category_select');
        $data1['unit_no'] = $this->input->post('unit_no2');
        $data1['payment_mode'] = $this->input->post('payment_mode');
        $data1['mr_no'] = $this->input->post('mr_no');
        $data1['deposit_date'] = $this->input->post('deposit_date');
        $data1['ch_no'] = $this->input->post('ch_no');
        $data1['date'] = $this->input->post('current_date');
        $data1['bank_details'] = $this->input->post('bank_details');
        $data1['amount'] = $this->input->post('amount');
        $data1['remark'] = $this->input->post('remark');
        $data1['login_user'] = $this->input->post('login_user');

        $result = $this->Payment_model->get_payment_reg_inp($data1);
        if ($result == true) {
            $this->session->set_flashdata("success", "Payment Statement save successfully");
        } else {
            $this->session->set_flashdata("failure", "Payment Statement failed.");
        }
        redirect('Payment/payment_reg');
    }

    //new changes 17-01-2017


    public function getallstages() {
        $typeid = $this->input->post('typeid');

        $s = $this->Payment_model->getall_stage($typeid);
        foreach ($s as $row) {
            echo $row->stage;
            echo ",";
        }
    }

    public function getappl_id() {

        $data['unit_no'] = $this->input->post('unit_no');


        $s = $this->Payment_model->get_appl_id($data);
        foreach ($s as $row) {
            echo $row->customer_id;
            echo ",";
        }
    }

    public function getstageamt() {

        $data['unit_no'] = $this->input->post('unit_no');
        $data['stage'] = $this->input->post('stage');
        $data['unittype'] = $this->input->post('unittype');
        $type = $this->input->post('unittype');
        if ($type == 'Duplex') {
            $s = $this->Payment_model->get_stage_amt($data);
        } elseif ($type == 'Plot') {
            $s = $this->Payment_model->get_stageplot_amt($data);
        } elseif($type == 'Flat') {
               $s = $this->Payment_model->get_stage_amt($data);
               //$s = $this->Payment_model->get_stageflat_amt($data);
            
        }
       echo $s;
    }

    public function finalpaymentinputs() {

        $this->form_validation->set_rules('project_select', 'Project Name', 'required');
     //   $this->form_validation->set_rules('block_select', 'Phase', 'required');
        $this->form_validation->set_rules('unittype_select', 'Unit Type', 'required');
        $this->form_validation->set_rules('category_select', 'Block', 'required');
        $this->form_validation->set_rules('unit_no', 'Unit No.', 'required');
        $this->form_validation->set_rules('stages', 'Stage', 'required');
       $this->form_validation->set_rules('mode_of_payment', 'Mode Of Payment', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('invoice');
        } else {

            $a = $this->Pre_sales_model->get_receipt_no();
            if ($a == true) {
                // foreach ($r as $row) {
                $series_no = $a[0]->series_no;
            }
            $data['receipt_no'] = $series_no;
            $data['unit_no'] = $this->input->post('unit_no');
            $unit_no = $this->input->post('unit_no');
            $data['name'] = $this->input->post('appl_name');
            $data['appl_id'] = $this->input->post('customer_id');
            $data['installment_no'] = $this->input->post('installment_no');
            $data['amount'] = $this->input->post('amount');
            $data['cgst'] = $this->input->post('CGST');
            $data['sgst'] = $this->input->post('SGST');
            $data['service_tax'] = $this->input->post('servicetax3');
            $data['advance'] = $this->input->post('amount_paid');
            $data['arrears'] = $this->input->post('arrears');
            $data['other_charges'] = $this->input->post('other_charges');
            $data['mode_of_payment'] = $this->input->post('mode_of_payment');
            $date1 = $this->input->post('chq_submit_date');
            $data['cheque_date'] = date("Y-m-d", strtotime($date1));
            $data['payment_mode_no'] = $this->input->post('payment_mode_no');
            $data['drawn_on'] = $this->input->post('drawn_on');
            $data['descreption'] = $this->input->post('descreption');
            $data['reg_status'] = 'UNREGISTER';
            $data['stage'] = $this->input->post('stages');
            $stage = $this->input->post('stages');
            // $data['deposite_date'] = $date1;
            $date11 = date('Y-m-d');
            $data['deposite_date'] = date("Y-m-d", strtotime($date11));
            $data['login_id'] = $this->input->post('login_id');
            $advance = $this->input->post('amount_paid');
            $stageamount = $this->input->post('stage_amt');

            // echo "....." . $stageamount;
            if ($stageamount >= $advance) {
                $due_amount = $stageamount - $advance;
                $adv_amt = 0;
            } else {
                $adv_amt = $advance - $stageamount;
                $due_amount = 0;
            }
            //   echo $adv_amt."adv----due".$due_amount;


            $data3['appl_id'] = $this->input->post('customer_id');
            $data3['unit_no'] = $this->input->post('unit_no');
            $data3['type'] = $this->input->post('unittype_select');
            $data3['stage'] = $this->input->post('stages');
            $stage = $this->input->post('stages');
            $data3['amount'] = $due_amount;
            $data3['due_amount'] = $due_amount;
            $data3['adv_amt'] = $adv_amt; // $this->input->post('adv_amount');
            // print_r($data3);

            $data4['amount_paid'] = $this->input->post('amount_paid');
            $data4['stage'] = $this->input->post('stages');
            $data4['first_appl_id'] = $this->input->post('customer_id');
            $data4['due_amount'] = $due_amount;
            $data4['unit_no'] = $this->input->post('unit_no');
            $data4['type'] = $this->input->post('unittype_select');

            $data['stage_actual_amt'] = $this->input->post('stage_amt');
            $data['stage_due_amt'] = $due_amount;
            $data['stage_adv_amt'] = $adv_amt;


            $transresult = $this->Payment_model->demandupdateandreceipt($data3, $data4, $data, $stage);

            if ($transresult == true) {
                $this->session->set_flashdata("success", "Payment done successfully");
                redirect('Payment/show_appl_invoice?uid=' . $data['appl_id']);
            } else {
                $this->session->set_flashdata("failure", "Payment failed.");

                redirect('Payment/finalpayment');
            }
        }
    }

    //new changes 17-01-2017



    public function get_all_date_payment() {

//date code in codignater 
        $date11 = $this->input->post('crr_date');
        $data['deposite_date'] = date("Y-m-d", strtotime($date11));

        echo '<table class="table table-responsive  table-hover " style="border:2px solid #337AB7;">';
        echo '<tr style="background-color:#337AB7;color:#fff;">';
        echo '<th>Name</th>';
        echo '<th>Mode</th>';
        echo '<th>Unit No.</th>';
        echo '<th>Deposite Date</th>';
        echo '<th></th>';
        echo '<th>MR.No.</th>';
        echo '<th>Cheque Date</th>';
        echo '<th>Amount</th>';
        echo '<th>Installment No</th>';
        echo '<th>Bank Details</th>';
        echo '<th>Remark</th>';
        echo '</tr>';

        $s = $this->Payment_model->get_all_date_payment($data);
        foreach ($s as $row) {
            $originalDate = $row->deposite_date;
            $originalDate1 = $row->cheque_date;
            echo '<tr>';
            echo '<td>' . $row->name . '</td>';
            echo '<td>' . $row->mode_of_payment . '</td>';
            echo '<td>' . $row->unit_no . '</td>';
            echo '<td>' .
            $newDate = date("d-m-Y", strtotime($originalDate)) . '</td>';
            echo '<td>' . '<a type="button" title="Edit" class="btn btn-success non-printable" value=' . $row->id . ', onclick="myclicktest(' . $row->id . ')" data-toggle="modal" data-target="#myModal">' . '<i class="fa fa-edit">' . '</i>' . '</a>' . '</td>';
            echo '<td>' . $row->receipt_no . '</td>';
            echo '<td>' . $newDate1 = date("d-m-Y", strtotime($originalDate1)) . '</td>';
            echo '<td>' . $row->advance . '</td>';
            echo '<td>' . $row->installment_no . '</td>';
            echo '<td>' . $row->drawn_on . '</td>';
            echo '<td>' . $row->descreption . '</td>';

            echo '</tr>';
        }
        echo "</table>";
    }

    public function paymentreg() {

        $this->load->view('payment_reg');
    }

    public function paymentreg1() {

        $this->session->set_flashdata("success", "Deposite Date Update  successfully");
        redirect('Payment/paymentreg');
    }

    public function getupdate_deposite_date() {
        $data['id'] = $this->input->post('id');
        $s = $this->Payment_model->getupdatedeposite_date($data);
        foreach ($s as $row) {
            echo $newDate1 = date("d-m-Y", strtotime($row->deposite_date));
            echo ",";
        }
    }

    public function update_despositedate() {
        $data['id'] = trim($this->input->post('id'));

        $date1 = $this->input->post('deposite_date');

        $data['deposite_date'] = date("Y-m-d", strtotime($date1));

        $result = $this->Payment_model->updatedespositedate($data);
        if ($result == true) {
            $this->session->set_flashdata("success", "Deposte Date Update successfully");
            redirect('Payment/paymentreg1');
        } else {
            $this->session->set_flashdata("failure", "Deposte Date Update.");

            redirect('Payment/paymentreg1');
        }
    }

    public function getstage() {
        $unit_no = $this->input->post('unit_no');
        $s = $this->Payment_model->getstage($unit_no);
        foreach ($s as $row) {
            echo $row->stage;
            echo ",";
        }
    }
    
    //===================Ashwin Juwekar code for the service tax
    public function getservicetax()
    {
       
        $data['givendate'] = $this->input->post('givendate');
        
        $r = $this->Payment_model->gettaxes($data);
        
        echo $r;
    }
    
     public function revert_payment() {
        $id = $this->input->get('id');
        $a = $this->Payment_model->get_revertpayment_info($id);
        if ($a == true) {
             $payment_amt = $a[0]->advance;
            $unit_no = $a[0]->unit_no;
        }
        $ab = $this->Payment_model->get_revertdlpaymentid_info($unit_no);
        if ($ab == true) {
            $dl_maxid = $ab[0]->dl_maxid;
            
        }
        $abc = $this->Payment_model->get_revertdlpayment_info($dl_maxid);
        if ($abc == true) {
                      $amount = $abc[0]->amount;
            $due_amount = $abc[0]->due_amount;
          $adv_amt = $abc[0]->adv_amt ;
        }
    
        if ($adv_amt > $payment_amt) {
            $res1 = $adv_amt - $payment_amt;
            
              $result = $this->Payment_model->updaterevertpaymentgreater($dl_maxid,$res1,$id);
          
        } elseif ($adv_amt < $payment_amt) {
            $res = $payment_amt - $adv_amt;
                   $result = $this->Payment_model->updaterevertpaymentless($dl_maxid,$res,$id,$amount,$due_amount);
        } else {
            
              $result = $this->Payment_model->updaterevertpaymentequal($dl_maxid,$id,$payment_amt);

            
        }
        
         if ($result == true) {
                $this->session->set_flashdata("success", "Payment Revert  done successfully");
                 redirect('Payment/finalpayment');
            } else {
                $this->session->set_flashdata("failure", "Payment Revert failed.");

                redirect('Payment/finalpayment');
            }
    }

    

}

?>