<?php
include "config.php";

$id = $_POST['id'];
$status = $_POST['status'];

$conn->query("UPDATE rooms SET status='$status' WHERE id=$id");

echo "success";
?>