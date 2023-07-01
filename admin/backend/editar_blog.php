<?
 session_start();
 if (!isset($_SESSION['user_id'])) {
     header("Location: /admin/login/");
     exit();
 }


 $blogId= $_GET['blogID']


?>