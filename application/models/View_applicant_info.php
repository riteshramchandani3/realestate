<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * Copyright Oga Technologies Pvt Ltd.
 * You cannot copy the contents of this file.
 * Code provided as is and can be used only after prior permission or license.
 */

class View_applicant_info extends CI_Model {

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
    public function Getphasename() {

        $sql = "select id,block from project_tbl";
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

// this code for search by applicant name or project and unit no
    public function searchingallapplicationproject($data) {


        $username = $data['user_id'];
        $projectid = $data['project_id'];
        $unit_no = $data['unit_no'];
        $stmt = "";


        if ($unit_no != '') {
            $stmt = "SELECT fa.id,fa.pre_salesid,fa.present_addr ,fa.name,inv.block, inv.status,pj.project_name, inv.unit_no,inv.type, pj.id as pid FROM inventory_tbl inv, first_applicant_personal_dtl_tbl fa, project_tbl pj WHERE unit_no LIKE '%$unit_no%' AND (inv.customer_id=fa.id) AND (fa.project_id = pj.id)";
        } else {

            $stmt = "select fappl.id,fappl.pre_salesid,fappl.present_addr,fappl.name,inv.unit_no,inv.status,inv.type,inv.block,ptbl.project_name, ptbl.id as 'pid' from first_applicant_personal_dtl_tbl fappl,project_tbl ptbl, inventory_tbl inv where ";
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

        $r = $this->db->query($stmt);
        // print_r($stmt);
        return $r->result();
    }

    public function deleteapplicant($data) {

        $username = $data['user_id'];
        $projectid = $data['project_id'];
        $unit_no = $data['unit_no'];
        $stmt = "";


        if ($unit_no != 0) {
            $stmt = 'delete fa.id, fa.name, pj.project_name,inv.status, inv.unit_no, pj.id as pid FROM inventory_tbl inv, first_applicant_personal_dtl_tbl fa, project_tbl pj WHERE unit_no =' . $unit_no . ' AND (inv.customer_id=fa.id) AND (fa.project_id = pj.id)';
        } else {
            $stmt = "delete fappl.id,fappl.name,inv.unit_no,inv.status, ptbl.project_name, ptbl.id as 'pid' from first_applicant_personal_dtl_tbl fappl,project_tbl ptbl, inventory_tbl inv where";
            if ($username != "") {
                $stmt = $stmt . "(fappl.name ='" . $username . "') AND (inv.customer_id=fappl.id) AND (fappl.project_id = ptbl.id)";
            } else
            if ($projectid != "0") {
                $stmt = $stmt . "(fappl.project_id =" . $projectid . ") AND (ptbl.id=fappl.project_id) and (inv.customer_id = fappl.id)";
            } else
            if (($username != "") && ($projectid != "0")) {
                $stmt = $stmt . "(fappl.name ='" . $username . "') AND ";
                $stmt = $stmt . '(fappl.project_id =' . $projectid . ')';
            }
        }

        //echo $stmt;
        log_message("info", $stmt);

        $r = $this->db->query($stmt);
        // print_r($stmt);
        return $r->result();
    }






    public function application_show_by_id($data) {
//fatch application form of applicant
        $userid = $data['userid'];

        $projectid = $data['projectid'];
        $sql = "select fappl.*,ca.*,itbl.unit_no,prdtl.category,prdtl.unit_type,prdtl.*,pjt.project_name ,pktbl.parking_no from first_applicant_personal_dtl_tbl fappl,co_applicant_tbl ca,inventory_tbl itbl,project_dtls_tbl prdtl ,project_tbl pjt,parking_tbl pktbl where (fappl.id='$userid') and (fappl.project_id = pjt.id) and (fappl.id=ca.first_appl_id) and (fappl.id=itbl.customer_id) and (fappl.project_id=prdtl.project_id) and (itbl.project_id=prdtl.project_id) and (pktbl.applicant_id=fappl.id)";
        $r = $this->db->query($sql);
        return $r->row_array();
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

    public function locate_applicant($data) {

        $username = $data['user_id'];
        $projectid = $data['project_id'];
        $unit_no = $data['unit_no'];
        $stmt = "";
        if ($unit_no != 0) {
            $stmt = 'SELECT fa.id, fa.project_id as pid, fa.name, pj.project_name, au.unit_no FROM applicant_unit_relation_tbl au, first_applicant_personal_dtl_tbl fa, project_tbl pj WHERE unit_no =' . $unit_no . ' AND (au.applicant_id=fa.id) AND (au.project_id = pj.id)';
        } else {
            $stmt = "select fappl.id,fappl.name,au.unit_no, ptbl.project_name, ptbl.id as 'pid' from first_applicant_personal_dtl_tbl fappl,project_tbl ptbl, applicant_unit_relation_tbl au where";
            if ($username != "") {
                $stmt = $stmt . "(fappl.name ='" . $username . "') AND (au.applicant_id=fappl.id) AND (au.project_id = ptbl.id)";
            } else
            if ($projectid != "0") {
                $stmt = $stmt . "(fappl.project_id =" . $projectid . ")";
            } else
            if (($username != "") && ($projectid != "0")) {
                $stmt = $stmt . "(fappl.name ='" . $username . "') AND ";
                $stmt = $stmt . '(fappl.project_id =' . $projectid . ')';
            }
        }
        //echo $stmt;
        log_message("info", $stmt);

        $r = $this->db->query($stmt);
        //  print_r($stmt);
        return $r->result();
    }

   
    //<----------------START this Query is use for applicant payment input  START ----------------------->


    public function getPaymentInput($data) {
        $this->db->insert('payment_dtls_tbl', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function show_appl_paymt($data) {
//fatch application form of applicant
        $userid = $data['userid'];
      
        $sql = "SELECT fapl.name,pdt.* FROM first_applicant_personal_dtl_tbl fapl, payment_dtls_tbl pdt WHERE pdt.first_appl_id='$userid' and fapl.id='$userid'";
        
        $r = $this->db->query($sql);
        return $r->row_array();
    }

    public function get_applicant_info($user) {
//fatch application form of applicant
        $explode_data = explode('?', $user);
        $id = $explode_data[0];
        $pid = $explode_data[1];
        $unit_no = $explode_data[2];
        $sql = "SELECT * from first_applicant_personal_dtl_tbl  WHERE id='$id'";
        //  print_r($sql);
        $r = $this->db->query($sql);
        return $r->result();
    }

    public function get_inventory_info($user) {
//fatch application form of applicant
        $explode_data = explode('?', $user);
        $id = $explode_data[0];
        $pid = $explode_data[1];
        $unit_no = $explode_data[2];
        $sql = "SELECT * from inventory_tbl  WHERE unit_no='$unit_no' and customer_id='$id'";
        //  print_r($sql);
        $r = $this->db->query($sql);
        return $r->result();
    }
    public function get_login_info($login_id) {

        $sql = "SELECT * from user_registration_tbl  WHERE user_id='$login_id' ";
        //  print_r($sql);
        $r = $this->db->query($sql);
        return $r->result();
    }

    public function get_co_applicant_info($user) {
//fatch application form of applicant
        $explode_data = explode('?', $user);
        $id = $explode_data[0];
        $pid = $explode_data[1];
        $unit_no = $explode_data[2];
        $sql = "SELECT * from co_applicant_tbl  WHERE 	first_appl_id='$id'";
        ;
        //  print_r($sql);
        $r = $this->db->query($sql);
        return $r->result();
    }
    public function get_co_applicant_info1($user) {
//fatch application form of applicant
        $explode_data = explode('?', $user);
        $id = $explode_data[0];
        $pid = $explode_data[1];
        $unit_no = $explode_data[2];
        $sql = "SELECT * from co_applicant_tbl_1  WHERE first_appl_id_1='$id'";
       
       //   print_r($sql);
        $r = $this->db->query($sql);
        return $r->result();
    }

    public function get_project_info($user) {
//fatch application form of applicant
        $explode_data = explode('?', $user);
        $id = $explode_data[0];
        $pid = $explode_data[1];
        $unit_no = $explode_data[2];
        $sql = "SELECT * from project_tbl  WHERE id='$pid'";
        ;
        //  print_r($sql);
        $r = $this->db->query($sql);
        return $r->result();
    }

    public function get_parking_info($user) {
//fatch application form of applicant
        $explode_data = explode('?', $user);
        $id = $explode_data[0];
        $pid = $explode_data[1];
        $unit_no = $explode_data[2];
        $sql = "SELECT * from parking_tbl  WHERE applicant_id='$id'";
        ;

        log_message("DEBUG", $sql);
        $r = $this->db->query($sql);
        return $r->result();
    }

//<----------------END this Query is use for applicant payment input END ----------------------->

    public function search_appl_project_unit($data) {

        $username = $data['user_id'];
        $projectid = $data['project_id'];
        $unit_no = $data['unit_no'];
        $stmt = "";
//$stmt = "select fappl.id,fappl.name, ptbl.project_name, ptbl.id as 'pid' from first_applicant_personal_dtl_tbl fappl,project_tbl ptbl  where (fappl.name='$username') AND (ptbl.id = '$projectid')";
        if ($unit_no != 0) {
            $stmt = 'SELECT fa.name, pj.project_name, au.unit_no FROM applicant_unit_relation_tbl au, first_applicant_personal_dtl_tbl fa, project_tbl pj WHERE unit_no =' . $unit_no . ' AND (au.applicant_id=fa.id) AND (au.project_id = pj.id)';
        } else {
            $stmt = "select fappl.id,fappl.name,au.unit_no, ptbl.project_name, ptbl.id as 'pid' from first_applicant_personal_dtl_tbl fappl,project_tbl ptbl, applicant_unit_relation_tbl au where";
            if ($username != "") {
                $stmt = $stmt . "(fappl.name ='" . $username . "') AND (au.applicant_id=fappl.id) AND (au.project_id = ptbl.id)";
            } else
            if ($projectid != "0") {
                $stmt = $stmt . "(fappl.project_id =" . $projectid . ")";
            } else
            if (($username != "") && ($projectid != "0")) {
                $stmt = $stmt . "(fappl.name ='" . $username . "') AND ";
                $stmt = $stmt . '(fappl.project_id =' . $projectid . ')';
            }
        }
        //echo $stmt;
        log_message("info", $stmt);

        $r = $this->db->query($stmt);
      //  print_r($stmt);
        return $r->result();
    }

    public function get_appl_agre($data) {
//fatch application form of applicant
        $userid = $data['userid'];
        //  print_r($userid);
        $projectid = $data['projectid'];
        //  print_r($projectid);
        //$sql = "SELECT * FROM payment_dtls_tbl WHERE first_appl_id='$userid'";
        $sql = "select fappl.*,ca.first_appl_id,ca.ca_mr_mrs,ca.ca_name,ca.ca_dob,ca.ca_age,ca.co_present_add,ca.co_parma_add,ca.ca_son_doughter_wife,
ca.ca_swd_of,ca.ca_aadhar_no,ca.ca_mo_no,ca.ca_landline_no,ca.ca_email,ca.ca_pan,ca.ca_company_name,ca.ca_doj,ca.ca_desig,
ca.ca_department,ca.ca_monthly_income,ca.ca_Qualification,ca.ca_occupation,
ca.ca_addr_of_employer,ca.ca_bank_name_ac_no,ca.ca_img_path,au.block,au.parking_option,itbl.unit_no,itbl.type,prdtl.category,prdtl.unit_type,prdtl.carpet_area,prdtl.first_floor_carpet_area ,prdtl.ground_floor_carpet_area ,pjt.project_name
from first_applicant_personal_dtl_tbl fappl,co_applicant_tbl ca,applicant_unit_relation_tbl au,inventory_tbl itbl,project_dtls_tbl prdtl ,project_tbl pjt
where 
(fappl.id='$userid') and 
(ca.first_appl_id='$userid') and 
(fappl.project_id='$projectid') and 
(fappl.project_id = au.project_id) and
(itbl.project_id='$projectid') and 
(prdtl.project_id='$projectid') and 
(pjt.id='$projectid')";
        //  print_r($sql);
        $r = $this->db->query($sql);
        return $r->row_array();
    }

// funnction for delete start here
    public function get_unit($data) {
        $explode_data = explode('?', $data);
        $userid = $explode_data[0];
        $sql = "SELECT * from inventory_tbl where customer_id='$userid'";
        // print_r($sql);
        $r = $this->db->query($sql);
        return $r->result();
        $this->load->view('application_search');
    }

    public function did_delete_row($userid) {



        $this->db->where('id', $userid);
        $this->db->delete('first_applicant_personal_dtl_tbl');
    }

    public function coplicant_delete_row($userid) {
        $this->db->where('first_appl_id', $userid);
        $this->db->delete('co_applicant_tbl');
    }

    public function up_inventory($userid) {


        $this->db->set('status', 'AVAILABLE');
        $this->db->set('customer_id', 'NULL');
        $this->db->where('customer_id', $userid);
        $this->db->update('inventory_tbl');
        $result = $this->db->affected_rows();
        return $result;
    }

    public function up_parking($userid) {

        $this->db->set('unit_no', 'NULL');
        $this->db->set('applicant_id', 'NULL');
        $this->db->where('applicant_id', $userid);
        $this->db->update('parking_tbl');
        $result = $this->db->affected_rows();
        return $result;
    }

    //functions for delete end here
    public function get_projectinfo($user) {
//fatch application form of applicant
        $explode_data = explode('?', $user);
        $id = $explode_data[0];
        $pid = $explode_data[1];
        $unit_no = $explode_data[2];
        $sql = "SELECT  pdtl.* from inventory_tbl inv,project_dtls_tbl pdtl  WHERE inv.customer_id='$id' and  inv.project_id=pdtl.project_id and inv.block=pdtl.block and pdtl.unit_type=inv.type and inv.category =pdtl.category  ";
        //  print_r($sql);
        $r = $this->db->query($sql);
        return $r->result();
    }

    public function get_applcostcalculation_info($pre_salesid) {

        $sql = "select *  from  presales_costcalculation_tbl where prospect_id= $pre_salesid";

        $r = $this->db->query($sql);
        return $r->result();
    }

    public function view_sheet1($pre_salesid) {
        $stmt = "SELECT * FROM presales_costcalculation_tbl WHERE prospect_id = $pre_salesid  ";
        //  print_r($stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }


    public function view_total($unit_no) {
        $stmt = "SELECT * FROM inventory_tbl WHERE unit_no = '$unit_no'  ";
        //  print_r($stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function view_appl_info_for_allot($customer_id) {
        $stmt = "SELECT * FROM first_applicant_personal_dtl_tbl WHERE id = '$customer_id'  ";
        //  print_r($stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }
    public function view_appl_co_ap_info($customer_id) {
        $stmt = "SELECT co.*,co_one.* FROM co_applicant_tbl co ,co_applicant_tbl_1 co_one WHERE co.first_appl_id =$customer_id and co_one.first_appl_id_1=$customer_id;  ";
        //  print_r($stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }
    public function view_appl_co_ap_dl_info($appl_id) {
        $stmt = "SELECT co.*,co_one.* FROM co_applicant_tbl co ,co_applicant_tbl_1 co_one WHERE co.first_appl_id =$appl_id and co_one.first_appl_id_1=$appl_id;  ";
        //  print_r($stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

}

?>