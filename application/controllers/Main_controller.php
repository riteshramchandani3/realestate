<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class Main_controller extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {

//check if user already logged in. if yes dont show login page, send them to referrer
        $user_name = $this->session->userdata('usrname');
        if ($user_name != NULL) {
            $this->load->view('dashboard');
        } else {
            $this->load->view('login');
        }
    }

    public function calculation() {
        $this->load->view('calculation');
    }

    public function takeinputs() {
        
        $data['id'] = $this->input->post('id');
        $data['project_id'] = $this->input->post('project_name');
        $data['mr_mrs'] = $this->input->post('fa_mr_mrs');
        $data['name'] = $this->input->post('name');
        $data['fappl_dob'] = $this->input->post('fappl_dob');
        $data['fappl_age'] = $this->input->post('fappl_age');
        $data['son_doughter_wife'] = $this->input->post('son_doughter_wife');
        $data['son_doughter_wife_mr_mrs'] = $this->input->post('son_doughter_wife_mr_mrs');
        $data['swd_of'] = $this->input->post('swd_of');
        $data['present_addr'] = $this->input->post('present_addr');
        $data['permanent_addr'] = $this->input->post('permanent_addr');
        $data['pin_code'] = $this->input->post('pin_code');
        $data['contact_mobile'] = $this->input->post('contact_mobile');
        $data['contact_landline'] = $this->input->post('contact_landline');
        $data['email'] = $this->input->post('email');
        $data['aadhar_no'] = $this->input->post('aadhar_no');
        $data['pan'] = $this->input->post('pan');
        $data['qualification'] = $this->input->post('qualification');
        $data['occupation'] = $this->input->post('fa_occupation');
        $data['company_name'] = $this->input->post('company_name');
        $data['appl_doj'] = $this->input->post('appl_doj');
        $data['appl_desig'] = $this->input->post('appl_desig');
        $data['appl_dept'] = $this->input->post('department');
        $data['appl_monthly_income'] = $this->input->post('monthly_income');
        $data['fa_empl_addr'] = $this->input->post('addr_of_employer');
        $data['pin_code_emp'] = $this->input->post('pin_code_emp');
        $data['earning_members'] = $this->input->post('earning_members');
        $data['no_of_dependent'] = $this->input->post('no_of_dependent');
        $data['solo_coowner'] = $this->input->post('solo_or_coowner');
        $data['loan_reqs'] = $this->input->post('loan_req');
        $data['amt_of_loan'] = $this->input->post('amt_of_loan');
        $data['bank_name'] = $this->input->post('bank_name');
        $data['acc_no'] = $this->input->post('bank_name_ac_no');
        $data['mode_of_payment'] = $this->input->post('payment_mode');
        $data['booking_amt'] = $this->input->post('booking_amt');
        $data['cheque_no'] = $this->input->post('cheque_no');
        $data['cheque_dt'] = $this->input->post('cheque_date');
        $data['parking_type'] = $this->input->post('parking_type');
        $a = $this->input->post('fappl_documents');
        $doclist = '';
        for ($i = 0; $i < sizeof($a); $i++) {
            $doclist = $doclist . $a[$i] . ",";
        }
        $data['fappl_documents'] = $doclist;
        $data['additional_info'] = $this->input->post('additional_info');

        $dt = date('Ymdhis');
        if (!($_FILES['img_path']['name'])) {
            $fn1 = $_FILES['img_path']['name'];
            $extlst = explode(".", $fn1);
            $filesname = $extlst[0];
            $ext = $extlst[1];
            $newname = $extlst[0] . $dt . $this->input->post('project_name'); // . $this->input->post('unit_no');
            $newname2 = $newname . "." . $ext;

            $sourceapplicant = $_FILES['img_path']['tmp_name'];
            $targetapplicant = "uploads/applicants_img/" . $newname2;
            move_uploaded_file($sourceapplicant, $targetapplicant);
        } else {
            $newname2 = '';
        }

        $data['img_path'] = './uploads/applicants_img/' . $newname2;
        $insertid = $this->realestate_model->getinputs($data);

        $data2['first_appl_id'] = $insertid;
        $data2['ca_mr_mrs'] = $this->input->post('ca_mr_mrs');
        $data2['ca_name'] = $this->input->post('ca_name');
        $data2['ca_dob'] = $this->input->post('ca_dob');
        $data2['ca_age'] = $this->input->post('ca_age');
        $data2['co_present_add'] = $this->input->post('co_present_add');
        $data2['co_parma_add'] = $this->input->post('co_parma_add');
        $data2['ca_son_doughter_wife'] = $this->input->post('ca_son_doughter_wife');
        $data2['ca_son_doughter_wife_mr_mrs'] = $this->input->post('ca_son_doughter_wife_mr_mrs');
        $data2['ca_swd_of'] = $this->input->post('ca_swd_of');
        $data2['ca_aadhar_no'] = $this->input->post('ca_aadhar_no');
        $data2['ca_mo_no'] = $this->input->post('co_mo_no');
        $data2['ca_landline_no'] = $this->input->post('co_landline_no');
        $data2['ca_email'] = $this->input->post('co_email');
        $data2['ca_pan'] = $this->input->post('ca_pan');
        $data2['ca_company_name'] = $this->input->post('ca_company_name');
        $data2['ca_doj'] = $this->input->post('ca_doj');
        $data2['ca_desig'] = $this->input->post('ca_desig');
        $data2['ca_department'] = $this->input->post('ca_department');
        $data2['ca_monthly_income'] = $this->input->post('ca_monthly_income');
        $data2['ca_qualification'] = $this->input->post('ca_qualification');
        $data2['ca_occupation'] = $this->input->post('ca_occupation');
        $data2['ca_addr_of_employer'] = $this->input->post('ca_addr_of_employer');
        $data2['ca_addr_of_pincode'] = $this->input->post('ca_addr_of_pincode');
        if (!empty($_FILES['ca_img_path']['name'])) {
            $fn2 = $_FILES['ca_img_path']['name'];
            $extlst2 = explode(".", $fn2);
            $ext2 = $extlst2[1];

            $newname3 = $extlst2[0] . $this->input->post('project_name');
            $newname4 = $newname3 . "." . $ext2;
            $sourcecoapplicant1 = $_FILES['ca_img_path']['tmp_name'];
            $targetcoapplicant1 = 'uploads/applicants_img/' . $newname4;
            move_uploaded_file($sourcecoapplicant1, $targetcoapplicant1);
        } else {
            $newname4 = '';
        }
        $data2['ca_img_path'] = './uploads/applicants_img/' . $newname4;
        $r = $this->realestate_model->getca_inputs($data2);

//this is for user_project relattion table
        $data3['customer_id'] = $insertid;
        $data3['status'] = $this->input->post('status');
        $data3['unit_no'] = $this->input->post('unit_no');
        $e = $this->realestate_model->insertuserprojecttbl($data3);
        $data8['applicant_id'] = $insertid;
        $data8['parking_no'] = $this->input->post('parking_no');
        $data8['unit_no'] = $this->input->post('unit_no');

        $v = $this->realestate_model->insertuserparking($data8);

        $unitno = $this->input->post('unit_no');
        $z = $this->Realestate_model->holdinventory($unitno);


        $msg['success'] = "success";
        $this->load->view('application_search', $msg);
    }

    function do_upload() {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config2['max_size'] = '1000';
        $config2['max_width'] = '1024';
        $config2['max_height'] = '1024';

        $config['overwrite'] = TRUE;
        $config['encrypt_name'] = FALSE;
        $config['remove_spaces'] = TRUE;
        if (!is_dir($config['upload_path']))
            die("THE UPLOAD DIRECTORY DOES NOT EXIST");
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('userfile')) {
            echo 'error';
        } else {

            return array('upload_data' => $this->upload->data());
        }

        $this->data['data'] = $this->do_upload();
    }

    public function updatebyid() {
        $data['project_id'] = $this->input->post('project_name');
        $data['mr_mrs'] = $this->input->post('mr_mrs');
        $data['name'] = $this->input->post('name');
        $data['fappl_dob'] = $this->input->post('fappl_dob');
        $data['fappl_age'] = $this->input->post('fappl_age');
        $data['son_doughter_wife'] = $this->input->post('son_doughter_wife');
        $data['son_doughter_wife_mr_mrs'] = $this->input->post('son_doughter_wife_mr_mrs');
        $data['swd_of'] = $this->input->post('swd_of');
        $data['present_addr'] = $this->input->post('present_addr');
        $data['permanent_addr'] = $this->input->post('permanent_addr');
        $data['pin_code'] = $this->input->post('pin_code');
        $data['contact_mobile'] = $this->input->post('contact_mobile');
        $data['contact_landline'] = $this->input->post('contact_landline');
        $data['email'] = $this->input->post('email');
        $data['aadhar_no'] = $this->input->post('aadhar_no');
        $data['pan'] = $this->input->post('pan');
        $data['qualification'] = $this->input->post('qualification');
        $data['occupation'] = $this->input->post('fa_occupation');
        $data['company_name'] = $this->input->post('company_name');
        $data['appl_doj'] = $this->input->post('appl_doj');
        $data['appl_desig'] = $this->input->post('appl_desig');
        $data['appl_dept'] = $this->input->post('department');
        $data['appl_monthly_income'] = $this->input->post('monthly_income');
        $data['fa_empl_addr'] = $this->input->post('addr_of_employer');
        $data['pin_code_emp'] = $this->input->post('pin_code_emp');
        $data['earning_members'] = $this->input->post('earning_members');
        $data['no_of_dependent'] = $this->input->post('no_of_dependent');
        $data['solo_coowner'] = $this->input->post('solo_or_coowner');
        $data['loan_reqs'] = $this->input->post('loan_req');
        $data['amt_of_loan'] = $this->input->post('amt_of_loan');
        $data['bank_name'] = $this->input->post('bank_name');
        $data['acc_no'] = $this->input->post('bank_name_ac_no');
        $data['mode_of_payment'] = $this->input->post('payment_mode');
        $data['booking_amt'] = $this->input->post('booking_amt');
        $data['cheque_no'] = $this->input->post('cheque_no');
        $data['cheque_dt'] = $this->input->post('cheque_date');
        $data['documents'] = $this->input->post('documents');
        $data['additional_info'] = $this->input->post('additional_info');
        $fn1 = $_FILES['applicant_img']['name'];
        $this->load->helper('string');
        $config['file_name'] = $fn1;
        $config['upload_path'] = './uploads/applicants_img';
        $config['allowed_types'] = 'gif|jpg|png|JPG|jpeg|JPEG|pdf';
        $config2['max_size'] = '100';
        $config2['max_width'] = '75';
        $config2['max_height'] = '50';
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('applicant_img')) {
            $error = array('error' => $this->upload->display_errors());
            echo $this->upload->display_errors();
        }
        $data['img_path'] = './uploads/applicants_img/' . $fn1;
        $insertid = $this->realestate_model->getinputs($data);
