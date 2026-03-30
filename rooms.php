<?php
session_start();
include "config.php";   // IMPORTANT

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

include "layout/header.php";
include "layout/sidebar.php";
?>

<div class="main">

    <!-- HEADER -->
    <div class="booking-title">
    <h1>ROOM MANAGEMENT</h1>
    <p>Manage and control all room details in your resort.</p>
</div>

    <!-- CARD -->
    <div class="card">

        <div class="page-header" style="display:flex; justify-content:space-between; align-items:center;">
            <h2 class="section-title">Rooms</h2>
            <a href="add_room.php" class="search-btn">+ Add Room</a>
        </div>

        <!-- ROOMS GRID -->
        <div class="lux-room-grid">

        <?php
        $result = $conn->query("SELECT * FROM rooms ORDER BY id DESC");

        if($result && $result->num_rows == 0){
            echo "<h3 style='color:orange;'>No rooms available. Click + Add Room.</h3>";
        }

        if($result){
            while($row = $result->fetch_assoc()){

            $statusClass = ($row['status']=="Available") ? "lux-available" : "lux-maintenance";
        ?>

        <!-- ROOM CARD -->
        <div class="lux-room-card">

            <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945"
                 class="room-img">

            <h3><?php echo htmlspecialchars($row['room_name']); ?></h3>

            <p><?php echo htmlspecialchars($row['room_type']); ?></p>

            <p>Capacity: <?php echo $row['capacity']; ?> Persons</p>

            <div class="room-price">
                $<?php echo number_format($row['price'],2); ?>
            </div>

            <div class="room-status <?php echo $statusClass; ?>">
                <?php echo $row['status']; ?>
            </div>

            <div class="room-actions">
                <button class="confirm-btn"
                    onclick="updateRoomStatus(<?php echo $row['id']; ?>,'Available')">
                    Available
                </button>

                <button class="cancel-btn"
                    onclick="updateRoomStatus(<?php echo $row['id']; ?>,'Maintenance')">
                    Maintenance
                </button>

                <a href="delete_room.php?id=<?php echo $row['id']; ?>"
                   class="cancel-btn"
                   onclick="return confirm('Delete this room?');">
                   Delete
                </a>
            </div>

        </div>

        <?php 
            } 
        } 
        ?>

        </div>

    </div>

</div>

<!-- JS -->
<script>
function updateRoomStatus(id,status){
    fetch("update_room_status.php",{
        method:"POST",
        headers:{"Content-Type":"application/x-www-form-urlencoded"},
        body:"id="+id+"&status="+status
    })
    .then(res=>res.text())
    .then(data=>{
        if(data=="success"){
            location.reload();
        } else {
            alert("Update failed!");
        }
    });
}
</script>

<?php include "layout/footer.php"; ?>