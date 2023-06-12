<?php
 // Incluir archivo de conexión a la base de datos
 require_once($_SERVER["DOCUMENT_ROOT"]."/admin/backend/config.php");
 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//La zona horaria
$timezone = new DateTimeZone('America/Mexico_City');
$fecha = new DateTime('now', $timezone);
$fechaFormateada = $fecha->format('Y-m-d H:i:s');

setlocale(LC_ALL, 'es_MX');
$mesr = $fecha->format('m');
$year = $fecha->format('Y');


// Obtiene el ID de la entrada del blog a través de la URL
$id = $_GET['id'];
// Consulta para obtener los datos de la vista blog_galeria
$sql = "SELECT * FROM blog_galeria WHERE blog_id = $id";
$result = $conn->query($sql);


// Recorrer los resultados y mostrar las imágenes
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Mostrar la imagen
        echo '
            <img class="img-fluid" src="/upload/galeria/'.date('Y/m', strtotime($row['galeria_fecha'])).'/'.$row['galeria_cod'].'.jpg" alt="">
        ';
    }
}
else {
    echo "No se encontró la entrada del blog.";
}

// Cerrar la conexión a la base de datos
$result->close();
?>
