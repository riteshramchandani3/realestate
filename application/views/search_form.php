<!DOCTYPE html>
<!--
Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
Unauthorized copying of this file, via any medium is strictly prohibited
Proprietary and confidential.
Written by Oga Technologies, October 1,  2016.
-->
<html>
    <head>
        <title>Search Form</title>
        <?php
        include_once('assets/html_head_links.php');
        ?>
        <script>
            function getallusersprjdtls(p,a)
            {

                  if(p!='' && a!='')
                  {
                      var projectid = p;
                      var unitno=a;
                  }
                  else
                  {
                    var projectid = document.getElementById('project_id').value;
                    var unitno = document.getElementById('unit_no').value;
                  }       
            var username = document.getElementById('search_text').value;


                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('Search_all_form_ctrl/allapplicationuserswithproject') ?>",
                    data: {uname: username, pid: projectid, unitno: unitno},
                    success: function (msg) {
                       // alert(msg);
                        if (msg.indexOf("NOTFOUND")<0) {
                            console.log(":) records Found");

                            $('#tablespace').html(msg);
                            var a = $('#form_idak').val();
                            $('.office').attr('id', 'office__' + a);
                            $('.maintenance_agreement').attr('id', 'maintenance_agreement__' + a);
                            $('.satisfaction_form').attr('id', 'satisfaction_form__' + a);
                            $('.affidavit').attr('id', 'affidavit__' + a);
                            $('.customer_copy').attr('id', 'customer_copy__' + a);
                            $('.stamp_value').attr('id', 'stamp_value__' + a);
                            $('.stamp_value_maintenance_agreement').attr('id', 'stamp_value_maintenance_agreement__' + a);
                            $('.statements_of_dues_first').attr('id', 'statements_of_dues_first__' + a);
                            $('.statements_of_dues_second').attr('id', 'statements_of_dues_second__' + a);
                            $('.undertaking_form').attr('id', 'undertaking_form__' + a);
                            $('.work_completion_possession').attr('id', 'work_completion_possession__' + a);
                            $('.site_inspection_report').attr('id', 'site_inspection_report__' + a);
                            $('.site_inspection_report_second').attr('id', 'site_inspection_report_second__' + a);
                            $('.Society_Application_Sampada_B').attr('id', 'Society_Application_Sampada_B__' + a);
                            $('.MPEB2').attr('id', 'MPEB2__' + a);
                            $('#panelsuccess').css('display', 'block');
                            $("#norecordspan").css('display','none');
                        }
                        else if (msg.indexOf("NOTFOUND") > 0 ) {
                            console.log("Record not found or Possession is Pending");
                            $("#panelsuccess").css('display','none');
                            $("#norecordspan").css('display','block');
                           
                            
                        }
                    }
                });
            }
            function getallusersprjdtlss(p,a)
            {
                      var projectid = p;
                      var unitno=a;
                    //  alert(projectid+unitno);
                      var username = 0;// document.getElementById('search_text').value;


                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('Search_all_form_ctrl/allapplicationuserswithproject22') ?>",
                    data: {uname: username, pid: projectid, unitno: unitno},
                    success: function (msg) {
                       // alert(msg);
                        if (msg.indexOf("NOTFOUND")<0) {
                            console.log(":) records Found");

                            $('#tablespace').html(msg);
                            var a = $('#form_idak').val();
                            $('.office').attr('id', 'office__' + a);
                            $('.maintenance_agreement').attr('id', 'maintenance_agreement__' + a);
                            $('.satisfaction_form').attr('id', 'satisfaction_form__' + a);
                            $('.affidavit').attr('id', 'affidavit__' + a);
                            $('.customer_copy').attr('id', 'customer_copy__' + a);
                            $('.stamp_value').attr('id', 'stamp_value__' + a);
                            $('.stamp_value_maintenance_agreement').attr('id', 'stamp_value_maintenance_agreement__' + a);
                            $('.statements_of_dues_first').attr('id', 'statements_of_dues_first__' + a);
                            $('.statements_of_dues_second').attr('id', 'statements_of_dues_second__' + a);
                            $('.undertaking_form').attr('id', 'undertaking_form__' + a);
                            $('.work_completion_possession').attr('id', 'work_completion_possession__' + a);
                            $('.site_inspection_report').attr('id', 'site_inspection_report__' + a);
                            $('.site_inspection_report_second').attr('id', 'site_inspection_report_second__' + a);
                            $('.MPEB_Affidavit_sampada').attr('id', 'MPEB_Affidavit_sampada__' + a);
                            $('.Society_Affidavit_a').attr('id', 'Society_Affidavit_a__' + a);
                            $('.Society_Affidavit_b').attr('id', 'Society_Affidavit_b__' + a);
                            $('.NOC_mpeb').attr('id', 'NOC_mpeb__' + a);
                            $('.Namantaran').attr('id', 'Namantaran__' + a);
                            $('.Society_Application_Sampada').attr('id', 'Society_Application_Sampada__' + a);
                            $('.Society_Application_Sampada_B').attr('id', 'Society_Application_Sampada_B__' + a);
                            $('.MPEB2').attr('id', 'MPEB2__' + a);
                            $('#panelsuccess').css('display', 'block');
                            $("#norecordspan").css('display','none');
                        }
                        else if (msg.indexOf("NOTFOUND") > 0 ) {
                            console.log("Record not found or Possession Pending");
                            $("#panelsuccess").css('display','none');
                            $("#norecordspan").css('display','block');
                           
                            
                        }
                    }
                });
            }
        </script>
    </head>

    <body>
        <?php
        require_once('assets/top_menu.php');
        require_once('assets/side_menu.php');
        ?>
        <div class="main">

            <div class="container">
                <div class="row">
                    <?php if ($this->session->flashdata('success')) { ?>
                        <div class="alert alert-success">
                            <button data-dismiss="alert" class="close" type="button">
                                <span aria-hidden="true">x</span><span class="sr-only">Close</span></button>

                            <?php echo $this->session->flashdata('success') ?>
                        </div>
                    <?php } else if ($this->session->flashdata('failure')) {
                        ?>
                        <div class="alert alert-danger">
                            <button data-dismiss="alert" class="close" type="button">
                                <span aria-hidden="true">x</span><span class="sr-only">Close</span></button>

                            <?php echo $this->session->flashdata('failure') ?>
                        </div>

                    <?php } ?>
                </div>

                
           <?php
                if ($this->session->userdata('unitno')) {
                    $projcuk = $this->session->userdata("projectid");
                    $untcuk = $this->session->userdata("unitno");
                    echo "<script type='text/javascript'>getallusersprjdtlss('$projcuk','$untcuk');</script>";

                   } else {
                    $projcuk = '';
                    $untcuk = '';
                }
                ?>
                <div class="row">
                    <div class="panel panel-primary">
                        <div class="panel-heading"><h4>Search Applicant</h4></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-10 search-col-md-10">
                        <div class="row">
                            <div class="col-md-4 hidden-lg">
                                <div class="input-group">
                                    <span class="input-group-addon">Name</span>
                                    <input type="text" name="search_text" id="search_text"  onkeyup="getres(this.value);"  placeholder="Search" class="form-control" />
                                </div>

                                <div id="result"></div>
                                <!--div  id="result" style="background: #e9e9e9; z-index: 9999; margin-top:-20px;"></div-->
                            </div>

                            <div class="col-md-4">
                                <div class="input-group">
                                    <span class="input-group-addon"> Project</span>
                                    <select name="project_id" id="project_id" class="form-control picker">

                                        <option value='0'>--Select--</option>

                                        <?php
                                        foreach ($this->Search_all_form_model->getprojectname() as $row) {
                                            if ($row->id == $projcuk) {
                                                ?>
                                                <option value="<?php echo $row->id; ?>" selected> <?php echo $row->project_name . nbs(1) . $row->block; ?></option>
                                                <?php
                                            } else {
                                                ?>                                     
                                                <option value="<?php echo $row->id; ?>"> <?php echo $row->project_name . nbs(1) . $row->block; ?></option>

                                                <?php
                                            }
                                        }
                                        ?>
                                    </select>

                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="input-group">
                                    <span class="input-group-addon"> Unit Number</span>
                                    <input type="text" name="unit_no" id="unit_no" value="<?php echo $untcuk; ?>" class="form-control picker"/>                           
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-2 search-col-md-2">
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-primary btn-3d" type="button" value="submit" onclick="getallusersprjdtls('','');" id="Testing">Search&nbsp;&nbsp;&nbsp;<i class="fa fa-search"></i></button>

                                <button class="btn btn-danger btn-3d" type="button" onclick="reset_results();">Clear &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-refresh"></i> </button>