//co applicant details
        $data2['first_appl_id'] = $insertid;
        $data2['ca_mr_mrs'] = $this->input->post('ca_mr_mrs');
        $data2['ca_name'] = $this->input->post('ca_name');
        $data2['ca_dob'] = $this->input->post('ca_dob');
        $data2['ca_age'] = $this->input->post('ca_age');
        $data2['co_present_add'] = $this->input->post('co_present_add');
        $data2['co_parma_add'] = $this->input->post('co_parma_add');
        $data2['ca_son_doughter_wife'] = $this->input->post('ca_son_doughter_wife');
        $data2['ca_swd_of'] = $this->input->post('ca_swd_of');
        $data2['ca_aadhar_no'] = $this->input->post('ca_aadhar_no');
        $data2['ca_mo_no'] = $this->input->post('ca_mo_no');
        $data2['ca_landline_no'] = $this->input->post('co_landline_no');
        $data2['ca_email'] = $this->input->post('co_email');
        $data2['ca_pan'] = $this->input->post('ca_pan');
        $data2['ca_company_name'] = $this->input->post('ca_company_name');
        $data2['ca_doj'] = $this->input->post('ca_doj');
        $data2['ca_desig'] = $this->input->post('ca_desig');
        $data2['ca_department'] = $this->input->post('ca_department');
        $data2['ca_qualification'] = $this->input->post('ca_qualification');
        $data2['ca_addr_of_employer'] = $this->input->post('ca_addr_of_employer');
        $data2['ca_addr_of_pincode'] = $this->input->post('ca_addr_of_pincode');
        $fn2 = $_FILES['coapplicant_img']['name'];
        $this->load->helper('string');
        $config2['file_name'] = $fn2;
        $config2['upload_path'] = './uploads/coapplicants_img';
        $config2['allowed_types'] = 'gif|jpg|png|JPG|jpeg|JPEG|pdf';
        $config2['max_size'] = '100';
        $config2['max_width'] = '75';
        $config2['max_height'] = '50';
        $this->load->library('upload', $config2);
        if (!$this->upload->do_upload('coapplicant_img')) {
            $error = array('error' => $this->upload->display_errors());
            echo $this->upload->display_errors();
        }

        $data2['ca_img_path'] = './uploads/coapplicants_img/' . $fn2;
        $r = $this->realestate_model->getca_inputs($data2);
