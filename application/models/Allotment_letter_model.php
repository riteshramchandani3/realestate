<?php

/*
 * Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential.
 * Written by Oga Technologies, October 1,  2016.
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Allotment_letter_model extends CI_Model {

    public function allotmentletteruser_info($alpha) {
        $j = $alpha;
        $stmt = "select fa.id,fa.name,inv.block, prj.project_name as project_name, inv.unit_no as unit_no from first_applicant_personal_dtl_tbl fa, project_tbl prj, inventory_tbl inv where (fa.id like '%" . $j . "%' OR fa.name like '%" . $j . "%' OR inv.unit_no like '%".$j."%') AND fa.project_id=prj.id AND inv.customer_id= fa.id";
        $r = $this->db->query($stmt);
        return $r->result();
    }

    public function show_allotment($customer_id) {

        
       // $sql = " SELECT inv.*,pdtl.project_name from inventory_tbl inv, project_tbl pdtl where inv.customer_id='$customer_id' and pdtl.id=inv.project_id";
        $sql = " SELECT inv.*,pdtl.project_name ,prj.* from inventory_tbl inv, project_tbl pdtl,project_dtls_tbl prj where inv.customer_id='$customer_id' and pdtl.id=inv.project_id and inv.project_id=prj.project_id";
       // print_r($sql);
        $r = $this->db->query($sql);
        return $r->result();
    }

    public function sendrowbyid($uid) {

        $sql = "select * from first_applicant_personal_dtl_tbl where id='" . $uid . "' OR name like '%" . $uid . "%'";
        $r = $this->db->query($sql);
        return $r->row_array();
    }

    public function sendrowbyname($name) {

        $sql = "select * from first_applicant_personal_dtl_tbl where name like '%" . $name . "%'";
        $r = $this->db->query($sql);
        return $r->row_array();
    }
    
     public function check_pdf_first($data)
     {
         $userid = $data['userid'];
        /////////////
        $spdf = "select path from documents_tbl where applicant_id='$userid' and doc_type like '%Allotment Letter%'";
        $c = $this->db->query($spdf);
        $b = $c->row_array();
        $imgpth = $b;
        return $imgpth;
        ///////////////
     }
      public function allotment_show_by_id($data) {

        $userid = $data['userid'];
        
        $sql = "select pjt.project_name, fappl.*,inv.customer_id, inv.unit_no,inv.block,inv.type from first_applicant_personal_dtl_tbl fappl, project_tbl pjt, inventory_tbl inv where fappl.id='$userid' and fappl.id=inv.customer_id and inv.project_id=pjt.id";
        $r = $this->db->query($sql);
        return $r->row_array();
       
    }
    
        public function show_allotment_phase2($customer_id) {

        
       // $sql = " SELECT inv.*,pdtl.project_name from inventory_tbl inv, project_tbl pdtl where inv.customer_id='$customer_id' and pdtl.id=inv.project_id";
        $sql = " select pjt.project_name, fappl.*,inv.*, inv.unit_no,inv.block,inv.type from first_applicant_personal_dtl_tbl fappl, project_tbl pjt, inventory_tbl inv where fappl.id='$customer_id' and fappl.id=inv.customer_id and inv.project_id=pjt.id ";
       
        $r = $this->db->query($sql);
        return $r->result();
    }
        public function show_project_details($customer_id) {

        
       // $sql = " SELECT inv.*,pdtl.project_name from inventory_tbl inv, project_tbl pdtl where inv.customer_id='$customer_id' and pdtl.id=inv.project_id";
        $sql = " select pdtl.* from project_dtls_tbl pdtl,inventory_tbl inv where customer_id='$customer_id' and inv.project_id=pdtl.project_id and inv.block=pdtl.block and inv.type=pdtl.unit_type and inv.category=pdtl.category";
       
        $r = $this->db->query($sql);
        return $r->result();
    }
    
        public function show_plot_info($data) {
                $plot_size_mtr= trim($data['plot_size_mtr']);
                $plot_size_ft=   trim($data['plot_size_ft']);
                  $project_id= $data['project_id'];
                  $type= $data['type'];
                 $block=$data['block'];
        
       // $sql = " SELECT inv.*,pdtl.project_name from inventory_tbl inv, project_tbl pdtl where inv.customer_id='$customer_id' and pdtl.id=inv.project_id";
        $sql = " select * from plot_size_tbl where project_id='$project_id' and type='$type'  and block='$block' and plot_size_mtr='$plot_size_mtr' and  plot_size_ft='$plot_size_ft' ";
        //print_r($sql);
        $r = $this->db->query($sql);
        return $r->result();
    }
     public function show_project_details1($customer_id) {

        
       // $sql = " SELECT inv.*,pdtl.project_name from inventory_tbl inv, project_tbl pdtl where inv.customer_id='$customer_id' and pdtl.id=inv.project_id";
        $sql = " select pdtl.* from project_dtls_tbl pdtl,inventory_tbl inv where inv.customer_id='$customer_id' and inv.project_id=pdtl.project_id and inv.block=pdtl.block and inv.type=pdtl.unit_type and inv.category=pdtl.category and inv.plot_size_mtr=pdtl.plot_size_mtr and pdtl.plot_size_ft=inv.plot_size_ft";
       
        $r = $this->db->query($sql);
        return $r->result();
    }
    
    public function document_date($id) {



        $sql = "SELECT date_of_document FROM documents_tbl WHERE   applicant_id='$id' and doc_type like '%Allotment Letter%'";
       // $sql = "SELECT pdtl.*,prj.*, fappl.*, ca.*,inv.* FROM first_applicant_personal_dtl_tbl fappl,co_applicant_tbl ca,inventory_tbl inv ,project_dtls_tbl pdtl , project_tbl prj WHERE inv.block=pdtl.block and prj.id=fappl.project_id and  pdtl.project_id=fappl.project_id and  fappl.id='$id' and inv.customer_id=fappl.id and ca.first_appl_id=fappl.id and pdtl.unit_type=inv.type";
       // print_r($sql);
        $r = $this->db->query($sql);
        return $r->result();
    }

}