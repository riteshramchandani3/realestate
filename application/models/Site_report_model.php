<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential.
 * Written by Oga Technologies, October 1,  2016.
 */

class Site_report_model extends CI_Model {

    public function get_stage() {

        $sql = "select stage from site_stages_tbl";
        $r = $this->db->query($sql);
        return $r->result();
    }

    public function project_tbl() {
        $a = $this->db->get('project_tbl');
        return $a->result();
    }

    public function generate_demand_letter_for_flat($data2) {
        $project_name = trim($data2['project_name']);
        $unit_no = trim($data2['unit_no']);
        $block = trim($data2['block']);
        $type = trim($data2['type']);
        $stage = trim($data2['stage']);
        $appl_id = trim($data2['appl_id']);
        $amount = trim($data2['amount']);
        $current_date = trim($data2['current_date']);
        $sql = "INSERT INTO demand_letter_tbl(appl_id, unit_no,type,project_name,block,stage,current_date,amount) VALUES (" . $this->db->escape($appl_id) . ", " . $this->db->escape($unit_no) . ", " . $this->db->escape($type) . ", " . $this->db->escape($project_name) . ", " . $this->db->escape($block) . ", " . $this->db->escape($stage) . ", " . $this->db->escape($current_date) . ", " . $this->db->escape($amount) . ")";
        $r = $this->db->query($sql);
        return $r->result();
    }

