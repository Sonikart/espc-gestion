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
                <li>
                    <a href="base_pages_crypto_dashboard.php">
                        <i class="fa fa-fw fa-compass push-5-r"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="base_pages_crypto_buy_sell.php">
                        <i class="fa fa-fw fa-arrows-h push-5-r"></i> Buy/Sell
                    </a>
                </li>
                <li class="active">
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
    <div class="push-30-t push-30 text-center">
        <h2 class="h1 font-w600 text-black push-5">Your Wallets</h2>
        <h3 class="h4 font-w400 text-muted">Looking good!</h3>
    </div>
    <div class="row">
        <div class="col-md-6 col-lg-4">
            <div class="block block-rounded">
                <div class="block-content block-content-full">
                    <div class="push-5-t push-5">
                        <i class="si si-wallet text-warning pull-right"></i>
                        <a class="h3 text-warning font-w600" href="#modal-crypto-wallet-btc" data-toggle="modal">
                            Bitcoin Wallet
                        </a>
                    </div>
                    <div class="push-20 h5">
                        <span class="font-w600">0.50 BTC</span>
                        <span class="text-muted">~ $7.000</span>
                    </div>
                    <div class="push-5">
                        <a class="btn btn-default" href="javascript:void(0)">
                            <i class="fa fa-send push-5-r"></i> Send
                        </a>
                        <a class="btn btn-default" href="javascript:void(0)">
                            <i class="fa fa-qrcode push-5-r"></i> Receive
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="block block-rounded">
                <div class="block-content block-content-full">
                    <div class="push-5-t push-5">
                        <i class="si si-wallet text-info pull-right"></i>
                        <a class="h3 text-info font-w600" href="#modal-crypto-wallet-eth" data-toggle="modal">
                            Ethereum Wallet
                        </a>
                    </div>
                    <div class="push-20 h5">
                        <span class="font-w600">3.00 ETH</span>
                        <span class="text-muted">~ $3.300</span>
                    </div>
                    <div class="push-5">
                        <a class="btn btn-default" href="javascript:void(0)">
                            <i class="fa fa-send push-5-r"></i> Send
                        </a>
                        <a class="btn btn-default" href="javascript:void(0)">
                            <i class="fa fa-qrcode push-5-r"></i> Receive
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="block block-rounded">
                <div class="block-content block-content-full">
                    <div class="push-5-t push-5">
                        <i class="si si-wallet text-muted pull-right"></i>
                        <a class="h3 text-muted font-w600" href="#modal-crypto-wallet-ltc" data-toggle="modal">
                            Litecoin Wallet
                        </a>
                    </div>
                    <div class="push-20 h5">
                        <span class="font-w600">10.00 LTC</span>
                        <span class="text-muted">~ $2.500</span>
                    </div>
                    <div class="push-5">
                        <a class="btn btn-default" href="javascript:void(0)">
                            <i class="fa fa-send push-5-r"></i> Send
                        </a>
                        <a class="btn btn-default" href="javascript:void(0)">
                            <i class="fa fa-qrcode push-5-r"></i> Receive
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="block block-rounded">
                <div class="block-content block-content-full">
                    <div class="push-5-t push-5">
                        <i class="si si-wallet text-danger pull-right"></i>
                        <a class="h3 text-danger font-w600" href="#modal-crypto-wallet-usd" data-toggle="modal">
                            US Dollars Wallet
                        </a>
                    </div>
                    <div class="push-20 h5">
                        <span class="font-w600">2.000 USD</span>
                        <span class="text-muted"> | $2.000</span>
                    </div>
                    <div class="push-5">
                        <a class="btn btn-default" href="javascript:void(0)">
                            <i class="fa fa-arrow-circle-down push-5-r"></i> Deposit
                        </a>
                        <a class="btn btn-default" href="javascript:void(0)">
                            <i class="fa fa-arrow-circle-up push-5-r"></i> Withdraw
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="block block-rounded">
                <div class="block-content block-content-full">
                    <div class="push-5-t push-5">
                        <i class="si si-wallet text-success pull-right"></i>
                        <a class="h3 text-success font-w600" href="#modal-crypto-wallet-eur" data-toggle="modal">
                            Euros Wallet
                        </a>
                    </div>
                    <div class="push-20 h5">
                        <span class="font-w600">0 EUR</span>
                        <span class="text-muted"> | 0€</span>
                    </div>
                    <div class="push-5">
                        <a class="btn btn-default" href="javascript:void(0)">
                            <i class="fa fa-arrow-circle-down push-5-r"></i> Deposit
                        </a>
                        <a class="btn btn-default disabled" href="javascript:void(0)">
                            <i class="fa fa-arrow-circle-up push-5-r"></i> Withdraw
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="block block-rounded">
                <div class="block-content block-content-full">
                    <div class="push-5-t push-5">
                        <i class="si si-wallet text-amethyst pull-right"></i>
                        <a class="h3 text-amethyst font-w600" href="#modal-crypto-wallet-gbp" data-toggle="modal">
                            British Pounds Wallet
                        </a>
                    </div>
                    <div class="push-20 h5">
                        <span class="font-w600">0 GBP</span>
                        <span class="text-muted"> | £0</span>
                    </div>
                    <div class="push-5">
                        <a class="btn btn-default" href="javascript:void(0)">
                            <i class="fa fa-arrow-circle-down push-5-r"></i> Deposit
                        </a>
                        <a class="btn btn-default disabled" href="javascript:void(0)">
                            <i class="fa fa-arrow-circle-up push-5-r"></i> Withdraw
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <a class="block block-rounded block-link-hover3" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix">
                    <div class="pull-right push-10-t push-10">
                        <i class="fa fa-plus-circle fa-2x text-primary"></i>
                    </div>
                    <div class="h3 text-primary">New Wallet</div>
                    <div class="text-uppercase font-w600 font-s12 text-muted">Easy and fast</div>
                </div>
            </a>
        </div>
    </div>
