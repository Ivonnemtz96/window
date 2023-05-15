<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Verificar si se ha enviado el formulario de inicio de sesión
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos de inicio de sesión enviados
    $user_mail = $_POST['user_mail'];
    $user_pass = $_POST['user_pass'];

    // Realizar la conexión a la base de datos
    $servername = "localhost";
    $username = "arketll6_windowBlog";
    $password = "XM9jPrEo24";
    $dbname = "arketll6_windowBlog";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Consultar en la base de datos si el usuario existe
    $sql = "SELECT user_id, user_nom FROM users WHERE user_mail = '$user_mail' AND user_pass = '$user_pass'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Inicio de sesión exitoso, guardar información en la sesión
        $row = $result->fetch_assoc();
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['user_nom'] = $row['user_nom'];
        header("Location: /admin/perfil/"); // Redirigir a la página de inicio
    } else {
        // Credenciales inválidas
        $error = "Usuario o contraseña incorrectos";
    }

    $conn->close();
}
