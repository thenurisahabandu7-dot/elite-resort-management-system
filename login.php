<?php
session_start();
include "config.php";

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (!empty($username) && !empty($password)) {

        // SECURE LOGIN (PREPARED STATEMENT)
        $stmt = $conn->prepare("SELECT * FROM admins WHERE username=? AND password=?");
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result && $result->num_rows > 0) {
            $_SESSION['admin'] = $username;
            header("Location: dashboard.php");
            exit();
        } else {
            $error = "Invalid Username or Password!";
        }

    } else {
        $error = "Please fill all fields!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Elite Resort Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Poppins', sans-serif;
            background: url('https://images.unsplash.com/photo-1542314831-068cd1dbfeeb') no-repeat center/cover;
        }

        /* DARK OVERLAY */
        body::before {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.6);
        }

        /* LOGIN CARD */
        .glass-card {
            position: relative;
            z-index: 2;
            width: 420px;
            padding: 50px 40px;
            border-radius: 20px;
            background: rgba(255,255,255,0.08);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(212,175,55,0.4);
            box-shadow: 0 0 30px rgba(212,175,55,0.2);
            text-align: center;
            color: white;
        }

        .glass-card h2 {
            font-family: 'Playfair Display', serif;
            margin-bottom: 30px;
            color: #f4d03f;
        }

        /* INPUT */
        .glass-card input {
            width: 100%;
            padding: 14px;
            margin-bottom: 15px;
            border-radius: 25px;
            border: none;
            background: rgba(255,255,255,0.15);
            color: white;
            outline: none;
            font-size: 15px;
        }

        .glass-card input::placeholder {
            color: #ddd;
        }

        /* PASSWORD FIELD */
        .password-box {
            position: relative;
        }

        .toggle {
            position: absolute;
            right: 15px;
            top: 12px;
            cursor: pointer;
            font-size: 14px;
            color: #ddd;
        }

        /* BUTTON */
        .glass-card button {
            width: 100%;
            padding: 14px;
            border: none;
            border-radius: 25px;
            background: linear-gradient(45deg, #6b3fa0, #d4af37);
            color: white;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        .glass-card button:hover {
            transform: scale(1.05);
            opacity: 0.9;
        }

        /* ERROR */
        .error {
            color: #ff6b6b;
            margin-bottom: 15px;
        }

    </style>
</head>

<body>

<form class="glass-card" method="POST">

    <h2>Elite Resort Admin 🔐</h2>

    <?php if($error != "") echo "<div class='error'>$error</div>"; ?>

    <input type="text" name="username" placeholder="Username" required>

    <div class="password-box">
        <input type="password" name="password" id="password" placeholder="Password" required>
        <span class="toggle" onclick="togglePassword()">👁</span>
    </div>

    <button type="submit">Login</button>

</form>

<script>
function togglePassword() {
    const pass = document.getElementById("password");
    pass.type = pass.type === "password" ? "text" : "password";
}
</script>

</body>
</html>