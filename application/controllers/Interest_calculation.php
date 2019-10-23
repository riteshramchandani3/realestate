<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Interest_calculation extends CI_Controller {

    public function index() {
        
    }

    public function calculate_interestss() {
         
      
        $userid = $this->input->get('u');
        $pwd = $this->input->get('p');
       

        if (strcmp($userid, "ogacronuser") == 0 && strcmp($pwd, "Ogatech123") == 0) {
            foreach ($this->Interest_calculation_model->show_due_amt_days() as $row) {

                $data['stage'] = $row['stage'];
                $data['applicant_id'] = $row['appl_id'];
                $data['delay_days'] = $row['DATEDIFF(NOW(),dl.due_date)'];
                $data['pc_interest'] = $row['rate'];
                $rate = $row['rate'];
                $due_amount = $row['amount'];
                //echo "Due amount is ....".$due_amount."__id is  ".$data['applicant_id'].".....delay days...".$data['delay_days']."<br>";
                //Nirbhay code
                //$date_intrest = $row['DATEDIFF(NOW(),dl.due_date)'] * $rate;
                //$data['interest_amount'] = $due_amount * $date_intrest;
                //Nirbhay code
                
                //Ashwin code
                $salana = $due_amount*12/100;
                $ekdinka = $salana/365;
                $ekdinka = round($ekdinka,2);
                $delaydays = (int)($data['delay_days']-15);
                $nowtotalinterest = round($delaydays*$ekdinka,2);
                $date_intrest = $row['DATEDIFF(NOW(),dl.due_date)'] * $rate;
                $data['interest_amount'] = $nowtotalinterest;
                // Ashwin code
                
                $j = $this->update_interest($data);
                //echo $j."<br>";
            }
        } else {
            $this->load->view('err404');
        }
 
    
    }
    
    
    

    public function update_interest($data) {
        $id = $data['applicant_id'];
        $intrest = $data['interest_amount'];
        $stage = $data['stage'];
        $delay_days = $data['delay_days'];
        $pc_interest = $data['pc_interest'];


        $sql = "select applicant_id from late_interest_tbl where applicant_id='$id' AND stage='$stage' ";

        $this->db->query($sql);
         print_r($sql);
        if ($this->db->affected_rows() > 0) {
//true
            
            $id = $data['applicant_id'];
            $intrest = $data['interest_amount'];
            $stage = $data['stage'];
            $delay_days = $data['delay_days'];
            $pc_interest = $data['pc_interest'];

            $sql = "UPDATE late_interest_tbl SET  pc_interest='$pc_interest', interest_amount='$intrest', delay_days='$delay_days' where applicant_id='$id'AND stage='$stage' ";

            $this->db->query($sql);
            // print_r($sql);
            if ($this->db->affected_rows() > 0) {
                return true;
            } else {
                return false;
            }
        } else {

            //false
            $id = $data['applicant_id'];
            $satge = $data['stage'];
            $intrest = $data['interest_amount'];
            $delay_days = $data['delay_days'];

            $pc_interest = $data['pc_interest'];

            $this->db->insert('late_interest_tbl', $data);
            if ($this->db->affected_rows() > 0) {
                return true;
            } else {
                return false;
            }
            return false;
        }
    }

    
    public function calculate_interest()
    {
        
      //  $userid = $this->input->get('u');
     //   $pwd = $this->input->get('p');
         
        
     //   if (strcmp($userid, "ogacronuser") == 0 && strcmp($pwd, "Ogatech123") == 0) {
        
        $listarray = array();
        $applid = $this->input->post('userid');//'149';    
        $unitno = $this->input->post('unitno');//'H-194';
       
        $data['applid'] = $applid;
        $data['unitno'] = $unitno;
        
        $presql = "delete from int_tbl where unit_no='$unitno' and appl_id=$applid";
        $this->db->query($presql);
        //$sql = "insert into int_tbl (unit_no,stage,appl_id,due_dt,due_amt,actual_amt) select dl.unit_no,dl.stage,dl.appl_id,dl.due_date,dl.amount,dl.amount1 from demand_letter_tbl dl where dl.unit_no='$unitno' and dl.appl_id='$applid'";
        $sql = "insert into int_tbl (unit_no,stage,appl_id,due_dt,due_amt,actual_amt) select dl.unit_no,dl.stage,dl.appl_id,dl.due_date,dl.amount,dl.cumulative_amt from demand_letter_tbl dl where dl.unit_no='$unitno' and dl.appl_id='$applid'";
        $s = $this->db->query($sql);
       
        $cheqdue = $this->Interest_model->getthechqdtanddueamt($data);
       
        
        foreach($cheqdue as $row)
        {
            $sql2 = "update int_tbl set chq_dt='$row->chq_dt',due_amt ='$row->due_amt' where unit_no='$unitno' and appl_id='$applid' and stage='$row->stage'";
            $this->db->query($sql2);
        }
        
        $sss = $this->Interest_model->getallrows($data);
       //$displayarray = array();
         
        
        $i=0;
        foreach($sss as $row)
        { 
            
            $listarray[$i]['due_dt'] =  date("d-m-Y", strtotime($row->due_dt)); 
            $listarray[$i]['stage'] = $row->stage;  
            $listarray[$i]['chq_dt'] =  $row->chq_dt;  
            $listarray[$i]['due_amt'] = $row->due_amt;
            $listarray[$i]['actual_amt'] = $row->actual_amt;
            
            //echo "For Stage this : " .$row->stage. "the due date was";
            $duedt = $row->due_dt;
            
           // echo $duedt;
            //echo "<br>";
             $daydiff = $row->diffdays;
             if($row->chq_dt == '0000-00-00')
            {
                
                $currdate = strtotime(date('Y-m-d'));
                $bb = $row->due_dt;
                
              
                $daysLeft = 0;
                $fromDate = $bb;
                $curDate = date('Y-m-d');
                
                $daysLeft = abs(strtotime($curDate) - strtotime($fromDate));
                $days = $daysLeft/(60 * 60 * 24);
                $daydiff=$days;
                $interestamt = $row->actual_amt*(.0003)*$daydiff;
              
                 if($row->due_dt > date('Y-m-d'))
                 {
                  $daydiff = 0;//due date is greater than current;
                  $interestamt =0;
                 }  
                 else if($row->actual_amt == '0')
                 {
                     $prevint = '0';
                 }
                 else
                 {
                     $daydiff = $days;
                 }
            }
            else
            {
               
                
                $daydiff = $row->diffdays;
               
               
                if($row->due_amt == '0')
                {
                    
                $interestamt = $row->actual_amt*(.0003)*$daydiff;
                $prevamt = $row->actual_amt;
                $prevint = 'NIL';//$interestamt;//$prevamt*(.0003)*$daydiff;
                    
                }
                else
                {
                 if(strtotime($row->due_dt) > strtotime($row->chq_dt))
                 {
                  $daydiff = 0;//due date is greater than current;
                  $interestamt =0;
                 }
                //previous amount to lag chuka hai
                $prevamt = abs($row->actual_amt - $row->due_amt);
                $prevint = $prevamt*(.0003)*$daydiff;
                //previous amount to lag chuka hai    
                $interestamt =  $row->due_amt*(.0003)*$daydiff;
                
                }
                
            }
            
           /* $iid = $row->id;
            $sqll = "update int_tbl set int_amt='$interestamt' where id='$iid'";
            $this->db->query($sqll);*/
            $listarray[$i]['delaydays'] = $daydiff;
            $listarray[$i]['interestamt'] = $interestamt;
            $listarray[$i]['prevint'] = $prevint;
            $i++;
        }
         
        $bjson = json_encode($listarray);
         echo $bjson;
           
            
            
     //   } else {
      //      $this->load->view('err404');
      //  }
    }
    
}

?>