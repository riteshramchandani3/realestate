<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Interest extends CI_Controller {

    public function index() {
        $this->load->view('locate_applicant_interest');
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
        $s = $this->Interest_model->findapplicationwords($alphabet);
        foreach ($s as $row) {
            echo "<a href=# class='btn btn-default btn-sm' style='width:100%;border-top: none;border-radius: 0px;' onclick=setthis(this.text); id=$row->id>$row->name</a>" . "<br>";
        }
    }

    //<--*************** start  search  applicant and  view applicant  document form *********************-->

    public function allprojectdoc() {

        $data['user_id'] = $this->input->post('uname');
        $data['project_id'] = $this->input->post('pid');
        $data['unit_no'] = $this->input->post('unitno');
        // echo $user_id.$project_id.$unit_no;

        echo '<table class="table table-responsive" style="border:2;">';
        echo '<tr>';

        echo '<th>Name</th>';
        echo '<th>Project</th>';
        echo '<th>Unit No.</th>';
        echo '<th>Action</th>';
        echo '</tr>';

        $s = $this->Interest_model->locate_applicant($data);
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
        $r = $this->Interest_model->get_documents($uid);
        $out = "";
        foreach ($r as $row) {
            
        }
        echo $out;
    }

    public function show_appl_interest() {
        $uid = $_GET['uid'];
        $data = array('uid' => $uid);
        $this->load->view('view_applicant_interest', $data);
    }

    //<--********************* end   search and  view applicant  document form ********************-->

    public function appl_interest() {
        $this->load->view('locate_applicant_interest');
    }

    public function applicant_demand_letter() {
        $this->load->view('demand_letter');
    }

}

?>