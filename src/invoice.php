<?php require 'inc/config.php'; ?>
<?php require 'router/functions.php'; ?>
<?php require 'controllers/view_invoice.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>
<?php
    $avoir = new Reduction();
?>

    <!-- Page Header -->
    <!-- You can use the .hidden-print class to hide an element in printing -->
    <div class="content bg-gray-lighter hidden-print">
        <div class="row items-push">
            <div class="col-sm-7">
                <h1 class="page-heading">
                    Facture <small><?= $fetch['titre']; ?>.</small>
                </h1>
            </div>
            <div class="col-sm-5 text-right hidden-xs">
                <ol class="breadcrumb push-10-t">
                    <li>Gestion des produits</li>
                    <li><a class="link-effect" href="">Facture</a></li>
                </ol>
            </div>
        </div>
    </div>
    <!-- END Page Header -->

    <!-- Page Content -->
    <div class="content content-boxed">
        <!-- Invoice -->
        <div class="block">
            <div class="block-header">
                <ul class="block-options">
                    <li>
                        <!-- Print Page functionality is initialized in App() -> uiHelperPrint() -->
                        <button type="button" onclick="App.initHelper('print-page');"><i class="si si-printer"></i> Imprimer</button>
                    </li>
                    <li>
                        <button type="button" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                    </li>
                    <li>
                        <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                    </li>
                </ul>
                <h3 class="block-title">FAC::<?= $fetch['id_projet']; ?></h3>
            </div>
            <div class="block-content block-content-narrow">
                <!-- Invoice Info -->
                <div class="h1 text-center push-30-t push-30 hidden-print">FACTURE</div>
                <hr class="hidden-print">
                <div class="row items-push-2x">
                    <!-- Company Info -->
                    <div class="col-xs-6 col-sm-4 col-lg-3">
                        <p class="h2 font-w400 push-5">ES-PC Inf</p>
                        <address>
                            56 rue Poulatre<br>
                            Le Mans<br>
                            Sarthe, 72 000<br>
                            <i class="si si-call-end"></i> +33673646126
                        </address>
                    </div>
                    <!-- END Company Info -->

                    <!-- Client Info -->
                    <div class="col-xs-6 col-sm-4 col-sm-offset-4 col-lg-3 col-lg-offset-6 text-right">
                        <p class="h4 font-w400 push-5">Lemaire Severine</p>
                        <address>
                            29 rue des Orangers<br>
                            Crozon<br>
                            Bretagne, 29160<br>
                            <i class="si si-call-end"></i> +33622773013
                        </address>
                    </div>
                    <!-- END Client Info -->
                </div>
                <!-- END Invoice Info -->

                <!-- Table -->
                <div class="table-responsive push-50">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th class="text-center" style="width: 50px;"></th>
                            <th>Description</th>
                            <th class="text-center" style="width: 100px;">Quantité</th>
                            <th class="text-right" style="width: 120px;">Heures</th>
                            <th class="text-right" style="width: 120px;">Prix</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $list_product = $site->bdd->query('SELECT * FROM p_facturate WHERE id_project = "'.$fetch['id_projet'].'"');
                        $list_product = $list_product->fetchAll();
                        foreach($list_product as $data){
                        ?>
                        <tr>
                            <td class="text-center">1</td>
                            <td>
                                <p class="font-w600 push-10"><?= $data['description'] ?></p>
                            </td>
                            <td class="text-center"><span class="badge badge-primary"><?= $data['quantity'] ?></span></td>
                            <td class="text-right"><?= $data['time_build'] ?>h</td>
                            <td class="text-right"><?= $data['price']; ?> €</td>
                        </tr>
                        <?php } ?>
                        <tr>
                            <td colspan="4" class="font-w600 text-right">Sous-Total</td>
                            <td class="text-right"><?= $fetch['price_total'] ?></td>
                        </tr>
                        <?php if($fetch['reduction'] > 0) { ?>
                            <tr>
                                <td colspan="4" class="font-w600 text-right">Reduction</td>
                                <td class="text-right"><?= $fetch['reduction']; ?> %</td>
                            </tr>
                            <tr class="active">
                                <td colspan="4" class="font-w700 text-right">Net à payer</td>
                                <td class="font-w700 text-right"><?= $avoir->avoir($fetch['price_total'], $fetch['reduction']) ?> €</td>
                            </tr>
                        <?php } else { ?>
                            <tr class="active">
                                <td colspan="4" class="font-w700 text-right">Net à payer</td>
                                <td class="font-w700 text-right"><?= $fetch['price_total']; ?> €</td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
                <!-- END Table -->

                <!-- Footer -->
                <hr class="hidden-print">
                <p>Echeance de paiement : <b>30 jours fin de mois</b></p>
                <p><i>Taux de penalité de retard : 100% et indemnité de 40% HT pour frais de recouvrement - Pas d'escompte pour réglement anticipé.</i></p>
                <!-- END Footer -->
            </div>
        </div>
        <!-- END Invoice -->
    </div>
    <!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>
<?php require 'inc/views/template_footer_end.php'; ?>
