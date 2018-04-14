<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<link rel="stylesheet" href="<?php echo $one->assets_folder; ?>/js/plugins/slick/slick.min.css">
<link rel="stylesheet" href="<?php echo $one->assets_folder; ?>/js/plugins/slick/slick-theme.min.css">

<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>

<!-- Page Header -->
<div class="content bg-image overflow-hidden" style="background-image: url('<?php echo $one->assets_folder; ?>/img/photos/server.jpg');">
    <div class="push-50-t push-15">
        <h1 class="h2 text-white animated zoomIn">Page d'Accueil</h1>
        <h2 class="h5 text-white-op animated zoomIn">Bienvenue <?= $_SESSION['email'] ?></h2>
    </div>
</div>
<!-- END Page Header -->

<!-- Stats -->
<div class="content bg-white border-b">
    <div class="row items-push text-uppercase">
        <div class="col-xs-6 col-sm-3">
            <div class="font-w700 text-gray-darker animated fadeIn">Project</div>
            <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i> Totalisé</small></div>
            <a class="h2 font-w300 text-primary animated flipInX" href="base_comp_charts.php"><?= $site->count('p_project') ?></a>
        </div>
        <div class="col-xs-6 col-sm-3">
            <div class="font-w700 text-gray-darker animated fadeIn">Projet Terminé</div>
            <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i> Dans le mois</small></div>
            <a class="h2 font-w300 text-primary animated flipInX" href="base_comp_charts.php">3</a>
        </div>
        <div class="col-xs-6 col-sm-3">
            <div class="font-w700 text-gray-darker animated fadeIn">Revenu total</div>
            <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i> Depuis le début</small></div>
            <a class="h2 font-w300 text-primary animated flipInX" href="base_comp_charts.php">10 000€</a>
        </div>
        <div class="col-xs-6 col-sm-3">
            <div class="font-w700 text-gray-darker animated fadeIn">Facture en Attente</div>
            <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i> Depuis le début</small></div>
            <a class="h2 font-w300 text-primary animated flipInX" href="base_comp_charts.php">2</a>
        </div>
    </div>
</div>
<!-- END Stats -->

