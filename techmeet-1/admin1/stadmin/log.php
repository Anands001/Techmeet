<?php
$con =null;
include '../dbconnect.php';
if (isset($_POST['submit'])) {
    $submitValue = $_POST['submit'];
    echo $submitValue;
    if ($submitValue == 'login') {
// Perform action for Submit 1
        $user=$_POST['username'];
        $pass=$_POST['password'];

        $sql="Select username from staff where username='$user' and password='$pass'";

        $result=mysqli_query($con,$sql);
        if(isset($result)){
            if($user=='admin') {
                header('Location:../index.php?inc=dashboard.php');
            }else{
                header('Location:../index.php?inc=dashboard.php');
            }
        }else{
            header('Location:login.php');
        }
    }
}
?>
