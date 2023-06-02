<?php
    // Incluir archivo de conexión a la base de datos
    require_once($_SERVER["DOCUMENT_ROOT"]."/admin/backend/config.php");

    $timezone = new DateTimeZone('America/Mexico_City');
    $fecha = new DateTime('now', $timezone);
    $fechaFormateada = $fecha->format('Y-m-d H:i:s');

    setlocale(LC_ALL, 'es_MX');
    $mesr = $fecha->format('m');
    $year = $fecha->format('Y');

    // Obtener los artículos del blog desde la base de datos
    $query = "SELECT * FROM blog ORDER BY blog_fecha DESC";
    $resultado = mysqli_query($conn, $query);
    
    // Mostrar los artículos en la página
    while ($row = mysqli_fetch_assoc($resultado)) {
        echo' <div class="col-xl-4 col-lg-6 col-md-6">
            <div class="single-blog-style1 style1instyle2 wow fadeInLeft" data-wow-delay="100ms"
                data-wow-duration="1500ms">
                <div class="img-holder">
                    <div class="inner" >
                        <div class="container">
                            <img src="/upload/portada/'.date('Y/m', strtotime($row['blog_fecha'])).'/'.$row['blog_portada'].'.jpg" alt="Awesome Image">
                        </div>
                        <div class="overlay-icon">
                            <a href="/project-detail2.php?id='.$row['blog_id'].'"><span class="flaticon-plus"></span></a>
                        </div>
                        <div class="date-box">
                            <h5>'.$row['blog_fecha'].'</h5>
                        </div>
                    </div>
                </div>
                <div class="text-holder">
                    <ul class="meta-info">
                        <li><span class="flaticon-user-1"></span><a href="/project-detail2.php?id='.$row['blog_id'].'">'.$row['blog_autor'].'</a></li>
                        <li><span class="flaticon-user-1"></span><a href="/project-detail2.php?id='.$row['blog_id'].'">'.$row['blog_cat'].'</a></li>
                    </ul>
                    <h3 class="blog-title">
                        <a href="/project-detail2.php?id='.$row['blog_id'].'">'.$row['blog_nom'].'</a>
                    </h3>
                </div>
            </div>
        </div>';
    }
    // Cerrar conexión a la base de datos
    mysqli_close($conn);
?>
