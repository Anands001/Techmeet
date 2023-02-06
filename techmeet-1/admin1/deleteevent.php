<?php
include 'dbconnect.php';
$eid=$_GET['event_id'];

$sql="delete from events where event_id=$eid";
$result=mysqli_query($con,$sql);
if($result){
    header('location:index.php?inc=ecard2.php');
}else{
    echo 'error';
}
?>