</div>
<!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>

<!-- BTC Wallet -->
<div class="modal fade" id="modal-crypto-wallet-btc" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-popin">
        <div class="modal-content">
            <div class="block block-themed block-transparent remove-margin-b">
                <div class="block-header bg-primary-dark">
                    <ul class="block-options">
                        <li>
                            <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">
                        <i class="si si-wallet text-warning push-10-r"></i> Bitcoin Wallet
                    </h3>
                </div>
                <div class="block-content">
                    <div class="pull-r-l">
                        <table class="table table-borderless table-striped table-vcenter push-10">
                            <tbody>
                                <tr>
                                    <td class="text-center">
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
                                    <td class="text-center">
                                        JAN<br>05
                                    </td>
                                    <td>
                                        <strong>Bought Bitcoin</strong><br>
                                        <span class="text-muted">Using USD wallet</span>
                                    </td>
                                    <td class="text-right text-success font-w600">
                                        + 0.50 BTC
                                    </td>
                                    <td class="hidden-xs text-right text-danger font-w600">
                                        - $6.800
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        JAN<br>02
                                    </td>
                                    <td>
                                        <strong>Sold Bitcoin</strong><br>
                                        <span class="text-muted">Using USD wallet</span>
                                    </td>
                                    <td class="text-right text-danger font-w600">
                                        - 0.25 BTC
                                    </td>
                                    <td class="hidden-xs text-right text-success font-w600">
                                        + $3.470
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        JAN<br>01
                                    </td>
                                    <td>
                                        <strong>Sold Bitcoin</strong><br>
                                        <span class="text-muted">Using USD wallet</span>
                                    </td>
                                    <td class="text-right text-danger font-w600">
                                        - 0.50 BTC
                                    </td>
                                    <td class="hidden-xs text-right text-success font-w600">
                                        + $6.800
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                <button class="btn btn-sm btn-primary" type="button" data-dismiss="modal">Done</button>
            </div>
        </div>
    </div>
</div>
<!-- END BTC Wallet -->

