<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'controllers/edit_user.php'; ?>

<link rel="stylesheet" href="<?php echo $one->assets_folder; ?>/js/plugins/slick/slick.min.css">
<link rel="stylesheet" href="<?php echo $one->assets_folder; ?>/js/plugins/slick/slick-theme.min.css">

<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>
<!-- Page content -->
<div class="content">
    <div class="row">
        <!--    Gestionnaire d'alerte    -->
        <div class="col-md-12">
            <?php if(isset($_GET['edit'])){ ?>
                    <h3>Modification de <i><?= $edit__step['email']; ?></i></h3>
                    <p>Vous êtes actuellement en train de mofifier un utilisateur. <span class="badge badge-danger">Modification</span></p>
            <?php } else { ?>
                    <h3>Gestion des utilisateurs</h3>
                    <p>Création et Edition des utilisateurs inscrit sur le systême. <span class="badge badge-info">New</span></p>
            <?php } ?>
            <?php include 'controllers/alerte.php'; ?>
            <?php include 'controllers/alerte_modals.php'; ?>
            <?php if($site->get_config('maintenance') == '1'){ ?>
                <?php
                    $information_maintenance = $site->bdd->query('SELECT * FROM maintenance WHERE id = 1');
                    $information_maintenance = $information_maintenance->fetch();
                ?>
                <div id="maintenance_on" class="alert alert-info">
                    Une maintenance est en cours !<br><br>
                    Durée : <b><?= $information_maintenance['estimation']; ?></b><br>
                    Raison : <b><?= $information_maintenance['reason']; ?></b>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <!-- Programmation maintenance -->
            <form id="update_information_maintenance" class="form-horizontal">
                <div class="block">
                    <div style="color: white;" class="block-header bg-info">
                        <h3 class="block-title">Programmer une maintenance</h3>
                    </div>
                    <div class="block-content block-content-narrow">
                        <div class="form-group">
                            <label class="col-xs-12" for="blocks-username">Estimation de la durée de la maintenance :</label>
                            <div class="col-xs-12">
                                <input class="form-control" type="text" id="blocks-username" name="maintenance_estimation" value="<?= $site->get_maintenance('estimation'); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-12" for="blocks-password">Raison de la maintenance :</label>
                            <div class="col-xs-12">
                                <input class="form-control" type="text" id="blocks-password" name="maintenance_reason" value="<?= $site->get_maintenance('reason'); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <button type="submit" class="btn btn-dark"><i class="fa fa-check"></i> Appliquer</button>
                                <button id="purge_information_maintenance" type="button" class="btn btn-dark"><i class="fa fa-times"></i> Purger</button>
                                <?php if($site->get_config('maintenance') == '1'){ ?>
                                    <button type="button" id="disabled_maintenance" class="btn btn-danger"><i class="fa fa-power-off"></i> Desactiver la maintenance</button>
                                    <button style="display: none;" type="button" id="activate_maintenance" class="btn btn-primary"><i class="fa fa-power-off"></i> Activer la maintenance</button>
                                <?php } else { ?>
                                    <button type="button" id="activate_maintenance" class="btn btn-primary"><i class="fa fa-power-off"></i> Activer la maintenance</button>
                                    <button style="display: none;" type="button" id="disabled_maintenance" class="btn btn-danger"><i class="fa fa-power-off"></i> Desactiver la maintenance</button>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <?php if(isset($_GET['edit'])){ ?>
            <!-- Formulaire Edition Utilisateurs -->
            <div class="block block-themed">
                <div class="block-header bg-danger">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                        <li>
                            <button type="button" data-toggle="block-option" data-action="content_toggle"><i class="si si-arrow-up"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Modification : <?= $edit__step['nom'] .' '.$edit__step['prenom'] ?></h3>
                </div>
                <div class="block-content">
                    <form method="POST" class="form-horizontal push-10-t push-10">
                        <div class="form-group">
                            <div class="col-xs-6">
                                <div class="form-material">
                                    <input class="form-control" type="text" id="register5-firstname" name="nom" value="<?= $edit__step['nom'] ?>">
                                    <label for="register5-firstname">Nom</label>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-material">
                                    <input class="form-control" type="text" id="register5-lastname" name="prenom" value="<?= $edit__step['prenom'] ?>">
                                    <label for="register5-lastname">Prénom</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-material input-group">
                                    <input class="form-control" type="text" id="register5-account" name="company" value="<?= $edit__step['company'] ?>">
                                    <label for="register5-account">Site Internet / Compagnie</label>
                                    <span class="input-group-addon"><?= $edit__step['company'] ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-material input-group">
                                    <input class="form-control" type="email" id="register5-email" name="email" value="<?= $edit__step['email'] ?>">
                                    <label for="register5-email">Adresse Email</label>
                                    <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-material input-group">
                                    <input class="form-control" type="password" id="register5-password" name="password" placeholder="Nouveau mot de passe">
                                    <label for="register5-password">Mot de passe</label>
                                    <span class="input-group-addon"><i class="fa fa-asterisk"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-material input-group">
                                    <input class="form-control" type="password" id="register5-password2" name="re-password" placeholder="Confirmer le nouveau mot de passe">
                                    <label for="register5-password2">Repetez le mot de passe</label>
                                    <span class="input-group-addon"><i class="fa fa-asterisk"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-material">
                                    <input class="form-control" placeholder="<?= $edit__step['token'] ?>" type="text" id="material-disabled" name="material-disabled" disabled="">
                                    <label for="material-disabled">Token d'Authentification <span class="badge badge-<?php if($check_token['active'] == 1){ echo 'success'; } else { echo 'danger'; } ?>"><?php if($check_token['active'] == 1){ echo 'Actif'; } else { echo "Desactivé"; } ?></span></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <button class="btn btn-success" name="update_user" type="submit"><i class="fa fa-check push-5-r"></i> Appliquer</button>
                                <button type="button" onclick="window.location.href='users.php'" class="btn btn-danger"><i class="fa fa-arrow-left push-5-r"></i> Fermer</button>
                                <?php if($check_token['active'] == 1){ ?>
                                    <button type="button" onclick="window.location.href='users.php?edit=<?= $_GET['edit'] ?>&disabled=<?= $check_token['id'] ?>'" class="btn btn-dark"><i class="fa fa-times push-5-r"></i> Desactiver le Token</button>
                                <?php } else { ?>
                                    <button type="button" onclick="window.location.href='users.php?edit=<?= $_GET['edit'] ?>&actived=<?= $check_token['id'] ?>'" class="btn btn-dark"><i class="fa fa-times push-5-r"></i> Activer le Token</button>
                                <?php } ?>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <?php } else { ?>
            <!-- Formulaire Ajout utilisateurs -->
            <div class="block block-themed">
                <div class="block-header bg-info">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                        <li>
                            <button type="button" data-toggle="block-option" data-action="content_toggle"><i class="si si-arrow-up"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Crée un utilisateur</h3>
                </div>
                <div class="block-content">
                    <form id="user-register" class="form-horizontal push-10-t push-10">
                        <div class="form-group">
                            <div class="col-xs-6">
                                <div class="form-material">
                                    <input class="form-control" type="text" id="register5-firstname" name="nom" placeholder="Nom">
                                    <label for="register5-firstname">Nom</label>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-material">
                                    <input class="form-control" type="text" id="register5-lastname" name="prenom" placeholder="Prénom">
                                    <label for="register5-lastname">Prénom</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-material input-group">
                                    <input class="form-control" type="text" id="register5-account" name="company" placeholder="Site internet ou Compagnie">
                                    <label for="register5-account">Site Internet / Compagnie</label>
                                    <span class="input-group-addon">http://exemple.com</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-material input-group">
                                    <input class="form-control" type="email" id="register5-email" name="email" placeholder="Adresse Email">
                                    <label for="register5-email">Email</label>
                                    <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-material input-group">
                                    <input class="form-control" type="password" id="register5-password" name="password" placeholder="Mot de passe">
                                    <label for="register5-password">Mot de passe</label>
                                    <span class="input-group-addon"><i class="fa fa-asterisk"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-material input-group">
                                    <input class="form-control" type="password" id="register5-password2" name="re-password" placeholder="Confirmez le mot de passe">
                                    <label for="register5-password2">Repetez le mot de passe</label>
                                    <span class="input-group-addon"><i class="fa fa-asterisk"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <button class="btn btn-success" type="submit"><i class="fa fa-plus push-5-r"></i> Appliquer</button>
                                <button id="clear__input" type="button" class="btn btn-dark"><i class="fa fa-file push-5-r"></i> Effacer les champs</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <?php } ?>
        </div>
        <div class="col-md-6">
            <!--    Liste des utilisateurs    -->
            <table id="list_user" style="background-color: white;" class="table table-striped table-borderless table-header-bg">
                <thead>
                <tr>
                    <th class="text-center" style="width: 50px;">#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Company</th>
                    <th class="hidden-xs" style="width: 15%;">Access</th>
                    <th class="text-center" style="width: 100px;">Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $user_inscrit = $site->bdd->query('SELECT * FROM utilisateurs');
                    $user_inscrit = $user_inscrit->fetchAll();
                    foreach($user_inscrit as $data__user){
                ?>
                <tr>
                    <td class="text-center"><?= $data__user['id'] ?></td>
                    <td><?= $data__user['nom'] .' '. $data__user['prenom'] ?></td>
                    <td><?= $data__user['email'] ?></td>
                    <td><b><?= $data__user['company'] ?></b></td>
                    <td class="hidden-xs">
                        <span class="label label-primary"><?= $data__user['role']; ?></span>
                    </td>
                    <td class="text-center">
                        <div class="btn-group">
                            <button onclick="window.location.href='?edit=<?= $data__user['id_membre'] ?>'" class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="Modifier"><i class="fa fa-pencil"></i></button>
                            <button onclick="window.location.href='?delete_user=<?= $data__user['id_membre']; ?>'" class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="Supprimer"><i class="fa fa-times"></i></button>
                        </div>
                    </td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
            <!--    Liste des clef d'authentification    -->
            <div class="row">
                <div class="col-lg-12">
                    <div style="border-top:5px solid #74b9ff;" class="block">
                        <div class="block-header">
                            <h3 class="block-title">Liste des clef d'Authentification</h3>
                        </div>
                        <div class="block-content">
                            <table class="table table-borderless">
                                <thead>
                                <tr>
                                    <th>Token</th>
                                    <th class="hidden-xs" style="width: 80%;">Etat</th>
                                    <th class="text-center" style="width: 100px;">Desactiver</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $list_clef = $site->bdd->query('SELECT * FROM token_access');
                                    $list_clef = $list_clef->fetchAll();
                                    foreach($list_clef as $list){
                                ?>
                                <tr class="<?php if($list['active'] == 1){ echo 'success'; } else { echo 'danger'; } ?>">
                                    <td class="text-center"><?= $list['id']; ?></td>
                                    <td><?= $list['token']; ?></td>
                                    <td class="hidden-xs">
                                        <?php if($list['active'] == 1){ ?>
                                        <span id="hover__span" onclick="window.location.href='?disabled=<?= $list['id']; ?>'" class="label label-danger hover">Desactiver</span>
                                        <?php } else { ?>
                                            <span id="hover__span" onclick="window.location.href='?actived=<?= $list['id']; ?>'" class="label label-success hover">Activer</span>
                                        <?php } ?>
                                    </td>
                                </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
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
<!-- <script src="<?php echo $one->assets_folder; ?>/js/pages/base_pages_dashboard.js"></script>-->
<script>
    jQuery(function(){
        // Init page helpers (Slick Slider plugin)
        App.initHelpers('slick');
    });
</script>
<?php require 'inc/views/template_footer_end.php'; ?>
