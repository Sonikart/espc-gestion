<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>

<!-- Page Header -->
<div class="bg-image" style="background-image: url('<?php echo $one->assets_folder; ?>/img/photos/photo28@2x.jpg');">
    <div class="content content-full bg-primary-dark-op">
        <div class="row">
            <div class="col-xs-6">
                <h1 class="page-heading text-white">
                    Projects <small class="hidden-xs"><span class="text-white-op">Let’s Create!</span></small>
                </h1>
            </div>
            <div class="col-xs-6 text-right">
                <a class="btn btn-default" href="base_pages_projects_create.php">
                    <i class="fa fa-plus-circle text-success push-5-r"></i> New Project
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
    </ol>
</div>
<!-- END Page Header -->

<!-- Page Content -->
<div class="content content-boxed">
    <!-- Active Projects -->
    <h2 class="content-heading">Active (3)</h2>
    <div class="row">
        <div class="col-sm-6 col-lg-4">
            <!-- Project -->
            <div class="block block-rounded block-themed">
                <div class="block-header bg-primary">
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
                                    <a tabindex="-1" href="javascript:void(0)">
                                        <i class="si si-pencil pull-right"></i>
                                        Edit Project
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a tabindex="-1" href="javascript:void(0)">
                                        <i class="si si-trash text-danger pull-right"></i>
                                        Delete Project
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <h3 class="h4 font-w600 push-5">
                        <a class="text-white" href="base_pages_projects_view.php">example.com</a>
                    </h3>
                    <h4 class="h5 text-white-op">UX/UI Design</h4>
                </div>
                <div class="block-content text-center">
                    <div class="btn-group push">
                        <a class="btn btn-default js-tooltip" href="javascript:void(0)" title="Tasks">
                            <i class="fa fa-check-circle-o"></i>
                        </a>
                        <a class="btn btn-default js-tooltip" href="javascript:void(0)" title="Team Chat">
                            <i class="fa fa-comments-o"></i>
                        </a>
                        <a class="btn btn-default js-tooltip" href="javascript:void(0)" title="Project Files">
                            <i class="fa fa-files-o"></i>
                        </a>
                        <a class="btn btn-default js-tooltip" href="javascript:void(0)" title="Project Calendar">
                            <i class="fa fa-calendar-o"></i>
                        </a>
                        <a class="btn btn-default js-tooltip" href="javascript:void(0)" title="Invite People">
                            <i class="fa fa-user-plus"></i>
                        </a>
                    </div>
                    <ul class="list-inline push">
                        <li>
                            <a class="link-effect-opacity" href="base_pages_profile.php">
                                <?php $one->get_avatar(2, false, '32'); ?>
                            </a>
                        </li>
                        <li>
                            <a class="link-effect-opacity" href="base_pages_profile.php">
                                <?php $one->get_avatar(10, false, '32'); ?>
                            </a>
                        </li>
                        <li>
                            <a class="link-effect-opacity" href="base_pages_profile.php">
                                <?php $one->get_avatar(12, false, '32'); ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END Project -->
        </div>
        <div class="col-sm-6 col-lg-4">
            <!-- Project -->
            <div class="block block-rounded block-themed">
                <div class="block-header bg-amethyst">
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
                                    <a tabindex="-1" href="javascript:void(0)">
                                        <i class="si si-pencil pull-right"></i>
                                        Edit Project
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a tabindex="-1" href="javascript:void(0)">
                                        <i class="si si-trash text-danger pull-right"></i>
                                        Delete Project
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <h3 class="h4 font-w600 push-5">
                        <a class="text-white" href="base_pages_projects_view.php">TalkSocial</a>
                    </h3>
                    <h4 class="h5 text-white-op">Mobile app design</h4>
                </div>
                <div class="block-content text-center">
                    <div class="btn-group push">
                        <a class="btn btn-default js-tooltip" href="javascript:void(0)" title="Tasks">
                            <i class="fa fa-check-circle-o"></i>
                        </a>
                        <a class="btn btn-default js-tooltip" href="javascript:void(0)" title="Team Chat">
                            <i class="fa fa-comments-o"></i>
                        </a>
                        <a class="btn btn-default js-tooltip" href="javascript:void(0)" title="Project Files">
                            <i class="fa fa-files-o"></i>
                        </a>
                        <a class="btn btn-default js-tooltip" href="javascript:void(0)" title="Project Calendar">
                            <i class="fa fa-calendar-o"></i>
                        </a>
                        <a class="btn btn-default js-tooltip" href="javascript:void(0)" title="Invite People">
                            <i class="fa fa-user-plus"></i>
                        </a>
                    </div>
                    <ul class="list-inline push">
                        <li>
                            <a class="link-effect-opacity" href="base_pages_profile.php">
                                <?php $one->get_avatar(14, false, '32'); ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END Project -->
        </div>
        <div class="col-sm-6 col-lg-4">
            <!-- Project -->
            <div class="block block-rounded block-themed">
                <div class="block-header bg-modern">
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
                                    <a tabindex="-1" href="javascript:void(0)">
                                        <i class="si si-pencil pull-right"></i>
                                        Edit Project
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a tabindex="-1" href="javascript:void(0)">
                                        <i class="si si-trash text-danger pull-right"></i>
                                        Delete Project
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <h3 class="h4 font-w600 push-5">
                        <a class="text-white" href="base_pages_projects_view.php">NextBook</a>
                    </h3>
                    <h4 class="h5 text-white-op">Web app development</h4>
                </div>
                <div class="block-content text-center">
                    <div class="btn-group push">
                        <a class="btn btn-default js-tooltip" href="javascript:void(0)" title="Tasks">
                            <i class="fa fa-check-circle-o"></i>
                        </a>
                        <a class="btn btn-default js-tooltip" href="javascript:void(0)" title="Team Chat">
                            <i class="fa fa-comments-o"></i>
                        </a>
                        <a class="btn btn-default js-tooltip" href="javascript:void(0)" title="Project Files">
                            <i class="fa fa-files-o"></i>
                        </a>
                        <a class="btn btn-default js-tooltip" href="javascript:void(0)" title="Project Calendar">
                            <i class="fa fa-calendar-o"></i>
                        </a>
                        <a class="btn btn-default js-tooltip" href="javascript:void(0)" title="Invite People">
                            <i class="fa fa-user-plus"></i>
                        </a>
                    </div>
                    <ul class="list-inline push">
                        <li>
                            <a class="link-effect-opacity" href="base_pages_profile.php">
                                <?php $one->get_avatar(6, false, '32'); ?>
                            </a>
                        </li>
                        <li>
                            <a class="link-effect-opacity" href="base_pages_profile.php">
                                <?php $one->get_avatar(8, false, '32'); ?>
                            </a>
                        </li>
                        <li>
                            <a class="link-effect-opacity" href="base_pages_profile.php">
                                <?php $one->get_avatar(13, false, '32'); ?>
                            </a>
                        </li>
                        <li>
                            <a class="link-effect-opacity" href="base_pages_profile.php">
                                <?php $one->get_avatar(15, false, '32'); ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END Project -->
        </div>
    </div>
    <!-- END Active Projects -->

    <!-- Pending Projects -->
    <h2 class="content-heading">Pending (3)</h2>
    <div class="row">
        <div class="col-sm-6 col-lg-4">
            <!-- Project -->
            <div class="block block-rounded block-themed">
                <div class="block-header bg-city">
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
                                    <a tabindex="-1" href="javascript:void(0)">
                                        <i class="si si-pencil pull-right"></i>
                                        Edit Project
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a tabindex="-1" href="javascript:void(0)">
                                        <i class="si si-trash text-danger pull-right"></i>
                                        Delete Project
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <h3 class="h4 font-w600 push-5">
                        <a class="text-white" href="base_pages_projects_view.php">Ares Corporate</a>
                    </h3>
                    <h4 class="h5 text-white-op">Rocket Development</h4>
                </div>
                <div class="block-content text-center">
                    <div class="btn-group push">
                        <a class="btn btn-default js-tooltip" href="javascript:void(0)" title="Tasks">
                            <i class="fa fa-check-circle-o"></i>
                        </a>
                        <a class="btn btn-default js-tooltip" href="javascript:void(0)" title="Team Chat">
                            <i class="fa fa-comments-o"></i>
                        </a>
                        <a class="btn btn-default js-tooltip" href="javascript:void(0)" title="Project Files">
                            <i class="fa fa-files-o"></i>
                        </a>
                        <a class="btn btn-default js-tooltip" href="javascript:void(0)" title="Project Calendar">
                            <i class="fa fa-calendar-o"></i>
                        </a>
                        <a class="btn btn-default js-tooltip" href="javascript:void(0)" title="Invite People">
                            <i class="fa fa-user-plus"></i>
                        </a>
                    </div>
                    <ul class="list-inline push">
                        <li>
                            <a class="link-effect-opacity" href="base_pages_profile.php">
                                <?php $one->get_avatar(5, false, '32'); ?>
                            </a>
                        </li>
                        <li>
                            <a class="link-effect-opacity" href="base_pages_profile.php">
                                <?php $one->get_avatar(11, false, '32'); ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END Project -->
        </div>
        <div class="col-sm-6 col-lg-4">
            <!-- Project -->
            <div class="block block-rounded block-themed">
                <div class="block-header bg-modern">
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
                                    <a tabindex="-1" href="javascript:void(0)">
                                        <i class="si si-pencil pull-right"></i>
                                        Edit Project
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a tabindex="-1" href="javascript:void(0)">
                                        <i class="si si-trash text-danger pull-right"></i>
                                        Delete Project
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <h3 class="h4 font-w600 push-5">
                        <a class="text-white" href="base_pages_projects_view.php">Acme Inc</a>
                    </h3>
                    <h4 class="h5 text-white-op">Logo Design</h4>
                </div>
                <div class="block-content text-center">
                    <div class="btn-group push">
                        <a class="btn btn-default js-tooltip" href="javascript:void(0)" title="Tasks">
                            <i class="fa fa-check-circle-o"></i>
                        </a>
                        <a class="btn btn-default js-tooltip" href="javascript:void(0)" title="Team Chat">
                            <i class="fa fa-comments-o"></i>
                        </a>
                        <a class="btn btn-default js-tooltip" href="javascript:void(0)" title="Project Files">
                            <i class="fa fa-files-o"></i>
                        </a>
                        <a class="btn btn-default js-tooltip" href="javascript:void(0)" title="Project Calendar">
                            <i class="fa fa-calendar-o"></i>
                        </a>
                        <a class="btn btn-default js-tooltip" href="javascript:void(0)" title="Invite People">
                            <i class="fa fa-user-plus"></i>
                        </a>
                    </div>
                    <ul class="list-inline push">
                        <li>
                            <a class="link-effect-opacity" href="base_pages_profile.php">
                                <?php $one->get_avatar(9, false, '32'); ?>
                            </a>
                        </li>
                        <li>
                            <a class="link-effect-opacity" href="base_pages_profile.php">
                                <?php $one->get_avatar(1, false, '32'); ?>
                            </a>
                        </li>
                        <li>
                            <a class="link-effect-opacity" href="base_pages_profile.php">
                                <?php $one->get_avatar(16, false, '32'); ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END Project -->
        </div>
        <div class="col-sm-6 col-lg-4">
            <!-- Project -->
            <div class="block block-rounded block-themed">
                <div class="block-header bg-warning">
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
                                    <a tabindex="-1" href="javascript:void(0)">
                                        <i class="si si-pencil pull-right"></i>
                                        Edit Project
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a tabindex="-1" href="javascript:void(0)">
                                        <i class="si si-trash text-danger pull-right"></i>
                                        Delete Project
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <h3 class="h4 font-w600 push-5">
                        <a class="text-white" href="base_pages_projects_view.php">Dev Meetup</a>
                    </h3>
                    <h4 class="h5 text-white-op">Management</h4>
                </div>
                <div class="block-content text-center">
                    <div class="btn-group push">
                        <a class="btn btn-default js-tooltip" href="javascript:void(0)" title="Tasks">
                            <i class="fa fa-check-circle-o"></i>
                        </a>
                        <a class="btn btn-default js-tooltip" href="javascript:void(0)" title="Team Chat">
                            <i class="fa fa-comments-o"></i>
                        </a>
                        <a class="btn btn-default js-tooltip" href="javascript:void(0)" title="Project Files">
                            <i class="fa fa-files-o"></i>
                        </a>
                        <a class="btn btn-default js-tooltip" href="javascript:void(0)" title="Project Calendar">
                            <i class="fa fa-calendar-o"></i>
                        </a>
                        <a class="btn btn-default js-tooltip" href="javascript:void(0)" title="Invite People">
                            <i class="fa fa-user-plus"></i>
                        </a>
                    </div>
                    <ul class="list-inline push">
                        <li>
                            <a class="link-effect-opacity" href="base_pages_profile.php">
                                <?php $one->get_avatar(2, false, '32'); ?>
                            </a>
                        </li>
                        <li>
                            <a class="link-effect-opacity" href="base_pages_profile.php">
                                <?php $one->get_avatar(7, false, '32'); ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END Project -->
        </div>
    </div>
    <!-- END Pending Projects -->

    <!-- Archived Projects -->
    <h2 class="content-heading">Archived (6)</h2>
    <div class="row">
        <div class="col-sm-6 col-lg-4">
            <!-- Project -->
            <div class="block block-rounded block-themed">
                <div class="block-header bg-smooth">
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
                                    <a tabindex="-1" href="javascript:void(0)">
                                        <i class="si si-pencil pull-right"></i>
                                        Edit Project
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a tabindex="-1" href="javascript:void(0)">
                                        <i class="si si-trash text-danger pull-right"></i>
                                        Delete Project
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <h3 class="h4 font-w600 push-5">
                        <a class="text-white" href="base_pages_projects_view.php">Inspired Inc</a>
                    </h3>
                    <h4 class="h5 text-white-op">Development</h4>
                </div>
                <div class="block-content text-center">
                    <div class="btn-group push">
                        <a class="btn btn-default js-tooltip" href="javascript:void(0)" title="Tasks">
                            <i class="fa fa-check-circle-o"></i>
                        </a>
                        <a class="btn btn-default js-tooltip" href="javascript:void(0)" title="Team Chat">
                            <i class="fa fa-comments-o"></i>
                        </a>
                        <a class="btn btn-default js-tooltip" href="javascript:void(0)" title="Project Files">
                            <i class="fa fa-files-o"></i>
                        </a>
                        <a class="btn btn-default js-tooltip" href="javascript:void(0)" title="Project Calendar">
                            <i class="fa fa-calendar-o"></i>
                        </a>
                        <a class="btn btn-default js-tooltip" href="javascript:void(0)" title="Invite People">
                            <i class="fa fa-user-plus"></i>
                        </a>
                    </div>
                    <ul class="list-inline push">
                        <li>
                            <a class="link-effect-opacity" href="base_pages_profile.php">
                                <?php $one->get_avatar(5, false, '32'); ?>
                            </a>
                        </li>
                        <li>
                            <a class="link-effect-opacity" href="base_pages_profile.php">
                                <?php $one->get_avatar(11, false, '32'); ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END Project -->
        </div>
        <div class="col-sm-6 col-lg-4">
            <!-- Project -->
            <div class="block block-rounded block-themed">
                <div class="block-header bg-flat">
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
                                    <a tabindex="-1" href="javascript:void(0)">
                                        <i class="si si-pencil pull-right"></i>
                                        Edit Project
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a tabindex="-1" href="javascript:void(0)">
                                        <i class="si si-trash text-danger pull-right"></i>
                                        Delete Project
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <h3 class="h4 font-w600 push-5">
                        <a class="text-white" href="base_pages_projects_view.php">Ares Inc</a>
                    </h3>
                    <h4 class="h5 text-white-op">Web Design</h4>
                </div>
                <div class="block-content text-center">
                    <div class="btn-group push">
                        <a class="btn btn-default js-tooltip" href="javascript:void(0)" title="Tasks">
                            <i class="fa fa-check-circle-o"></i>
                        </a>
                        <a class="btn btn-default js-tooltip" href="javascript:void(0)" title="Team Chat">
                            <i class="fa fa-comments-o"></i>
                        </a>
                        <a class="btn btn-default js-tooltip" href="javascript:void(0)" title="Project Files">
                            <i class="fa fa-files-o"></i>
                        </a>
                        <a class="btn btn-default js-tooltip" href="javascript:void(0)" title="Project Calendar">
                            <i class="fa fa-calendar-o"></i>
                        </a>
                        <a class="btn btn-default js-tooltip" href="javascript:void(0)" title="Invite People">
                            <i class="fa fa-user-plus"></i>
                        </a>
                    </div>
                    <ul class="list-inline push">
                        <li>
                            <a class="link-effect-opacity" href="base_pages_profile.php">
                                <?php $one->get_avatar(11, false, '32'); ?>
                            </a>
                        </li>
                        <li>
                            <a class="link-effect-opacity" href="base_pages_profile.php">
                                <?php $one->get_avatar(4, false, '32'); ?>
                            </a>
                        </li>
                        <li>
                            <a class="link-effect-opacity" href="base_pages_profile.php">
                                <?php $one->get_avatar(15, false, '32'); ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END Project -->
        </div>
        <div class="col-sm-6 col-lg-4">
            <!-- Project -->
            <div class="block block-rounded block-themed">
                <div class="block-header bg-info">
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
                                    <a tabindex="-1" href="javascript:void(0)">
                                        <i class="si si-pencil pull-right"></i>
                                        Edit Project
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a tabindex="-1" href="javascript:void(0)">
                                        <i class="si si-trash text-danger pull-right"></i>
                                        Delete Project
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <h3 class="h4 font-w600 push-5">
                        <a class="text-white" href="base_pages_projects_view.php">Store LTD</a>
                    </h3>
                    <h4 class="h5 text-white-op">eShop</h4>
                </div>
                <div class="block-content text-center">
                    <div class="btn-group push">
                        <a class="btn btn-default js-tooltip" href="javascript:void(0)" title="Tasks">
                            <i class="fa fa-check-circle-o"></i>
                        </a>
                        <a class="btn btn-default js-tooltip" href="javascript:void(0)" title="Team Chat">
                            <i class="fa fa-comments-o"></i>
                        </a>
                        <a class="btn btn-default js-tooltip" href="javascript:void(0)" title="Project Files">
                            <i class="fa fa-files-o"></i>
                        </a>
                        <a class="btn btn-default js-tooltip" href="javascript:void(0)" title="Project Calendar">
                            <i class="fa fa-calendar-o"></i>
                        </a>
                        <a class="btn btn-default js-tooltip" href="javascript:void(0)" title="Invite People">
                            <i class="fa fa-user-plus"></i>
                        </a>
                    </div>
                    <ul class="list-inline push">
                        <li>
                            <a class="link-effect-opacity" href="base_pages_profile.php">
                                <?php $one->get_avatar(3, false, '32'); ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END Project -->
        </div>
        <div class="col-sm-6 col-lg-4">
            <!-- Project -->
            <div class="block block-rounded block-themed">
                <div class="block-header bg-default">
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
                                    <a tabindex="-1" href="javascript:void(0)">
                                        <i class="si si-pencil pull-right"></i>
                                        Edit Project
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a tabindex="-1" href="javascript:void(0)">
                                        <i class="si si-trash text-danger pull-right"></i>
                                        Delete Project
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <h3 class="h4 font-w600 push-5">
                        <a class="text-white" href="base_pages_projects_view.php">Social Inc</a>
                    </h3>
                    <h4 class="h5 text-white-op">App Development</h4>
                </div>
                <div class="block-content text-center">
                    <div class="btn-group push">
                        <a class="btn btn-default js-tooltip" href="javascript:void(0)" title="Tasks">
                            <i class="fa fa-check-circle-o"></i>
                        </a>
                        <a class="btn btn-default js-tooltip" href="javascript:void(0)" title="Team Chat">
                            <i class="fa fa-comments-o"></i>
                        </a>
                        <a class="btn btn-default js-tooltip" href="javascript:void(0)" title="Project Files">
                            <i class="fa fa-files-o"></i>
                        </a>
                        <a class="btn btn-default js-tooltip" href="javascript:void(0)" title="Project Calendar">
                            <i class="fa fa-calendar-o"></i>
                        </a>
                        <a class="btn btn-default js-tooltip" href="javascript:void(0)" title="Invite People">
                            <i class="fa fa-user-plus"></i>
                        </a>
                    </div>
                    <ul class="list-inline push">
                        <li>
                            <a class="link-effect-opacity" href="base_pages_profile.php">
                                <?php $one->get_avatar(7, false, '32'); ?>
                            </a>
                        </li>
                        <li>
                            <a class="link-effect-opacity" href="base_pages_profile.php">
                                <?php $one->get_avatar(16, false, '32'); ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END Project -->
        </div>
        <div class="col-sm-6 col-lg-4">
            <!-- Project -->
            <div class="block block-rounded block-themed">
                <div class="block-header bg-amethyst">
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
                                    <a tabindex="-1" href="javascript:void(0)">
                                        <i class="si si-pencil pull-right"></i>
                                        Edit Project
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a tabindex="-1" href="javascript:void(0)">
                                        <i class="si si-trash text-danger pull-right"></i>
                                        Delete Project
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <h3 class="h4 font-w600 push-5">
                        <a class="text-white" href="base_pages_projects_view.php">Market LTD</a>
                    </h3>
                    <h4 class="h5 text-white-op">Logo Design</h4>
                </div>
                <div class="block-content text-center">
                    <div class="btn-group push">
                        <a class="btn btn-default js-tooltip" href="javascript:void(0)" title="Tasks">
                            <i class="fa fa-check-circle-o"></i>
                        </a>
                        <a class="btn btn-default js-tooltip" href="javascript:void(0)" title="Team Chat">
                            <i class="fa fa-comments-o"></i>
                        </a>
                        <a class="btn btn-default js-tooltip" href="javascript:void(0)" title="Project Files">
                            <i class="fa fa-files-o"></i>
                        </a>
                        <a class="btn btn-default js-tooltip" href="javascript:void(0)" title="Project Calendar">
                            <i class="fa fa-calendar-o"></i>
                        </a>
                        <a class="btn btn-default js-tooltip" href="javascript:void(0)" title="Invite People">
                            <i class="fa fa-user-plus"></i>
                        </a>
                    </div>
                    <ul class="list-inline push">
                        <li>
                            <a class="link-effect-opacity" href="base_pages_profile.php">
                                <?php $one->get_avatar(3, false, '32'); ?>
                            </a>
                        </li>
                        <li>
                            <a class="link-effect-opacity" href="base_pages_profile.php">
                                <?php $one->get_avatar(4, false, '32'); ?>
                            </a>
                        </li>
                        <li>
                            <a class="link-effect-opacity" href="base_pages_profile.php">
                                <?php $one->get_avatar(13, false, '32'); ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END Project -->
        </div>
        <div class="col-sm-6 col-lg-4">
            <!-- Project -->
            <div class="block block-rounded block-themed">
                <div class="block-header bg-danger">
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
                                    <a tabindex="-1" href="javascript:void(0)">
                                        <i class="si si-pencil pull-right"></i>
                                        Edit Project
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a tabindex="-1" href="javascript:void(0)">
                                        <i class="si si-trash text-danger pull-right"></i>
                                        Delete Project
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <h3 class="h4 font-w600 push-5">
                        <a class="text-white" href="base_pages_projects_view.php">Relic Inc</a>
                    </h3>
                    <h4 class="h5 text-white-op">Identity</h4>
                </div>
                <div class="block-content text-center">
                    <div class="btn-group push">
                        <a class="btn btn-default js-tooltip" href="javascript:void(0)" title="Tasks">
                            <i class="fa fa-check-circle-o"></i>
                        </a>
                        <a class="btn btn-default js-tooltip" href="javascript:void(0)" title="Team Chat">
                            <i class="fa fa-comments-o"></i>
                        </a>
                        <a class="btn btn-default js-tooltip" href="javascript:void(0)" title="Project Files">
                            <i class="fa fa-files-o"></i>
                        </a>
                        <a class="btn btn-default js-tooltip" href="javascript:void(0)" title="Project Calendar">
                            <i class="fa fa-calendar-o"></i>
                        </a>
                        <a class="btn btn-default js-tooltip" href="javascript:void(0)" title="Invite People">
                            <i class="fa fa-user-plus"></i>
                        </a>
                    </div>
                    <ul class="list-inline push">
                        <li>
                            <a class="link-effect-opacity" href="base_pages_profile.php">
                                <?php $one->get_avatar(11, false, '32'); ?>
                            </a>
                        </li>
                        <li>
                            <a class="link-effect-opacity" href="base_pages_profile.php">
                                <?php $one->get_avatar(4, false, '32'); ?>
                            </a>
                        </li>
                        <li>
                            <a class="link-effect-opacity" href="base_pages_profile.php">
                                <?php $one->get_avatar(15, false, '32'); ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END Project -->
        </div>
    </div>
    <!-- END Archived Projects -->
</div>
<!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>
<?php require 'inc/views/template_footer_end.php'; ?>