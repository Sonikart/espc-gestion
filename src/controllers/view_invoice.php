<?php
if(isset($_GET['id_project']) && !empty($_GET['id_project'])){
    $verification = $site->bdd->query('SELECT * FROM p_project WHERE id_projet = "'.$site->security($_GET['id_project']).'"');
    if($verification->rowCount() == 1){
        $fetch = $verification->fetch(); // Ont charge les informations du projet
    } else {
        header('Location: project.php');
    }
} else {
    header('Location: project.php');
}
