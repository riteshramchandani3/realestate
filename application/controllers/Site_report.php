<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class Site_report extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('site_report');
    }

//*******************************Payable stage input query by Nirbhay Start************//
    public function payment_stage_Inp() {

        $data['project_id'] = $this->input->post('project_id');
        $data['block'] = $this->input->post('block');
        $data['stages'] = $this->input->post('stages');
        $data['type'] = $this->input->post('type');
        $data['payable_amt'] = $this->input->post('payable_amt');
        $result = $this->Site_report_model->getPayment_stageInput($data);

        if ($result == true) {
            $success['msg'] = "success";
            $this->load->view('locate_site_report', $success);
            unset($_POST);
        }
    }

//*******************************Payable stage input query by Nirbhay End************//
//***********************Add Project Detail (Get project Blocks) Start***************// 

    public function getprojectblocks() {
        $projectid = $this->input->post('arg');
        $row = $this->Site_report_model->getblocksbyproject($projectid);
        echo $row;
    }

    public function getstage() {
        $typeid = $this->input->post('typeid');
        $s = $this->Site_report_model->get_stage_by_type($typeid);
        foreach ($s as $row) {
            echo $row->stage;
            echo ",";
        }
    }

//***********************Add Project Detail (Get project Blocks) End***************//  
//************************Site Report (Get Unit Number) Start********************//
    public function get_unit_num() {
        $data['project_id'] = $this->input->post('project_id');
        $data['block'] = $this->input->post('block');
        $data['type'] = $this->input->post('type');
        // $data['type'] = $this->input->post('type');
        //$data['unit_no'] = $this->input->post('unit_no');
        $s = $this->Site_report_model->get_unit_num($data);

        //print_r($data);
        //echo $s;
        if ($s == true) {
            $success['msg'] = "done";
            $this->load->view('site_report', $success);
            unset($_POST);
        } else {
            $success['failure'] = "done";
            $this->load->view('site_report', $success);
            unset($_POST);
        }
    }

//************************Site Report (Get Unit Number) Start********************//    
    public function site_report() {
        $this->load->view('site_report');
    }

    public function payment_stages_input() {
        $this->load->view('Payment_stages');
    }

    public function getunitno() {
        $data['project_id'] = $this->input->post('project_id');
        $data['block'] = $this->input->post('block');
        $data['type'] = $this->input->post('type');

        //$data['typename'] = $this->input->post('typename');
        $s = $this->Site_report_model->findunitno($data);

        foreach ($s as $row) {
            echo $row->unit_no;
            echo ",";
        }
    }

    public function getunitno_flat() {
        $data['project_id'] = $this->input->post('project_id');
        $data['block'] = $this->input->post('block');
        $data['type'] = $this->input->post('type');
        //$data['typename'] = $this->input->post('typename');
        $s = $this->Site_report_model->getunitno_flat($data);

        foreach ($s as $row) {
            echo $row->unit_no;
            echo ",";
        }
    }

