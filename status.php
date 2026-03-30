<?php
session_start();
include "config.php";

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

if (isset($_GET['id']) && isset($_GET['value'])) {

    $id = $_GET['id'];
    $value = $_GET['value'];

    $conn->query("UPDATE bookings SET status='$value' WHERE id=$id");
}

header("Location: dashboard.php");
exit();
?>