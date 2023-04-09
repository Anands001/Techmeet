<!DOCTYPE html>
<html lang="en">
<?php include '../dbconnect.php' ?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Tables</title>

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
        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
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
            // handleSelect(document.getElementById("dropDown"));
        });
    </script>
    <script type="text/javascript">
        function handleSelect(elm)
        {
            window.location = elm.value;
        }
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
                <h1 class="h3 mb-2 text-gray-800">Participants List</h1>
                <!--                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.-->
                <!--                        For more information about DataTables, please visit the <a target="_blank"-->
                <!--                            href="https://datatables.net">official DataTables documentation</a>.</p>-->
                <!-- pdf download -->
                <div class="d-flex">
                    <input type="button" class="btn btn-outline-primary mb-3" id="btnExport" value="Download" onclick="Export()" />

                    <a class="btn btn-outline-info ml-2 mb-3 d-print-none" href="#" onclick="printDiv('printableArea')" data-abc="true">Print</a>

                    <!--search-->
                    <div class="input-group ml-auto">
                        <div class="form-outline ml-auto mr-3">
<!--                            <input type="search" id="form1" placeholder="Search" class="form-control" onkeyup="searchFilter(event.target.value)"/>-->
                            <!--                                        <label class="form-label" for="form1">Search</label>-->
                        </div>

                        <!--                                   <button type="button" class="btn btn-primary">-->
                        <!--                                        <i class="fas fa-search"></i>-->
                        <!--                                    </button>-->
                    </div>
                    <select id ="dropDown" onchange="handleSelect(this)" class="ml-auto form-select form-select-lg mb-2 col-2" aria-label="" name="eventfilter">

                                                        <option disabled="disabled" selected="selected">filter</option>
                        <?php
                        $ename=null;
                        $sql="select event_name from events where status='IN'";
                        $result=mysqli_query($con,$sql);
                        $i =0;
                        if($result){
                            while($row=mysqli_fetch_assoc($result)){
                                $eventfilt=$row['event_name'];
                                if($i=0){
//                                    echo '<option selected="selected" disabled>Events</option>';
                                    $i++;

                                }else{
                                    echo '<option value="index.php?inc=eventpart.php&event_name='.$eventfilt.'">'.$eventfilt.'</option>';

                                }
                            }
                        }
                        ?>
                    </select>

                </div>

                <?php
                if(isset($_GET['event_name'])) {
                    $ename = $_GET['event_name'];
                }
                ?>

                <!-- DataTales Example -->
                <div class="card shadow mb-4" id="printableArea">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary"><?php echo $ename?></h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                        </div>
                        <thead>
<!--                        <center><h4 class="m-0 mb-2 font-weight-bold text-primary">--><?php //echo $ename ?><!--</h4></center>-->

                        <tr>
                            <th>Sno</th>
                            <th>Team Name</th>
                            <th>Name</th>
                            <th>Reg no</th>
                            <th>Email</th>
                            <th>clg_Name</th>
                            <th>Dept</th>
<!--                            <th>Event Name</th>-->
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Sno</th>
                            <th>Team Name</th>
                            <th>Name</th>
                            <th>Reg no</th>
                            <th>Email</th>
                            <th>clg_Name</th>
                            <th>Dept</th>
<!--                            <th>Event Name</th>-->
                        </tr>
                        </tfoot>
                        <tbody>
                        <?php
                        $year = date("Y");
                        $sql="select user.std_name,user.std_regno,user.mobile,user.email,user.clg_name,user.dept,user.tname,events.event_name from user JOIN (manage_events JOIN events USING(event_id)) USING(std_id) where YEAR(user.created_at)=$year and events.event_name='$ename' ORDER BY user.clg_name, user.dept;
;";
                        //                        $sql="select * from user";
                        $result=mysqli_query($con,$sql);

                        if($result){
                            $sno=0;
                            $tname=null;
                            while($row=mysqli_fetch_assoc($result)){
                                if($tname!=$row['tname']){
                                    $flag=1;
                                    $sno++;
                                }
                                $name=$row['std_name'];
                                $regno=$row['std_regno'];
                                $mobile=$row['mobile'];
                                $email=$row['email'];
                                $clgname=$row['clg_name'];
                                $dept=$row['dept'];
                                $eventname=$row['event_name'];
                                $tname=$row['tname'];

                                if($flag==1) {
                                    $query = "select count(user.std_name) as count from user JOIN (manage_events JOIN events USING(event_id)) USING(std_id) where YEAR(user.created_at)=$year and events.event_name='$ename' and user.tname='$tname' ORDER BY user.clg_name, user.dept";
                                    $result1 = mysqli_query($con, $query);
                                    $row1 = mysqli_fetch_assoc($result1);
                                    $rowspan = $row1['count'];
//                                    echo $rowspan;

                                    echo '<tr>';
                                    echo '  <td rowspan="' . $rowspan . '">' . $sno . '</td>';
                                    echo '  <td rowspan="' . $rowspan . '">' . $tname . '</td>';
                                    echo '  <td>' . $name . '</td>';
                                    echo '  <td>' . $regno . '</td>';
                                    echo '  <td>' . $email . '</td>';
                                    echo '  <td>' . $clgname . '</td>';
                                    echo '  <td>' . $dept . '</td>';
//                                    echo '  <td>' . $eventname . '</td>';
                                    echo '  </tr>';
                                } else{
                                    echo '<tr>';
//                                    echo '  <td></td>';
                                    echo '  <td>'.$name.'</td>';
                                    echo '  <td>'.$regno.'</td>';
                                    echo '  <td>'.$email.'</td>';
                                    echo '  <td>'.$clgname.'</td>';
                                    echo '  <td>'.$dept.'</td>';
//                                    echo '  <td>'.$eventname.'</td>';
                                    echo  '  </tr>';

                                }
                                $flag=0;

//                                    echo '
//                                <tr>
//                                            <td>' . $tname . '</td>
//                                            <td>' . $name . '</td>
//                                            <td>' . $regno . '</td>
//                                            <td>' . $email . '</td>
//                                            <td>' . $clgname . '</td>
//                                            <td>' . $dept . '</td>
//                                            <td>' . $eventname . '</td>
//                                        </tr>
//                                ';


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
<script>
    // const searchFilter = (value) => {
    //     var input, filter, table, tr, td, i, txtValue;
    //     filter = value.toUpperCase();
    //     table = document.getElementById("dataTable");
    //     tr = table.getElementsByTagName("tr");
    //
    //     // Loop through all table rows, and hide those who don't match the search query
    //     for (i = 1; i < tr.length; i++) {
    //         td = tr[i];
    //         if (td) {
    //             txtValue = td.textContent || td.innerText;
    //             if (txtValue.toUpperCase().indexOf(filter) > -1) {
    //                 tr[i].style.display = "";
    //             } else {
    //                 tr[i].style.display = "none";
    //             }
    //         }
    //     }
    // }

</script>
</body>

</html>