//this is for user_project relattion table
        $data3['applicant_id'] = $insertid;
        $data3['project_id'] = $this->input->post('project_name');
        $data3['block'] = $this->input->post('block');
        $data3['unit_no'] = $this->input->post('unit_no');
        $data3['type'] = $this->input->post('type');
        $data3['carpet_area'] = $this->input->post('carpet_area');
        $data3['ground_carpet_area'] = $this->input->post('ground_carpet_area');
        $data3['floor_carpet_area'] = $this->input->post('floor_carpet_area');
        $data3['parking_option'] = $this->input->post('parking_option');
        $e = $this->realestate_model->insertuserprojecttbl($data3);
        echo 'Data Inserted Successfully';
        $this->load->view('Application');
    }

    public function upload() {
        $data4['user_id'] = $this->input->post('user_id');
        $data4['project_name'] = $this->input->post('project_name');


        $fn3 = $_FILES['document_signed']['name'];
        $fn4 = $_FILES['pancard_path']['name'];
        $fn5 = $_FILES['salary_slip_path']['name'];
        $fn6 = $_FILES['form16_path']['name'];
        $fn7 = $_FILES['itr_path']['name'];
        $fn8 = $_FILES['bank_stmt']['name'];
        $fn9 = $_FILES['addr_proof']['name'];
        $fn10 = $_FILES['loan_detls']['name'];
        $fn11 = $_FILES['cheque_path']['name'];

        $this->load->helper('string');
        $config2['file_name'] = $fn3;
        $config2['file_name'] = $fn4;
        $config2['file_name'] = $fn5;
        $config2['file_name'] = $fn6;
        $config2['file_name'] = $fn7;
        $config2['file_name'] = $fn8;
        $config2['file_name'] = $fn9;
        $config2['file_name'] = $fn10;
        $config2['file_name'] = $fn11;

        $this->load->helper('string');

        $config2['upload_path'] = './signed_document/';
        $config2['allowed_types'] = 'gif|jpg|png|JPG|jpeg|JPEG|pdf';
        $config2['max_size'] = '80000';
        $config2['max_width'] = '1980';
        $config2['max_height'] = '1050';
        $this->load->library('upload', $config2);
        if (!$this->upload->do_upload('document_signed')) {
            $error = array('error' => $this->upload->display_errors());
            echo $this->upload->display_errors();
        }


        if (!$this->upload->do_upload('pancard_path')) {
            $error = array('error' => $this->upload->display_errors());
            echo $this->upload->display_errors();
        }


        if (!$this->upload->do_upload('salary_slip_path')) {
            $error = array('error' => $this->upload->display_errors());
            echo $this->upload->display_errors();
        }


        if (!$this->upload->do_upload('form16_path')) {
            $error = array('error' => $this->upload->display_errors());
            echo $this->upload->display_errors();
        }

        if (!$this->upload->do_upload('itr_path')) {
            $error = array('error' => $this->upload->display_errors());
            echo $this->upload->display_errors();
        }


        if (!$this->upload->do_upload('bank_stmt')) {
            $error = array('error' => $this->upload->display_errors());
            echo $this->upload->display_errors();
        }



        if (!$this->upload->do_upload('addr_proof')) {
            $error = array('error' => $this->upload->display_errors());
            echo $this->upload->display_errors();
        }


        if (!$this->upload->do_upload('loan_detls')) {
            $error = array('error' => $this->upload->display_errors());
            echo $this->upload->display_errors();
        }



        if (!$this->upload->do_upload('cheque_path')) {
            $error = array('error' => $this->upload->display_errors());
            echo $this->upload->display_errors();
        }

        $data4['document_signed'] = './signed_document/' . $fn3;
        $data4['pancard_path'] = './signed_document/' . $fn4;
        $data4['salary_slip_path'] = './signed_document/' . $fn5;
        $data4['form16_path'] = './signed_document/' . $fn6;
        $data4['itr_path'] = './signed_document/' . $fn7;
        $data4['bank_stmt'] = './signed_document/' . $fn8;
        $data4['addr_proof'] = './signed_document/' . $fn9;
        $data4['loan_detls'] = './signed_document/' . $fn10;
        $data4['cheque_path'] = './signed_document/' . $fn11;

        $m = $this->realestate_model->getUploads($data4);
        if ($m == true) {
            $msg['success'] = "success";
            $this->load->view('documentUpload', $msg);
        } else {
            $msg['failure'] = "unsuccess";
            $this->load->view('documentUpload', $msg);
        }
    }

    public function getprojectblocks() {
        $projectid = $this->input->post('arg');
        $row = $this->realestate_model->getblocksbyproject($projectid);
        echo $row;
    }

    public function getprojecttype() {

        $data['projectid'] = $this->input->post('plid');
        $data['blockid'] = $this->input->post('blid');
        $r = $this->realestate_model->findtype($data);
        foreach ($r as $row) {
            echo $row->unit_type;
            echo ",";
        }
    }

    public function getcategory() {

        $data['projectid'] = $this->input->post('plid');
        $data['blockname'] = $this->input->post('blname');
        $data['typename'] = $this->input->post('typename');
        $s = $this->realestate_model->findcategory($data);
        foreach ($s as $row2) {
            echo $row2->category;
            echo ",";
        }
    }

    public function getunits() {
        $data['projectid'] = $this->input->post('plid');
        $data['blockname'] = $this->input->post('blname');
        $data['typename'] = $this->input->post('typename');
        $data['categoryname'] = $this->input->post('categoryname');
        $data['status'] = $this->input->post('status');
        $s = $this->realestate_model->findunits($data);
        foreach ($s as $row2) {
            echo $row2->unit_no;
            echo ",";
        }
    }

    public function searchareas() {
        $data['projectid'] = $this->input->post('plid');
        $data['blockname'] = $this->input->post('blname');
        $data['typename'] = $this->input->post('typename');
        $data['categoryname'] = $this->input->post('categoryname');
        $s = $this->realestate_model->sendareas($data);
//print_r($s);
        echo $s['carpet_area'] . "," . $s['first_floor_carpet_area'] . "," . $s['ground_floor_carpet_area'] . "," . $s['balcony_area'] . "," . $s['common_area'] . "," . $s['wash_area'];
    }

    public function registationformshow() {
        $this->load->view('register');
    }

    public function registationInputs() {

        $data['first_name'] = $this->input->post('first_name');
        $data['last_name'] = $this->input->post('last_name');
        $data['phone'] = $this->input->post('phone');
        $data['email'] = $this->input->post('email');
        $data['role'] = $this->input->post('role');
        $data['username'] = $this->input->post('username');
        $data['password'] = sha1($this->input->post('password'));

        $j = $this->realestate_model->getRegisterInput($data);
        if ($j == TRUE) {
            $msg['success'] = "success";
        }
    }

    public function UpdateregistationInputs() {

        $data['user_id'] = $this->input->post('user_id');
        $data['first_name'] = $this->input->post('first_name');
        $data['last_name'] = $this->input->post('last_name');
        $data['email'] = $this->input->post('email');
        $data['phone'] = $this->input->post('phone');
        $data['username'] = $this->input->post('username');


        $j = $this->realestate_model->update_registration_inputs($data);
        if ($j == TRUE) {
            $this->session->set_flashdata("success", "Profile Updated successfully");
        } else {
            $this->session->set_flashdata("failure", "failed.");
        }
        redirect('Main_controller/load_dashboard');
    }

    public function readlogininputs() {
        $this->load->library('form_validation');
        $lgdata = array(
            "usrname" => $this->input->post('username'),
            "usrpass" => $this->input->post('password')
        );
        $r = $this->realestate_model->isloginvalid($lgdata);
        if ($r == true) {
            foreach ($r as $row) {
                $role = $row->role;
                $fname = $row->first_name;
                $lname = $row->last_name;

                $user_id = $r[0]->user_id;
            }
            $sessiondata = array();
            $sessiondata['usrname'] = $this->input->post('username');
            $sessiondata['role'] = $role;
            $sessiondata['firstname'] = $fname;
            $sessiondata['lastname'] = $lname;
            $sessiondata['user_id'] = $user_id;
            $this->session->set_userdata($sessiondata);
            $this->load->view('pre_dash');
            log_message('info', 'login successful');
            error_log('login successful');
            log_message('error', 'LOGIN   This user has login  Role ====>: ' . $role . '  User id ====>' . $user_id . ' UserName  ======>   ' . $this->session->userdata('usrname'));
        } else {
            $msg['danger'] = "danger";
            $this->load->view('login', $msg);
        }
    }

