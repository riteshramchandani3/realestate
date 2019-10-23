<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Bank_model extends CI_Model {

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


        $sql = "select fappl.*, pdtl.project_name ,invt.* ,ca.* from first_applicant_personal_dtl_tbl fappl ,inventory_tbl invt , project_tbl pdtl,co_applicant_tbl ca where fappl.id='$userid' and fappl.id=ca.first_appl_id and invt.customer_id='$userid' and pdtl.id=fappl.project_id";

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
        //print_r($stmt);
        return $r->result();
          
    }
    
          public function getbankInput($data) {
        $this->db->insert('bank_details_tbl', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
    

    
      public function update_bank_info($idr) {
             $explode_data = explode('?', $idr);
        $id = $explode_data[0];
      
        $sql = "SELECT * from bank_details_tbl where applicant_id ='$id'";

        $r = $this->db->query($sql);
        return $r->result();
    }
      public function delete_bank_info($userid) {
    
          $this->db->where('applicant_id', $userid);
        $this->db->delete('bank_details_tbl');
    }
    public function getbankupdate($data3) {
        

        $applicant_id = $data3['applicant_id'];
        //$applicant_id = $data2['applicant_id'];
        $bank_name = $data3['bank_name'];
        $bank_address = $data3['bank_address'];
        $bank_ifsc = $data3['bank_ifsc'];
        $loan_amount_sanctioned = $data3['loan_amount_sanctioned'];
        
        
        $loan_file_number = $data3['loan_file_number'];
        $pc_loan_amount_sanctioned = $data3['pc_loan_amount_sanctioned'];
      //  $status = $data3['status'];
       
        $sql = "UPDATE bank_details_tbl SET bank_name='$bank_name',bank_address='$bank_address'"
                . ",bank_ifsc='$bank_ifsc',loan_amount_sanctioned='$loan_amount_sanctioned',"
                . "loan_file_number='$loan_file_number',pc_loan_amount_sanctioned='$pc_loan_amount_sanctioned'"
                ." where applicant_id='$applicant_id'";


        $this->db->query($sql);
        //   print_r($sql);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

      public function get_appl_info($id) {
        $sql = "SELECT inv.* ,fappl.* from inventory_tbl inv, first_applicant_personal_dtl_tbl fappl where customer_id='$id' and fappl.id=inv.customer_id";
        $r = $this->db->query($sql);
        //print_r($sql);
        return $r->result();
    }
   
}

?>
