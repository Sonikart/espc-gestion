<?php require 'inc/config.php'; ?>
<?php require 'controllers/views_project.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>

<link rel="stylesheet" href="<?php echo $one->assets_folder; ?>/js/plugins/summernote/summernote.min.css">
<link rel="stylesheet" href="<?php echo $one->assets_folder; ?>/js/plugins/simplemde/simplemde.min.css">

<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>

<?php include 'views/description_project.php'; ?>
<?php include 'views/list_facturation_project.php'; ?>
<?php include 'views/tchat_project.php'; ?>
    <!-- Page Header -->
    <div class="bg-image" style="background-image: url('<?php echo $one->assets_folder; ?>/img/photos/photo28@2x.jpg');">
        <div class="content content-full">
            <div class="row">
                <div class="col-xs-6">
                    <h1 class="page-heading text-white">
                        <?= $data_p['titre']; ?> <small class="hidden-xs"><span class="text-white-op"><?= $data_p['lien'] ?></span></small>
                    </h1>
                </div>
                <div class="col-xs-6 text-right">
                    <?php if($data_p['etat'] == 1){ ?>
                        <button class="btn btn-default" data-toggle="modal" data-target="#modal-product" type="button">Produit Vendu</button>
                        <button onclick="window.location.href='facturate.php?id_project=<?= $_GET['view'] ?>'" class="btn btn-success">Generer le devis</button>
                    <?php } ?>
                    <button class="btn btn-info" data-toggle="modal" data-target="#modal-slideleft" type="button">Description</button>
                    <?php if($data_p['etat'] == '9'){ ?>
                        <a class="btn btn-success" href="view_project.php?view=<?= $data_p['id_projet']; ?>&validate=<?= $data_p['id_projet']; ?>">
                            <i class="fa fa-check push-5-r"></i> Valider le Projet
                        </a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="content content-mini bg-white">
        <ol class="breadcrumb push">
            <li>
                <a class="link-effect" href="project.php">Panneau de gestion</a>
            </li>
            <li>
                Projet : <?= $data_p['titre']; ?>
            </li>
        </ol>
    </div>
    <!-- END Page Header -->
    <!-- Page Content -->
    <div style="background-color: white; margin-top:25px; border-top:3px solid <?= $data_p['color']; ?>" class="content content-boxed">
        <div class="row">
            <div class="col-sm-5 col-lg-3">
                <!-- Collapsible Project Options (using Bootstrap collapse functionality) -->
                <button class="btn btn-block btn-primary visible-xs push" data-toggle="collapse" data-target="#project-nav" type="button">Options</button>
                <div class="collapse navbar-collapse remove-padding" id="project-nav">
                    <!-- Tasks Info -->
                    <?php if($data_p['etat'] != '9'){ ?>
                    <div class="block">
                        <div class="block-header bg-gray-lighter">
                            <h3 class="block-title">Taches</h3>
                        </div>
                        <div class="block-content">
                            <ul class="list-group push">
                                <li class="list-group-item">
                                    <span class="js-task-badge badge badge-primary pull-right animated bounceIn"></span>
                                    <i class="fa fa-fw fa-tasks push-5-r"></i> A faire
                                </li>
                                <li class="list-group-item">
                                    <span class="js-task-badge-completed badge badge-success pull-right animated bounceIn"></span>
                                    <i class="fa fa-fw fa-check push-5-r"></i> Terminé
                                </li>
                            </ul>
                        </div>
                    </div>
                    <?php } ?>
                    <!-- END Tasks Info -->

                    <!-- People -->
                    <div class="block">
                        <div class="block-header bg-gray-lighter">
                            <h3 class="block-title">Lié au Projet</h3>
                        </div>
                        <div class="block-content">
                            <ul class="nav-users push">
                                <?php
                                    $authorize = $site->bdd->query('SELECT * FROM p_authorize WHERE id_project = "'.$site->security($_GET['view']).'"');
                                    $authorize = $authorize->fetchAll();
                                    foreach($authorize as $list){
                                        $user = $site->bdd->query('SELECT * FROM utilisateurs WHERE email = "'.$list['email'].'"');
                                        $user = $user->fetch();
                                ?>
                                <li>
                                    <a href="base_pages_profile.php">
                                        <img style="height:40px; width: 40px; border-radius: 50%;" src="<?= $user['avatar']; ?>" alt="">
                                        <i class="fa fa-circle text-success"></i> <?= $user['nom'] .' '.$user['prenom'] ?>
                                        <div class="font-w400 text-muted"><small><?= $user['role']; ?></small></div>
                                    </a>
                                </li>
                                <?php } ?>
                            </ul>
                            <form class="push" action="base_pages_projects_view.php" method="post" onsubmit="return false;">
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="Ajouter un compte">
                                    <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END People -->

                    <!-- Project -->
                    <div class="block">
                        <div class="block-header bg-gray-lighter">
                            <ul class="block-options">
                                <li>
                                <span>
                                    <i class="fa fa-circle text-primary"></i>
                                </span>
                                </li>
                            </ul>
                            <h3 class="block-title">Description</h3>
                        </div>
                        <div class="block-content">
                            <h4 class="push-5"><?= $data_p['titre']; ?></h4>
                            <p class="push-10 text-muted">
                                <em>Livraison: <?= $data_p['date_livraison'] ?></em>
                            </p>
                            <p id="update_new_description">
                                <?= $data_p['description'] ?>
                            </p>
                        </div>
                    </div>
                    <!-- END Project -->
                </div>
                <!-- END Collapsible Project Options -->
            </div>
            <?php if($data_p['etat'] == '1'){ ?>
            <div class="col-sm-5 col-lg-5">
<!--            <div class="form-group">-->
<!--                <div class="alert alert-danger">Le projet est en attente de paiement</div>-->
<!--            </div>-->
            </div>
            <?php } ?>
            <?php if($data_p['etat'] != '9'){ ?>
            <div class="col-sm-7 col-lg-9">
                <!-- Tasks functionality (initialized in js/pages/base_pages_projects_view.js) -->
                <div class="js-tasks">
                    <!-- Add task -->
                    <form id="add_task">
                        <div class="input-group input-group-lg">
                            <input class="form-control" type="text" id="js-task-input" name="tasks" placeholder="Ajouter une tache a effectué">
                            <input type="hidden" name="slug" value="<?= $_GET['view']; ?>">
                            <span class="input-group-addon">
                            <i class="fa fa-plus"></i>
                        </span>
                        </div>
                    </form>
                    <!-- END Add task -->

                    <!-- Tasks List -->
                    <h2 class="content-heading">Liste des taches à effectué</h2>
                    <div class="js-task-list">
                        <!-- Task -->
                        <div class="js-task block block-rounded push-5 animated fadeIn">
                            <table id="list_tasks" class="block-table table-vcenter">
                                <?php
                                    $list_tasks = $site->bdd->query('SELECT * FROM tasks WHERE id_project = "'.$site->security($_GET['view']).'" AND etat = 0');
                                    $list_tasks = $list_tasks->fetchAll();
                                    foreach($list_tasks as $list){
                                ?>
                                <tr>
                                    <td class="js-task-content font-w600">
                                        <?= $list['content']; ?>
                                    </td>
                                    <td style="width: 100px;">
                                        <button onclick="window.location.href='view_project.php?view=<?= $list['id_project']; ?>&submit=<?= $list['id']; ?>'" class="js-task-remove btn btn-link text-danger" type="button">
                                            <i class="fa fa-check"></i>
                                        </button>
                                    </td>
                                </tr>
                                <?php } ?>
                            </table>
                        </div>
                        <!-- END Task -->
                    </div>
                    <!-- END Tasks List -->

                    <!-- Tasks List Completed -->
                    <h2 class="content-heading">Listes des taches effectué</h2>
                    <div class="js-task-list-completed">
                        <!-- Completed Task -->
                        <div class="js-task block block-rounded push-5 animated fadeIn">
                            <table class="block-table table-vcenter bg-gray-lighter">
                                <?php
                                    $list_tasks = $site->bdd->query('SELECT * FROM tasks WHERE id_project = "'.$site->security($_GET['view']).'" AND etat = 1');
                                    $list_tasks = $list_tasks->fetchAll();
                                    foreach($list_tasks as $data){
                                ?>
                                <tr>
                                    <td class="js-task-content font-w600">
                                        <del><?= $data['content']; ?></del>
                                    </td>
                                </tr>
                                <?php } ?>
                            </table>
                        </div>
                        <!-- END Completed Task -->
                    </div>
                    <!-- END Tasks List Completed -->
                </div>
                <!-- END Tasks -->
            </div>
            <?php } else { ?>
                <div class="col-sm-7 col-lg-9">
                    <div class="alert alert-info">
                        <i class="fa fa-info"></i> Le projet n'a pas encore été valider.
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>

    <!-- Page JS Code -->
    <script src="<?php echo $one->assets_folder; ?>/js/pages/base_pages_projects_view.js"></script>
    <script src="<?php echo $one->assets_folder; ?>/js/pages/base_ui_chat.js"></script>

<?php require 'inc/views/template_footer_end.php'; ?>
