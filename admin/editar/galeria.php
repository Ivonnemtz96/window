<div class="page">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h2>Subir foto a la galería</h2>
                    </div>
                    <div class="body">
                        <form id="" method="POST" novalidate enctype="multipart/form-data">
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <div>

                                    <label>Seleccione una foto de portada</label>
                                        <input type="file" name="foto" id="foto"
                                            class="form-control " accept="image/*" data-multiple-caption="{count} files selected" multiple>
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-3">
                                    <button type="submit" name="submit" value="submit" class="btn btn-primary">
                                        Subir foto
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="row clearfix mt-5">
                            <?
                                require_once($_SERVER["DOCUMENT_ROOT"]."/admin/backend/ver_fotos.php");
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>