<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Documentation extends CI_Controller {

    public function index() {
        $this->load->view('locate_applicant_doc');
    }

    public function getprojectblocks() {
        $projectid = $this->input->post('arg');
        $row = $this->Realestate_modal->getblocksbyproject($projectid);
        echo $row;
    }

    public function getinfo() {
        $arr = $this->Realestate_modal->viewData();
        $this->load->view('Realestate_modal', $arr);
    }

    public function getsearchwords() {
        $alphabet = $this->input->post('alphabet');
        $s = $this->Documentation_mdl->findapplicationwords($alphabet);
        foreach ($s as $row) {
            echo "<a href=# class='btn btn-default btn-sm' style='width:100%;border-top: none;border-radius: 0px;' onclick=setthis(this.text); id=$row->id>$row->name</a>" . "<br>";
        }
    }

    //<--*************** start  search  applicant and  view applicant  document form *********************-->

    public function allprojectdoc() {

        $data['user_id'] = $this->input->post('uname');
        $data['project_id'] = $this->input->post('pid');
        $data['unit_no'] = $this->input->post('unitno');
        echo '<table class="table table-responsive" style="border:2;">';
        echo '<tr>';
        echo '<th>Name</th>';
        echo '<th>Project</th>';
        echo '<th>Unit No.</th>';
        echo '<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'
        . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'
        . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'
        . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'
        . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Action</th>';
        echo '</tr>';
        $s = $this->Documentation_mdl->locate_applicant($data);
        foreach ($s as $row) {
            echo '<tr>';
            echo '<td>' . $row->name . '</td>';
            echo '<td>' . $row->project_name . nbs(1) . $row->block . '</td>';
            echo '<td>' . $row->unit_no . '</td>';
            echo '<td>'
            . '<button type="submit" class="btn btn-info btn-3d" onclick="get_docs_for_this_applicant(this.value)" name="Sendid" value= ' . $row->id . '>' . 'View Document' . '&nbsp' . '&nbsp' . '&nbsp' . '<i class="fa fa-eye">' . '</i>' . '</button>' . '&nbsp' . '&nbsp' . '&nbsp'
            . '<button type="submit" class="btn btn-primary btn-3d" onclick="add_docs_for_this_applicant(this.value)" name="Sendid" value= ' . $row->id . '>' . 'Add Document' . '&nbsp' . '&nbsp' . '&nbsp' . '<i class="fa fa-plus">' . '</i>' . '</button>'
            . '</td>';
        }
        echo "</table>";
    }

    public function show_applicant_docs() {
        $uid = $this->input->post('Sendid');
        $r = $this->Documentation_mdl->get_documents($uid);
        $out = "";
        foreach ($r as $row) {
            $out = $out . '<tr><td>' . $row['id'] . '</td>' . '<td>' . $row['path'] . '</td></tr>';
        }
        echo $out;
    }

    public function show_appl_docs() {
        $uid = $_GET['uid'];
        $data = array('uid' => $uid);
        $this->load->view('view_applicant_doc', $data);
    }

    public function add_appl_docs() {
        $uid = $_GET['uid'];
        
        $data = array('uid' => $uid);
        $this->load->view('documentUpload2', $data);
    }

    //<--********************* end   search and  view applicant  document form ********************-->

    public function document() {
        $this->load->view('locate_applicant_doc');
    }

    public function document_upload() {

        $data['applicant_id'] = $this->input->post('applicant_id');
        $data['project_name'] = $this->input->post('project_name');
        $data['doc_type'] = $this->input->post('doc_type');
        $dt = date('Ymdhis');
        $fn1 = $_FILES['path']['name'];
        $extlst = explode(".", $fn1);
        $filesname = $extlst[0];
        $ext = $extlst[1];
        $newname = $extlst[0]; // . $this->input->post('unit_no');
        $newname2 = $newname . "." . $ext;
        $sourceapplicant = $_FILES['path']['tmp_name'];
        $targetapplicant = "uploads/uploaded_docs/" . $newname2;
        move_uploaded_file($sourceapplicant, $targetapplicant);
        $data['path'] = './uploads/uploaded_docs/' . $newname2;
        $this->Documentation_mdl->upload_documents($data);
        $msg['success'] = "success";
        $this->load->view('locate_applicant_doc', $msg);
    }

    public function Pan_upload() {
        $data['applicant_id'] = $this->input->post('applicant_id');
        $data['project_name'] = $this->input->post('project_name');
        $data['doc_type'] = $this->input->post('doc_type');
        $dt = date('Ymdhis');
        $fn1 = $_FILES['path']['name'];
        $extlst = explode(".", $fn1);
        $filesname = $extlst[0];
        $ext = $extlst[1];
        $newname = $extlst[0] . $data['applicant_id']; // . $this->input->post('unit_no');
        $pathfolder = "/uploads/";
        mkdir($pathfolder);
        $newname2 = $newname . "." . $ext;
        $sourceapplicant = $_FILES['path']['tmp_name'];
        $targetapplicant = "uploads/uploaded_docs/" . $newname2;
        move_uploaded_file($sourceapplicant, $targetapplicant);
        $data['path'] = './uploads/uploaded_docs/' . $newname2;
        $this->Documentation_mdl->upload_documents($data);
        $msg['success'] = "success";
        $this->load->view('locate_applicant_doc', $msg);
    }

    public function Salary_upload() {
        $data['applicant_id'] = $this->input->post('applicant_id');
        $data['project_name'] = $this->input->post('project_name');
        $data['doc_type'] = $this->input->post('doc_type');
        $dt = date('Ymdhis');
        $fn1 = $_FILES['path']['name'];
        $extlst = explode(".", $fn1);
        $filesname = $extlst[0];
        $ext = $extlst[1];
        $newname = $extlst[0]; // . $this->input->post('unit_no');
        $newname2 = $newname . "." . $ext;
        $sourceapplicant = $_FILES['path']['tmp_name'];
        $targetapplicant = "uploads/uploaded_docs/" . $newname2;
        move_uploaded_file($sourceapplicant, $targetapplicant);
        $data['path'] = './uploads/uploaded_docs/' . $newname2;
        $this->Documentation_mdl->upload_documents($data);
        $msg['success'] = "success";
        $this->load->view('locate_applicant_doc', $msg);
    }

    public function Form16_upload() {
        $data['applicant_id'] = $this->input->post('applicant_id');
        $data['project_name'] = $this->input->post('project_name');
        $data['doc_type'] = $this->input->post('doc_type');
        $dt = date('Ymdhis');
        $fn1 = $_FILES['path']['name'];
        $extlst = explode(".", $fn1);
        $filesname = $extlst[0];
        $ext = $extlst[1];
        $newname = $extlst[0]; // . $this->input->post('unit_no');
        $newname2 = $newname . "." . $ext;
        $sourceapplicant = $_FILES['path']['tmp_name'];
        $targetapplicant = "uploads/uploaded_docs/" . $newname2;
        move_uploaded_file($sourceapplicant, $targetapplicant);
        $data['path'] = './uploads/uploaded_docs/' . $newname2;
        $this->Documentation_mdl->upload_documents($data);
        $msg['success'] = "success";
        $this->load->view('locate_applicant_doc', $msg);
    }

    public function ITR_upload() {
        $data['applicant_id'] = $this->input->post('applicant_id');
        $data['project_name'] = $this->input->post('project_name');
        $data['doc_type'] = $this->input->post('doc_type');
        $dt = date('Ymdhis');
        $fn1 = $_FILES['path']['name'];
        $extlst = explode(".", $fn1);
        $filesname = $extlst[0];
        $ext = $extlst[1];
        $newname = $extlst[0]; // . $this->input->post('unit_no');
        $newname2 = $newname . "." . $ext;
        $sourceapplicant = $_FILES['path']['tmp_name'];
        $targetapplicant = "uploads/uploaded_docs/" . $newname2;
        move_uploaded_file($sourceapplicant, $targetapplicant);
        $data['path'] = './uploads/uploaded_docs/' . $newname2;
        $this->Documentation_mdl->upload_documents($data);
        $msg['success'] = "success";
        $this->load->view('locate_applicant_doc', $msg);
    }

    public function Bank_upload() {
        $data['applicant_id'] = $this->input->post('applicant_id');
        $data['project_name'] = $this->input->post('project_name');
        $data['doc_type'] = $this->input->post('doc_type');
        $dt = date('Ymdhis');
        $fn1 = $_FILES['path']['name'];
        $extlst = explode(".", $fn1);
        $filesname = $extlst[0];
        $ext = $extlst[1];
        $newname = $extlst[0]; // . $this->input->post('unit_no');
        $newname2 = $newname . "." . $ext;
        $sourceapplicant = $_FILES['path']['tmp_name'];
        $targetapplicant = "uploads/uploaded_docs/" . $newname2;
        move_uploaded_file($sourceapplicant, $targetapplicant);
        $data['path'] = './uploads/uploaded_docs/' . $newname2;
        $this->Documentation_mdl->upload_documents($data);
        $msg['success'] = "success";
        $this->load->view('locate_applicant_doc', $msg);
    }

    public function Aadhar_upload() {
        $data['applicant_id'] = $this->input->post('applicant_id');
        $data['project_name'] = $this->input->post('project_name');
        $data['doc_type'] = $this->input->post('doc_type');
        $dt = date('Ymdhis');
        $fn1 = $_FILES['path']['name'];
        $extlst = explode(".", $fn1);
        $filesname = $extlst[0];
        $ext = $extlst[1];
        $newname = $extlst[0]; // . $this->input->post('unit_no');
        $newname2 = $newname . "." . $ext;
        $sourceapplicant = $_FILES['path']['tmp_name'];
        $targetapplicant = "uploads/uploaded_docs/" . $newname2;
        move_uploaded_file($sourceapplicant, $targetapplicant);
        $data['path'] = './uploads/uploaded_docs/' . $newname2;
        $this->Documentation_mdl->upload_documents($data);
        $msg['success'] = "success";
        $this->load->view('locate_applicant_doc', $msg);
    }

    public function Loan_upload() {
        $data['applicant_id'] = $this->input->post('applicant_id');
        $data['project_name'] = $this->input->post('project_name');
        $data['doc_type'] = $this->input->post('doc_type');
        $dt = date('Ymdhis');
        $fn1 = $_FILES['path']['name'];
        $extlst = explode(".", $fn1);
        $filesname = $extlst[0];
        $ext = $extlst[1];
        $newname = $extlst[0]; // . $this->input->post('unit_no');
        $newname2 = $newname . "." . $ext;
        $sourceapplicant = $_FILES['path']['tmp_name'];
        $targetapplicant = "uploads/uploaded_docs/" . $newname2;
        move_uploaded_file($sourceapplicant, $targetapplicant);
        $data['path'] = './uploads/uploaded_docs/' . $newname2;
        $this->Documentation_mdl->upload_documents($data);
        $msg['success'] = "success";
        $this->load->view('locate_applicant_doc', $msg);
    }

    public function Check_upload() {
        $data['applicant_id'] = $this->input->post('applicant_id');
        $data['project_name'] = $this->input->post('project_name');
        $data['doc_type'] = $this->input->post('doc_type');
        $dt = date('Ymdhis');
        $fn1 = $_FILES['path']['name'];
        $extlst = explode(".", $fn1);
        $filesname = $extlst[0];
        $ext = $extlst[1];
        $newname = $extlst[0]; // . $this->input->post('unit_no');
        $newname2 = $newname . "." . $ext;
        $sourceapplicant = $_FILES['path']['tmp_name'];
        $targetapplicant = "uploads/uploaded_docs/" . $newname2;
        move_uploaded_file($sourceapplicant, $targetapplicant);
        $data['path'] = './uploads/uploaded_docs/' . $newname2;
        $this->Documentation_mdl->upload_documents($data);
        $msg['success'] = "success";
        $this->load->view('locate_applicant_doc');
    }

    //document upload modified
    public function doc_upload() {

        $this->form_validation->set_rules('doc_type_1', 'Document', 'required');
        if ($this->form_validation->run() == FALSE) {
           redirect('Documentation/add_appl_docs?uid=' . $applid);
        } else {
             
            //print_r($_POST);
            $doctype_1 = $this->input->post('co-appl_doc_type');
            $doctype_2 = $this->input->post('appl_doc_type');
            $person = $this->input->post('doc_type_1');
            $applid = $this->input->post('applicant_id');
            $project_name = $this->input->post('project_name');
            //$doctype_3 = $this->input->post('doc_type_3');
            $date_of_document = $this->input->post('date_of_document');
            $document_appl = $person . " " . $doctype_2;
            $document_coappl = $person . " " . $doctype_1;
            $data['date_of_document'] = date("Y-m-d", strtotime($date_of_document));
           
            $project_name = $this->input->post('project_name');

            $dt = date('Ymdhis');
            $fn1 = $_FILES['path']['name'];
            $extlst = explode(".", $fn1);
            $filesname = $extlst[0];
            $ext = $extlst[1];
            $timestamp = date('Ymdhis');
            $random = rand(0,999999);
            $newname = $doctype_1."_".$timestamp."_".$random. "_" . $applid . "_" . $project_name . "_" . $date_of_document;
            $newname2 = $newname . "." . $ext;
            $sourceapplicant = $_FILES['path']['tmp_name'];
            $targetimg = "uploads/uploaded_docs/" . $newname2;
            move_uploaded_file($sourceapplicant, $targetimg);
            $data['applicant_id'] = $applid;
            $data['project_name'] = $project_name;
            if ($person == 'Applicant') {
                $data['doc_type'] = $document_appl;
            } elseif ($person == 'Co-Applicant-1' || $person == 'Co-Applicant-2') {
                $data['doc_type'] = $document_coappl;
            }

            //  $data['date_of_document'] = $date_of_document;
            $data['path'] = './uploads/uploaded_docs/' . $newname2;
            $applid = $this->input->post('applicant_id');
            $r = $this->Documentation_mdl->upload_the_doc($data);
            //print_r($data);
            if ($r == true) {
                $this->session->set_flashdata("success", "Documentation saved successfully");
                log_message('error', '++++Document  ' . $data['doc_type'] . '====>' . $data['path'] . ' uploaded by user: ' . $this->session->userdata('usrname'));
            } else {
                $this->session->set_flashdata("failure", "Documentation save failed.");
            }
            redirect('Documentation/add_appl_docs?uid=' . $applid);
        }
    }

    public function delete_row() {
        //$p = $this->input->get('id');
        $pwd = $this->input->post('confirmpwd');
        $p = $this->input->post('docid');

        /////////////////////////First check the password
        $data['uid'] = $this->session->userdata('user_id');
        $data['pwd'] = $pwd;

        $check = $this->Documentation_mdl->checkpwd($data);

        $q = explode('*', $p);
        $userid = $q[0];
        $path = $q[1];
        $uid = $q[2];

        if ($check == 1) {


            $a = $this->Documentation_mdl->get_doc_dtls($userid);

            if ($a == true) {

                $applicant_id = $a[0]->applicant_id;
                $project_name = $a[0]->project_name;
                $doc_type = $a[0]->doc_type;
            }
            $login_user_id = $this->session->userdata('user_id');
            $data['login_id'] = $login_user_id;
            $data['doc_type'] = $doc_type;
            $data['project_name'] = $project_name;
            $data['applicant_id'] = $applicant_id;

            $r = $this->Documentation_mdl->did_delete($userid, $path, $data);
            if ($r == true) {
                $this->session->set_flashdata("success", "Documentation Delete Successfully");
                log_message('info', '----Document :' . $data['doc_type'] . '===>' . $path . ' deleted by user:' . $this->session->userdata('usrname'));
            } else {
                $this->session->set_flashdata("failure", "Deletion Failed");
            }
           
            redirect('Documentation/add_appl_docs?uid=' . $uid);
        }//end of if
        else {
            // echo $uid;
            $this->session->set_flashdata("failure", "Deletion Failed. Password Does not match.");
            redirect('Documentation/add_appl_docs?uid=' . $uid);
        }
    }

}

?>