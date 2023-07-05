<?
include('backend/config.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

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

function GeraHash($qtd)
{
    $Caracteres = '123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $QuantidadeCaracteres = strlen($Caracteres);
    $QuantidadeCaracteres--;

    $Hash = NULL;
    for ($x = 1; $x <= $qtd; $x++) {
        $Posicao = rand(0, $QuantidadeCaracteres);
        $Hash .= substr($Caracteres, $Posicao, 1);
    }

    return $Hash;
}

$blogId = $_GET['blogId'];
if (isset($_GET['blogId']) and $_GET['blogId']!=""){
    $query = "SELECT * FROM blog WHERE blog_id = '$blogId' ";
    $entrada = mysqli_query($conn, $query);
    $row = $entrada->fetch_assoc();
    $idEntrada = $row['blog_id'];
    // var_dump($idEntrada); exit;
}


if (isset($_POST["submit"])) {

    $galeria_fecha = date('Y-m-d H:i:s');

    if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
        
        $imageTmpName = $_FILES['foto']['tmp_name'];

        // Validar tipo de archivo permitido
        $allowedTypes = ['image/jpeg', 'image/png'];
        if (!in_array($_FILES['foto']['type'], $allowedTypes)) {
            echo "El tipo de archivo no está permitido.";
            exit;
        }
    
        // Validar tamaño máximo del archivo (por ejemplo, 2MB)
        $maxFileSize = 2 * 1024 * 1024; // 2MB
        if ($_FILES['foto']['size'] > $maxFileSize) {
            echo "El tamaño del archivo excede el límite permitido.";
            exit;
        }
        $codigo = GeraHash(10); // LO USAMOS PARA EL NOMBRE DE LA FOTO
        $ruta = '../upload/galeria/'.$year.'/'.$mesr.'';
        
       //SI LA CARPETA NO EXISTE LA CREAMOS
       if(!file_exists($ruta)) {
        mkdir($ruta, 0777, true);
    }
    
    $archivo_subido = ''.$ruta.'/'.$codigo .'.jpg';
        // move_uploaded_file($imageTmpName, $archivo_subido);

        if (move_uploaded_file($imageTmpName, $archivo_subido)) {
            // La imagen se ha movido correctamente, puedes guardar la ruta en la base de datos
            // Preparar la consulta SQL con marcadores de posición

            $sql = "INSERT INTO galeria (galeria_cod, id_blog, galeria_fecha)  VALUES ('$codigo','$idEntrada', '$galeria_fecha')";
            // mysqli_query($conn, $sql);
            // $idImagen = mysqli_insert_id($conn);


            // $sql = "INSERT INTO entrada_imagen (id_entrada, id_imagen) VALUES ('$idEntrada', '$idImagen')";
            // mysqli_query($conn, $sql);


            // Ejecutar la consulta
            if ($conn->query($sql) === true) {
                echo "Archivo subido correctamente.";
            } else {
                echo "Ha ocurrido un error al subir el archivo, por favor reintente nuevamente.";
            }
        } else{
            // Hubo un error al mover la imagen
            echo "Por favor, seleccione una imagen para subir.";
        }
}
}


?>