//readlogininfo ends here
    public function loadresetpasswordpage() {
        $this->load->view('reset_password');
    }

    public function changepassword() {

        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('password1', 'Confirm Password', 'required|matches[password]');
        if ($this->form_validation->run() == FALSE) {
            //echo "Password does not match with each other both the password must be same";
            redirect('Main_controller/loadresetpasswordpage');
        } else {
            $data['password'] = sha1($this->input->post('password'));
            $newpas2 = sha1($this->input->post('password'));
            $uname = $this->input->post('username');
            $email = $this->input->post('email');
            $lgdata = array(
                "username" => $this->input->post('username'),
                "email" => $this->input->post('email'),
                "password" => sha1($this->input->post('password'))
            );
            $passwordchange = array(
                "password" => sha1($this->input->post('password'))
            );


//  $this->load->model('realestate_model');

            $result = $this->realestate_model->changethepassword($lgdata); //data, $uname);


            if ($result == TRUE) {

                echo "<script> alert ('password changed....') </script>";
                $this->load->view('login');
            } else {
                echo "<script> alert ('password not changed....')</script>";
            }
        }
    }

    public function CheckInputs() {
// $this->load->library('form_validation');
        $lgdata = array(
            "usrname" => $this->input->post('username'),
            "email" => $this->input->post('email')
        );

        $result = $this->realestate_model->CheckInfo($lgdata);

        if ($result == true) {
            $this->session->set_userdata($lgdata);
// $this->session->set_userdata($lgdata);
            $this->load->view('reset_password');
        } else {
            $this->load->view('forgot');
        }
    }

//readlogininfo ends here
    public function redirecttologin() {
//check if user already logged in. if yes dont show login page, send them to referrer
        $user_name = $this->session->userdata('usrname');
        if ($user_name != NULL) {
            $this->load->view('dashboard');
        } else {
            $this->load->view('login');
        }
    }

    public function dashboard() {
        $this->load->view('dashboard');
    }

    public function reset_pwd() {
        $this->load->view('forgot');
    }

    public function login_user() {
//check if user already logged in. if yes dont show login page, send them to referrer
        $user_name = $this->session->userdata('usrname');
        if ($user_name != NULL) {
            $this->load->view('dashboard');
        } else {
            $this->load->view('login');
        }
    }

//functions used in dashboard for graphics----START--------------

    function getdata() {
        $data = $this->sheet_model->get_all_info();

//data to json 

        $responce->cols[] = array(
            "id" => "",
            "label" => "Topping",
            "pattern" => "",
            "type" => "string"
        );
        $responce->cols[] = array(
            "id" => "",
            "label" => "Total",
            "pattern" => "",
            "type" => "number"
        );
        $responce->cols[] = array(
            "id" => "",
            "label" => "Total",
            "pattern" => "",
            "type" => "number"
        );
        foreach ($data as $cd) {
            $responce->rows[]["c"] = array(
                array(
                    "v" => "$cd->unit_no",
                    "f" => null
                ),
                array(
                    "v" => (int) $cd->gf_carpet_area_price,
                    "f" => null
                )
                ,
                array(
                    "v" => (int) $cd->ff_carpet_area_price,
                    "f" => null
                )
            );
        }

        echo json_encode($responce);
    }

    function getdata2() {
        $data = $this->sheet_model->get_all_info();

//data to json 

        $responce->cols[] = array(
            "id" => "",
            "label" => "Topping",
            "pattern" => "",
            "type" => "string"
        );
        $responce->cols[] = array(
            "id" => "",
            "label" => "Total",
            "pattern" => "",
            "type" => "number"
        );
        foreach ($data as $cd) {
            $responce->rows[]["c"] = array(
                array(
                    "v" => "$cd->unit_no",
                    "f" => null
                ),
                array(
                    "v" => (int) $cd->gf_carpet_area_price,
                    "f" => null
                )
            );
        }

        echo json_encode($responce);
    }

    function getdata3() {
        $data = $this->sheet_model->get_all_info();

//data to json 

        $responce->cols[] = array(
            "id" => "",
            "label" => "Topping",
            "pattern" => "",
            "type" => "string"
        );
        $responce->cols[] = array(
            "id" => "",
            "label" => "Total",
            "pattern" => "",
            "type" => "number"
        );

        foreach ($data as $cd) {
            $responce->rows[]["c"] = array(
                array(
                    "v" => "$cd->unit_no",
                    "f" => null
                ),
                array(
                    "v" => (int) $cd->gf_carpet_area_price,
                    "f" => null
                )
            );
        }

        echo json_encode($responce);
    }

    function days15_site_report() {
        $data = $this->realestate_model->days15_site_report();
        $responce->cols[] = array(
            "id" => "",
            "label" => "Unit No.",
            "pattern" => "",
            "type" => "string"
        );
        $responce->cols[] = array(
            "id" => "",
            "label" => "Stage",
            "pattern" => "",
            "type" => "number"
        );

        foreach ($data as $cd) {
            $responce->rows[]["c"] = array(
                array(
                    "v" => "$cd->unit_no",
                    "f" => null
                ),
                array(
                    "v" => $cd->stage,
                    "f" => null
                )
            );
        }

        echo json_encode($responce);
    }

//functions used in dashboard for graphics----END--------------
//PARKING FUNCTION RUNNING CODE 
    public function Parking() {
        $data['project_id'] = $this->input->post('project_id');
        $data['block'] = $this->input->post('block');
        $data['type'] = $this->input->post('type');
        $data['parking_type'] = $this->input->post('parking_type');

        $s = $this->realestate_model->get_parking($data);

        foreach ($s as $row2) {
            echo $row2->parking_no;
            echo ",";
        }
    }

