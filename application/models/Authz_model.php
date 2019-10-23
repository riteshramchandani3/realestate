<?php

/*
 * Copyright Oga Technologies Pvt Ltd.
 * You cannot copy the contents of this file.
 * Code provided as is and can be used only after prior permission or license.
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Authz_model extends CI_Model {

    
    
    
    public function check_authz($role, $viewname) {
        
       
        if($this->all_allowed($role,$viewname)== 1)
        {
            return true;
        }
        else
        {
         
        $sql = "select count(*) as cc from authz_tbl where role = '$role' and authz_views like '%".$viewname."%'";
        $r = $this->db->query($sql);
        $rr = $r->result();
        $s = $rr[0]->cc;
        if($s ==0)
        {
        return false;
        }
        else
        {return true ;}
        }
     
    }
    
     private function all_allowed($role,$viewname)
    {
        $sql = "select count(*) as 'allowed' from authz_tbl where role='$role' and authz_views like '%$viewname%'";
        $r = $this->db->query($sql);
        $a = $r->result();
        return $a[0]->allowed;
  
    }
   

}

?>