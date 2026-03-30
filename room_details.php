<?php
include "config.php";

if (!isset($_GET['id'])) {
    echo "Room not found!";
    exit();
}

$id = $_GET['id'];

// GET ROOM DATA
$stmt = $conn->prepare("SELECT * FROM rooms WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 0) {
    echo "Room not found!";
    exit();
}

$room = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $room['room_name']; ?></title>
    <style>
        body {
            font-family: Arial;
            padding: 40px;
            background: #f5f3f0;
        }

        .room-box {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 15px;
        }

        img {
            width: 100%;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        h1 {
            color: #6b4ca4;
        }

        .price {
            font-size: 20px;
            font-weight: bold;
            margin: 10px 0;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background: #6b4ca4;
            color: white;
            border-radius: 20px;
            text-decoration: none;
        }
    </style>
</head>

<body>

<div class="room-box">

    <img src="https://images.unsplash.com/photo-1618773928121-c32242e63f39?auto=format&fit=crop&w=1600&q=80">

    <h1><?php echo $room['room_name']; ?></h1>

    <p><strong>Type:</strong> <?php echo $room['room_type']; ?></p>

    <p><strong>Capacity:</strong> <?php echo $room['capacity']; ?> persons</p>

    <div class="price">$<?php echo number_format($room['price'],2); ?> / Night</div>

    <p><strong>Status:</strong> <?php echo $room['status']; ?></p>

    <br>

    <a href="index.php" class="btn">← Back</a>

</div>

</body>
</html>