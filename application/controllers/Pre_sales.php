<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class Pre_Sales extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('presales_welcome');
    }

    public function get_Phase1_duplex_new_cost_calculation() {
        $this->load->view('presales/Phase1_duplex_new_cost_calculation');
    }

    public function takeInventoryFormInput() {

        $data['carpet_area'] = $this->input->post('carpet_area');
        $data['balcony_area'] = $this->input->post('balcony_area');
        $data['common_area'] = $this->input->post('common_area');
        $data['wash_area'] = $this->input->post('wash_area');
        $data1['carpet_area_price'] = $this->input->post('carpet_price');
        $data1['balcony_area_price'] = $this->input->post('balcony_price');
        $data1['common_area_price'] = $this->input->post('common_price');
        $data1['wash_area_price'] = $this->input->post('wash_price');

        $s = $this->Pre_sales_model->getInventoryInputs($data, $data1);
        if ($s == true) {
            $success['msg'] = "done";
            //$this->session->set_flashdata("message", "<font class='success'>Content Successfully Updated..!!</font>");
            //redirect('view/insert_project_detail');
            $this->load->view('inventoryDetail', $success);
            unset($_POST);
        } else {
            $success['failure'] = "done";
            $this->session->set_flashdata("message", "<font class='success'>Content Not Updated..!!</font>");
            //redirect('view/insert_project_detail');
            $this->load->view('inventoryDetail', $success);
            unset($_POST);
        }
    }

    public function displayProjectName() {
        $data['project_name'] = $this->input->post('project_name');
        $this->Pre_sales_model->getProjectName($data);
    }

    public function getitemtype() {
        $projectid = $this->input->post('arg');
        $row = $this->Pre_sales_model->getitembyinventory($projectid);
        echo $row;
    }

    public function takeProjectFormInput() {
        //print_r($_POST);
        $data['project_name'] = $this->input->post('project_name');
        $data['location'] = $this->input->post('project_location');
        $data['block'] = $this->input->post('project_blocks');
        $data2['carpet_area'] = $this->input->post('carpet_area');
        $data2['balcony_area'] = $this->input->post('balcony_area');
        $data2['common_area'] = $this->input->post('common_area');
        $data2['wash_area'] = $this->input->post('wash_area');
        $data1['carpet_area_price'] = $this->input->post('carpet_price');
        $data1['balcony_area_price'] = $this->input->post('balcony_price');
        $data1['common_area_price'] = $this->input->post('common_price');
        $data1['wash_area_price'] = $this->input->post('wash_price');
        $s = $this->Pre_sales_model->getProjectInputs($data1, $data2);
        if ($s == true) {
            $success['msg'] = "done";
            $this->load->view('inventoryDetail', $success);
            unset($_POST);
        } else {
            $success['failure'] = "done";
            $this->load->view('inventoryDetail', $success);
            unset($_POST);
        }
    }

    function display() {
        $this->load->view('insert_inventory_detail');
    }

    public function getprojectname() {
        $projectid = $this->input->post('arg');
        $row = $this->Pre_sales_model->getnamebyproject($projectid);
        echo $row;
    }

    public function gettype() {
        $projectid = $this->input->post('arg');
        $row = $this->Pre_sales_model->gettypebyinventory($projectid);
        echo $row;
    }

    public function getcategory() {
        $projectid = $this->input->post('arg');
        $row = $this->Pre_sales_model->getcatebycategory($projectid);
        echo $row;
    }

    public function getduplexcategory() {
        $projectid = $this->input->post('arg');
        $row = $this->Pre_sales_model->getDupCatebycategory($projectid);
        echo $row;
    }

    public function takeProjectDetail() {
        //print_r($_POST);
        $data['project_name'] = $this->input->post('project_name');
        $data['location'] = $this->input->post('project_location');
        $data['block'] = $this->input->post('project_blocks');

        $s = $this->Pre_sales_model->getProjectDetail($data);
        if ($s == true) {
            $success['msg'] = "done";
            $this->load->view('insert_project_detail', $success);
            unset($_POST);
        } else {
            $success['failure'] = "done";
            $this->load->view('insert_project_detail', $success);
            unset($_POST);
        }
    }

//***********************Add Facing Start***************//    

    public function takefacingname() {


        $data['facing'] = $this->input->post('facing_name');
        $s = $this->Pre_sales_model->getfacingname($data);
        if ($s == true) {
            $success['msg'] = "done";
            $this->load->view('add_facing', $success);
            unset($_POST);
        } else {
            $success['failure'] = "done";
            $this->load->view('add_facing', $success);
            unset($_POST);
        }
    }

//***********************Add Facing End***************//  
//***********************Add Location Start***************//

    public function takelocationname() {
        $data['location'] = $this->input->post('location_name');
        $s = $this->Pre_sales_model->getlocationname($data);
        if ($s == true) {
            $success['msg'] = "done";
            $this->load->view('add_location', $success);
            unset($_POST);
        } else {
            $success['failure'] = "done";
            $this->load->view('add_location', $success);
            unset($_POST);
        }
    }

//***********************Add Location End***************//  
//***********************Delete Existing Location (Add Location) Start***************//    

    public function deletebyid($id) {
        //echo $id;
        $r = $this->Pre_sales_model->removebyid($id);
        if ($r == true) {
            $status['delete'] = "done";
            $this->load->view('add_location', $status);
            unset($_POST);
        }
    }

//***********************Delete Existing Location (Add Location) End***************//    

    public function takeInsertInventoryData() {
        //print_r($_POST);
        $data2['carpet_area'] = $this->input->post('carpet_area');
        $data2['balcony_area'] = $this->input->post('balcony_area');
        $data2['common_area'] = $this->input->post('common_area');
        $data2['wash_area'] = $this->input->post('wash_area');
        $data1['carpet_area_price'] = $this->input->post('carpet_price');
        $data1['balcony_area_price'] = $this->input->post('balcony_price');
        $data1['common_area_price'] = $this->input->post('common_price');
        $data1['wash_area_price'] = $this->input->post('wash_price');
        $data1['gf_carpet_area_price'] = $this->input->post('ground_floor_price');
        $data1['ff_carpet_area_price'] = $this->input->post('first_floor_price');
        $data3['ground_floor_carpet_area'] = $this->input->post('ground_floor_area');
        $data3['first_floor_carpet_area'] = $this->input->post('first_floor_area');


        $s = $this->Pre_sales_model->getInsertInventoryData($data1, $data2, $data3);
        if ($s == true) {
            $success['msg'] = "done";
            $this->load->view('inventoryDetail', $success);
            unset($_POST);
        } else {
            $success['failure'] = "done";
            $this->load->view('inventoryDetail', $success);
            unset($_POST);
        }
    }

    public function getunits() {
        $data['projectid'] = $this->input->post('plid');
        $data['blockname'] = $this->input->post('blname');
        $data['typename'] = $this->input->post('typename');
        $data['categoryname'] = $this->input->post('categoryname');
        $s = $this->Pre_sales_model->findunits($data);
        foreach ($s as $row2) {
            echo $row2->type;
            echo ",";
        }
    }

    public function getprojecttype() {
        $data['id'] = $this->input->post('plid');
        $data['project_id'] = $this->input->post('blid');
        $r = $this->Pre_sales_model->findtype($data);
        foreach ($r as $row) {
            echo $row->unit_type;
            echo ",";
        }
    }

    public function getParkingUnitType() {
        //$data['id'] = $this->input->post('plid');
        //$data['project_id'] = $this->input->post('blid');
        $r = $this->Pre_sales_model->ParkingUnitType($data);
        foreach ($r as $row) {
            echo $row->unit_type;
            echo ",";
        }
    }

//***********************Delete Existing Facing (Add Facing) Start***************//  

    public function facedeletebyid($id) {
        //echo $id;
        $r = $this->Pre_sales_model->faceremovebyid($id);
        if ($r == true) {
            $status['delete'] = "done";
            $this->load->view('add_facing', $status);
            unset($_POST);
        }
    }

//***********************Delete Existing Facing (Add Facing) End***************// 

    public function projectdeletebyid1($id) {
        //echo $id;
        $r = $this->Pre_sales_model->projectremovebyid($id);
        if ($r == true) {
            $this->load->view('insert_project_detail');
        }
    }

//***********************Add Project Detail Start***************//     

    public function takeinsertprojectdetail() {
        // print_r($_POST);
        $data['project_id'] = $this->input->post('project_select');
        $data['block'] = $this->input->post('block_select');
        $data['unit_type'] = $this->input->post('unittype_select');
        $data['category'] = $this->input->post('category_select');
        $data['carpet_area'] = $this->input->post('total_carpet_area');
        $data['ca_ref_rate'] = $this->input->post('total_ca_ref_rate');
        $data['first_floor_carpet_area'] = $this->input->post('first_floor_area');
        $data['ffca_ref_rate'] = $this->input->post('first_floor_price');
        $data['ground_floor_carpet_area'] = $this->input->post('ground_floor_area');
        $data['gfca_ref_rate'] = $this->input->post('ground_floor_price');
        $data['balcony_area'] = $this->input->post('balcony_area');
        $data['balcony_ref_rate'] = $this->input->post('balcony_price');
        $data['common_area'] = $this->input->post('common_area');
        $data['commonarea_ref_rate'] = $this->input->post('common_price');
        $data['wash_area'] = $this->input->post('wash_area');
        $data['washarea_ref_rate'] = $this->input->post('wash_price');

        $data['roof_covered_ground_gf_area'] = $this->input->post('roof_covered_ground_gf_area');
        $data['roof_covered_ground_gf_area_ref_rate'] = $this->input->post('roof_covered_ground_gf_area_ref_rate');
        $data['roof_covered_ground_ff_area'] = $this->input->post('roof_covered_ground_ff_area');
        $data['roof_covered_ground_ff_area_ref_rate'] = $this->input->post('roof_covered_ground_ff_area_ref_rate');
        $data['car_poarch_area'] = $this->input->post('car_poarch_area');
        $data['car_poarch_area_ref_rate'] = $this->input->post('car_poarch_area_ref_rate');
        $data['open_terrace_back_area'] = $this->input->post('open_terrace_back_area');
        $data['open_terrace_back_area_ref_rate'] = $this->input->post('open_terrace_back_area_ref_rate');
        $data['covered_terrace_front_side_area'] = $this->input->post('covered_terrace_front_side_area');
        $data['covered_terrace_front_side_area_ref_rate'] = $this->input->post('covered_terrace_front_side_area_ref_rate');
        $data['open_terrace_front_area'] = $this->input->post('open_terrace_front_area');
        $data['open_terrace_front_area_ref_rate'] = $this->input->post('open_terrace_front_area_ref_rate');
        $data['box_back_side_area'] = $this->input->post('box_back_side_area');
        $data['box_back_side_area_ref_rate'] = $this->input->post('box_back_side_area_ref_rate');
        $data['plot_size_ft'] = $this->input->post('plot_size_ft');
        $data['plot_size_mtr'] = $this->input->post('plot_size_mtr');
        $data['carpet_area'] = $this->input->post('plot_carpet_area');
        $data['ca_ref_rate'] = $this->input->post('plot_ca_ref_rate');

        $s = $this->Pre_sales_model->getinsertprojectinputs($data);
        if ($s == true) {
            $success['msg'] = "done";
            $this->load->view('add_project_detail', $success);
            unset($_POST);
        } else {
            $success['failure'] = "done";
            $this->load->view('add_project_detail', $success);
            unset($_POST);
        }
    }

//***********************Add Project Detail End***************// 
//***********************Add Project Detail (Get Category) Start***************//

    public function getcategoryy() {
        $typeid = $this->input->post('typeid');
        //$data['typename'] = $this->input->post('typename');
        $s = $this->Pre_sales_model->findcategory($typeid);
        foreach ($s as $row) {
            echo $row->category_name;
            echo ",";
        }
    }

//***********************Add Project Detail (Get Category) End***************//        
//***********************Add Project Detail (check if project detail exists already) Start***************//

    public function is_project_dtl_present() {

        $data['project_id'] = $this->input->post('project_id');
        $data['block'] = $this->input->post('block');
        $data['unit_type'] = $this->input->post('unit_type');
        $data['category'] = $this->input->post('category');
        //error_log($data['project_id']);
        $exists = $this->Pre_sales_model->is_project_dtl_present($data);
        if ($exists == TRUE) {
            echo "1";
        } else {

            echo "0";
        }
    }

