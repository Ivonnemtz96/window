<div class="page">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="javascript:void(0);">Form Validation</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-align-justify"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0);" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Application</a>
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
                    <a class="nav-link dropdown-toggle" href="javascript:void(0);" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Users</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="javascript:void(0);">Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0);">Timeline</a>
                        <a class="dropdown-item" href="javascript:void(0);">Invoices</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0);" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Pages</a>
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
                        <h2>Basic Validation</h2>
                    </div>
                    <div class="body">
                        <form id="basic-form" method="post" novalidate>
                            <div class="form-group">
                                <label>Text Input</label>
                                <input type="text" class="form-control" required />
                            </div>
                            <div class="form-group">
                                <label>Email Input</label>
                                <input type="email" class="form-control" required />
                            </div>
                            <div class="form-group">
                                <label>Text Area</label>
                                <textarea class="form-control" rows="5" cols="30" required></textarea>
                            </div>
                            <div class="form-group">
                                <label>Checkbox</label>
                                <br />
                                <div class="custom-control custom-checkbox inline-cc">
                                    <input type="checkbox" class="custom-control-input" id="cc1" required
                                        data-parsley-errors-container="#error-checkbox" />
                                    <label class="custom-control-label" for="cc1">Option 1</label>
                                </div>
                                <div class="custom-control custom-checkbox inline-cc">
                                    <input type="checkbox" class="custom-control-input" id="cc2" />
                                    <label class="custom-control-label" for="cc2">Option 2</label>
                                </div>
                                <div class="custom-control custom-checkbox inline-cc">
                                    <input type="checkbox" class="custom-control-input" id="cc3" />
                                    <label class="custom-control-label" for="cc3">Option 3</label>
                                </div>
                                <p id="error-checkbox"></p>
                            </div>
                            <div class="form-group">
                                <label>Radio Button</label>
                                <br />
                                <div class="custom-control custom-radio inline-cr">
                                    <input type="radio" name="gender" class="custom-control-input" id="crmale"
                                        value="male" required data-parsley-errors-container="#error-radio" />
                                    <label class="custom-control-label" for="crmale">Male</label>
                                </div>
                                <div class="custom-control custom-radio inline-cr">
                                    <input type="radio" name="gender" class="custom-control-input" id="crfemale"
                                        value="female" />
                                    <label class="custom-control-label" for="crfemale">Female</label>
                                </div>
                                <p id="error-radio"></p>
                            </div>
                            <div class="form-group">
                                <label for="food">Multiselect</label>
                                <br />
                                <select id="food" name="food[]" class="multiselect multiselect-custom"
                                    multiple="multiple" data-parsley-required
                                    data-parsley-trigger-after-failure="change"
                                    data-parsley-errors-container="#error-multiselect">
                                    <option value="cheese">Cheese</option>
                                    <option value="tomatoes">Tomatoes</option>
                                    <option value="mozarella">Mozzarella</option>
                                    <option value="mushrooms">Mushrooms</option>
                                    <option value="pepperoni">Pepperoni</option>
                                    <option value="onions">Onions</option>
                                </select>
                                <p id="error-multiselect"></p>
                            </div>
                            <br />
                            <button type="submit" class="btn btn-primary">
                                Validate
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h2>Advanced Validation</h2>
                    </div>
                    <div class="body">
                        <form id="advanced-form" data-parsley-validate novalidate>
                            <div class="form-group">
                                <label for="text-input1">Min. 8 Characters</label>
                                <input type="text" id="text-input1" class="form-control" required
                                    data-parsley-minlength="8" />
                            </div>
                            <div class="form-group">
                                <label for="text-input2">Between 5-10 Characters</label>
                                <input type="text" id="text-input2" class="form-control" required
                                    data-parsley-length="[5,10]" />
                            </div>
                            <div class="form-group">
                                <label for="text-input3">Min. Number ( >= 5 )</label>
                                <input type="text" id="text-input3" class="form-control" required
                                    data-parsley-min="5" />
                            </div>
                            <div class="form-group">
                                <label for="text-input4">Between 20-30</label>
                                <input type="text" id="text-input4" class="form-control" required
                                    data-parsley-range="[20,30]" />
                            </div>
                            <div class="form-group">
                                <label>Select Min. 2 Options</label>
                                <br />
                                <div class="custom-control custom-checkbox inline-cc">
                                    <input type="checkbox" class="custom-control-input" id="occ1" required
                                        data-parsley-mincheck="2" data-parsley-errors-container="#error-checkbox2" />
                                    <label class="custom-control-label" for="occ1">Option 1</label>
                                </div>
                                <div class="custom-control custom-checkbox inline-cc">
                                    <input type="checkbox" class="custom-control-input" id="occ2" />
                                    <label class="custom-control-label" for="occ2">Option 2</label>
                                </div>
                                <div class="custom-control custom-checkbox inline-cc">
                                    <input type="checkbox" class="custom-control-input" id="occ3" />
                                    <label class="custom-control-label" for="occ3">Option 3</label>
                                </div>
                                <p id="error-checkbox2"></p>
                            </div>
                            <div class="form-group">
                                <label>Select Between 1-2 Options</label>
                                <br />
                                <div class="custom-control custom-checkbox inline-cc">
                                    <input type="checkbox" class="custom-control-input" id="bocc1" required
                                        data-parsley-check="[1,2]" data-parsley-errors-container="#error-checkbox3" />
                                    <label class="custom-control-label" for="bocc1">Option 1</label>
                                </div>
                                <div class="custom-control custom-checkbox inline-cc">
                                    <input type="checkbox" class="custom-control-input" id="bocc2" />
                                    <label class="custom-control-label" for="bocc2">Option 2</label>
                                </div>
                                <div class="custom-control custom-checkbox inline-cc">
                                    <input type="checkbox" class="custom-control-input" id="bocc3" />
                                    <label class="custom-control-label" for="bocc3">Option 3</label>
                                </div>
                                <p id="error-checkbox3"></p>
                            </div>
                            <br />
                            <button type="submit" class="btn btn-primary">
                                Validate
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>