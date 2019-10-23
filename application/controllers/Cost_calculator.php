<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cost_calculator extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('string');
    }

    public function index() {

        $this->load->view('Cost_calculation_search');
    }

    public function show_cost_calculation() {
        $this->load->view('Cost_calculation_search');
    }

    public function show_application_form() {
        $this->load->view('application_search');
    }

    public function show_new_application_form() {
        $this->load->view('Application');
    }

    public function show_dashboard() {
        $this->load->view('graphshow');
    }

    public function show_sheet_two() {
        $this->load->view('cost_calculation_for_flat');
    }

    public function show_parking_allocation() {
        $this->load->view('parking_allocation');
    }

    public function show_demand_letter() {
        $this->load->view('search_demand_letter');
    }

    public function view_cost() {
        $this->load->view('view_cost_calculation_for_duplex');
    }

    public function test_cost() {
        $this->load->view('cost_calculation_for_duplex');
    }

    public function getInfo() {
        $this->load->model('Sheet_model');
        $this->Sheet_model->Getallusers();
    }

    public function getthewords() {
        $alphabet = $this->input->post('alphabet');
        $s = $this->Sheet_model->findwords($alphabet);
        foreach ($s as $row) {
            echo "<a href=# class='btn btn-default btn-sm' style='width:100%;border-top: none;border-radius: 0px;' onclick=setthis(this.text); id=$row->id>$row->name</a>" . "<br>";
        }
    }

    public function alluserswithproject() {

        $data['user_id'] = $this->input->post('uname');
        $data['project_id'] = $this->input->post('pid');
        $data['unit_no'] = $this->input->post('unitno');
        $uname = $this->session->userdata('uname');
        print_r($uname);
        echo '<table class="table table-responsive" style="border:2;">';
        echo '<tr>';
        echo '<th>Name</th>';
        echo '<th>Project</th>';
        echo '<th>Unit No.</th>';
        echo '<th>Action</th>';
        echo '</tr>';
        $s = $this->Sheet_model->searchingofalluserswithproject($data);
        foreach ($s as $row) {
            echo '<tr>';
            echo '<td>' . $row->name . '</td>';
            echo '<td>' . $row->project_name . nbs(1) . $row->block . '</td>';
            echo '<td>' . $row->unit_no . '</td>';
            echo '<td>' .
            '<button type="submit" name="sendid" title="View Cost Calculation" class="btn btn-info btn-sm btn-3d" title="View" value=' . $row->id . '/' . $row->pid . '>' . ' <i class="fa fa-eye">' . '</i>' . '</button>';

            echo '</tr>';
        }
        echo "</table>";
    }

    public function cost_search() {

        $uid = $this->input->post('sendid');
        $ulist = explode("/", $uid);
        $data['userid'] = $ulist[0];
        $data['projectid'] = $ulist[1];
        $r = $this->Sheet_model->cost_calculation_show_by_id($data);
        if ($r['type'] == 'Flat') {
            $this->load->view('cost_calculation_for_flat', $r);
        } else if ($r['type'] == 'Duplex') {
            $this->load->view('cost_calculation_for_duplex', $r);
        } else if ($r['type'] == 'Row House') {
            $this->load->view('cost_calculation_for_row_house', $r);
        } else if ($r['type'] == 'Shop') {
            $this->load->view('cost_calculation_for_shop', $r);
        } else if ($r['type'] == 'Plot') {
            $this->load->view('cost_calculation_for_plot', $r);
        }
    }

    public function update_cost_calculation_for_duplex() {
        $unit_cost_as_per_carpet_area = $this->input->post('unit_cost_as_per_carpet_area');
        $cost_payable_to_company = $this->input->post('cost_payable_to_company');
        $price_ca_ref_rate = $this->input->post('price_ca_ref_rate');
        $discount = $this->input->post('discount');
        $cost_calculation = $this->input->post('cost_calculation');
        $customer_id = $this->input->post('customer_id');
        $r = $this->Sheet_model->update_cost($customer_id);
        $msg['success'] = "success";
        $this->load->view('Cost_calculation_search', $msg);
    }

    public function update_cost_calculation_for_flat() {
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
        $r = $this->Sheet_model->update_flat_cost('customer_id');
        $msg['success'] = "success";
        $this->load->view('Cost_calculation_search', $msg);
    }

    public function update_cost_calculation_for_row_house() {
        $customer_id = $this->input->post('customer_id');
        $discount = $this->input->post('discount');
        $cost_calculation = $this->input->post('cost_calculation');
        $r = $this->Sheet_model->update_row_house_cost($customer_id);
        $msg['success'] = "success";
        $this->load->view('Cost_calculation_search', $msg);
    }

    public function update_cost_calculation_for_shop() {
        $customer_id = $this->input->post('customer_id');
        $discount = $this->input->post('discount');
        $cost_calculation = $this->input->post('cost_calculation');
        $r = $this->Sheet_model->update_shop_cost($customer_id);
        $msg['success'] = "success";
        $this->load->view('Cost_calculation_search', $msg);
    }

    public function update_cost_calculation_for_plot() {
        $customer_id = $this->input->post('customer_id');
        $discount = $this->input->post('discount');
        $cost_calculation = $this->input->post('cost_calculation');
        $r = $this->Sheet_model->update_plot_cost($customer_id);
        $msg['success'] = "success";
        $this->load->view('Cost_calculation_search', $msg);
    }

}
