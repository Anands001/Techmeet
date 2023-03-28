<?php

include '../dbconnect.php';
//Evaluation sheet
$target_dir = "docs/";
$target_file = $target_dir . basename($_FILES["prizesheet"]["name"]);
$prizelistname = $_FILES['prizesheet']['name'];
$uploadOkk = 1;

// Check if file is a DOC or PDF file
$fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
//     if ($fileType != "doc" && $fileType != "pdf") {
//         echo "Sorry, only DOC and PDF files are allowed.";
//         $uploadOkk = 0;
//     }

if ($uploadOkk == 0) {
echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
if (move_uploaded_file($_FILES["prizesheet"]["tmp_name"], $target_file)) {
echo "The file " . basename($_FILES["prizesheet"]["name"]) . " has been uploaded.";
} else {
echo "Sorry, there was an error uploading your file.";
}
}
$sql="UPDATE `info` SET ivalue='$prizelistname' where ikey='prizelist';";
echo $sql;
if(mysqli_query($con,$sql)){
    session_start();
    $_SESSION['tmsg']='uploaded successfully';
        header('Location:index.php?inc=docdownload.php');

}
?>