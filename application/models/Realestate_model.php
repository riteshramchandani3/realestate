<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Realestate_model extends CI_Model {

    public function project_dtls() {
        $a = $this->db->get('project_tbl');
        return $a->result();
    }

    public function getblocksbyproject($prid) {
        $this->db->select('block');
        $this->db->from('project_tbl');
        $this->db->where('id', $prid);
        $r = $this->db->get();
        return $r->row()->block;
    }

    public function getinputs($data) {
        $this->db->insert('first_applicant_personal_dtl_tbl', $data);
        $id = $this->db->insert_id();

        if ($this->db->affected_rows() > 0) {
            return $id;
            return true;
        } else {
            return false;
        }
    }

    public function getca_inputs($data2) {
        $this->db->insert('co_applicant_tbl', $data2);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getca_inputs1($data3) {
        $this->db->insert('co_applicant_tbl_1', $data3);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function get_intrest_rate($dataint) {
        $this->db->insert('appl_interest_rate_tbl', $dataint);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getupdateintrest($dataint) {

        $id = $dataint['appl_id'];
        $this->db->where('appl_id', $id);
        $this->db->update('appl_interest_rate_tbl', $dataint);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function insertuserprojecttbl($data3) {

        $customer_id = $data3['customer_id'];
        $unit_no = $data3['unit_no'];
        $status = trim($data3['status']);
        // print_r($status);

        $sql = "UPDATE inventory_tbl SET customer_id='$customer_id',status='$status' where unit_no='$unit_no' ";
        //error_log("Admin_model::update_view_page():: SQL is:" . $sql);
        $this->db->query($sql);
        // print_r($sql);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function insertuserparking($data8) {

        $applicant_id = $data8['applicant_id'];
        $unit_no = $data8['unit_no'];
        $parking_no = $data8['parking_no'];
        // print_r($parking_no);

        $sql = "UPDATE parking_tbl SET applicant_id='$applicant_id',unit_no='$unit_no' where parking_no='$parking_no' ";
        //error_log("Admin_model::update_view_page():: SQL is:" . $sql);
        $this->db->query($sql);
        // print_r($sql);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getUploads($data4) {

        $this->db->insert('signed_documents_tbl', $data4);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function findtype($data) {
        $pid = $data['projectid'];
        $blid = $data['blockid'];
        $stmt = "select distinct(unit_type) from project_dtls_tbl where (project_id='$pid') and (block='$blid')";
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function findcategory($data) {
        $pid = $data['projectid'];
        $blname = $data['blockname'];
        $typename = $data['typename'];

        $stmt = "select distinct(category) from project_dtls_tbl where (project_id='$pid') and (block='$blname') and (unit_type='$typename')";
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function findunits($data) {
        $pid = $data['projectid'];
        $blname = $data['blockname'];
        $typename = $data['typename'];
        $categoryname = $data['categoryname'];
        $status = $data['status'];
        $sql = "select unit_no from inventory_tbl where (project_id='$pid') and (block='$blname') and (type = '$typename') and (category='$categoryname') and (status='AVAILABLE')";
        log_message('info', $sql);
        $r = $this->db->query($sql);
        return $r->result();
    }

    public function sendareas($data) {
        $pid = $data['projectid'];
        $blname = $data['blockname'];
        $typename = $data['typename'];
        $categoryname = $data['categoryname'];
        $sql = "select carpet_area,first_floor_carpet_area,ground_floor_carpet_area,balcony_area,common_area,wash_area from project_dtls_tbl where (project_id='$pid') and (block='$blname') and (unit_type = '$typename') and (category='$categoryname')";
        $r = $this->db->query($sql);
        return $r->row_array();
    }

    public function getRegisterInput($data) {
        $this->db->insert('user_registration_tbl', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function isloginvalid($lgdata) {
        $username = $lgdata['usrname'];
        $password = sha1($lgdata['usrpass']);



        //$this->db->select('username','password');
        $sql = "select * from user_registration_tbl where (username='$username') and (password='$password')"; // and (role = 'admin') OR (role='Pre-sales')";
        $r = $this->db->query($sql);

        return $r->result();
    }

    public function CheckInfo($lgdata) {


        $username = $lgdata['usrname'];
        $email = $lgdata['email'];


        //$this->db->select('username','password');
        $this->db->where('username', $username);
        $this->db->where('email', $email);
        $query = $this->db->get('user_registration_tbl');
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function changethepassword($lgdata) { //$data, $uname) {
        $username = $lgdata['username'];
        $email = $lgdata['email'];
        $pass = $lgdata['password'];
        $this->db->where('username', $username);
        //$this->db->where('password',$password);
        $newtbl['password'] = $pass;
        $this->db->update('user_registration_tbl', $newtbl);
        return true;
    }

    public function holdinventory($unitno) {
        $this->db->where('unit_no', $unitno);
        $data['status'] = 'Hold';
        $this->db->update('inventory_tbl', $data);
        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    //function for getting Role from role table 
    public function get_role() {

        $sql = "select role from role_tbl";
        $r = $this->db->query($sql);
        return $r->result();
    }

    public function getintrest($user) {

        $sql = "select * from  appl_interest_rate_tbl where appl_id='$user'";
        // print_r($sql);
        $r = $this->db->query($sql);
        return $r->result();
    }

    //function for getting Role from role table ends 
// 28-08-17 WORKING CODE FOR PARKING 
    public function get_parking($data) {
        $project_id = $data['project_id'];
        $block = $data['block'];
        $type = $data['type'];
        $parking_type = $data['parking_type'];

        $sql = "select parking_no from parking_tbl where (project_id='$project_id')and block='$block' and (type='$type') and parking_type='$parking_type' and (unit_no is NULL)";
        //  print_r($sql);
        $r = $this->db->query($sql);
        return $r->result();
    }

// 28-08-17  PARKING FUNCTION CLOSE 

    public function get_max_id() {
        $sql = "SELECT max(id)+1 as max_id from first_applicant_personal_dtl_tbl;";

        $r = $this->db->query($sql);
        return $r->result();
    }

    public function getupdateinp($data) {

        $id = $data['id'];
        $this->db->where('id', $id);
        $this->db->update('first_applicant_personal_dtl_tbl', $data);
        if ($this->db->affected_rows() > 0) {
            return 'true';
        } else {
            return 'false';
        }
    }

    public function getcoapplupdate($data2) {

        $id = $data2['first_appl_id'];
        $this->db->where('first_appl_id', $id);
        $this->db->update('co_applicant_tbl', $data2);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getcoapplupdate1($data3) {

        $id = $data3['first_appl_id_1'];
        $this->db->where('first_appl_id_1', $id);
        $this->db->update('co_applicant_tbl_1', $data3);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getinvupdate($data3) {

        $customer_id = $data3['customer_id'];
        $status = $data3['status'];
        $sql = "UPDATE inventory_tbl SET status='$status' where customer_id='$customer_id'";

        $this->db->query($sql);


        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function get_company_info() {
        $sql = "SELECT attribute, value from company_info_tbl where attribute='RERA'";

        $r = $this->db->query($sql);
        return $r->result();
    }

    ///////////////////////Updated code for the updation of the applicant
    public function getupdateinp_updated($data) {


        $id = $data['id'];
        $mr_mrs = $data['mr_mrs'];
        $login_id = $data['login_id'];

        $name = $data['name'];
        $fappl_dob = $data['fappl_dob'];
        $fappl_age = $data['fappl_age'];
        $son_doughter_wife = $data['son_doughter_wife'];
        $son_doughter_wife_mr_mrs = $data['son_doughter_wife_mr_mrs'];
        $swd_of = $data['swd_of'];
        $present_addr = str_replace("'", "\'", $data['present_addr']);
        $permanent_addr = str_replace("'", "\'", $data['permanent_addr']);
        $pin_code = $data['pin_code'];
        $contact_mobile = $data['contact_mobile'];
        $contact_landline = $data['contact_landline'];
        $email = $data['email'];
        $aadhar_no = $data['aadhar_no'];
        $pan = $data['pan'];
        $qualification = $data['qualification'];
        $occupation = $data['occupation'];
        $company_name = $data['company_name'];
        $appl_doj = $data['appl_doj'];
        $appl_desig = $data['appl_desig'];
        $appl_dept = $data['appl_dept'];
        $appl_monthly_income = $data['appl_monthly_income'];
        $fa_empl_addr = $data['fa_empl_addr'];
        $pin_code_emp = $data['pin_code_emp'];
        $earning_members = $data['earning_members'];
        $no_of_dependent = $data['no_of_dependent'];
        $dependents_details = $data['dependents_details'];
        $solo_coowner = $data['solo_coowner'];
        $loan_reqs = $data['loan_reqs'];
        $amt_of_loan = $data['amt_of_loan'];
        $bank_name = $data['bank_name'];
        $acc_no = $data['acc_no'];
        $mode_of_payment = $data['mode_of_payment'];
        $booking_amt = $data['booking_amt'];
        $cheque_no = $data['cheque_no'];
        $cheque_dt = $data['cheque_dt'];
        $img_path = $data['img_path'];
        // $date = $data['date'];
        $fappl_documents = $data['fappl_documents'];
        $additional_info = $data['additional_info'];
        $date = $data['date'];
        //$parking_type = $data['parking_type'];
        // $this->db->trans_begin();
        $sql = "UPDATE first_applicant_personal_dtl_tbl SET 
					name='" . $name . "',
				mr_mrs='" . $mr_mrs . "',
			   
               fappl_dob='" . $fappl_dob . "', fappl_age='" . $fappl_age . "',son_doughter_wife='" . $son_doughter_wife . "', son_doughter_wife_mr_mrs='" . $son_doughter_wife_mr_mrs . "',swd_of='" . $swd_of . "',
                   	   present_addr='" . $present_addr . "',permanent_addr='" . $permanent_addr . "', pin_code='" . $pin_code . "',contact_mobile='" . $contact_mobile . "',
                                contact_landline='" . $contact_landline . "'
				,email='" . $email . "',
				
                 aadhar_no='" . $aadhar_no . "',
				 pan='" . $pan . "',
				 qualification='" . $qualification . "',occupation='" . $occupation . "',
				company_name='" . $company_name . "',
                  appl_doj='" . $appl_doj . "',
				  appl_desig='" . $appl_desig . "',
				  appl_dept='" . $appl_dept . "',appl_monthly_income='" . $appl_monthly_income . "',
				fa_empl_addr='" . $fa_empl_addr . "',
				pin_code_emp='" . $pin_code_emp . "',
				earning_members='" . $earning_members . "',
                 no_of_dependent='" . $no_of_dependent . "',
                 dependents_details='" . $dependents_details . "',
				 solo_coowner='" . $solo_coowner . "',
				 amt_of_loan='" . $amt_of_loan . "',
				 loan_reqs ='" . $loan_reqs . "',
				 bank_name ='" . $bank_name . "',
				 acc_no='" . $acc_no . "',
                  mode_of_payment='" . $mode_of_payment . "',
				  booking_amt='" . $booking_amt . "',
				  cheque_no='" . $cheque_no . "',
				  cheque_dt='" . $cheque_dt . "',fappl_documents='" . $fappl_documents . "',
				img_path='" . $img_path . "',date='" . $date . "' ,
				
				additional_info='" . $additional_info . "' ,
				
				login_id='" . $login_id . "'  where id='$id' ";

        $this->db->query($sql);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    /////////////////////////////////////////////////////////////////////


    public function break_amt($payment_data) {
        $pid = $payment_data['project_id'];
        $block = $payment_data['block'];
        $type = $payment_data['type'];
        $category = $payment_data['category'];
        $unit_no = $payment_data['unit_no'];
        $total_cost = $payment_data['total_cost'];

/////////////////////////////////////////////////////////////////////////////



        if ($type == 'Duplex') {
            if($block == 'Phase-2' || $block == 'Phase-1'){
            $remaining = $total_cost;
            // $booking_amt = round($total_cost*(10/100),2);
            //$remaining = $remaining - $booking_amt;
            for ($i = 0; $i <= 8; $i++) {
                switch ($i) {
                    case 0:
                        $stageshare = number_format((float) $remaining * (10 / 100), 2, '.', '');
                        $stagename = 'BOOKING';
                        $step_no = 1;
                        break;
                    case 1:
                        $stageshare = number_format((float) $remaining * (15 / 100), 2, '.', '');
                        $stagename = 'FOUNDATION';
                        $step_no = 2;
                        break;
                    case 2:
                        $stageshare = number_format((float) $remaining * (15 / 100), 2, '.', '');
                        $stagename = 'PLINTH';
                        $step_no = 3;
                        break;
                    case 3:
                        $stageshare = number_format((float) $remaining * (15 / 100), 2, '.', '');
                        $stagename = 'GF SLAB';
                        $step_no = 4;
                        break;
                    case 4:
                        $stageshare = number_format((float) $remaining * (10 / 100), 2, '.', '');
                        $stagename = 'FF SLAB';
                        $step_no = 5;
                        break;
                    case 5:
                        $stageshare = number_format((float) $remaining * (8 / 100), 2, '.', '');
                        $stagename = 'BRICK WORK';
                        $step_no = 6;
                        break;
                    case 6:
                        $stageshare = number_format((float) $remaining * (8 / 100), 2, '.', '');
                        $stagename = 'PLASTER WORK';
                        $step_no = 7;
                        break;
                    case 7:
                        $stageshare = number_format((float) $remaining * (9 / 100), 2, '.', '');
                        $stagename = 'PAINTING/FINISHING';
                        $step_no = 8;
                        break;
                    case 8:
                        $stageshare = number_format((float) $remaining * (10 / 100), 2, '.', '');
                        $stagename = 'POSSESSION';
                        $step_no = 9;
                        break;
                    default:
                        break;
                }


                $breakdata['stage'] = $stagename;
                $breakdata['step_no'] = $step_no;
                $breakdata['project_id'] = $pid;
                $breakdata['block'] = $block;
                $breakdata['type'] = $type;
                $breakdata['category'] = $category;
                $breakdata['unit_no'] = $unit_no;
                $breakdata['payable_amt'] = $stageshare;

                $this->db->insert('payment_stages_tbl', $breakdata);
            }
            
                }else{
                  $land_cost = $payment_data['land_cost'];
                  $construction_cost = $payment_data['construction_cost'];
                  
                    $remaining1 = $land_cost;
                    $remaining = $construction_cost;
            // $booking_amt = round($total_cost*(10/100),2);
            //$remaining = $remaining - $booking_amt;
            for ($i = 0; $i <= 9; $i++) {
                switch ($i) {
                    case 0:
                        $stageshare = number_format((float) $remaining1 , 2, '.', '');
                        $stagename = 'PLOT REGISTRY';
                        $step_no = 1;
                        break;
                    case 1:
                        $stageshare = number_format((float) $remaining * (10 / 100), 2, '.', '');
                        $stagename = 'BOOKING';
                        $step_no = 2;
                        break;
                      case 2:
                        $stageshare = number_format((float) $remaining * (15 / 100), 2, '.', '');
                        $stagename = 'FOUNDATION';
                        $step_no = 3;
                        break;
                    case 3:
                        $stageshare = number_format((float) $remaining * (15 / 100), 2, '.', '');
                        $stagename = 'PLINTH';
                        $step_no = 4;
                        break;
                    case 4:
                        $stageshare = number_format((float) $remaining * (15 / 100), 2, '.', '');
                        $stagename = 'GF SLAB';
                        $step_no = 5;
                        break;
                    case 5:
                        $stageshare = number_format((float) $remaining * (15 / 100), 2, '.', '');
                        $stagename = 'FF SLAB';
                        $step_no = 6;
                        break;
                    case 6:
                        $stageshare = number_format((float) $remaining * (10 / 100), 2, '.', '');
                        $stagename = 'BRICK WORK';
                        $step_no = 7;
                        break;
                    case 7:
                        $stageshare = number_format((float) $remaining * (10 / 100), 2, '.', '');
                        $stagename = 'PLASTER WORK';
                        $step_no = 8;
                        break;
                    case 8:
                        $stageshare = number_format((float) $remaining * (5 / 100), 2, '.', '');
                        $stagename = 'PAINTING/FINISHING';
                        $step_no = 9;
                        break;
                    case 9:
                        $stageshare = number_format((float) $remaining * (5 / 100), 2, '.', '');
                        $stagename = 'POSSESSION';
                        $step_no = 10;
                        break;
                    default:
                        break;
                }


                $breakdata['stage'] = $stagename;
                $breakdata['step_no'] = $step_no;
                $breakdata['project_id'] = $pid;
                $breakdata['block'] = $block;
                $breakdata['type'] = $type;
                $breakdata['category'] = $category;
                $breakdata['unit_no'] = $unit_no;
                $breakdata['payable_amt'] = $stageshare;

                $this->db->insert('payment_stages_tbl', $breakdata);
            }
                  
                  
                
                
            }
            
            
            
        } else if ($type == 'Plot') {
            $remaining = $total_cost;
            for ($i = 0; $i <= 3; $i++) {
                switch ($i) {
                    case 0:
                        $stageshare = number_format((float) $remaining * (10 / 100), 2, '.', '');
                        $stagename = 'Road Development and Surface  Drain Network';
                        $step_no = 1;
                        break;
                    case 1:
                        $stageshare = number_format((float) $remaining * (50 / 100), 2, '.', '');
                        $stagename = 'Electrical Work';
                        $step_no = 2;
                        break;
                    case 2:
                        $stageshare = number_format((float) $remaining * (30 / 100), 2, '.', '');
                        $stagename = 'Sewer Line Network';
                        $step_no = 3;
                        break;

                    case 3:
                        $stageshare = number_format((float) $remaining * (10 / 100), 2, '.', '');
                        $stagename = 'Water Supply and Garden Network';
                        $step_no = 4;
                        break;
                    default:
                        break;
                }


                $breakdata['stage'] = $stagename;
                $breakdata['step_no'] = $step_no;
                $breakdata['project_id'] = $pid;
                $breakdata['block'] = $block;
                $breakdata['type'] = $type;
                $breakdata['category'] = $category;
                $breakdata['unit_no'] = $unit_no;
                $breakdata['payable_amt'] = $stageshare;

                $this->db->insert('payment_stages_tbl', $breakdata);
            }
        } else if ($type == 'Flat') {
            $remaining = $total_cost;
            for ($i = 0; $i <= 14; $i++) {
                switch ($i) {
                    case 0:
                        $stageshare = number_format((float) $remaining * (10 / 100), 2, '.', '');
                        $stagename = 'BOOKING';
                        $step_no = 1;
                        break;
                    case 1:
                        $stageshare = number_format((float) $remaining * (10 / 100), 2, '.', '');
                        $stagename = 'EXCAVATION WORK';
                        $step_no = 2;
                        break;
                    case 2:
                        $stageshare = number_format((float) $remaining * (12 / 100), 2, '.', '');
                        $stagename = 'FOUNDATION';
                        $step_no = 3;
                        break;
                    case 3:
                        $stageshare = number_format((float) $remaining * (8 / 100), 2, '.', '');
                        $stagename = 'PLINTH';
                        $step_no = 4;
                        break;

                    case 4:
                        $stageshare = number_format((float) $remaining * (5 / 100), 2, '.', '');
                        $stagename = 'FIRST FLOOR SLAB';
                        $step_no = 5;
                        break;
                    case 5:
                        $stageshare = number_format((float) $remaining * (5 / 100), 2, '.', '');
                        $stagename = 'SECOND FLOOR SLAB';
                        $step_no = 6;
                        break;
                    case 6:
                        $stageshare = number_format((float) $remaining * (5 / 100), 2, '.', '');
                        $stagename = 'THIRD FLOOR SLAB';
                        $step_no = 7;
                        break;
                    case 7:
                        $stageshare = number_format((float) $remaining * (5 / 100), 2, '.', '');
                        $stagename = 'FOURTH FLOOR SLAB';
                        $step_no = 8;
                        break;
                    case 8:
                        $stageshare = number_format((float) $remaining * (5 / 100), 2, '.', '');
                        $stagename = 'FIFTH FLOOR SLAB';
                        $step_no = 9;
                        break;
                    case 9:
                        $stageshare = number_format((float) $remaining * (5 / 100), 2, '.', '');
                        $stagename = 'SIXTH FLOOR SLAB';
                        $step_no = 10;
                        break;
                    case 10:
                        $stageshare = number_format((float) $remaining * (5 / 100), 2, '.', '');
                        $stagename = 'SEVENTH FLOOR SLAB';
                        $step_no = 11;
                        break;
                    case 11:
                        $stageshare = number_format((float) $remaining * (5 / 100), 2, '.', '');
                        $stagename = 'BRICK WORK';
                        $step_no = 12;
                        break;
                    case 12:
                        $stageshare = number_format((float) $remaining * (5 / 100), 2, '.', '');
                        $stagename = 'PLASTER WORK';
                        $step_no = 13;
                        break;

                    case 13:
                        $stageshare = number_format((float) $remaining * (5 / 100), 2, '.', '');
                        $stagename = 'FLOORING AND FINISHING';
                        $step_no = 14;
                        break;

                    case 14:
                        $stageshare = number_format((float) $remaining * (10 / 100), 2, '.', '');
                        $stagename = 'POSSESSION';
                        $step_no = 15;
                        break;
                    default:
                        break;
                }


                $breakdata['stage'] = $stagename;
                $breakdata['step_no'] = $step_no;
                $breakdata['project_id'] = $pid;
                $breakdata['block'] = $block;
                $breakdata['type'] = $type;
                $breakdata['category'] = $category;
                $breakdata['unit_no'] = $unit_no;
                $breakdata['payable_amt'] = $stageshare;

                $this->db->insert('payment_stages_tbl', $breakdata);
            }
        } else {
            
        }




//$foundation1 = round($remaining*(15/100),2)."<br>";
//$remaining = $remaining - $foundation;
        /*
          $plinth1 = round($remaining*(15/100),2)."<br>";
          //$remaining = $remaining - $plinth;

          $gffslab1 = round($remaining*(15/100),2)."<br>";
          //$remaining = $remaining - $gffslab;

          $ffslab1 = round($remaining*(10/100),2)."<br>";
          //$remaining = $remaining - $ffslab;

          $brickwork1 = round($remaining*(8/100),2)."<br>";
          //$remaining = $remaining - $brickwork;

          $plaster1 = round($remaining*(8/100),2)."<br>";
          //$remaining = $remaining - $plaster;

          $flooring1 = round($remaining*(9/100),2)."<br>";
          //$remaining = $remaining - $flooring;

          $possession1 = round($remaining*(10/100),2)."<br>";
          //echo "====".$remaining = $remaining - $possession."<br>";
         */


//}




        return true;
    }

    public function get_update_inv($datainv) {


        $unit_no = $datainv['unit_no'];
        $east_by = $datainv['east_by'];
        $west_by = $datainv['west_by'];
        $south_by = $datainv['south_by'];
        $north_by = $datainv['north_by'];

        // print_r($status);

        $sql = "UPDATE inventory_tbl SET east_by='$east_by',west_by='$west_by',south_by='$south_by', north_by = '$north_by' where unit_no='$unit_no' ";
        //error_log("Admin_model::update_view_page():: SQL is:" . $sql);
        $this->db->query($sql);
        // print_r($sql);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getuser_profile($user_id) {


        $stmt = "select * from user_registration_tbl where user_id='$user_id'";
        log_message('info', $stmt);
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function get_landcost($pre_salesid) {
        $stmt = "select * from presales_costcalculation_tbl where prospect_id='$pre_salesid'";
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function get_register_input($data) {

        $user_id = $data['user_id'];
        $password = $data['password'];

        // print_r($status);

        $sql = "UPDATE user_registration_tbl SET password='$password' where user_id='$user_id' ";
        //error_log("Admin_model::update_view_page():: SQL is:" . $sql);
        $this->db->query($sql);
        // print_r($sql);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function update_registration_inputs($data) {


        $user_id = $data['user_id'];
        $first_name = $data['first_name'];
        $last_name = $data['last_name'];
        $email = $data['email'];
        $phone = $data['phone'];
        $username = $data['username'];


        $sql = "UPDATE user_registration_tbl SET first_name='$first_name',last_name='$last_name',email='$email',phone='$phone',username='$username' where user_id='$user_id' ";
        //error_log("Admin_model::update_view_page():: SQL is:" . $sql);
        $this->db->query($sql);
        // print_r($sql);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    private function mark_appl_complete($arg) {
        $sql = 'update first_applicant_personal_dtl_tbl set is_complete=true where id=' . $arg;
        $this->db->query($sql);
    }

    public function is_application_form_complete($idr) {
        $sql = 'select is_complete from first_applicant_personal_dtl_tbl where id=' . $idr;
        $r = $this->db->query($sql);
        $s = $r->row();
        $a = $s->is_complete;
        return $a;
    }

    public function process_application_form($data3, $datainv, $dataint, $data2, $data8, $data) {
        $this->db->trans_begin();

        $result['ca'] = $this->getca_inputs1($data3);
        $result['inv'] = $this->get_update_inv($datainv);
        $result['intrest'] = $this->get_intrest_rate($dataint);
        $result['r'] = $this->getca_inputs($data2);
        $result['v'] = $this->insertuserparking($data8);
        $result['insertid'] = $this->getupdateinp_updated($data);
        $fapplid = $data['id'];
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            $success = FALSE;
        } else {
            $this->db->trans_commit();
            $this->mark_appl_complete($fapplid);
            $success = TRUE;
        }
        $result['success'] = $success;
        return $result;
    }

    public function getalldocs() {
        $r = $this->db->get('doc_title_tbl');
        return $r->result();
    }

    public function del_coapp_image($userid) {

        $user = $userid;
        //print_r($user);
        $sql1 = "select ca_img_path from co_applicant_tbl where first_appl_id='$user'";
        $ss = $this->db->query($sql1);
        $imgpth = $ss->row();
        $img = $imgpth->ca_img_path;
        unlink($img);
        $sql = "update co_applicant_tbl set ca_img_path='' where first_appl_id='$user'";
        //error_log("Admin_model::update_view_page():: SQL is:" . $sql);
        $this->db->query($sql);
        // print_r($sql);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function del_coapp1_image($userid) {

        $user = $userid;
        $sql1 = "select ca_img_path_1 from co_applicant_tbl_1 where first_appl_id_1='$user'";
        $ss = $this->db->query($sql1);
        $imgpth = $ss->row();
        $img = $imgpth->ca_img_path_1;
        unlink($img);
        $sql = "update co_applicant_tbl_1 set ca_img_path_1='' where first_appl_id_1='$user'";
        //error_log("Admin_model::update_view_page():: SQL is:" . $sql);
        $this->db->query($sql);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function del_coapp2_image($userid) {

        $user = $userid;
        //print_r($user);
        $sql1 = "select img_path from first_applicant_personal_dtl_tbl where id='$user'";
        $ss = $this->db->query($sql1);
        $imgpth = $ss->row();
        $img = $imgpth->img_path;
        unlink($img);
        $sql = "update first_applicant_personal_dtl_tbl set img_path='' where 	id='$user'";
        //error_log("Admin_model::update_view_page():: SQL is:" . $sql);
        $this->db->query($sql);
        // print_r($sql);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

}

?>