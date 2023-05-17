<?php
include('backend/config.php');
include('backend/msj.php');

if (isset($_POST['register'])) {
    $user_nom = $_POST['user_nom'];
    $user_mail = $_POST['user_mail'];
    $user_pass = $_POST['user_pass'];

    // Validar los datos ingresados por el usuario
    if (empty($user_nom) || empty($user_mail) || empty($user_pass)) {
        echo '<p class="error">Por favor, completa todos los campos.</p>';
    } else {
        // Verificar si el correo electrónico ya está registrado
        $sql = "SELECT * FROM users WHERE user_mail = '$user_mail'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            function_alert("ya existe el correo");
        } else {
            // Generar un hash seguro de la contraseña
            $password_hash = password_hash($user_pass, PASSWORD_DEFAULT);

            // Insertar el nuevo usuario en la base de datos
            $sql = "INSERT INTO users (user_nom, user_mail, user_pass) VALUES ('$user_nom', '$user_mail', '$password_hash')";

            if ($conn->query($sql) === true) {
                echo '<script>
                Swal.fire({
                    title: "¡Éxito!",
                    text: "El registro se ha completado exitosamente.",
                    icon: "success",
                    confirmButtonText: "Aceptar"
                });
                window.location= "/admin/register/"
              </script>';
            } else {
                echo '<script>
            Swal.fire({
            title: "¡uppps!",
            text: "El registro no se ha completado.",
            icon: "error",
            confirmButtonText: "Aceptar"
                });
                window.location= "/admin/register/"
            </script>';
            }
        }
    }
}

$conn->close();
?>