<?php
include 'dbconnect.php';
session_start();
if(isset($_POST['home'])) {
    $title = $_POST['title'];
    $navtitle = $_POST['navtitle'];
    $date = $_POST['date'];

    $ahead1 = $_POST['ahead1'];
    $avalue1 = $_POST['avalue1'];
    $ahead2 = $_POST['ahead2'];
    $avalue2 = $_POST['avalue2'];
    $ahead3 = $_POST['ahead3'];
    $avalue3 = $_POST['avalue3'];

    $avalue1 = mysqli_real_escape_string($con, $avalue1);
    $avalue2 = mysqli_real_escape_string($con, $avalue2);
    $avalue3 = mysqli_real_escape_string($con, $avalue3);

    $sql1 = "update info set ivalue='$title' where ikey='title'";
    mysqli_query($con, $sql1);
    $sql2 = "update info set ivalue='$navtitle' where ikey='navtitle'";
    mysqli_query($con, $sql2);
    $sql3 = "update info set ivalue='$date' where ikey='date'";
    mysqli_query($con, $sql3);
    $sql4 = "update info set ikey='$ahead1',ivalue='$avalue1' where id=4";
    mysqli_query($con, $sql4);
    $sql5 = "update info set ikey='$ahead2',ivalue='$avalue2' where id=5";
    mysqli_query($con, $sql5);
    $sql6 = "update info set ikey='$ahead3',ivalue='$avalue3' where id=6";
    mysqli_query($con, $sql6);
    $_SESSION['tmsg']='Updated successfully';
    header('Location:index.php?inc=settings.php');
}
if(isset($_POST['event'])) {
    $totalpart=$_POST['totalpart'];
    $npevent=$_POST['npevent'];
    $rpteam=$_POST['rpteam'];
    $sql7 = "update info set ivalue='$totalpart' where ikey='totalpart'";
    mysqli_query($con, $sql7);
    $sql8 = "update info set ivalue='$npevent' where ikey='npevent'";
    mysqli_query($con, $sql8);
    $sql9 = "update info set ivalue='$rpteam' where ikey='rpteam'";
    mysqli_query($con, $sql9);
    $_SESSION['tmsg']='Updated successfully';

    header('Location:index.php?inc=settings.php');

}
?>