<!--a class="btn btn-success btn-3d" href="<?php //echo site_url('Myy_ctrl/load_appl_fill_form');                        ?>" >New&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<li class="fa fa-plus"></li></a-->
                            </div>
                        </div>
                    </div>
                </div>
                <br>
<span class="alert alert-danger" id="norecordspan" style="display: none;">Record not found or Possession is  Pending.</span>   
                <div class="row">
                    <div class="panel panel-primary" id="panelsuccess" style="display: none;">                                                                             
                        <div class="panel-heading" style="padding: 0px 15px;">
                            <span class="row" id="tablespace"></span>   
                            
                              
                        </div>  
                        <div class="panel-body" style="width:100%;">
                            <div class="row">
                                <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-1">
                                    <label>&nbsp;</label>
                                </div>
                                <div class="col-md-8">
                                    <label>Affidavit</label>
                                </div>
                                <div class="col-md-3">
                                    <a id="0" href="#" onclick="gogo(this.id);" class="btn btn-default affidavit"><i class="glyphicon glyphicon-print"> Print</i></a>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-1">
                                    <label>&nbsp;</label>
                                </div>
                                <div class="col-md-8">
                                    <label>Maintenance Agreement</label>
                                </div>
                                <div class="col-md-3">
                                    <a id="0" href="#" onclick="gogo(this.id);" class="btn btn-default maintenance_agreement"><i class="glyphicon glyphicon-print"> Print</i></a>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-1">
                                    <label>&nbsp;</label>
                                </div>
                                <div class="col-md-8">
                                    <label>Possession Set Office Copy</label>
                                </div>
                                <div class="col-md-3">
                                    <a id="0" href="#" onclick="gogo(this.id);" class="btn btn-default office"><i class="glyphicon glyphicon-print"> Print</i></a>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-1">
                                    <label>&nbsp;</label>
                                </div>
                                <div class="col-md-8">
                                    <label>Possession Set Customer Copy</label>
                                </div>
                                <div class="col-md-3">
                                    <a id="0" href="#" onclick="gogo(this.id);" class="btn btn-default customer_copy"><i class="glyphicon glyphicon-print"> Print</i></a>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-1">
                                    <label>&nbsp;</label>
                                </div>
                                <div class="col-md-8">
                                    <label>Satisfaction Letter</label>
                                </div>
                                <div class="col-md-3">
                                    <a id="0" href="#" onclick="gogo(this.id);" class="btn btn-default satisfaction_form"><i class="glyphicon glyphicon-print"> Print</i></a>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-1">
                                    <label>&nbsp;</label>
                                </div>
                                <div class="col-md-8">
                                    <label>Stamp Value Purpose - Undertaking</label>
                                </div>
                                <div class="col-md-3">
                                    <a id="0" href="#" onclick="gogo(this.id);" class="btn btn-default stamp_value"><i class="glyphicon glyphicon-print"> Print</i></a>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-1">
                                    <label>&nbsp;</label>
                                </div>
                                <div class="col-md-8">
                                    <label>Stamp Value Purpose - Maintenance Agreement</label>
                                </div>
                                <div class="col-md-3">
                                    <a id="0" href="#" onclick="gogo(this.id);" class="btn btn-default stamp_value_maintenance_agreement"><i class="glyphicon glyphicon-print"> Print</i></a>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-1">
                                    <label>&nbsp;</label>
                                </div>
                                <div class="col-md-8">
                                    <label>Statement of dues I</label>
                                </div>
                                <div class="col-md-3">
                                    <a id="0" href="#" onclick="gogo(this.id);" class="btn btn-default statements_of_dues_first"><i class="glyphicon glyphicon-print"> Print</i></a>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-1">
                                    <label>&nbsp;</label>
                                </div>
                                <div class="col-md-8">
                                    <label>Statement of dues II</label>
                                </div>
                                <div class="col-md-3">
                                    <a id="0" href="#" onclick="gogo(this.id);" class="btn btn-default statements_of_dues_second"><i class="glyphicon glyphicon-print"> Print</i></a>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-1">
                                    <label>&nbsp;</label>
                                </div>
                                <div class="col-md-8">
                                    <label>Undertaking Form</label>
                                </div>
                                <div class="col-md-3">
                                    <a id="0" href="#" onclick="gogo(this.id);" class="btn btn-default undertaking_form"><i class="glyphicon glyphicon-print"> Print</i></a>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-1">
                                    <label>&nbsp;</label>
                                </div>
                                <div class="col-md-8">
                                    <label>Work Completion</label>
                                </div>
                                <div class="col-md-3">
                                    <a id="0" href="#" onclick="gogo(this.id);" class="btn btn-default work_completion_possession"><i class="glyphicon glyphicon-print"> Print</i></a>
                                </div>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-1">
                                    <label>&nbsp;</label>
                                </div>
                                <div class="col-md-6">
                                    <label>Site Inspection Report I</label>
                                </div>
                                <div class="col-md-3">
                                    <a id="0" href="#" onclick="gogo(this.id);" class="btn btn-default site_inspection_report"><i class="glyphicon glyphicon-print"> Print</i></a>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-1">
                                    <label>&nbsp;</label>
                                </div>
                                <div class="col-md-6">
                                    <label>Site Inspection Report II</label>
                                </div>
                                <div class="col-md-3">
                                    <a id="0" href="#" onclick="gogo(this.id);" class="btn btn-default site_inspection_report_second"><i class="glyphicon glyphicon-print"> Print</i></a>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-1">
                                    <label>&nbsp;</label>
                                </div>
                                <div class="col-md-6">
                                    <label>MPEB Affidavit sampada</label>
                                </div>
                                <div class="col-md-3">
                                    <a id="0" href="#" onclick="gogo(this.id);" class="btn btn-default MPEB_Affidavit_sampada"><i class="glyphicon glyphicon-print"> Print</i></a>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-1">
                                    <label>&nbsp;</label>
                                </div>
                                <div class="col-md-6">
                                    <label>Society Affidavit A</label>
                                </div>
                                <div class="col-md-3">
                                    <a id="0" href="#" onclick="gogo(this.id);" class="btn btn-default Society_Affidavit_a"><i class="glyphicon glyphicon-print"> Print</i></a>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-1">
                                    <label>&nbsp;</label>
                                </div>
                                <div class="col-md-6">
                                    <label>Society Affidavit B</label>
                                </div>
                                <div class="col-md-3">
                                    <a id="0" href="#" onclick="gogo(this.id);" class="btn btn-default Society_Affidavit_b"><i class="glyphicon glyphicon-print"> Print</i></a>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-1">
                                    <label>&nbsp;</label>
                                </div>
                                <div class="col-md-6">
                                    <label>NOC mpeb</label>
                                </div>
                                <div class="col-md-3">
                                    <a id="0" href="#" onclick="gogo(this.id);" class="btn btn-default NOC_mpeb"><i class="glyphicon glyphicon-print"> Print</i></a>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-1">
                                    <label>&nbsp;</label>
                                </div>
                                <div class="col-md-6">
                                    <label>Namantaran</label>
                                </div>
                                <div class="col-md-3">
                                    <a id="0" href="#" onclick="gogo(this.id);" class="btn btn-default Namantaran"><i class="glyphicon glyphicon-print"> Print</i></a>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-1">
                                    <label>&nbsp;</label>
                                </div>
                                <div class="col-md-6">
                                    <label>Society Application Sampada</label>
                                </div>
                                <div class="col-md-3">
                                    <a id="0" href="#" onclick="gogo(this.id);" class="btn btn-default Society_Application_Sampada"><i class="glyphicon glyphicon-print"> Print</i></a>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-1">
                                    <label>&nbsp;</label>
                                </div>
                                <div class="col-md-6">
                                    <label>Society Application Sampada B</label>
                                </div>
                                <div class="col-md-3">
                                    <a id="0" href="#" onclick="gogo(this.id);" class="btn btn-default Society_Application_Sampada_B"><i class="glyphicon glyphicon-print"> Print</i></a>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-1">
                                    <label>&nbsp;</label>
                                </div>
                                <div class="col-md-6">
                                    <label>MPEB2</label>
                                </div>
                                <div class="col-md-3">
                                    <a id="0" href="#" onclick="gogo(this.id);" class="btn btn-default MPEB2"><i class="glyphicon glyphicon-print"> Print</i></a>
                                </div>
                            </div>
                            </div>
                            </div>
                            <br><br>
                        </div>
                        <br><br>
                    </div>
                </div>


                <?php
           //     $size = getimagesize('http://localhost/v1.2_development/uploads/uploaded_docs/mozilla.pdf');
           //     echo $size.'slsl';
               
           //    echo list($width, $height) = getimagesize('uploads/uploaded_docs/mozilla.pdf');
                ?>
                <!--iframe name="myiframe" id="myiframe" src="<?php //echo base_url('uploads/uploaded_docs/mozilla.pdf'); ?>"-->
                <!--OBJECT data="<?php //echo base_url('uploads/uploaded_docs/Allotment Letter_144_ESSARJEE SAMPADA_20180131011018.pdf'); ?>" TYPE="application/x-pdf" TITLE="SamplePdf" WIDTH=1200 HEIGHT=2000>
    <a href="<?php //echo base_url('uploads/uploaded_docs/Allotment Letter_144_ESSARJEE SAMPADA_20180131011018.pdf'); ?>">shree</a> 
