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
$sql="select * from info";
$result=mysqli_query($con,$sql);
while($row1=mysqli_fetch_assoc($result)){
    $id=$row1['id'];
    $key=$row1['ikey'];
    $value=$row1['ivalue'];
    if($row1['ikey']=='title'){
        $title=$row1['ivalue'];
    }
    if($row1['ikey']=='navtitle'){
        $ntitle=$row1['ivalue'];
    }
    if($row1['ikey']=='date'){
        $date=$row1['ivalue'];
    }
    if($row1['id']=='4'){
        $ahead1=$row1['ikey'];
        $avalue1=$row1['ivalue'];
    }
    if($row1['id']=='5'){
        $ahead2=$row1['ikey'];
        $avalue2=$row1['ivalue'];
    }
    if($row1['id']=='6'){
        $ahead3=$row1['ikey'];
        $avalue3=$row1['ivalue'];
    }
    if($row1['ikey']=='totalpart'){
        $totalpart=$row1['ivalue'];
    }
    if($row1['ikey']=='npevent'){
        $npevent=$row1['ivalue'];
    }
    if($row1['ikey']=='rpteam'){
        $rpteam=$row1['ivalue'];
    }
}
?>
<div class="container-fluid-xl px-4 mt-4">
    <!-- Account page navigation-->
    <nav class="nav nav-borders">
        <p class="nav-link active ms-0">Settings</p>
        <!--        <a class="nav-link" href="https://www.bootdey.com/snippets/view/bs5-profile-billing-page" target="__blank">Billing</a>-->
        <!--        <a class="nav-link" href="https://www.bootdey.com/snippets/view/bs5-profile-security-page" target="__blank">Security</a>-->
        <!--        <a class="nav-link" href="https://www.bootdey.com/snippets/view/bs5-edit-notifications-page"  target="__blank">Notifications</a>-->
    </nav>
    <hr class="mt-0 mb-4">
    <div class="row">
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Home Page</div>
                <div class="card-body">
                    <form method="post" action="settingsupt.php">
                        <!-- Form Group (username)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputUsername">TITLE</label>
                            <input class="form-control" id="inputUsername" type="text" name="title" value="<?php echo $title?>">
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputFirstName">Navabar Title</label>
                                <input class="form-control" id="inputFirstName" type="text" name="navtitle" placeholder="" value="<?php echo $ntitle?>">
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLastName">Date</label>
                                <input class="form-control" id="inputLastName" type="text" name="date" placeholder="Enter your Designation" value="<?php echo $date ?>">
                            </div>
                        </div>
                        <div class=""><b style="">Announcements</b></div>
                        <hr>
                        <!-- Form Row        -->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (organization name)-->
                            <div class="col-md-3">
                                <label class="small mb-1" for="inputOrgName">Title</label>
                                <input class="form-control" id="inputOrgName" type="text" name="ahead1" placeholder="Enter your phone no." value="<?php echo $ahead1?>">
                            </div>
                            <!-- Form Group (location)-->
                            <div class="col-md-9">
                                <label class="small mb-1" for="inputLocation">Content</label>
                                <textarea class="form-control" id="inputLocation" type="text" name="avalue1" placeholder="" rows="5"><?php echo $avalue1?></textarea>
                            </div>
                        </div>
                        <!-- Form Row        -->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (organization name)-->
                            <div class="col-md-3">
                                <label class="small mb-1" for="inputOrgName">Title</label>
                                <input class="form-control" id="inputOrgName" type="text" name="ahead2" placeholder="Enter your phone no." value="<?php echo $ahead2?>">
                            </div>
                            <!-- Form Group (location)-->
                            <div class="col-md-9">
                                <label class="small mb-1" for="inputLocation">Content</label>
                                <textarea class="form-control" id="inputLocation" type="text" name="avalue2" placeholder="" rows="5"><?php echo $avalue2?></textarea>
                            </div>
                        </div>
                        <!-- Form Row        -->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (organization name)-->
                            <div class="col-md-3">
                                <label class="small mb-1" for="inputOrgName">Title</label>
                                <input class="form-control" id="inputOrgName" type="text" name="ahead3" placeholder="Enter your phone no." value="<?php echo $ahead3?>">
                            </div>
                            <!-- Form Group (location)-->
                            <div class="col-md-9">
                                <label class="small mb-1" for="inputLocation">Content</label>
                                <textarea class="form-control" id="inputLocation" type="text" name="avalue3" placeholder="" rows="5"><?php echo $avalue3?></textarea>
                            </div>
                        </div>

                        <!-- Save changes button-->
                            <input class="btn btn-primary" type="submit" name="home" value="Save changes"></input>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Event details</div>
                <div class="card-body">
                    <form method="post" action="settingsupt.php">
                        <!-- Form Group (username)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputUsername">Total no. of participants for a team</label>
                            <input class="form-control" id="inputUsername" type="number" name="totalpart" value="<?php echo $totalpart; ?>">
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->
                            <div class="col-md-12">
                                <label class="small mb-1" for="inputFirstName">No. of events a participant can register</label>
                                <input class="form-control" id="inputFirstName" type="number" name="npevent" placeholder="" value="<?php echo $npevent; ?>">
                            </div>
                            <!-- Form Group (last name)-->

                        </div>
                        <div class="row gx-3 mb-3">
                            <div class="col-md-12">
                                <label class="small mb-1" for="inputLastName">No. of participants required(atleast) for a team</label>
                                <input class="form-control" id="inputLastName" type="number" name="rpteam" placeholder="" value="<?php echo $rpteam; ?>">
                            </div>
                        </div>