//***********************Add Project Detail (check if project detail exists already) End***************//   


    public function getunitno() {
        $unitnoid = $this->input->post('unitnoid');
        //$data['typename'] = $this->input->post('typename');
        $s = $this->Pre_sales_model->findunitno($unitnoid);
        foreach ($s as $row) {
            echo $row->unit_no;
            echo ",";
        }
    }

    public function getblock() {
        $unitnoid = $this->input->post('unitnoid');
        //$data['typename'] = $this->input->post('typename');
        $s = $this->Pre_sales_model->parkInventoryBlock($unitnoid);
        foreach ($s as $row) {
            echo $row->project_id;
            echo ",";
        }
    }

//***********************Add Project Detail (Get project Blocks) Start***************// 

    public function getprojectblocks() {
        $projectid = $this->input->post('arg');
        $row = $this->Pre_sales_model->getblocksbyproject($projectid);
        echo $row;
    }

    public function getunittypes() {
        $projectid = $this->input->post('prid');
        //$row = $this->Pre_sales_model->sendunittype($projectid);
        //echo $row;

        $s = $this->Pre_sales_model->sendunittype($projectid);
        foreach ($s as $row) {
            echo $row->type_name;
            echo ",";
        }
    }

    public function getprojectblocks66() {
        $projectid = $this->input->post('arg');
        $row = $this->Pre_sales_model->getblocksbyproject66($projectid);
        echo $row;
    }

//***********************Add Project Detail (Get project Blocks) End***************//     
//***********************Insert Inventory Start***************//

    public function takeinventorydata() {
        $s = $this->Pre_sales_model->getinventoryinputs();
        if ($s == true) {
            $success['msg'] = "done";
            $this->load->view('insert_inventory', $success);
            unset($_POST);
        } else {
            $success['failure'] = "done";
            $this->load->view('insert_inventory', $success);
            unset($_POST);
        }
    }

//***********************Insert Inventory End***************//
//***********************Insert Inventory Table(Get Block) Start***************//    

    public function getinventoryblock() {
        $unitnoid = $this->input->post('unitnoid');
        //$data['typename'] = $this->input->post('typename');
        $s = $this->Pre_sales_model->findinventoryblock($unitnoid);
        foreach ($s as $row) {
            echo $row->block;
            echo ",";
        }
    }

//***********************Insert Inventory Table(Get Block) End***************// 
//***********************Insert Inventory Table(Get Unit- Type) Start***************// 
    ///public function getunittype() {
    //$projectid = $this->input->post('arg');
    //$row = $this->Pre_sales_model->getunittype($projectid);
    //echo $row;
    //}
    public function getunittype() {
        $data['project_id'] = $this->input->post('project_id');
        $data['block'] = $this->input->post('block');
        //$projectid = $this->input->post('arg');
        $s = $this->Pre_sales_model->getunittype($data);
        foreach ($s as $row) {
            echo $row->unit_type;
            echo ",";
        }
    }

//***********************Insert Inventory Table(Get Unit- Type) End***************//    
//***********************Insert Inventory Table(Get Category) Start***************//

    public function getinventorycategory() {
        $typeid = $this->input->post('typeid');
        //$data['typename'] = $this->input->post('typename');
        $s = $this->Pre_sales_model->findinventorycategory($typeid);
        foreach ($s as $row) {
            echo $row->category;
            echo ",";
        }
    }

//***********************Insert Inventory Table(Get Category) End***************//    
//***********************Insert Inventory Table(Get Block) Start***************//

    public function getblocks() {
        $projectid = $this->input->post('arg');
        $row = $this->Pre_sales_model->getblocks($projectid);
        echo $row;
    }

//***********************Insert Inventory Table(Get Block) Start***************//    
    public function getunit() {
        $unitnoid = $this->input->post('unitnoid');
        //$data['typename'] = $this->input->post('typename');
        $s = $this->Pre_sales_model->findunit($unitnoid);
        foreach ($s as $row) {
            echo $row->unit_type;
            echo ",";
        }
    }

    function get_project_details_json() {
        $projectid = $this->input->post('arg');
        // $projectid = $this->input->get('arg');
        //  echo $projectid;
        $json_rows = $this->Pre_sales_model->get_prj_details_json($projectid);
        header('Content-Type: application/json');
        echo json_encode($json_rows);
    }

    //public function getproject() {
    // $projectid = $this->input->post('arg');
    //$row = $this->admin_modal->getblocks1(arg);
    //echo $row;
    // }
    // 
//************************Display project Detail (Get all projects) Start************************//

    public function get_all_projects() {


        $data['project_id'] = $this->input->post('pid');


        echo '<table class="table table-responsive table-striped" style="border:2px solid #444;">';
        echo '<tr style="background-color:#E8E8E8;">';
        echo '<th>Block</th>';
        echo '<th>Unit Type</th>';
        echo '<th>Category</th>';
        echo '<th>Carpet Area</th>';
        echo '<th>Ref. Rate</th>';
        echo '<th>First Floor Carpet Area</th>';
        echo '<th>Ref. Rate</th>';
        echo '<th>Ground Floor Carpet Area</th>';
        echo '<th>Ref. Rate</th>';
        echo '<th>Balcony Area</th>';
        echo '<th>Ref. Rate</th>';
        echo '<th>Common Area</th>';
        echo '<th>Ref. Rate</th>';
        echo '<th>Wash Area</th>';
        echo '<th>Ref. Rate</th>';
        echo '<th>Edit</th>';
        echo '</tr>';

        $s = $this->Pre_sales_model->get_all_projects($data);
        foreach ($s as $row) {
            echo '<tr>';
            echo '<td>' . $row->block . '</td>';
            echo '<td>' . $row->unit_type . '</td>';
            echo '<td>' . $row->category . '</td>';
            echo '<td>' . $row->carpet_area . '</td>';
            echo '<td>' . $row->ca_ref_rate . '</td>';
            echo '<td>' . $row->first_floor_carpet_area . '</td>';
            echo '<td>' . $row->ffca_ref_rate . '</td>';
            echo '<td>' . $row->ground_floor_carpet_area . '</td>';
            echo '<td>' . $row->gfca_ref_rate . '</td>';
            echo '<td>' . $row->balcony_area . '</td>';
            echo '<td>' . $row->balcony_ref_rate . '</td>';
            echo '<td>' . $row->common_area . '</td>';
            echo '<td>' . $row->commonarea_ref_rate . '</td>';
            echo '<td>' . $row->wash_area . '</td>';
            echo '<td>' . $row->washarea_ref_rate . '</td>';


            echo '<td>'
            . anchor('Admin_controller/get_project?id=' . $row->id . '?' . $row->unit_type, '<i class="fa fa-pencil">' . '</i>', 'class="btn btn-success btn-3d"') . "</td>";
            echo '</tr>';
        }
        echo "</table>";
    }

//************************Display project Detail (Get all projects) End************************//
//************************Display Project Detail (Project search) Start************************//

    public function project_search() {

        $uid = $this->input->post('sendid');
        $ulist = explode("/", $uid);
        $data['userid'] = $ulist[0];
        $data['projectid'] = $ulist[1];

        $r = $this->Pre_sales_model->show_project_dtl($data);


        $this->load->view('update_project_details', $r);
    }

//************************Display Project Detail (Project search) End************************//
//***********************Add New Project Start***************//

    public function takeNewProject() {
        //print_r($_POST);
        $data['project_name'] = $this->input->post('project_name');
        $data['location'] = $this->input->post('project_location');
        $data['block'] = $this->input->post('project_blocks');
        $data['registration_no'] = $this->input->post('registration_num');
        $data['city'] = $this->input->post('city');
        $data['state'] = $this->input->post('state');
        $data['pincode'] = $this->input->post('pincode');
        $data['contact_no'] = $this->input->post('contact');
        $data['status'] = $this->input->post('status');

        $s = $this->Pre_sales_model->getProjectDetail1($data);
        if ($s == true) {
            $success['success'] = "done";
            $this->load->view('add_new_project', $success);
            unset($_POST);
        } else {
            $success['failure'] = "done";
            $this->load->view('add_new_project', $success);
            unset($_POST);
        }
    }

//***********************Add New Project End***************//
//***********************Delete Existing Project (Add New Project) Start***************//

    public function projectdeletebyid($id) {
        //echo $id;
        $r = $this->Pre_sales_model->projectremovebyid($id);
        if ($r == true) {
            $status['delete'] = "done";
            $this->load->view('add_new_project', $status);
            unset($_POST);
        }
    }

//***********************Delete Existing Project (Add New Project) End***************//    
    //read Customization logininfo start here

    public function readlogininputs() {
        $this->load->library('form_validation');

        $lgdata = array(
            "username" => $this->input->post('username'),
            "password" => $this->input->post('password'),
            "role" => $this->input->post('role')
        );

        $r = $this->Pre_sales_model->isloginvalid($lgdata);

        if ($r == true) {
            $this->session->set_userdata($lgdata);
            $this->load->view('customization_dashboard');
            //  print_r('valid user');
        } else {
            $msg['danger'] = "danger";
            $this->load->view('customization_login', $msg);
        }
    }

    public function user_check() {
        $this->load->library('form_validation');
    }

//read Customization logininfo ends here


    public function getprojectblocks1() {
        //$projectid = $this->input->post('arg');
        $this->Pre_sales_model->getblocksbyprojectpar();
    }

//***********************Add Category Start***************//
    public function insertCategoryName() {

        $data['unit_type'] = $this->input->post('unittype_select');
        $data['category_name'] = $this->input->post('category');
        $s = $this->Pre_sales_model->addcategoryname($data);
        if ($s == true) {
            $success['msg'] = "done";
            $this->load->view('add_category', $success);
            unset($_POST);
        } else {
            $success['failure'] = "done";
            $this->load->view('add_category', $success);
            unset($_POST);
        }
    }

//***********************Add Category End***************//
//***********************Delete Category from existing Add Category table start here***********************//

    public function categorydeletebyid($id) {
        //echo $id;
        $r = $this->Pre_sales_model->categoryremovebyid($id);
        if ($r == true) {
            $status['delete'] = "done";
            $this->load->view('add_category', $status);
            unset($_POST);
        }
    }

//***********************Delete Category from existing Add Category table End here***********************//
//***********************Update project Detail  Start here***********************//

    public function updateProjectdetailbyid() {

        $id = $this->input->post('id');
        $r = $this->Pre_sales_model->doProjectDetailUpdate($id);
        if ($r == true) {
            $success['msg'] = "done";
            $this->load->view('display_project_details', $success);
            unset($_POST);
        } else {
            $success['failure'] = "done";
            $this->load->view('display_project_details', $success);
            unset($_POST);
        }
    }

//***********************Update project Detail End here***********************//
//***********************Insert Parking Inventory Start***************//

    public function insert_parking_inventory() {
        $s = $this->Pre_sales_model->get_parking_inventory_inputs();
        if ($s == true) {
            $success['msg'] = "done";
            $this->load->view('insert_parking_inventory', $success);
            unset($_POST);
        } else {
            $success['failure'] = "done";
            $this->load->view('insert_parking_inventory', $success);
            unset($_POST);
        }
    }

//***********************Insert Parking Inventory End***************// 
//***********************Parking Inventory (Get Parking Number) Start***************//

    public function get_parking_number() {
        $project_id = $this->input->post('project_id');
        $s = $this->Pre_sales_model->get_parking_number($project_id);
        //error_log("admin_controller::get_parking_number():: " . implode(";", $s));
        foreach ($s as $row) {
            echo $row->parking_no;
            echo ",";
        }
    }

//***********************Parking Inventory (Get Parking Number) End***************//    
//***********************Parking Allocation Start***************//

    public function insert_parking_allocation() {
        $s = $this->Pre_sales_model->get_parking_allocation_inputs();
        if ($s == true) {
            $success['msg'] = "done";
            $this->load->view('parking_allocation', $success);
            unset($_POST);
        } else {
            $success['failure'] = "done";
            $this->load->view('parking_allocation', $success);
            unset($_POST);
        }
    }

