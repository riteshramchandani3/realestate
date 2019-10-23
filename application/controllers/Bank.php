<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Bank extends CI_Controller {

    public function index() {
        $this->load->view('locate_applicant_bank');
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
        $s = $this->Bank_model->findapplicationwords($alphabet);
        foreach ($s as $row) {
            //echo $row->id."|".$row->name.",";
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

        $s = $this->Bank_model->locate_applicant($data);
        foreach ($s as $row) {
            echo '<tr>';

            echo '<td>' . $row->name . '</td>';
            echo '<td>' . $row->project_name . nbs(1) . $row->block . '</td>';
            echo '<td>' . $row->unit_no . '</td>';

            $id = $row->id;

            $sql = "select * from bank_details_tbl where applicant_id='$id'";

            $this->db->query($sql);
            // print_r($sql);
            if ($this->db->affected_rows() > 0) {
                echo '<td>' .
                anchor('Bank/update_bank?Uid=' . $id, '<i class="fa fa-pencil-square">' . '&nbsp' . '</i>', 'class="btn btn-success btn-3d btn-sm" title="Edit"') . '&nbsp' . '&nbsp' . '&nbsp'
                . anchor('Bank/show_bank?Uid=' . $id, '<i class="fa fa-eye">' . '&nbsp' . '</i>', 'class="btn btn-info btn-3d btn-sm"  title="View"') . '&nbsp' . '&nbsp' . '&nbsp'
                . '<a type="button" title="Delete" class="btn btn-danger" value=' . $id . ', onclick="myclicktest(' . $id . ')" data-toggle="modal" data-target="#myModal">' . '<i class="fa fa-trash">' . '</i>' . '</a>';
            } else {

                echo '<td>' .
                '<button type="submit" title="Add Bank Information" class="btn btn-primary btn-3d" onclick="get_docs_for_this_applicant(this.value)" name="Sendid" value= ' . $row->id . '>' . '<i class="fa fa-university">' . '</i>' . '</button>';
            }
        }
        echo "</table>";
    }

    public function show_applicant_docs() {
        $uid = $this->input->post('Sendid1');
        $r = $this->Bank_model->get_documents($uid);
        $out = "";
        foreach ($r as $row) {
            //  $out=$out. '<tr><td>' . $row['id'] . '</td>'.'<td>' . $row['path'] . '</td></tr>';
        }
        echo $out;
    }

    public function show_appl_demand() {
        $uid = $_GET['uid'];
        $data = array('uid' => $uid);
        $this->load->view('appl_bank', $data);
    }

    //<--********************* end   search and  view applicant  document form ********************-->

    public function bank_inputs() {

        $data['applicant_id'] = $this->input->post('applicant_id');
        $data['bank_name'] = $this->input->post('bank_name');
        $data['bank_address'] = $this->input->post('bank_address');
        $data['bank_ifsc'] = $this->input->post('bank_ifsc');
        $data['loan_amount_sanctioned'] = $this->input->post('loan_amount_sanctioned');
        $data['loan_file_number'] = $this->input->post('loan_file_number');
        $data['pc_loan_amount_sanctioned'] = $this->input->post('pc_loan_amount_sanctioned');

        $result = $this->Bank_model->getbankInput($data);
        if ($result == true) {
            $this->session->set_flashdata("success", "Bank  Details save successfully");
            // redirect('Bank/index');
        } else {
            $this->session->set_flashdata("failure", "Bank  Details failed.");
            // redirect('Bank/index');
        }
        redirect('Bank/index');
    }

    public function bank_updateinputs() {

        $data3['applicant_id'] = $this->input->post('applicant_id');
        $data3['bank_name'] = $this->input->post('bank_name');
        $data3['bank_address'] = $this->input->post('bank_address');
        $data3['bank_ifsc'] = $this->input->post('bank_ifsc');

        $data3['loan_amount_sanctioned'] = $this->input->post('loan_amount_sanctioned');
        $data3['loan_file_number'] = $this->input->post('loan_file_number');
        $data3['pc_loan_amount_sanctioned'] = $this->input->post('pc_loan_amount_sanctioned');

        $result = $this->Bank_model->getbankupdate($data3);

        if ($result == true) {
            $this->session->set_flashdata("success", "Bank  Details save successfully");
        } else {
            $this->session->set_flashdata("success", "You have made no changes.");
        }
        redirect('Bank/index');
    }

    public function delete_row() {
        $userid = $this->input->get('id');
        $this->Bank_model->delete_bank_info($userid);
        $msg['success'] = "success";
        $this->load->view('locate_applicant_bank', $msg);
    }

    public function appl_bank() {
        $this->load->view('locate_applicant_bank');
    }

    public function update_bank() {
        $this->load->view('update_bank');
    }

    public function show_bank() {
        $this->load->view('view_bank');
    }

}

?>