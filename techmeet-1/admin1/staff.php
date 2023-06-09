<?php include 'dbconnect.php'; ?>
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
            background-color:#eee;
        }
        .card {
            margin-bottom: 24px;
            box-shadow: 0 2px 3px #e4e8f0;
        }
        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid #eff0f2;
            border-radius: 1rem;
        }
        .avatar-md {
            height: 4rem;
            width: 4rem;
        }
        .rounded-circle {
            border-radius: 50%!important;
        }
        .img-thumbnail {
            padding: 0.25rem;
            background-color: #f1f3f7;
            border: 1px solid #eff0f2;
            border-radius: 0.75rem;
        }
        .avatar-title {
            align-items: center;
            background-color: #3b76e1;
            color: #fff;
            display: flex;
            font-weight: 500;
            height: 100%;
            justify-content: center;
            width: 100%;
        }
        .bg-soft-primary {
            background-color: rgba(59,118,225,.25)!important;
        }
        a {
            text-decoration: none!important;
        }
        .badge-soft-danger {
            color: #f56e6e !important;
            background-color: rgba(245,110,110,.1);
        }
        .badge-soft-success {
            color: #63ad6f !important;
            background-color: rgba(99,173,111,.1);
        }
        .mb-0 {
            margin-bottom: 0!important;
        }
        .badge {
            display: inline-block;
            padding: 0.25em 0.6em;
            font-size: 75%;
            font-weight: 500;
            line-height: 1;
            color: #fff;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: 0.75rem;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/css/boxicons.min.css" integrity="sha512-pVCM5+SN2+qwj36KonHToF2p1oIvoU3bsqxphdOIWMYmgr4ZqD3t5DjKvvetKhXGc/ZG5REYTT6ltKfExEei/Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css" integrity="sha256-NAxhqDvtY0l4xn+YVa6WjAcmd94NNfttjNsDmNatFVc=" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>-->
</head>
<body>

<div class="container-fluid">
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="mb-3">
                <?php
                $sql1="Select count(*) as count from staff where status!='requested'";
                $result1=mysqli_query($con,$sql1);
                if($result1){
                    $row=mysqli_fetch_assoc($result1);
                    $tot=$row['count'];
                }
                ?>
                <h5 class="card-title">Staff List <span class="text-muted fw-normal ms-2">(<?php echo $tot ?>)</span></h5>
            </div>
        </div>
        <div class="col-md-6">
            <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
<!--                <div>-->
<!--                    <ul class="nav nav-pills">-->
<!--                        <li class="nav-item">-->
<!--                            <a href="#" class="nav-link" data-bs-toggle="tooltip" data-bs-placement="top" title="List"><i class="bx bx-list-ul"></i></a>-->
<!--                        </li>-->
<!--                        <li class="nav-item">-->
<!--                            <a aria-current="page" href="#" class="router-link-active router-link-exact-active nav-link active" data-bs-toggle="tooltip" data-bs-placement="top" title="Grid"><i class="bx bx-grid-alt"></i></a>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </div>-->
                <?php
                $sql2="Select count(*) as count from staff where status='requested'";
                $result2=mysqli_query($con,$sql2);
                if($result2){
                    $row2=mysqli_fetch_assoc($result2);
                    $rtot=$row2['count'];
                }
                ?>
                <?php
                if($_SESSION['role']=='admin'){
                ?>
                <div>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#staffreqmodal" class="btn btn-primary"><span class="badge badge-soft-danger ms-2"><?php echo $rtot;?></span> Requests</a>
                </div>
                <?php } ?>
<!--                <div class="dropdown">-->
<!--                    <a class="btn btn-link text-muted py-1 font-size-16 shadow-none dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-horizontal-rounded"></i></a>-->
<!--                    <ul class="dropdown-menu dropdown-menu-end">-->
<!--                        <li><a class="dropdown-item" href="#">Action</a></li>-->
<!--                        <li><a class="dropdown-item" href="#">Another action</a></li>-->
<!--                        <li><a class="dropdown-item" href="#">Something else here</a></li>-->
<!--                    </ul>-->
<!--                </div>-->
            </div>
        </div>
    </div>
    <div class="row">
        <?php

        $sql="Select * from staff where status!='requested'";
        $result=mysqli_query($con,$sql);
        if($result){
            while($row=mysqli_fetch_assoc($result)){
                $sid=$row['staff_id'];
                $name=$row['name'];
                $desg=$row['desg'];
                $img=$row['image'];
                $gmail=$row['gmail'];
                $mobile=$row['mobile'];
                $simg=$row['image'];
                $eid=$row['event_id'];
                $role=$row['roles'];
                if(isset($eid)) {
                    $sql1 = "Select event_name from events where event_id=$eid";
                    $result1 = mysqli_query($con, $sql1);
                    if ($result1) {
                        while ($row1 = mysqli_fetch_assoc($result1))
                            $ename = $row1['event_name'];
                    }
                }else{
                    $ename="Not assigned";
                }
                if($simg!=null){
                    $icode='<div><img src="../images/staff/'.$img.'" style="object-fit: contain" alt="" class="avatar-md rounded-circle img-thumbnail" /></div>';
                }else{
                    $icode='<div class="avatar-md">
                            <div class="avatar-title bg-soft-primary text-primary display-6 m-0 rounded-circle"><i class="bx bxs-user-circle"></i></div>
                        </div>';
                }
                echo '<div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="dropdown float-end">
                        <a class="text-muted dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"><i class="bx bx-dots-horizontal-rounded"></i></a>
                        <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="stadmin/staccept.php?stid='.$sid.'&req=false">Remove</a></div>
                    </div>
                    <div class="d-flex align-items-center">
                        '.$icode.'
                        <div class="flex-1 ms-3">
                            <h6 class="font-size-16 mb-1" data-toggle="tooltip" data-placement="top" title="'.$name.'" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap; max-width: 16ch;">'.$name.'</h6>
                            <span class="badge badge-soft-success mb-0">'.$desg.'</span>
                            <span class="badge badge-soft-danger mb-0">'.$role.'</span>
                            
                            <span class="badge badge-soft-success mb-0">'.$ename.'</span>
                        </div>
                    </div>
                    <div class="mt-3 pt-1">
                        <p class="text-muted mb-0"><i class="mdi mdi-phone font-size-15 align-middle pe-2 text-primary"></i> '.$mobile.'</p>
                        <p class="text-muted mb-0 mt-2"><i class="mdi mdi-email font-size-15 align-middle pe-2 text-primary"></i> '.$gmail.'</p>
                        
                    </div>';
        ?>

                    <?php if($_SESSION['role']=='admin'){ ?>
                    <div class="d-flex gap-2 pt-4">
                        <form action="stadmin/editstaff.php" method="post">
                            <input type="hidden" name="sid" value="<?php echo $sid;?>">
                            <div class="row">
                                <div class="col-6">
        <!--                            <input type="button" class="btn btn-soft-primary btn-sm w-50"><i class="bx bx-user me-1"></i> Profile</input>-->
                                    <select class="form-select form-select mb-3" aria-label=".form-select-lg example" name="eid">
<!--                                        <option disabled="disabled" selected="selected">Assign Event</option>-->

                                        <?php
                                        $sql1="Select * from events";
                                        $result1=mysqli_query($con,$sql1);
                                        if($result1){
                                            $i=0;
                                            while($row1=mysqli_fetch_assoc($result1)){
                                                $ename=$row1['event_name'];
                                                $eid=$row1['event_id'];
                                                if($i=0) {
                                                    echo '<option value="' . $eid . '" selected>' . $ename . '</option>';
                                                }else{
                                                    echo '<option value="' . $eid . '">' . $ename . '</option>';
                                                }
                                            }
                                        }
                                        ?>

                                    </select>
                                </div>
                                <div class="col-6">
                                    <select class="form-select form-select mb-3" aria-label=".form-select-lg example" name="role">
                                        <option disabled="disabled">Select Role</option>
                                        <option value="staff">Staff</option>
                                        <option value="admin">Admin</option>
                                    </select>
                                </div>

                            </div>
                            <input type="submit" class="btn btn-outline-primary ml-auto" value="save">

                            <!--                            <input type="button" class="btn btn-primary btn-sm w-50"><i class="bx bx-message-square-dots me-1"></i> Contact</input>-->
                        </form>
                    </div>
        <?php } ?>
                </div>
            </div>
        </div>
<?php
            }
        }
?>

<!--        <div class="col-xl-3 col-sm-6">-->
<!--            <div class="card">-->
<!--                <div class="card-body">-->
<!--                    <div class="dropdown float-end">-->
<!--                        <a class="text-muted dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"><i class="bx bx-dots-horizontal-rounded"></i></a>-->
<!--                        <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Remove</a></div>-->
<!--                    </div>-->
<!--                    <div class="d-flex align-items-center">-->
<!--                        <div class="avatar-md">-->
<!--                            <div class="avatar-title bg-soft-primary text-primary display-6 m-0 rounded-circle"><i class="bx bxs-user-circle"></i></div>-->
<!--                        </div>-->
<!--                        <div class="flex-1 ms-3">-->
<!--                            <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">William Swift</a></h5>-->
<!--                            <span class="badge badge-soft-warning mb-0">Backend Developer</span>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="mt-3 pt-1">-->
<!--                        <p class="text-muted mb-0"><i class="mdi mdi-phone font-size-15 align-middle pe-2 text-primary"></i> 012 6587 1236</p>-->
<!--                        <p class="text-muted mb-0 mt-2"><i class="mdi mdi-email font-size-15 align-middle pe-2 text-primary"></i> WilliamSwift@spy.com</p>-->
<!--                        <p class="text-muted mb-0 mt-2"><i class="mdi mdi-google-maps font-size-15 align-middle pe-2 text-primary"></i> 80 South Street MONKW 7BR</p>-->
<!--                    </div>-->
<!--                    <div class="d-flex gap-2 pt-4">-->
<!--                        <button type="button" class="btn btn-soft-primary btn-sm w-50"><i class="bx bx-user me-1"></i> Profile</button>-->
<!--                        <button type="button" class="btn btn-primary btn-sm w-50"><i class="bx bx-message-square-dots me-1"></i> Contact</button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-xl-3 col-sm-6">-->
<!--            <div class="card">-->
<!--                <div class="card-body">-->
<!--                    <div class="dropdown float-end">-->
<!--                        <a class="text-muted dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"><i class="bx bx-dots-horizontal-rounded"></i></a>-->
<!--                        <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Remove</a></div>-->
<!--                    </div>-->
<!--                    <div class="d-flex align-items-center">-->
<!--                        <div class="avatar-md">-->
<!--                            <div class="avatar-title bg-soft-primary text-primary display-6 m-0 rounded-circle"><i class="bx bxs-user-circle"></i></div>-->
<!--                        </div>-->
<!--                        <div class="flex-1 ms-3">-->
<!--                            <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">Kevin West</a></h5>-->
<!--                            <span class="badge badge-soft-success mb-0">Full Stack Developer</span>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="mt-3 pt-1">-->
<!--                        <p class="text-muted mb-0"><i class="mdi mdi-phone font-size-15 align-middle pe-2 text-primary"></i> 052 6524 9896</p>-->
<!--                        <p class="text-muted mb-0 mt-2"><i class="mdi mdi-email font-size-15 align-middle pe-2 text-primary"></i> KevinWest@spy.com</p>-->
<!--                        <p class="text-muted mb-0 mt-2"><i class="mdi mdi-google-maps font-size-15 align-middle pe-2 text-primary"></i> 88 Tadcaster PINCHBECK 6UB</p>-->
<!--                    </div>-->
<!--                    <div class="d-flex gap-2 pt-4">-->
<!--                        <button type="button" class="btn btn-soft-primary btn-sm w-50"><i class="bx bx-user me-1"></i> Profile</button>-->
<!--                        <button type="button" class="btn btn-primary btn-sm w-50"><i class="bx bx-message-square-dots me-1"></i> Contact</button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-xl-3 col-sm-6">-->
<!--            <div class="card">-->
<!--                <div class="card-body">-->
<!--                    <div class="dropdown float-end">-->
<!--                        <a class="text-muted dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"><i class="bx bx-dots-horizontal-rounded"></i></a>-->
<!--                        <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Remove</a></div>-->
<!--                    </div>-->
<!--                    <div class="d-flex align-items-center">-->
<!--                        <div><img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="" class="avatar-md rounded-circle img-thumbnail" /></div>-->
<!--                        <div class="flex-1 ms-3">-->
<!--                            <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">Tommy Hayes</a></h5>-->
<!--                            <span class="badge badge-soft-warning mb-0">Backend Developer</span>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="mt-3 pt-1">-->
<!--                        <p class="text-muted mb-0"><i class="mdi mdi-phone font-size-15 align-middle pe-2 text-primary"></i> 065 2563 6587</p>-->
<!--                        <p class="text-muted mb-0 mt-2"><i class="mdi mdi-email font-size-15 align-middle pe-2 text-primary"></i> TommyHayes@spy.com</p>-->
<!--                        <p class="text-muted mb-0 mt-2"><i class="mdi mdi-google-maps font-size-15 align-middle pe-2 text-primary"></i> 5 Boar Lane SELLING 2LG</p>-->
<!--                    </div>-->
<!--                    <div class="d-flex gap-2 pt-4">-->
<!--                        <button type="button" class="btn btn-soft-primary btn-sm w-50"><i class="bx bx-user me-1"></i> Profile</button>-->
<!--                        <button type="button" class="btn btn-primary btn-sm w-50"><i class="bx bx-message-square-dots me-1"></i> Contact</button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-xl-3 col-sm-6">-->
<!--            <div class="card">-->
<!--                <div class="card-body">-->
<!--                    <div class="dropdown float-end">-->
<!--                        <a class="text-muted dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"><i class="bx bx-dots-horizontal-rounded"></i></a>-->
<!--                        <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Remove</a></div>-->
<!--                    </div>-->
<!--                    <div class="d-flex align-items-center">-->
<!--                        <div><img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="" class="avatar-md rounded-circle img-thumbnail" /></div>-->
<!--                        <div class="flex-1 ms-3">-->
<!--                            <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">Diana Owens</a></h5>-->
<!--                            <span class="badge badge-soft-danger mb-0">UI/UX Designer</span>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="mt-3 pt-1">-->
<!--                        <p class="text-muted mb-0"><i class="mdi mdi-phone font-size-15 align-middle pe-2 text-primary"></i> 087 6321 3235</p>-->
<!--                        <p class="text-muted mb-0 mt-2"><i class="mdi mdi-email font-size-15 align-middle pe-2 text-primary"></i> DianaOwens@spy.com</p>-->
<!--                        <p class="text-muted mb-0 mt-2"><i class="mdi mdi-google-maps font-size-15 align-middle pe-2 text-primary"></i> 52 Ilchester MYBSTER 9WX</p>-->
<!--                    </div>-->
<!--                    <div class="d-flex gap-2 pt-4">-->
<!--                        <button type="button" class="btn btn-soft-primary btn-sm w-50"><i class="bx bx-user me-1"></i> Profile</button>-->
<!--                        <button type="button" class="btn btn-primary btn-sm w-50"><i class="bx bx-message-square-dots me-1"></i> Contact</button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-xl-3 col-sm-6">-->
<!--            <div class="card">-->
<!--                <div class="card-body">-->
<!--                    <div class="dropdown float-end">-->
<!--                        <a class="text-muted dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"><i class="bx bx-dots-horizontal-rounded"></i></a>-->
<!--                        <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Remove</a></div>-->
<!--                    </div>-->
<!--                    <div class="d-flex align-items-center">-->
<!--                        <div><img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="" class="avatar-md rounded-circle img-thumbnail" /></div>-->
<!--                        <div class="flex-1 ms-3">-->
<!--                            <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">Paul Sanchez</a></h5>-->
<!--                            <span class="badge badge-soft-success mb-0">Full Stack Developer</span>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="mt-3 pt-1">-->
<!--                        <p class="text-muted mb-0"><i class="mdi mdi-phone font-size-15 align-middle pe-2 text-primary"></i> 021 0125 5689</p>-->
<!--                        <p class="text-muted mb-0 mt-2"><i class="mdi mdi-email font-size-15 align-middle pe-2 text-primary"></i> DianaOwens@spy.com</p>-->
<!--                        <p class="text-muted mb-0 mt-2"><i class="mdi mdi-google-maps font-size-15 align-middle pe-2 text-primary"></i> 80 South Street MONKW 7BR</p>-->
<!--                    </div>-->
<!--                    <div class="d-flex gap-2 pt-4">-->
<!--                        <button type="button" class="btn btn-soft-primary btn-sm w-50"><i class="bx bx-user me-1"></i> Profile</button>-->
<!--                        <button type="button" class="btn btn-primary btn-sm w-50"><i class="bx bx-message-square-dots me-1"></i> Contact</button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
    </div>
</div>
<div
        class="modal fade"
        id="staffreqmodal"
        tabindex="-1"
        role="dialog"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">REQUESTS</h5>
                <button
                        class="close"
                        type="button"
                        data-dismiss="modal"
                        aria-label="Close"
                >
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <?php

                    $sql="Select * from staff where status='requested'";
                    $result=mysqli_query($con,$sql);
                    if($result){
                        while($row=mysqli_fetch_assoc($result)){
                            $sid=$row['staff_id'];
                            $name=$row['name'];
                            $desg=$row['desg'];
                            $img=$row['image'];
                            $gmail=$row['gmail'];
                            $mobile=$row['mobile'];
                            $simg=$row['image'];
                            if($simg!=null){
                                $icode='<div><img src="../images/staff/'.$img.'" style="object-fit: contain" alt="" class="avatar-md rounded-circle img-thumbnail" /></div>';
                            }else{
                                $icode='<div class="avatar-md">
                            <div class="avatar-title bg-soft-primary text-primary display-6 m-0 rounded-circle"><i class="bx bxs-user-circle"></i></div>
                        </div>';
                            }
                            echo '<div class="col-xl-12 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="dropdown float-end">
                        <a class="text-muted dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"><i class="bx bx-dots-horizontal-rounded"></i></a>
                        <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Remove</a></div>
                    </div>
                    <div class="d-flex align-items-center">
                        '.$icode.'
                        <div class="flex-1 ms-3">
                            <h6 class="font-size-16 mb-1" data-toggle="tooltip" data-placement="top" title="'.$name.'" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap; max-width: 16ch;">'.$name.'</h6>
                            <span class="badge badge-soft-success mb-0">'.$desg.'</span>
                        </div>
                    </div>
                    <div class="mt-3 pt-1">
                        <p class="text-muted mb-0"><i class="mdi mdi-phone font-size-15 align-middle pe-2 text-primary"></i> '.$mobile.'</p>
                        <p class="text-muted mb-0 mt-2"><i class="mdi mdi-email font-size-15 align-middle pe-2 text-primary"></i> '.$gmail.'</p>
                        
                    </div>
                    <div class="d-flex gap-2 pt-4">
                        <a type="button" class="btn btn-danger btn-sm w-50" href="stadmin/staccept.php?stid='.$sid.'&req=false"> Cancel</a>
                        <a type="button" class="btn btn-outline-info btn-sm w-50" href="stadmin/staccept.php?stid='.$sid.'&req=true"> Accept</a>
                    </div>
                </div>
            </div>
        </div>';
                        }
                    }
                    ?>

                </div>
            </div>
            <div class="modal-footer">
                <button
                        class="btn btn-secondary"
                        type="button"
                        data-dismiss="modal"
                >
                    Cancel
                </button>
<!--                <a class="btn btn-primary" href="stadmin/logout.php">Logout</a>-->
            </div>
        </div>
    </div>
</div>
</body>
</html>
