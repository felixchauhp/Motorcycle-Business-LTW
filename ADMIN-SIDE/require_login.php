<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit();
}

// Lấy ngày hiện tại
$today = date('Y-m-d');
$start_date = $today;
$end_date = $today;
?>