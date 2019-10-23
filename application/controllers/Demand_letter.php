<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Demand_letter extends CI_Controller {

    public function index() {
        $this->load->view('locate_applicant_demandletter');
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
        $s = $this->Demand_letter_model->findapplicationwords($alphabet);
        foreach ($s as $row) {
            echo "<a href=# class='btn btn-default btn-sm' style='width:100%;border-top: none;border-radius: 0px;' onclick=setthis(this.text); id=$row->id>$row->name</a>" . "<br>";
        }
    }

    // start  search  applicant and  view applicant  document form

    public function allprojectdoc() {

        $data['user_id'] = $this->input->post('uname');
        $data['project_id'] = $this->input->post('pid');
        $data['unit_no'] = $this->input->post('unitno');
        echo '<table class="table table-responsive" style="border:2;">';
        echo '<tr>';
        echo '<th>Name</th>';
        echo '<th>Project</th>';
        echo '<th>Unit No.</th>';
        echo '<th>Action</th>';
        echo '</tr>';
        $s = $this->Demand_letter_model->locate_applicant($data);
        foreach ($s as $row) {
            echo '<tr>';
            echo '<td>' . $row->name . '</td>';
            echo '<td>' . $row->project_name . nbs(1) . $row->block . '</td>';
            echo '<td>' . $row->unit_no . '</td>';
            echo '<td>' . '<button type="submit" class="btn btn-info btn-3d" onclick="get_docs_for_this_applicant(this.value)" name="Sendid" value= ' . $row->id . '>' . '<i class="fa fa-eye">' . '</i>' . '</button>' . '</td>';
        }
        echo "</table>";
    }

    public function show_applicant_docs() {
        $uid = $this->input->post('Sendid');
        $r = $this->Demand_letter_model->get_documents($uid);
        $out = "";
        foreach ($r as $row) {
            
        }
        echo $out;
    }

    public function show_appl_demand() {
        $uid = $_GET['uid'];
        $data = array('uid' => $uid);
        $this->load->view('view_applicant_stage_dl', $data);
    }

    //<--********************* end   search and  view applicant  document form ********************-->

    public function appl_demand() {
        $this->load->view('locate_applicant_demandletter');
    }

    public function applicant_demand_letter() {
        $this->load->view('demand_letter');
    }

    public function applicant_all_stage_demand_letter() {
        $this->load->view('demand_letter_all_stage');
    }

    public function Dl_email() {
        $unit_no = $this->input->post('unit_no');
        $stage = $this->input->post('stage');
        $customer_id = $this->input->post('appl_id');

        $data1['unit_no'] = $unit_no;
        $data1['stage'] = $stage;
  //      echo $unit_no.$stage.$customer_id;



        $a = $this->Site_report_model->get_stagedl_amt($data1);

        if ($a == true) {
            // foreach ($r as $row) {



            $cumulative_amt = $a[0]->cumulative_amt;
            $due_date = $a[0]->due_date;
        } 
                   $duedate = date("d-m-Y", strtotime($due_date));

        $s = $this->Site_report_model->custom_id1($customer_id);
        if ($s == true) {
           

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


//$customer_email = 'nmalviya575@gmail.com';
       


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




        $message = "<html>
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
              1. The agreement executed between M/s <b>ESSARJEE CONSTRUCTIONS PVT. LTD. & your due date  $duedate</b>.
              <br>
              2. For Unit No. <b>$unit_no</b> in Project <b>ESSARJEE SAMPADA $block</b>.
              <br>
              3. <b>Stage of Construction: Completion of $stage.</b>
              <br>
              4. <b>Amount Due: $cumulative_amt</b>
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
              </html>";

        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('ashwin.j@ogatechnologies.com'); // change it to yours
        $this->email->to($customer_email); // change it to yours
        $this->email->subject('Demand Letter');
        $this->email->message($message);
        if ($this->email->send()) {

            $this->session->set_flashdata("success", "Email sent to the MD ");
        } else {

            //show_error($this->email->print_debugger());
            $this->session->set_flashdata("failure", "Email failed.");
        }
    }

}

?>