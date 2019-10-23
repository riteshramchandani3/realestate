<?php
$ssn_usr = $this->session->userdata('usrname');
$ssn_id = $this->session->userdata('user_id');
$urole = $this->session->userdata('role');
$firstname = $this->session->userdata('firstname');
$lastname = $this->session->userdata('lastname');

$viewname = $_ci_view;
//echo "<br><br><br><br><br><br>".$viewname."/".$urole;
//echo "<br><br><br><br><br><br>".$this->uri->segment(2)."<br>";

$assignedview = $this->Authz_model->check_authz($urole, $viewname);
//$ss = $this->Authz_model->all_allowed($viewname);
//echo $ss;
//echo $assignedview;
if ($ssn_usr == NULL) {
    $to_login = site_url('Main_controller/login_user');
    header("location: " . $to_login);
} elseif ($assignedview == false) {
     //redirect('Main_controller/loadunauthorized');  
}
?>
<style>
    .button__badge {
        background-color: #fa3e3e;
        border-radius: 10px;
        color: white;
        /* padding: 1px 3px; */
        font-size: 14px;
        position: absolute;
        top: 4px;
        right: -2px;
        margin: 5px;
        width: 20px;
        height: 20px;
        text-align: center;
        line-height: 18px;


        font-weight: bold;
    }


    .dropdown .dropdown-menu {
        overflow: auto !important;
    }





</style>
<!--top nav start-->
<nav class="navbar navbar-custom navbar-fixed-top" style="background-color:#1c518e/*#003656*/; border-radius:0;">
    <div class="container-fluid">

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">

                <font style="color:#fff; margin-left: 800px; margin-top: 12px; font-size: 20px; position: absolute;"><?php echo $ssn_usr; ?></font>
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <span class="navbar-brand" >
                <span style="font-weight:700;color: #FF3300;margin-left:50px;font-family:'arial', cursive;">
                    <img src="<?php echo base_url('resources/image/avro-white-text-logo.png'); ?>" alt="Arvo ERP" style="height:50px; margin-top: -15px;"/>
                </span>
            </span>
        </div>
        <div id="toppageheader" ></div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

            </ul>

            <ul class="nav navbar-nav navbar-right">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-tasks" style="font-size:22px;"></span>&nbsp;<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo site_url('Information/about_us'); ?>">About</a></li>
                        <li><a href="<?php echo site_url('Information/copyright_notice'); ?>">Copyright Notice</a></li>
                        <li><a href="<?php echo site_url('Information/license_agreement'); ?>">Licence Agreement</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?php echo site_url('Information/renew_license'); ?>">Renew Your License</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <?php $role = $this->session->userdata('role'); ?>
                    <?php if ($role == 'MD') { ?>
                        <?php
                        foreach ($this->Pre_sales_model->notification_count_for_md() as $row) {
                            ?>
                            <?php $md_count = $row['count']; ?>
                        <?php } ?>
                        <?php $sales_count = '0'; ?>
                    <?php } else if ($role == 'SALES HEAD') { ?> 
                        <?php
                        foreach ($this->Pre_sales_model->notification_count_for_sales() as $row) {
                            ?>
                            <?php $sales_count = $row['sales_count']; ?>
                        <?php } ?>

                        <?php $md_count = '0'; ?>
                    <?php } else { ?>
                        <?php $md_count = '0'; ?>
                        <?php $sales_count = '0'; ?>
                    <?php } ?>

                    <?php
                    foreach ($this->Pre_sales_model->notification_count() as $row) {
                        ?>
                        <?php $count = $row['count']; ?>
                    <?php } ?>
                    <?php if ($count + $md_count + $sales_count == '0') { ?>
                        <a href="#" class="dropdown-toggle text-capitalize" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell" style="font-size:22px;"></i></a>
                    <?php } else { ?>
                        <a href="#" class="dropdown-toggle text-capitalize" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell" style="font-size:22px;"></i><span class="button__badge"><?php echo $count + $md_count + $sales_count; ?></span></a>

                    <?php } ?>


          <!-- a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-bell"> <?php //echo $row['count'];        ?></span>&nbsp;<span class="caret"></span></a -->

                    <ul class="dropdown-menu" role="menu">
                        <?php if ($role == 'MD') { ?>
                            <?php
                            foreach ($this->Pre_sales_model->md_notification() as $row) {
                                ?>                         
                                <li>
                                    <a  href="<?php echo site_url('pre_sales/pre_sales_md_noti?id=' . $row['id'] . '?' . $row['prospect_id']) ?> " >                                  
                                        <span class="noti text-capitalize">Approve Cost For <?php echo $row['name']; ?></span>     
                                        <li role="separator" class="divider"></li>
                                    </a>
                                </li>

                            <?php } ?>
                        <?php
                        } else if ($role == 'SALES HEAD') {


                            foreach ($this->Pre_sales_model->sales_notification() as $row) {
                                ?>                         
                                <li>
                                    <a  href="<?php echo site_url('pre_sales/pre_sales_sales_noti?id=' . $row['id'] . '?' . $row['prospect_id']) ?> " >                                  
                                        <span class="noti text-capitalize">Approved <?php echo $row['name']; ?></span>     
                                        <li role="separator" class="divider"></li>
                                    </a>
                                </li>
                            <?php }
                        } else {
                            ?>

                        <?php } ?>

                        <?php
                        foreach ($this->Pre_sales_model->future_meeting_notification() as $row) {
                            ?>                         
                            <li>
                                <a  href="<?php echo site_url('pre_sales/pre_sales_noti?id=' . $row['id'] . '?' . $row['prospect_id']) ?> " >                              
                                    <span class="noti text-capitalize">Meet with <?php echo $row['name']; ?> on  <?php
                                        $x = explode(' ', $due_date = $row['meeting_date']);
                                        $due_date = new DateTime($x[0]);
                                        echo $due_date->format('d-m-Y');
                                        ?></span>     
                                    <li role="separator" class="divider"></li>
                                </a>
                            </li>






                        <?php } ?>

                        <!------------------Missed meeting codes to be appended here-------------------------->           

                        <?php
                        foreach ($this->Pre_sales_model->missed_meeting_notification() as $row) {
                            ?>                         
                            <li>
                                <a  href="<?php echo site_url('pre_sales/pre_sales_noti?id=' . $row['id'] . '?' . $row['prospect_id']) ?> " >                                    
                                    <span class="noti text-capitalize">Missed meeting with <?php echo $row['name']; ?> on  <?php
                                        $x = explode(' ', $due_date = $row['meeting_date']);
                                        $due_date = new DateTime($x[0]);
                                        echo $due_date->format('d-m-Y');
                                        ?></span>     
                                    <li role="separator" class="divider"></li>
                                </a>
                            </li>






                        <?php } ?>             

                    </ul>

                </li>
                <!--this code is use for show notification MD only-->
                <?php $role = $this->session->userdata('role'); ?>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-user" style="font-size:22px;"></span>&nbsp;<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><span class="fa fa-user"></span>&nbsp;&nbsp;<?php echo $firstname . ' ' . $lastname; ?></a></li>
                        <li><a href="<?php echo site_url('Main_controller/profile?id=' . $ssn_id); ?>"><span class="glyphicon glyphicon-cog"></span>&nbsp;&nbsp;Profile</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?php echo site_url('Myy_ctrl/logout_cnf'); ?>"><span class="fa fa-sign-out"></span>&nbsp;&nbsp;Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->

</nav>



<!--top nav end-->
