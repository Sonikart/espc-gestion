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
                <li>
                    <a href="base_pages_crypto_wallets.php">
                        <i class="fa fa-fw fa-money push-5-r"></i> Wallets
                    </a>
                </li>
                <li class="active">
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
    <form action="base_pages_crypto_settings.php" method="post" onsubmit="return false;">
        <div class="push-30-t push-30 text-center">
            <h2 class="h1 font-w600 text-black push-5">John Parker</h2>
            <h3 class="h4 font-w400 text-muted">Crypto Investor</h3>
        </div>
        <div class="block block-rounded">
            <div class="block-content">
                <!-- User Profile -->
                <h3 class="page-header text-black">User Profile</h3>
                <div class="row items-push">
                    <div class="col-md-3">
                        <p class="text-muted">
                            Feel free to change your account’s vital information.
                        </p>
                    </div>
                    <div class="col-md-7 col-md-offset-1 form-horizontal">
                        <div class="form-group">
                            <div class="col-xs-12">
                                <label for="crypto-profile-nickname">Nickname</label>
                                <input class="form-control input-lg" type="text" id="crypto-profile-nickname" name="crypto-profile-nickname" placeholder="Enter your nickname.." value="John P">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <label for="crypto-profile-email">Email Address</label>
                                <input class="form-control input-lg" type="email" id="crypto-profile-email" name="crypto-profile-email" placeholder="Enter your email.." value="crypto@example.com">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END User Profile -->

                <!-- Change Password -->
                <h3 class="page-header text-black">Change Password</h3>
                <div class="row items-push">
                    <div class="col-md-3">
                        <p class="text-muted">
                            Changing your password often is an easy way to keep your account secure.
                        </p>
                    </div>
                    <div class="col-md-7 col-md-offset-1 form-horizontal">
                        <div class="form-group">
                            <div class="col-xs-12">
                                <label for="crypto-profile-password">Current Password</label>
                                <input class="form-control input-lg" type="password" id="crypto-profile-password" name="crypto-profile-password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <label for="crypto-profile-password-new">New Password</label>
                                <input class="form-control input-lg" type="password" id="crypto-profile-password-new" name="crypto-profile-password-new">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <label for="crypto-profile-password-new-confirm">Confirm New Password</label>
                                <input class="form-control input-lg" type="password" id="crypto-profile-password-new-confirm" name="crypto-profile-password-new-confirm">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Change Password -->

                <!-- Personal Details -->
                <h3 class="page-header text-black">Personal Details</h3>
                <div class="row items-push">
                    <div class="col-md-3">
                        <p class="text-muted">
                            Your personal information is never shown to other users.
                        </p>
                    </div>
                    <div class="col-md-7 col-md-offset-1 form-horizontal">
                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="crypto-profile-firstname">Firstname</label>
                                <input class="form-control input-lg" type="text" id="crypto-profile-firstname" name="crypto-profile-firstname" placeholder="Enter your firstname.." value="John" disabled>
                            </div>
                            <div class="col-xs-6">
                                <label for="crypto-profile-lastname">Lastname</label>
                                <input class="form-control input-lg" type="text" id="crypto-profile-lastname" name="crypto-profile-lastname" placeholder="Enter your lastname.." value="Parker" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <label for="crypto-profile-street-1">Street Address 1</label>
                                <input class="form-control input-lg" type="text" id="crypto-profile-street-1" name="crypto-profile-street-1">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <label for="crypto-profile-street-2">Street Address 2</label>
                                <input class="form-control input-lg" type="text" id="crypto-profile-street-2" name="crypto-profile-street-2">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <label for="crypto-profile-city">City</label>
                                <input class="form-control input-lg" type="text" id="crypto-profile-city" name="crypto-profile-city">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-6">
                                <label for="crypto-profile-postal">Postal code</label>
                                <input class="form-control input-lg" type="text" id="crypto-profile-postal" name="crypto-profile-postal">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Personal Details -->

                <!-- Security -->
                <h3 class="page-header text-black">Security</h3>
                <div class="row items-push">
                    <div class="col-md-3">
                        <p class="text-muted">
                            Keep your account secure.
                        </p>
                    </div>
                    <div class="col-md-3 col-md-offset-1 form-horizontal">
                        <div class="form-group">
                            <div class="col-xs-8">
                                <div class="font-s13 font-w600">Online Status</div>
                                <div class="font-s13 font-w400 text-muted">Show your status to all</div>
                            </div>
                            <div class="col-xs-4 text-right">
                                <label class="css-input switch switch-sm switch-primary push-10-t">
                                    <input type="checkbox"><span></span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-8">
                                <div class="font-s13 font-w600">Auto Updates</div>
                                <div class="font-s13 font-w400 text-muted">Keep app updated</div>
                            </div>
                            <div class="col-xs-4 text-right">
                                <label class="css-input switch switch-sm switch-primary push-10-t">
                                    <input type="checkbox" checked><span></span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-8">
                                <div class="font-s13 font-w600">Verify on Login</div>
                                <div class="font-s13 font-w400 text-muted">Most secure option</div>
                            </div>
                            <div class="col-xs-4 text-right">
                                <label class="css-input switch switch-sm switch-primary push-10-t">
                                    <input type="checkbox" checked><span></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-md-offset-1 form-horizontal">
                        <div class="form-group">
                            <div class="col-xs-8">
                                <div class="font-s13 font-w600">Notifications</div>
                                <div class="font-s13 font-w400 text-muted">For all transactions</div>
                            </div>
                            <div class="col-xs-4 text-right">
                                <label class="css-input switch switch-sm switch-primary push-10-t">
                                    <input type="checkbox" checked><span></span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-8">
                                <div class="font-s13 font-w600">API Access</div>
                                <div class="font-s13 font-w400 text-muted">Enable/Disable access</div>
                            </div>
                            <div class="col-xs-4 text-right">
                                <label class="css-input switch switch-sm switch-primary push-10-t">
                                    <input type="checkbox" checked><span></span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-8">
                                <div class="font-s13 font-w600">Two Factor Auth</div>
                                <div class="font-s13 font-w400 text-muted">Using an authenticator</div>
                            </div>
                            <div class="col-xs-4 text-right">
                                <label class="css-input switch switch-sm switch-primary push-10-t">
                                    <input type="checkbox"><span></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Security -->
            </div>
            <div class="block-content block-content-full bg-gray-lighter">
                <button class="btn btn-sm btn-success pull-right" type="submit">
                    <i class="fa fa-check push-5-r"></i> Save Changes
                </button>
                <button class="btn btn-sm btn-default" type="reset">
                    <i class="fa fa-refresh push-5-r"></i> Reset
                </button>
            </div>
        </div>
    </form>
</div>
<!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>
<?php require 'inc/views/template_footer_end.php'; ?>