//PARKING FUNCTION RUNNING CODE END

    public function takeupsdateinputs() {

        $fappl_documents = $this->input->post('fappl_documents');
        $a = '';
        for ($i = 0; $i < sizeof($fappl_documents); $i++) {
            $a = $a . $fappl_documents[$i] . ',';
        }

// first applicant personal details; 
        $data['id'] = $this->input->post('id');
        $dataid = $this->input->post('id');
//  $data['project_id'] = $this->input->post('project_name');
        $data['mr_mrs'] = $this->input->post('fa_mr_mrs');
        $data['name'] = $this->input->post('name');
        $data['fappl_dob'] = $this->input->post('fappl_dob');
        $data['fappl_age'] = $this->input->post('fappl_age');
        $data['son_doughter_wife'] = $this->input->post('son_doughter_wife');
        $data['son_doughter_wife_mr_mrs'] = $this->input->post('son_doughter_wife_mr_mrs');
        $data['swd_of'] = $this->input->post('swd_of');
        $data['present_addr'] = $this->input->post('present_addr');
        $data['permanent_addr'] = $this->input->post('permanent_addr');
        $data['pin_code'] = $this->input->post('pin_code');
        $data['contact_mobile'] = $this->input->post('contact_mobile');
        $data['contact_landline'] = $this->input->post('contact_landline');
        $data['email'] = $this->input->post('email');
        $data['aadhar_no'] = $this->input->post('aadhar_no');
        $data['pan'] = $this->input->post('pan');
        $data['qualification'] = $this->input->post('qualification');
        $data['occupation'] = $this->input->post('occupation');
        $data['company_name'] = $this->input->post('company_name');
        $data['appl_doj'] = $this->input->post('appl_doj');
        $data['appl_desig'] = $this->input->post('appl_desig');
        $data['appl_dept'] = $this->input->post('appl_dept');
        $data['appl_monthly_income'] = $this->input->post('appl_monthly_income');
        $data['fa_empl_addr'] = $this->input->post('fa_empl_addr');
        $data['pin_code_emp'] = $this->input->post('pin_code_emp');
        $data['earning_members'] = $this->input->post('earning_members');
        $data['no_of_dependent'] = $this->input->post('no_of_dependent');
        $data['dependents_details'] = $this->input->post('dependents_details');
        $data['solo_coowner'] = $this->input->post('solo_coowner');
        $data['loan_reqs'] = $this->input->post('loan_reqs');
        $data['amt_of_loan'] = $this->input->post('amt_of_loan');
        $data['bank_name'] = $this->input->post('bank_name');
        $data['acc_no'] = $this->input->post('acc_no');
        $data['mode_of_payment'] = $this->input->post('mode_of_payment');
        $data['booking_amt'] = $this->input->post('booking_amt');
        $data['cheque_no'] = $this->input->post('cheque_no');
        $data['cheque_dt'] = $this->input->post('cheque_dt');
        $onlydt = date('Ymdhis');
        $micro_date = microtime();
        $date_array = explode(" ", $micro_date);

        $dt = $onlydt . $date_array[1];
        if (!empty($_FILES['img_path']['name'])) {
            $fn1 = $_FILES['img_path']['name'];
            $extlst = explode(".", $fn1);
            $filesname = $extlst[0];
            $ext = $extlst[1];
            $newname = $extlst[0] . $dt . $this->input->post('project_name'); // . $this->input->post('unit_no');
            $newname2 = $newname . "." . $ext;

            $sourceapplicant = $_FILES['img_path']['tmp_name'];
            $targetapplicant = "uploads/applicants_img/" . $newname2;
            move_uploaded_file($sourceapplicant, $targetapplicant);
            $data['img_path'] = './uploads/applicants_img/' . $newname2;
        } else {
            
        }

        $data['fappl_documents'] = $a; //$this->input->post('fappl_documents');

        $data['additional_info'] = $this->input->post('additional_info');
        $data['parking_type'] = $this->input->post('parking_type');

//co applicant details
        $data2['first_appl_id'] = $this->input->post('id');
        $data2['ca_mr_mrs'] = $this->input->post('ca_mr_mrs');
        $data2['ca_name'] = $this->input->post('ca_name');
        $data2['ca_dob'] = $this->input->post('ca_dob');
        $data2['ca_age'] = $this->input->post('ca_age');
        $data2['co_present_add'] = $this->input->post('co_present_add');
        $data2['co_parma_add'] = $this->input->post('co_parma_add');
        $data2['ca_pincode'] = $this->input->post('ca_pincode');
        $data2['ca_son_doughter_wife'] = $this->input->post('ca_son_doughter_wife');
        $data2['ca_son_doughter_wife_mr_mrs'] = $this->input->post('ca_son_doughter_wife_mr_mrs');
        $data2['ca_swd_of'] = $this->input->post('ca_swd_of');
        $data2['ca_aadhar_no'] = $this->input->post('ca_aadhar_no');

        $data2['ca_mo_no'] = $this->input->post('ca_mo_no');
        $data2['ca_landline_no'] = $this->input->post('ca_landline_no');
        $data2['ca_email'] = $this->input->post('ca_email');

        $data2['ca_pan'] = $this->input->post('ca_pan');
        $data2['ca_company_name'] = $this->input->post('ca_company_name');
        $data2['ca_doj'] = $this->input->post('ca_doj');
        $data2['ca_desig'] = $this->input->post('ca_desig');
        $data2['ca_department'] = $this->input->post('ca_department');
        $data2['ca_monthly_income'] = $this->input->post('ca_monthly_income');
        $data2['ca_Qualification'] = $this->input->post('ca_Qualification');
        $data2['ca_occupation'] = $this->input->post('ca_occupation');
        $data2['ca_addr_of_employer'] = $this->input->post('ca_addr_of_employer');
        $data2['ca_addr_of_pincode'] = $this->input->post('ca_addr_of_pincode');
        $data2['ca_bank_name_ac_no'] = $this->input->post('ca_bank_name_ac_no');


        if (!empty($_FILES['ca_img_path']['name'])) {
            $fn2 = $_FILES['ca_img_path']['name'];
            $extlst2 = explode(".", $fn2);
            $ext2 = $extlst2[1];


            $newname3 = $extlst2[0] . $dt . $this->input->post('project_name');
            $newname4 = $newname3 . "." . $ext2;
            $sourcecoapplicant1 = $_FILES['ca_img_path']['tmp_name'];
            $targetcoapplicant1 = 'uploads/applicants_img/' . $newname4;
            move_uploaded_file($sourcecoapplicant1, $targetcoapplicant1);
            $data2['ca_img_path'] = './uploads/applicants_img/' . $newname4;
        } else {
            
        }

        $data3['first_appl_id_1'] = $dataid;
        $data3['ca_mr_mrs_1'] = $this->input->post('ca_mr_mrs_1');
        $data3['ca_name_1'] = $this->input->post('ca_name_1');
        $data3['ca_dob_1'] = $this->input->post('ca_dob_1');
        $data3['ca_age_1'] = $this->input->post('ca_age_1');
        $data3['co_present_add_1'] = $this->input->post('co_present_add_1');
        $data3['co_parma_add_1'] = $this->input->post('co_parma_add_1');
        $data3['ca_pincode_1'] = $this->input->post('ca_pincode_1');
        $data3['ca_son_doughter_wife_1'] = $this->input->post('ca_son_doughter_wife_1');
        $data3['ca_son_doughter_wife_mr_mrs_1'] = $this->input->post('ca_son_doughter_wife_mr_mrs_1');
        $data3['ca_swd_of_1'] = $this->input->post('ca_swd_of_1');
        $data3['ca_aadhar_no_1'] = $this->input->post('ca_aadhar_no_1');


        $data3['ca_mo_no_1'] = $this->input->post('ca_mo_no_1');
        $data3['ca_landline_no_1'] = $this->input->post('ca_landline_no_1');
        $data3['ca_email_1'] = $this->input->post('ca_email_1');



        $data3['ca_pan_1'] = $this->input->post('ca_pan_1');
        $data3['ca_company_name_1'] = $this->input->post('ca_company_name_1');
        $data3['ca_doj_1'] = $this->input->post('ca_doj_1');
        $data3['ca_desig_1'] = $this->input->post('ca_desig_1');
        $data3['ca_department_1'] = $this->input->post('ca_department_1');
        $data3['ca_monthly_income_1'] = $this->input->post('ca_monthly_income_1');
        $data3['ca_Qualification_1'] = $this->input->post('ca_Qualification_1');
        $data3['ca_occupation_1'] = $this->input->post('ca_occupation_1');
        $data3['ca_addr_of_employer_1'] = $this->input->post('ca_addr_of_employer_1');
        $data3['ca_addr_of_pincode_1'] = $this->input->post('ca_addr_of_pincode_1');
        $data3['ca_bank_name_ac_no_1'] = $this->input->post('ca_bank_name_ac_no_1');

        if (!empty($_FILES['ca_img_path_1']['name'])) {
            $fn3 = $_FILES['ca_img_path_1']['name'];
            $extlst3 = explode(".", $fn3);
            $ext3 = $extlst3[1];


            $newname4 = $extlst3[0] . $dt . $this->input->post('project_name');
            $newname5 = $newname4 . "." . $ext3;
            $sourcecoapplicant1 = $_FILES['ca_img_path_1']['tmp_name'];
            $targetcoapplicant1 = 'uploads/applicants_img/' . $newname5;
            move_uploaded_file($sourcecoapplicant1, $targetcoapplicant1);
            $data3['ca_img_path_1'] = './uploads/applicants_img/' . $newname5;
        } else {
            
        }

        $datainv['unit_no'] = $this->input->post('unit_no');
        $datainv['east_by'] = $this->input->post('east_by');
        $datainv['west_by'] = $this->input->post('west_by');
        $datainv['south_by'] = $this->input->post('south_by');
        $datainv['north_by'] = $this->input->post('north_by');


        $dataint['appl_id'] = $this->input->post('id');
        $dataint['rate'] = $this->input->post('rate');



        $result_int = $this->Realestate_model->getupdateintrest($dataint);


        $result1 = $this->Realestate_model->getcoapplupdate($data2);
        $res = $this->Realestate_model->getcoapplupdate1($data3);
        $data3['customer_id'] = $this->input->post('id');
        $data3['status'] = $this->input->post('status');
        $result2 = $this->Realestate_model->getinvupdate($data3);

        $result = $this->Realestate_model->getupdateinp($data);
        $inv = $this->realestate_model->get_update_inv($datainv);

        if ($result == true || $result1 == true || $result2 == true || $inv == true || $res == true || $result_int == true) {
            $this->session->set_flashdata("success", "Data Update Successfully");
        } else {
            $this->session->set_flashdata("success", "You have not made any Changes");
        }
        redirect('View_ctrl/do_application_search');
    }

    public function takeupsdatebankinputs() {

// first applicant personal details; 
        $data3['id'] = $this->input->post('id');
        $data3['bank_name'] = $this->input->post('bank_name');
        $data3['bank_address'] = $this->input->post('bank_address');
        $data3['bank_ifsc'] = $this->input->post('bank_ifsc');
        $data3['loan_amount_sanctioned'] = $this->input->post('loan_amount_sanctioned');
        $data3['loan_file_number'] = $this->input->post('loan_file_number');
        $data3['pc_loan_amount_sanctioned'] = $this->input->post('pc_loan_amount_sanctioned');


        $result = $this->Bank_model->getbankupdate($data3);

//co applicant details

        if ($result == true) {
            $success['msg'] = "success";
            $this->load->view('locate_applicant_bank', $success);
            unset($_POST);
        }
    }

    public function presale_login() {
        $this->load->library('form_validation');
//check if user already logged in. if yes dont show login page, send them to referrer
        $user_name = $this->session->userdata('usrname');

        $lgdata = array(
            "usrname" => $this->input->post('username'),
            "usrpass" => $this->input->post('password')
        );


        $this->session->set_userdata($lgdata);

        $r = $this->realestate_model->isloginvalid($lgdata);

        if ($r == true) {

            $this->session->set_userdata($lgdata);

            $this->load->view('presales/dashboard_presales');
            log_message('info', 'login successful');
            error_log('login successful');
        } else {
            $msg['danger'] = "danger";
            $this->load->view('login', $msg);
        }
    }

    public function presales_login() {
        $this->load->view('presales/presaleslogin');
    }

    public function dashboard_presales() {
        $this->load->view('presales/dashboard_presales');
    }

    public function pre_dash() {
        $this->load->view('pre_dash');
    }

