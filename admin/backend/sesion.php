<?php
include('config.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['login'])) {
    $user_mail = $_POST['user_mail'];
    $user_pass = $_POST['user_pass'];
    $query = $this->connect()->prepare('SELECT * FROM users WHERE user_mail= :user_mail AND user_pass = :user_pass');
    $query->execute(['user_mail' => $user_mail, 'user_pass' => $user_pass]);

    if ($query ->rowCount()) {
     return true;
    } else {
     return false;
    }

    



}
?>
