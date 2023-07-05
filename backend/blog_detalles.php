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

    // Verifica si se obtuvo un resultado
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
           echo'
           <div class="col-xl-12">
                <div class="project-details-content">
                    <div class="project-detail-main-image">
                        <div class="row justify-content-center">
                            <div class="col-md-8 text-center" style="background-image:url(/upload/portada/'.date('Y/m', strtotime($row['blog_fecha'])).'/'.$row['blog_portada'].'.jpg); height: 500px; background-position: center;background-size: cover;">
                                
                            </div>
                        </div>
                        <div class="project-info">
                            <ul>
                                <li>
                                    <ul>
                                        <li><span>Fecha:</span> '.date('Y/m', strtotime($row['blog_fecha'])).'</li>
                                </li>
                            </ul>
                            </li>
                            <li>
                                <ul>
                                    <li><span>Dirección:</span> '.$row['blog_lugar'].'</li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li><span>Categoría:</span> '.$row['blog_cat'].'</li>
                                </ul>
                            </li>
                            </ul>
                        </div>
                    </div>

                    <div class="project-detail-text-1">
                        <h2>'.$row['blog_nom'].'</h2>
                        <p>'.$row['blog_desc'].'</p>
                    </div>
                </div>
            </div>
           ';
        }

    }
    else {
        echo "No se encontró la entrada del blog.";

    }
   
    // Cierra la conexión a la base de datos
    $result->close();


?>