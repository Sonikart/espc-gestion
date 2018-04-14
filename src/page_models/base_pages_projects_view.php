<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>

<!-- Page Header -->
<div class="bg-image" style="background-image: url('<?php echo $one->assets_folder; ?>/img/photos/photo28@2x.jpg');">
    <div class="content content-full bg-primary-op">
        <div class="row">
            <div class="col-xs-6">
                <h1 class="page-heading text-white">
                    ACME Inc <small class="hidden-xs"><span class="text-white-op">Web Design</span></small>
                </h1>
            </div>
            <div class="col-xs-6 text-right">
                <a class="btn btn-default" href="base_pages_projects_edit.php">
                    <i class="fa fa-pencil push-5-r"></i> Edit Project
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
            Project
        </li>
    </ol>
</div>
<!-- END Page Header -->

<!-- Page Content -->
<div class="content content-boxed">
    <div class="row">
        <div class="col-sm-5 col-lg-3">
            <!-- Collapsible Project Options (using Bootstrap collapse functionality) -->
            <button class="btn btn-block btn-primary visible-xs push" data-toggle="collapse" data-target="#project-nav" type="button">Options</button>
            <div class="collapse navbar-collapse remove-padding" id="project-nav">
                <!-- Tasks Info -->
                <div class="block">
                    <div class="block-header bg-gray-lighter">
                        <h3 class="block-title">Tasks</h3>
                    </div>
                    <div class="block-content">
                        <ul class="list-group push">
                            <li class="list-group-item">
                                <span class="js-task-badge badge badge-primary pull-right animated bounceIn"></span>
                                <i class="fa fa-fw fa-tasks push-5-r"></i> Active
                            </li>
                            <li class="list-group-item">
                                <span class="js-task-badge-starred badge badge-warning pull-right animated bounceIn"></span>
                                <i class="fa fa-fw fa-star push-5-r"></i> Starred
                            </li>
                            <li class="list-group-item">
                                <span class="js-task-badge-completed badge badge-success pull-right animated bounceIn"></span>
                                <i class="fa fa-fw fa-check push-5-r"></i> Completed
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- END Tasks Info -->

                <!-- People -->
                <div class="block">
                    <div class="block-header bg-gray-lighter">
                        <ul class="block-options">
                            <li class="dropdown">
                                <button type="button" data-toggle="dropdown">
                                    <i class="si si-settings"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li>
                                        <a tabindex="-1" href="javascript:void(0)">
                                            <i class="si si-eye pull-right"></i> Make Private
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">More</li>
                                    <li>
                                        <a tabindex="-1" href="javascript:void(0)">
                                            <i class="si si-pencil pull-right"></i> Edit People
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <h3 class="block-title">People</h3>
                    </div>
                    <div class="block-content">
                        <ul class="nav-users push">
                            <li>
                                <a href="base_pages_profile.php">
                                    <?php $one->get_avatar('', 'female'); ?>
                                    <i class="fa fa-circle text-success"></i> <?php $one->get_name('female'); echo "\n"; ?>
                                    <div class="font-w400 text-muted"><small>Web Designer</small></div>
                                </a>
                            </li>
                            <li>
                                <a href="base_pages_profile.php">
                                    <?php $one->get_avatar('', 'male'); ?>
                                    <i class="fa fa-circle text-success"></i> <?php $one->get_name('male'); echo "\n"; ?>
                                    <div class="font-w400 text-muted"><small>Web Developer</small></div>
                                </a>
                            </li>
                        </ul>
                        <form class="push" action="base_pages_projects_view.php" method="post" onsubmit="return false;">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Invite more people..">
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
                        <h3 class="block-title">Project</h3>
                    </div>
                    <div class="block-content">
                        <h4 class="push-5">ACME Inc</h4>
                        <p class="push-10 text-muted">
                            <em>Deadline: July 19, 2018</em>
                        </p>
                        <p>
                            Web Design and Development of ACME’s website. Brand identity as well as promo mobile app development for their projects.
                        </p>
                    </div>
                </div>
                <!-- END Project -->
            </div>
            <!-- END Collapsible Project Options -->
        </div>
        <div class="col-sm-7 col-lg-9">
            <!-- Tasks functionality (initialized in js/pages/base_pages_projects_view.js) -->
            <div class="js-tasks">
                <!-- Add task -->
                <form id="js-task-form" action="base_pages_projects_view.php" method="post">
                    <div class="input-group input-group-lg">
                        <input class="form-control" type="text" id="js-task-input" name="js-task-input" placeholder="Add task and press enter..">
                        <span class="input-group-addon">
                            <i class="fa fa-plus"></i>
                        </span>
                    </div>
                </form>
                <!-- END Add task -->

                <!-- Tasks List -->
                <h2 class="content-heading">Active</h2>
                <div class="js-task-list">
                    <!-- Task -->
                    <div class="js-task block block-rounded push-5 animated fadeIn" data-task-id="8" data-task-completed="false" data-task-starred="false">
                        <table class="block-table table-vcenter">
                            <tr>
                                <td class="text-center" style="width: 50px;">
                                    <label class="js-task-status css-input css-checkbox css-checkbox-primary css-checkbox-rounded">
                                        <input type="checkbox"><span></span>
                                    </label>
                                </td>
                                <td class="js-task-content font-w600">
                                    Create Logo
                                </td>
                                <td style="width: 100px;">
                                    <button class="js-task-star btn btn-link text-warning" type="button">
                                        <i class="fa fa-star-o"></i>
                                    </button>
                                    <button class="js-task-remove btn btn-link text-danger" type="button">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!-- END Task -->

                    <!-- Task -->
                    <div class="js-task block block-rounded push-5 animated fadeIn" data-task-id="7" data-task-completed="false" data-task-starred="false">
                        <table class="block-table table-vcenter">
                            <tr>
                                <td class="text-center" style="width: 50px;">
                                    <label class="js-task-status css-input css-checkbox css-checkbox-primary css-checkbox-rounded">
                                        <input type="checkbox"><span></span>
                                    </label>
                                </td>
                                <td class="js-task-content font-w600">
                                    Fix responsive issues
                                </td>
                                <td style="width: 100px;">
                                    <button class="js-task-star btn btn-link text-warning" type="button">
                                        <i class="fa fa-star-o"></i>
                                    </button>
                                    <button class="js-task-remove btn btn-link text-danger" type="button">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!-- END Task -->

                    <!-- Task -->
                    <div class="js-task block block-rounded push-5 animated fadeIn" data-task-id="6" data-task-completed="false" data-task-starred="false">
                        <table class="block-table table-vcenter">
                            <tr>
                                <td class="text-center" style="width: 50px;">
                                    <label class="js-task-status css-input css-checkbox css-checkbox-primary css-checkbox-rounded">
                                        <input type="checkbox"><span></span>
                                    </label>
                                </td>
                                <td class="js-task-content font-w600">
                                    Integrate custom CMS
                                </td>
                                <td style="width: 100px;">
                                    <button class="js-task-star btn btn-link text-warning" type="button">
                                        <i class="fa fa-star-o"></i>
                                    </button>
                                    <button class="js-task-remove btn btn-link text-danger" type="button">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!-- END Task -->
                </div>
                <!-- END Tasks List -->

                <!-- Starred Tasks List -->
                <h2 class="content-heading">Starred</h2>
                <div class="js-task-list-starred">
                    <!-- Task -->
                    <div class="js-task block block-rounded push-5 animated fadeIn" data-task-id="5" data-task-completed="false" data-task-starred="true">
                        <table class="block-table table-vcenter">
                            <tr>
                                <td class="text-center" style="width: 50px;">
                                    <label class="js-task-status css-input css-checkbox css-checkbox-primary css-checkbox-rounded">
                                        <input type="checkbox"><span></span>
                                    </label>
                                </td>
                                <td class="js-task-content font-w600">
                                    Refine color palette
                                </td>
                                <td style="width: 100px;">
                                    <button class="js-task-star btn btn-link text-warning" type="button">
                                        <i class="fa fa-star"></i>
                                    </button>
                                    <button class="js-task-remove btn btn-link text-danger" type="button">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!-- END Task -->

                    <!-- Task -->
                    <div class="js-task block block-rounded push-5 animated fadeIn" data-task-id="4" data-task-completed="false" data-task-starred="true">
                        <table class="block-table table-vcenter">
                            <tr>
                                <td class="text-center" style="width: 50px;">
                                    <label class="js-task-status css-input css-checkbox css-checkbox-primary css-checkbox-rounded">
                                        <input type="checkbox"><span></span>
                                    </label>
                                </td>
                                <td class="js-task-content font-w600">
                                    Create user registration flow
                                </td>
                                <td style="width: 100px;">
                                    <button class="js-task-star btn btn-link text-warning" type="button">
                                        <i class="fa fa-star"></i>
                                    </button>
                                    <button class="js-task-remove btn btn-link text-danger" type="button">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!-- END Task -->
                </div>
                <!-- END Starred Tasks List -->

                <!-- Tasks List Completed -->
                <h2 class="content-heading">Completed</h2>
                <div class="js-task-list-completed">
                    <!-- Completed Task -->
                    <div class="js-task block block-rounded push-5 animated fadeIn" data-task-id="3" data-task-completed="true" data-task-starred="false">
                        <table class="block-table table-vcenter bg-gray-lighter">
                            <tr>
                                <td class="text-center" style="width: 50px;">
                                    <label class="js-task-status css-input css-checkbox css-checkbox-primary css-checkbox-rounded">
                                        <input type="checkbox" checked><span></span>
                                    </label>
                                </td>
                                <td class="js-task-content font-w600">
                                    <del>Build a prototype</del>
                                </td>
                                <td style="width: 100px;">
                                    <button class="js-task-star btn btn-link text-warning" type="button">
                                        <i class="fa fa-star-o"></i>
                                    </button>
                                    <button class="js-task-remove btn btn-link text-danger" type="button">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!-- END Completed Task -->

                    <!-- Completed Task -->
                    <div class="js-task block block-rounded push-5 animated fadeIn" data-task-id="2" data-task-completed="true" data-task-starred="false">
                        <table class="block-table table-vcenter bg-gray-lighter">
                            <tr>
                                <td class="text-center" style="width: 50px;">
                                    <label class="js-task-status css-input css-checkbox css-checkbox-primary css-checkbox-rounded">
                                        <input type="checkbox" checked><span></span>
                                    </label>
                                </td>
                                <td class="js-task-content font-w600">
                                    <del>Prepare wireframes</del>
                                </td>
                                <td style="width: 100px;">
                                    <button class="js-task-star btn btn-link text-warning" type="button">
                                        <i class="fa fa-star-o"></i>
                                    </button>
                                    <button class="js-task-remove btn btn-link text-danger" type="button">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!-- END Completed Task -->

                    <!-- Completed Task -->
                    <div class="js-task block block-rounded push-5 animated fadeIn" data-task-id="1" data-task-completed="true" data-task-starred="false">
                        <table class="block-table table-vcenter bg-gray-lighter">
                            <tr>
                                <td class="text-center" style="width: 50px;">
                                    <label class="js-task-status css-input css-checkbox css-checkbox-primary css-checkbox-rounded">
                                        <input type="checkbox" checked><span></span>
                                    </label>
                                </td>
                                <td class="js-task-content font-w600">
                                    <del>Sign contract with client</del>
                                </td>
                                <td style="width: 100px;">
                                    <button class="js-task-star btn btn-link text-warning" type="button">
                                        <i class="fa fa-star-o"></i>
                                    </button>
                                    <button class="js-task-remove btn btn-link text-danger" type="button">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!-- END Completed Task -->
                </div>
                <!-- END Tasks List Completed -->
            </div>
            <!-- END Tasks -->
        </div>
    </div>
</div>
<!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>

<!-- Page JS Code -->
<script src="<?php echo $one->assets_folder; ?>/js/pages/base_pages_projects_view.js"></script>

<?php require 'inc/views/template_footer_end.php'; ?>