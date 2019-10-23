<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sheet_Model extends CI_Model {

    public function findwords($alpha) {
        $j = $alpha;
        $stmt = "select id,name from first_applicant_personal_dtl_tbl where name like '%$j%'";
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function getprojectname() {

        $sql = "select id,project_name from project_tbl";
        $r = $this->db->query($sql);
        return $r->result();
    }

    public function searchingofalluserswithproject($data) {
                
        $username = $data['user_id'];
        $projectid = $data['project_id'];
        $unit_no = $data['unit_no'];
        $stmt = "";
         
        
        if ($unit_no !='') {
            $stmt = "SELECT fa.id, fa.pre_salesid, fa.name,inv.block,inv.cost_calculation ,inv.status,pj.project_name, inv.unit_no,inv.type, pj.id as pid FROM inventory_tbl inv, first_applicant_personal_dtl_tbl fa, project_tbl pj WHERE inv.unit_no LIKE '%$unit_no%' AND (inv.customer_id=fa.id) AND (fa.project_id = pj.id)";
           
            
        } else {
             
            $stmt = "select fappl.id,fappl.pre_salesid , fappl.name,inv.unit_no,inv.status,inv.cost_calculation ,inv.type,inv.block,ptbl.project_name, ptbl.id as 'pid' from first_applicant_personal_dtl_tbl fappl,project_tbl ptbl, inventory_tbl inv where ";
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

        // log_message("info", $stmt);

        $r = $this->db->query($stmt);

        return $r->result();
    }

    public function allotmentletteruser_info($alpha) {
        $j = $alpha;
        $stmt = "select id,name from first_applicant_personal_dtl_tbl where id like '%$j%'";
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function sendrowbyid($uid) {

        $sql = "select * from first_applicant_personal_dtl_tbl where id=$uid";
        $r = $this->db->query($sql);
        return $r->row_array();
    }

    public function cost_calculation_show_by_id($data) {

        $userid = $data['userid'];
        $projectid = $data['projectid'];
      
        $sql = "select fappl.*,inv.*,prjdtl.*, prj_tbl.project_name from project_tbl prj_tbl, first_applicant_personal_dtl_tbl fappl,inventory_tbl inv,project_dtls_tbl prjdtl where (fappl.id=$userid) and (fappl.id=inv.customer_id) and (prjdtl.project_id=inv.project_id) and (prjdtl.block=inv.block)  and (prjdtl.unit_type=inv.type) and (prjdtl.project_id=prj_tbl.id)";
        $r = $this->db->query($sql);
        return $r->row_array();
    }

    public function get_appl_parking($customer_id) {
        $stmt = "select * from parking_tbl  where applicant_id='$customer_id' ";
        // log_message('info', $stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }
    public function get_prospect_info($customer_id) {
        $stmt = "select * from first_applicant_personal_dtl_tbl  where id='$customer_id' ";
      //  log_message('info', $stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function get_company_taxCGST() {
        $sql = "SELECT * from taxes_tbl where tax_name='CGST'";

        $r = $this->db->query($sql);
        return $r->result();
    }

    public function get_company_taxSGST() {
        $sql = "SELECT * from taxes_tbl where tax_name='SGST'";

        $r = $this->db->query($sql);
        return $r->result();
    }

    public function get_company_taxIGST() {
        $sql = "SELECT * from taxes_tbl where tax_name='IGST'";

        $r = $this->db->query($sql);
        return $r->result();
    }

    public function get_company_Maintenance() {
        $sql = "SELECT * FROM other_charges where charge_name='5 Year Maintenance'";

        $r = $this->db->query($sql);
        return $r->result();
    }

    public function get_parking_allocation_inputs() {
        $project_id = $this->input->post('projectname');
        $utype = $this->input->post('unittype_select');
        $unum = $this->input->post('unitnum_select');
        $park_num = $this->input->post('parknum_select');
        $sql = "INSERT INTO parking_tbl (project_id,unit_no, parking_no ) VALUES (" . $this->db->escape($project_id) . ", " . $this->db->escape($parking_no) . ", " . $this->db->escape($ptype) . ", " . $this->db->escape($price) . ", " . $this->db->escape($remark) . ")";
    }

    public function get_parking_projectname() {
        $stmt = "select distinct(prj.project_name),invtl.type,prj.id from project_tbl prj, inventory_tbl invtl  where (prj.id= invtl.project_id AND invtl.type='Flat')";
        log_message('info', $stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function get_parking_unittype() {
        $stmt = "select distinct(invtl.type) from project_tbl prj, inventory_tbl invtl  where (prj.id= invtl.project_id AND invtl.type='Flat')";
        error_log("Cost_calculator::get_parking_unittype()::sql is: " . $stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function ParkingUnitType($data) {
        //$pid = $data['id'];
        //$blid = $data['project_id'];
        $stmt = "select type from inventory_tbl where (type='Flat')";
        log_message('debug', $stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function get_parking_unitnumber($project_id) {
        $stmt = "select invtl.unit_no from project_tbl prj, inventory_tbl invtl  where (prj.id= invtl.project_id AND invtl.type='Flat' AND invtl.status='AVAILABLE' AND invtl.project_id='$project_id')";
        error_log("Cost_calculator::get_parking_unitnumber()::gsql is:" . $stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function get_parking_number($project_id) {
        $stmt = "SELECT * FROM `parking_tbl` WHERE project_id =" . $project_id . " and unit_no is NULL";
        error_log("Cost_calculator::get_parking_number()::sql is:" . $stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

 public function update_cost() {

        $unit_cost_as_per_carpet_area = $this->input->post('unit_cost_as_per_carpet_area');
        $cost_payable_to_company = $this->input->post('cost_payable_to_company');
        $price_ca_ref_rate = $this->input->post('price_ca_ref_rate');
        $discount = $this->input->post('discount');
        $gst = $this->input->post('gst');
        $cost_calculation = $this->input->post('cost_calculation');
        $customer_id = $this->input->post('customer_id');
        // print_r($id);

        $sql = "UPDATE inventory_tbl SET discount='$discount',gst='$gst', unit_cost_as_per_carpet_area='$unit_cost_as_per_carpet_area',cost_payable_to_company='$cost_payable_to_company', price_ca_ref_rate='$price_ca_ref_rate', cost_calculation='$cost_calculation' where customer_id='$customer_id' ";
        //error_log("Admin_model::update_view_page():: SQL is:" . $sql);
        $this->db->query($sql);
        //  print_r($sql);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function update_flat_cost() {
        $unit_cost_as_per_carpet_area = $this->input->post('unit_cost_as_per_carpet_area');
        $cost_payable_to_company = $this->input->post('cost_payable_to_company');
        $price_ca_ref_rate = $this->input->post('price_ca_ref_rate');
        $discount = $this->input->post('discount');
        $discount_carpet_area = $this->input->post('discount_carpet_area');
        $discount_balcony_ref_rate = $this->input->post('discount_balcony_ref_rate');
        $discount_washarea_ref_rate = $this->input->post('discount_washarea_ref_rate');
        $price_ca_ref_rate = $this->input->post('price_ca_ref_rate');
        $price_balcony_ref_rate = $this->input->post('price_balcony_ref_rate');
        $price_washarea_ref_rate = $this->input->post('price_washarea_ref_rate');
        $cost_calculation = $this->input->post('cost_calculation');
        $customer_id = $this->input->post('customer_id');
        // print_r($id);

        $sql = "UPDATE inventory_tbl SET discount_carpet_area='$discount_carpet_area',discount_balcony_ref_rate='$discount_balcony_ref_rate',discount_washarea_ref_rate='$discount_washarea_ref_rate',price_ca_ref_rate='$price_ca_ref_rate',price_balcony_ref_rate='$price_balcony_ref_rate',price_washarea_ref_rate='$price_washarea_ref_rate',discount='$discount', unit_cost_as_per_carpet_area='$unit_cost_as_per_carpet_area',cost_payable_to_company='$cost_payable_to_company', price_ca_ref_rate='$price_ca_ref_rate', cost_calculation='$cost_calculation' where customer_id='$customer_id' ";
        //error_log("Admin_model::update_view_page():: SQL is:" . $sql);
        $this->db->query($sql);
        //  print_r($sql);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function update_row_house_cost() {

        $price = $this->input->post('price');
        $discount = $this->input->post('discount');
        $cost_calculation = $this->input->post('cost_calculation');
        $customer_id = $this->input->post('customer_id');
        // print_r($id);

        $sql = "UPDATE inventory_tbl SET discount='$discount', unit_cost_as_per_carpet_area='$price', cost_calculation='$cost_calculation' where customer_id='$customer_id' ";
        //error_log("Admin_model::update_view_page():: SQL is:" . $sql);
        $this->db->query($sql);
        //  print_r($sql);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function update_shop_cost() {

        $price = $this->input->post('price');
        $discount = $this->input->post('discount');
        $cost_calculation = $this->input->post('cost_calculation');
        $customer_id = $this->input->post('customer_id');
        // print_r($id);

        $sql = "UPDATE inventory_tbl SET discount='$discount', unit_cost_as_per_carpet_area='$price', cost_calculation='$cost_calculation' where customer_id='$customer_id' ";
        //error_log("Admin_model::update_view_page():: SQL is:" . $sql);
        $this->db->query($sql);
        //  print_r($sql);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function update_plot_cost() {

        $price = $this->input->post('price');
        $discount = $this->input->post('discount');
        $cost_calculation = $this->input->post('cost_calculation');
        $customer_id = $this->input->post('customer_id');
        // print_r($id);

        $sql = "UPDATE inventory_tbl SET discount='$discount', unit_cost_as_per_carpet_area='$price', cost_calculation='$cost_calculation' where customer_id='$customer_id' ";
        //error_log("Admin_model::update_view_page():: SQL is:" . $sql);
        $this->db->query($sql);
        //  print_r($sql);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
    
    

           public function get_project_status($data) {
               $project_id = $data['project_id'];
               $block = $data['block'];
        $sql = "select pt.project_name,ps.status from project_tbl pt,project_status ps where (pt.id='$project_id') and (ps.project_id='$project_id') and(ps.block='$block')";
        //print_r($sql);
        $r = $this->db->query($sql);
        return $r->result();
}
    
    

           public function get_project_status_appl($idr) {
        $sql = "select pt.project_name,ps.status from project_tbl pt,project_status ps ,inventory_tbl inv where inv.customer_id='$idr' and (pt.id=inv.project_id) and (ps.project_id=inv.project_id) and(ps.block=inv.block)";
      
        $r = $this->db->query($sql);
        return $r->result();
}



public function show_project_details($customer_id) {

        $sql = " select pdtl.* from project_dtls_tbl pdtl,inventory_tbl inv where customer_id='$customer_id' and inv.project_id=pdtl.project_id and inv.block=pdtl.block and inv.type=pdtl.unit_type and inv.category=pdtl.category";
       
        $r = $this->db->query($sql);
        return $r->result();
    }
    
    
    

}

?>