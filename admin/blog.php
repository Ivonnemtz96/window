<?
session_start();
if (!isset($_SESSION['user_id'])) {
     header("Location: /admin/login/");
     exit();
 }
?>

<!DOCTYPE html>
<html lang="en">
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$title = 'Login';
$inicio = 'active';

include_once('includes/head.php');
?>

<body class="theme-indigo">

    <?php
        include_once('includes/header.php');
    ?>
    <div class="main_content" id="main-content">
        <?
            include('includes/lateral_bar.php');
            include('nuevo/blog.php');
        ?>
    </div>
    <?
        include_once('includes/scripts.php');
    ?>


</body>



</html>