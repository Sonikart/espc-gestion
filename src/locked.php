<?php require 'inc/config.php'; ?>
<?php
// Specific Page Options
$one->body_bg = $one->assets_folder . '/img/photos/server.jpg';
?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'inc/views/template_head_end.php'; ?>
<?php
    if($_SESSION['connect'] != '1'){
        header('Location: login.php');
    }else{
        $check = $site->bdd->query('SELECT * FROM utilisateurs WHERE email = "'.$site->security($_SESSION['email']).'"');
        $check = $check->fetch();
        if($check['locked'] != '1'){
            if($_SESSION['connect'] == 1){
                header('Location: index.php');
            }else{
                header('Location: login.php');
            }
        }
    }
?>
    <!-- Lock Screen Content -->
    <div class="content overflow-hidden">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
                <!-- Lock Screen Block -->
                <div id="container__lock" class="block block-themed animated bounceIn">
                    <div class="block-header bg-primary">
                        <ul class="block-options">
                            <li>
                                <a href="base_pages_login.php" data-toggle="tooltip" data-placement="left" title="Log in with another account"><i class="si si-login"></i></a>
                            </li>
                        </ul>
                        <h3 class="block-title">Session Verrouiller</h3>
                    </div>
                    <div class="block-content block-content-full block-content-narrow">
                        <!-- Lock Screen Avatar -->
                        <div class="text-center push-15-t push-15">
                            <img style="border-radius:50%; border: 1px solid pink;" src="<?= $data__info['avatar'] ?>" alt="">
                        </div>
                        <!-- END Lock Screen Avatar -->

                        <!-- Lock Screen Form -->
                        <!-- jQuery Validation (.js-validation-lock class is initialized in js/pages/base_pages_lock.js) -->
                        <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                        <form class="js-validation-lock form-horizontal push-30-t push-30" id="unlock">
                            <div class="form-group">
                                <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2">
                                    <div class="form-material form-material-primary">
                                        <input class="form-control" type="password" id="form-password" name="form-password" placeholder="Entrez votre mot de passe">
                                        <label for="form-password">Mot de passe</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3">
                                    <button class="btn btn-block btn-default" type="submit"><i class="si si-lock-open pull-right"></i> Unlock !</button>
                                </div>
                            </div>
                        </form>
                        <!-- END Lock Screen Form -->
                    </div>
                </div>
                <!-- END Lock Screen Block -->
            </div>
        </div>
    </div>
<?php require 'inc/views/template_footer_start.php'; ?>
<script src="<?php echo $one->assets_folder; ?>/js/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?php echo $one->assets_folder; ?>/js/pages/base_pages_lock.js"></script>
<?php require 'inc/views/template_footer_end.php'; ?>
