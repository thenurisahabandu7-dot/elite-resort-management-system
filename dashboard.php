<?php
session_start();
include "config.php";

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

include "layout/header.php";
include "layout/sidebar.php";

// COUNTS
$total = $conn->query("SELECT COUNT(*) as t FROM bookings")->fetch_assoc()['t'];
$pending = $conn->query("SELECT COUNT(*) as t FROM bookings WHERE Status='Pending'")->fetch_assoc()['t'];
$confirmed = $conn->query("SELECT COUNT(*) as t FROM bookings WHERE Status='Confirmed'")->fetch_assoc()['t'];
$cancelled = $conn->query("SELECT COUNT(*) as t FROM bookings WHERE Status='Cancelled'")->fetch_assoc()['t'];
?>

<div class="main">

<div class="booking-title">
    <h1>DASHBOARD OVERVIEW</h1>
    <p>Manage your bookings, rooms and system easily.</p>
</div>

<!-- CARDS -->
<div class="cards">
    <div class="card"><h3>Total Bookings</h3><span><?php echo $total; ?></span></div>
    <div class="card"><h3>Pending</h3><span style="color:orange;"><?php echo $pending; ?></span></div>
    <div class="card"><h3>Confirmed</h3><span style="color:green;"><?php echo $confirmed; ?></span></div>
    <div class="card"><h3>Cancelled</h3><span style="color:red;"><?php echo $cancelled; ?></span></div>
</div>

<h2 class="section-title">Recent Bookings</h2>

<table class="booking-table">
<tr>
<th>ID</th><th>Name</th><th>Email</th><th>Room</th>
<th>Check In</th><th>Check Out</th><th>Status</th><th>Action</th>
</tr>

<?php
$result = $conn->query("SELECT * FROM bookings ORDER BY id DESC LIMIT 5");

while($row = $result->fetch_assoc()){
$status = $row['Status'];
?>

<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['room_type']; ?></td>
<td><?php echo $row['check_in']; ?></td>
<td><?php echo $row['check_out']; ?></td>

<td>
<span class="badge 
<?php 
if($status=="Pending") echo "pending";
elseif($status=="Confirmed") echo "confirmed";
else echo "cancelled";
?>">
<?php echo $status; ?>
</span>
</td>

<td>
<button class="confirm-btn" onclick="updateStatus(<?php echo $row['id']; ?>,'Confirmed')">Confirm</button>
<button class="cancel-btn" onclick="updateStatus(<?php echo $row['id']; ?>,'Cancelled')">Cancel</button>
</td>

</tr>

<?php } ?>
</table>

<!-- CHARTS -->
<div class="chart-section">

<div class="card">
<h3>Booking Status Overview</h3>
<canvas id="statusChart"></canvas>
</div>

<div class="card">
<h3>Monthly Bookings</h3>
<canvas id="monthlyChart"></canvas>
</div>

</div>

</div>

<!-- JS -->
<script>

function updateStatus(id, status){
    fetch("update_status.php", {
        method: "POST",
        headers: {"Content-Type": "application/x-www-form-urlencoded"},
        body: "id="+id+"&status="+status
    })
    .then(res => res.text())
    .then(data => {
        console.log(data);
        if(data.trim()=="success"){
            location.reload();
        } else {
            alert("Update failed: " + data);
        }
    });
}

// CHARTS
const statusChart = new Chart(document.getElementById("statusChart"), {
    type: 'pie',
    data: {
        labels: ['Pending','Confirmed','Cancelled'],
        datasets: [{
            data: [<?php echo $pending; ?>,<?php echo $confirmed; ?>,<?php echo $cancelled; ?>],
            backgroundColor: ['orange','gold','red']
        }]
    }
});

const monthlyChart = new Chart(document.getElementById("monthlyChart"), {
    type: 'line',
    data: {
        labels: ['Jan','Feb','Mar','Apr','May','Jun'],
        datasets: [{
            label: 'Bookings',
            data: [5,10,15,8,12,20],
            fill: true
        }]
    }
});

</script>

<?php include "layout/footer.php"; ?>