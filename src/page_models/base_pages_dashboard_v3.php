<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>

<!-- Page Content -->
<div class="content content-boxed">
    <!-- Page Header -->
    <div class="bg-image overflow-hidden push" style="background-image: url('<?php echo $one->assets_folder; ?>/img/photos/photo36@2x.jpg');">
        <div class="bg-black-op">
            <div class="content content-full text-center">
                <h1 class="h1 font-w700 text-white animated fadeInDown push-50-t push-5">Dashboard</h1>
                <h2 class="h3 font-w600 text-white-op animated fadeInDown">Welcome to your personal space.</h2>
            </div>
        </div>
    </div>
    <!-- END Page Header -->

    <!-- Stats -->
    <div class="row">
        <div class="col-xs-6 col-lg-3">
            <a class="block block-link-hover1" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix">
                    <div class="pull-right push-15-t push-15">
                        <i class="fa fa-users fa-2x text-primary"></i>
                    </div>
                    <div class="h2 text-primary" data-toggle="countTo" data-to="36300"></div>
                    <div class="text-uppercase font-w600 font-s12 text-muted">Users</div>
                </div>
            </a>
        </div>
        <div class="col-xs-6 col-lg-3">
            <a class="block block-link-hover1" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix">
                    <div class="pull-right push-15-t push-15">
                        <i class="fa fa-briefcase fa-2x text-smooth"></i>
                    </div>
                    <div class="h2 text-smooth" data-toggle="countTo" data-to="360"></div>
                    <div class="text-uppercase font-w600 font-s12 text-muted">Projects</div>
                </div>
            </a>
        </div>
        <div class="col-xs-6 col-lg-3">
            <a class="block block-link-hover1" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix">
                    <div class="pull-right push-15-t push-15">
                        <i class="fa fa-line-chart fa-2x text-success"></i>
                    </div>
                    <div class="h2 text-success" data-toggle="countTo" data-to="760" data-before="$"></div>
                    <div class="text-uppercase font-w600 font-s12 text-muted">Earnings</div>
                </div>
            </a>
        </div>
        <div class="col-xs-6 col-lg-3">
            <a class="block block-link-hover1" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix">
                    <div class="pull-right push-15-t push-15">
                        <i class="fa fa-bar-chart-o fa-2x text-amethyst"></i>
                    </div>
                    <div class="h2 text-amethyst" data-toggle="countTo" data-to="48"></div>
                    <div class="text-uppercase font-w600 font-s12 text-muted">Sales</div>
                </div>
            </a>
        </div>
    </div>
    <!-- END Stats -->

    <!-- Dashboard Charts -->
    <div class="row">
        <div class="col-md-6">
            <div class="block block-rounded block-opt-refresh-icon8">
                <div class="block-header bg-gray-lighter">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Earnings in $</h3>
                </div>
                <div class="block-content block-content-full text-center">
                    <div class="pull-r-l pull-t pull-b">
                        <!-- Chart.js Charts (initialized in js/pages/base_pages_dashboard_v3.js), for more examples you can check out http://www.chartjs.org/docs/ -->
                        <canvas class="js-dashv3-chartjs-earnings"></canvas>
                    </div>
                </div>
                <div class="block-content text-center bg-gray-lighter">
                    <div class="row items-push-2x text-center push-20-t">
                        <div class="col-xs-6 col-lg-3">
                            <div class="push-15"><i class="fa fa-bank fa-2x text-flat"></i></div>
                            <div class="h5 text-muted">$56,000</div>
                        </div>
                        <div class="col-xs-6 col-lg-3">
                            <div class="push-15"><i class="fa fa-angle-double-up fa-2x text-flat"></i></div>
                            <div class="h5 text-muted">+15% Earnings</div>
                        </div>
                        <div class="col-xs-6 col-lg-3">
                            <div class="push-15"><i class="fa fa-headphones fa-2x text-flat"></i></div>
                            <div class="h5 text-muted">+2% Tickets</div>
                        </div>
                        <div class="col-xs-6 col-lg-3">
                            <div class="push-15"><i class="fa fa-users fa-2x text-flat"></i></div>
                            <div class="h5 text-muted">+14% Clients</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="block block-rounded block-opt-refresh-icon8">
                <div class="block-header bg-gray-lighter">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Sales</h3>
                </div>
                <div class="block-content block-content-full text-center">
                    <div class="pull-r-l pull-t pull-b">
                        <!-- Chart.js Charts (initialized in js/pages/base_pages_dashboard_v3.js), for more examples you can check out http://www.chartjs.org/docs/ -->
                        <canvas class="js-dashv3-chartjs-sales"></canvas>
                    </div>
                </div>
                <div class="block-content text-center bg-gray-lighter">
                    <div class="row items-push-2x text-center push-20-t">
                        <div class="col-xs-6 col-lg-3">
                            <div class="push-15"><i class="fa fa-wordpress fa-2x text-amethyst"></i></div>
                            <div class="h5 text-muted">+68% Themes</div>
                        </div>
                        <div class="col-xs-6 col-lg-3">
                            <div class="push-15"><i class="fa fa-font fa-2x text-amethyst"></i></div>
                            <div class="h5 text-muted">+36% Fonts</div>
                        </div>
                        <div class="col-xs-6 col-lg-3">
                            <div class="push-15"><i class="fa fa-archive fa-2x text-amethyst"></i></div>
                            <div class="h5 text-muted">-8% Icons</div>
                        </div>
                        <div class="col-xs-6 col-lg-3">
                            <div class="push-15"><i class="fa fa-paint-brush fa-2x text-amethyst"></i></div>
                            <div class="h5 text-muted">+16% Graphics</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Dashboard Charts -->

    <!-- Top Products and Latest Orders -->
    <div class="row">
        <div class="col-lg-6">
            <!-- Top Products -->
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
            <!-- END Top Products -->
        </div>
        <div class="col-lg-6">
            <!-- Latest Orders -->
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
                                <td class="hidden-xs"><a href="base_pages_ecom_customer.php"><?php echo $one->get_name(); ?></a></td>
                                <td><span class="label label-success">Delivered</span></td>
                                <td class="text-right"><strong>$<?php echo rand(100, 999); ?>,00</strong></td>
                            </tr>
                            <tr>
                                <td class="text-center"><a href="base_pages_ecom_order.php"><strong>ORD.7115</strong></a></td>
                                <td class="hidden-xs"><a href="base_pages_ecom_customer.php"><?php echo $one->get_name(); ?></a></td>
                                <td><span class="label label-danger">Canceled</span></td>
                                <td class="text-right"><strong>$<?php echo rand(100, 999); ?>,00</strong></td>
                            </tr>
                            <tr>
                                <td class="text-center"><a href="base_pages_ecom_order.php"><strong>ORD.7114</strong></a></td>
                                <td class="hidden-xs"><a href="base_pages_ecom_customer.php"><?php echo $one->get_name(); ?></a></td>
                                <td><span class="label label-success">Delivered</span></td>
                                <td class="text-right"><strong>$<?php echo rand(100, 999); ?>,00</strong></td>
                            </tr>
                            <tr>
                                <td class="text-center"><a href="base_pages_ecom_order.php"><strong>ORD.7113</strong></a></td>
                                <td class="hidden-xs"><a href="base_pages_ecom_customer.php"><?php echo $one->get_name(); ?></a></td>
                                <td><span class="label label-warning">Processing</span></td>
                                <td class="text-right"><strong>$<?php echo rand(100, 999); ?>,00</strong></td>
                            </tr>
                            <tr>
                                <td class="text-center"><a href="base_pages_ecom_order.php"><strong>ORD.7112</strong></a></td>
                                <td class="hidden-xs"><a href="base_pages_ecom_customer.php"><?php echo $one->get_name(); ?></a></td>
                                <td><span class="label label-success">Delivered</span></td>
                                <td class="text-right"><strong>$<?php echo rand(100, 999); ?>,00</strong></td>
                            </tr>
                            <tr>
                                <td class="text-center"><a href="base_pages_ecom_order.php"><strong>ORD.7111</strong></a></td>
                                <td class="hidden-xs"><a href="base_pages_ecom_customer.php"><?php echo $one->get_name(); ?></a></td>
                                <td><span class="label label-warning">Processing</span></td>
                                <td class="text-right"><strong>$<?php echo rand(100, 999); ?>,00</strong></td>
                            </tr>
                            <tr>
                                <td class="text-center"><a href="base_pages_ecom_order.php"><strong>ORD.7110</strong></a></td>
                                <td class="hidden-xs"><a href="base_pages_ecom_customer.php"><?php echo $one->get_name(); ?></a></td>
                                <td><span class="label label-success">Delivered</span></td>
                                <td class="text-right"><strong>$<?php echo rand(100, 999); ?>,00</strong></td>
                            </tr>
                            <tr>
                                <td class="text-center"><a href="base_pages_ecom_order.php"><strong>ORD.7109</strong></a></td>
                                <td class="hidden-xs"><a href="base_pages_ecom_customer.php"><?php echo $one->get_name(); ?></a></td>
                                <td><span class="label label-warning">Processing</span></td>
                                <td class="text-right"><strong>$<?php echo rand(100, 999); ?>,00</strong></td>
                            </tr>
                            <tr>
                                <td class="text-center"><a href="base_pages_ecom_order.php"><strong>ORD.7108</strong></a></td>
                                <td class="hidden-xs"><a href="base_pages_ecom_customer.php"><?php echo $one->get_name(); ?></a></td>
                                <td><span class="label label-success">Delivered</span></td>
                                <td class="text-right"><strong>$<?php echo rand(100, 999); ?>,00</strong></td>
                            </tr>
                            <tr>
                                <td class="text-center"><a href="base_pages_ecom_order.php"><strong>ORD.7107</strong></a></td>
                                <td class="hidden-xs"><a href="base_pages_ecom_customer.php"><?php echo $one->get_name(); ?></a></td>
                                <td><span class="label label-danger">Canceled</span></td>
                                <td class="text-right"><strong>$<?php echo rand(100, 999); ?>,00</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END Latest Orders -->
        </div>
    </div>
    <!-- END Top Products and Latest Orders -->
</div>
<!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>

<!-- Page Plugins -->
<script src="<?php echo $one->assets_folder; ?>/js/plugins/chartjsv2/Chart.min.js"></script>

<!-- Page JS Code -->
<script src="<?php echo $one->assets_folder; ?>/js/pages/base_pages_dashboard_v3.js"></script>
<script>
    jQuery(function(){
        // Init page helpers (CountTo plugin)
        App.initHelpers('appear-countTo');
    });
</script>

<?php require 'inc/views/template_footer_end.php'; ?>