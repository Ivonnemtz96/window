<?

$timezone = new DateTimeZone('America/Mexico_City');
$fecha = new DateTime('now', $timezone);
$fechaFormateada = $fecha->format('Y-m-d H:i:s');

setlocale(LC_ALL, 'es_MX');
$mesr = $fecha->format('m');
$year = $fecha->format('Y');

if (isset($_REQUEST['submit']) && $_REQUEST['submit'] != "") {
    $blog_nom = $_REQUEST['blog_nom'] ?? '';
    $blog_nomEng = $_REQUEST['blog_nomEng'] ?? '';
    $blog_autor = $_REQUEST['blog_autor'] ?? '';
    $blog_cat = $_REQUEST['blog_cat'] ?? '';
    $blog_lugar = $_REQUEST['blog_lugar'] ?? '';
    $blog_portada = $_REQUEST['blog_portada'] ?? '';
    $blog_desc = $_REQUEST['blog_desc'] ?? '';
    $blog_descEng = $_REQUEST['blog_descEng'] ?? '';

    if (empty($blog_nom) || empty($blog_nomEng) || empty($blog_autor) || empty($blog_cat) || empty($blog_lugar) || empty($blog_portada) || empty($blog_desc) || empty($blog_descEng)) {
        setcookie("msg", "basic", time() + 2, "/");
        header('location: ');
        exit;
    } elseif (!isset($_FILES['thumb']['tmp_name']) || $_FILES['thumb']['tmp_name'] === "") {
        setcookie("msg", "foto", time() + 2, "/");
        header('location: ');
        exit;
    } else {
        $thumb = $_FILES['thumb']['tmp_name'];
        if (!is_uploaded_file($thumb)) {
            setcookie("msg", "foto", time() + 2, "/");
            header('location: ');
            exit;
        }

        $validImageTypes = array(IMAGETYPE_JPEG, IMAGETYPE_PNG, IMAGETYPE_GIF);
        $fileInfo = getimagesize($thumb);
        $imageType = $fileInfo[2];

        if (!in_array($imageType, $validImageTypes)) {
            setcookie("msg", "fnv", time() + 2, "/");
            header('location: ');
            exit;
        }

        $maxFileSize = 1000000; // 1 MB
        if ($_FILES['thumb']['size'] > $maxFileSize) {
            setcookie("msg", "fnvz", time() + 2, "/");
            header('location: ');
            exit;
        }

        $codigo = GeraHash(10);
        $ruta = '../../upload/portada/'.$year.'/'.$mesr.'';

        if (!file_exists($ruta)) {
            mkdir($ruta, 0777, true);
        }

        $archivo_subido = $ruta.'/'.$codigo.'.jpg';
        if (move_uploaded_file($thumb, $archivo_subido)) {
            // Procesar los datos y realizar las acciones necesarias
            // ...

            // Redireccionar a una página de éxito u otra acción deseada
            header('Location: success.php');
            exit;
        } else {
            setcookie("msg", "error_upload", time() + 2, "/");
            header('location: ');
            exit;
        }
    }
}


?>