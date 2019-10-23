<?php

/*
 * Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential.
 * Written by Oga Technologies, October 1,  2016.
 */
defined('BASEPATH') OR exit('No direct script access allowed');

Class Information extends CI_Controller {

    public function about_us() {
        log_message("debug", "loadin about us pg....");
        $this->load->view('about');
        log_message("debug", "loadin about us pg....done");
    }

    public function copyright_notice() {

        $this->load->view('copyright_notice');
    }

    public function license_agreement() {

        $this->load->view('license_agreement');
    }

    public function renew_license() {

        $this->load->view('renew_license');
    }

}
?>

