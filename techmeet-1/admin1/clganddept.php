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
         body{margin-top:20px;
             background-color:#f2f6fc;
             color:#69707a;
         }
        .img-account-profile {
            height: 10rem;
        }
        .rounded-circle {
            border-radius: 50% !important;
        }
        .card {
            box-shadow: 0 0.15rem 1.75rem 0 rgb(33 40 50 / 15%);
        }
        .card .card-header {
            font-weight: 500;
        }
        .card-header:first-child {
            border-radius: 0.35rem 0.35rem 0 0;
        }
        .card-header {
            padding: 1rem 1.35rem;
            margin-bottom: 0;
            background-color: rgba(33, 40, 50, 0.03);
            border-bottom: 1px solid rgba(33, 40, 50, 0.125);
        }
        .form-control, .dataTable-input {
            display: block;
            width: 100%;
            padding: 0.875rem 1.125rem;
            font-size: 0.875rem;
            font-weight: 400;
            line-height: 1;
            color: #69707a;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #c5ccd6;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border-radius: 0.35rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .nav-borders .nav-link.active {
            color: #0061f2;
            border-bottom-color: #0061f2;
        }
        .nav-borders .nav-link {
            color: #69707a;
            border-bottom-width: 0.125rem;
            border-bottom-style: solid;
            border-bottom-color: transparent;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            padding-left: 0;
            padding-right: 0;
            margin-left: 1rem;
            margin-right: 1rem;
        }

    </style>

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">



    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
            <div class="row">
            <div class="col-xl-5">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">College</div>
                    <div class="card-body">
                        <form method="post" action="editregdetails.php">
                            <!-- Form Group (username)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">Add College</label>
                                <input class="form-control" id="inputUsername" type="text" name="clg">
                            </div>
                            <!-- Form Row-->


                            <!-- Save changes button-->
                            <input class="btn btn-primary" type="submit" name="addclg" value="Add"></input>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-xl-4">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Department</div>
                    <div class="card-body">
                        <form method="post" action="editregdetails.php">
                            <!-- Form Group (username)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">Add Department</label>
                                <input class="form-control" id="inputUsername" type="text" name="dept">
                            </div>
                            <!-- Form Row-->


                            <!-- Save changes button-->
                            <input class="btn btn-primary" type="submit" name="adddept" value="Add"></input>
                        </form>
                    </div>
                </div>
            </div>
                <div class="col-xl-3">
                    <!-- Account details card-->
                    <div class="card mb-4">
                        <div class="card-header">Team Names</div>
                        <div class="card-body">
                            <form method="post" action="editregdetails.php">
                                <!-- Form Group (username)-->
                                <div class="mb-3">
                                    <label class="small mb-1" for="inputUsername">Add Team Name</label>
                                    <input class="form-control" id="inputUsername" type="text" name="tname">
                                </div>
                                <!-- Form Row-->


                                <!-- Save changes button-->
                                <input class="btn btn-primary" type="submit" name="addteam" value="Add"></input>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Participants List</h1>
                <!--                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.-->
                <!--                        For more information about DataTables, please visit the <a target="_blank"-->
                <!--                            href="https://datatables.net">official DataTables documentation</a>.</p>-->
                <!-- pdf download -->
                <div class="d-flex">

                    <!--search-->
                    <div class="input-group ml-auto">
                        <div class="form-outline ml-auto mr-3">
<!--                            <input type="search" id="form1" placeholder="Search" class="form-control" />-->
                            <!--                                        <label class="form-label" for="form1">Search</label>-->
                        </div>

                        <!--                                   <button type="button" class="btn btn-primary">-->
                        <!--                                        <i class="fas fa-search"></i>-->
                        <!--                                    </button>-->
                    </div>


                </div>



                <!-- DataTales Example -->
                <div class="row">
                    <div class="col-xl-5">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Colleges</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="50%" cellspacing="0">

                        </div>
                        <thead>
                        <!--                        <center><h4 class="m-0 mb-2 font-weight-bold text-primary">--><?php //echo $ename ?><!--</h4></center>-->

                        <tr>
                            <th>Sno</th>
                            <th>College Name</th>
                            <th>Edit</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Sno</th>
                            <th>College Name</th>
                            <th>Edit</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <?php
                        $sql="Select * from college;";
                        $result=mysqli_query($con,$sql);
                        $i=1;
                        if($result) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<tr>';
                                echo '<td>'.$i.'</td>';
                                echo '<td>'.$row['clg_name'].'</td>';
                                echo '<td><a class="btn btn-outline-danger" href="editregdetails.php?delclg='.$row['clg_name'].'">Delete</a></td>';
                                echo '</tr>';
                                $i++;
                            }
                        }
                        ?>
                        </tbody>
                        </table>


                    </div>
                </div>
            </div>
                </div>
                <div class="col-xl-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Departments</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="50%" cellspacing="0">

                    </div>
                    <thead>
                    <!--                        <center><h4 class="m-0 mb-2 font-weight-bold text-primary">--><?php //echo $ename ?><!--</h4></center>-->

                    <tr>
                        <th>Sno</th>
                        <th>Departments</th>
                        <th>Edit</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Sno</th>
                        <th>Departments</th>
                        <th>Edit</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <?php
                    $sql="Select * from department;";
                    $result=mysqli_query($con,$sql);
                    $i=1;
                    if($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<tr>';
                            echo '<td>'.$i.'</td>';
                            echo '<td>'.$row['dept_name'].'</td>';
                            echo '<td><a class="btn btn-outline-danger" href="editregdetails.php?deldept='.$row['dept_name'].'">Delete</a></td>';
                            echo '</tr>';
                            $i++;
                        }
                    }
                    ?>
                    </tbody>
                    </table>


                </div>
            </div>
                </div>

<!--                teams-->

        </div>
            <div class="col-xl-3">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Team Names</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="50%" cellspacing="0">

                        </div>
                        <thead>
                        <!--                        <center><h4 class="m-0 mb-2 font-weight-bold text-primary">--><?php //echo $ename ?><!--</h4></center>-->

                        <tr>
                            <th>Sno</th>
                            <th>College Name</th>
                            <th>Edit</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Sno</th>
                            <th>College Name</th>
                            <th>Edit</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <?php
                        $sql="Select * from teams;";
                        $result=mysqli_query($con,$sql);
                        $i=1;
                        if($result) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<tr>';
                                echo '<td>'.$i.'</td>';
                                echo '<td>'.$row['tname'].'</td>';
                                echo '<td><a class="btn btn-outline-danger" href="editregdetails.php?delteam='.$row['tname'].'">Delete</a></td>';
                                echo '</tr>';
                                $i++;
                            }
                        }
                        ?>
                        </tbody>
                        </table>


                    </div>
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