<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Interest_calculation_model extends CI_Model {

       public function show_due_amt_days(){
                   $sql = "SELECT fappl.rate, dl.id, dl.appl_id,dl.stage ,dl.amount,DATEDIFF(NOW(),dl.due_date) from demand_letter_tbl dl ,appl_interest_rate_tbl fappl where (DATEDIFF(NOW(),dl.due_date)>0) and (dl.appl_id=fappl.appl_id)";
                   $r = $this->db->query($sql);
                    return $r->result_array();

}
       public function show_due_date($unit_no,$stage){
                   $sql = "SELECT * from demand_letter_tbl where unit_no='$unit_no' and stage='$stage'";
                   $r = $this->db->query($sql);
                    return $r->result();

}

       

}

?>
