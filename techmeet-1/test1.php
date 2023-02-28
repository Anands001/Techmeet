<?php
include 'dbconnect.php';

$tname=null;
$team2=array();
$query = "select tname from user";
$result5 = mysqli_query($con, $query);
if ($result5) {
    while ($row = mysqli_fetch_assoc($result5)) {
        $teams = $row['tname'];
        array_push($team2,$teams);
    }
}

$team1=array();
$query = "select tname from teams";
$result5 = mysqli_query($con, $query);
if ($result5) {
    while ($row = mysqli_fetch_assoc($result5)) {
        $teams = $row['tname'];
        if(!in_array($teams, $team2)){
            $tname=$teams;
            break;
        }
    }
}
?>