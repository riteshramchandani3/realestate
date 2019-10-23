<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * Copyright Oga Technologies Pvt Ltd.
 * You cannot copy the contents of this file.
 * Code provided as is and can be used only after prior permission or license.
 */

Class View_ctrl extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {

        //print_r($r);
        $this->load->view('View_application');
        // log_message('debug', 'sql query fail in... ', false);
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

    public function downloaddoc() {
        //$doc = $this->input->post($doc);
        echo "helo";
    }

    public function getsearchwords() {
        $alphabet = $this->input->post('alphabet');
        $s = $this->View_applicant_info->findapplicationwords($alphabet);
        foreach ($s as $row) {
            //echo $row->id."|".$row->name.",";
            echo "<a class='btn btn-default btn-sm' style='width:100%;border-top: none;border-radius: 0px;' href=# onclick=setthis(this.text); id=$row->id>$row->name</a>" . "<br>";
        }
    }

    public function allapplicationuserswithproject() {

        $urole = $this->session->userdata('role');
        $data['user_id'] = $this->input->post('uname');
        $data['project_id'] = $this->input->post('pid');
        $data['unit_no'] = $this->input->post('unitno');

        echo '<table class="table table-responsive" style="border:2;">';
        echo '<tr>';
        echo '<th>Name</th>';
        echo '<th>Project</th>';
        echo '<th>Unit No.</th>';
        echo '<th>Status</th>';
        echo '<th>Action</th>';
        echo '</tr>';

        $s = $this->View_applicant_info->searchingallapplicationproject($data);


        foreach ($s as $row) {
            echo '<tr>';
            echo '<td>' . $row->name . '</td>';

            echo '<td>' . $row->project_name . nbs(1) . $row->block . '</td>';
            echo '<td>' . $row->unit_no . '</td>';
            echo '<td>' . $row->status . '</td>';

            if ($row->present_addr == '') {

                echo '<td>' . anchor('View_ctrl/test_application?id=' . $row->id . '?' . $row->pid . '?' . $row->unit_no . '?' . $row->pre_salesid, '<i class="fa fa-plus">' . '&nbsp' . '</i>', 'class="btn btn-success btn-3d btn-sm" title="Update"') . '&nbsp' . '&nbsp' . '&nbsp' . '&nbsp' . '</td>';
            } else {

                echo '<td>' . anchor('View_ctrl/show_appl?id=' . $row->id . '?' . $row->pid . '?' . $row->unit_no, '<i class="fa fa-eye">' . '</i>', 'class="btn btn-primary btn-3d btn-sm"title="Preview & Print"') . '&nbsp' . '&nbsp' . '&nbsp' . '&nbsp';
                if ($urole == 'MD' || $urole == 'ADMIN') {
                    echo anchor('View_ctrl/update_appl?id=' . $row->id . '?' . $row->pid . '?' . $row->unit_no, '<i class="fa fa-pencil-square-o">' . '&nbsp' . '</i>', 'class="btn btn-primary btn-3d btn-sm" title="Update"') . '&nbsp' . '&nbsp' . '&nbsp' . '</td>';
                }
            }

            if ($row->status == 'HOLD') {
                echo '<a type="button" title="Delete" class="btn btn-danger" value=' . $row->id . ', onclick="myclicktest(' . $row->id . ')" data-toggle="modal" data-target="#myModal">' . '<i class="fa fa-trash">' . '</i>' . '</a>' . '</td>';
            }
        }
        echo "</table>";
    }

    public function show_appl_agreement() {

        $uid = $this->input->post('sendid');
        $ulist = explode("/", $uid);
        $data['userid'] = $ulist[0];
        $data['projectid'] = $ulist[1];

        $r = $this->View_applicant_info->application_show_by_id($data);

        $this->load->view('View_application', $r);
    }

    public function delete_row() {
        $userid = $this->input->get('id');
        // print_r($userid);

        $this->load->model("View_applicant_info");
        $this->View_applicant_info->did_delete_row($userid);
        $this->View_applicant_info->coplicant_delete_row($userid);
        $this->View_applicant_info->up_inventory($userid);
        $this->View_applicant_info->up_parking($userid);

        $msg['success'] = "success";
        $this->load->view('application_search', $msg);
    }

    // function delte end  here  

    public function application_search() {

        $uid = $this->input->post('sendid');
        $ulist = explode("/", $uid);
        $data['userid'] = $ulist[0];
        $data['projectid'] = $ulist[1];

        $r = $this->View_applicant_info->application_show_by_id($data);


        $this->load->view('View_application', $r);
    }

    public function do_application_search() {

        $this->load->view('application_search');
    }

    public function test_application() {

        $this->load->view('test_application');
    }

    /* Functions for Documentation ---END---------- */

    public function show_applicant_docs() {
        $uid = $this->input->post('Sendid1');
        $r = $this->View_applicant_info->get_documents1($uid);
        $out = "";
        foreach ($r as $row) {
            $out = $out . '<tr><td>' . $row['id'] . '</td>' . '<td>' . $row[''] . '</td></tr>';
        }
        echo $out;
    }

    public function show_appl_docs() {
        $uid = $_GET['uid'];
        $data = array('uid' => $uid);
        $this->load->view('test', $data);
    }

    public function get_appl() {
        $r = $this->load->view('test');
    }

    public function show_appl() {
        $r = $this->load->view('View_application');
    }

    public function get_app2() {
        $r = $this->load->view('application_search');
    }

    public function update_appl() {
        $r = $this->load->view('update_application');
    }

}
?>
    
