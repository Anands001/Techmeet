<?php

include 'dbconnect.php';
if(isset($_POST['addclg'])) {
    $clg = $_POST['clg'];

    $clg = mysqli_real_escape_string($con, $clg);


    $sql1 = "INSERT INTO `college`(`clg_name`) VALUES ('$clg')";
    $result=mysqli_query($con, $sql1);
    if(isset($result)){
        header('location:index.php?inc=clganddept.php');
    }
}

if(isset($_POST['adddept'])) {
    $dept = $_POST['dept'];

    $dept = mysqli_real_escape_string($con, $dept);


    $sql1 = "INSERT INTO `department`(`dept_name`) VALUES ('$dept')";
    $result=mysqli_query($con, $sql1);
    if(isset($result)){
        header('location:index.php?inc=clganddept.php');
    }
}
if(isset($_POST['addteam'])) {
    $tname = $_POST['tname'];

    $tname = mysqli_real_escape_string($con, $tname);


    $sql1 = "INSERT INTO `teams`(`tname`) VALUES ('$tname')";
    $result=mysqli_query($con, $sql1);
    if(isset($result)){
        header('location:index.php?inc=clganddept.php');
    }
}

if(isset($_GET['delclg'])) {
    $clg_name = $_GET['delclg'];

    $clg_name = mysqli_real_escape_string($con, $clg_name);


    $sql1 = "DELETE FROM `college` WHERE clg_name='$clg_name'";
    $result=mysqli_query($con, $sql1);
    if(isset($result)){
        header('location:index.php?inc=clganddept.php');
    }
}

if(isset($_GET['deldept'])) {
    $dept_name = $_GET['deldept'];

    $dept_name = mysqli_real_escape_string($con, $dept_name);

    $sql1 = "DELETE FROM `department` WHERE dept_name='$dept_name'";
    $result=mysqli_query($con, $sql1);
    if(isset($result)){
        header('location:index.php?inc=clganddept.php');
    }
}

if(isset($_GET['delteam'])) {
    $tname = $_GET['delteam'];

    $tname = mysqli_real_escape_string($con, $tname);

    $sql1 = "DELETE FROM `teams` WHERE tname='$tname'";
    $result=mysqli_query($con, $sql1);
    if(isset($result)){
        header('location:index.php?inc=clganddept.php');
    }
}
?>