<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('backend/config.php');

$bandera = false;

$timezone = new DateTimeZone('America/Mexico_City');
$fecha = new DateTime('now', $timezone);
$fechaFormateada = $fecha->format('Y-m-d H:i:s');

setlocale(LC_ALL, 'es_MX');
$mesr = $fecha->format('m');
$year = $fecha->format('Y');


$blogId = $_GET['blogId'];

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
    $blog_fecha = date('Y-m-d H:i:s');
    $blog_lugar = $_POST['blog_lugar'];
    $blog_desc = $_POST['blog_desc'];
    $blog_descEng = $_POST['blog_descEng'];

    if (isset($_FILES['blog_portada']) && $_FILES['blog_portada']['error'] === UPLOAD_ERR_OK) {
        $imageTmpName = $_FILES['blog_portada']['tmp_name'];
        $allowedTypes = ['image/jpeg', 'image/png'];
        $maxFileSize = 2 * 1024 * 1024; // 2MB

        if (!in_array($_FILES['blog_portada']['type'], $allowedTypes)) {
            echo "El tipo de archivo no está permitido.";
            exit;
        }

        if ($_FILES['blog_portada']['size'] > $maxFileSize) {
            echo "El tamaño del archivo excede el límite permitido.";
            exit;
        }

        $codigo = GeraHash(10);
        $ruta = '../upload/portada/'.$year.'/'.$mesr;

        if (!file_exists($ruta)) {
            mkdir($ruta, 0777, true);
        }

        $archivo_subido = $ruta.'/'.$codigo.'.jpg';

            // Mover la imagen al directorio de subida
            if (move_uploaded_file($imageTmpName, $archivo_subido)) {
                // Actualizar los datos de la entrada en la base de datos
                $sql = "UPDATE blog SET
                    blog_nom = '$blog_nom',
                    blog_nomEng = '$blog_nomEng',
                    blog_autor = '$blog_autor',
                    blog_cat = '$blog_cat',
                    blog_fecha = '$blog_fecha',
                    blog_lugar = '$blog_lugar',
                    blog_desc = '$blog_desc',
                    blog_descEng = '$blog_descEng',
                    blog_portada = '$codigo'
                    WHERE blog_id = '$blogId'";

                if ($conn->query($sql) === true) {
                    echo "La entrada se ha actualizado correctamente.";
                    echo '<script>setTimeout(function() { window.location.href = "/admin/entradas"; });</script>';
                } else {
                    echo "Ha ocurrido un error al actualizar la entrada.";
                }
            } else {
                echo "Error al subir la imagen.";
            }
        } else {
            // Si no se ha enviado una nueva imagen de portada, actualizar solo los datos de texto
            $sql = "UPDATE blog SET
                    blog_nom = '$blog_nom',
                    blog_nomEng = '$blog_nomEng',
                    blog_autor = '$blog_autor',
                    blog_cat = '$blog_cat',
                    blog_lugar = '$blog_lugar',
                    blog_desc = '$blog_desc',
                    blog_descEng = '$blog_descEng'
                    WHERE blog_id = '$blogId'";

            if ($conn->query($sql) === true) {
                echo "La entrada se ha actualizado correctamente.";
                echo '<script>setTimeout(function() { window.location.href = "/admin/entradas"; });</script>';
            } else {
                echo "Ha ocurrido un error al actualizar la entrada.";
            }
        }
}

$conn->close();
?>