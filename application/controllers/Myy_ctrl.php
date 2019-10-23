<?php

/* 
 * Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential.
 * Written by Oga Technologies, October 1,  2016.
 */
defined('BASEPATH') OR exit('No direct script access allowed');

Class Myy_ctrl extends CI_Controller {

    function __construct() {
        parent::__construct();
    }
    
    public function index()
    {
        $this->load->view('home');      
    }
    
    public function login()
    {
        $this->load->view('login');      
    }
    
    public function home()
    {
        $this->load->view('home');      
    }
    
    public function logout_cnf()
    {
        $this->load->view('logout');
    }
    public function logout_cnfd()
    { 
          log_message('error', 'LOGOUT  ' .  ' The user with Role '.'===========>' . $this->session->userdata('role').'  '.'UserName'.'  ====>   '.$this->session->userdata('usrname').'    ' .'has logout');
        $this->session->sess_destroy();
        $this->load->view('home');
    }
    
    public function show_dashboard()
    {
        $this->load->view('dashboard');
    }
    
    public function load_appl_fill_form()
    {
        $this->load->view('Application');
    }
    
    public function load_cost_calculation()
    {

        $this->load->view('Cost_calculation_search');
    }
    public function load_view_application()
    {
        $this->load->view('application_search');
    }
    
    public function load_allotment_search()
    {
        $this->load->view('Allotment_letter_search');
    }
    public function monthly_work_progress_report()
    {
        $this->load->view('monthly_work_progress_report');
    }
    
    
    
}
?>
