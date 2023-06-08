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
                                        <input type="file" name="foto" id="foto" class="custom-input-file"
                                            data-multiple-caption="{count} files selected" multiple />
                                        <label for="foto">
                                            <i class="fa fa-upload"></i>
                                            <span>Choose a file…</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" name="submit" value="submit" class="btn btn-primary">
                                        Crear
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