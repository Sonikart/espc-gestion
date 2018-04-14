<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<link rel="stylesheet" href="<?php echo $one->assets_folder; ?>/js/plugins/slick/slick.min.css">
<link rel="stylesheet" href="<?php echo $one->assets_folder; ?>/js/plugins/slick/slick-theme.min.css">

<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <button id="start_timer" class="btn btn-info">
                Lancer le timer
            </button>
            <?php
            $timer = $site->bdd->query('SELECT * FROM timer WHERE id_project = 1');
            $timer = $timer->fetch();
            $duree = $timer['time'];
            $heures=intval($duree / 3600);
            $minutes=intval(($duree % 3600) / 60);
            $secondes=intval((($duree % 3600) % 60));
            ?>
            <b>Heure : </b><?= $heures ?> <b>Minute : </b><?= $minutes; ?> <b>Secondes : </b> <?= $secondes; ?>
        </div>
    </div>
</div>
<!-- END Page Content -->
<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>
<script src="<?php echo $one->assets_folder; ?>/js/plugins/slick/slick.min.js"></script>
<script src="<?php echo $one->assets_folder; ?>/js/plugins/chartjs/Chart.min.js"></script>
<script src="<?php echo $one->assets_folder; ?>/js/pages/base_pages_dashboard.js"></script>
<script>
    jQuery(function(){
        // Init page helpers (Slick Slider plugin)
        App.initHelpers('slick');
    });
</script>
<?php require 'inc/views/template_footer_end.php'; ?>
