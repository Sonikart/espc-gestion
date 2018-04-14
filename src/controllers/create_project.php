<?php
if(isset($_POST['create_project'])){
    if(!empty($_POST['create_title']) && !empty($_POST['create_lien']) && !empty($_POST['create_email']) && !empty($_POST['create_description']) && !empty($_POST['create_color']) && !empty($_POST['create_date_livraison'])){
        $id_project = '';
        for($i = 0; $i < 8; $i++){
            $id_project .= rand(0,9);
        }
        $verification = $site->bdd->query('SELECT * FROM p_project WHERE titre = "'.$site->security($_POST['create_title']).'"');
        if($verification->rowCount() == 0){
            $create = $site->bdd->prepare('INSERT INTO p_project (id_projet, createur, titre, lien, client, description, date_commande, date_livraison, color, paiement, tasks, etat, archive, price_total, time_total, reduction) VALUES (:id_project, :createur, :titre, :lien, :client, :description, :date_commande, :date_livraison, :color, :paiement, :tasks, :etat, :archive, :price_total, :time_total, :reduction)');
            $create->execute([
                'id_project'        => $id_project,
                'createur'          => $_SESSION['email'],
                'titre'             => $site->security($_POST['create_title']),
                'lien'              => $site->security($_POST['create_lien']),
                'client'            => $site->security($_POST['create_email']),
                'description'       => nl2br($_POST['create_description']),
                'date_commande'     => time(),
                'date_livraison'    => $site->security($_POST['create_date_livraison']),
                'color'             => $site->security($_POST['create_color']),
                'paiement'          => 1,
                'tasks'             => 0,
                'etat'              => 9,
                'archive'           => 0,
                'price_total'       => 0,
                'time_total'        => 0,
                'reduction'         => 0
            ]);
            // Creation de l'autorisation
            $authorize = $site->bdd->prepare('INSERT INTO p_authorize (id_project, email) VALUES (:id_project, :email)');
            $authorize->execute([
                'id_project'    => $id_project,
                'email'         => $site->security($_SESSION['email'])
            ]);
            // Generation du compte client
            $id_client = '';
            for($i = 0; $i < 8; $i ++){
                $id_client .= rand(0,9);
            }
            $add_client = $site->bdd->prepare('INSERT INTO client (id_client, email) VALUES (:id_client, :email)');
            $add_client->execute([
                'id_client' => $id_client,
                'email'     => $_POST['create_email'],
            ]);
            header('Location: view_project.php?view='.$id_project);
        } else {
            $error  = "Un projet comporte deja ce titre.";
            $type   = 'danger';
        }
    } else {
        $error  = "Veuillez remplir tous les champs.";
        $type   = 'danger';
    }
}
