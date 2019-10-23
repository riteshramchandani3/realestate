<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Intrest_calculation extends CI_Controller {

    public function index() {
        
    }

    public function calculate_interest() {
        foreach ($this->Intrest_calculation_model->show_due_amt_days() as $row) {
            $data['id'] = $row['id'];
            $due_amount = $row['due_amount'];
            $date_intrest = $row['DATEDIFF(NOW(),due_date)'] * .11;
            $data['int_result'] = $due_amount * $date_intrest;
            $this->Intrest_calculation_model->update_interest($data);
        }
    }
   


}

?>