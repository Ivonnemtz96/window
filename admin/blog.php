<?
include ('backend/crear_blog.php');
?>

<!DOCTYPE html>
<html lang="en">
<?php


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