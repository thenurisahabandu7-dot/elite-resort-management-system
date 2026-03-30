<?php
session_start();
include "config.php";

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $name = $_POST['room_name'];
    $type = $_POST['room_type'];
    $price = $_POST['price'];
    $capacity = $_POST['capacity'];
    $status = $_POST['status'];

    $conn->query("INSERT INTO rooms (room_name, room_type, price, capacity, status)
                  VALUES ('$name','$type','$price','$capacity','$status')");

    header("Location: rooms.php");
}

include "layout/header.php";
include "layout/sidebar.php";
?>

<div class="main">

<div class="lux-form-wrapper">

<h1>Add New Room</h1>

<form method="POST" class="lux-form">

<div class="input-group">
    <input type="text" name="room_name" required>
    <label>Room Name</label>
</div>

<div class="input-group">
    <input type="text" name="room_type" required>
    <label>Room Type</label>
</div>

<div class="input-group">
    <input type="number" name="price" required>
    <label>Price</label>
</div>

<div class="input-group">
    <input type="number" name="capacity" required>
    <label>Capacity</label>
</div>

<div class="input-group">
    <select name="status" required>
        <option value="" disabled selected></option>
        <option value="Available">Available</option>
        <option value="Maintenance">Maintenance</option>
    </select>
    <label>Status</label>
</div>

<button class="lux-submit">Add Room</button>

</form>
</div>
</div>

<?php include "layout/footer.php"; ?>