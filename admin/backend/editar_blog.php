<?
// Incluir archivo de conexión a la base de datos
require_once($_SERVER["DOCUMENT_ROOT"]."/admin/backend/config.php");

 session_start();
 if (!isset($_SESSION['user_id'])) {
     header("Location: /admin/login/");
     exit();
 }

 $timezone = new DateTimeZone('America/Mexico_City');
 $fecha = new DateTime('now', $timezone);
 $fechaFormateada = $fecha->format('Y-m-d H:i:s');

 setlocale(LC_ALL, 'es_MX');
 $mesr = $fecha->format('m');
 $year = $fecha->format('Y');


 $blogId= $_GET['blogID'];

    

    // Obtener los artículos del blog desde la base de datos
    $query = "SELECT * FROM blog ORDER BY blog_fecha DESC";
    $resultado = mysqli_query($conn, $query);

?>