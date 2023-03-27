<?php
include '../dbconnect.php';
session_start();
$name=$_POST['name'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$desg=$_POST['designation'];

$sql="INSERT INTO `staff` (`staff_id`, `username`, `password`, `name`, `desg`, `image`, `gmail`, `mobile`, `linkedin`, `status`, `event_id`) VALUES (NULL, '$username', '$password', '$name', '$desg', '', '$email', '', '', 'requested', NULL);";

$result=mysqli_query($con,$sql);
if(isset($result)){
    $_SESSION['rmsg']='Registered successfully';
    header('Location:register.php');
}
?>