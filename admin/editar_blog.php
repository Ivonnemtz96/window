<?
include ('backend/galeria.php');

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
<?php


$title = 'Login';
$inicio = 'active';

include('includes/head.php');
?>

<body class="theme-indigo">

    <?php
        include('includes/header.php');
    ?>
    <div class="main_content" id="main-content">
        <?
            include('includes/lateral_bar.php');
            include('editar/blog.php');
        ?>
    </div>
    <?
        include('includes/scripts.php');
    ?>


</body>



</html>