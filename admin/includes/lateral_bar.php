    <div class="left_sidebar">
        <nav class="sidebar">
            <div class="user-info">
                <div class="image">
                    <a href="/admin/perfil/"><img src="../assets/images/user.png" alt="User" /></a>
                </div>
                <div class="detail mt-3">
                    <h5 class="mb-0"><? echo $_SESSION['user_nom'];?></h5>
                    <small>Admin</small>
                </div>
                <div class="social">
                    <a href="javascript:void(0);" title="facebook"><i class="ti-twitter-alt"></i></a>
                    <a href="javascript:void(0);" title="twitter"><i class="ti-linkedin"></i></a>
                    <a href="javascript:void(0);" title="instagram"><i class="ti-facebook"></i></a>
                </div>
            </div>
            <ul id="main-menu" class="metismenu">
                <li class="g_heading">Main</li>
                <li class="active">
                    <a href="/"><i class="ti-home"></i><span>Dashboard</span></a>
                </li>
                <li>
                    <a href="ui-elements.html"><i class="ti-vector"></i><span>UI Elements</span></a>
                </li>
                <li>
                    <a href="/admin/blog"><i class="ti-vector"></i><span>Nuevo blog</span></a>
                </li>
                <li>
                    <a href="/admin/entradas"><i class="ti-vector"></i><span>Ver entradas del blog</span></a>
                </li>
                <li class="g_heading">Application</li>
                <li>
                    <a href="app-calendar.html"><i class="ti-calendar"></i><span>Calendar</span></a>
                </li>
                <li>
                    <a href="app-taskboard.html"><i class="ti-notepad"></i><span>TaskBoard</span></a>
                </li>
                <li>
                    <a href="app-inbox.html"><i class="ti-email"></i><span>Inbox</span></a>
                </li>
                <li>
                    <a href="app-chat.html"><i class="ti-comments"></i><span>Chat Apps</span></a>
                </li>
                <li>
                    <a href="app-contact.html"><i class="ti-id-badge"></i><span>Contact List</span></a>
                </li>
                <li>
                    <a href="widgets.html"><i class="ti-widget"></i><span>Widgets</span></a>
                </li>

                <li class="g_heading">Chart, Froms & Elements</li>
                <li>
                    <a href="javascript:void(0)" class="has-arrow"><i class="ti-pie-chart"></i><span>Charts</span></a>
                    <ul>
                        <li><a href="chart-c3.html">C3 Chart</a></li>
                        <li><a href="chartsjs.html">Charts JS</a></li>
                        <li><a href="chart-flot.html">Flot Chart</a></li>
                        <li><a href="chart-knob.html">JQuery Knob</a></li>
                        <li><a href="chart-morris.html">Morris Chart</a></li>
                        <li><a href="chart-sparkline.html">Sparkline Chart</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)" class="has-arrow"><i class="ti-pencil-alt"></i><span>Forms</span></a>
                    <ul>
                        <li><a href="form-elements.html">Basic Elements</a></li>
                        <li><a href="form-advanced.html">Advanced Elements</a></li>
                        <li><a href="form-validation.html">Form Validation</a></li>
                        <li><a href="form-wizard.html">Form Wizard</a></li>
                        <li><a href="form-summernote.html">Summernote</a></li>
                        <li><a href="form-markdown.html">Markdown</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)" class="has-arrow"><i class="ti-view-list"></i><span>Tables</span></a>
                    <ul>
                        <li><a href="table-basic.html">Table Example</a></li>
                        <li><a href="table-normal.html">Table Normal</a></li>
                        <li><a href="table-datatable.html">Jquery Datatable</a></li>
                        <li><a href="table-editable.html">Table Editable</a></li>
                        <li><a href="table-color.html">Table Color</a></li>
                        <li><a href="table-filter.html">Table Filter</a></li>
                    </ul>
                </li>
                <li class="g_heading">Users</li>
                <li>
                    <a href="page-profile.html"><i class="ti-user"></i><span>Profile</span></a>
                </li>
                <li>
                    <a href="page-timeline.html"><i class="ti-menu-alt"></i><span>Timeline</span></a>
                </li>
                <li>
                    <a href="page-invoices.html"><i class="ti-file"></i><span>Invoices</span></a>
                </li>
                <li class="g_heading">Authentication</li>
                <li class="open-top">
                    <a href="javascript:void(0)" class="has-arrow"><i
                            class="ti-lock"></i><span>Authentication</span></a>
                    <ul>
                        <li>
                            <a class="dropdown-item" href="auth-login.html">Login</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="auth-register.html">Register</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="auth-forgot-password.html">Forgot password</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="auth-lock-screen.html">Lock Screen</a>
                        </li>
                    </ul>
                </li>
                <li class="open-top">
                    <a href="javascript:void(0)" class="has-arrow"><i class="ti-na"></i><span>Error Pages</span></a>
                    <ul>
                        <li>
                            <a class="dropdown-item" href="error-400.html">400 error</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="error-401.html">401 error</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="error-403.html">403 error</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="error-404.html">404 error</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="error-500.html">500 error</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="error-503.html">503 error</a>
                        </li>
                    </ul>
                </li>
                <li class="g_heading">Extra</li>
                <li class="open-top">
                    <a href="javascript:void(0)" class="has-arrow"><i class="ti-clipboard"></i><span>Pages</span></a>
                    <ul>
                        <li><a href="page-empty.html">Empty page</a></li>
                        <li><a href="page-pricing.html">Pricing cards</a></li>
                        <li><a href="page-search.html">Search Results</a></li>
                        <li><a href="page-testimonials.html">Testimonials</a></li>
                        <li><a href="page-maps.html">Maps</a></li>
                        <li><a href="page-icons.html">Icons</a></li>
                        <li><a href="page-carousel.html">Carousel</a></li>
                        <li><a href="page-gallery.html">Gallery</a></li>
                        <li><a href="page-lookup.html">Lookup</a></li>
                    </ul>
                </li>
                <li>
                    <a href="docs/introduction.html"><i class="ti-file"></i><span>Documentation</span></a>
                </li>
            </ul>
        </nav>
    </div>

    <div class="right_sidebar">
        <div class="setting_div">
            <a href="javascript:void(0);" class="rightbar_btn"><i class="fa fa-cog fa-spin"></i></a>
        </div>
        <ul class="nav nav-pills nav-fill flex-column flex-sm-row mx-3 my-3" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="Settings-tab" data-toggle="tab" href="#Settings" role="tab"
                    aria-controls="Settings" aria-selected="true">Settings</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="Contact-tab" data-toggle="tab" href="#Contact" role="tab"
                    aria-controls="Contact" aria-selected="false">Contact</a>
            </li>
        </ul>
        <hr />
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane show active" id="Settings" role="tabpanel" aria-labelledby="Settings-tab">
                <div class="sidebar-scroll">
                    <div class="sidebar-widget px-3">
                        <h5>Theme Setting</h5>
                        <ul class="choose-skin list-unstyled">
                            <li data-theme="black">
                                <div class="black"></div>
                            </li>
                            <li data-theme="azure">
                                <div class="azure"></div>
                            </li>
                            <li data-theme="indigo" class="active">
                                <div class="indigo"></div>
                            </li>
                            <li data-theme="purple">
                                <div class="purple"></div>
                            </li>
                            <li data-theme="orange">
                                <div class="orange"></div>
                            </li>
                            <li data-theme="green">
                                <div class="green"></div>
                            </li>
                            <li data-theme="cyan">
                                <div class="cyan"></div>
                            </li>
                            <li data-theme="blush">
                                <div class="blush"></div>
                            </li>
                        </ul>
                        <ul class="setting-list list-unstyled mt-3">
                            <li>
                                <label class="custom-switch">
                                    <span class="custom-switch-description">Dark Sidebar</span>
                                    <label class="toggle-switch switch-sm mb-0">
                                        <input type="checkbox" class="switch-dark" />
                                        <span class="toggle-switch-slider"></span>
                                    </label>
                                </label>
                            </li>
                            <li>
                                <label class="custom-switch">
                                    <span class="custom-switch-description">Mini Sidebar</span>
                                    <label class="toggle-switch switch-sm mb-0">
                                        <input type="checkbox" class="switch-sidebar" />
                                        <span class="toggle-switch-slider"></span>
                                    </label>
                                </label>
                            </li>
                        </ul>
                        <hr />
                    </div>
                    <div class="sidebar-widget px-3">
                        <h5>Language Setting</h5>
                        <select class="selectpicker" title="Select language">
                            <option>English</option>
                            <option>Spanish</option>
                            <option>Chinese</option>
                            <option>Hindi</option>
                            <option>Arabic</option>
                        </select>
                        <hr />
                    </div>
                    <div class="sidebar-widget px-3">
                        <h5>General Setting</h5>
                        <ul class="setting-list list-unstyled mt-3">
                            <li>
                                <label class="custom-switch">
                                    <span class="custom-switch-description">Report Panel Usage</span>
                                    <label class="toggle-switch switch-sm mb-0">
                                        <input type="checkbox" checked />
                                        <span class="toggle-switch-slider"></span>
                                    </label>
                                </label>
                            </li>
                            <li>
                                <label class="custom-switch">
                                    <span class="custom-switch-description">Email Redirect</span>
                                    <label class="toggle-switch switch-sm mb-0">
                                        <input type="checkbox" checked />
                                        <span class="toggle-switch-slider"></span>
                                    </label>
                                </label>
                            </li>
                            <li>
                                <label class="custom-switch">
                                    <span class="custom-switch-description">Notifications</span>
                                    <label class="toggle-switch switch-sm mb-0">
                                        <input type="checkbox" />
                                        <span class="toggle-switch-slider"></span>
                                    </label>
                                </label>
                            </li>
                            <li>
                                <label class="custom-switch">
                                    <span class="custom-switch-description">Location Permission</span>
                                    <label class="toggle-switch switch-sm mb-0">
                                        <input type="checkbox" checked />
                                        <span class="toggle-switch-slider"></span>
                                    </label>
                                </label>
                            </li>
                        </ul>
                        <hr />
                    </div>
                    <div class="sidebar-widget px-3">
                        <div class="progress-wrapper">
                            <h4 class="progress-label text-uppercase">New Project</h4>
                            <h4 class="progress-percentage text-uppercase">$950</h4>
                            <div class="progress" style="height: 5px">
                                <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="40"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
                            </div>
                        </div>
                        <div class="progress-wrapper">
                            <h4 class="progress-label text-uppercase">Admin</h4>
                            <h4 class="progress-percentage text-uppercase">$10k</h4>
                            <div class="progress" style="height: 5px">
                                <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="78"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 78%"></div>
                            </div>
                        </div>
                        <div class="progress-wrapper">
                            <h4 class="progress-label text-uppercase">Balance</h4>
                            <h4 class="progress-percentage text-uppercase">$50k</h4>
                            <div class="progress" style="height: 5px">
                                <div class="progress-bar bg-green" role="progressbar" aria-valuenow="55"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 55%"></div>
                            </div>
                        </div>
                        <hr />
                        <div class="progress-wrapper">
                            <h4 class="progress-label text-uppercase">Storage</h4>
                            <h4 class="progress-percentage text-uppercase">35GB</h4>
                            <div class="progress" style="height: 5px">
                                <div class="progress-bar bg-red" role="progressbar" aria-valuenow="89" aria-valuemin="0"
                                    aria-valuemax="100" style="width: 89%"></div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary btn-block btn-animated btn-animated-x">
                            <span class="btn-inner--visible">Upgrade Now</span>
                            <span class="btn-inner--hidden"><i class="fas fa-arrow-right"></i></span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="Contact" role="tabpanel" aria-labelledby="Contact-tab">
                <div class="sidebar-widget px-3">
                    <ul class="list-unstyled contact-list">
                        <li class="d-flex align-items-center">
                            <span class="contact-img">
                                <img src="../assets/images/xs/avatar1.jpg" class="rounded" alt="" />
                            </span>
                            <h4 class="contact-name">
                                Vincent Porter <span class="d-block">London UK</span>
                            </h4>
                            <div class="action">
                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                        class="fab fa-skype"></i></a>
                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                        class="fa fa-envelope"></i></a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <span class="contact-img">
                                <img src="../assets/images/xs/avatar2.jpg" class="rounded" alt="" />
                            </span>
                            <h4 class="contact-name">
                                Mike Thomas <span class="d-block">London UK</span>
                            </h4>
                            <div class="action">
                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                        class="fab fa-skype"></i></a>
                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                        class="fa fa-envelope"></i></a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <span class="contact-img">
                                <img src="../assets/images/xs/avatar3.jpg" class="rounded" alt="" />
                            </span>
                            <h4 class="contact-name">Aiden Chavaz</h4>
                            <div class="action">
                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                        class="fab fa-skype"></i></a>
                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                        class="fa fa-envelope"></i></a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <span class="contact-img">
                                <img src="../assets/images/xs/avatar4.jpg" class="rounded" alt="" />
                            </span>
                            <h4 class="contact-name">
                                Vincent Porter <span class="d-block">Miami USA</span>
                            </h4>
                            <div class="action">
                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                        class="fab fa-skype"></i></a>
                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                        class="fa fa-envelope"></i></a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <span class="contact-img">
                                <img src="../assets/images/xs/avatar5.jpg" class="rounded" alt="" />
                            </span>
                            <h4 class="contact-name">
                                Mike Thomas <span class="d-block">Neyyork USA</span>
                            </h4>
                            <div class="action">
                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                        class="fab fa-skype"></i></a>
                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                        class="fa fa-envelope"></i></a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <span class="contact-img">
                                <img src="../assets/images/xs/avatar6.jpg" class="rounded" alt="" />
                            </span>
                            <h4 class="contact-name">Aiden Chavaz</h4>
                            <div class="action">
                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                        class="fab fa-skype"></i></a>
                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                        class="fa fa-envelope"></i></a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <span class="contact-img">
                                <img src="../assets/images/xs/avatar7.jpg" class="rounded" alt="" />
                            </span>
                            <h4 class="contact-name">
                                Mike Thomas <span class="d-block">New Delhi IND</span>
                            </h4>
                            <div class="action">
                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                        class="fab fa-skype"></i></a>
                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                        class="fa fa-envelope"></i></a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <span class="contact-img">
                                <img src="../assets/images/xs/avatar8.jpg" class="rounded" alt="" />
                            </span>
                            <h4 class="contact-name">Aiden Chavaz</h4>
                            <div class="action">
                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                        class="fab fa-skype"></i></a>
                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                        class="fa fa-envelope"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>