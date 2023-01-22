<!DOCTYPE html>
<html lang="en">

<?php

$con=new mysqli('localhost','root','','techmeet');
if(!$con){
    die(mysqli_error($con));
}
session_start();

     $eid=$_GET['event_id'];
    $sql="Select * from events where event_id='$eid'";
    $result=mysqli_query($con,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $ename=$row['event_name'];
            $nop=$row['partic_no'];
            
        }
      }
      if(isset($_SESSION["alert1"])){
        echo $_SESSION["alert1"];
      }
session_destroy();
?>
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Register Form</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Event Registration Form</h2>
                </div>
                
                <div class="card-body">
                    <form method="POST" action="reg.php">
                        <div class="form-row m-b-55">
                            <!-- <div class="name">Name</div> -->
                            <div class="value">
                                <div class="row row-space">
                                    <!-- <div class="col">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="first_name">
                                            <label class="label--desc">first name</label>
                                        </div>
                                    </div> -->
                                    <!-- <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="last_name">
                                            <label class="label--desc">last name</label>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <?php
                            echo '<input type="hidden" name="eid" value='.$eid.'>';

                        ?>
                        <div class="form-row">
                            <div class="name">Name</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="name[]" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Reg no</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="regno" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="email[]" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Phone</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="phone" required>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="form-row m-b-55">
                            <div class="name">Phone</div>
                            <div class="value">
                                <div class="row row-refine">
                                    <div class="col-3">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="area_code">
                                            <label class="label--desc">Area Code</label>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="phone">
                                            <label class="label--desc">Phone Number</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="form-row">
                            <div class="name">Clg Name</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="clg_name" onclick="" required>
                                            <option disabled="disabled" selected="selected">Choose college</option>
                                            <?php
                                            $sql1="Select * from college";
                                            $result1=mysqli_query($con,$sql1);
                                            if($result1){
                                                while($row1=mysqli_fetch_assoc($result1)){
                                                    $cname=$row1['clg_name'];                                                    
                                                    echo '<option>'.$cname.'</option>';
                                                }
                                              }
                                            ?>
                                            
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Department</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="dept" onclick="" required>
                                            <option disabled="disabled" selected="selected">Choose department</option>
                                            <?php
                                            $sql2="Select * from department";
                                            $result2=mysqli_query($con,$sql2);
                                            if($result2){
                                                while($row2=mysqli_fetch_assoc($result2)){
                                                    $dname=$row2['dept_name'];                                                    
                                                    echo '<option>'.$dname.'</option>';
                                                }
                                              }
                                            ?>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="form-row mb-3">
                            <div class="name">Dept</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="dept" required>
                                </div>
                            </div>
                        </div> -->
                        <?php
                        if($nop>1){                        ?>
                        <h4>Team members</h4>
                        <hr>
                        <br>
                        <?php } ?>
                        <?php
                        for ($i = 1; $i < $nop; $i++) {
                            echo '
                            <div class="form-row mb-3">
                            <div class="name">Name</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="name[]" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row mb-3 ">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="email[]" required>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <br>
                        ';
                          }
                        ?>
                        <!-- <div class="form-row p-t-20">
                            <label class="label label--block">Are you an existing customer?</label>
                            <div class="p-t-15">
                                <label class="radio-container m-r-55">Yes
                                    <input type="radio" checked="checked" name="exist">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">No
                                    <input type="radio" name="exist">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div> -->
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->