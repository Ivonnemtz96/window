<?php
session_start();
session_destroy(); // Destruir todas las variables de sesión

header("Location: /admin/login/"); // Redirigir a la página de inicio de sesión
exit();
?>