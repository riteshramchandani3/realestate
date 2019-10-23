<?php

/*
 * Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential.
 * Written by Oga Technologies, October 1,  2016.
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Pre_Sales_Model extends CI_Model {

    public function getProjectName() {
        $this->db->select('project_name');
        $this->db->from('project_tbl');
        $query = $this->db->get();
        return $query->result();
    }

    public function inventory_type() {
        $a = $this->db->get('inventory_tbl');
        return $a->result();
    }

    public function project_tbl() {
        $a = $this->db->get('project_tbl');
        return $a->result();
    }

    public function category_dtls() {
        $a = $this->db->get('project_dtls_tbl');
        return $a->result();
    }

    public function duplexcategory_dtls() {
        $a = $this->db->get('duplex_category_tbl');
        return $a->result();
    }

    public function getnamebyproject($prid) {
        $this->db->select('project_name,');
        $this->db->from('project_tbl');
        $this->db->where('id', $prid);
        $r = $this->db->get();
        return $r->row()->block;
    }

    public function gettypebyinventory($prid) {
        $this->db->select('type');
        $this->db->from('inventory_tbl');
        $this->db->where('id', $prid);
        $r = $this->db->get();
        return $r->row()->block;
    }

    public function getcatebycategory($prid) {
        $this->db->select('category');
        $this->db->from('category_tbl');
        $this->db->where('id', $prid);
        $r = $this->db->get();
        return $r->row()->block;
    }

    public function getDupCatebycategory($prid) {
        $this->db->select('category');
        $this->db->from('duplex_category_tbl');
        $this->db->where('id', $prid);
        $r = $this->db->get();
        return $r->row()->block;
    }

    //public function getInventoryInputs($data, $data1) {
    //  $this->db->insert('inventory', $data);
    //$this->db->insert('project_dtls', $data1);
    //if ($this->db->affected_rows() > 0) {
    // return true;
    // } else {
    //  return false;
    // }
    // }

    public function getInsertInventoryData($data1, $data2, $data3) {
        $this->db->insert('inventory_tbl', $data1);
        $this->db->insert('category_tbl', $data2);
        $this->db->insert('project_dtls_tbl', $data3);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

//***********************Add New Project Model Start***************//

    public function getProjectDetail1($data) {
        $this->db->insert('project_tbl', $data);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

//***********************Add New Project Model End***************//
//***********************Display Existing Project Model From (Add New Project) Start***************//

    public function getallconstructiondetail() {
        $r = $this->db->get('project_tbl');
        return $r->result();
    }

//***********************Display Existing Project Model From(Add New Project) End***************//  
//***********************Delete Existing Project Model From(Add New Project) Start***************//   

    public function projectremovebyid($id) {
        $this->db->where('id', $id);
        $this->db->delete('project_tbl');
        return true;
    }

//***********************Delete Existing Project Model From (Add New Project) End***************//    

    public function getprojecttype() {
        $projectid = $this->input->post('arg');
        $row = $this->admin_model->getblocksbyproject($projectid);
        echo $row;
    }

    public function findtype($data) {
        $pid = $data['id'];
        $blid = $data['project_id'];
        $stmt = "select distinct(unit_type) from project_dtls_tbl where (project_id='$pid') and (block='$blid')";
        log_message('debug', $stmt);
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

    public function getaddprojectdetails($data) {
        $this->db->insert('project_dtls_tbl', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

//***********************Add Category Model (Get Unit-Type) Start***************// 
    public function unittype_tbl() {
        $a = $this->db->get('unit_type_tbl');
        return $a->result();
    }

//***********************Add Category Model (Get Unit-Type) End***************// 
//***********************Add Facing Model Start***************//     

    public function getfacingname($data) {
        $this->db->insert('facing_tbl', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

//***********************Add Facing Model End***************// 
//***********************Delete Existing Facing Model(Add Facing) Start***************//      

    public function faceremovebyid($id) {
        $this->db->where('id', $id);
        $this->db->delete('facing_tbl');
        return true;
    }

//***********************Delete Existing Facing Model(Add Facing) End***************// 
//***********************Display Existing Facing Model(Add Facing) Start***************//    

    public function getallfacing() {
        $r = $this->db->get('facing_tbl');
        return $r->result();
    }

    //***********************Display Existing Facing Model(Add Facing) End***************//       
//***********************Add Location Model Start***************//

    public function getlocationname($data) {
        $this->db->insert('location_tbl', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

//***********************Add Location Model End***************//    
//***********************Display Existing Location Model(Add Location) Start***************//

    public function getalllocations() {
        $r = $this->db->get('location_tbl');
        return $r->result();
    }

//***********************Display Existing Location Model(Add Location) End***************//    
//***********************Delete Existing Location Model(Add Location) Start***************//    

    public function removebyid($id) {
        $this->db->where('id', $id);
        $this->db->delete('location_tbl');
        return true;
    }

//***********************Delete Existing Location Model(Add Location) End***************//    
//***********************Add Project Detail Model Start***************// 

    public function getinsertprojectinputs($data) {
        $projectid = $data['project_id'];
        $block = $data['block'];
        $unit_type = $data['unit_type'];
        $category = $data['category'];
        $carpet_area = $data['carpet_area'];
        $ca_ref_rate = $data['ca_ref_rate'];
        $ground_floor_carpet_area = $data['ground_floor_carpet_area'];
        $gfca_ref_rate = $data['gfca_ref_rate'];
        $first_floor_carpet_area = $data['first_floor_carpet_area'];
        $ffca_ref_rate = $data['ffca_ref_rate'];
        $balcony_area = $data['balcony_area'];
        $balcony_ref_rate = $data['balcony_ref_rate'];
        $common_area = $data['common_area'];
        $commonarea_ref_rate = $data['commonarea_ref_rate'];
        $wash_area = $data['wash_area'];
        $washarea_ref_rate = $data['washarea_ref_rate'];
        $roof_covered_ground_gf_area = $data['roof_covered_ground_gf_area'];
        $roof_covered_ground_gf_area_ref_rate = $data['roof_covered_ground_gf_area_ref_rate'];
        $roof_covered_ground_ff_area = $data['roof_covered_ground_ff_area'];
        $roof_covered_ground_ff_area_ref_rate = $data['roof_covered_ground_ff_area_ref_rate'];
        $car_poarch_area = $data['car_poarch_area'];
        $car_poarch_area_ref_rate = $data['car_poarch_area_ref_rate'];
        $open_terrace_back_area = $data['open_terrace_back_area'];
        $open_terrace_back_area_ref_rate = $data['open_terrace_back_area_ref_rate'];
        $covered_terrace_front_side_area = $data['covered_terrace_front_side_area'];
        $covered_terrace_front_side_area_ref_rate = $data['covered_terrace_front_side_area_ref_rate'];
        $open_terrace_front_area = $data['open_terrace_front_area'];
        $open_terrace_front_area_ref_rate = $data['open_terrace_front_area_ref_rate'];
        $box_back_side_area = $data['box_back_side_area'];
        $box_back_side_area_ref_rate = $data['box_back_side_area_ref_rate'];
        $plot_size_ft = $data['plot_size_ft'];
        $plot_size_mtr = $data['plot_size_mtr'];
        if (($category == 'MIG') || ($category == 'HIG') || ($category == '5BHK') && ($unit_type == 'Duplex')) {
            $stmt = "insert into project_dtls_tbl(project_id,block,unit_type,category,carpet_area,ca_ref_rate,first_floor_carpet_area,"
                    . "ffca_ref_rate,ground_floor_carpet_area,gfca_ref_rate,open_terrace_front_area,open_terrace_front_area_ref_rate,"
                    . "open_terrace_back_area,open_terrace_back_area_ref_rate,car_poarch_area,car_poarch_area_ref_rate,"
                    . "covered_terrace_front_side_area,covered_terrace_front_side_area_ref_rate,roof_covered_ground_ff_area,roof_covered_ground_ff_area_ref_rate,"
                    . "roof_covered_ground_gf_area,roof_covered_ground_gf_area_ref_rate,box_back_side_area,box_back_side_area_ref_rate,plot_size_mtr,plot_size_ft)"
                    . " VALUES(" . $this->db->escape($projectid) .
                    "," . $this->db->escape($block) .
                    "," . $this->db->escape($unit_type) .
                    "," . $this->db->escape($category) .
                    "," . $this->db->escape($carpet_area) .
                    "," . $this->db->escape($ca_ref_rate) .
                    "," . $this->db->escape($first_floor_carpet_area) .
                    "," . $this->db->escape($ffca_ref_rate) .
                    "," . $this->db->escape($ground_floor_carpet_area) .
                    "," . $this->db->escape($gfca_ref_rate) .
                    "," . $this->db->escape($open_terrace_front_area) .
                    "," . $this->db->escape($open_terrace_front_area_ref_rate) .
                    "," . $this->db->escape($open_terrace_back_area) .
                    "," . $this->db->escape($open_terrace_back_area_ref_rate) .
                    "," . $this->db->escape($car_poarch_area) .
                    "," . $this->db->escape($car_poarch_area_ref_rate) .
                    "," . $this->db->escape($covered_terrace_front_side_area) .
                    "," . $this->db->escape($covered_terrace_front_side_area_ref_rate) .
                    "," . $this->db->escape($roof_covered_ground_ff_area) .
                    "," . $this->db->escape($roof_covered_ground_ff_area_ref_rate) .
                    "," . $this->db->escape($roof_covered_ground_gf_area) .
                    "," . $this->db->escape($roof_covered_ground_gf_area_ref_rate) .
                    "," . $this->db->escape($box_back_side_area) .
                    "," . $this->db->escape($box_back_side_area_ref_rate) .
                    "," . $this->db->escape($plot_size_mtr) .
                    "," . $this->db->escape($plot_size_ft) . ")";

            //error_log("admin_model::getinsertprojectinputs()::sql is " . $smt);
            $r = $this->db->query($stmt);
            return $r;
        }
        if (($category == '2BHK') || ($category == '3BHK') && ($unit_type == 'Flat')) {
            $stmt = "insert into project_dtls_tbl(project_id,block,unit_type,category,carpet_area,ca_ref_rate,balcony_area,balcony_ref_rate,common_area,commonarea_ref_rate,wash_area,washarea_ref_rate) VALUES(" . $this->db->escape($projectid) . "," . $this->db->escape($block) . "," . $this->db->escape($unit_type) . "," . $this->db->escape($category) . "," . $this->db->escape($carpet_area) . "," . $this->db->escape($carpet_price) . "," . $this->db->escape($balcony_area) . "," . $this->db->escape($balcony_price) . "," . $this->db->escape($common_area) . "," . $this->db->escape($common_price) . "," . $this->db->escape($wash_area) . "," . $this->db->escape($wash_price) . ")";
            // error_log("admin_model::getinsertprojectinputs()::sql is " . $smt);
            $r = $this->db->query($stmt);
            return $r;
        }
        if (($category == '3BHK') || ($category == '4BHK') && ($unit_type == 'Row House')) {
            $stmt = "insert into project_dtls_tbl(project_id,block,unit_type,category,ground_floor_carpet_area,gfca_ref_rate,first_floor_carpet_area,ffca_ref_rate) VALUES(" . $this->db->escape($projectid) . "," . $this->db->escape($block) . "," . $this->db->escape($unit_type) . "," . $this->db->escape($category) . "," . $this->db->escape($ground) . "," . $this->db->escape($ground_price) . "," . $this->db->escape($first_floor) . "," . $this->db->escape($first_floor_price) . ")";
            //error_log("admin_model::getinsertprojectinputs()::sql is " . $smt);
            $r = $this->db->query($stmt);
            return $r;
        }
        if (($unit_type == 'Shop') || ($unit_type == 'Hall') || ($unit_type == 'Plot')) {
            $stmt = "insert into project_dtls_tbl(project_id,category,block,unit_type,carpet_area,ca_ref_rate,plot_size_mtr,plot_size_ft) VALUES(" . $this->db->escape($projectid) . "," . $this->db->escape($category) . "," . $this->db->escape($block) . "," . $this->db->escape($unit_type) . "," . $this->db->escape($carpet_area) . "," . $this->db->escape($ca_ref_rate) . "," . $this->db->escape($plot_size_mtr) . "," . $this->db->escape($plot_size_ft) . ")";
            //error_log("admin_model::getinsertprojectinputs()::sql is " . $smt);
            $r = $this->db->query($stmt);
            return $r;
        }
    }

//***********************Add Project Detail Model End***************// 
//***********************Add Project Detail Model (Get project Blocks) Start***************//

    public function getblocksbyproject($prid) {

        $this->db->where('id', $prid);
        $r = $this->db->get('project_tbl');
        return $r->row()->block;
    }

    public function sendunittype($prid) {
        $sql = "select type_name from unit_type_tbl where project_id like '%$prid%'";
        $r = $this->db->query($sql);
        $j = $r->result();
        return $j;
    }

    public function getblocksbyproject66($prid) {

        $this->db->where('id', $prid);
        $r = $this->db->get('project_tbl');
        return $r->row()->project_name;
    }

//***********************Add Project Detail Model (Get project Blocks) End***************//  
//***********************Add Project Detail Model (Get Category) Start***************//    

    public function findcategory($typeid) {
        //$pid = $data['id'];
        //$blname = $data['unit_type'];
        $typeid = $typeid;
        // $typename = $data['typename'];
        $stmt = "select distinct(category_name) from category_tbl  where unit_type IN(select id from unit_type_tbl where(type_name='$typeid')) ";
        log_message('info', $stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function findfoot($typeid, $pid) {

        $typeid = $typeid;
        $pid = $pid;

        $stmt = "select * from  plot_size_tbl  where type='$typeid' and project_id='$pid'";
       

        $r = $this->db->query($stmt);
        return $r->result();
    }

//***********************Add Project Detail Model (Get Category) End***************//    
//***********************Add Project Detail Model(check if project detail exists already) Start***************//

    public function is_project_dtl_present($data) {
        $projectid = $data['project_id'];
        $block = $data['block'];
        $unit_type = $data['unit_type'];
        $category = $data['category'];
        //check if project detail already exists
        $sql = "SELECT count(*) as count FROM project_dtls_tbl WHERE project_id=" . $projectid . " and block like '" . $block . "' "
                . "and unit_type like '" . $unit_type . "' and category like '" . $category . "'";
        $result = $this->db->query($sql)->row_array();
        error_log($sql);
        error_log($result['count']);
        if ($result['count'] == 0) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

//***********************Add Project Detail Model(check if project detail exists already) End***************//    
    public function findunitno($unitnoid) {
        //$pid = $data['id'];
        //$blname = $data['unit_type'];
        $unitnoid = $unitnoid;
        // $typename = $data['typename'];

        $stmt = "select unit_no from inventory_tbl  where project_id IN(select id from project_tbl where(project_name='$unitnoid')) ";
        log_message('info', $stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

//***********************Insert Parking and Project Inventory Model Start***************//


    public function getinventoryinputs() {
        $project_id = $this->input->post('projectname_select');
        $block = $this->input->post('block');
        $utype = $this->input->post('type_select');
        $category = $this->input->post('cat_select');
        $text_prefix = $this->input->post('text_prefix');
        $num_from = $this->input->post('num_from');
        $num_upto = $this->input->post('num_upto');
        $unit_no = "$text_prefix" . "$num_from";
        $location = $this->input->post('location');
        $facing = $this->input->post('facing');

        if (($num_upto != "") && ($text_prefix != "") && ( $num_from != "")) {
            for ($i = $num_from; $i <= $num_upto; $i++) {
                $s = "$text_prefix" . "$i";
                $sql = "INSERT INTO inventory_tbl (project_id, block,type,category,location,facing,unit_no) VALUES (" . $this->db->escape($project_id) . ", " . $this->db->escape($block) . ", " . $this->db->escape($utype) . ", " . $this->db->escape($category) . ", " . $this->db->escape($location) . ", " . $this->db->escape($facing) . ", " . $this->db->escape($s) . ")";
                error_log($sql);
                $this->db->query($sql);
            }
        } else if (($text_prefix != "") && ( $num_from != "")) {

            $sql = "INSERT INTO inventory_tbl (project_id, block,type,category,location,facing,unit_no) VALUES (" . $this->db->escape($project_id) . ", " . $this->db->escape($block) . ", " . $this->db->escape($utype) . ", " . $this->db->escape($category) . ", " . $this->db->escape($location) . ", " . $this->db->escape($facing) . ", " . $this->db->escape($unit_no) . ")";
            error_log($sql);
            $this->db->query($sql);
        }

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function get_parking_inventory_inputs() {
        $project_id = $this->input->post('projectname');

        $utype = $this->input->post('unittype_select');

        $park_prefix = $this->input->post('park_text_prefix');
        $park_num_from = $this->input->post('park_num_from');
        $park_num_upto = $this->input->post('park_num_upto');
        $parking_no = "$park_prefix" . "$park_num_from";
        $ptype = $this->input->post('parking_type');
        $price = $this->input->post('park_price');
        $remark = $this->input->post('remark');

        if (($park_prefix != "") && ($park_num_from != "") && ( $park_num_upto != "") && ($utype == "Flat")) {
            for ($i = $park_num_from; $i <= $park_num_upto; $i++) {
                $s = "$park_prefix" . "$i";
                $sql = "INSERT INTO parking_tbl (project_id, parking_no,type,price,remark) VALUES (" . $this->db->escape($project_id) . ", " . $this->db->escape($s) . ", " . $this->db->escape($ptype) . ", " . $this->db->escape($price) . ", " . $this->db->escape($remark) . ")";
                error_log("Admin_model::get_parking_inventory_inputs():: SQL is:" . $sql);
                $this->db->query($sql);
            }
        } else if (($park_prefix != "") && ($park_num_from != "") && ($utype == "Flat")) {

            $sql = "INSERT INTO parking_tbl (project_id, parking_no,type,price,remark) VALUES (" . $this->db->escape($project_id) . ", " . $this->db->escape($parking_no) . ", " . $this->db->escape($ptype) . ", " . $this->db->escape($price) . ", " . $this->db->escape($remark) . ")";
            error_log("Admin_model::get_parking_inventory_inputs():: SQL is:" . $sql);
            $this->db->query($sql);
        }

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

//***********************Insert Parking and Project Inventory Model End***************//
//***********************Insert Inventory (Get Project Name) Model Start***************//

    public function project_dtls_tbl() {
        $stmt = "select distinct(prj.id),prj.project_name from project_tbl prj, project_dtls_tbl pdtl  where prj.id= pdtl.project_id ";
        log_message('info', $stmt);
        $r = $this->db->query($stmt);
        return $r->result();
        //$a = $this->db->get('project_dtls_tbl');
        //return $a->result();
    }

//***********************Insert Inventory (Get Project Name) Model End***************//    
//***********************Insert Inventory Table(Get Block) Model Start***************//    

    public function findinventoryblock($unitnoid) {

        $unitnoid = $unitnoid;


        $stmt = "select distinct(block) from project_dtls_tbl  where project_id IN(select id from project_tbl where(project_id='$unitnoid')) ";
        log_message('info', $stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

//***********************Insert Inventory Table(Get Block) Model End***************//   
//***********************Insert Inventory Table(Get Unit- Type) Model Start***************// 

    public function getunittype($data) {
        $projectid = $data['project_id'];
        $block = $data['block'];
        $stmt = "select distinct(unit_type) from project_dtls_tbl where block='" . $block . "'";
        log_message('info', $stmt);
        $r = $this->db->query($stmt);

        return $r->result();
    }

//***********************Insert Inventory Table(Get Unit- Type) Model End***************//   
//***********************Insert Inventory Table(Get Category) Model Start***************//

    public function findinventorycategory($typeid) {

        $typeid = $typeid;

        $stmt = "select distinct(category) from project_dtls_tbl  where unit_type='$typeid' ";
        log_message('info', $stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

//***********************Insert Inventory Table(Get Category) Model End***************//     
//***********************Insert Inventory Table(Get Block) Modal Start***************//    

    public function getblocks($prid) {

        $this->db->where('unit_no', $prid);
        $r = $this->db->get('inventory_tbl');
        return $r->row()->block;
        //return $prid;
    }

//***********************Insert Inventory Table(Get Block) Modal Start***************//  
    public function get_prj_details_json($arg) {
        $prid = $arg;
        $this->db->where('project_id', $prid);
        $result = $this->db->get('project_dtls_tbl')->result();
        //return $rows;
        foreach ($result as $row) {
            $data[] = $row;
        }
        return $data;
    }

    public function location_tbl() {
        $a = $this->db->get('location_tbl');
        return $a->result();
    }

    public function facing_tbl() {
        $a = $this->db->get('facing_tbl');
        return $a->result();
    }

//************************Display project Detail (Get all projects) Start************************//

    public function get_all_projects($data) {

        // $username = $data['user_id'];
        $projectid = $data['project_id'];
        //$typeid = $data['unit_type'];
        //$stmt = "select fappl.id,fappl.name,ptbl.project_name,ptbl.id as 'pid' from first_applicant_personal_dtl_tbl fappl,project_tbl ptbl where (fappl.name='$username') and (ptbl.id = '$projectid')"; // and (fappl.project_id='$projectid')";
        $stmt = "select *  from project_dtls_tbl where (project_id='$projectid') ORDER BY block, unit_type, category";
        $r = $this->db->query($stmt);
        // print_r($stmt);
        return $r->result();
    }

//************************Display project Detail (Get all projects) End************************//    
//***********************Parking Inventory Table(Get Project Name) Model Start***************//    
    public function get_parking_projectname() {
        $stmt = "select distinct(prj.project_name),invtl.type,prj.id from project_tbl prj, inventory_tbl invtl  where (prj.id= invtl.project_id AND invtl.type='Flat')";
        log_message('info', $stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

//***********************Parking Inventory Table(Get Project Name) Model End***************//
//***********************Parking Inventory Table(Get Unit Type) Model Start***************//  
    public function get_parking_unittype() {
        $stmt = "select distinct(invtl.type) from project_tbl prj, inventory_tbl invtl  where (prj.id= invtl.project_id AND invtl.type='Flat')";
        error_log("admin_controller::get_parking_unittype()::sql is: " . $stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

//***********************Parking Inventory Table(Get Unit Type) Model End***************//    
//***********************Parking Allocation Table(Get Unit Number) Model Start***************//

    public function get_parking_unitnumber($project_id) {
        $stmt = "select invtl.unit_no from project_tbl prj, inventory_tbl invtl  where (prj.id= invtl.project_id AND invtl.type='Flat' AND invtl.status='AVAILABLE' AND invtl.project_id='$project_id')";
        error_log("admin_controller::get_parking_unitnumber()::gsql is:" . $stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

//***********************Parking Allocation Table(Get Unit Number) Model End***************//
//***********************Parking Inventory Table(Get Parking Number) Model Start***************//

    public function get_parking_number($project_id) {
        $stmt = "SELECT * FROM `parking_tbl` WHERE project_id =" . $project_id . " and unit_no is NULL";
        error_log("admin_controller::get_parking_number()::sql is:" . $stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

//***********************Parking Inventory Table(Get Parking Number) Model End***************//
//***********************Parking Allocation Table(Insert Parking Number And Unit number in parking table) Model Start***************// 

    public function get_parking_allocation_inputs() {
        $project_id = $this->input->post('projectname');
        $utype = $this->input->post('unittype_select');
        $unum = $this->input->post('unitnum_select');
        $park_num = $this->input->post('parknum_select');
        $sql = "INSERT INTO parking_tbl (project_id,unit_no, parking_no ) VALUES (" . $this->db->escape($project_id) . ", " . $this->db->escape($parking_no) . ", " . $this->db->escape($ptype) . ", " . $this->db->escape($price) . ", " . $this->db->escape($remark) . ")";
    }

//***********************Parking Allocation Table(Insert Parking Number And Unit number in parking table) Model End***************//
    public function getProjectDetail($data) {
        $this->db->insert('project_dtls_tbl', $data);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

//Matching username and password for Customization login start here
    public function isloginvalid($lgdata) {

        $username = $lgdata['username'];
        $password = sha1($lgdata['password']);
        $role = $lgdata['role'];


        //$this->db->select('username','password');
        $sql = "select * from user_registration_tbl where (username='$username') and (password='$password') and (role = 'customadmin')";
        $r = $this->db->query($sql);

        return $r->result();
    }

//Matching username and password for Customization login start here
//***********************Add Category Model Start***************//

    public function addcategoryname($data) {
        $this->db->insert('category_tbl', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

//***********************Add Category Model End***************//
    // insert category into category_tbl (add_category) end here  
    // display existing category table start here
//***********************Add Category(Get Category) Start***************//

    public function getallcategory() {

        $sql = "SELECT ctbl.id,ctbl.category_name,utbl.type_name FROM category_tbl ctbl , unit_type_tbl utbl where (ctbl.unit_type=utbl.id)";

        $r = $this->db->query($sql);
        return $r->result();
    }

//***********************Add Category(Get Category) End***************//  
//***********************Delete Category from existing Add Category table start here***********************// 
    public function categoryremovebyid($id) {
        $this->db->where('id', $id);
        $this->db->delete('category_tbl');
        return true;
    }

//***********************Delete Category from existing Add Category table End here***********************//  
//************************Display Project Detail Model(Show Project detail) Start************************//

    public function show_project_dtl($data) {
//fatch application form of applicant
        $userid = $data['userid'];

        //$sql = "select fappl.*,au.*,pdtl.* from first_applicant_personal_dtl_tbl fappl,applicant_unit_relation_tbl au,project_dtls_tbl pdtl where (fappl.id='$userid') and (fappl.project_id='$projectid') and (au.applicant_id='$userid') and (au.type = pdtl.unit_type)";
        $sql = "select * from project_dtls_tbl where id='$userid'";
        //  print_r($sql);
        $r = $this->db->query($sql);
        return $r->row_array();
    }

//************************Display Project Detail Model(Show Project detail) End************************//
    public function getrowbyid($id) {
        $this->db->where('id', $id);
        $r = $this->db->get('project_dtls_tbl');
        return $r->result();
        // return $result;
        //return true;
    }

//***********************Update project Detail Model Start here***********************//    

    public function doProjectDetailUpdate() {

        $groundfloorcarpetarea = $this->input->post('ground_floor_area');
        $gfcarefrate = $this->input->post('ground_floor_price');
        $firstfloorcarpetarea = $this->input->post('first_floor_area');
        $ffcarefrate = $this->input->post('first_floor_price');
        $carpetarea = $this->input->post('carpet_area');
        $carefrate = $this->input->post('carpet_price');
        $balconyarea = $this->input->post('balcony_area');
        $balconyrefrate = $this->input->post('balcony_price');
        $commonarea = $this->input->post('common_area');
        $commonarearefrate = $this->input->post('common_price');
        $washarea = $this->input->post('wash_area');
        $washarearefrate = $this->input->post('wash_price');
        $id = $this->input->post('id');
        // print_r($id);
        if (($groundfloorcarpetarea != "") && ($gfcarefrate != "") && ($firstfloorcarpetarea != "") && ($ffcarefrate != "")) {
            $sql = "UPDATE project_dtls_tbl SET ground_floor_carpet_area='$groundfloorcarpetarea',gfca_ref_rate='$gfcarefrate', first_floor_carpet_area='$firstfloorcarpetarea',ffca_ref_rate='$ffcarefrate' where id='$id' ";
            $this->db->query($sql);
            //  print_r($sql);
        } else if (($carpetarea != "") && ($carefrate != "") && ($balconyarea != "") && ($balconyrefrate != "") && ($commonarea != "") && ($commonarearefrate != "") && ($washarea != "") && ($washarearefrate != "")) {
            $sql = "UPDATE project_dtls_tbl SET carpet_area='$carpetarea',ca_ref_rate='$carefrate', balcony_area='$balconyarea', balcony_ref_rate='$balconyrefrate',common_area='$commonarea',commonarea_ref_rate='$commonarearefrate',wash_area='$washarea',washarea_ref_rate='$washarearefrate'  where id='$id' ";
            $this->db->query($sql);
        } else if (($carpetarea != "") && ($carefrate != "")) {
            $sql = "UPDATE project_dtls_tbl SET carpet_area='$carpetarea',ca_ref_rate='$carefrate' where id='$id'";
            $this->db->query($sql);
        } else if (($carpetarea != "") && ($carefrate != "")) {
            $sql = "UPDATE project_dtls_tbl SET carpet_area='$carpetarea',ca_ref_rate='$carefrate' where id='$id'";
            $this->db->query($sql);
        }
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

//***********************Update project Detail Model End here***********************//     

    public function first_applicant_personal_dtl_tbl() {
        $a = $this->db->get('first_applicant_personal_dtl_tbl');
        return $a->result();
    }

    public function parkInventoryBlock($unitnoid) {


        $stmt = "select project_id from first_applicant_personal_dtl_tbl where id='$unitnoid'";
        log_message('info', $stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

//***********************Insert Parking Inventory Model End***************// 
    //***********************Add Site stage Model Start***************//     

    public function get_site_stages($data) {
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
    //***********************Site Report Model(Get Type) from site_stage_tbl Start**********************//

    public function get_site_report_type() {
        $stmt = "select distinct(type) from site_stages_tbl";
        log_message('info', $stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

//***********************Site Report Model(Get Type) from site_stage_tbl End**********************// 
//***********************Site Report Model(Get stage) from site_stage_tbl Start**********************//  

    public function site_report_table() {
        $stmt = "select distinct(stage) from site_stages_tbl";
        log_message('info', $stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

    //*************************************23-august-2017 START*****************//    
    //***********************Add Unit Type Model Start***************//     

    public function get_unit_type_name($data) {
        $this->db->insert('unit_type_tbl', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

//***********************Add Unit Type Model End***************// 
////***********************Display Existing Unit Type Model(Add Unit Type) Start***************//    

    public function get_all_unit_type() {
        $r = $this->db->get('unit_type_tbl');
        return $r->result();
    }

    //***********************Display Existing Unit Type Model(Add Unit Type) End***************//  
    //***********************Delete Existing Unit Type Model(Add Unit Type) Start***************//      

    public function unit_type_delete_by_id($id) {
        $this->db->where('id', $id);
        $this->db->delete('unit_type_tbl');
        return true;
    }

//***********************Delete Existing Unit Type Model(Add Unit Type) End***************// 
    public function get_site_type() {
        $stmt = "select distinct(type) from site_stages_tbl";
        $r = $this->db->query($stmt);
        return $r->result();
    }

    //*************************************23-august-2017 END*****************// 
    //**********************************(25-08-2017) Start*******************************//    
    //**********************************Create New user Model Start*******************************//
    public function get_register_input($data) {
        $this->db->insert('user_registration_tbl', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    //**********************************Create New user Model End*******************************//
//**********************************Create New user(GET ROLE) Model Start*******************************//
    public function get_role() {
        $sql = "select role from role_tbl";
        $r = $this->db->query($sql);
        return $r->result();
    }

//**********************************Create New user (GET ROLE) Model  End*******************************//
//***********************Display Existing Registered Users Model Start***************//
    public function get_all_user() {
        $r = $this->db->get('user_registration_tbl');
        return $r->result();
    }

//***********************Display Existing Registered Users Model End***************//  
//***********************Delete Existing Registered Users Model Start***************//      

    public function user_delete_by_id($id) {
        $this->db->where('user_id', $id);
        $this->db->delete('user_registration_tbl');
        return true;
    }

//***********************Delete Existing Registered Users Model End***************// 
//***********************Get User by ID for Updation Model Start***************//     
    public function get_user($id) {
        $sql = "SELECT first_name,last_name,phone,email,role,username FROM user_registration_tbl  where user_id='$id'";
        log_message('info', $sql);
        $r = $this->db->query($sql);
        return $r->result();
    }

//***********************Get User by ID for Updation Model End***************// 
//**********************************Update Existing user Model Start*******************************//
    public function update_view_page() {

        $fname = $this->input->post('first_name');
        $lname = $this->input->post('last_name');
        $phone = $this->input->post('phone');
        $email = $this->input->post('email');
        $role = $this->input->post('role');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $pss = sha1($password);
        $id = $this->input->post('id');
        // print_r($id);
        if ($password == "") {
            $sql = "UPDATE user_registration_tbl SET first_name='$fname',last_name='$lname', phone='$phone',email='$email',role='$role',username='$username' where user_id='$id' ";
            //error_log("Admin_model::update_view_page():: SQL is:" . $sql);
            $this->db->query($sql);
            //print_r($sql);
        } elseif ($password != "") {
            $sql = "UPDATE user_registration_tbl SET first_name='$fname',last_name='$lname', phone='$phone',email='$email',role='$role',username='$username',password='$pss' where user_id='$id' ";
            //error_log("Admin_model::update_view_page():: SQL is:" . $sql);
            $this->db->query($sql);
        }
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    //**********************************Update Existing user Model End*******************************//  
    //***********************Add Payment Stages Model Start*****************// 
    public function getPayment_stageInput($data) {
        $this->db->insert('payment_stages_tbl', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    //***********************Add Payment Stages Model End*****************//     
//**********************************(25-08-2017) End*******************************// 
//**********************************(26-08-2017) End*******************************// 
    //***********************Add Payment stages Model (Get Sttage) Start***************//    

    public function find_stage($stageid) {

        $stageid = $stageid;

        $stmt = "select distinct(stage) from site_stages_tbl  where type='$stageid'";
        log_message('info', $stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

//***********************Add Payment stages Model (Get Stage) End***************//  
//**********************************(26-08-2017) End*******************************//   
    public function getstages() {
        $r = $this->db->get('site_stages_tbl');
        return $r->result();
    }

//**********************************(01-September-2017) Start*******************************// 
//**********************************Show existing COMPANY INFORMATION Start*******************************//     
    public function show_existing_company_info() {
        $r = $this->db->get('company_info_tbl');
        return $r->result();
    }

    public function companyInput($data) {
        $this->db->insert('company_info_tbl', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

//**********************************Show existing COMPANY INFORMATION End*******************************//         
//**********************************(01-September-2017) End*******************************// 

    public function company_info_delete_by_id($id) {
        $this->db->where('id', $id);
        $this->db->delete('company_info_tbl');
        return true;
    }

    public function get_the_following_stages($data) {
        $project_id = $data['project_id'];
        $block = $data['block'];
        $type = $data['type'];
        $category = $data['category'];



//$stmt = "select DISTINCT(sst.stage) from site_stages_tbl sst,inventory_tbl invt where sst.type='$typeid' AND invt.type='$typeid'";
        $stmt = "SELECT stage from payment_stages_tbl WHERE project_id='" . $project_id . "' AND block='" . $block . "' and type='" . $type . "' AND category='" . $category . "'";
        log_message('info', $stmt);
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
            log_message('info', $stmt_2);
            $s = $this->db->query($stmt_2);
            return $s->result_array();
        }
    }

    public function get_type($data) {
        $project_id = $data['project_id'];
        $block = $data['block'];
        $stmt = "select distinct(unit_type) from project_dtls_tbl where (project_id='$project_id') and (block='$block')";
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function find_category($data) {

        $project_id = $data['project_id'];
        $block = $data['block'];
        $type = $data['unit_type'];
        $stmt = "select category from project_dtls_tbl where project_id='" . $project_id . "' and block='" . $block . "' and unit_type='" . $type . "' ";

        //log_message('info', $stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function get_next_step_no_for($type) {
        $qry = "SELECT max(step_no)+1 as next_step_no FROM `site_stages_tbl` WHERE type like '%" . $type . "%'";
        $r = $this->db->query($qry);
        if ($r->num_rows() > 0) {
            return $r->result();
        } else {
            return "0";
        }
    }

    public function getplotdetail($data) {
        $unittype = $data['type'];
        $plot_size_mtr = $data['plot_size_mtr'];
        $project_id = $data['project_id'];
        $block = $data['block'];
        $stmt = "SELECT * FROM plot_size_tbl WHERE project_id='$project_id' and block='$block' and  type='$unittype' and plot_size_mtr='$plot_size_mtr'";
        // print_r($stmt);
        //log_message('champak',$stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function getpdts($data) {
        $project_id = $data['project_id'];
        $block = $data['block'];
        $unittype = $data['type'];
        $category = $data['category'];
        $plot_size_mtr = $data['plot_size_mtr'];
        $plot_size_ft = $data['plot_size_ft'];
        $stmt = "SELECT * FROM project_dtls_tbl WHERE project_id=$project_id and block='$block'  and unit_type='$unittype' and category='$category' and plot_size_mtr='$plot_size_mtr' and plot_size_ft='$plot_size_ft'   ";
       // print_r($stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function getproject_dtls_flat($data) {
        $project_id = $data['project_id'];
        $block = $data['block'];
        $unittype = $data['type'];
        $category = $data['category'];

        $stmt = "SELECT * FROM project_dtls_tbl WHERE project_id=$project_id and block='$block'  and unit_type='$unittype' and category='$category'";
       
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function getproj_info($data) {
        $plot_size_mtr = $data['plot_size_mtr'];
        $plot_size_ft = $data['plot_size_ft'];
        $stmt = "SELECT * FROM plot_size_tbl WHERE plot_size_mtr='$plot_size_mtr' and plot_size_ft='$plot_size_ft'  ";
       
        $r = $this->db->query($stmt);
        return $r->result();
    }

//***********************Add dimension  Model Start*****************// 
    public function insert_area_dimension($data) {

        $plotsizemtr = $data['plot_size_mtr'];
        $plotsizeft = $data['plot_size_ft'];
        $project_id = $data['project_id'];
        $block = $data['block'];
        $type = $data['type'];
        $length_m = $data['length_m'];
        $width_m = $data['width_m'];
        $plot_sqmt = ($length_m) * ($width_m);
        $plot_sqft = ($plot_sqmt) * 10.76;
        $sql = "INSERT INTO plot_size_tbl (project_id,plot_size_mtr,plot_size_ft,block,type,length_m,width_m,plot_sqmt,plot_sqft) VALUES (" . $this->db->escape($project_id) . ",'$plotsizemtr','$plotsizeft'," . $this->db->escape($block) . ", " . $this->db->escape($type) . ", " . $this->db->escape($length_m) . ", " . $this->db->escape($width_m) . ", " . $this->db->escape($plot_sqmt) . ", " . $this->db->escape($plot_sqft) . ")";
        error_log("Admin_model::get_parking_inventory_inputs():: SQL is:" . $sql);
        $this->db->query($sql);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    //***********************Add dimension Model End*****************//  
    ////***********************Display Existing dimension Model(Add dimension) Start***************//    

    public function get_all_dimension() {
        $stmt = "SELECT pst.*,pt.project_name FROM plot_size_tbl pst,project_tbl pt WHERE (pst.project_id=pt.id)";
        // print_r($stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

    //***********************Display Existing dimension Model(Add dimension) End***************//  
    //***********************Delete Existing dimension Model(Add dimension) Start***************//      

    public function dimension_delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('plot_size_tbl');
        return true;
    }

    public function getunitdetail($data) {
        $unittype = $data['type'];
        $project_id = $data['project_id'];
        $category = $data['category'];
        $block = $data['block'];
        $plot_size_mtr = $data['plot_size_mtr'];
        $plot_size_ft = $data['plot_size_ft'];
        $stmt = "SELECT * FROM inventory_tbl WHERE  project_id='$project_id'  and block='$block' and type='$unittype' and category='$category' and plot_size_mtr='$plot_size_mtr' and plot_size_ft='$plot_size_ft' and status IN ('AVAILABLE','HOLD')";
        //echo "<br><br><br><br><br>";
        // print_r($stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function getunit_shopdetail3($typeid, $pid) {

        $stmt = "SELECT unit_no FROM inventory_tbl WHERE  project_id='$pid' AND type='$typeid'  and status IN('AVAILABLE','HOLD') order by unit_no";
        // print_r($stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function getunitdetail3($data) {
        $unittype = $data['type'];
        $project_id = $data['project_id'];
        $category = $data['category'];
        $block = $data['block'];
        //$plot_size_mtr = $data['plot_size_mtr'];
        //$plot_size_ft = $data['plot_size_ft'];
        $stmt = "SELECT * FROM inventory_tbl WHERE  project_id='$project_id'  and block='$block' and type='$unittype' and category='$category' and status IN('AVAILABLE','HOLD')";
       // print_r($stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function getunitdetail1($data) {
        $unittype = $data['type'];
        $project_id = $data['project_id'];
        $category = $data['category'];
        $block = $data['block'];

        $stmt = "SELECT * FROM inventory_tbl WHERE  project_id='$project_id'  and block='$block' and type='$unittype' and category='$category' and status IN ('BOOKED')";
        // print_r($stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function getunitdetailinfo($data) {
        $unittype = $data['type'];
        $project_id = $data['project_id'];
        $category = $data['category'];
        $block = $data['block'];
        $unit_no = $data['unit_no'];

        $stmt = "SELECT  fappl.* FROM inventory_tbl inv, first_applicant_personal_dtl_tbl fappl WHERE inv.unit_no='$unit_no' and  inv.project_id='$project_id'  and inv.block='$block' and inv.type='$unittype' and inv.category='$category' and fappl.id=inv.customer_id and status='BOOKED'";
        // print_r($stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function get_charge_amount() {
        $sql = "SELECT * from other_charges where charge_name = '5 Year Maintenance'";

        $r = $this->db->query($sql);
        return $r->result();
    }

//***********************Delete Existing dimension Model(Add dimension) End***************// 


    public function getcalInput($data) {
        $this->db->insert('presales_costcalculation_tbl', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getcalInput1($data1) {
        $this->db->insert('presales_costcalculation_tbl', $data1);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function get_shop_input($data1) {
        $this->db->insert('presales_costcalculation_tbl', $data1);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function view_sheet1($userid) {


        $stmt = "SELECT * FROM presales_costcalculation_tbl WHERE id = $userid";

        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function get_pay_info($id1) {
        $stmt = "SELECT * FROM payment_receipt WHERE id = $id1  ";
        // print_r($stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function get_inv_info($unit_no) {


        $stmt = "SELECT * FROM inventory_tbl WHERE unit_no = '$unit_no'  ";
        // print_r($stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function getproject_info($data) {

        $project_id = $data['project_id'];
        $stmt = "SELECT * FROM project_tbl WHERE id = $project_id  ";
       ;
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function show_plot_info($data) {
        $plot_size_mtr = trim($data['plot_size_mtr']);
        $plot_size_ft = trim($data['plot_size_ft']);
        $project_id = $data['project_id'];
        $category = $data['category'];
        $type = $data['type'];
        $block = $data['block'];

        // $sql = " SELECT inv.*,pdtl.project_name from inventory_tbl inv, project_tbl pdtl where inv.customer_id='$customer_id' and pdtl.id=inv.project_id";
        $sql = " select * from project_dtls_tbl where project_id='$project_id' and unit_type='$type' and category='$category'  and block='$block' and plot_size_mtr='$plot_size_mtr' and  plot_size_ft='$plot_size_ft' ";
        //print_r($sql);
        $r = $this->db->query($sql);
        return $r->result();
    }

    public function getvisitor_pjt_info($data1) {
        $this->db->insert('prospect_project_info_tbl', $data1);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function get_visitor_details() {

        $sql = "select *  from  prospect_project_info_tbl ORDER BY id DESC";

        $r = $this->db->query($sql);
        return $r->result_array();
    }

    public function view_proj_info($id) {


        $stmt = "SELECT * FROM prospect_project_info_tbl WHERE id = $id  ";
       
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function get_visitor_det($id) {

        $sql = "select *  from  presales_costcalculation_tbl where prospect_id= $id";

        $r = $this->db->query($sql);
        return $r->result_array();
    }

    public function view_cal_info($id) {

        $sql = "select *  from  presales_costcalculation_tbl where prospect_id= $id";

        $r = $this->db->query($sql);
        // print_r($sql);
        return $r->result();
    }

    public function get_receipt_no() {

        $sql = "SELECT series_no from receipt_series ORDER BY id DESC LIMIT 1";



        $r = $this->db->query($sql);
        // print_r($sql);
        return $r->result();
    }

    public function get_max_id() {

        $sql = "SELECT MAX(id) as id from payment_receipt";



        $r = $this->db->query($sql);
        // print_r($sql);
        return $r->result();
    }

    public function get_Summary($id) {

        $sql = "select *  from  prospect_discussions_tbl where   prospect_id = $id ORDER BY id DESC";

        $r = $this->db->query($sql);
        return $r->result_array();
    }

    public function update_plot_sheet1($data1) {
        $id = $data1['id'];
        $login_id = $data1['login_id'];

        $discount = $data1['discount'];
        $cost_payble_to_company = $data1['cost_payble_to_company'];
        $total_cost = $data1['total_cost'];
        $get_approval = $data1['get_approval'];

        $sql = "UPDATE presales_costcalculation_tbl SET login_id='$login_id',discount='$discount',cost_payble_to_company ='$cost_payble_to_company', total_cost='$total_cost',get_approval='$get_approval' where id='$id'";


        $this->db->query($sql);

        if ($this->db->affected_rows() > 0) {
            return true;
        }
    }

    public function updtaesheet1($data) {
        $id = $data['id'];
        $login_id = $data['login_id'];
        $prospect_id = $data['prospect_id'];
        $name = $data['name'];
        $mobile = $data['mobile'] = $this->input->post('mobile');
        $date = $data['date'];
        $project_id = $data['project_id'];
        $block = $data['block'];
        $type = $data['type'];
        $category = $data['category'];
        $unit_no = $data['unit_no'];
        $plot_size_mtr = $data['plot_size_mtr'];
        $plot_size_ft = $data['plot_size_ft'];
        $cost_ca_ref_rate = $data['cost_ca_ref_rate'];
        $total_unit_cost_as_per_carpet_area = $data['total_unit_cost_as_per_carpet_area'];
        $cost_balcony_ref_rate = $data['cost_balcony_ref_rate'];
        $total_balcony_area = $data['total_balcony_area'];
        $cost_washarea_ref_rate = $data['cost_washarea_ref_rate'];
        $total_wash_area = $data['total_wash_area'];
        $cost_open_terrace_front_area_ref_rate = $data['cost_open_terrace_front_area_ref_rate'];
        $total_open_terrace_area_front = $data['total_open_terrace_area_front'];
        $cost_open_terrace_back_area_ref_rate = $data['cost_open_terrace_back_area_ref_rate'];
        $total_open_terrace_area_back = $data['total_open_terrace_area_back'];
        $cost_car_poarch_area_ref_rate = $data['cost_car_poarch_area_ref_rate'];
        $total_car_poarch_area = $data['total_car_poarch_area'];
        $discount = $data['discount'];
        $cost_payble_to_company = $data['cost_payble_to_company'];
        $gst = $data['gst'];
        $total_cost = $data['total_cost'];
        $discussion = $data['discussion'];
        $extra_charge = $data['extra_charge'];
        $extra_charge_des = $data['extra_charge_des'];
        $premium_location_charges = $data['premium_location_charges'];
        $premium_location_charges_des = $data['premium_location_charges_des'];


        $this->db->where('id', $id);
        $this->db->update('presales_costcalculation_tbl', $data);
        //$sql = "UPDATE presales_costcalculation_tbl SET name='$name',mobile='$mobile', date='$date',project_id='$project_id',block='$block',type='$type',category='$category',unit_no='$unit_no',plot_size_mtr='$plot_size_mtr',discount='$discount',cost_payble_to_company='$cost_payble_to_company',gst='$gst',total_cost='$total_cost',discussion='$discussion',extra_charge='$extra_charge', extra_charge_des='$extra_charge_des' where id='$id' ";
        //$this->db->query($sql);
        //  print_r($sql);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function visitor_discussions($data) {
        $this->db->insert('prospect_discussions_tbl', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function isprospect_id($data) {
        $prospect_id = $data['prospect_id'];
        $sql = "select * from prospect_discussions_tbl where (prospect_id='$prospect_id')";
        $r = $this->db->query($sql);
        return $r->result();
    }

    public function get_visitor_input($data, $dataty, $data1, $data2) {

       
       $unit_no = $data1['unit_no'];
        $project_id = $dataty['project_id'];
        $phase = $dataty['block'];
        $type = $dataty['type'];
        $category = $dataty['category'];
        $customer_id = $data1['customer_id'];
        $status = $data1['status'];
        $status1 = $data2['status'];
        $id = $data2['id'];
        $gst = $data1['gst'];
        $discount = $data1['discount'];
        $cost_payble_to_company = $data1['cost_payble_to_company'];
        $total_cost = trim($data1['total_cost']);

       $sql16 = "UPDATE presales_costcalculation_tbl SET is_sales_seen='0' where prospect_id='$id'";
      $this->db->query($sql16);

        $sql1 = "UPDATE prospect_project_info_tbl SET status='$status1' where id='$id'";
      $this->db->query($sql1);
        if ($type == 'Shop') {
            
            $sql = "UPDATE inventory_tbl SET customer_id='$customer_id',status='$status',gst='$gst',discount='$discount',cost_payable_to_company='$cost_payble_to_company',total_cost='$total_cost' where unit_no='$unit_no' and block='$phase' and project_id='$project_id' and type='$type'";
             $this->db->insert('first_applicant_personal_dtl_tbl', $data);
    }else if(($project_id == '2') && ($type =='Flat') ) {
         $sql = "UPDATE inventory_tbl SET customer_id='$customer_id',status='$status',gst='$gst',discount='$discount',cost_payable_to_company='$cost_payble_to_company',total_cost='$total_cost' where unit_no='$unit_no' and block='$phase' and project_id='$project_id' and type='$type' ";
        $this->db->insert('first_applicant_personal_dtl_tbl', $data);
         }else {
 $this->db->insert('first_applicant_personal_dtl_tbl', $data);
            $sql = "UPDATE inventory_tbl SET customer_id='$customer_id',status='$status',gst='$gst',discount='$discount',cost_payable_to_company='$cost_payble_to_company',total_cost='$total_cost' where unit_no='$unit_no' and block='$phase' and project_id='$project_id' and type='$type' and category='$category'";
        }//error`_log("Admin_model::update_view_page():: SQL is:" . $sql);
       $this->db->query($sql);
        return $sql;
      

    
       if ($this->db->affected_rows() > 0) {
          return true;
     } else {
            return false;
      }
    }

    public function requestupdate_visitor_input($data) {

        $prospect_id = $data['prospect_id'];
        $is_request = $data['is_request'];
        $is_checked = $data['is_checked'];
        $get_approval = $data['get_approval'];
        $sql1 = "UPDATE presales_costcalculation_tbl SET is_request='$is_request' ,is_checked='$is_checked',get_approval='$get_approval' where prospect_id='$prospect_id'";
        // return $sql1;
        $this->db->query($sql1);

        if ($this->db->affected_rows() > 0) {
            return true;
        }
    }

    public function update_visitor_inventory($data1) {

        $unit_no = $data1['unit_no'];
        $customer_id = $data1['customer_id'];
        $status = $data1['status'];
    }

    public function deletedis($id) {
        $this->db->where('id', $id);
        $this->db->delete('prospect_discussions_tbl');
        return true;
    }

    public function getpayment_receipt($data1) {

        ///////////My changes//////////////////////////////
        $this->db->trans_start();
        $sql = "SELECT series_no from receipt_series"; // ORDER BY id DESC LIMIT 1";
        $r = $this->db->query($sql);
        // print_r($sql);
        $s = $r->row();
        $p = $s->series_no;



        $data1['receipt_no'] = $p;
        /////////////////////////////////////////////////////////

        $this->db->insert('payment_receipt', $data1);
        //////////////////////////////////////////
        $this->db->trans_complete();

        return $this->db->trans_status() === FALSE ? FALSE : TRUE;
        //////////////////////////////////////////





        /*        if ($this->db->affected_rows() > 0) {
          return true;
          } else {
          return false;
          } */
    }

    public function receipt_series() {

        $sql2 = "update receipt_series set series_no =series_no+1";
        $this->db->query($sql2);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function get_cost_max_id() {

        $sql = "SELECT MAX(id) as id from presales_costcalculation_tbl ";



        $r = $this->db->query($sql);
        // print_r($sql);
        return $r->result();
    }

    public function get_max_id_prospect() {

        $sql = "SELECT MAX(id) as id from prospect_project_info_tbl ";



        $r = $this->db->query($sql);
        // print_r($sql);
        return $r->result();
    }

    public function up_inventory($id) {

        $sql = "UPDATE inventory_tbl SET status=('AVAILABLE'),customer_id ='NULL' where customer_id='$id'";
        //error_log("Admin_model::update_view_page():: SQL is:" . $sql);
        $this->db->query($sql);
        // print_r($sql);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function get_update_status($userid) {

        $sql = "UPDATE prospect_project_info_tbl SET status='NULL' where id='$userid'";
        //error_log("Admin_model::update_view_page():: SQL is:" . $sql);
        $this->db->query($sql);
        // print_r($sql);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function did_delete_row($userid) {
        //  $this->db->where('pre_salesid', $userid);
        // $this->db->delete('first_applicant_personal_dtl_tbl');

        $sql = "UPDATE first_applicant_personal_dtl_tbl SET pre_salesid='NULL', name='NULL'  where pre_salesid='$userid'";
        //error_log("Admin_model::update_view_page():: SQL is:" . $sql);
        $this->db->query($sql);
        // print_r($sql);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function get_unit_no($userid) {

        //$this->db->select('username','password');
        // $sql = "select * from first_applicant_personal_dtl_tbl where pre_salesid='$userid' ";
        $sql = "select fappl.id ,inv.unit_no from first_applicant_personal_dtl_tbl fappl , inventory_tbl inv where fappl.pre_salesid='$userid' and fappl.id=inv.customer_id";
        //  print_r($sql);
        $r = $this->db->query($sql);
        return $r->result();
    }

    public function prospect_info_discussions($prospect_id) {

        //$this->db->select('username','password');
        $sql = "select name from prospect_project_info_tbl where id='$prospect_id'";
        // print_r($sql);
        $s = $this->db->query($sql);
        return $s->result();
    }

    public function prospect_discuss_details($id) {

        //$this->db->select('username','password');
        $sql = "select * from prospect_discussions_tbl where id='$id'";
        // print_r($sql);
        $s = $this->db->query($sql);
        return $s->result();
    }

    public function future_meeting_notification() {

        //$this->db->select('username','password');
        // old query $sql = "select * from prospect_discussions_tbl where read_unread='0'";
        $sql = "SELECT * FROM prospect_discussions_tbl where (DATEDIFF(meeting_date,CURRENT_DATE)>=0) and  is_read='0'";
        //print_r($sql);
        $s = $this->db->query($sql);
        return $s->result_array();
    }

    public function md_notification() {

        //$this->db->select('username','password');
        // old query $sql = "select * from prospect_discussions_tbl where read_unread='0'";
        $sql = "SELECT * FROM presales_costcalculation_tbl where  is_request='0' and  is_checked='0'";
        //print_r($sql);
        $s = $this->db->query($sql);
        return $s->result_array();
    }

    public function sales_notification() {

        $sql = "SELECT * FROM presales_costcalculation_tbl where  is_request='1'  and  is_checked='1' and is_sales_seen='0'";
        //print_r($sql);
        $s = $this->db->query($sql);
        return $s->result_array();
    }

    public function missed_meeting_notification() {


        //$this->db->select('username','password');
        // old query $sql = "select * from prospect_discussions_tbl where read_unread='0'";
        $sql = "SELECT * FROM prospect_discussions_tbl where (DATEDIFF(meeting_date,CURRENT_DATE)<" . NOTIFICATION_INTERVAL . "-1) and  is_read='0'";
        //print_r($sql);
        $s = $this->db->query($sql);
        return $s->result_array();
    }

    public function notification_count() {

        // $sql = "SELECT COUNT(*) as count FROM prospect_discussions_tbl where (DATEDIFF(NOW(),reminder_date)>=0) and  read_unread='0'";
        $sql = "select COUNT(*) as count from prospect_discussions_tbl where ( DATEDIFF(meeting_date,CURRENT_DATE)=0 OR DATEDIFF(meeting_date,CURRENT_DATE)=" . NOTIFICATION_INTERVAL . " OR DATEDIFF(meeting_date,CURRENT_DATE)<" . NOTIFICATION_INTERVAL . ") AND is_read='0'";
        // print_r($sql);
        $s = $this->db->query($sql);
        return $s->result_array();
    }

    public function notification_count_for_md() {

        // $sql = "SELECT COUNT(*) as count FROM prospect_discussions_tbl where (DATEDIFF(NOW(),reminder_date)>=0) and  read_unread='0'";
        $sql = "select COUNT(*) as count from presales_costcalculation_tbl where is_checked='0' and is_request='0'";
        // print_r($sql);
        $s = $this->db->query($sql);
        return $s->result_array();
    }

    public function notification_count_for_sales() {

        // $sql = "SELECT COUNT(*) as count FROM prospect_discussions_tbl where (DATEDIFF(NOW(),reminder_date)>=0) and  read_unread='0'";
        $sql = "select COUNT(*) as sales_count from presales_costcalculation_tbl where is_checked='1' and is_request='1' and is_sales_seen='0'";
        // print_r($sql);
        $s = $this->db->query($sql);
        return $s->result_array();
    }

    public function get_status_update($data2) {

        $unit_no = $data2['unit_no'];
        $prospect_id = $data2['prospect_id'];
        $status_date = $data2['status_date'];


        $sql = "UPDATE inventory_tbl SET status=('HOLD'),status_date ='$status_date' , prospect_id ='$prospect_id' where unit_no='$unit_no'";
        //error_log("Admin_model::update_view_page():: SQL is:" . $sql);
        $this->db->query($sql);
        // print_r($sql);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getupdate_noti($id_dis) {




        $sql = "UPDATE prospect_discussions_tbl SET is_read='1' where id ='$id_dis'";
        //error_log("Admin_model::update_view_page():: SQL is:" . $sql);
        $this->db->query($sql);
        // print_r($sql);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getupdate_md_noti($id_dis) {

        $sql = "UPDATE presales_costcalculation_tbl SET is_checked='1' , is_request='1' where id ='$id_dis'";
        //error_log("Admin_model::update_view_page():: SQL is:" . $sql);
        $this->db->query($sql);
        // print_r($sql);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getupdate_sales_noti($id_dis) {
        $sql = "UPDATE presales_costcalculation_tbl SET is_sales_seen='1' where id ='$id_dis'";
        $this->db->query($sql);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function del_payment_stages($unit_no) {
        $this->db->where('unit_no', $unit_no);
        $this->db->delete('payment_stages_tbl');
        return true;
    }

    public function del_site_report($unit_no) {
        $this->db->where('unit_no', $unit_no);
        $this->db->delete('site_report_tbl');
        return true;
    }

    public function get_md_count() {
        $stmt = "SELECT COUNT(id) as mdcount FROM presales_costcalculation_tbl where  is_request='0' and  is_checked='0'";
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function get_sales_count() {
        $stmt = "select COUNT(id) as salescount from presales_costcalculation_tbl where is_checked='1' and is_request='1' and is_sales_seen='0'";
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function get_notif_count() {
        $stmt = "select COUNT(*) as noticount from prospect_discussions_tbl where ( DATEDIFF(meeting_date,CURRENT_DATE)=0 OR DATEDIFF(meeting_date,CURRENT_DATE)=" . NOTIFICATION_INTERVAL . " OR DATEDIFF(meeting_date,CURRENT_DATE)<" . NOTIFICATION_INTERVAL . ") AND is_read='0'";
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function future_meeting_notification1() {

        //$this->db->select('username','password');
        // old query $sql = "select * from prospect_discussions_tbl where read_unread='0'";
        $sql = "SELECT * FROM prospect_discussions_tbl where (DATEDIFF(meeting_date,CURRENT_DATE)>=0) and  is_read='0'";
        //print_r($sql);
        $s = $this->db->query($sql);
        return $s->result();
    }

    public function missed_meeting_notification1() {


        //$this->db->select('username','password');
        // old query $sql = "select * from prospect_discussions_tbl where read_unread='0'";
        $sql = "SELECT * FROM prospect_discussions_tbl where (DATEDIFF(meeting_date,CURRENT_DATE)<" . NOTIFICATION_INTERVAL . "-1) and  is_read='0'";
        //print_r($sql);
        $s = $this->db->query($sql);
        return $s->result();
    }

    public function md_notification1() {

        //$this->db->select('username','password');
        // old query $sql = "select * from prospect_discussions_tbl where read_unread='0'";
        $sql = "SELECT * FROM presales_costcalculation_tbl where  is_request='0' and  is_checked='0'";
        //print_r($sql);
        $s = $this->db->query($sql);
        return $s->result();
    }

    public function sales_notification1() {

        $sql = "SELECT * FROM presales_costcalculation_tbl where  is_request='1'  and  is_checked='1' and is_sales_seen='0'";
        //print_r($sql);
        $s = $this->db->query($sql);
        return $s->result();
    }

    public function getupdate_flat_sheet($data) {

        $id = $data['id'];
        $this->db->where('id', $id);
        $this->db->update('presales_costcalculation_tbl', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getupdate_shop_sheet($data1) {

        $id = $data1['id'];
        $this->db->where('id', $id);
        $this->db->update('presales_costcalculation_tbl', $data1);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function get_shop_details($data) {
        $project_id = $data['project_id'];
        $type = $data['type'];
        $unit_no = $data['unit_no'];
        $sql = "select * from inventory_tbl where project_id='$project_id' and type='$type' and unit_no='$unit_no'";
        $r = $this->db->query($sql);
        return $r->result();
    }

    public function show_shop_info($data) {
        $project_id = $data['project_id'];
        $block = $data['block'];
        $unittype = $data['type'];
        //  $category = $data['category'];
        $shop_area_sqmt = $data['shop_area_sqmt'];
        $shop_area_sqft = $data['shop_area_sqft'];
        $stmt = "SELECT * FROM project_dtls_tbl WHERE project_id=$project_id and block='$block'  and unit_type='$unittype' and shop_area_sqmt='$shop_area_sqmt' and shop_area_sqft='$shop_area_sqft'   ";
       
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function findphase1flatblock($pid, $block, $type) {
        $stmt = "select distinct(category) from project_dtls_tbl  where unit_type='$type' and project_id='$pid' and block='$block'";
       
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function findphase1flattype($pid, $unit_type, $block, $category) {
        $stmt = "select distinct(flat_type) from project_dtls_tbl  where unit_type='$unit_type' and project_id='$pid' and block='$block' and category='$category'";
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function findphase1flatfloor($pid, $unit_type, $block, $category, $flat_type) {
        $stmt = "select distinct(floor) from inventory_tbl  where type='$unit_type' and project_id='$pid' and category='$category'and flat_type='$flat_type'";
       
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function findphase1flatfloor_unitno($pid, $unit_type, $block, $category, $flat_type, $floor) {
        $stmt = "select unit_no from inventory_tbl  where type='$unit_type' and project_id='$pid' and category='$category'and flat_type='$flat_type' and floor='$floor' and status IN ('AVAILABLE','HOLD') ";
        // print_r($stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function show_unitno_info($data) {
        $unit_no = $data['unit_no'];
        $sql = "select * from inventory_tbl where unit_no='$unit_no'";
        $s = $this->db->query($sql);
        return $s->result();
    }
    
    
    
     public function findcategory_inv($project_id,$block,$type) {
      
        $sql = "select distinct(category) from inventory_tbl where project_id='$project_id' and block='$block' and type='$type'";
        $s = $this->db->query($sql);
        return $s->result();
    }
    
     public function show_unit_info($unit_no,$project_id,$block) {
      
        $sql = "select * from inventory_tbl where unit_no='$unit_no' and project_id='$project_id' and block='$block'";
       
        $s = $this->db->query($sql);
        return $s->result();
    }
    
      public function getprojectdtlsflat($data) {
        $project_id = $data['project_id'];
        $category = $data['category'];
        $unittype = $data['type'];
 
        $flat_carpet_area_sqmt = $data['flat_carpet_area_sqmt'];
        $flat_carpet_area_sqft = $data['flat_carpet_area_sqft'];
        $flat_type = $data['flat_type'];
       

        $stmt = "SELECT * FROM project_dtls_tbl WHERE project_id=$project_id and category='$category'  and unit_type='$unittype' and flat_carpet_area_sqmt ='$flat_carpet_area_sqmt' and flat_carpet_area_sqft='$flat_carpet_area_sqft' and flat_type='$flat_type'";
      // print_r($stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }
    
     public function projectunittype($prid) {
        $sql = "select type_name from unit_type_tbl where project_id like '%$prid%'";
        $r = $this->db->query($sql);
        $j = $r->result();
        return $j;
    }

    public function getfacing_charges($unit_no)
    {
        $sql = "select facing_charges from inventory_tbl where unit_no='$unit_no'";
        $r = $this->db->query($sql);
        $j = $r->result();
        return $j;
}

}

?>
