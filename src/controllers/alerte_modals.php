<?php if(isset($error)){ ?>
    <div class="alert alert-<?= $type; ?>">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <?= $error; ?>
    </div>
<?php } ?>
