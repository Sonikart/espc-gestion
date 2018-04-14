<?php
if(isset($_GET['view']) && !empty($_GET['view'])){
    $verif_exist = $site->bdd->query('SELECT * FROM p_project WHERE id_projet = "'.$site->security($_GET['view']).'"');
    if($verif_exist->rowCount() == 1){
        if($data__info['access'] >= '8'){
            $data_p = $verif_exist->fetch();
            // Validation du projet en 1 etape securisé.
            if(isset($_GET['validate']) && !empty($_GET['validate'])){
                $verification_id = $site->bdd->query('SELECT * FROM p_project WHERE id_projet = "'.$site->security($_GET['validate']).'"');
                if($verification_id->rowCount() == 1){
                    $update = $site->bdd->query('UPDATE p_project SET etat = 1 WHERE id_projet = "'.$site->security($_GET['validate']).'"');
                    header('Location: view_project.php?view='.$site->security($_GET['view']));
                } else {
                    header('Location: view_project.php?view='.$site->security($_GET['view']));
                }
            }
            // End Validation du projet en 1 etape securisé.
            // Annulation du projet
            if(isset($_GET['anulate'])){
                $anulate = $site->bdd->query('UPDATE p_project SET etat = 9 WHERE id_projet = "'.$site->security($_GET['view']).'"');
                header('Location: view_project.php?view='.$site->security($_GET['view']));
            }
            // End Annulation du projet
            // Ajout d'une tasks terminé : submit
            if(isset($_GET['submit'])){
                if(!empty($_GET['submit'])){
                    $check = $site->bdd->query('SELECT * FROM tasks WHERE id = "'.$site->security($_GET['submit']).'" AND etat = 0');
                    if($check->rowCount() == 1){
                        $update = $site->bdd->query('UPDATE tasks SET etat = 1 WHERE id = "'.$site->security($_GET['submit']).'"');
                        header('Location: view_project.php?view='.$_GET['view']);
                    } else {
                        header('Location: view_project.php?view='.$_GET['view']);
                    }
                } else {
                    header('Location: view_project.php?view='.$_GET['view']);
                }
            }
            // End tasks terminé : submit
        } else {
            $verification_authorize = $site->bdd->query('SELECT * FROM p_authorize WHERE email = "'.$site->security($_SESSION['email']).'"');
            if($verification_authorize->rowCount() == 1){
                $data_p = $verif_exist->fetch();
                // Validation du projet en 1 etape securisé.
                if(isset($_GET['validate']) && !empty($_GET['validate'])){
                    $verification_id = $site->bdd->query('SELECT * FROM p_project WHERE id_projet = "'.$site->security($_GET['validate']).'"');
                    if($verification_id->rowCount() == 1){
                        $update = $site->bdd->query('UPDATE p_project SET etat = 1 WHERE id_projet = "'.$site->security($_GET['validate']).'"');
                        header('Location: view_project.php?view='.$site->security($_GET['view']));
                    } else {
                        header('Location: view_project.php?view='.$site->security($_GET['view']));
                    }
                }
                // End Validation du projet en 1 etape securisé.
                // Annulation du projet
                if(isset($_GET['anulate'])){
                    $anulate = $site->bdd->query('UPDATE p_project SET etat = 9 WHERE id_projet = "'.$site->security($_GET['view']).'"');
                    header('Location: view_project.php?view='.$site->security($_GET['view']));
                }
                // End Annulation du projet
                // Ajout d'une tasks terminé : submit
                if(isset($_GET['submit'])){
                    if(!empty($_GET['submit'])){
                        $check = $site->bdd->query('SELECT * FROM tasks WHERE id = "'.$site->security($_GET['submit']).'" AND etat = 0');
                        if($check->rowCount() == 1){
                            $update = $site->bdd->query('UPDATE tasks SET etat = 1 WHERE id = "'.$site->security($_GET['submit']).'"');
                            header('Location: view_project.php?view='.$_GET['view']);
                        } else {
                            header('Location: view_project.php?view='.$_GET['view']);
                        }
                    } else {
                        header('Location: view_project.php?view='.$_GET['view']);
                    }
                }
                // End tasks terminé : submit
            } else {
                header('Location: project.php');
            }
        }
    } else {
        header('Location: project.php');
    }
} else {
    header('Location: project.php');
}