//***********************Parking Allocation End***************//     

    public function get_parking_unitnumber() {
        $project_id = $this->input->post('project_id');
        $s = $this->Pre_sales_model->get_parking_unitnumber($project_id);
        //error_log("admin_controller::get_parking_unitnumber():: " . implode(";", $s));
        foreach ($s as $row) {
            echo $row->unit_no;
            echo ",";
        }
    }

//___________________NOt being used -------------------
    public function get_parking_unittype() {
        $projectid = $this->input->post('arg');
        $s = $this->Pre_sales_model->get_parking_unittype($project_id);
        error_log("admin_controller::get_parking_unitnumber()::got unit number" . $s);
        echo $s;
    }

//___________________NOt being used -------------------
    public function testpage() {
        $this->load->view('presales/testpage');
    }

    public function add_new_project() {
        $this->load->view('add_new_projectnew');
    }

    public function add_project_detail() {
        $this->load->view('add_project_detail');
    }

    public function add_area_dimension() {
        $this->load->view('add_area_dimension');
    }

    public function insert_inventory() {

        $this->load->view('insert_inventory');
    }

    public function add_facing() {

        $this->load->view('add_facing');
    }

    public function add_location() {

        $this->load->view('add_location');
    }

    public function display_project_detail() {

        $this->load->view('display_project_details');
    }

    public function add_category() {

        $this->load->view('add_category');
    }

    public function logout() {

        $this->load->view('customadmin_logout');
    }

    public function show_dash() {

        $this->load->view('customization_dashboard');
    }

    public function logout_cnfd() {
        $this->session->sess_destroy();
        $this->load->view('customization_login');
    }

    public function custom_login() {
        //$this->session->sess_destroy();
        $this->load->view('customization_login');
    }

    public function parking_allotment_form() {

        $this->load->view('parking_allotment_form');
    }

    public function insrt_parking_inventory() {

        $this->load->view('insert_parking_inventory');
    }

    public function parking_allocation() {

        $this->load->view('parking_allocation');
    }

    public function get_project() {

        $this->load->view('update_project_details');
    }

    //***********************Add Site Stage Start***************//    

    public function take_site_stages() {

        $data['stage'] = $this->input->post('stage_name');
        $data['type'] = $this->input->post('type');
        $data['step_no'] = $this->input->post('step_no');
        $s = $this->Pre_sales_model->get_site_stages($data);
        if ($s == true) {
            $success['msg'] = "done";
            $this->load->view('add_site_stages', $success);
            unset($_POST);
        } else {
            $success['failure'] = "done";
            $this->load->view('add_site_stages', $success);
            unset($_POST);
        }
    }

//***********************Add Site Stage End***************// 
//***********************Delete Existing Site Stage (Add Site Stage) Start***************//  

    public function site_stage_delete_by_id($id) {
        //echo $id;
        $r = $this->Pre_sales_model->site_stage_remove_by_id($id);
        if ($r == true) {
            $status['delete'] = "done";
            $this->load->view('add_site_stages', $status);
            unset($_POST);
        }
    }

//***********************Delete Existing Site Stage (Add Site Stage) End***************// 

    public function add_site_stages() {
        $this->load->view('add_site_stages');
    }

    public function add_payment_maintenance() {
        $this->load->view('add_payment_stages');
    }

    //***********************Add Project Detail (Get project Blocks) Start***************//

    public function getpaymentblock() {
        $projectid = $this->input->post('arg');
        $row = $this->Pre_sales_model->getblocksbyproject($projectid);
        echo $row;
    }

//*************************************23-august-2017 START*****************//    
    public function add_unit_type() {
        $this->load->view('add_unit_type');
    }

    //***********************Add Unit Type Start***************//    

    public function take_unit_type_name() {


        $data['type_name'] = $this->input->post('unit_type');
        $s = $this->Pre_sales_model->get_unit_type_name($data);
        if ($s == true) {
            $success['msg'] = "done";
            $this->load->view('add_unit_type', $success);
            unset($_POST);
        } else {
            $success['failure'] = "done";
            $this->load->view('add_unit_type', $success);
            unset($_POST);
        }
    }

//***********************Add Unit Type End***************//     
//***********************Delete Existing Unit Type (Add Unit Type) Start***************//  

    public function unit_type_delete($id) {
        //echo $id;
        $r = $this->Pre_sales_model->unit_type_delete_by_id($id);
        if ($r == true) {
            $status['delete'] = "done";
            $this->load->view('add_unit_type', $status);
            unset($_POST);
        }
    }

//***********************Delete Existing Unit Type (Add Unit Type) End***************// 
//*************************************23-august-2017 End*****************// 
    //**********************************(25-08-2017) Start*******************************//    
    //**********************************Create New user Start********** *********************//
    public function registation_inputs() {

        $data['first_name'] = $this->input->post('first_name');
        $data['last_name'] = $this->input->post('last_name');
        $data['phone'] = $this->input->post('phone');
        $data['email'] = $this->input->post('email');
        $data['role'] = $this->input->post('role');
        $data['username'] = $this->input->post('username');
        $data['password'] = sha1($this->input->post('password'));

        $s = $this->Pre_sales_model->get_register_input($data);
        if ($s == true) {
            $success['msg'] = "done";
            $this->load->view('add_new_user', $success);
            unset($_POST);
        } else {
            $success['failure'] = "done";
            $this->load->view('add_new_user', $success);
            unset($_POST);
        }
    }

//**********************************Create New user End*******************************//   
//***********************Delete Existing Unit Type (Add Unit Type) Start***************//  

    public function user_delete_by_id($id) {
//echo $id;
        $r = $this->Pre_sales_model->user_delete_by_id($id);
        if ($r == true) {
            $status['delete'] = "done";
            $this->load->view('manage_user', $status);
            unset($_POST);
        }
    }

//***********************Delete Existing Unit Type (Add Unit Type) End***************//  
//***********************Load update user view for updating a record Start*****************//    
    public function view_pg() {

        $this->load->view('update_user');
    }

//***********************Load update user view for updating a record End*****************//      
//***********************Update Existing User Start*****************// 
    public function update_user() {

        $id = $this->input->post('id');
        $r = $this->Pre_sales_model->update_view_page($id);
        if ($r == true) {
            $success['msg'] = "done";
            $this->load->view('manage_user', $success);
            unset($_POST);
        } else {
            $success['failure'] = "done";
            $this->load->view('manage_user', $success);
            unset($_POST);
        }
    }

//***********************Update Existing User End*****************//    
    public function manage_user() {
        $this->load->view('manage_user');
    }

    public function add_payment_stages() {
        $this->load->view('add_payment_stages');
    }

//***********************Add Payment Stages Start*****************//      
    public function payment_stage_Inp() {

        $data['project_id'] = $this->input->post('project_id');
        $data['block'] = $this->input->post('block');
        $data['type'] = $this->input->post('type');
        $data['category'] = $this->input->post('category');
        $data['stage'] = $this->input->post('stage');
        $data['payable_amt'] = $this->input->post('payable_amt');
        $result = $this->Pre_sales_model->getPayment_stageInput($data);
        if ($result == true) {
            $success['msg'] = "success";
            $this->load->view('add_payment_stages', $success);
            unset($_POST);
        }
    }

//**********************************(26-08-2017) Start*******************************//        
//***********************Add Payment stages (Get stage) Start***************//

    public function get_stage() {
        $stageid = $this->input->post('stageid');
        //$data['typename'] = $this->input->post('typename');
        $s = $this->Pre_sales_model->find_stage($stageid);
        foreach ($s as $row) {
            echo $row->stage;
            echo ",";
        }
    }

//***********************Add Payment stages (Get stage) End***************// 
    public function add_new_user() {
        $this->load->view('add_new_user');
    }

    public function back_to_manage_user() {
        $this->load->view('manage_user');
    }

    public function back_to_project_dtl() {
        $this->load->view('display_project_details');
    }

//**********************************(26-08-2017) End*******************************//    
//**********************************(01-September-2017) Start*******************************//     
    public function insert_company_info() {

        $data['attribute'] = $this->input->post('attribute');
        $data['value'] = $this->input->post('value');



        $result = $this->Pre_sales_model->companyInput($data);


        if ($result == true) {
            $success['msg'] = "success";
            $this->load->view('company_info', $success);
            unset($_POST);
        }
    }

    public function company_info() {
        $this->load->view('company_info');
    }

//**********************************(01-September-2017) End*******************************//     
    public function company_info_delete_by_id($id) {
        //echo $id;
        $r = $this->Pre_sales_model->company_info_delete_by_id($id);
        if ($r == true) {
            $status['delete'] = "done";
            $this->load->view('company_info', $status);
            unset($_POST);
        }
    }

    public function get_the_following_stages() {
        $data['project_id'] = $this->input->post('project_id');
        $data['block'] = $this->input->post('block');
        $data['type'] = $this->input->post('type');
        $data['category'] = $this->input->post('category');

        log_message('DEBUG', "Data in get_the_following_stages(): " . json_encode($data));
        $s = $this->Pre_sales_model->get_the_following_stages($data);
        if ($s != NULL) {
            foreach ($s as $row) {
                log_message('DEBUG', "222 Data in get_the_following_stages(): " . $row['stage']);
                echo $row['stage'];
                echo ",";
            }
        } else {
            echo '';
        }
    }

    public function get_type() {

        $data['project_id'] = $this->input->post('project_id');
        $data['block'] = $this->input->post('block');
        $r = $this->Pre_sales_model->get_type($data);
        foreach ($r as $row) {
            echo $row->unit_type;
            echo ",";
        }
    }

    public function get_category() {
        $data['project_id'] = $this->input->post('project_id');
        $data['block'] = $this->input->post('block');
        $data['unit_type'] = $this->input->post('type');

        //$data['typename'] = $this->input->post('typename');
        $s = $this->Pre_sales_model->find_category($data);
        foreach ($s as $row) {
            echo $row->category;
            echo ",";
        }
    }

    public function get_next_step_no() {
        $get_typ = $this->input->post('type');
        $s = $this->Pre_sales_model->get_next_step_no_for($get_typ);
        foreach ($s as $row) {
            $next = $row->next_step_no;
            if ($next != NULL) {
                echo $next;
            } else {
                echo "0";
            }
        }
    }

    public function getfootmtrlist() {
        $typeid = $this->input->post('typeid');
        $pid = $this->input->post('pid');
        //$data['typename'] = $this->input->post('typename');
        $s = $this->Pre_sales_model->findfoot($typeid, $pid);
        foreach ($s as $row) {
            echo $row->plot_size_mtr;
            echo ",";
        }
    }

    public function getplotdetail() {
        $data['type'] = $this->input->post('unittype'); //('unittype_select');
        $data['plot_size_mtr'] = $this->input->post('plot_size_mtr');
        $data['project_id'] = $this->input->post('pid');
        $data['block'] = $this->input->post('block');

        $s = $this->Pre_sales_model->getplotdetail($data);
        foreach ($s as $row) {
            echo $row->plot_size_ft;
            echo ",";
        }
    }

    public function insert_area_dimension() {

        $plot_size_mtr = $this->input->post('length_m') . 'X' . $this->input->post('width_m');
        $ftcalc = $this->input->post('length_m') * 3.28 . 'X' . $this->input->post('width_m') * 3.28;
        $plot_size_ft = $ftcalc;
        $data['project_id'] = $this->input->post('project_id');
        $data['plot_size_mtr'] = $plot_size_mtr;
        $data['plot_size_ft'] = $plot_size_ft;
        $data['block'] = $this->input->post('block');
        $data['type'] = $this->input->post('type');
        $data['length_m'] = $this->input->post('length_m');
        $data['width_m'] = $this->input->post('width_m');
        //$data['plot_sqmt'] = $this->input->post('plot_sqmt');
        //$data['plot_sqft'] = $this->input->post('plot_sqft');

        $result = $this->Pre_sales_model->insert_area_dimension($data);
        if ($result == true) {
            $success['msg'] = "success";
            $this->load->view('add_area_dimension', $success);
            unset($_POST);
        }
    }

    //***********************Delete Existing dimension (Add dimension) Start***************//  

    public function dimension_delete($id) {
        //echo $id;
        $r = $this->Pre_sales_model->dimension_delete($id);
        if ($r == true) {
            $status['delete'] = "done";
            $this->load->view('add_area_dimension', $status);
            unset($_POST);
        }
    }

