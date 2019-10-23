<?php

/*
 * Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential.
 * Written by Oga Technologies, October 1,  2016.
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Agreement_model extends CI_Model {

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

    //<----------------Start this Query is use for agreement value fatch Start ----------------------->

    public function first_check_pdf($aplid) {
        $applid = $aplid;

        $sqlid = "select path from documents_tbl where applicant_id='$applid' and doc_type like '%Agreement%'";
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
    }

    public function search_appl_project_unit($data) {


        $username = $data['user_id'];
        $projectid = $data['project_id'];
        $unit_no = $data['unit_no'];
        $stmt = "";

        if ($unit_no != '') {
            $stmt = "SELECT fa.id,fa.present_addr,fa.pre_salesid, fa.name,inv.block, pj.project_name, inv.unit_no,inv.type, pj.id as pid FROM inventory_tbl inv, first_applicant_personal_dtl_tbl fa, project_tbl pj WHERE inv.unit_no LIKE '%$unit_no%' AND (inv.customer_id=fa.id) AND (fa.project_id = pj.id)";
        } else {

            $stmt = "select fappl.id, fappl.present_addr,fappl.name, fappl.pre_salesid,inv.unit_no,inv.type,inv.block,ptbl.project_name, ptbl.id as 'pid' from first_applicant_personal_dtl_tbl fappl,project_tbl ptbl, inventory_tbl inv where ";
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
        //echo $stmt;
        log_message("info", $stmt);

        $r = $this->db->query($stmt);
        //print_r($stmt);
        return $r->result();
    }

    public function get_appl_agre($data) {
//fatch application form of applicant
        $userid = $data['userid'];
        //  print_r($userid);
        $projectid = $data['projectid'];
        //  print_r($projectid);

        $sql = "select fappl.*,ca.first_appl_id,ca.ca_mr_mrs,ca.ca_name,ca.co_present_add,"
                . " ca.co_parma_add,ca.ca_son_doughter_wife,ca.ca_swd_of, ca.ca_addr_of_employer,"
                . "ca.ca_bank_name_ac_no,ca.ca_img_path, itbl.block,itbl.carpet_area_price,itbl.unit_no,"
                . "itbl.balcony_area_price,itbl.type, itbl.terrace_front_price,"
                . "itbl.terrace_back_price,itbl.preferred_location_price,"
                . " prdtl.preferred_location_area,prdtl.terrace_back_area,"
                . " prdtl.terrace_front_area,prdtl.balcony_area,prdtl.category,prdtl.balcony_area,"
                . " prdtl.unit_type,prdtl.plot_area,prdtl.plot_boundary,"
                . "prdtl.carpet_area,prdtl.first_floor_carpet_area ,prdtl.ground_floor_carpet_area , "
                . "pjt.registration_no,pjt.city,pjt.project_name ,oc.charge_amount, "
                . "tax.tax_percentage from taxes_tbl tax, other_charges oc, "
                . "first_applicant_personal_dtl_tbl fappl,co_applicant_tbl ca,inventory_tbl itbl,"
                . "project_dtls_tbl prdtl ,project_tbl pjt  where (fappl.id='$userid') and (ca.first_appl_id='$userid') and (fappl.project_id='$projectid') and (fappl.project_id = itbl.project_id) and (itbl.project_id='$projectid') and (prdtl.project_id='$projectid') and (pjt.id='$projectid') and (oc.charge_name='5 Year Maintenance')";
        //print_r($sql);
        $r = $this->db->query($sql);
        return $r->row_array();
    }

    public function get_applinfo($id) {



        $sql = "SELECT  fappl.*, ca.*,inv.* FROM first_applicant_personal_dtl_tbl fappl,co_applicant_tbl ca,inventory_tbl inv  WHERE   fappl.id='$id' and inv.customer_id = fappl.id and ca.first_appl_id=fappl.id ";
        // $sql = "SELECT pdtl.*,prj.*, fappl.*, ca.*,inv.* FROM first_applicant_personal_dtl_tbl fappl,co_applicant_tbl ca,inventory_tbl inv ,project_dtls_tbl pdtl , project_tbl prj WHERE inv.block=pdtl.block and prj.id=fappl.project_id and  pdtl.project_id=fappl.project_id and  fappl.id='$id' and inv.customer_id=fappl.id and ca.first_appl_id=fappl.id and pdtl.unit_type=inv.type";
        // print_r($sql);
        $r = $this->db->query($sql);
        return $r->result();
    }

    public function get_applparkinginfo($id) {



        $sql = "SELECT * FROM  parking_tbl  WHERE applicant_id='$id' ";
        // print_r($sql);
        $r = $this->db->query($sql);
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

    public function get_charge_amount() {
        $sql = "SELECT * from other_charges where charge_name = '5 Year Maintenance'";

        $r = $this->db->query($sql);
        return $r->result();
    }

    public function get_othercharge() {
        $sql = "SELECT SUM(charge_amount) as sum from other_charges where charge_name NOT IN('5 Year Maintenance')";

        $r = $this->db->query($sql);
        return $r->result_array();
    }

    public function get_foundation($uid) {

        $explode_data = explode('?', $uid);
        $applid = $explode_data[0];
        $projectid = $explode_data[1];
        $type = $explode_data[2];
        $block = $explode_data[3];


        $sql = "SELECT * FROM payment_stages_tbl where project_id='$projectid' and block='$type' and type ='$block'  and stage='FOUNDATION'";
        //  print_r('heloo'+$sql);
        log_message('info', $sql);
        $r = $this->db->query($sql);
        return $r->result();
    }

    public function get_PLINTH($uid) {

        $explode_data = explode('?', $uid);
        $applid = $explode_data[0];
        $projectid = $explode_data[1];
        $type = $explode_data[2];
        $block = $explode_data[3];


        $sql = "SELECT * FROM payment_stages_tbl where project_id='$projectid' and block='$type' and type ='$block'  and stage='PLINTH'";
        //  print_r('heloo'+$sql);
        log_message('info', $sql);
        $r = $this->db->query($sql);
        return $r->result();
    }

    public function get_GF_SLAB($uid) {

        $explode_data = explode('?', $uid);
        $applid = $explode_data[0];
        $projectid = $explode_data[1];
        $type = $explode_data[2];
        $block = $explode_data[3];


        $sql = "SELECT * FROM payment_stages_tbl where project_id='$projectid' and block='$type' and type ='$block'  and stage='GF SLAB'";
        //  print_r('heloo'+$sql);
        log_message('info', $sql);
        $r = $this->db->query($sql);
        return $r->result();
    }

    public function get_FF_SLAB($uid) {

        $explode_data = explode('?', $uid);
        $applid = $explode_data[0];
        $projectid = $explode_data[1];
        $type = $explode_data[2];
        $block = $explode_data[3];


        $sql = "SELECT * FROM payment_stages_tbl where project_id='$projectid' and block='$type' and type ='$block'  and stage='FF SLAB'";
        //  print_r('heloo'+$sql);
        log_message('info', $sql);
        $r = $this->db->query($sql);
        return $r->result();
    }

    public function get_BRICK_WORK($uid) {

        $explode_data = explode('?', $uid);
        $applid = $explode_data[0];
        $projectid = $explode_data[1];
        $type = $explode_data[2];
        $block = $explode_data[3];


        $sql = "SELECT * FROM payment_stages_tbl where project_id='$projectid' and block='$type' and type ='$block'  and stage='BRICK WORK'";
        //  print_r('heloo'+$sql);
        log_message('info', $sql);
        $r = $this->db->query($sql);
        return $r->result();
    }

    public function get_PLASTER_WORK($uid) {

        $explode_data = explode('?', $uid);
        $applid = $explode_data[0];
        $projectid = $explode_data[1];
        $type = $explode_data[2];
        $block = $explode_data[3];


        $sql = "SELECT * FROM payment_stages_tbl where project_id='$projectid' and block='$type' and type ='$block'  and stage='PLASTER WORK'";
        //  print_r('heloo'+$sql);
        log_message('info', $sql);
        $r = $this->db->query($sql);
        return $r->result();
    }

    public function get_PAINTING_FINISHING($uid) {

        $explode_data = explode('?', $uid);
        $applid = $explode_data[0];
        $projectid = $explode_data[1];
        $type = $explode_data[2];
        $block = $explode_data[3];


        $sql = "SELECT * FROM payment_stages_tbl where project_id='$projectid' and block='$type' and type ='$block'  and stage='PAINTING/FINISHING'";
        //  print_r('heloo'+$sql);
        log_message('info', $sql);
        $r = $this->db->query($sql);
        return $r->result();
    }

    public function get_POSSESSION($uid) {

        $explode_data = explode('?', $uid);
        $applid = $explode_data[0];
        $projectid = $explode_data[1];
        $type = $explode_data[2];
        $block = $explode_data[3];


        $sql = "SELECT * FROM payment_stages_tbl where project_id='$projectid' and block='$type' and type ='$block'  and stage='POSSESSION'";
        //  print_r('heloo'+$sql);
        log_message('info', $sql);
        $r = $this->db->query($sql);
        return $r->result();
    }

    public function show_project_info($data) {

        $project_id = $data['project_id'];


        // $sql = " SELECT inv.*,pdtl.project_name from inventory_tbl inv, project_tbl pdtl where inv.customer_id='$customer_id' and pdtl.id=inv.project_id";
        $sql = " select project_name from project_tbl where id='$project_id'  ";
        //print_r($sql);
        $r = $this->db->query($sql);
        return $r->result();
    }

    public function view_sheet1($pre_salesid) {


        $stmt = "SELECT * FROM presales_costcalculation_tbl WHERE prospect_id = $pre_salesid  ";
        // print_r($stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

    // for Foundation

    public function get_stage_foundation($unit_no) {

        $stmt = "SELECT * FROM payment_stages_tbl WHERE unit_no ='$unit_no'  and  stage='FOUNDATION' ";
        // print_r($stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

    // for PLINTH

    public function get_stage_plinth($unit_no) {

        $stmt = "SELECT * FROM payment_stages_tbl WHERE unit_no ='$unit_no'  and  stage='PLINTH' ";
        // print_r($stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

    // for GF SLAB

    public function get_stage_gfslab($unit_no) {

        $stmt = "SELECT * FROM payment_stages_tbl WHERE unit_no ='$unit_no'  and  stage='GF SLAB' ";
        // print_r($stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

    // for FF SLAB

    public function get_stage_ffslab($unit_no) {

        $stmt = "SELECT * FROM payment_stages_tbl WHERE unit_no ='$unit_no'  and  stage='FF SLAB' ";
        // print_r($stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

    // for BRICK WORK

    public function get_stage_brickwork($unit_no) {

        $stmt = "SELECT * FROM payment_stages_tbl WHERE unit_no ='$unit_no'  and  stage='BRICK WORK' ";
        // print_r($stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

    // for PLASTER WORK

    public function get_stage_pasterwork($unit_no) {

        $stmt = "SELECT * FROM payment_stages_tbl WHERE unit_no ='$unit_no'  and  stage='PLASTER WORK' ";
        // print_r($stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

    // for PAINTING/FINISHING

    public function get_stage_paintingfinishing($unit_no) {

        $stmt = "SELECT * FROM payment_stages_tbl WHERE unit_no ='$unit_no'  and  stage='PAINTING/FINISHING' ";
        // print_r($stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

    // for POSSESSION

    public function get_stage_possession($unit_no) {

        $stmt = "SELECT * FROM payment_stages_tbl WHERE unit_no ='$unit_no'  and  stage='POSSESSION' ";
        // print_r($stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

    // fatch stage amount new change for plot 24-02-2018
    public function get_RoadDevelopmentandSurfaceDrainNetwork($unit_no) {

        $stmt = "SELECT payable_amt FROM payment_stages_tbl WHERE unit_no ='$unit_no'  and  stage='Road Development and Surface  Drain Network' ";
        // print_r($stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function get_Electrical_Work($unit_no) {

        $stmt = "SELECT payable_amt FROM payment_stages_tbl WHERE unit_no ='$unit_no'  and  stage='Electrical Work' ";
        // print_r($stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function get_Sewer_Line_Network($unit_no) {

        $stmt = "SELECT payable_amt FROM payment_stages_tbl WHERE unit_no ='$unit_no'  and  stage='Sewer Line Network' ";
        // print_r($stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function get_WaterSupplyandGardenNetwork($unit_no) {

        $stmt = "SELECT payable_amt FROM payment_stages_tbl WHERE unit_no ='$unit_no'  and  stage='Water Supply and Garden Network' ";
        // print_r($stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

    // end new changes for plot 24-02-2018


    public function get_flat_booking($unit_no) {

        $stmt = "SELECT payable_amt FROM payment_stages_tbl WHERE unit_no ='$unit_no'  and  stage='BOOKING' ";
        // print_r($stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function get_Excavation_work($unit_no) {

        $stmt = "SELECT payable_amt FROM payment_stages_tbl WHERE unit_no ='$unit_no'  and  stage='EXCAVATION WORK' ";
        // print_r($stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function get_FLAT_stage_Foundation($unit_no) {
        $stmt = "SELECT * FROM payment_stages_tbl WHERE unit_no ='$unit_no'  and  stage='FOUNDATION' ";
        // print_r($stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function get_FLAT_stage_plinth($unit_no) {
        $stmt = "SELECT * FROM payment_stages_tbl WHERE unit_no ='$unit_no'  and  stage='PLINTH' ";
        // print_r($stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function get_FLAT_stage_First_Floor_Slab($unit_no) {

        $stmt = "SELECT * FROM payment_stages_tbl WHERE unit_no ='$unit_no'  and  stage='FIRST FLOOR SLAB' ";
        // print_r($stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function get_FLAT_stage_Second_Slab($unit_no) {
        $stmt = "SELECT * FROM payment_stages_tbl WHERE unit_no ='$unit_no'  and  stage='SECOND FLOOR SLAB' ";
        // print_r($stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function get_FLAT_stage_Third_Slab($unit_no) {
        $stmt = "SELECT * FROM payment_stages_tbl WHERE unit_no ='$unit_no'  and  stage='THIRD FLOOR SLAB' ";
        // print_r($stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function get_FLAT_stage_FOURTH_FLOOR_SLAB($unit_no) {
        $stmt = "SELECT * FROM payment_stages_tbl WHERE unit_no ='$unit_no'  and  stage='FOURTH FLOOR SLAB' ";
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function get_FLAT_stage_FIFTH_FLOOR_SLAB($unit_no) {
        $stmt = "SELECT * FROM payment_stages_tbl WHERE unit_no ='$unit_no'  and  stage='FIFTH FLOOR SLAB' ";
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function get_FLAT_stage_SIXTH_FLOOR_SLAB($unit_no) {
        $stmt = "SELECT * FROM payment_stages_tbl WHERE unit_no ='$unit_no'  and  stage='SIXTH FLOOR SLAB' ";
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function get_FLAT_stage_SEVENTH_FLOOR_SLAB($unit_no) {
        $stmt = "SELECT * FROM payment_stages_tbl WHERE unit_no ='$unit_no'  and  stage='SEVENTH FLOOR SLAB' ";
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function get_FLAT_stage_BRICK_WORK($unit_no) {
        $stmt = "SELECT * FROM payment_stages_tbl WHERE unit_no ='$unit_no'  and  stage='BRICK WORK' ";
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function get_FLAT_stage_PLASTER_WORK($unit_no) {
        $stmt = "SELECT * FROM payment_stages_tbl WHERE unit_no ='$unit_no'  and  stage='PLASTER WORK' ";
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function get_FLAT_stage_FLOORING_AND_FINISHING($unit_no) {
        $stmt = "SELECT * FROM payment_stages_tbl WHERE unit_no ='$unit_no'  and  stage='FLOORING AND FINISHING' ";
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function get_FLAT_stage_POSSESSION($unit_no) {
        $stmt = "SELECT * FROM payment_stages_tbl WHERE unit_no ='$unit_no'  and  stage='POSSESSION' ";
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function document_date($id) {

        $stmt = "SELECT date_of_document FROM documents_tbl WHERE applicant_id='$id' and doc_type like '%Agreement%'";
        // print_r($stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function getplotarea_info($data) {
        $plot_size_mtr = $data['plot_size_mtr'];
        $plot_size_ft = $data['plot_size_ft'];
        $project_id = $data['project_id'];
        $block = $data['block'];
        $type = $data['unit_type'];
        $category = $data['category'];

        $stmt = "SELECT plot_area FROM project_dtls_tbl WHERE plot_size_mtr='$plot_size_mtr' and plot_size_ft='$plot_size_ft' and project_id='$project_id' and block='$block' and unit_type='$type' and category='$category'";
        //  print_r($stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function view_project_info($data) {

        $plot_size_mtr = $data['plot_size_mtr'];
        $plot_size_ft = $data['plot_size_ft'];
        $project_id = $data['project_id'];
        $block = $data['block'];
        $unit_type = $data['unit_type'];
        $category = $data['category'];

        $stmt = "SELECT * FROM project_dtls_tbl WHERE project_id = '$project_id' and block='$block' and unit_type='$unit_type' and category='$category' and plot_size_mtr='$plot_size_mtr' and plot_size_ft='$plot_size_ft' ";
        //print_r($stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

}

?>