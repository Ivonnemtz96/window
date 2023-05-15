
        <div class="page">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="javascript:void(0);">Form Validation</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fa fa-align-justify"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0);" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Application</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0);">Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0);">Calendar</a>
                                <a class="dropdown-item" href="javascript:void(0);">TaskBoard</a>
                                <a class="dropdown-item" href="javascript:void(0);">Chat App</a>
                                <a class="dropdown-item" href="javascript:void(0);">Contacts</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0);" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Users</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0);">Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0);">Timeline</a>
                                <a class="dropdown-item" href="javascript:void(0);">Invoices</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0);" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0);">Stater page</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0);">Pricing</a>
                                <a class="dropdown-item" href="javascript:void(0);">Search</a>
                                <a class="dropdown-item" href="javascript:void(0);">Testimonials</a>
                                <a class="dropdown-item" href="javascript:void(0);">Map</a>
                                <a class="dropdown-item" href="javascript:void(0);">Icon</a>
                                <a class="dropdown-item" href="javascript:void(0);">Carousel</a>
                                <a class="dropdown-item" href="javascript:void(0);">Gallery</a>
                                <a class="dropdown-item" href="javascript:void(0);">Lookup</a>
                            </div>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <button type="button" class="btn btn-primary">Add</button>
                        <a href="https://themeforest.net/user/wrraptheme/portfolio" title="Portfolio"
                            class="btn btn-success ml-2">Portfolio</a>
                    </form>
                </div>
            </nav>
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2>Crear blog</h2>
                            </div>
                            <div class="body">
                                <form id="basic-form" method="post" novalidate>
                                    <div class="form-group">
                                        <label>Título</label>
                                        <input type="text" class="form-control" required />
                                    </div>
                                    <div class="form-group">
                                        <label>Título en Inglés</label>
                                        <input type="text" class="form-control" required />
                                    </div>
                                    <div class="form-group">
                                        <label>Fecha</label>
                                        <input type="text" class="form-control" required />
                                    </div>
                                    <div class="form-group">
                                        <label>Descripción</label>
                                        <textarea class="form-control" rows="5" cols="30" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Descripción en inglés</label>
                                        <textarea class="form-control" rows="5" cols="30" required></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="image-upload" id="image-label">Para reemplazar la portada actual
                                            sube una nueva foto</label>
                                        <input type="file" name="thumb" id="image-upload" />
                                    </div>

                                    <br />
                                    <button type="submit" class="btn btn-primary">
                                        Crear
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    
