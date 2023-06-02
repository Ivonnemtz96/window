<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: /admin/login/");
    exit();
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('backend/config.php');

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

if (isset($_POST["submit"])) {
    $blog_nom = $_POST['blog_nom'];
    $blog_nomEng = $_POST['blog_nomEng'];
    $blog_autor = $_POST['blog_autor'];
    $blog_cat = $_POST['blog_cat'];
    $blog_lugar = $_POST['blog_lugar'];
    $blog_fecha = date('Y-m-d H:i:s');
    $blog_desc = $_POST['blog_desc'];
    $blog_descEng = $_POST['blog_descEng'];

    
    if (isset($_FILES['blog_portada']) && $_FILES['blog_portada']['error'] === UPLOAD_ERR_OK) {
        
        $imageTmpName = $_FILES['blog_portada']['tmp_name'];
        
        // Validar tipo de archivo permitido
        $allowedTypes = ['image/jpeg', 'image/png'];
        if (!in_array($_FILES['blog_portada']['type'], $allowedTypes)) {
            echo "El tipo de archivo no está permitido.";
            exit;
        }
    
        // Validar tamaño máximo del archivo (por ejemplo, 2MB)
        $maxFileSize = 2 * 1024 * 1024; // 2MB
        if ($_FILES['blog_portada']['size'] > $maxFileSize) {
            echo "El tamaño del archivo excede el límite permitido.";
            exit;
        }
        $codigo = GeraHash(10); // LO USAMOS PARA EL NOMBRE DE LA FOTO
        $ruta = '../upload/portada/'.$year.'/'.$mesr.'';

       //SI LA CARPETA NO EXISTE LA CREAMOS
       if(!file_exists($ruta)) {
        mkdir($ruta, 0777, true);
    }

        $archivo_subido = ''.$ruta.'/'.$codigo .'.jpg';
        // move_uploaded_file($imageTmpName, $archivo_subido);

        if (move_uploaded_file($imageTmpName, $archivo_subido)) {
            // La imagen se ha movido correctamente, puedes guardar la ruta en la base de datos
            // Preparar la consulta SQL con marcadores de posición

            $sql = "INSERT INTO blog (blog_nom, blog_nomEng, blog_autor, blog_cat, blog_lugar, blog_fecha, blog_portada, blog_desc, blog_descEng) 
                      VALUES ('$blog_nom', '$blog_nomEng', '$blog_autor', '$blog_cat', '$blog_lugar', '$blog_fecha', '$codigo', '$blog_desc', '$blog_descEng')";

            
            // Ejecutar la consulta
            if ($conn->query($sql) === true) {
                echo "Archivo subido correctamente.";
            } else {
                echo "Ha ocurrido un error al subir el archivo, por favor reintente nuevamente.";
            }
        } else {
            // Hubo un error al mover la imagen
            echo "Por favor, seleccione una imagen para subir.";
        }
    }
    
}

// Cerrar la conexión a la base de datos
$conn->close();
?>