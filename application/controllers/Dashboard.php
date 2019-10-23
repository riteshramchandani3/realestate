<?php

/*
 * Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential.
 * Written by Oga Technologies, October 1,  2016.
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('dashboard');
    }

//functions used in dashboard for graphics----START--------------

    function getdata() {
        $data = $this->Dashboard_model->get_all_info();
        $responce->cols[] = array(
            "id" => "",
            "label" => "Topping",
            "pattern" => "",
            "type" => "string"
        );
        $responce->cols[] = array(
            "id" => "",
            "label" => "Total",
            "pattern" => "",
            "type" => "number"
        );
        $responce->cols[] = array(
            "id" => "",
            "label" => "Total",
            "pattern" => "",
            "type" => "number"
        );
        foreach ($data as $cd) {
            $responce->rows[]["c"] = array(
                array(
                    "v" => "$cd->unit_no",
                    "f" => null
                ),
                array(
                    "v" => (int) $cd->gf_carpet_area_price,
                    "f" => null
                )
                ,
                array(
                    "v" => (int) $cd->ff_carpet_area_price,
                    "f" => null
                )
            );
        }

        echo json_encode($responce);
    }

    function getdata2() {
        $data = $this->Dashboard_model->get_all_info();
        $responce->cols[] = array(
            "id" => "",
            "label" => "Topping",
            "pattern" => "",
            "type" => "string"
        );
        $responce->cols[] = array(
            "id" => "",
            "label" => "Total",
            "pattern" => "",
            "type" => "number"
        );
        foreach ($data as $cd) {
            $responce->rows[]["c"] = array(
                array(
                    "v" => "$cd->unit_no",
                    "f" => null
                ),
                array(
                    "v" => (int) $cd->gf_carpet_area_price,
                    "f" => null
                )
            );
        }

        echo json_encode($responce);
    }

    function getdata3() {
        $data = $this->Dashboard_model->get_all_info();

        //         //data to json 

        $responce->cols[] = array(
            "id" => "",
            "label" => "Topping",
            "pattern" => "",
            "type" => "string"
        );
        $responce->cols[] = array(
            "id" => "",
            "label" => "Total",
            "pattern" => "",
            "type" => "number"
        );

        foreach ($data as $cd) {
            $responce->rows[]["c"] = array(
                array(
                    "v" => "$cd->unit_no",
                    "f" => null
                ),
                array(
                    "v" => (int) $cd->gf_carpet_area_price,
                    "f" => null
                )
            );
        }

        echo json_encode($responce);
    }

    function days15_site_report() {
        $data = $this->Dashboard_model->days15_site_report();
        $responce->cols[] = array(
            "id" => "",
            "label" => "Unit_No.",
            "pattern" => "",
            "type" => "string"
        );
        $responce->cols[] = array(
            "id" => "",
            "label" => "Stage",
            "pattern" => "",
            "type" => "number"
        );

        foreach ($data as $cd) {
            $responce->rows[]["c"] = array(
                array(
                    "v" => "$cd->stage",
                    "f" => null
                ),
                array(
                    "v" => $cd->unit_no,
                    "f" => null
                )
            );
        }

        echo json_encode($responce);
    }

    //functions used in dashboard for graphics----END--------------

    public function getprojectblocks() {
        $projectid = $this->input->post('arg');
        $row = $this->Dashboard_model->getblocksbyproject($projectid);
        echo $row;
    }

    public function getprojecttype() {
        $data['projectid'] = $this->input->post('plid');
        $data['blockid'] = $this->input->post('blid');
        $r = $this->Dashboard_model->findtype($data);
        foreach ($r as $row) {
            echo $row->unit_type;
            echo ",";
        }
    }

    public function getprojectblocksforbooking() {
        $projectid = $this->input->post('arg');
        $row = $this->Dashboard_model->getblocksbyprojectbooking($projectid);
        echo $row;
    }

    public function getprojecttypeforbooking() {

        $data['projectid'] = $this->input->post('plid');
        $data['blockid'] = $this->input->post('blid');
        $r = $this->Dashboard_model->findtypebooking($data);
        foreach ($r as $row) {
            echo $row->unit_type;
            echo ",";
        }
    }

    public function get15dayssitereport() {
        $pid = $this->input->post('pid');
        $block = $this->input->post('block');
        $type = $this->input->post('type');
        $out_data = array();
        $stages = $this->Dashboard_model->get_stages_for_type($type);
        foreach ($stages as $row) {
            $stage = $row->stage;
            log_message('DEBUG', "*****************  " . $stage);
            $count = $this->Dashboard_model->get_stage_count($pid, $block, $type, $stage);
            $num = $count->count;
            log_message('DEBUG', "*****************  " . $num);
            $element = array($stage => $num);
            array_push($out_data, $element);
        }
        echo json_encode($out_data);
    }

    public function getbookings() {
        $pid = $this->input->post('pid');
        $block = $this->input->post('block');
        $type = $this->input->post('type');
        $out_data = array();
        $status = $this->Dashboard_model->get_booking_status($type);
        foreach ($status as $row) {
            $status = $row->status;
            $count = $this->Dashboard_model->get_status_count($pid, $block, $type, $status);
            $num = $count->count;
            $element = array($status => $num);
            array_push($out_data, $element);
        }
        echo json_encode($out_data);
    }

    public function getbookingstatus() {
        $pid = $this->input->post('pid');
        $block = $this->input->post('block');
        $type = $this->input->post('type');
        $out_data = array();
        $stages = $this->Dashboard_model->get_booking_status($type);
        foreach ($stages as $row) {
            $stage = $row->stage;
            log_message('DEBUG', "*****************  " . $stage);
            $count = $this->Dashboard_model->get_stage_count($pid, $block, $type, $stage);
            $num = $count->count;
            log_message('DEBUG', "*****************  " . $num);
            $element = array($stage => $num);
            array_push($out_data, $element);
        }
        echo json_encode($out_data);
    }

    function get_sold_vs_avail() {
        $data = $this->Dashboard_model->get_sold_vs_avail();
        echo json_encode($data);
    }

    function getmonthlybooking() {
        error_log("from controller^^^^^^^^^^^^^");
        $data = $this->Dashboard_model->get_monthlybooking();
        echo json_encode($data);
    }

}

?>