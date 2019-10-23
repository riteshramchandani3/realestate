<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * Copyright Oga Technologies Pvt Ltd.
 * You cannot copy the contents of this file.
 * Code provided as is and can be used only after prior permission or license.
 */

class Search_all_form_model extends CI_Model {

    public function application_show_by_id($data) {
//fatch application form of applicant
        $userid = $data['userid'];

        $projectid = $data['projectid'];
        $sql = "select fappl.*,ca.*,itbl.unit_no,prdtl.category,prdtl.unit_type,prdtl.*,pjt.project_name ,pktbl.parking_no from first_applicant_personal_dtl_tbl fappl,co_applicant_tbl ca,inventory_tbl itbl,project_dtls_tbl prdtl ,project_tbl pjt,parking_tbl pktbl where (fappl.id='$userid') and (fappl.project_id = pjt.id) and (fappl.id=ca.first_appl_id) and (fappl.id=itbl.customer_id) and (fappl.project_id=prdtl.project_id) and (itbl.project_id=prdtl.project_id) and (pktbl.applicant_id=fappl.id)";
        $r = $this->db->query($sql);
        return $r->row_array();
    }

    // this code for search by applicant name or project and unit no
    public function searchingallapplicationproject($data) {


        $username = $data['user_id'];
        $projectid = $data['project_id'];
        $unit_no = $data['unit_no'];
        $stmt = "";


        //    if ($unit_no != '') {
        $stmt = "SELECT fappl.name,fappl.id,pj.project_name,pj.block,inv.unit_no,inv.type FROM inventory_tbl inv,first_applicant_personal_dtl_tbl fappl,project_tbl pj,demand_letter_tbl dlt WHERE (inv.unit_no='$unit_no') AND (pj.id='$projectid') AND (fappl.id=inv.customer_id) AND (dlt.unit_no = '$unit_no') AND (dlt.stage = 'POSSESSION')"; // AND (dlt.unit_no='$unit_no') AND (dlt.stage='POSSESSION')";

        $r = $this->db->query($stmt);
        // print_r($stmt);
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

    public function getdtlsappl($userid, $unitno) {
        //$stmt = "select fappl.*,coappl.ca_name,coappl1.ca_name_1,pdt.project_name,pdt.block,pdt.location ,inv.type  from first_applicant_personal_dtl_tbl fappl,co_applicant_tbl coappl,co_applicant_tbl_1 coappl1,project_tbl pdt , inventory_tbl inv where fappl.id='$userid' and fappl.id=inv.customer_id and fappl.project_id=pdt.id and coappl.first_appl_id='$userid' and coappl1.first_appl_id_1='$userid'";
        //$stmt = "select fappl.id,fappl.project_id,fappl.mr_mrs,fappl.name,fappl.fappl_dob,fappl.fappl_age,fappl.son_doughter_wife,fappl.son_doughter_wife_mr_mrs,fappl.swd_of,fappl.present_addr,fappl.pin_code,fappl.contact_mobile,fappl.occupation,fappl.company_name,fappl.	fa_empl_addr,fappl.pin_code_emp,fappl.pre_salesid,fappl.date,fappl.pan,coappl.ca_name,coappl1.ca_name_1,pdt.project_name,pdt.block,pdt.location ,inv.type  from first_applicant_personal_dtl_tbl fappl,co_applicant_tbl coappl,co_applicant_tbl_1 coappl1,project_tbl pdt , inventory_tbl inv where fappl.id='$userid' and fappl.id=inv.customer_id and fappl.project_id=pdt.id and coappl.first_appl_id='$userid' and coappl1.first_appl_id_1='$userid'";
        $stmt = "select fappl.id,fappl.project_id,fappl.mr_mrs,fappl.name,fappl.fappl_dob,fappl.fappl_age,fappl.son_doughter_wife,fappl.son_doughter_wife_mr_mrs,fappl.swd_of,fappl.present_addr,fappl.pin_code,fappl.contact_mobile,fappl.occupation,fappl.company_name,fappl.	fa_empl_addr,fappl.pin_code_emp,fappl.pre_salesid,fappl.date,fappl.pan,coappl.ca_name,coappl.ca_mr_mrs,coappl1.ca_mr_mrs_1,coappl1.ca_name_1,pdt.project_name,pdt.block,pdt.location ,inv.type  from first_applicant_personal_dtl_tbl fappl,co_applicant_tbl coappl,co_applicant_tbl_1 coappl1,project_tbl pdt , inventory_tbl inv where fappl.id='$userid' and fappl.id=inv.customer_id and fappl.project_id=pdt.id and coappl.first_appl_id='$userid' and coappl1.first_appl_id_1='$userid'";
        $r = $this->db->query($stmt);
        return $r->row();
    }

    public function site_engineer_name() {


        $stmt = "select * from company_info_tbl where attribute='SITE ENGINEER'";
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function first_check_pdf($userid, $doc_type) {

        $userid = $userid;
        $doc_type = $doc_type;
        $r="select path from documents_tbl where applicant_id='$userid' and ";
        if ($doc_type == 'Affidavit') {
            
            $sqlid ="$r doc_type like'%Agreement%'" ;//"$r doc_type='Affidavit'";
        } else if ($doc_type == 'Maintenance Agreement') {

            $sqlid = "$r doc_type='Maintenance Agreement'";
        } else if ($doc_type == 'Office Copy') {
            $sqlid = "$r doc_type='Office Copy'";
        } else if ($doc_type == 'Customer Copy') {
            $sqlid = "$r doc_type='Customer Copy'";
        } else if ($doc_type == 'Satisfaction Form') {
            $sqlid = "$r doc_type='Satisfaction Form'";
        } else if ($doc_type == 'Stamp Value Purpose Undertaking') {
            $sqlid = "$r doc_type='Stamp Value Purpose Undertaking'";
        } else if ($doc_type == 'Stamp Value Purpose Maintenance Agreement') {
            $sqlid = "$r doc_type='Stamp Value Purpose Maintenance Agreement'";
        } else if ($doc_type == 'Statement of dues I') {
            $sqlid = "$r doc_type='Statement of dues I'";
        } else if ($doc_type == 'Statement Of Dues II') {
            $sqlid = "$r doc_type='Statement Of Dues II'";
        } else if ($doc_type == 'Undertaking Form') {
            $sqlid = "$r doc_type='Undertaking Form'";
        } else if ($doc_type == 'Site Inspection Report I') {
            $sqlid = "$r doc_type='Site Inspection Report I'";
        } else if ($doc_type == 'Site Inspection Report II') {
            $sqlid = "$r doc_type='Site Inspection Report II'";
        } else if ($doc_type == 'MPEB Affidavit Sampada') {
            $sqlid = "$r doc_type='MPEB Affidavit Sampada'";
        } else if ($doc_type == 'Society Affidavit A') {
            $sqlid = "$r doc_type='Society Affidavit A'";
        } else if ($doc_type == 'Society Affidavit B') {
            $sqlid = "$r doc_type='Society Affidavit B'";
        } else if ($doc_type == 'NOC mpeb') {
            $sqlid = "$r doc_type='NOC mpeb'";
        } else if ($doc_type == 'Namantaran') {
            $sqlid = "$r doc_type='Namantaran'";
        } else if ($doc_type == 'Society Application Sampada') {
            $sqlid = "$r doc_type='Society Application Sampada'";
        } else if ($doc_type == 'Society Application Sampada B') {
            $sqlid = "$r doc_type='Society Application Sampada B'";
        } else if ($doc_type == 'MPEB2') {
            $sqlid = "$r doc_type='MPEB2'";
        } else {
            
        }
        $r = $this->db->query($sqlid);
        $s = $r->row();
        $num = $r->num_rows();
        if ($num == 1) {
            $pdfpath = $s->path;
            return $pdfpath;
        } else {
            return 'error';
            //$this->search_appl_project_unit()
        }
        //$applid = $aplid;
    }
//+++++++++++++++++++++++view work completion code+++++++++++++++++++++//
    
   public function get_completion_details($userid) {

        
        $userid = $userid;


        $sql = "select * from completion_of_work where applicant_id='$userid'";
        
        $r = $this->db->query($sql);
        return $r->result();
    }
}

?>