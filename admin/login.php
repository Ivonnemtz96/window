<?
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include('backend/sesion.php');
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
    include('modules/login.php');
    include('includes/footer.php');
    include('includes/scripts.php');
        ?>
</body>

</html>