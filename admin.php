<?
session_start();
if (!isset($_SESSION['user_id'])) {
     header("Location: /admin/login/");
     exit();
 }else{
    header("Location: /admin/perfil/");
 }
?>