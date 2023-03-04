<?php
include "../dbconnect.php";
session_start();
$username=$_SESSION['username'];
if($_POST['profile']==null) {
    $username = $_POST['username'];
    $name = $_POST['name'];
    $desg = $_POST['desg'];
    $mobile = $_POST['mobile'];
    $linkedin = $_POST['linkedin'];
    $email = $_POST['email'];

    $sql = "UPDATE staff SET name = '$name', desg = '$desg', gmail = '$email' , mobile = '$mobile' , linkedin = '$linkedin' WHERE username='$username';";
    $result = mysqli_query($con, $sql);
    if (isset($result)) {
        header('Location:../index.php?inc=stadmin/profile.php');
    }
}


?>