//////////////////////Updated code for the form entry ///////////////////
    public function takeinputs_updated() {





        $data['id'] = $this->input->post('id');
        $data_id = $this->input->post('id');
        $data['login_id'] = $this->input->post('login_user_id');
        $data['project_id'] = $this->input->post('project_name');
        $data['mr_mrs'] = $this->input->post('mr_mrs');
        $data['name'] = $this->input->post('name');
        $data['fappl_dob'] = $this->input->post('fappl_dob');
        $data['fappl_age'] = $this->input->post('fappl_age');
        $data['son_doughter_wife'] = $this->input->post('son_doughter_wife');
        $data['son_doughter_wife_mr_mrs'] = $this->input->post('son_doughter_wife_mr_mrs');
        $data['swd_of'] = $this->input->post('swd_of');
        $data['present_addr'] = $this->input->post('present_addr');
        $data['permanent_addr'] = $this->input->post('permanent_addr');
        $data['pin_code'] = $this->input->post('pin_code');
        $data['contact_mobile'] = $this->input->post('contact_mobile');
        $data['contact_landline'] = $this->input->post('contact_landline');
        $data['email'] = $this->input->post('email');
        $data['aadhar_no'] = $this->input->post('aadhar_no');
        $data['pan'] = $this->input->post('pan');
        $data['qualification'] = $this->input->post('qualification');
        $data['occupation'] = $this->input->post('fa_occupation');
        $data['company_name'] = $this->input->post('company_name');
        $data['appl_doj'] = $this->input->post('appl_doj');
        $data['appl_desig'] = $this->input->post('appl_desig');
        $data['appl_dept'] = $this->input->post('department');
        $data['appl_monthly_income'] = $this->input->post('monthly_income');
        $data['fa_empl_addr'] = $this->input->post('addr_of_employer');
        $data['pin_code_emp'] = $this->input->post('pin_code_emp');
        $data['earning_members'] = $this->input->post('earning_members');
        $data['no_of_dependent'] = $this->input->post('no_of_dependent');
        $data['dependents_details'] = $this->input->post('dependents_details');
        $data['solo_coowner'] = $this->input->post('solo_or_coowner');
        $data['loan_reqs'] = $this->input->post('loan_reqs');
        $data['amt_of_loan'] = $this->input->post('amt_of_loan');
        $data['bank_name'] = $this->input->post('bank_name');
        $data['acc_no'] = $this->input->post('bank_name_ac_no');
        $data['mode_of_payment'] = $this->input->post('payment_mode');
        $data['booking_amt'] = $this->input->post('booking_amt');
        $data['cheque_no'] = $this->input->post('cheque_no');
        $data['cheque_dt'] = $this->input->post('cheque_date');
        $data['parking_type'] = $this->input->post('parking_type');
        $data['date'] = date("Y-m-d");
        $a = $this->input->post('fappl_documents');
        $doclist = '';
        for ($i = 0; $i < sizeof($a); $i++) {
            $doclist = $doclist . $a[$i] . ",";
        }
        $data['fappl_documents'] = $doclist;
        $data['additional_info'] = $this->input->post('additional_info');


        $onlydt = date('Ymdhis');
        $micro_date = microtime();
        $date_array = explode(" ", $micro_date);
        $dt = $onlydt . $date_array[1];
        if (!empty($_FILES['img_path']['name'])) {
            $fn1 = $_FILES['img_path']['name'];
            $extlst = explode(".", $fn1);
            $filesname = $extlst[0];
            $ext = $extlst[1];
            $newname = $extlst[0] . $dt . $this->input->post('project_name'); // . $this->input->post('unit_no');
            $newname2 = $newname . "." . $ext;

            $sourceapplicant = $_FILES['img_path']['tmp_name'];
            $targetapplicant = "uploads/applicants_img/" . $newname2;
            move_uploaded_file($sourceapplicant, $targetapplicant);
        } else {
            $newname2 = '';
        }

        $data['img_path'] = './uploads/applicants_img/' . $newname2;


//co applicant details
        $data2['first_appl_id'] = $this->input->post('id');
        $data2['ca_mr_mrs'] = $this->input->post('ca_mr_mrs');
        $data2['ca_name'] = $this->input->post('ca_name');
        $data2['ca_dob'] = $this->input->post('ca_dob');
        $data2['ca_age'] = $this->input->post('ca_age');
        $data2['co_present_add'] = $this->input->post('co_present_add');
        $data2['co_parma_add'] = $this->input->post('co_parma_add');
        $data2['ca_pincode'] = $this->input->post('ca_pincode');
        $data2['ca_son_doughter_wife'] = $this->input->post('ca_son_doughter_wife');
        $data2['ca_son_doughter_wife_mr_mrs'] = $this->input->post('ca_son_doughter_wife_mr_mrs');
        $data2['ca_swd_of'] = $this->input->post('ca_swd_of');
        $data2['ca_aadhar_no'] = $this->input->post('ca_aadhar_no');
        $data2['ca_mo_no'] = $this->input->post('co_mo_no');
        $data2['ca_landline_no'] = $this->input->post('co_landline_no');
        $data2['ca_email'] = $this->input->post('co_email');
        $data2['ca_pan'] = $this->input->post('ca_pan');
        $data2['ca_company_name'] = $this->input->post('ca_company_name');
        $data2['ca_doj'] = $this->input->post('ca_doj');
        $data2['ca_desig'] = $this->input->post('ca_desig');
        $data2['ca_department'] = $this->input->post('ca_department');
        $data2['ca_monthly_income'] = $this->input->post('ca_monthly_income');
        $data2['ca_qualification'] = $this->input->post('ca_qualification');
        $data2['ca_occupation'] = $this->input->post('ca_occupation');
        $data2['ca_addr_of_employer'] = $this->input->post('ca_addr_of_employer');
        $data2['ca_addr_of_pincode'] = $this->input->post('ca_addr_of_pincode');
//check image null or not
        if (!empty($_FILES['ca_img_path']['name'])) {
            $fn2 = $_FILES['ca_img_path']['name'];
            $extlst2 = explode(".", $fn2);
            $ext2 = $extlst2[1];

            $newname3 = $extlst2[0] . $dt . $this->input->post('project_name');
            $newname4 = $newname3 . "." . $ext2;
            $sourcecoapplicant1 = $_FILES['ca_img_path']['tmp_name'];
            $targetcoapplicant1 = 'uploads/applicants_img/' . $newname4;
            move_uploaded_file($sourcecoapplicant1, $targetcoapplicant1);
        } else {
            $newname4 = '';
        }

        $data2['ca_img_path'] = './uploads/applicants_img/' . $newname4;

        //*************************ca 3************************************************

        $data3['first_appl_id_1'] = $data_id;
        $data3['ca_mr_mrs_1'] = $this->input->post('ca_mr_mrs_1');
        $data3['ca_name_1'] = $this->input->post('ca_name_1');
        $data3['ca_dob_1'] = $this->input->post('ca_dob_1');
        $data3['ca_age_1'] = $this->input->post('ca_age_1');
        $data3['co_present_add_1'] = $this->input->post('co_present_add_1');
        $data3['co_parma_add_1'] = $this->input->post('co_parma_add_1');
        $data3['ca_pincode_1'] = $this->input->post('ca_pincode_1');
        $data3['ca_son_doughter_wife_1'] = $this->input->post('ca_son_doughter_wife_1');
        $data3['ca_son_doughter_wife_mr_mrs_1'] = $this->input->post('ca_son_doughter_wife_mr_mrs_1');
        $data3['ca_swd_of_1'] = $this->input->post('ca_swd_of_1');
        $data3['ca_aadhar_no_1'] = $this->input->post('ca_aadhar_no_1');
        $data3['ca_mo_no_1'] = $this->input->post('co_mo_no_1');
        $data3['ca_landline_no_1'] = $this->input->post('co_landline_no_1');
        $data3['ca_email_1'] = $this->input->post('co_email_1');
        $data3['ca_pan_1'] = $this->input->post('ca_pan_1');
        $data3['ca_company_name_1'] = $this->input->post('ca_company_name_1');
        $data3['ca_doj_1'] = $this->input->post('ca_doj_1');
        $data3['ca_desig_1'] = $this->input->post('ca_desig_1');
        $data3['ca_department_1'] = $this->input->post('ca_department_1');
        $data3['ca_monthly_income_1'] = $this->input->post('ca_monthly_income_1');
        $data3['ca_qualification_1'] = $this->input->post('ca_qualification_1');
        $data3['ca_occupation_1'] = $this->input->post('ca_occupation_1');
        $data3['ca_addr_of_employer_1'] = $this->input->post('ca_addr_of_employer_1');
        $data3['ca_addr_of_pincode_1'] = $this->input->post('ca_addr_of_pincode_1');
        //check image null or not
        if (!empty($_FILES['ca_img_path_1']['name'])) {
            $fn3 = $_FILES['ca_img_path_1']['name'];
            $extlst3 = explode(".", $fn3);
            $ext3 = $extlst3[1];

            $newname4 = $extlst3[0] . $dt . $this->input->post('project_name');
            $newname5 = $newname4 . "." . $ext3;
            $sourcecoapplicant1 = $_FILES['ca_img_path_1']['tmp_name'];
            $targetcoapplicant1 = 'uploads/applicants_img/' . $newname5;
            move_uploaded_file($sourcecoapplicant1, $targetcoapplicant1);
        } else {
            $newname5 = '';
        }

        $data3['ca_img_path_1'] = './uploads/applicants_img/' . $newname5;

        //**************** ca 3*********************************************************




        $data8['applicant_id'] = $this->input->post('id');
        $data8['parking_no'] = $this->input->post('parking_no');
        $data8['unit_no'] = $this->input->post('unit_no');


        $datapay['unit_no'] = $this->input->post('unit_no');
        $datapay['type'] = $this->input->post('type');
        $datapay['category'] = $this->input->post('category');
        $datapay['project_id'] = $this->input->post('project_id');
        $datapay['block'] = $this->input->post('block');
        $datapay['total_cost'] = $this->input->post('total_cost');

        $datainv['unit_no'] = $this->input->post('unit_no');
        $datainv['east_by'] = $this->input->post('east_by');
        $datainv['west_by'] = $this->input->post('west_by');
        $datainv['south_by'] = $this->input->post('south_by');
        $datainv['north_by'] = $this->input->post('north_by');
        $block = $this->input->post('block');




        if ($datapay['type'] == 'Duplex') {
            if ($block == 'Phase-2') {
                $pay = $this->Realestate_model->break_amt($datapay);
            } else {

                $pre_salesid = $this->input->post('pre_salesid');
                $a = $this->Realestate_model->get_landcost($pre_salesid);
                if ($a == true) {
                    $land_cost = $a[0]->land_cost;
                    $construction_cost = $a[0]->construction_cost;
                }
                   $datapay['land_cost'] = $land_cost;
                   $datapay['construction_cost'] = $construction_cost;


                $pay = $this->Realestate_model->break_amt($datapay);
            }
        } else if ($datapay['type'] == 'Plot') {
            $pay = $this->Realestate_model->break_amt($datapay);
        } else if ($datapay['type'] == 'Flat') {
            $pay = $this->Realestate_model->break_amt($datapay);
        } else {
            
        }

        $dataint['appl_id'] = $this->input->post('id');
        $dataint['rate'] = $this->input->post('rate');

        $a = $this->realestate_model->process_application_form($data3, $datainv, $dataint, $data2, $data8, $data);


        if ($a['success'] == TRUE) {
            $this->session->set_flashdata("success", "Data Update Successfully");
        } else {
            $this->session->set_flashdata("failure", " Data Save Failed.");
        }


        redirect('View_ctrl/do_application_search');
    }

