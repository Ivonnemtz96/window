<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Obtiene el ID de la entrada del blog a través de la URL
$id = $_GET['id'];

// Consulta para obtener los datos de la vista blog_galeria
$query = "SELECT * FROM blog_galeria WHERE blog_id = $id";
$resultado = mysqli_query($conn, $query);


// Recorrer los resultados y mostrar las imágenes
while ($row = mysqli_fetch_assoc($resultado)) {
    // Mostrar la imagen
    echo '
        <img  src="/upload/galeria/'.date('Y/m', strtotime($row['galeria_fecha'])).'/'.$row['galeria_cod'].'.jpg" alt="">
    ';
}
// Cerrar la conexión a la base de datos
mysqli_close($conn);
?>
