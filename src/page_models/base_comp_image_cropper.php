<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<link rel="stylesheet" href="<?php echo $one->assets_folder; ?>/js/plugins/cropperjs/cropper.min.css">

<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>

<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">
                Image Cropper
            </h1>
        </div>
        <div class="col-sm-5 text-right hidden-xs">
            <ol class="breadcrumb push-10-t">
                <li>Components</li>
                <li><a class="link-effect" href="">Image Cropper</a></li>
            </ol>
        </div>
    </div>
</div>
<!-- END Page Header -->

<!-- Page Content -->
<!-- Image Cropper functionality (initialized in js/pages/base_comp_image_cropper.js), for more info and examples you can check out https://fengyuanchen.github.io/cropperjs/ -->
<div class="content">
    <!-- Toolbar -->
    <div class="block push-10">
        <div class="block-content text-center">
            <div class="btn-group push">
                <button class="js-tooltip btn btn-primary" type="button" data-toggle="cropper" data-method="setDragMode" data-option="move" title="Set drag mode to move">
                    <i class="fa fa-arrows"></i>
                </button>
                <button class="js-tooltip btn btn-primary" type="button" data-toggle="cropper" data-method="setDragMode" data-option="crop" title="Set drag mode to crop">
                    <i class="fa fa-crop"></i>
                </button>
            </div>
            <div class="btn-group push">
                <button class="js-tooltip btn btn-primary" type="button" data-toggle="cropper" data-method="zoom" data-option="0.1" title="Zoom In">
                    <i class="fa fa-search-plus"></i>
                </button>
                <button class="js-tooltip btn btn-primary" type="button" data-toggle="cropper" data-method="zoom" data-option="-0.1" title="Zoom Out">
                    <i class="fa fa-search-minus"></i>
                </button>
            </div>
            <div class="btn-group push">
                <button class="js-tooltip btn btn-primary" type="button" data-toggle="cropper" data-method="rotate" data-option="-45" title="Rotate Left">
                    <i class="fa fa-rotate-left"></i>
                </button>
                <button class="js-tooltip btn btn-primary" type="button" data-toggle="cropper" data-method="rotate" data-option="45" title="Rotate Right">
                    <i class="fa fa-rotate-right"></i>
                </button>
            </div>
            <div class="btn-group push">
                <button class="js-tooltip btn btn-primary" type="button" data-toggle="cropper" data-method="scaleX" data-option="-1" title="Flip Horizontal">
                    <i class="fa fa-arrows-h"></i>
                </button>
                <button class="js-tooltip btn btn-primary" type="button" data-toggle="cropper" data-method="scaleY" data-option="-1" title="Flip Vertical">
                    <i class="fa fa-arrows-v"></i>
                </button>
            </div>
            <div class="btn-group push">
                <button class="js-tooltip btn btn-primary" type="button" data-toggle="cropper" data-method="setAspectRatio" data-option="1.7777777777777777" title="Set Aspect Ratio">
                    16:9
                </button>
                <button class="js-tooltip btn btn-primary" type="button" data-toggle="cropper" data-method="setAspectRatio" data-option="1.3333333333333333" title="Set Aspect Ratio">
                    4:3
                </button>
                <button class="js-tooltip btn btn-primary" type="button" data-toggle="cropper" data-method="setAspectRatio" data-option="1" title="Set Aspect Ratio">
                    1:1
                </button>
                <button class="js-tooltip btn btn-primary" type="button" data-toggle="cropper" data-method="setAspectRatio" data-option="0.6666666666666666" title="Set Aspect Ratio">
                    2:3
                </button>
            </div>
            <button class="js-tooltip btn btn-primary push" type="button" data-toggle="cropper" data-method="setAspectRatio" data-option="NaN" title="Set Aspect Ratio">
                Free
            </button>
            <div class="btn-group push">
                <button class="js-tooltip btn btn-primary" type="button" data-toggle="cropper" data-method="clear" title="Clear">
                    <i class="fa fa-times"></i>
                </button>
                <button class="js-tooltip btn btn-primary" type="button" data-toggle="cropper" data-method="crop" title="Crop">
                    <i class="fa fa-check"></i>
                </button>
            </div>
        </div>
    </div>
    <!-- END Toolbar -->

    <!-- Image Cropper -->
    <div class="block">
        <div class="block-content">
            <div class="row items-push">
                <div class="col-lg-6">
                    <h4 class="page-header push-10-t">Cropper</h4>
                    <div>
                        <img id="js-img-cropper" class="img-responsive" src="<?php echo $one->assets_folder; ?>/img/photos/photo30@2x.jpg" alt="photo">
                    </div>
                </div>
                <div class="col-lg-6">
                    <h4 class="page-header push-10-t">Preview</h4>
                    <div class="overflow-hidden push-10">
                        <div class="js-img-cropper-preview center-block overflow-hidden" style="height: 200px;"></div>
                    </div>
                    <div class="overflow-hidden push-10">
                        <div class="js-img-cropper-preview center-block overflow-hidden" style="height: 150px;"></div>
                    </div>
                    <div class="overflow-hidden push-10">
                        <div class="js-img-cropper-preview center-block overflow-hidden" style="height: 100px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Image Cropper -->
</div>
<!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>

<!-- Page JS Plugins -->
<script src="<?php echo $one->assets_folder; ?>/js/plugins/cropperjs/cropper.min.js"></script>
<script src="<?php echo $one->assets_folder; ?>/js/pages/base_comp_image_cropper.js"></script>

<?php require 'inc/views/template_footer_end.php'; ?>