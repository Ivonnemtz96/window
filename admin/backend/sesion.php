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
    

   include('backend/config.php');


    // Consultar en la base de datos si el usuario existe
    $sql = "SELECT user_id, user_nom, user_pass FROM users WHERE user_mail = '$user_mail'";
    $result = $conn->query($sql);
    
    
    // Obtener el hash almacenado en la base de datos
   

    if ($result->num_rows == 1) {
        // Inicio de sesión exitoso, guardar información en la sesión
        $row = $result->fetch_assoc();
        $stored_hash = $row['user_pass'];
        // var_dump($stored_hash); exit;
        

        
        if (password_verify($user_pass, $stored_hash)) {
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['user_nom'] = $row['user_nom'];
            // $response = array("response" => "Ok");
            // echo(json_encode($response));
            // echo "OK";
            header("Location: /admin/perfil/"); // Redirigir a la página de inicio
        }
        else {
            // La contraseña es incorrecta
            // Muestra un mensaje de error o realiza alguna acción adecuada
            echo "Usuario o contraseña incorrectos";
        }
        
       
    } else {
        // Credenciales inválidas
         echo "Usuario no registrado";
        // $response = array("response" => "Error");
        // echo(json_encode($response));
    }

    $conn->close();
}
