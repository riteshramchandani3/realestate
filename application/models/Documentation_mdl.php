<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Documentation_mdl extends CI_Model {

    //new search applicant code
    public function Getallusers() {

        $sql = "select id,name from first_applicant_personal_dtl_tbl";
        $r = $this->db->query($sql);
        return $r->result();
    }

    public function Getprojectname() {

        $sql = "select id,project_name,block from project_tbl";
        $r = $this->db->query($sql);
        return $r->result();
    }

    public function Getunitno() {

        $sql = "select id,unit_no from inventory_tbl";
        $r = $this->db->query($sql);
        return $r->result();
    }

    public function Getviewapplicant() {

        $sql = "select id,unit_no from inventory_tbl";
        $r = $this->db->query($sql);
        return $r->result();
    }

//end search applicant


    public function findapplicationwords($alpha) {
        $j = $alpha;
        $stmt = "select id,name from first_applicant_personal_dtl_tbl where name like '%$j%'";
        $r = $this->db->query($stmt);
        return $r->result();
    }

//start ******************this code for document search by user id and show************** start 
    public function get_documents($data) {
        $userid = $data;
        $sql = "SELECT * FROM documents_tbl where applicant_id=" . $userid;
        // print_r('heloo'+$sql);
        log_message('info', $sql);
        $r = $this->db->query($sql);
        return $r->result_array();
    }

//start ******************this code for document search by user id and show************** start 
    public function get_applicant_infomation($data) {
        $userid = $data;
        $sql = "SELECT fappl.*,inv.* ,proj.* from first_applicant_personal_dtl_tbl fappl,inventory_tbl inv  ,project_tbl proj where (fappl.id='$userid') and (inv.customer_id=fappl.id)";
        // print_r('heloo'+$sql);
        log_message('info', $sql);
        $r = $this->db->query($sql);
        return $r->row_array();//result();
    }

    public function locate_applicant($data) {

        $username = $data['user_id'];
        $projectid = $data['project_id'];
        $unit_no = $data['unit_no'];
        $stmt = "";

        if ($unit_no != '') {
            $stmt = "SELECT fa.id, fa.name,inv.block, pj.project_name, inv.unit_no,inv.type, pj.id as pid FROM inventory_tbl inv, first_applicant_personal_dtl_tbl fa, project_tbl pj WHERE inv.unit_no LIKE '%$unit_no%' AND (inv.customer_id=fa.id) AND (fa.project_id = pj.id)";
        } else {

            $stmt = "select fappl.id,fappl.name,inv.unit_no,inv.type,inv.block,ptbl.project_name, ptbl.id as 'pid' from first_applicant_personal_dtl_tbl fappl,project_tbl ptbl, inventory_tbl inv where ";
            if ($username != "") {
                $stmt = $stmt . "(fappl.name ='" . $username . "') AND (inv.customer_id=fappl.id) AND (fappl.project_id = ptbl.id)";
            } else
            if ($projectid != "0") {
                // print_r($stmt);
                $stmt = $stmt . "(fappl.project_id =" . $projectid . ") AND (ptbl.id=fappl.project_id) and (inv.customer_id = fappl.id)";
            } else
            if (($username != "") && ($projectid != "0")) {
                // print_r($stmt);
                $stmt = $stmt . "(fappl.name ='" . $username . "') AND ";
                $stmt = $stmt . '(fappl.project_id =' . $projectid . ')';
            }
        }
        log_message("info", $stmt);

        $r = $this->db->query($stmt);
        //  print_r($stmt);
        return $r->result();
    }

    public function upload_documents($data) {
        $this->db->insert('documents_tbl', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }
    }

    public function get_appl_details($data) {

        $explode_data = explode('?', $data);
        $userid = $explode_data[0];


        $sql = "select fappl.name , pdtl.project_name ,invt.unit_no ,invt.type from first_applicant_personal_dtl_tbl fappl ,inventory_tbl invt , project_tbl pdtl where fappl.id='$userid' and invt.customer_id='$userid' and pdtl.id=fappl.project_id";

        $r = $this->db->query($sql);
        return $r->result();
    }

    public function did_delete($userid, $path, $data) {

       // $this->db->insert('delete_doc_tbl', $data);
        //if ($this->db->affected_rows() > 0) {
            $this->db->where('id', $userid);
            $a = $this->db->get('documents_tbl');
            $b = $a->row();
            $c = $b->path;
            unlink($c);
            $this->db->where('id', $userid);
            $this->db->delete('documents_tbl');

            $this->db->where('id', $userid);
            //$pth = $this->db->get('documents_tbl');
            $p = explode('../', $path);
            unlink($p[1]);
            return true;
       // }
        //return $pth;
    }

    public function upload_the_doc($data) {
        $this->db->insert('documents_tbl', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            
        }
    }

    public function GetDocumenttype() {

        $sql = "select document_title from doc_title_tbl ORDER BY document_title ASC ";
        $r = $this->db->query($sql);
        return $r->result();
    }

    public function get_doc_dtls($userid) {

        $sql = "select * from documents_tbl where id='$userid'";

        $r = $this->db->query($sql);
        return $r->result();
    }

    public function get_delete_file_log($data) {
        $userid = $data;
      //  $sql = "SELECT * FROM documents_tbl where applicant_id=" . $userid;
        $sql = "SELECT dt.*,fappl.name FROM delete_doc_tbl dt,first_applicant_personal_dtl_tbl fappl where dt.applicant_id='$userid' and dt.applicant_id=fappl.id";
        // print_r('heloo'+$sql);
        log_message('info', $sql);
        $r = $this->db->query($sql);
        return $r->result_array();
    }
    public function checkpwd($data)
    {
        $pwd = sha1($data['pwd']);
        $sql = "select count(*) as 'num' from user_registration_tbl where user_id = '".$data['uid']."' and password='".$pwd."'";
        $r = $this->db->query($sql);
        $result = $r->row_array();
        $count = $result['num'];
        return $count;
     
    }
}

?>
