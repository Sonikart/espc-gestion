<div class="modal fade" id="modal-slideleft" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-slideleft">
        <div class="modal-content">
            <div class="block block-themed block-transparent remove-margin-b">
                <div class="block-header bg-primary-dark">
                    <ul class="block-options">
                        <li>
                            <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Bloc note Intelligent</h3>
                </div>
                <div class="block-content">
                    <form id="description_project">
                        <div class="form-group">
                            <?php
                                $content = $data_p['description'];
                                $content = str_replace("<br />","", $content);
                            ?>
                            <textarea name="update_description" class="form-control" rows="15"><?= $content; ?></textarea>
                            <input type="hidden" value="<?= $_GET['view']; ?>" name="slug">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit"><i class="fa fa-check"></i> Mettre a jour</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" type="button" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>
