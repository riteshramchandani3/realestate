<?php

/* 
 * Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential.
 * Written by Oga Technologies, October 1,  2016.
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Demand_letter_view_model extends CI_Model {
    
     public function findwords($alpha) {
        $j = $alpha;
        $stmt = "select id,name from first_applicant_personal_dtl_tbl where name like '%$j%'";
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function Getprojectname() {

        $sql = "select id,project_name from project_tbl";
        $r = $this->db->query($sql);
        return $r->result();
    }

    public function searchingofalluserswithproject($data) {
     
        $username = $data['user_id'];
        $projectid = $data['project_id'];
        $unit_no = $data['unit_no'];
        $stmt = "";

   if ($unit_no !='') {
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
        //print_r($stmt);
        return $r->result();
    }

    public function demand_letter_show_by_id($data) {
        $userid = $data['userid'];
        $projectid = $data['projectid'];
        $sql = "select othertbl.*,prktbl.*,invtbl.*,fappl.*,cappl.*,au.*,pdtl.*,prtbl.* from other_charges othertbl,parking_tbl prktbl,inventory_tbl invtbl,first_applicant_personal_dtl_tbl fappl,co_applicant_tbl cappl,applicant_unit_relation_tbl au,project_dtls_tbl pdtl,project_tbl prtbl where (prktbl.unit_no) and (invtbl.unit_no) and (fappl.id = cappl.first_appl_id) and (fappl.id='$userid') and (fappl.project_id='$projectid') and (au.applicant_id='$userid') and (au.type = pdtl.unit_type) and (pdtl.project_id = prtbl.id)";
        $r = $this->db->query($sql);
        return $r->row_array();
    }
}
?>