<?php
 session_start();
 if (!isset($_SESSION['user_id'])) {
     header("Location: /admin/login/");
     exit();
 }
    // Incluir archivo de conexión a la base de datos
    require_once($_SERVER["DOCUMENT_ROOT"]."/admin/backend/config.php");
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    
   

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
        echo'
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header py-4">
                    <div class="d-flex align-items-center">
                        <span class="avatar avatar-sm bg-purple">BM</span>
                        <div class="avatar-content">
                            <h5 class="h6 mb-0">Bettie Mavis</h5>
                            <small class="d-block text-muted">New York, US</small>
                        </div>
                    </div>
                </div>
                <div class="card-image" style="background-image:url(/upload/portada/'.date('Y/m', strtotime($row['blog_fecha'])).'/'.$row['blog_portada'].'.jpg); heigth:7rem; height: 18rem;background-size: cover;background-position: center;">

                </div>
                <div class="card-body">
                    <div class="row mb-1">
                        <div class="col">
                            <div class="card-icon-actions card-icon-actions-lg text-right">
                                <a href="javascript:void(0);"><i class="fa fa-bookmark"></i></a>
                            </div>
                        </div>
                    </div>
                    <h6 class="heading h6 mb-3">'.$row['blog_nom'].'</h6>
                    <p class="card-text">'.$row['blog_desc'].'</p>
                </div>
                <div class="card-footer">
                    <div class="row ">
                        <div class="col-10">
                            <a href="/admin/editar_blog?blogId='.$row['blog_id'].'" class="btn btn-primary mt-4 mb-4">Editar</a>  
                            <a href="/admin/galeria?blogId='.$row['blog_id'].'" style="color:#fff;" class="btn btn-primary mt-4 mb-4">Galería</a>  
                            <button class="btn btn-primary mt-4 mb-4">Borrar</button>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ';
    }
    // Cerrar conexión a la base de datos
    mysqli_close($conn);
?>