<!DOCTYPE html>
<!--
Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
Unauthorized copying of this file, via any medium is strictly prohibited
Proprietary and confidential.
Written by Oga Technologies, October 1,  2016.
-->
<html>
    <head>
        <title>Document</title>
        
        <?php require_once('assets/html_head_links.php'); ?>
    </head>
    <body> 
        
        <?php
        require_once('assets/top_menu.php');
        require_once('assets/side_menu.php');
        ?>
        <div class="main">
            <!-- Content Here -->

            <div class="container">
                <?php
                log_message('error', 'applicant payment  page start:');
                $user1 = $this->input->get('uid');

                //  print_r( $user); echo'<br/>';
                foreach ($this->Payment_model->get_appl_details($user1) as $row) {
                    ?> 
                    <div class="row">

                        <div class="panel panel-primary" >
                            <div class="panel-heading">
                                <h4>  <strong>Documents List</strong><?php $name = $row->name; ?>&nbsp;&nbsp;&nbsp;&nbsp;<strong> </strong> &nbsp;<?php $project_name = $row->project_name; ?><?php $block = $row->block; ?>&nbsp;&nbsp;&nbsp;&nbsp;<strong></strong>&nbsp;<?php $unit_no = $row->unit_no; ?>&nbsp;&nbsp;&nbsp;&nbsp;<strong></strong>&nbsp;<?php $type = $row->type; ?>
                                    <a href="<?php echo site_url('Documentation/index'); ?>" class="btn btn-primary pull-right clickable" role="button" style="margin-top: -10px;"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
                            </div>
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

                        <?php
                        $user = $this->input->get('uid');
                        $sql = "select * from documents_tbl where applicant_id=$user ";
                        //  print_r($sql);
                        $this->db->query($sql);

                        if ($this->db->affected_rows() > 0) {
                            //true
                            ?>

                            <div class="panel-body" style="overflow-y:scroll;margin-top:  30px;" >
                                <table class="table table-bordered table-striped" border='2'>

                                    <tr style="background-color: #5bc0de;color:#FFF;">
                                        <th style="text-align: center;">  Document Type </th>
                                        <th style="text-align: center;">  Date </th>

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
                                                <td><!--a class="btn btn-info" data-href="<?php //echo base_url($row['path']);     ?>" href="#" onclick="getFile(this);">download</a-->
                                                    
                                                    <a class="example-image-link btn btn-primary btn-3d" href="#" onclick="check_img_present('<?php echo base_url($row['path']); ?>');"  >View Document</a>
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
                            <?php
                        } else {
                            //false
                            ?>
                            <br><br>
                            <div class="container" style="width: 82%;">
                                <div class="alert alert-info text-center" role="alert">No Document Found</div>
                            </div>

                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>


        <script>
            if (window.print) {
                document.write('<form><input type=button name=print value="Print" onClick="window.print()"></form>');
                var ButtonControl = document.getElementById("btnprint");
                ButtonControl.style.visibility = "hidden";
            }
        </script>


        <script>
            $(document).ready(function () {
                $('#toppageheader').html('Applicant Documents');
                $("a:contains(Documentation)").parent().addClass('active');
            });

            function getFile(path) {
                go_url = path.getAttribute("data-href");
                //alert(go_url);
                $.ajax({
                    url: '' + go_url,
                    type: 'HEAD',
                    error: function ()
                    {
                        console.log('file absent');
                        //alert('File ABSENT');
                        window.location.href = 'index.php/Real404/show404';
                    },
                    success: function ()
                    {
                        console.log('file present');
                        //alert('File PRESENT');
                        window.location.href = go_url;
                        document.body.style.display = "go_url";
                    }
                });
            }
            function check_img_present(image_url) {
                $.get(image_url)
                        .done(function () {
                            window.open(image_url);

                        }).fail(function () {
                        window.open("<?php echo site_url('Real404/show404'); ?>");
                })
            }
        </script>    
    </body>
</html>