    public function get_stages_for_type($type) {

        $sql = "SELECT stage from site_stages_tbl where type='" . $type . "'";
        log_message('DEBUG', '&&&&&&&&&&&&&&&&&  ' . $sql);
        $r = $this->db->query($sql);
        return $r->result();
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

    public function get_stage_count($pid, $block, $type, $stage) {
        $sql = "SELECT COUNT(*) as count FROM site_report_tbl WHERE project_id=" . $pid . " and block='" . $block . "' and type='" . $type . "' and stage='" . $stage . "'";
        log_message('DEBUG', '%%%%%%%%%%' . $sql);
        $result = $this->db->query($sql);
        return $result->row();
    }

//------------------------bussiness logic for dashboard-------END-------------------
//*****************bussiness logic for site report uc*******(18-08-2017) START*************************//
//***********************Add Site stage Model Start***************//
    public function site_unit_no() {
        $a = $this->db->get('inventory_tbl');
        return $a->result();
    }

//***********************Add Project Detail Model (Get project Blocks) Start***************//

    public function getblocksbyproject($prid) {

        $this->db->where('id', $prid);
        $r = $this->db->get('project_tbl');
        return $r->row()->block;

    }

    public function get_stage_by_type($typeid) {
        $typeid = $typeid;

        $stmt = "select DISTINCT(sst.stage) from site_stages_tbl sst,inventory_tbl invt where sst.type='$typeid' AND invt.type='$typeid'";

        $r = $this->db->query($stmt);
        return $r->result();
    }

 /* old code tanu 
  *  public function get_the_following_stages($data) {
        $project_id = trim($data['project_id']);
        $block = trim($data['block']);
        $type = trim($data['type']);
        $category = trim($data['category']);
        $unit_no = trim($data['unit_no']);

//$stmt = "select DISTINCT(sst.stage) from site_stages_tbl sst,inventory_tbl invt where sst.type='$typeid' AND invt.type='$typeid'";
        $stmt = "select srt.stage from site_stages_tbl srt where srt.project_id=$project_id and srt.block='" . $block . "' and srt.type='" . $type . "' and srt.unit_no='" . $unit_no . "'";
        print_r($stmt);
        $r = array();
        $r = $this->db->query($stmt);
        if ($r->row() != NULL) {
            $curr_stage = $r->row()->stage;
            $stmt_1 = "SELECT stage from site_stages_tbl where type='" . $type . "' and step_no > (select step_no from site_stages_tbl where stage='" . $curr_stage . "' and type='" . $type . "' )";
            log_message('info', $stmt_1);
            $s = $this->db->query($stmt_1);
            return $s->result_array();
        } else {
            $stmt_2 = "SELECT stage from site_stages_tbl where type='" . $type . "'";
            // log_message('info', $stmt_2);
            $s = $this->db->query($stmt_2);
            return $s->result_array();
        }
    }*/
    //new code according to phase-1 show all stage according to payment stage tbl 
    public function get_the_following_stages($data) {
        $project_id = trim($data['project_id']);
        $block = trim($data['block']);
        $type = trim($data['type']);
        $category = trim($data['category']);
        $unit_no = trim($data['unit_no']);

//$stmt = "select DISTINCT(sst.stage) from site_stages_tbl sst,inventory_tbl invt where sst.type='$typeid' AND invt.type='$typeid'";
        $stmt = "select srt.stage from payment_stages_tbl srt where srt.project_id=$project_id and srt.block='" . $block . "' and srt.type='" . $type . "' and srt.unit_no='" . $unit_no . "'";
               $r = $this->db->query($stmt);
        return $r->result_array();
    }

//***********************Add Project Detail Model (Get project Blocks) End***************//


    public function get_site_stage($data) {
        $this->db->insert('site_stages_tbl', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

//***********************Add Site stage Model End***************// 
//***********************Display Existing Site stage Model(Add Site stage) Start***************//    

    public function get_all_site_stage() {
        $r = $this->db->get('site_stages_tbl');
        return $r->result();
    }

//***********************Display Existing Site stage Model(Add Site stage) End***************// 
//***********************Delete Existing Site stage Model(Add Site stage) Start***************//      

    public function site_stage_remove_by_id($id) {
        $this->db->where('id', $id);
        $this->db->delete('site_stages_tbl');
        return true;
    }

//***********************Delete Existing Site stage Model(Add Site stage) End***************// 
//***********************Site Report Model(Get stage) from site_stage_tbl Start**********************//  

    public function site_report_table() {
        $stmt = "select distinct(stage) from site_stages_tbl";
        log_message('info', $stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

//***********************Site Report Model(Get stage) from site_stage_tbl End**********************//  
//***********************Site Report Model(Get Type) from site_stage_tbl Start**********************//

    public function get_site_report_type() {
        $stmt = "select distinct(type) from inventory_tbl";
        log_message('info', $stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function get_stage_unit_no($data) {
        $stmt = "select distinct(invt.unit_no) from inventory_tbl invt,site_stages_tbl sst where invt.type='Duplex' AND sst.type='INDEP''";
//log_message('info', $stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

//***********************Site Report Model(Get Type) from site_stage_tbl End**********************// 
//
    public function get_unit_num($data) {

        $type = trim($data['type']);

        $stmt = "select unit_no from inventory_tbl invt where type='$type'";

        $r = $this->db->query($stmt);
        return $r->result();
    }

//*******************************Payable stage input query by Nirbhay Start************//

    public function getPayment_stageInput($data) {
        $this->db->insert('payable_stage_tbl', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

//*******************************Payable stage input query by Nirbhay Start************//   
//************************(18-08-2017) END*************************//
    public function findunitno($data) {

        $projectid = trim($data['project_id']);
        $block = trim($data['block']);
        $type = trim($data['type']);
        $stmt = "select unit_no from inventory_tbl where (project_id='$projectid') and (block='$block') and (type = '$type') and (status='BOOKED')";

        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function getunitno_flat($data) {

        $projectid = trim($data['project_id']);
        $block = trim($data['block']);
        $type = trim($data['type']);
        $stmt = "SELECT unit_no, customer_id FROM inventory_tbl WHERE project_id='" . $projectid . "' and block='" . $block . "' and type like '" . $type . "' and status='BOOKED'";

        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function get_all_unit_type() {
        $r = $this->db->get('unit_type_tbl');
        return $r->result();
    }

//************************26-08-2017***********************
    public function findtype($data) {
        $pid = trim($data['projectid']);
        $blid = trim($data['blockid']);
        $stmt = "select distinct(unit_type) from project_dtls_tbl where (project_id='$pid') and (block='$blid')";
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function demo_is_project_dtl_present($data) {
        $projectid = trim($data['project_id']);
        $block = trim($data['block']);
        $type = trim($data['type']);
        $unit_no = trim($data['unit_no']);
        $stage = trim($data['stage']);
//check if project detail already exists
        if ($type == "Duplex") {
            $sql = "SELECT count(*) as count FROM site_report_tbl WHERE project_id='$projectid 'and block like '$block' and type like '$type' and unit_no like '$unit_no' and  stage like '$stage'";
            $result = $this->db->query($sql)->row_array();

            if ($result['count'] == 0) {
                return FALSE;
            } else {
                return TRUE;
            }
        } else if ($type == "Flat") {
            $sql = "SELECT count(*) as count FROM site_report_tbl WHERE project_id='$projectid 'and block like '$block' and type like '$type' and  stage like '$stage'";
            $result = $this->db->query($sql)->row_array();

            if ($result['count'] == 0) {
                return FALSE;
            } else {
                return TRUE;
            }
        }
    }

    public function get_applicant_id($data) {

        $project_id = trim($data['project_id']);
        $block = trim($data['block']);
        $type = trim($data['type']);
        $unit_no = trim($data['unit_no']);
        if ((strcasecmp($data['type'], "Duplex") == 0)) {
            $stmt = "select customer_id from inventory_tbl where (project_id='" . $project_id . "') and (block='" . $block . "') and (type = '" . $type . "') and ( unit_no ='" . $unit_no . "')  and (status='BOOKED')";

            $r = $this->db->query($stmt);
            return $r->result();
        } else if (strcasecmp(trim($data['type']), "Flat") == 0) {
            $stmt = "select customer_id from inventory_tbl where (project_id='" . $project_id . "') and (block='" . $block . "') and (type = '" . $type . "') and (status='BOOKED')";

            $r = $this->db->query($stmt);
            return $r->result();
        }

    }

    public function get_payable_amount($data) {

        $project_id = trim($data['project_id']);
        $block = trim($data['block']);
        $type = trim($data['type']);
        $unit_no = trim($data['unit_no']);
        $stage = trim($data['stage']);
        if ((strcasecmp(trim($data['type']), "Flat") == 0)) {
            $stmt = "select pst.payable_amt from payment_stages_tbl pst where pst.project_id='$project_id' AND pst.block='$block' and pst.type='$type' pst.stage='$stage'";

            $r = $this->db->query($stmt);
            return $r->result();
        }
    }

    public function get_applicant_info() {

        $sql = "select customer_id from inventory_tbl where (project_id='1 ') and (block='Block A') and (type = 'Duplex') and ( unit_no ='101')  and (status='BOOKED')";
        //print_r('heloo' + $sql);
        log_message('info', $sql);
        $r = $this->db->query($sql);
        return $r->result_array();
    }

//------------------------bussiness logic for dashboard-------START-------------------

    public function report_site_and_gen_dl($data) {
        $final_amt = $data['final_amt'];
        $retval = false;
        $this->db->trans_begin();
        // code for storing Site Report in site_reoprt_tbl --- START ----

        $sql = "UPDATE site_report_tbl SET stage='" . $data['stage'] . "',date='" . $data['date'] . "' where project_id='" . $data['project_id'] . "'";
        $sql = $sql . " AND block='" . $data['block'] . "'";
        $sql = $sql . " AND type='" . $data['type'] . "'";


        if ((strcasecmp($data['type'], "Duplex") == 0) || (strcasecmp($data['type'], "Shop") == 0) || (strcasecmp($data['type'], "Row House") == 0) || (strcasecmp($data['type'], "Plot") == 0)) {
            $sql = $sql . " AND unit_no='" . $data['unit_no'] . "'";
        }
        $out_data = $data['stage'];
        $this->db->query($sql);
        if ($this->db->affected_rows() > 0) {

            $retval = true;
        } else
        if ($this->db->affected_rows() <= 0) {
            // row not found so insert report
            $insql = "INSERT into site_report_tbl(project_id,block,type,stage,date)values(";
            $insql = $insql . $data['project_id'] . ", ";
            $insql = $insql . "'" . $data['block'] . "', ";
            $insql = $insql . "'" . $data['type'] . "', ";


            if ((strcasecmp($data['type'], "Duplex") == 0) || (strcasecmp($data['type'], "Shop") == 0) || (strcasecmp($data['type'], "Row House") == 0) || (strcasecmp($data['type'], "Plot") == 0)) {
                $insql = "INSERT into site_report_tbl(project_id,block,type,unit_no,stage,date)values(";
                $insql = $insql . $data['project_id'] . ", ";
                $insql = $insql . "'" . $data['block'] . "', ";
                $insql = $insql . "'" . $data['type'] . "', ";

                $insql = $insql . "'" . $data['unit_no'] . "', ";
            }
            $insql = $insql . "'" . $data['stage'] . "',";
            $insql = $insql . "'" . $data['date'] . "') ";
            $this->db->query($insql);
        }
        $data1 = array();
        $data1 = $data;

        log_message("DEBUG", "ZZZZZZZ:: NOW Generating Demand....");
        // getting payable amount from payment_stages_tbl
        $get_pay_amt = "select payable_amt from payment_stages_tbl where project_id=" . $data1['project_id'] . " AND block='" . $data1['block'];
        $get_pay_amt = $get_pay_amt . "' and type like '%" . $data1['type'] . "%'";
        $get_pay_amt = $get_pay_amt . " and unit_no= '" . $data1['unit_no'] . "'";
        //$get_pay_amt = $get_pay_amt . " and category like '%" . $data1['category'] . "%'";
        $get_pay_amt = $get_pay_amt . " and stage like '%" . $data1['stage'] . "%'";
        //log_message("DEBUG", "QQQQ:: " . $get_pay_amt);
        $query = $this->db->query($get_pay_amt);
        //log_message("DEBUG", $query->result());
        foreach ($query->result() as $row) {
            $pay_amt = $row->payable_amt;
        }
        $get_id_unit = "SELECT unit_no, customer_id FROM inventory_tbl WHERE project_id=" . $data1['project_id'];
        $get_id_unit = $get_id_unit . " and block='" . $data1['block'] . "'";
        $get_id_unit = $get_id_unit . " and unit_no='" . $data1['unit_no'] . "'";
        $get_id_unit = $get_id_unit . " and type like '%" . $data1['type'] . "%'";
        //$get_id_unit = $get_id_unit . " and category like '%" . $data1['category'] . "%'";
        $get_id_unit = $get_id_unit . " and status='BOOKED'";
        $r = $this->db->query($get_id_unit)->result_array();
        $qu = $this->db->query($get_id_unit);
        //log_message("DEBUG", $query->result());
        foreach ($qu->result() as $row) {
            $cust_id = $row->customer_id;
        }
        $date = $this->input->post('date');
        //new code
        $due_date = date('Y-m-d', strtotime($date . ' + 15 days'));

        if (strcasecmp($data1['type'], "Duplex") == 0) {
     
            $current_stage = $data['stage'];
            $type = $data['type'];

            //  if ($current_stage != 'FOUNDATION') {
            if ($current_stage != 'BOOKING') {
                $sql = "select stage from site_stages_tbl where (type='$type') and step_no IN((select step_no from site_stages_tbl where (stage='$current_stage') and (type='$type'))-1)";
                $p = $this->db->query($sql);
                $pp = $p->row();
                $prev_stage = $pp->stage;

                $appl_id = $data['customer_id'];
            
                $bal_amt = 0;
             
                $ins_dl = "INSERT into demand_letter_tbl(appl_id, unit_no, type, project_name, block, stage,`current_date`,`due_date`, amount,amount1,image_path,adv_amt)values('" . $cust_id . "','" . $data1['unit_no'] . "','" . $data1['type'] . "','" . $data1['project_id'] . "','" . $data1['block'] . "','" . $data1['stage'] . "','" . $data1['current_date'] . "','" . $due_date . "','" . $final_amt . "','" . $final_amt . "','" . $data1['image_path'] . "','" . $bal_amt . "')";
            } ELSE {
            
                $ins_dl = "INSERT into demand_letter_tbl(appl_id, unit_no, type, project_name, block, stage,`current_date`,`due_date`, amount,amount1,image_path,adv_amt)values('" . $cust_id . "','" . $data1['unit_no'] . "','" . $data1['type'] . "','" . $data1['project_id'] . "','" . $data1['block'] . "','" . $data1['stage'] . "','" . $data1['current_date'] . "','" . $due_date . "','" . $final_amt . "','" . $final_amt . "','" . $data1['image_path'] . "','" . $bal_amt . "')";
            }
  
            $this->db->query($ins_dl);
        } else if ((strcasecmp($data1['type'], "Flat") == 0)) {
            $unit_count = 0;
            foreach ($r as $row) {
                $ins_dl_sql = "INSERT into demand_letter_tbl(appl_id, unit_no, type, project_name, block, stage,`current_date`,`due_date`, amount,amount1,image_path)values(" . $row['customer_id'] . ",'" . $row['unit_no'] . "','" . $data1['type'] . "'," . $data1['project_id'] . ",'" . $data1['block'] . "','" . $current_stage . "','" . $data1['current_date'] . "','" . $due_date . "'," . $final_amt . "," . $final_amt . "," . $data['image_path'] . ")";
                $this->db->query($ins_dl_sql);
                $unit_count++;
            }
        }

        else if ((strcasecmp($data1['type'], "Plot") == 0)) {
            $get_id_unit = "SELECT unit_no, customer_id FROM inventory_tbl WHERE project_id=" . $data1['project_id'];
            $get_id_unit = $get_id_unit . " and block='" . $data1['block'] . "'";
            $get_id_unit = $get_id_unit . " and type like '%" . $data1['type'] . "%'";
            $get_id_unit = $get_id_unit . " and category like '%" . $data1['category'] . "%'";
            $get_id_unit = $get_id_unit . " and status='BOOKED'";
            $r = $this->db->query($get_id_unit)->result_array();
            $current_stage = $data['stage'];
            foreach ($r as $row) {
                $ins_dl_sql = "INSERT into demand_letter_tbl(appl_id, unit_no, type, project_name, block, stage,`current_date`,`due_date`, amount,amount1,image_path)values(" . $row['customer_id'] . ",'" . $row['unit_no'] . "','" . $data1['type'] . "'," . $data1['project_id'] . ",'" . $data1['block'] . "','" . $current_stage . "','" . $data1['current_date'] . "','" . $due_date . "'," . $final_amt . "," . $final_amt . ",'" . $data['image_path'] . "')";
                $this->db->query($ins_dl_sql);
            }
        }
        if ($this->db->trans_status() == FALSE) {
            $this->db->trans_rollback();
            $retVal = false;
        } else {
            $this->db->trans_commit();
            $retVal = true;
        }
        return $retVal;
    }

    // code for storing Site Report in site_reoprt_tbl --- END ----
    //utility function for calculating date---
    //this code is to generate the DL for multiple Stage DL
    //the above code is for generating the DL for multiple stage


    public function due_date($curr_date) {

        $dt = new DateTime($curr_date, new DateTimeZone("Asia/Kolkata"));
        $dt->format("Y-m-d");
        $delay_days = $this->Company_info_model->get_attribute_value("DL_Payment_Period");
        $hrs = 24 * $delay_days;
        $dt->modify("+" . $hrs . " hours");
        return $dt->format("Y-m-d");
    }

    public function findcategory($data) {

        $project_id = trim($data['project_id']);
        $block = trim($data['block']);
        $type = trim($data['unit_type']);
        $stmt = "select DISTINCT(category) from project_dtls_tbl where project_id='" . $project_id . "' and block='" . $block . "' and unit_type='" . $type . "' ";

        //log_message('info', $stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function custom_id($data) {

        $projectid = trim($data['project_id']);
        $block = trim($data['block']);
        $type = trim($data['type']);
        $unit_no = trim($data['unit_no']);
        $stmt = "select customer_id from inventory_tbl where (project_id='$projectid') and (block='$block') and (type = '$type')and (unit_no='$unit_no') and (status='BOOKED')";

        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function custom_id1($customer_id) {

        $stmt = "select inv.*,fappl.*,ca.* from inventory_tbl inv , first_applicant_personal_dtl_tbl fappl , co_applicant_tbl ca where (inv.customer_id='$customer_id') and fappl.id=inv.customer_id  and fappl.id = ca.first_appl_id and inv.customer_id = ca.first_appl_id";

        // print_r($stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }
    
    public function get_project_name($pid) {

        $stmt = "select project_name from project_tbl where id='$pid'";

        // print_r($stmt);
        $r = $this->db->query($stmt);
        $s = $r->row();
        $pname = $s->project_name;
        return $pname;
    }

    public function get_stage_amt($data1) {
//  print_r($data);
        $unit_no = $data1['unit_no'];
        $stage = $data1['stage'];

        $stmt = "select * from payment_stages_tbl where (unit_no='$unit_no') and stage='$stage'";
        $r = $this->db->query($stmt);
        return $r->result();
    }
    public function get_stagedl_amt($data1) {
//  print_r($data);
        $unit_no = $data1['unit_no'];
        $stage = $data1['stage'];

        $stmt = "select * from demand_letter_tbl where (unit_no='$unit_no') and stage='$stage'";
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function get_Check_pjt($project_id) {
        $sql = "SELECT status from project_tbl where id='$project_id'";

        $r = $this->db->query($sql);
        return $r->result();
    }

    public function get_stage_amt1($data1) {
//  print_r($data);
        $unit_no = $data1['unit_no'];
        $stage = $data1['stage'];

        $stmt = "select step_no,payable_amt from payment_stages_tbl where (unit_no='$unit_no') ";

        $r = $this->db->query($stmt);
        return $r->result_array();
    }

    public function get_stage_step_no($data1) {

        $unit_no = $data1['unit_no'];
        $stage = $data1['stage'];

        $stmt = "select step_no from payment_stages_tbl where (unit_no='$unit_no') and stage='$stage' ";
        //  print_r($stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function get_dlstage($data1) {
//  print_r($data);
        $unit_no = $data1['unit_no'];
        $stmt = "select sit.step_no ,dl.amount,dl.adv_amt from demand_letter_tbl dl ,site_stages_tbl sit where (dl.unit_no='$unit_no') and dl.stage=sit.stage and dl.type=sit.type  ORDER BY sit.step_no DESC";
        $r = $this->db->query($stmt);
        return $r->result();
    }

    //new
//-------------------------


    public function generate_DL_for_Duplex($curr_step, $next_step, $data) {

        $success = false;
        $appl_id = $data['customer_id'];
        $unit_no = $data['unit_no'];
        $type = $data['type'];
        $proj_name = $data['project_id'];
        $block = $data['block'];
        $stage = $data['stage'];
        $curr_date = $data['curr_date'];
        $due_date = $data['due_date'];

        $previous_old_due = $data['previous_due'];   //Ashwin
        $previous_old_adv = $data['previous_adv'];    //Ashwin

        $due_amt = 0;
        $adv_amt = 0;
        $totalupperdue = 0;
        $img_path = $data['image_path'];
        $secondlast = $next_step - 1;
        //  print_r($data);
        $this->db->trans_begin();
        for ($i = $curr_step; $i <= $next_step; $i++) {
            $Dl_amt = 0;
            $sql_get_demand = "SELECT payable_amt, stage,step_no from payment_stages_tbl where step_no =" . $i . " AND type='$type' AND " .
                    "unit_no = '" . $unit_no . "'";
            $result = $this->db->query($sql_get_demand);
            $r = $result->row();
            $stage_demand = $r->payable_amt;
            $stage = $r->stage;

            $step_no = $r->step_no;
            $payable_amt = $stage_demand;

            //now we are adding the total sum  //Ashwin

            $totalupperdue += $payable_amt;    //Ashwin
            if ($next_step == $i) {
                //RETURN "JOHNY checked";
                ///////////////GET PREVIPUE DUE AND ADVANCE ADJUSTMENT 

                $ppr = "select sum(amount) as 'sumdueprevious',sum(adv_amt) as 'sumadvprevious' from demand_letter_tbl where unit_no='$unit_no' and step_no BETWEEN 1 and $curr_step-1";
                //return $ppr;
                $p = $this->db->query($ppr);
                $ss = $p->row();
                $pdue = $ss->sumdueprevious;
                $padv = $ss->sumadvprevious;
        
                $sql_get = "SELECT sum(payable_amt) as payable_amt from payment_stages_tbl where step_no BETWEEN  $curr_step and $next_step and unit_no='$unit_no'";
                //    RETURN $sql_get;
                $result1 = $this->db->query($sql_get);
                $r1 = $result1->row();
                $payable_amt11 = $r1->payable_amt;

                 
                if ($padv >= $payable_amt11) {
                    $newcurrentadv = $padv - $payable_amt11;
                    $payable_amt1 = 0;
                    $due_amt = 0;
                    //$ssjl =  "update demand_letter_tbl set adv_amt = '$newcurrentadv' where unit_no='$unit_no' and step_no='$next_step'";
                    $sql_get1 = "SELECT stage, step_no  from payment_stages_tbl where step_no ='$next_step' AND unit_no='$unit_no' ";
            
                    $result11 = $this->db->query($sql_get1);
                    $r11 = $result11->row();

                    $stage1 = $r11->stage;
                    $step_no1 = $r11->step_no;


                   $payable_amt1=0;
                   $due_amt=0;

                    $sql = "INSERT INTO demand_letter_tbl(" .
                            "appl_id, unit_no,type, project_name,block,stage,step_no,currents_date,due_date,amount," .
                            "amount1,due_amount,image_path,adv_amt,cumulative_amt) VALUES(" .
                            $appl_id . ",'" . $unit_no . "','" . $type . "'," . $proj_name . ",'" .
                            $block . "','" . $stage1 . "'," . $step_no1 . ",'" . $curr_date . "','" . $due_date . "'," . $payable_amt1 .
                            "," . $payable_amt . "," . $due_amt . ",'" . $img_path . "'," . $newcurrentadv . "," . $payable_amt1 . ")";
                    $r = $this->db->query($sql);

                } else if($pdue > 0)
                {
                     $newcurrentdue = $payable_amt11+$pdue;
                     $newcurrentadv1=0;
                     $newcurrentdue1=0;
                      $sql_get1 = "SELECT stage, step_no  from payment_stages_tbl where step_no ='$next_step' AND unit_no='$unit_no' ";
     
                    $result11 = $this->db->query($sql_get1);
                    $r11 = $result11->row();

                    $stage1 = $r11->stage;
                    $step_no1 = $r11->step_no;
                   
                $sql22 = "INSERT INTO demand_letter_tbl(" .
                            "appl_id, unit_no,type, project_name,block,stage,step_no,currents_date,due_date,amount," .
                            "amount1,due_amount,image_path,adv_amt,cumulative_amt) VALUES(" .
                            $appl_id . ",'" . $unit_no . "','" . $type . "'," . $proj_name . ",'" .
                            $block . "','" . $stage1 . "'," . $step_no1 . ",'" . $curr_date . "','" . $due_date . "'," . $newcurrentdue .
                            "," . $payable_amt . "," . $newcurrentdue1 . ",'" . $img_path . "'," . $newcurrentadv1 . "," . $newcurrentdue . ")";
                    $r22 = $this->db->query($sql22);

                } else if($padv < $payable_amt11) {
                    $newcurrentadv = $payable_amt11 - $padv;
                    $newcurrentadv1 = 0;



                    $sql_get1 = "SELECT stage, step_no  from payment_stages_tbl where step_no ='$next_step' AND unit_no='$unit_no' ";
                    //return $sql_get1;
                    $result11 = $this->db->query($sql_get1);
                    $r11 = $result11->row();

                    $stage1 = $r11->stage;
                    $step_no1 = $r11->step_no;

                    $sql = "INSERT INTO demand_letter_tbl(" .
                            "appl_id, unit_no,type, project_name,block,stage,step_no,currents_date,due_date,amount," .
                            "amount1,due_amount,image_path,adv_amt,cumulative_amt) VALUES(" .
                            $appl_id . ",'" . $unit_no . "','" . $type . "'," . $proj_name . ",'" .
                            $block . "','" . $stage1 . "'," . $step_no1 . ",'" . $curr_date . "','" . $due_date . "'," . $newcurrentadv .
                            ",'" . $payable_amt . "'," . $due_amt . ",'" . $img_path . "','" . $newcurrentadv1 . "'," . $newcurrentadv . ")";
                    $r = $this->db->query($sql);
                } else
                {
                    
                }

                $payable_amt1 = $payable_amt11 + $pdue;

                $update_dl = "UPDATE demand_letter_tbl SET amount=0,due_amount=0,adv_amt=0 where unit_no='$unit_no' and step_no BETWEEN 1 and $curr_step-1";
                //  return $update_dl;
                $rs1 = $this->db->query($update_dl);
            } else {
                $due_amt = 0;
                $adv_amt = 0;
                $new_amt = 0;
                $sql = "INSERT INTO demand_letter_tbl(" .
                        "appl_id, unit_no,type, project_name,block,stage,step_no,currents_date,due_date,amount," .
                        "amount1,due_amount,image_path,adv_amt) VALUES(" .
                        $appl_id . ",'" . $unit_no . "','" . $type . "'," . $proj_name . ",'" .
                        $block . "','" . $stage . "'," . $step_no . ",'" . $curr_date . "','" . $due_date . "'," . $new_amt .
                        "," . $payable_amt . "," . $due_amt . ",'" . $img_path . "'," . $adv_amt . ")";
                $r = $this->db->query($sql);
            }

        }
        $overall_complete_percent = 0;
        if ($curr_step == 1) {
            $stmt = "insert into site_report_tbl (" .
                    "project_id,unit_no, block,type,stage,date,overall_complete_percent) VALUES('" . $proj_name . "','" . $unit_no . "','" . $block . "','" .
                    $type . "','" . $stage . "','" . $curr_date . "'," . $overall_complete_percent . ")";
            $rv = $this->db->query($stmt);
        } else {

            $update_stage = "UPDATE site_report_tbl SET stage='$stage' , date='$curr_date' where unit_no='$unit_no' ";
            $rs = $this->db->query($update_stage);
        }

        if ($this->db->trans_status() == FALSE) {
            $this->db->trans_rollback();
            $success = false;
        } else {
            $this->db->trans_commit();
            $success = true;
        }

        return $success;
    }

    public function get_dl_stage_desc_step_no($data) {

        $unit_no = $data['unit_no'];
        $stmt = " select  MAX(pay.step_no) as step_no from payment_stages_tbl pay , demand_letter_tbl dl where dl.unit_no='$unit_no' and dl.stage = pay.stage and dl.unit_no = pay.unit_no  ORDER BY pay.step_no DESC ";
        // print_r($stmt);
        $r = $this->db->query($stmt);
        return $r->result_array();
    }

    public function get_dl_stage_asc_step_no($data) {

        $unit_no = $data['unit_no'];
        $stmt = " select  Min(pay.step_no) as step_no from payment_stages_tbl pay , demand_letter_tbl dl where dl.unit_no='$unit_no' and dl.stage = pay.stage and dl.unit_no = pay.unit_no  ORDER BY pay.step_no ASC ";
        // print_r($stmt);
        $r = $this->db->query($stmt);
        return $r->result_array();
    }

    public function get_dl_stage_sum($last, $first, $data) {

        $unit_no = $data['unit_no'];

        $stmt = " select SUM(dl.amount) as amount  from  demand_letter_tbl dl where dl.unit_no='$unit_no' ";
   
        $r = $this->db->query($stmt);
        return $r->result_array();
    }

    public function get_dl_stage_sum_lastrow($last, $first_one, $data) {


        $unit_no = $data['unit_no'];
        $stmt = " select SUM(amount) as amount   from   demand_letter_tbl  where unit_no='$unit_no' and  step_no BETWEEN $first_one AND $last ";
        $r = $this->db->query($stmt);
        return $r->result_array();
    }

    public function get_dl_stage_name($data1) {
        $unit_no = $data1['unit_no'];
        $step_no = $data1['step_no'];
        $stmt = " select stage from payment_stages_tbl where unit_no='$unit_no' and step_no='$step_no' ";
        $r = $this->db->query($stmt);
        return $r->result_array();
    }

    public function get_dl_stagenam($data_st) {
        $unit_no = $data_st['unit_no'];
        $stage = $data_st['stage'];
        $stmt = " select due_date,currents_date from demand_letter_tbl where unit_no='$unit_no' and stage='$stage' ";
        $r = $this->db->query($stmt);
        return $r->result();
    }

}

?>