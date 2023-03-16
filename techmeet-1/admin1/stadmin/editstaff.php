<?php
include '../dbconnect.php';

$sid=$_POST['sid'];
$eid=$_POST['eid'];
$role=$_POST['role'];

$sql="UPDATE staff SET roles = '$role', event_id = '$eid' WHERE staff_id='$sid';";
echo $sql;
$result=mysqli_query($con,$sql);
if($result){
    header('Location:../index.php?inc=staff.php');
}
?>