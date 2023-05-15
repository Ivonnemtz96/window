<?
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if (isset($_SESSION['user_id'])) {
    header("Location: /admin/perfil/");
    exit();
 }
include('backend/registerConf.php');
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
    include('modules/register.php');
    include('includes/footer.php');
    include('includes/scripts.php');
        ?>
</body>

</html>