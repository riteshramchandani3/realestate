<?php

/* 
 * Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential.
 * Written by Oga Technologies, October 1,  2016.
 */

class Real404 extends CI_Controller 
{
 public function __construct() 
 {
    parent::__construct(); 
 } 

 public function index() 
 { 
    $this->output->set_status_header('404'); 
    $this->load->view('err404');//loading in custom error view
 } 
 public function show404() 
 { 
    $this->output->set_status_header('404'); 
    $this->load->view('err404');//loading in custom error view
 } 
} 