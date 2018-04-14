<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'inc/views/template_head_end.php'; ?>
<style> body{ background-image:url('http://www.peency.com/images/2016/01/22/0e1bc95468cfa2ac5.jpg'); }</style>
    <!-- Login Content -->
    <div class="bg-white pulldown">
        <div class="content content-boxed overflow-hidden">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
                    <div class="push-30-t push-50 animated fadeIn">
                        <div class="text-center">
                            <i class="fa fa-2x fa-code text-primary"></i>
                            <p class="text-muted push-15-t">La liaison parfaite pour votre Projet</p>
                        </div>
                        <?php include 'controllers/alerte.php'; ?>
                        <form class="js-validation-login form-horizontal push-30-t" id="login-form">
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <div class="form-material form-material-primary floating">
                                        <input class="form-control" type="text" id="login-email" name="login_email">
                                        <label for="login-email">Adresse e-mail</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <div class="form-material form-material-primary floating">
                                        <input class="form-control" type="password" id="login-password" name="login_password">
                                        <label for="login-password">Mot de passe</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group push-30-t">
                                <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                                    <button class="btn btn-info" type="submit">Log In</button>
                                </div>
                            </div>
                        </form>
                        <!-- END Login Form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Login Content -->

    <!-- Login Footer -->
    <div class="pulldown push-30-t text-center animated fadeInUp">
        <small class="text-muted"><span class="js-year-copy"></span> &copy; <?php echo $one->name . ' ' . $one->version; ?></small>
    </div>
    <!-- END Login Footer -->

<?php require 'inc/views/template_footer_start.php'; ?>

    <!-- Page JS Plugins -->
    <script src="<?php echo $one->assets_folder; ?>/js/plugins/jquery-validation/jquery.validate.min.js"></script>

    <!-- Page JS Code -->
    <script src="<?php echo $one->assets_folder; ?>/js/pages/base_pages_login.js"></script>

<?php require 'inc/views/template_footer_end.php'; ?>
