<nav class="navbar navbar-inverse sidebar" role="navigation" >
    <div class="container-fluid">
       <div>
            <ul class="nav navbar-nav">
                <li><a href="<?php echo site_url('Main_controller/pre_dash'); ?>">Home<span style="font-size:24px;" class="pull-right  showopacity fa  fa-home"></span></a></li>               
                <li><a href="<?php echo site_url('Pre_sales/show_visitor'); ?>">All Prospects<span style="font-size:24px;" class="pull-right  showopacity fa  fa-users"></span></a></li>               
                <li><a href="<?php echo site_url('Pre_sales/new_prospect'); ?>">New Prospect<span style="font-size:24px;" class="pull-right  showopacity fa  fa-user-plus"></span></a></li>               
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