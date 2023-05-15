<?php
include('config.php');
session_start();
if (isset($_POST['register'])) {
    $username = $_POST['user_name'];
    $email = $_POST['user_mail'];
    $password = $_POST['user_pass'];
    $password_hash = password_hash($password, PASSWORD_BCRYPT);
    $query = $connection->prepare("SELECT * FROM users WHERE EMAIL=:user_mail");
    $query->bindParam("user_mail", $email, PDO::PARAM_STR);
    $query->execute();
    if ($query->rowCount() > 0) {
        echo '<p class="error">The email address is already registered!</p>';
    }
    if ($query->rowCount() == 0) {
        $query = $connection->prepare("INSERT INTO users(user_name,user_pass,user_mail) VALUES (:user_name,:password_hash,:user_mail)");
        $query->bindParam("user_name", $username, PDO::PARAM_STR);
        $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
        $query->bindParam("user_mail", $email, PDO::PARAM_STR);
        $result = $query->execute();
        if ($result) {
            echo '<p class="success">Your registration was successful!</p>';
        } else {
            echo '<p class="error">Something went wrong!</p>';
        }
    }
}
?>