<?php
include 'dbconnect.php';
$eid=$_GET['event_id'];

//$sql="delete from events where event_id=$eid";
$sql="UPDATE `events` SET `status`='OUT' WHERE event_id=$eid";
$result=mysqli_query($con,$sql);
if($result){
    $_SESSION['tmsg']='Event deleted successfully';
    header('location:index.php?inc=ecard2.php');
}else{
//    echo 'error';
    $_SESSION['tmsg']='Something went wrong';

    header('location:index.php?inc=ecard2.php');

}
?>