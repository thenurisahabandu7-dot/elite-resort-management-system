<?php
include "config.php";

if(isset($_POST['name'], $_POST['email'], $_POST['message'])){

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    if(!empty($name) && !empty($email) && !empty($message)){

        $stmt = $conn->prepare("INSERT INTO contact_messages (name, email, message) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $message);

        if($stmt->execute()){
            echo "success";
        } else {
            echo "error";
        }

        $stmt->close();
    } else {
        echo "empty";
    }
}
?>