<!-- ETH Wallet -->
<div class="modal fade" id="modal-crypto-wallet-eth" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-popin">
        <div class="modal-content">
            <div class="block block-themed block-transparent remove-margin-b">
                <div class="block-header bg-primary-dark">
                    <ul class="block-options">
                        <li>
                            <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">
                        <i class="si si-wallet text-info push-10-r"></i> Ethereum Wallet
                    </h3>
                </div>
                <div class="block-content">
                    <div class="pull-r-l">
                        <table class="table table-borderless table-striped table-vcenter push-10">
                            <tbody>
                                <tr>
                                    <td class="text-center">
                                        JAN<br>10
                                    </td>
                                    <td>
                                        <strong>Bought Ethereum</strong><br>
                                        <span class="text-muted">Using USD wallet</span>
                                    </td>
                                    <td class="text-right text-success font-w600">
                                        + 2.50 ETH
                                    </td>
                                    <td class="hidden-xs text-right text-danger font-w600">
                                        - $2.405
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        JAN<br>05
                                    </td>
                                    <td>
                                        <strong>Bought Ethereum</strong><br>
                                        <span class="text-muted">Using USD wallet</span>
                                    </td>
                                    <td class="text-right text-success font-w600">
                                        + 0.50 ETH
                                    </td>
                                    <td class="hidden-xs text-right text-danger font-w600">
                                        - $530
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        JAN<br>02
                                    </td>
                                    <td>
                                        <strong>Sold Ethereum</strong><br>
                                        <span class="text-muted">Using USD wallet</span>
                                    </td>
                                    <td class="text-right text-danger font-w600">
                                        - 0.25 ETH
                                    </td>
                                    <td class="hidden-xs text-right text-success font-w600">
                                        + $260
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        JAN<br>01
                                    </td>
                                    <td>
                                        <strong>Sold Ethereum</strong><br>
                                        <span class="text-muted">Using USD wallet</span>
                                    </td>
                                    <td class="text-right text-danger font-w600">
                                        - 2.00 ETH
                                    </td>
                                    <td class="hidden-xs text-right text-success font-w600">
                                        + $2.120
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        JAN<br>01
                                    </td>
                                    <td>
                                        <strong>Bought Ethereum</strong><br>
                                        <span class="text-muted">Using USD wallet</span>
                                    </td>
                                    <td class="text-right text-success font-w600">
                                        + 1.00 ETH
                                    </td>
                                    <td class="hidden-xs text-right text-danger font-w600">
                                        - $1.000
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                <button class="btn btn-sm btn-primary" type="button" data-dismiss="modal">Done</button>
            </div>
        </div>
    </div>
</div>
<!-- END ETH Wallet -->

<!-- LTC Wallet -->
<div class="modal fade" id="modal-crypto-wallet-ltc" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-popin">
        <div class="modal-content">
            <div class="block block-themed block-transparent remove-margin-b">
                <div class="block-header bg-primary-dark">
                    <ul class="block-options">
                        <li>
                            <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">
                        <i class="si si-wallet text-muted push-10-r"></i> Litecoin Wallet
                    </h3>
                </div>
                <div class="block-content">
                    <div class="pull-r-l">
                        <table class="table table-borderless table-striped table-vcenter push-10">
                            <tbody>
                                <tr>
                                    <td class="text-center">
                                        DEC<br>26
                                    </td>
                                    <td>
                                        <strong>Bought Litecoin</strong><br>
                                        <span class="text-muted">Using USD wallet</span>
                                    </td>
                                    <td class="text-right text-success font-w600">
                                        + 2.50 LTC
                                    </td>
                                    <td class="hidden-xs text-right text-danger font-w600">
                                        - $769
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        DEC<br>24
                                    </td>
                                    <td>
                                        <strong>Bought Litecoin</strong><br>
                                        <span class="text-muted">Using USD wallet</span>
                                    </td>
                                    <td class="text-right text-success font-w600">
                                        + 0.50 LTC
                                    </td>
                                    <td class="hidden-xs text-right text-danger font-w600">
                                        - $124
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        DEC<br>15
                                    </td>
                                    <td>
                                        <strong>Sold Litecoin</strong><br>
                                        <span class="text-muted">Using USD wallet</span>
                                    </td>
                                    <td class="text-right text-danger font-w600">
                                        - 0.25 LTC
                                    </td>
                                    <td class="hidden-xs text-right text-success font-w600">
                                        + $68
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        DEC<br>14
                                    </td>
                                    <td>
                                        <strong>Sold Litecoin</strong><br>
                                        <span class="text-muted">Using USD wallet</span>
                                    </td>
                                    <td class="text-right text-danger font-w600">
                                        - 2.00 LTC
                                    </td>
                                    <td class="hidden-xs text-right text-success font-w600">
                                        + $515
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        DEC<br>03
                                    </td>
                                    <td>
                                        <strong>Bought Litecoin</strong><br>
                                        <span class="text-muted">Using USD wallet</span>
                                    </td>
                                    <td class="text-right text-success font-w600">
                                        + 1.00 LTC
                                    </td>
                                    <td class="hidden-xs text-right text-danger font-w600">
                                        - $260
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        DEC<br>01
                                    </td>
                                    <td>
                                        <strong>Bought Litecoin</strong><br>
                                        <span class="text-muted">Using USD wallet</span>
                                    </td>
                                    <td class="text-right text-success font-w600">
                                        + 2.00 LTC
                                    </td>
                                    <td class="hidden-xs text-right text-danger font-w600">
                                        - $760
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                <button class="btn btn-sm btn-primary" type="button" data-dismiss="modal">Done</button>
            </div>
        </div>
    </div>
