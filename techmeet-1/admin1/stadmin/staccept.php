<?php
include '../dbconnect.php';
$sid=$_GET['stid'];
$req=$_GET['req'];

if($req=='true'){
    $sql="update staff set status = 'idle' where staff_id=$sid";
    if(mysqli_query($con,$sql)){
        header('Location:../index.php?inc=staff.php');
    }
}else{
    $sql="delete from staff where staff_id=$sid";
    if(mysqli_query($con,$sql)){
        header('Location:../index.php?inc=staff.php');
    }
}
?>