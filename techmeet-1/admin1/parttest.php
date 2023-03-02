<!DOCTYPE html>
<html lang="en">
<?php include 'C:\xampp\htdocs\techmeet-1\dbconnect.php' ?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Tables</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">
    <!--    <link href="../css/mdb.min.css">-->

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">


    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <style>
        .hidden {
            display: none;
        }
    </style>
    <script type="text/javascript">
        function Export() {
            html2canvas(document.getElementById('dataTable'), {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("Table.pdf");
                }
            });
        }
    </script>
    <script>
        'use strict'
        function myFunction() {
            // Declare variables
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("dropDown");
            console.log(input);
            filter = input.value.toUpperCase();
            table = document.getElementById("dataTable");
            tr = table.getElementsByTagName("tr");

            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[6];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].classList.remove("hidden"); // remove the "hidden" class if it exists
                    } else {
                        tr[i].classList.add("hidden"); // add the "hidden" class if the row should be hidden
                    }
                }
            }
        }
        document.addEventListener('DOMContentLoaded', function() {
            // myFunction();
        });
    </script>
</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">



    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">



            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                <!--                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.-->
                <!--                        For more information about DataTables, please visit the <a target="_blank"-->
                <!--                            href="https://datatables.net">official DataTables documentation</a>.</p>-->
                <!-- pdf download -->
                <div class="d-flex">
                    <input type="button" class="btn btn-outline-primary mb-3" id="btnExport" value="Download" onclick="Export()" />

                    <a class="btn btn-sm btn-info float-right mr-1 d-print-none" href="#" onclick="javascript:window.print();" data-abc="true">Print</a>

                    <!--search-->
                    <div class="input-group ml-auto">
                        <div class="form-outline ml-auto mr-3">
                            <input type="search" id="form1" placeholder="Search" class="form-control" />
                            <!--                                        <label class="form-label" for="form1">Search</label>-->
                        </div>

                        <!--                                   <button type="button" class="btn btn-primary">-->
                        <!--                                        <i class="fas fa-search"></i>-->
                        <!--                                    </button>-->
                    </div>
                    <select id ="dropDown" onchange="myFunction()" class="ml-auto form-select form-select-lg mb-3" aria-label="" name="eventfilter">
                        <!--                                <option disabled="disabled" selected="selected">filter</option>-->
                        <?php
                        $sql="select event_name from events";
                        $result=mysqli_query($con,$sql);
                        $i =0;
                        if($result){
                            while($row=mysqli_fetch_assoc($result)){
                                $eventfilt=$row['event_name'];
                                if($i=0){
                                    echo '<option value="'.$eventfilt.'" selected="selected">'.$eventfilt.'</option>';
                                    $i++;

                                }else{
                                    echo '<option value="'.$eventfilt.'">'.$eventfilt.'</option>';

                                }
                            }
                        }
                        ?>
                    </select>

                </div>

                <?php

                ?>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Participation list</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                        </div>
                        <thead>
                        <tr>
<!--                            <th>Sno</th>-->
                            <th>Team Name</th>
                            <th>Name</th>
                            <th>Reg no</th>
                            <th>Email</th>
                            <th>clg_Name</th>
                            <th>Dept</th>
                            <th>Event Name</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
<!--                            <th>Sno</th>-->
                            <th>Team Name</th>
                            <th>Name</th>
                            <th>Reg no</th>
                            <th>Email</th>
                            <th>clg_Name</th>
                            <th>Dept</th>
                            <th>Event Name</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <?php
                        $sql="select user.std_name,user.std_regno,user.mobile,user.email,user.clg_name,user.dept,user.tname,events.event_name from user JOIN (manage_events JOIN events USING(event_id)) USING(std_id) ORDER BY user.clg_name, user.dept;
;";
                        //                        $sql="select * from user";
                        $result=mysqli_query($con,$sql);

                        if($result){
                            $tname=null;
                            $rs=0;
                            while($row=mysqli_fetch_assoc($result)){


                                $name=$row['std_name'];
                                $regno=$row['std_regno'];
                                $mobile=$row['mobile'];
                                $email=$row['email'];
                                $clgname=$row['clg_name'];
                                $dept=$row['dept'];
                                $eventname=$row['event_name'];
                                $tname=$row['tname'];
                                if($tname!=$row['tname']){
                                    $rs=1;
                                }

                                if($tname==$row['tname']){
                                    echo '<tr>';

                                    echo '  <td rowspan="'.$rs.'">'.$tname.'</td>';

                                    echo '  <td>'.$name.'</td>';
                                    echo '  <td>'.$regno.'</td>';
                                    echo '  <td>'.$email.'</td>';
                                    echo '  <td>'.$clgname.'</td>';
                                    echo '  <td>'.$dept.'</td>';
                                    echo '  <td>'.$eventname.'</td>';
                                    echo  '  </tr>';

                                    $rs++;
                                }

                                echo '
                                <tr>
                                            <td>'.$tname.'</td>
                                            <td>'.$name.'</td>
                                            <td>'.$regno.'</td>
                                            <td>'.$email.'</td>
                                            <td>'.$clgname.'</td>
                                            <td>'.$dept.'</td>
                                            <td>'.$eventname.'</td>
                                        </tr>
                                ';

                            }
                        }
                        ?>
                        </tbody>
                        </table>


                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->



</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- pdf download -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>

<!--    <script src="js/mdb.min.js"></script>-->

</body>

</html>