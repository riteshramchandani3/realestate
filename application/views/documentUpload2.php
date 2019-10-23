<!DOCTYPE html>
<html>
    <head>
        <title>Documentation</title>
        <?php
        include_once('assets/html_head_links.php');
        ?>
        <style>
            .file {
                visibility: hidden;
                position: absolute;
            }
            .panel-heading a
            {
                margin-top: -35px;
                font-size: 15px;

            }
            .form-control{
                width: 100%;
            }
            a.clickable {
                display: inline-block;
                padding: 6px 12px;
                border-radius: 4px;
                cursor: pointer;
            }
            .modal-header-danger {
                color:#fff;
                padding:9px 15px;
                border-bottom:1px solid #eee;
                background-color: #C9302C;
                -webkit-border-top-left-radius: 5px;
                -webkit-border-top-right-radius: 5px;
                -moz-border-radius-topleft: 5px;
                -moz-border-radius-topright: 5px;
                border-top-left-radius: 5px;
                border-top-right-radius: 5px;
            }


        </style>
    </head>
    <body> 
        <?php
        require_once('assets/top_menu.php');
        require_once('assets/side_menu.php');
        ?>
        <div class="main">

            <div class="container">  
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
                <?php
              
                $user1 = $this->input->get('uid');
                foreach ($this->Demand_letter_model->get_appl_details($user1) as $row) {



                   // $name = $row->name;
                  //  $project_name = $row->project_name;
                   // $block = $row->block;


                  //  $unit_no = $row->unit_no;

                  //  $type = $row->type;
                }
                ?>

                <div class="panel panel-primary" >
                    <div class="panel-heading">
                        <h4>  <strong>Documents </strong>
                        </h4> 
                        <a href="<?php echo site_url('Documentation/index'); ?>" class="btn btn-primary pull-right clickable" role="button" style="margin-top: -37px;"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
                    </div> 
                    <?php
                   
                    foreach ($this->Payment_model->get_appl_details($user1) as $row) {
                        ?> 
                        <?php $name = $row->name; ?><?php $project_name = $row->project_name; ?><?php $block = $row->block; ?><?php $unit_no = $row->unit_no; ?><?php $type = $row->type; ?>

                    <?php } ?>
                    <br>
                    <center>
                        <div class="btn-3d" style="border:1px solid #337ab7; border-radius:5px; width:80%; line-height:150%;  ">
                            <label>Customer Name :</label><?php echo nbs(2) . $name; ?><?php echo nbs(3); ?>
                            <label>Project Name :</label><?php echo nbs(2) . $project_name . nbs(1) . $block; ?> <?php echo nbs(3); ?>
                            <label>Unit No :</label><?php echo nbs(2) . $unit_no; ?> <?php echo nbs(3); ?>
                            <label>Type :</label><?php echo nbs(2) . $type; ?>

                        </div>
                    </center>

                    <div class="panel-body">
                        <div class="form-inline">
                            <br><br>
                            <form action="<?php echo site_url('Documentation/doc_upload'); ?>" method="post" id="Form" class="form-inline" enctype="multipart/form-data" name="Form">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <span class="input-group-addon"> Document OF</span>
                                                <select  name="doc_type_1" class="form-control" id="person" style="width: 170%;">

                                                    <option value="0">--Select--</option>
                                                    <option value='Applicant'>Applicant</option>
                                                    <option value='Co-Applicant-1'>Co-Applicant 1</option>
                                                    <option value='Co-Applicant-2'>Co-Applicant 2</option>


                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-md-6" id="co-applicant" style="display: none;">

                                            <div class="input-group">
                                                <span class="input-group-addon"> Document Type</span>
                                                <select name="co-appl_doc_type" class="form-control">
                                                    <option value="0">--Select--</option>
                                                    <option value="PAN">PAN</option>
                                                    <option value="Adhar_card">Aadhar card</option>
                                                    <option value="Voter_id">Voter id</option>
                                                    <option value="Bank_statement">Bank statement last 6 months</option>
                                                    <option value="Income Tax return last 3 year">Income Tax return last 3 year</option>
                                                    <option value="Salary_slip">Salary slip (3 months)</option>
                                                    <option value="photo">5 Passport size photos</option>
                                                    <option value="form">form 16 last 2 year</option>


                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-md-6" id="applicant" style="display: none;">

                                            <div class="input-group">
                                                <span class="input-group-addon">Document Type</span>
                                                <select name="appl_doc_type" id="appl_doc_type" class="form-control" required>


                                                    <option value="0">--Select--</option>
                                                    <?php
                                                    foreach ($this->Documentation_mdl->GetDocumenttype() as $row) {
                                                        ?>
                                                        <option value="<?php echo $row->document_title; ?>"> <?php echo $row->document_title; ?></option>

                                                        <?php
                                                    }
                                                    ?>
                                                </select>

                                            </div>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                        <div class="col-md-4">

                                            <div class="input-group">
                                                <span class="input-group-addon"> Document Date</span>
                                                <input type="text" class="form-control" id="date" name="date_of_document" value="<?php echo date("d-m-Y"); ?>" placeholder="DD-MM-YYYY" title="The Issue Date Written On Document (Not Scanning Date)"/>
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            </div>                
                                        </div>
                                        <div class="col-md-6">                                     
                                            <input class="form-control browse btn btn-primary" type="file" name="path" style="width: 83%;color:#fff !important;" id="pancard_path" required> 
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">                               
                                        <div class="col-md-6">
                                            <input type="hidden"  name="applicant_id" value="<?php echo $user1; ?>">
                                            <input type="hidden"  name="project_name" value="<?php echo $project_name; ?>">
                                            <input type="submit" name="upload" value="submit" class="btn btn-success" style="padding:5px 40px;">
                                        </div>
                                    </div>
                                </div>


                            </form>


                            <div class="panel-body" style="overflow-y:scroll;margin-top:  30px;" >
                                <table class="table table-bordered table-striped" border='2'>

                                    <tr style="background-color: #5bc0de;color:#FFF;">
                                        <th style="text-align: center;">  Document Of / Type </th>
                                        <th style="text-align: center;">  Document Generation Date</th> 
                                        <th style="text-align: center;">  Action </th> 
                                    </tr>
                                    <tbody>
                                        <?php
                                        log_message('error', 'applicant doccument  page start:');
                                        $user = $this->input->get('uid');
                                        //  print_r( $user); echo'<br/>';

                                        foreach ($this->Documentation_mdl->get_documents($user) as $row) {
                                            ?> 


                                            <tr style="text-transform: capitalize;text-align: center;">
                                                <td><?php echo $row['doc_type']; ?></td>

                                                <td>
                                                    <?php
                                                    $x = explode(' ', $row['date_of_document']);
                                                    $date_of_document = new DateTime($x[0]);
                                                    echo $date_of_document->format('d-m-Y');
                                                    ?>
                                                </td>
                                                <td>
                                                    <a type="button" title="Delete" class="btn btn-danger" value=<?php echo $row['id'] . '*' . $row['path'] . '*' . $user; ?> onclick="myclicktest('<?php echo $row['id'] . '*' . $row['path'] . '*' . $user; ?>')" data-toggle="modal" data-target="#myModal"><i class="fa fa-trash"></i></a>
                                                </td>


                                            </tr>
                                            <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                <div class="panel-success" id="panelsuccess" style="display: none;">
                                    <div class="panel-heading">View Document</div>
                                    <div class="panel-body">
                                        <div class="row" id="tablespace">

                                        </div>
                                    </div>

                                </div>

                            </div>




                        </div>
                    </div>
                </div>
                <div class="modal fade" id="myModal"role="dialog" style="margin-top: 200px;">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header-danger">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Confirm Delete</h4>
                            </div>
                            <form action="<?php echo site_url('Documentation/delete_row'); ?>" method="post"  >
                                <div class="modal-body">

                                    Enter Password:
                                    <input type="password" name="confirmpwd" id="confirmpwd" >
                                    <input type="hidden" name="docid" id="docid">

                                </div>
                                <div class="modal-footer" style="text-align: center;">
                                    <input type="submit" value="Delete" class="btn btn-danger">                               
                                    <!--a id="del_row_to_get" href="<?php //echo site_url('Documentation/delete_row')             ?>"  class='btn btn-danger'  name='Delete' value='delete'>Delete <i class="fa fa-trash"></i></a-->
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <script>
            function myclicktest(id) {
                // alert(id);
                console.log(id);
                var _href = $('#del_row_to_get').attr("href");
                $('#del_row_to_get').attr("href", _href + '?id=' + id);
                $('#docid').val(id);
                $('#confirmpwd').val('');

            }
        </script>


        <script>
            $(document).on('click', '.browse', function () {
                var file = $(this).parent().parent().parent().find('.file');
                file.trigger('click');
            });
            $(document).on('change', '.file', function () {
                $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
            });
        </script>


        <script>
            $(document).ready(function () {
                $('#toppageheader').html('Upload Documents');
                $("a:contains(Upload Document)").parent().addClass('active');
            });


        </script>

        <script type="text/javascript">

            function getres(arg)
            {
                var alphabet = arg;
                // alert(alphabet);
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('View_ctrl/getsearchwords'); ?>",
                    data: {alphabet: alphabet},
                    success: function (msg) {
                        //alert(msg);
                        console.log("^^^^^^^^^^^" + msg);
                        $('#result').html(msg).show();

                    }
                });


            }

            function setthis(arg)
            {
                //alert(arg);
                document.getElementById('search_text').value = arg;
                $('#result').hide();
            }


            function getallusersprjdtls()
            {

                var username = document.getElementById('search_text').value;
                var projectid = document.getElementById('project_id').value;
                var unitno = document.getElementById('unit_no').value;
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('View_ctrl/allapplicationuserswithproject') ?>",
                    data: {uname: username, pid: projectid, unitno: unitno},
                    success: function (msg) {
                        //alert(msg);
                        document.getElementById('tablespace').innerHTML = msg;
                        $('#panelsuccess').css('display', '');
                    }

                });

            }

            function reset_results() {
                $('#panelsuccess').hide();
                $('#search_text').val('');
                $('#project_id').prop('selectedIndex', 0);
                $('#unit_no').val('');
            }

            //-------------------deleteing a project record-------------
            $('.trash').click(function () {
                var del_href = $(this).data('href');
                $('#modalDelete').attr('href', del_href);
            });

            function get_docs_for_thisapplicant1(uid) {
                window.location.href = 'show_appl_docs?uid=' + uid;
            }
            function deletedocs(uid) {
                window.location.href = 'delete_doc?uid=' + uid;
            }



        </script>

        <script>

            $(document).ready(function () {
                $(window).keydown(function (event) {
                    if (event.keyCode == 13) {
                        event.preventDefault();
                        return false;
                    }
                });
            });

            $(function () {
                $("#date").datepicker({
                    dateFormat: 'dd-mm-yy',
                    changeMonth: true,
                    changeYear: true,
                    yearRange: '-100y:c+100'
                });
            });

            $(document).ready(function () {
                $('#person').on('change', function () {
                    if (this.value == 'Applicant')
                    {
                        $("#applicant").show();
                    } else {

                        $("#applicant").hide();
                    }
                    if (this.value == 'Co-Applicant-1' || this.value == 'Co-Applicant-2')
                    {
                        $("#co-applicant").show();
                    } else {

                        $("#co-applicant").hide();
                    }
                });
            });



        </script>


    </body>
</html>