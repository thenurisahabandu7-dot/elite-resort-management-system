<?php
session_start();
include "config.php";

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

/* HANDLE FORM */
if(isset($_POST['site_name'])){

    $name = $_POST['site_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($password != ""){
        $password = password_hash($password, PASSWORD_DEFAULT);
        $conn->query("UPDATE admin SET name='$name', email='$email', password='$password' WHERE id=1");
    } else {
        $conn->query("UPDATE admin SET name='$name', email='$email' WHERE id=1");
    }

    echo "<script>alert('Settings updated successfully!');</script>";
}

include "layout/header.php";
include "layout/sidebar.php";
?>

<div class="main">

    <!-- TITLE -->
    <div class="booking-title">
        <h1>SYSTEM SETTINGS</h1>
        <p>Manage your website and admin details</p>
    </div>

    <!-- CARD -->
    <div class="card settings-card">

        <form method="POST">

            <div class="form-group">
                <label>Site Name</label>
                <input type="text" name="site_name" value="Elite Resort" class="form-input">
            </div>

            <div class="form-group">
                <label>Admin Email</label>
                <input type="email" name="email" value="admin@gmail.com" class="form-input">
            </div>

            <div class="form-group">
                <label>New Password</label>
                <input type="password" name="password" placeholder="Enter new password" class="form-input">
            </div>

            <button type="submit" class="save-btn">
                💾 Save Changes
            </button>

        </form>

    </div>

</div>

<?php include "layout/footer.php"; ?>