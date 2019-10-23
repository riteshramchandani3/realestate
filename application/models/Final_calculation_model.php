<?php

/*
 * Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential.
 * Written by Oga Technologies, October 1,  2016.
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Final_calculation_model extends CI_Model {

    public function check_stage($data) {
        $unit_no = $data['unit_no'];

        $sql = "SELECT * FROM `demand_letter_tbl` WHERE unit_no='$unit_no'";
        $r = $this->db->query($sql);
        return $r->result();
    }

    public function searchingallapplicationproject($data) {


        $username = $data['user_id'];
        // print_r($username);
        $projectid = $data['project_id'];
        $unit_no = $data['unit_no'];
        $stmt = "";


        if ($unit_no != '') {
            $stmt = "SELECT fa.id,fa.pre_salesid,fa.present_addr ,fa.name,inv.block, inv.status,pj.project_name, inv.unit_no,inv.type, pj.id as pid FROM inventory_tbl inv, first_applicant_personal_dtl_tbl fa, project_tbl pj,demand_letter_tbl dl WHERE inv.unit_no LIKE '%$unit_no%' AND (inv.customer_id=fa.id) AND (fa.project_id = pj.id) and (dl.appl_id=fa.id) and (dl.stage='POSSESSION')";
        } else {

            $stmt = "select dl.stage,fappl.id,fappl.pre_salesid,fappl.present_addr,fappl.name,inv.unit_no,inv.status,inv.type,inv.block,ptbl.project_name, ptbl.id as 'pid' from first_applicant_personal_dtl_tbl fappl,project_tbl ptbl, inventory_tbl inv,demand_letter_tbl dl where ";
            //$stmt = "select distinct(dl.stage),fappl.id,fappl.present_addr,fappl.name,inv.unit_no,inv.status,inv.type,inv.block,ptbl.project_name, ptbl.id as 'pid' from first_applicant_personal_dtl_tbl fappl,project_tbl ptbl, inventory_tbl inv where ";
            if ($username != "") {
                $stmt = $stmt . "(fappl.name ='" . $username . "') AND (inv.customer_id=fappl.id) AND (fappl.project_id = ptbl.id) and (dl.appl_id=fappl.id) and (dl.stage='POSSESSION')";
            } else
            if ($projectid != "0") {
                // print_r($stmt);
                $stmt = $stmt . "(fappl.project_id =" . $projectid . ") AND (ptbl.id=fappl.project_id) and (inv.customer_id = fappl.id) and (dl.appl_id=fappl.id) and (dl.stage='POSSESSION')";
            } else
            if (($username != "") && ($projectid != "0")) {
                // print_r($stmt);
                $stmt = $stmt . "(fappl.name ='" . $username . "') AND ";
                $stmt = $stmt . '(fappl.project_id =' . $projectid . ')';
            }
        }

        $r = $this->db->query($stmt);
        //print_r($stmt);
        return $r->result();
    }

    public function get_appl_details($data) {

        $explode_data = explode('?', $data);
        $userid = $explode_data[0];


        $sql = "select fappl.id, invt.project_id ,invt.unit_no ,invt.type,invt.block,invt.category from first_applicant_personal_dtl_tbl fappl ,inventory_tbl invt , project_tbl pdtl where fappl.id='$userid' and invt.customer_id='$userid' and pdtl.id=fappl.project_id";

        $r = $this->db->query($sql);
        return $r->result();
    }

    public function get_completion_details($data) {

        $explode_data = explode('?', $data);
        $userid = $explode_data[0];


        $sql = "select * from completion_of_work where applicant_id='$userid'";

        $r = $this->db->query($sql);
        return $r->result();
    }

    public function insert_work_completion($data) {
        //$this->db->insert('completion_of_work', $data);
        //if ($this->db->affected_rows() > 0) {
        // return true;
        // } else {
        //return false;
        //}
        $applicant_id = trim($data['applicant_id']);
        $type = trim($data['type']);
        $project_id = trim($data['project_id']);
        $phase = trim($data['phase']);
        $block = trim($data['block']);
        $unit_no = trim($data['unit_no']);
        $drawing_room = trim($data['drawing_room']);
        $dining_room = trim($data['dining_room']);
        $bedroom_1 = trim($data['bedroom_1']);
        $bedroom_2 = trim($data['bedroom_2']);
        $bedroom_3 = trim($data['bedroom_3']);
        $kitchen = trim($data['kitchen']);
        $staircase = trim($data['staircase']);
        $lobby_area = trim($data['lobby_area']);
        $front_terrace = trim($data['front_terrace']);
        $back_terrace = trim($data['back_terrace']);
        $toilet_floor = trim($data['toilet_floor']);
        $toilet_wall = trim($data['toilet_wall']);
        $kitchen_wall_tiles = trim($data['kitchen_wall_tiles']);
        $wash_area = trim($data['wash_area']);
        $tpn = trim($data['tpn']);
        $porch = trim($data['porch']);
        $flush_door = trim($data['flush_door']);
        $dewas_frame = trim($data['dewas_frame']);
        $alluminium_handle = trim($data['alluminium_handle']);
        $aldrops = trim($data['aldrops']);
        $door_stopper = trim($data['door_stopper']);
        $tower_bolt = trim($data['tower_bolt']);
        $window_alluminium = trim($data['window_alluminium']);
        $window_ventilator = trim($data['window_ventilator']);
        $san_indian = trim($data['san_indian']);
        $san_european = trim($data['san_european']);
        $san_seat_cover = trim($data['san_seat_cover']);
        $san_bib_cock = trim($data['san_bib_cock']);
        $san_pillar_cock = trim($data['san_pillar_cock']);
        $san_wall_mix = trim($data['san_wall_mix']);
        $san_c_p_stop_cocks = trim($data['san_c_p_stop_cocks']);
        $san_cpn = trim($data['san_cpn']);
        $san_wash_basin = trim($data['san_wash_basin']);
        $san_waste_pipe = trim($data['san_waste_pipe']);
        $elec_6_amp_switch = trim($data['elec_6_amp_switch']);
        $elec_16_amp_switch = trim($data['elec_16_amp_switch']);
        $elec_6_amp_socket = trim($data['elec_6_amp_socket']);
        $elec_16_amp_socket = trim($data['elec_16_amp_socket']);
        $elec_ceiling_rose = trim($data['elec_ceiling_rose']);
        $elec_angle_holder = trim($data['elec_angle_holder']);
        $elec_button_holder = trim($data['elec_button_holder']);
        $elec_mcb = trim($data['elec_mcb']);
        $completion_date = date("Y-m-d");
        $stmt = "INSERT INTO `completion_of_work`(`applicant_id`, `project_id`, `phase`, `type`, `block`, `unit_no`, `drawing_room`, `dining_room`, `bedroom_1`, `bedroom_2`, `bedroom_3`, `kitchen`, `staircase`, `lobby_area`, `front_terrace`, `back_terrace`, `toilet_floor`, `toilet_wall`, `kitchen_wall_tiles`, `wash_area`,`tpn`,`porch`,"
                . "`flush_door`, `dewas_frame`, `alluminium_handle`, `aldrops`, `door_stopper`, `tower_bolt`,"
                . "`window_alluminium`, `window_ventilator`, `san_indian`, `san_european`, `san_seat_cover`, `san_bib_cock`, `san_pillar_cock`, `san_wall_mix`,`san_c_p_stop_cocks`, `san_cpn`, `san_wash_basin`, `san_waste_pipe`,"
                . "`elec_6_amp_switch`, `elec_16_amp_switch`, `elec_6_amp_socket`,`elec_16_amp_socket`, `elec_ceiling_rose`, `elec_angle_holder`, `elec_button_holder`, `elec_mcb`,`work_completion_date`)"
                . " VALUES(" . $this->db->escape($applicant_id) .
                "," . $this->db->escape($project_id) .
                "," . $this->db->escape($phase) .
                "," . $this->db->escape($type) .
                "," . $this->db->escape($block) .
                "," . $this->db->escape($unit_no) .
                "," . $this->db->escape($drawing_room) .
                "," . $this->db->escape($dining_room) .
                "," . $this->db->escape($bedroom_1) .
                "," . $this->db->escape($bedroom_2) .
                "," . $this->db->escape($bedroom_3) .
                "," . $this->db->escape($kitchen) .
                "," . $this->db->escape($staircase) .
                "," . $this->db->escape($lobby_area) .
                "," . $this->db->escape($front_terrace) .
                "," . $this->db->escape($back_terrace) .
                "," . $this->db->escape($toilet_floor) .
                "," . $this->db->escape($toilet_wall) .
                "," . $this->db->escape($kitchen_wall_tiles) .
                "," . $this->db->escape($wash_area) .
                "," . $this->db->escape($tpn) .
                "," . $this->db->escape($porch) .
                "," . $this->db->escape($flush_door) .
                "," . $this->db->escape($dewas_frame) .
                "," . $this->db->escape($alluminium_handle) .
                "," . $this->db->escape($aldrops) .
                "," . $this->db->escape($door_stopper) .
                "," . $this->db->escape($tower_bolt) .
                "," . $this->db->escape($window_alluminium) .
                "," . $this->db->escape($window_ventilator) .
                "," . $this->db->escape($san_indian) .
                "," . $this->db->escape($san_european) .
                "," . $this->db->escape($san_seat_cover) .
                "," . $this->db->escape($san_bib_cock) .
                "," . $this->db->escape($san_pillar_cock) .
                "," . $this->db->escape($san_wall_mix) .
                "," . $this->db->escape($san_c_p_stop_cocks) .
                "," . $this->db->escape($san_cpn) .
                "," . $this->db->escape($san_wash_basin) .
                "," . $this->db->escape($san_waste_pipe) .
                "," . $this->db->escape($elec_6_amp_switch) .
                "," . $this->db->escape($elec_16_amp_switch) .
                "," . $this->db->escape($elec_6_amp_socket) .
                "," . $this->db->escape($elec_16_amp_socket) .
                "," . $this->db->escape($elec_ceiling_rose) .
                "," . $this->db->escape($elec_angle_holder) .
                "," . $this->db->escape($elec_button_holder) .
                "," . $this->db->escape($elec_mcb) .
                "," . $this->db->escape($completion_date) . ")";
        $r = $this->db->query($stmt);
        return $r;
    }

    public function update_work_completion($data) {
        //$this->db->insert('completion_of_work', $data);
        //if ($this->db->affected_rows() > 0) {
        // return true;
        // } else {
        //return false;
        //}
        $applicant_id = trim($data['applicant_id']);
        $type = trim($data['type']);
        $project_id = trim($data['project_id']);
        $phase = trim($data['phase']);
        $block = trim($data['block']);
        $unit_no = trim($data['unit_no']);
        $drawing_room = trim($data['drawing_room']);
        $dining_room = trim($data['dining_room']);
        $bedroom_1 = trim($data['bedroom_1']);
        $bedroom_2 = trim($data['bedroom_2']);
        $bedroom_3 = trim($data['bedroom_3']);
        $kitchen = trim($data['kitchen']);
        $staircase = trim($data['staircase']);
        $lobby_area = trim($data['lobby_area']);
        $front_terrace = trim($data['front_terrace']);
        $back_terrace = trim($data['back_terrace']);
        $toilet_floor = trim($data['toilet_floor']);
        $toilet_wall = trim($data['toilet_wall']);
        $kitchen_wall_tiles = trim($data['kitchen_wall_tiles']);
        $wash_area = trim($data['wash_area']);
        $tpn = trim($data['tpn']);
        $porch = trim($data['porch']);
        $flush_door = trim($data['flush_door']);
        $dewas_frame = trim($data['dewas_frame']);
        $alluminium_handle = trim($data['alluminium_handle']);
        $aldrops = trim($data['aldrops']);
        $door_stopper = trim($data['door_stopper']);
        $tower_bolt = trim($data['tower_bolt']);
        $window_alluminium = trim($data['window_alluminium']);
        $window_ventilator = trim($data['window_ventilator']);
        $san_indian = trim($data['san_indian']);
        $san_european = trim($data['san_european']);
        $san_seat_cover = trim($data['san_seat_cover']);
        $san_bib_cock = trim($data['san_bib_cock']);
        $san_pillar_cock = trim($data['san_pillar_cock']);
        $san_wall_mix = trim($data['san_wall_mix']);
        $san_c_p_stop_cocks = trim($data['san_c_p_stop_cocks']);
        $san_cpn = trim($data['san_cpn']);
        $san_wash_basin = trim($data['san_wash_basin']);
        $san_waste_pipe = trim($data['san_waste_pipe']);
        $elec_6_amp_switch = trim($data['elec_6_amp_switch']);
        $elec_16_amp_switch = trim($data['elec_16_amp_switch']);
        $elec_6_amp_socket = trim($data['elec_6_amp_socket']);
        $elec_16_amp_socket = trim($data['elec_16_amp_socket']);
        $elec_ceiling_rose = trim($data['elec_ceiling_rose']);
        $elec_angle_holder = trim($data['elec_angle_holder']);
        $elec_button_holder = trim($data['elec_button_holder']);
        $elec_mcb = trim($data['elec_mcb']);
        $completion_date = date("Y-m-d");
        $stmt = "update completion_of_work SET drawing_room='$drawing_room',dining_room='$dining_room',"
                . "bedroom_1='$bedroom_1',bedroom_1='$bedroom_2',bedroom_3='$bedroom_3',kitchen='$kitchen',"
                . "staircase='$staircase',lobby_area='$lobby_area',front_terrace='$front_terrace',back_terrace='$back_terrace',"
                . "toilet_floor='$toilet_floor',toilet_wall='$toilet_wall',kitchen_wall_tiles='$kitchen_wall_tiles',wash_area='$wash_area',tpn='$tpn',porch='$porch',"
                . "flush_door='$flush_door',dewas_frame='$dewas_frame',alluminium_handle='$alluminium_handle',aldrops='$aldrops',"
                . "door_stopper='$door_stopper',tower_bolt='$tower_bolt',window_alluminium='$window_alluminium',window_ventilator='$window_ventilator',"
                . "san_indian='$san_indian',san_european='$san_european',san_seat_cover='$san_seat_cover',san_bib_cock='$san_bib_cock',"
                . "san_pillar_cock='$san_pillar_cock',san_wall_mix='$san_wall_mix',san_c_p_stop_cocks='$san_c_p_stop_cocks',san_cpn='$san_cpn',"
                . "san_wash_basin='$san_wash_basin',san_waste_pipe='$san_waste_pipe',elec_6_amp_switch='$elec_6_amp_switch',elec_16_amp_switch='$elec_16_amp_switch',"
                . "elec_6_amp_socket='$elec_6_amp_socket',elec_16_amp_socket='$elec_16_amp_socket',elec_ceiling_rose='$elec_ceiling_rose',elec_angle_holder='$elec_angle_holder',"
                . "elec_button_holder='$elec_button_holder',elec_mcb='$elec_mcb' where applicant_id='$applicant_id'";
        $r = $this->db->query($stmt);
        return $r;
    }

    public function get_appl_info($applicant_id) {


        $sql = "select * from first_applicant_personal_dtl_tbl where id='$applicant_id'";

        $r = $this->db->query($sql);
        return $r->result();
    }

    public function get_project_name($project_id) {


        $sql = "select * from project_tbl where id='$project_id'";

        $r = $this->db->query($sql);
        return $r->result();
    }
public function get_completion_appl_details($data) {

        $explode_data = explode('?', $data);
        $userid = $explode_data[0];


        $sql = "select fappl.name , pdtl.project_name ,invt.unit_no ,invt.type,invt.block from first_applicant_personal_dtl_tbl fappl ,inventory_tbl invt , project_tbl pdtl where fappl.id='$userid' and invt.customer_id='$userid' and pdtl.id=fappl.project_id";

        $r = $this->db->query($sql);
        return $r->result();
    }
    
    
    
    
     public function searchingallapplicationproject11($data) {
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
    
    
    public function tot_amt_of_appl($id) {
        $stmt = "select sum(advance) as total from payment_receipt  where appl_id='$id'";
        $r = $this->db->query($stmt);
        return $r->result();
    }
    public function getapplicant_info($id) {
        $stmt = "select *  from before_possession_tbl  where appl_id='$id'";
        $r = $this->db->query($stmt);
        return $r->result();
    }
    
       public function before_pess_input($data) {
        $this->db->insert('before_possession_tbl', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
        public function updatebefore_pess_input($data) {
       
       $id = $data['id'];
        $this->db->where('id', $id);
        $this->db->update('before_possession_tbl', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
     
   }
      public function get_cumulative($user) {
      
        $stmt = "SELECT SUM(advance) as cumulative FROM `payment_receipt` where appl_id='$user' and reg_status='UNREGISTER'";
        //print_r($stmt);
        $r = $this->db->query($stmt);
       
        return $r->result();
    }
       public function get_list_of_due($data) {
           $project_name=$data['project_name'];
           $block=$data['block'];
           $type=$data['type'];
       
      //  $stmt = "select pjt.project_name, dl.stage,dl.due_date,dl.block,dl.amount,dl.unit_no,fappl.name from demand_letter_tbl dl,first_applicant_personal_dtl_tbl fappl,project_tbl pjt where dl.amount>0 dl.project_name=$project_name and dl.block='$block' and dl.type='$type' and fappl.id=dl.appl_id and pjt.id=dl.project_name" ;
       // $stmt = "select * from demand_letter_tbl where project_name='$project_name' and block='$block' and type='$type'" ;
        $stmt = "select dl.due_date,dl.unit_no, dl.amount,dl.stage,fappl.name ,fappl.contact_mobile from demand_letter_tbl dl ,first_applicant_personal_dtl_tbl fappl where dl.project_name='$project_name' and dl.block='$block' and dl.type='$type' and dl.amount>0 and fappl.id=dl.appl_id" ;
     
        $r = $this->db->query($stmt);
        return $r->result();
    }
   
   
    
    
}

?>