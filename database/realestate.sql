-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2018 at 06:14 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `realestate`
--

-- --------------------------------------------------------

--
-- Table structure for table `appl_interest_rate_tbl`
--

CREATE TABLE `appl_interest_rate_tbl` (
  `id` int(11) NOT NULL,
  `appl_id` int(11) NOT NULL,
  `rate` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appl_interest_rate_tbl`
--

INSERT INTO `appl_interest_rate_tbl` (`id`, `appl_id`, `rate`) VALUES
(74, 184, '424.00'),
(75, 185, '0.19'),
(76, 186, '0.03'),
(77, 187, '0.03'),
(78, 188, '0.12'),
(79, 188, '0.12'),
(80, 188, '0.12'),
(81, 188, '2.00'),
(82, 189, '0.32'),
(83, 190, '0.03'),
(84, 191, '12.00'),
(85, 192, '0.12'),
(86, 194, '12.00'),
(87, 195, '12.00'),
(88, 196, '14.00'),
(91, 197, '13.00'),
(92, 198, '0.11'),
(93, 199, '0.12'),
(94, 200, '0.11'),
(95, 201, '12.00'),
(96, 202, '0.11'),
(97, 203, '12.00'),
(98, 204, '0.11'),
(99, 205, '0.12'),
(100, 206, '0.12'),
(101, 207, '12.00'),
(102, 208, '12.00'),
(103, 219, '2.12'),
(104, 217, '7.80'),
(105, 220, '6.50'),
(106, 222, '5.20'),
(107, 225, '12.00'),
(108, 226, '0.12'),
(109, 227, '12.00'),
(110, 231, '8.90'),
(111, 229, '1.20'),
(112, 232, '5.60'),
(113, 234, '1.20'),
(114, 235, '1.20'),
(115, 236, '1.30'),
(116, 237, '1.20'),
(117, 239, '0.22'),
(118, 240, '1.20'),
(119, 242, '12.00'),
(120, 243, '12.00'),
(121, 244, '1.20'),
(122, 245, '1.20'),
(123, 247, '4.00'),
(124, 249, '1.20'),
(125, 250, '0.20'),
(126, 251, '45.00'),
(127, 252, '12.00'),
(128, 253, '12.00'),
(129, 254, '2.00'),
(130, 255, '1.20'),
(131, 256, '1.20'),
(132, 257, '1.20'),
(133, 258, '1.20'),
(134, 259, '1.20'),
(135, 260, '1.20'),
(136, 261, '1.20'),
(137, 260, '1.00'),
(138, 260, '0.23'),
(139, 263, '0.50'),
(140, 264, '1.20'),
(141, 265, '1.20'),
(142, 266, '2.20'),
(143, 267, '1.20'),
(144, 268, '1.20'),
(145, 269, '6.00'),
(146, 270, '1.20');

-- --------------------------------------------------------

--
-- Table structure for table `authz_tbl`
--

CREATE TABLE `authz_tbl` (
  `id` int(11) NOT NULL,
  `role` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `authz_views` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `authz_tbl`
--

INSERT INTO `authz_tbl` (`id`, `role`, `authz_views`) VALUES
(1, 'SALES', 'Allotment_letter_search,Application,Cost_calculation_search,Payment,Payment_previous,Payment_second,Payment_stages,View_application,about,agreement_royale_plot,all_paymentreceipt,allotment_letter,allotment_letter_duplex,allotment_letter_flat,allotment_letter_plot,allotment_letter_shop,appl_bank,application_search,calculation,copyright_notice,cost_calculation_for_duplex,cost_calculation_for_flat,cost_calculation_for_plot,cost_calculation_for_row_house,cost_calculation_for_shop,create_receipt,demand_letter,direct_receipt,direct_receipt_print,documentUpload2,err404,forgot,forgot_delete,home,index.html,invoice,license_agreement,locate_appl_payment,locate_applicant_agreement,locate_applicant_bank,locate_applicant_demandletter,locate_applicant_doc,locate_applicant_interest,locate_applicant_payment,login,logout,payment_receiptprint,payment_reg_input,pre_dash,profile,register,renew_license,reset_password,sales_welcome,search_demand_letter,sheet_one,showpayment,test_application,test_cost,unauthorized,update_application,update_bank,update_profile,view_agreement_letter,view_applicant_doc,view_applicant_interest,view_applicant_invoice,view_applicant_pay,view_applicant_stage_dl,view_bank,view_invoice,view_payment,payment_reg_input,demand_letter_all_stage,presales_welcome,work_completion,view_work_completion,final_calculation,locate_applicant_completion_search,locate_applicant_finalcal,final_calculation,final_calculation_update,final_calculation_view,documentUpload2,presales/Phase1_Shop,presales/Phase1_Shop_view,presales/Phase1_Duplex_Cost_Calculation,presales/Phase1_Duplex_Cost_Calculation_update,presales/Phase1_Duplex_Cost_Calculation_view,presales/Phase1_duplex_new_cost_calculation,presales/Phase1_flat,'),
(3, 'PRESALES', 'Allotment_letter_search,Application,Cost_calculation_search,Payment,Payment_previous,Payment_second,Payment_stages,View_application,about,agreement_royale_plot,all_paymentreceipt,allotment_letter,allotment_letter_duplex,allotment_letter_flat,allotment_letter_plot,allotment_letter_shop,appl_bank,application_search,calculation,copyright_notice,cost_calculation_for_duplex,cost_calculation_for_flat,cost_calculation_for_plot,cost_calculation_for_row_house,cost_calculation_for_shop,create_receipt,demand_letter,direct_receipt,direct_receipt_print,documentUpload2,err404,forgot,forgot_delete,home,index.html,invoice,license_agreement,locate_appl_payment,locate_applicant_agreement,locate_applicant_bank,locate_applicant_demandletter,locate_applicant_doc,locate_applicant_interest,locate_applicant_payment,login,logout,payment_receiptprint,payment_reg_input,pre_dash,profile,register,renew_license,reset_password,sales_welcome,search_demand_letter,sheet_one,showpayment,test_application,test_cost,unauthorized,update_application,update_bank,update_profile,view_agreement_letter,view_applicant_doc,view_applicant_interest,view_applicant_invoice,view_applicant_pay,view_applicant_stage_dl,view_bank,view_invoice,view_payment,payment_reg_input,demand_letter_all_stage,presales_welcome,work_completion,view_work_completion,final_calculation,locate_applicant_completion_search,locate_applicant_finalcal,final_calculation,final_calculation_update,final_calculation_view,documentUpload2,presales/Phase1_Shop,presales/Phase1_Shop_view,presales/Phase1_Duplex_Cost_Calculation,presales/Phase1_Duplex_Cost_Calculation_update,presales/Phase1_Duplex_Cost_Calculation_view,presales/Phase1_duplex_new_cost_calculation,presales/Phase1_flat,'),
(5, 'MD', 'Allotment_letter_search,Application,Cost_calculation_search,Payment,Payment_previous,Payment_second,Payment_stages,View_application,about,agreement_royale_plot,all_paymentreceipt,allotment_letter,allotment_letter_duplex,allotment_letter_flat,allotment_letter_plot,allotment_letter_shop,appl_bank,application_search,calculation,copyright_notice,cost_calculation_for_duplex,cost_calculation_for_flat,cost_calculation_for_plot,cost_calculation_for_row_house,cost_calculation_for_shop,create_receipt,demand_letter,direct_receipt,direct_receipt_print,documentUpload2,err404,forgot,forgot_delete,home,index.html,invoice,license_agreement,locate_appl_payment,locate_applicant_agreement,locate_applicant_bank,locate_applicant_demandletter,locate_applicant_doc,locate_applicant_interest,locate_applicant_payment,login,logout,payment_receiptprint,pre_dash,profile,register,renew_license,reset_password,search_demand_letter,sheet_one,showpayment,site_report,test_application,test_cost,unauthorized,update_application,update_bank,update_profile,view_agreement_letter,view_applicant_doc,view_applicant_interest,view_applicant_invoice,view_applicant_pay,view_applicant_stage_dl,view_bank,view_invoice,view_payment,dashboard,presales/new_prospect,presales/plot_sheet1,presales/plot_update_sheet,presales/plot_view_sheet,presales/pre_sales_cost_calculation,presales/sheet1,presales/sheet1_other,presales/show_visitor,presales/update_sheet1,presales/view_sheet,sales_welcome,payment_reg_input,demand_letter_all_stage,presales_welcome,final_payment,work_completion,view_work_completion,final_calculation,locate_applicant_completion_search,locate_applicant_finalcal,final_calculation,final_calculation_update,final_calculation_view,documentUpload2,presales/Phase1_SHOP,presales/Phase1_Shop_view,presales/Phase1_Shop_update,presales/Phase1_Duplex_Cost_Calculation,presales/Phase1_Duplex_Cost_Calculation_update,presales/Phase1_Duplex_Cost_Calculation_view,presales/Phase1_duplex_new_cost_calculation,presales/Phase1_flat,'),
(6, 'ADMIN', 'Allotment_letter_search,Application,Cost_calculation_search,Payment,Payment_previous,Payment_second,Payment_stages,View_application,about,agreement_royale_plot,all_paymentreceipt,allotment_letter,allotment_letter_duplex,allotment_letter_flat,allotment_letter_plot,allotment_letter_shop,appl_bank,application_search,calculation,copyright_notice,cost_calculation_for_duplex,cost_calculation_for_flat,cost_calculation_for_plot,cost_calculation_for_row_house,cost_calculation_for_shop,create_receipt,demand_letter,direct_receipt,direct_receipt_print,documentUpload2,err404,forgot,forgot_delete,home,index.html,invoice,license_agreement,locate_appl_payment,locate_applicant_agreement,locate_applicant_bank,locate_applicant_demandletter,locate_applicant_doc,locate_applicant_interest,locate_applicant_payment,login,logout,payment_receiptprint,payment_reg_input,pre_dash,profile,register,renew_license,reset_password,sales_welcome,search_demand_letter,sheet_one,showpayment,site_report,test_application,test_cost,unauthorized,update_application,update_bank,update_profile,view_agreement_letter,view_applicant_doc,view_applicant_interest,view_applicant_invoice,view_applicant_pay,view_applicant_stage_dl,view_bank,view_invoice,view_payment,dashboard,presales/new_prospect,presales/plot_sheet1,presales/plot_update_sheet,presales/plot_view_sheet,presales/pre_sales_cost_calculation,presales/sheet1,presales/sheet1_other,presales/show_visitor,presales/update_sheet1,presales/view_sheet,payment_reg_input,demand_letter_all_stage,presales_welcome,locate_applicant_finalcal,final_calculation,final_calculation_update,final_calculation_view,EssarjeeSampada_Phase1_SHOP,presales/Phase1_duplex_new_cost_calculation,presales/Phase1_flat,'),
(7, 'SALES HEAD', 'Allotment_letter_search,Application,Cost_calculation_search,Payment,Payment_previous,Payment_second,Payment_stages,View_application,about,agreement_royale_plot,all_paymentreceipt,allotment_letter,allotment_letter_duplex,allotment_letter_flat,allotment_letter_plot,allotment_letter_shop,appl_bank,application_search,calculation,copyright_notice,cost_calculation_for_duplex,cost_calculation_for_flat,cost_calculation_for_plot,cost_calculation_for_row_house,cost_calculation_for_shop,create_receipt,demand_letter,direct_receipt,direct_receipt_print,documentUpload2,err404,forgot,forgot_delete,home,index.html,invoice,license_agreement,locate_appl_payment,locate_applicant_agreement,locate_applicant_bank,locate_applicant_demandletter,locate_applicant_doc,locate_applicant_interest,locate_applicant_payment,login,logout,payment_receiptprint,payment_reg_input,pre_dash,profile,register,renew_license,reset_password,sales_welcome,search_demand_letter,sheet_one,showpayment,test_application,test_cost,unauthorized,update_application,update_bank,update_profile,view_agreement_letter,view_applicant_doc,view_applicant_interest,view_applicant_invoice,view_applicant_pay,view_applicant_stage_dl,view_bank,view_invoice,view_payment,presales/new_prospect,presales/plot_sheet1,presales/plot_update_sheet,presales/plot_view_sheet,presales/pre_sales_cost_calculation,presales/sheet1,presales/sheet1_other,presales/show_visitor,presales/update_sheet1,presales/view_sheet,sales_welcome,payment_reg_input,demand_letter_all_stage,presales_welcome,locate_applicant_finalcal,final_calculation,final_calculation_update,final_calculation_view,presales/Phase1_Shop,presales/Phase1_Shop_view,presales/Phase1_flat,'),
(8, 'SITE MANAGER', 'site_report,err404,forgot,forgot_delete,home,index.html,login,logout,pre_dash,profile,unauthorized,locate_applicant_finalcal,final_calculation,final_calculation_update,final_calculation_view,');

-- --------------------------------------------------------

--
-- Table structure for table `bank_details_tbl`
--

CREATE TABLE `bank_details_tbl` (
  `applicant_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `bank_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `bank_address` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `bank_ifsc` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `loan_amount_sanctioned` decimal(10,2) NOT NULL,
  `loan_file_number` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `pc_loan_amount_sanctioned` decimal(10,2) NOT NULL,
  `status` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bank_details_tbl`
--

INSERT INTO `bank_details_tbl` (`applicant_id`, `id`, `bank_name`, `bank_address`, `bank_ifsc`, `loan_amount_sanctioned`, `loan_file_number`, `pc_loan_amount_sanctioned`, `status`) VALUES
(82, 0, 'asdfas', 'fasasdf\r\n', 'afd2342', '34535.00', 'fsa234423', '0.98', ''),
(86, 0, 'sbi', 'bhopal', '89s9', '324242.00', 'sa898', '9.20', ''),
(173, 0, 'Bank Of Brodra', 'Rajkoat ', '001BOB', '2500000.00', '1020', '65.79', '');

-- --------------------------------------------------------

--
-- Table structure for table `before_possession_tbl`
--

CREATE TABLE `before_possession_tbl` (
  `id` int(11) NOT NULL,
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
  `due_balance` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `before_possession_tbl`
--

INSERT INTO `before_possession_tbl` (`id`, `appl_id`, `unit_no`, `unit_cost1`, `maintiance_charge`, `monthly_operation`, `society_common`, `society_membership_charges`, `registration_stamp`, `service_tax1`, `service_tax2`, `service_tax3`, `service_tax4`, `service_tax5`, `interest`, `total`, `payment_received`, `due_balance`) VALUES
(1, 150, 'H-197', NULL, NULL, '0.00', '452.00', NULL, '585.00', '0.00', '0.00', '12.00', '0.00', '0.00', '0.00', '2067649.00', '1925000.00', '142649.00'),
(4, 153, 'H-200', NULL, NULL, '0.00', '0.00', NULL, '0.00', '0.00', '200.00', '0.00', '0.00', '0.00', '0.00', '2266800.00', '2125000.00', '141800.00'),
(5, 173, 'H-30', NULL, NULL, '0.00', '0.00', NULL, '99.00', '0.00', '99.00', '77.00', '88.00', '55.00', '99999999.99', '99999999.99', '3800000.00', '99999999.99'),
(6, 174, 'H-58', NULL, NULL, '0.00', '0.00', NULL, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '3803000.00', '580000.00', '3223000.00'),
(8, 149, 'H-194', '3500000.00', '3000.00', '3000.00', '2000.00', '3000.00', '3000.00', '3000.00', '3000.00', '3000.00', '3000.00', '3000.00', '3000.00', '3532000.00', '2555000.00', '977000.00'),
(9, 151, 'H-6', '2500000.00', '111.00', '222.00', '333.00', '444.00', '555.00', '666.00', '777.00', '888.00', '999.00', '1100.00', '11110.00', '2517205.00', '2500000.00', '17205.00'),
(10, 163, 'H-7', '3500000.00', '45.00', '455.00', '54.00', '545.00', '55.00', '55.00', '55.00', '55.00', '55.00', '55.00', '55.00', '3501484.00', '3500000.00', '1484.00'),
(11, 235, 'H-233', '6000000.00', '10000.00', '1000.00', '1000.00', '1000.00', '1000.00', '1000.00', '1000.00', '1000.00', '1000.00', '1000.00', '15000.00', '6034000.00', '6000000.00', '34000.00'),
(12, 196, 'H-123', '3480000.00', '4500.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '4500.00', '0.00', '0.00', '0.00', '3489000.00', '0.00', '0.00'),
(13, 218, 'shop-10', '202000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '78000.00', '80000.00', '0.00', '0.00', '360000.00', '0.00', '0.00'),
(14, 221, 'H-84', '3743619.33', '5000.00', '5000.00', '0.00', '0.00', '5000.00', '5000.00', '5000.00', '50000.00', '5000.00', '60000.00', '5000.00', '3888619.33', '0.00', '3888619.33'),
(15, 261, 'H-82', '2501116.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2501116.00', '2501116.00', '0.00'),
(16, 264, 'H-235', '3815227.54', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '3815227.54', '1553806.88', '2261420.66'),
(17, 230, 'H-87', '3743619.33', '33.33', '33.33', '0.00', '0.00', '33.33', '33.33', '33.33', '33.33', '33.33', '33.00', '0.00', '3743885.64', '0.00', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `category_tbl`
--

CREATE TABLE `category_tbl` (
  `id` int(11) NOT NULL,
  `category_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `unit_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category_tbl`
--

INSERT INTO `category_tbl` (`id`, `category_name`, `unit_type`) VALUES
(5, 'MIG', 11),
(6, 'HIG', 11),
(8, 'Area', 12),
(9, 'HIG', 15),
(11, 'Other', 11),
(12, 'EWS', 13),
(13, 'LIG', 13);

-- --------------------------------------------------------

--
-- Table structure for table `company_info_tbl`
--

CREATE TABLE `company_info_tbl` (
  `id` int(11) NOT NULL,
  `attribute` varchar(45) NOT NULL,
  `value` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_info_tbl`
--

INSERT INTO `company_info_tbl` (`id`, `attribute`, `value`) VALUES
(1, 'Company Name', 'Essarjee Constructions Private Limited '),
(2, 'Address', 'Essarjee House, Z-10, Zone-I, Mezzanine Floor, M.P. Nagar, Bhopal'),
(3, 'GSTIN', '23AAACE8852F1ZS'),
(4, 'CIN', 'U7010MP1996PTC010648'),
(5, 'E-Mail', 'essarjee@gmail.com'),
(6, 'Pin-code', '462030'),
(7, 'RERA Regd No.', 'P-BPL-17-445'),
(8, 'PAN', '789456321'),
(9, ' TIN', '01235454'),
(10, 'Bank Name', 'Allahbad Bank '),
(11, 'Account Number', '50000847363'),
(12, 'IFS Code', 'ALLA0210197'),
(13, 'DL_Payment_Period', '15'),
(14, 'late_interest_rate', '0.11'),
(15, 'Completion Certificate', '1456456465'),
(16, 'Aadhar', '123456789123'),
(17, 'ACCOUNT_SECTION', 'rwamailer@gmail.com'),
(18, 'SITE ENGINEER', 'Arjun Shukhla,Manoj Verma,Rajesh Mishra'),
(19, 'MD_email', 'nmalviya575@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `completion_of_work`
--

CREATE TABLE `completion_of_work` (
  `id` int(11) NOT NULL,
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
  `work_completion_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `completion_of_work`
--

INSERT INTO `completion_of_work` (`id`, `applicant_id`, `project_id`, `phase`, `type`, `block`, `unit_no`, `drawing_room`, `dining_room`, `bedroom_1`, `bedroom_2`, `bedroom_3`, `kitchen`, `staircase`, `lobby_area`, `front_terrace`, `back_terrace`, `toilet_floor`, `toilet_wall`, `kitchen_wall_tiles`, `wash_area`, `tpn`, `porch`, `flush_door`, `dewas_frame`, `alluminium_handle`, `aldrops`, `door_stopper`, `tower_bolt`, `window_alluminium`, `window_ventilator`, `san_indian`, `san_european`, `san_seat_cover`, `san_bib_cock`, `san_pillar_cock`, `san_wall_mix`, `san_c_p_stop_cocks`, `san_cpn`, `san_wash_basin`, `san_waste_pipe`, `elec_6_amp_switch`, `elec_16_amp_switch`, `elec_6_amp_socket`, `elec_16_amp_socket`, `elec_ceiling_rose`, `elec_angle_holder`, `elec_button_holder`, `elec_mcb`, `work_completion_date`) VALUES
(1, 104, 1, 'Phase-2', 'Duplex', 'HIG', 'G-27', '12 fan', '12 fan', '12 fan', '12 fan', '12 fan', '12 fan', '12 fan', '12 fan', '12 fan', '12 fan', '12 fan', 'dasfasdfsad', 'fdsafsad', 'fdsfsa', NULL, 'tttttttt', '12 fan', '12 fan', '12 fan', '12 fan', '12 fan', '', '', '', 56, 56, 56, 56, 56, 0, 9897, 987987, 89, 98, 76, 7, 7, 7, 7, 7, 7, 7, '2018-01-24'),
(2, 142, 1, 'Phase-2', 'Duplex', 'HIG', 'G-24', '45', '85', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2018-01-30'),
(3, 177, 1, 'Phase-2', 'Duplex', 'HIG', 'H-41', 'text', 'text', 'text', 'text', 'text', 'text', 'text', 'text', 'text', 'text', 'text', 'text', 'text', 'text', NULL, 'text 123', 'text', 'text', 'text', 'text', 'text', 'text', 'text', 'text', 1, 1, 1, 1, 11, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2018-02-13'),
(4, 151, 1, 'Phase-2', 'Duplex', 'HIG', 'H-6', '3', '3', '3', '3', '3', '3', '3', '3', '3', '4', '4', '4', '7', '5', 5, '4', '44', '7', '7', '5', '5', '4', '7', '7', 5, 5, 5, 5, 5, 7, 5, 5, 5, 5, 7, 5, 4, 4, 7, 7, 7, 7, '2018-02-17'),
(5, 163, 1, 'Phase-2', 'Duplex', 'HIG', 'H-7', 'fasdf', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2018-02-17'),
(6, 235, 1, 'Phase-2', 'Duplex', 'HIG', 'H-233', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 4, '2', '4', '2', '1', '1', '1', '1', '1', '2', 4, 4, 1, 2, 5, 3, 5, 5, 5, 4, 6, 25, 14, 2, 1, 1, 1, 4, '2018-03-09');

-- --------------------------------------------------------

--
-- Table structure for table `co_applicant_tbl`
--

CREATE TABLE `co_applicant_tbl` (
  `id` int(11) NOT NULL,
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
  `ca_img_path` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `co_applicant_tbl`
--

INSERT INTO `co_applicant_tbl` (`id`, `first_appl_id`, `ca_mr_mrs`, `ca_name`, `ca_dob`, `ca_age`, `co_present_add`, `co_parma_add`, `ca_pincode`, `ca_son_doughter_wife`, `ca_son_doughter_wife_mr_mrs`, `ca_swd_of`, `ca_aadhar_no`, `ca_mo_no`, `ca_landline_no`, `ca_email`, `ca_pan`, `ca_company_name`, `ca_doj`, `ca_desig`, `ca_department`, `ca_monthly_income`, `ca_Qualification`, `ca_occupation`, `ca_addr_of_employer`, `ca_addr_of_pincode`, `ca_bank_name_ac_no`, `ca_img_path`) VALUES
(1, 194, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(2, 195, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(3, 196, 'Mr.', 'Rahul Jha', '', 0, '', '', '', 'S/o.', 'Mr.', 'Rohan Jha', '', '', NULL, '', '', '', '', '', '', '0.00', '', '', '', '', NULL, './uploads/applicants_img/NAFISA2201802270405341519727734ESSARJEE SAMPADA.jpg'),
(4, 196, 'Mr.', 'Rahul Jha', '', 0, '', '', '', 'S/o.', 'Mr.', 'Rohan Jha', '', '', NULL, '', '', '', '', '', '', '0.00', '', '', '', '', NULL, './uploads/applicants_img/ramu7201802270408521519727932ESSARJEE SAMPADA.jpg'),
(5, 196, 'Mr.', 'Rahul Jha', '', 0, '', '', '', 'S/o.', 'Mr.', 'Rohan Jha', '', '', NULL, '', '', '', '', '', '', '0.00', '', '', '', '', NULL, './uploads/applicants_img/ramu7201802270411201519728080ESSARJEE SAMPADA.jpg'),
(6, 197, 'Mrs.', 'Aafreen Khan', '', 0, 'bhopal', 'bhopal', '', 'W/o.', 'Mr.', 'Iram Khan', '', '', NULL, '', '', '', '', '', '', '0.00', '', '', '', '', NULL, './uploads/applicants_img/NAFISA2201802270510211519731621ESSARJEE SAMPADA.jpg'),
(7, 198, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(8, 199, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(9, 200, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(10, 201, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(11, 202, 'Ms.', 'nikki', '', 0, 'shahpura bhopal', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '0.00', '', '', '', '', NULL, './uploads/applicants_img/'),
(12, 203, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(13, 204, 'Mr.', 'Aarti kumari', '10-03-1999', 19, 'line no 205 ,near railway station road, 80 fit road, naveen nagar bhopal ', 'line no 205 ,near railway station road, 80 fit road, naveen nagar bhopal ', '', '', '', '', '', '8989898989', NULL, 'nirbhayc4@gmail.com', '', '', '', '', '', '0.00', '', '', '', '', NULL, './uploads/applicants_img/female201803230346431521800203ESSARJEE SAMPADA.jpg'),
(14, 205, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(16, 207, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '0.00', '', '', '', '', NULL, './uploads/applicants_img/'),
(17, 208, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '0.00', '', '', '', '', NULL, './uploads/applicants_img/'),
(18, 219, 'Mr.', 'Ram', '02-03-1977', 41, 'bhopal', 'bhopal', '461232', 'S/o.', 'Mr.', 'Shyam', '', '', NULL, '', '', '', '', '', '', '0.00', '', '', '', '', NULL, './uploads/applicants_img/male_img201803070608401520402920ESSARJEE SAMPADA.jpg'),
(19, 217, 'Mr.', 'Avinash', '06-03-1973', 45, 'bhopal', 'bhopal', '968574', 'S/o.', 'Mr.', 'Raman', '', '', NULL, '', '', '', '', '', '', '0.00', '', '', '', '', NULL, './uploads/applicants_img/'),
(20, 220, 'Mr.', 'Avin', '', 0, 'bhopal', 'bhopal', '', 'S/o.', 'Mr.', 'Tezbahadur', '', '', NULL, '', '', '', '', '', '', '0.00', '', '', '', '', NULL, './uploads/applicants_img/'),
(21, 222, 'Mrs.', 'Afreen', '', 0, 'bhopal', 'bhopal', '', 'W/o', 'Mr.', 'Waseem', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/NAFISA2201803070245331520414133ESSARJEE SAMPADA.jpg'),
(23, 226, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(24, 227, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(25, 231, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(26, 229, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(27, 232, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(28, 234, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(29, 235, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '0.00', '', '', '', '', NULL, './uploads/applicants_img/'),
(30, 236, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(31, 237, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(32, 239, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(33, 240, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(34, 242, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(35, 243, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(36, 244, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(37, 245, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(38, 247, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(39, 249, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(40, 250, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(41, 251, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(42, 252, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(43, 253, 'Ms.', 'Raju', '08-03-1974', 44, 'afafasfas', 'fasdfas', '454444', 'D/o.', 'Mr.', 'asdf', '989898989898', '9989098898', NULL, '', '', '', '', '', '', '0.00', '', '', '', '', NULL, './uploads/applicants_img/'),
(44, 254, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/Paayal201803230722471521813167ESSARJEE SAMPADA.jpg'),
(45, 255, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '0.00', '', '', '', '', NULL, './uploads/applicants_img/'),
(46, 256, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(47, 257, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(48, 258, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(49, 259, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(50, 260, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(51, 261, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(52, 260, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(53, 260, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(54, 263, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(55, 264, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(58, 267, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(59, 268, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(60, 269, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(61, 270, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/');

-- --------------------------------------------------------

--
-- Table structure for table `co_applicant_tbl_1`
--

CREATE TABLE `co_applicant_tbl_1` (
  `id` int(11) NOT NULL,
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
  `ca_img_path_1` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `co_applicant_tbl_1`
--

INSERT INTO `co_applicant_tbl_1` (`id`, `first_appl_id_1`, `ca_mr_mrs_1`, `ca_name_1`, `ca_dob_1`, `ca_age_1`, `co_present_add_1`, `co_parma_add_1`, `ca_pincode_1`, `ca_son_doughter_wife_1`, `ca_son_doughter_wife_mr_mrs_1`, `ca_swd_of_1`, `ca_aadhar_no_1`, `ca_mo_no_1`, `ca_landline_no_1`, `ca_email_1`, `ca_pan_1`, `ca_company_name_1`, `ca_doj_1`, `ca_desig_1`, `ca_department_1`, `ca_monthly_income_1`, `ca_Qualification_1`, `ca_occupation_1`, `ca_addr_of_employer_1`, `ca_addr_of_pincode_1`, `ca_bank_name_ac_no_1`, `ca_img_path_1`) VALUES
(1, 194, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(2, 195, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(3, 196, 'Ms.', 'Rati Mishra', '', 0, '', '', '', 'D/o.', 'Mr.', 'Rahul Mishra', '', '', NULL, '', '', '', '', '', '', '0.00', '', '', '', '', NULL, './uploads/applicants_img/ramu7201802270405341519727734ESSARJEE SAMPADA.jpg'),
(4, 196, 'Ms.', 'Rati Mishra', '', 0, '', '', '', 'D/o.', 'Mr.', 'Rahul Mishra', '', '', NULL, '', '', '', '', '', '', '0.00', '', '', '', '', NULL, './uploads/applicants_img/rani2201802270408521519727932ESSARJEE SAMPADA.jpg'),
(5, 196, 'Ms.', 'Rati Mishra', '', 0, '', '', '', 'D/o.', 'Mr.', 'Rahul Mishra', '', '', NULL, '', '', '', '', '', '', '0.00', '', '', '', '', NULL, './uploads/applicants_img/rani2201802270411201519728080ESSARJEE SAMPADA.jpg'),
(6, 197, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '0.00', '', '', '', '', NULL, './uploads/applicants_img/'),
(7, 198, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(8, 199, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(9, 200, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(10, 201, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(11, 202, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '0.00', '', '', '', '', NULL, './uploads/applicants_img/'),
(12, 203, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(13, 204, 'Ms.', 'Kavita kumari', '10-03-1999', 19, 'line no 205 ,near railway station road, 80 fit road, naveen nagar bhopal ', 'line no 205 ,near railway station road, 80 fit road, naveen nagar bhopal ', '', '', '', '', '', '8989898989', NULL, 'nirbhayc4@gmail.com', '', '', '', '', '', '0.00', '', '', '', '', NULL, './uploads/applicants_img/female2201803230405181521801318ESSARJEE SAMPADA.jpg'),
(14, 205, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(15, 206, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '0.00', '', '', '', '', NULL, './uploads/applicants_img/'),
(16, 207, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '0.00', '', '', '', '', NULL, './uploads/applicants_img/'),
(17, 208, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '0.00', '', '', '', '', NULL, './uploads/applicants_img/'),
(18, 219, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '0.00', '', '', '', '', NULL, './uploads/applicants_img/'),
(19, 217, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '0.00', '', '', '', '', NULL, './uploads/applicants_img/'),
(20, 220, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '0.00', '', '', '', '', NULL, './uploads/applicants_img/'),
(21, 222, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(22, 225, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(23, 226, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(24, 227, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(25, 231, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(26, 229, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(27, 232, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(28, 234, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(29, 235, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '0.00', '', '', '', '', NULL, './uploads/applicants_img/'),
(30, 236, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(31, 237, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(32, 239, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(33, 240, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(34, 242, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(35, 243, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(36, 244, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(37, 245, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(38, 247, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(39, 249, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(40, 250, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(41, 251, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(42, 252, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(43, 253, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '0.00', '', '', '', '', NULL, './uploads/applicants_img/'),
(44, 254, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(45, 255, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '0.00', '', '', '', '', NULL, './uploads/applicants_img/'),
(46, 256, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(47, 257, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(48, 258, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(49, 259, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(50, 260, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(51, 261, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(52, 260, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(53, 260, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(54, 263, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(55, 264, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(56, 265, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(57, 266, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(58, 267, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(59, 268, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(60, 269, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/'),
(61, 270, '', '', '', 0, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', NULL, './uploads/applicants_img/');

-- --------------------------------------------------------

--
-- Table structure for table `demand_letter_tbl`
--

CREATE TABLE `demand_letter_tbl` (
  `id` int(11) NOT NULL,
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
  `cumulative_amt` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `demand_letter_tbl`
--

INSERT INTO `demand_letter_tbl` (`id`, `appl_id`, `unit_no`, `type`, `project_name`, `block`, `stage`, `step_no`, `currents_date`, `due_date`, `amount`, `amount1`, `due_amount`, `image_path`, `adv_amt`, `cumulative_amt`) VALUES
(1, 200, 'GF-11', 'Flat', '1', '', 'BOOKING', 1, '2018-02-01', '2018-02-16', '0.00', '110306.28', '0.00', '', '0.00', '110306.28'),
(2, 200, 'GF-11', 'Flat', '1', '', 'Excavation Work', 2, '2018-02-02', '2018-02-17', '0.00', '110306.28', '0.00', '', '0.00', '120612.56'),
(3, 194, 'H-123', 'Duplex', '2', 'Phase-1', 'BOOKING', 1, '2018-02-15', '2018-03-02', '0.00', '152500.00', '0.00', '', '0.00', NULL),
(4, 194, 'H-123', 'Duplex', '2', 'Phase-1', 'FOUNDATION', 2, '2018-02-15', '2018-03-02', '0.00', '228750.00', '0.00', '', '0.00', NULL),
(5, 194, 'H-123', 'Duplex', '2', 'Phase-1', 'PLINTH', 3, '2018-02-15', '2018-03-02', '0.00', '228750.00', '0.00', '', '0.00', NULL),
(6, 194, 'H-123', 'Duplex', '2', 'Phase-1', 'GF SLAB', 4, '2018-02-15', '2018-03-02', '0.00', '228750.00', '0.00', '', '0.00', NULL),
(7, 194, 'H-123', 'Duplex', '2', 'Phase-1', 'FF SLAB', 5, '2018-02-15', '2018-03-02', '0.00', '152500.00', '0.00', '', '0.00', NULL),
(8, 194, 'H-123', 'Duplex', '2', 'Phase-1', 'BRICK WORK', 6, '2018-02-15', '2018-03-02', '0.00', '122000.00', '0.00', '', '0.00', NULL),
(9, 194, 'H-123', 'Duplex', '2', 'Phase-1', 'PLASTER WORK', 7, '2018-02-15', '2018-03-02', '0.00', '122000.00', '0.00', '', '0.00', NULL),
(10, 194, 'H-123', 'Duplex', '2', 'Phase-1', 'PAINTING/FINISHING', 8, '2018-02-15', '2018-03-02', '0.00', '137250.00', '0.00', '', '0.00', '1372500.00'),
(11, 207, 'H-101', 'Duplex', '2', 'Phase-1', 'BOOKING', 1, '2018-03-01', '2018-03-16', '0.00', '348128.15', '0.00', 'uploads/site_images/asdf220180305115657_.jpeg', '0.00', '696128.15'),
(12, 207, 'H-101', 'Duplex', '2', 'Phase-1', 'FOUNDATION', 2, '2018-03-08', '2018-03-23', '0.00', '522192.23', '0.00', '', '0.00', '1044192.23'),
(13, 208, 'H-102', 'Duplex', '2', 'Phase-1', 'BOOKING', 1, '2018-03-01', '2018-03-16', '0.00', '348000.00', '0.00', '', '0.00', '348000.00'),
(14, 208, 'H-102', 'Duplex', '2', 'Phase-1', 'FOUNDATION', 2, '2018-03-09', '2018-03-24', '0.00', '522000.00', '0.00', '', '0.00', NULL),
(15, 208, 'H-102', 'Duplex', '2', 'Phase-1', 'PLINTH', 3, '2018-03-09', '2018-03-24', '0.00', '522000.00', '0.00', '', '0.00', NULL),
(16, 208, 'H-102', 'Duplex', '2', 'Phase-1', 'GF SLAB', 4, '2018-03-09', '2018-03-24', '0.00', '522000.00', '0.00', '', '0.00', NULL),
(17, 208, 'H-102', 'Duplex', '2', 'Phase-1', 'FF SLAB', 5, '2018-03-09', '2018-03-24', '0.00', '348000.00', '0.00', '', '0.00', NULL),
(18, 208, 'H-102', 'Duplex', '2', 'Phase-1', 'BRICK WORK', 6, '2018-03-09', '2018-03-24', '0.00', '278400.00', '0.00', '', '0.00', NULL),
(19, 208, 'H-102', 'Duplex', '2', 'Phase-1', 'PLASTER WORK', 7, '2018-03-09', '2018-03-24', '0.00', '278400.00', '0.00', '', '0.00', NULL),
(20, 208, 'H-102', 'Duplex', '2', 'Phase-1', 'PAINTING/FINISHING', 8, '2018-03-09', '2018-03-24', '0.00', '313200.00', '0.00', '', '0.00', NULL),
(21, 208, 'H-102', 'Duplex', '2', 'Phase-1', 'POSSESSION', 9, '2018-03-09', '2018-03-24', '3132000.00', '348000.00', '0.00', '', '0.00', '3132000.00'),
(22, 220, 'H-57', 'Duplex', '1', 'Phase-2', 'BOOKING', 1, '2018-02-07', '2018-02-22', '0.00', '381500.00', '0.00', '', '0.00', '381500.00'),
(23, 220, 'H-57', 'Duplex', '1', 'Phase-2', 'FOUNDATION', 2, '2018-02-21', '2018-03-08', '0.00', '572250.00', '0.00', '', '0.00', NULL),
(24, 220, 'H-57', 'Duplex', '1', 'Phase-2', 'PLINTH', 3, '2018-02-21', '2018-03-08', '0.00', '572250.00', '0.00', '', '1000000.00', '1446000.00'),
(25, 206, 'GF-1', 'Flat', '1', 'Phase-2', 'BOOKING', 1, '2018-02-05', '2018-02-20', '0.00', '176800.00', '0.00', '', '0.00', '176800.00'),
(26, 206, 'GF-1', 'Flat', '1', 'Phase-2', 'EXCAVATION WORK', 2, '2018-01-11', '2018-01-26', '0.00', '176800.00', '0.00', '', '0.00', NULL),
(27, 206, 'GF-1', 'Flat', '1', 'Phase-2', 'FOUNDATION', 3, '2018-01-11', '2018-01-26', '0.00', '212160.00', '0.00', '', '0.00', NULL),
(28, 206, 'GF-1', 'Flat', '1', 'Phase-2', 'PLINTH', 4, '2018-01-11', '2018-01-26', '0.00', '212160.00', '0.00', '', '0.00', NULL),
(29, 206, 'GF-1', 'Flat', '1', 'Phase-2', 'FIRST FLOOR SLAB', 5, '2018-01-11', '2018-01-26', '912560.00', '141440.00', '0.00', '', '0.00', '912560.00'),
(30, 222, 'H-74', 'Plot', '1', 'Phase-2', 'Road Development and Surface  Drain Network', 1, '2018-02-08', '2018-02-23', '200000.00', '250000.00', '200000.00', '', '0.00', '250000.00'),
(31, 205, 'H-253', 'Duplex', '2', 'Phase-1', 'BOOKING', 1, '2018-03-15', '2018-03-30', '0.00', '348154.31', '0.00', '', '0.00', NULL),
(32, 205, 'H-253', 'Duplex', '2', 'Phase-1', 'FOUNDATION', 2, '2018-03-15', '2018-03-30', '870385.77', '522231.46', '870385.77', '', '0.00', '870385.77'),
(33, 229, 'H-59', 'Duplex', '1', 'Phase-2', 'BOOKING', 1, '2018-03-09', '2018-03-24', '260310.75', '381522.75', '260310.75', '', '0.00', '381522.75'),
(34, 235, 'H-233', 'Duplex', '1', 'Phase-2', 'BOOKING', 1, '2018-03-09', '2018-03-24', '0.00', '600000.00', '0.00', '', '0.00', '600000.00'),
(35, 235, 'H-233', 'Duplex', '1', 'Phase-2', 'FOUNDATION', 2, '2018-03-09', '2018-03-24', '0.00', '900000.00', '0.00', '', '0.00', NULL),
(36, 235, 'H-233', 'Duplex', '1', 'Phase-2', 'PLINTH', 3, '2018-03-09', '2018-03-24', '0.00', '900000.00', '0.00', '', '0.00', NULL),
(37, 235, 'H-233', 'Duplex', '1', 'Phase-2', 'GF SLAB', 4, '2018-03-09', '2018-03-24', '0.00', '900000.00', '0.00', '', '0.00', NULL),
(38, 235, 'H-233', 'Duplex', '1', 'Phase-2', 'FF SLAB', 5, '2018-03-09', '2018-03-24', '0.00', '600000.00', '0.00', '', '0.00', NULL),
(39, 235, 'H-233', 'Duplex', '1', 'Phase-2', 'BRICK WORK', 6, '2018-03-09', '2018-03-24', '0.00', '480000.00', '0.00', '', '0.00', NULL),
(40, 235, 'H-233', 'Duplex', '1', 'Phase-2', 'PLASTER WORK', 7, '2018-03-09', '2018-03-24', '0.00', '480000.00', '0.00', '', '0.00', NULL),
(41, 235, 'H-233', 'Duplex', '1', 'Phase-2', 'PAINTING/FINISHING', 8, '2018-03-09', '2018-03-24', '0.00', '540000.00', '0.00', '', '0.00', '4900000.00'),
(42, 235, 'H-233', 'Duplex', '1', 'Phase-2', 'POSSESSION', 9, '2018-03-09', '2018-03-24', '0.00', '600000.00', '0.00', '', '0.00', '500000.00'),
(43, 236, 'GF-4', 'Flat', '1', 'Phase-2', 'BOOKING', 1, '2018-03-09', '2018-03-24', '0.00', '285140.55', '0.00', '', '0.00', '285140.55'),
(44, 236, 'GF-4', 'Flat', '1', 'Phase-2', 'EXCAVATION WORK', 2, '2018-03-09', '2018-03-24', '0.00', '285140.55', '0.00', '', '0.00', NULL),
(45, 236, 'GF-4', 'Flat', '1', 'Phase-2', 'FOUNDATION', 3, '2018-03-09', '2018-03-24', '0.00', '342168.66', '0.00', '', '0.00', NULL),
(46, 236, 'GF-4', 'Flat', '1', 'Phase-2', 'PLINTH', 4, '2018-03-09', '2018-03-24', '0.00', '342168.66', '0.00', '', '0.00', '969477.87'),
(47, 236, 'GF-4', 'Flat', '1', 'Phase-2', 'FIRST FLOOR SLAB', 5, '2018-03-09', '2018-03-24', '0.00', '228112.44', '0.00', '', '0.00', NULL),
(48, 236, 'GF-4', 'Flat', '1', 'Phase-2', 'SECOND FLOOR SLAB', 6, '2018-03-09', '2018-03-24', '0.00', '142570.28', '0.00', '', '0.00', NULL),
(49, 236, 'GF-4', 'Flat', '1', 'Phase-2', 'THIRD FLOOR SLAB', 7, '2018-03-09', '2018-03-24', '0.00', '142570.28', '0.00', '', '0.00', NULL),
(50, 236, 'GF-4', 'Flat', '1', 'Phase-2', 'FOURTH FLOOR SLAB', 8, '2018-03-09', '2018-03-24', '0.00', '142570.28', '0.00', '', '0.00', NULL),
(51, 236, 'GF-4', 'Flat', '1', 'Phase-2', 'FIFTH FLOOR SLAB', 9, '2018-03-09', '2018-03-24', '0.00', '142570.28', '0.00', '', '0.00', NULL),
(52, 236, 'GF-4', 'Flat', '1', 'Phase-2', 'SIXTH FLOOR SLAB', 10, '2018-03-09', '2018-03-24', '0.00', '142570.28', '0.00', '', '0.00', NULL),
(53, 236, 'GF-4', 'Flat', '1', 'Phase-2', 'SEVENTH FLOOR SLAB', 11, '2018-03-09', '2018-03-24', '0.00', '142570.28', '0.00', '', '0.00', NULL),
(54, 236, 'GF-4', 'Flat', '1', 'Phase-2', 'BRICK WORK', 12, '2018-03-09', '2018-03-24', '0.00', '142570.28', '0.00', '', '0.00', NULL),
(55, 236, 'GF-4', 'Flat', '1', 'Phase-2', 'PLASTER WORK', 13, '2018-03-09', '2018-03-24', '0.00', '142570.28', '0.00', '', '0.00', NULL),
(56, 236, 'GF-4', 'Flat', '1', 'Phase-2', 'FLOORING AND FINISHING', 14, '2018-03-09', '2018-03-24', '0.00', '142570.28', '0.00', '', '0.00', NULL),
(57, 236, 'GF-4', 'Flat', '1', 'Phase-2', 'POSSESSION', 15, '2018-03-09', '2018-03-24', '0.00', '285140.55', '0.00', '', '0.00', '1796385.51'),
(58, 237, 'GF-5', 'Flat', '1', 'Phase-2', 'BOOKING', 1, '2018-03-09', '2018-03-24', '0.00', '170000.00', '0.00', '', '0.00', '170000.00'),
(59, 237, 'GF-5', 'Flat', '1', 'Phase-2', 'EXCAVATION WORK', 2, '2018-03-09', '2018-03-24', '0.00', '170000.00', '0.00', '', '0.00', NULL),
(60, 237, 'GF-5', 'Flat', '1', 'Phase-2', 'FOUNDATION', 3, '2018-03-09', '2018-03-24', '0.00', '204000.00', '0.00', '', '0.00', NULL),
(61, 237, 'GF-5', 'Flat', '1', 'Phase-2', 'PLINTH', 4, '2018-03-09', '2018-03-24', '0.00', '136000.00', '0.00', '', '0.00', NULL),
(62, 237, 'GF-5', 'Flat', '1', 'Phase-2', 'FIRST FLOOR SLAB', 5, '2018-03-09', '2018-03-24', '0.00', '85000.00', '0.00', '', '0.00', NULL),
(63, 237, 'GF-5', 'Flat', '1', 'Phase-2', 'SECOND FLOOR SLAB', 6, '2018-03-09', '2018-03-24', '0.00', '85000.00', '0.00', '', '0.00', NULL),
(64, 237, 'GF-5', 'Flat', '1', 'Phase-2', 'THIRD FLOOR SLAB', 7, '2018-03-09', '2018-03-24', '0.00', '85000.00', '0.00', '', '0.00', NULL),
(65, 237, 'GF-5', 'Flat', '1', 'Phase-2', 'FOURTH FLOOR SLAB', 8, '2018-03-09', '2018-03-24', '0.00', '85000.00', '0.00', '', '0.00', NULL),
(66, 237, 'GF-5', 'Flat', '1', 'Phase-2', 'FIFTH FLOOR SLAB', 9, '2018-03-09', '2018-03-24', '0.00', '85000.00', '0.00', '', '0.00', NULL),
(67, 237, 'GF-5', 'Flat', '1', 'Phase-2', 'SIXTH FLOOR SLAB', 10, '2018-03-09', '2018-03-24', '0.00', '85000.00', '0.00', '', '0.00', NULL),
(68, 237, 'GF-5', 'Flat', '1', 'Phase-2', 'SEVENTH FLOOR SLAB', 11, '2018-03-09', '2018-03-24', '0.00', '85000.00', '0.00', '', '0.00', NULL),
(69, 237, 'GF-5', 'Flat', '1', 'Phase-2', 'BRICK WORK', 12, '2018-03-09', '2018-03-24', '0.00', '85000.00', '0.00', '', '0.00', '1190000.00'),
(70, 237, 'GF-5', 'Flat', '1', 'Phase-2', 'PLASTER WORK', 13, '2018-03-09', '2018-03-24', '0.00', '85000.00', '0.00', '', '0.00', NULL),
(71, 237, 'GF-5', 'Flat', '1', 'Phase-2', 'FLOORING AND FINISHING', 14, '2018-03-09', '2018-03-24', '0.00', '85000.00', '0.00', '', '0.00', NULL),
(72, 237, 'GF-5', 'Flat', '1', 'Phase-2', 'POSSESSION', 15, '2018-03-09', '2018-03-24', '0.00', '170000.00', '0.00', '', '0.00', '240000.00'),
(73, 240, 'GF-3', 'Flat', '1', 'Phase-2', 'BOOKING', 1, '2018-03-09', '2018-03-24', '110306.28', '110306.28', '0.00', '', '0.00', '110306.28'),
(74, 207, 'H-101', 'Duplex', '2', 'Phase-1', 'PLINTH', 3, '2018-03-01', '2018-03-16', '0.00', '522192.23', '0.00', '', '0.00', NULL),
(75, 207, 'H-101', 'Duplex', '2', 'Phase-1', 'GF SLAB', 4, '2018-03-01', '2018-03-16', '0.00', '522192.23', '0.00', '', '0.00', NULL),
(76, 207, 'H-101', 'Duplex', '2', 'Phase-1', 'FF SLAB', 5, '2018-03-01', '2018-03-16', '0.00', '348128.15', '0.00', '', '0.00', NULL),
(77, 207, 'H-101', 'Duplex', '2', 'Phase-1', 'BRICK WORK', 6, '2018-03-01', '2018-03-16', '0.00', '278502.52', '0.00', '', '0.00', NULL),
(78, 207, 'H-101', 'Duplex', '2', 'Phase-1', 'PLASTER WORK', 7, '2018-03-01', '2018-03-16', '0.00', '278502.52', '0.00', '', '0.00', NULL),
(79, 207, 'H-101', 'Duplex', '2', 'Phase-1', 'PAINTING/FINISHING', 8, '2018-03-01', '2018-03-16', '0.00', '313315.34', '0.00', '', '0.00', NULL),
(80, 207, 'H-101', 'Duplex', '2', 'Phase-1', 'POSSESSION', 9, '2018-03-01', '2018-03-16', '6265153.37', '348128.15', '0.00', '', '0.00', '6265153.37'),
(81, 244, 'H-76', 'Plot', '1', 'Phase-2', 'Road Development and Surface  Drain Network', 1, '2018-03-10', '2018-03-25', '111.60', '250111.60', '111.60', '', '0.00', '250111.60'),
(82, 245, 'H-77', 'Plot', '1', 'Phase-2', 'Road Development and Surface  Drain Network', 1, '2018-03-10', '2018-03-25', '250111.60', '250111.60', '0.00', '', '0.00', '250111.60'),
(83, 249, 'H-81', 'Plot', '1', '', 'Road Development and Surface  Drain Network', 1, '2018-03-10', '2018-03-25', '0.00', '250000.00', '0.00', '', '0.00', '250000.00'),
(84, 249, 'H-81', 'Plot', '1', '', 'Electrical Work', 2, '2018-03-10', '2018-03-25', '0.00', '1250000.00', '0.00', '', '0.00', '1250000.00'),
(85, 249, 'H-81', 'Plot', '1', '', 'Sewer Line Network', 3, '2018-03-10', '2018-03-25', '0.00', '750000.00', '0.00', '', '0.00', '750000.00'),
(86, 249, 'H-81', 'Plot', '1', '', 'Water Supply and Garden Network', 4, '2018-03-10', '2018-03-25', '0.00', '250000.00', '0.00', '', '0.00', '300000.00'),
(87, 196, 'H-123', 'Duplex', '2', 'Phase-1', 'POSSESSION', 9, '2018-03-01', '2018-03-16', '1525000.00', '152500.00', '0.00', '', '0.00', '1525000.00'),
(88, 251, 'H-313', 'Duplex', '2', 'Phase-1', 'PLOT REGISTRY', 1, '2018-03-22', '2018-04-06', '0.00', '1199918.00', '0.00', '', '0.00', '1199918.00'),
(89, 251, 'H-313', 'Duplex', '2', 'Phase-1', 'PLOT REGISTRY', 1, '2018-03-24', '2018-04-08', '0.00', '1199918.00', '0.00', '', '0.00', NULL),
(90, 251, 'H-313', 'Duplex', '2', 'Phase-1', 'BOOKING', 2, '2018-03-24', '2018-04-08', '0.00', '109991.80', '0.00', '', '4690090.20', '1309909.80'),
(91, 251, 'H-313', 'Duplex', '2', 'Phase-1', 'BOOKING', 2, '2018-03-24', '2018-04-08', '0.00', '109991.80', '0.00', '', '0.00', NULL),
(92, 251, 'H-313', 'Duplex', '2', 'Phase-1', 'FOUNDATION', 3, '2018-03-24', '2018-04-08', '0.00', '164987.70', '0.00', '', '0.00', NULL),
(93, 251, 'H-313', 'Duplex', '2', 'Phase-1', 'PLINTH', 4, '2018-03-24', '2018-04-08', '0.00', '164987.70', '0.00', '', '0.00', NULL),
(94, 251, 'H-313', 'Duplex', '2', 'Phase-1', 'GF SLAB', 5, '2018-03-24', '2018-04-08', '0.00', '164987.70', '0.00', '', '0.00', NULL),
(95, 251, 'H-313', 'Duplex', '2', 'Phase-1', 'FF SLAB', 6, '2018-03-24', '2018-04-08', '0.00', '164987.70', '0.00', '', '0.00', NULL),
(96, 251, 'H-313', 'Duplex', '2', 'Phase-1', 'BRICK WORK', 7, '2018-03-24', '2018-04-08', '0.00', '109991.80', '0.00', '', '0.00', NULL),
(97, 251, 'H-313', 'Duplex', '2', 'Phase-1', 'PLASTER WORK', 8, '2018-03-24', '2018-04-08', '0.00', '109991.80', '0.00', '', '0.00', NULL),
(98, 251, 'H-313', 'Duplex', '2', 'Phase-1', 'PAINTING/FINISHING', 9, '2018-03-24', '2018-04-08', '0.00', '54995.90', '0.00', '', '0.00', NULL),
(99, 251, 'H-313', 'Duplex', '2', 'Phase-1', 'POSSESSION', 10, '2018-03-24', '2018-04-08', '1099918.00', '54995.90', '0.00', '', '0.00', '1099918.00'),
(100, 252, 'H-85', 'Duplex', '2', 'Phase-1', 'PLOT REGISTRY', 1, '2018-03-01', '2018-03-16', '2.00', '3481372.89', '2.00', '', '0.00', '3481372.89'),
(101, 252, 'H-85', 'Duplex', '2', 'Phase-1', 'PLOT REGISTRY', 1, '2018-03-09', '2018-03-24', '0.00', '3481372.89', '0.00', '', '0.00', NULL),
(102, 252, 'H-85', 'Duplex', '2', 'Phase-1', 'BOOKING', 2, '2018-03-09', '2018-03-24', '3681372.89', '200000.00', '0.00', '', '0.00', '3681372.89'),
(103, 253, 'H-230', 'Duplex', '2', 'Phase-1', 'PLOT REGISTRY', 1, '2018-03-01', '2018-03-16', '0.00', '3481367.22', '0.00', '', '0.00', '3481367.22'),
(104, 254, 'H-234', 'Duplex', '1', 'Phase-2', 'BOOKING', 1, '2018-03-23', '2018-04-07', '11.00', '381522.75', '11.00', '', '0.00', '381522.75'),
(106, 255, 'H-255', 'Duplex', '2', 'Phase-1', 'PLOT REGISTRY', 1, '2018-03-24', '2018-04-08', '481543.06', '3481543.06', '481543.06', '', '0.00', '3481543.06'),
(107, 256, 'H-255', 'Duplex', '2', 'Phase-1', 'PLOT REGISTRY', 1, '2018-03-24', '2018-04-08', '1259228.47', '1740771.53', '1259228.47', '', '0.00', '1740771.53'),
(108, 257, 'H-256', 'Duplex', '2', 'Phase-1', 'PLOT REGISTRY', 1, '2018-03-24', '2018-04-08', '3481543.06', '3481543.06', '0.00', '', '0.00', '3481543.06'),
(109, 258, 'H-256', 'Duplex', '2', 'Phase-1', 'PLOT REGISTRY', 1, '2018-03-24', '2018-04-08', '1700000.00', '1700000.00', '0.00', '', '0.00', '1700000.00'),
(110, 259, 'H-257', 'Duplex', '2', 'Phase-1', 'PLOT REGISTRY', 1, '2018-03-24', '2018-04-08', '0.00', '1500000.00', '0.00', '', '0.00', '1500000.00'),
(111, 259, 'H-257', 'Duplex', '2', 'Phase-1', 'PLOT REGISTRY', 1, '2018-03-24', '2018-04-08', '0.00', '1500000.00', '0.00', '', '0.00', NULL),
(112, 259, 'H-257', 'Duplex', '2', 'Phase-1', 'BOOKING', 2, '2018-03-24', '2018-04-08', '1650000.00', '150000.00', '0.00', '', '0.00', '1650000.00'),
(119, 261, 'H-82', 'Plot', '1', 'Phase-2', 'Road Development and Surface  Drain Network', 1, '2018-03-23', '2018-04-07', '0.00', '250111.60', '0.00', '', '0.00', '250111.60'),
(121, 261, 'H-82', 'Plot', '1', 'Phase-2', 'Electrical Work', 2, '2018-03-24', '2018-04-08', '0.00', '1250558.00', '0.00', '', '0.00', '1250669.60'),
(122, 261, 'H-82', 'Plot', '1', 'Phase-2', 'Sewer Line Network', 3, '2018-03-24', '2018-04-08', '0.00', '750334.80', '0.00', '', '0.00', '750334.80'),
(123, 261, 'H-82', 'Plot', '1', 'Phase-2', 'Water Supply and Garden Network', 4, '2018-03-23', '2018-04-07', '0.00', '250111.60', '0.00', '', '5.00', '300445.60'),
(124, 264, 'H-235', 'Duplex', '1', 'Phase-2', 'BOOKING', 1, '2018-03-27', '2018-04-11', '0.00', '381522.75', '0.00', '', '0.00', '381522.75'),
(125, 264, 'H-235', 'Duplex', '1', 'Phase-2', 'FOUNDATION', 2, '2018-03-27', '2018-04-11', '0.00', '572284.13', '0.00', '', '0.00', '953806.88'),
(126, 267, 'GF-2', 'Flat', '1', 'Phase-2', 'BOOKING', 1, '2018-03-27', '2018-04-11', '287195.44', '176889.16', '0.00', '', '0.00', '287195.44'),
(127, 269, 'FF-103', 'Flat', '1', 'Phase-2', 'BOOKING', 1, '2018-03-27', '2018-04-11', '0.00', '176889.16', '0.00', '', '0.00', '176889.16');

-- --------------------------------------------------------

--
-- Table structure for table `documents_tbl`
--

CREATE TABLE `documents_tbl` (
  `id` int(11) NOT NULL,
  `applicant_id` int(11) DEFAULT NULL,
  `project_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `doc_type` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `path` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_of_document` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `documents_tbl`
--

INSERT INTO `documents_tbl` (`id`, `applicant_id`, `project_name`, `doc_type`, `path`, `date_of_document`) VALUES
(1, 194, 'ESSARJEE SAMPADA', 'Applicant Allotment Letter', './uploads/uploaded_docs/0_194_ESSARJEE SAMPADA_16-10-2013.pdf', '2013-10-16'),
(4, 208, 'ESSARJEE SAMPADA', 'Applicant Agreement', './uploads/uploaded_docs/0_20180305025501_398219_208_ESSARJEE SAMPADA_05-03-2018.pdf', '2018-03-05'),
(10, 235, 'ESSARJEE SAMPADA', 'Applicant Allotment Letter', './uploads/uploaded_docs/0_20180309010333_93252_235_ESSARJEE SAMPADA_01-02-2018.pdf', '2018-02-01'),
(12, 235, 'ESSARJEE SAMPADA', 'Applicant Agreement', './uploads/uploaded_docs/0_20180309045133_467456_235_ESSARJEE SAMPADA_09-03-2018.pdf', '2018-03-09'),
(13, 237, 'ESSARJEE SAMPADA', 'Applicant Agreement', './uploads/uploaded_docs/0_20180309045214_574500_237_ESSARJEE SAMPADA_09-03-2018.pdf', '2018-03-09'),
(14, 239, 'ESSARJEE SAMPADA', 'Applicant Agreement', './uploads/uploaded_docs/0_20180310010106_188373_239_ESSARJEE SAMPADA_10-03-2018.pdf', '2018-03-10'),
(15, 204, 'ESSARJEE SAMPADA', 'Applicant Agreement', './uploads/uploaded_docs/0_20180310010401_232518_204_ESSARJEE SAMPADA_10-03-2018.pdf', '2018-03-10'),
(16, 242, 'ESSARJEE SAMPADA', 'Applicant Agreement', './uploads/uploaded_docs/0_20180310014848_699337_242_ESSARJEE SAMPADA_01-01-2018.pdf', '2018-01-01'),
(17, 207, 'ESSARJEE SAMPADA', 'Applicant Agreement', './uploads/uploaded_docs/0_20180310045454_639462_207_ESSARJEE SAMPADA_10-03-2018.pdf', '2018-03-10'),
(18, 207, 'ESSARJEE SAMPADA', 'Applicant Allotment Letter', './uploads/uploaded_docs/0_20180310045540_118614_207_ESSARJEE SAMPADA_10-03-2018.pdf', '2018-03-10'),
(19, 208, 'ESSARJEE SAMPADA', 'Applicant Agreement', './uploads/uploaded_docs/Adhar_card_20180322072231_102347_208_ESSARJEE SAMPADA_22-03-2018.pdf', '2018-03-22'),
(20, 208, 'ESSARJEE SAMPADA', 'Co-Applicant-1 PAN', './uploads/uploaded_docs/PAN_20180323053820_415112_208_ESSARJEE SAMPADA_23-03-2018.pdf', '2018-03-23'),
(21, 208, 'ESSARJEE SAMPADA', 'Co-Applicant-2 Voter_id', './uploads/uploaded_docs/Voter_id_20180323053832_985517_208_ESSARJEE SAMPADA_23-03-2018.pdf', '2018-03-23');

-- --------------------------------------------------------

--
-- Table structure for table `doc_title_tbl`
--

CREATE TABLE `doc_title_tbl` (
  `id` int(11) NOT NULL,
  `document_title` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doc_title_tbl`
--

INSERT INTO `doc_title_tbl` (`id`, `document_title`) VALUES
(51, 'Aadhar Card'),
(52, 'PAN Card'),
(53, 'Voter Id'),
(54, 'Bank statement last six months'),
(55, 'Tax Returns'),
(56, 'Salary Slip three months'),
(57, 'Form sixteen last two year'),
(58, 'Demand Letter'),
(59, 'Allotment Letter'),
(60, 'Agreement'),
(61, 'Affidavit'),
(62, 'Maintenance Agreement'),
(63, 'Possession Set Office Copy'),
(64, 'Possession Set Customer Copy'),
(65, 'Satisfaction Form'),
(66, 'Stamp Value Purpose Undertaking'),
(67, 'Stamp Value Purpose Maintenance Agreement'),
(68, 'Statement of dues I'),
(69, 'Statement of dues II'),
(70, 'Undertaking Form'),
(71, 'Site Inspection Report I'),
(72, 'Site Inspection Report II'),
(73, 'MPEB Affidavit Sampada'),
(74, 'Society Affidavit A'),
(75, 'Society Affidavit B'),
(76, 'NOC mpeb'),
(77, 'Namantaran'),
(78, 'Society Application Sampada'),
(79, 'Society Application Sampada B'),
(80, 'MPEB2');

-- --------------------------------------------------------

--
-- Table structure for table `duplex_category_tbl`
--

CREATE TABLE `duplex_category_tbl` (
  `id` int(11) NOT NULL,
  `category` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ground_floor_area` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `first_floor_area` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `facing_tbl`
--

CREATE TABLE `facing_tbl` (
  `id` int(11) NOT NULL,
  `facing` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `facing_tbl`
--

INSERT INTO `facing_tbl` (`id`, `facing`) VALUES
(1, 'East'),
(2, 'GardenFacing');

-- --------------------------------------------------------

--
-- Table structure for table `first_applicant_personal_dtl_tbl`
--

CREATE TABLE `first_applicant_personal_dtl_tbl` (
  `id` int(11) NOT NULL,
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
  `intrest_rate` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `first_applicant_personal_dtl_tbl`
--

INSERT INTO `first_applicant_personal_dtl_tbl` (`id`, `project_id`, `mr_mrs`, `name`, `fappl_dob`, `fappl_age`, `son_doughter_wife`, `son_doughter_wife_mr_mrs`, `swd_of`, `present_addr`, `permanent_addr`, `pin_code`, `contact_mobile`, `contact_landline`, `email`, `aadhar_no`, `pan`, `qualification`, `occupation`, `company_name`, `appl_doj`, `appl_desig`, `appl_dept`, `appl_monthly_income`, `fa_empl_addr`, `pin_code_emp`, `earning_members`, `no_of_dependent`, `dependents_details`, `solo_coowner`, `loan_reqs`, `amt_of_loan`, `bank_name`, `acc_no`, `mode_of_payment`, `booking_amt`, `cheque_no`, `cheque_dt`, `img_path`, `date`, `fappl_documents`, `additional_info`, `parking_type`, `pre_salesid`, `login_id`, `is_complete`, `intrest_rate`) VALUES
(192, '1', NULL, NULL, NULL, 0, '', '', '', NULL, NULL, '', NULL, '', 'bn@bn.bn', '', '', '', 'Others', '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', NULL, 0, '', '', NULL, '0000-00-00', '', '', '', 0, '', 0, '0.00'),
(193, '1', NULL, 'Raman', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, '', 1, '', 0, '0.00'),
(194, '2', 'Mr.', 'Rohit Kumar Malviya', '04-05-1985', 32, 'S/o', 'Mr.', 'Ramesh Chandra Malviya', '545/D-3/A-sector/,Piplani, BHEL, Bhopal', '545/D-3/A-sector/,Piplani, BHEL, Bhopal', '', '8959182002', '', 'ashwin.j@ogatechnologies.com', '', '', 'Graduate', 'Service', 'BHEL Bhopal', '04-02-2010', 'Asst. Grade III', 'FHX Maintainance', '', 'BHEL Bhopal', '', '1', 2, 'Smt. Yashoda Malviya(wife),Rudraksh Malviya (son)', 'Sole-Owner', 'Yes', 0, '', '', 'Cheque', 0, '', '', './uploads/applicants_img/', '2018-02-27', 'Adhar_card,', '', '', 3, '336', 1, '0.00'),
(195, '2', 'Mr.', 'Duplex Raja', '12-02-1980', 38, 'S/o', 'Mr.', 'Champak', 'bhopal', 'bhopal', '', '9876543215', '', 'ashwin.j@ogatechnologies.com', '', '', '', 'Service', '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', 'Cheque', 0, '', '', './uploads/applicants_img/', '2018-02-27', '', '', '', 4, '335', 1, '0.00'),
(196, '2', 'Mr.', 'Abhishek Pandey', '03-02-1987', 31, 'S/o.', 'Mr.', 'Anuj Pandey', 'bhopal', 'bhopal', '462008', '9685745634', NULL, 'ashwin.j@ogatechnologies.com', '', '', '', 'Service', '', '', '', '', '0.00', '', '', '', 0, '', '', '', 0, '', '', 'Cheque', 10000, '362541', '27-02-2018', './uploads/applicants_img/Arafat201802270411201519728080ESSARJEE SAMPADA.jpg', '2018-02-27', 'Aadhar Card,', '', '', 5, '335', 1, '0.00'),
(197, '1', 'Mr.', 'Iram Khan', '09-05-1984', 33, 'S/o.', 'Mr.', 'Farhook Khan', 'bhopal', 'bhopal', '365241', '9685743654', NULL, 'ashwin.j@ogatechnologies.com', '231456987414', 'AAAAA1234Q', '', 'Service', '', '', '', '', '0.00', '', '', '', 0, '', '', '', 0, '', '', 'Cheque', 10000, '362514', '27-02-2018', './uploads/applicants_img/Arafat201802270510211519731621ESSARJEE SAMPADA.jpg', '2018-02-27', '', '', '', 6, '335', 1, '0.00'),
(198, '1', 'Mr.', 'Pankaj Kumar Jha ', '08-02-1956', 62, '', '', '', 'jgjg', 'jgjg', '', '9898989898', '', 'nirbhayc4@gmail.com', '', '', '', 'None', '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', 'Cheque', 0, '', '', './uploads/applicants_img/', '2018-02-28', '', '', '', 7, '335', 1, '0.00'),
(199, '1', 'Mrs.', 'Shreedevi', '02-02-1999', 19, '', '', '', 'bpl', 'bpl', '', '8871887109', '', 'nmalviya575@gmail.com', '', '', '', 'Others', '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', 'Cheque', 0, '', '', './uploads/applicants_img/', '2018-02-28', '', '', '', 8, '335', 1, '0.00'),
(200, '1', 'Mr.', 'Ranjan Shah', '03-02-1955', 63, '', '', '', 'gfg', 'gfg', '', '8787878787', '', 'nirbhayc4@gmail.com', '', '', '', 'None', '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', 'Cheque', 0, '', '', './uploads/applicants_img/', '2018-02-28', '', '', '', 9, '335', 1, '0.00'),
(201, '2', 'Mr.', 'Phaseone Duplex', '11-02-1985', 33, '', '', '', 'Gwalior', 'Gwalior', '462043', '9876543215', '', 'ashwin.j@ogatechnologies.com', '', '', '', 'Service', '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', 'Cheque', 0, '', '', './uploads/applicants_img/', '2018-02-28', '', '', '', 10, '335', 1, '0.00'),
(202, '1', 'Mr.', 'Lokesh ', '14-02-1957', 61, 'S/o.', 'Ms.', 'dolat ram', '256/shahpura bhopal', 'gdg', '462030', '8989898989', NULL, 'nirbhayc4@gmail.com', '', '', '', 'None', '', '', '', '', '0.00', '', '', '', 0, '', '', '', 0, '', '', 'Cheque', 51000, '55656', '03-03-2018', './uploads/applicants_img/', '2018-02-28', '', '', '', 13, '335', 1, '0.00'),
(203, '1', 'Mr.', 'Phasetwo Flat', '10-03-1988', 29, 'S/o', 'Mr.', 'Champak', 'Gwalior', 'Gwalior', '', '9865325696', '', 'ashwin.j@ogatechnologies.com', '', '', '', 'Service', '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', 'Cheque', 0, '', '', './uploads/applicants_img/', '2018-03-01', '', '', '', 16, '335', 1, '0.00'),
(204, '1', 'Mr.', 'Usha kumari', '13-03-1958', 59, '', '', '', 'line no 205 ,near railway station road, 80 fit road, naveen nagar bhopal ', 'line no 205 ,near railway station road, 80 fit road, naveen nagar bhopal ', '', '8989898989', NULL, 'nirbhayc4@gmail.com', '', '', '', 'None', '', '', '', '', '0.00', '', '', '', 0, '', '', '', 0, '', '', 'Cheque', 0, '', '', './uploads/applicants_img/1446288359201803230121281521791488ESSARJEE SAMPADA.jpg', '2018-03-03', '', '', '', 18, '335', 1, '0.00'),
(205, '2', 'Mr.', 'Vinay Kumar', '13-03-1958', 59, '', '', '', 'bgdb', 'bgdb', '', '8977979779', '', 'nirbhayc4@gmail.com', '', '', '', 'None', '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', 'Cheque', 0, '', '', './uploads/applicants_img/', '2018-03-03', '', '', '', 19, '335', 1, '0.00'),
(207, '2', 'Mr.', 'Phaseone Duplex', '18-03-1982', 35, 'S/o.', 'Mr.', 'Nandu Bhaiya', 'Bhopal', 'Bhopal', '', '9845965874', NULL, 'ashwin.j@ogatechnologies.com', '', '', '', 'Service', '', '', '', '', '0.00', '', '', '', 0, '', '', '', 0, '', '', 'Cheque', 0, '', '', './uploads/applicants_img/abc201803051144491520230489ESSARJEE SAMPADA.jpeg', '2018-03-05', 'PAN Card,', '', '', 23, '335', 1, '0.00'),
(208, '2', 'Mr.', 'Phaseone Duplex Two', '11-03-1982', 35, 'S/o.', 'Mr.', 'Champak Bhaiya', 'Gwalior', 'Gwalior', '', '9425790662', NULL, 'ashwin.j@ogatechnologies.com', '', '', '', 'Business', '', '', '', '', '0.00', '', '', '', 0, '', '', '', 0, '', '', 'Cheque', 0, '', '', './uploads/applicants_img/Blue_backgrounda201803230440201521803420ESSARJEE SAMPADA.307194417_std', '2018-03-05', '', '', '', 25, '335', 1, '0.00'),
(209, '2', NULL, 'Dolly Patel', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, '', 28, '', 0, '0.00'),
(210, '1', NULL, 'Aditi Patel', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, '', 24, '', 0, '0.00'),
(211, '2', NULL, 'Ayushi Bhadoriya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, '', 27, '', 0, '0.00'),
(212, '2', NULL, 'Ayushi Bhadoriya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, '', 27, '', 0, '0.00'),
(213, '2', NULL, 'Krishna Malviya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, '', 29, '', 0, '0.00'),
(214, '2', NULL, 'Preeti', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, '', 31, '', 0, '0.00'),
(215, '2', NULL, 'Shikha Singh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, '', 33, '', 0, '0.00'),
(216, '2', NULL, 'Shikha Singh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, '', 33, '', 0, '0.00'),
(217, '2', 'Mr.', 'Rohan', '08-03-1978', 39, 'S/o.', 'Mr.', 'Ankur', 'bhopal', 'bhopal', '362514', '7878787878', NULL, 'stanu765@gmail.com', '968574142536', 'AWERD1234Q', 'mba', 'Service', 'bhel', '', 'officer', 'IT', '0.00', 'govindpura,bhopal', '123654', '', 0, '', '', '', 0, 'SBI', '', 'Cheque', 10000, '362514', '07-03-2018', './uploads/applicants_img/male_img201803070647291520405249ESSARJEE SAMPADA.jpg', '2018-03-07', '', '', '', 34, '335', 1, '0.00'),
(218, '2', NULL, 'Priyanka Rajput', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, '', 35, '', 0, '0.00'),
(219, '2', 'Mr.', 'Abrahim', '05-03-1990', 28, 'S/o.', 'Mr.', 'Abdul Zaffar', 'bhopal', 'bhopal', '456123', '9685741236', NULL, 'stanu765@gmail.com', '362514789456', 'ASWER3456k', 'MCA', 'Others', 'HCL', '', 'IT Head', 'IT', '0.00', 'thane, mumbai', '968574', '', 0, '', '', '', 0, 'SBI', '', 'Cheque', 10000, '321456', '06-03-2018', './uploads/applicants_img/pan_card_female_img201803070608061520402886ESSARJEE SAMPADA.jpg', '2018-03-07', '', '', '', 36, '335', 1, '0.00'),
(220, '1', 'Mr.', 'Raaj Sahu', '06-03-1979', 39, 'S/o.', 'Mr.', 'Anmol', 'bhopal', 'bhopal', '451263', '9874561235', NULL, 'stanu765@gmail.com', '968574123654', 'AQWSE1234W', 'bba', 'Service', 'techsoft', '', 'sm', 'sales', '0.00', 'mpnagar bhopal', '897456', '', 0, '', '', '', 0, 'SBI', '', 'Cheque', 10000, '362514', '07-03-2018', './uploads/applicants_img/ramu7201803071249511520407191ESSARJEE SAMPADA.jpg', '2018-03-07', '', '', '', 37, '335', 1, '0.00'),
(221, '1', NULL, 'Ankul', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, '', 38, '', 0, '0.00'),
(222, '1', 'Mr.', 'Waseem', '07-03-1972', 45, 'S/o', 'Mr.', 'Khaalid', 'bhopal', 'bhopal', '362514', '9856231475', '', 'stanu765@gmail.com', '369258741753', 'FGHDS1234W', 'mba', 'Service', 'isonic', '', 'office assistant', 'Back office', '', 'DLF sez unit , thane mumbai', '365241', '', 0, '', '', '', 0, 'ICICI', '', 'Cheque', 10000, '002136', '07-03-2018', './uploads/applicants_img/ramu7201803070245331520414133ESSARJEE SAMPADA.jpg', '2018-03-07', 'PAN,Adhar_card,', '', '', 41, '335', 1, '0.00'),
(223, '2', NULL, 'Rohan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, '', 34, '', 0, '0.00'),
(224, '1', NULL, 'Gunjan Kumar ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, '', 42, '', 0, '0.00'),
(226, '1', 'Mr.', 'Yash Kumar', '09-03-1978', 39, 'S/o', 'Mr.', 'Ashok ', 'bhopal', 'bhopal', '', '8978787878', '', 'nirbhayc4@gmail.com', '', '', '', 'None', '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', 'Cheque', 0, '', '', './uploads/applicants_img/', '2018-03-07', '', '', '', 44, '335', 1, '0.00'),
(227, '1', 'Mr.', 'THULLU RAM', '07-03-1984', 33, 'S/o', 'Mr.', 'Jai Kumar', 'Bhopal', 'Bhopal', '', '9638521478', '', 'ashwin.j@ogatechnologies.com', '', '', '', 'Service', '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', 'Cheque', 0, '', '', './uploads/applicants_img/', '2018-03-07', '', '', '', 45, '335', 1, '0.00'),
(228, '1', NULL, 'Rahul Mahajan ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, '', 46, '', 0, '0.00'),
(229, '1', 'Mr.', 'Rakesh Sharma Rahul Raj ', '12-03-1993', 24, 'S/o', 'Mr.', 'Moolchand Sharma', '18  A Sainik colony', '18  A Sainik colony', '462030', '8817448282', '', 'ritesh.ramchandani3@gmail.com', '787971173023', 'ADRFG4569V', 'MCA', 'Business', '', '', '', '', '100000', '', '', '4', 1, 'Rohan', 'Sole-Owner', 'No', 0, 'SBI', '15002036987', 'Cash', 20000, '', '08-03-2018', './uploads/applicants_img/', '2018-03-08', 'PAN,Adhar_card,Voter_id,Bank_statement,', '', '', 47, '335', 1, '0.00'),
(230, '1', NULL, 'Aarti', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, '', 48, '', 0, '0.00'),
(231, '1', 'Ms.', 'Farha', '12-03-1968', 49, 'D/o', 'Mr.', 'Farhan', 'bhopal', 'bhopal', '123654', '9876543251', '', 'stanu765@gmail.com', '', '', '', 'Service', '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', 'Cheque', 0, '', '', './uploads/applicants_img/', '2018-03-08', '', '', '', 49, '335', 1, '0.00'),
(232, '2', 'Mr.', 'Ram', '09-03-1965', 52, 'S/o', 'Mr.', 'Sitaram', 'bhopal', 'bhopal', '', '9856471236', '', 'stanu765@gmail.com', '', '', '', 'Others', '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', 'Cheque', 0, '', '', './uploads/applicants_img/', '2018-03-08', '', '', '', 50, '335', 1, '0.00'),
(234, '1', 'Mr.', 'Lenovo', '04-03-1993', 25, 'S/o', 'Mr.', 'Dell', 'Delhi', 'Delhi', '', '8878779898', '', 'ritesh.ramchandani3@gmail.com', '', '', '', 'Service', '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', 'Cheque', 0, '', '', './uploads/applicants_img/', '2018-03-08', '', '', '', 52, '335', 1, '0.00'),
(235, '1', 'Mr.', 'Mohit Advani Duplex', '12-03-1993', 24, 'S/o.', 'Mr.', 'Moolchand', 'Zone 1 mp nagar Bhopal', 'Zone 1 mp nagar Bhopal', '462030', '8871887109', NULL, 'ritesh.ramchandani3@gmail.com', '787971173023', 'AERGH5656F', 'MCA', 'Service', 'TCS', '09-03-2018', 'Developer', 'Information Technology', '50000.00', 'Zone 1 Mpnagar', '462011', '4', 0, '', 'Sole-Owner', 'Yes', 1000000, 'SBi', '35522196738', 'Cash', 20000, '', '09-03-2018', './uploads/applicants_img/', '2018-03-09', '', '', '', 53, '335', 1, '0.00'),
(236, '1', 'Mr.', 'Vicky Ramchandani Flat ', '10-03-1988', 29, 'S/o', '', 'Govind Ramchandani', 'Lakshman nagar bairagarh', 'Lakshman nagar bairagarh', '462030', '8871887109', '', 'vickey.ramchandani3@gmail.com', '454789635236', 'AWERF4569D', 'MCA', 'Service', 'Globas Pvt limited', '09-03-2018', 'Marketing Head ', 'Sales', '50000', 'Zone 1 Mp nagar', '462030', '4', 3, 'Ritesh , nitesh', 'Sole-Owner', 'Yes', 200000, 'SBI', '365522196738', 'Cash', 20000, '', '09-03-2018', './uploads/applicants_img/', '2018-03-09', 'PAN,Adhar_card,Voter_id,Bank_statement,Income Tax return last 3 year,Salary_slip,photo,form,', 'all documents submited ', '', 54, '335', 1, '0.00'),
(237, '1', 'Mr.', 'Sumit ', '03-03-1988', 30, 'S/o', 'Mr.', 'Seenu ', 'Bhopal', 'Bhopal', '462030', '8871887109', '', 'nmalviya575@gmail.com', '787971173012', 'awedr5645f', 'mca', 'Service', 'OGA', '09-03-2018', 'DEVELOPER', 'development', '20000', 'Bhopal', '462030', '4', 2, 'ritesh, nitesh', 'Sole-Owner', 'No', 0, 'SBI', '35522196735', 'Cash', 20000, '', '09-03-2018', './uploads/applicants_img/', '2018-03-09', 'PAN,Adhar_card,Voter_id,Bank_statement,Income Tax return last 3 year,Salary_slip,', 'all checked ', '', 55, '335', 1, '0.00'),
(238, '1', NULL, 'Phasetwo Flat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, '', 56, '', 0, '0.00'),
(239, '1', 'Mr.', 'Rohit Malviya', '08-03-1996', 22, 'S/o', 'Mr.', 'M Malviya', 'bhopal', 'bhopal', '462030', '8871887109', '', 'nmalviya575@gmail.com', '', '', '', 'Service', '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', 'Cash', 12000, '', '', './uploads/applicants_img/', '2018-03-09', '', '', '', 57, '335', 1, '0.00'),
(240, '1', 'Mr.', 'Veerendra Chouhan ', '19-02-1993', 25, '', '', '', 'BHOPAL', 'BHOPAL', '462030', '8871887109', '', 'nmalviya575@gmail.com', '', '', '', 'Service', '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', 'Cheque', 0, '', '', './uploads/applicants_img/', '2018-03-09', '', '', '', 58, '335', 1, '0.00'),
(241, '2', NULL, 'Nikita Chimlani', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, '', 60, '', 0, '0.00'),
(242, '1', 'Mr.', 'Ews Phasetwo Flat', '05-03-1985', 33, '', '', '', 'Bhopal', 'Bhopal', '', '9865326985', '', 'ajjuwekar@gmail.com', '', '', '', 'Service', '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', 'Cheque', 0, '', '', './uploads/applicants_img/', '2018-03-10', '', '', '', 61, '335', 1, '0.00'),
(243, '1', 'Mr.', 'LIG Phasetwo Flat', '16-03-1978', 39, '', '', '', 'Bhopal', 'Bhopal', '', '9875652586', '', 'ajjuwekar@gmail.com', '', '', '', 'Service', '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', 'Cheque', 0, '', '', './uploads/applicants_img/', '2018-03-10', '', '', '', 62, '335', 1, '0.00'),
(244, '1', 'Mr.', 'Phase Two Shop', '12-03-1950', 67, 'S/o', 'Mr.', 'Phase One ', 'Bhopal', 'Bhopal', '', '8871887109', '', 'nmalviya575@gmail.com', '787971173012', 'BBBBT4563F', '', 'Service', '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', 'Cheque', 0, '', '', './uploads/applicants_img/', '2018-03-10', '', '', '', 64, '335', 1, '0.00'),
(245, '1', 'Mr.', 'Phase Two Plot', '21-03-1997', 20, '', '', '', 'Bhopal', 'Bhopal', '462030', '8817448282', '', 'nmalviya575@gmail.com', '', '', '', 'Service', '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', 'Cheque', 0, '', '', './uploads/applicants_img/', '2018-03-10', '', '', '', 65, '335', 1, '0.00'),
(246, '1', NULL, 'Phase Two Plot', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, '', 66, '', 0, '0.00'),
(247, '1', 'Mr.', 'Yati', '21-03-1963', 54, '', '', '', 'ssdfs', 'klhjkl', '', '7787878787', '', 'nirbhayc4@gmail.com', '', '', '', 'None', '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', 'Cheque', 0, '', '', './uploads/applicants_img/', '2018-03-10', '', '', '', 67, '335', 1, '0.00'),
(248, '1', NULL, 'Avni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, '', 68, '', 0, '0.00'),
(249, '1', 'Mr.', 'Veena Gyanchandani', '14-03-1991', 26, 'S/o', 'Mr.', 'Moolchand', 'bhopal', 'bhopal', '462030', '8878778989', '', 'nmalviy@gmail.com', '', '', '', 'Business', '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', 'Cheque', 0, '', '', './uploads/applicants_img/', '2018-03-10', '', '', '', 69, '335', 1, '0.00'),
(250, '2', 'Ms.', 'Manisha Rajput', '02-03-1999', 19, 'D/o', 'Mr.', 'Nitin Rajput', 'Bhopal', 'Bhopal', '', '8871887109', '', 'nmalviya575@gmail.com', '', '', '', 'Others', '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', 'Cheque', 0, '', '', './uploads/applicants_img/NAFISA1201803211032241521624744ESSARJEE SAMPADA.jpg', '2018-03-21', '', '', '', 78, '335', 1, '0.00'),
(251, '2', '', 'Ashwin Sir', '08-03-1990', 28, '', '', '', 'hh', 'hh', '', '8871887109', '', 'nirbhayc4@gmail.com', '', '', '', 'Service', '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', 'Cheque', 0, '', '', './uploads/applicants_img/', '2018-03-22', '', '', '', 81, '335', 1, '0.00'),
(252, '2', 'Mr.', 'Phase One Duplex Updated', '04-03-1987', 31, 'S/o', 'Mr.', 'Champak', 'Bhopal', 'Bhopal', '', '9856989689', '', 'ajjuwekar@gmail.com', '', '', '', 'Service', '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', 'Cheque', 0, '', '', './uploads/applicants_img/', '2018-03-22', '', '', '', 84, '335', 1, '0.00'),
(253, '2', 'Mr.', 'Phase One Duplex Two', '05-03-1970', 48, 'S/o.', 'Mr.', 'Jolly', 'Bhopal', 'Bhopal', '985696', '9865985696', NULL, 'ajjuwekar@gmail.com', '458796377373', '', '', 'Service', '', '', '', '', '0.00', '', '', '', 0, '', '', '', 0, '', '', 'Cheque', 0, '', '', './uploads/applicants_img/', '2018-03-22', '', '', '', 85, '335', 1, '0.00'),
(254, '1', 'Mr.', 'Nirbhay Singh Chouhan', '18-03-1993', 25, 'S/o', 'Mr.', 'Ashok Chouhan', '18 A sainik colony Tward Bairagarh ', '18 A sainik colony Tward Bairagarh ', '462030', '8817448282', '', 'ritesh.ramchandani3@gmail.com', '787971173012', 'BBBBD4562D', 'MCA', 'Service', 'Oga Technologies.com', '23-03-2018', 'sales', 'sales', '50000', 'Zone2', '462030', '4', 2, 'Rohit, Ramchandani', 'Sole-Owner', 'Yes', 50000, 'SBI', '7879711023', 'Cash', 2000, '', '23-03-2018', './uploads/applicants_img/Rahul201803230722471521813167ESSARJEE SAMPADA.jpg', '2018-03-23', 'Adhar_card,Voter_id,Bank_statement,Income Tax return last 3 year,Salary_slip,photo,', '', '', 87, '335', 1, '0.00'),
(255, '2', 'Mr.', 'NULL', '12-03-1994', 24, 'S/o.', 'Mr.', 'Vineet Sharma', 'Mp nagar Zone-1 Bhopal Near ICICI Bank', 'Mp nagar Zone-1 Bhopal Near ICICI Bank', '462030', '8817448282', NULL, 'sharma.shrinkhla@gmail.com', '355221963523', 'BIHET4589B', 'MCA', 'Service', 'IBM', '12-03-1993', 'Software Developer', 'Information Technology ', '30000.00', 'Manyata Bangalore', '462030', '4', 0, '', 'Sole-Owner', 'Yes', 100000, 'SBI', '35522196738', 'Cash', 20000, '', '24-03-2018', './uploads/applicants_img/Paayal201803240103121521876792ESSARJEE SAMPADA.jpg', '2018-03-24', '', 'All Information is given properly', '', 0, '335', 1, '0.00'),
(256, '2', 'Mr.', 'Shrinkhla Sharma', '12-03-1993', 25, 'S/o', 'Mr.', 'Vinay Sharma', 'Zone 1 lower groundfloor Manyata Bangalore', 'Zone 1 lower groundfloor Manyata Bangalore', '462030', '8817448282', '', 'nmalviya575@gmail.com', '787896656989', 'BTYHU4565B', 'MCA', 'Service', 'IBM', '22-03-2018', 'Developer', 'Information Technology', '50000', 'zone 1 MP nagar', '462030', '4', 0, '', 'Sole-Owner', 'Yes', 100000, 'SBI', '35522196738', 'Cheque', 20000, '4586', '24-03-2018', './uploads/applicants_img/Paayal201803240407261521887846ESSARJEE SAMPADA.jpg', '2018-03-24', 'PAN,Adhar_card,Voter_id,Bank_statement,Income Tax return last 3 year,Salary_slip,photo,form,', '', '', 88, '335', 1, '0.00'),
(257, '2', 'Mr.', 'NULL', '18-03-1993', 25, 'S/o', 'Mr.', 'Alok Upadhyay ', 'Bhopal', 'Bhopal', '462030', '8874885858', '', 'nmalviya575@gmail.com', '', '', '', 'Service', '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', 'Cheque', 0, '', '', './uploads/applicants_img/', '2018-03-24', '', '', '', 0, '335', 1, '0.00'),
(258, '2', 'Mr.', 'Anjali Upadyaya', '14-03-1996', 22, '', '', '', 'Bhopal', '', '', '8874885858', '', 'nmalviya575@gmail.com', '', '', '', 'Others', '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', 'Cheque', 0, '', '', './uploads/applicants_img/', '2018-03-24', '', '', '', 93, '335', 1, '0.00'),
(259, '2', 'Mr.', 'Pooja Gaur', '18-03-1992', 26, 'S/o', 'Mr.', 'Moolchand', '18 Asainik colony T Ward', '18 Asainik colony T Ward', '462030', '8817448282', '', 'nmalviya575@gmail.com', '', '', '', 'Service', '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', 'Cheque', 0, '', '', './uploads/applicants_img/', '2018-03-24', '', '', '', 94, '335', 1, '0.00'),
(260, '2', 'Mr.', 'Avinash Verma', '15-03-1991', 27, '', '', '', 'BHopal', 'BHopal', '', '8817448282', '', 'nmalviya575@gmail.com', '', '', '', 'Service', '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', 'Cheque', 0, '', '', './uploads/applicants_img/', '2018-03-24', '', '', '', 96, '335', 1, '0.00'),
(261, '1', 'Mr.', 'Roshni Kulhare', '07-03-1990', 28, '', '', 'Vinay Kumar', 'Bhopal', 'Bhopal', '', '8878778745', '', 'nmalviya575@gmail.com', '', '', '', 'Service', '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', 'Cheque', 0, '', '', './uploads/applicants_img/', '2018-03-24', '', '', '', 97, '335', 1, '0.00'),
(262, '1', NULL, 'Updated Phase Two Plot', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, '', 95, '', 0, '0.00'),
(263, '1', 'Mr.', 'Gunjan', '02-03-1989', 29, '', '', '', 'cc', 'cc', '', '8787878787', '', 'nirbhayc4@gmail.com', '', '', '', 'None', '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', 'Cheque', 0, '', '', './uploads/applicants_img/', '2018-03-24', '', '', '', 100, '335', 1, '0.00'),
(264, '1', 'Mr.', 'NItin Motwani', '12-03-1993', 25, '', '', '', 'Bhopal', 'Bhopal', '', '8878778963', '', 'nmalviya575@gmail.com', '', '', '', 'Service', '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', 'Cheque', 0, '', '', './uploads/applicants_img/', '2018-03-25', '', '', '', 102, '335', 1, '0.00'),
(267, '1', 'Mr.', 'Dinesh Doultani', '17-03-1995', 23, '', '', '', 'Bhopal', 'Bhopal', '', '8878779898', '', 'nmalviya575@gmail.com', '', '', '', 'Service', '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', 'Cheque', 0, '', '', './uploads/applicants_img/', '2018-03-27', '', '', '', 106, '335', 1, '0.00'),
(268, '1', 'Mr.', 'Vandana Sharma ', '12-03-1990', 28, '', '', '', 'Bhopal', 'Bhopal', '', '8878779696', '', 'nmalviya575@gmail.com', '', 'AWERF6969F', '', 'Service', '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', 'Cheque', 0, '', '', './uploads/applicants_img/', '2018-03-27', '', '', '', 107, '335', 1, '0.00'),
(269, '1', 'Mr.', 'Raj Kumar Sharma ', '10-03-1993', 25, '', '', '', 'Bhopal', 'Bhopal', '', '8874885858', '', 'nmalviya575@gmail.com', '', '', '', 'Service', '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', 'Cheque', 0, '', '', './uploads/applicants_img/', '2018-03-27', '', '', '', 108, '335', 1, '0.00'),
(270, '1', 'Ms.', 'Meenu Gupta', '12-03-1993', 25, '', '', '', 'Bhopal', 'Bhopal', '', '8878774545', '', 'gupta.meenu@gmail.com', '', '', '', 'Service', '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', 'Cheque', 0, '', '', './uploads/applicants_img/', '2018-03-28', '', '', '', 112, '335', 1, '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `interest_tbl`
--

CREATE TABLE `interest_tbl` (
  `id` int(11) NOT NULL,
  `appl_id` int(11) DEFAULT NULL,
  `stage` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stage_amount` decimal(10,2) DEFAULT NULL,
  `paid_amount` decimal(10,2) DEFAULT NULL,
  `due_amount` decimal(10,2) DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `interest_factor` decimal(10,3) DEFAULT NULL,
  `interest_till_date` decimal(10,2) DEFAULT NULL,
  `delay_days` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `interest_tbl`
--

INSERT INTO `interest_tbl` (`id`, `appl_id`, `stage`, `stage_amount`, `paid_amount`, `due_amount`, `due_date`, `interest_factor`, `interest_till_date`, `delay_days`) VALUES
(2, 83, 'PLINTH', NULL, NULL, '1048799.00', NULL, NULL, NULL, 356);

-- --------------------------------------------------------

--
-- Table structure for table `int_tbl`
--

CREATE TABLE `int_tbl` (
  `id` int(11) NOT NULL,
  `unit_no` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `stage` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `appl_id` int(11) NOT NULL,
  `due_dt` date NOT NULL,
  `chq_dt` date NOT NULL,
  `due_amt` decimal(10,2) NOT NULL,
  `paid` decimal(10,2) NOT NULL,
  `actual_amt` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `int_tbl`
--

INSERT INTO `int_tbl` (`id`, `unit_no`, `stage`, `appl_id`, `due_dt`, `chq_dt`, `due_amt`, `paid`, `actual_amt`) VALUES
(8, 'GF-1', 'BOOKING', 206, '2018-02-20', '0000-00-00', '176800.00', '0.00', '176800.00'),
(13, 'H-74', 'Road Development and Surface  Drain Network', 222, '2018-02-23', '2018-03-06', '200000.00', '0.00', '250000.00'),
(74, 'GF-5', 'BOOKING', 237, '2018-03-24', '2018-03-09', '0.00', '0.00', '170000.00'),
(75, 'GF-5', 'EXCAVATION WORK', 237, '2018-03-24', '0000-00-00', '0.00', '0.00', '0.00'),
(76, 'GF-5', 'FOUNDATION', 237, '2018-03-24', '0000-00-00', '0.00', '0.00', '0.00'),
(77, 'GF-5', 'PLINTH', 237, '2018-03-24', '0000-00-00', '0.00', '0.00', '0.00'),
(78, 'GF-5', 'FIRST FLOOR SLAB', 237, '2018-03-24', '0000-00-00', '0.00', '0.00', '0.00'),
(79, 'GF-5', 'SECOND FLOOR SLAB', 237, '2018-03-24', '0000-00-00', '0.00', '0.00', '0.00'),
(80, 'GF-5', 'THIRD FLOOR SLAB', 237, '2018-03-24', '0000-00-00', '0.00', '0.00', '0.00'),
(81, 'GF-5', 'FOURTH FLOOR SLAB', 237, '2018-03-24', '0000-00-00', '0.00', '0.00', '0.00'),
(82, 'GF-5', 'FIFTH FLOOR SLAB', 237, '2018-03-24', '0000-00-00', '0.00', '0.00', '0.00'),
(83, 'GF-5', 'SIXTH FLOOR SLAB', 237, '2018-03-24', '0000-00-00', '0.00', '0.00', '0.00'),
(84, 'GF-5', 'SEVENTH FLOOR SLAB', 237, '2018-03-24', '0000-00-00', '0.00', '0.00', '0.00'),
(85, 'GF-5', 'BRICK WORK', 237, '2018-03-24', '2018-03-09', '0.00', '0.00', '1190000.00'),
(86, 'GF-5', 'PLASTER WORK', 237, '2018-03-24', '0000-00-00', '0.00', '0.00', '0.00'),
(87, 'GF-5', 'FLOORING AND FINISHING', 237, '2018-03-24', '0000-00-00', '0.00', '0.00', '0.00'),
(88, 'GF-5', 'POSSESSION', 237, '2018-03-24', '2018-03-09', '0.00', '0.00', '240000.00'),
(89, 'H-233', 'BOOKING', 235, '2018-03-24', '2018-03-09', '100000.00', '0.00', '600000.00'),
(90, 'H-233', 'FOUNDATION', 235, '2018-03-24', '0000-00-00', '0.00', '0.00', '0.00'),
(91, 'H-233', 'PLINTH', 235, '2018-03-24', '0000-00-00', '0.00', '0.00', '0.00'),
(92, 'H-233', 'GF SLAB', 235, '2018-03-24', '0000-00-00', '0.00', '0.00', '0.00'),
(93, 'H-233', 'FF SLAB', 235, '2018-03-24', '0000-00-00', '0.00', '0.00', '0.00'),
(94, 'H-233', 'BRICK WORK', 235, '2018-03-24', '0000-00-00', '0.00', '0.00', '0.00'),
(95, 'H-233', 'PLASTER WORK', 235, '2018-03-24', '0000-00-00', '0.00', '0.00', '0.00'),
(96, 'H-233', 'PAINTING/FINISHING', 235, '2018-03-24', '2018-03-09', '0.00', '0.00', '4900000.00'),
(97, 'H-233', 'POSSESSION', 235, '2018-03-24', '2018-03-09', '0.00', '0.00', '500000.00'),
(114, 'H-77', 'Road Development and Surface  Drain Network', 245, '2018-03-25', '0000-00-00', '250111.60', '0.00', '250111.60'),
(115, 'H-101', 'BOOKING', 207, '2018-03-16', '2018-03-02', '0.00', '0.00', '696128.15'),
(116, 'H-101', 'FOUNDATION', 207, '2018-03-23', '0000-00-00', '0.00', '0.00', '1044192.23'),
(117, 'H-101', 'PLINTH', 207, '2018-03-16', '0000-00-00', '0.00', '0.00', '0.00'),
(118, 'H-101', 'GF SLAB', 207, '2018-03-16', '0000-00-00', '0.00', '0.00', '0.00'),
(119, 'H-101', 'FF SLAB', 207, '2018-03-16', '0000-00-00', '0.00', '0.00', '0.00'),
(120, 'H-101', 'BRICK WORK', 207, '2018-03-16', '0000-00-00', '0.00', '0.00', '0.00'),
(121, 'H-101', 'PLASTER WORK', 207, '2018-03-16', '0000-00-00', '0.00', '0.00', '0.00'),
(122, 'H-101', 'PAINTING/FINISHING', 207, '2018-03-16', '0000-00-00', '0.00', '0.00', '0.00'),
(123, 'H-101', 'POSSESSION', 207, '2018-03-16', '0000-00-00', '6265153.37', '0.00', '6265153.37'),
(131, 'H-123', 'POSSESSION', 196, '2018-03-16', '0000-00-00', '1525000.00', '0.00', '1525000.00'),
(132, 'H-230', 'PLOT REGISTRY', 253, '2018-03-16', '0000-00-00', '3481367.22', '0.00', '3481367.22'),
(142, 'H-57', 'BOOKING', 220, '2018-02-22', '2018-03-05', '301500.00', '0.00', '381500.00'),
(143, 'H-57', 'FOUNDATION', 220, '2018-03-08', '0000-00-00', '0.00', '0.00', '0.00'),
(144, 'H-57', 'PLINTH', 220, '2018-03-08', '2018-03-07', '0.00', '0.00', '1446000.00'),
(145, 'H-59', 'BOOKING', 229, '2018-03-24', '2018-03-08', '260310.75', '0.00', '381522.75'),
(155, 'H-234', 'BOOKING', 254, '2018-04-07', '2018-03-23', '11.00', '0.00', '381522.75'),
(168, 'H-253', 'BOOKING', 205, '2018-03-30', '0000-00-00', '0.00', '0.00', '0.00'),
(169, 'H-253', 'FOUNDATION', 205, '2018-03-30', '2013-07-05', '770385.77', '0.00', '870385.77'),
(171, 'H-255', 'PLOT REGISTRY', 256, '2018-04-08', '2018-03-24', '0.00', '0.00', '1740771.53'),
(186, 'H-82', 'Road Development and Surface  Drain Network', 261, '2018-04-07', '2018-03-24', '111.60', '0.00', '250111.60'),
(187, 'H-82', 'Electrical Work', 261, '2018-04-08', '2018-03-23', '0.00', '0.00', '1250669.60'),
(188, 'H-82', 'Sewer Line Network', 261, '2018-04-08', '2018-03-24', '50334.00', '0.00', '750334.80'),
(189, 'H-82', 'Water Supply and Garden Network', 261, '2018-04-07', '2018-03-23', '0.00', '0.00', '300445.60'),
(231, 'H-235', 'BOOKING', 264, '2018-04-11', '2018-03-27', '81522.75', '0.00', '381522.75'),
(232, 'H-235', 'FOUNDATION', 264, '2018-04-11', '2018-03-27', '0.00', '0.00', '953806.88');

-- --------------------------------------------------------

--
-- Table structure for table `inventory_tbl`
--

CREATE TABLE `inventory_tbl` (
  `id` int(11) NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  `unit_no` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `block` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `category` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `facing` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `garden_facing_charges` decimal(10,2) DEFAULT NULL,
  `corner_charges` decimal(10,2) DEFAULT NULL,
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
  `flat_type` varchar(45) CHARACTER SET ascii DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inventory_tbl`
--

INSERT INTO `inventory_tbl` (`id`, `project_id`, `unit_no`, `block`, `type`, `category`, `location`, `facing`, `garden_facing_charges`, `corner_charges`, `carpet_area_price`, `gf_carpet_area_price`, `ff_carpet_area_price`, `gallery_area_price`, `wash_area_price`, `balcony_area_price`, `common_area_price`, `customer_id`, `unit_cost_as_per_carpet_area`, `discount`, `gst`, `price_ca_ref_rate`, `price_balcony_ref_rate`, `price_washarea_ref_rate`, `discount_carpet_area`, `discount_balcony_ref_rate`, `discount_washarea_ref_rate`, `cost_payable_to_company`, `total_cost`, `cost_calculation`, `status`, `terrace_front_price`, `terrace_back_price`, `preferred_location_price`, `plot_size_mtr`, `plot_size_ft`, `east_by`, `west_by`, `north_by`, `south_by`, `prospect_id`, `status_date`, `floor`, `plot_area`, `flat_carpet_area_sqmt`, `flat_carpet_area_sqft`, `shop_area_sqmt`, `shop_area_sqft`, `flat_type`) VALUES
(1, 1, 'H-6', 'Phase-2', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '18949.09', '254715.97', NULL, NULL, NULL, NULL, NULL, NULL, '2518949.09', '2500000.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X12.20', '22.96X40.016', '464', '464', '4646', '4646', '106', '05-02-2018', NULL, '0.00', NULL, NULL, NULL, NULL, NULL),
(2, 1, 'H-7', 'Phase-2', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '23925.94', '362392.06', NULL, NULL, NULL, NULL, NULL, NULL, '3523925.94', '3500000.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X12.20', '22.96X40.016', 'H-6', 'H-8', 'Road', 'Parking', '112', '08-02-2018', NULL, '0.00', NULL, NULL, NULL, NULL, NULL),
(3, 1, 'H-8', 'Phase-2', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '0.00', '385930.65', NULL, NULL, NULL, NULL, NULL, NULL, '3743619.33', '3743619.33', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X12.20', '22.96X40.016', '', '', '', '', '114', '08-02-2018', NULL, '0.00', NULL, NULL, NULL, NULL, NULL),
(4, 1, 'H-9', 'Phase-2', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '23925.94', '362392.06', NULL, NULL, NULL, NULL, NULL, NULL, '3523925.94', '3500000.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X12.20', '22.96X40.016', '', '', '', '', '117', '08-02-2018', NULL, '0.00', NULL, NULL, NULL, NULL, NULL),
(5, 1, 'H-27', 'Phase-2', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '0.00', '362392.06', NULL, NULL, NULL, NULL, NULL, NULL, '3523925.94', '3523925.94', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X12.20', '22.96X40.016', '', '', '', '', '120', '09-02-2018', NULL, '0.00', NULL, NULL, NULL, NULL, NULL),
(6, 1, 'H-29', 'Phase-2', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '2173925.94', '362392.06', NULL, NULL, NULL, NULL, NULL, NULL, '3523925.94', '1350000.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X12.20', '22.96X40.016', '', '', '', '', '122', '09-02-2018', NULL, '0.00', NULL, NULL, NULL, NULL, NULL),
(7, 1, 'H-30', 'Phase-2', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '37627.54', '396002.94', NULL, NULL, NULL, NULL, NULL, NULL, '3837627.54', '3800000.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X12.20', '22.96X40.016', '', '', '', '', '124', '12-02-2018', NULL, '0.00', NULL, NULL, NULL, NULL, NULL),
(8, 1, 'H-31', 'Phase-2', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '15227.54', '393602.94', NULL, NULL, NULL, NULL, NULL, NULL, '3815227.54', '3800000.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X12.20', '22.96X40.016', '', '', '', '', '127', '15-02-2018', NULL, '0.00', NULL, NULL, NULL, NULL, NULL),
(9, 1, 'H-41', 'Phase-2', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '37627.54', '396002.94', NULL, NULL, NULL, NULL, NULL, NULL, '3837627.54', '3800000.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X12.20', '22.96X40.016', 'h-104', 'h-105', 'h-106', 'h-107', '152', '22-02-2018', NULL, '0.00', NULL, NULL, NULL, NULL, NULL),
(10, 1, 'H-44', 'Phase-2', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '0.00', '393602.94', NULL, NULL, NULL, NULL, NULL, NULL, '3815227.54', '3815227.54', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X12.20', '22.96X40.016', '424', '424', '424', '424', '153', '22-02-2018', NULL, '0.00', NULL, NULL, NULL, NULL, NULL),
(11, 1, 'H-45', 'Phase-2', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X12.20', '22.96X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', NULL, NULL, NULL, NULL, NULL),
(12, 1, 'H-189', 'Phase-2', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X12.20', '22.96X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', NULL, NULL, NULL, NULL, NULL),
(13, 1, 'H-190', 'Phase-2', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X12.20', '22.96X40.016', '', '', '', '', '', '09-02-2018', NULL, '0.00', NULL, NULL, NULL, NULL, NULL),
(14, 1, 'H-191', 'Phase-2', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X12.20', '22.96X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', NULL, NULL, NULL, NULL, NULL),
(15, 1, 'H-192', 'Phase-2', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X12.20', '22.96X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', NULL, NULL, NULL, NULL, NULL),
(16, 1, 'H-193', 'Phase-2', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X12.20', '22.96X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', NULL, NULL, NULL, NULL, NULL),
(17, 1, 'H-194', 'Phase-2', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '23925.94', '362392.06', NULL, NULL, NULL, NULL, NULL, NULL, '3523925.94', '3500000.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X12.20', '22.96X40.016', '', '', '', '', '104', '02-02-2018', NULL, '0.00', NULL, NULL, NULL, NULL, NULL),
(18, 1, 'H-195', 'Phase-2', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X12.20', '22.96X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', NULL, NULL, NULL, NULL, NULL),
(19, 1, 'H-196', 'Phase-2', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '23925.94', '362392.06', NULL, NULL, NULL, NULL, NULL, NULL, '3523925.94', '3500000.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X12.20', '22.96X40.016', '', '', '', '', '107', '05-02-2018', NULL, '0.00', NULL, NULL, NULL, NULL, NULL),
(20, 1, 'H-197', 'Phase-2', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '23925.94', '362392.06', NULL, NULL, NULL, NULL, NULL, NULL, '3523925.94', '3500000.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X12.20', '22.96X40.016', '', '', '', '', '105', '03-02-2018', NULL, '0.00', NULL, NULL, NULL, NULL, NULL),
(21, 1, 'H-198', 'Phase-2', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X12.20', '22.96X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', NULL, NULL, NULL, NULL, NULL),
(22, 1, 'H-199', 'Phase-2', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '0.00', '362392.06', NULL, NULL, NULL, NULL, NULL, NULL, '3523925.94', '3523925.94', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X12.20', '22.96X40.016', NULL, NULL, NULL, NULL, '130', '15-02-2018', NULL, '0.00', NULL, NULL, NULL, NULL, NULL),
(23, 1, 'H-200', 'Phase-2', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '23925.94', '362392.06', NULL, NULL, NULL, NULL, NULL, NULL, '3523925.94', '3500000.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X12.20', '22.96X40.016', '', '', '', '', '108', '05-02-2018', NULL, '0.00', NULL, NULL, NULL, NULL, NULL),
(24, 1, 'H-201', 'Phase-2', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '23925.94', '362392.06', NULL, NULL, NULL, NULL, NULL, NULL, '3523925.94', '3500000.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X12.20', '22.96X40.016', '', '', '', '', '109', '05-02-2018', NULL, '0.00', NULL, NULL, NULL, NULL, NULL),
(25, 1, 'H-202', 'Phase-2', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '0.00', '362392.06', NULL, NULL, NULL, NULL, NULL, NULL, '3523925.94', '3523925.94', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X12.20', '22.96X40.016', '', '', '', '', '111', '08-02-2018', NULL, '0.00', NULL, NULL, NULL, NULL, NULL),
(26, 1, 'H-203', 'Phase-2', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X12.20', '22.96X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', NULL, NULL, NULL, NULL, NULL),
(27, 1, 'H-204', 'Phase-2', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '0.00', '362392.06', NULL, NULL, NULL, NULL, NULL, NULL, '3523925.94', '3523925.94', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X12.20', '22.96X40.016', '', '', '', '', '116', '08-02-2018', NULL, '0.00', NULL, NULL, NULL, NULL, NULL),
(28, 1, 'H-205', 'Phase-2', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X12.20', '22.96X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', NULL, NULL, NULL, NULL, NULL),
(29, 1, 'H-207', 'Phase-2', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X12.20', '22.96X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', NULL, NULL, NULL, NULL, NULL),
(30, 1, 'H-216', 'Phase-2', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '0.00', '362392.06', NULL, NULL, NULL, NULL, NULL, NULL, '3523925.94', '3523925.94', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X12.20', '22.96X40.016', NULL, NULL, NULL, NULL, '118', '08-02-2018', NULL, '0.00', NULL, NULL, NULL, NULL, NULL),
(31, 1, 'H-217', 'Phase-2', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X12.20', '22.96X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', NULL, NULL, NULL, NULL, NULL),
(32, 1, 'H-218', 'Phase-2', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '0.00', '362392.06', NULL, NULL, NULL, NULL, NULL, NULL, '3523925.94', '3523925.94', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X12.20', '22.96X40.016', NULL, NULL, NULL, NULL, '132', '19-02-2018', NULL, '0.00', NULL, NULL, NULL, NULL, NULL),
(33, 1, 'H-220', 'Phase-2', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '23925.94', '362392.06', NULL, NULL, NULL, NULL, NULL, NULL, '3523925.94', '3500000.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X12.20', '22.96X40.016', '', '', '', '', '121', '09-02-2018', NULL, '0.00', NULL, NULL, NULL, NULL, NULL),
(34, 1, 'H-84', 'Phase-2', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '221', '0.00', '0.00', '385930.65', NULL, NULL, NULL, NULL, NULL, NULL, '3743619.33', '3743619.33', NULL, 'BOOKED', '0.00', '0.00', '0.00', '6.70X13.00', '21.976X42.64', '', '', '', '', '38', '07-03-2018', NULL, '0.00', NULL, NULL, NULL, NULL, NULL),
(35, 1, 'H-86', 'Phase-2', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '0.00', '385930.65', NULL, NULL, NULL, NULL, NULL, NULL, '3743619.33', '3743619.33', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.70X13.00', '21.976X42.64', 'H-102', 'H-103', 'H-104', 'H-105', '115', '08-02-2018', NULL, '0.00', NULL, NULL, NULL, NULL, NULL),
(36, 1, 'H-87', 'Phase-2', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '230', '0.00', '0.00', '385930.65', NULL, NULL, NULL, NULL, NULL, NULL, '3743619.33', '3743619.33', NULL, 'BOOKED', '0.00', '0.00', '0.00', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, NULL, '48', '08-03-2018', NULL, '0.00', NULL, NULL, NULL, NULL, NULL),
(37, 1, 'H-88', 'Phase-2', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '0.00', '393602.94', NULL, NULL, NULL, NULL, NULL, NULL, '3815227.54', '3815227.54', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, NULL, '129', '15-02-2018', NULL, '0.00', NULL, NULL, NULL, NULL, NULL),
(38, 1, 'H-55', 'Phase-2', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '204', '0.00', '0.00', '393602.94', NULL, NULL, NULL, NULL, NULL, NULL, '3815227.54', '3815227.54', NULL, 'BOOKED', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', '77', '77', '77', '77', '18', '03-03-2018', NULL, '0.00', NULL, NULL, NULL, NULL, NULL),
(40, 1, 'H-57', 'Phase-2', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '220', '0.00', '227.54', '393602.94', NULL, NULL, NULL, NULL, NULL, NULL, '3815227.54', '3815000.00', NULL, 'BOOKED', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', '55', '66', '77', '88', '37', '07-03-2018', NULL, '0.00', NULL, NULL, NULL, NULL, NULL),
(41, 1, 'H-58', 'Phase-2', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '228', '0.00', '37627.54', '396002.94', NULL, NULL, NULL, NULL, NULL, NULL, '3837627.54', '3800000.00', NULL, 'BOOKED', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', '', '', '', '', '46', '08-03-2018', NULL, '0.00', NULL, NULL, NULL, NULL, NULL),
(42, 1, 'H-59', 'Phase-2', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '229', '0.00', '0.00', '393602.94', NULL, NULL, NULL, NULL, NULL, NULL, '3815227.54', '3815227.54', NULL, 'BOOKED', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', 'H-102', 'H-103', 'H-104', 'H-105', '47', '08-03-2018', NULL, '0.00', NULL, NULL, NULL, NULL, NULL),
(43, 1, 'H-232', 'Phase-2', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '231', '0.00', '0.00', '393602.94', NULL, NULL, NULL, NULL, NULL, NULL, '3815227.54', '3815227.54', NULL, 'BOOKED', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', '22', '33', '44', '55', '49', '08-03-2018', NULL, '0.00', NULL, NULL, NULL, NULL, NULL),
(44, 1, 'H-233', 'Phase-2', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '235', '0.00', '89755.80', '637302.40', NULL, NULL, NULL, NULL, NULL, NULL, '6089755.80', '6000000.00', NULL, 'BOOKED', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', 'H-101', 'H-102', 'H-103', 'H-104', '53', '08-03-2018', NULL, '0.00', NULL, NULL, NULL, NULL, NULL),
(45, 1, 'H-234', 'Phase-2', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '254', '0.00', '0.00', '393602.94', NULL, NULL, NULL, NULL, NULL, NULL, '3815227.54', '3815227.54', NULL, 'BOOKED', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', 'H-101', 'H-101', 'H-101', 'H-101', '87', '23-03-2018', NULL, '0.00', NULL, NULL, NULL, NULL, NULL),
(46, 1, 'H-235', 'Phase-2', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '264', '0.00', '0.00', '393602.94', NULL, NULL, NULL, NULL, NULL, NULL, '3815227.54', '3815227.54', NULL, 'BOOKED', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', 'H-101', 'H-101', 'H-101', 'H-101', '102', '25-03-2018', NULL, '0.00', NULL, NULL, NULL, NULL, NULL),
(47, 1, 'H-236', 'Phase-2', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '270', '0.00', '0.00', '393602.94', NULL, NULL, NULL, NULL, NULL, NULL, '3815227.54', '3815227.54', NULL, 'BOOKED', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', 'H-50', 'H-51', 'School', 'Hospital', '112', '28-03-2018', NULL, '0.00', NULL, NULL, NULL, NULL, NULL),
(48, 1, 'H-237', 'Phase-2', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'HOLD', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, '113', '24-09-2018', NULL, '0.00', NULL, NULL, NULL, NULL, NULL),
(49, 1, 'H-238', 'Phase-2', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', NULL, NULL, NULL, NULL, NULL),
(50, 1, 'H-239', 'Phase-2', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '0.00', '393602.94', NULL, NULL, NULL, NULL, NULL, NULL, '3815227.54', '3815227.54', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', 'm', 'm', 'm', 'm', '179', '23-02-2018', NULL, '0.00', NULL, NULL, NULL, NULL, NULL),
(51, 1, 'H-240', 'Phase-2', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', NULL, NULL, NULL, NULL, NULL),
(52, 1, 'H-241', 'Phase-2', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', NULL, NULL, NULL, NULL, NULL),
(53, 1, 'H-242', 'Phase-2', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '15227.54', '393602.94', NULL, NULL, NULL, NULL, NULL, NULL, '3815227.54', '3800000.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', '', '', '', '', '103', '02-02-2018', NULL, '0.00', NULL, NULL, NULL, NULL, NULL),
(54, 1, 'H-243', 'Phase-2', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', NULL, NULL, NULL, NULL, NULL),
(339, 1, 'H-56', 'Phase-2', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '0.00', '393602.94', NULL, NULL, NULL, NULL, NULL, NULL, '3815227.54', '3815227.54', NULL, 'HOLD', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', 'H-125', 'H-126', 'H-127', 'H-128', '101', '25-03-2018', NULL, '0.00', NULL, NULL, NULL, NULL, NULL),
(355, 1, 'H-10', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X12.20', '22.96X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(356, 1, 'H-11', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X12.20', '22.96X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(357, 1, 'H-12', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X12.20', '22.96X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(358, 1, 'H-13', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X12.20', '22.96X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(359, 1, 'H-14', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X12.20', '22.96X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(360, 1, 'H-22', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X12.20', '22.96X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(361, 1, 'H-23', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X12.20', '22.96X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(362, 1, 'H-24', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X12.20', '22.96X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(363, 1, 'H-25', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X12.20', '22.96X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(364, 1, 'H-26', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X12.20', '22.96X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(365, 1, 'H-36', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X12.20', '22.96X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(366, 1, 'H-37', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X12.20', '22.96X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(367, 1, 'H-38', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X12.20', '22.96X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(368, 1, 'H-39', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X12.20', '22.96X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(369, 1, 'H-40', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X12.20', '22.96X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(370, 1, 'H-74', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '222', '0.00', '1116.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, '2501116.00', '2500000.00', NULL, 'BOOKED', '0.00', '0.00', '0.00', '6.70X13.00', '21.976X42.64', '66', '55', '44', '33', '41', '07-03-2018', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(371, 1, 'H-75', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '234', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, '2501116.00', '2501116.00', NULL, 'BOOKED', '0.00', '0.00', '0.00', '6.70X13.00', '21.976X42.64', 'G-1012', 'G-1012', 'G-1012', 'G-1012', '52', '08-03-2018', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(372, 1, 'H-76', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '244', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, '2501116.00', '2501116.00', NULL, 'BOOKED', '0.00', '0.00', '0.00', '6.70X13.00', '21.976X42.64', 'H-1023', 'H-1023', 'H-1023', 'H-1023', '64', '10-03-2018', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(373, 1, 'H-77', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '245', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, '2501116.00', '2501116.00', NULL, 'BOOKED', '0.00', '0.00', '0.00', '6.70X13.00', '21.976X42.64', 'H-101', 'H-101', 'H-101', 'H-101', '65', '10-03-2018', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(374, 1, 'H-78', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '246', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, '2501116.00', '2501116.00', NULL, 'BOOKED', '0.00', '0.00', '0.00', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, NULL, '66', '10-03-2018', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(375, 1, 'H-79', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '210', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, '2501116.00', '2501116.00', NULL, 'BOOKED', '0.00', '0.00', '0.00', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, NULL, '24', '05-03-2018', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(376, 1, 'H-80', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '248', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, '2501116.00', '2501116.00', NULL, 'BOOKED', '0.00', '0.00', '0.00', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, NULL, '68', '10-03-2018', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(377, 1, 'H-81', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '249', '0.00', '1116.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, '2501116.00', '2500000.00', NULL, 'BOOKED', '0.00', '0.00', '0.00', '6.70X13.00', '21.976X42.64', 'H-102', 'H-102', 'H-102', 'H-102', '69', '10-03-2018', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(378, 1, 'H-82', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '261', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, '2501116.00', '2501116.00', NULL, 'BOOKED', '0.00', '0.00', '0.00', '6.70X13.00', '21.976X42.64', 'H-105', 'H-105', 'H-105', 'H-105', '97', '24-03-2018', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(379, 1, 'H-83', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(380, 1, 'H-89', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(381, 1, 'H-90', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(382, 1, 'H-91', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(383, 1, 'H-92', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(384, 1, 'H-93', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, NULL, '169', '22-02-2018', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(385, 1, 'H-349', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'HOLD', '0.00', '0.00', '0.00', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, NULL, '86', '23-03-2018', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(386, 1, 'H-350', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '262', '0.00', '116.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, '2501000.00', '2501116.00', NULL, 'BOOKED', '0.00', '0.00', '0.00', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, NULL, '95', '24-03-2018', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(387, 1, 'H-351', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(388, 1, 'H-352', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(389, 1, 'H-353', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(390, 1, 'H-354', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(391, 1, 'H-355', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(392, 1, 'H-356', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(393, 1, 'H-357', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(394, 1, 'H-358', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(395, 1, 'H-359', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(396, 1, 'H-360', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '263', '0.00', '1116.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, '2501116.00', '2500000.00', NULL, 'BOOKED', '0.00', '0.00', '0.00', '6.70X13.00', '21.976X42.64', '4', '4', '4', '4', '99', '24-03-2018', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(397, 1, 'H-361', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'HOLD', '0.00', '0.00', '0.00', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, NULL, '99', '24-03-2018', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(398, 1, 'H-362', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(399, 1, 'H-363', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(400, 1, 'H-364', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(401, 1, 'H-365', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(402, 1, 'H-366', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(403, 1, 'H-367', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(404, 1, 'H-368', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(405, 1, 'H-369', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(406, 1, 'H-370', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(407, 1, 'H-371', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(408, 1, 'H-372', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(409, 1, 'H-50', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '247', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, '2607274.80', '2607274.80', NULL, 'BOOKED', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', '4545', '454', '4545', '454', '67', '10-03-2018', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(410, 1, 'H-51', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, '2382068.00', '2382068.00', NULL, 'HOLD', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', '55', '55', '55', '55', '92', '24-03-2018', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(411, 1, 'H-52', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(412, 1, 'H-53', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(413, 1, 'H-54', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(414, 1, 'H-221', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(415, 1, 'H-222', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(416, 1, 'H-223', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(417, 1, 'H-224', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(418, 1, 'H-225', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(419, 1, 'H-226', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(420, 1, 'H-227', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(421, 1, 'H-228', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(422, 1, 'H-229', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(423, 1, 'H-244', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(424, 1, 'H-245', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(425, 1, 'H-246', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(426, 1, 'H-247', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(427, 1, 'H-248', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(428, 1, 'H-249', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(429, 1, 'H-250', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory_tbl` (`id`, `project_id`, `unit_no`, `block`, `type`, `category`, `location`, `facing`, `garden_facing_charges`, `corner_charges`, `carpet_area_price`, `gf_carpet_area_price`, `ff_carpet_area_price`, `gallery_area_price`, `wash_area_price`, `balcony_area_price`, `common_area_price`, `customer_id`, `unit_cost_as_per_carpet_area`, `discount`, `gst`, `price_ca_ref_rate`, `price_balcony_ref_rate`, `price_washarea_ref_rate`, `discount_carpet_area`, `discount_balcony_ref_rate`, `discount_washarea_ref_rate`, `cost_payable_to_company`, `total_cost`, `cost_calculation`, `status`, `terrace_front_price`, `terrace_back_price`, `preferred_location_price`, `plot_size_mtr`, `plot_size_ft`, `east_by`, `west_by`, `north_by`, `south_by`, `prospect_id`, `status_date`, `floor`, `plot_area`, `flat_carpet_area_sqmt`, `flat_carpet_area_sqft`, `shop_area_sqmt`, `shop_area_sqft`, `flat_type`) VALUES
(430, 1, 'H-251', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(431, 1, 'H-252', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(432, 1, 'H-373', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(433, 1, 'H-374', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(434, 1, 'H-375', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(435, 1, 'H-376', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(436, 1, 'H-377', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(437, 1, 'H-378', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(438, 1, 'H-379', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(439, 1, 'H-380', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(440, 1, 'H-381', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(441, 1, 'H-382', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(442, 1, 'H-383', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(443, 1, 'H-384', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(444, 1, 'H-385', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(445, 1, 'H-386', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(446, 1, 'H-387', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(447, 1, 'H-388', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(448, 1, 'H-389', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(449, 1, 'H-390', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(450, 1, 'H-391', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(451, 1, 'H-392', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(452, 1, 'H-393', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(453, 1, 'H-394', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(454, 1, 'H-395', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(455, 1, 'H-396', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(456, 1, 'H-397', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(457, 1, 'H-398', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(458, 1, 'H-399', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(459, 1, 'H-400', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(460, 1, 'H-401', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(461, 1, 'H-402', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(462, 1, 'H-403', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(463, 1, 'H-404', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(464, 1, 'H-405', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(465, 1, 'H-406', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(466, 1, 'H-407', 'Phase-2', 'Plot', 'Area', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(467, 1, 'GF-1', 'Phase-2', 'Flat', 'LIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '268', '0.00', '0.00', '174352.67', NULL, NULL, NULL, NULL, NULL, NULL, '1768891.61', '1768891.61', NULL, 'BOOKED', '0.00', '0.00', '0.00', '0', '', 'H-102', 'School', 'Pool ', 'pawai lake', '107', '27-03-2018', 'Ground Floor', NULL, '45.00', '484.20', NULL, NULL, NULL),
(468, 1, 'GF-2', 'Phase-2', 'Flat', 'LIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'NULL', '0.00', '0.00', '174352.67', NULL, NULL, NULL, NULL, NULL, NULL, '1768891.61', '1768891.61', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', 'H-101', 'H-101', 'H-101', 'H-101', '106', '27-03-2018', 'Ground Floor', NULL, '45.00', '484.20', NULL, NULL, NULL),
(469, 1, 'GF-3', 'Phase-2', 'Flat', 'LIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'NULL', '0.00', '0.00', '174352.67', NULL, NULL, NULL, NULL, NULL, NULL, '1768891.61', '1768891.61', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', 'H-101', 'H-102', 'H-103', 'H-1003', '58', '09-03-2018', 'Ground Floor', NULL, '45.00', '484.20', NULL, NULL, NULL),
(470, 1, 'GF-4', 'Phase-2', 'Flat', 'LIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '236', '0.00', '4730.14', '290843.10', NULL, NULL, NULL, NULL, NULL, NULL, '2856135.64', '2851405.50', NULL, 'BOOKED', '0.00', '0.00', '0.00', '0', '', 'Road ', 'Lack View ', 'H-103 Duplex', 'H-1034Duplex', '54', '09-03-2018', 'Ground Floor', NULL, '45.00', '484.20', NULL, NULL, NULL),
(471, 1, 'GF-5', 'Phase-2', 'Flat', 'LIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '237', '0.00', '68891.61', '174352.67', NULL, NULL, NULL, NULL, NULL, NULL, '1768891.61', '1700000.00', NULL, 'BOOKED', '0.00', '0.00', '0.00', '0', '', 'H-105', 'H-105', 'H-105', 'H-105', '55', '09-03-2018', 'Ground Floor', NULL, '45.00', '484.20', NULL, NULL, NULL),
(472, 1, 'GF-6', 'Phase-2', 'Flat', 'LIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Ground Floor', NULL, '45.00', '484.20', NULL, NULL, NULL),
(473, 1, 'GF-7', 'Phase-2', 'Flat', 'LIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '227', '0.00', '0.00', '174352.67', NULL, NULL, NULL, NULL, NULL, NULL, '1768891.61', '1768891.61', NULL, 'BOOKED', '0.00', '0.00', '0.00', '0', '', '5', '5', '5', '6', '44', '07-03-2018', 'Ground Floor', NULL, '45.00', '484.20', NULL, NULL, NULL),
(474, 1, 'GF-8', 'Phase-2', 'Flat', 'LIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Ground Floor', NULL, '45.00', '484.20', NULL, NULL, NULL),
(475, 1, 'FF-101', 'Phase-2', 'Flat', 'LIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '243', '0.00', '68891.61', '174352.67', NULL, NULL, NULL, NULL, NULL, NULL, '1768891.61', '1700000.00', NULL, 'BOOKED', '0.00', '0.00', '0.00', '0', '', 'a', 'b', 'c', 'd', '62', '10-03-2018', 'First Floor', NULL, '45.00', '484.20', NULL, NULL, NULL),
(476, 1, 'FF-102', 'Phase-2', 'Flat', 'LIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '224', '0.00', '0.00', '174352.67', NULL, NULL, NULL, NULL, NULL, NULL, '1768891.61', '1768891.61', NULL, 'BOOKED', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, '42', '07-03-2018', 'First Floor', NULL, '45.00', '484.20', NULL, NULL, NULL),
(477, 1, 'FF-103', 'Phase-2', 'Flat', 'LIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '269', '0.00', '0.00', '174352.67', NULL, NULL, NULL, NULL, NULL, NULL, '1768891.61', '1768891.61', NULL, 'BOOKED', '0.00', '0.00', '0.00', '0', '', 'H-102', 'H-103', 'H-104', 'H-102', '108', '27-03-2018', 'First Floor', NULL, '45.00', '484.20', NULL, NULL, NULL),
(478, 1, 'FF-104', 'Phase-2', 'Flat', 'LIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'HOLD', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, '98', '24-03-2018', 'First Floor', NULL, '45.00', '484.20', NULL, NULL, NULL),
(479, 1, 'FF-105', 'Phase-2', 'Flat', 'LIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'First Floor', NULL, '45.00', '484.20', NULL, NULL, NULL),
(480, 1, 'FF-106', 'Phase-2', 'Flat', 'LIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'First Floor', NULL, '45.00', '484.20', NULL, NULL, NULL),
(481, 1, 'FF-107', 'Phase-2', 'Flat', 'LIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'First Floor', NULL, '45.00', '484.20', NULL, NULL, NULL),
(482, 1, 'FF-108', 'Phase-2', 'Flat', 'LIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'First Floor', NULL, '45.00', '484.20', NULL, NULL, NULL),
(483, 1, 'SF-201', 'Phase-2', 'Flat', 'LIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Second Floor', NULL, '45.00', '484.20', NULL, NULL, NULL),
(484, 1, 'SF-202', 'Phase-2', 'Flat', 'LIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Second Floor', NULL, '45.00', '484.20', NULL, NULL, NULL),
(485, 1, 'SF-203', 'Phase-2', 'Flat', 'LIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Second Floor', NULL, '45.00', '484.20', NULL, NULL, NULL),
(486, 1, 'SF-204', 'Phase-2', 'Flat', 'LIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Second Floor', NULL, '45.00', '484.20', NULL, NULL, NULL),
(487, 1, 'SF-205', 'Phase-2', 'Flat', 'LIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Second Floor', NULL, '45.00', '484.20', NULL, NULL, NULL),
(488, 1, 'SF-206', 'Phase-2', 'Flat', 'LIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Second Floor', NULL, '45.00', '484.20', NULL, NULL, NULL),
(489, 1, 'SF-207', 'Phase-2', 'Flat', 'LIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Second Floor', NULL, '45.00', '484.20', NULL, NULL, NULL),
(490, 1, 'SF-208', 'Phase-2', 'Flat', 'LIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Second Floor', NULL, '45.00', '484.20', NULL, NULL, NULL),
(491, 1, 'TF-301', 'Phase-2', 'Flat', 'LIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '238', '0.00', '771.61', '177232.67', NULL, NULL, NULL, NULL, NULL, NULL, '1795771.61', '1795000.00', NULL, 'BOOKED', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, '56', '09-03-2018', 'Third Floor', NULL, '45.00', '484.20', NULL, NULL, NULL),
(492, 1, 'TF-302', 'Phase-2', 'Flat', 'LIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Third Floor', NULL, '45.00', '484.20', NULL, NULL, NULL),
(493, 1, 'TF-303', 'Phase-2', 'Flat', 'LIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Third Floor', NULL, '45.00', '484.20', NULL, NULL, NULL),
(494, 1, 'TF-304', 'Phase-2', 'Flat', 'LIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Third Floor', NULL, '45.00', '484.20', NULL, NULL, NULL),
(495, 1, 'TF-305', 'Phase-2', 'Flat', 'LIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Third Floor', NULL, '45.00', '484.20', NULL, NULL, NULL),
(496, 1, 'TF-306', 'Phase-2', 'Flat', 'LIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Third Floor', NULL, '45.00', '484.20', NULL, NULL, NULL),
(497, 1, 'TF-307', 'Phase-2', 'Flat', 'LIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Third Floor', NULL, '45.00', '484.20', NULL, NULL, NULL),
(498, 1, 'TF-308', 'Phase-2', 'Flat', 'LIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Third Floor', NULL, '45.00', '484.20', NULL, NULL, NULL),
(499, 1, 'TF-401', 'Phase-2', 'Flat', 'LIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Third Floor', NULL, '45.00', '484.20', NULL, NULL, NULL),
(500, 1, 'TF-402', 'Phase-2', 'Flat', 'LIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Third Floor', NULL, '45.00', '484.20', NULL, NULL, NULL),
(501, 1, 'TF-403', 'Phase-2', 'Flat', 'LIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Third Floor', NULL, '45.00', '484.20', NULL, NULL, NULL),
(502, 1, 'TF-404', 'Phase-2', 'Flat', 'LIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Third Floor', NULL, '45.00', '484.20', NULL, NULL, NULL),
(503, 1, 'TF-405', 'Phase-2', 'Flat', 'LIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Third Floor', NULL, '45.00', '484.20', NULL, NULL, NULL),
(504, 1, 'TF-406', 'Phase-2', 'Flat', 'LIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Third Floor', NULL, '45.00', '484.20', NULL, NULL, NULL),
(505, 1, 'TF-407', 'Phase-2', 'Flat', 'LIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Third Floor', NULL, '45.00', '484.20', NULL, NULL, NULL),
(506, 1, 'TF-408', 'Phase-2', 'Flat', 'LIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Third Floor', NULL, '45.00', '484.20', NULL, NULL, NULL),
(507, 1, 'TF-501', 'Phase-2', 'Flat', 'LIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Third Floor', NULL, '45.00', '484.20', NULL, NULL, NULL),
(508, 1, 'TF-502', 'Phase-2', 'Flat', 'LIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Third Floor', NULL, '45.00', '484.20', NULL, NULL, NULL),
(509, 1, 'TF-503', 'Phase-2', 'Flat', 'LIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Third Floor', NULL, '45.00', '484.20', NULL, NULL, NULL),
(510, 1, 'TF-504', 'Phase-2', 'Flat', 'LIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Third Floor', NULL, '45.00', '484.20', NULL, NULL, NULL),
(511, 1, 'TF-505', 'Phase-2', 'Flat', 'LIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Third Floor', NULL, '45.00', '484.20', NULL, NULL, NULL),
(512, 1, 'TF-506', 'Phase-2', 'Flat', 'LIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Third Floor', NULL, '45.00', '484.20', NULL, NULL, NULL),
(513, 1, 'TF-507', 'Phase-2', 'Flat', 'LIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Third Floor', NULL, '45.00', '484.20', NULL, NULL, NULL),
(514, 1, 'TF-508', 'Phase-2', 'Flat', 'LIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Third Floor', NULL, '45.00', '484.20', NULL, NULL, NULL),
(515, 1, 'GF-1', 'Phase-2', 'Flat', 'EWS', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'NULL', '0.00', '0.00', '103013.87', NULL, NULL, NULL, NULL, NULL, NULL, '1103062.81', '1103062.81', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', 'H-102', 'School', 'Pool ', 'pawai lake', '107', '27-03-2018', 'Ground Floor', NULL, '22.90', '246.51', NULL, NULL, NULL),
(516, 1, 'GF-2', 'Phase-2', 'Flat', 'EWS', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '267', '0.00', '0.00', '103013.87', NULL, NULL, NULL, NULL, NULL, NULL, '1103062.81', '1103062.81', NULL, 'BOOKED', '0.00', '0.00', '0.00', '0', '', 'H-101', 'H-101', 'H-101', 'H-101', '106', '27-03-2018', 'Ground Floor', NULL, '22.90', '246.51', NULL, NULL, NULL),
(517, 1, 'GF-3', 'Phase-2', 'Flat', 'EWS', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '240', '0.00', '0.00', '103013.87', NULL, NULL, NULL, NULL, NULL, NULL, '1103062.81', '1103062.81', NULL, 'BOOKED', '0.00', '0.00', '0.00', '0', '', 'H-101', 'H-102', 'H-103', 'H-1003', '58', '09-03-2018', 'Ground Floor', NULL, '22.90', '246.51', NULL, NULL, NULL),
(518, 1, 'GF-4', 'Phase-2', 'Flat', 'EWS', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'HOLD', '0.00', '0.00', '0.00', '0', '', 'Road ', 'Lack View ', 'H-103 Duplex', 'H-1034Duplex', '54', '09-03-2018', 'Ground Floor', NULL, '22.90', '246.51', NULL, NULL, NULL),
(519, 1, 'GF-5', 'Phase-2', 'Flat', 'EWS', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'HOLD', '0.00', '0.00', '0.00', '0', '', 'H-105', 'H-105', 'H-105', 'H-105', '55', '09-03-2018', 'Ground Floor', NULL, '22.90', '246.51', NULL, NULL, NULL),
(520, 1, 'GF-6', 'Phase-2', 'Flat', 'EWS', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Ground Floor', NULL, '22.90', '246.51', NULL, NULL, NULL),
(521, 1, 'GF-7', 'Phase-2', 'Flat', 'EWS', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'HOLD', '0.00', '0.00', '0.00', '0', '', '5', '5', '5', '6', '44', '07-03-2018', 'Ground Floor', NULL, '22.90', '246.51', NULL, NULL, NULL),
(522, 1, 'GF-8', 'Phase-2', 'Flat', 'EWS', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Ground Floor', NULL, '22.90', '246.51', NULL, NULL, NULL),
(523, 1, 'GF-9', 'Phase-2', 'Flat', 'EWS', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'HOLD', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, '109', '27-03-2018', 'Ground Floor', NULL, '22.90', '246.51', NULL, NULL, NULL),
(524, 1, 'GF-10', 'Phase-2', 'Flat', 'EWS', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '226', '0.00', '0.00', '103013.87', NULL, NULL, NULL, NULL, NULL, NULL, '1103062.81', '1103062.81', NULL, 'BOOKED', '0.00', '0.00', '0.00', '0', '', '472', '7257', '72572', '7257', '44', '07-03-2018', 'Ground Floor', NULL, '22.90', '246.51', NULL, NULL, NULL),
(525, 1, 'GF-11', 'Phase-2', 'Flat', 'EWS', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Ground Floor', NULL, '22.90', '246.51', NULL, NULL, NULL),
(526, 1, 'GF-12', 'Phase-2', 'Flat', 'EWS', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Ground Floor', NULL, '22.90', '246.51', NULL, NULL, NULL),
(527, 1, 'GF-13', 'Phase-2', 'Flat', 'EWS', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Ground Floor', NULL, '22.90', '246.51', NULL, NULL, NULL),
(528, 1, 'GF-14', 'Phase-2', 'Flat', 'EWS', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Ground Floor', NULL, '22.90', '246.51', NULL, NULL, NULL),
(529, 1, 'GF-15', 'Phase-2', 'Flat', 'EWS', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Ground Floor', NULL, '22.90', '246.51', NULL, NULL, NULL),
(530, 1, 'GF-16', 'Phase-2', 'Flat', 'EWS', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Ground Floor', NULL, '22.90', '246.51', NULL, NULL, NULL),
(531, 1, 'FF-17', 'Phase-2', 'Flat', 'EWS', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'First Floor', NULL, '22.90', '246.51', NULL, NULL, NULL),
(532, 1, 'FF-18', 'Phase-2', 'Flat', 'EWS', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'First Floor', NULL, '22.90', '246.51', NULL, NULL, NULL),
(533, 1, 'FF-19', 'Phase-2', 'Flat', 'EWS', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'First Floor', NULL, '22.90', '246.51', NULL, NULL, NULL),
(534, 1, 'FF-20', 'Phase-2', 'Flat', 'EWS', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'First Floor', NULL, '22.90', '246.51', NULL, NULL, NULL),
(535, 1, 'FF-21', 'Phase-2', 'Flat', 'EWS', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'First Floor', NULL, '22.90', '246.51', NULL, NULL, NULL),
(536, 1, 'FF-22', 'Phase-2', 'Flat', 'EWS', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '242', '0.00', '3062.81', '103013.87', NULL, NULL, NULL, NULL, NULL, NULL, '1103062.81', '1100000.00', NULL, 'BOOKED', '0.00', '0.00', '0.00', '0', '', 'a', 'b', 'c', 'd', '61', '10-03-2018', 'First Floor', NULL, '22.90', '246.51', NULL, NULL, NULL),
(537, 1, 'FF-23', 'Phase-2', 'Flat', 'EWS', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'First Floor', NULL, '22.90', '246.51', NULL, NULL, NULL),
(538, 1, 'FF-24', 'Phase-2', 'Flat', 'EWS', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'First Floor', NULL, '22.90', '246.51', NULL, NULL, NULL),
(539, 1, 'FF-25', 'Phase-2', 'Flat', 'EWS', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'First Floor', NULL, '22.90', '246.51', NULL, NULL, NULL),
(540, 1, 'FF-26', 'Phase-2', 'Flat', 'EWS', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'First Floor', NULL, '22.90', '246.51', NULL, NULL, NULL),
(541, 1, 'FF-27', 'Phase-2', 'Flat', 'EWS', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'First Floor', NULL, '22.90', '246.51', NULL, NULL, NULL),
(542, 1, 'FF-28', 'Phase-2', 'Flat', 'EWS', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'First Floor', NULL, '22.90', '246.51', NULL, NULL, NULL),
(543, 1, 'FF-29', 'Phase-2', 'Flat', 'EWS', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'First Floor', NULL, '22.90', '246.51', NULL, NULL, NULL),
(544, 1, 'FF-30', 'Phase-2', 'Flat', 'EWS', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'First Floor', NULL, '22.90', '246.51', NULL, NULL, NULL),
(545, 1, 'FF-31', 'Phase-2', 'Flat', 'EWS', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'First Floor', NULL, '22.90', '246.51', NULL, NULL, NULL),
(546, 1, 'FF-32', 'Phase-2', 'Flat', 'EWS', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'First Floor', NULL, '22.90', '246.51', NULL, NULL, NULL),
(547, 1, 'SF-33', 'Phase-2', 'Flat', 'EWS', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Second Floor', NULL, '22.90', '246.51', NULL, NULL, NULL),
(548, 1, 'SF-34', 'Phase-2', 'Flat', 'EWS', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Second Floor', NULL, '22.90', '246.51', NULL, NULL, NULL),
(549, 1, 'SF-35', 'Phase-2', 'Flat', 'EWS', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Second Floor', NULL, '22.90', '246.51', NULL, NULL, NULL),
(550, 1, 'SF-36', 'Phase-2', 'Flat', 'EWS', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Second Floor', NULL, '22.90', '246.51', NULL, NULL, NULL),
(551, 1, 'SF-37', 'Phase-2', 'Flat', 'EWS', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Second Floor', NULL, '22.90', '246.51', NULL, NULL, NULL),
(552, 1, 'SF-38', 'Phase-2', 'Flat', 'EWS', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Second Floor', NULL, '22.90', '246.51', NULL, NULL, NULL),
(553, 1, 'SF-39', 'Phase-2', 'Flat', 'EWS', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Second Floor', NULL, '22.90', '246.51', NULL, NULL, NULL),
(554, 1, 'SF-40', 'Phase-2', 'Flat', 'EWS', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Second Floor', NULL, '22.90', '246.51', NULL, NULL, NULL),
(555, 1, 'SF-41', 'Phase-2', 'Flat', 'EWS', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Second Floor', NULL, '22.90', '246.51', NULL, NULL, NULL),
(556, 1, 'SF-42', 'Phase-2', 'Flat', 'EWS', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Second Floor', NULL, '22.90', '246.51', NULL, NULL, NULL),
(557, 1, 'SF-43', 'Phase-2', 'Flat', 'EWS', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Second Floor', NULL, '22.90', '246.51', NULL, NULL, NULL),
(558, 1, 'SF-44', 'Phase-2', 'Flat', 'EWS', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Second Floor', NULL, '22.90', '246.51', NULL, NULL, NULL),
(559, 1, 'SF-45', 'Phase-2', 'Flat', 'EWS', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Second Floor', NULL, '22.90', '246.51', NULL, NULL, NULL),
(560, 1, 'SF-46', 'Phase-2', 'Flat', 'EWS', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Second Floor', NULL, '22.90', '246.51', NULL, NULL, NULL),
(561, 1, 'SF-47', 'Phase-2', 'Flat', 'EWS', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Second Floor', NULL, '22.90', '246.51', NULL, NULL, NULL),
(562, 1, 'SF-48', 'Phase-2', 'Flat', 'EWS', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Second Floor', NULL, '22.90', '246.51', NULL, NULL, NULL);
INSERT INTO `inventory_tbl` (`id`, `project_id`, `unit_no`, `block`, `type`, `category`, `location`, `facing`, `garden_facing_charges`, `corner_charges`, `carpet_area_price`, `gf_carpet_area_price`, `ff_carpet_area_price`, `gallery_area_price`, `wash_area_price`, `balcony_area_price`, `common_area_price`, `customer_id`, `unit_cost_as_per_carpet_area`, `discount`, `gst`, `price_ca_ref_rate`, `price_balcony_ref_rate`, `price_washarea_ref_rate`, `discount_carpet_area`, `discount_balcony_ref_rate`, `discount_washarea_ref_rate`, `cost_payable_to_company`, `total_cost`, `cost_calculation`, `status`, `terrace_front_price`, `terrace_back_price`, `preferred_location_price`, `plot_size_mtr`, `plot_size_ft`, `east_by`, `west_by`, `north_by`, `south_by`, `prospect_id`, `status_date`, `floor`, `plot_area`, `flat_carpet_area_sqmt`, `flat_carpet_area_sqft`, `shop_area_sqmt`, `shop_area_sqft`, `flat_type`) VALUES
(563, 1, 'TF-49', 'Phase-2', 'Flat', 'EWS', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Third Floor', NULL, '22.90', '246.51', NULL, NULL, NULL),
(564, 1, 'TF-50', 'Phase-2', 'Flat', 'EWS', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Third Floor', NULL, '22.90', '246.51', NULL, NULL, NULL),
(565, 1, 'TF-51', 'Phase-2', 'Flat', 'EWS', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Third Floor', NULL, '22.90', '246.51', NULL, NULL, NULL),
(566, 1, 'TF-52', 'Phase-2', 'Flat', 'EWS', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Third Floor', NULL, '22.90', '246.51', NULL, NULL, NULL),
(567, 1, 'TF-53', 'Phase-2', 'Flat', 'EWS', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Third Floor', NULL, '22.90', '246.51', NULL, NULL, NULL),
(568, 1, 'TF-54', 'Phase-2', 'Flat', 'EWS', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Third Floor', NULL, '22.90', '246.51', NULL, NULL, NULL),
(569, 1, 'TF-55', 'Phase-2', 'Flat', 'EWS', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Third Floor', NULL, '22.90', '246.51', NULL, NULL, NULL),
(570, 1, 'TF-56', 'Phase-2', 'Flat', 'EWS', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Third Floor', NULL, '22.90', '246.51', NULL, NULL, NULL),
(571, 1, 'TF-57', 'Phase-2', 'Flat', 'EWS', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Third Floor', NULL, '22.90', '246.51', NULL, NULL, NULL),
(572, 1, 'TF-58', 'Phase-2', 'Flat', 'EWS', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Third Floor', NULL, '22.90', '246.51', NULL, NULL, NULL),
(573, 1, 'TF-59', 'Phase-2', 'Flat', 'EWS', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Third Floor', NULL, '22.90', '246.51', NULL, NULL, NULL),
(574, 1, 'TF-60', 'Phase-2', 'Flat', 'EWS', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Third Floor', NULL, '22.90', '246.51', NULL, NULL, NULL),
(575, 1, 'TF-61', 'Phase-2', 'Flat', 'EWS', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Third Floor', NULL, '22.90', '246.51', NULL, NULL, NULL),
(576, 2, 'H-253', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '205', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, '3481543.06', '3481543.06', NULL, 'BOOKED', '0.00', '0.00', '0.00', '6.00X13.00', '19.68X42.64', '778', '888', '88', '88', '19', '03-03-2018', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(577, 2, 'H-254', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '241', '0.00', '1543.06', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, '3480000.00', '3400000.00', NULL, 'BOOKED', '0.00', '0.00', '0.00', '6.00X13.00', '19.68X42.64', NULL, NULL, NULL, NULL, '60', '10-03-2018', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(578, 2, 'H-255', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '256', '0.00', '81420.56', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, '3400122.50', '3380122.50', NULL, 'BOOKED', '0.00', '0.00', '0.00', '6.00X13.00', '19.68X42.64', 'H-104', 'H-105', 'H-104', '7H-104', '88', '24-03-2018', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(579, 2, 'H-256', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '258', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, '3400000.00', '3400000.00', NULL, 'BOOKED', '0.00', '0.00', '0.00', '6.00X13.00', '19.68X42.64', 'H-101', 'H-102', 'H-102', 'H-102', '93', '24-03-2018', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(580, 2, 'H-257', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '259', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, '3000000.00', '3000000.00', NULL, 'BOOKED', '0.00', '0.00', '0.00', '6.00X13.00', '19.68X42.64', 'H-101', 'H-152', 'School', 'Cms', '94', '24-03-2018', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(581, 2, 'H-258', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '260', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, '3000000.00', '3000000.00', NULL, 'BOOKED', '0.00', '0.00', '0.00', '6.00X13.00', '19.68X42.64', 'h-101', 'h-101', 'h-101', 'h-101', '96', '24-03-2018', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(582, 2, 'H-259', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'HOLD', '0.00', '0.00', '0.00', '6.00X13.00', '19.68X42.64', NULL, NULL, NULL, NULL, '111', '27-03-2018', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(583, 2, 'H-260', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X13.00', '19.68X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(584, 2, 'H-261', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X13.00', '19.68X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(585, 2, 'H-262', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X13.00', '19.68X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(586, 2, 'H-263', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X13.00', '19.68X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(587, 2, 'H-264', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X13.00', '19.68X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(588, 2, 'H-265', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X13.00', '19.68X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(589, 2, 'H-266', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X13.00', '19.68X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(590, 2, 'H-267', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X13.00', '19.68X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(591, 2, 'H-268', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'HOLD', '0.00', '0.00', '0.00', '6.00X13.00', '19.68X42.64', NULL, NULL, NULL, NULL, '71', '20-03-2018', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(592, 2, 'H-269', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X13.00', '19.68X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(593, 2, 'H-270', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X13.00', '19.68X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(594, 2, 'H-271', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X13.00', '19.68X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(595, 2, 'H-272', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X13.00', '19.68X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(596, 2, 'H-101', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '207', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, '3481281.53', '3480000.00', NULL, 'BOOKED', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', '1', '2', '3', '1', '23', '05-03-2018', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(597, 2, 'H-102', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '208', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, '3481281.53', '3480000.00', NULL, 'BOOKED', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', '1', '2', '3', '4', '25', '05-03-2018', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(598, 2, 'H-103', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '219', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, '3481281.53', '3481000.00', NULL, 'BOOKED', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', '33', '44', '55', '66', '36', '07-03-2018', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(599, 2, 'H-104', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'HOLD', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, '89', '24-03-2018', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(600, 2, 'H-105', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(601, 2, 'H-106', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(602, 2, 'H-107', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(603, 2, 'H-108', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(604, 2, 'H-109', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(605, 2, 'H-110', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(606, 2, 'H-111', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(607, 2, 'H-112', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(608, 2, 'H-113', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(609, 2, 'H-114', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(610, 2, 'H-115', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(611, 2, 'H-116', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(612, 2, 'H-117', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(613, 2, 'H-118', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(614, 2, 'H-119', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(615, 2, 'H-120', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(616, 2, 'H-121', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(617, 2, 'H-122', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(618, 2, 'H-123', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '196', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, '3481281.53', '2525000.00', NULL, 'BOOKED', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', 'Road', 'Plot No. 106', 'Plot No. 122', 'Plot No. 124', '4', '27-02-2018', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(619, 2, 'H-124', 'Phase-2', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '197', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, '3481281.53', '2575000.00', NULL, 'BOOKED', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', 'Road', 'Plot no. 105', 'Plot no. 123', 'Plot no. 125', '5', '27-02-2018', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(620, 2, 'H-125', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(621, 2, 'H-126', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(622, 2, 'H-127', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(623, 2, 'H-128', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(624, 2, 'H-132', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(625, 2, 'H-133', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(626, 2, 'H-134', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(627, 2, 'H-135', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(628, 2, 'H-136', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(629, 2, 'H-137', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(630, 2, 'H-138', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(631, 2, 'H-139', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(632, 2, 'H-140', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(633, 2, 'H-141', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(634, 2, 'H-142', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(635, 2, 'H-143', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(636, 2, 'H-144', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(637, 2, 'H-145', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(638, 2, 'H-146', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(639, 2, 'H-147', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(640, 2, 'H-148', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(641, 2, 'H-149', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(642, 2, 'H-150', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(643, 2, 'H-151', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(644, 2, 'H-152', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(645, 2, 'H-153', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(646, 2, 'H-154', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(647, 2, 'H-155', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(648, 2, 'H-156', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(649, 2, 'H-161', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(650, 2, 'H-162', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(651, 2, 'H-163', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(652, 2, 'H-164', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(653, 2, 'H-165', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(654, 2, 'H-166', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(655, 2, 'H-167', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(656, 2, 'H-168', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(657, 2, 'H-169', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(658, 2, 'H-170', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(659, 2, 'H-171', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(660, 2, 'H-172', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(661, 2, 'H-173', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(662, 2, 'H-174', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(663, 2, 'H-175', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(664, 2, 'H-176', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(665, 2, 'H-273', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(666, 2, 'H-274', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(667, 2, 'H-275', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(668, 2, 'H-276', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(669, 2, 'H-277', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(670, 2, 'H-278', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(671, 2, 'H-279', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(672, 2, 'H-280', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(673, 2, 'H-281', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(674, 2, 'H-282', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(675, 2, 'H-283', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(676, 2, 'H-284', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(677, 2, 'H-285', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(678, 2, 'H-286', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(679, 2, 'H-287', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(680, 2, 'H-288', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(681, 2, 'H-289', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(682, 2, 'H-290', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(683, 2, 'H-291', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(684, 2, 'H-292', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(685, 2, 'H-293', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(686, 2, 'H-294', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(687, 2, 'H-295', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(688, 2, 'H-296', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(689, 2, 'H-297', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(690, 2, 'H-298', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(691, 2, 'H-299', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(692, 2, 'H-300', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(693, 2, 'H-301', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(694, 2, 'H-302', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory_tbl` (`id`, `project_id`, `unit_no`, `block`, `type`, `category`, `location`, `facing`, `garden_facing_charges`, `corner_charges`, `carpet_area_price`, `gf_carpet_area_price`, `ff_carpet_area_price`, `gallery_area_price`, `wash_area_price`, `balcony_area_price`, `common_area_price`, `customer_id`, `unit_cost_as_per_carpet_area`, `discount`, `gst`, `price_ca_ref_rate`, `price_balcony_ref_rate`, `price_washarea_ref_rate`, `discount_carpet_area`, `discount_balcony_ref_rate`, `discount_washarea_ref_rate`, `cost_payable_to_company`, `total_cost`, `cost_calculation`, `status`, `terrace_front_price`, `terrace_back_price`, `preferred_location_price`, `plot_size_mtr`, `plot_size_ft`, `east_by`, `west_by`, `north_by`, `south_by`, `prospect_id`, `status_date`, `floor`, `plot_area`, `flat_carpet_area_sqmt`, `flat_carpet_area_sqft`, `shop_area_sqmt`, `shop_area_sqft`, `flat_type`) VALUES
(695, 2, 'H-303', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(696, 2, 'H-304', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(697, 2, 'H-305', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(698, 2, 'H-306', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(699, 2, 'H-307', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(700, 2, 'H-308', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(701, 2, 'H-309', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(702, 2, 'H-310', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(703, 2, 'H-311', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(704, 2, 'H-312', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(705, 2, 'H-314', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(706, 2, 'H-315', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(707, 2, 'H-316', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(708, 2, 'H-317', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(709, 2, 'H-318', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(710, 2, 'H-319', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(711, 2, 'H-320', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(712, 2, 'H-321', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(713, 2, 'H-322', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(714, 2, 'H-323', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(715, 2, 'H-324', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(716, 2, 'H-325', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(717, 2, 'H-326', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(718, 2, 'H-327', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(719, 2, 'H-328', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(720, 2, 'H-329', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(721, 2, 'H-332', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(722, 2, 'H-333', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(723, 2, 'H-334', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(724, 2, 'H-335', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(725, 2, 'H-336', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(726, 2, 'H-337', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(727, 2, 'H-338', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(728, 2, 'H-339', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(729, 2, 'H-340', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(730, 2, 'H-341', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(731, 2, 'H-342', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(732, 2, 'H-343', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(733, 2, 'H-344', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(734, 2, 'H-345', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(735, 2, 'H-346', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(736, 2, 'H-347', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(737, 2, 'H-409', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(738, 2, 'H-410', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(739, 2, 'H-411', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(740, 2, 'H-412', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(741, 2, 'H-413', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(742, 2, 'H-414', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(743, 2, 'H-415', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(744, 2, 'H-416', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(745, 2, 'H-417', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(746, 2, 'H-418', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(747, 2, 'H-419', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(748, 2, 'H-420', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(749, 2, 'H-421', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(750, 2, 'H-422', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(751, 2, 'H-423', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(752, 2, 'H-424', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(753, 2, 'H-425', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(754, 2, 'H-426', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(755, 2, 'H-427', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(756, 2, 'H-428', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(757, 2, 'H-431', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(758, 2, 'H-432', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(759, 2, 'H-433', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(760, 2, 'H-434', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(761, 2, 'H-435', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(762, 2, 'H-436', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(763, 2, 'H-437', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(764, 2, 'H-438', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(765, 2, 'H-439', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(766, 2, 'H-440', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(767, 2, 'H-441', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(768, 2, 'H-442', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(769, 2, 'H-443', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(770, 2, 'H-444', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(771, 2, 'H-445', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(772, 2, 'H-446', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(773, 2, 'H-447', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(774, 2, 'H-448', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(775, 2, 'H-449', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(776, 2, 'H-450', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(777, 2, 'H-453', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(778, 2, 'H-454', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(779, 2, 'H-455', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(780, 2, 'H-456', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(781, 2, 'H-457', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(782, 2, 'H-458', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(783, 2, 'H-459', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(784, 2, 'H-460', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(785, 2, 'H-461', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(786, 2, 'H-462', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(787, 2, 'H-463', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(788, 2, 'H-464', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(789, 2, 'H-465', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(790, 2, 'H-466', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(791, 2, 'H-467', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(792, 2, 'H-468', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(793, 2, 'H-469', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(794, 2, 'H-470', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(795, 2, 'H-471', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(796, 2, 'H-472', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(797, 2, 'H-475', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(798, 2, 'H-476', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(799, 2, 'H-477', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(800, 2, 'H-478', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(801, 2, 'H-479', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(802, 2, 'H-480', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(803, 2, 'H-481', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(804, 2, 'H-482', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(805, 2, 'H-483', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(806, 2, 'H-484', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(807, 2, 'H-485', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(808, 2, 'H-486', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(809, 2, 'H-487', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(810, 2, 'H-488', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(811, 2, 'H-489', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(812, 2, 'H-490', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(813, 2, 'H-491', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(814, 2, 'H-492', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(815, 2, 'H-493', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(816, 2, 'H-494', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(817, 2, 'H-496', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(818, 2, 'H-497', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(819, 2, 'H-498', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(820, 2, 'H-499', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(821, 2, 'H-500', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(822, 2, 'H-501', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(823, 2, 'H-502', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(824, 2, 'H-503', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(825, 2, 'H-504', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(826, 2, 'H-505', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(827, 2, 'H-506', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory_tbl` (`id`, `project_id`, `unit_no`, `block`, `type`, `category`, `location`, `facing`, `garden_facing_charges`, `corner_charges`, `carpet_area_price`, `gf_carpet_area_price`, `ff_carpet_area_price`, `gallery_area_price`, `wash_area_price`, `balcony_area_price`, `common_area_price`, `customer_id`, `unit_cost_as_per_carpet_area`, `discount`, `gst`, `price_ca_ref_rate`, `price_balcony_ref_rate`, `price_washarea_ref_rate`, `discount_carpet_area`, `discount_balcony_ref_rate`, `discount_washarea_ref_rate`, `cost_payable_to_company`, `total_cost`, `cost_calculation`, `status`, `terrace_front_price`, `terrace_back_price`, `preferred_location_price`, `plot_size_mtr`, `plot_size_ft`, `east_by`, `west_by`, `north_by`, `south_by`, `prospect_id`, `status_date`, `floor`, `plot_area`, `flat_carpet_area_sqmt`, `flat_carpet_area_sqft`, `shop_area_sqmt`, `shop_area_sqft`, `flat_type`) VALUES
(828, 2, 'H-507', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(829, 2, 'H-508', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(830, 2, 'H-509', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(831, 2, 'H-510', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(832, 2, 'H-511', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(833, 2, 'H-512', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(834, 2, 'H-513', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(835, 2, 'H-514', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(836, 2, 'H-515', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(837, 2, 'H-516', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(838, 2, 'H-517', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(839, 2, 'H-518', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(840, 2, 'H-519', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(841, 2, 'H-520', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(842, 2, 'H-521', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(843, 2, 'H-522', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(844, 2, 'H-523', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(845, 2, 'H-524', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(846, 2, 'H-525', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(847, 2, 'H-526', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(848, 2, 'H-527', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(849, 2, 'H-528', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(850, 2, 'H-529', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(851, 2, 'H-313', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '251', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, '2299836.00', '2299836.00', NULL, 'BOOKED', '0.00', '0.00', '0.00', '7.92X12.20', '25.9776X40.016', 'hh', 'hh', 'hh', 'h', '83', '22-03-2018', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(852, 2, 'H-330', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'HOLD', '0.00', '0.00', '0.00', '7.92X12.20', '25.9776X40.016', NULL, NULL, NULL, NULL, '72', '20-03-2018', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(853, 2, 'H-331', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '250', '0.00', '18.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, '9099900.00', '9099000.00', NULL, 'BOOKED', '0.00', '0.00', '0.00', '7.92X12.20', '25.9776X40.016', 'Hose No. - 1', 'Hose No. - 2', 'Hose No. - 5', 'Road', '78', '21-03-2018', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(854, 2, 'H-348', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'HOLD', '0.00', '0.00', '0.00', '7.92X12.20', '25.9776X40.016', NULL, NULL, NULL, NULL, '75', '21-03-2018', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(855, 2, 'H-408', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '8.00X12.20', '26.24X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(856, 2, 'H-429', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '8.00X12.20', '26.24X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(857, 2, 'H-430', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '8.00X12.20', '26.24X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(858, 2, 'H-451', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '8.00X12.20', '26.24X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(859, 2, 'H-452', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '8.00X12.20', '26.24X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(860, 2, 'H-473', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '8.00X12.20', '26.24X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(861, 2, 'H-474', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '8.00X12.20', '26.24X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(862, 2, 'H-495', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '8.00X12.20', '26.24X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(863, 2, 'H-5', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X12.20', '22.96X40.025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(864, 2, 'H-28', 'Phase-2', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '198', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, '3481204.74', '3250000.00', NULL, 'BOOKED', '0.00', '0.00', '0.00', '7.00X12.20', '22.96X40.025', 'Road', 'Plot No. H-25', 'Plot No. H-27', 'Plot No. H-29', '6', '28-02-2018', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(865, 2, 'H-42', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X12.20', '22.96X40.025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(866, 2, 'H-43', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X12.20', '22.96X40.025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(867, 2, 'H-206', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X12.20', '22.96X40.025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(868, 2, 'H-208', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X12.20', '22.96X40.025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(869, 2, 'H-209', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X12.20', '22.96X40.025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(870, 2, 'H-210', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X12.20', '22.96X40.025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(871, 2, 'H-211', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X12.20', '22.96X40.025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(872, 2, 'H-212', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X12.20', '22.96X40.025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(873, 2, 'H-213', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X12.20', '22.96X40.025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(874, 2, 'H-214', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X12.20', '22.96X40.025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(875, 2, 'H-215', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X12.20', '22.96X40.025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(876, 2, 'H-219', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'AVAILABLE', '0.00', '0.00', '0.00', '7.00X12.20', '22.96X40.025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(877, 2, 'H-85', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '252', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, '5481372.89', '5481372.89', NULL, 'BOOKED', '0.00', '0.00', '0.00', '6.70X13.00', '21.976X42.64', 'a', 'c', 'v', 'b', '84', '22-03-2018', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(878, 2, 'H-230', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '253', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, '7481367.22', '7481367.22', NULL, 'BOOKED', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', '1', '2', '3', '4', '85', '22-03-2018', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(879, 2, 'H-231', 'Phase-1', 'Duplex', 'HIG', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, 'HOLD', '0.00', '0.00', '0.00', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, '90', '24-03-2018', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(883, 2, 'shop-8', 'Phase-1', 'Shop', NULL, 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AVAILABLE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9.28', '99.85', NULL),
(884, 2, 'shop-10', 'Phase-1', 'Shop', NULL, 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '218', NULL, '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, '202000.00', '202000.00', NULL, 'BOOKED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '35', '07-03-2018', NULL, NULL, NULL, NULL, '17.00', '182.92', NULL),
(885, 2, 'shop-11', 'Phase-1', 'Shop', NULL, 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '232', NULL, '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, '202000.00', '202000.00', NULL, 'BOOKED', NULL, NULL, NULL, NULL, NULL, '22', '33', '44', '55', '50', '08-03-2018', NULL, NULL, NULL, NULL, '17.00', '182.92', NULL),
(886, 2, 'shop-13', 'Phase-1', 'Shop', NULL, 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AVAILABLE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '17.00', '182.92', NULL),
(887, 2, 'shop-1', 'Phase-1', 'Shop', NULL, 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '216', NULL, '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, '142900.00', '142900.00', NULL, 'BOOKED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '33', '07-03-2018', NULL, NULL, NULL, NULL, '9.12', '98.13', NULL),
(888, 2, 'shop-2', 'Phase-1', 'Shop', NULL, 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'HOLD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '82', '22-03-2018', NULL, NULL, NULL, NULL, '18.90', '203.36', NULL),
(889, 2, 'shop-3', 'Phase-1', 'Shop', NULL, 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AVAILABLE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '17.30', '186.15', NULL),
(890, 2, 'shop-4', 'Phase-1', 'Shop', NULL, 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AVAILABLE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '11.97', '128.80', NULL),
(891, 2, 'shop-5', 'Phase-1', 'Shop', NULL, 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AVAILABLE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '16.54', '177.97', NULL),
(892, 2, 'shop-6', 'Phase-1', 'Shop', NULL, 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AVAILABLE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '12.20', '131.27', NULL),
(893, 2, 'shop-7', 'Phase-1', 'Shop', NULL, 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AVAILABLE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '13.15', '141.49', NULL),
(894, 2, 'shop-9', 'Phase-1', 'Shop', NULL, 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '217', NULL, '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, '142600.00', '142600.00', NULL, 'BOOKED', NULL, NULL, NULL, NULL, NULL, '44', '44', '44', '55', '34', '07-03-2018', NULL, NULL, NULL, NULL, '9.08', '97.70', NULL),
(895, 2, 'shop-12', 'Phase-1', 'Shop', NULL, 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '241', NULL, '700.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, '189850.00', '189150.00', NULL, 'BOOKED', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '59', '10-03-2018', NULL, NULL, NULL, NULL, '15.10', '162.48', NULL),
(896, 2, 'shop-14', 'Phase-1', 'Shop', NULL, 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AVAILABLE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9.60', '103.30', NULL),
(897, 2, 'shop-15', 'Phase-1', 'Shop', NULL, 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AVAILABLE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9.76', '105.02', NULL),
(898, 2, 'shop-16', 'Phase-1', 'Shop', NULL, 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AVAILABLE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '18.53', '199.38', NULL),
(899, 2, 'shop-17', 'Phase-1', 'Shop', NULL, 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AVAILABLE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '15.11', '162.58', NULL),
(900, 2, 'shop-18', 'Phase-1', 'Shop', NULL, 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AVAILABLE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10.08', '108.46', NULL),
(905, 2, 'Flat-101', 'Phase-1', 'Flat', 'Block B', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '202', NULL, '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, '1779504.94', '1779504.94', NULL, 'BOOKED', NULL, NULL, NULL, NULL, NULL, 'H-101', 'H-101', 'H-101', 'H-101', NULL, NULL, 'First Floor', NULL, '57.14', '614.83', NULL, NULL, 'Type A'),
(906, 2, 'Flat-102', 'Phase-1', 'Flat', 'Block B', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AVAILABLE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Second Floor', NULL, '57.14', '614.83', NULL, NULL, 'Type B'),
(907, 2, 'Flat-103', 'Phase-1', 'Flat', 'Block B', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AVAILABLE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Third Floor', NULL, '54.00', '581.04', NULL, NULL, 'Type C'),
(908, 2, 'Flat-104', 'Phase-1', 'Flat', 'Block B', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AVAILABLE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Fourth Floor', NULL, '64.62', '695.31', NULL, NULL, 'Type D'),
(909, 2, 'Flat-201', 'Phase-1', 'Flat', 'Block B', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '204', NULL, '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, '1829504.94', '1829504.94', NULL, 'BOOKED', NULL, NULL, NULL, NULL, NULL, 'H-101', 'H-101', 'H-101', 'H-101', NULL, NULL, 'First Floor', NULL, '57.14', '614.83', NULL, NULL, 'Type A'),
(910, 2, 'Flat-202', 'Phase-1', 'Flat', 'Block B', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AVAILABLE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Second Floor', NULL, '57.14', '614.83', NULL, NULL, 'Type B'),
(911, 2, 'Flat-203', 'Phase-1', 'Flat', 'Block B', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AVAILABLE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Third Floor', NULL, '54.00', '581.04', NULL, NULL, 'Type C'),
(912, 2, 'Flat-204', 'Phase-1', 'Flat', 'Block B', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AVAILABLE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Fourth Floor', NULL, '64.62', '695.31', NULL, NULL, 'Type D'),
(913, 2, 'Flat-301', 'Phase-1', 'Flat', 'Block B', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '206', NULL, '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, '1779504.94', '1779504.94', NULL, 'BOOKED', NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', NULL, NULL, 'First Floor', NULL, '57.14', '614.83', NULL, NULL, 'Type A'),
(914, 2, 'Flat-302', 'Phase-1', 'Flat', 'Block B', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AVAILABLE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Second Floor', NULL, '57.14', '614.83', NULL, NULL, 'Type B'),
(915, 2, 'Flat-303', 'Phase-1', 'Flat', 'Block B', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AVAILABLE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Third Floor', NULL, '54.00', '581.04', NULL, NULL, 'Type C'),
(916, 2, 'Flat-304', 'Phase-1', 'Flat', 'Block B', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AVAILABLE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Fourth Floor', NULL, '64.62', '695.31', NULL, NULL, 'Type D'),
(917, 2, 'Flat-401', 'Phase-1', 'Flat', 'Block B', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '203', NULL, '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, '1779504.94', '1779504.94', NULL, 'BOOKED', NULL, NULL, NULL, NULL, NULL, 'H-102', 'H-102', 'H-102', 'H-102', NULL, NULL, 'First Floor', NULL, '57.14', '614.83', NULL, NULL, 'Type A'),
(918, 2, 'Flat-402', 'Phase-1', 'Flat', 'Block B', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AVAILABLE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Second Floor', NULL, '57.14', '614.83', NULL, NULL, 'Type B'),
(919, 2, 'Flat-403', 'Phase-1', 'Flat', 'Block B', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AVAILABLE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Third Floor', NULL, '54.00', '581.04', NULL, NULL, 'Type C'),
(920, 2, 'Flat-404', 'Phase-1', 'Flat', 'Block B', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AVAILABLE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Fourth Floor', NULL, '64.62', '695.31', NULL, NULL, 'Type D'),
(921, 2, 'Flat-501', 'Phase-1', 'Flat', 'Block B', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AVAILABLE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'First Floor', NULL, '57.14', '614.83', NULL, NULL, 'Type A'),
(922, 2, 'Flat-502', 'Phase-1', 'Flat', 'Block B', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AVAILABLE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Second Floor', NULL, '57.14', '614.83', NULL, NULL, 'Type B'),
(923, 2, 'Flat-503', 'Phase-1', 'Flat', 'Block B', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AVAILABLE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Third Floor', NULL, '54.00', '581.04', NULL, NULL, 'Type C'),
(924, 2, 'Flat-504', 'Phase-1', 'Flat', 'Block B', 'Near By Pass Road, Khajurikala', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AVAILABLE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Fourth Floor', NULL, '64.62', '695.31', NULL, NULL, 'Type D');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_tbl`
--

CREATE TABLE `invoice_tbl` (
  `id` int(11) NOT NULL,
  `application_no` int(11) NOT NULL,
  `appl_id` int(11) NOT NULL,
  `invoice_no` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `stages` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `other_charges` decimal(10,2) DEFAULT NULL,
  `amount` decimal(10,2) NOT NULL,
  `cgst_amount` decimal(10,2) NOT NULL,
  `sgst_amount` decimal(10,2) NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `total_amount_word` varchar(90) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `total_tax_amount` decimal(10,2) NOT NULL,
  `Date` date NOT NULL,
  `particular` varchar(100) NOT NULL,
  `numtowords` varchar(100) NOT NULL,
  `status` varchar(45) NOT NULL,
  `login_id` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `late_interest_tbl`
--

CREATE TABLE `late_interest_tbl` (
  `id` int(11) NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `stage` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `interest_amount` decimal(10,2) NOT NULL,
  `pc_interest` decimal(4,2) NOT NULL,
  `delay_days` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `license_tbl`
--

CREATE TABLE `license_tbl` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `license_no` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `client_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `project_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `location_tbl`
--

CREATE TABLE `location_tbl` (
  `id` int(11) NOT NULL,
  `location` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `location_tbl`
--

INSERT INTO `location_tbl` (`id`, `location`) VALUES
(1, 'Near By Pass Road, Khajurikala'),
(2, 'Near Vidhyasagar Institute of Bhopal');

-- --------------------------------------------------------

--
-- Table structure for table `other_charges`
--

CREATE TABLE `other_charges` (
  `Id` int(11) NOT NULL,
  `charge_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `charge_amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `other_charges`
--

INSERT INTO `other_charges` (`Id`, `charge_name`, `charge_amount`) VALUES
(1, '5 Year Maintenance', '120000.00'),
(2, 'RWA Corpus Fund', '25000.00');

-- --------------------------------------------------------

--
-- Table structure for table `parking_tbl`
--

CREATE TABLE `parking_tbl` (
  `id` int(11) NOT NULL,
  `applicant_id` int(11) DEFAULT NULL,
  `project_id` int(11) NOT NULL,
  `block` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `unit_no` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parking_no` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `parking_type` enum('OPEN','COVERED','','') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'COVERED',
  `price` decimal(10,2) NOT NULL,
  `remark` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `parking_tbl`
--

INSERT INTO `parking_tbl` (`id`, `applicant_id`, `project_id`, `block`, `type`, `unit_no`, `parking_no`, `parking_type`, `price`, `remark`) VALUES
(1, 267, 1, 'Phase-2', 'Flat', 'GF-2', 'P-1', 'COVERED', '150000.00', '25 covered parking'),
(2, 268, 1, 'Phase-2', 'Flat', 'GF-1', 'P-2', 'COVERED', '150000.00', '25 covered parking'),
(3, 269, 1, 'Phase-2', 'Flat', 'FF-103', 'P-3', 'COVERED', '150000.00', '25 covered parking'),
(4, NULL, 1, 'Phase-2', 'Flat', NULL, 'P-4', 'COVERED', '150000.00', '25 covered parking'),
(5, NULL, 1, 'Phase-2', 'Flat', NULL, 'P-5', 'COVERED', '150000.00', '25 covered parking'),
(6, NULL, 1, 'Phase-2', 'Flat', NULL, 'P-6', 'COVERED', '150000.00', '25 covered parking'),
(7, NULL, 1, 'Phase-2', 'Flat', NULL, 'P-7', 'COVERED', '150000.00', '25 covered parking'),
(8, NULL, 1, 'Phase-2', 'Flat', NULL, 'P-8', 'COVERED', '150000.00', '25 covered parking'),
(9, NULL, 1, 'Phase-2', 'Flat', NULL, 'P-9', 'COVERED', '150000.00', '25 covered parking'),
(10, NULL, 1, 'Phase-2', 'Flat', NULL, 'P-10', 'COVERED', '150000.00', '25 covered parking'),
(11, NULL, 1, 'Phase-2', 'Flat', NULL, 'P-11', 'COVERED', '150000.00', '25 covered parking'),
(12, NULL, 1, 'Phase-2', 'Flat', NULL, 'P-12', 'COVERED', '150000.00', '25 covered parking'),
(13, NULL, 1, 'Phase-2', 'Flat', NULL, 'P-13', 'COVERED', '150000.00', '25 covered parking'),
(14, NULL, 1, 'Phase-2', 'Flat', NULL, 'P-14', 'COVERED', '150000.00', '25 covered parking'),
(15, NULL, 1, 'Phase-2', 'Flat', NULL, 'P-15', 'COVERED', '150000.00', '25 covered parking'),
(16, NULL, 1, 'Phase-2', 'Flat', NULL, 'P-16', 'COVERED', '150000.00', '25 covered parking'),
(17, NULL, 1, 'Phase-2', 'Flat', NULL, 'P-17', 'COVERED', '150000.00', '25 covered parking'),
(18, NULL, 1, 'Phase-2', 'Flat', NULL, 'P-18', 'COVERED', '150000.00', '25 covered parking'),
(19, NULL, 1, 'Phase-2', 'Flat', NULL, 'P-19', 'COVERED', '150000.00', '25 covered parking'),
(20, NULL, 1, 'Phase-2', 'Flat', NULL, 'P-20', 'COVERED', '150000.00', '25 covered parking'),
(21, NULL, 1, 'Phase-2', 'Flat', NULL, 'P-21', 'COVERED', '150000.00', '25 covered parking'),
(22, NULL, 1, 'Phase-2', 'Flat', NULL, 'P-22', 'COVERED', '150000.00', '25 covered parking'),
(23, NULL, 1, 'Phase-2', 'Flat', NULL, 'P-23', 'COVERED', '150000.00', '25 covered parking'),
(24, NULL, 1, 'Phase-2', 'Flat', NULL, 'P-24', 'COVERED', '150000.00', '25 covered parking'),
(25, NULL, 1, 'Phase-2', 'Flat', NULL, 'P-25', 'COVERED', '150000.00', '25 covered parking'),
(26, 267, 1, 'Phase-1', 'Flat', 'GF-2', 'P-1', 'COVERED', '120000.00', 'remark'),
(27, 268, 1, 'Phase-1', 'Flat', 'GF-1', 'P-2', 'COVERED', '120000.00', 'remark'),
(28, 269, 1, 'Phase-1', 'Flat', 'FF-103', 'P-3', 'COVERED', '120000.00', 'remark'),
(29, NULL, 1, 'Phase-1', 'Flat', NULL, 'P-4', 'COVERED', '120000.00', 'remark'),
(30, NULL, 1, 'Phase-1', 'Flat', NULL, 'P-5', 'COVERED', '120000.00', 'remark');

-- --------------------------------------------------------

--
-- Table structure for table `payment_dtls_tbl`
--

CREATE TABLE `payment_dtls_tbl` (
  `id` int(11) NOT NULL,
  `first_appl_id` int(11) NOT NULL,
  `appl_name` varchar(45) CHARACTER SET utf8 NOT NULL,
  `unit_no` varchar(45) NOT NULL,
  `project_name` varchar(45) NOT NULL,
  `type` varchar(45) NOT NULL,
  `stages` varchar(45) NOT NULL,
  `other_charges` decimal(10,2) DEFAULT NULL,
  `receipt_no` int(11) NOT NULL,
  `Date` date NOT NULL,
  `cheque_cash` varchar(255) NOT NULL,
  `bank_dtls` varchar(45) DEFAULT NULL,
  `payment_mode` varchar(255) NOT NULL,
  `payment_status` varchar(45) NOT NULL,
  `amount_paid` decimal(10,2) NOT NULL,
  `due_amount` decimal(10,2) DEFAULT NULL,
  `numtowords` varchar(100) NOT NULL,
  `payment_dt` date NOT NULL,
  `reg_status` varchar(30) DEFAULT NULL,
  `login_id` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment_receipt`
--

CREATE TABLE `payment_receipt` (
  `id` int(11) NOT NULL,
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
  `login_id` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `payment_receipt`
--

INSERT INTO `payment_receipt` (`id`, `receipt_no`, `unit_no`, `stage`, `appl_id`, `name`, `installment_no`, `amount`, `cgst`, `sgst`, `service_tax`, `advance`, `arrears`, `other_charges`, `mode_of_payment`, `cheque_date`, `payment_mode_no`, `drawn_on`, `deposite_date`, `stage_actual_amt`, `stage_due_amt`, `stage_adv_amt`, `descreption`, `reg_status`, `login_id`) VALUES
(1, '109986', 'GF-11', 'BOOKING', '200', 'Ranjan Shah', '-', '89285.71', '5357.14', '5357.14', NULL, '100000.00', '-', '-', 'Cheque', '2018-02-28', '999', 'UCO Bank', '2018-02-28', '110306.28', '10306.28', '0.00', '-', 'UNREGISTER', '335'),
(2, '109987', 'GF-11', 'Excavation Work', '200', 'Ranjan Shah', '-', '107689.79', '6461.39', '6461.39', NULL, '120612.56', '-', '-', 'Cheque', '2018-02-08', '6666', 'Indian Bank', '2018-02-28', '120612.56', '0.00', '0.00', '-', 'UNREGISTER', '335'),
(3, '109988', 'H-101', 'BOOKING', '207', 'Phaseone Duplex', '-', '621542.99', '37292.58', '37292.58', NULL, '696128.15', '-', '-', 'Cheque', '2018-03-02', '0022', 'UCO Bank', '2018-03-05', '696128.15', '0.00', '0.00', '-', 'UNREGISTER', '335'),
(4, '109991', 'H-102', 'BOOKING', '208', 'Phaseone Duplex Two', '-', '310714.29', '18642.86', '18642.86', NULL, '348000.00', '-', '-', 'Cheque', '2018-03-02', '0025', 'UCO Bank', '2018-03-05', '348000.00', '0.00', '0.00', 'Part Payment', 'UNREGISTER', '335'),
(5, '109998', 'H-57', 'BOOKING', '220', 'Raaj Sahu', '', '71428.57', '4285.71', '4285.71', NULL, '80000.00', '', '', 'Cheque', '2018-03-05', '362514', 'Bank of India', '2018-03-07', '381500.00', '301500.00', '0.00', '-', 'UNREGISTER', '335'),
(6, '109999', 'H-57', 'PLINTH', '220', 'Raaj Sahu', '', '2183928.57', '131035.71', '131035.71', NULL, '2446000.00', '', '', 'Cheque', '2018-03-07', '000145', 'Bank of India', '2018-03-07', '1446000.00', '0.00', '1000000.00', '-', 'UNREGISTER', '335'),
(7, '110000', 'GF-1', 'BOOKING', '206', 'Tanu', '', '6071.43', '364.29', '364.29', NULL, '6800.00', '', '', 'Cheque', '2018-02-08', '001236', 'Bank of India', '2018-03-07', '176800.00', '170000.00', '0.00', '-', 'UNREGISTER', '335'),
(8, '110001', 'H-74', 'Road Development and Surface  Drain Network', '222', 'Waseem', '', '44642.86', '2678.57', '2678.57', NULL, '50000.00', '', '', 'Cheque', '2018-03-06', '00236', 'Bank of India', '2018-03-07', '250000.00', '200000.00', '0.00', '-', 'UNREGISTER', '335'),
(9, '110002', 'H-253', 'FOUNDATION', '205', 'Vinay Kumar', '-', '97002.62', '0.00', '0.00', '2997.38', '100000.00', '-', '-', 'Cheque', '2013-07-05', '0098', 'Punjab National Bank', '2018-03-08', '870385.77', '770385.77', '0.00', 'Part Payment', 'REVERTED', '335'),
(10, '110005', 'H-233', 'BOOKING', '235', 'Mohit Advani Duplex', '1', '446428.57', '26785.71', '26785.71', '0.00', '500000.00', '-', '-', 'Cheque', '2018-03-09', '10230', 'Bank of India', '2018-03-09', '600000.00', '100000.00', '0.00', '1st installment given ', 'UNREGISTER', '335'),
(11, '110008', 'H-233', 'PAINTING/FINISHING', '235', 'Mohit Advani Duplex', '2', '4464285.71', '267857.14', '267857.14', '0.00', '5000000.00', '-', '-', 'Cheque', '2018-03-09', '1020306', 'Bank of Baroda', '2018-03-09', '4900000.00', '0.00', '100000.00', '2nnd installment', 'UNREGISTER', '335'),
(12, '110009', 'H-233', 'POSSESSION', '235', 'Mohit Advani Duplex', '3', '446428.57', '26785.71', '26785.71', '0.00', '500000.00', '-', '-', 'Cheque', '2018-03-09', '1145', 'Bank of Baroda', '2018-03-09', '500000.00', '0.00', '0.00', '', 'UNREGISTER', '335'),
(13, '110010', 'GF-4', 'BOOKING', '236', 'Vicky Ramchandani Flat', '-', '254589.78', '15275.39', '15275.39', '0.00', '285140.55', '-', '-', 'Cheque', '2018-03-09', '102030', 'Bank of Baroda', '2018-03-09', '285140.55', '0.00', '0.00', 'Booking amount paid ', 'UNREGISTER', '335'),
(14, '110013', 'GF-4', 'PLINTH', '236', 'Vicky Ramchandani Flat', '2', '865536.49', '51932.19', '51932.19', '0.00', '969400.87', '-', '-', 'Cheque', '1970-01-01', '102030', 'Bank of Baroda', '2018-03-09', '969477.87', '77.00', '0.00', '', 'UNREGISTER', '335'),
(15, '110014', 'GF-4', 'PLINTH', '236', 'Vicky Ramchandani Flat', '1', '68.75', '4.13', '4.13', '0.00', '77.00', '-', '-', 'Cheque', '2018-03-09', '10230', 'Bank of Baroda', '2018-03-09', '77.00', '0.00', '0.00', '-', 'UNREGISTER', '335'),
(16, '110015', 'GF-4', 'POSSESSION', '236', 'Vicky Ramchandani Flat', '3', '1603915.63', '96234.94', '96234.94', '0.00', '1796385.51', '-', '-', 'Demand Draft', '2018-03-09', '12036', 'Bank of Baroda', '2018-03-09', '1796385.51', '0.00', '0.00', 'final possision ', 'UNREGISTER', '335'),
(17, '110016', 'GF-5', 'BOOKING', '237', 'Sumit', '01', '151785.71', '9107.14', '9107.14', '0.00', '170000.00', '-', '-', 'Cheque', '2018-03-09', '102030', 'Bank of Baroda', '2018-03-09', '170000.00', '0.00', '0.00', '1st installment', 'UNREGISTER', '335'),
(18, '110017', 'GF-5', 'BRICK WORK', '237', 'Sumit', '-', '1151785.71', '69107.14', '69107.14', '0.00', '1290000.00', '-', '-', 'Cheque', '2018-03-09', '102030', 'Bank of Baroda', '2018-03-09', '1190000.00', '0.00', '100000.00', '', 'UNREGISTER', '335'),
(19, '110018', 'GF-5', 'POSSESSION', '237', 'Sumit', '-', '205357.14', '12321.43', '12321.43', '0.00', '230000.00', '-', '-', 'Cheque', '1970-01-01', '10204', 'Bank of Baroda', '2018-03-09', '240000.00', '10000.00', '0.00', '1000 remaining ', 'UNREGISTER', '335'),
(20, '110019', 'GF-5', 'POSSESSION', '237', 'Sumit', '-', '8928.57', '535.71', '535.71', '0.00', '10000.00', '-', '-', 'Cheque', '2018-03-09', '789', 'Bank of Baroda', '2018-03-09', '10000.00', '0.00', '0.00', '', 'UNREGISTER', '335'),
(21, '110020', 'H-76', 'Road Development and Surface  Drain Network', '244', 'Phase Two Shop', '1', '223214.29', '13392.86', '13392.86', '0.00', '250000.00', '-', '-', 'Cheque', '2018-03-10', '10230', 'Bank of Baroda', '2018-03-10', '250111.60', '111.60', '0.00', '1st installment ', 'UNREGISTER', '335'),
(22, '110021', 'H-81', 'Road Development and Surface  Drain Network', '249', 'Veena Gyanchandani', '-', '223214.29', '13392.86', '13392.86', NULL, '250000.00', '-', '-', 'Cheque', '2018-03-10', '102030', 'Indian Overseas Bank', '2018-03-10', '250000.00', '0.00', '0.00', '', 'UNREGISTER', '335'),
(23, '110022', 'H-81', 'Electrical Work', '249', 'Veena Gyanchandani', '-', '1116071.43', '66964.29', '66964.29', NULL, '1250000.00', '-', '-', 'Demand Draft', '2018-03-10', '122', 'Bank of India', '2018-03-10', '1250000.00', '0.00', '0.00', '', 'UNREGISTER', '335'),
(24, '110023', 'H-81', 'Sewer Line Network', '249', 'Veena Gyanchandani', '-', '625000.00', '37500.00', '37500.00', NULL, '700000.00', '-', '-', 'Cheque', '2018-03-10', '1010', 'Bank of Baroda', '2018-03-10', '750000.00', '50000.00', '0.00', '', 'UNREGISTER', '335'),
(25, '110024', 'H-81', 'Water Supply and Garden Network', '249', 'Veena Gyanchandani', '-', '267857.14', '16071.43', '16071.43', NULL, '300000.00', '-', '-', 'Cheque', '2018-03-10', '102030', 'Corporation Bank', '2018-03-10', '300000.00', '0.00', '0.00', '-', 'UNREGISTER', '335'),
(26, '110025', 'H-313', 'PLOT REGISTRY', '251', 'Ashwin Sir', '-', '1071355.36', '64281.32', '64281.32', '0.00', '1199918.00', '-', '-', 'Cheque', '2018-03-07', '98', 'IDBI Bank', '2018-03-22', '1199918.00', '0.00', '0.00', '-', 'UNREGISTER', '335'),
(27, '110026', 'H-313', 'BOOKING', '251', 'Ashwin Sir', '-', '5357142.86', '321428.57', '321428.57', '0.00', '6000000.00', '-', '-', 'Cheque', '2018-03-22', '6666', 'Oriental Bank of Commerce', '2018-03-22', '1309909.80', '0.00', '4690090.20', '-', 'UNREGISTER', '335'),
(28, '110029', 'H-85', 'PLOT REGISTRY', '252', 'Phase One Duplex Updated', '-', '3108366.87', '186502.01', '186502.01', '0.00', '3481370.89', '-', '-', 'Cheque', '2018-03-08', '99', 'UCO Bank', '2018-03-22', '3481372.89', '2.00', '0.00', '-', 'UNREGISTER', '335'),
(29, '110030', 'H-59', 'BOOKING', '229', '', '', '108225.00', '6493.50', '6493.50', '0.00', '121212.00', '', '', 'NEFT', '2018-03-08', '7', 'UCO Bank', '2018-03-23', '381522.75', '260310.75', '0.00', 'fgsdg', 'UNREGISTER', '335'),
(30, '110031', 'H-234', 'BOOKING', '254', 'Nirbhay Singh Chouhan', '1', '340625.67', '20437.54', '20437.54', '0.00', '381500.75', '-', '-', 'NEFT', '2018-03-23', 'NEFT Payment', 'Bank of Baroda', '2018-03-23', '381522.75', '22.00', '0.00', 'First Installment ', 'UNREGISTER', '335'),
(31, '110034', 'H-234', 'BOOKING', '254', 'Nirbhay Singh Chouhan', '-', '9.82', '0.59', '0.59', '0.00', '11.00', '-', '-', 'Cheque', '2018-03-23', '1010', 'Bank of Baroda', '2018-03-23', '22.00', '11.00', '0.00', '', 'UNREGISTER', '335'),
(33, '110036', 'H-255', 'PLOT REGISTRY', '255', 'Shrinkhla Sharma', '-', '2678571.43', '160714.29', '160714.29', '0.00', '3000000.00', '-', '-', 'Cheque', '2018-03-24', '999', 'Oriental Bank of Commerce', '2018-03-24', '3481543.06', '481543.06', '0.00', '-', 'UNREGISTER', '335'),
(34, '110037', 'H-255', 'PLOT REGISTRY', '256', 'Shrinkhla Sharma', '-', '429949.16', '25796.95', '25796.95', '0.00', '481543.06', '-', '-', 'Cheque', '2018-03-24', '102030', 'Bank of Baroda', '2018-03-24', '481543.06', '0.00', '0.00', '', 'UNREGISTER', '335'),
(35, '110038', 'H-257', 'PLOT REGISTRY', '259', 'Pooja Gaur', '101', '1339285.71', '80357.14', '80357.14', '0.00', '1500000.00', '-', '-', 'Demand Draft', '2018-03-24', '102030', 'Bank of Baroda', '2018-03-24', '1500000.00', '0.00', '0.00', '', 'UNREGISTER', '335'),
(40, '110043', 'H-82', 'Road Development and Surface  Drain Network', '261', 'Roshni Kulhare', '-', '223214.29', '13392.86', '13392.86', '0.00', '250000.00', '-', '-', 'Cheque', '2018-03-24', '102', 'Bank of Baroda', '2018-03-24', '250111.60', '111.60', '0.00', '1St amount', 'REVERTED', '335'),
(41, '110044', 'H-82', 'Electrical Work', '261', 'Roshni Kulhare', '2', '1116669.29', '67000.16', '67000.16', '0.00', '1250669.60', '-', '-', 'Cheque', '2018-03-23', '1452', 'Bank of Baroda', '2018-03-24', '1250669.60', '0.00', '0.00', '2nd installment', 'UNREGISTER', '335'),
(42, '110045', 'H-82', 'Sewer Line Network', '261', 'Roshni Kulhare', '3', '625000.71', '37500.04', '37500.04', '0.00', '700000.80', '-', '-', 'Cheque', '2018-03-24', '1020', 'Bank of Baroda', '2018-03-24', '750334.80', '50334.00', '0.00', '', 'UNREGISTER', '335'),
(43, '110046', 'H-82', 'Water Supply and Garden Network', '261', 'Roshni Kulhare', '-', '268255.00', '16095.30', '16095.30', '0.00', '300445.60', '-', '-', 'Cheque', '2018-03-23', '102', 'Bank of India', '2018-03-24', '300445.60', '0.00', '0.00', 'FINAL PAYMENT', 'UNREGISTER', '335'),
(48, '110051', 'H-258', 'BOOKING', '260', 'Avinash Verma', '-', '89285.71', '5357.14', '5357.14', '0.00', '100000.00', '-', '-', 'Demand Draft', '2018-03-25', '101020', 'Bank of Baroda', '2018-03-25', '150000.00', '50000.00', '0.00', '', 'UNREGISTER', '335'),
(49, '110052', 'H-258', 'PLOT REGISTRY', '260', 'Avinash Verma', '-', '1339285.71', '80357.14', '80357.14', '0.00', '1500000.00', '-', '-', 'Cheque', '2018-03-25', '102030', 'Bank of Baroda', '2018-03-25', '1550000.00', '50000.00', '0.00', '', 'UNREGISTER', '335'),
(50, '110062', 'H-235', 'BOOKING', '264', 'NItin Motwani', '-', '267857.14', '16071.43', '16071.43', '0.00', '300000.00', '-', '-', 'Cheque', '2018-03-27', '6666', 'Indian Bank', '2018-03-27', '381522.75', '81522.75', '0.00', '-', 'REVERTED', '335'),
(51, '110063', 'H-235', 'BOOKING', '264', 'NItin Motwani', '-', '267857.14', '16071.43', '16071.43', '0.00', '300000.00', '-', '-', 'Cheque', '2018-03-27', '99', 'Oriental Bank of Commerce', '2018-03-27', '381522.75', '81522.75', '0.00', '-', 'REVERTED', '335'),
(52, '110074', 'H-230', 'PLOT REGISTRY', '253', 'Phase One Duplex Two', '-', '3108363.59', '186501.82', '186501.82', '0.00', '3481367.22', '-', '-', 'Cheque', '2018-03-27', '1020', 'Bank of Baroda', '2018-03-27', '3481367.22', '0.00', '0.00', '', 'UNREGISTER', '335'),
(53, '110075', 'H-235', 'FOUNDATION', '264', 'NItin Motwani', '-', '851613.29', '51096.80', '51096.80', '0.00', '953806.88', '-', '-', 'Cheque', '2018-03-27', '101010', 'Indian Overseas Bank', '2018-03-27', '953806.88', '0.00', '0.00', '', 'UNREGISTER', '335'),
(54, '110080', 'GF-2', 'BOOKING', 'NULL', 'Dinesh Doultani', '-', '256424.50', '15385.47', '15385.47', '0.00', '287195.44', '-', '-', 'Demand Draft', '2018-03-27', '102', 'Bank of Baroda', '2018-03-27', '287195.44', '0.00', '0.00', '', 'UNREGISTER', '335'),
(55, '110081', 'GF-2', 'BOOKING', 'NULL', 'Dinesh Doultani', '1', '256424.50', '15385.47', '15385.47', '0.00', '287195.44', '1', '1', 'Cheque', '2018-03-27', '1020', 'Bank of Baroda', '2018-03-27', '287195.44', '0.00', '0.00', '', 'UNREGISTER', '335'),
(56, '110082', 'GF-2', 'BOOKING', 'NULL', 'Dinesh Doultani', '102', '256424.50', '15385.47', '15385.47', '0.00', '287195.44', '-', '-', 'Cheque', '2018-03-27', '102030', 'Bank of Baroda', '2018-03-27', '287195.44', '0.00', '0.00', '', 'UNREGISTER', '335'),
(57, '110083', 'GF-1', 'FIRST FLOOR SLAB', '268', 'Vandana Sharma', '101', '814785.71', '48887.14', '48887.14', '0.00', '912560.00', '10', '0', 'Demand Draft', '2018-03-27', '1010', 'Bank of Baroda', '2018-03-27', '912560.00', '0.00', '0.00', '', 'UNREGISTER', '335'),
(58, '110084', 'FF-103', 'BOOKING', '269', 'Raj Kumar Sharma', '1', '157936.75', '9476.20', '9476.20', '0.00', '176889.16', '-', '-', 'Cheque', '2018-03-27', '102', 'Bank of India', '2018-03-27', '176889.16', '0.00', '0.00', '', 'UNREGISTER', '335');

-- --------------------------------------------------------

--
-- Table structure for table `payment_stages_tbl`
--

CREATE TABLE `payment_stages_tbl` (
  `id` int(11) NOT NULL,
  `stage` varchar(100) NOT NULL,
  `step_no` int(10) NOT NULL,
  `project_id` int(11) NOT NULL,
  `block` varchar(45) NOT NULL,
  `type` varchar(45) NOT NULL,
  `category` varchar(30) NOT NULL,
  `unit_no` varchar(45) NOT NULL,
  `payable_amt` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_stages_tbl`
--

INSERT INTO `payment_stages_tbl` (`id`, `stage`, `step_no`, `project_id`, `block`, `type`, `category`, `unit_no`, `payable_amt`) VALUES
(1, 'BOOKING', 1, 2, 'Phase-1', 'Duplex', 'HIG', 'H-123', '152500.00'),
(2, 'FOUNDATION', 2, 2, 'Phase-1', 'Duplex', 'HIG', 'H-123', '228750.00'),
(3, 'PLINTH', 3, 2, 'Phase-1', 'Duplex', 'HIG', 'H-123', '228750.00'),
(4, 'GF SLAB', 4, 2, 'Phase-1', 'Duplex', 'HIG', 'H-123', '228750.00'),
(5, 'FF SLAB', 5, 2, 'Phase-1', 'Duplex', 'HIG', 'H-123', '152500.00'),
(6, 'BRICK WORK', 6, 2, 'Phase-1', 'Duplex', 'HIG', 'H-123', '122000.00'),
(7, 'PLASTER WORK', 7, 2, 'Phase-1', 'Duplex', 'HIG', 'H-123', '122000.00'),
(8, 'PAINTING/FINISHING', 8, 2, 'Phase-1', 'Duplex', 'HIG', 'H-123', '137250.00'),
(9, 'POSSESSION', 9, 2, 'Phase-1', 'Duplex', 'HIG', 'H-123', '152500.00'),
(10, 'BOOKING', 1, 2, 'Phase-1', 'Duplex', 'HIG', 'H-101', '348128.15'),
(11, 'FOUNDATION', 2, 2, 'Phase-1', 'Duplex', 'HIG', 'H-101', '522192.23'),
(12, 'PLINTH', 3, 2, 'Phase-1', 'Duplex', 'HIG', 'H-101', '522192.23'),
(13, 'GF SLAB', 4, 2, 'Phase-1', 'Duplex', 'HIG', 'H-101', '522192.23'),
(14, 'FF SLAB', 5, 2, 'Phase-1', 'Duplex', 'HIG', 'H-101', '348128.15'),
(15, 'BRICK WORK', 6, 2, 'Phase-1', 'Duplex', 'HIG', 'H-101', '278502.52'),
(16, 'PLASTER WORK', 7, 2, 'Phase-1', 'Duplex', 'HIG', 'H-101', '278502.52'),
(17, 'PAINTING/FINISHING', 8, 2, 'Phase-1', 'Duplex', 'HIG', 'H-101', '313315.34'),
(18, 'POSSESSION', 9, 2, 'Phase-1', 'Duplex', 'HIG', 'H-101', '348128.15'),
(19, 'BOOKING', 1, 2, 'Phase-1', 'Duplex', 'HIG', 'H-254', '348000.00'),
(20, 'FOUNDATION', 2, 2, 'Phase-1', 'Duplex', 'HIG', 'H-254', '522000.00'),
(21, 'PLINTH', 3, 2, 'Phase-1', 'Duplex', 'HIG', 'H-254', '522000.00'),
(22, 'GF SLAB', 4, 2, 'Phase-1', 'Duplex', 'HIG', 'H-254', '522000.00'),
(23, 'FF SLAB', 5, 2, 'Phase-1', 'Duplex', 'HIG', 'H-254', '348000.00'),
(24, 'BRICK WORK', 6, 2, 'Phase-1', 'Duplex', 'HIG', 'H-254', '278400.00'),
(25, 'PLASTER WORK', 7, 2, 'Phase-1', 'Duplex', 'HIG', 'H-254', '278400.00'),
(26, 'PAINTING/FINISHING', 8, 2, 'Phase-1', 'Duplex', 'HIG', 'H-254', '313200.00'),
(27, 'POSSESSION', 9, 2, 'Phase-1', 'Duplex', 'HIG', 'H-254', '348000.00'),
(28, 'BOOKING', 1, 2, 'Phase-1', 'Duplex', 'HIG', 'H-254', '348000.00'),
(29, 'FOUNDATION', 2, 2, 'Phase-1', 'Duplex', 'HIG', 'H-254', '522000.00'),
(30, 'PLINTH', 3, 2, 'Phase-1', 'Duplex', 'HIG', 'H-254', '522000.00'),
(31, 'GF SLAB', 4, 2, 'Phase-1', 'Duplex', 'HIG', 'H-254', '522000.00'),
(32, 'FF SLAB', 5, 2, 'Phase-1', 'Duplex', 'HIG', 'H-254', '348000.00'),
(33, 'BRICK WORK', 6, 2, 'Phase-1', 'Duplex', 'HIG', 'H-254', '278400.00'),
(34, 'PLASTER WORK', 7, 2, 'Phase-1', 'Duplex', 'HIG', 'H-254', '278400.00'),
(35, 'PAINTING/FINISHING', 8, 2, 'Phase-1', 'Duplex', 'HIG', 'H-254', '313200.00'),
(36, 'POSSESSION', 9, 2, 'Phase-1', 'Duplex', 'HIG', 'H-254', '348000.00'),
(37, 'BOOKING', 1, 2, 'Phase-1', 'Duplex', 'HIG', 'H-254', '348000.00'),
(38, 'FOUNDATION', 2, 2, 'Phase-1', 'Duplex', 'HIG', 'H-254', '522000.00'),
(39, 'PLINTH', 3, 2, 'Phase-1', 'Duplex', 'HIG', 'H-254', '522000.00'),
(40, 'GF SLAB', 4, 2, 'Phase-1', 'Duplex', 'HIG', 'H-254', '522000.00'),
(41, 'FF SLAB', 5, 2, 'Phase-1', 'Duplex', 'HIG', 'H-254', '348000.00'),
(42, 'BRICK WORK', 6, 2, 'Phase-1', 'Duplex', 'HIG', 'H-254', '278400.00'),
(43, 'PLASTER WORK', 7, 2, 'Phase-1', 'Duplex', 'HIG', 'H-254', '278400.00'),
(44, 'PAINTING/FINISHING', 8, 2, 'Phase-1', 'Duplex', 'HIG', 'H-254', '313200.00'),
(45, 'POSSESSION', 9, 2, 'Phase-1', 'Duplex', 'HIG', 'H-254', '348000.00'),
(46, 'BOOKING', 1, 1, 'Phase-2', 'Flat', 'EWS', 'GF-11', '110306.28'),
(47, 'Excavation Work', 2, 1, 'Phase-2', 'Flat', 'EWS', 'GF-11', '110306.28'),
(48, 'Foundation Work', 3, 1, 'Phase-2', 'Flat', 'EWS', 'GF-11', '132367.54'),
(49, 'First Floor Slab', 4, 1, 'Phase-2', 'Flat', 'EWS', 'GF-11', '88245.02'),
(50, 'Second Slab', 5, 1, 'Phase-2', 'Flat', 'EWS', 'GF-11', '55153.14'),
(51, 'First Floor Slab', 6, 1, 'Phase-2', 'Flat', 'EWS', 'GF-11', '55153.14'),
(52, 'Third Slab', 7, 1, 'Phase-2', 'Flat', 'EWS', 'GF-11', '55153.14'),
(53, 'Fourth Slab', 8, 1, 'Phase-2', 'Flat', 'EWS', 'GF-11', '55153.14'),
(54, 'Fifth Slab', 9, 1, 'Phase-2', 'Flat', 'EWS', 'GF-11', '55153.14'),
(55, 'Sixth Slab', 10, 1, 'Phase-2', 'Flat', 'EWS', 'GF-11', '55153.14'),
(56, 'Brick Work', 11, 1, 'Phase-2', 'Flat', 'EWS', 'GF-11', '55153.14'),
(57, 'Plaster Work', 12, 1, 'Phase-2', 'Flat', 'EWS', 'GF-11', '55153.14'),
(58, 'Fifth Slab', 13, 1, 'Phase-2', 'Flat', 'EWS', 'GF-11', '55153.14'),
(59, 'Flooring/Finishing Work', 14, 1, 'Phase-2', 'Flat', 'EWS', 'GF-11', '55153.14'),
(60, 'POSSESSION', 15, 1, 'Phase-2', 'Flat', 'EWS', 'GF-11', '110306.28'),
(61, 'BOOKING', 1, 2, 'Phase-1', 'Duplex', 'HIG', 'H-118', '348128.15'),
(62, 'FOUNDATION', 2, 2, 'Phase-1', 'Duplex', 'HIG', 'H-118', '522192.23'),
(63, 'PLINTH', 3, 2, 'Phase-1', 'Duplex', 'HIG', 'H-118', '522192.23'),
(64, 'GF SLAB', 4, 2, 'Phase-1', 'Duplex', 'HIG', 'H-118', '522192.23'),
(65, 'FF SLAB', 5, 2, 'Phase-1', 'Duplex', 'HIG', 'H-118', '348128.15'),
(66, 'BRICK WORK', 6, 2, 'Phase-1', 'Duplex', 'HIG', 'H-118', '278502.52'),
(67, 'PLASTER WORK', 7, 2, 'Phase-1', 'Duplex', 'HIG', 'H-118', '278502.52'),
(68, 'PAINTING/FINISHING', 8, 2, 'Phase-1', 'Duplex', 'HIG', 'H-118', '313315.34'),
(69, 'POSSESSION', 9, 2, 'Phase-1', 'Duplex', 'HIG', 'H-118', '348128.15'),
(70, 'BOOKING', 1, 1, 'Phase-2', 'Flat', 'EWS', 'GF-12', '110306.28'),
(71, 'EXCAVATION WORK', 2, 1, 'Phase-2', 'Flat', 'EWS', 'GF-12', '110306.28'),
(72, 'FOUNDATION', 3, 1, 'Phase-2', 'Flat', 'EWS', 'GF-12', '132367.54'),
(73, 'PLINTH', 4, 1, 'Phase-2', 'Flat', 'EWS', 'GF-12', '132367.54'),
(74, 'FIRST FLOOR SLAB', 5, 1, 'Phase-2', 'Flat', 'EWS', 'GF-12', '88245.02'),
(75, 'SECOND FLOOR SLAB', 6, 1, 'Phase-2', 'Flat', 'EWS', 'GF-12', '55153.14'),
(76, 'THIRD FLOOR SLAB', 7, 1, 'Phase-2', 'Flat', 'EWS', 'GF-12', '55153.14'),
(77, 'FOURTH FLOOR SLAB', 8, 1, 'Phase-2', 'Flat', 'EWS', 'GF-12', '55153.14'),
(78, 'FIFTH FLOOR SLAB', 9, 1, 'Phase-2', 'Flat', 'EWS', 'GF-12', '55153.14'),
(79, 'SIXTH FLOOR SLAB', 10, 1, 'Phase-2', 'Flat', 'EWS', 'GF-12', '55153.14'),
(80, 'SEVENTH FLOOR SLAB', 11, 1, 'Phase-2', 'Flat', 'EWS', 'GF-12', '55153.14'),
(81, 'BRICK WORK', 12, 1, 'Phase-2', 'Flat', 'EWS', 'GF-12', '55153.14'),
(82, 'PLASTER WORK', 13, 1, 'Phase-2', 'Flat', 'EWS', 'GF-12', '55153.14'),
(83, 'FLOORING AND FINISHING', 14, 1, 'Phase-2', 'Flat', 'EWS', 'GF-12', '55153.14'),
(84, 'POSSESSION', 15, 1, 'Phase-2', 'Flat', 'EWS', 'GF-12', '110306.28'),
(85, 'BOOKING', 1, 1, 'Phase-2', 'Flat', 'LIG', 'GF-7', '176889.16'),
(86, 'Excavation Work', 2, 1, 'Phase-2', 'Flat', 'LIG', 'GF-7', '176889.16'),
(87, 'Foundation Work', 3, 1, 'Phase-2', 'Flat', 'LIG', 'GF-7', '212266.99'),
(88, 'First Floor Slab', 4, 1, 'Phase-2', 'Flat', 'LIG', 'GF-7', '141511.33'),
(89, 'Second Slab.', 5, 1, 'Phase-2', 'Flat', 'LIG', 'GF-7', '88444.58'),
(90, 'First Floor Slab', 6, 1, 'Phase-2', 'Flat', 'LIG', 'GF-7', '88444.58'),
(91, 'Third Slab', 7, 1, 'Phase-2', 'Flat', 'LIG', 'GF-7', '88444.58'),
(92, 'Fourth Slab', 8, 1, 'Phase-2', 'Flat', 'LIG', 'GF-7', '88444.58'),
(93, 'Fifth Slab', 9, 1, 'Phase-2', 'Flat', 'LIG', 'GF-7', '88444.58'),
(94, 'Sixth Slab', 10, 1, 'Phase-2', 'Flat', 'LIG', 'GF-7', '88444.58'),
(95, 'Brick Work', 11, 1, 'Phase-2', 'Flat', 'LIG', 'GF-7', '88444.58'),
(96, 'Plaster Work', 12, 1, 'Phase-2', 'Flat', 'LIG', 'GF-7', '88444.58'),
(97, 'Fifth Slab', 13, 1, 'Phase-2', 'Flat', 'LIG', 'GF-7', '88444.58'),
(98, 'Flooring/Finishing Work', 14, 1, 'Phase-2', 'Flat', 'LIG', 'GF-7', '88444.58'),
(99, 'POSSESSION', 15, 1, 'Phase-2', 'Flat', 'LIG', 'GF-7', '176889.16'),
(100, 'BOOKING', 1, 1, 'Phase-2', 'Duplex', 'HIG', 'H-55', '381522.75'),
(101, 'FOUNDATION', 2, 1, 'Phase-2', 'Duplex', 'HIG', 'H-55', '572284.13'),
(102, 'PLINTH', 3, 1, 'Phase-2', 'Duplex', 'HIG', 'H-55', '572284.13'),
(103, 'GF SLAB', 4, 1, 'Phase-2', 'Duplex', 'HIG', 'H-55', '572284.13'),
(104, 'FF SLAB', 5, 1, 'Phase-2', 'Duplex', 'HIG', 'H-55', '381522.75'),
(105, 'BRICK WORK', 6, 1, 'Phase-2', 'Duplex', 'HIG', 'H-55', '305218.20'),
(106, 'PLASTER WORK', 7, 1, 'Phase-2', 'Duplex', 'HIG', 'H-55', '305218.20'),
(107, 'PAINTING/FINISHING', 8, 1, 'Phase-2', 'Duplex', 'HIG', 'H-55', '343370.48'),
(108, 'POSSESSION', 9, 1, 'Phase-2', 'Duplex', 'HIG', 'H-55', '381522.75'),
(109, 'BOOKING', 1, 2, 'Phase-1', 'Duplex', 'HIG', 'H-253', '348154.31'),
(110, 'FOUNDATION', 2, 2, 'Phase-1', 'Duplex', 'HIG', 'H-253', '522231.46'),
(111, 'PLINTH', 3, 2, 'Phase-1', 'Duplex', 'HIG', 'H-253', '522231.46'),
(112, 'GF SLAB', 4, 2, 'Phase-1', 'Duplex', 'HIG', 'H-253', '522231.46'),
(113, 'FF SLAB', 5, 2, 'Phase-1', 'Duplex', 'HIG', 'H-253', '348154.31'),
(114, 'BRICK WORK', 6, 2, 'Phase-1', 'Duplex', 'HIG', 'H-253', '278523.44'),
(115, 'PLASTER WORK', 7, 2, 'Phase-1', 'Duplex', 'HIG', 'H-253', '278523.44'),
(116, 'PAINTING/FINISHING', 8, 2, 'Phase-1', 'Duplex', 'HIG', 'H-253', '313338.88'),
(117, 'POSSESSION', 9, 2, 'Phase-1', 'Duplex', 'HIG', 'H-253', '348154.31'),
(118, 'BOOKING', 1, 1, 'Phase-2', 'Flat', 'LIG', 'GF-1', '176800.00'),
(119, 'EXCAVATION WORK', 2, 1, 'Phase-2', 'Flat', 'LIG', 'GF-1', '176800.00'),
(120, 'FOUNDATION', 3, 1, 'Phase-2', 'Flat', 'LIG', 'GF-1', '212160.00'),
(121, 'PLINTH', 4, 1, 'Phase-2', 'Flat', 'LIG', 'GF-1', '212160.00'),
(122, 'FIRST FLOOR SLAB', 5, 1, 'Phase-2', 'Flat', 'LIG', 'GF-1', '141440.00'),
(123, 'SECOND FLOOR SLAB', 6, 1, 'Phase-2', 'Flat', 'LIG', 'GF-1', '88400.00'),
(124, 'THIRD FLOOR SLAB', 7, 1, 'Phase-2', 'Flat', 'LIG', 'GF-1', '88400.00'),
(125, 'FOURTH FLOOR SLAB', 8, 1, 'Phase-2', 'Flat', 'LIG', 'GF-1', '88400.00'),
(126, 'FIFTH FLOOR SLAB', 9, 1, 'Phase-2', 'Flat', 'LIG', 'GF-1', '88400.00'),
(127, 'SIXTH FLOOR SLAB', 10, 1, 'Phase-2', 'Flat', 'LIG', 'GF-1', '88400.00'),
(128, 'SEVENTH FLOOR SLAB', 11, 1, 'Phase-2', 'Flat', 'LIG', 'GF-1', '88400.00'),
(129, 'BRICK WORK', 12, 1, 'Phase-2', 'Flat', 'LIG', 'GF-1', '88400.00'),
(130, 'PLASTER WORK', 13, 1, 'Phase-2', 'Flat', 'LIG', 'GF-1', '88400.00'),
(131, 'FLOORING AND FINISHING', 14, 1, 'Phase-2', 'Flat', 'LIG', 'GF-1', '88400.00'),
(132, 'POSSESSION', 15, 1, 'Phase-2', 'Flat', 'LIG', 'GF-1', '176800.00'),
(133, 'BOOKING', 1, 2, 'Phase-1', 'Duplex', 'HIG', 'H-101', '348000.00'),
(134, 'FOUNDATION', 2, 2, 'Phase-1', 'Duplex', 'HIG', 'H-101', '522000.00'),
(135, 'PLINTH', 3, 2, 'Phase-1', 'Duplex', 'HIG', 'H-101', '522000.00'),
(136, 'GF SLAB', 4, 2, 'Phase-1', 'Duplex', 'HIG', 'H-101', '522000.00'),
(137, 'FF SLAB', 5, 2, 'Phase-1', 'Duplex', 'HIG', 'H-101', '348000.00'),
(138, 'BRICK WORK', 6, 2, 'Phase-1', 'Duplex', 'HIG', 'H-101', '278400.00'),
(139, 'PLASTER WORK', 7, 2, 'Phase-1', 'Duplex', 'HIG', 'H-101', '278400.00'),
(140, 'PAINTING/FINISHING', 8, 2, 'Phase-1', 'Duplex', 'HIG', 'H-101', '313200.00'),
(141, 'POSSESSION', 9, 2, 'Phase-1', 'Duplex', 'HIG', 'H-101', '348000.00'),
(142, 'BOOKING', 1, 2, 'Phase-1', 'Duplex', 'HIG', 'H-102', '348000.00'),
(143, 'FOUNDATION', 2, 2, 'Phase-1', 'Duplex', 'HIG', 'H-102', '522000.00'),
(144, 'PLINTH', 3, 2, 'Phase-1', 'Duplex', 'HIG', 'H-102', '522000.00'),
(145, 'GF SLAB', 4, 2, 'Phase-1', 'Duplex', 'HIG', 'H-102', '522000.00'),
(146, 'FF SLAB', 5, 2, 'Phase-1', 'Duplex', 'HIG', 'H-102', '348000.00'),
(147, 'BRICK WORK', 6, 2, 'Phase-1', 'Duplex', 'HIG', 'H-102', '278400.00'),
(148, 'PLASTER WORK', 7, 2, 'Phase-1', 'Duplex', 'HIG', 'H-102', '278400.00'),
(149, 'PAINTING/FINISHING', 8, 2, 'Phase-1', 'Duplex', 'HIG', 'H-102', '313200.00'),
(150, 'POSSESSION', 9, 2, 'Phase-1', 'Duplex', 'HIG', 'H-102', '348000.00'),
(151, 'BOOKING', 1, 2, 'Phase-1', 'Duplex', 'HIG', 'H-103', '348100.00'),
(152, 'FOUNDATION', 2, 2, 'Phase-1', 'Duplex', 'HIG', 'H-103', '522150.00'),
(153, 'PLINTH', 3, 2, 'Phase-1', 'Duplex', 'HIG', 'H-103', '522150.00'),
(154, 'GF SLAB', 4, 2, 'Phase-1', 'Duplex', 'HIG', 'H-103', '522150.00'),
(155, 'FF SLAB', 5, 2, 'Phase-1', 'Duplex', 'HIG', 'H-103', '348100.00'),
(156, 'BRICK WORK', 6, 2, 'Phase-1', 'Duplex', 'HIG', 'H-103', '278480.00'),
(157, 'PLASTER WORK', 7, 2, 'Phase-1', 'Duplex', 'HIG', 'H-103', '278480.00'),
(158, 'PAINTING/FINISHING', 8, 2, 'Phase-1', 'Duplex', 'HIG', 'H-103', '313290.00'),
(159, 'POSSESSION', 9, 2, 'Phase-1', 'Duplex', 'HIG', 'H-103', '348100.00'),
(160, 'BOOKING', 1, 1, 'Phase-2', 'Duplex', 'HIG', 'H-57', '381500.00'),
(161, 'FOUNDATION', 2, 1, 'Phase-2', 'Duplex', 'HIG', 'H-57', '572250.00'),
(162, 'PLINTH', 3, 1, 'Phase-2', 'Duplex', 'HIG', 'H-57', '572250.00'),
(163, 'GF SLAB', 4, 1, 'Phase-2', 'Duplex', 'HIG', 'H-57', '572250.00'),
(164, 'FF SLAB', 5, 1, 'Phase-2', 'Duplex', 'HIG', 'H-57', '381500.00'),
(165, 'BRICK WORK', 6, 1, 'Phase-2', 'Duplex', 'HIG', 'H-57', '305200.00'),
(166, 'PLASTER WORK', 7, 1, 'Phase-2', 'Duplex', 'HIG', 'H-57', '305200.00'),
(167, 'PAINTING/FINISHING', 8, 1, 'Phase-2', 'Duplex', 'HIG', 'H-57', '343350.00'),
(168, 'POSSESSION', 9, 1, 'Phase-2', 'Duplex', 'HIG', 'H-57', '381500.00'),
(169, 'Road Development and Surface  Drain Network', 1, 1, 'Phase-2', 'Plot', 'Area', 'H-74', '250000.00'),
(170, 'Electrical Work', 2, 1, 'Phase-2', 'Plot', 'Area', 'H-74', '1250000.00'),
(171, 'Sewer Line Network', 3, 1, 'Phase-2', 'Plot', 'Area', 'H-74', '750000.00'),
(172, 'Water Supply and Garden Network', 4, 1, 'Phase-2', 'Plot', 'Area', 'H-74', '250000.00'),
(173, 'BOOKING', 1, 1, 'Phase-2', 'Flat', 'LIG', 'GF-2', '176889.16'),
(174, 'Excavation Work', 2, 1, 'Phase-2', 'Flat', 'LIG', 'GF-2', '176889.16'),
(175, 'Foundation Work', 3, 1, 'Phase-2', 'Flat', 'LIG', 'GF-2', '212266.99'),
(176, 'First Floor Slab', 4, 1, 'Phase-2', 'Flat', 'LIG', 'GF-2', '141511.33'),
(177, 'Second Slab.', 5, 1, 'Phase-2', 'Flat', 'LIG', 'GF-2', '88444.58'),
(178, 'First Floor Slab', 6, 1, 'Phase-2', 'Flat', 'LIG', 'GF-2', '88444.58'),
(179, 'Third Slab', 7, 1, 'Phase-2', 'Flat', 'LIG', 'GF-2', '88444.58'),
(180, 'Fourth Slab', 8, 1, 'Phase-2', 'Flat', 'LIG', 'GF-2', '88444.58'),
(181, 'Fifth Slab', 9, 1, 'Phase-2', 'Flat', 'LIG', 'GF-2', '88444.58'),
(182, 'Sixth Slab', 10, 1, 'Phase-2', 'Flat', 'LIG', 'GF-2', '88444.58'),
(183, 'Brick Work', 11, 1, 'Phase-2', 'Flat', 'LIG', 'GF-2', '88444.58'),
(184, 'Plaster Work', 12, 1, 'Phase-2', 'Flat', 'LIG', 'GF-2', '88444.58'),
(185, 'Fifth Slab', 13, 1, 'Phase-2', 'Flat', 'LIG', 'GF-2', '88444.58'),
(186, 'Flooring/Finishing Work', 14, 1, 'Phase-2', 'Flat', 'LIG', 'GF-2', '88444.58'),
(187, 'POSSESSION', 15, 1, 'Phase-2', 'Flat', 'LIG', 'GF-2', '176889.16'),
(188, 'BOOKING', 1, 1, 'Phase-2', 'Flat', 'EWS', 'GF-10', '110306.28'),
(189, 'EXCAVATION WORK', 2, 1, 'Phase-2', 'Flat', 'EWS', 'GF-10', '110306.28'),
(190, 'FOUNDATION', 3, 1, 'Phase-2', 'Flat', 'EWS', 'GF-10', '132367.54'),
(191, 'PLINTH', 4, 1, 'Phase-2', 'Flat', 'EWS', 'GF-10', '132367.54'),
(192, 'FIRST FLOOR SLAB', 5, 1, 'Phase-2', 'Flat', 'EWS', 'GF-10', '88245.02'),
(193, 'SECOND FLOOR SLAB', 6, 1, 'Phase-2', 'Flat', 'EWS', 'GF-10', '55153.14'),
(194, 'THIRD FLOOR SLAB', 7, 1, 'Phase-2', 'Flat', 'EWS', 'GF-10', '55153.14'),
(195, 'FOURTH FLOOR SLAB', 8, 1, 'Phase-2', 'Flat', 'EWS', 'GF-10', '55153.14'),
(196, 'FIFTH FLOOR SLAB', 9, 1, 'Phase-2', 'Flat', 'EWS', 'GF-10', '55153.14'),
(197, 'SIXTH FLOOR SLAB', 10, 1, 'Phase-2', 'Flat', 'EWS', 'GF-10', '55153.14'),
(198, 'SEVENTH FLOOR SLAB', 11, 1, 'Phase-2', 'Flat', 'EWS', 'GF-10', '55153.14'),
(199, 'BRICK WORK', 12, 1, 'Phase-2', 'Flat', 'EWS', 'GF-10', '55153.14'),
(200, 'PLASTER WORK', 13, 1, 'Phase-2', 'Flat', 'EWS', 'GF-10', '55153.14'),
(201, 'FLOORING AND FINISHING', 14, 1, 'Phase-2', 'Flat', 'EWS', 'GF-10', '55153.14'),
(202, 'POSSESSION', 15, 1, 'Phase-2', 'Flat', 'EWS', 'GF-10', '110306.28'),
(203, 'BOOKING', 1, 1, 'Phase-2', 'Flat', 'LIG', 'GF-7', '176889.16'),
(204, 'EXCAVATION WORK', 2, 1, 'Phase-2', 'Flat', 'LIG', 'GF-7', '176889.16'),
(205, 'FOUNDATION', 3, 1, 'Phase-2', 'Flat', 'LIG', 'GF-7', '212266.99'),
(206, 'PLINTH', 4, 1, 'Phase-2', 'Flat', 'LIG', 'GF-7', '212266.99'),
(207, 'FIRST FLOOR SLAB', 5, 1, 'Phase-2', 'Flat', 'LIG', 'GF-7', '141511.33'),
(208, 'SECOND FLOOR SLAB', 6, 1, 'Phase-2', 'Flat', 'LIG', 'GF-7', '88444.58'),
(209, 'THIRD FLOOR SLAB', 7, 1, 'Phase-2', 'Flat', 'LIG', 'GF-7', '88444.58'),
(210, 'FOURTH FLOOR SLAB', 8, 1, 'Phase-2', 'Flat', 'LIG', 'GF-7', '88444.58'),
(211, 'FIFTH FLOOR SLAB', 9, 1, 'Phase-2', 'Flat', 'LIG', 'GF-7', '88444.58'),
(212, 'SIXTH FLOOR SLAB', 10, 1, 'Phase-2', 'Flat', 'LIG', 'GF-7', '88444.58'),
(213, 'SEVENTH FLOOR SLAB', 11, 1, 'Phase-2', 'Flat', 'LIG', 'GF-7', '88444.58'),
(214, 'BRICK WORK', 12, 1, 'Phase-2', 'Flat', 'LIG', 'GF-7', '88444.58'),
(215, 'PLASTER WORK', 13, 1, 'Phase-2', 'Flat', 'LIG', 'GF-7', '88444.58'),
(216, 'FLOORING AND FINISHING', 14, 1, 'Phase-2', 'Flat', 'LIG', 'GF-7', '88444.58'),
(217, 'POSSESSION', 15, 1, 'Phase-2', 'Flat', 'LIG', 'GF-7', '176889.16'),
(218, 'BOOKING', 1, 1, 'Phase-2', 'Duplex', 'HIG', 'H-232', '381522.75'),
(219, 'FOUNDATION', 2, 1, 'Phase-2', 'Duplex', 'HIG', 'H-232', '572284.13'),
(220, 'PLINTH', 3, 1, 'Phase-2', 'Duplex', 'HIG', 'H-232', '572284.13'),
(221, 'GF SLAB', 4, 1, 'Phase-2', 'Duplex', 'HIG', 'H-232', '572284.13'),
(222, 'FF SLAB', 5, 1, 'Phase-2', 'Duplex', 'HIG', 'H-232', '381522.75'),
(223, 'BRICK WORK', 6, 1, 'Phase-2', 'Duplex', 'HIG', 'H-232', '305218.20'),
(224, 'PLASTER WORK', 7, 1, 'Phase-2', 'Duplex', 'HIG', 'H-232', '305218.20'),
(225, 'PAINTING/FINISHING', 8, 1, 'Phase-2', 'Duplex', 'HIG', 'H-232', '343370.48'),
(226, 'POSSESSION', 9, 1, 'Phase-2', 'Duplex', 'HIG', 'H-232', '381522.75'),
(227, 'BOOKING', 1, 1, 'Phase-2', 'Duplex', 'HIG', 'H-59', '381522.75'),
(228, 'FOUNDATION', 2, 1, 'Phase-2', 'Duplex', 'HIG', 'H-59', '572284.13'),
(229, 'PLINTH', 3, 1, 'Phase-2', 'Duplex', 'HIG', 'H-59', '572284.13'),
(230, 'GF SLAB', 4, 1, 'Phase-2', 'Duplex', 'HIG', 'H-59', '572284.13'),
(231, 'FF SLAB', 5, 1, 'Phase-2', 'Duplex', 'HIG', 'H-59', '381522.75'),
(232, 'BRICK WORK', 6, 1, 'Phase-2', 'Duplex', 'HIG', 'H-59', '305218.20'),
(233, 'PLASTER WORK', 7, 1, 'Phase-2', 'Duplex', 'HIG', 'H-59', '305218.20'),
(234, 'PAINTING/FINISHING', 8, 1, 'Phase-2', 'Duplex', 'HIG', 'H-59', '343370.48'),
(235, 'POSSESSION', 9, 1, 'Phase-2', 'Duplex', 'HIG', 'H-59', '381522.75'),
(236, 'Road Development and Surface  Drain Network', 1, 1, 'Phase-2', 'Plot', 'Area', 'H-75', '250111.60'),
(237, 'Electrical Work', 2, 1, 'Phase-2', 'Plot', 'Area', 'H-75', '1250558.00'),
(238, 'Sewer Line Network', 3, 1, 'Phase-2', 'Plot', 'Area', 'H-75', '750334.80'),
(239, 'Water Supply and Garden Network', 4, 1, 'Phase-2', 'Plot', 'Area', 'H-75', '250111.60'),
(240, 'BOOKING', 1, 1, 'Phase-2', 'Duplex', 'HIG', 'H-233', '600000.00'),
(241, 'FOUNDATION', 2, 1, 'Phase-2', 'Duplex', 'HIG', 'H-233', '900000.00'),
(242, 'PLINTH', 3, 1, 'Phase-2', 'Duplex', 'HIG', 'H-233', '900000.00'),
(243, 'GF SLAB', 4, 1, 'Phase-2', 'Duplex', 'HIG', 'H-233', '900000.00'),
(244, 'FF SLAB', 5, 1, 'Phase-2', 'Duplex', 'HIG', 'H-233', '600000.00'),
(245, 'BRICK WORK', 6, 1, 'Phase-2', 'Duplex', 'HIG', 'H-233', '480000.00'),
(246, 'PLASTER WORK', 7, 1, 'Phase-2', 'Duplex', 'HIG', 'H-233', '480000.00'),
(247, 'PAINTING/FINISHING', 8, 1, 'Phase-2', 'Duplex', 'HIG', 'H-233', '540000.00'),
(248, 'POSSESSION', 9, 1, 'Phase-2', 'Duplex', 'HIG', 'H-233', '600000.00'),
(249, 'BOOKING', 1, 1, 'Phase-2', 'Flat', 'LIG', 'GF-4', '285140.55'),
(250, 'EXCAVATION WORK', 2, 1, 'Phase-2', 'Flat', 'LIG', 'GF-4', '285140.55'),
(251, 'FOUNDATION', 3, 1, 'Phase-2', 'Flat', 'LIG', 'GF-4', '342168.66'),
(252, 'PLINTH', 4, 1, 'Phase-2', 'Flat', 'LIG', 'GF-4', '342168.66'),
(253, 'FIRST FLOOR SLAB', 5, 1, 'Phase-2', 'Flat', 'LIG', 'GF-4', '228112.44'),
(254, 'SECOND FLOOR SLAB', 6, 1, 'Phase-2', 'Flat', 'LIG', 'GF-4', '142570.28'),
(255, 'THIRD FLOOR SLAB', 7, 1, 'Phase-2', 'Flat', 'LIG', 'GF-4', '142570.28'),
(256, 'FOURTH FLOOR SLAB', 8, 1, 'Phase-2', 'Flat', 'LIG', 'GF-4', '142570.28'),
(257, 'FIFTH FLOOR SLAB', 9, 1, 'Phase-2', 'Flat', 'LIG', 'GF-4', '142570.28'),
(258, 'SIXTH FLOOR SLAB', 10, 1, 'Phase-2', 'Flat', 'LIG', 'GF-4', '142570.28'),
(259, 'SEVENTH FLOOR SLAB', 11, 1, 'Phase-2', 'Flat', 'LIG', 'GF-4', '142570.28'),
(260, 'BRICK WORK', 12, 1, 'Phase-2', 'Flat', 'LIG', 'GF-4', '142570.28'),
(261, 'PLASTER WORK', 13, 1, 'Phase-2', 'Flat', 'LIG', 'GF-4', '142570.28'),
(262, 'FLOORING AND FINISHING', 14, 1, 'Phase-2', 'Flat', 'LIG', 'GF-4', '142570.28'),
(263, 'POSSESSION', 15, 1, 'Phase-2', 'Flat', 'LIG', 'GF-4', '285140.55'),
(264, 'BOOKING', 1, 1, 'Phase-2', 'Flat', 'LIG', 'GF-5', '170000.00'),
(265, 'EXCAVATION WORK', 2, 1, 'Phase-2', 'Flat', 'LIG', 'GF-5', '170000.00'),
(266, 'FOUNDATION', 3, 1, 'Phase-2', 'Flat', 'LIG', 'GF-5', '204000.00'),
(267, 'PLINTH', 4, 1, 'Phase-2', 'Flat', 'LIG', 'GF-5', '136000.00'),
(268, 'FIRST FLOOR SLAB', 5, 1, 'Phase-2', 'Flat', 'LIG', 'GF-5', '85000.00'),
(269, 'SECOND FLOOR SLAB', 6, 1, 'Phase-2', 'Flat', 'LIG', 'GF-5', '85000.00'),
(270, 'THIRD FLOOR SLAB', 7, 1, 'Phase-2', 'Flat', 'LIG', 'GF-5', '85000.00'),
(271, 'FOURTH FLOOR SLAB', 8, 1, 'Phase-2', 'Flat', 'LIG', 'GF-5', '85000.00'),
(272, 'FIFTH FLOOR SLAB', 9, 1, 'Phase-2', 'Flat', 'LIG', 'GF-5', '85000.00'),
(273, 'SIXTH FLOOR SLAB', 10, 1, 'Phase-2', 'Flat', 'LIG', 'GF-5', '85000.00'),
(274, 'SEVENTH FLOOR SLAB', 11, 1, 'Phase-2', 'Flat', 'LIG', 'GF-5', '85000.00'),
(275, 'BRICK WORK', 12, 1, 'Phase-2', 'Flat', 'LIG', 'GF-5', '85000.00'),
(276, 'PLASTER WORK', 13, 1, 'Phase-2', 'Flat', 'LIG', 'GF-5', '85000.00'),
(277, 'FLOORING AND FINISHING', 14, 1, 'Phase-2', 'Flat', 'LIG', 'GF-5', '85000.00'),
(278, 'POSSESSION', 15, 1, 'Phase-2', 'Flat', 'LIG', 'GF-5', '170000.00'),
(279, 'BOOKING', 1, 1, 'Phase-2', 'Flat', 'EWS', 'GF-1', '110000.00'),
(280, 'EXCAVATION WORK', 2, 1, 'Phase-2', 'Flat', 'EWS', 'GF-1', '110000.00'),
(281, 'FOUNDATION', 3, 1, 'Phase-2', 'Flat', 'EWS', 'GF-1', '132000.00'),
(282, 'PLINTH', 4, 1, 'Phase-2', 'Flat', 'EWS', 'GF-1', '88000.00'),
(283, 'FIRST FLOOR SLAB', 5, 1, 'Phase-2', 'Flat', 'EWS', 'GF-1', '55000.00'),
(284, 'SECOND FLOOR SLAB', 6, 1, 'Phase-2', 'Flat', 'EWS', 'GF-1', '55000.00'),
(285, 'THIRD FLOOR SLAB', 7, 1, 'Phase-2', 'Flat', 'EWS', 'GF-1', '55000.00'),
(286, 'FOURTH FLOOR SLAB', 8, 1, 'Phase-2', 'Flat', 'EWS', 'GF-1', '55000.00'),
(287, 'FIFTH FLOOR SLAB', 9, 1, 'Phase-2', 'Flat', 'EWS', 'GF-1', '55000.00'),
(288, 'SIXTH FLOOR SLAB', 10, 1, 'Phase-2', 'Flat', 'EWS', 'GF-1', '55000.00'),
(289, 'SEVENTH FLOOR SLAB', 11, 1, 'Phase-2', 'Flat', 'EWS', 'GF-1', '55000.00'),
(290, 'BRICK WORK', 12, 1, 'Phase-2', 'Flat', 'EWS', 'GF-1', '55000.00'),
(291, 'PLASTER WORK', 13, 1, 'Phase-2', 'Flat', 'EWS', 'GF-1', '55000.00'),
(292, 'FLOORING AND FINISHING', 14, 1, 'Phase-2', 'Flat', 'EWS', 'GF-1', '55000.00'),
(293, 'POSSESSION', 15, 1, 'Phase-2', 'Flat', 'EWS', 'GF-1', '110000.00'),
(294, 'BOOKING', 1, 1, 'Phase-2', 'Flat', 'EWS', 'GF-3', '110306.28'),
(295, 'EXCAVATION WORK', 2, 1, 'Phase-2', 'Flat', 'EWS', 'GF-3', '110306.28'),
(296, 'FOUNDATION', 3, 1, 'Phase-2', 'Flat', 'EWS', 'GF-3', '132367.54'),
(297, 'PLINTH', 4, 1, 'Phase-2', 'Flat', 'EWS', 'GF-3', '88245.02'),
(298, 'FIRST FLOOR SLAB', 5, 1, 'Phase-2', 'Flat', 'EWS', 'GF-3', '55153.14'),
(299, 'SECOND FLOOR SLAB', 6, 1, 'Phase-2', 'Flat', 'EWS', 'GF-3', '55153.14'),
(300, 'THIRD FLOOR SLAB', 7, 1, 'Phase-2', 'Flat', 'EWS', 'GF-3', '55153.14'),
(301, 'FOURTH FLOOR SLAB', 8, 1, 'Phase-2', 'Flat', 'EWS', 'GF-3', '55153.14'),
(302, 'FIFTH FLOOR SLAB', 9, 1, 'Phase-2', 'Flat', 'EWS', 'GF-3', '55153.14'),
(303, 'SIXTH FLOOR SLAB', 10, 1, 'Phase-2', 'Flat', 'EWS', 'GF-3', '55153.14'),
(304, 'SEVENTH FLOOR SLAB', 11, 1, 'Phase-2', 'Flat', 'EWS', 'GF-3', '55153.14'),
(305, 'BRICK WORK', 12, 1, 'Phase-2', 'Flat', 'EWS', 'GF-3', '55153.14'),
(306, 'PLASTER WORK', 13, 1, 'Phase-2', 'Flat', 'EWS', 'GF-3', '55153.14'),
(307, 'FLOORING AND FINISHING', 14, 1, 'Phase-2', 'Flat', 'EWS', 'GF-3', '55153.14'),
(308, 'POSSESSION', 15, 1, 'Phase-2', 'Flat', 'EWS', 'GF-3', '110306.28'),
(309, 'BOOKING', 1, 1, 'Phase-2', 'Flat', 'EWS', 'FF-22', '110000.00'),
(310, 'EXCAVATION WORK', 2, 1, 'Phase-2', 'Flat', 'EWS', 'FF-22', '110000.00'),
(311, 'FOUNDATION', 3, 1, 'Phase-2', 'Flat', 'EWS', 'FF-22', '132000.00'),
(312, 'PLINTH', 4, 1, 'Phase-2', 'Flat', 'EWS', 'FF-22', '132000.00'),
(313, 'FIRST FLOOR SLAB', 5, 1, 'Phase-2', 'Flat', 'EWS', 'FF-22', '88000.00'),
(314, 'SECOND FLOOR SLAB', 6, 1, 'Phase-2', 'Flat', 'EWS', 'FF-22', '55000.00'),
(315, 'THIRD FLOOR SLAB', 7, 1, 'Phase-2', 'Flat', 'EWS', 'FF-22', '55000.00'),
(316, 'FOURTH FLOOR SLAB', 8, 1, 'Phase-2', 'Flat', 'EWS', 'FF-22', '55000.00'),
(317, 'FIFTH FLOOR SLAB', 9, 1, 'Phase-2', 'Flat', 'EWS', 'FF-22', '55000.00'),
(318, 'SIXTH FLOOR SLAB', 10, 1, 'Phase-2', 'Flat', 'EWS', 'FF-22', '55000.00'),
(319, 'SEVENTH FLOOR SLAB', 11, 1, 'Phase-2', 'Flat', 'EWS', 'FF-22', '55000.00'),
(320, 'BRICK WORK', 12, 1, 'Phase-2', 'Flat', 'EWS', 'FF-22', '55000.00'),
(321, 'PLASTER WORK', 13, 1, 'Phase-2', 'Flat', 'EWS', 'FF-22', '55000.00'),
(322, 'FLOORING AND FINISHING', 14, 1, 'Phase-2', 'Flat', 'EWS', 'FF-22', '55000.00'),
(323, 'POSSESSION', 15, 1, 'Phase-2', 'Flat', 'EWS', 'FF-22', '110000.00'),
(324, 'BOOKING', 1, 1, 'Phase-2', 'Flat', 'LIG', 'FF-101', '170000.00'),
(325, 'EXCAVATION WORK', 2, 1, 'Phase-2', 'Flat', 'LIG', 'FF-101', '170000.00'),
(326, 'FOUNDATION', 3, 1, 'Phase-2', 'Flat', 'LIG', 'FF-101', '204000.00'),
(327, 'PLINTH', 4, 1, 'Phase-2', 'Flat', 'LIG', 'FF-101', '204000.00'),
(328, 'FIRST FLOOR SLAB', 5, 1, 'Phase-2', 'Flat', 'LIG', 'FF-101', '136000.00'),
(329, 'SECOND FLOOR SLAB', 6, 1, 'Phase-2', 'Flat', 'LIG', 'FF-101', '85000.00'),
(330, 'THIRD FLOOR SLAB', 7, 1, 'Phase-2', 'Flat', 'LIG', 'FF-101', '85000.00'),
(331, 'FOURTH FLOOR SLAB', 8, 1, 'Phase-2', 'Flat', 'LIG', 'FF-101', '85000.00'),
(332, 'FIFTH FLOOR SLAB', 9, 1, 'Phase-2', 'Flat', 'LIG', 'FF-101', '85000.00'),
(333, 'SIXTH FLOOR SLAB', 10, 1, 'Phase-2', 'Flat', 'LIG', 'FF-101', '85000.00'),
(334, 'SEVENTH FLOOR SLAB', 11, 1, 'Phase-2', 'Flat', 'LIG', 'FF-101', '85000.00'),
(335, 'BRICK WORK', 12, 1, 'Phase-2', 'Flat', 'LIG', 'FF-101', '85000.00'),
(336, 'PLASTER WORK', 13, 1, 'Phase-2', 'Flat', 'LIG', 'FF-101', '85000.00'),
(337, 'FLOORING AND FINISHING', 14, 1, 'Phase-2', 'Flat', 'LIG', 'FF-101', '85000.00'),
(338, 'POSSESSION', 15, 1, 'Phase-2', 'Flat', 'LIG', 'FF-101', '170000.00'),
(339, 'Road Development and Surface  Drain Network', 1, 1, 'Phase-2', 'Plot', 'Area', 'H-76', '250111.60'),
(340, 'Electrical Work', 2, 1, 'Phase-2', 'Plot', 'Area', 'H-76', '1250558.00'),
(341, 'Sewer Line Network', 3, 1, 'Phase-2', 'Plot', 'Area', 'H-76', '750334.80'),
(342, 'Water Supply and Garden Network', 4, 1, 'Phase-2', 'Plot', 'Area', 'H-76', '250111.60'),
(343, 'Road Development and Surface  Drain Network', 1, 1, 'Phase-2', 'Plot', 'Area', 'H-77', '250111.60'),
(344, 'Electrical Work', 2, 1, 'Phase-2', 'Plot', 'Area', 'H-77', '1250558.00'),
(345, 'Sewer Line Network', 3, 1, 'Phase-2', 'Plot', 'Area', 'H-77', '750334.80'),
(346, 'Water Supply and Garden Network', 4, 1, 'Phase-2', 'Plot', 'Area', 'H-77', '250111.60'),
(347, 'Road Development and Surface  Drain Network', 1, 1, 'Phase-2', 'Plot', 'Area', 'H-50', '260727.48'),
(348, 'Electrical Work', 2, 1, 'Phase-2', 'Plot', 'Area', 'H-50', '1303637.40'),
(349, 'Sewer Line Network', 3, 1, 'Phase-2', 'Plot', 'Area', 'H-50', '782182.44'),
(350, 'Water Supply and Garden Network', 4, 1, 'Phase-2', 'Plot', 'Area', 'H-50', '260727.48'),
(351, 'Road Development and Surface  Drain Network', 1, 1, 'Phase-2', 'Plot', 'Area', 'H-80', '250111.60'),
(352, 'Electrical Work', 2, 1, 'Phase-2', 'Plot', 'Area', 'H-80', '1250558.00'),
(353, 'Sewer Line Network', 3, 1, 'Phase-2', 'Plot', 'Area', 'H-80', '750334.80'),
(354, 'Water Supply and Garden Network', 4, 1, 'Phase-2', 'Plot', 'Area', 'H-80', '250111.60'),
(355, 'Road Development and Surface  Drain Network', 1, 1, 'Phase-2', 'Plot', 'Area', 'H-81', '250000.00'),
(356, 'Electrical Work', 2, 1, 'Phase-2', 'Plot', 'Area', 'H-81', '1250000.00'),
(357, 'Sewer Line Network', 3, 1, 'Phase-2', 'Plot', 'Area', 'H-81', '750000.00'),
(358, 'Water Supply and Garden Network', 4, 1, 'Phase-2', 'Plot', 'Area', 'H-81', '250000.00'),
(359, 'BOOKING', 1, 2, 'Phase-1', 'Duplex', 'HIG', 'H-331', '909900.00'),
(360, 'FOUNDATION', 2, 2, 'Phase-1', 'Duplex', 'HIG', 'H-331', '1364850.00'),
(361, 'PLINTH', 3, 2, 'Phase-1', 'Duplex', 'HIG', 'H-331', '1364850.00'),
(362, 'GF SLAB', 4, 2, 'Phase-1', 'Duplex', 'HIG', 'H-331', '1364850.00'),
(363, 'FF SLAB', 5, 2, 'Phase-1', 'Duplex', 'HIG', 'H-331', '909900.00'),
(364, 'BRICK WORK', 6, 2, 'Phase-1', 'Duplex', 'HIG', 'H-331', '727920.00'),
(365, 'PLASTER WORK', 7, 2, 'Phase-1', 'Duplex', 'HIG', 'H-331', '727920.00'),
(366, 'PAINTING/FINISHING', 8, 2, 'Phase-1', 'Duplex', 'HIG', 'H-331', '818910.00'),
(367, 'POSSESSION', 9, 2, 'Phase-1', 'Duplex', 'HIG', 'H-331', '909900.00'),
(368, 'PLOT REGISTRY', 1, 2, 'Phase-1', 'Duplex', 'HIG', 'H-313', '1199918.00'),
(369, 'BOOKING', 2, 2, 'Phase-1', 'Duplex', 'HIG', 'H-313', '109991.80'),
(370, 'FOUNDATION', 3, 2, 'Phase-1', 'Duplex', 'HIG', 'H-313', '164987.70'),
(371, 'PLINTH', 4, 2, 'Phase-1', 'Duplex', 'HIG', 'H-313', '164987.70'),
(372, 'GF SLAB', 5, 2, 'Phase-1', 'Duplex', 'HIG', 'H-313', '164987.70'),
(373, 'FF SLAB', 6, 2, 'Phase-1', 'Duplex', 'HIG', 'H-313', '164987.70'),
(374, 'BRICK WORK', 7, 2, 'Phase-1', 'Duplex', 'HIG', 'H-313', '109991.80'),
(375, 'PLASTER WORK', 8, 2, 'Phase-1', 'Duplex', 'HIG', 'H-313', '109991.80'),
(376, 'PAINTING/FINISHING', 9, 2, 'Phase-1', 'Duplex', 'HIG', 'H-313', '54995.90'),
(377, 'POSSESSION', 10, 2, 'Phase-1', 'Duplex', 'HIG', 'H-313', '54995.90'),
(378, 'PLOT REGISTRY', 1, 2, 'Phase-1', 'Duplex', 'HIG', 'H-85', '3481372.89'),
(379, 'BOOKING', 2, 2, 'Phase-1', 'Duplex', 'HIG', 'H-85', '200000.00'),
(380, 'FOUNDATION', 3, 2, 'Phase-1', 'Duplex', 'HIG', 'H-85', '300000.00'),
(381, 'PLINTH', 4, 2, 'Phase-1', 'Duplex', 'HIG', 'H-85', '300000.00'),
(382, 'GF SLAB', 5, 2, 'Phase-1', 'Duplex', 'HIG', 'H-85', '300000.00'),
(383, 'FF SLAB', 6, 2, 'Phase-1', 'Duplex', 'HIG', 'H-85', '300000.00'),
(384, 'BRICK WORK', 7, 2, 'Phase-1', 'Duplex', 'HIG', 'H-85', '200000.00'),
(385, 'PLASTER WORK', 8, 2, 'Phase-1', 'Duplex', 'HIG', 'H-85', '200000.00'),
(386, 'PAINTING/FINISHING', 9, 2, 'Phase-1', 'Duplex', 'HIG', 'H-85', '100000.00'),
(387, 'POSSESSION', 10, 2, 'Phase-1', 'Duplex', 'HIG', 'H-85', '100000.00'),
(388, 'PLOT REGISTRY', 1, 2, 'Phase-1', 'Duplex', 'HIG', 'H-230', '3481367.22'),
(389, 'BOOKING', 2, 2, 'Phase-1', 'Duplex', 'HIG', 'H-230', '400000.00'),
(390, 'FOUNDATION', 3, 2, 'Phase-1', 'Duplex', 'HIG', 'H-230', '600000.00'),
(391, 'PLINTH', 4, 2, 'Phase-1', 'Duplex', 'HIG', 'H-230', '600000.00'),
(392, 'GF SLAB', 5, 2, 'Phase-1', 'Duplex', 'HIG', 'H-230', '600000.00'),
(393, 'FF SLAB', 6, 2, 'Phase-1', 'Duplex', 'HIG', 'H-230', '600000.00'),
(394, 'BRICK WORK', 7, 2, 'Phase-1', 'Duplex', 'HIG', 'H-230', '400000.00'),
(395, 'PLASTER WORK', 8, 2, 'Phase-1', 'Duplex', 'HIG', 'H-230', '400000.00'),
(396, 'PAINTING/FINISHING', 9, 2, 'Phase-1', 'Duplex', 'HIG', 'H-230', '200000.00'),
(397, 'POSSESSION', 10, 2, 'Phase-1', 'Duplex', 'HIG', 'H-230', '200000.00'),
(398, 'BOOKING', 1, 1, 'Phase-2', 'Duplex', 'HIG', 'H-234', '381522.75'),
(399, 'FOUNDATION', 2, 1, 'Phase-2', 'Duplex', 'HIG', 'H-234', '572284.13'),
(400, 'PLINTH', 3, 1, 'Phase-2', 'Duplex', 'HIG', 'H-234', '572284.13'),
(401, 'GF SLAB', 4, 1, 'Phase-2', 'Duplex', 'HIG', 'H-234', '572284.13'),
(402, 'FF SLAB', 5, 1, 'Phase-2', 'Duplex', 'HIG', 'H-234', '381522.75'),
(403, 'BRICK WORK', 6, 1, 'Phase-2', 'Duplex', 'HIG', 'H-234', '305218.20'),
(404, 'PLASTER WORK', 7, 1, 'Phase-2', 'Duplex', 'HIG', 'H-234', '305218.20'),
(405, 'PAINTING/FINISHING', 8, 1, 'Phase-2', 'Duplex', 'HIG', 'H-234', '343370.48'),
(406, 'POSSESSION', 9, 1, 'Phase-2', 'Duplex', 'HIG', 'H-234', '381522.75'),
(417, 'PLOT REGISTRY', 1, 2, 'Phase-1', 'Duplex', 'HIG', 'H-255', '1740771.53'),
(418, 'BOOKING', 2, 2, 'Phase-1', 'Duplex', 'HIG', 'H-255', '174077.15'),
(419, 'FOUNDATION', 3, 2, 'Phase-1', 'Duplex', 'HIG', 'H-255', '261115.73'),
(420, 'PLINTH', 4, 2, 'Phase-1', 'Duplex', 'HIG', 'H-255', '261115.73'),
(421, 'GF SLAB', 5, 2, 'Phase-1', 'Duplex', 'HIG', 'H-255', '261115.73'),
(422, 'FF SLAB', 6, 2, 'Phase-1', 'Duplex', 'HIG', 'H-255', '261115.73'),
(423, 'BRICK WORK', 7, 2, 'Phase-1', 'Duplex', 'HIG', 'H-255', '174077.15'),
(424, 'PLASTER WORK', 8, 2, 'Phase-1', 'Duplex', 'HIG', 'H-255', '174077.15'),
(425, 'PAINTING/FINISHING', 9, 2, 'Phase-1', 'Duplex', 'HIG', 'H-255', '87038.58'),
(426, 'POSSESSION', 10, 2, 'Phase-1', 'Duplex', 'HIG', 'H-255', '87038.58'),
(437, 'PLOT REGISTRY', 1, 2, 'Phase-1', 'Duplex', 'HIG', 'H-256', '1700000.00'),
(438, 'BOOKING', 2, 2, 'Phase-1', 'Duplex', 'HIG', 'H-256', '170000.00'),
(439, 'FOUNDATION', 3, 2, 'Phase-1', 'Duplex', 'HIG', 'H-256', '255000.00'),
(440, 'PLINTH', 4, 2, 'Phase-1', 'Duplex', 'HIG', 'H-256', '255000.00'),
(441, 'GF SLAB', 5, 2, 'Phase-1', 'Duplex', 'HIG', 'H-256', '255000.00'),
(442, 'FF SLAB', 6, 2, 'Phase-1', 'Duplex', 'HIG', 'H-256', '255000.00'),
(443, 'BRICK WORK', 7, 2, 'Phase-1', 'Duplex', 'HIG', 'H-256', '170000.00'),
(444, 'PLASTER WORK', 8, 2, 'Phase-1', 'Duplex', 'HIG', 'H-256', '170000.00'),
(445, 'PAINTING/FINISHING', 9, 2, 'Phase-1', 'Duplex', 'HIG', 'H-256', '85000.00'),
(446, 'POSSESSION', 10, 2, 'Phase-1', 'Duplex', 'HIG', 'H-256', '85000.00'),
(447, 'PLOT REGISTRY', 1, 2, 'Phase-1', 'Duplex', 'HIG', 'H-257', '1500000.00'),
(448, 'BOOKING', 2, 2, 'Phase-1', 'Duplex', 'HIG', 'H-257', '150000.00'),
(449, 'FOUNDATION', 3, 2, 'Phase-1', 'Duplex', 'HIG', 'H-257', '225000.00'),
(450, 'PLINTH', 4, 2, 'Phase-1', 'Duplex', 'HIG', 'H-257', '225000.00'),
(451, 'GF SLAB', 5, 2, 'Phase-1', 'Duplex', 'HIG', 'H-257', '225000.00'),
(452, 'FF SLAB', 6, 2, 'Phase-1', 'Duplex', 'HIG', 'H-257', '225000.00'),
(453, 'BRICK WORK', 7, 2, 'Phase-1', 'Duplex', 'HIG', 'H-257', '150000.00'),
(454, 'PLASTER WORK', 8, 2, 'Phase-1', 'Duplex', 'HIG', 'H-257', '150000.00'),
(455, 'PAINTING/FINISHING', 9, 2, 'Phase-1', 'Duplex', 'HIG', 'H-257', '75000.00'),
(456, 'POSSESSION', 10, 2, 'Phase-1', 'Duplex', 'HIG', 'H-257', '75000.00'),
(467, 'Road Development and Surface  Drain Network', 1, 1, 'Phase-2', 'Plot', 'Area', 'H-82', '250111.60'),
(468, 'Electrical Work', 2, 1, 'Phase-2', 'Plot', 'Area', 'H-82', '1250558.00'),
(469, 'Sewer Line Network', 3, 1, 'Phase-2', 'Plot', 'Area', 'H-82', '750334.80'),
(470, 'Water Supply and Garden Network', 4, 1, 'Phase-2', 'Plot', 'Area', 'H-82', '250111.60'),
(481, 'BOOKING', 1, 2, 'Phase-1', 'Duplex', 'HIG', 'H-258', '150000.00'),
(482, 'PLOT REGISTRY', 2, 2, 'Phase-1', 'Duplex', 'HIG', 'H-258', '1500000.00'),
(483, 'FOUNDATION', 3, 2, 'Phase-1', 'Duplex', 'HIG', 'H-258', '225000.00'),
(484, 'PLINTH', 4, 2, 'Phase-1', 'Duplex', 'HIG', 'H-258', '225000.00'),
(485, 'GF SLAB', 5, 2, 'Phase-1', 'Duplex', 'HIG', 'H-258', '225000.00'),
(486, 'FF SLAB', 6, 2, 'Phase-1', 'Duplex', 'HIG', 'H-258', '225000.00'),
(487, 'BRICK WORK', 7, 2, 'Phase-1', 'Duplex', 'HIG', 'H-258', '150000.00'),
(488, 'PLASTER WORK', 8, 2, 'Phase-1', 'Duplex', 'HIG', 'H-258', '150000.00'),
(489, 'PAINTING/FINISHING', 9, 2, 'Phase-1', 'Duplex', 'HIG', 'H-258', '75000.00'),
(490, 'POSSESSION', 10, 2, 'Phase-1', 'Duplex', 'HIG', 'H-258', '75000.00'),
(491, 'Road Development and Surface  Drain Network', 1, 1, 'Phase-2', 'Plot', 'Area', 'H-360', '250000.00'),
(492, 'Electrical Work', 2, 1, 'Phase-2', 'Plot', 'Area', 'H-360', '1250000.00'),
(493, 'Sewer Line Network', 3, 1, 'Phase-2', 'Plot', 'Area', 'H-360', '750000.00'),
(494, 'Water Supply and Garden Network', 4, 1, 'Phase-2', 'Plot', 'Area', 'H-360', '250000.00'),
(495, 'BOOKING', 1, 1, 'Phase-2', 'Duplex', 'HIG', 'H-235', '381522.75'),
(496, 'FOUNDATION', 2, 1, 'Phase-2', 'Duplex', 'HIG', 'H-235', '572284.13'),
(497, 'PLINTH', 3, 1, 'Phase-2', 'Duplex', 'HIG', 'H-235', '572284.13'),
(498, 'GF SLAB', 4, 1, 'Phase-2', 'Duplex', 'HIG', 'H-235', '572284.13'),
(499, 'FF SLAB', 5, 1, 'Phase-2', 'Duplex', 'HIG', 'H-235', '381522.75'),
(500, 'BRICK WORK', 6, 1, 'Phase-2', 'Duplex', 'HIG', 'H-235', '305218.20'),
(501, 'PLASTER WORK', 7, 1, 'Phase-2', 'Duplex', 'HIG', 'H-235', '305218.20'),
(502, 'PAINTING/FINISHING', 8, 1, 'Phase-2', 'Duplex', 'HIG', 'H-235', '343370.48'),
(503, 'POSSESSION', 9, 1, 'Phase-2', 'Duplex', 'HIG', 'H-235', '381522.75'),
(504, 'BOOKING', 1, 1, 'Phase-2', 'Flat', 'LIG', 'GF-1', '176889.16'),
(505, 'EXCAVATION WORK', 2, 1, 'Phase-2', 'Flat', 'LIG', 'GF-1', '176889.16'),
(506, 'FOUNDATION', 3, 1, 'Phase-2', 'Flat', 'LIG', 'GF-1', '212266.99'),
(507, 'PLINTH', 4, 1, 'Phase-2', 'Flat', 'LIG', 'GF-1', '141511.33'),
(508, 'FIRST FLOOR SLAB', 5, 1, 'Phase-2', 'Flat', 'LIG', 'GF-1', '88444.58'),
(509, 'SECOND FLOOR SLAB', 6, 1, 'Phase-2', 'Flat', 'LIG', 'GF-1', '88444.58'),
(510, 'THIRD FLOOR SLAB', 7, 1, 'Phase-2', 'Flat', 'LIG', 'GF-1', '88444.58'),
(511, 'FOURTH FLOOR SLAB', 8, 1, 'Phase-2', 'Flat', 'LIG', 'GF-1', '88444.58'),
(512, 'FIFTH FLOOR SLAB', 9, 1, 'Phase-2', 'Flat', 'LIG', 'GF-1', '88444.58'),
(513, 'SIXTH FLOOR SLAB', 10, 1, 'Phase-2', 'Flat', 'LIG', 'GF-1', '88444.58'),
(514, 'SEVENTH FLOOR SLAB', 11, 1, 'Phase-2', 'Flat', 'LIG', 'GF-1', '88444.58'),
(515, 'BRICK WORK', 12, 1, 'Phase-2', 'Flat', 'LIG', 'GF-1', '88444.58'),
(516, 'PLASTER WORK', 13, 1, 'Phase-2', 'Flat', 'LIG', 'GF-1', '88444.58'),
(517, 'FLOORING AND FINISHING', 14, 1, 'Phase-2', 'Flat', 'LIG', 'GF-1', '88444.58'),
(518, 'POSSESSION', 15, 1, 'Phase-2', 'Flat', 'LIG', 'GF-1', '176889.16'),
(519, 'BOOKING', 1, 1, 'Phase-2', 'Flat', 'EWS', 'GF-1', '110306.28'),
(520, 'EXCAVATION WORK', 2, 1, 'Phase-2', 'Flat', 'EWS', 'GF-1', '110306.28'),
(521, 'FOUNDATION', 3, 1, 'Phase-2', 'Flat', 'EWS', 'GF-1', '132367.54'),
(522, 'PLINTH', 4, 1, 'Phase-2', 'Flat', 'EWS', 'GF-1', '88245.02'),
(523, 'FIRST FLOOR SLAB', 5, 1, 'Phase-2', 'Flat', 'EWS', 'GF-1', '55153.14'),
(524, 'SECOND FLOOR SLAB', 6, 1, 'Phase-2', 'Flat', 'EWS', 'GF-1', '55153.14'),
(525, 'THIRD FLOOR SLAB', 7, 1, 'Phase-2', 'Flat', 'EWS', 'GF-1', '55153.14'),
(526, 'FOURTH FLOOR SLAB', 8, 1, 'Phase-2', 'Flat', 'EWS', 'GF-1', '55153.14'),
(527, 'FIFTH FLOOR SLAB', 9, 1, 'Phase-2', 'Flat', 'EWS', 'GF-1', '55153.14'),
(528, 'SIXTH FLOOR SLAB', 10, 1, 'Phase-2', 'Flat', 'EWS', 'GF-1', '55153.14'),
(529, 'SEVENTH FLOOR SLAB', 11, 1, 'Phase-2', 'Flat', 'EWS', 'GF-1', '55153.14'),
(530, 'BRICK WORK', 12, 1, 'Phase-2', 'Flat', 'EWS', 'GF-1', '55153.14'),
(531, 'PLASTER WORK', 13, 1, 'Phase-2', 'Flat', 'EWS', 'GF-1', '55153.14'),
(532, 'FLOORING AND FINISHING', 14, 1, 'Phase-2', 'Flat', 'EWS', 'GF-1', '55153.14'),
(533, 'POSSESSION', 15, 1, 'Phase-2', 'Flat', 'EWS', 'GF-1', '110306.28'),
(534, 'BOOKING', 1, 1, 'Phase-2', 'Flat', 'EWS', 'GF-2', '110306.28'),
(535, 'EXCAVATION WORK', 2, 1, 'Phase-2', 'Flat', 'EWS', 'GF-2', '110306.28'),
(536, 'FOUNDATION', 3, 1, 'Phase-2', 'Flat', 'EWS', 'GF-2', '132367.54'),
(537, 'PLINTH', 4, 1, 'Phase-2', 'Flat', 'EWS', 'GF-2', '88245.02'),
(538, 'FIRST FLOOR SLAB', 5, 1, 'Phase-2', 'Flat', 'EWS', 'GF-2', '55153.14'),
(539, 'SECOND FLOOR SLAB', 6, 1, 'Phase-2', 'Flat', 'EWS', 'GF-2', '55153.14'),
(540, 'THIRD FLOOR SLAB', 7, 1, 'Phase-2', 'Flat', 'EWS', 'GF-2', '55153.14'),
(541, 'FOURTH FLOOR SLAB', 8, 1, 'Phase-2', 'Flat', 'EWS', 'GF-2', '55153.14'),
(542, 'FIFTH FLOOR SLAB', 9, 1, 'Phase-2', 'Flat', 'EWS', 'GF-2', '55153.14'),
(543, 'SIXTH FLOOR SLAB', 10, 1, 'Phase-2', 'Flat', 'EWS', 'GF-2', '55153.14'),
(544, 'SEVENTH FLOOR SLAB', 11, 1, 'Phase-2', 'Flat', 'EWS', 'GF-2', '55153.14'),
(545, 'BRICK WORK', 12, 1, 'Phase-2', 'Flat', 'EWS', 'GF-2', '55153.14'),
(546, 'PLASTER WORK', 13, 1, 'Phase-2', 'Flat', 'EWS', 'GF-2', '55153.14'),
(547, 'FLOORING AND FINISHING', 14, 1, 'Phase-2', 'Flat', 'EWS', 'GF-2', '55153.14'),
(548, 'POSSESSION', 15, 1, 'Phase-2', 'Flat', 'EWS', 'GF-2', '110306.28'),
(549, 'BOOKING', 1, 1, 'Phase-2', 'Flat', 'LIG', 'GF-1', '176889.16'),
(550, 'EXCAVATION WORK', 2, 1, 'Phase-2', 'Flat', 'LIG', 'GF-1', '176889.16'),
(551, 'FOUNDATION', 3, 1, 'Phase-2', 'Flat', 'LIG', 'GF-1', '212266.99'),
(552, 'PLINTH', 4, 1, 'Phase-2', 'Flat', 'LIG', 'GF-1', '141511.33'),
(553, 'FIRST FLOOR SLAB', 5, 1, 'Phase-2', 'Flat', 'LIG', 'GF-1', '88444.58'),
(554, 'SECOND FLOOR SLAB', 6, 1, 'Phase-2', 'Flat', 'LIG', 'GF-1', '88444.58'),
(555, 'THIRD FLOOR SLAB', 7, 1, 'Phase-2', 'Flat', 'LIG', 'GF-1', '88444.58'),
(556, 'FOURTH FLOOR SLAB', 8, 1, 'Phase-2', 'Flat', 'LIG', 'GF-1', '88444.58'),
(557, 'FIFTH FLOOR SLAB', 9, 1, 'Phase-2', 'Flat', 'LIG', 'GF-1', '88444.58'),
(558, 'SIXTH FLOOR SLAB', 10, 1, 'Phase-2', 'Flat', 'LIG', 'GF-1', '88444.58'),
(559, 'SEVENTH FLOOR SLAB', 11, 1, 'Phase-2', 'Flat', 'LIG', 'GF-1', '88444.58'),
(560, 'BRICK WORK', 12, 1, 'Phase-2', 'Flat', 'LIG', 'GF-1', '88444.58'),
(561, 'PLASTER WORK', 13, 1, 'Phase-2', 'Flat', 'LIG', 'GF-1', '88444.58'),
(562, 'FLOORING AND FINISHING', 14, 1, 'Phase-2', 'Flat', 'LIG', 'GF-1', '88444.58'),
(563, 'POSSESSION', 15, 1, 'Phase-2', 'Flat', 'LIG', 'GF-1', '176889.16'),
(564, 'BOOKING', 1, 1, 'Phase-2', 'Flat', 'LIG', 'FF-103', '176889.16'),
(565, 'EXCAVATION WORK', 2, 1, 'Phase-2', 'Flat', 'LIG', 'FF-103', '176889.16'),
(566, 'FOUNDATION', 3, 1, 'Phase-2', 'Flat', 'LIG', 'FF-103', '212266.99'),
(567, 'PLINTH', 4, 1, 'Phase-2', 'Flat', 'LIG', 'FF-103', '141511.33'),
(568, 'FIRST FLOOR SLAB', 5, 1, 'Phase-2', 'Flat', 'LIG', 'FF-103', '88444.58'),
(569, 'SECOND FLOOR SLAB', 6, 1, 'Phase-2', 'Flat', 'LIG', 'FF-103', '88444.58'),
(570, 'THIRD FLOOR SLAB', 7, 1, 'Phase-2', 'Flat', 'LIG', 'FF-103', '88444.58'),
(571, 'FOURTH FLOOR SLAB', 8, 1, 'Phase-2', 'Flat', 'LIG', 'FF-103', '88444.58'),
(572, 'FIFTH FLOOR SLAB', 9, 1, 'Phase-2', 'Flat', 'LIG', 'FF-103', '88444.58'),
(573, 'SIXTH FLOOR SLAB', 10, 1, 'Phase-2', 'Flat', 'LIG', 'FF-103', '88444.58'),
(574, 'SEVENTH FLOOR SLAB', 11, 1, 'Phase-2', 'Flat', 'LIG', 'FF-103', '88444.58'),
(575, 'BRICK WORK', 12, 1, 'Phase-2', 'Flat', 'LIG', 'FF-103', '88444.58'),
(576, 'PLASTER WORK', 13, 1, 'Phase-2', 'Flat', 'LIG', 'FF-103', '88444.58'),
(577, 'FLOORING AND FINISHING', 14, 1, 'Phase-2', 'Flat', 'LIG', 'FF-103', '88444.58'),
(578, 'POSSESSION', 15, 1, 'Phase-2', 'Flat', 'LIG', 'FF-103', '176889.16'),
(579, 'BOOKING', 1, 1, 'Phase-2', 'Duplex', 'HIG', 'H-236', '381522.75'),
(580, 'FOUNDATION', 2, 1, 'Phase-2', 'Duplex', 'HIG', 'H-236', '572284.13'),
(581, 'PLINTH', 3, 1, 'Phase-2', 'Duplex', 'HIG', 'H-236', '572284.13'),
(582, 'GF SLAB', 4, 1, 'Phase-2', 'Duplex', 'HIG', 'H-236', '572284.13'),
(583, 'FF SLAB', 5, 1, 'Phase-2', 'Duplex', 'HIG', 'H-236', '381522.75'),
(584, 'BRICK WORK', 6, 1, 'Phase-2', 'Duplex', 'HIG', 'H-236', '305218.20'),
(585, 'PLASTER WORK', 7, 1, 'Phase-2', 'Duplex', 'HIG', 'H-236', '305218.20'),
(586, 'PAINTING/FINISHING', 8, 1, 'Phase-2', 'Duplex', 'HIG', 'H-236', '343370.48'),
(587, 'POSSESSION', 9, 1, 'Phase-2', 'Duplex', 'HIG', 'H-236', '381522.75');

-- --------------------------------------------------------

--
-- Table structure for table `payment_statment`
--

CREATE TABLE `payment_statment` (
  `id` int(11) NOT NULL,
  `appl_name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `project_name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `block` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `unit_no` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_mode` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mr_no` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deposit_date` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ch_no` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `bank_details` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `remark` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `login_user` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `plot_size_tbl`
--

CREATE TABLE `plot_size_tbl` (
  `id` int(11) NOT NULL,
  `plot_size_mtr` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `plot_size_ft` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `length_m` decimal(10,2) DEFAULT NULL,
  `width_m` decimal(10,2) DEFAULT NULL,
  `plot_sqmt` decimal(10,2) DEFAULT NULL,
  `plot_sqft` decimal(10,2) DEFAULT NULL,
  `project_id` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `block` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `plot_size_tbl`
--

INSERT INTO `plot_size_tbl` (`id`, `plot_size_mtr`, `plot_size_ft`, `type`, `length_m`, `width_m`, `plot_sqmt`, `plot_sqft`, `project_id`, `block`) VALUES
(12, '7.00X13.00', '22.96X42.64', 'Duplex', '7.00', '13.00', '91.00', '979.16', '1', 'Phase-2'),
(15, '6.70X13.00', '21.976X42.64', 'Duplex', '6.70', '13.00', '87.10', '937.19', '1', 'Phase-2'),
(18, '7.00X12.20', '22.96X40.025', 'Duplex', '7.00', '12.20', '85.40', '918.90', '1', 'Phase-2'),
(19, '6.70X13.00', '21.976X42.64', 'Plot', '6.70', '13.00', '87.10', '937.19', '1', 'Phase-2'),
(21, '7.00X13.00', '22.96X42.64', 'Plot', '7.00', '13.00', '91.00', '979.16', '1', 'Phase-2'),
(22, '7.00X12.20', '22.96X40.016', 'Plot', '7.00', '12.20', '85.40', '918.90', '1', 'Phase-2'),
(23, '6.00X13.00', '19.68X42.64', 'Duplex', '6.00', '13.00', '78.00', '839.28', '2', 'Phase-1'),
(24, '6.00X12.20', '19.68X40.016', 'Duplex', '6.00', '12.20', '73.20', '787.63', '2', 'Phase-1'),
(25, '7.92X12.20', '25.9776X40.016', 'Duplex', '7.92', '12.20', '96.62', '1039.67', '2', 'Phase-1'),
(26, '8.00X12.20', '26.24X40.016', 'Duplex', '8.00', '12.20', '97.60', '1050.18', '2', 'Phase-1'),
(27, '7.00X12.20', '22.96X40.016', 'Duplex', '7.00', '12.20', '85.40', '918.90', '2', 'Phase-1'),
(28, '6.70X13.00', '21.976X42.64', 'Duplex', '6.70', '13.00', '87.10', '937.20', '2', 'Phase-1'),
(29, '7.00X13.00', '22.96X42.64', 'Duplex', '7.00', '13.00', '91.00', '979.16', '2', 'Phase-1'),
(30, '9.28', '99.85', 'Shop', NULL, NULL, NULL, NULL, '2', 'Phase-1');

-- --------------------------------------------------------

--
-- Table structure for table `presales_appointment_tbl`
--

CREATE TABLE `presales_appointment_tbl` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `discussion` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `next_date` date NOT NULL,
  `costing_detail_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `presales_costcalculation_tbl`
--

CREATE TABLE `presales_costcalculation_tbl` (
  `id` int(11) NOT NULL,
  `mutation` decimal(10,2) DEFAULT NULL,
  `society` decimal(10,2) DEFAULT NULL,
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
  `land_cost` decimal(10,2) DEFAULT NULL,
  `construction_cost` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `presales_costcalculation_tbl`
--

INSERT INTO `presales_costcalculation_tbl` (`id`, `mutation`, `society`, `name`, `mobile`, `date`, `project_id`, `block`, `category`, `type`, `unit_no`, `plot_size_mtr`, `plot_size_ft`, `flat_carpet_area_mt`, `flat_carpet_area_ft`, `cost_carpet_area`, `cost_ca_ref_rate`, `total_unit_cost_as_per_carpet_area`, `cost_balcony_area`, `cost_balcony_ref_rate`, `total_balcony_area`, `cost_balcony_area_2`, `cost_balcony_ref_rate_2`, `total_balcony_area_2`, `cost_wash_area`, `cost_washarea_ref_rate`, `total_wash_area`, `cost_open_terrace_area_front`, `cost_open_terrace_front_area_ref_rate`, `total_open_terrace_area_front`, `cost_open_terrace_area_back`, `cost_open_terrace_back_area_ref_rate`, `total_open_terrace_area_back`, `cost_car_poarch_area`, `cost_car_poarch_area_ref_rate`, `total_car_poarch_area`, `proportionate_common_area`, `proportionate_common_area_ref_rate`, `total_proportionate_common_area`, `discount`, `discount_two`, `cost_payble_to_company`, `gst`, `total_cost`, `discussion`, `extra_charge`, `extra_charge_des`, `premium_location_charges`, `premium_location_charges_des`, `prospect_id`, `login_id`, `is_request`, `is_checked`, `get_approval`, `is_sales_seen`, `basic_cost_ref_rate`, `mpseb_cost_ref_rate`, `water_connection_ref_rate`, `maintenance_cost_ref_rate`, `corner_charges`, `garden_facing_charges`, `flat_parking`, `MPSEB_system`, `registry_charges`, `monthly`, `MPSEB_meter`, `land_cost`, `construction_cost`) VALUES
(1, NULL, NULL, 'Rohit Kumar Malviya', '8959182002', '0000-00-00', '2', 'Phase-1', 'HIG', 'Duplex', 'H-123', '6.00X12.20', '19.68X40.016', NULL, NULL, '97.58', '3315.63', '3481281.53', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1000000.00', '956281.53', '2481281.53', NULL, '1525000.00', '  ', NULL, NULL, NULL, NULL, 3, 335, '1', '1', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, NULL, 'Duplex Raja', '9876543215', '0000-00-00', '2', 'Phase-1', 'HIG', 'Duplex', 'H-101', '6.00X12.20', '19.68X40.016', NULL, NULL, '97.58', '3315.63', '3481281.53', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', '3481281.53', NULL, '3481281.53', '', NULL, NULL, NULL, NULL, 4, 335, '1', NULL, '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, NULL, NULL, 'Abhishek Pandey', '9685745634', '0000-00-00', '2', 'Phase-1', 'HIG', 'Duplex', 'H-254', '6.00X13.00', '19.68X42.64', NULL, NULL, '108.74', '2975.57', '3481543.06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '1543.06', '3481543.06', NULL, '3480000.00', '', NULL, NULL, NULL, NULL, 5, 232, '1', NULL, '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, NULL, NULL, 'Iram Khan', '9685743654', '2018-02-27', '1', 'Phase-2', 'LIG', 'Flat', 'GF-1', NULL, NULL, '45.00', '484.20', '45.00', '2500.00', '1210500.00', '3.90', '1350.00', '56651.40', '3.90', '1350.00', '56651.40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8.89', '1350.00', '129136.14', '8891.61', NULL, '1768891.61', '174352.67', '1760000.00', '', NULL, NULL, NULL, NULL, 6, 335, '1', NULL, '0', '0', NULL, '0.00', NULL, '141600.00', NULL, NULL, '0.00', NULL, NULL, NULL, NULL, NULL, NULL),
(5, NULL, NULL, 'Pankaj Kumar Jha ', '9898989898', '2018-02-28', '1', 'Phase-2', 'EWS', 'Flat', 'GF-10', NULL, NULL, '22.90', '246.51', '22.90', '2500.00', '616010.00', '3.90', '1350.00', '56651.40', '3.90', '1350.00', '56651.40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8.89', '1350.00', '129136.14', '0.00', NULL, '1103062.81', '103013.87', '1103062.81', '', NULL, NULL, NULL, NULL, 7, 335, '1', NULL, '0', '0', NULL, '0.00', NULL, '141600.00', NULL, NULL, '0.00', NULL, NULL, NULL, NULL, NULL, NULL),
(6, NULL, NULL, 'Shreedevi', '8871887109', '2018-02-28', '1', 'Phase-2', 'EWS', 'Flat', 'GF-5', NULL, NULL, '22.90', '246.51', '22.90', '2500.00', '616010.00', '3.90', '1350.00', '56651.40', '3.90', '1350.00', '56651.40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8.89', '1350.00', '129136.14', '0.00', NULL, '1103062.81', '103013.87', '1103062.81', '', NULL, NULL, NULL, NULL, 8, 335, '1', NULL, '0', '0', NULL, '0.00', NULL, '141600.00', NULL, NULL, '0.00', NULL, NULL, NULL, NULL, NULL, NULL),
(7, NULL, NULL, 'Ranjan Shah', '8787878787', '2018-02-28', '1', 'Phase-2', 'EWS', 'Flat', 'GF-11', NULL, NULL, '22.90', '246.51', '22.90', '2500.00', '616010.00', '3.90', '1350.00', '56651.40', '3.90', '1350.00', '56651.40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8.89', '1350.00', '129136.14', '0.00', NULL, '1103062.81', '103013.87', '1103062.81', '', NULL, NULL, NULL, NULL, 9, 335, '1', NULL, '0', '0', NULL, '0.00', NULL, '141600.00', NULL, NULL, '0.00', NULL, NULL, NULL, NULL, NULL, NULL),
(8, NULL, NULL, 'Phaseone Duplex', '9876543215', '0000-00-00', '2', 'Phase-1', 'HIG', 'Duplex', 'H-118', '6.00X12.20', '19.68X40.016', NULL, NULL, '97.58', '3315.63', '3481281.53', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', '3481281.53', NULL, '3481281.53', '', NULL, NULL, NULL, NULL, 10, 335, '1', NULL, '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, NULL, NULL, 'Ritika Singh', '9898989898', '2018-02-28', '1', 'Phase-2', 'Area', 'Plot', 'H-80', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', NULL, '2501116.00', NULL, '2501116.00', '', NULL, NULL, NULL, NULL, 11, 335, '1', NULL, '0', NULL, '2155560.00', '55000.00', '45000.00', '30000.00', '107778.00', '107778.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, NULL, NULL, 'Ganesh', '8989898989', '2018-02-28', '1', 'Phase-2', 'Area', 'Plot', 'H-80', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', NULL, '2501116.00', NULL, '2501116.00', '', NULL, NULL, NULL, NULL, 12, 336, '1', NULL, '0', NULL, '2155560.00', '55000.00', '45000.00', '30000.00', '107778.00', '107778.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, NULL, NULL, 'Lokesh ', '8989898989', '2018-02-28', '1', 'Phase-2', 'EWS', 'Flat', 'GF-12', NULL, NULL, '22.90', '246.51', '22.90', '2500.00', '616010.00', '3.90', '1350.00', '56651.40', '3.90', '1350.00', '56651.40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8.89', '1350.00', '129136.14', '0.00', NULL, '1103062.81', '103013.87', '1103062.81', '', NULL, NULL, NULL, NULL, 13, 335, '1', NULL, '0', '0', NULL, '0.00', NULL, '141600.00', NULL, NULL, '0.00', NULL, NULL, NULL, NULL, NULL, NULL),
(12, NULL, NULL, 'Mukesh', '8989898989', '0000-00-00', '2', 'Phase-1', 'HIG', 'Duplex', 'H-313', '7.92X12.20', '25.9776X40.016', NULL, NULL, '130.11', '2486.72', '3481367.22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', '3481367.22', NULL, '3481367.22', '', NULL, NULL, NULL, NULL, 15, 335, '1', NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, NULL, NULL, 'Phasetwo Flat', '9865325696', '2018-03-01', '1', 'Phase-2', 'LIG', 'Flat', 'GF-7', NULL, NULL, '45.00', '484.20', '45.00', '2500.00', '1210500.00', '3.90', '1350.00', '56651.40', '3.90', '1350.00', '56651.40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8.89', '1350.00', '129136.14', '0.00', NULL, '1768891.61', '174352.67', '1768891.61', '', NULL, NULL, NULL, NULL, 16, 335, '1', NULL, '0', '0', NULL, '0.00', NULL, '141600.00', NULL, NULL, '0.00', NULL, NULL, NULL, NULL, NULL, NULL),
(14, NULL, NULL, 'Narayan ', '8778878787', '2018-03-01', '1', 'Phase-2', 'LIG', 'Flat', 'GF-8', NULL, NULL, '45.00', '484.20', '45.00', '2500.00', '1210500.00', '3.90', '1350.00', '56651.40', '3.90', '1350.00', '56651.40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8.89', '1350.00', '129136.14', '0.00', NULL, '1768891.61', '174352.67', '1768891.61', '', NULL, NULL, NULL, NULL, 17, 335, '1', NULL, '0', NULL, NULL, '0.00', NULL, '141600.00', NULL, NULL, '0.00', NULL, NULL, NULL, NULL, NULL, NULL),
(15, NULL, NULL, 'Usha Kumari', '8989898989', '2018-03-03', '1', 'Phase-2', 'HIG', 'Duplex', 'H-55', '7.00X13.00', '22.96X42.64', NULL, NULL, '93.44', '3000.00', '3016243.20', '6.32', '950.00', '64603.04', NULL, NULL, NULL, '10.50', '500.00', '56490.00', '2.35', '800.00', '20228.80', '6.64', '800.00', '57157.12', '8.67', '700.00', '65302.44', NULL, NULL, NULL, '0.00', NULL, '3815227.54', '393602.94', '3815227.54', '', '0.00', '', '0.00', '', 18, 335, '1', NULL, '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, NULL, NULL, 'Vinay Kumar', '8977979779', '0000-00-00', '2', 'Phase-1', 'HIG', 'Duplex', 'H-253', '6.00X13.00', '19.68X42.64', NULL, NULL, '108.74', '2975.57', '3481543.06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', '3481543.06', NULL, '3481543.06', '', NULL, NULL, NULL, NULL, 19, 335, '1', NULL, '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, NULL, NULL, 'Tanu', '9685741425', '2018-03-03', '1', 'Phase-2', 'LIG', 'Flat', 'GF-1', NULL, NULL, '45.00', '484.20', '45.00', '2500.00', '1210500.00', '3.90', '1350.00', '56651.40', '3.90', '1350.00', '56651.40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8.89', '1350.00', '129136.14', '891.61', NULL, '1768891.61', '174352.67', '1768000.00', '', NULL, NULL, NULL, NULL, 21, 232, '1', NULL, '0', '0', NULL, '0.00', NULL, '141600.00', NULL, NULL, '0.00', NULL, NULL, NULL, NULL, NULL, NULL),
(18, NULL, NULL, 'Phaseone Duplex', '9845965874', '0000-00-00', '2', 'Phase-1', 'HIG', 'Duplex', 'H-101', '6.00X12.20', '19.68X40.016', NULL, NULL, '97.58', '3315.63', '3481281.53', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '1281.53', '3481281.53', NULL, '3480000.00', 'one, two, three, four,  ', NULL, NULL, NULL, NULL, 23, 335, '1', NULL, '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, NULL, NULL, 'Phaseone Duplex Two', '9425790662', '0000-00-00', '2', 'Phase-1', 'HIG', 'Duplex', 'H-102', '6.00X12.20', '19.68X40.016', NULL, NULL, '97.58', '3315.63', '3481281.53', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '1281.53', '3481281.53', NULL, '3480000.00', '', NULL, NULL, NULL, NULL, 25, 335, '1', NULL, '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, NULL, NULL, 'Nikita ', '8989898989', '2018-03-05', '2', 'Phase-1', '', 'Shop', 'shop-1', '9.12', '98.13', NULL, NULL, NULL, NULL, '68400.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5000.00', NULL, '140000.00', NULL, '140000.00', 'Hello', NULL, NULL, NULL, NULL, 22, 335, '1', NULL, '0', NULL, NULL, NULL, '45000.00', '29500.00', NULL, NULL, NULL, '100.00', '200.00', '300.00', '400.00', NULL, NULL),
(23, NULL, NULL, 'Devesh Kakde', '8871887109', '2018-03-05', '2', 'Phase-1', '', 'Shop', 'shop-1', '9.12', '98.13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '710.00', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, 26, 335, '1', NULL, '0', NULL, NULL, NULL, '45000.00', '29500.00', NULL, NULL, NULL, '10.00', '20.00', '30.00', '40.00', NULL, NULL),
(24, NULL, NULL, 'Ayushi Bhadoriya', '8269571957', '2018-03-05', '2', 'Phase-1', '', 'Shop', 'shop-1', '9.12', '98.13', NULL, NULL, NULL, NULL, '145000.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '45000.00', NULL, NULL, NULL, '100000.00', '', NULL, NULL, NULL, NULL, 27, 335, '1', NULL, '0', '0', NULL, NULL, '45000.00', '29500.00', NULL, NULL, NULL, '100.00', '200.00', '300.00', '400.00', NULL, NULL),
(25, NULL, NULL, 'Dolly Patel', '8871887109', '2018-03-05', '2', 'Phase-1', '', 'Shop', 'shop-1', '9.12', '98.13', NULL, NULL, NULL, NULL, '68400.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '63900.00', NULL, '163900.00', NULL, '100000.00', '', NULL, NULL, NULL, NULL, 28, 335, '1', NULL, '0', '0', NULL, NULL, '45000.00', '29500.00', NULL, NULL, NULL, '1000.00', '2000.00', '3000.00', '4000.00', NULL, NULL),
(26, NULL, NULL, 'Aditi Patel', '8871887109', '2018-03-05', '1', 'Phase-2', 'Area', 'Plot', 'H-79', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', NULL, '2501116.00', NULL, '2501116.00', '', NULL, NULL, NULL, NULL, 24, 335, '1', NULL, '0', '0', '2155560.00', '55000.00', '45000.00', '30000.00', '107778.00', '107778.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, NULL, NULL, 'Krishna Malviya', '8269571957', '2018-03-05', '2', 'Phase-1', '', 'Shop', 'shop-10', '17.00', '182.92', NULL, NULL, NULL, NULL, '127500.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', NULL, '202000.00', NULL, '202000.00', '', NULL, NULL, NULL, NULL, 29, 335, '1', NULL, '0', '0', NULL, NULL, '45000.00', '29500.00', NULL, NULL, NULL, '0.00', '0.00', '0.00', '0.00', NULL, NULL),
(28, NULL, NULL, 'Preeti', '8871887109', '2018-03-07', '2', 'Phase-1', '', 'Shop', 'shop-2', '18.90', '203.36', NULL, NULL, NULL, NULL, '141750.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '310.00', NULL, '216310.00', NULL, '216000.00', '', NULL, NULL, NULL, NULL, 31, 335, '1', NULL, '0', '0', NULL, NULL, '45000.00', '29500.00', NULL, NULL, NULL, '10.00', '10.00', '10.00', '10.00', NULL, NULL),
(29, NULL, NULL, 'Shikha Singh', '7878787878', '2018-03-07', '2', 'Phase-1', '', 'Shop', 'shop-1', '9.12', '98.13', NULL, NULL, NULL, NULL, '68400.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', NULL, '142900.00', NULL, '142900.00', '', NULL, NULL, NULL, NULL, 33, 335, '1', NULL, '0', '0', NULL, NULL, '45000.00', '29500.00', NULL, NULL, NULL, '0.00', '0.00', '0.00', '0.00', NULL, NULL),
(30, NULL, NULL, 'Rohan', '7878787878', '2018-03-07', '2', 'Phase-1', '', 'Shop', 'shop-9', '9.08', '97.70', NULL, NULL, NULL, NULL, '68100.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', NULL, '142600.00', NULL, '142600.00', '', NULL, NULL, NULL, NULL, 34, 335, '1', NULL, '0', '0', NULL, NULL, '45000.00', '29500.00', NULL, NULL, NULL, '0.00', '0.00', '0.00', '0.00', NULL, NULL),
(31, NULL, NULL, 'Priyanka Rajput', '8871887109', '2018-03-07', '2', 'Phase-1', '', 'Shop', 'shop-10', '17.00', '182.92', NULL, NULL, NULL, NULL, '127500.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', NULL, '202000.00', NULL, '202000.00', '', NULL, NULL, NULL, NULL, 35, 335, '1', NULL, '0', '0', NULL, NULL, '45000.00', '29500.00', NULL, NULL, NULL, '0.00', '0.00', '0.00', '0.00', NULL, NULL),
(32, NULL, NULL, 'Abrahim', '9685741236', '0000-00-00', '2', 'Phase-1', 'HIG', 'Duplex', 'H-103', '6.00X12.20', '19.68X40.016', NULL, NULL, '97.58', '3315.63', '3481281.53', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '281.53', '3481281.53', NULL, '3481000.00', 'discount allow 281.53', NULL, NULL, NULL, NULL, 36, 335, '1', NULL, '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, NULL, NULL, 'Raaj Sahu', '9874561235', '2018-03-07', '1', 'Phase-2', 'HIG', 'Duplex', 'H-57', '7.00X13.00', '22.96X42.64', NULL, NULL, '93.44', '3000.00', '3016243.20', '6.32', '950.00', '64603.04', NULL, NULL, NULL, '10.50', '500.00', '56490.00', '2.35', '800.00', '20228.80', '6.64', '800.00', '57157.12', '8.67', '700.00', '65302.44', NULL, NULL, NULL, '227.54', NULL, '3815227.54', '393602.94', '3815000.00', '', '0.00', '', '0.00', '', 37, 335, '1', NULL, '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, NULL, NULL, 'Ankul', '9874563214', '2018-03-07', '1', 'Phase-2', 'HIG', 'Duplex', 'H-84', '6.70X13.00', '21.976X42.64', NULL, NULL, '91.51', '3000.00', '2953942.80', '6.14', '950.00', '62763.08', NULL, NULL, NULL, '10.05', '700.00', '75696.60', '2.51', '800.00', '21606.08', '4.29', '800.00', '36928.32', '8.65', '700.00', '65151.80', NULL, NULL, NULL, '0.00', NULL, '3743619.33', '385930.65', '3743619.33', '', '0.00', '', '0.00', '', 38, 335, '1', NULL, '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(35, NULL, NULL, 'Waseem', '9856231475', '2018-03-07', '1', 'Phase-2', 'Area', 'Plot', 'H-74', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1116.00', NULL, '2501116.00', NULL, '2500000.00', '', NULL, NULL, NULL, NULL, 41, 335, '1', NULL, '0', '0', '2155560.00', '55000.00', '45000.00', '30000.00', '107778.00', '107778.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, NULL, NULL, 'Gunjan Kumar ', '8978978787', '2018-03-07', '1', 'Phase-2', 'LIG', 'Flat', 'FF-102', NULL, NULL, '45.00', '484.20', '45.00', '2500.00', '1210500.00', '3.90', '1350.00', '56651.40', '3.90', '1350.00', '56651.40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8.89', '1350.00', '129136.14', '0.00', NULL, '1768891.61', '174352.67', '1768891.61', '', NULL, NULL, NULL, NULL, 42, 232, '1', NULL, '0', '0', NULL, '0.00', NULL, '141600.00', NULL, NULL, '0.00', NULL, NULL, NULL, NULL, NULL, NULL),
(37, NULL, NULL, 'GUNGUN KUMARI', '9897654565', '2018-03-07', '1', 'Phase-2', 'LIG', 'Flat', 'GF-2', NULL, NULL, '45.00', '484.20', '45.00', '2500.00', '1210500.00', '3.90', '1350.00', '56651.40', '3.90', '1350.00', '56651.40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8.89', '1350.00', '129136.14', '0.00', NULL, '1768891.61', '174352.67', '1768891.61', '', NULL, NULL, NULL, NULL, 43, 335, '1', NULL, '0', '0', NULL, '0.00', NULL, '141600.00', NULL, NULL, '0.00', NULL, NULL, NULL, NULL, NULL, NULL),
(38, NULL, NULL, 'Yash Kumar', '8978787878', '2018-03-07', '1', 'Phase-2', 'EWS', 'Flat', 'GF-10', NULL, NULL, '22.90', '246.51', '22.90', '2500.00', '616010.00', '3.90', '1350.00', '56651.40', '3.90', '1350.00', '56651.40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8.89', '1350.00', '129136.14', '0.00', NULL, '1103062.81', '103013.87', '1103062.81', '', NULL, NULL, NULL, NULL, 44, 335, '1', NULL, '0', '0', NULL, '0.00', NULL, '141600.00', NULL, NULL, '0.00', NULL, NULL, NULL, NULL, NULL, NULL),
(39, NULL, NULL, 'THULLU RAM', '9638521478', '2018-03-07', '1', 'Phase-2', 'LIG', 'Flat', 'GF-7', NULL, NULL, '45.00', '484.20', '45.00', '2500.00', '1210500.00', '3.90', '1350.00', '56651.40', '3.90', '1350.00', '56651.40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8.89', '1350.00', '129136.14', '0.00', NULL, '1768891.61', '174352.67', '1768891.61', '', NULL, NULL, NULL, NULL, 45, 335, '1', NULL, '0', '0', NULL, '0.00', NULL, '141600.00', NULL, NULL, '0.00', NULL, NULL, NULL, NULL, NULL, NULL),
(40, NULL, NULL, 'Rahul Mahajan ', '8871887109', '2018-03-08', '1', 'Phase-2', 'HIG', 'Duplex', 'H-58', '7.00X13.00', '22.96X42.64', NULL, NULL, '93.44', '3000.00', '3016243.20', '6.32', '950.00', '64603.04', NULL, NULL, NULL, '10.50', '500.00', '56490.00', '2.35', '800.00', '20228.80', '6.64', '800.00', '57157.12', '8.67', '700.00', '65302.44', NULL, NULL, NULL, '37627.54', NULL, '3837627.54', '396002.94', '3800000.00', '', '10000.00', '', '10000.00', '', 46, 335, '1', NULL, '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, NULL, NULL, 'Rakesh Sharma Rahul Raj ', '8817448282', '2018-03-08', '1', 'Phase-2', 'HIG', 'Duplex', 'H-59', '7.00X13.00', '22.96X42.64', NULL, NULL, '93.44', '3000.00', '3016243.20', '6.32', '950.00', '64603.04', NULL, NULL, NULL, '10.50', '500.00', '56490.00', '2.35', '800.00', '20228.80', '6.64', '800.00', '57157.12', '8.67', '700.00', '65302.44', NULL, NULL, NULL, '0.00', NULL, '3815227.54', '393602.94', '3815227.54', '', '0.00', '', '0.00', '', 47, 335, '1', NULL, '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, NULL, NULL, 'Aarti', '9876541235', '2018-03-08', '1', 'Phase-2', 'HIG', 'Duplex', 'H-87', '6.70X13.00', '21.976X42.64', NULL, NULL, '91.51', '3000.00', '2953942.80', '6.14', '950.00', '62763.08', NULL, NULL, NULL, '10.05', '700.00', '75696.60', '2.51', '800.00', '21606.08', '4.29', '800.00', '36928.32', '8.65', '700.00', '65151.80', NULL, NULL, NULL, '0.00', NULL, '3743619.33', '385930.65', '3743619.33', '', '0.00', '', '0.00', '', 48, 232, '1', NULL, '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, NULL, NULL, 'Farha', '9876543251', '2018-03-08', '1', 'Phase-2', 'HIG', 'Duplex', 'H-232', '7.00X13.00', '22.96X42.64', NULL, NULL, '93.44', '3000.00', '3016243.20', '6.32', '950.00', '64603.04', NULL, NULL, NULL, '10.50', '500.00', '56490.00', '2.35', '800.00', '20228.80', '6.64', '800.00', '57157.12', '8.67', '700.00', '65302.44', NULL, NULL, NULL, '0.00', NULL, '3815227.54', '393602.94', '3815227.54', '', '0.00', '', '0.00', '', 49, 335, '1', NULL, '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, NULL, NULL, 'Ram', '9856471236', '2018-03-08', '2', 'Phase-1', '', 'Shop', 'shop-11', '17.00', '182.92', NULL, NULL, NULL, NULL, '127500.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', NULL, '202000.00', NULL, '202000.00', '', NULL, NULL, NULL, NULL, 50, 335, '1', NULL, '0', '0', NULL, NULL, '45000.00', '29500.00', NULL, NULL, NULL, '0.00', '0.00', '0.00', '0.00', NULL, NULL),
(45, NULL, NULL, 'Acer Dell', '8817448282', '2018-03-08', '1', 'Phase-2', 'LIG', 'Flat', 'GF-3', NULL, NULL, '45.00', '484.20', '45.00', '2500.00', '1210500.00', '3.90', '1350.00', '56651.40', '3.90', '1350.00', '56651.40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8.89', '1350.00', '129136.14', '0.00', NULL, '1768891.61', '174352.67', '1768891.61', '', NULL, NULL, NULL, NULL, 51, 335, '1', NULL, '0', '0', NULL, '0.00', NULL, '141600.00', NULL, NULL, '0.00', NULL, NULL, NULL, NULL, NULL, NULL),
(46, NULL, NULL, 'Lenovo', '8878779898', '2018-03-08', '1', 'Phase-2', 'Area', 'Plot', 'H-75', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', NULL, '2501116.00', NULL, '2501116.00', '', NULL, NULL, NULL, NULL, 52, 335, '1', NULL, '0', '0', '2155560.00', '55000.00', '45000.00', '30000.00', '107778.00', '107778.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(47, NULL, NULL, 'Mohit Advani Duplex', '8871887109', '2018-03-08', '1', 'Phase-2', 'HIG', 'Duplex', 'H-233', '7.00X13.00', '22.96X42.64', NULL, NULL, '93.44', '5000.00', '5027072.00', '6.32', '950.00', '64603.04', NULL, NULL, NULL, '10.50', '500.00', '56490.00', '2.35', '800.00', '20228.80', '6.64', '800.00', '57157.12', '8.67', '700.00', '65302.44', NULL, NULL, NULL, '89755.80', NULL, '6089755.80', '637302.40', '6000000.00', '', '10000.00', '', '10000.00', '', 53, 335, '1', NULL, '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(48, NULL, NULL, 'Vicky Ramchandani Flat ', '8871887109', '2018-03-09', '1', 'Phase-2', 'LIG', 'Flat', 'GF-4', NULL, NULL, '45.00', '484.20', '45.00', '3500.00', '1694700.00', '3.90', '2350.00', '98615.40', '3.90', '2350.00', '98615.40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8.89', '5350.00', '511761.74', '4730.14', NULL, '2856135.64', '290843.10', '2851405.50', '', NULL, NULL, NULL, NULL, 54, 335, '1', NULL, '0', '0', NULL, '0.00', NULL, '141600.00', NULL, NULL, '20000.00', NULL, NULL, NULL, NULL, NULL, NULL),
(49, NULL, NULL, 'Sumit ', '8871887109', '2018-03-09', '1', 'Phase-2', 'LIG', 'Flat', 'GF-5', NULL, NULL, '45.00', '484.20', '45.00', '2500.00', '1210500.00', '3.90', '1350.00', '56651.40', '3.90', '1350.00', '56651.40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8.89', '1350.00', '129136.14', '68891.61', NULL, '1768891.61', '174352.67', '1700000.00', '', NULL, NULL, NULL, NULL, 55, 335, '1', NULL, '0', '0', NULL, '0.00', NULL, '141600.00', NULL, NULL, '0.00', NULL, NULL, NULL, NULL, NULL, NULL),
(50, NULL, NULL, 'Phasetwo Flat', '9876543214', '2018-03-09', '1', 'Phase-2', 'LIG', 'Flat', 'TF-301', NULL, NULL, '45.00', '484.20', '45.00', '2500.00', '1210500.00', '3.90', '1350.00', '56651.40', '3.90', '1350.00', '56651.40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8.89', '1350.00', '129136.14', '771.61', NULL, '1795771.61', '177232.67', '1795000.00', 'Parking1, parking4', NULL, NULL, NULL, NULL, 56, 335, '1', NULL, '0', '0', NULL, '0.00', NULL, '141600.00', NULL, NULL, '24000.00', NULL, NULL, NULL, NULL, NULL, NULL),
(51, NULL, NULL, 'Rohit Malviya', '8871887109', '2018-03-09', '1', 'Phase-2', 'EWS', 'Flat', 'GF-1', NULL, NULL, '22.90', '246.51', '22.90', '2500.00', '616010.00', '3.90', '1350.00', '56651.40', '3.90', '1350.00', '56651.40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8.89', '1350.00', '129136.14', '3062.81', NULL, '1103062.81', '103013.87', '1100000.00', '', NULL, NULL, NULL, NULL, 57, 335, '1', NULL, '0', '0', NULL, '0.00', NULL, '141600.00', NULL, NULL, '0.00', NULL, NULL, NULL, NULL, NULL, NULL),
(52, NULL, NULL, 'Veerendra Chouhan ', '8871887109', '2018-03-09', '1', 'Phase-2', 'EWS', 'Flat', 'GF-3', NULL, NULL, '22.90', '246.51', '22.90', '2500.00', '616010.00', '3.90', '1350.00', '56651.40', '3.90', '1350.00', '56651.40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8.89', '1350.00', '129136.14', '0.00', NULL, '1103062.81', '103013.87', '1103062.81', '', NULL, NULL, NULL, NULL, 58, 335, '1', NULL, '0', '0', NULL, '0.00', NULL, '141600.00', NULL, NULL, '0.00', NULL, NULL, NULL, NULL, NULL, NULL),
(53, NULL, NULL, 'Nitin Yadav', '8871887109', '2018-03-10', '2', 'Phase-1', '', 'Shop', 'shop-12', '15.10', '162.48', NULL, NULL, NULL, NULL, '113250.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '700.00', NULL, '189850.00', NULL, '189150.00', 'heloobhai', NULL, NULL, NULL, NULL, 59, 335, '1', NULL, '0', '0', NULL, NULL, '45000.00', '29500.00', NULL, NULL, NULL, '100.00', '200.00', '300.00', '400.00', NULL, NULL),
(54, NULL, NULL, 'Nikita Chimlani', '8871887109', '0000-00-00', '2', 'Phase-1', 'HIG', 'Duplex', 'H-254', '6.00X13.00', '19.68X42.64', NULL, NULL, '108.74', '2975.57', '3481543.06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1543.06', '80000.00', '3480000.00', NULL, '3400000.00', '', NULL, NULL, NULL, NULL, 60, 335, '1', NULL, '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(55, NULL, NULL, 'Ews Phasetwo Flat', '9865326985', '2018-03-10', '1', 'Phase-2', 'EWS', 'Flat', 'FF-22', NULL, NULL, '22.90', '246.51', '22.90', '2500.00', '616010.00', '3.90', '1350.00', '56651.40', '3.90', '1350.00', '56651.40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8.89', '1350.00', '129136.14', '3062.81', NULL, '1103062.81', '103013.87', '1100000.00', '', NULL, NULL, NULL, NULL, 61, 335, '1', NULL, '0', '0', NULL, '0.00', NULL, '141600.00', NULL, NULL, '0.00', NULL, NULL, NULL, NULL, NULL, NULL),
(56, NULL, NULL, 'LIG Phasetwo Flat', '9875652586', '2018-03-10', '1', 'Phase-2', 'LIG', 'Flat', 'FF-101', NULL, NULL, '45.00', '484.20', '45.00', '2500.00', '1210500.00', '3.90', '1350.00', '56651.40', '3.90', '1350.00', '56651.40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8.89', '1350.00', '129136.14', '68891.61', NULL, '1768891.61', '174352.67', '1700000.00', '', NULL, NULL, NULL, NULL, 62, 335, '1', NULL, '0', '0', NULL, '0.00', NULL, '141600.00', NULL, NULL, '0.00', NULL, NULL, NULL, NULL, NULL, NULL),
(57, NULL, NULL, 'Phase Two Shop', '8871887109', '2018-03-10', '1', 'Phase-2', 'Area', 'Plot', 'H-76', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', NULL, '2501116.00', NULL, '2501116.00', '', NULL, NULL, NULL, NULL, 64, 335, '1', NULL, '0', '0', '2155560.00', '55000.00', '45000.00', '30000.00', '107778.00', '107778.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(58, NULL, NULL, 'Phase Two Plot', '8817448282', '2018-03-10', '1', 'Phase-2', 'Area', 'Plot', 'H-77', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', NULL, '2501116.00', NULL, '2501116.00', '', NULL, NULL, NULL, NULL, 65, 335, '1', NULL, '0', '0', '2155560.00', '55000.00', '45000.00', '30000.00', '107778.00', '107778.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(59, NULL, NULL, 'Phase Two Plot', '8817448282', '2018-03-10', '1', 'Phase-2', 'Area', 'Plot', 'H-78', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', NULL, '2501116.00', NULL, '2501116.00', '', NULL, NULL, NULL, NULL, 66, 335, '1', NULL, '0', '0', '2155560.00', '55000.00', '45000.00', '30000.00', '107778.00', '107778.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(60, NULL, NULL, 'Yati', '7787878787', '2018-03-10', '1', 'Phase-2', 'Area', 'Plot', 'H-50', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', NULL, '2607274.80', NULL, '2607274.80', '', NULL, NULL, NULL, NULL, 67, 335, '1', NULL, '0', '0', '2252068.00', '55000.00', '45000.00', '30000.00', '112603.40', '112603.40', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(61, NULL, NULL, 'Avni', '8787878878', '2018-03-10', '1', 'Phase-2', 'Area', 'Plot', 'H-80', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', NULL, '2501116.00', NULL, '2501116.00', '', NULL, NULL, NULL, NULL, 68, 335, '1', NULL, '0', '0', '2155560.00', '55000.00', '45000.00', '30000.00', '107778.00', '107778.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(62, NULL, NULL, 'Veena Gyanchandani', '8878778989', '2018-03-10', '1', 'Phase-2', 'Area', 'Plot', 'H-81', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1116.00', NULL, '2501116.00', NULL, '2500000.00', '', NULL, NULL, NULL, NULL, 69, 335, '1', NULL, '0', '0', '2155560.00', '55000.00', '45000.00', '30000.00', '107778.00', '107778.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(63, NULL, NULL, 'Aaaa', '9876789890', '0000-00-00', '2', 'Phase-1', 'HIG', 'Duplex', 'H-268', '6.00X13.00', '19.68X42.64', NULL, NULL, '108.74', '2975.57', '4700000.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '25000.00', '4700000.00', NULL, '4675000.00', ' ', NULL, NULL, NULL, NULL, 71, 340, '1', NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(64, NULL, NULL, 'Bbbb', '9879879875', '0000-00-00', '2', 'Phase-1', 'HIG', 'Duplex', 'H-330', '7.92X12.20', '25.9776X40.016', NULL, NULL, '130.11', '2486.72', '5481367.22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', '5481367.22', NULL, '5481367.22', ' ', NULL, NULL, NULL, NULL, 72, 340, '1', NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(65, NULL, NULL, 'Cc', '9879879875', '0000-00-00', '2', 'Phase-1', 'HIG', 'Duplex', 'H-313', '7.92X12.20', '25.9776X40.016', NULL, NULL, '130.11', '2486.72', '7481367.22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '100.00', '7481367.22', NULL, '7481267.22', '   ', NULL, NULL, NULL, NULL, 73, 335, '1', NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(66, NULL, NULL, 'Aaaa', '9876549859', '0000-00-00', '2', 'Phase-1', 'HIG', 'Duplex', 'H-348', '7.92X12.20', '25.9776X40.016', NULL, NULL, '130.11', '5000.00', '6999918.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', '6999918.00', NULL, '6999918.00', '', NULL, NULL, NULL, NULL, 75, 335, '1', NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(67, NULL, NULL, 'Neel Nitin Mukesh', '8871887109', '0000-00-00', '2', 'Phase-1', 'HIG', 'Duplex', 'H-313', '7.92X12.20', '25.9776X40.016', NULL, NULL, '130.11', '5000.00', '1212121.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '21.00', '2100.00', '1212100.00', NULL, '1210000.00', '', NULL, NULL, NULL, NULL, 76, 335, '1', NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(68, NULL, NULL, 'Naresh Chimlani', '8871887109', '0000-00-00', '2', 'Phase-1', 'HIG', 'Duplex', 'H-313', '7.92X12.20', '25.9776X40.016', NULL, NULL, '130.11', '5000.00', '1111111.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '111.00', '1000.00', '1111000.00', NULL, '1110000.00', ' ', NULL, NULL, NULL, NULL, 77, 335, '1', NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(69, NULL, NULL, 'Manisha Rajput', '8871887109', '0000-00-00', '2', 'Phase-1', 'HIG', 'Duplex', 'H-331', '7.92X12.20', '25.9776X40.016', NULL, NULL, '130.11', '5000.00', '9099918.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '18.00', '900.00', '9099900.00', NULL, '9099000.00', ' ', NULL, NULL, NULL, NULL, 78, 335, '1', NULL, '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(70, NULL, NULL, 'Ashish Mishra', '8871887109', '0000-00-00', '2', 'Phase-1', 'HIG', 'Duplex', 'H-313', '7.92X12.20', '25.9776X40.016', NULL, NULL, '130.11', '5000.00', '13999836.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', '13999836.00', NULL, '13999836.00', '', NULL, NULL, NULL, NULL, 79, 335, '1', NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(71, NULL, NULL, 'Rohan Singh Sisodiya', '8871887109', '0000-00-00', '2', 'Phase-1', 'HIG', 'Duplex', 'H-313', '7.92X12.20', '25.9776X40.016', NULL, NULL, '130.11', '5000.00', '11999918.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', '11999918.00', NULL, '11999918.00', '', NULL, NULL, NULL, NULL, 80, 335, '1', NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5000000.00'),
(72, NULL, NULL, 'Ashwin Sir', '8871887109', '0000-00-00', '2', 'Phase-1', 'HIG', 'Duplex', 'H-313', '7.92X12.20', '25.9776X40.016', NULL, NULL, '130.11', '5000.00', '2299836.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', '2299836.00', NULL, '2299836.00', ' ', NULL, NULL, NULL, NULL, 81, 335, '1', NULL, '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1199918.00', '1099918.00'),
(73, NULL, NULL, 'Kavya Sharma', '8871887109', '2018-03-22', '2', 'Phase-1', '', 'Shop', 'shop-2', '18.90', '203.36', NULL, NULL, NULL, NULL, '141750.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', NULL, '216250.00', NULL, '216250.00', '', NULL, NULL, NULL, NULL, 82, 335, '1', NULL, '0', NULL, NULL, NULL, '45000.00', '29500.00', NULL, NULL, NULL, '0.00', '0.00', '0.00', '0.00', NULL, NULL),
(74, NULL, NULL, 'Phase One Duplex Updated', '9856989689', '0000-00-00', '2', 'Phase-1', 'HIG', 'Duplex', 'H-85', '6.70X13.00', '21.976X42.64', NULL, NULL, '119.98', '2696.68', '5481372.89', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', '5481372.89', NULL, '5481372.89', ' ', NULL, NULL, NULL, NULL, 84, 335, '1', NULL, '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3481372.89', '2000000.00'),
(75, NULL, NULL, 'Phase One Duplex Two', '9865985696', '0000-00-00', '2', 'Phase-1', 'HIG', 'Duplex', 'H-230', '7.00X13.00', '22.96X42.64', NULL, NULL, '130.11', '2486.72', '7481367.22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', '7481367.22', NULL, '7481367.22', '', NULL, NULL, NULL, NULL, 85, 335, '1', NULL, '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3481367.22', '4000000.00'),
(76, NULL, NULL, 'Phase Two Plot', '9876543215', '2018-03-23', '1', 'Phase-2', 'Area', 'Plot', 'H-349', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', NULL, '2501116.00', NULL, '2501116.00', '', NULL, NULL, NULL, NULL, 86, 335, '1', NULL, '0', NULL, '2155560.00', '55000.00', '45000.00', '30000.00', '107778.00', '107778.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(77, NULL, NULL, 'Nirbhay Singh Chouhan', '8817448282', '2018-03-23', '1', 'Phase-2', 'HIG', 'Duplex', 'H-234', '7.00X13.00', '22.96X42.64', NULL, NULL, '93.44', '3000.00', '3016243.20', '6.32', '950.00', '64603.04', NULL, NULL, NULL, '10.50', '500.00', '56490.00', '2.35', '800.00', '20228.80', '6.64', '800.00', '57157.12', '8.67', '700.00', '65302.44', NULL, NULL, NULL, '0.00', NULL, '3815227.54', '393602.94', '3815227.54', '', '0.00', '', '0.00', '', 87, 335, '1', NULL, '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78, NULL, NULL, 'Winchal', '8871887109', '0000-00-00', '2', 'Phase-1', 'HIG', 'Duplex', 'H-313', '7.92X12.20', '25.9776X40.016', NULL, NULL, '130.11', '5000.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5.00', ', , , , , , , ', NULL, NULL, NULL, NULL, 83, 335, '1', NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(79, NULL, NULL, 'Shrinkhla Sharma', '8817448282', '0000-00-00', '2', 'Phase-1', 'HIG', 'Duplex', 'H-255', '6.00X13.00', '19.68X42.64', NULL, NULL, '108.74', '2975.57', '3481543.06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '81420.56', '20000.00', '3400122.50', NULL, '3380122.50', '  ', NULL, NULL, NULL, NULL, 88, 335, '1', NULL, '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1740771.53', '1740771.53'),
(80, NULL, NULL, 'Rohan Sharma', '8898998896', '2018-03-24', '1', 'Phase-2', 'Area', 'Plot', 'H-82', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '468593.00', NULL, '2501116.00', NULL, '2032523.00', '', NULL, NULL, NULL, NULL, 91, 335, '1', NULL, '0', NULL, '2155560.00', '55000.00', '45000.00', '30000.00', '107778.00', '107778.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(81, NULL, NULL, 'Vijay Deenanath Chouhan', '8878778796', '2018-03-24', '1', 'Phase-2', 'Area', 'Plot', 'H-51', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '489575.00', NULL, '2607274.80', NULL, '2117699.80', '', NULL, NULL, NULL, NULL, 92, 335, '1', NULL, '0', NULL, '2252068.00', '55000.00', '45000.00', '30000.00', '112603.40', '112603.40', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(82, NULL, NULL, 'Anjali Upadyaya', '8874885858', '0000-00-00', '2', 'Phase-1', 'HIG', 'Duplex', 'H-256', '6.00X13.00', '19.68X42.64', NULL, NULL, '108.74', '2975.57', '3400000.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', '3400000.00', NULL, '3400000.00', ' ', NULL, NULL, NULL, NULL, 93, 335, '1', NULL, '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1700000.00', '1700000.00'),
(83, NULL, NULL, 'Pooja Gaur', '8817448282', '0000-00-00', '2', 'Phase-1', 'HIG', 'Duplex', 'H-257', '6.00X13.00', '19.68X42.64', NULL, NULL, '108.74', '2975.57', '3000000.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', '3000000.00', NULL, '3000000.00', '', NULL, NULL, NULL, NULL, 94, 335, '1', NULL, '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1500000.00', '1500000.00'),
(84, NULL, NULL, 'Updated Phase Two Plot', '9856989632', '2018-03-24', '1', 'Phase-2', 'Area', 'Plot', 'H-350', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '116.00', NULL, '2501000.00', NULL, '2501116.00', '', NULL, NULL, NULL, NULL, 95, 232, '1', NULL, '0', '0', '2155560.00', '55000.00', '45000.00', '30000.00', '107778.00', '107778.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(85, NULL, NULL, 'Avinash Verma', '8817448282', '0000-00-00', '2', 'Phase-1', 'HIG', 'Duplex', 'H-258', '6.00X13.00', '19.68X42.64', NULL, NULL, '108.74', '2975.57', '3000000.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', '3000000.00', NULL, '3000000.00', '', NULL, NULL, NULL, NULL, 96, 335, '1', NULL, '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1500000.00', '1500000.00'),
(86, NULL, NULL, 'Roshni Kulhare', '8878778745', '2018-03-24', '1', 'Phase-2', 'Area', 'Plot', 'H-82', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', NULL, '2501116.00', NULL, '2501116.00', '', NULL, NULL, NULL, NULL, 97, 335, '1', NULL, '0', '0', '2155560.00', '55000.00', '45000.00', '30000.00', '107778.00', '107778.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(87, NULL, NULL, 'Phase Two Flat', '9658745896', '2018-03-24', '1', 'Phase-2', 'LIG', 'Flat', 'FF-104', NULL, NULL, '45.00', '484.20', '45.00', '2500.00', '1210500.00', '3.90', '1350.00', '56651.40', '3.90', '1350.00', '56651.40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8.89', '1350.00', '129136.14', '891.61', NULL, '1768891.61', '174352.67', '1768000.00', '', NULL, NULL, NULL, NULL, 98, 335, '1', NULL, '0', NULL, NULL, '0.00', NULL, '141600.00', NULL, NULL, '0.00', NULL, NULL, NULL, NULL, NULL, NULL),
(88, NULL, NULL, 'Rajiv Uptodate', '9865986532', '2018-03-24', '1', 'Phase-2', 'Area', 'Plot', 'H-361', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1116.00', NULL, '2500000.00', NULL, '2501116.00', '', NULL, NULL, NULL, NULL, 99, 335, '1', NULL, '0', NULL, '2155560.00', '55000.00', '45000.00', '30000.00', '107778.00', '107778.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(89, NULL, NULL, 'Gunjan', '8787878787', '2018-03-24', '1', 'Phase-2', 'Area', 'Plot', 'H-360', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1116.00', NULL, '2501116.00', NULL, '2500000.00', '', NULL, NULL, NULL, NULL, 100, 335, '1', NULL, '0', '0', '2155560.00', '55000.00', '45000.00', '30000.00', '107778.00', '107778.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(90, NULL, NULL, 'NItin Motwani', '8878778963', '2018-03-25', '1', 'Phase-2', 'HIG', 'Duplex', 'H-235', '7.00X13.00', '22.96X42.64', NULL, NULL, '93.44', '3000.00', '3016243.20', '6.32', '950.00', '64603.04', NULL, NULL, NULL, '10.50', '500.00', '56490.00', '2.35', '800.00', '20228.80', '6.64', '800.00', '57157.12', '8.67', '700.00', '65302.44', NULL, NULL, NULL, '0.00', NULL, '3815227.54', '393602.94', '3815227.54', '', '0.00', '', '0.00', '', 102, 335, '1', NULL, '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(91, NULL, NULL, 'Raj Kumar Ramchandani', '8874885858', '0000-00-00', '2', 'Phase-1', 'HIG', 'Duplex', 'H-259', '6.00X13.00', '19.68X42.64', NULL, NULL, '108.74', '2975.57', '3481543.06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', '3481543.06', NULL, '3481543.06', '', NULL, NULL, NULL, NULL, 103, 335, '1', NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3481543.06', '0.00'),
(92, NULL, NULL, 'Ram Kumar Verma', '8878778787', '2018-03-27', '1', 'Phase-2', 'LIG', 'Flat', 'GF-1', NULL, NULL, '45.00', '484.20', '45.00', '2500.00', '1210500.00', '3.90', '1350.00', '56651.40', '3.90', '1350.00', '56651.40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8.89', '1350.00', '129136.14', '0.00', NULL, '1768891.61', '174352.67', '1768891.61', '', NULL, NULL, NULL, NULL, 104, 335, '1', NULL, '0', '0', NULL, '0.00', NULL, '141600.00', NULL, NULL, '0.00', NULL, NULL, NULL, NULL, NULL, NULL),
(93, NULL, NULL, 'Veena Gyanchandani', '8878779797', '2018-03-27', '1', 'Phase-2', 'EWS', 'Flat', 'GF-1', NULL, NULL, '22.90', '246.51', '22.90', '2500.00', '616010.00', '3.90', '1350.00', '56651.40', '3.90', '1350.00', '56651.40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8.89', '1350.00', '129136.14', '0.00', NULL, '1103062.81', '103013.87', '1103062.81', '', NULL, NULL, NULL, NULL, 105, 335, '1', NULL, '0', '0', NULL, '0.00', NULL, '141600.00', NULL, NULL, '0.00', NULL, NULL, NULL, NULL, NULL, NULL),
(94, NULL, NULL, 'Dinesh Doultani', '8878779898', '2018-03-27', '1', 'Phase-2', 'EWS', 'Flat', 'GF-2', NULL, NULL, '22.90', '246.51', '22.90', '2500.00', '616010.00', '3.90', '1350.00', '56651.40', '3.90', '1350.00', '56651.40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8.89', '1350.00', '129136.14', '0.00', NULL, '1103062.81', '103013.87', '1103062.81', '', NULL, NULL, NULL, NULL, 106, 335, '1', NULL, '0', '0', NULL, '0.00', NULL, '141600.00', NULL, NULL, '0.00', NULL, NULL, NULL, NULL, NULL, NULL),
(95, NULL, NULL, 'Vandana Sharma ', '8878779696', '2018-03-27', '1', 'Phase-2', 'LIG', 'Flat', 'GF-1', NULL, NULL, '45.00', '484.20', '45.00', '2500.00', '1210500.00', '3.90', '1350.00', '56651.40', '3.90', '1350.00', '56651.40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8.89', '1350.00', '129136.14', '0.00', NULL, '1768891.61', '174352.67', '1768891.61', '', NULL, NULL, NULL, NULL, 107, 335, '1', NULL, '0', '0', NULL, '0.00', NULL, '141600.00', NULL, NULL, '0.00', NULL, NULL, NULL, NULL, NULL, NULL),
(96, NULL, NULL, 'Raj Kumar Sharma ', '8874885858', '2018-03-27', '1', 'Phase-2', 'LIG', 'Flat', 'FF-103', NULL, NULL, '45.00', '484.20', '45.00', '2500.00', '1210500.00', '3.90', '1350.00', '56651.40', '3.90', '1350.00', '56651.40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8.89', '1350.00', '129136.14', '0.00', NULL, '1768891.61', '174352.67', '1768891.61', '', NULL, NULL, NULL, NULL, 108, 335, '1', NULL, '0', '0', NULL, '0.00', NULL, '141600.00', NULL, NULL, '0.00', NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `presales_costcalculation_tbl` (`id`, `mutation`, `society`, `name`, `mobile`, `date`, `project_id`, `block`, `category`, `type`, `unit_no`, `plot_size_mtr`, `plot_size_ft`, `flat_carpet_area_mt`, `flat_carpet_area_ft`, `cost_carpet_area`, `cost_ca_ref_rate`, `total_unit_cost_as_per_carpet_area`, `cost_balcony_area`, `cost_balcony_ref_rate`, `total_balcony_area`, `cost_balcony_area_2`, `cost_balcony_ref_rate_2`, `total_balcony_area_2`, `cost_wash_area`, `cost_washarea_ref_rate`, `total_wash_area`, `cost_open_terrace_area_front`, `cost_open_terrace_front_area_ref_rate`, `total_open_terrace_area_front`, `cost_open_terrace_area_back`, `cost_open_terrace_back_area_ref_rate`, `total_open_terrace_area_back`, `cost_car_poarch_area`, `cost_car_poarch_area_ref_rate`, `total_car_poarch_area`, `proportionate_common_area`, `proportionate_common_area_ref_rate`, `total_proportionate_common_area`, `discount`, `discount_two`, `cost_payble_to_company`, `gst`, `total_cost`, `discussion`, `extra_charge`, `extra_charge_des`, `premium_location_charges`, `premium_location_charges_des`, `prospect_id`, `login_id`, `is_request`, `is_checked`, `get_approval`, `is_sales_seen`, `basic_cost_ref_rate`, `mpseb_cost_ref_rate`, `water_connection_ref_rate`, `maintenance_cost_ref_rate`, `corner_charges`, `garden_facing_charges`, `flat_parking`, `MPSEB_system`, `registry_charges`, `monthly`, `MPSEB_meter`, `land_cost`, `construction_cost`) VALUES
(97, NULL, NULL, 'Raj Kumar Sharma ji', '8878996969', '2018-03-27', '1', 'Phase-2', 'EWS', 'Flat', 'GF-9', NULL, NULL, '22.90', '246.51', '22.90', '2500.00', '616010.00', '3.90', '1350.00', '56651.40', '3.90', '1350.00', '56651.40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8.89', '1350.00', '129136.14', '0.00', NULL, '1103062.81', '103013.87', '1103062.81', '', NULL, NULL, NULL, NULL, 109, 335, '1', NULL, '0', NULL, NULL, '0.00', NULL, '141600.00', NULL, NULL, '0.00', NULL, NULL, NULL, NULL, NULL, NULL),
(98, NULL, NULL, 'Verma Ji', '8817448282', '0000-00-00', '2', 'Phase-1', 'HIG', 'Duplex', 'H-259', '6.00X13.00', '19.68X42.64', NULL, NULL, '108.74', '2975.57', '3481543.06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', '3481543.06', NULL, '3481543.06', '', NULL, NULL, NULL, NULL, 110, 335, '1', NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3481543.06', '0.00'),
(99, NULL, NULL, 'Meenu Gupta', '8878774545', '2018-03-28', '1', 'Phase-2', 'HIG', 'Duplex', 'H-236', '7.00X13.00', '22.96X42.64', NULL, NULL, '93.44', '3000.00', '3016243.20', '6.32', '950.00', '64603.04', NULL, NULL, NULL, '10.50', '500.00', '56490.00', '2.35', '800.00', '20228.80', '6.64', '800.00', '57157.12', '8.67', '700.00', '65302.44', NULL, NULL, NULL, '0.00', NULL, '3815227.54', '393602.94', '3815227.54', '', '0.00', '', '0.00', '', 112, 335, '1', NULL, '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(100, NULL, NULL, 'Deepak', '8817448282', '2018-09-24', '1', 'Phase-2', 'HIG', 'Duplex', 'H-237', '7.00X13.00', '22.96X42.64', NULL, NULL, '93.44', '5000.00', '5027072.00', '6.32', '950.00', '64603.04', NULL, NULL, NULL, '10.50', '500.00', '56490.00', '2.35', '800.00', '20228.80', '6.64', '800.00', '57157.12', '8.67', '700.00', '65302.44', NULL, NULL, NULL, '0.00', NULL, '6067355.80', '634902.40', '6067355.80', '', '0.00', '', '0.00', '', 113, 335, '1', NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_code` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `product_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_code`, `product_name`, `product_price`) VALUES
('101', 'green apple ', 102),
('102', 'Royal Stage ', 320),
('103', 'Orange ', 102),
('104', 'MI A1 Back Cover', 102);

-- --------------------------------------------------------

--
-- Table structure for table `project_dtls_tbl`
--

CREATE TABLE `project_dtls_tbl` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `block` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `unit_type` varchar(80) NOT NULL,
  `category` varchar(50) DEFAULT NULL,
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
  `shop_area_sqft` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_dtls_tbl`
--

INSERT INTO `project_dtls_tbl` (`id`, `project_id`, `block`, `unit_type`, `category`, `carpet_area`, `ca_ref_rate`, `first_floor_carpet_area`, `ffca_ref_rate`, `ground_floor_carpet_area`, `gfca_ref_rate`, `balcony_area`, `balcony_ref_rate`, `common_area`, `commonarea_ref_rate`, `wash_area`, `washarea_ref_rate`, `plot_area`, `plot_boundary`, `open_terrace_front_area`, `open_terrace_front_area_ref_rate`, `open_terrace_back_area`, `open_terrace_back_area_ref_rate`, `preferred_location_area`, `preferred_location_area_ref_rate`, `car_poarch_area`, `car_poarch_area_ref_rate`, `covered_terrace_front_side_area`, `covered_terrace_front_side_area_ref_rate`, `roof_covered_ground_ff_area`, `roof_covered_ground_ff_area_ref_rate`, `roof_covered_ground_gf_area`, `roof_covered_ground_gf_area_ref_rate`, `box_back_side_area`, `box_back_side_area_ref_rate`, `plot_size_mtr`, `plot_size_ft`, `plot_size_sqmts`, `plot_size_sqft`, `basic_cost_ref_rate`, `mpseb_cost_ref_rate`, `water_connection_ref_rate`, `maintenance_cost_ref_rate`, `flat_carpet_area_sqmt`, `flat_carpet_area_sqft`, `built_up_area_sqft`, `parking`, `parking_ref_rate`, `flat_type`, `unit_cost_carpet_area`, `unit_cost_carpet_area_ref_rate`, `balcony_area_2`, `balcony_area_2_ref_rate`, `built_up_area`, `built_up_rate`, `basic_cost`, `shop_area_sqmt`, `shop_area_sqft`) VALUES
(14, 1, 'Phase-2', 'Duplex', 'Other', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', NULL, NULL, '0.00', '0.00', '0.00', '0.00', NULL, NULL, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '00X00', '0X0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 1, 'Phase-2', 'Duplex', 'HIG', '93.44', '3000.00', '42.12', '1500.00', '51.32', '1500.00', '6.32', '950.00', NULL, NULL, '10.50', '500.00', '91.00', NULL, '2.35', '800.00', '6.64', '800.00', NULL, NULL, '8.67', '700.00', NULL, NULL, '64.35', '500.00', '66.70', '500.00', '0.82', '1050.00', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 1, 'Phase-2', 'Duplex', 'HIG', '91.51', '3000.00', '41.54', '1500.00', '49.97', '1500.00', '6.14', '950.00', NULL, NULL, '10.05', '700.00', '87.10', NULL, '2.51', '800.00', '4.29', '800.00', NULL, NULL, '8.65', '700.00', NULL, NULL, '56.53', '250.00', '63.63', '300.00', '0.82', '1050.00', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 1, 'Phase-2', 'Duplex', 'HIG', '84.91', '3000.00', '39.84', '1500.00', '45.07', '1500.00', '6.82', '950.00', NULL, NULL, '10.50', '700.00', '85.40', NULL, '2.77', '800.00', '3.96', '800.00', NULL, NULL, '9.60', '700.00', NULL, NULL, '54.10', '300.00', '61.40', '300.00', '0.82', '1050.00', '7.00X12.20', '22.96X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 4, 'Phase-3', 'Plot', 'Area', '1000.00', '99.94', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '100X100', '328X328', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 1, 'Phase-2', 'Plot', 'Area', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '87.10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '6.70X13.00', '21.976X42.64', NULL, NULL, '2300.00', '55000.00', '45000.00', '30000.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 1, 'Phase-2', 'Plot', 'Area', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '91.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7.00X13.00', '22.96X42.64', NULL, NULL, '2300.00', '55000.00', '45000.00', '30000.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 1, 'Phase-2', 'Flat', 'LIG', NULL, NULL, NULL, NULL, NULL, NULL, '3.90', '1350.00', '8.89', '1350.00', '66.66', '1350.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '45.00', '484.20', '516.48', 'Open', '0.00', NULL, '484.20', '2500.00', '3.90', '1350.00', NULL, NULL, NULL, NULL, NULL),
(28, 1, 'Phase-2', 'Flat', 'EWS', NULL, NULL, NULL, NULL, NULL, NULL, '3.90', '1350.00', '8.89', '1350.00', '2.32', '1350.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '22.90', '246.51', NULL, NULL, NULL, NULL, '246.51', '2500.00', '3.90', '1350.00', NULL, NULL, NULL, NULL, NULL),
(30, 2, 'Phase-1', 'Duplex', 'HIG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '78.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '6.00X13.00', '19.68X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '108.74', NULL, '2975.57', NULL, NULL),
(31, 2, 'Phase-1', 'Duplex', 'HIG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '73.20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '97.58', NULL, '3315.63', NULL, NULL),
(33, 2, 'Phase-1', 'Duplex', 'HIG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '96.62', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7.92X12.20', '25.9776X40.016', NULL, NULL, '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '130.11', NULL, '5000.00', NULL, NULL),
(35, 2, 'Phase-1', 'Duplex', 'HIG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '97.60', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8.00X12.20', '26.24X40.016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '130.11', NULL, '2486.72', NULL, NULL),
(36, 2, 'Phase-1', 'Duplex', 'HIG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '85.40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7.00X12.20', '22.96X40.025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '114.77', NULL, '2818.96', NULL, NULL),
(37, 2, 'Phase-1', 'Duplex', 'HIG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '87.10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '119.98', NULL, '2696.68', NULL, NULL),
(38, 2, 'Phase-1', 'Duplex', 'HIG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '91.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '130.11', NULL, '2486.72', NULL, NULL),
(46, 2, 'Phase-1', 'Shop', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '7500.00', '55000.00', '45000.00', '29500.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9.28', '99.85'),
(47, 2, 'Phase-1', 'Shop', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7500.00', '55000.00', '45000.00', '29500.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '17.00', '182.92'),
(48, 2, 'Phase-1', 'Shop', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7500.00', '55000.00', '45000.00', '29500.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9.12', '98.13'),
(49, 2, 'Phase-1', 'Shop', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7500.00', '55000.00', '45000.00', '29500.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '18.90', '203.36'),
(50, 2, 'Phase-1', 'Shop', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7500.00', '55000.00', '45000.00', '29500.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '17.30', '186.15'),
(51, 2, 'Phase-1', 'Shop', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7500.00', '55000.00', '45000.00', '29500.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '11.97', '128.80'),
(52, 2, 'Phase-1', 'Shop', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7500.00', '55000.00', '45000.00', '29500.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '16.54', '177.97'),
(53, 2, 'Phase-1', 'Shop', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7500.00', '55000.00', '45000.00', '29500.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '12.20', '131.27'),
(54, 2, 'Phase-1', 'Shop', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7500.00', '55000.00', '45000.00', '29500.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '13.15', '141.49'),
(55, 2, 'Phase-1', 'Shop', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7500.00', '55000.00', '45000.00', '29500.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9.08', '97.70'),
(56, 2, 'Phase-1', 'Shop', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7500.00', '55000.00', '45000.00', '29500.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '15.10', '162.48'),
(57, 2, 'Phase-1', 'Shop', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7500.00', '55000.00', '45000.00', '29500.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9.60', '103.30'),
(58, 2, 'Phase-1', 'Shop', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7500.00', '55000.00', '45000.00', '29500.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9.76', '105.02'),
(59, 2, 'Phase-1', 'Shop', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7500.00', '55000.00', '45000.00', '29500.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '18.53', '199.38'),
(60, 2, 'Phase-1', 'Shop', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7500.00', '55000.00', '45000.00', '29500.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '15.11', '162.58'),
(61, 2, 'Phase-1', 'Shop', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7500.00', '55000.00', '45000.00', '29500.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10.08', '108.46'),
(62, 2, 'Phase-1', 'Flat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3.90', '1350.00', '8.89', '1350.00', '2.32', '1350.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '57.14', '614.83', '750.00', NULL, NULL, 'Type A', '57.14', '2500.00', '3.90', '1350.00', NULL, NULL, NULL, NULL, NULL),
(63, 2, 'Phase-1', 'Flat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3.90', '1350.00', '8.89', '1350.00', '2.32', '1350.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '57.14', '614.83', '750.00', NULL, NULL, 'Type B', '57.14', '2500.00', '3.90', '1350.00', NULL, NULL, NULL, NULL, NULL),
(64, 2, 'Phase-1', 'Flat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3.90', '1350.00', '8.89', '1350.00', '2.11', '1350.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '54.00', '581.04', '680.00', NULL, NULL, 'Type C', '54.00', '2500.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(65, 2, 'Phase-1', 'Flat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3.90', '1350.00', '8.89', '1350.00', '2.47', '1350.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '64.62', '695.31', '840.00', NULL, NULL, 'Type D', '64.62', '2500.00', '3.90', '1350.00', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `project_status`
--

CREATE TABLE `project_status` (
  `id` int(11) NOT NULL,
  `project_id` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `block` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `project_status`
--

INSERT INTO `project_status` (`id`, `project_id`, `block`, `status`) VALUES
(1, '1', 'Phase-2', 'on-going'),
(2, '1', 'Phase-2', 'On-Going'),
(3, '2', 'EWS UNITS', 'On-Going'),
(4, '2', 'Phase-1', 'On-Going');

-- --------------------------------------------------------

--
-- Table structure for table `project_tbl`
--

CREATE TABLE `project_tbl` (
  `id` int(11) NOT NULL,
  `project_name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `block` text COLLATE utf8_unicode_ci NOT NULL,
  `registration_no` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `pincode` int(10) NOT NULL,
  `contact_no` int(12) NOT NULL,
  `status` enum('on-going','completed') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'on-going'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `project_tbl`
--

INSERT INTO `project_tbl` (`id`, `project_name`, `location`, `block`, `registration_no`, `city`, `state`, `pincode`, `contact_no`, `status`) VALUES
(1, 'ESSARJEE SAMPADA', 'Khajuri Kalan, Bhopal', 'Phase-2', '90012008', 'Bhopal', 'Madhya Pradesh', 462030, 755, 'on-going'),
(2, 'ESSARJEE SAMPADA', 'Khajuri Kalan, Bhopal', 'Phase-1', '90012008', 'Bhopal', 'Madhya Pradesh', 462030, 755, 'on-going');

-- --------------------------------------------------------

--
-- Table structure for table `prospect_discussions_tbl`
--

CREATE TABLE `prospect_discussions_tbl` (
  `id` int(11) NOT NULL,
  `prospect_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meeting_date` date DEFAULT NULL,
  `discussions` text COLLATE utf8_unicode_ci,
  `is_read` enum('1','0') COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_fresh` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `prospect_discussions_tbl`
--

INSERT INTO `prospect_discussions_tbl` (`id`, `prospect_id`, `name`, `date`, `meeting_date`, `discussions`, `is_read`, `is_fresh`) VALUES
(1, '83', 'Winchal', '23-03-2018', '2018-03-23', 'asdfdasfasdfasdf', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `prospect_project_info_tbl`
--

CREATE TABLE `prospect_project_info_tbl` (
  `id` int(11) NOT NULL,
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
  `login_id` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `prospect_project_info_tbl`
--

INSERT INTO `prospect_project_info_tbl` (`id`, `name`, `mobile`, `email`, `address`, `project_id`, `project_name`, `block`, `type`, `category`, `unit_no`, `plot_size_mtr`, `plot_size_ft`, `flat_type`, `floor`, `cal`, `status`, `login_id`) VALUES
(1, 'Raman', '8817448282', '', '', '1', '', 'Phase-2', 'Duplex', 'HIG', 'H-233', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, 'BOOKED', '335'),
(2, 'Rohit Kumar Malviya', '8959182002', 'yogendrasrgc191173@gmail.com', '545/D-3/A-sector,Piplani,BHEL,Bhopal', '2', '', 'Phase-1', 'Duplex', 'HIG', 'H-123', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, 'HOLD', '335'),
(3, 'Rohit Kumar Malviya', '8959182002', '', '545/D-3/A-sector/, Piplani,BHEL, Bhopal', '2', '', 'Phase-1', 'Duplex', 'HIG', 'H-123', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, 'BOOKED', '336'),
(4, 'Duplex Raja', '9876543215', 'ashwin.j@ogatechnologies.com', '', '2', '', 'Phase-1', 'Duplex', 'HIG', 'H-101', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, 'BOOKED', '335'),
(5, 'Abhishek Pandey', '9685745634', '', '', '2', '', 'Phase-1', 'Duplex', 'HIG', 'H-254', '6.00X13.00', '19.68X42.64', NULL, NULL, NULL, 'BOOKED', '232'),
(6, 'Iram Khan', '9685743654', '', '', '1', '', 'Phase-2', 'Flat', 'LIG', 'GF-1', '0', '', NULL, NULL, NULL, 'BOOKED', '335'),
(7, 'Pankaj Kumar Jha ', '9898989898', '', '', '1', '', 'Phase-2', 'Flat', 'EWS', 'GF-10', '0', '', NULL, NULL, NULL, 'BOOKED', '335'),
(8, 'Shreedevi', '8871887109', '', '', '1', '', 'Phase-2', 'Flat', 'EWS', 'GF-5', '0', '', NULL, NULL, NULL, 'BOOKED', '335'),
(9, 'Ranjan Shah', '8787878787', '', '', '1', '', 'Phase-2', 'Flat', 'EWS', 'GF-11', '0', '', NULL, NULL, NULL, 'BOOKED', '335'),
(10, 'Phaseone Duplex', '9876543215', 'ashwin.j@ogatechnologies.com', 'Gwalior', '2', '', 'Phase-1', 'Duplex', 'HIG', 'H-118', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, 'BOOKED', '335'),
(11, 'Ritika Singh', '9898989898', '', '', '1', '', 'Phase-2', 'Plot', 'Area', 'H-80', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, 'HOLD', '335'),
(12, 'Ganesh', '8989898989', '', '', '1', '', 'Phase-2', 'Plot', 'Area', 'H-80', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, 'HOLD', '335'),
(13, 'Lokesh ', '8989898989', '', '', '1', '', 'Phase-2', 'Flat', 'EWS', 'GF-12', '0', '', NULL, NULL, NULL, 'BOOKED', '335'),
(14, 'Prateek Gupta', '8787878787', '', '', '2', '', 'Phase-1', 'Duplex', 'HIG', 'H-28', '7.00X12.20', '22.96X40.025', NULL, NULL, NULL, 'HOLD', '335'),
(15, 'Mukesh', '8989898989', '', '', '2', '', 'Phase-1', 'Duplex', 'HIG', 'H-313', '7.92X12.20', '25.9776X40.016', NULL, NULL, NULL, 'HOLD', '335'),
(16, 'Phasetwo Flat', '9865325696', 'ashwin.j@ogatechnologies.com', '', '1', '', 'Phase-2', 'Flat', 'LIG', 'GF-7', '0', '', NULL, NULL, NULL, 'BOOKED', '335'),
(17, 'Narayan ', '8778878787', '', '', '1', '', 'Phase-2', 'Flat', 'LIG', 'GF-8', '0', '', NULL, NULL, NULL, 'HOLD', '335'),
(18, 'Usha Kumari', '8989898989', '', '', '1', '', 'Phase-2', 'Duplex', 'HIG', 'H-55', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, 'BOOKED', '335'),
(19, 'Vinay Kumar', '8977979779', '', '', '2', '', 'Phase-1', 'Duplex', 'HIG', 'H-253', '6.00X13.00', '19.68X42.64', NULL, NULL, NULL, 'BOOKED', '335'),
(20, 'Tanu', '9958747321', '', '', '2', '', 'Phase-1', 'Duplex', 'HIG', 'H-254', '6.00X13.00', '19.68X42.64', NULL, NULL, NULL, 'HOLD', '232'),
(21, 'Tanu', '9685741425', '', '', '1', '', 'Phase-2', 'Flat', 'LIG', 'GF-1', '0', '', NULL, NULL, NULL, 'BOOKED', '232'),
(22, 'Nikita ', '8989898989', '', '', '2', '', 'Phase-1', 'Shop', '0', 'shop-1', '0', '', NULL, NULL, NULL, 'HOLD', '335'),
(23, 'Phaseone Duplex', '9845965874', 'ashwin.j@ogatechnologies.com', 'Bhopal', '2', '', 'Phase-1', 'Duplex', 'HIG', 'H-101', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, 'BOOKED', '335'),
(24, 'Aditi Patel', '8871887109', 'nmalviya575@gamil.com', 'Bhopal', '1', '', 'Phase-2', 'Plot', 'Area', 'H-79', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, 'BOOKED', '335'),
(25, 'Phaseone Duplex Two', '9425790662', 'ashwin.j@ogatechnologies.com', 'Gwalior', '2', '', 'Phase-1', 'Duplex', 'HIG', 'H-102', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, 'BOOKED', '335'),
(26, 'Devesh Kakde', '8871887109', 'nmalviya575@gmail.com', 'bhopal', '2', '', 'Phase-1', 'Shop', '0', 'shop-1', '9.28', '99.85', NULL, NULL, NULL, 'HOLD', '335'),
(27, 'Ayushi Bhadoriya', '8269571957', 'nmalviya575@gmail.com', 'Naveen Nagar Bhopal', '2', '', 'Phase-1', 'Shop', '0', 'shop-1', '9.28', '99.85', NULL, NULL, NULL, 'BOOKED', '335'),
(28, 'Dolly Patel', '8871887109', 'nmalviya575@gmail.com', 'Naveen Nagar Bhopal', '2', '', 'Phase-1', 'Shop', '0', 'shop-1', '9.28', '99.85', NULL, NULL, NULL, 'BOOKED', '335'),
(29, 'Krishna Malviya', '8269571957', 'nmalviya575@gmail.com', 'Bhopal', '2', '', 'Phase-1', 'Shop', '0', 'shop-10', '9.28', '99.85', NULL, NULL, NULL, 'BOOKED', '335'),
(30, 'Sweety', '8269571957', 'nmalviya575@gmail.com', 'Bhopal', '1', '', 'Phase-2', 'Duplex', 'HIG', 'H-57', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, 'HOLD', '335'),
(31, 'Preeti', '8871887109', 'nmalviya575@gmail.com', 'Bhopal', '2', '', 'Phase-1', 'Shop', '0', 'shop-2', '9.28', '99.85', NULL, NULL, NULL, 'BOOKED', '335'),
(32, 'Rohit Shetty', '8871887109', 'nmalviya575@gmail.com', 'Bhopla', '1', '', 'Phase-2', 'Flat', 'LIG', 'GF-2', '0', '', NULL, NULL, NULL, 'HOLD', '335'),
(33, 'Shikha Singh', '7878787878', '', '', '2', '', 'Phase-1', 'Shop', '0', 'shop-1', '0', '', NULL, NULL, NULL, 'BOOKED', '335'),
(34, 'Rohan', '7878787878', '', '', '2', '', 'Phase-1', 'Shop', '0', 'shop-9', '0', '', NULL, NULL, NULL, 'BOOKED', '335'),
(35, 'Priyanka Rajput', '8871887109', 'nmalviya575@gmail.com', 'Bhopal', '2', '', 'Phase-1', 'Shop', '0', 'shop-10', '9.28', '99.85', NULL, NULL, NULL, 'BOOKED', '335'),
(36, 'Abrahim', '9685741236', 'stanu765@gmail.com', '', '2', '', 'Phase-1', 'Duplex', 'HIG', 'H-103', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, 'BOOKED', '335'),
(37, 'Raaj Sahu', '9874561235', '', '', '1', '', 'Phase-2', 'Duplex', 'HIG', 'H-57', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, 'BOOKED', '335'),
(38, 'Ankul', '9874563214', '', '', '1', '', 'Phase-2', 'Duplex', 'HIG', 'H-84', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, 'BOOKED', '335'),
(39, 'Qwest ', '9876541236', '', '', '1', '', 'Phase-2', 'Flat', 'LIG', 'GF-2', '0', '', NULL, NULL, NULL, 'HOLD', '335'),
(40, 'Anirud ', '8817448282', '', '', '1', '', 'Phase-2', 'Flat', 'LIG', 'GF-2', '0', '', NULL, NULL, NULL, 'HOLD', '232'),
(41, 'Waseem', '9856231475', '', '', '1', '', 'Phase-2', 'Plot', 'Area', 'H-74', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, 'BOOKED', '335'),
(42, 'Gunjan Kumar ', '8978978787', '', '', '1', '', 'Phase-2', 'Flat', 'LIG', 'FF-102', '0', '', NULL, NULL, NULL, 'BOOKED', '232'),
(43, 'GUNGUN KUMARI', '9897654565', 'ashwin.j@ogatechnologies.com', 'Bhopal', '1', '', 'Phase-2', 'Flat', 'LIG', 'GF-2', '0', '', NULL, NULL, NULL, 'BOOKED', '335'),
(44, 'Yash Kumar', '8978787878', '', '', '1', '', 'Phase-2', 'Flat', 'EWS', 'GF-10', '0', '', NULL, NULL, NULL, 'BOOKED', '335'),
(45, 'THULLU RAM', '9638521478', 'ashwin.j@ogatechnologies.com', '', '1', '', 'Phase-2', 'Flat', 'LIG', 'GF-7', '0', '', NULL, NULL, NULL, 'BOOKED', '335'),
(46, 'Rahul Mahajan ', '8871887109', 'ritesh.ramchandani3@gmail.com', '18 A sainik colony Tward Bairagarh ', '1', '', 'Phase-2', 'Duplex', 'HIG', 'H-58', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, 'BOOKED', '335'),
(47, 'Rakesh Sharma Rahul Raj ', '8817448282', 'ritesh.ramchandani3@gmail.conm', '18 A sainik colony ', '1', '', 'Phase-2', 'Duplex', 'HIG', 'H-59', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, 'BOOKED', '335'),
(48, 'Aarti', '9876541235', '', '', '1', '', 'Phase-2', 'Duplex', 'HIG', 'H-87', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, 'BOOKED', '232'),
(49, 'Farha', '9876543251', '', '', '1', '', 'Phase-2', 'Duplex', 'HIG', 'H-232', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, 'BOOKED', '335'),
(50, 'Ram', '9856471236', '', '', '2', '', 'Phase-1', 'Shop', '0', 'shop-11', '9.28', '99.85', NULL, NULL, NULL, 'BOOKED', '335'),
(51, 'Acer Dell', '8817448282', '', '', '1', '', 'Phase-2', 'Flat', 'LIG', 'GF-3', '0', '', NULL, NULL, NULL, 'BOOKED', '335'),
(52, 'Lenovo', '8878779898', '', '', '1', '', 'Phase-2', 'Plot', 'Area', 'H-75', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, 'BOOKED', '335'),
(53, 'Mohit Advani Duplex', '8871887109', 'ritesh.ramchandani3@gmail.com', 'Itrsi bhopal', '1', '', 'Phase-2', 'Duplex', 'HIG', 'H-233', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, 'BOOKED', '335'),
(54, 'Vicky Ramchandani Flat ', '8871887109', '', '', '1', '', 'Phase-2', 'Flat', 'LIG', 'GF-4', '0', '', NULL, NULL, NULL, 'BOOKED', '335'),
(55, 'Sumit ', '8871887109', 'sumit@gmail.com', 'Bhopal', '1', '', 'Phase-2', 'Flat', 'LIG', 'GF-5', '0', '', NULL, NULL, NULL, 'BOOKED', '335'),
(56, 'Phasetwo Flat', '9876543214', 'ashwin.j@ogatechnologies.com', '', '1', '', 'Phase-2', 'Flat', 'LIG', 'TF-301', '0', '', NULL, NULL, NULL, 'BOOKED', '335'),
(57, 'Rohit Malviya', '8871887109', '', '', '1', '', 'Phase-2', 'Flat', 'EWS', 'GF-1', '0', '', NULL, NULL, NULL, 'BOOKED', '335'),
(58, 'Veerendra Chouhan ', '8871887109', 'veerendra@gmail.com', '', '1', '', 'Phase-2', 'Flat', 'EWS', 'GF-3', '0', '', NULL, NULL, NULL, 'BOOKED', '335'),
(59, 'Nitin Yadav', '8871887109', 'nmalviya@gmail.com', 'bpl', '2', '', 'Phase-1', 'Shop', '0', 'shop-12', '0', '', NULL, NULL, NULL, 'BOOKED', '335'),
(60, 'Nikita Chimlani', '8871887109', 'nmalviya@gmail.com', 'bpl', '2', '', 'Phase-1', 'Duplex', 'HIG', 'H-254', '6.00X13.00', '19.68X42.64', NULL, NULL, NULL, 'BOOKED', '335'),
(61, 'Ews Phasetwo Flat', '9865326985', 'ajjuwekar@gmail.com', 'Bhopal', '1', '', 'Phase-2', 'Flat', 'EWS', 'FF-22', '0', '', NULL, NULL, NULL, 'BOOKED', '335'),
(62, 'LIG Phasetwo Flat', '9875652586', 'ajjuwekar@gmail.com', 'Bhopal', '1', '', 'Phase-2', 'Flat', 'LIG', 'FF-101', '0', '', NULL, NULL, NULL, 'BOOKED', '335'),
(63, 'Suresh Rawat Plot', '8787878787', '', '', '1', '', 'Phase-2', 'Plot', 'Area', 'H-76', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, 'HOLD', '335'),
(64, 'Phase Two Shop', '8871887109', 'ritesh.ramchandani3@gmail.com', '18 A sainik colony Tward Bairagarh ', '1', '', 'Phase-2', 'Plot', 'Area', 'H-76', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, 'BOOKED', '335'),
(65, 'Phase Two Plot', '8817448282', '', '', '1', '', 'Phase-2', 'Plot', 'Area', 'H-77', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, 'BOOKED', '335'),
(66, 'Phase Two Plot', '8817448282', '', '', '1', '', 'Phase-2', 'Plot', 'Area', 'H-78', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, 'BOOKED', '335'),
(67, 'Yati', '7787878787', '', '', '1', '', 'Phase-2', 'Plot', 'Area', 'H-50', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, 'BOOKED', '335'),
(68, 'Avni', '8787878878', '', '', '1', '', 'Phase-2', 'Plot', 'Area', 'H-80', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, 'BOOKED', '335'),
(69, 'Veena Gyanchandani', '8878778989', '', '', '1', '', 'Phase-2', 'Plot', 'Area', 'H-81', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, 'BOOKED', '335'),
(70, 'Neha Verma', '8871887109', 'ritesh.ramchadnani3@gmail.com', 'Bhopal', '1', '', 'Phase-2', 'Duplex', 'HIG', 'H-234', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, 'HOLD', '335'),
(71, 'Aaaa', '9876789890', 'ajjuwekar@gmail.com', '', '2', '', 'Phase-1', 'Duplex', 'HIG', 'H-268', '6.00X13.00', '19.68X42.64', NULL, NULL, NULL, 'HOLD', '340'),
(72, 'Bbbb', '9879879875', '', '', '2', '', 'Phase-1', 'Duplex', 'HIG', 'H-330', '7.92X12.20', '25.9776X40.016', NULL, NULL, NULL, 'HOLD', '340'),
(73, 'Cc', '9879879875', 'ajjuwekar@gmail.com', '', '2', '', 'Phase-1', 'Duplex', 'HIG', 'H-313', '7.92X12.20', '25.9776X40.016', NULL, NULL, NULL, 'HOLD', '335'),
(74, 'Rajj', '9876543215', 'ajjuwekar@gmail.com', '', '2', '', 'Phase-1', 'Duplex', 'HIG', 'H-331', '7.92X12.20', '25.9776X40.016', NULL, NULL, NULL, 'HOLD', '335'),
(75, 'Aaaa', '9876549859', '', '', '2', '', 'Phase-1', 'Duplex', 'HIG', 'H-348', '7.92X12.20', '25.9776X40.016', NULL, NULL, NULL, 'HOLD', '335'),
(76, 'Neel Nitin Mukesh', '8871887109', 'nmalviya575@gmail.com', 'Naveen Nagar Bhopal', '2', '', 'Phase-1', 'Duplex', 'HIG', 'H-313', '7.92X12.20', '25.9776X40.016', NULL, NULL, NULL, 'HOLD', '335'),
(77, 'Naresh Chimlani', '8871887109', 'nmalviya575@gmail.com', 'Bhopal', '2', '', 'Phase-1', 'Duplex', 'HIG', 'H-313', '7.92X12.20', '25.9776X40.016', NULL, NULL, NULL, 'HOLD', '335'),
(78, 'Manisha Rajput', '8871887109', 'nmalviya575@gmail.com', 'Naveen Nagar Bhopal', '2', '', 'Phase-1', 'Duplex', 'HIG', 'H-331', '7.92X12.20', '25.9776X40.016', NULL, NULL, NULL, 'BOOKED', '335'),
(79, 'Ashish Mishra', '8871887109', 'nmalviya@gmail.com', 'Bhopal', '2', '', 'Phase-1', 'Duplex', 'HIG', 'H-313', '7.92X12.20', '25.9776X40.016', NULL, NULL, NULL, 'HOLD', '335'),
(80, 'Rohan Singh Sisodiya', '8871887109', 'nmalviya575@gmail.com', 'Bhopal', '2', '', 'Phase-1', 'Duplex', 'HIG', 'H-313', '7.92X12.20', '25.9776X40.016', NULL, NULL, NULL, 'HOLD', '335'),
(81, 'Ashwin Sir', '8871887109', 'nmalviya575@gmail.com', 'Bhopal', '2', '', 'Phase-1', 'Duplex', 'HIG', 'H-313', '7.92X12.20', '25.9776X40.016', NULL, NULL, NULL, 'BOOKED', '335'),
(82, 'Kavya Sharma', '8871887109', 'nmalviya575@gmail.com', 'Naveen Nagar Bhopal', '2', '', 'Phase-1', 'Shop', '0', 'shop-2', '0', '', NULL, NULL, NULL, 'HOLD', '335'),
(83, 'Winchal', '8871887109', 'nmalviya575@gmail.com', 'Bhopal', '2', '', 'Phase-1', 'Duplex', 'HIG', 'H-313', '7.92X12.20', '25.9776X40.016', NULL, NULL, NULL, 'HOLD', '335'),
(84, 'Phase One Duplex Updated', '9856989689', 'ajjuwekar@gmail.com', 'bhopal', '2', '', 'Phase-1', 'Duplex', 'HIG', 'H-85', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, 'BOOKED', '335'),
(85, 'Phase One Duplex Two', '9865985696', 'ajjuwekar@gmail.com', 'Bhopal', '2', '', 'Phase-1', 'Duplex', 'HIG', 'H-230', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, 'BOOKED', '335'),
(86, 'Phase Two Plot', '9876543215', 'ajjuwekar@gmail.com', 'Bhopal', '1', '', 'Phase-2', 'Plot', 'Area', 'H-349', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, 'HOLD', '232'),
(87, 'Nirbhay Singh Chouhan', '8817448282', 'ritesh.ramchandani3@gmail.com', '18 A sainik colony Tward Biragarh ', '1', '', 'Phase-2', 'Duplex', 'HIG', 'H-234', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, 'BOOKED', '335'),
(88, 'Shrinkhla Sharma', '8817448282', 'nirbhayc4@gmail.com', 'Mp Nagar Zone-1 Bhopal', '2', '', 'Phase-1', 'Duplex', 'HIG', 'H-255', '6.00X13.00', '19.68X42.64', NULL, NULL, NULL, 'BOOKED', '335'),
(89, 'Kunal C', '8817448282', 'kunal@gmail.com', '18 A sainik colony Tward ', '2', '', 'Phase-1', 'Duplex', 'HIG', 'H-104', '6.00X12.20', '19.68X40.016', NULL, NULL, NULL, 'HOLD', '335'),
(90, 'Ran KUmar', '8817448282', '', '', '2', '', 'Phase-1', 'Duplex', 'HIG', 'H-231', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, 'HOLD', '335'),
(91, 'Rohan Sharma', '8898998896', '', '', '1', '', 'Phase-2', 'Plot', 'Area', 'H-82', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, 'HOLD', '335'),
(92, 'Vijay Deenanath Chouhan', '8878778796', '', '', '1', '', 'Phase-2', 'Plot', 'Area', 'H-51', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, 'HOLD', '335'),
(93, 'Anjali Upadyaya', '8874885858', '', '', '2', '', 'Phase-1', 'Duplex', 'HIG', 'H-256', '6.00X13.00', '19.68X42.64', NULL, NULL, NULL, 'BOOKED', '335'),
(94, 'Pooja Gaur', '8817448282', '', '', '2', '', 'Phase-1', 'Duplex', 'HIG', 'H-257', '6.00X13.00', '19.68X42.64', NULL, NULL, NULL, 'BOOKED', '335'),
(95, 'Updated Phase Two Plot', '9856989632', 'ajjuwekar@gmail.com', 'bhopal', '1', '', 'Phase-2', 'Plot', 'Area', 'H-350', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, 'BOOKED', '335'),
(96, 'Avinash Verma', '8817448282', '', '', '2', '', 'Phase-1', 'Duplex', 'HIG', 'H-258', '6.00X13.00', '19.68X42.64', NULL, NULL, NULL, 'BOOKED', '335'),
(97, 'Roshni Kulhare', '8878778745', '', '', '1', '', 'Phase-2', 'Plot', 'Area', 'H-82', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, 'BOOKED', '335'),
(98, 'Phase Two Flat', '9658745896', 'ajjuwekar@gmail.com', 'Bhopal', '1', '', 'Phase-2', 'Flat', 'LIG', 'FF-104', '0', '', NULL, NULL, NULL, 'HOLD', '335'),
(99, 'Rajiv Uptodate', '9865986532', 'ajjuwekar@gmail.com', 'bhopal', '1', '', 'Phase-2', 'Plot', 'Area', 'H-361', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, 'HOLD', '335'),
(100, 'Gunjan', '8787878787', '', '', '1', '', 'Phase-2', 'Plot', 'Area', 'H-360', '6.70X13.00', '21.976X42.64', NULL, NULL, NULL, 'BOOKED', '335'),
(101, 'Phase Two Duplex', '9876543215', 'ajjuwekar@gmail.com', 'Bhopal', '1', '', 'Phase-2', 'Duplex', 'HIG', 'H-56', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, 'HOLD', '335'),
(102, 'NItin Motwani', '8878778963', '', '', '1', '', 'Phase-2', 'Duplex', 'HIG', 'H-235', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, 'BOOKED', '335'),
(103, 'Raj Kumar Ramchandani', '8874885858', 'nmalviya575@gmail.com', '', '2', '', 'Phase-1', 'Duplex', 'HIG', 'H-259', '6.00X13.00', '19.68X42.64', NULL, NULL, NULL, 'HOLD', '335'),
(104, 'Ram Kumar Verma', '8878778787', '', '', '1', '', 'Phase-2', 'Flat', 'LIG', 'GF-1', '0', '', NULL, NULL, NULL, 'BOOKED', '335'),
(105, 'Veena Gyanchandani', '8878779797', 'ritesh.ramchandani3@gmail.com', '', '1', '', 'Phase-2', 'Flat', 'EWS', 'GF-1', '0', '', NULL, NULL, NULL, 'BOOKED', '335'),
(106, 'Dinesh Doultani', '8878779898', '', '', '1', '', 'Phase-2', 'Flat', 'EWS', 'GF-2', '0', '', NULL, NULL, NULL, 'BOOKED', '335'),
(107, 'Vandana Sharma ', '8878779696', 'ritesh.ramchandani3@gmail.com', '', '1', '', 'Phase-2', 'Flat', 'LIG', 'GF-1', '0', '', NULL, NULL, NULL, 'BOOKED', '335'),
(108, 'Raj Kumar Sharma ', '8874885858', 'ritesh.ramchandani3@gmail.com', '18 A sainik colony ', '1', '', 'Phase-2', 'Flat', 'LIG', 'FF-103', '0', '', NULL, NULL, NULL, 'BOOKED', '335'),
(109, 'Raj Kumar Sharma', '8878996969', 'ritesh.ramchandani3@hotmail.com', '', '1', '', 'Phase-2', 'Flat', 'EWS', 'GF-9', '0', '', NULL, NULL, NULL, 'HOLD', '335'),
(110, 'Verma Ji', '8817448282', '', '', '2', '', 'Phase-1', 'Duplex', 'HIG', 'H-259', '6.00X13.00', '19.68X42.64', NULL, NULL, NULL, 'HOLD', '335'),
(111, 'Enter Key Check ', '8817448282', '', '', '2', '', 'Phase-1', 'Duplex', 'HIG', 'H-259', '6.00X13.00', '19.68X42.64', NULL, NULL, NULL, 'HOLD', '335'),
(112, 'Meenu Gupta', '8878774545', '', '', '1', '', 'Phase-2', 'Duplex', 'HIG', 'H-236', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, 'BOOKED', '335'),
(113, 'Deepak', '8817448282', 'radhedeepak@gmail.com', 'njhakjhfkjhFg', '1', '', 'Phase-2', 'Duplex', 'HIG', 'H-237', '7.00X13.00', '22.96X42.64', NULL, NULL, NULL, 'HOLD', '335');

-- --------------------------------------------------------

--
-- Table structure for table `prospect_tbl`
--

CREATE TABLE `prospect_tbl` (
  `id` int(11) NOT NULL,
  `visiters_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `visiters_mobile` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `receipt_series`
--

CREATE TABLE `receipt_series` (
  `id` int(11) NOT NULL,
  `series_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `receipt_series`
--

INSERT INTO `receipt_series` (`id`, `series_no`) VALUES
(1, 110235);

-- --------------------------------------------------------

--
-- Table structure for table `role_tbl`
--

CREATE TABLE `role_tbl` (
  `id` int(11) NOT NULL,
  `role` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_tbl`
--

INSERT INTO `role_tbl` (`id`, `role`) VALUES
(1, 'SALES'),
(2, 'PRESALES'),
(3, 'ADMIN'),
(5, 'MD'),
(6, 'SALES HEAD'),
(7, 'SITE MANAGER'),
(8, 'SITE ENGINEER');

-- --------------------------------------------------------

--
-- Table structure for table `site_report_tbl`
--

CREATE TABLE `site_report_tbl` (
  `id` int(11) NOT NULL,
  `project_id` int(30) DEFAULT NULL,
  `unit_no` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `block` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stage` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `overall_complete_percent` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_updated` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `site_report_tbl`
--

INSERT INTO `site_report_tbl` (`id`, `project_id`, `unit_no`, `block`, `type`, `stage`, `date`, `overall_complete_percent`, `is_updated`) VALUES
(1, 1, 'H-10000', 'Phase-2', 'Duplex', 'FOUNDATION', '2018-03-10', NULL, 0),
(2, 1, 'GF-11', 'Phase-1', 'Flat', 'Excavation Work', '1970-01-01', '0', 0),
(3, 1, 'H-123', 'Phase-2', 'Duplex', 'POSSESSION', '2018-03-01', '0', 1),
(4, 2, 'H-101', 'Phase-1', 'Duplex', 'POSSESSION', '2018-03-01', '0', NULL),
(5, 2, 'H-102', 'Phase-1', 'Duplex', 'POSSESSION', '2018-03-09', '0', NULL),
(6, 1, 'H-57', 'Phase-2', 'Duplex', 'PLINTH', '2018-02-21', '0', NULL),
(8, 1, 'H-74', 'Phase-2', 'Plot', 'Road Development and Surface  ', '2018-02-08', '0', NULL),
(9, 2, 'H-253', 'Phase-1', 'Duplex', 'FOUNDATION', '2018-03-15', '0', NULL),
(10, 1, 'H-59', 'Phase-2', 'Duplex', 'BOOKING', '2018-03-09', '0', NULL),
(11, 1, 'H-233', 'Phase-2', 'Duplex', 'POSSESSION', '2018-03-09', '0', NULL),
(12, 1, 'GF-4', 'Phase-2', 'Flat', 'POSSESSION', '2018-03-09', '0', NULL),
(13, 1, 'GF-5', 'Phase-2', 'Flat', 'POSSESSION', '2018-03-09', '0', NULL),
(14, 1, 'GF-3', 'Phase-2', 'Flat', 'BOOKING', '2018-03-09', '0', NULL),
(15, 1, 'H-76', 'Phase-2', 'Plot', 'Road Development and Surface  ', '2018-03-10', '0', NULL),
(16, 1, 'H-77', 'Phase-2', 'Plot', 'Road Development and Surface  ', '2018-03-10', '0', NULL),
(17, 1, 'H-81', '', 'Plot', 'Water Supply and Garden Networ', '2018-03-10', '0', NULL),
(18, 2, 'H-313', 'Phase-1', 'Duplex', 'POSSESSION', '2018-03-24', '0', NULL),
(19, 2, 'H-313', 'Phase-1', 'Duplex', 'POSSESSION', '2018-03-24', '0', NULL),
(20, 2, 'H-85', 'Phase-1', 'Duplex', 'PLOT REGISTRY', '2018-03-01', '0', NULL),
(21, 2, 'H-85', 'Phase-1', 'Duplex', 'BOOKING', '2018-03-09', '0', NULL),
(22, 2, 'H-230', 'Phase-1', 'Duplex', 'PLOT REGISTRY', '2018-03-01', '0', NULL),
(23, 1, 'H-234', 'Phase-2', 'Duplex', 'BOOKING', '2018-03-23', '0', NULL),
(26, 2, 'H-255', 'Phase-1', 'Duplex', 'PLOT REGISTRY', '2018-03-24', '0', NULL),
(28, 2, 'H-256', 'Phase-1', 'Duplex', 'PLOT REGISTRY', '2018-03-24', '0', NULL),
(29, 2, 'H-257', 'Phase-1', 'Duplex', 'PLOT REGISTRY', '2018-03-24', '0', NULL),
(30, 2, 'H-257', 'Phase-1', 'Duplex', 'BOOKING', '2018-03-24', '0', NULL),
(31, 2, 'H-258', 'Phase-1', 'Duplex', 'FOUNDATION', '2018-03-25', '0', NULL),
(32, 2, 'H-258', 'Phase-1', 'Duplex', 'FOUNDATION', '2018-03-25', '0', NULL),
(33, 2, 'H-258', 'Phase-1', 'Duplex', 'FOUNDATION', '2018-03-25', '0', NULL),
(34, 2, 'H-258', 'Phase-1', 'Duplex', 'FOUNDATION', '2018-03-25', '0', NULL),
(35, 1, 'H-82', 'Phase-2', 'Plot', 'Water Supply and Garden Networ', '2018-03-23', '0', NULL),
(40, 2, 'H-258', 'Phase-1', 'Duplex', 'FOUNDATION', '2018-03-25', '0', NULL),
(41, 1, 'H-235', 'Phase-2', 'Duplex', 'FOUNDATION', '2018-03-27', '0', NULL),
(42, 1, 'H-235', 'Phase-2', 'Duplex', 'FOUNDATION', '2018-03-27', '0', NULL),
(43, 1, 'H-235', 'Phase-2', 'Duplex', 'FOUNDATION', '2018-03-27', '0', NULL),
(44, 1, 'GF-2', 'Phase-2', 'Flat', 'BOOKING', '2018-03-27', '0', NULL),
(45, 1, 'FF-103', 'Phase-2', 'Flat', 'BOOKING', '2018-03-27', '0', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `site_stages_tbl`
--

CREATE TABLE `site_stages_tbl` (
  `id` int(11) NOT NULL,
  `stage` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `step_no` int(4) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `site_stages_tbl`
--

INSERT INTO `site_stages_tbl` (`id`, `stage`, `type`, `step_no`) VALUES
(1, 'BOOKING', 'Duplex', 1),
(2, 'FOUNDATION', 'Duplex', 2),
(3, 'PLINTH', 'Duplex', 3),
(4, 'GF SLAB', 'Duplex', 4),
(5, 'FF SLAB', 'Duplex', 5),
(6, 'BRICK WORK', 'Duplex', 6),
(7, 'PLASTER WORK', 'Duplex', 7),
(18, 'PAINTING/FINISHING', 'Duplex', 8),
(21, 'POSSESSION', 'Duplex', 9),
(22, 'Road Development and Surface  Drain Network', 'Plot', 1),
(23, 'Electrical Work', 'Plot', 2),
(24, 'Sewer Line Network', 'Plot', 3),
(25, 'Water Supply and Garden Network', 'Plot', 4),
(26, 'BOOKING', 'Flat', 1),
(27, 'EXCAVATION WORK', 'Flat', 2),
(28, 'FOUNDATION', 'Flat', 3),
(29, 'PLINTH', 'Flat', 4),
(30, 'FIRST FLOOR SLAB', 'Flat', 5),
(31, 'SECOND FLOOR SLAB', 'Flat', 6),
(32, 'THIRD FLOOR SLAB', 'Flat', 7),
(33, 'FOURTH FLOOR SLAB', 'Flat', 8),
(34, 'FIFTH FLOOR SLAB', 'Flat', 9),
(35, 'SIXTH FLOOR SLAB', 'Flat', 10),
(36, 'SEVENTH FLOOR SLAB', 'Flat', 11),
(37, 'BRICK WORK', 'Flat', 12),
(38, 'PLASTER WORK', 'Flat', 13),
(39, 'FLOORING AND FINISHING', 'Flat', 14),
(40, 'POSSESSION', 'Flat', 15);

-- --------------------------------------------------------

--
-- Table structure for table `taxes_tbl`
--

CREATE TABLE `taxes_tbl` (
  `id` int(11) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `tax_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tax_percentage` decimal(4,2) NOT NULL,
  `tax_liability` decimal(5,2) DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `taxes_tbl`
--

INSERT INTO `taxes_tbl` (`id`, `start_date`, `end_date`, `tax_name`, `tax_percentage`, `tax_liability`, `description`) VALUES
(1, '2017-07-01', NULL, 'CGST', '6.00', '100.00', 'Central Government GST'),
(2, '2017-07-01', NULL, 'SGST', '6.00', '100.00', 'State Government GST'),
(4, '2012-04-01', '2015-05-31', 'Service Tax', '12.36', '25.00', 'Service Tax on 25 % of paid amount'),
(5, '2015-06-01', '2015-11-14', 'Service Tax', '14.00', '25.00', 'Service Tax on 25 % of the amount paid.'),
(6, '2015-11-15', '2016-03-31', 'Service Tax', '14.50', '25.00', 'Service Tax on 25 % of the amount paid.'),
(7, '2016-04-01', '2016-05-31', 'Service Tax', '14.50', '30.00', 'Service Tax on 30 % of the amount paid.'),
(8, '2016-06-01', '2017-06-30', 'Service Tax', '15.00', '30.00', 'Service Tax on 30 % of the amount paid.'),
(9, '2017-07-01', NULL, 'IGST', '12.00', '100.00', ' 	India Interstate and International GST');

-- --------------------------------------------------------

--
-- Table structure for table `unit_type_tbl`
--

CREATE TABLE `unit_type_tbl` (
  `id` int(11) NOT NULL,
  `type_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `project_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `unit_type_tbl`
--

INSERT INTO `unit_type_tbl` (`id`, `type_name`, `project_id`) VALUES
(11, 'Duplex', '1,2,'),
(12, 'Plot', '1,'),
(13, 'Flat', '1,2,'),
(14, 'Row House', '0'),
(15, 'Other', '1,2,'),
(16, 'Shop', '2,'),
(17, 'Singlex', '1,');

-- --------------------------------------------------------

--
-- Table structure for table `user_registration_tbl`
--

CREATE TABLE `user_registration_tbl` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `middle_name` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` enum('0','1') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_registration_tbl`
--

INSERT INTO `user_registration_tbl` (`user_id`, `first_name`, `middle_name`, `last_name`, `phone`, `email`, `role`, `username`, `password`, `code`, `status`) VALUES
(232, 'Customisation', 'Do not Delete this account', 'Admin', '9876543212', 'stanu765@gmail.com', 'customadmin', 'customadmin', '9c83cf906c44497b595aac342c76fec3fcda9062', NULL, '0'),
(326, 'Ritesh ', 'kumar', 'Ramchandani', '9087674562', 'ritesh.ramchandani4@gmail.com', 'ADMIN', 'ritesh', 'b5241ef47dd4f7bbd0941ac5ac6baca99af5606b', '113.91074714', '0'),
(328, 'Nirbhay', NULL, 'singh', '9039612258', 'nirbhay@gmail.com', 'PRESALES', 'presales', 'a08e7d9afe020d762d519d96934afa0bd5ddd3a3', NULL, '0'),
(329, 'nitesh', NULL, 'kumar', '8817448282', 'ritesh.ramchandani3@gmail.com', 'ADMIN', 'nitesh', 'bc241a9576d462f2bc5c82e3318b6523f8cc69e0', NULL, '0'),
(330, 'Rajeshwar', NULL, 'Verma', '4561234563', 'ashwin.j@ogatechnologies.com', 'PRESALES', 'rajeshwar', '6f8f182b4acd5c593db2f1ed6100cf7c514c6435', NULL, '0'),
(331, 'Maheshwar', NULL, 'Mishra', '4532567897', 'mahis@gmail.com', 'SITE MANAGER', 'maheshwar', '23f6e0d15ecd272530f2ad11ef8a81ceb7b20f18', NULL, '0'),
(332, 'Girdhar', NULL, 'Mishra', '7856439234', 'girdhar@gmail.com', 'MD', 'girdhar', '941200311e1ef8a0bff349a7b8fce70335665cff', NULL, '0'),
(334, 'John', NULL, 'Abraham', '9865329865', 'ashwin.juwekar@rediffmail.com', 'customadmin', 'john', '4c0f37fcb94900a4ce88e0665f002cf45bfc8ab4', NULL, '0'),
(335, 'Sunil', NULL, 'Gupta', '9826024221', 'essarjee2014@gmail.com', 'MD', 'essarjee', '60f57abdac95d69125b2ef0366e74d61ad97ff53', NULL, '0'),
(336, 'Yogendra', NULL, 'Gangrade', '9425010874', 'yogendrasrgc191173@gmail.com', 'SALES HEAD', 'yogendra', '42a3abd556a87fd9608f16f73aaf45d12e5f55f8', NULL, '0'),
(337, 'Arjun', NULL, 'Shukla', '9876567898', 'arjun.s1@gmail.com', 'SITE ENGINEER', 'arjun', 'da26bb6448bcbb572efc54c5a585694e4cb12747', NULL, '0'),
(338, 'Brijesh', NULL, 'kareliya', '9876904536', 'brijesh.k22@gmail.com', 'SITE ENGINEER', 'brijesh', 'eae96791982e894d6e29e463abe5e56535b091cc', NULL, '0'),
(339, 'Lakshman', NULL, 'Pathoriya', '7894566547', 'lakshman.p4@gmail.com', 'SITE ENGINEER', 'lakshman', '753fea020708680b47321fabafd319d7f0e0669f', NULL, '0'),
(342, 'ankita', NULL, 'shah', '9876541236', 'stanu7656@gmail.com', 'SALES HEAD', 'ankita', '4562312fe0d9a4db39957212e93fb33d081214f3', NULL, '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appl_interest_rate_tbl`
--
ALTER TABLE `appl_interest_rate_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `authz_tbl`
--
ALTER TABLE `authz_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bank_details_tbl`
--
ALTER TABLE `bank_details_tbl`
  ADD PRIMARY KEY (`applicant_id`);

--
-- Indexes for table `before_possession_tbl`
--
ALTER TABLE `before_possession_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_tbl`
--
ALTER TABLE `category_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_info_tbl`
--
ALTER TABLE `company_info_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `completion_of_work`
--
ALTER TABLE `completion_of_work`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `co_applicant_tbl`
--
ALTER TABLE `co_applicant_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `co_applicant_tbl_1`
--
ALTER TABLE `co_applicant_tbl_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `demand_letter_tbl`
--
ALTER TABLE `demand_letter_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents_tbl`
--
ALTER TABLE `documents_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doc_title_tbl`
--
ALTER TABLE `doc_title_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `duplex_category_tbl`
--
ALTER TABLE `duplex_category_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facing_tbl`
--
ALTER TABLE `facing_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `first_applicant_personal_dtl_tbl`
--
ALTER TABLE `first_applicant_personal_dtl_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interest_tbl`
--
ALTER TABLE `interest_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `int_tbl`
--
ALTER TABLE `int_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory_tbl`
--
ALTER TABLE `inventory_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice_tbl`
--
ALTER TABLE `invoice_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `late_interest_tbl`
--
ALTER TABLE `late_interest_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `license_tbl`
--
ALTER TABLE `license_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location_tbl`
--
ALTER TABLE `location_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_charges`
--
ALTER TABLE `other_charges`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `parking_tbl`
--
ALTER TABLE `parking_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_dtls_tbl`
--
ALTER TABLE `payment_dtls_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_receipt`
--
ALTER TABLE `payment_receipt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_stages_tbl`
--
ALTER TABLE `payment_stages_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_statment`
--
ALTER TABLE `payment_statment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plot_size_tbl`
--
ALTER TABLE `plot_size_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `presales_appointment_tbl`
--
ALTER TABLE `presales_appointment_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `presales_costcalculation_tbl`
--
ALTER TABLE `presales_costcalculation_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_code`);

--
-- Indexes for table `project_dtls_tbl`
--
ALTER TABLE `project_dtls_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_status`
--
ALTER TABLE `project_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_tbl`
--
ALTER TABLE `project_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prospect_discussions_tbl`
--
ALTER TABLE `prospect_discussions_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prospect_project_info_tbl`
--
ALTER TABLE `prospect_project_info_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prospect_tbl`
--
ALTER TABLE `prospect_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receipt_series`
--
ALTER TABLE `receipt_series`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_tbl`
--
ALTER TABLE `role_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_report_tbl`
--
ALTER TABLE `site_report_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_stages_tbl`
--
ALTER TABLE `site_stages_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taxes_tbl`
--
ALTER TABLE `taxes_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unit_type_tbl`
--
ALTER TABLE `unit_type_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_registration_tbl`
--
ALTER TABLE `user_registration_tbl`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appl_interest_rate_tbl`
--
ALTER TABLE `appl_interest_rate_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;
--
-- AUTO_INCREMENT for table `authz_tbl`
--
ALTER TABLE `authz_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `bank_details_tbl`
--
ALTER TABLE `bank_details_tbl`
  MODIFY `applicant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;
--
-- AUTO_INCREMENT for table `before_possession_tbl`
--
ALTER TABLE `before_possession_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `category_tbl`
--
ALTER TABLE `category_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `company_info_tbl`
--
ALTER TABLE `company_info_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `completion_of_work`
--
ALTER TABLE `completion_of_work`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `co_applicant_tbl`
--
ALTER TABLE `co_applicant_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `co_applicant_tbl_1`
--
ALTER TABLE `co_applicant_tbl_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `demand_letter_tbl`
--
ALTER TABLE `demand_letter_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;
--
-- AUTO_INCREMENT for table `documents_tbl`
--
ALTER TABLE `documents_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `doc_title_tbl`
--
ALTER TABLE `doc_title_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT for table `duplex_category_tbl`
--
ALTER TABLE `duplex_category_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `facing_tbl`
--
ALTER TABLE `facing_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `first_applicant_personal_dtl_tbl`
--
ALTER TABLE `first_applicant_personal_dtl_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=271;
--
-- AUTO_INCREMENT for table `interest_tbl`
--
ALTER TABLE `interest_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `int_tbl`
--
ALTER TABLE `int_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=233;
--
-- AUTO_INCREMENT for table `inventory_tbl`
--
ALTER TABLE `inventory_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=925;
--
-- AUTO_INCREMENT for table `invoice_tbl`
--
ALTER TABLE `invoice_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `late_interest_tbl`
--
ALTER TABLE `late_interest_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `license_tbl`
--
ALTER TABLE `license_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `location_tbl`
--
ALTER TABLE `location_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `other_charges`
--
ALTER TABLE `other_charges`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `parking_tbl`
--
ALTER TABLE `parking_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `payment_dtls_tbl`
--
ALTER TABLE `payment_dtls_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `payment_receipt`
--
ALTER TABLE `payment_receipt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `payment_stages_tbl`
--
ALTER TABLE `payment_stages_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=588;
--
-- AUTO_INCREMENT for table `payment_statment`
--
ALTER TABLE `payment_statment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `plot_size_tbl`
--
ALTER TABLE `plot_size_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `presales_appointment_tbl`
--
ALTER TABLE `presales_appointment_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `presales_costcalculation_tbl`
--
ALTER TABLE `presales_costcalculation_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `project_dtls_tbl`
--
ALTER TABLE `project_dtls_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `project_status`
--
ALTER TABLE `project_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `project_tbl`
--
ALTER TABLE `project_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `prospect_discussions_tbl`
--
ALTER TABLE `prospect_discussions_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `prospect_project_info_tbl`
--
ALTER TABLE `prospect_project_info_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;
--
-- AUTO_INCREMENT for table `prospect_tbl`
--
ALTER TABLE `prospect_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `receipt_series`
--
ALTER TABLE `receipt_series`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `role_tbl`
--
ALTER TABLE `role_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `site_report_tbl`
--
ALTER TABLE `site_report_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `site_stages_tbl`
--
ALTER TABLE `site_stages_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `taxes_tbl`
--
ALTER TABLE `taxes_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `unit_type_tbl`
--
ALTER TABLE `unit_type_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `user_registration_tbl`
--
ALTER TABLE `user_registration_tbl`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=343;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
