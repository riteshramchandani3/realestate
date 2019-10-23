<?php

/*
 * Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential.
 * Written by Oga Technologies, October 1,  2016.
 */
defined('BASEPATH') OR exit('No direct script access allowed');

Class Final_calculation extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('locate_applicant_completion_search');
    }

    public function work_completion() {
        $this->load->view('work_completion');
    }

    public function view_work_completion() {
        $this->load->view('view_work_completion');
    }

    public function update_work_completion() {
        $this->load->view('update_work_completion');
    }

    public function calculation_final() {
        $this->load->view('final_calculation');
    }

    public function all_pages() {
        $this->load->view('all_pages');
    }

    public function final_cac_search() {
        $this->load->view('locate_applicant_finalcal');
    }

    public function view_calculation_final() {
        $this->load->view('final_calculation_view');
    }

    public function update_calculation_final() {
        $this->load->view('final_calculation_update');
    }

    public function due_statement() {
        $this->load->view('Due_statement');
    }

    public function completion_search() {

        $urole = $this->session->userdata('role');
        $data['user_id'] = $this->input->post('uname');
        $data['project_id'] = $this->input->post('pid');
        $data['unit_no'] = $this->input->post('unitno');
        echo '<table class="table table-responsive" style="border:2;">';
        echo '<tr>';
        echo '<th>Name</th>';
        echo '<th>Project</th>';
        echo '<th>Unit No.</th>';
        echo '<th>status</th>';
        echo '<th>Action</th>';
        echo '</tr>';

        $s = $this->Final_calculation_model->searchingallapplicationproject($data);
        foreach ($s as $row) {
            echo '<tr>';
            echo '<td>' . $row->name . '</td>';
            echo '<td>' . $row->project_name . nbs(1) . $row->block . '</td>';
            echo '<td>' . $row->unit_no . '</td>';
            echo '<td>' . $row->status . '</td>';

            $id = $row->id;

            $sql = "select * from completion_of_work where applicant_id='$id'";

            $this->db->query($sql);
            if ($this->db->affected_rows() > 0) {
                echo '<td>' . anchor('Final_calculation/view_work_completion?id=' . $row->id . '?' . $row->pid . '?' . $row->unit_no . '?' . $row->pre_salesid, '<i class="fa fa-eye">' . '&nbsp' . '</i>', 'class="btn btn-info btn-3d btn-sm" title="View"') .
                nbs(1) . anchor('Final_calculation/update_work_completion?id=' . $row->id . '?' . $row->pid . '?' . $row->unit_no . '?' . $row->pre_salesid, '<i class="fa fa-pencil">' . '&nbsp' . '</i>', 'class="btn btn-primary btn-3d btn-sm" title="Update"') . '</td>';
            } else {
                echo '<td>' .
                anchor('Final_calculation/work_completion?id=' . $row->id . '?' . $row->pid . '?' . $row->unit_no . '?' . $row->pre_salesid, '<i class="fa fa-plus">' . '&nbsp' . '</i>', 'class="btn btn-success btn-3d btn-sm" title="Add"') . '</td>';
            }
        }
        echo "</table>";
    }

    public function insert_work_completion_status() {
        $data['applicant_id'] = $this->input->post('user_id');
        $data['type'] = $this->input->post('type');
        $data['project_id'] = $this->input->post('project_id');
        $data['phase'] = $this->input->post('phase');
        $data['block'] = $this->input->post('block');
        $data['unit_no'] = $this->input->post('unit_no');
        $data['drawing_room'] = $this->input->post('drawing_room');
        $data['dining_room'] = $this->input->post('dining_room');
        $data['bedroom_1'] = $this->input->post('bedroom_1');
        $data['bedroom_2'] = $this->input->post('bedroom_2');
        $data['bedroom_3'] = $this->input->post('bedroom_3');
        $data['kitchen'] = $this->input->post('kitchen');
        $data['staircase'] = $this->input->post('staircase');
        $data['lobby_area'] = $this->input->post('lobby_area');
        $data['front_terrace'] = $this->input->post('front_terrace');
        $data['back_terrace'] = $this->input->post('back_terrace');
        $data['toilet_floor'] = $this->input->post('toilet_floor');
        $data['toilet_wall'] = $this->input->post('toilet_wall');
        $data['kitchen_wall_tiles'] = $this->input->post('kitchen_wall_tiles');
        $data['wash_area'] = $this->input->post('wash_area');
        $data['tpn'] = $this->input->post('tpn');
        $data['porch'] = $this->input->post('porch');
        $data['flush_door'] = $this->input->post('flush_door');
        $data['dewas_frame'] = $this->input->post('dewas_frame');
        $data['alluminium_handle'] = $this->input->post('alluminium_handle');
        $data['aldrops'] = $this->input->post('aldrops');
        $data['door_stopper'] = $this->input->post('door_stopper');
        $data['tower_bolt'] = $this->input->post('tower_bolt');
        $data['window_alluminium'] = $this->input->post('window_alluminium');
        $data['window_ventilator'] = $this->input->post('window_ventilator');
        $data['san_indian'] = $this->input->post('san_indian');
        $data['san_european'] = $this->input->post('san_european');
        $data['san_seat_cover'] = $this->input->post('san_seat_cover');
        $data['san_bib_cock'] = $this->input->post('san_bib_cock');
        $data['san_pillar_cock'] = $this->input->post('san_pillar_cock');
        $data['san_wall_mix'] = $this->input->post('san_wall_mix');
        $data['san_c_p_stop_cocks'] = $this->input->post('san_c_p_stop_cocks');
        $data['san_cpn'] = $this->input->post('san_cpn');
        $data['san_wash_basin'] = $this->input->post('san_wash_basin');
        $data['san_waste_pipe'] = $this->input->post('san_waste_pipe');
        $data['elec_6_amp_switch'] = $this->input->post('elec_6_amp_switch');
        $data['elec_16_amp_switch'] = $this->input->post('elec_16_amp_switch');
        $data['elec_6_amp_socket'] = $this->input->post('elec_6_amp_socket');
        $data['elec_16_amp_socket'] = $this->input->post('elec_16_amp_socket');
        $data['elec_ceiling_rose'] = $this->input->post('elec_ceiling_rose');
        $data['elec_angle_holder'] = $this->input->post('elec_angle_holder');
        $data['elec_button_holder'] = $this->input->post('elec_button_holder');
        $data['elec_mcb'] = $this->input->post('elec_mcb');
        $s = $this->Final_calculation_model->insert_work_completion($data);
        if ($s == TRUE) {
            $this->session->set_flashdata("success", "Work Completion Saved successfully");
            redirect('Final_calculation/index');
        } else {
            $this->session->set_flashdata("failure", "failed.");
            redirect('Final_calculation/index');
        }
        redirect('Final_calculation/index');
    }

    public function update_work_completion_status() {
        $data['applicant_id'] = $this->input->post('user_id');
        $data['type'] = $this->input->post('type');
        $data['project_id'] = $this->input->post('project_id');
        $data['phase'] = $this->input->post('phase');
        $data['block'] = $this->input->post('block');
        $data['unit_no'] = $this->input->post('unit_no');
        $data['drawing_room'] = $this->input->post('drawing_room');
        $data['dining_room'] = $this->input->post('dining_room');
        $data['bedroom_1'] = $this->input->post('bedroom_1');
        $data['bedroom_2'] = $this->input->post('bedroom_2');
        $data['bedroom_3'] = $this->input->post('bedroom_3');
        $data['kitchen'] = $this->input->post('kitchen');
        $data['staircase'] = $this->input->post('staircase');
        $data['lobby_area'] = $this->input->post('lobby_area');
        $data['front_terrace'] = $this->input->post('front_terrace');
        $data['back_terrace'] = $this->input->post('back_terrace');
        $data['toilet_floor'] = $this->input->post('toilet_floor');
        $data['toilet_wall'] = $this->input->post('toilet_wall');
        $data['kitchen_wall_tiles'] = $this->input->post('kitchen_wall_tiles');
        $data['wash_area'] = $this->input->post('wash_area');
        $data['tpn'] = $this->input->post('tpn');
        $data['porch'] = $this->input->post('porch');
        $data['flush_door'] = $this->input->post('flush_door');
        $data['dewas_frame'] = $this->input->post('dewas_frame');
        $data['alluminium_handle'] = $this->input->post('alluminium_handle');
        $data['aldrops'] = $this->input->post('aldrops');
        $data['door_stopper'] = $this->input->post('door_stopper');
        $data['tower_bolt'] = $this->input->post('tower_bolt');
        $data['window_alluminium'] = $this->input->post('window_alluminium');
        $data['window_ventilator'] = $this->input->post('window_ventilator');
        $data['san_indian'] = $this->input->post('san_indian');
        $data['san_european'] = $this->input->post('san_european');
        $data['san_seat_cover'] = $this->input->post('san_seat_cover');
        $data['san_bib_cock'] = $this->input->post('san_bib_cock');
        $data['san_pillar_cock'] = $this->input->post('san_pillar_cock');
        $data['san_wall_mix'] = $this->input->post('san_wall_mix');
        $data['san_c_p_stop_cocks'] = $this->input->post('san_c_p_stop_cocks');
        $data['san_cpn'] = $this->input->post('san_cpn');
        $data['san_wash_basin'] = $this->input->post('san_wash_basin');
        $data['san_waste_pipe'] = $this->input->post('san_waste_pipe');
        $data['elec_6_amp_switch'] = $this->input->post('elec_6_amp_switch');
        $data['elec_16_amp_switch'] = $this->input->post('elec_16_amp_switch');
        $data['elec_6_amp_socket'] = $this->input->post('elec_6_amp_socket');
        $data['elec_16_amp_socket'] = $this->input->post('elec_16_amp_socket');
        $data['elec_ceiling_rose'] = $this->input->post('elec_ceiling_rose');
        $data['elec_angle_holder'] = $this->input->post('elec_angle_holder');
        $data['elec_button_holder'] = $this->input->post('elec_button_holder');
        $data['elec_mcb'] = $this->input->post('elec_mcb');
        $s = $this->Final_calculation_model->update_work_completion($data);
        if ($s == TRUE) {
            $this->session->set_flashdata("success", "Work Completion Updated successfully");
            redirect('Final_calculation/index');
        } else {
            $this->session->set_flashdata("failure", "failed.");
            redirect('Final_calculation/index');
        }
        redirect('Final_calculation/index');
    }

    public function allapplicationuserswithproject11() {

        $urole = $this->session->userdata('role');
        $data['user_id'] = $this->input->post('uname');
        $data['project_id'] = $this->input->post('pid');
        $data['unit_no'] = $this->input->post('unitno');
        echo '<table class="table table-responsive" style="border:2;">';
        echo '<tr>';
        echo '<th>Name</th>';
        echo '<th>Project</th>';
        echo '<th>Unit No.</th>';
        echo '<th>Status</th>';
        echo '<th>Action</th>';
        echo '</tr>';
        $s = $this->Final_calculation_model->searchingallapplicationproject11($data);
        foreach ($s as $row) {
            echo '<tr>';
            echo '<td>' . $row->name . '</td>';
            echo '<td>' . $row->project_name . nbs(1) . $row->block . '</td>';
            echo '<td>' . $row->unit_no . '</td>';
            echo '<td>' . $row->status . '</td>';
            $sql = "select * from before_possession_tbl where appl_id='$row->id'";
            $this->db->query($sql);
            if ($this->db->affected_rows() > 0) {
                echo
                '<td>'
                . anchor('Final_calculation/view_calculation_final?id=' . $row->id . '?' . $row->pid . '?' . $row->unit_no . '?' . $row->pre_salesid, '<i class="fa fa-eye">' . '&nbsp' . '</i>', 'class="btn btn-info btn-3d btn-sm" title="View"') . '&nbsp' . '&nbsp' . '&nbsp' . '&nbsp' .
                anchor('Final_calculation/update_calculation_final?id=' . $row->id . '?' . $row->pid . '?' . $row->unit_no . '?' . $row->pre_salesid, '<i class="fa fa-edit">' . '&nbsp' . '</i>', 'class="btn btn-primary btn-3d btn-sm" title="Update"') . '&nbsp' . '&nbsp' . '&nbsp' . '&nbsp' .
                '</td>';
            } else {
                echo '<td>' . anchor('Final_calculation/calculation_final?id=' . $row->id . '?' . $row->pid . '?' . $row->unit_no . '?' . $row->pre_salesid, '<i class="fa fa-plus">' . '&nbsp' . '</i>', 'class="btn btn-success btn-3d btn-sm" title="New"') . '&nbsp' . '&nbsp' . '&nbsp' . '&nbsp' . '</td>';
            }
        }
        echo "</table>";
    }

    public function getpossession_input() {
        $data['appl_id'] = $this->input->post('appl_id');
        $data['unit_no'] = $this->input->post('unit_no');
        $data['unit_cost1'] = $this->input->post('unit_cost1');
        $data['maintiance_charge'] = $this->input->post('maintiance_charge');
        $data['monthly_operation'] = $this->input->post('monthly_operation');
        $data['society_common'] = $this->input->post('society_common');
        $data['society_membership_charges'] = $this->input->post('society_membership_charges');
        $data['registration_stamp'] = $this->input->post('registration_stamp');
        $data['service_tax1'] = $this->input->post('service_tax1');
        $data['service_tax2'] = $this->input->post('service_tax2');
        $data['service_tax3'] = $this->input->post('service_tax3');
        $data['service_tax4'] = $this->input->post('service_tax4');
        $data['service_tax5'] = $this->input->post('service_tax5');
        $data['interest'] = $this->input->post('interest');
        $data['total'] = $this->input->post('total');
        $data['payment_received'] = $this->input->post('payment_received');
        $data['due_balance'] = $this->input->post('due_balance');

        $result = $this->Final_calculation_model->before_pess_input($data);
        if ($result == true) {
            $this->session->set_flashdata("success", "Inserted successfully");
            redirect('Final_calculation/final_cac_search');
        } else {
            $this->session->set_flashdata("failure", "Insert failed.");
            redirect('Final_calculation/final_cac_search');
        }
        redirect('Final_calculation/final_cac_search');
    }

    public function updatepossession_input() {
        $data['id'] = $this->input->post('update_id');
        $data['appl_id'] = $this->input->post('appl_id');
        $data['unit_no'] = $this->input->post('unit_no');
        $data['unit_cost1'] = $this->input->post('unit_cost1');
        $data['maintiance_charge'] = $this->input->post('maintiance_charge');
        $data['monthly_operation'] = $this->input->post('monthly_operation');
        $data['society_common'] = $this->input->post('society_common');
        $data['society_membership_charges'] = $this->input->post('society_membership_charges');
        $data['registration_stamp'] = $this->input->post('registration_stamp');
        $data['service_tax1'] = $this->input->post('service_tax1');
        $data['service_tax2'] = $this->input->post('service_tax2');
        $data['service_tax3'] = $this->input->post('service_tax3');
        $data['service_tax4'] = $this->input->post('service_tax4');
        $data['service_tax5'] = $this->input->post('service_tax5');
        $data['interest'] = $this->input->post('interest');
        $data['total'] = $this->input->post('total');
        $data['payment_received'] = $this->input->post('payment_received');
        $data['due_balance'] = $this->input->post('due_balance');
        $result = $this->Final_calculation_model->updatebefore_pess_input($data);
        if ($result == true) {
            $this->session->set_flashdata("success", "Update successfully");
            redirect('Final_calculation/final_cac_search');
        } else {
            $this->session->set_flashdata("success", "No Changes");
            redirect('Final_calculation/final_cac_search');
        }
        redirect('Final_calculation/final_cac_search');
    }

    public function show_all_due() {
        $data['project_name'] = $this->input->post('project_name');
        $data['block'] = $this->input->post('block');
        $data['type'] = $this->input->post('type');
        $listarray = array();
        $s = $this->Final_calculation_model->get_list_of_due($data);
        $i =0;
        foreach ($s as $row) {
           
             $listarray[$i]['name'] = $row->name ;
             $listarray[$i]['contact_mobile'] = $row->contact_mobile ;
             $listarray[$i]['unit_no'] = $row->unit_no ;
             $listarray[$i]['stage'] = $row->stage ;
             $listarray[$i]['amount'] = $row->amount ;
             $listarray[$i]['date'] = date("d-m-Y", strtotime($row->due_date));
            $i++;
        }
        
        $bjson = json_encode($listarray);
        echo $bjson;
        
    }

    public function work_progress() {
        $data['project_name'] = $this->input->post('project_name');
        $data['block'] = $this->input->post('block');
        $data['type'] = $this->input->post('type');
 echo '<table class="table table-bordered table-responsive" style="border:2;">';
        echo '<tr>';
        echo '<th>Name</th>';
        echo '<th>unit No</th>';
        echo '<th></th>';
        echo '<th></th>';
      
       
        $s = $this->Final_calculation_model->work_progress($data);
        foreach ($s as $row) {
            echo '<tr>';

            echo '<td>' . $row->name . '</td>';
            echo '<td>' . $row->unit_no . '</td>';
            echo '<td>' . '<input class="form-control">' . '</td>';
            echo '<td>' . '<input class="form-control">' . '</td>';
            echo '</tr>';
        }
       echo "</table>";
    }

}

?>
