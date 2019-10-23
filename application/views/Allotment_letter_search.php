<!DOCTYPE html>
<!--
Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
Unauthorized copying of this file, via any medium is strictly prohibited
Proprietary and confidential.
Written by Oga Technologies, October 1,  2016.
-->
<html>

    <head>
        <title>Allotment Letter</title>
        <?php
        require_once('assets/html_head_links.php');
        ?>
    </head>


    <body>
        <?php
        require_once('assets/top_menu.php');
        require_once('assets/side_menu.php');
        ?>
        <div class="main">
            <div class="container">
                <form class="form-inline" action="<?php echo site_url('Allotment_letter/search_id'); ?>" method = "post">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>Search Allotment Letter</h4>
                        </div>
                        <div class="panel-body" style="text-align: center;">
                            <div class="row"> 
                                <div  style="width:50%;margin:auto; ">

                                    <span class="glyphicon glyphicon-th"></span> 
                                    &nbsp;Application Number&nbsp;

                                    <div style="height:35px;width: 1px; border: 1px solid black; display: inline-block; margin-top:-5px;  margin-right: 2px; position: absolute;"></div>

                                    &nbsp;&nbsp;
                                    <span class="glyphicon glyphicon-user right"></span> 
                                    Applicant Name
                                </div>

                            </div> 
                            <div class="row" style="padding-top:2%; padding-bottom:2%;"> 

                                <div class="form-group">
                                    <div class="input-group" >
                                        <!--<label for="userid" class='fa fa-2x fa-search' style='display:inline;line-height: 1.3em;color:#999;'></label>-->
                                        <span class="input-group-addon" ><li class="fa fa-search"></li></span>
                                        <input type="text" name="userid" id="search_text1" autocomplete="off" onkeyup="getres(this.value);" class="form-control"  placeholder="Search.." style="width: 370px; border: none; border:1px solid #ccc; border-top-right-radius: 5px; border-bottom-right-radius: 5px;"/>&nbsp;   
                                        <input type="hidden" name="userids" id="userids" autocomplete="off"  class="form-control"  placeholder="Search.." style="width: 370px; border: none; border:1px solid #ccc; border-top-right-radius: 5px; border-bottom-right-radius: 5px;"/>&nbsp;   

                                        <button id="searchview" class="btn btn-info"type="submit" value="submit" style="display:none; height: 33px; " title="view"><li class="fa fa-eye"></li></button> 
                                    </div>
                                </div>
                                <br clear="all"/>
                                <br clear="all"/>
                                <div id="result1" style="margin-left:50px; font-size: 18; font-color: black;"></div>
                            </div> 
                        </div>
                    </div>
                </form>
            </div> 
        </div>

        <script type="text/javascript">
            $(document).ready(function () {
                $('#toppageheader').html('Allotment Letter');
                $("a:contains(Allotment Letter)").parent().addClass('active');
                $("a:contains(Allotment Letter)").parents().addClass('open');
            });

            function getres(arg)
            {

                var alphabet = arg;
                if (document.getElementById('search_text1').value == '')
                {
                    $('#result1').hide();
                } else
                {
                    $.ajax({
                        type: "POST",
                        url: "<?php echo site_url('Allotment_letter/allotmentlettersearch'); ?>",
                        data: {alphabet: alphabet},
                        success: function (msg) {
                            $('#result1').html(msg).show();



                        }
                    });

                }
            }

            function setthis(arg)
            {
                //alert(arg);
                var arglist = arg.split('_');
                if (arglist[1] == null)
                {
                    document.getElementById('search_text1').value = arglist[0];
                } else
                {
                    document.getElementById('search_text1').value = arglist[1];
                }

                $('#searchview').css('display', 'inline-block');
                $("#userids").val(arglist[0]);

            }

        </script>
        <script type="text/javascript">
            $(document).ready(function () {
                $(window).keydown(function (event) {
                    if (event.keyCode == 13) {
                        event.preventDefault();
                        return false;
                    }
                });
            });
        </script>
    </body>
</html>
