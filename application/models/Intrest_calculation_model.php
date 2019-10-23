<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Intrest_calculation_model extends CI_Model {

       public function show_due_amt_days(){
                $sql = "SELECT id, appl_id,stage ,due_amount,DATEDIFF(NOW(),due_date) from demand_letter_tbl where (DATEDIFF(NOW(),due_date)>1)";
                   $r = $this->db->query($sql);
                    return $r->result_array();

}
       
    public function update_interest($data) {
        $id = $data['id'];
        $intrest = $data['int_result'];


        $sql = "UPDATE demand_letter_tbl SET intrest='$intrest' where id='$id' ";
        
        $this->db->query($sql);
        // print_r($sql);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
//http://localhost/realestate_v2/index.php/interest_calculation/calculate_interest?u=ogacronuser&p=Ogatech123
//http://www.ogatechnologies.com/ogareal.cms/index.php/interest_calculation/calculate_interest?u=ogacronuser&p=Ogatech123
?>