</div>
<!-- END LTC Wallet -->

<!-- USD Wallet -->
<div class="modal fade" id="modal-crypto-wallet-usd" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-popin">
        <div class="modal-content">
            <div class="block block-themed block-transparent remove-margin-b">
                <div class="block-header bg-primary-dark">
                    <ul class="block-options">
                        <li>
                            <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">
                        <i class="si si-wallet text-danger push-10-r"></i> US Dollars Wallet
                    </h3>
                </div>
                <div class="block-content">
                    <div class="pull-r-l">
                        <table class="table table-borderless table-striped table-vcenter push-10">
                            <tbody>
                                <tr>
                                    <td class="text-center">
                                        JAN<br>12
                                    </td>
                                    <td>
                                        <strong>Deposited funds</strong><br>
                                        <span class="text-muted">FROM BANK S.A. (000-000-000)</span>
                                    </td>
                                    <td class="text-right text-success font-w600">
                                        + 2.000 USD
                                    </td>
                                    <td class="hidden-xs text-right text-success font-w600">
                                        + $2.000
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                <button class="btn btn-sm btn-primary" type="button" data-dismiss="modal">Done</button>
            </div>
        </div>
    </div>
</div>
<!-- END USD Wallet -->

<!-- EUR Wallet -->
<div class="modal fade" id="modal-crypto-wallet-eur" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-popin">
        <div class="modal-content">
            <div class="block block-themed block-transparent remove-margin-b">
                <div class="block-header bg-primary-dark">
                    <ul class="block-options">
                        <li>
                            <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">
                        <i class="si si-wallet text-success push-10-r"></i> Euros Wallet
                    </h3>
                </div>
                <div class="block-content">
                    <p class="text-muted text-center">
                        No transactions yet!
                    </p>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                <button class="btn btn-sm btn-primary" type="button" data-dismiss="modal">Done</button>
            </div>
        </div>
    </div>
</div>
<!-- END EUR Wallet -->

<!-- GBP Wallet -->
<div class="modal fade" id="modal-crypto-wallet-gbp" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-popin">
        <div class="modal-content">
            <div class="block block-themed block-transparent remove-margin-b">
                <div class="block-header bg-primary-dark">
                    <ul class="block-options">
                        <li>
                            <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">
                        <i class="si si-wallet text-amethyst push-10-r"></i> British Pounds Wallet
                    </h3>
                </div>
                <div class="block-content">
                    <p class="text-muted text-center">
                        No transactions yet!
                    </p>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                <button class="btn btn-sm btn-primary" type="button" data-dismiss="modal">Done</button>
            </div>
        </div>
    </div>
</div>
<!-- END GBP Wallet -->

<?php require 'inc/views/template_footer_start.php'; ?>
<?php require 'inc/views/template_footer_end.php'; ?>