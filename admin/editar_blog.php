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
    <?
include('backend/editar_entrada.php');
?>


</body>



</html>

