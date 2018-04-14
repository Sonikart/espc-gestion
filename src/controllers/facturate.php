<?php
if(isset($_GET['id_project']) && !empty($_GET['id_project'])){
    $verification_exist = $site->bdd->query('SELECT * FROM p_project WHERE id_projet = "'.$site->security($_GET['id_project']).'"');
    if($verification_exist->rowCount() == 1){
        $verification_exist = $verification_exist->fetch();
        // Controller d'ajout des produits sur la facture
        if(isset($_POST['add_facturate'])){
            if(!empty($_POST['description_facturate']) && !empty($_POST['price_facturate']) && !empty($_POST['time_facturate'])){
                $verification_description = $site->bdd->query('SELECT * FROM p_facturate WHERE id_project = "'.$site->security($_GET['id_project']).'" AND description = "'.$site->security($_POST['description_facturate']).'"');
                if($verification_description->rowCount() == 0){
                    $add_product = $site->bdd->prepare('INSERT INTO p_facturate (id_project, description, quantity, time_build, price, date_create) VALUES (:id_project, :description, :quantity, :time_build, :price, :date_create)');
                    $add_product->execute([
                        'id_project'    => $_GET['id_project'],
                        'description'   => $site->security($_POST['description_facturate']),
                        'quantity'      => '1',
                        'time_build'    => $site->security($_POST['time_facturate']),
                        'price'         => $site->security($_POST['price_facturate']),
                        'date_create'   => time()
                    ]);
                    $update = $site->bdd->query('UPDATE p_project SET price_total = price_total + "'.$site->security($_POST['price_facturate']).'" WHERE id_projet = "'.$site->security($_GET['id_project']).'"');
                    $update = $site->bdd->query('UPDATE p_project SET time_total = time_total + "'.$site->security($_POST['time_facturate']).'" WHERE id_projet = "'.$site->security($_GET['id_project']).'"');
                    header('Location: facturate.php?id_project='.$_GET['id_project']);
                } else {
                    $error  = "Attention un produit est similaire a la description indiqué.";
                    $type   = 'danger';
                }
            } else {
                $error  = "Veuillez remplir tous les champs ajouter un produit.";
                $type   = 'danger';
            }
        }
        if(isset($_POST['add_reduction'])){
            if(!empty($_POST['reduction_facturate'])){
                if(preg_match('#^[0-9]{2}$#', $_POST['reduction_facturate'])){
                    $update = $site->bdd->query('UPDATE p_project SET reduction = "'.$site->security($_POST['reduction_facturate']).'" WHERE id_projet = "'.$site->security($_GET['id_project']).'"');
                    header('Location: facturate.php?id_project='.$site->security($_GET['id_project']));
                } else {
                    $error  = "L'application ne permet pas de crée un avoir au dela de 99%";
                    $type   = 'danger';
                }
            } else {
                $update = $site->bdd->query('UPDATE p_project SET reduction = 0 WHERE id_projet = "'.$site->security($_GET['id_project']).'"');
                header('Location: facturate.php?id_project='.$site->security($_GET['id_project']));
            }
        }
        $data_p = $site->bdd->query('SELECT * FROM p_project WHERE id_projet = "'.$site->security($_GET['id_project']).'"');
        $data_p = $data_p->fetch();
    } else {
        header('Location: index.php');
    }
}
