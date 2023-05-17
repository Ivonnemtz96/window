<div id="wrapper">
    <div class="vertical-align-wrap">
        <div class="vertical-align-middle auth-main">
            <div class="auth-box">
                <div class="top">
                    <img src="../assets/images/brand/icon_black.svg" alt="Lucid">
                    <strong>Big</strong> <span>Bucket</span>
                </div>
                <div class="card">
                    <div class="header">
                        <p class="lead">Login to your account</p>
                    </div>
                    <div class="body">
                        <form id="login" class="" method="POST">
                            <?php
                                if(isset($errorLogin)){
                                    echo $errorLogin;
                                }
                            ?>
                            <div class="form-group">
                                <label for="signin-email" class="control-label sr-only">Email</label>
                                <input type="email" name="user_mail" class="form-control" id="user_mail" value=""
                                    placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="signin-password" class="control-label sr-only">Password</label>
                                <input type="password" name="user_pass" class="form-control" id="user_pass" value=""
                                    placeholder="Password">
                            </div>

                            <button type="submit" name="login" value="login"
                                class="btn btn-primary btn-lg btn-block">LOGIN</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>