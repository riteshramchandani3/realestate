<?php
class Upload_csv_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insertCSV($data)
            {
                
                $this->db->insert('student_registration_tbl', $data);
                return TRUE;
            }
            
       public function importCSV($data)
       {
           
           $projectname = $data['projectname'];
           $projidsql = "select id from project_tbl where project_name='$projectname'";
           $s = $this->db->query($projidsql);
           $r = $s->row();
           
           $unit_no = $data['unit_no'];
           $dataset['project_id'] = $r->id;
           $dataset['unit_no'] = $data['unit_no'];
           $dataset['block'] = $data['block'];
           $dataset['type'] = $data['type'];
           $dataset['stage'] = $data['stage'];
           $dataset['date'] = date('y-m-d');
           
           
          // $enroll = $data['enroll_no'];
           
           
           /*
           $this->db->where('enroll_no',$enroll);
           $this->db->update('student_registration_tbl', $data);
                return TRUE;*/
             
           $checkstmt = "select * from site_report_tbl where unit_no ='$unit_no'";
           $s = $this->db->query($checkstmt);
           $count= $s->num_rows();
           //return $count;
           $r = $s->row();
           $stg = $r->stage;
           
           if($count>0)
           {
               if($stg != $dataset['stage'])
               {
                $dataset['is_updated']=1;
                $this->db->where('unit_no',$unit_no);
                $this->db->update('site_report_tbl',$dataset);
               }
               else
               {
                $dataset['is_updated']=0;   
                $this->db->where('unit_no',$unit_no);
                $this->db->update('site_report_tbl',$dataset);
               }
           return true;
           }
            else
               {
                $this->db->insert('site_report_tbl',$dataset);
               //$this->db->insert('student_registration_tbl',$data);
               //return true;    
               }
                       
                       
           
       }



	public function view_data(){
        /*$query=$this->db->query("SELECT st.*,pt.project_name
                                 FROM site_report_tbl st,project_tbl pt where (st.project_id=pt.id) 
                                 ORDER BY st.id DESC
                                 ");
        return $query->result_array();*/
        $query=$this->db->query("SELECT st.*,pt.project_name,c.attribute,c.value,inv.customer_id,inv.category FROM site_report_tbl st,project_tbl pt,company_info_tbl c,inventory_tbl inv  where (st.project_id=pt.id) and (c.attribute='RERA Regd No.') and (inv.unit_no = st.unit_no)  ORDER BY st.id DESC");
        return $query->result_array();
    }
    
    
    public function makeitzero($unit_no)
    {
        $stmt = "update site_report_tbl set is_updated='0' where unit_no='$unit_no'";
        $this->db->query($stmt);
        return true;
    }

}