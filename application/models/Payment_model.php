<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Payment_model extends CI_Model {

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

    public function site_report_table($type) {

        $sql = "select stage from site_stages_tbl where type='$type'";

        $r = $this->db->query($sql);
        return $r->result();


        // $a = $this->db->get('site_stages_tbl');
        //return $a->result();
    }

    public function site_report($user1) {

        $sql = "select stage from demand_letter_tbl where appl_id='$user1' and amount>0";

        $r = $this->db->query($sql);
        return $r->result_array();


        // $a = $this->db->get('site_stages_tbl');
        //return $a->result();
    }

    public function site_report1($user1) {

        $sql = "select stage from demand_letter_tbl where appl_id='$user1' ";

        $r = $this->db->query($sql);
        return $r->result_array();


        // $a = $this->db->get('site_stages_tbl');
        //return $a->result();
    }

//start ******************this code for payment search by user id and show************** start 


    public function get_appl_pay($data) {

        $explode_data = explode('?', $data);
        $userid = $explode_data[0];


        $sql = "SELECT  pay.project_name, pay.unit_no,pay.type,pay.payment_mode,pay.Cumulative,pay.appl_name,pay.id,pay.Date,pay.stages,pay.receipt_no,pay.cheque_cash,pay.amount_paid,pay.other_charges FROM payment_dtls_tbl pay where first_appl_id=" . $userid;
        //  print_r('heloo'+$sql);
        log_message('info', $sql);
        $r = $this->db->query($sql);
        return $r->result_array();
    }

    public function get_project_details($data) {
        $explode_data = explode('?', $data);
        $project_name = $explode_data[0];


        $sql = "SELECT registration_no FROM project_tbl WHERE project_name='$project_name'";

        $r = $this->db->query($sql);
        return $r->result();
    }

    //this query is use for fatch all invoice data
    public function get_applinfo($data) {
        //  $explode_data = explode('?', $data);
        //$id = $explode_data[0];


        $sql = "SELECT * FROM payment_receipt WHERE id='$data'";
        //print_r($sql);
        $r = $this->db->query($sql);
        return $r->result();
    }

    //this query is used for fatch all applicant data
    public function show_info($data) {
        $explode_data = explode('?', $data);
        $id = $explode_data[0];


        $sql = "SELECT fappl.name ,inv.unit_no,inv.block,inv.type , pdtl.project_name FROM first_applicant_personal_dtl_tbl fappl,inventory_tbl inv,project_tbl pdtl WHERE fappl.id='$id' and (inv.customer_id=fappl.id) and (fappl.project_id=pdtl.id) and (inv.project_id=pdtl.id)";
        //  print_r($sql);
        $r = $this->db->query($sql);
        return $r->result();
    }

    public function show_applicant_Cumulative($data) {
        $explode_data = explode('?', $data);
        $id = $explode_data[0];


        $sql = "SELECT sum(amount_paid) FROM payment_dtls_tbl WHERE first_appl_id='$id'";
        //print_r($sql);
        $r = $this->db->query($sql);
        return $r->result_array();
    }

    public function get_appl_details($data) {

        $explode_data = explode('?', $data);
        $userid = $explode_data[0];


        $sql = "select fappl.name , pdtl.project_name ,invt.unit_no ,invt.type,invt.block from first_applicant_personal_dtl_tbl fappl ,inventory_tbl invt , project_tbl pdtl where fappl.id='$userid' and invt.customer_id='$userid' and pdtl.id=fappl.project_id";

        $r = $this->db->query($sql);
        return $r->result();
    }

    public function get_invoice($data) {
        $userid = $data;
        $sql = "SELECT * FROM payment_receipt where appl_id=" . $userid;
        // print_r('heloo'+$sql);
        log_message('info', $sql);
        $r = $this->db->query($sql);
        return $r->result_array();
    }

    public function get_payment_dtls($data) {
        $userid = $data;
        //$sql = "SELECT * FROM invoice_tbl where appl_id=" . $userid;
        $sql = "select  pay.*,dl.amount1,dl.due_date,DATEDIFF(dl.due_date,pay.cheque_date) as 'delay_days' from  payment_receipt pay , demand_letter_tbl dl  where pay.appl_id='$userid'and pay.unit_no = dl.unit_no  and dl.stage=pay.stage ";
        // print_r('heloo'+$sql);
        // log_message('info', $sql);
        $r = $this->db->query($sql);
        return $r->result_array();
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

        //echo $stmt;
        log_message("info", $stmt);

        $r = $this->db->query($stmt);
        //  print_r($stmt);
        return $r->result();
    }

    //<----------------START this Query is use for applicant payment input  START ----------------------->

    public function getPaymentInput($data) {
        $this->db->insert('payment_dtls_tbl', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function get_max_id() {
        $sql = "SELECT max(id)+1 as max_id from payment_dtls_tbl;";

        $r = $this->db->query($sql);
        return $r->result();
    }

    public function get_company_info() {
        $sql = "SELECT attribute, value from company_info_tbl where attribute='RERA'";

        $r = $this->db->query($sql);
        return $r->result();
    }

    public function get_company_info1() {
        $sql = "SELECT * from company_info_tbl where attribute='GSTIN'";

        $r = $this->db->query($sql);
        return $r->result();
    }

    public function get_company_info2() {
        $sql = "SELECT * from company_info_tbl where attribute='PAN'";

        $r = $this->db->query($sql);
        return $r->result();
    }

    public function get_company_info3() {
        $sql = "SELECT * from company_info_tbl where attribute='TIN'";

        $r = $this->db->query($sql);
        return $r->result();
    }

    // THIS QUERY IS USE FOR FATCH FOR COMPANY INFORMATION
    public function get_company_NAME() {
        $sql = "SELECT * from company_info_tbl where attribute='Company Name'";

        $r = $this->db->query($sql);
        return $r->result();
    }

    public function get_company_Address() {
        $sql = "SELECT * from company_info_tbl where attribute='Address'";

        $r = $this->db->query($sql);
        return $r->result();
    }

    public function get_company_EMail() {
        $sql = "SELECT * from company_info_tbl where attribute='E-Mail'";

        $r = $this->db->query($sql);
        return $r->result();
    }

    public function get_company_Aadhar() {
        $sql = "SELECT * from company_info_tbl where attribute='Aadhar'";

        $r = $this->db->query($sql);
        return $r->result();
    }

    public function get_company_Company_Name() {
        $sql = "SELECT * from company_info_tbl where attribute='Company Name'";

        $r = $this->db->query($sql);
        return $r->result();
    }

    public function get_company_Pincode() {
        $sql = "SELECT * from company_info_tbl where attribute='Pin-code'";

        $r = $this->db->query($sql);
        return $r->result();
    }

    public function get_company_CIN() {
        $sql = "SELECT * from company_info_tbl where attribute='CIN'";

        $r = $this->db->query($sql);
        return $r->result();
    }

    public function get_tax($date) {
        $dataarray = array();
        //$sql = "SELECT * from taxes_tbl where ('$date'>start_date) and ('$date'<end_date)";
        $sql = "SELECT * from taxes_tbl where ('$date'>start_date) and (('$date'<end_date) or end_date IS NULL)";
        $r = $this->db->query($sql);
        $i = 0;
        $s = $r->result();
        foreach ($s as $row) {

            $data[] = array('tax_name' => $row->tax_name,
                'tax_percent' => $row->tax_percentage,
                'tax_liability' => $row->tax_liability,
                'description' => $row->description);
        }
        // echo"<br><br><br><br>";
        // print_r($data);
//        /echo ($data[0]['tax_name']);
        return $data;
        //return $r->result();
    }

    public function get_company_taxCGST() {
        $sql = "SELECT * from taxes_tbl where tax_name='CGST'";

        $r = $this->db->query($sql);
        return $r->result();
    }

    public function get_servicetax($arg) {
        $sql = "Select * from taxes_tbl where '$arg' between start_date and end_date";
        $r = $this->db->query($sql);
        return $r->result();
    }

    public function get_company_taxSGST() {
        $sql = "SELECT * from taxes_tbl where tax_name='SGST'";

        $r = $this->db->query($sql);
        return $r->result();
    }

    public function get_company_taxIGST() {
        $sql = "SELECT * from taxes_tbl where tax_name='IGST'";

        $r = $this->db->query($sql);
        return $r->result();
    }

    public function get_company_IFS_Code() {
        $sql = "SELECT * from company_info_tbl where attribute='IFS Code'";

        $r = $this->db->query($sql);
        return $r->result();
    }

    public function get_company_Account_Number() {
        $sql = "SELECT * from company_info_tbl where attribute='Account Number'";

        $r = $this->db->query($sql);
        return $r->result();
    }

    public function get_company_BankName() {
        $sql = "SELECT * from company_info_tbl where attribute='Bank Name'";

        $r = $this->db->query($sql);
        return $r->result();
    }

    public function get_appl_information($data) {
        $explode_data = explode('?', $data);
        $userid = $explode_data[0];
        $sql = "SELECT fappl.*,inv.* from first_applicant_personal_dtl_tbl fappl,inventory_tbl inv where (fappl.id='$userid') and (inv.customer_id=fappl.id)";
        // print_r($sql);
        $r = $this->db->query($sql);
        return $r->result();
    }

    public function get_appl_stage_payment($id) {
        $explode_data = explode('?', $id);
        $idr = $explode_data[0];
        $appl_id = $explode_data[1];
        $sql = "SELECT pay.amount from invoice_tbl inv,demand_letter_tbl pay where (inv.id='$idr') and inv.appl_id='$appl_id' and (inv.stages=pay.stage) and inv.appl_id=pay.appl_id";
        //print_r($sql);
        $r = $this->db->query($sql);
        return $r->result();
    }

    public function view_payment($idr) {

        $sql = "SELECT * from payment_receipt where id='$idr' ";
        // print_r($sql);
        $r = $this->db->query($sql);
        return $r->result();
    }

    public function view_payment_receipt($data) {
        $explode_data = explode('?', $data);
        $appl_id = $explode_data[0];
        $invoice_no = $explode_data[1];
        $sql = "SELECT * from payment_dtls_tbl where first_appl_id='$appl_id' and receipt_no='$invoice_no'";
        // print_r($sql);
        $r = $this->db->query($sql);
        return $r->result();
    }

    public function get_max_invoice() {
        $sql = "SELECT max(id)+1 as max_id from invoice_tbl;";

        $r = $this->db->query($sql);
        return $r->result();
    }

    public function getinvoiceInput($data) {
        if ($data['invoice_no'] == NULL) {
            //$idata['invoice_no'] = $data['invoice_no'];
            $this->db->insert('invoice_tbl', $data);
            $idata['invoice_no'] = $this->db->insert_id();
            $this->db->where('appl_id', $data['appl_id']);
            $this->db->update('invoice_tbl', $idata);
            if ($this->db->affected_rows() > 0) {
                return true;
            } else {
                return false;
            }
        } else {
            $this->db->insert('invoice_tbl', $data);
            if ($this->db->affected_rows() > 0) {
                return true;
            } else {
                return false;
            }
        }
    }

    public function update_invoice($data2) {
        $userid = $data2['id'];
        $status = $data2['status'];
        $sql = "UPDATE invoice_tbl SET status='$status' where invoice_no='$userid' ";
        $this->db->query($sql);
        // print_r($sql);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function update_demand_tbl($data3) {
        $appl_id = $data3['appl_id'];
        $unit_no = $data3['unit_no'];
        $type = $data3['type'];
        $stage = $data3['stage'];
        $due_amount = $data3['due_amount'];
        $amount = $data3['amount'];
        $bal_amt = $data3['adv_amt'];
        // print_r($due_amount);
        //$sql = "UPDATE demand_letter_tbl SET amount='$amount', due_amount='$due_amount' where appl_id='$appl_id' and unit_no='$unit_no' and type ='$type' and stage='$stage'";



        $sql = "UPDATE demand_letter_tbl SET amount='$amount', due_amount='$due_amount', adv_amt =adv_amt+'$bal_amt' where appl_id='$appl_id' and unit_no='$unit_no' and type ='$type' and stage='$stage'";

        $this->db->query($sql);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function show_dues_info($data) {
        $appl_id = $data['appl_id'];
        $unit_no = $data['unit_no'];

        $stage = $data['stage'];


        $sql = "select * from  demand_letter_tbl where  appl_id='$appl_id' and  stage='$stage' and  unit_no = '$unit_no' ";


        $r = $this->db->query($sql);
        return $r->result();
    }

    public function clear_dues($data4) {

        $current_stage = $data4['stage'];
        $type = $data4['type'];
        $appl_id = $data4['first_appl_id'];
        $paid = $data4['amount_paid'];
        $unit = $data4['unit_no'];
        //$block = $data4['block'];
        // $to_be_taken = $data4['to_be_taken'];
        $ssq99 = "select amount1,amount,adv_amt from demand_letter_tbl where stage='" . $current_stage . "' and type='" . $type . "' and appl_id = '" . $appl_id . "'";
        // print_r($ssq99);

        $qqq99 = $this->db->query($ssq99);
        $amount99 = $qqq99->row();
        //$amt1 = $amount99->amount1;
        $lowerdue = $amount99->amount;
        $loweradv = $amount99->adv_amt;
        //   if($current_stage == 'Area')
        //   {
        //       $prev_stage = 'Area';
        //   }
        //   else
        //   {

        $sql = "select stage from site_stages_tbl where (type='$type') and step_no IN((select step_no from site_stages_tbl where (stage='$current_stage') and (type='$type'))-1)";
        $p = $this->db->query($sql);
        $pp = $p->row();
        $prev_stage = $pp->stage;
        //echo $prev_stage;
// }

        $ssq = "select amount,adv_amt from demand_letter_tbl where stage='$prev_stage' and type='$type' and appl_id = '$appl_id'";
        $qqq = $this->db->query($ssq);
        $qqq2 = $qqq->row();
        $upperdue = $qqq2->amount;
        $upperadv = $qqq2->adv_amt;
        $inhand = $paid;
        //return $inhand;
        if ($upperdue > 0) {   //if the previous stage due amount is zero
            if ($paid >= $upperdue) {
                $inhand = $paid - $upperdue;
                $up = "update demand_letter_tbl set amount=0,due_amount=0 where stage='$prev_stage' and type='$type' and appl_id = '$appl_id'";
                $this->db->query($up);
                //return $inhand.'This is upper due';
            } else {
                $inhand = $upperdue - $paid;
                $us = "update demand_letter_tbl set amount = amount+'$inhand',due_amount = due_amount+'$inhand' where stage='$current_stage' and type='$type' and appl_id = '$appl_id'";
                $this->db->query($us);
                //return $inhand."this is upper advance";
            }

            /////////////////////////////////////////////////////////////////////////////

            $sqllast = "select amount from demand_letter_tbl where stage='$current_stage' and type='$type' and appl_id = '$appl_id'";
            $rlast = $this->db->query($sqllast);
            $slast = $rlast->row();
            $lowerdue = $slast->amount;
            if ($inhand <= $lowerdue) {
                $newdue = $lowerdue - $inhand;
                $uu = "update demand_letter_tbl set amount='$newdue',due_amount='$newdue',adv_amt=0 where stage='$current_stage' and type='$type' and appl_id = $appl_id";
                $this->db->query($uu);
                //return $newdue.'this is new lower due amount now';
            } else {
                $newadv = $inhand - $lowerdue;
                $uus = "update demand_letter_tbl set amount=0,due_amount=0,adv_amt='$newadv' where stage='$current_stage' and type='$type' and appl_id = '$appl_id'";
                $this->db->query($uus);
                //return $newadv.'this is the lower advance';
            }

            ////////////////////////////////////////////////////////////////////////////////
        } else if ($upperadv > 0) {

            $inhand = $paid + $upperadv;
            $up2 = "update demand_letter_tbl set adv_amt=0 where stage='$prev_stage' and type='$type' and appl_id = '$appl_id'";
            $this->db->query($up2);
            if ($inhand >= $lowerdue) {
                $inhand = $inhand - $lowerdue;

                $uss5 = "update demand_letter_tbl set amount=0,due_amount=0,adv_amt='$inhand' where stage='$current_stage' and type='$type' and appl_id = '$appl_id'";
                $this->db->query($uss5);
                //return $inhand.'This is previous due';
            } else {
                $inhand = $lowerdue - $inhand;

                $qq = "update demand_letter_tbl set amount='$inhand',due_amount='$inhand',adv_amt=0 where stage='$current_stage' and type='$type' and appl_id = '$appl_id'";
                $this->db->query($qq);
                //return $inhand.'This is previous advance';
            }
        } else {

            $sqllast = "select amount from demand_letter_tbl where stage='$current_stage' and type='$type' and appl_id = '$appl_id'";
            $rlast = $this->db->query($sqllast);
            $slast = $rlast->row();
            $lowerdue = $slast->amount;
            if ($inhand <= $lowerdue) {
                $newdue = $lowerdue - $inhand;
                $uu = "update demand_letter_tbl set amount='$newdue',due_amount='$newdue',adv_amt=0 where stage='$current_stage' and type='$type' and appl_id = $appl_id";
                $this->db->query($uu);
                //return $newdue.'this is new lower due amount now';
            } else {
                $newadv = $inhand - $lowerdue;
                $uus = "update demand_letter_tbl set amount=0,due_amount=0,adv_amt='$newadv' where stage='$current_stage' and type='$type' and appl_id = '$appl_id'";
                $this->db->query($uus);
                //return $newadv.'this is the lower advance';
            }
        }


        return true;
    }

    public function get_apl_info($id) {



        $sql = "select pjt.project_name, fappl.name, inv.unit_no,inv.block,inv.type from first_applicant_personal_dtl_tbl fappl, project_tbl pjt, inventory_tbl inv where fappl.id='$id' and fappl.id=inv.customer_id and inv.project_id=pjt.id";
        // print_r($sql);
        $r = $this->db->query($sql);
        return $r->result();
    }

    public function get_max_receipt() {
        $sql = "SELECT series_no from receipt_series";

        $r = $this->db->query($sql);
        $sql2 = "update receipt_series set series_no =series_no+1";
        $this->db->query($sql2);
        return $r->result();
    }

    public function get_appl_receipt($unit_no) {

        $sql = "SELECT * from payment_receipt  where unit_no='$unit_no'";
        // print_r($sql);
        $r = $this->db->query($sql);
        return $r->result_array();
    }

    public function get_payment_statement() {

        $sql = "SELECT * from payment_statment ";
        // print_r($sql);
        $r = $this->db->query($sql);
        return $r->result_array();
    }

    public function get_appl_info($unit_no) {

        $sql = "select fappl.name , pdtl.project_name ,invt.unit_no,invt.block ,invt.type from first_applicant_personal_dtl_tbl fappl ,inventory_tbl invt , project_tbl pdtl where invt.unit_no='$unit_no' and invt.customer_id=fappl.id and pdtl.id=fappl.project_id";
        // print_r($sql);
        $r = $this->db->query($sql);
        return $r->result();
    }

    public function getalltaxes() {

        $a = $this->db->get('taxes_tbl');
        return $a->result();
    }

    public function get_adv_sum($data) {
        $unit_no = $data['unit_no'];
        $stagename = $data['stagename'];

        $sql = "SELECT sum(adv_amt) FROM demand_letter_tbl WHERE unit_no='$unit_no'";
        //print_r($sql);
        $r = $this->db->query($sql);
        $sql2 = "update demand_letter_tbl set adv_amt = 0 where unit_no = '$unit_no'";
        $this->db->query($sql2);
        return $r->result_array();
    }

    public function get_payment_reg_inp($data1) {
        $this->db->insert('payment_statment', $data1);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getall_stage($typeid) {

        $typeid = $typeid;

        $stmt = "select * from  site_stages_tbl  where type='$typeid'";
        log_message('info', $stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function get_dl_step_no($unit_no, $stage) {



        $stmt = "select step_no from  demand_letter_tbl  where unit_no='$unit_no' and stage='$stage'";
        //  log_message('info', $stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function get_appl_id($data) {

        $unit_no = $data['unit_no'];

        $stmt = "SELECT  customer_id FROM inventory_tbl WHERE unit_no='$unit_no'";
        //  print_r($stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function get_stage_amt($data) {

        $type = $data['unittype'];
        $unit_no = $data['unit_no'];
        $current_stage = $data['stage'];

        // $stmt = "SELECT  amount FROM demand_letter_tbl WHERE unit_no='$unit_no' and stage='$stage'";
        //  print_r($stmt);
        //$r = $this->db->query($stmt);
        //code of Ashwin
        if ($current_stage != 'BOOKING' && $current_stage != 'PLOT REGISTRY') {
            $sql = "select stage from site_stages_tbl where (type='$type') and step_no IN((select step_no from site_stages_tbl where (stage='$current_stage') and (type='$type'))-1)";
            $p = $this->db->query($sql);
            $pp = $p->row();
            $prev_stage = $pp->stage;

//echo $prev_stage;
// }
            $ssq99 = "select amount1,amount,adv_amt from demand_letter_tbl where stage='" . $current_stage . "' and type='" . $type . "' and unit_no = '" . $unit_no . "'";
            $qqq99 = $this->db->query($ssq99);
            $amount99 = $qqq99->row();
            $lowerdue = $amount99->amount;
            $loweradv = $amount99->adv_amt;




            $ssq = "select amount,adv_amt from demand_letter_tbl where stage='$prev_stage' and type='$type' and unit_no = '$unit_no'";
            $qqq = $this->db->query($ssq);
            $qqq2 = $qqq->row();
            $upperdue = $qqq2->amount;
            $upperadv = $qqq2->adv_amt;

            if ($upperdue >= 0) {
                $lowerdue = $lowerdue + $upperdue;
            }
            if ($upperadv >= 0) {
                $lowerdue = $lowerdue - $upperadv;
            }
        } else {
            $ssq99 = "select amount1,amount,adv_amt from demand_letter_tbl where stage='" . $current_stage . "' and type='" . $type . "' and unit_no = '" . $unit_no . "'";
            $qqq99 = $this->db->query($ssq99);
            $amount99 = $qqq99->row();
            $lowerdue = $amount99->amount;
        }
        return $lowerdue;

        // print_r($ssq);
        //code of Ashwin
        // return $r->result();
    }

    public function get_stageplot_amt($data) {

        $type = $data['unittype'];
        $unit_no = $data['unit_no'];
        $current_stage = $data['stage'];

        // $stmt = "SELECT  amount FROM demand_letter_tbl WHERE unit_no='$unit_no' and stage='$stage'";
        //  print_r($stmt);
        //$r = $this->db->query($stmt);
        //code of Ashwin
        //if ($current_stage = 'BOOKING') {
        if ($current_stage != 'Road Development and Surface  Drain Network') {
            $sql = "select stage from site_stages_tbl where (type='$type') and step_no IN((select step_no from site_stages_tbl where (stage='$current_stage') and (type='$type'))-1)";
            $p = $this->db->query($sql);
            $pp = $p->row();
            $prev_stage = $pp->stage;

//echo $prev_stage;
// }
            $ssq99 = "select amount1,amount,adv_amt from demand_letter_tbl where stage='" . $current_stage . "' and type='" . $type . "' and unit_no = '" . $unit_no . "'";
            $qqq99 = $this->db->query($ssq99);
            $amount99 = $qqq99->row();
            $lowerdue = $amount99->amount;
            $loweradv = $amount99->adv_amt;




            $ssq = "select amount,adv_amt from demand_letter_tbl where stage='$prev_stage' and type='$type' and unit_no = '$unit_no'";
            $qqq = $this->db->query($ssq);
            $qqq2 = $qqq->row();
            $upperdue = $qqq2->amount;
            $upperadv = $qqq2->adv_amt;

            if ($upperdue >= 0) {
                $lowerdue = $lowerdue + $upperdue;
            }
            if ($upperadv >= 0) {
                $lowerdue = $lowerdue - $upperadv;
            }
        } //end of if condition
        else {
            $ssq99 = "select amount1,amount,adv_amt from demand_letter_tbl where stage='" . $current_stage . "' and type='" . $type . "' and unit_no = '" . $unit_no . "'";
            $qqq99 = $this->db->query($ssq99);
            $amount99 = $qqq99->row();
            $lowerdue = $amount99->amount;
        }
        return $lowerdue;


        // print_r($ssq);
        //code of Ashwin
        // return $r->result();
    }

    public function stage_dl_amt($data_dl) {

        $unit_no = $data_dl['unit_no'];
        $stage = $data_dl['stage'];

        $stmt = "select amount from demand_letter_tbl  where unit_no='$unit_no' and stage ='$stage'";
        //print_r($stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function finalPaymentInput($data) {
        $this->db->insert('payment_receipt', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function demandupdateandreceipt($data3, $data4, $data, $stage) {
        $this->db->trans_begin();


        //if ($this->input->post('stages') == 'BOOKING') {
        if ($stage == 'BOOKING') {
            $result2 = $this->update_demand_tbl($data3);
            // echo $result2;
            //  die;
        } elseif ($stage == 'Road Development and Surface  Drain Network') {
            $result2 = $this->update_demand_tbl($data3);
        } else {

            $result4 = $this->clear_dues($data4);
        }
        $result = $this->finalPaymentInput($data);
        $result_pay_series = $this->receipt_series();

        if ($this->db->trans_status() == FALSE) {
            $this->db->trans_rollback();
            $success = FALSE;
        } else {
            $this->db->trans_commit();
            $success = TRUE;
        }
        return $success;
    }

    public function receipt_series() {

        $sql2 = "update receipt_series set series_no =series_no+1";
        $this->db->query($sql2);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getsumofprevadv($id) {
        $sql = "select SUM(stage_adv_amt) as 'su' from payment_receipt where id IN ($id)";
        $r = $this->db->query($sql);
        $s = $r->row();
        $t = $s->su;
        return $t;
    }

    public function getpreviousdueadv($unit_no, $step_no, $paid) {
        /* $prevdueadv = "select SUM(amount) as 'amount',SUM(adv_amt) as 'advanceamt'  from   demand_letter_tbl  where unit_no='$unit_no' and  step_no BETWEEN 1 AND '$step_no-1'";
          $t = $this->db->query($prevdueadv);
          $q = $t->row();
          $d = $q->amount;
          $a = $q->advanceamt;
          return $d.'_'.$a; */
        $sql = "SELECT id,step_no,amount,amount1,due_amount,adv_amt FROM `demand_letter_tbl` WHERE unit_no='A-5' and step_no BETWEEN 1 and 5 and amount>0";
        $q = $this->db->query($sql);
        $list = $q->result();
        $length = sizeof($q->result());
        for ($i = 0; $i < $length; $i++) {
            return $list[$i]->amount;
        }
    }

    public function get_all_date_payment($data) {

        // $username = $data['user_id'];
        $deposite_date = $data['deposite_date'];
        //$typeid = $data['unit_type'];
        //$stmt = "select fappl.id,fappl.name,ptbl.project_name,ptbl.id as 'pid' from first_applicant_personal_dtl_tbl fappl,project_tbl ptbl where (fappl.name='$username') and (ptbl.id = '$projectid')"; // and (fappl.project_id='$projectid')";
        $stmt = "select *  from payment_receipt where (deposite_date='$deposite_date')";
        $r = $this->db->query($stmt);
        //print_r($stmt);
        return $r->result();
    }

    public function getupdatedeposite_date($data) {
        $id = $data['id'];
        $stmt = "SELECT  deposite_date FROM payment_receipt WHERE id='$id'";
        //  print_r($stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function updatedespositedate($data) {
        $id = $data['id'];
        $deposite_date = $data['deposite_date'];
        $sql2 = "update payment_receipt set deposite_date ='$deposite_date'  where id=$id ";

        $this->db->query($sql2);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getstage($unit_no) {
        $unitno = $unit_no;
        $stmt = "SELECT stage FROM `demand_letter_tbl` where unit_no='$unitno' and amount>0";
        //print_r($stmt);
        $r = $this->db->query($stmt);

        return $r->result();
    }

    public function gettaxes($data) {
        $given = $data['givendate'];
        $stmt = "select tax_percentage,tax_liability from taxes_tbl where '" . $given . "' between start_date and end_date";
        $r = $this->db->query($stmt);
        $s = $r->result();
        $rr = json_encode($s);
        return $rr;
    }

    public function get_payment_info($unit_no) {
        $stmt = "select max(id) as max_id ,stage from payment_receipt where unit_no='$unit_no'";

        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function get_revertpayment_info($id) {
        $stmt = "select * from payment_receipt where id='$id'";
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function get_revertdlpaymentid_info($unit_no) {
        $stmt = "select max(id) as dl_maxid,amount,due_amount,adv_amt from demand_letter_tbl where unit_no='$unit_no'";

        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function get_revertdlpayment_info($dl_maxid) {
        $stmt = "select amount,due_amount,adv_amt from demand_letter_tbl where id='$dl_maxid'";

        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function updaterevertpaymentless($dl_maxid, $res, $id, $amount, $due_amount) {

        $sql = "update demand_letter_tbl set due_amount=$res + $due_amount, amount=$res + $amount ,adv_amt='0'  where id=$dl_maxid ";
        $this->db->query($sql);
        $sql2 = "update payment_receipt set reg_status='REVERTED' where id=$id";
        $this->db->query($sql2);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function updaterevertpaymentgreater($dl_maxid, $res1, $id) {

        $sql = "update demand_letter_tbl set due_amount='0', amount='0',adv_amt='$res1'  where id=$dl_maxid ";
        $this->db->query($sql);
        $sql2 = "update payment_receipt set reg_status='REVERTED' where id=$id";
        $this->db->query($sql2);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function updaterevertpaymentequal($dl_maxid, $id, $payment_amt) {

        $sql = "update demand_letter_tbl set due_amount='$payment_amt', amount='$payment_amt',adv_amt='0'  where id=$dl_maxid ";

        $this->db->query($sql);
        $sql2 = "update payment_receipt set reg_status='REVERTED' where id=$id";
        $this->db->query($sql2);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

}

?>
