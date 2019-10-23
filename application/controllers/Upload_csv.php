<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Upload_csv extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Upload_csv_model');
    }

    public function index() {
        $this->data['view_data']= $this->Upload_csv_model->view_data();
        $this->load->view('excelimport', $this->Upload_csv_model->data, FALSE);
    }

    //////////////////Import subscriber emails ////////////////////////////////
    public function importbulksite_report() {
        $this->load->view('excelimport');
    }

    public function import() {
        if (isset($_POST["import"])) {
            $filename = $_FILES["file"]["tmp_name"];
            if ($_FILES["file"]["size"] > 0) {
                $file = fopen($filename, "r");

                $c = 0;
                while (($importdata = fgetcsv($file, 10000, ",")) !== FALSE) {
                    
                    $c++;
                    if($c ==1)
                    {
                        if($importdata[0] != 'Unit No.')
                        {
                            $this->session->set_flashdata('failure', 'File is not in required format.');
                            redirect('Upload_csv/index');
                        }
                        if($importdata[1] != 'Project')
                        {
                            $this->session->set_flashdata('failure', 'File is not in required format.');
                            redirect('Upload_csv/index');
                        }
                        if($importdata[2] != 'Phase')
                        {
                            $this->session->set_flashdata('failure', 'File is not in required format.');
                            redirect('Upload_csv/index');
                        }
                        if($importdata[3] != 'Unit Type')
                        {
                            $this->session->set_flashdata('failure', 'File is not in required format.');
                            redirect('Upload_csv/index');
                        }
                        if($importdata[4] != 'Stage')
                        {
                            $this->session->set_flashdata('failure', 'File is not in required format.');
                            redirect('Upload_csv/index');
                        }


                        

                    }
                    if ($c != 1) {
                        
                        $data = array(
                            'unit_no' => $importdata[0],
                            'projectname' => $importdata[1],
                            'block' => $importdata[2],
                            'type' => $importdata[3],
                            'stage' => $importdata[4],
                        
                        );
                        
                        if($importdata[4] !='Open Land')
                        { $insert = $this->Upload_csv_model->importCSV($data);
                        //echo $insert;
                        //die;
                        }
                        
                    }
                }
                fclose($file);
               // echo $insert;
               // die;
                $this->session->set_flashdata('success', 'Data are imported successfully..');
                redirect('upload_csv/index');
            } else {
                $this->session->set_flashdata('failure', 'No File Selected or the File is empty. Try Again');
                redirect('Upload_csv/index');
            }
        }
    }

    /*
      <!--li ><a href="<?php echo //site_url('Upload_csv/importbulksite_report'); ?>">Bulk Excel<!--span style="font-size:24px;" class="pull-right  showopacity fa fa-folder-open-o"></span></a></li-->
      /////////////////////////////////Import subscriber emails //////////////////////////////// */
}