<!--                        <div class=""><b style="">Announcements</b></div>-->
<!--                        <hr>-->
                        <!-- Form Row        -->
<!--                        <div class="row gx-3 mb-3">-->
                            <!-- Form Group (organization name)-->
<!--                            <div class="col-md-3">-->
<!--                                <label class="small mb-1" for="inputOrgName">Title</label>-->
<!--                                <input class="form-control" id="inputOrgName" type="text" name="ahead1" placeholder="Enter your phone no." value="--><?php //echo $ahead1?><!--">-->
<!--                            </div>-->
                            <!-- Form Group (location)-->
<!--                            <div class="col-md-9">-->
<!--                                <label class="small mb-1" for="inputLocation">Content</label>-->
<!--                                <textarea class="form-control" id="inputLocation" type="text" name="avalue1" placeholder="" rows="5">--><?php //echo $avalue1?><!--</textarea>-->
<!--                            </div>-->
<!--                        </div>-->
                        <!-- Form Row        -->
<!--                        <div class="row gx-3 mb-3">-->
                            <!-- Form Group (organization name)-->
<!--                            <div class="col-md-3">-->
<!--                                <label class="small mb-1" for="inputOrgName">Title</label>-->
<!--                                <input class="form-control" id="inputOrgName" type="text" name="ahead2" placeholder="Enter your phone no." value="--><?php //echo $ahead2?><!--">-->
<!--                            </div>-->
                            <!-- Form Group (location)-->
<!--                            <div class="col-md-9">-->
<!--                                <label class="small mb-1" for="inputLocation">Content</label>-->
<!--                                <textarea class="form-control" id="inputLocation" type="text" name="avalue2" placeholder="" rows="5">--><?php //echo $avalue2?><!--</textarea>-->
<!--                            </div>-->
<!--                        </div>-->
                        <!-- Form Row        -->
<!--                        <div class="row gx-3 mb-3">-->
                            <!-- Form Group (organization name)-->
<!--                            <div class="col-md-3">-->
<!--                                <label class="small mb-1" for="inputOrgName">Title</label>-->
<!--                                <input class="form-control" id="inputOrgName" type="text" name="ahead3" placeholder="Enter your phone no." value="--><?php //echo $ahead3?><!--">-->
<!--                            </div>-->
<!--                             Form Group (location)-->
<!--                            <div class="col-md-9">-->
<!--                                <label class="small mb-1" for="inputLocation">Content</label>-->
<!--                                <textarea class="form-control" id="inputLocation" type="text" name="avalue3" placeholder="" rows="5">--><?php //echo $avalue3?><!--</textarea>-->
<!--                            </div>-->
<!--                        </div>-->

                        <!-- Save changes button-->
                        <input class="btn btn-primary" type="submit" name="event" value="Save changes"></input>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>