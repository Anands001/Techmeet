<?php
include "../dbconnect.php";
if(isset($_SESSION['username'])){
    $username=$_SESSION['username'];
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
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
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
<?php
$sql="select * from staff where username='$username'";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($result)){
    $name=$row['name'];
    $desg=$row['desg'];
    $image=$row['image'];
    $email=$row['gmail'];
    $mobile=$row['mobile'];
    $linkedin=$row['linkedin'];
    $role=$row['roles'];
}
?>
<div class="container-fluid-xl px-4 mt-4">
    <!-- Account page navigation-->
    <nav class="nav nav-borders">
        <p class="nav-link active ms-0">Profile</p>
<!--        <a class="nav-link" href="https://www.bootdey.com/snippets/view/bs5-profile-billing-page" target="__blank">Billing</a>-->
<!--        <a class="nav-link" href="https://www.bootdey.com/snippets/view/bs5-profile-security-page" target="__blank">Security</a>-->
<!--        <a class="nav-link" href="https://www.bootdey.com/snippets/view/bs5-edit-notifications-page"  target="__blank">Notifications</a>-->
    </nav>
    <hr class="mt-0 mb-4">
    <div class="row">
        <div class="col-xl-4">
            <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <img class="img-account-profile rounded-circle mb-2" src="../images/staff/<?php echo $image?>" alt="">
                    <!-- Profile picture help block-->
                    <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                    <!-- Profile picture upload button-->
                    <div class="text center">Upload new image</div>
                    <form method="post" action="stadmin/updateprofimg.php" enctype="multipart/form-data">
                        <input type="hidden" name="username" value="<?php $username ?>">
                        <input class="btn btn-primary" name="profile" type="file"></input><br><br>
                        <input class="btn btn-primary" type="submit" value="Upload"></input>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Account Details</div>
                <div class="card-body">
                    <form method="post" action="stadmin/updateprof.php">
                        <!-- Form Group (username)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputUsername">Username</label>
                            <input class="form-control" id="inputUsername" type="text" name="username" value="<?php echo $username?>" readonly>
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputFirstName">Name</label>
                                <input class="form-control" id="inputFirstName" type="text" name="name" placeholder="Enter your first name" value="<?php echo $name?>">
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLastName">Designation</label>
                                <input class="form-control" id="inputLastName" type="text" name="desg" placeholder="Enter your Designation" value="<?php echo $desg?>">
                            </div>
                        </div>
                        <!-- Form Row        -->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (organization name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputOrgName">Mobile</label>
                                <input class="form-control" id="inputOrgName" type="text" name="mobile" placeholder="Enter your phone no." value="<?php echo $mobile?>">
                            </div>
                            <!-- Form Group (location)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLocation">Linkedin</label>
                                <input class="form-control" id="inputLocation" type="text" name="linkedin" placeholder="Enter your linkedin profile" value="<?php echo $linkedin?>">
                            </div>
                        </div>
                        <!-- Form Group (email address)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Email address</label>
                            <input class="form-control" id="inputEmailAddress" type="email" name="email" placeholder="Enter your email address" value="<?php echo $email?>">
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (phone number)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputPhone">role</label>
                                <input class="form-control" id="inputPhone" type="text" name="role" value="<?php echo $role?>" readonly>
                            </div>
                            <!-- Form Group (birthday)-->
<!--                            <div class="col-md-6">-->
<!--                                <label class="small mb-1" for="inputBirthday">Birthday</label>-->
<!--                                <input class="form-control" id="inputBirthday" type="text" name="birthday" placeholder="Enter your birthday" value="06/10/1988">-->
<!--                            </div>-->
                        </div>
                        <!-- Save changes button-->
                        <input class="btn btn-primary" type="submit" value="Save changes"></input>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>