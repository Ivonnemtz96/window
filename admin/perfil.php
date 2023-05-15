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
$title = 'Blog';
$inicio = 'active';
include('includes/head.php');
?>

<body class="theme-indigo">

    <?php
        include_once('includes/header.php');
    ?>
    <div class="main_content" id="main-content">
        <?
            include('includes/lateral_bar.php');
            include('modules/perfil.php');
        ?>
    </div>
    <?
        include_once('includes/scripts.php');
    ?>


</body>

</html>