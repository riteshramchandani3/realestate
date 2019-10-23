
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Interest_model extends CI_Model {

    //new search applicant code
    public function Getallusers() {

        $sql = "select id,name from first_applicant_personal_dtl_tbl";
        $r = $this->db->query($sql);
        return $r->result();
    }

    public function Getprojectname() {

        $sql = "select id,project_name,block from project_tbl";
        $r = $this->db->query($sql);
        return $r->result();
    }

    public function Getunitno() {

        $sql = "select id,unit_no from inventory_tbl";
        $r = $this->db->query($sql);
        return $r->result();
    }

    public function Getviewapplicant() {

        $sql = "select id,unit_no from inventory_tbl";
        $r = $this->db->query($sql);
        return $r->result();
    }

//end search applicant






    public function findapplicationwords($alpha) {
        $j = $alpha;
        $stmt = "select id,name from first_applicant_personal_dtl_tbl where name like '%$j%'";
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function locate_applicant($data) {

        $username = $data['user_id'];
        $projectid = $data['project_id'];
        $unit_no = $data['unit_no'];
        $stmt = "";

        if ($unit_no != '') {
            $stmt = "SELECT fa.id, fa.name,inv.block, pj.project_name, inv.unit_no,inv.type, pj.id as pid FROM inventory_tbl inv, first_applicant_personal_dtl_tbl fa, project_tbl pj WHERE inv.unit_no LIKE '%$unit_no%' AND (inv.customer_id=fa.id) AND (fa.project_id = pj.id)";
        } else {

            $stmt = "select fappl.id,fappl.name,inv.unit_no,inv.type,inv.block,ptbl.project_name, ptbl.id as 'pid' from first_applicant_personal_dtl_tbl fappl,project_tbl ptbl, inventory_tbl inv where ";
            if ($username != "") {
                $stmt = $stmt . "(fappl.name ='" . $username . "') AND (inv.customer_id=fappl.id) AND (fappl.project_id = ptbl.id)";
            } else
            if ($projectid != "0") {
                // print_r($stmt);
                $stmt = $stmt . "(fappl.project_id =" . $projectid . ") AND (ptbl.id=fappl.project_id) and (inv.customer_id = fappl.id)";
            } else
            if (($username != "") && ($projectid != "0")) {
                // print_r($stmt);
                $stmt = $stmt . "(fappl.name ='" . $username . "') AND ";
                $stmt = $stmt . '(fappl.project_id =' . $projectid . ')';
            }
        }
        log_message("info", $stmt);

        $r = $this->db->query($stmt);
        // print_r($stmt);
        return $r->result();
    }

    // add new function

    public function get_appl_details($data) {

        $explode_data = explode('?', $data);
        $userid = $explode_data[0];


        $sql = "select fappl.name , pdtl.project_name ,invt.unit_no ,invt.type ,invt.block from first_applicant_personal_dtl_tbl fappl ,inventory_tbl invt , project_tbl pdtl where fappl.id='$userid' and invt.customer_id='$userid' and pdtl.id=fappl.project_id";

        $r = $this->db->query($sql);
        return $r->result();
    }

    public function show_appl_stage_int($user) {
        $userid = $user;
        $sql = "select lt.*,dl.amount from demand_letter_tbl dl ,late_interest_tbl lt WHERE (lt.applicant_id=" . $userid . ") and (lt.applicant_id=dl.appl_id) and (lt.stage=dl.stage)";


        log_message('info', $sql);
        $r = $this->db->query($sql);
        return $r->result_array();
    }

    
    public function getallrows($data)
    {
         $unitno = $data['unitno'];
        $applid = $data['applid'];
        $sql = "select id,unit_no,stage,appl_id,due_dt,DATEDIFF(chq_dt,due_dt) as 'diffdays',due_dt,chq_dt,due_amt,actual_amt from int_tbl where unit_no='$unitno'";
       // $sql = "select inn.unit_no,inn.stage,appl_id,inn.due_dt,DATEDIFF(NOW(),inn.due_dt) as 'diffdays',sum(pr.stage_due_amt) from int_tbl inn,payment_receipt pr where inn.unit_no='H-242' and pr.unit_no='H-242'";
        $r = $this->db->query($sql);
        return $r->result();
    }
    
    public function getthechqdtanddueamt($data)
    {
        $unitno = $data['unitno'];
        $applid = $data['applid'];
        //$sql = "select unit_no,stage,appl_id,dl_due_dt,cheque_date as 'chq_dt',stage_due_amt as 'due_amt',advance,stage_actual_amt from payment_receipt where unit_no='$unitno' and appl_id='$applid'";
        $sql = "select unit_no,stage,appl_id,cheque_date as 'chq_dt',stage_due_amt as 'due_amt',advance,stage_actual_amt from payment_receipt where unit_no='$unitno' and appl_id='$applid'";
        $r = $this->db->query($sql);
        $rr = $r->result();
        return $rr;
     
    }
    
    public function nowupdateinttbl($du)
    {
   
    }
    
    
}

?>
