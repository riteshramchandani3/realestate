<?php

/*
 * Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential.
 * Written by Oga Technologies, October 1,  2016.
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

    public function get_all_info() {
        return $this->db->get('inventory_tbl')->result();
    }

    public function days15_site_report() {
        return $this->db->get('site_report_tbl')->result();
    }

    public function project_dtls() {
        $a = $this->db->get('project_tbl');
        return $a->result();
    }

    public function getblocksbyproject($prid) {
        $this->db->select('block');
        $this->db->from('project_tbl');
        $this->db->where('id', $prid);
        $r = $this->db->get();
        return $r->row()->block;
    }

    public function findtype($data) {
        $pid = $data['projectid'];
        $blid = $data['blockid'];
        $stmt = "select distinct(unit_type) from project_dtls_tbl where (project_id='$pid') and (block='$blid')";
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function get_stages_for_type($type) {
      
        $sql = "SELECT stage from site_stages_tbl where type='" . $type . "'";
        log_message('DEBUG', '&&&&&&&&&&&&&&&&&  ' . $sql);
        $r = $this->db->query($sql);
        return $r->result();
    }

    public function get_stage_count($pid, $block, $type, $stage) {
        $sql = "SELECT COUNT(*) as count FROM site_report_tbl WHERE project_id=" . $pid . " and block='" . $block . "' and type='" . $type . "' and stage='" . $stage . "'";
        log_message('DEBUG', '%%%%%%%%%%' . $sql);
        $result = $this->db->query($sql);
        return $result->row();
    }

    public function get_booking_status($type) {
       
        $sql = "SELECT distinct(status) from inventory_tbl where type='" . $type . "'";
        log_message('DEBUG', '&&&&&&&&&&&&&&&&&  ' . $sql);
        $r = $this->db->query($sql);
        return $r->result();
    }

    public function get_status_count($pid, $block, $type, $status) {
        $sql = "SELECT  COUNT(*) as count FROM `inventory_tbl` WHERE project_id=" . $pid . " and block='" . $block . "' and type='" . $type . "' and status='" . $status . "'";
        log_message('DEBUG', '%%%%%%%%%%' . $sql);
        $result = $this->db->query($sql);
        return $result->row();
    }

    public function getblocksbyprojectbooking($prid) {
        $this->db->select('block');
        $this->db->from('project_tbl');
        $this->db->where('id', $prid);
        $r = $this->db->get();
        return $r->row()->block;
    }

    public function findtypebooking($data) {
        $pid = $data['projectid'];
        $blid = $data['blockid'];
        $stmt = "select distinct(unit_type) from project_dtls_tbl where (project_id='$pid') and (block='$blid')";
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function total_sale_unit() {
        $stmt = "SELECT COUNT(*) as count FROM inventory_tbl where status='BOOKED'";
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function total_payment() {
        $stmt = "SELECT sum(advance) FROM payment_receipt";
        $r = $this->db->query($stmt);
        return $r->result_array();
    }

    public function total_project_name() {
        $stmt = "SELECT id,project_name FROM project_tbl pdtl";
        $r = $this->db->query($stmt);
        return $r->result_array();
    }

    public function total_sale_value() {

        $sql = "SELECT sum(cost_payable_to_company) FROM inventory_tbl WHERE status='BOOKED'";
        //print_r($sql);
        $r = $this->db->query($sql);
        return $r->result_array();
    }

    public function total_demand() {

        $sql = "SELECT sum(amount1) FROM demand_letter_tbl";
        //print_r($sql);
        $r = $this->db->query($sql);
        return $r->result_array();
    }

    // new code

    public function get_sold_vs_avail() {
        //return $this->db->get('inventory_tbl')->result();
        $data = array();
        $stmt = "SELECT COUNT(*) as sold_count FROM inventory_tbl WHERE status = 'BOOKED'";
        $stmt1 = "SELECT COUNT(*) as available_count FROM inventory_tbl WHERE status = 'AVAILABLE'";

        $sold = $this->db->query($stmt);
        $rows = $sold->result_array();
        foreach ($rows as $row) {
            $data['BOOKED'] = $row['sold_count'];
            error_log("&&&&&&&&&&&&" . $data['BOOKED']);
        }
        $avail = $this->db->query($stmt1);
        $rows = $avail->result_array();
        foreach ($rows as $row) {
            $data['AVAILABLE'] = $row['available_count'];
            error_log("&&&&&&&&&&&&" . $data['AVAILABLE']);
        }
        return $data;
    }

    public function get_monthlybooking() {
        $data = array();
        for ($x = 1; $x <= 12; $x++) {
            $stmt1 = "select Count(status) as count   From  inventory_tbl inv,first_applicant_personal_dtl_tbl fappl where (inv.customer_id=fappl.id) and (inv.status='BOOKED') and MONTH(fappl.date)=".$x;
            error_log("^^^^^^^^^^^^^" . $stmt1);
            $booked = $this->db->query($stmt1);
            $rows = $booked->result_array();
            foreach ($rows as $row) {
                $data[$x] = $row['count'];
                error_log("^^^^^^^^^^^^^");
                error_log("^^^^^^^^^^^^^" . $data[$x]);
            }
        }

        return $data;
    }

}

?>