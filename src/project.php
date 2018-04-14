<?php require 'inc/config.php'; ?>
<?php require 'controllers/edit_project.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>


    <!-- Page Header -->
    <div class="bg-image" style="background-image: url('<?php echo $one->assets_folder; ?>/img/photos/photo28@2x.jpg');">
        <div class="content content-full bg-primary-dark-op">
            <div class="row">
                <div class="col-xs-6">
                    <h1 class="page-heading text-white">
                        Liste <small class="hidden-xs"><span class="text-white-op"> des projets associé a ES-PC Informatique</span></small>
                    </h1>
                </div>
                <div class="col-xs-6 text-right">
                    <a class="btn btn-default" href="create_project.php">
                        <i class="fa fa-plus-circle text-success push-5-r"></i> Crée un projet
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="content content-mini bg-white">
        <ol class="breadcrumb push">
            <li>
                <a class="link-effect" href="base_pages_projects_dashboard.php">Panneau de configuration</a>
            </li>
        </ol>
    </div>
    <!-- END Page Header -->

    <!-- Page Content -->
    <div class="content content-boxed">
        <!-- Active Projects -->
        <h2 class="content-heading">Nombre de projet (<?= $site->count('p_project'); ?>)</h2>
        <div class="row">
            <?php
                $list_user = $site->bdd->query('SELECT * FROM p_project');
                $list_user = $list_user->fetchAll();
                foreach($list_user as $data){
                    require 'controllers/etat_project.php';
            ?>
            <div class="col-sm-6 col-lg-4">
                <!-- List des Project -->
                <div class="block block-rounded block-themed">
                    <div class="block-header" style="background-color: <?= $data['color']; ?>;">
                        <ul class="block-options">
                            <li>
                                <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                            </li>
                            <li class="dropdown">
                                <button type="button" data-toggle="dropdown"><i class="si si-settings"></i></button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li>
                                        <a tabindex="-1" href="#">
                                            <i class="si si-pencil pull-right"></i>
                                            Editer le projet
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="?delete_project=<?= $data['id_projet']; ?>">
                                            <i class="si si-trash text-danger pull-right"></i>
                                            Supprimer le projet
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <h3 class="h3 font-w600 push-5">
                            <a class="text-white" href="view_project.php?view=<?= $data['id_projet']; ?>"><?= $data['titre']; ?></a>
                        </h3>
                        <h4 class="h4 text-white-op"><?= $data['lien']; ?></h4>
                        <h5 class="h5 text-white-op">Date livraison : <?= $data['date_livraison']; ?></h5>
                    </div>
                    <div class="block-content">
                        <div class="btn-group push">
                            <li>Tasks : <b><?= $data['tasks'] ?></b></li>
                            <li>Prix : <b><?= $data['price_total'] ?></b></li>
                            <li>Client : <b><?= $data['client'] ?></b></li>
                        </div>

                        <ul class="list-inline push text-center">
                            <li>
                                <a class="link-effect-opacity" href="base_pages_profile.php">
                                    <img style="width:30px; height:30px; border-radius:50%;" src="<?= $data__info['avatar']; ?>" alt="">
                                </a>
                            </li>
                        </ul>
                        <div class="etat__project">
                            <div class="form-group">
                                <p>
                                    <span class="badge badge-<?= $color_etat; ?>"><?= $etat; ?></span><br/>
                                </p>
                            </div>
                        </div>
                        <div class="action__project">
                            <div class="form-group">
                                <button class="btn btn-sm btn-primary">Tasks</button>
                                <button class="btn btn-sm btn-success">Informations</button>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- END Project -->
            </div>
            <?php } ?>
        </div>
        <!-- END Active Projects -->
    </div>
    <!-- END Page Content -->
<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>
<?php require 'inc/views/template_footer_end.php'; ?>
