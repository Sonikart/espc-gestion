<div class="modal fade" id="modal-product" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-top">
        <div class="modal-content">
            <div class="block block-themed block-transparent remove-margin-b">
                <div class="block-header bg-primary-dark">
                    <ul class="block-options">
                        <li>
                            <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Liste des tache facturé</h3>
                </div>
                <div class="block-content">
                    <table class="table table-condensed">
                        <thead>
                        <tr>
                            <th>Description</th>
                            <th class="hidden-xs" style="width: 15%;">Temps</th>
                            <th class="hidden-xs" style="width: 15%;">Prix</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            $list_facturation = $site->bdd->query('SELECT * FROM p_facturate WHERE id_project = "'.$site->security($_GET['view']).'"');
                            $list_facturation = $list_facturation->fetchAll();
                            foreach($list_facturation as $data){
                        ?>
                        <tr>
                            <td><?= $data['description'] ?></td>
                            <td class="hidden-xs">
                                <b><?= $data['time_build'] ?>h</b>
                            </td>
                            <td class="hidden-xs">
                               <b><?= $data['price'] ?> €</b>
                            </td>
                        </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                    <hr>
                    <div class="form-group">
                        <b>Email du Client:</b> <?= $data_p['client']; ?><br>
                        <b>Prix total:</b> <?= $data_p['price_total']; ?><br>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-sm btn-danger" type="button" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>