//***********************Delete Existing Unit Type (Add dimension) End***************// 

    public function open_sheet1() {

        $this->load->view('presales/sheet1');
    }

    public function getunit_no_available() {
        $data['project_id'] = $this->input->post('pid');
        $data['block'] = $this->input->post('block');
        $data['type'] = $this->input->post('unittype');
        $data['category'] = $this->input->post('cat');
        $data['plot_size_mtr'] = $this->input->post('plot_size_mtr');
        $data['plot_size_ft'] = $this->input->post('plot_size_ft');

        $s = $this->Pre_sales_model->getunitdetail($data);
        if (sizeof($s) == 0) {
            echo false;
        } else {
            foreach ($s as $row) {
                echo $row->unit_no;
                echo ",";
            }
        }
    }

    public function getunit_no_available3() {
        $data['project_id'] = $this->input->post('pid');
        $data['block'] = $this->input->post('block');
        $data['type'] = $this->input->post('unittype');
        $data['category'] = $this->input->post('cat');
        // $data['plot_size_mtr'] = $this->input->post('plot_size_mtr');
        // $data['plot_size_ft'] = $this->input->post('plot_size_ft');

        $s = $this->Pre_sales_model->getunitdetail3($data);
        if (sizeof($s) == 0) {
            echo false;
        } else {
            foreach ($s as $row) {
                echo $row->unit_no;
                echo ",";
            }
        }
    }

    public function getunit_no_shopavailable3() {


        $typeid = $this->input->post('typeid');
        $pid = $this->input->post('pid');

        $s = $this->Pre_sales_model->getunit_shopdetail3($typeid, $pid);
        if (sizeof($s) == 0) {
            echo false;
        } else {
            foreach ($s as $row) {
                echo $row->unit_no;
                echo ",";
            }
        }
    }

    public function open_sheetno1() {
        $project_id = $this->input->post('project_select');
        $type = $this->input->post('unittype_select');

        if (($project_id == '2') && ($type == 'Flat')) {
            $data1['name'] = $this->input->post('name');
            $data1['login_id'] = $this->input->post('login_id');
            $data1['project_name'] = $this->input->post('project_name');
            $data1['block'] = $this->input->post('block_select');
            $data1['mobile'] = $this->input->post('mobile');
            $data1['email'] = $this->input->post('email');
            $data1['address'] = $this->input->post('address');
            $data1['project_id'] = $this->input->post('project_select');
            $data1['type'] = $this->input->post('unittype_select');
            $data1['category'] = $this->input->post('flat_block');
            $data1['flat_type'] = $this->input->post('flat_type');
            $data1['floor'] = $this->input->post('floor');
            $data1['unit_no'] = $this->input->post('unit_no_flat');
            $data1['status'] = $this->input->post('status');

            $data2['prospect_id'] = $this->input->post('prospect_id');
            $data2['unit_no'] = $this->input->post('unit_no2');
            $data2['status_date'] = date("d-m-Y");



            $res = $this->Pre_sales_model->get_status_update($data2);
            $result = $this->Pre_sales_model->getvisitor_pjt_info($data1);
        } else {

            $data1['name'] = $this->input->post('name');
            $data1['login_id'] = $this->input->post('login_id');
            $data1['project_name'] = $this->input->post('project_name');
            $data1['mobile'] = $this->input->post('mobile');
            $data1['email'] = $this->input->post('email');
            $data1['address'] = $this->input->post('address');
            $data1['project_id'] = $this->input->post('project_select');
            $data1['type'] = $this->input->post('unittype_select');

            $data1['block'] = $this->input->post('block_select');

            $data1['category'] = $this->input->post('category_select');
            $data1['unit_no'] = $this->input->post('unit_no2');
            $data1['plot_size_mtr'] = $this->input->post('plot_size_mtr');
            $data1['plot_size_ft'] = $this->input->post('plot_size_ft');
            $data1['cal'] = $this->input->post('display');
            $data1['status'] = $this->input->post('status');

            $data2['prospect_id'] = $this->input->post('prospect_id');
            $data2['unit_no'] = $this->input->post('unit_no2');
            $data2['status_date'] = date("d-m-Y");



            $res = $this->Pre_sales_model->get_status_update($data2);
            $result = $this->Pre_sales_model->getvisitor_pjt_info($data1);
        }

        if ($result == true || $res == true) {
            $this->session->set_flashdata("success", "Prospect data saved successfully");
        } else {
            $this->session->set_flashdata("failure", "Prospect data save failed.");
        }
        redirect('Pre_sales/all_visitors');
    }

    public function all_visitors() {
        $this->load->view('presales/show_visitor');
    }

    public function show_visitor() {
        // echo "hello";        
        $this->load->view('presales/show_visitor');
    }

    public function new_prospect() {
        $this->load->view('presales/new_prospect');
    }

    public function view_sheet() {
        $this->load->view('presales/view_sheet');
    }

    public function plot_view_sheet() {
        $this->load->view('presales/plot_view_sheet');
    }

    public function flat_cost_cal_view() {
        $this->load->view('presales/flat_cost_calculation_view');
    }

    public function get_visitor_Flat_Input() {

        $data['login_id'] = $this->input->post('login_id');
        $data['prospect_id'] = $this->input->post('prospect_id');
        $data['name'] = $this->input->post('name');
        $data['mobile'] = $this->input->post('mobile');
        $data['date'] = $this->input->post('currentdate');
        $data['project_id'] = $this->input->post('project_id');
        $data['block'] = $this->input->post('block');
        $data['type'] = $this->input->post('type');
        $data['category'] = $this->input->post('category');
        $data['unit_no'] = $this->input->post('unit_no');


        $data['cost_wash_area'] = $this->input->post('cost_wash_area');
        $data['cost_washarea_ref_rate'] = $this->input->post('cost_washarea_ref_rate');
        $data['total_wash_area'] = $this->input->post('total_wash_area');


        $data['flat_carpet_area_mt'] = $this->input->post('flat_carpet_area_mt');
        $data['flat_carpet_area_ft'] = $this->input->post('flat_carpet_area_ft');
        $data['cost_carpet_area'] = $this->input->post('cost_carpet_area');
        $data['cost_ca_ref_rate'] = $this->input->post('cost_ca_ref_rate');
        $data['total_unit_cost_as_per_carpet_area'] = $this->input->post('total_unit_cost_as_per_carpet_area');
        $data['cost_balcony_area'] = $this->input->post('cost_balcony_area');
        $data['cost_balcony_ref_rate'] = $this->input->post('cost_balcony_ref_rate');
        $data['total_balcony_area'] = $this->input->post('total_balcony_area');
        $data['cost_balcony_area_2'] = $this->input->post('cost_balcony_area_2');
        $data['cost_balcony_ref_rate_2'] = $this->input->post('cost_balcony_ref_rate_2');
        $data['total_balcony_area_2'] = $this->input->post('total_balcony_area_2');
        $data['proportionate_common_area'] = $this->input->post('proportionate_common_area');
        $data['proportionate_common_area_ref_rate'] = $this->input->post('proportionate_common_area_ref_rate');
        $data['total_proportionate_common_area'] = $this->input->post('total_proportionate_common_area');
        $data['flat_parking'] = $this->input->post('flat_parking');
        $data['maintenance_cost_ref_rate'] = $this->input->post('maintenance_cost_ref_rate');
        $data['mpseb_cost_ref_rate'] = $this->input->post('mpseb_cost_ref_rate');
        $data['gst'] = $this->input->post('gst');
        $data['cost_payble_to_company'] = $this->input->post('cost_payble_to_company');
        $data['discount'] = $this->input->post('discount');
        $data['total_cost'] = $this->input->post('total_cost');
        $data['discussion'] = $this->input->post('discussion');
        $data['get_approval'] = '0';
        $result = $this->Pre_sales_model->getcalInput($data);
        $this->load->view('presales/show_visitor');
    }

    public function get_visitor_Flat_Input_update() {

        $data['id'] = $this->input->post('updateid');
        $data['login_id'] = $this->input->post('login_id');
        // $data['prospect_id'] = $this->input->post('prospect_id');
        $data['name'] = $this->input->post('name');
        $data['mobile'] = $this->input->post('mobile');
        $data['date'] = $this->input->post('currentdate');
        $data['project_id'] = $this->input->post('project_id');
        $data['block'] = $this->input->post('block');
        $data['type'] = $this->input->post('type');
        $data['category'] = $this->input->post('category');
        $data['unit_no'] = $this->input->post('unit_no');
        $data['cost_wash_area'] = $this->input->post('cost_wash_area');
        $data['cost_washarea_ref_rate'] = $this->input->post('cost_washarea_ref_rate');
        $data['total_wash_area'] = $this->input->post('total_wash_area');
        $data['flat_carpet_area_mt'] = $this->input->post('flat_carpet_area_mt');
        $data['flat_carpet_area_ft'] = $this->input->post('flat_carpet_area_ft');
        $data['cost_carpet_area'] = $this->input->post('cost_carpet_area');
        $data['cost_ca_ref_rate'] = $this->input->post('cost_ca_ref_rate');
        $data['total_unit_cost_as_per_carpet_area'] = $this->input->post('total_unit_cost_as_per_carpet_area');
        $data['cost_balcony_area'] = $this->input->post('cost_balcony_area');
        $data['cost_balcony_ref_rate'] = $this->input->post('cost_balcony_ref_rate');
        $data['total_balcony_area'] = $this->input->post('total_balcony_area');
        $data['cost_balcony_area_2'] = $this->input->post('cost_balcony_area_2');
        $data['cost_balcony_ref_rate_2'] = $this->input->post('cost_balcony_ref_rate_2');
        $data['total_balcony_area_2'] = $this->input->post('total_balcony_area_2');
        $data['proportionate_common_area'] = $this->input->post('proportionate_common_area');
        $data['proportionate_common_area_ref_rate'] = $this->input->post('proportionate_common_area_ref_rate');
        $data['total_proportionate_common_area'] = $this->input->post('total_proportionate_common_area');
        $data['flat_parking'] = $this->input->post('flat_parking');
        $data['maintenance_cost_ref_rate'] = $this->input->post('maintenance_cost_ref_rate');
        $data['mpseb_cost_ref_rate'] = $this->input->post('mpseb_cost_ref_rate');
        $data['gst'] = $this->input->post('gst');
        $data['cost_payble_to_company'] = $this->input->post('cost_payble_to_company');
        $data['discount'] = $this->input->post('discount');
        $data['total_cost'] = $this->input->post('total_cost');
        $data['discussion'] = $this->input->post('discussion');
        $data['get_approval'] = '0';

        $result = $this->Pre_sales_model->getupdate_flat_sheet($data);
        $this->load->view('presales/show_visitor');
    }

    public function get_visitor_Input() {


        $this->input->post('max_id');
        $data['login_id'] = $this->input->post('login_id');

        $data['prospect_id'] = $this->input->post('prospect_id');
        $data['name'] = $this->input->post('name');
        $data['mobile'] = $this->input->post('mobile');
        $data['date'] = $this->input->post('currentdate');
        $data['project_id'] = $this->input->post('project_id');
        $data['block'] = $this->input->post('block');
        $data['type'] = $this->input->post('type');
        $data['category'] = $this->input->post('category');
        $data['unit_no'] = $this->input->post('unit_no');
        $data['plot_size_mtr'] = $this->input->post('display');
        $data['plot_size_ft'] = $this->input->post('plot_size_ft');
        $data['cost_carpet_area'] = $this->input->post('cost_carpet_area');
        $data['cost_ca_ref_rate'] = $this->input->post('cost_ca_ref_rate');
        $data['total_unit_cost_as_per_carpet_area'] = $this->input->post('total_unit_cost_as_per_carpet_area');
        $data['cost_balcony_area'] = $this->input->post('cost_balcony_area');
        $data['cost_balcony_ref_rate'] = $this->input->post('cost_balcony_ref_rate');
        $data['total_balcony_area'] = $this->input->post('total_balcony_area');
        $data['cost_wash_area'] = $this->input->post('cost_wash_area');
        $data['cost_washarea_ref_rate'] = $this->input->post('cost_washarea_ref_rate');
        $data['total_wash_area'] = $this->input->post('total_wash_area');
        $data['cost_open_terrace_area_front'] = $this->input->post('cost_open_terrace_area_front');
        $data['cost_open_terrace_front_area_ref_rate'] = $this->input->post('cost_open_terrace_front_area_ref_rate');
        $data['total_open_terrace_area_front'] = $this->input->post('total_open_terrace_area_front');
        $data['cost_open_terrace_area_back'] = $this->input->post('cost_open_terrace_area_back');
        $data['cost_open_terrace_back_area_ref_rate'] = $this->input->post('cost_open_terrace_back_area_ref_rate');
        $data['total_open_terrace_area_back'] = $this->input->post('total_open_terrace_area_back');
        $data['cost_car_poarch_area'] = $this->input->post('cost_car_poarch_area');
        $data['cost_car_poarch_area_ref_rate'] = $this->input->post('cost_car_poarch_area_ref_rate');
        $data['total_car_poarch_area'] = $this->input->post('total_car_poarch_area');
        $data['discount'] = $this->input->post('discount');
        $data['cost_payble_to_company'] = $this->input->post('cost_payble');
        $data['gst'] = $this->input->post('gst');
        $data['total_cost'] = $this->input->post('total_cost');
        $data['discussion'] = $this->input->post('discussion');
        $data['extra_charge'] = $this->input->post('extra_charge');
        $data['extra_charge_des'] = $this->input->post('extra_charge_des');
        $data['premium_location_charges'] = $this->input->post('premium_location_charges');
        $data['premium_location_charges_des'] = $this->input->post('premium_location_charges_des');

        $data['get_approval'] = '0';

        // print_r($_POST);
        $result = $this->Pre_sales_model->getcalInput($data);



        redirect('Pre_sales/pre_sales_costing12?id=' . $this->input->post('max_id'));
    }

    public function update_plot_visitor_Input() {

        $data1['id'] = $this->input->post('updateid');
        $data1['login_id'] = $this->input->post('login_id');


        //  $data1['name'] = $this->input->post('name');
        // $data1['mobile'] = $this->input->post('mobile');
        //  $data1['date'] = $this->input->post('currentdate');
        // $data1['project_id'] = $this->input->post('project_id');
        // $data1['block'] = $this->input->post('block');
        //  $data1['type'] = $this->input->post('type');
        //  $data1['category'] = $this->input->post('category');
        //  $data1['unit_no'] = $this->input->post('unit_no');
        //  $data1['plot_size_mtr'] = $this->input->post('plot_size_mtr');
        //  $data1['plot_size_ft'] = $this->input->post('plot_size_ft');
        $data1['discount'] = $this->input->post('discount');
        $data1['cost_payble_to_company'] = $this->input->post('net_final_total_cost');
        // $data1['gst'] = $this->input->post('gst');
        $data1['total_cost'] = $this->input->post('cost_pay');
        // $data1['discussion'] = $this->input->post('discussion');
        // $data1['premium_location_charges'] = $this->input->post('premium_location_charges');
        //  $data1['premium_location_charges_des'] = $this->input->post('premium_location_charges_des');
        //  $data1['basic_cost_ref_rate'] = $this->input->post('basic_cost_ref_rate');
        //  $data1['mpseb_cost_ref_rate'] = $this->input->post('mpseb_cost_ref_rate');
        // $data1['water_connection_ref_rate'] = $this->input->post('water_connection_ref_rate');
        //  $data1['maintenance_cost_ref_rate'] = $this->input->post('maintenance_cost_ref_rate');
        $data1['get_approval'] = '0';
        // print_r($data1);
        $result = $this->Pre_sales_model->update_plot_sheet1($data1);

        //  redirect('Pre_sales/pre_sales_costing22?id=' . $data['prospect_id']);
        //   return $result;
        $this->load->view('presales/show_visitor');
    }

    public function get_visitor_Input1() {

        $this->input->post('max_id');
        $login_user_id = $this->session->userdata('user_id');
        $data1['login_id'] = $login_user_id;

        $data1['prospect_id'] = $this->input->post('prospect_id');
        $data1['name'] = $this->input->post('name');
        $data1['mobile'] = $this->input->post('mobile');
        $data1['date'] = $this->input->post('currentdate');
        $data1['project_id'] = $this->input->post('project_id');
        $data1['block'] = $this->input->post('block');
        $data1['type'] = $this->input->post('type');
        $data1['category'] = $this->input->post('category');
        $data1['unit_no'] = $this->input->post('unit_no');
        $data1['plot_size_mtr'] = $this->input->post('plot_size_mtr');
        $data1['plot_size_ft'] = $this->input->post('plot_size_ft');
        $data1['discount'] = $this->input->post('discount');
        $data1['cost_payble_to_company'] = $this->input->post('cost_pay');
        // $data1['gst'] = $this->input->post('gst');
        $data1['total_cost'] = $this->input->post('net_final_total_cost');
        $data1['discussion'] = $this->input->post('discussion');
        // $data1['premium_location_charges'] = $this->input->post('premium_location_charges');
        //  $data1['premium_location_charges_des'] = $this->input->post('premium_location_charges_des');
        $data1['basic_cost_ref_rate'] = $this->input->post('basic_cost_ref_rate');
        $data1['mpseb_cost_ref_rate'] = $this->input->post('mpseb_cost_ref_rate');
        $data1['water_connection_ref_rate'] = $this->input->post('water_connection_ref_rate');
        $data1['maintenance_cost_ref_rate'] = $this->input->post('maintenance_cost_ref_rate');
        $data1['corner_charges'] = $this->input->post('corner_charges');
        $data1['garden_facing_charges'] = $this->input->post('garden_facing_charges');
        $data1['get_approval'] = '0';
        //   print_r($data1);
        $result = $this->Pre_sales_model->getcalInput1($data1);
        redirect('Pre_sales/pre_sales_costing22?id=' . $this->input->post('max_id'));
    }

    public function pre_sales_costing() {
        $this->load->view('presales/pre_sales_cost_calculation');
    }

    public function pre_sales_costing_noti() {
        $this->load->view('presales/pre_sales_cost_calculation');
    }

    public function pre_sales_noti() {
        $j = $_GET['id'];
        //echo $j;

        $id = $_GET['id'];
        $explode_data = explode('?', $id);
        $id_dis = $explode_data[0];
        $prospect_id = $explode_data[1];


        $result = $this->Pre_sales_model->getupdate_noti($id_dis);

        redirect('Pre_sales/pre_sales_costing_noti?id=' . $prospect_id);
        //  if ($result == true) {
        // $this->session->set_flashdata("success","Prospect data saved successfully");
        //  }
        //  else
        //  {
        //      $this->session->set_flashdata("failure","Prospect data save failed.");
        //   }
        //  redirect('Pre_sales/all_visitors');
        //$this->load->view('presales/pre_sales_cost_calculation');
    }

    public function md_link() {
        $prospect_id = $_GET['id'];
        redirect('Pre_sales/pre_sales_costing_noti?id=' . $prospect_id);
    }

    public function pre_sales_md_noti() {
        $j = $_GET['id'];
        //echo $j;

        $id = $_GET['id'];
        $explode_data = explode('?', $id);
        $id_dis = $explode_data[0];
        $prospect_id = $explode_data[1];


        $result = $this->Pre_sales_model->getupdate_md_noti($id_dis);

        redirect('Pre_sales/pre_sales_costing_noti?id=' . $prospect_id);
    }

    public function pre_sales_sales_noti() {
        $j = $_GET['id'];
        //echo $j;

        $id = $_GET['id'];
        $explode_data = explode('?', $id);
        $id_dis = $explode_data[0];
        $prospect_id = $explode_data[1];


        $result = $this->Pre_sales_model->getupdate_sales_noti($id_dis);

        redirect('Pre_sales/pre_sales_costing_noti?id=' . $prospect_id);
    }

    public function pre_sales_costing3() {
        $success['msg'] = "success";
        $this->load->view('presales/pre_sales_cost_calculation', $success);
    }

    public function pre_sales_costing13() {

        $this->load->view('presales/view_sheet');
    }

    public function pre_sales_costing23() {

        $this->load->view('presales/plot_view_sheet');
    }
    public function pre_sales_costing232() {

        $this->load->view('presales/Phase1_Duplex_Cost_Calculation_view');
    }

    public function pre_sales_costing43() {

        $this->load->view('presales/Phase1_Shop_view');
    }

    public function EssarjeeSampada_Phase1_Shop_view() {

        $this->load->view('presales/Phase1_Shop_view');
    }

    public function EssarjeeSampada_Phase1_Shop_update() {

        $this->load->view('presales/Phase1_Shop_update');
    }

    public function pre_sales_costing2() {
        echo $j = $_GET['id'];
        $success['msg'] = "success";


        header("location:" . site_url('Pre_sales/pre_sales_costing3?id=') . $j);
        //$this->load->view('presales/pre_sales_cost_calculation?id='.$j,$success);
    }

    public function pre_sales_costing12() {
        echo $j = $_GET['id'];
        $success['msg'] = "success";


        header("location:" . site_url('Pre_sales/pre_sales_costing13?id=') . $j);
        //$this->load->view('presales/pre_sales_cost_calculation?id='.$j,$success);
    }

    public function pre_sales_costing22() {
        echo $j = $_GET['id'];
        $success['msg'] = "success";


        header("location:" . site_url('Pre_sales/pre_sales_costing23?id=') . $j);
        //$this->load->view('presales/pre_sales_cost_calculation?id='.$j,$success);
    }
    
    public function pre_sales_costing222() {
        echo $j = $_GET['id'];
        $success['msg'] = "success";


        header("location:" . site_url('Pre_sales/pre_sales_costing232?id=') . $j);
        //$this->load->view('presales/pre_sales_cost_calculation?id='.$j,$success);
    }

    public function pre_sales_costing42() {
        echo $j = $_GET['id'];
        $success['msg'] = "success";


        header("location:" . site_url('Pre_sales/pre_sales_costing43?id=') . $j);
        //$this->load->view('presales/pre_sales_cost_calculation?id='.$j,$success);
    }

    public function sheet1() {
        $this->load->view('presales/sheet1');
    }

    public function sheet1_other() {
        $this->load->view('presales/sheet1_other');
    }

    public function plotsheet1() {
        $this->load->view('presales/plot_sheet1');
    }

    public function Phase1_flat() {
        $this->load->view('presales/Phase1_flat');
    }
    
    public function Phase1_old_flat() {
        $this->load->view('presales/Phase1_flat_old_cost_calculation');
    }

    public function flatsheet1() {
        $this->load->view('presales/flat_cost_calculation');
    }

    public function update_sheet() {
        $this->load->view('presales/update_sheet1');
    }

    public function plotupdate_sheet() {
        $this->load->view('presales/plot_update_sheet');
    }

    public function flat_cost_calculation_update() {
        $this->load->view('presales/flat_cost_calculation_update');
    }

    public function update_visitor_Input() {
        $data['id'] = $this->input->post('id');
        $data['login_id'] = $this->input->post('login_id');
        $data['prospect_id'] = $this->input->post('prospect_id');
        $data['name'] = $this->input->post('name');
        $data['mobile'] = $this->input->post('mobile');
        $data['date'] = $this->input->post('currentdate');
        $data['project_id'] = $this->input->post('project_id');
        $data['block'] = $this->input->post('block');
        $data['type'] = $this->input->post('type');
        $data['category'] = $this->input->post('category');
        $data['unit_no'] = $this->input->post('unit_no');
        $data['plot_size_mtr'] = $this->input->post('plot_size_mtr');
        $data['plot_size_ft'] = $this->input->post('plot_size_ft');
        $data['cost_ca_ref_rate'] = $this->input->post('cost_ca_ref_rate');
        $data['total_unit_cost_as_per_carpet_area'] = $this->input->post('total_unit_cost_as_per_carpet_area');
        $data['cost_balcony_ref_rate'] = $this->input->post('cost_balcony_ref_rate');
        $data['total_balcony_area'] = $this->input->post('total_balcony_area');
        $data['cost_washarea_ref_rate'] = $this->input->post('cost_washarea_ref_rate');
        $data['total_wash_area'] = $this->input->post('total_wash_area');
        $data['cost_open_terrace_front_area_ref_rate'] = $this->input->post('cost_open_terrace_front_area_ref_rate');
        $data['total_open_terrace_area_front'] = $this->input->post('total_open_terrace_area_front');
        $data['cost_open_terrace_back_area_ref_rate'] = $this->input->post('cost_open_terrace_back_area_ref_rate');
        $data['total_open_terrace_area_back'] = $this->input->post('total_open_terrace_area_back');
        $data['cost_car_poarch_area_ref_rate'] = $this->input->post('cost_car_poarch_area_ref_rate');
        $data['total_car_poarch_area'] = $this->input->post('total_car_poarch_area');
        $data['discount'] = $this->input->post('discount');
        $data['cost_payble_to_company'] = $this->input->post('cost_payble');
        $data['gst'] = $this->input->post('gst');
        $data['total_cost'] = $this->input->post('total_cost');
        $data['discussion'] = $this->input->post('discussion');
        $data['extra_charge'] = $this->input->post('extra_charge');
        $data['extra_charge_des'] = $this->input->post('extra_charge_des');
        $data['premium_location_charges'] = $this->input->post('premium_location_charges');
        $data['premium_location_charges_des'] = $this->input->post('premium_location_charges_des');

        $result = $this->Pre_sales_model->updtaesheet1($data);
        echo $result;
        echo $data['prospect_id'];


        //header("location:" . base_url('/index.php/Pre_sales/pre_sales_costing2?id='.$prospect_id));
        redirect('Pre_sales/pre_sales_costing2?id=' . $data['prospect_id']);
    }

    public function visitor_discussions_input() {
        $data['prospect_id'] = trim($this->input->post('prospect_id'));
        $prospect_id = $this->input->post('prospect_id');
        $data['date'] = $this->input->post('dates');
        $data['discussions'] = $this->input->post('discussions');
        $date1 = $this->input->post('reminder_date');

        //$date=


        $data['meeting_date'] = date("Y-m-d", strtotime($date1));

        $data['is_read'] = '0';
        $s = $this->Pre_sales_model->prospect_info_discussions($prospect_id);
        if ($s == true) {
            // foreach ($r as $row) {

            $name = $s[0]->name;
        }
        $data['name'] = $name;

        $result = $this->Pre_sales_model->visitor_discussions($data);
        echo $data['prospect_id'];
    }

    public function discussions_sucess() {
        $success['msg'] = "success";
        $this->load->view('presales/show_visitor', $success);
    }

    public function upadte_visitor_input() {
        $data['project_id'] = $this->input->post('project_id');
        $id = $this->input->post('prospect_id');


        $b = $this->Pre_sales_model->view_cal_info($id);

        if ($b == true) {


            $type = $b[0]->type;
            $category = $b[0]->category;
            $phase = $b[0]->block;
            $prid = $b[0]->project_id;
        }
        $dataty['type'] = $type;
        $dataty['category'] = $category;
        $dataty['block'] = $phase;
        $dataty['project_id'] = $prid;


        $data['name'] = $this->input->post('name');
        $data['pre_salesid'] = $this->input->post('prospect_id');

        $data1['unit_no'] = $this->input->post('unit_no');
        $data1['customer_id'] = $this->input->post('mcust_id');
        $data1['status'] = $this->input->post('status');

        $data1['discount'] = $this->input->post('discount');
        $data1['gst'] = $this->input->post('gst');
        $data1['cost_payble_to_company'] = $this->input->post('cost_payble_to_company');
        $data1['total_cost'] = $this->input->post('total_cost');

        $data2['id'] = $this->input->post('prospect_id');
        $data2['status'] = $this->input->post('status');

        //   print_r($data);
        $result = $this->Pre_sales_model->get_visitor_input($data, $dataty, $data1, $data2);

        echo $result; //('jolly bhaiya');
    }

    public function requestupadte_visitor_input() {
        $data['prospect_id'] = $this->input->post('prospect_id');
        $prospect_id = $this->input->post('prospect_id');
        $data['is_request'] = '0';
        $data['is_checked'] = '0';
        $data['get_approval'] = '1';
        $id = $prospect_id;
        $b = $this->Pre_sales_model->view_cal_info($id);
        $login_id = $this->session->userdata('user_id');

        $bc = $this->View_applicant_info->get_login_info($login_id);

        if ($bc == true) {

            $first_name = $bc[0]->first_name;
            $last_name = $bc[0]->last_name;
        }


        if ($b == true) {

            $name = $b[0]->name;
            $unit_no = $b[0]->unit_no;
            $type = $b[0]->type;
            $phase = $b[0]->block;
            $prid = $b[0]->project_id;
        }
        $data['project_id'] = $prid;
        $bd = $this->Pre_sales_model->getproject_info($data);

        if ($bd == true) {

            $project_name = $bd[0]->project_name;
        }


        $b = $this->Company_info_model->get_MD_email();

        if ($b == true) {

            $md_email = $b[0]->value;
        }

        if (DEPLOYED_ON == 'LOCALHOST') {

            $config = Array(
                'protocol' => GMAIL_SMTP_PROTOCOL,
                'smtp_host' => GMAIL_SMTP_HOST,
                'smtp_port' => GMAIL_SMTP_PORT,
                'smtp_user' => GMAIL_SMTP_USER,
                'smtp_pass' => GMAIL_SMTP_PASS,
                'mailtype' => 'html',
                'charset' => 'iso-8859-1',
                'wordwrap' => TRUE
            );
        }
        if (DEPLOYED_ON == 'CPANEL') {
            $config = Array(
                'smtp_host' => CPANEL_SMTP_HOST,
                'smtp_port' => CPANEL_SMTP_PORT,
                'smtp_user' => CPANEL_SMTP_USER,
                'smtp_pass' => CPANEL_SMTP_PASS,
                'mailtype' => 'html',
                'charset' => 'iso-8859-1',
                'wordwrap' => TRUE
            );
        }
        /* $data['first_name'] = $first_name;
          $data['last_name'] = $last_name;
          $data['name'] =$name;
          $data['unit_no'] =$unit_no;
          $data['type'] =$type;
          $data['project_name'] =$project_name;
          $data['prospect_id'] =$prospect_id;
          $message=  $this->load->view('customer_email', $data); */
        $message = " <html>
        <head>
            <title>Packet</title>
           <meta name = 'viewport' content = 'width=device-width, initial-scale=1.0'>
    <link href = 'https://fonts.googleapis.com/css?family=Titillium+Web:400,400i,700,700i' rel = 'stylesheet'>
    <link href = 'http://ogatechnologies.com:80/ogareal.cms/resources/css/bootstrap.css' rel = 'stylesheet' type = 'text/css'/>

    <script src='http://ogatechnologies.com:80/ogareal.cms/resources/js/jquery-3.2.1.min.js' type='text/javascript'></script>
    <script src='http://ogatechnologies.com:80/ogareal.cms/resources/js/jquery-ui.js' type='text/javascript'></script>
    <script src = 'http://ogatechnologies.com:80/ogareal.cms/resources/js/bootstrap.min.js' type = 'text/javascript'></script>
    <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet' integrity='sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN' crossorigin='anonymous'>
    <link rel='stylesheet' href='http://ogatechnologies.com:80/ogareal.cms/resources/css/side-menu.css'/>
    <link href='http://ogatechnologies.com:80/ogareal.cms/resources/css/top_menu.css' rel='stylesheet' type='text/css'/>
    <link rel='stylesheet' href='http://ogatechnologies.com:80/ogareal.cms/resources/css/style.css'/>
    <link href='http://ogatechnologies.com:80/ogareal.cms/resources/css/jquery-ui.css' rel='stylesheet' type='text/css'/> 
            </head>
        <body>
        <p>Request From $first_name   $last_name  for the Approvel of Cost Calculation  </p>
  Prospect Name : $name <br>
  Project Name : $project_name  $phase <br>
  Unit No. : $unit_no <br>
  Type : $type 
 <br><br><a href='" . site_url("Pre_sales/md_link?id=") . $prospect_id . "'>Kindly Approve Cost Calculation Link </a>

            
        </body>
    </html>
    ";

        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('ashwin.j@ogatechnologies.com'); // change it to yours
        $this->email->to($md_email); // change it to yours
        $this->email->subject('Approvel Request to MD ');
        $this->email->message($message);
        if ($this->email->send()) {

            $this->session->set_flashdata("success", "Email sent to the MD ");
        } else {

            //show_error($this->email->print_debugger());
            $this->session->set_flashdata("failure", "Email failed.");
        }


        $result = $this->Pre_sales_model->requestupdate_visitor_input($data);
        echo $result;
    }

    public function deletediscussbyid($id) {



        $s = $this->Pre_sales_model->prospect_discuss_details($id);
        if ($s == true) {
            // foreach ($r as $row) {



            $prospect_id = $s[0]->prospect_id;
        }
        $r = $this->Pre_sales_model->deletedis($id);
        redirect('Pre_sales/pre_sales_del?prospect_id=' . $prospect_id);
    }

    public function pre_sales_del() {
        echo $j = $_GET['prospect_id'];
        $success['msg'] = "success";


        header("location:" . site_url('Pre_sales/pre_sales_costing5?id=') . $j);
        //$this->load->view('presales/pre_sales_cost_calculation?id='.$j,$success);
    }

    public function pre_sales_costing5() {
        $success['msg'] = "success";
        $this->load->view('presales/pre_sales_cost_calculation', $success);
    }

    public function getunit_no_available1() {
        $data['project_id'] = $this->input->post('pid');
        $data['block'] = $this->input->post('block');
        $data['type'] = $this->input->post('unittype');
        $data['category'] = $this->input->post('cat');
        // $data['plot_size_mtr'] = $this->input->post('plot_size_mtr');
        //$data['plot_size_ft'] = $this->input->post('plot_size_ft');

        $s = $this->Pre_sales_model->getunitdetail1($data);
        foreach ($s as $row) {
            echo $row->unit_no;
            echo ",";
        }
    }

    public function getunit_no_availablename() {
        $data['project_id'] = $this->input->post('pid');
        $data['block'] = $this->input->post('block');
        $data['type'] = $this->input->post('unittype');
        $data['category'] = $this->input->post('cat');
        $data['unit_no'] = $this->input->post('unit_no');
        //$data['plot_size_ft'] = $this->input->post('plot_size_ft');

        $s = $this->Pre_sales_model->getunitdetailinfo($data);
        foreach ($s as $row) {
            echo $row->name;
            echo ",";
        }
    }

    public function payment_recipt() {

        $data['id'] = $this->input->post('id');
        $data1['login_id'] = $this->input->post('login_id');

        $rera_no = $this->input->post('rera_no');
        $block = $this->input->post('block_select');
        $type = $this->input->post('unittype_select');
        $category = $this->input->post('category_select');
        $data1['name'] = $this->input->post('name');
        $name = $this->input->post('name');
        $data1['unit_no'] = $this->input->post('unit_no2');
        $unit_no = $this->input->post('unit_no2');
        $data1['receipt_no'] = $this->input->post('receipt_no');
        $receipt_no = $this->input->post('receipt_no');
        $data2['receipt_no'] = $this->input->post('receipt_no');
        $data1['installment_no'] = $this->input->post('installment_no');
        $installment_no = $this->input->post('installment_no');
        $data1['arrears'] = $this->input->post('arrears');
        $arrears = $this->input->post('arrears');
        $data1['other_charges'] = $this->input->post('other_charges');
        $other_charges = $this->input->post('other_charges');
        $data1['payment_mode_no'] = $this->input->post('payment_mode_no');
        $payment_mode_no = $this->input->post('payment_mode_no');
        $data1['mode_of_payment'] = $this->input->post('mode_of_payment');
        $mode_of_payment = $this->input->post('mode_of_payment');
        $data1['date'] = $this->input->post('date');
        $date = $this->input->post('date');
        $data1['drawn_on'] = $this->input->post('drawn_on');
        $drawn_on = $this->input->post('drawn_on');
        $data1['advance'] = $this->input->post('advance');
        $advance = $this->input->post('advance');
        $data1['CGST'] = $this->input->post('CGST');
        $CGST = $this->input->post('CGST');
        $data1['SGST'] = $this->input->post('SGST');
        $SGST = $this->input->post('SGST');
        $data1['amount'] = $this->input->post('amount');
        $amount = $this->input->post('amount');
        $data1['descreption'] = $this->input->post('descreption');
        $descreption = $this->input->post('descreption');






        $a = $this->Company_info_model->get_account_section_email();

        if ($a == true) {

            $account_section = $a[0]->value;
        }

        /*
          $config = Array(
          'protocol' => GMAIL_SMTP_PROTOCOL,
          'smtp_host' => GMAIL_SMTP_HOST,
          'smtp_port' => GMAIL_SMTP_PORT,
          'smtp_user' => GMAIL_SMTP_USER,
          'smtp_pass' => GMAIL_SMTP_PASS,
          'mailtype' => 'html',
          'charset' => 'iso-8859-1',
          'wordwrap' => TRUE
          ); */

        $config = Array(
            'smtp_host' => CPANEL_SMTP_HOST,
            'smtp_port' => CPANEL_SMTP_PORT,
            'smtp_user' => CPANEL_SMTP_USER,
            'smtp_pass' => CPANEL_SMTP_PASS,
            'mailtype' => 'html',
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE
        );

        $message = " <html>
        <head>
            <title>Packet</title>
           <meta name = 'viewport' content = 'width=device-width, initial-scale=1.0'>
    <link href = 'https://fonts.googleapis.com/css?family=Titillium+Web:400,400i,700,700i' rel = 'stylesheet'>
    <link href = 'http://ogatechnologies.com:80/ogareal.cms/resources/css/bootstrap.css' rel = 'stylesheet' type = 'text/css'/>

    <script src='http://ogatechnologies.com:80/ogareal.cms/resources/js/jquery-3.2.1.min.js' type='text/javascript'></script>
    <script src='http://ogatechnologies.com:80/ogareal.cms/resources/js/jquery-ui.js' type='text/javascript'></script>
    <script src = 'http://ogatechnologies.com:80/ogareal.cms/resources/js/bootstrap.min.js' type = 'text/javascript'></script>
    <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet' integrity='sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN' crossorigin='anonymous'>
    <link rel='stylesheet' href='http://ogatechnologies.com:80/ogareal.cms/resources/css/side-menu.css'/>
    <link href='http://ogatechnologies.com:80/ogareal.cms/resources/css/top_menu.css' rel='stylesheet' type='text/css'/>
    <link rel='stylesheet' href='http://ogatechnologies.com:80/ogareal.cms/resources/css/style.css'/>
    <link href='http://ogatechnologies.com:80/ogareal.cms/resources/css/jquery-ui.css' rel='stylesheet' type='text/css'/> 
            </head>
        <body>
       
                                
        <table>
            
            <tr>
                <td><img src='http://ogatechnologies.com:80/ogareal.cms/resources/image/ESSARJEE.PNG' alt='Arvo ERP' class='img-responsive' /></td>
                   <td>&nbsp;</td>
                    <td><br><br><br>
                    <b>Date :</b> $date <br><br>
                    <b> Receipt No. :</b> $receipt_no <br><br>
                    <b> Rera Regd No.:</b> $rera_no <br>
                  </td>             
            </tr>
        </table>
        <br>
        <table>
            
            <tr>
                <td><b>Project Name</b></td>
                <td>ESSARJEE SAMPADA</td>
                
                <td>&nbsp;</td>
                
                <td><b>Installment No.</b></td>
                <td>$installment_no</td>
            </tr>
            <tr>
                <td><b>Block</b></td>
                <td>$block</td>
                
                <td>&nbsp;</td>
                
                <td><b>Arrears</b></td>
                <td>$arrears</td>
            </tr>
            <tr>
                <td><b>Unit-Type</b></td>
                <td>$type</td>
                
                <td>&nbsp;</td>
                
                <td><b>Other Charges</b></td>
                <td>$other_charges</td>
            </tr>
            <tr>
                <td><b>Category</b></td>
                <td>$category</td>
                
                <td>&nbsp;</td>
                
                <td><b>Mode Of Payment</b></td>
                <td>$mode_of_payment</td>
            </tr>
            <tr>
                <td><b>Unit No.</b></td>
                <td>$unit_no</td>
                    
                <td>&nbsp;</td>
                
                <td><b>Drawn on</b></td>
                <td>$drawn_on</td>
            </tr>
            <tr>
                <td><b>Received From</b></td>
                <td>$name</td>
                    
                <td>&nbsp;</td>
                
                <td><b>Cheque/DD/NIFT/RGTS No</b></td>
                <td>$payment_mode_no</td>
            </tr>
            <tr>
                <td><b>Amount</b></td>
                <td>$amount</td>
                    
                <td>&nbsp;</td>

                 <td><b>Descreption</b></td>
                <td>$descreption</td>
            </tr>
            <tr>
                <td><b>CGST</b></td>
                <td>$CGST</td>
                    
                <td>&nbsp;</td>
                    
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td><b>SGST</b></td>
                <td>$SGST</td>
                    
                <td>&nbsp;</td>
                
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td><b>Total Amount</b></td>
                <td>$advance</td>
                    
                <td>&nbsp;</td>
                    
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <br /> <br /> <br />
            <tr>
                <td><b>Note : Cheque subjected to Realisation.</b></td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
                <td><b>ESSARJEE CONSTRUCTIONS PRIVATE LIMITED</b></td>
            </tr>

        </table>
               
            
        </body>
    </html>
    ";

        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('ashwin.j@ogatechnologies.com'); // change it to yours
        $this->email->to($account_section); // change it to yours
        $this->email->subject('Direct Payment Receipt ');
        $this->email->message($message);
        if ($this->email->send()) {
            $this->session->set_flashdata("success", "Email sent to the Account Section");
        } else {
            //show_error($this->email->print_debugger());
            $this->session->set_flashdata("failure", "Email failed.");
        }
        $result = $this->Pre_sales_model->getpayment_receipt($data1);
        $result1 = $this->Pre_sales_model->receipt_series($data2);


        if ($result == true || $result1 == true) {
            $this->session->set_flashdata("success", "Direct Receipt  done successfully");
            redirect('Pre_sales/direct_receipt_print?id=' . $data['id']);
        } else {
            $this->session->set_flashdata("failure", "Direct Receipt failed.");
        }
        redirect('Payment/showpayment');
    }

    public function direct_receipt_print() {
        echo $j = $_GET['id'];

        header("location:" . site_url('Pre_sales/print_receipt?id=') . $j);
        //$this->load->view('presales/pre_sales_cost_calculation?id='.$j,$success);
    }

    public function print_receipt() {
        $this->session->set_flashdata("success", "Direct Receipt  Generated successfully");
        $this->load->view('direct_receipt_print');
    }

    public function convert() {
        $userid = $this->input->get('id');
        // print_r($userid);

        $r = $this->Pre_sales_model->get_unit_no($userid);
        if ($r == true) {
            foreach ($r as $row) {

                $id = $r[0]->id;
                $unit_no = $r[0]->unit_no;
            }

            $this->Pre_sales_model->get_update_status($userid);
            $this->Pre_sales_model->up_inventory($id);
            $this->Pre_sales_model->did_delete_row($userid);
            $this->Pre_sales_model->del_payment_stages($unit_no);
            $this->Pre_sales_model->del_site_report($unit_no);
            // $this->Pre_sales_model->up_parking($userid);

            $this->session->set_flashdata("success", "Customer is Converted into Visitor Update Successfully");

            redirect('Pre_sales/show_visitor');
        }
    }

    public function getmdcount() {

        $s = $this->Pre_sales_model->get_md_count();
        foreach ($s as $row) {
            echo $row->mdcount;
        }
    }

    public function getsalescount() {

        $s = $this->Pre_sales_model->get_sales_count();
        foreach ($s as $row) {
            echo $row->salescount;
        }
    }

    public function getnotif_count() {

        $s = $this->Pre_sales_model->get_notif_count();


        foreach ($s as $row) {
            echo $row->noticount;
        }
    }

    public function getdiss_count() {

        $s = $this->Pre_sales_model->future_meeting_notification1();


        foreach ($s as $row) {
            echo $row->id;
            echo '|';
            echo $row->prospect_id;
            echo '|';
            echo $row->name;
            echo '|';
            echo $row->meeting_date;
            echo ',';
        }
    }

    public function getmiss_diss_count() {

        $s = $this->Pre_sales_model->missed_meeting_notification1();


        foreach ($s as $row) {
            echo $row->id;
            echo '|';
            echo $row->prospect_id;
            echo '|';
            echo $row->name;
            echo '|';
            echo $row->meeting_date;
            echo ',';
        }
    }

    public function get_md_approve() {

        $s = $this->Pre_sales_model->md_notification1();


        foreach ($s as $row) {
            echo $row->id;
            echo '|';
            echo $row->prospect_id;
            echo '|';
            echo $row->name;

            echo ',';
        }
    }

    public function get_appl_approved() {

        $s = $this->Pre_sales_model->sales_notification1();


        foreach ($s as $row) {
            echo $row->id;
            echo '|';
            echo $row->prospect_id;
            echo '|';
            echo $row->name;

            echo ',';
        }
    }

    public function test_mail() {


        $config = Array(
            'protocol' => GMAIL_SMTP_PROTOCOL,
            'smtp_host' => GMAIL_SMTP_HOST,
            'smtp_port' => GMAIL_SMTP_PORT,
            'smtp_user' => GMAIL_SMTP_USER,
            'smtp_pass' => GMAIL_SMTP_PASS,
            'mailtype' => 'html',
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE
        );
        /*
          $config = Array(
          'smtp_host' => CPANEL_SMTP_HOST,
          'smtp_port' => CPANEL_SMTP_PORT,
          'smtp_user' => CPANEL_SMTP_USER,
          'smtp_pass' => CPANEL_SMTP_PASS,
          'mailtype' => 'html',
          'charset' => 'iso-8859-1',
          'wordwrap' => TRUE
          ); */
        $account_section = 'nirbhayc4@gmail.com';

        $message = " <html>
        <head>
            <title>Packet</title>
           <meta name = 'viewport' content = 'width=device-width, initial-scale=1.0'>
    <link href = 'https://fonts.googleapis.com/css?family=Titillium+Web:400,400i,700,700i' rel = 'stylesheet'>
    <link href = 'http://ogatechnologies.com:80/ogareal.cms/resources/css/bootstrap.css' rel = 'stylesheet' type = 'text/css'/>

    <script src='http://ogatechnologies.com:80/ogareal.cms/resources/js/jquery-3.2.1.min.js' type='text/javascript'></script>
    <script src='http://ogatechnologies.com:80/ogareal.cms/resources/js/jquery-ui.js' type='text/javascript'></script>
    <script src = 'http://ogatechnologies.com:80/ogareal.cms/resources/js/bootstrap.min.js' type = 'text/javascript'></script>
    <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet' integrity='sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN' crossorigin='anonymous'>
    <link rel='stylesheet' href='http://ogatechnologies.com:80/ogareal.cms/resources/css/side-menu.css'/>
    <link href='http://ogatechnologies.com:80/ogareal.cms/resources/css/top_menu.css' rel='stylesheet' type='text/css'/>
    <link rel='stylesheet' href='http://ogatechnologies.com:80/ogareal.cms/resources/css/style.css'/>
    <link href='http://ogatechnologies.com:80/ogareal.cms/resources/css/jquery-ui.css' rel='stylesheet' type='text/css'/> 
            </head>
        <body>
  
            
        </body>
    </html>
    ";

        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('ashwin.j@ogatechnologies.com'); // change it to yours
        $this->email->to($account_section); // change it to yours
        $this->email->subject('Direct Payment Receipt ');
        $this->email->message($message);
        if ($this->email->send()) {

            $this->session->set_flashdata("success", "Email sent to the Account Section");
        } else {

            //show_error($this->email->print_debugger());
            $this->session->set_flashdata("failure", "Email failed.");
        }
    }

    public function duplex_phase_sheet1() {

        $this->load->view('presales/Phase1_Duplex_Cost_Calculation');
    }

    public function duplex_phase_sheet_view() {
        $this->load->view('presales/Phase1_Duplex_Cost_Calculation_view');
    }

    public function get_visitor_duplexphase1() {

        $login_id = $this->session->userdata('user_id');
        $data1['login_id'] = $login_id;

        $data1['prospect_id'] = $this->input->post('prospect_id');
        $data1['name'] = $this->input->post('name');
        $data1['mobile'] = $this->input->post('mobile');
        $data1['date'] = $this->input->post('currentdate');
        $data1['project_id'] = $this->input->post('project_id');
        $data1['block'] = $this->input->post('block');
        $data1['type'] = $this->input->post('type');
        $data1['category'] = $this->input->post('category');
        $data1['unit_no'] = $this->input->post('unit_no');
        $data1['plot_size_mtr'] = $this->input->post('plot_size_mtr');
        $data1['plot_size_ft'] = $this->input->post('plot_size_ft');
        $data1['cost_carpet_area'] = $this->input->post('cost_carpet_area');
        $data1['cost_ca_ref_rate'] = $this->input->post('cost_ca_ref_rate');
        $data1['total_unit_cost_as_per_carpet_area'] = $this->input->post('total_unit_cost_as_per_carpet_area');
        $data1['discount'] = $this->input->post('discount');
        $data1['discount_two'] = $this->input->post('discount_two');
        $data1['cost_payble_to_company'] = $this->input->post('cost_pay');
        // $data1['gst'] = $this->input->post('gst');
        $data1['total_cost'] = $this->input->post('net_final_total_cost');
        $data1['discussion'] = $this->input->post('discussion');
        $data1['land_cost'] = $this->input->post('land_cost');
        $data1['construction_cost'] = $this->input->post('construction_cost');

        $data1['get_approval'] = '0';
        // print_r($data1);
        //   print_r($data1);
        $result = $this->Pre_sales_model->getcalInput1($data1);
        //   redirect('Pre_sales/pre_sales_costing22?id=' . $this->input->post('max_id'));
        $this->load->view('presales/show_visitor');
    }
    public function get_visitor_duplex_phase1new() {

        $login_id = $this->session->userdata('user_id');
        $data1['login_id'] = $login_id;

        $data1['prospect_id'] = $this->input->post('prospect_id');
        $data1['name'] = $this->input->post('name');
        $data1['mobile'] = $this->input->post('mobile');
        $data1['date'] = $this->input->post('currentdate');
        $data1['project_id'] = $this->input->post('project_id');
        $data1['block'] = $this->input->post('block');
        $data1['type'] = $this->input->post('type');
        $data1['category'] = $this->input->post('category');
        $data1['unit_no'] = $this->input->post('unit_no');
        $data1['plot_size_mtr'] = $this->input->post('plot_size_mtr');
        $data1['plot_size_ft'] = $this->input->post('plot_size_ft');
       
        $data1['total_unit_cost_as_per_carpet_area'] = $this->input->post('total_unit_cost_as_per_carpet_area');
        $data1['extra_charge'] = $this->input->post('extra_charge');
        $data1['land_cost'] = $this->input->post('construction_cost');
        $data1['maintenance_cost_ref_rate'] = $this->input->post('maintenance_cost_ref_rate');
        $data1['MPSEB_system'] = $this->input->post('MPSEB_system');
        $data1['registry_charges'] = $this->input->post('registry_charges');
        $data1['total_open_terrace_area_back'] = $this->input->post('total_open_terrace_area_back');
        $data1['discount'] = $this->input->post('discount');
        $data1['cost_payble_to_company'] = $this->input->post('cost_payble_to_company'); 
        $data1['total_cost'] = $this->input->post('total_cost');
        $data1['discussion'] = $this->input->post('discussion');
        $data1['namantaran'] = $this->input->post('namantaran'); 
        $data1['rcc_tower'] = $this->input->post('rcc_tower');
        $data1['ac_point_at_ff'] = $this->input->post('ac_point_at_ff');
     
      
        $data1['get_approval'] = '0';
       
          $r = $this->Pre_sales_model->get_cost_max_id();
        if ($r == true) {
            foreach ($r as $row) {

                $mid = $r[0]->id;
               
            }
            }
          $maxid = $mid + 1 ; 
        $result = $this->Pre_sales_model->getcalInput1($data1);
          redirect('Pre_sales/pre_sales_costing222?id=' . $maxid);
     
    }

    public function Phase1_Duplex_Cost_Calculation_update() {
        $this->load->view('presales/Phase1_Duplex_Cost_Calculation_update');
    }

    public function EssarjeeSampada_Phase1_SHOP() {
        $this->load->view('presales/Phase1_Shop');
    }

    public function update_Phase1_duplexcost_cal_Input() {

        $data1['id'] = $this->input->post('updateid');
        $data1['login_id'] = $this->input->post('login_id');
        $data1['cost_carpet_area'] = $this->input->post('cost_carpet_area');
        $data1['cost_ca_ref_rate'] = $this->input->post('cost_ca_ref_rate');
        
        $data1['total_unit_cost_as_per_carpet_area'] = $this->input->post('total_unit_cost_as_per_carpet_area');
        $data1['extra_charge'] = $this->input->post('extra_charge');
        $data1['land_cost'] = $this->input->post('construction_cost');
        $data1['maintenance_cost_ref_rate'] = $this->input->post('maintenance_cost_ref_rate');
        $data1['MPSEB_system'] = $this->input->post('MPSEB_system');
        $data1['registry_charges'] = $this->input->post('registry_charges');
        $data1['total_open_terrace_area_back'] = $this->input->post('total_open_terrace_area_back');
        $data1['discount'] = $this->input->post('discount');
        $data1['cost_payble_to_company'] = $this->input->post('cost_payble_to_company'); 
        $data1['total_cost'] = $this->input->post('total_cost');
        $data1['discussion'] = $this->input->post('discussion');
        $data1['namantaran'] = $this->input->post('namantaran'); 
        $data1['rcc_tower'] = $this->input->post('rcc_tower');
        $data1['ac_point_at_ff'] = $this->input->post('ac_point_at_ff');


        $data1['get_approval'] = '0';
        //  print_r($data1);
        $result = $this->Pre_sales_model->getupdate_flat_sheet($data1);

        //  redirect('Pre_sales/pre_sales_costing22?id=' . $data['prospect_id']);
        //   return $result;
        $this->load->view('presales/show_visitor');
    }

    public function update_Phase1_shop_cost_cal() {

        $data1['id'] = $this->input->post('updateid');
        $data1['login_id'] = $this->input->post('login_id');

        $data1['total_unit_cost_as_per_carpet_area'] = $this->input->post('total_unit_cost_as_per_carpet_area');
        $data1['discount'] = $this->input->post('discount');

        $data1['cost_payble_to_company'] = $this->input->post('cost_payble_to_company');
        $data1['total_unit_cost_as_per_carpet_area'] = $this->input->post('total_unit_cost_as_per_carpet_area');
        $data1['total_cost'] = $this->input->post('total_cost');
        $data1['discussion'] = $this->input->post('discussion');


        $data1['get_approval'] = '0';
        //  print_r($data1);
        $result = $this->Pre_sales_model->getupdate_shop_sheet($data1);

        //  redirect('Pre_sales/pre_sales_costing42?id=' . $data['prospect_id']);
        //   return $result;
        $this->load->view('presales/show_visitor');
    }

    public function get_visitor_shopphase1() {

        $login_id = $this->session->userdata('user_id');
        $data1['login_id'] = $login_id;

        $data1['prospect_id'] = $this->input->post('prospect_id');
        $data1['name'] = $this->input->post('name');
        $data1['mobile'] = $this->input->post('mobile');
        $data1['date'] = $this->input->post('currentdate');
        $data1['project_id'] = $this->input->post('project_id');
        $data1['block'] = $this->input->post('block');
        $data1['type'] = $this->input->post('type');

        $data1['unit_no'] = $this->input->post('unit_no');
        $data1['plot_size_mtr'] = $this->input->post('shop_area_sqmt');
        $data1['plot_size_ft'] = $this->input->post('shop_area_sqft');
        $data1['water_connection_ref_rate'] = $this->input->post('water_connection');
        $data1['maintenance_cost_ref_rate'] = $this->input->post('maintenance');
        $data1['total_unit_cost_as_per_carpet_area'] = $this->input->post('total_unit_cost_as_per_carpet_area');
        $data1['cost_payble_to_company'] = $this->input->post('cost_payble_to_company');
        $data1['discount'] = $this->input->post('discount_one');
        $data1['MPSEB_system'] = $this->input->post('MPSEB_system');
        $data1['registry_charges'] = $this->input->post('registry_charges');
        $data1['monthly'] = $this->input->post('monthly');
        $data1['MPSEB_meter'] = $this->input->post('MPSEB_meter');
        $data1['mutation'] = $this->input->post('mutation');
        $data1['society'] = $this->input->post('society');

        // $data1['gst'] = $this->input->post('gst');
        $data1['total_cost'] = $this->input->post('total_cost');
        $data1['discussion'] = $this->input->post('discussion');

        $data1['get_approval'] = '0';
        // print_r($data1);
        //   print_r($data1);
        $result = $this->Pre_sales_model->get_shop_input($data1);

        redirect('Pre_sales/pre_sales_costing42?id=' . $this->input->post('max_id'));
        // $this->load->view('presales/show_visitor');
    }

    public function getphase1flatblock() {
        $pid = $this->input->post('pid');
        $block = $this->input->post('block');
        $type = $this->input->post('typename');



        $s = $this->Pre_sales_model->findphase1flatblock($pid, $block, $type);
        foreach ($s as $row) {
            echo $row->category;
            echo ",";
        }
    }

    public function getphase1flattype() {
        $pid = $this->input->post('pid');
        $unit_type = $this->input->post('unit_type');
        $block = $this->input->post('block');
        $category = $this->input->post('category');

//$data['typename'] = $this->input->post('typename');
        $s = $this->Pre_sales_model->findphase1flattype($pid, $unit_type, $block, $category);
        foreach ($s as $row) {
            echo $row->flat_type;
            echo ",";
        }
    }

    public function getphase1flatfloor() {
        $pid = $this->input->post('pid');
        $unit_type = $this->input->post('unit_type');
        $block = $this->input->post('block');
        $category = $this->input->post('category');
        $flat_type = $this->input->post('flat_type');

//$data['typename'] = $this->input->post('typename');
        $s = $this->Pre_sales_model->findphase1flatfloor($pid, $unit_type, $block, $category, $flat_type);
        foreach ($s as $row) {
            echo $row->floor;
            echo ",";
        }
    }

    public function getphase1flatfloor_unit_no() {
        $pid = $this->input->post('pid');
        $unit_type = $this->input->post('unit_type');
        $block = $this->input->post('block');
        $category = $this->input->post('category');
        $flat_type = $this->input->post('flat_type');
        $floor = $this->input->post('floor');

//$data['typename'] = $this->input->post('typename');
        $s = $this->Pre_sales_model->findphase1flatfloor_unitno($pid, $unit_type, $block, $category, $flat_type, $floor);
        foreach ($s as $row) {
            echo $row->unit_no;
            echo ",";
        }
    }

    public function getcategoryy_inv() {
        $project_id = $this->input->post('pid');
        $block = $this->input->post('block');
        $type = $this->input->post('typeid');
        //$data['typename'] = $this->input->post('typename');
        $s = $this->Pre_sales_model->findcategory_inv($project_id, $block, $type);
        foreach ($s as $row) {
            echo $row->category;
            echo ",";
        }
    }

    public function getprojectunittypes() {
        $projectid = $this->input->post('prid');
        //$row = $this->Pre_sales_model->sendunittype($projectid);
        //echo $row;

        $s = $this->Pre_sales_model->projectunittype($projectid);
        foreach ($s as $row) {
            echo $row->type_name;
            echo ",";
        }
    }

}
?>




