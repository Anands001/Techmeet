<?php
include '../dbconnect.php';
session_start();
if(isset($_SESSION['username'])){
    $username=$_SESSION['username'];
    echo $username;
}elseif(isset($_POST['username'])){
    $username=$_POST['username'];
}
    $target_dir = "C:/xampp/htdocs/techmeet-1/images/staff/";
    $target_file = $target_dir . basename($_FILES["profile"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
$imgname=$_FILES["profile"]["name"];
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["profile"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["profile"]["name"])). " has been uploaded.";
        $imgname=$_FILES["profile"]["name"];
        $sql = "UPDATE staff SET image='$imgname' where username='$username';";
        if(mysqli_query($con,$sql)){
            header('Location:../index.php?inc=stadmin/profile.php');
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}



?>