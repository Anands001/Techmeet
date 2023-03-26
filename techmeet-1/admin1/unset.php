<?php
session_start();

if (isset($_SESSION['tmsg'])) {
    unset($_SESSION['tmsg']);
}

?>

