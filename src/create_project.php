<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'controllers/create_project.php'; ?>

    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="<?php echo $one->assets_folder; ?>/js/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="<?php echo $one->assets_folder; ?>/js/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">

<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>

    <!-- Page Header -->
    <div class="bg-image" style="background-image: url('<?php echo $one->assets_folder; ?>/img/photos/photo28@2x.jpg');">
        <div class="content content-full bg-flat-op">
            <h1 class="page-heading text-white">
                Création d'un nouveau projet <small><span class="text-white-op">Excited!</span></small>
            </h1>
        </div>
    </div>
    <div class="content content-mini bg-white">
        <ol class="breadcrumb push">
            <li>
                <a class="link-effect" href="base_pages_projects_dashboard.php">Panneau de configuration</a>
            </li>
            <li>
                Création
            </li>
        </ol>
    </div>
    <!-- END Page Header -->
    <div class="row">
        <div class="col-md-12">
            <?php require 'controllers/alerte_modals.php'; ?>
        </div>
    </div>
    <!-- Page Content -->
    <div class="content content-boxed">
        <!-- Create Project -->
        <h2 class="content-heading text-center">Indiquez les informations</h2>
        <div class="block">
            <div class="block-content">
                <form class="form-horizontal push-30-t push-30" method="post">
                    <div class="row items-push">
                        <div class="col-sm-6 col-sm-offset-3">
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <label for="project-name">Titre du Projet</label>
                                    <input class="form-control input-lg" type="text" id="project-name" name="create_title" placeholder="ex: Web Application">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <label for="project-category">Lien du Projet</label>
                                    <input class="form-control input-lg" type="text" id="project-category" name="create_lien" placeholder="ex: http://google.fr">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <label for="project-category">Adresse e-mail du client</label>
                                    <input class="form-control input-lg" type="text" id="project-category" name="create_email" placeholder="ex: contact@contact.fr">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <label for="project-description">Description rapide du projet</label>
                                    <textarea class="form-control input-lg" id="project-description" name="create_description" rows="4" placeholder="Indiquez une rapide présentation, pour avoir une vue d'ensemble."></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10 col-lg-8">
                                    <!-- Bootstrap Colorpicker (.js-colorpicker class is initialized in App() -> uiHelperColorpicker()) -->
                                    <!-- For more info and examples you can check out http://mjolnic.com/bootstrap-colorpicker/ -->
                                    <label for="project-name">Couleur du Projet</label>
                                    <div class="js-colorpicker input-group">
                                        <input class="js-colorpicker form-control input-lg" type="text" id="project-color" name="create_color" value="#5c90d2">
                                        <span class="input-group-addon"><i></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10 col-lg-8">
                                    <!-- Bootstrap Datetimepicker (.js-datetimepicker class is initialized in App() -> uiHelperDatetimepicker()) -->
                                    <!-- For more info and examples you can check out https://github.com/Eonasdan/bootstrap-datetimepicker -->
                                    <label for="project-name">Date de livraison (Approximative)</label>
                                    <div class="js-datetimepicker input-group date" data-format="DD/MM/YYYY">
                                        <input class="form-control input-lg" type="text" id="project-deadline" name="create_date_livraison" placeholder="Une date de livraison">
                                        <span class="input-group-addon">
                                        <span class="fa fa-calendar"></span>
                                    </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <button class="btn btn-success" type="submit" name="create_project">
                                        <i class="fa fa-plus push-5-r"></i> Crée le Projet
                                    </button>
                                    <button class="btn btn-dark" type="button">
                                        <i class="fa fa-plus push-5-r"></i> Effacer les champs
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- END Create Project -->
    </div>
    <!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>

    <!-- Page JS Plugins -->
    <script src="<?php echo $one->assets_folder; ?>/js/plugins/bootstrap-datetimepicker/moment.min.js"></script>
    <script src="<?php echo $one->assets_folder; ?>/js/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>
    <script src="<?php echo $one->assets_folder; ?>/js/plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>

    <!-- Page JS Code -->
    <script>
        jQuery(function(){
            // Init page helpers (BS Datetimepicker + BS Colorpicker plugins)
            App.initHelpers(['datetimepicker', 'colorpicker']);
        });
    </script>

<?php require 'inc/views/template_footer_end.php'; ?>
