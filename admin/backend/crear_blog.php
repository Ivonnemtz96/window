<?php
// Conectar a la base de datos
include('backend/config.php');

if (isset($_POST["submit"])) {
    $blog_nom = $_POST['blog_nom'];
    $blog_nomEng = $_POST['blog_nomEng'];
    $blog_autor = $_POST['blog_autor'];
    $blog_cat = $_POST['blog_cat'];
    $blog_lugar = $_POST['blog_lugar'];
    $blog_portada = $_POST['blog_portada'];
    $blog_fecha = date('Y-m-d');
    $blog_desc = $_POST['blog_desc'];
    $blog_descEng = $_POST['blog_descEng'];

    // Verificar si se seleccionó una imagen
    if (isset($_FILES['blog_portada']['tmp_name']) && !empty($_FILES['blog_portada']['tmp_name'])) {
        $blog_portada = $_FILES['blog_portada']['tmp_name'];
        $imgContenido = addslashes(file_get_contents($blog_portada));

        // Preparar la consulta SQL con marcadores de posición
        $query = "INSERT INTO blog (blog_nom, blog_nomEng, blog_autor, blog_cat, blog_lugar, blog_fecha, blog_portada, blog_desc, blog_descEng) 
                  VALUES ('$blog_nom','$blog_nomEng','$blog_autor','$blog_cat','$blog_lugar',now(),$imgContenido','$blog_desc','$blog_descEng' )";

        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, 'sss', $blog_nom, $blog_nomEng, $blog_autor, $blog_cat, $blog_lugar,$blog_portada, $blog_fecha, $imgContenido, $blog_desc, $blog_descEng);

        // Ejecutar la consulta
        if (mysqli_stmt_execute($stmt)) {
            echo "Archivo subido correctamente.";
        } else {
            echo "Ha ocurrido un error al subir el archivo, por favor reintente nuevamente.";
        }

        // Cerrar la sentencia preparada
        mysqli_stmt_close($stmt);
    } else {
        echo "Por favor, seleccione una imagen para subir.";
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($conn);
}
?>
