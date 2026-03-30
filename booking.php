<?php
session_start();
include "config.php";

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

include "layout/header.php";
include "layout/sidebar.php";
?>
<div class="main">

    

    <div class="card">

        <div class="booking-title">
            <h1>BOOK YOUR STAY</h1>
            <p>Plan your perfect getaway at Elite Resort.</p>
        </div>

        <div class="booking-image">
            <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945">
        </div>

        <form action="rooms.php" method="GET" class="booking-bar">

    <div class="booking-item">
        <label>Guests</label>
        <p>2 guests, 1 room</p>
    </div>

    <div class="booking-item">
        <label>Check-in</label>
        <input type="date" name="checkin" required>
    </div>

    <div class="booking-item">
        <label>Check-out</label>
        <input type="date" name="checkout" required>
    </div>

    <button type="submit" class="search-btn">Search</button>

</form>

    </div>

</div>


<?php include "layout/footer.php"; ?>