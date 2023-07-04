<?
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Incluir archivo de conexión a la base de datos
require_once($_SERVER["DOCUMENT_ROOT"]."/admin/backend/config.php");


$timezone = new DateTimeZone('America/Mexico_City');
$fecha = new DateTime('now', $timezone);
$fechaFormateada = $fecha->format('Y-m-d H:i:s');

setlocale(LC_ALL, 'es_MX');
$mesr = $fecha->format('m');
$year = $fecha->format('Y');

 $blogId= $_GET['blogId'];



    // Obtener los artículos del blog desde la base de datos
    $query = "SELECT * FROM blog WHERE blog_id = $blogId";
    $resultado = mysqli_query($conn, $query);

    if ($resultado->num_rows > 0) {
       while ($row = $resultado-> fetch_assoc()) {
        echo '
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Título</label>
                            <input type="text" name="blog_nom" class="form-control" value="'.$row['blog_nom'].'" required />
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Título en Inglés</label>
                            <input type="text" name="blog_nomEng" class="form-control" value="'.$row['blog_nomEng'].'" required />
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group">
                            <label>Autor</label>
                            <input type="text" name="blog_autor" class="form-control" value="'.$row['blog_autor'].'" required />
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group">
                            <label>Categoría</label>
                            <input type="text" name="blog_cat" class="form-control" value="'.$row['blog_cat'].'" required />
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group">
                            <label>Lugar</label>
                            <input type="text" name="blog_lugar" class="form-control" value="'.$row['blog_lugar'].'" required />
                        </div>
                    </div>

                    <!-- <div class="col-lg-6">
                        <div class="form-group">
                            <label>Fecha</label>
                            <input type="date" name="blog_fecha" class="form-control" value="'.$row['blog_fecha'].'" required />
                        </div>
                    </div> -->
                   
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Descripción</label>
                            <textarea class="form-control" name="blog_desc" rows="15" cols="30"
                                required>'.$row['blog_desc'].'</textarea>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Descripción en inglés</label>
                            <textarea class="form-control" name="blog_descEng" rows="15" cols="30"
                                required> '.$row['blog_descEng'].'</textarea>
                        </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                        <!-- El input para seleccionar los archivos, fíjate en su id -->
                        <label>Seleccione una foto para cambiar portada</label>
                        <input type="file" name="blog_portada" id="blog_portada" value="'.$row['blog_portada'].'"
                            class="form-control" accept="image/*">
                        <br><br>
                        <!-- La imagen que vamos a usar para previsualizar lo que el usuario selecciona -->
                        <img style="max-width: 50%;" id="imagenPrevisualizacion" src="/upload/portada/'.date('Y/m', strtotime($row['blog_fecha'])).'/'.$row['blog_portada'].'.jpg">
                    </div>
                </div>
                    <br />

                    <div class="col-lg-12">
                        <button type="submit" name="submit" value="submit" class="btn btn-primary">
                            Guardar
                        </button>
                    </div>

                </div>
        ' ;
       }
      
    }

?>