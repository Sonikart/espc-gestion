<?php
if(isset($_GET['delete_project']) && !empty($_GET['delete_project'])){
    $verification = $site->bdd->query('SELECT * FROM p_project WHERE id_projet = "'.$site->security($_GET['delete_project']).'"');
    if($verification->rowCount() == 1){
        $delete = $site->bdd->query('DELETE FROM p_project WHERE id_projet = "'.$site->security($_GET['delete_project']).'"');
        $delete_authorize = $site->bdd->query('DELETE FROM p_authorize WHERE id_project = "'.$site->security($_GET['delete_project']).'"');
        header('Location: project.php');
    } else {
        header('Location: project.php');
    }
}