</object-->
            </div>
             
        </div>
      
        <script type="text/javascript">
            var elem = document.getElementById("unit_no");
            elem.onkeyup = function (e) {
                if (e.keyCode == 13) {
                    getallusersprjdtls('','');
                }
            }

        </script>


        <script type="text/javascript">
            $(document).ready(function () {
                $('#toppageheader').html('Search Form');
                $("a:contains(Search Form)").parent().addClass('active');


            });
            function getres(arg)
            {
                var alphabet = arg;
                if (document.getElementById('search_text').value == '')
                {
                    $('#result').hide();
                } else
                {
                    // alert(alphabet);
                    $.ajax({
                        type: "POST",
                        url: "<?php echo site_url('Search_all_form_ctrl/getsearchwords'); ?>",
                        data: {alphabet: alphabet},
                        success: function (msg) {
                            //alert(msg);
                            console.log("^^^^^^^^^^^" + msg);
                            $('#result').html(msg).show();
                        }
                    });
                }
            }

            function setthis(arg)
            {
                //alert(arg);
                document.getElementById('search_text').value = arg;
                $('#result').hide();
            }



            function reset_results() {
                // alert("reset button");
                $('#panelsuccess').hide();
                $('#result').hide();
                $('#search_text').val('');
                $('#project_id').prop('selectedIndex', 0);
                $('#unit_no').val('');
                $("#norecordspan").css('display','none');
                
               $.ajax({
                   type:'POST',
                   url:"<?php echo site_url('Search_all_form_ctrl/unsettingsession') ?>",
                   success:function(msg){
                      // alert('msg');
                   }
                   
               });
               
            }
            function gogo(arg)
            {
              //  alert(arg);
                window.location.href = "<?php echo site_url('Search_all_form_ctrl/decide_copy?form_id=') ?>" + arg;
            }

          



        </script>

    </body>
</html>