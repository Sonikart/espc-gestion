<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>

<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">
                Masonry <small>Cascading grid layout library</small>
            </h1>
        </div>
        <div class="col-sm-5 text-right hidden-xs">
            <ol class="breadcrumb push-10-t">
                <li>Components</li>
                <li><a class="link-effect" href="">Masonry</a></li>
            </ol>
        </div>
    </div>
</div>
<!-- END Page Header -->

<!-- Page Content -->
<div class="content">
    <!-- Masonry Layout (.js-masonry class is initialized in App() -> uiHelperMasonry()) -->
    <!-- For more info and examples you can check out https://github.com/desandro/masonry -->
    <div class="row js-masonry">
        <div class="col-sm-6 col-lg-4 js-masonry-sizer">
            <!-- Article -->
            <div class="block">
                <div class="block-content block-content-full">
                    <a class="font-w600" href="javascript:void(0)"><?php $one->get_name(); ?></a> just posted an article.
                </div>
                <?php $one->get_photo(27, false, 'img-responsive'); ?>
                <div class="block-content block-content-full">
                    <h2 class="h4 push-10">Lost in the mountains</h2>
                    <p class="text-gray-dark">Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum..</p>
                    <a class="btn btn-sm btn-default" href="javascript:void(0)">Read More</a>
                </div>
            </div>
            <!-- END Article -->
        </div>
        <div class="col-sm-6 col-lg-8 js-masonry-item">
            <!-- Special Offer -->
            <div class="block">
                <div class="block-content block-content-full text-center">
                    <h3 class="font-w300 text-black push-30-t push-30">Special offer only for today with all packages 50% off.</h3>
                    <div class="push-30">
                        <span class="item item-2x item-circle bg-success-light">
                            <i class="si si-badge text-success"></i>
                        </span>
                    </div>
                    <a class="btn btn-minw btn-rounded btn-noborder btn-success push-5" href="javascript:void(0)">Upgrade</a>
                    <p class="font-s12 text-muted">Only for limited accounts.</p>
                </div>
            </div>
            <!-- END Special Offer -->
        </div>
        <div class="col-sm-6 col-lg-4 js-masonry-item">
            <!-- Course -->
            <a class="block" href="javascript:void(0)">
                <div class="block-content block-content-full text-center bg-amethyst ribbon ribbon-bookmark ribbon-crystal">
                    <div class="ribbon-box font-w600">$5</div>
                    <div class="item item-2x item-circle bg-crystal-op push-20-t push-20">
                        <i class="si si-vector text-white-op"></i>
                    </div>
                    <div class="text-white-op">
                        <em>4 lessons</em> &bull; <em>2 hours</em>
                    </div>
                </div>
                <div class="block-content block-content-full text-center">
                    <h4 class="mheight-100">Using SVG is easier than ever</h4>
                    <div class="font-s12">May 12, 2016</div>
                </div>
            </a>
            <!-- END Course -->
        </div>
        <div class="col-sm-6 col-lg-4 js-masonry-item">
            <!-- FAQ -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button"><i class="si si-question"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">FAQ</h3>
                </div>
                <div class="block-content block-content-full text-center">
                    <div class="push-30-t">
                        <span class="item item-2x item-circle bg-gray-lighter">
                            <i class="si si-speedometer text-black"></i>
                        </span>
                    </div>
                    <h3 class="font-w300 text-black push-30-t push-30">What if I need more power?</h3>
                    <div class="mheight-150">
                        <p class="text-gray-dark">Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum,</p>
                    </div>
                </div>
            </div>
            <!-- END FAQ -->
        </div>
        <div class="col-sm-6 col-lg-4 js-masonry-item">
            <!-- New Episode -->
            <div class="block">
                <div class="block-content block-content-full text-center">
                    <div class="item item-2x item-circle bg-gray-lighter">
                        <i class="si si-film text-black"></i>
                    </div>
                </div>
                <div class="block-content block-content-full text-center">
                    A new episode of <a class="font-w600" href="javascript:void(0)">Game of Thrones</a> is available.
                </div>
            </div>
            <!-- END New Episode -->
        </div>
        <div class="col-sm-6 col-lg-4 js-masonry-item">
            <!-- Gift Card -->
            <div class="block block-rounded">
                <div class="block-content block-content-full bg-city text-center">
                    <div class="push-10-t push-10">
                        <i class="fa fa-4x fa-apple text-white-op push-10"></i>
                        <h3 class="h4 text-white">Gift Card</h3>
                    </div>
                </div>
                <div class="block-content block-content-full clearfix">
                    <div class="pull-right">
                        <a class="btn btn-sm btn-default" href="javascript:void(0)">Buy Now!</a>
                    </div>
                    <div class="pull-left">
                        <div class="h3">$50,00</div>
                    </div>
                </div>
            </div>
            <!-- END Gift Card -->
        </div>
        <div class="col-sm-6 col-lg-4 js-masonry-item">
            <!-- Friend +1 -->
            <div class="block">
                <div class="block-content block-content-full">
                    <a class="font-w600" href="javascript:void(0)"><?php $one->get_name(); ?></a> accepted your friend request.
                </div>
                <div class="block-content block-content-full text-center">
                    <div class="item item-2x item-circle bg-gray-lighter">
                        <i class="si si-user-follow text-black"></i>
                    </div>
                </div>
            </div>
            <!-- END Friend +1 -->
        </div>
        <div class="col-sm-6 col-lg-4 js-masonry-item">
            <!-- Category -->
            <div class="bg-image" style="background-image: url('assets/img/photos/photo25.jpg');">
                <div class="bg-black-op">
                    <div class="block block-themed block-transparent">
                        <div class="block-header">
                            <ul class="block-options">
                                <li>
                                    <button type="button"><i class="si si-settings"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title">Category</h3>
                        </div>
                        <div class="block-content block-content-full text-center">
                            <a class="h1 font-w300 text-white" href="javascript:void(0)">Photography</a>
                        </div>
                        <div class="block-content block-content-full text-center">
                            <span class="text-white-op"><em>Updated 3 hours ago</em></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Category -->
        </div>
        <div class="col-sm-6 col-lg-4 js-masonry-item">
            <!-- Article -->
            <div class="block">
                <div class="block-content block-content-full">
                    <a class="font-w600" href="javascript:void(0)"><?php $one->get_name(); ?></a> just posted an article.
                </div>
                <?php $one->get_photo(8, false, 'img-responsive'); ?>
                <div class="block-content block-content-full">
                    <h3 class="h4 push-10">A day in the city</h3>
                    <p class="text-gray-dark">Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum..</p>
                    <a class="btn btn-sm btn-default" href="javascript:void(0)">Read More</a>
                </div>
            </div>
            <!-- END Article -->
        </div>
        <div class="col-sm-6 col-lg-4 js-masonry-item">
            <!-- Add Friend -->
            <div class="bg-image" style="background-image: url('assets/img/photos/photo21.jpg');">
                <div class="bg-black-op">
                    <div class="block block-themed block-transparent">
                        <div class="block-header">
                            <h3 class="block-title text-center">Photographer</h3>
                        </div>
                        <div class="block-content block-content-full text-center">
                            <div class="push">
                                <?php $one->get_avatar(1, false, 96, true); ?>
                            </div>
                            <h3 class="h1 font-w300 text-white"><?php $one->get_name('female'); ?></h3>
                        </div>
                        <div class="block-content block-content-full text-center">
                            <a class="btn btn-sm btn-default" href="javascript:void(0)">
                                <i class="fa fa-fw fa-plus"></i> Add friend
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Add Friend -->
        </div>
        <div class="col-sm-6 col-lg-4 js-masonry-item">
            <!-- Story -->
            <a class="block" href="javascript:void(0)">
                <?php $one->get_photo(23, false, 'img-responsive'); ?>
                <div class="block-content">
                    <div class="push">
                        <em class="pull-right">12 min</em>
                        <span class="text-primary font-w600"><?php $one->get_name(); ?></span> on July 6, 2015
                    </div>
                    <h4 class="push-10">Travel &amp; Work</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida...</p>
                </div>
            </a>
            <!-- END Story -->
        </div>
        <div class="col-sm-6 col-lg-4 js-masonry-item">
            <!-- Weather -->
            <div class="block">
                <div class="bg-image" style="background-image: url('assets/img/photos/photo2.jpg');">
                    <div class="bg-black-op">
                        <div class="block-content block-content-full text-center">
                            <i class="fa fa-4x fa-sun-o text-warning push-30-t"></i>
                            <h3 class="h4 text-uppercase text-white push-30-t push-5">Chania, Crete</h3>
                            <h4 class="h5 text-white-op push-20">Greece</h4>
                        </div>
                    </div>
                </div>
                <div class="block-content block-content-full">
                    <div class="row text-center">
                        <div class="col-xs-4">
                            <div class="h2 font-w300">28&deg;C</div>
                            <div class="h5 text-muted push-5-t">MON</div>
                        </div>
                        <div class="col-xs-4">
                            <div class="h2 font-w300">30&deg;C</div>
                            <div class="h5 text-muted push-5-t">TUE</div>
                        </div>
                        <div class="col-xs-4">
                            <div class="h2 font-w300">32&deg;C</div>
                            <div class="h5 text-muted push-5-t">WED</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Weather -->
        </div>
    </div>
    <!-- END Masonry Layout -->
</div>
<!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>

<!-- Page JS Plugins -->
<script src="<?php echo $one->assets_folder; ?>/js/plugins/masonry/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo $one->assets_folder; ?>/js/plugins/masonry/masonry.pkgd.min.js"></script>

<!-- Page JS Code -->
<script>
    jQuery(function(){
        // Init page helpers (Masonry plugin)
        App.initHelpers('masonry');
    });
</script>

<?php require 'inc/views/template_footer_end.php'; ?>