//*********************************(25-07-2017) END******************************//   


    public function getprojecttype() {

        $data['projectid'] = $this->input->post('plid');
        $data['blockid'] = $this->input->post('blid');
        $r = $this->Site_report_model->findtype($data);
        foreach ($r as $row) {
            echo $row->unit_type;
            echo ",";
        }
    }

    public function demo_is_project_dtl_present() {
        $data['project_id'] = $this->input->post('project_id');
        $data['block'] = $this->input->post('block');
        $data['type'] = $this->input->post('type');
        $data['unit_no'] = $this->input->post('unit_no');
        $data['stage'] = $this->input->post('stage');
        //error_log($data['project_id']);
        $exists = $this->Site_report_model->demo_is_project_dtl_present($data);
        if ($exists == TRUE) {
            echo "TRUE";
        } else {

            echo "FALSE";
        }
    }

    public function get_applicant_id() {
        $data['project_id'] = $this->input->post('project_id');
        $data['block'] = $this->input->post('block');
        $data['type'] = $this->input->post('type');
        $data['unit_no'] = $this->input->post('unit_no');

        //print_r($data);
        $s = $this->Site_report_model->get_applicant_id($data);

        foreach ($s as $row) {
            echo $row->customer_id;
            echo ",";
        }
    }

    public function get_payable_amount() {
        $data['project_id'] = $this->input->post('project_id');
        $data['block'] = $this->input->post('block');
        $data['type'] = $this->input->post('type');
        $data['unit_no'] = $this->input->post('unit_no');
        $data['stage'] = $this->input->post('stage');

        //print_r($data);
        $s = $this->Site_report_model->get_payable_amount($data);

        foreach ($s as $row) {
            echo $row->payable_amt;
            //echo ",";
        }
    }

    public function get_the_following_stages() {
        $data['project_id'] = $this->input->post('project_id');
        $data['block'] = $this->input->post('block');
        $data['type'] = $this->input->post('type');
        $data['category'] = $this->input->post('category');
        $data['unit_no'] = $this->input->post('unit_no');
        //  log_message('DEBUG', "Data in get_the_following_stages(): " . json_encode($data));
        $s = $this->Site_report_model->get_the_following_stages($data);
        if ($s != NULL) {
            foreach ($s as $row) {
                log_message('DEBUG', "222 Data in get_the_following_stages(): " . $row['stage']);
                echo $row['stage'];
                echo ",";
            }
        } else {
            echo '';
        }
    }

    public function get_applicant_info() {
        $data['project_id'] = $this->input->post('project_id');
        $data['block'] = $this->input->post('block');
        $data['type'] = $this->input->post('type');
        $data['unit_no'] = $this->input->post('unit_no');
        $s = $this->Site_report_model->get_applicant_info($data);
        foreach ($s as $row) {
            echo $row->customer_id;
            echo ",";
        }
    }

    //***********************Add Site Report and generate DL Start***************************//   

    public function report_site_and_gen_dl() {//$data) {
        // print_r($_POST);
        //echo "hello";
        //die;
        $data['project_id'] = $this->input->post('project_id');
        $value = $this->input->post('value');
        $attribute = $this->input->post('attribute');
        $data['unit_no'] = $this->input->post('unit_no');
        $data1['unit_no'] = $this->input->post('unit_no');
        $unit_no = $this->input->post('unit_no');
        $data['block'] = $this->input->post('block');
        $block = $this->input->post('block');
        $data['type'] = $this->input->post('type');
        $type = $this->input->post('type');
        $data['category'] = $this->input->post('category');
        $category = $this->input->post('category');
        $data['customer_id'] = $this->input->post('customer_id');
        $customer_id = $this->input->post('customer_id');
        $data['stage'] = $this->input->post('stage');
        $data1['stage'] = $this->input->post('stage');
        $stage = $this->input->post('stage');
        $data['overall_complete_percent'] = $this->input->post('stage_percent');
        $date = $this->input->post('date');
        $due_date = date('Y-m-d', strtotime($date . ' + 15 days'));
        $data['due_date'] = $due_date;
        $currentd1 = date('Y-m-d', strtotime($date));
        $data['curr_date'] = $currentd1;
        // $stageradio = $this->input->post('stageradio');


        $cur_step_no = $this->Site_report_model->get_stage_step_no($data1);

        if ($cur_step_no == true) {

            $current_step_no = $cur_step_no[0]->step_no;
        }
        $last_step = $current_step_no;

        $dl_check = $this->Site_report_model->get_dlstage($data1);

        if ($dl_check == true) {

            $dl_step_no = $dl_check[0]->step_no;
            $dl_amount = $dl_check[0]->amount;
            $dl_previous_adv_amt = $dl_check[0]->adv_amt;  //Ashwin
        } else {
            $dl_step_no = 0;
            $dl_amount = 0;
            $dl_previous_adv_amt = 0;       //Ashwin
        }

        $previous_due = $dl_amount;   //Ashwin
        $previous_adv = $dl_previous_adv_amt; // Ashwin

        $first_step = $dl_step_no + 1;


        $sql = "select sum(payable_amt) as 'tot_stage_amt' from payment_stages_tbl where unit_no='$unit_no' and  step_no BETWEEN $first_step AND $last_step   ";
        //echo $stage;
        //print_r($sql);
        $r = $this->db->query($sql);
        $s = $r->row();
        $final_amt_pay = $s->tot_stage_amt;
        $data['final_amt'] = $final_amt_pay;
        $data['previous_due'] = $previous_due;  //Ashwin
        $data['previous_adv'] = $previous_adv;  //Ashwin

        $final_amt = $dl_amount + $final_amt_pay;
        $bac = $this->Site_report_model->get_stage_amt1($data1);

        $curr_step = $first_step;
        $next_step = $last_step;





        // print_r($bac);
        //new code by nsc




        $a = $this->Site_report_model->get_stage_amt($data1);

        if ($a == true) {
            // foreach ($r as $row) {



            $payable_amt = $a[0]->payable_amt;
        }
        $s = $this->Site_report_model->custom_id1($customer_id);
        if ($s == true) {
            foreach ($r as $row) {

                //  echo "helllllo"; 


                $mr_mrs = $s[0]->mr_mrs;
                $name = $s[0]->name;
                $unit_no = $s[0]->unit_no;
                $ca_son_doughter_wife = $s[0]->ca_son_doughter_wife;
                $son_doughter_wife = $s[0]->son_doughter_wife;
                // $project_name = $s[0]->project_name;
                $block = $s[0]->block;
                $ca_mr_mrs = $s[0]->ca_mr_mrs;
                $ca_name = $s[0]->ca_name;
                $ca_son_doughter_wife_mr_mrs = $s[0]->ca_son_doughter_wife_mr_mrs;
                $ca_swd_of = $s[0]->ca_swd_of;
                $swd_of = $s[0]->swd_of;
                $permanent_addr = $s[0]->permanent_addr;
                $pin_code = $s[0]->pin_code;
                $customer_email = $s[0]->email;
            }




            if (DEPLOYED_ON == 'LOCALHOST') {

                $config = Array(
                    'protocol' => GMAIL_SMTP_PROTOCOL,
                    'smtp_host' => GMAIL_SMTP_HOST,
                    'smtp_port' => GMAIL_SMTP_PORT,
                    'smtp_user' => GMAIL_SMTP_USER,
                    'smtp_pass' => GMAIL_SMTP_PASS,
                    'mailtype' => 'html',
                    'charset' => 'iso-8859-1',
                    'wordwrap' => TRUE
                );
            }
            if (DEPLOYED_ON == 'CPANEL') {
                $config = Array(
                    'smtp_host' => CPANEL_SMTP_HOST,
                    'smtp_port' => CPANEL_SMTP_PORT,
                    'smtp_user' => CPANEL_SMTP_USER,
                    'smtp_pass' => CPANEL_SMTP_PASS,
                    'mailtype' => 'html',
                    'charset' => 'iso-8859-1',
                    'wordwrap' => TRUE
                );
            }



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



              <span>
              <b>Ref:</b> Essarjee/<b>$unit_no/ESSARJEE SAMPADA $block/2018</b><br>
              <span>$attribute </span> <span>$value</span>
              </span>
              <br><br><br>
              <span>To</span>
              <br>
              &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span>$mr_mrs</span><span>$name</span>    <br>
              &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  <span>$son_doughter_wife</span> <span>$swd_of</span>  <br>
              &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  <span>$ca_mr_mrs</span> <span>$ca_name</span>  <br>
              &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  <span>$ca_son_doughter_wife</span> <span>$ca_son_doughter_wife_mr_mrs</span> <span>$ca_swd_of</span>   <br>
              &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; R/o  <span>$permanent_addr</span> <span>$pin_code</span>  <br>
              <br>
              <span><b>Sub: Demand for the Payment Due of the Unit No. $unit_no at ESSARJEE SAMPADA $block</b></span>
              <br><br>
              <b>Dear Sir,</b>
              <br>
              This is with referrence to:
              <br>
              1. The agreement executed between M/s <b>ESSARJEE CONSTRUCTIONS PVT. LTD. & you date $due_date</b>.
              <br>
              2. For Unit No. <b>$unit_no</b> in Project <b>ESSARJEE SAMPADA $block</b>.
              <br>
              3. <b>Stage of Construction: Completion of $stage.</b>
              <br>
              4. <b>Amount Due: $final_amt</b>
              <br>
              5. Please release the due Payment within 15 days from the date of issue of this letter.
              <br><br><br>
              Note: Kindly release the Payment with in stipulated time to avoid interest on delayed payments
              as per Clause No. 22 of Agreement.
              <br><br>
              <b>Thanking You,</b>
              <br><br><br><br><br>
              For <b>Essarjee Constructions Pvt. Ltd.</b>
              <br>


              </body>
              </html>
              ";
            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");
            $this->email->from('rwamailer@gmail.com'); // change it to yours
            $this->email->to($customer_email); // change it to yours
            $this->email->subject('Demand Letter');
            $this->email->message($message);
            if ($this->email->send()) {
                $this->session->set_flashdata("success", "Email sent to the customer");
            } else {
                $this->session->set_flashdata("failure", "Email failed.");
            }
        }




        if ($_FILES['profile-img2']['name'] == '') {
            $data['image_path'] = '';
        } else {
            $dt = date('Ymdhis');
            $fn1 = $_FILES['profile-img2']['name'];
            $extlst = explode(".", $fn1);
            $filename = $extlst[0];
            $ext = $extlst[1];
            $newname = $extlst[0] . $this->input->post('project_id') . $dt . "_" . $this->input->post('custom_id'); // . $this->input->post('unit_no');
            $newname2 = $newname . "." . $ext;
            echo $newname2;

            $sourceapplicant = $_FILES['profile-img2']['tmp_name'];
            $targetimage = "uploads/site_images/" . $newname2;
            move_uploaded_file($sourceapplicant, $targetimage);
            $data['image_path'] = $targetimage;
        }



        $demand_result = $this->Site_report_model->generate_DL_for_Duplex($curr_step, $next_step, $data);
        echo $demand_result;

        if ($demand_result == 1) {
            $this->session->set_flashdata("success", "Site Report Generated  successfully");
        } else {
            $this->session->set_flashdata("failure", "Site Report Generated failed.");
        }
        redirect('Site_report/site_report');
    }

    public function gen_dl() {
        $data['project_id'] = $this->input->post('project_id');
        $data['project_name'] = $this->Site_report_model->get_project_name($data['project_id']);
        $data['value'] = $this->input->post('value');
        $data['attribute'] = $this->input->post('attribute');
        $data['unit_no'] = $this->input->post('unit_no');
        
        $data1['unit_no'] = $this->input->post('unit_no');
        $unit_no = $this->input->post('unit_no');
        $data['block'] = $this->input->post('block');
        $block = $this->input->post('block');
        $data['type'] = $this->input->post('type');
        $type = $this->input->post('type');
        $data['category'] = $this->input->post('category');
        $category = $this->input->post('category');
        $data['customer_id'] = $this->input->post('customer_id');
        $customer_id = $this->input->post('customer_id');
        $data['stage'] = $this->input->post('stage');
        $data1['stage'] = $this->input->post('stage');
        $stage = $this->input->post('stage');
        $data['overall_complete_percent'] = $this->input->post('stage_percent');
        $date = date('Y-m-d');
        $due_date = date('Y-m-d', strtotime($date . ' + 15 days'));
        $data['due_date'] = $due_date;
        $currentd1 = date('Y-m-d', strtotime($date));
        $data['curr_date'] = $currentd1;

        $cur_step_no = $this->Site_report_model->get_stage_step_no($data1);

        if ($cur_step_no == true) {

            $current_step_no = $cur_step_no[0]->step_no;
        }
        $last_step = $current_step_no;

        $dl_check = $this->Site_report_model->get_dlstage($data1);

        if ($dl_check == true) {

            $dl_step_no = $dl_check[0]->step_no;
            $dl_amount = $dl_check[0]->amount;
            $dl_previous_adv_amt = $dl_check[0]->adv_amt;  //Ashwin
        } else {
            $dl_step_no = 0;
            $dl_amount = 0;
            $dl_previous_adv_amt = 0;       //Ashwin
        }

        $previous_due = $dl_amount;   //Ashwin
        $previous_adv = $dl_previous_adv_amt; // Ashwin

        $first_step = $dl_step_no + 1;


        $sql = "select sum(payable_amt) as 'tot_stage_amt' from payment_stages_tbl where unit_no='$unit_no' and  step_no BETWEEN $first_step AND $last_step   ";
        //echo $stage;
        //print_r($sql);
        $r = $this->db->query($sql);
        $s = $r->row();
        $final_amt_pay = $s->tot_stage_amt;
        $data['final_amt'] = $final_amt_pay;
        $data['previous_due'] = $previous_due;  //Ashwin
        $data['previous_adv'] = $previous_adv;  //Ashwin

        $final_amt = $dl_amount + $final_amt_pay;
        $bac = $this->Site_report_model->get_stage_amt1($data1);

        $curr_step = $first_step;
        $next_step = $last_step;





        // print_r($bac);
        //new code by nsc




        $a = $this->Site_report_model->get_stage_amt($data1);

        if ($a == true) {
            // foreach ($r as $row) {



            $payable_amt = $a[0]->payable_amt;
        }
        $s = $this->Site_report_model->custom_id1($customer_id);
        $mailarray = array();
        if ($s == true) {
            foreach ($r as $row) {

                $mailarray['mr_mrs'] = $s[0]->mr_mrs;
                $mailarray['name'] = $s[0]->name;
                $mailarray['unit_no'] = $s[0]->unit_no;
                $mailarray['ca_son_doughter_wife'] = $s[0]->ca_son_doughter_wife;
                $mailarray['son_doughter_wife'] = $s[0]->son_doughter_wife;
                // $project_name = $s[0]->project_name;
                $mailarray['block'] = $s[0]->block;
                $mailarray['ca_mr_mrs'] = $s[0]->ca_mr_mrs;
                $mailarray['ca_name'] = $s[0]->ca_name;
                $mailarray['ca_son_doughter_wife_mr_mrs'] = $s[0]->ca_son_doughter_wife_mr_mrs;
                $mailarray['ca_swd_of'] = $s[0]->ca_swd_of;
                $mailarray['swd_of'] = $s[0]->swd_of;
                $mailarray['permanent_addr'] = $s[0]->permanent_addr;
                $mailarray['pin_code'] = $s[0]->pin_code;
                $mailarray['customer_email'] = $s[0]->email;
                //print_r($mailarray);
            }
        }
        $result = $this->send_email($mailarray, $data);
        $u = $data['unit_no'];
        
        $r = $this->Upload_csv_model->makeitzero($u );
        redirect('Site_report/site_report');
    }

    public function send_email($mailarray, $data) {
        if (DEPLOYED_ON == 'LOCALHOST') {

            $config = Array(
                'protocol' => GMAIL_SMTP_PROTOCOL,
                'smtp_host' => GMAIL_SMTP_HOST,
                'smtp_port' => GMAIL_SMTP_PORT,
                'smtp_user' => GMAIL_SMTP_USER,
                'smtp_pass' => GMAIL_SMTP_PASS,
                'mailtype' => 'html',
                'charset' => 'iso-8859-1',
                'wordwrap' => TRUE
            );
        }
        if (DEPLOYED_ON == 'CPANEL') {
            $config = Array(
                'smtp_host' => CPANEL_SMTP_HOST,
                'smtp_port' => CPANEL_SMTP_PORT,
                'smtp_user' => CPANEL_SMTP_USER,
                'smtp_pass' => CPANEL_SMTP_PASS,
                'mailtype' => 'html',
                'charset' => 'iso-8859-1',
                'wordwrap' => TRUE
            );
        }



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



              <span>
              <b>Ref:" . $data['unit_no'] . "/" . $data['project_name'] . "/" . $data['block'] . "/" . date('Y') . "</b><br>
                  
                  
              <span>" . $data['attribute'] . " </span> <span>" . $data['value'] . "</span>
              </span>
              <br><br><br>
              <span>To</span>
              <br>
              &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span>" . $mailarray['mr_mrs'] . "</span><span>" . $mailarray['name'] . "</span>    <br>
              &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  <span>" . $mailarray['son_doughter_wife'] . "</span> <span>" . $mailarray['swd_of'] . "</span>  <br>
              &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  <span>" . $mailarray['ca_mr_mrs'] . "</span> <span>" . $mailarray['ca_name'] . "</span>  <br>
              &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  <span>" . $mailarray['ca_son_doughter_wife'] . "</span> <span>" . $mailarray['ca_son_doughter_wife_mr_mrs'] . "</span> <span>" . $mailarray['ca_swd_of'] . "</span>   <br>
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; R/o  <span>" . $mailarray['permanent_addr'] . "</span> <span>" . $mailarray['pin_code'] . "</span>  <br>
              <br>
              <span><b>Sub: Demand for the Payment Due of the Unit No. " . $mailarray['unit_no'] . " at " . $data['project_name'] . "/" . $data['block'] . "</b></span>
              <br><br>
              <b>Dear Sir,</b>
              <br>
              This is with referrence to:
              <br>
              1. The agreement executed between M/s <b>" . $data['project_name'] . " PVT. LTD. & you date " . $data['due_date'] . "</b>.
              <br>
              2. For Unit No. <b>" . $data['unit_no'] . "</b> in Project <b>" . $data['project_name'] . " " . $data['block'] . "</b>.
              <br>
              3. <b>Stage of Construction: Completion of " . $data['stage'] . "</b>
              <br>
              4. <b>Amount Due: " . $data['final_amt'] . "</b>
              <br>
              5. Please release the due Payment within 15 days from the date of issue of this letter.
              <br><br><br>
              Note: Kindly release the Payment with in stipulated time to avoid interest on delayed payments
              as per Clause No. 22 of Agreement.
              <br><br>
              <b>Thanking You,</b>
              <br><br><br><br><br>
              For <b>Essarjee Constructions Pvt. Ltd.</b>
              <br>


              </body>
              </html>
              ";
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('rwamailer@gmail.com'); // change it to yours
        $this->email->to($mailarray['customer_email']); // change it to yours
        $this->email->subject('Demand Letter');
        $this->email->message($message);
        if ($this->email->send()) {
            $this->session->set_flashdata("success", "Email sent to the customer");
            return true;
        } else {
            $this->session->set_flashdata("failure", "Email failed.");
            return false;
        }
    }

    //***********************Add Site Report and generate DL End***************************// 

    public function testdate() {
        $this->load->view('date_test');
    }

    public function getcategoryy() {
        $data['project_id'] = $this->input->post('project_id');
        $data['block'] = $this->input->post('block');
        $data['unit_type'] = $this->input->post('type');

        //$data['typename'] = $this->input->post('typename');
        $s = $this->Site_report_model->findcategory($data);
        foreach ($s as $row) {
            echo $row->category;
            echo ",";
        }
    }

    public function custom_id() {
        $data['project_id'] = $this->input->post('project_id');
        $data['block'] = $this->input->post('block');
        $data['type'] = $this->input->post('type');
        $data['unit_no'] = $this->input->post('unit_no');

        $s = $this->Site_report_model->custom_id($data);

        foreach ($s as $row) {
            echo $row->customer_id;
            echo ",";
        }
    }

}
