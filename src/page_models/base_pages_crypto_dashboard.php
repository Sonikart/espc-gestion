<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>

<!-- Page Menu -->
<div class="bg-white">
    <div class="content content-mini content-boxed">
        <!-- Collapsible Navigation (using Bootstrap collapse functionality) -->
        <button class="btn btn-block btn-primary visible-xs push" data-toggle="collapse" data-target="#crypto-nav" type="button">Menu</button>
        <div class="collapse navbar-collapse remove-padding" id="crypto-nav">
            <ul class="nav nav-pills nav-justified push">
                <li class="active">
                    <a href="base_pages_crypto_dashboard.php">
                        <i class="fa fa-fw fa-compass push-5-r"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="base_pages_crypto_buy_sell.php">
                        <i class="fa fa-fw fa-arrows-h push-5-r"></i> Buy/Sell
                    </a>
                </li>
                <li>
                    <a href="base_pages_crypto_wallets.php">
                        <i class="fa fa-fw fa-money push-5-r"></i> Wallets
                    </a>
                </li>
                <li>
                    <a href="base_pages_crypto_settings.php">
                        <i class="fa fa-fw fa-cog push-5-r"></i> Settings
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- END Page Menu -->

<!-- Page Content -->
<div class="content content-boxed">
    <!-- Coins -->
    <div class="block">
        <ul id="crypto-tabs" class="nav nav-tabs nav-tabs-alt" data-toggle="tabs">
            <li>
                <a href="#crypto-coins-btc">
                    <span class="visible-xs">BTC</span>
                    <span class="hidden-xs">Bitcoin <span class="text-muted">$14000</span></span>
                </a>
            </li>
            <li>
                <a href="#crypto-coins-eth">
                    <span class="visible-xs">ETH</span>
                    <span class="hidden-xs">Ethereum <span class="text-muted">$1100</span></span>
                </a>
            </li>
            <li>
                <a href="#crypto-coins-ltc">
                    <span class="visible-xs">LTC</span>
                    <span class="hidden-xs">Litecoin <span class="text-muted">$250</span></span>
                </a>
            </li>
            <li class="pull-right">
                <ul class="block-options push-10-t push-10-r">
                    <li class="dropdown">
                        <button type="button" data-toggle="dropdown"><i class="fa fa-calendar"></i> <span class="caret"></span></button>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li>
                                <a class="font-w600" tabindex="-1" href="javascript:void(0)">1 Hour</a>
                            </li>
                            <li>
                                <a class="font-w600" tabindex="-1" href="javascript:void(0)">1 Day</a>
                            </li>
                            <li>
                                <a class="font-w600" tabindex="-1" href="javascript:void(0)">1 Week</a>
                            </li>
                            <li class="active">
                                <a class="font-w600" tabindex="-1" href="javascript:void(0)">1 Month</a>
                            </li>
                            <li>
                                <a class="font-w600" tabindex="-1" href="javascript:void(0)">1 Year</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="font-w600" tabindex="-1" href="javascript:void(0)">ALL</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="block-content tab-content">
            <div class="tab-pane" id="crypto-coins-btc">
                <div class="row items-push text-center push push-10-t">
                    <div class="col-md-4">
                        <div class="font-s36 text-black">$14.000</div>
                        <div class="text-muted text-uppercase">Bitcoin Price</div>
                    </div>
                    <div class="col-md-4">
                        <div class="font-s36 text-black">
                            <span class="text-success">+</span> $3.500
                        </div>
                        <div class="text-muted text-uppercase">Since Last Month (USD)</div>
                    </div>
                    <div class="col-md-4">
                        <div class="font-s36 text-black">
                            <span class="text-success">+</span> 133%
                        </div>
                        <div class="text-muted text-uppercase">Since Last Month (%)</div>
                    </div>
                </div>
                <hr>
                <div class="push">
                    <!-- Bitcoin Chart.js 2 Container (initialized in js/pages/base_pages_crypto_dashboard.js), for more examples you can check out http://www.chartjs.org/docs/ -->
                    <canvas class="js-chartjs2-bitcoin" height="300"></canvas>
                </div>
            </div>
            <div class="tab-pane" id="crypto-coins-eth">
                <div class="row items-push text-center push push-10-t">
                    <div class="col-md-4">
                        <div class="font-s36 text-black">$1.100</div>
                        <div class="text-muted text-uppercase">Ethereum Price</div>
                    </div>
                    <div class="col-md-4">
                        <div class="font-s36 text-black">
                            <span class="text-success">+</span> $600
                        </div>
                        <div class="text-muted text-uppercase">Since Last Month (USD)</div>
                    </div>
                    <div class="col-md-4">
                        <div class="font-s36 text-black">
                            <span class="text-success">+</span> 210%
                        </div>
                        <div class="text-muted text-uppercase">Since Last Month (%)</div>
                    </div>
                </div>
                <hr>
                <div class="push">
                    <!-- Ethereum Chart.js 2 Container (initialized in js/pages/base_pages_crypto_dashboard.js), for more examples you can check out http://www.chartjs.org/docs/ -->
                    <canvas class="js-chartjs2-ethereum" height="300"></canvas>
                </div>
            </div>
            <div class="tab-pane" id="crypto-coins-ltc">
                <div class="row items-push text-center push push-10-t">
                    <div class="col-md-4">
                        <div class="font-s36 text-black">$250</div>
                        <div class="text-muted text-uppercase">Litecoin Price</div>
                    </div>
                    <div class="col-md-4">
                        <div class="font-s36 text-black">
                            <span class="text-danger">-</span> $50
                        </div>
                        <div class="text-muted text-uppercase">Since Last Month (USD)</div>
                    </div>
                    <div class="col-md-4">
                        <div class="font-s36 text-black">
                            <span class="text-danger">-</span> 17%
                        </div>
                        <div class="text-muted text-uppercase">Since Last Month (%)</div>
                    </div>
                </div>
                <hr>
                <div class="push">
                    <!-- Litecoin Chart.js 2 Container (initialized in js/pages/base_pages_crypto_dashboard.js), for more examples you can check out http://www.chartjs.org/docs/ -->
                    <canvas class="js-chartjs2-litecoin" height="300"></canvas>
                </div>
            </div>
        </div>
    </div>
    <!-- END Coins -->

    <!-- Portfolio and Activity -->
    <div class="row">
        <div class="col-lg-6">
            <!-- Portfolio -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Portfolio</h3>
                </div>
                <div class="block-content">
                    <div class="pull-r-l">
                        <table class="table table-borderless table-striped table-vcenter remove-margin-b">
                            <tbody>
                                <tr>
                                    <td style="width: 32px;">
                                        <i class="fa fa-circle text-warning"></i>
                                    </td>
                                    <td style="width: 140px;">
                                        <strong>Bitcoin</strong>
                                    </td>
                                    <td class="hidden-xs" style="width: 160px;">
                                        <div class="progress progress-mini remove-margin-b">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 47%"></div>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        0.50 BTC
                                    </td>
                                    <td class="hidden-xs text-right text-muted">
                                        ~ $7.000
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fa fa-circle text-info"></i>
                                    </td>
                                    <td>
                                        <strong>Ethereum</strong>
                                    </td>
                                    <td class="hidden-xs">
                                        <div class="progress progress-mini remove-margin-b">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 22%"></div>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        3.00 ETH
                                    </td>
                                    <td class="hidden-xs text-right text-muted">
                                        ~ $3.300
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fa fa-circle text-muted"></i>
                                    </td>
                                    <td>
                                        <strong>Litecoin</strong>
                                    </td>
                                    <td class="hidden-xs">
                                        <div class="progress progress-mini remove-margin-b">
                                            <div class="progress-bar bg-muted" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 16%"></div>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        10.00 LTC
                                    </td>
                                    <td class="hidden-xs text-right text-muted">
                                        ~ $2.500
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fa fa-circle text-danger"></i>
                                    </td>
                                    <td>
                                        <strong>US Dollars</strong>
                                    </td>
                                    <td class="hidden-xs">
                                        <div class="progress progress-mini remove-margin-b">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 13%"></div>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        2.000 USD
                                    </td>
                                    <td class="hidden-xs text-right text-muted">
                                        $2.000
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fa fa-circle text-success"></i>
                                    </td>
                                    <td>
                                        <strong>Euros</strong>
                                    </td>
                                    <td class="hidden-xs">
                                        <div class="progress progress-mini remove-margin-b">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 0"></div>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        0 EUR
                                    </td>
                                    <td class="hidden-xs text-right text-muted">
                                        0€
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fa fa-circle text-amethyst"></i>
                                    </td>
                                    <td>
                                        <strong>British Pounds</strong>
                                    </td>
                                    <td class="hidden-xs">
                                        <div class="progress progress-mini remove-margin-b">
                                            <div class="progress-bar bg-amethyst" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 0"></div>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        0 GBP
                                    </td>
                                    <td class="hidden-xs text-right text-muted">
                                        £0
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="block-content block-content-mini block-content-full bg-gray-lighter text-muted text-center font-w600">
                    Total Balance ~ $14.800,00
                </div>
            </div>
            <!-- END Portfolio -->
        </div>
        <div class="col-lg-6">
            <!-- Recent Activity -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-settings"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Recent Activity</h3>
                </div>
                <div class="block-content">
                    <div class="pull-r-l">
                        <table class="table table-borderless table-striped table-vcenter push-10">
                            <tbody>
                                <tr>
                                    <td class="text-center" style="width: 50px;">
                                        JAN<br>10
                                    </td>
                                    <td>
                                        <strong>Bought Bitcoin</strong><br>
                                        <span class="text-muted">Using USD wallet</span>
                                    </td>
                                    <td class="text-right text-success font-w600">
                                        + 0.50 BTC
                                    </td>
                                    <td class="hidden-xs text-right text-danger font-w600">
                                        - $6.500
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center" style="width: 50px;">
                                        JAN<br>05
                                    </td>
                                    <td>
                                        <strong>Bought Ethereum</strong><br>
                                        <span class="text-muted">Using USD wallet</span>
                                    </td>
                                    <td class="text-right text-success font-w600">
                                        + 3.00 ETH
                                    </td>
                                    <td class="hidden-xs text-right text-danger font-w600">
                                        - $2.900
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center" style="width: 50px;">
                                        JAN<br>02
                                    </td>
                                    <td>
                                        <strong>Bought Litecoin</strong><br>
                                        <span class="text-muted">Using USD wallet</span>
                                    </td>
                                    <td class="text-right text-success font-w600">
                                        + 8.00 LTC
                                    </td>
                                    <td class="hidden-xs text-right text-danger font-w600">
                                        - $1.800
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center" style="width: 50px;">
                                        JAN<br>01
                                    </td>
                                    <td>
                                        <strong>Bought Litecoin</strong><br>
                                        <span class="text-muted">Using USD wallet</span>
                                    </td>
                                    <td class="text-right text-success font-w600">
                                        + 2.00 LTC
                                    </td>
                                    <td class="hidden-xs text-right text-danger font-w600">
                                        - $370
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="block-content block-content-mini block-content-full bg-gray-lighter text-muted text-center font-w600">
                    <a class="link-effect" href="base_pages_crypto_wallets.php">
                        View Your Wallets <i class="fa fa-angle-right push-5-l"></i>
                    </a>
                </div>
            </div>
            <!-- END Recent Activity -->
        </div>
    </div>
    <!-- END Portfolio and Activity -->
</div>
<!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>

<!-- Page JS Plugins -->
<script src="<?php echo $one->assets_folder; ?>/js/plugins/chartjsv2/Chart.bundle.min.js"></script>

<!-- Page JS Code -->
<script src="<?php echo $one->assets_folder; ?>/js/pages/base_pages_crypto_dashboard.js"></script>

<?php require 'inc/views/template_footer_end.php'; ?>