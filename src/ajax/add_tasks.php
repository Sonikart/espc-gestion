<?php
require '../router/string.php';
if(isset($_SESSION['connect']) && $_SESSION['connect'] == '1'){
    if(!empty($_POST['tasks'])){
        $verification = $site->bdd->query('SELECT * FROM utilisateurs WHERE email = "'.$site->security($_SESSION['email']).'"');
        if($verification->rowCount() == '1'){
            $autorisation = $site->bdd->query('SELECT * FROM p_authorize WHERE email = "'.$site->security($_SESSION['email']).'" AND id_project = "'.$site->security($_POST['slug']).'"');
            if($autorisation->rowCount() == '1'){
                $slug = $_POST['slug'];
                $content = $_POST['tasks'];
                $error  = "Execute script !";
                $type   = 'success';
                $add_tasks = $site->bdd->prepare('INSERT INTO tasks (id_project, author, content) VALUES (:id_project, :author, :content)');
                $add_tasks->execute([
                    'id_project'    => $site->security($_POST['slug']),
                    'author'        => $site->security($_SESSION['email']),
                    'content'       => $site->security($_POST['tasks']),
                ]);
                $query = $site->bdd->query('SELECT * FROM tasks WHERE content = "'.$site->security($_POST['tasks']).'"');
                $fetch = $query->fetch();
                $id = $fetch['id'];
                die(json_encode(array('error' => $error, 'type' => $type, 'content' => $content, 'slug' => $slug, 'id' => $id)));
            } else {
                $error  = "Vous n'avez pas l'autorisation de crée une tache.";
                $type   = 'danger';
            }
        } else {
            $error  = "Cette adresse email n'existe pas dans notre systeme.";
            $type   = 'danger';
        }
    } else {
        $error  = "Le champs tasks est vide.";
        $type   = 'danger';
    }
} else {
    $error  = "Vous devez être connecter pour ajouter une tache sur un projet.";
    $type   = 'danger';
}
die(json_encode(array('error' => $error, 'type' => $type)));
