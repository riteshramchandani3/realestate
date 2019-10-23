<?php

/*
 * Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential.
 * Written by Oga Technologies, October 1,  2016.
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Agreement extends CI_Controller {
//Ashwin Juwekar and Nitesh Malviya and Nirbhhay
    public function index() {
        $this->load->view('locate_applicant_agreement');
    }

    public function getprojectblocks() {
        $projectid = $this->input->post('arg');
        $row = $this->Realestate_modal->getblocksbyproject($projectid);
        echo $row;
    }

    public function getinfo() {
        //$this->load->model('Sheet_Model');
        $arr = $this->Realestate_modal->viewData();
        $this->load->view('Realestate_modal', $arr);
    }

    public function downloaddoc() {
        //          $doc = $this->input->post($doc);
        //echo "helo";
    }

    public function getsearchwords() {
        $alphabet = $this->input->post('alphabet');
        $s = $this->Agreement_model->findapplicationwords($alphabet);
        foreach ($s as $row) {
            //echo $row->id."|".$row->name.",";
            echo "<a href=# class='btn btn-default btn-sm' style='width:100%;border-top: none;border-radius: 0px;' onclick=setthis(this.text); id=$row->id>$row->name</a>" . "<br>";
        }
    }

//<----------------Start this code is use for APPLICANT SEARCH FOR Agreement Start----------------------->

    public function showapplagreement() {

        $data['user_id'] = $this->input->post('uname');
        $data['project_id'] = $this->input->post('pid');
        $data['unit_no'] = $this->input->post('unitno');

        echo '<table class="table table-responsive" style="border:2;">';
        echo '<tr>';
        echo '<th>Name</th>';
        echo '<th>Project</th>';
        echo '<th>Unit No.</th>';
        echo '<th>Type</th>';
        echo '<th>Action</th>';
        echo '</tr>';

        $s = $this->Agreement_model->search_appl_project_unit($data);
        foreach ($s as $row) {
            echo '<tr>';

            echo '<td>' . $row->name . '</td>';
            echo '<td>' . $row->project_name . nbs(1) . $row->block . '</td>';
            echo '<td>' . $row->unit_no . '</td>';
            echo '<td>' . $row->type . '</td>';

            if ($row->present_addr == '') {
                echo '<td>' . '<a type="button" title="Fill Application Form" class="btn btn-success btn-3d btn-sm" value=' . $row->id . ', onclick="myclicktest(' . $row->id . ')" data-toggle="modal" data-target="#myModal">' . '<i class="fa fa-plus">' . '</i>' . '</a>' . '</td>';
            } else {

                if ($row->type == 'Duplex') {


                    echo '<td>' . anchor('Agreement/agreement_letter?id=' . $row->id . '?' . $row->pid . '?' . $row->block . '?' . $row->type . '?', '<i class="fa fa-eye">' . '&nbsp' . '</i>', 'class="btn btn-info btn-3d btn-sm"') . '</td>';
                } else if ($row->type == 'Plot') {

                    echo '<td>' . anchor('Agreement/Agreement_letter_plot?id=' . $row->id . '?' . $row->pid . '?' . $row->block . '?' . $row->type . '?', '<i class="fa fa-eye">' . '&nbsp' . '</i>', 'class="btn btn-info btn-3d btn-sm"') . '</td>';
                } else if ($row->type == 'Flat') {

                    echo '<td>' . anchor('Agreement/agreement_letter_flat?id=' . $row->id . '?' . $row->pid . '?' . $row->block . '?' . $row->type . '?', '<i class="fa fa-eye">' . '&nbsp' . '</i>', 'class="btn btn-info btn-3d btn-sm"') . '</td>';
                }
            }

            echo '</tr>';
        }
        echo "</table>";
    }

//<----------------End this code is use for APPLICANT SEARCH FOR Agreement  END----------------------->
//<----------------start this code is use for view applicant Agreement  Start----------------------->
    public function view_agreement_letter() {
        // $r = $this->view_applicant_info->agreement_show_by_id($data);
        $this->load->view('locate_applicant_agreement');
    }

    public function agreement_letter() {
        // $r = $this->view_applicant_info->agreement_show_by_id($data);
        $this->load->view('view_agreement_letter');
    }

    public function agreement_royale() {
        // $r = $this->view_applicant_info->agreement_show_by_id($data);
        $this->load->view('agreement_royale_plot');
    }

    public function Agreement_letter_plot() {
        // $r = $this->view_applicant_info->agreement_show_by_id($data);
        $this->load->view('Agreement_letter_plot');
    }

    public function agreement_letter_flat() {
        // $r = $this->view_applicant_info->agreement_show_by_id($data);
        $this->load->view('Agreement_letter_flat');
    }

}

?>
