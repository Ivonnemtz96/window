<?php
    // Incluir archivo de conexión a la base de datos
    require_once($_SERVER["DOCUMENT_ROOT"]."/admin/backend/config.php");

    // Obtener los artículos del blog desde la base de datos
    $query = "SELECT * FROM blog ORDER BY blog_fecha DESC";
    $resultado = mysqli_query($conn, $query);
    
    // Mostrar los artículos en la página
    while ($row = mysqli_fetch_assoc($resultado)) {
        echo' <div class="col-xl-4 col-lg-6 col-md-6">
            <div class="single-blog-style1 style1instyle2 wow fadeInLeft" data-wow-delay="100ms"
                data-wow-duration="1500ms">
                <div class="img-holder">
                    <div class="inner">
                        <img src="/assets/images/blog/blog-v1-1.jpg" alt="Awesome Image">
                        <div class="overlay-icon">
                            <a href="/project-detail.php?id='.$row['blog_id'].'"><span class="flaticon-plus"></span></a>
                        </div>
                        <div class="date-box">
                            <h5>'.$row['blog_fecha'].'</h5>
                        </div>
                    </div>
                </div>
                <div class="text-holder">
                    <ul class="meta-info">
                        <li><span class="flaticon-user-1"></span><a href="/project-detail.php?id='.$row['blog_id'].'">'.$row['blog_autor'].'</a></li>
                        <li><span class="flaticon-user-1"></span><a href="/project-detail.php?id='.$row['blog_id'].'">'.$row['blog_cat'].'</a></li>
                    </ul>
                    <h3 class="blog-title">
                        <a href="/project-detail.php?id='.$row['blog_id'].'">'.$row['blog_nom'].'</a>
                    </h3>
                </div>
            </div>
        </div>';
    }
    // Cerrar conexión a la base de datos
    mysqli_close($conn);
?>
