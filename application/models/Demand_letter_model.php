<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Demand_letter_model extends CI_Model {

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


    
      public function get_appl_details($data) {

        $explode_data = explode('?', $data);
        $userid = $explode_data[0];


        $sql = "select fappl.name , pdtl.project_name ,invt.unit_no ,invt.type,invt.block from first_applicant_personal_dtl_tbl fappl ,inventory_tbl invt , project_tbl pdtl where fappl.id='$userid' and invt.customer_id='$userid' and pdtl.id=fappl.project_id";

        $r = $this->db->query($sql);
        return $r->result();
    }
    
          public function get_appl($data) {

        $explode_data = explode('?', $data);
        $userid = $explode_data[0];


        $sql = "select fappl.*, pdtl.project_name ,invt.* ,ca.* from first_applicant_personal_dtl_tbl fappl ,inventory_tbl invt , project_tbl pdtl,co_applicant_tbl ca where fappl.id='$userid' and fappl.id=ca.first_appl_id and invt.customer_id='$userid' and pdtl.id=fappl.project_id";

        $r = $this->db->query($sql);
        return $r->result();
    }
          public function get_appl_byunit_details($unit_no) {

        $sql = "select * from inventory_tbl invt where unit_no='$unit_no' ";
       // print_r($sql);
        $r = $this->db->query($sql);
        return $r->result();
    }
    
      public function show_dl($id) {

        $explode_data = explode('?', $id);
        $idr = $explode_data[0];
        $userid = $explode_data[1];


        $sql = "select * from demand_letter_tbl where id='$idr' and appl_id= '$userid'";

        $r = $this->db->query($sql);
        return $r->result();
    }
    
    public function findapplicationwords($alpha) {
        $j = $alpha;
        $stmt = "select id,name from first_applicant_personal_dtl_tbl where name like '%$j%'";
        $r = $this->db->query($stmt);
        return $r->result();
    }




    public function locate_applicant($data) {

        $username = $data['user_id'];
        $projectid = $data['project_id'];
        $unit_no = $data['unit_no'];
        $stmt = "";

   if ($unit_no !='') {
            $stmt = "SELECT fa.id, fa.name,inv.block, pj.project_name, inv.unit_no,inv.type, pj.id as pid FROM inventory_tbl inv, first_applicant_personal_dtl_tbl fa, project_tbl pj WHERE inv.unit_no LIKE '%$unit_no%' AND (inv.customer_id=fa.id) AND (fa.project_id = pj.id)";
                              } 
                              else {
             
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
       //print_r($stmt);
        return $r->result();
          
    }
    
       public function get_stages_dl($data) {
        $userid = $data;
        $sql = "SELECT * FROM demand_letter_tbl where appl_id=".$userid;
        // print_r('heloo'+$sql);
        log_message('info', $sql);
        $r = $this->db->query($sql);
        return $r->result_array();
    }
   
}

?>
