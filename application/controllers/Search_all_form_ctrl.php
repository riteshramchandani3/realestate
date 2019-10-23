<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * Copyright Oga Technologies Pvt Ltd.
 * You cannot copy the contents of this file.
 * Code provided as is and can be used only after prior permission or license.
 */

Class Search_all_form_ctrl extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {

        // $r = $this->view_appl_model->getallapplicantinfo();
        //print_r($r);
        $this->load->view('search_form');
        // log_message('debug', 'sql query fail in... ', false);
    }

    public function getsearchwords() {
        $alphabet = $this->input->post('alphabet');
        $s = $this->Search_all_form_model->findapplicationwords($alphabet);
        foreach ($s as $row) {
            //echo $row->id."|".$row->name.",";
            echo "<a class='btn btn-default btn-sm' style='width:100%;border-top: none;border-radius: 0px;' href=# onclick=setthis(this.text); id=$row->id>$row->name</a>" . "<br>";
        }
    }

    public function application_search() {

        $uid = $this->input->post('sendid');
        $ulist = explode("/", $uid);
        $data['userid'] = $ulist[0];
        $data['projectid'] = $ulist[1];

        $r = $this->Search_all_form_model->application_show_by_id($data);


        $this->load->view('View_application', $r);
    }

    public function allapplicationuserswithproject() {

        
        $urole = $this->session->userdata('role');
        $data['user_id'] = $this->input->post('uname');
        $data['project_id'] = $this->input->post('pid');
        $data['unit_no'] = $this->input->post('unitno');
          
        
        $searchsession["projectid"] = $data['project_id'];
        $searchsession["unitno"] = $data['unit_no'];
        $this->session->set_userdata($searchsession);
        

        $s = $this->Search_all_form_model->searchingallapplicationproject($data);
        if(sizeof($s)>0)
        {
        foreach ($s as $row) {
            echo 'Name :' . nbs(3). $row->name . nbs(7);
            echo 'Project Name :' . nbs(3) . $row->project_name . nbs(2) . $row->block . nbs(7);
            echo 'Unit Number :' . nbs(3) . $row->unit_no .  nbs(7);
            echo 'Type :' . nbs(3) . $row->type .  nbs(7);
            echo "<input id='form_idak' type=hidden value='" . $row->id . '__' . $row->unit_no . "'>";
            
        }
        }
        else
        {
            echo "NOTFOUND";
        }
 

      
    }
    
    public function allapplicationuserswithproject22() {

        
        $urole = $this->session->userdata('role');
        $data['user_id'] = $this->input->post('uname');
        $data['project_id'] = $this->input->post('pid');
        $data['unit_no'] = $this->input->post('unitno');
          
       
        

        $s = $this->Search_all_form_model->searchingallapplicationproject($data);
        if(sizeof($s)>0)
        {
        foreach ($s as $row) {
            echo 'Name :' . nbs(3). $row->name . nbs(7);
            echo 'Project Name :' . nbs(3) . $row->project_name . nbs(2) . $row->block . nbs(7);
            echo 'Unit Number :' . nbs(3) . $row->unit_no .  nbs(7);
            echo 'Type :' . nbs(3) . $row->type .  nbs(7);
            echo "<input id='form_idak' type=hidden value='" . $row->id . '__' . $row->unit_no . "'>";
            
        }
        }
        else
        {
            echo "NOTFOUND";
        }
 

      
    }
    
    public function unsettingsession()
    {
         $this->session->unset_userdata('projectid');
                $this->session->unset_userdata('unitno'); 
              
    }
    public function delete_cookies()
    {
        delete_cookie('projectid','','/'); 
        delete_cookie('unitno','','/'); 
    }

    public function test_application() {

        $this->load->view('test_application');
    }

    public function show_appl() {
        $r = $this->load->view('View_application');
    }

    public function update_appl() {
        $r = $this->load->view('update_application');
    }

    public function decide_copy() {
        // echo "<br><br><br><br>";
        //  print_r($_GET);

        $a = $_GET['form_id'];
        $data = array('ll' => $a);

        $listing = explode("__", $a);
        $document_name = $listing[0];
        $userid = $listing[1];
        $unitno = $listing[2];
        switch ($document_name) {
            case 'office':
                $this->load->view('office_copy', $data);
                break;
            //case 'satisfaction':
            case 'maintenance_agreement':
                $this->load->view('maintenance_agreement', $data);
                break;

            case 'affidavit':
                $this->load->view('affidavit', $data);
                break;
            case 'customer_copy':
                $this->load->view('customer_copy', $data);
                break;
            case 'stamp_value':
                $this->load->view('stamp_value', $data);
                break;
            case 'stamp_value_maintenance_agreement':
                $this->load->view('stamp_value_maintenance_agreement', $data);
                break;
            case 'statements_of_dues_first':
                $this->load->view('statements_of_dues_first', $data);
                break;
            case 'statements_of_dues_second':
                $this->load->view('statements_of_dues_second', $data);
                break;
            case 'undertaking_form':
                $this->load->view('undertaking_form', $data);
                break;
            case 'work_completion_possession':
                $this->load->view('work_completion_possession', $data);
                break;
            case 'satisfaction_form':
                $this->load->view('satisfaction_form', $data);
                break;
            case 'site_inspection_report':
                $this->load->view('site_inspection_report', $data);
                break;
            case 'site_inspection_report_second':
                $this->load->view('site_inspection_report_second', $data);
                break;
            case 'MPEB_Affidavit_sampada':
                $this->load->view('MPEB_Affidavit_sampada', $data);
                break;
            case 'Society_Affidavit_a':
                $this->load->view('Society_Affidavit_a', $data);
                break;
            case 'Society_Affidavit_b':
                $this->load->view('Society_Affidavit_b', $data);
                break;
            case 'NOC_mpeb':
                $this->load->view('NOC_mpeb', $data);
                break;
            case 'Namantaran':
                $this->load->view('Namantaran', $data);
                break;
            case 'Society_Application_Sampada':
                $this->load->view('Society_Application_Sampada', $data);
                break;
            case 'Society_Application_Sampada_B':
                $this->load->view('Society_Application_Sampada_B', $data);
                break;
            case 'MPEB2':
                $this->load->view('MPEB2', $data);
                break;
        }



        // $this->load->view('office_copy');      
    }
    public function site_engineer_name() {

        $r = $this->Search_all_form_model->site_engineer_name();
        foreach ($r as $row) {
            echo $row->value;
            echo ",";
        }
    }

}

?>
        