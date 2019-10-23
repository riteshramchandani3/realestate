-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE TABLE `appl_interest_rate_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `appl_id` int(11) NOT NULL,
  `rate` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;



CREATE TABLE `authz_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `authz_views` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE `bank_details_tbl` (
  `applicant_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `bank_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `bank_address` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `bank_ifsc` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `loan_amount_sanctioned` decimal(10,2) NOT NULL,
  `loan_file_number` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `pc_loan_amount_sanctioned` decimal(10,2) NOT NULL,
  `status` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`applicant_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE `before_possession_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `appl_id` int(11) NOT NULL,
  `unit_no` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `unit_cost1` decimal(10,2) DEFAULT NULL,
  `maintiance_charge` decimal(10,2) DEFAULT NULL,
  `monthly_operation` decimal(10,2) DEFAULT NULL,
  `society_common` decimal(10,2) DEFAULT NULL,
  `society_membership_charges` decimal(10,2) DEFAULT NULL,
  `registration_stamp` decimal(10,2) DEFAULT NULL,
  `service_tax1` decimal(10,2) DEFAULT NULL,
  `service_tax2` decimal(10,2) DEFAULT NULL,
  `service_tax3` decimal(10,2) DEFAULT NULL,
  `service_tax4` decimal(10,2) DEFAULT NULL,
  `service_tax5` decimal(10,2) DEFAULT NULL,
  `interest` decimal(10,2) DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL,
  `payment_received` decimal(10,2) DEFAULT NULL,
  `due_balance` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE `category_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `unit_type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE `company_info_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `attribute` varchar(45) NOT NULL,
  `value` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;


CREATE TABLE `completion_of_work` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `applicant_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `phase` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `block` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `unit_no` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `drawing_room` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dining_room` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bedroom_1` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bedroom_2` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bedroom_3` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kitchen` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `staircase` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lobby_area` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `front_terrace` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `back_terrace` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `toilet_floor` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `toilet_wall` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kitchen_wall_tiles` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `wash_area` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tpn` int(11) DEFAULT NULL,
  `porch` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `flush_door` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dewas_frame` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alluminium_handle` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `aldrops` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `door_stopper` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tower_bolt` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `window_alluminium` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `window_ventilator` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `san_indian` int(50) DEFAULT NULL,
  `san_european` int(50) DEFAULT NULL,
  `san_seat_cover` int(50) DEFAULT NULL,
  `san_bib_cock` int(50) DEFAULT NULL,
  `san_pillar_cock` int(50) DEFAULT NULL,
  `san_wall_mix` int(50) DEFAULT NULL,
  `san_c_p_stop_cocks` int(50) DEFAULT NULL,
  `san_cpn` int(50) DEFAULT NULL,
  `san_wash_basin` int(50) DEFAULT NULL,
  `san_waste_pipe` int(50) DEFAULT NULL,
  `elec_6_amp_switch` int(50) DEFAULT NULL,
  `elec_16_amp_switch` int(50) DEFAULT NULL,
  `elec_6_amp_socket` int(50) DEFAULT NULL,
  `elec_16_amp_socket` int(50) DEFAULT NULL,
  `elec_ceiling_rose` int(50) DEFAULT NULL,
  `elec_angle_holder` int(50) DEFAULT NULL,
  `elec_button_holder` int(50) DEFAULT NULL,
  `elec_mcb` int(50) DEFAULT NULL,
  `work_completion_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE `co_applicant_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_appl_id` int(11) NOT NULL,
  `ca_mr_mrs` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ca_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ca_dob` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ca_age` int(10) DEFAULT NULL,
  `co_present_add` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `co_parma_add` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ca_pincode` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ca_son_doughter_wife` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ca_son_doughter_wife_mr_mrs` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ca_swd_of` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ca_aadhar_no` varchar(12) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ca_mo_no` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ca_landline_no` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ca_email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ca_pan` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ca_company_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ca_doj` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ca_desig` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ca_department` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ca_monthly_income` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ca_Qualification` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ca_occupation` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ca_addr_of_employer` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ca_addr_of_pincode` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ca_bank_name_ac_no` int(20) DEFAULT NULL,
  `ca_img_path` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;


CREATE TABLE `co_applicant_tbl_1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_appl_id_1` int(11) NOT NULL,
  `ca_mr_mrs_1` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ca_name_1` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ca_dob_1` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ca_age_1` int(10) DEFAULT NULL,
  `co_present_add_1` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `co_parma_add_1` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ca_pincode_1` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ca_son_doughter_wife_1` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ca_son_doughter_wife_mr_mrs_1` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ca_swd_of_1` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ca_aadhar_no_1` varchar(12) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ca_mo_no_1` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ca_landline_no_1` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ca_email_1` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ca_pan_1` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ca_company_name_1` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ca_doj_1` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ca_desig_1` varchar(60) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ca_department_1` varchar(60) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ca_monthly_income_1` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ca_Qualification_1` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ca_occupation_1` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ca_addr_of_employer_1` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ca_addr_of_pincode_1` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ca_bank_name_ac_no_1` int(20) DEFAULT NULL,
  `ca_img_path_1` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;


CREATE TABLE `demand_letter_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `appl_id` int(11) NOT NULL,
  `unit_no` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `project_name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `block` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `stage` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `step_no` int(11) DEFAULT NULL,
  `currents_date` date NOT NULL,
  `due_date` date NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `amount1` decimal(10,2) NOT NULL,
  `due_amount` decimal(10,2) NOT NULL,
  `image_path` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `adv_amt` decimal(10,2) DEFAULT '0.00',
  `cumulative_amt` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE `documents_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `applicant_id` int(11) DEFAULT NULL,
  `project_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `doc_type` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `path` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_of_document` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


CREATE TABLE `doc_title_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `document_title` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE `duplex_category_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ground_floor_area` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `first_floor_area` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE `facing_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `facing` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE `first_applicant_personal_dtl_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mr_mrs` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fappl_dob` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fappl_age` int(10) DEFAULT NULL,
  `son_doughter_wife` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `son_doughter_wife_mr_mrs` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `swd_of` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `present_addr` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `permanent_addr` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pin_code` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact_mobile` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact_landline` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `aadhar_no` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pan` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qualification` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `occupation` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `appl_doj` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `appl_desig` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `appl_dept` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `appl_monthly_income` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fa_empl_addr` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pin_code_emp` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `earning_members` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `no_of_dependent` int(4) DEFAULT NULL,
  `dependents_details` text COLLATE utf8_unicode_ci,
  `solo_coowner` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loan_reqs` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amt_of_loan` int(10) DEFAULT NULL,
  `bank_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `acc_no` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mode_of_payment` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `booking_amt` int(10) DEFAULT NULL,
  `cheque_no` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cheque_dt` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img_path` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` date NOT NULL,
  `fappl_documents` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `additional_info` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parking_type` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `pre_salesid` int(11) NOT NULL,
  `login_id` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `is_complete` tinyint(1) NOT NULL DEFAULT '0',
  `intrest_rate` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;




CREATE TABLE `int_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unit_no` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `stage` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `appl_id` int(11) NOT NULL,
  `due_dt` date NOT NULL,
  `chq_dt` date NOT NULL,
  `due_amt` decimal(10,2) NOT NULL,
  `paid` decimal(10,2) NOT NULL,
  `actual_amt` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE `inventory_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) DEFAULT NULL,
  `unit_no` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `block` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `category` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `facing` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `carpet_area_price` decimal(10,2) DEFAULT NULL,
  `gf_carpet_area_price` decimal(10,2) DEFAULT NULL,
  `ff_carpet_area_price` decimal(10,2) DEFAULT NULL,
  `gallery_area_price` decimal(10,2) DEFAULT NULL,
  `wash_area_price` decimal(10,2) DEFAULT NULL,
  `balcony_area_price` decimal(10,2) DEFAULT NULL,
  `common_area_price` decimal(10,2) DEFAULT NULL,
  `customer_id` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `unit_cost_as_per_carpet_area` decimal(10,2) DEFAULT NULL,
  `discount` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `gst` decimal(10,2) DEFAULT NULL,
  `price_ca_ref_rate` decimal(10,2) DEFAULT NULL,
  `price_balcony_ref_rate` decimal(10,2) DEFAULT NULL,
  `price_washarea_ref_rate` decimal(10,2) DEFAULT NULL,
  `discount_carpet_area` decimal(10,2) DEFAULT NULL,
  `discount_balcony_ref_rate` decimal(10,2) DEFAULT NULL,
  `discount_washarea_ref_rate` decimal(10,2) DEFAULT NULL,
  `cost_payable_to_company` decimal(10,2) DEFAULT NULL,
  `total_cost` decimal(10,2) DEFAULT NULL,
  `cost_calculation` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` enum('AVAILABLE','BOOKED','HOLD','MORTGUAGED') CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT 'AVAILABLE',
  `terrace_front_price` decimal(10,2) DEFAULT NULL,
  `terrace_back_price` decimal(10,2) DEFAULT NULL,
  `preferred_location_price` decimal(10,2) DEFAULT NULL,
  `plot_size_mtr` varchar(45) DEFAULT NULL,
  `plot_size_ft` varchar(45) DEFAULT NULL,
  `east_by` varchar(45) DEFAULT NULL,
  `west_by` varchar(45) DEFAULT NULL,
  `north_by` varchar(45) DEFAULT NULL,
  `south_by` varchar(45) DEFAULT NULL,
  `prospect_id` varchar(45) DEFAULT NULL,
  `status_date` varchar(45) DEFAULT NULL,
  `floor` varchar(45) DEFAULT NULL,
  `plot_area` decimal(10,2) DEFAULT NULL,
  `flat_carpet_area_sqmt` decimal(10,2) DEFAULT NULL,
  `flat_carpet_area_sqft` decimal(10,2) DEFAULT NULL,
  `shop_area_sqmt` decimal(10,2) DEFAULT NULL,
  `shop_area_sqft` decimal(10,2) DEFAULT NULL,
  `flat_type` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;








CREATE TABLE `location_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `location` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE `other_charges` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `charge_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `charge_amount` decimal(10,2) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE `parking_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `applicant_id` int(11) DEFAULT NULL,
  `project_id` int(11) NOT NULL,
  `block` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `unit_no` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parking_no` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `parking_type` enum('OPEN','COVERED','','') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'COVERED',
  `price` decimal(10,2) NOT NULL,
  `remark` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;





CREATE TABLE `payment_receipt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `receipt_no` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `unit_no` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `stage` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `appl_id` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `installment_no` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `cgst` decimal(10,2) DEFAULT NULL,
  `sgst` decimal(10,2) DEFAULT NULL,
  `service_tax` decimal(10,2) DEFAULT NULL,
  `advance` decimal(10,2) DEFAULT NULL,
  `arrears` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `other_charges` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mode_of_payment` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cheque_date` date DEFAULT NULL,
  `payment_mode_no` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `drawn_on` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deposite_date` date DEFAULT NULL,
  `stage_actual_amt` decimal(10,2) NOT NULL,
  `stage_due_amt` decimal(10,2) DEFAULT NULL,
  `stage_adv_amt` decimal(10,2) DEFAULT NULL,
  `descreption` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reg_status` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `login_id` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE `payment_stages_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stage` varchar(100) NOT NULL,
  `step_no` int(10) NOT NULL,
  `project_id` int(11) NOT NULL,
  `block` varchar(45) NOT NULL,
  `type` varchar(45) NOT NULL,
  `category` varchar(30) NOT NULL,
  `unit_no` varchar(45) NOT NULL,
  `payable_amt` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;




