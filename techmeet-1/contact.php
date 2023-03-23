<?php


include 'dbconnect.php';
 
 $name=$_POST['name'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];
 $msg=$_POST['msg'];

$msg=mysqli_real_escape_string($con,$msg);

 $sql="INSERT INTO `queries` (`id`, `name`, `email`, `phone`, `message`) VALUES (NULL, '$name', '$email', '$phone', '$msg')";

 $result1=mysqli_query($con,$sql);
 header('location:home.php');
 ?>