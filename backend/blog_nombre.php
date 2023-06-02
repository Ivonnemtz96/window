<?
 // Incluir archivo de conexión a la base de datos
 require_once($_SERVER["DOCUMENT_ROOT"]."/admin/backend/config.php");

 //La zona horaria
    $timezone = new DateTimeZone('America/Mexico_City');
    $fecha = new DateTime('now', $timezone);
    $fechaFormateada = $fecha->format('Y-m-d H:i:s');

    setlocale(LC_ALL, 'es_MX');
    $mesr = $fecha->format('m');
    $year = $fecha->format('Y');

    // Obtiene el ID de la entrada del blog a través de la URL
    $id = $_GET['id'];

    // Prepara la consulta SQL para obtener la entrada del blog con el ID proporcionado
    $sql = "SELECT * FROM blog WHERE blog_id = $id";

    // Ejecuta la consulta
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    
     // Imprime solo el nombre del proyecto
           echo'
                <div class="title wow slideInUp animated" data-wow-delay="0.3s" data-wow-duration="1500ms">
                    <h2>'.$row['blog_nom'].'</h2>
                </div>
           ';

?>