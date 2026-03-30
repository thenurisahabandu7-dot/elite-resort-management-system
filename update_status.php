<?php
include "config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id = $_POST['id'] ?? '';
    $status = $_POST['status'] ?? '';

    if ($id == '' || $status == '') {
        echo "invalid";
        exit();
    }

    // IMPORTANT: your column name is Status (capital S)
    $query = "UPDATE bookings SET Status='$status' WHERE id='$id'";

    if ($conn->query($query)) {
        echo "success";
    } else {
        echo "error";
    }

} else {
    echo "invalid";
}
?>