<!-- Page Content -->
<div class="content">
    <div class="row">
        <div class="col-sm-6 col-md-3">
            <a class="block block-link-hover3 text-center" href="base_pages_ecom_orders.php">
                <div class="block-content block-content-full">
                    <div class="h1 font-w700 text-primary" data-toggle="countTo" data-to="35">35</div>
                </div>
                <div class="block-content block-content-full block-content-mini bg-gray-lighter text-muted font-w600">Pending Orders</div>
            </a>
        </div>
        <div class="col-sm-6 col-md-3">
            <a class="block block-link-hover3 text-center" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="h1 font-w700 text-success" data-toggle="countTo" data-to="28" data-after="%">28%</div>
                </div>
                <div class="block-content block-content-full block-content-mini bg-gray-lighter text-muted font-w600">Profit</div>
            </a>
        </div>
        <div class="col-sm-6 col-md-3">
            <a class="block block-link-hover3 text-center" href="base_pages_ecom_orders.php">
                <div class="block-content block-content-full">
                    <div class="h1 font-w700" data-toggle="countTo" data-to="109">109</div>
                </div>
                <div class="block-content block-content-full block-content-mini bg-gray-lighter text-muted font-w600">Orders Today</div>
            </a>
        </div>
        <div class="col-sm-6 col-md-3">
            <a class="block block-link-hover3 text-center" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="h1 font-w700">$<span data-toggle="countTo" data-to="8970">8970</span></div>
                </div>
                <div class="block-content block-content-full block-content-mini bg-gray-lighter text-muted font-w600">Earnings Today</div>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-5">
            <div class="block block-opt-refresh-icon4">
                <div class="block-header bg-gray-lighter">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Top Products</h3>
                </div>
                <div class="block-content">
                    <table class="table table-borderless table-striped table-vcenter">
                        <tbody>
                        <tr>
                            <td class="text-center" style="width: 100px;"><a href="base_pages_ecom_product_edit.php"><strong>PID.965</strong></a></td>
                            <td><a href="base_pages_ecom_product_edit.php">Destiny: The Taken King</a></td>
                            <td class="hidden-xs text-center">
                                <div class="text-warning">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center"><a href="base_pages_ecom_product_edit.php"><strong>PID.154</strong></a></td>
                            <td><a href="base_pages_ecom_product_edit.php">Call of Duty: Black Ops III</a></td>
                            <td class="hidden-xs text-center">
                                <div class="text-warning">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center"><a href="base_pages_ecom_product_edit.php"><strong>PID.523</strong></a></td>
                            <td><a href="base_pages_ecom_product_edit.php">Minecraft: Story Mode</a></td>
                            <td class="hidden-xs text-center">
                                <div class="text-warning">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center"><a href="base_pages_ecom_product_edit.php"><strong>PID.423</strong></a></td>
                            <td><a href="base_pages_ecom_product_edit.php">Super Mario Maker</a></td>
                            <td class="hidden-xs text-center">
                                <div class="text-warning">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center"><a href="base_pages_ecom_product_edit.php"><strong>PID.391</strong></a></td>
                            <td><a href="base_pages_ecom_product_edit.php">Fallout 4</a></td>
                            <td class="hidden-xs text-center">
                                <div class="text-warning">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center"><a href="base_pages_ecom_product_edit.php"><strong>PID.218</strong></a></td>
                            <td><a href="base_pages_ecom_product_edit.php">NBA 2K16</a></td>
                            <td class="hidden-xs text-center">
                                <div class="text-warning">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center"><a href="base_pages_ecom_product_edit.php"><strong>PID.995</strong></a></td>
                            <td><a href="base_pages_ecom_product_edit.php">Forza Motorsport 6</a></td>
                            <td class="hidden-xs text-center">
                                <div class="text-warning">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center"><a href="base_pages_ecom_product_edit.php"><strong>PID.761</strong></a></td>
                            <td><a href="base_pages_ecom_product_edit.php">Minecraft</a></td>
                            <td class="hidden-xs text-center">
                                <div class="text-warning">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center"><a href="base_pages_ecom_product_edit.php"><strong>PID.860</strong></a></td>
                            <td><a href="base_pages_ecom_product_edit.php">Super Smash Bros</a></td>
                            <td class="hidden-xs text-center">
                                <div class="text-warning">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center"><a href="base_pages_ecom_product_edit.php"><strong>PID.952</strong></a></td>
                            <td><a href="base_pages_ecom_product_edit.php">Halo 5: Guardians</a></td>
                            <td class="hidden-xs text-center">
                                <div class="text-warning">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="block block-opt-refresh-icon4">
                <div class="block-header bg-gray-lighter">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Latest Orders</h3>
                </div>
                <div class="block-content">
                    <table class="table table-borderless table-striped table-vcenter">
                        <tbody>
                        <tr>
                            <td class="text-center" style="width: 100px;"><a href="base_pages_ecom_order.php"><strong>ORD.7116</strong></a></td>
                            <td class="hidden-xs"><a href="base_pages_ecom_customer.php">Vincent Sims</a></td>
                            <td><span class="label label-success">Delivered</span></td>
                            <td class="text-right"><strong>$554,00</strong></td>
                        </tr>
                        <tr>
                            <td class="text-center"><a href="base_pages_ecom_order.php"><strong>ORD.7115</strong></a></td>
                            <td class="hidden-xs"><a href="base_pages_ecom_customer.php">Jack Greene</a></td>
                            <td><span class="label label-danger">Canceled</span></td>
                            <td class="text-right"><strong>$237,00</strong></td>
                        </tr>
                        <tr>
                            <td class="text-center"><a href="base_pages_ecom_order.php"><strong>ORD.7114</strong></a></td>
                            <td class="hidden-xs"><a href="base_pages_ecom_customer.php">Emma Cooper</a></td>
                            <td><span class="label label-success">Delivered</span></td>
                            <td class="text-right"><strong>$784,00</strong></td>
                        </tr>
                        <tr>
                            <td class="text-center"><a href="base_pages_ecom_order.php"><strong>ORD.7113</strong></a></td>
                            <td class="hidden-xs"><a href="base_pages_ecom_customer.php">Joshua Munoz</a></td>
                            <td><span class="label label-warning">Processing</span></td>
                            <td class="text-right"><strong>$578,00</strong></td>
                        </tr>
                        <tr>
                            <td class="text-center"><a href="base_pages_ecom_order.php"><strong>ORD.7112</strong></a></td>
                            <td class="hidden-xs"><a href="base_pages_ecom_customer.php">Judy Alvarez</a></td>
                            <td><span class="label label-success">Delivered</span></td>
                            <td class="text-right"><strong>$569,00</strong></td>
                        </tr>
                        <tr>
                            <td class="text-center"><a href="base_pages_ecom_order.php"><strong>ORD.7111</strong></a></td>
                            <td class="hidden-xs"><a href="base_pages_ecom_customer.php">Emma Cooper</a></td>
                            <td><span class="label label-warning">Processing</span></td>
                            <td class="text-right"><strong>$651,00</strong></td>
                        </tr>
                        <tr>
                            <td class="text-center"><a href="base_pages_ecom_order.php"><strong>ORD.7110</strong></a></td>
                            <td class="hidden-xs"><a href="base_pages_ecom_customer.php">Helen Silva</a></td>
                            <td><span class="label label-success">Delivered</span></td>
                            <td class="text-right"><strong>$263,00</strong></td>
                        </tr>
                        <tr>
                            <td class="text-center"><a href="base_pages_ecom_order.php"><strong>ORD.7109</strong></a></td>
                            <td class="hidden-xs"><a href="base_pages_ecom_customer.php">Donald Barnes</a></td>
                            <td><span class="label label-warning">Processing</span></td>
                            <td class="text-right"><strong>$460,00</strong></td>
                        </tr>
                        <tr>
                            <td class="text-center"><a href="base_pages_ecom_order.php"><strong>ORD.7108</strong></a></td>
                            <td class="hidden-xs"><a href="base_pages_ecom_customer.php">Megan Dean</a></td>
                            <td><span class="label label-success">Delivered</span></td>
                            <td class="text-right"><strong>$164,00</strong></td>
                        </tr>
                        <tr>
                            <td class="text-center"><a href="base_pages_ecom_order.php"><strong>ORD.7107</strong></a></td>
                            <td class="hidden-xs"><a href="base_pages_ecom_customer.php">Amanda Powell</a></td>
                            <td><span class="label label-danger">Canceled</span></td>
                            <td class="text-right"><strong>$503,00</strong></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="block">
                <div class="block-content block-content-full text-center">
                    <button class="btn btn-sm btn-default"><i class="fa fa-fw fa-plus text-success"></i> Crée un Projet</button>
                    <button class="btn btn-sm btn-default"><i class="fa fa-fw fa-list text-info"></i> Voir les Projets</button>
                </div>
            </div>
            <div class="block block-opt-refresh-icon6">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title"><i class="fa fa-fw fa-share-alt"></i> Utilisateurs</h3>
                </div>
                <div class="block-content">
                    <ul class="nav-users push">
                        <?php
                            $list = $site->bdd->query('SELECT * FROM utilisateurs');
                            $list = $list->fetchAll();
                            foreach($list as $user){
                        ?>
                        <li>
                            <a href="base_pages_profile.php">
                                <img class="img-avatar" src="<?= $user['avatar']; ?>" alt="">
                                <i class="fa fa-circle text-success"></i> <?= $user['nom'].' '.$user['prenom']; ?>
                                <div class="font-w400 text-muted"><small><?= $user['role']; ?></small></div>
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>
<script src="<?php echo $one->assets_folder; ?>/js/plugins/slick/slick.min.js"></script>
<script src="<?php echo $one->assets_folder; ?>/js/plugins/chartjs/Chart.min.js"></script>
<script>
    jQuery(function(){
        // Init page helpers (Slick Slider plugin)
        App.initHelpers('slick');
    });
</script>
<?php require 'inc/views/template_footer_end.php'; ?>
