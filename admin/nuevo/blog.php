<div class="page">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h2>Crear entrada de blog</h2>
                    </div>
                    <div class="body">
                        <form id="" method="POST" novalidate enctype="multipart/form-data">
                            <div class="row clearfix">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Título</label>
                                        <input type="text" name="blog_nom" class="form-control" required />
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Título en Inglés</label>
                                        <input type="text" name="blog_nomEng" class="form-control" required />
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Autor</label>
                                        <input type="text" name="blog_autor" class="form-control" required />
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Categoría</label>
                                        <input type="text" name="blog_cat" class="form-control" required />
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Lugar</label>
                                        <input type="text" name="blog_lugar" class="form-control" required />
                                    </div>
                                </div>

                                <!-- <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Fecha</label>
                                        <input type="date" name="blog_fecha" class="form-control" required />
                                    </div>
                                </div> -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <!-- El input para seleccionar los archivos, fíjate en su id -->
                                        <label>Seleccione una foto de portada</label>
                                        <input type="file" name="blog_portada" id="blog_portada"
                                            class="form-control" accept="image/*">
                                        <br><br>
                                        <!-- La imagen que vamos a usar para previsualizar lo que el usuario selecciona -->
                                        <img style="max-width: 30%;" id="imagenPrevisualizacion">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Descripción</label>
                                        <textarea class="form-control" name="blog_desc" rows="5" cols="30"
                                            required></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Descripción en inglés</label>
                                        <textarea class="form-control" name="blog_descEng" rows="5" cols="30"
                                            required></textarea>
                                    </div>
                                </div>
                                <br />

                                <div class="col-lg-12">
                                    <button type="submit" name="submit" value="submit" class="btn btn-primary">
                                        Crear
                                    </button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

