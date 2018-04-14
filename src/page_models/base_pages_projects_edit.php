<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<link rel="stylesheet" href="<?php echo $one->assets_folder; ?>/js/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css">
<link rel="stylesheet" href="<?php echo $one->assets_folder; ?>/js/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">

<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>

<!-- Page Header -->
<div class="bg-image" style="background-image: url('<?php echo $one->assets_folder; ?>/img/photos/photo28@2x.jpg');">
    <div class="content content-full bg-city-op">
        <div class="row">
            <div class="col-xs-6">
                <h1 class="page-heading text-white">
                    ACME Inc <small class="hidden-xs"><span class="text-white-op">Web Design</span></small>
                </h1>
            </div>
            <div class="col-xs-6 text-right">
                <a class="btn btn-default" href="base_pages_projects_view.php">
                    <i class="fa fa-arrow-left push-5-r"></i> Back to Project
                </a>
            </div>
        </div>
    </div>
</div>
<div class="content content-mini bg-white">
    <ol class="breadcrumb push">
        <li>
            <a class="link-effect" href="base_pages_projects_dashboard.php">Dashboard</a>
        </li>
        <li>
            Edit
        </li>
    </ol>
</div>
<!-- END Page Header -->

<!-- Page Content -->
<div class="content content-boxed">
    <!-- Edit Project -->
    <h2 class="content-heading text-center">Need to make some changes?</h2>
    <div class="block">
        <div class="block-content">
            <form class="form-horizontal push-30-t push-30" action="base_pages_projects_view.php" method="post">
                <div class="row items-push">
                    <div class="col-sm-6 col-sm-offset-3">
                        <div class="form-group">
                            <div class="col-xs-12">
                                <label for="project-edit-name">Name</label>
                                <input class="form-control input-lg" type="text" id="project-edit-name" name="project-edit-name" placeholder="eg: Web App" value="ACME Inc">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <label for="project-edit-category">Category</label>
                                <input class="form-control input-lg" type="text" id="project-edit-category" name="project-edit-category" placeholder="eg: Web Design" value="Web Design">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <label for="project-edit-description">Description (Optional)</label>
                                <textarea class="form-control input-lg" id="project-edit-description" name="project-edit-description" rows="4" placeholder="A few words about the project..">Web Design and Development of ACME’s website. Brand identity as well as promo mobile app development for their projects.</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10 col-lg-8">
                                <!-- Bootstrap Colorpicker (.js-colorpicker class is initialized in App() -> uiHelperColorpicker()) -->
                                <!-- For more info and examples you can check out http://mjolnic.com/bootstrap-colorpicker/ -->
                                <label for="project-edit-name">Color</label>
                                <div class="js-colorpicker input-group">
                                    <input class="js-colorpicker form-control input-lg" type="text" id="project-edit-color" name="project-edit-color" value="#5c90d2">
                                    <span class="input-group-addon"><i></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10 col-lg-8">
                                <!-- Bootstrap Datetimepicker (.js-datetimepicker class is initialized in App() -> uiHelperDatetimepicker()) -->
                                <!-- For more info and examples you can check out https://github.com/Eonasdan/bootstrap-datetimepicker -->
                                <label for="project-edit-name">Deadline</label>
                                <div class="js-datetimepicker input-group date" data-format="YYYY/MM/DD">
                                    <input class="form-control input-lg" type="text" id="project-edit-deadline" name="project-edit-deadline" placeholder="Do you have a deadline?" value="2018/07/19">
                                    <span class="input-group-addon">
                                        <span class="fa fa-calendar"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <button class="btn btn-lg btn-default" type="submit">
                                    <i class="fa fa-check push-5-r"></i> Update Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- END Edit Project -->
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