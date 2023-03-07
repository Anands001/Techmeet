<?php
session_start();
$con =null;
include '../dbconnect.php';
if (isset($_POST['submit'])) {
    $submitValue = $_POST['submit'];
    echo $submitValue;
    if ($submitValue == 'login') {
// Perform action for Submit 1

        $user=$_POST['username'];
        $pass=$_POST['password'];

        $sql="Select username from staff where username='$user' and password='$pass' and status!='requested'";

        $result=mysqli_query($con,$sql);
        if(($row=mysqli_fetch_assoc($result))!=null){
            if($user=='admin') {
                $_SESSION['username']=$user;
                header('Location:../index.php?inc=dashboard.php');
            }else{
                $_SESSION['username']=$user;
                header('Location:../index.php?inc=dashboard.php');
            }
        }else{
            header('Location:login.php');
        }
    }
}
?>
