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
                <li class="active">
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
    <div class="push-30-t push-30 text-center">
        <h2 class="h1 font-w600 text-black push-5">Buy/Sell</h2>
        <h3 class="h4 font-w400 text-muted">Bitcoin (BTC)</h3>
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="block">
                <ul class="nav nav-tabs nav-justified nav-tabs-alt" data-toggle="tabs">
                    <li class="active">
                        <a href="#crypto-buy">Buy</a>
                    </li>
                    <li>
                        <a href="#crypto-sell">Sell</a>
                    </li>
                </ul>
                <div class="block-content tab-content">
                    <div class="tab-pane active" id="crypto-buy">
                        <form class="form-horizontal" action="base_pages_crypto_buy_sell.php" method="post" onsubmit="return false;">
                            <div class="form-group">
                                <label class="col-xs-12" for="crypto-buy-from">Buy From</label>
                                <div class="col-xs-12">
                                    <select class="form-control" id="crypto-buy-from" name="crypto-buy-from" size="3">
                                        <option value="1">USD Wallet - $2000</option>
                                        <option value="2">EUR Wallet - 0€</option>
                                        <option value="3">GBP Wallet - £0</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-12" for="crypto-buy-to">Deposit To</label>
                                <div class="col-xs-12">
                                    <select class="form-control input-lg" id="crypto-buy-to" name="crypto-buy-to" size="1">
                                        <option value="1">Bitcoin Wallet - 0.50 BTC</option>
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group">
                                <div class="col-xs-12 push-15">
                                    <div class="push-5">
                                        <div class="pull-right">
                                            $1.000,00 USD &bullet; <a href="javascript:void(0)">Increase Limits</a>
                                        </div>
                                        <strong>Total Limit</strong>
                                    </div>
                                    <div class="progress progress-mini remove-margin-b">
                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                                    </div>
                                </div>
                                <div class="col-xs-6 border-r">
                                    <div class="input-group">
                                        <input type="text" class="form-control input-lg" id="crypto-buy-usd" name="crypto-buy-usd" placeholder="0,00">
                                        <div class="input-group-addon font-w600">USD</div>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control input-lg" id="crypto-buy-btc" name="crypto-buy-btc" placeholder="0.00">
                                        <div class="input-group-addon font-w600">BTC</div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group">
                                <div class="col-xs-12 text-center">
                                    <div class="btn-group" data-toggle="buttons">
                                        <button class="btn btn-default" type="button">Daily</button>
                                        <button class="btn btn-default" type="button">Weekly</button>
                                        <button class="btn btn-default" type="button">Monthly</button>
                                    </div>
                                    <div class="push-10-t text-muted">
                                        <i class="fa fa-repeat"></i> <em>Repeat this transaction</em>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <button type="submit" class="btn btn-lg btn-block btn-primary">Buy Bitcoin Instantly</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane" id="crypto-sell">
                        <form class="form-horizontal" action="base_pages_crypto_buy_sell.php" method="post" onsubmit="return false;">
                            <div class="form-group">
                                <label class="col-xs-12" for="crypto-sell-from">Sell From</label>
                                <div class="col-xs-12">
                                    <select class="form-control input-lg" id="crypto-sell-from" name="crypto-sell-from" size="1">
                                        <option value="1">Bitcoin Wallet - 0.50 BTC</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-12" for="crypto-sell-to">Deposit To</label>
                                <div class="col-xs-12">
                                    <select class="form-control" id="crypto-sell-to" name="crypto-sell-to" size="3">
                                        <option value="1">USD Wallet - $2000</option>
                                        <option value="2">EUR Wallet - 0€</option>
                                        <option value="3">GBP Wallet - £0</option>
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group">
                                <div class="col-xs-12 push-15">
                                    <div class="push-5">
                                        <div class="pull-right">
                                            $1.000,00 USD &bullet; <a href="javascript:void(0)">Increase Limits</a>
                                        </div>
                                        <strong>Total Limit</strong>
                                    </div>
                                    <div class="progress progress-mini remove-margin-b">
                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                                    </div>
                                </div>
                                <div class="col-xs-6 border-r">
                                    <div class="input-group">
                                        <input type="text" class="form-control input-lg" id="crypto-sell-btc" name="crypto-sell-btc" placeholder="0.00">
                                        <div class="input-group-addon font-w600">BTC</div>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control input-lg" id="crypto-sell-usd" name="crypto-sell-usd" placeholder="0,00">
                                        <div class="input-group-addon font-w600">USD</div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group">
                                <div class="col-xs-12 text-center">
                                    <div class="btn-group" >
                                        <button class="btn btn-default" type="button">Daily</button>
                                        <button class="btn btn-default" type="button">Weekly</button>
                                        <button class="btn btn-default" type="button">Monthly</button>
                                    </div>
                                    <div class="push-10-t text-muted">
                                        <i class="fa fa-repeat"></i> <em>Repeat this transaction</em>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <button type="submit" class="btn btn-lg btn-block btn-primary">Sell Bitcoin Instantly</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>
<?php require 'inc/views/template_footer_end.php'; ?>