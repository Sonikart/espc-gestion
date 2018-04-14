<?php require 'inc/config.php'; ?>
<?php require 'router/functions.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'controllers/facturate.php'; ?>

<!-- Page JS Plugins CSS -->
<link rel="stylesheet" href="<?php echo $one->assets_folder; ?>/js/plugins/slick/slick.min.css">
<link rel="stylesheet" href="<?php echo $one->assets_folder; ?>/js/plugins/slick/slick-theme.min.css">

<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>
<?php
    $avoir = new Reduction();
?>
<div class="content content-boxed">
    <?php require 'controllers/alerte_modals.php'; ?>
    <!-- Products -->
    <div class="block">
        <div class="block-header bg-gray-lighter">
            <h3 class="block-title">Produit vendu</h3>
        </div>
        <div class="block-content">
            <?php
                $count = $site->bdd->query('SELECT * FROM p_facturate WHERE id_project = "'.$site->security($_GET['id_project']).'" ');
                if($count->rowCount() >= 1){
            ?>
            <div class="table-responsive">
                <table class="table table-borderless table-striped table-vcenter">
                    <thead>
                    <tr>
                        <th>Description</th>
                        <th class="text-center">Quantité</th>
                        <th class="text-center">Temps</th>
                        <th class="text-right" style="width: 10%;">Prix</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        $list_facturate = $site->bdd->query('SELECT * FROM p_facturate WHERE id_project = "'.$_GET['id_project'].'"');
                        $list_facturate = $list_facturate->fetchAll();
                        foreach($list_facturate as $data){
                    ?>
                    <tr>
                        <td><a href="base_pages_ecom_product_edit.php"><?= $data['description']; ?></a></td>
                        <td class="text-center"><?= $data['quantity'] ?></td>
                        <td class="text-center"><strong><?= $data['time_build']; ?>h</strong></td>
                        <td class="text-right"><?= $data['price']; ?> €</td>
                    </tr>
                    <?php } ?>
                    <tr>
                        <td colspan="3" class="text-right"><strong>Nombre Heure:</strong></td>
                        <td class="text-right"><?= $data_p['time_total']; ?> heures</td>
                    </tr>
                    <?php if($data_p['reduction'] > 0){ ?>
                    <tr>
                        <td colspan="3" class="text-right"><strong>Reduction de:</strong></td>
                        <td class="text-right"><?= $data_p['reduction']; ?> %</td>
                    </tr>
                    <tr class="success">
                        <td colspan="3" class="text-right text-uppercase"><strong>Total:</strong></td>
                        <td class="text-right"><strong><?= $avoir->avoir($data_p['price_total'], $data_p['reduction']) ?> €</strong></td>
                    </tr>
                    <?php } else { ?>
                            <tr class="success">
                                <td colspan="3" class="text-right text-uppercase"><strong>Total:</strong></td>
                                <td class="text-right"><strong><?= $data_p['price_total'] ?> €</strong></td>
                            </tr>
                    <?php } ?>
                    <tr class="form-group">
                        <button style="margin: 5px 5px;" onclick="window.location.href='view_project.php?view=<?= $data_p['id_projet'] ?>'" class="btn btn-info">
                            <i class="fa fa-arrow-left"></i> Retourne sur <b><?= $data_p['titre']; ?></b>
                        </button>
                    </tr>
                    <tr class="form-group">
                        <button onclick="window.location.href='invoice.php?id_project=<?= $data_p['id_projet']; ?>'" class="btn btn-danger">
                            <i class="fa fa-th-list"></i> Generer la facture
                        </button>
                    </tr>
                    </tbody>
                </table>
            </div>
            <?php } else { ?>
                  <p>Aucun produit facturer pour le moment.</p>
            <?php } ?>
        </div>
    </div>
    <!-- END Products -->

    <!-- Customer -->
    <div class="row">
        <div class="col-lg-6">
            <!-- Billing Address -->
            <div class="block">
                <div class="block-header bg-gray-lighter">
                    <h3 class="block-title">ES-PC Informatique</h3>
                </div>
                <div class="block-content block-content-full">
                    <div class="h4 push-5"><?php $one->get_name(); ?></div>
                    <address>
                        Sunset Str 598<br>
                        Melbourne<br>
                        Australia, 11-671<br><br>
                        <i class="fa fa-phone"></i> (999) 888-77777<br>
                        <i class="fa fa-envelope-o"></i> <a href="javascript:void(0)">company@example.com</a>
                    </address>
                </div>
            </div>
            <!-- END Billing Address -->
        </div>
        <div class="col-lg-6">
            <!-- Shipping Address -->
            <div class="block">
                <div class="block-header bg-gray-lighter">
                    <h3 class="block-title">Information Client</h3>
                </div>
                <div class="block-content block-content-full">
                    <div class="h4 push-5"><?php $one->get_name(); ?></div>
                    <address>
                        Sunrise Str 620<br>
                        Melbourne<br>
                        Australia, 11-587<br><br>
                        <i class="fa fa-phone"></i> (999) 888-55555<br>
                        <i class="fa fa-envelope-o"></i> <a href="javascript:void(0)">company@example.com</a>
                    </address>
                </div>
            </div>
            <!-- END Shipping Address -->
        </div>
    </div>
    <!-- END Customer -->

    <!-- Log Messages -->
    <div class="block">
        <div class="block-header">
            <ul class="block-options">
                <li>
                    <button type="button"><i class="si si-settings"></i></button>
                </li>
            </ul>
            <h3 class="block-title">Ajout d'un avoir sur la facture</h3>
        </div>
        <div class="block-content block-content-narrow">
            <form class="js-validation-material form-horizontal push-10-t" method="post">
                <div class="form-group">
                    <div class="col-sm-9">
                        <div class="form-material">
                            <input class="form-control" type="text" id="val-email2" name="reduction_facturate" value="<?= $data_p['reduction'] ?>">
                            <label for="val-email2">Pourcentage</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <button class="btn btn-primary" name="add_reduction" type="submit">Appliquer sur la facture</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="block">
        <div class="block-header">
            <ul class="block-options">
                <li>
                    <button type="button"><i class="si si-settings"></i></button>
                </li>
            </ul>
            <h3 class="block-title">Ajouter un Produit</h3>
        </div>
        <div class="block-content block-content-narrow">
            <form class="js-validation-material form-horizontal push-10-t" method="post">
                <div class="form-group">
                    <div class="col-sm-9">
                        <div class="form-material">
                            <input class="form-control" type="text" id="val-email2" name="description_facturate" placeholder="Description du produit facturer">
                            <label for="val-email2">Description</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-9">
                        <div class="form-material">
                            <input class="form-control" type="text" id="val-currency2" name="price_facturate" placeholder="30.50 €">
                            <label for="val-currency2">Prix</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-9">
                        <div class="form-material">
                            <input class="form-control" type="text" id="val-currency2" name="time_facturate" placeholder="36h">
                            <label for="val-currency2">Temps passé</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <button class="btn btn-primary" name="add_facturate" type="submit">Ajouter a la facture</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- END Log Messages -->
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
