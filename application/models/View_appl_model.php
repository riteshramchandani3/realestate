<?php

/*
 * Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential.
 * Written by Oga Technologies, October 1,  2016.
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class View_appl_model extends CI_Model {

    public function getallapplicantinfo() {

        $stmt = "select fappl.*,ca.first_appl_id,ca.ca_mr_mrs,ca.ca_name,ca.ca_dob,ca.ca_age,ca.co_present_add,ca.co_parma_add,ca.ca_son_doughter_wife,
            ca.ca_swd_of,ca.ca_aadhar_no,ca.ca_mo_no,ca.ca_landline_no,ca.ca_email,ca.ca_pan,
            ca.ca_company_name,ca.ca_doj,ca.ca_desig,
            ca.ca_department,ca.ca_monthly_income,ca.ca_Qualification,ca.ca_occupation,
            ca.ca_addr_of_employer,ca.ca_bank_name_ac_no,ca.ca_img_path,au.block,
            au.parking_option,itbl.unit_no,prdtl.category,prdtl.unit_type,prdtl.carpet_area,prdtl.first_floor_carpet_area 
            from first_applicant_personal_dtl_tbl fappl,
            co_applicant_tbl ca,
            applicant_unit_relation_tbl au,
            inventory_tbl itbl,
            project_dtls_tbl prdtl 
            where 
            (fappl.id='143') and 
            (ca.first_appl_id='143') and 
            (fappl.project_id='5') and 
            (fappl.project_id = au.project_id) and
            (itbl.project_id='5') and 
            (prdtl.project_id='5')";
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function getprojectname() {

        $sql = "select id,project_name,block from project_tbl";
        $r = $this->db->query($sql);
        return $r->result();
    }

    public function findapplicationwords($alpha) {
        $j = $alpha;
        $stmt = "select id,name from first_applicant_personal_dtl_tbl where name like '%$j%'";
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function application_show_by_id($data) {
//fatch application form of applicant
        $userid = $data['userid'];

        $projectid = $data['projectid'];

        //$sql = "select fappl.*,au.*,pdtl.* from first_applicant_personal_dtl_tbl fappl,applicant_unit_relation_tbl au,project_dtls_tbl pdtl where (fappl.id='$userid') and (fappl.project_id='$projectid') and (au.applicant_id='$userid') and (au.type = pdtl.unit_type)";
        $sql = "select fappl.*,ca.first_appl_id,ca.ca_mr_mrs,ca.ca_name,ca.ca_dob,ca.ca_age,ca.co_present_add,ca.co_parma_add,ca.ca_son_doughter_wife,
ca.ca_swd_of,ca.ca_aadhar_no,ca.ca_mo_no,ca.ca_landline_no,ca.ca_email,ca.ca_pan,ca.ca_company_name,ca.ca_doj,ca.ca_desig,
ca.ca_department,ca.ca_monthly_income,ca.ca_Qualification,ca.ca_occupation,
ca.ca_addr_of_employer,ca.ca_bank_name_ac_no,ca.ca_img_path,au.block,au.parking_option,itbl.unit_no,prdtl.category,prdtl.unit_type,prdtl.carpet_area,prdtl.first_floor_carpet_area ,prdtl.ground_floor_carpet_area ,pjt.project_name
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

    public function searchingallapplicationproject($data) {

        $username = $data['user_id'];
        $projectid = $data['project_id'];
        $unit_no = $data['unit_no'];
        $stmt = "select fappl.id,fappl.name,au.unit_no, ptbl.project_name, ptbl.id as 'pid' from first_applicant_personal_dtl_tbl fappl,project_tbl ptbl, applicant_unit_relation_tbl au where (fappl.name='$username') || (ptbl.id = '$projectid') || (au.unit_no='$unit_no')";
        $r = $this->db->query($stmt);
        print_r($stmt);
        return $r->result();
    }

}

?>