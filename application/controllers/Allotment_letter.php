<?php

/*
 * Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential.
 * Written by Oga Technologies, October 1,  2016.
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Allotment_letter extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('string');
    }

    public function show_allotment() {
        $this->load->view('Allotment_letter_search');
    }

    public function allotmentlettersearch() {

        $alphabet = $this->input->post('alphabet');
        $s = $this->Allotment_letter_model->allotmentletteruser_info($alphabet);



        //echo $row->id."|".$row->name.",";

        echo '<table class="table table-responsive text-left">';
        echo '<tr>';
        echo '<th>Application Number</th>';
        echo '<th>Applicant Name</th>';
        echo '<th>Project Name</th>';
        echo '<th>Unit No</th>';
        echo '</tr>';

        foreach ($s as $row) {
            //print_r($row);
            echo '<tr>';
            echo '<td>' . '<a class="btn btn-default" href=# onclick=setthis(this.text); style="text-decoration:none; color:black;">' . $row->id . '</a>' . '</td>';
            echo '<td>' . '<a id=' . $row->id . '_' . $row->name . ' class="btn btn-default" href=# onclick=setthis(this.id); style="text-decoration:none; color:black;">' . $row->name . '</a>' . '</td>';
            echo '<td>' .  $row->project_name . nbs(1) . $row->block  . '</td>';
            echo '<td>' . '<a id=' . $row->id . '_' . $row->unit_no . ' class="btn btn-default" href=# onclick=setthis(this.id); style="text-decoration:none; color:black;">' . $row->unit_no . '</a>' . '</td>';
            echo '</tr>';
        }
    }

    public function search_id() {

        $uid = $this->input->post('userids');
        $ulist = explode("/", $uid);
        $data['userid'] = $ulist[0];

        $pdf = $this->Allotment_letter_model->check_pdf_first($data);

        if ($pdf['path'] == '') {
            $r = $this->Allotment_letter_model->allotment_show_by_id($data);
            if ($r['type'] == 'Duplex') {
                $this->load->view('allotment_letter_duplex', $r);
            } else if ($r['type'] == 'Flat') {
                $this->load->view('allotment_letter_flat', $r);
            } else if ($r['type'] == 'Plot') {
                $this->load->view('allotment_letter_plot', $r);
            } else if ($r['type'] == 'Shop') {
                $this->load->view('allotment_letter_shop', $r);
            }
        } // end of pdf if
        else {
            $data = array('pdf' => $pdf['path']);
            $this->load->view('allotment_letter_duplex', $data);
        }
    }

}

?>