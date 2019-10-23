<nav class="navbar navbar-inverse sidebar" role="navigation" >
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <!--<div class="navbar-header">
            
            <span class="navbar-brand" style="color:#FFF;">
                <span style="font-weight:700;color: #FFF;margin-left:20px;">
                   Menu
                </span>
                <span class="pull-right">
                <button type="button" class="pull-right navbar-toggle " data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
                    <span class="fa fa-bars" aria-hidden="true" style="font-size:24px;margin-bottom: 5px;"></span>
                </button>
                </span>
            </span>
        </div>
        -->
        <!-- Collect the nav links, forms, and other content for toggling -->
        <!--div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1"-->
        <div>
            <ul class="nav navbar-nav">
                <li ><a href="<?php echo site_url('Main_controller/pre_dash') ?>">Home<span style="font-size:24px;" class="pull-right  showopacity fa fa-home"></span></a></li>
                <?php if ($urole == 'MD' || $urole == 'ADMIN') {
                    ?>
                    <li><a href="<?php echo site_url('Dashboard'); ?>">Dashboard<span style="font-size:24px;" class="pull-right  showopacity fa  fa-dashboard"></span></a></li>
                <?php } ?>
                <?php if ($urole != 'SITE MANAGER') {
                    ?>
                    <li ><a href="<?php echo site_url('View_ctrl/do_application_search'); ?>">Application<span style="font-size:24px;" class="pull-right  showopacity fa fa-address-card"></span></a></li>
                    <li ><a href="<?php echo site_url('Cost_calculator/index'); ?>">Cost Calculation<span style="font-size:24px;" class="pull-right  showopacity fa fa-calculator"></span></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Documentation <span class="icon"></span><span style="font-size:24px;" class="pull-right  showopacity fa fa-file-text"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo site_url('Documentation/index'); ?>">Upload Document<span style="font-size:24px;" class="pull-right  showopacity fa fa-cloud-upload"></span></a></li>    
                            <li><a href="<?php echo site_url('Myy_ctrl/load_allotment_search'); ?>">Allotment Letter<span style="font-size:24px;" class="pull-right  showopacity fa fa-list-alt"></span></a></li>
                            <li><a href="<?php echo site_url('Agreement/index'); ?>">Agreement Search<span style="font-size:24px;" class="pull-right  showopacity fa fa-handshake-o"></span></a></li>
                            <li><a href="<?php echo site_url('Demand_letter/index'); ?>">Demand Letter<span style="font-size:24px;" class="pull-right  showopacity fa fa-file-o"></span></a></li>
                        </ul>
                    </li>


                <?php } ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Site Report <span class="icon"></span> <span style="font-size:24px;" class="pull-right  showopacity fa fa-line-chart"></span></a>
                    <ul class="dropdown-menu">
                        <li ><a href="<?php echo site_url('Site_report/index'); ?>">Report Status<span style="font-size:24px;" class="pull-right  showopacity glyphicon glyphicon-stats"></span></a></li>                      
                        <li ><a href="<?php echo site_url('Final_calculation/index'); ?>">Completion Status<span style="font-size:24px;" class="pull-right  showopacity fa fa-check-square-o"></span></a></li>                        
                        <!--li ><a href="<?php //echo site_url('Final_calculation/view_work_completion');  ?>">view work completion<span style="font-size:24px;" class="pull-right  showopacity"></span></a></li>
                        <li ><a href="<?php //echo site_url('Final_calculation/view_work_completion');  ?>">view work completion<span style="font-size:24px;" class="pull-right  showopacity"></span></a></li>
                        <li ><a href="<?php //echo site_url('Final_calculation/all_pages');  ?>">All Form<span style="font-size:24px;" class="pull-right  showopacity"></span></a></li-->
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Billing <span class="icon"></span> <span style="font-size:24px;" class="pull-right  showopacity fa fa-money"></span></a>
                    <ul class="dropdown-menu">
                        <li ><a href="<?php echo site_url('Payment/finalpayment'); ?>">Payment Receipts<span style="font-size:24px;" class="pull-right  showopacity fa fa-inr"></span></a></li>
                        <li ><a href="<?php echo site_url('Payment/get_invoice_input'); ?>">Invoices<span style="font-size:24px;" class="pull-right  showopacity fa fa-align-left"></span></a></li>
                        <li ><a href="<?php echo site_url('Payment/paymentreg'); ?>">Payment Register<span style="font-size:24px;" class="pull-right  showopacity fa fa-book"></span></a></li>
                        <li ><a href="<?php echo site_url('Final_calculation/due_statement'); ?>">Due Statement<span style="font-size:24px;" class="pull-right  showopacity fa fa-book"></span></a></li>
                      

                    </ul>
                </li>
                <?php if ($urole != 'SITE MANAGER') {
                    ?>

                    <li ><a href="<?php echo site_url('Interest/index'); ?>">Interest Calculation<span style="font-size:24px;" class="pull-right  showopacity fa fa-percent"></span></a></li>
                    <li ><a href="<?php echo site_url('Bank/index'); ?>">Bank Details<span style="font-size:24px;" class="pull-right  showopacity fa fa-university"></span></a></li>
                    <!--li ><a href="#">Tri-party Agreement<span style="font-size:24px;" class="pull-right  showopacity fa fa-check-circle"></span></a></li-->
                <?php } ?>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Final Settlement <span class="icon"></span> <span style="font-size:24px;" class="pull-right  showopacity fa fa-pencil-square-o"></span></a>
                    <ul class="dropdown-menu">
                        <!--li ><a href="<?php //echo site_url('Final_calculation/calculation_final'); ?>">Final Calculation<span style="font-size:24px;" class="pull-right  showopacity fa fa-plus"></span></a></li-->
                        <li ><a href="<?php echo site_url('Search_all_form_ctrl/index'); ?>">Settlement Forms<span style="font-size:24px;" class="pull-right  showopacity fa fa-folder-open-o"></span></a></li>
                         <li ><a href="<?php echo site_url('Final_calculation/final_cac_search'); ?>">Dues Settlement<span style="font-size:24px;" class="pull-right  showopacity fa fa-folder-open-o"></span></a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script type="text/javascript" >
    function htmlbodyHeightUpdate() {
        var height3 = $(window).height()
        var height1 = $('.nav').height() + 50
        height2 = $('.main').height()
        if (height2 > height3) {
            $('html').height(Math.max(height1, height3, height2) + 10);
            $('body').height(Math.max(height1, height3, height2) + 10);
        } else
        {
            $('html').height(Math.max(height1, height3, height2));
            $('body').height(Math.max(height1, height3, height2));
        }

    }
    $(document).ready(function () {
        htmlbodyHeightUpdate()
        $(window).resize(function () {
            htmlbodyHeightUpdate()
        });
        $(window).scroll(function () {
            height2 = $('.main').height()
            htmlbodyHeightUpdate()
        });
    });


</script>