<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential.
 * Written by Oga Technologies, October 1,  2016.
 */

class Company_info_model extends CI_Model {
    
    public function  get_attribute_value($name)
    {
        $this->db->select('value');
        $this->db->from('company_info_tbl');
        $this->db->where('attribute', $name);
        $r = $this->db->get();
        return $r->row()->value;
        
    }
       public function get_company_info() {
        $sql = "SELECT attribute, value from company_info_tbl where attribute='Rera Regd No.'";

        $r = $this->db->query($sql);
        return $r->result();
    }
       public function get_Completion_Certificate() {
        $sql = "SELECT attribute, value from company_info_tbl where attribute='Completion Certificate'";

        $r = $this->db->query($sql);
        return $r->result();
    }
       public function get_account_section_email() {
        $sql = "SELECT value from company_info_tbl where attribute='ACCOUNT_SECTION'";
        print_r($sql);
        $r = $this->db->query($sql);
        return $r->result();
    }
       public function get_Company_name() {
        $sql = "SELECT attribute, value from company_info_tbl where attribute='Company Name'";

        $r = $this->db->query($sql);
        return $r->result();
    }
       public function get_Company_address() {
        $sql = "SELECT attribute, value from company_info_tbl where attribute='Address'";

        $r = $this->db->query($sql);
        return $r->result();
    }
       public function get_Company_pincode() {
        $sql = "SELECT attribute, value from company_info_tbl where attribute='Pin-code'";

        $r = $this->db->query($sql);
        return $r->result();
    }
     public function get_MD_email() {
        $sql = "SELECT value from company_info_tbl where attribute='MD_Email'";
        
        $r = $this->db->query($sql);
        return $r->result();
    }
    
    
    
    
}?>