/////////////////////////////////////////////////////////////////////////

    public function viewlisting() {
        $this->load->view('temp_page');
    }

    public function loadunauthorized() {

        $this->load->view('unauthorized');
    }

    public function profile() {
        $this->load->view('profile');
    }

    public function update_password() {
        $this->load->view('update_password');
    }

    public function update_profile() {
        $this->load->view('update_profile');
    }

    public function load_dashboard() {
        $this->load->view('dashboard');
    }

    public function registation_inputs() {


        $data['user_id'] = $this->input->post('user_id');
        $user_id = $this->input->post('user_id');
        $data['password'] = sha1($this->input->post('newpassword'));
        $db_password = sha1($this->input->post('password'));
        $sql = "select * from user_registration_tbl where password='$db_password' AND user_id='$user_id' ";
        $this->db->query($sql);

        if ($this->db->affected_rows() > 0) {

            //  print_r($sql);
            $this->session->set_flashdata("failure", "exist!");
            $s = $this->realestate_model->get_register_input($data);
            if ($s == true) {
                $this->session->set_flashdata("success", "updated Successfully");
                redirect('Main_controller/load_dashboard');
            } else {
                $this->session->set_flashdata("failure", "updation Failed!");
            }
        }
    }

    public function saleswelcome() {
        $this->load->view('sales_welcome');
    }

    public function del_coapp_image() {
        //$userid = $this->input->get('id');
        $id = $this->input->get('id');
        $explode_data = explode('?', $id);
        $userid = $explode_data[0];
        $pid = $explode_data[1];
        $unit_no = $explode_data[2];

        $s = $this->Realestate_model->del_coapp_image($userid);
        if ($s == true) {
            $success['success'] = "done";
            redirect('View_ctrl/update_appl?id=' . $userid . '?' . $pid . '?' . $unit_no . '');
        } else {
            $success['failure'] = "done";
        }
    }

    public function del_coapp1_image() {

        //$userid = $this->input->get('id');
        $id = $this->input->get('id');
        $explode_data = explode('?', $id);
        $userid = $explode_data[0];
        $pid = $explode_data[1];
        $unit_no = $explode_data[2];
        //echo $userid;

        $s = $this->Realestate_model->del_coapp1_image($userid);
        if ($s == true) {
            $success['success'] = "done";
            redirect('View_ctrl/update_appl?id=' . $userid . '?' . $pid . '?' . $unit_no . '');
        } else {
            $success['failure'] = "done";
        }
    }

    public function del_coapp2_image() {

        //$userid = $this->input->get('id');
        $id = $this->input->get('id');
        $explode_data = explode('?', $id);
        $userid = $explode_data[0];
        $pid = $explode_data[1];
        $unit_no = $explode_data[2];
        //echo $userid;

        $s = $this->Realestate_model->del_coapp2_image($userid);
        if ($s == true) {
            $success['success'] = "done";
            redirect('View_ctrl/update_appl?id=' . $userid . '?' . $pid . '?' . $unit_no . '');
        } else {
            $success['failure'] = "done";
        }
    }

}

?>