<?php

    // Obtener los artículos del blog desde la base de datos
    $blogId = $_GET['blogId'];
    $query = "SELECT * FROM galeria WHERE id_blog = '$blogId'";
    $resultado = mysqli_query($conn, $query);
    
    // Mostrar los artículos en la página
    while ($row = mysqli_fetch_assoc($resultado)) {
        echo'
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <div class="body">
                        <img class="img-fluid" src="/upload/galeria/'.date('Y/m', strtotime($row['galeria_fecha'])).'/'.$row['galeria_cod'].'.jpg"
                            alt="About the image">
                    </div>
                </div>
            </div>
        ';
    }
    // Cerrar conexión a la base de datos
    mysqli_close($conn);
?>