CREATE TABLE `plot_size_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `plot_size_mtr` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `plot_size_ft` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `length_m` decimal(10,2) DEFAULT NULL,
  `width_m` decimal(10,2) DEFAULT NULL,
  `plot_sqmt` decimal(10,2) DEFAULT NULL,
  `plot_sqft` decimal(10,2) DEFAULT NULL,
  `project_id` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `block` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;





CREATE TABLE `presales_costcalculation_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `project_id` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `block` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `unit_no` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `plot_size_mtr` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `plot_size_ft` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `flat_carpet_area_mt` decimal(10,2) DEFAULT NULL,
  `flat_carpet_area_ft` decimal(10,2) DEFAULT NULL,
  `cost_carpet_area` decimal(10,2) DEFAULT NULL,
  `cost_ca_ref_rate` decimal(10,2) DEFAULT NULL,
  `total_unit_cost_as_per_carpet_area` decimal(10,2) DEFAULT NULL,
  `cost_balcony_area` decimal(10,2) DEFAULT NULL,
  `cost_balcony_ref_rate` decimal(10,2) DEFAULT NULL,
  `total_balcony_area` decimal(10,2) DEFAULT NULL,
  `cost_balcony_area_2` decimal(10,2) DEFAULT NULL,
  `cost_balcony_ref_rate_2` decimal(10,2) DEFAULT NULL,
  `total_balcony_area_2` decimal(10,2) DEFAULT NULL,
  `cost_wash_area` decimal(10,2) DEFAULT NULL,
  `cost_washarea_ref_rate` decimal(10,2) DEFAULT NULL,
  `total_wash_area` decimal(10,2) DEFAULT NULL,
  `cost_open_terrace_area_front` decimal(10,2) DEFAULT NULL,
  `cost_open_terrace_front_area_ref_rate` decimal(10,2) DEFAULT NULL,
  `total_open_terrace_area_front` decimal(10,2) DEFAULT NULL,
  `cost_open_terrace_area_back` decimal(10,2) DEFAULT NULL,
  `cost_open_terrace_back_area_ref_rate` decimal(10,2) DEFAULT NULL,
  `total_open_terrace_area_back` decimal(10,2) DEFAULT NULL,
  `cost_car_poarch_area` decimal(10,2) DEFAULT NULL,
  `cost_car_poarch_area_ref_rate` decimal(10,2) DEFAULT NULL,
  `total_car_poarch_area` decimal(10,2) DEFAULT NULL,
  `proportionate_common_area` decimal(10,2) DEFAULT NULL,
  `proportionate_common_area_ref_rate` decimal(10,2) DEFAULT NULL,
  `total_proportionate_common_area` decimal(10,2) DEFAULT NULL,
  `discount` decimal(10,2) DEFAULT NULL,
  `discount_two` decimal(10,2) DEFAULT NULL,
  `cost_payble_to_company` decimal(10,2) DEFAULT NULL,
  `gst` decimal(10,2) DEFAULT NULL,
  `total_cost` decimal(10,2) DEFAULT NULL,
  `discussion` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `extra_charge` decimal(10,2) DEFAULT NULL,
  `extra_charge_des` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `premium_location_charges` decimal(10,2) DEFAULT NULL,
  `premium_location_charges_des` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prospect_id` int(11) DEFAULT NULL,
  `login_id` int(11) DEFAULT NULL,
  `is_request` enum('0','1') COLLATE utf8_unicode_ci DEFAULT '1',
  `is_checked` enum('0','1') COLLATE utf8_unicode_ci DEFAULT NULL,
  `get_approval` enum('0','1') COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_sales_seen` enum('0','1') COLLATE utf8_unicode_ci DEFAULT NULL,
  `basic_cost_ref_rate` decimal(10,2) DEFAULT NULL,
  `mpseb_cost_ref_rate` decimal(10,2) DEFAULT NULL,
  `water_connection_ref_rate` decimal(10,2) DEFAULT NULL,
  `maintenance_cost_ref_rate` decimal(10,2) DEFAULT NULL,
  `corner_charges` decimal(10,2) DEFAULT NULL,
  `garden_facing_charges` decimal(10,2) DEFAULT NULL,
  `flat_parking` decimal(10,2) DEFAULT NULL,
  `MPSEB_system` decimal(10,2) DEFAULT NULL,
  `registry_charges` decimal(10,2) DEFAULT NULL,
  `monthly` decimal(10,2) DEFAULT NULL,
  `MPSEB_meter` decimal(10,2) DEFAULT NULL,
  `mutation` decimal(10,2) DEFAULT NULL,
  `society` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE `project_dtls_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NOT NULL,
  `block` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `unit_type` varchar(80) NOT NULL,
  `category` varchar(50) NOT NULL,
  `carpet_area` decimal(10,2) DEFAULT NULL,
  `ca_ref_rate` decimal(10,2) DEFAULT NULL,
  `first_floor_carpet_area` decimal(10,2) DEFAULT NULL,
  `ffca_ref_rate` decimal(10,2) DEFAULT NULL,
  `ground_floor_carpet_area` decimal(10,2) DEFAULT NULL,
  `gfca_ref_rate` decimal(10,2) DEFAULT NULL,
  `balcony_area` decimal(10,2) DEFAULT NULL,
  `balcony_ref_rate` decimal(10,2) DEFAULT NULL,
  `common_area` decimal(10,2) DEFAULT NULL,
  `commonarea_ref_rate` decimal(10,2) DEFAULT NULL,
  `wash_area` decimal(10,2) DEFAULT NULL,
  `washarea_ref_rate` decimal(10,2) DEFAULT NULL,
  `plot_area` decimal(10,2) DEFAULT NULL,
  `plot_boundary` decimal(10,2) DEFAULT NULL,
  `open_terrace_front_area` decimal(10,2) DEFAULT NULL,
  `open_terrace_front_area_ref_rate` decimal(10,2) DEFAULT NULL,
  `open_terrace_back_area` decimal(10,2) DEFAULT NULL,
  `open_terrace_back_area_ref_rate` decimal(10,2) DEFAULT NULL,
  `preferred_location_area` decimal(10,2) DEFAULT NULL,
  `preferred_location_area_ref_rate` decimal(10,2) DEFAULT NULL,
  `car_poarch_area` decimal(10,2) DEFAULT NULL,
  `car_poarch_area_ref_rate` decimal(10,2) DEFAULT NULL,
  `covered_terrace_front_side_area` decimal(10,2) DEFAULT NULL,
  `covered_terrace_front_side_area_ref_rate` decimal(10,2) DEFAULT NULL,
  `roof_covered_ground_ff_area` decimal(10,2) DEFAULT NULL,
  `roof_covered_ground_ff_area_ref_rate` decimal(10,2) DEFAULT NULL,
  `roof_covered_ground_gf_area` decimal(10,2) DEFAULT NULL,
  `roof_covered_ground_gf_area_ref_rate` decimal(10,2) DEFAULT NULL,
  `box_back_side_area` decimal(10,2) DEFAULT NULL,
  `box_back_side_area_ref_rate` decimal(10,2) DEFAULT NULL,
  `plot_size_mtr` varchar(45) DEFAULT NULL,
  `plot_size_ft` varchar(45) DEFAULT NULL,
  `plot_size_sqmts` varchar(45) DEFAULT NULL,
  `plot_size_sqft` varchar(45) DEFAULT NULL,
  `basic_cost_ref_rate` decimal(10,2) DEFAULT NULL,
  `mpseb_cost_ref_rate` decimal(10,2) DEFAULT NULL,
  `water_connection_ref_rate` decimal(10,2) DEFAULT NULL,
  `maintenance_cost_ref_rate` decimal(10,2) DEFAULT NULL,
  `flat_carpet_area_sqmt` decimal(10,2) DEFAULT NULL,
  `flat_carpet_area_sqft` decimal(10,2) DEFAULT NULL,
  `built_up_area_sqft` decimal(10,2) DEFAULT NULL,
  `parking` varchar(45) DEFAULT NULL,
  `parking_ref_rate` decimal(10,2) DEFAULT NULL,
  `flat_type` varchar(45) DEFAULT NULL,
  `unit_cost_carpet_area` decimal(10,2) DEFAULT NULL,
  `unit_cost_carpet_area_ref_rate` decimal(10,2) DEFAULT NULL,
  `balcony_area_2` decimal(10,2) DEFAULT NULL,
  `balcony_area_2_ref_rate` decimal(10,2) DEFAULT NULL,
  `built_up_area` decimal(10,2) DEFAULT NULL,
  `built_up_rate` decimal(10,2) DEFAULT NULL,
  `basic_cost` decimal(10,2) DEFAULT NULL,
  `shop_area_sqmt` decimal(10,2) DEFAULT NULL,
  `shop_area_sqft` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;


CREATE TABLE `project_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `block` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE `project_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `block` text COLLATE utf8_unicode_ci NOT NULL,
  `registration_no` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `pincode` int(10) NOT NULL,
  `contact_no` int(12) NOT NULL,
  `status` enum('on-going','completed') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'on-going',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE `prospect_discussions_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prospect_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meeting_date` date DEFAULT NULL,
  `discussions` text COLLATE utf8_unicode_ci,
  `is_read` enum('1','0') COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_fresh` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE `prospect_project_info_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `project_id` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `project_name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `block` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `unit_no` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `plot_size_mtr` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `plot_size_ft` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `flat_type` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `floor` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cal` decimal(10,2) DEFAULT NULL,
  `status` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `login_id` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE `prospect_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `visiters_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `visiters_mobile` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE `receipt_series` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `series_no` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE `role_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE `site_report_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(30) DEFAULT NULL,
  `unit_no` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `block` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stage` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `overall_complete_percent` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_updated` tinyint(1) DEFAULT NULL
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE `site_stages_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stage` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `step_no` int(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE `taxes_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `tax_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tax_percentage` decimal(4,2) NOT NULL,
  `tax_liability` decimal(5,2) DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE `unit_type_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `project_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE `user_registration_tbl` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `middle_name` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` enum('0','1') COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- 2018-03-12 10:16:29